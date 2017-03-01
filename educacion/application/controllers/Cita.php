<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Resumen extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->database();

      $this->load->model('Censo/Censo');
      $this->load->model('Censo/Censo_grado');
      $this->load->model('Censo/Puntaje_censo');
      $this->load->model('Censo/Nivel_Ingreso_Censo');
      $this->load->model('Censo/Estatura');
      $this->load->model('Censo/Peso');
      $this->load->model('Censo/Talla_calzados');
      $this->load->model('Censo/Talla_camisas');
      $this->load->model('Censo/Talla_pantalones');
      $this->load->model('Escuela');
      $this->load->model('Estado');
      $this->load->model('Municipio');
      $this->load->model('Sectores_Chacao');

      /*cache control*/
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
    }

    public function index()
    {
      $id_censo = $_POST["id_censo"];

      $censo = Censo::find($id_censo);

      $escuela = Escuela::find($this->config->item('id_school'));

      //direccion alumno
      $estado_alumno = Estado::find($censo->EstadoDondeResideElAlumno);
      $municipio_alumno = Municipio::find($censo->MunicipioDondeResideElAlumno);
      $sector_chacao_alumno = (is_numeric($censo->SectorDondeResideElAlumno) ? $censo->SectorDondeResideElAlumno : 0 );
      $sectores_alumno = Sectores_Chacao::find($sector_chacao_alumno);

      //direccion representante
      $estado_representante = Estado::find($censo->EstadoDondeResideElRepresentante);
      $municipio_representante = Municipio::find($censo->MunicipioDondeResideElRepresentante);
      $sector_chacao_general = (is_numeric($censo->SectorDondeResideElRepresentante) ? $censo->SectorDondeResideElRepresentante : 0 );
      $sectores_general = Sectores_Chacao::find($sector_chacao_general);

      // Se carga la libreria fpdf
      $this->load->library('header_censo/pdf');
      // Cargo libreria de envio de correos
      $this->load->library('My_PHPMailer');

      $page_data['page_name']  = 'resumen_censo';
      $page_data['page_title'] = "Resumen de Censo";

      //Datos solicitud
      $fecha_solicitud = $censo->FechaSolicitud; //EXTRAER FECHA
      $hora_solicitud = $censo->FechaSolicitud; //EXTRAER HORA
      $numero_control = $id_censo;

      if ($censo->ParentescoConElAlumno == 'MADRE'){
            $sexo_representante = 'FEMENINO';
      }else if ($censo->ParentescoConElAlumno == 'PADRE'){
            $sexo_representante = 'MASCULINO';
      }else{
            if($censo->OtroParentescoConElAlumno == 'ABUELA'){
                  $sexo_representante = 'FEMENINO';
            }else if($censo->OtroParentescoConElAlumno == 'ABUELO'){
                  $sexo_representante = 'MASCULINO';
            }else if($censo->OtroParentescoConElAlumno == 'TIA'){
                  $sexo_representante = 'FEMENINO';
            }else if($censo->OtroParentescoConElAlumno == 'TIO'){
                  $sexo_representante = 'MASCULINO';
            }else if($censo->OtroParentescoConElAlumno == 'MADRINA'){
                  $sexo_representante = 'FEMENINO';
            }else if($censo->OtroParentescoConElAlumno == 'PADRINO'){
                  $sexo_representante = 'MASCULINO';
            }else if($censo->OtroParentescoConElAlumno == 'HERMANA'){
                  $sexo_representante = 'FEMENINO';
            }else{
                  $sexo_representante = 'MASCULINO';
            }
      }
      //Datos generales
      $residente = ($censo->Residente == 1 ? 'SI' : 'NO');
      $cupos_solicitar = $censo->CuposASolicitar;
      $grado_cursar = $censo->GradoAcursar;
      $estudia_actualmente = ($censo->ElAlumnoEstudiaActualmente == 1 ? 'SI' : 'NO');
      $estudio_anterior = ($censo->ElAlumnoCursoElAnterior == 1 ? 'SI' : 'NO');
      $repite_grado = ($censo->ElAlumnoRepiteGrado == 1 ? 'SI' : 'NO');
      $unidad_procedencia = $censo->UnidadEducativaDeProcedencia;
      $ano_escolar = $escuela->periodo_escolar_actual;
      $estado_general = Estado::find($censo->EstadoDondeResideElRepresentante);
      $municipio_general = Municipio::find($censo->MunicipioDondeResideElRepresentante);
      $sector_general = ($sector_chacao_general == 0 ? $censo->UrbanizacionOSectorDondeResideElRepresentante : $sectores_general->nombre);

      $unidad_preferencia = 'UEM ANDRES BELLO';
      $razones_seleccionadas = '';
      if($censo->RazonSocioeco == 1){
            $razones_seleccionadas = 'Socioeconomicas ';
      }
      if($censo->RazonCambioResi == 1){
            $razones_seleccionadas = $razones_seleccionadas.'Cambio de Residencia ';
      }
      if($censo->RazonNoAdapta == 1){
            $razones_seleccionadas = $razones_seleccionadas.'No adaptación escolar ';
      }
      if($censo->RazonOtra == 1){
            $razones_seleccionadas = $razones_seleccionadas.'Otras razones ';
      }

      $razones_solicitud = $razones_seleccionadas;

      //Datos alumno
      $nombre_apellido_alumno = $censo->PrimerNombreDelAlumno.' '.$censo->SegundoNombreDelAlumno.' '.$censo->PrimerApellidoDelAlumno.' '.$censo->SegundoApellidoDelAlumno;
      $cedula_alumno = $censo->CedulaDeIdentidadDelAlumnoOCedulaEscolar;
      $fecha_nacimiento_alumno = $censo->FechaDeNacimientoDelAlumno;
      $sexo_alumno = $censo->SexoDelAlumno;
      $nacionalidad_alumno = $censo->NacionalidadDelAlumno;
      $estado_alumno = ($censo->Residente == 1 ? 'MIRANDA' : $estado_alumno->nombre);
      $municipio_alumno = ($censo->Residente == 1 ? 'CHACAO' : $municipio_alumno->nombre);
      $parroquia_alumno = ($censo->Residente == 1 ? 'CHACAO' : '');
      $sector_alumno = ($sector_chacao_alumno == 0 ? $censo->UrbanizacionOSectorDondeResideElAlumno : $sectores_alumno->nombre);

      //Datos representante
      $nombre_apellido_representante = $censo->PrimerNombreDelRepresentante.' '.$censo->SegundoNombreDelRepresentante.' '.$censo->PrimerApellidoDelRepresentante.' '.$censo->SegundoApellidoDelRepresentante;
      $cedula_representante = $censo->CedulaDeIdentidadDelRepresentante;
      $fecha_nacimiento_representante = $censo->FechaDeNacimientoDelRepresentante;
      $nacionalidad_representante = $censo->NacionalidadDelRepresentante;
      $estado_representante = ($censo->Residente == 1 ? 'MIRANDA' : $estado_representante->nombre);
      $municipio_representante = ($censo->Residente == 1 ? 'CHACAO' : $municipio_representante->nombre);
      $parroquia_representante = ($censo->Residente == 1 ? 'CHACAO' : '');
      $sector_representante = $censo->UrbanizacionOSectorDondeResideElRepresentante;
      $direccion_representante = $censo->CalleOAvenidaDondeResideElRepresentante;
      $movil_representante = $censo->TelefonoCelularDelRepresentante;
      $fijo_representante = $censo->TelefonoDeHabitacionDelRepresentante;
      $email_representante = $censo->CorreoElectronicoDelRepresentante;
      $trabaja_municipio = ($censo->TrabajaDentroChacao == 1 ? 'SI' : 'NO');
      $profesion_representante = $censo->ProfesionUOcupacionDelRepresentante;
      $ingreso_mensual_representante = $censo->IngresoMensualDelRepresentante;
      $jornada_laboral_representante = $censo->TipoDeJornadaLaboralDelRepresentante;
      $diversidad_representante = ($censo->ElRepresentanteTieneAlgunaDiversidadFuncional == 1 ? 'SI' : 'NO');
      $hijos_uem = ($censo->ElRepresentanteTieneOtrosHijosEstudiandoChacao == 1 ? 'SI' : 'NO');
      $grados_hijos = $censo->GradosHijosEstudianGuanche.' '.$censo->GradosHijosEstudianAndresBello.' '.$censo->GradosHijosEstudianCarlosSoublette;

      //Datos socioeconomicos
      $alumno_becado = $censo->ElAlumnoEstaBecado;
      $traslado_plantel = $censo->MedioDeTrasladoAlPlantel;
      $retira_solo = ($censo->ElAlumnoSeRetiraSoloDelPlantel == 1 ? 'SI' : 'NO');
      $miembros_familia = $censo->MiembrosFamilia;
      $numero_hermanos = $censo->NumeroDeHermanos;
      $hermanos_uem = $censo->HermanosEstudianEnUnidadesEducativasMunicipales;
      $datos_vivienda = $censo->DatosDeLaVivienda;

      //Emergencia
      $contacto_emergencia = $censo->NombreYApellidoDelContactoDeEmergencia1;
      $movil_contacto_emergencia = $censo->TelefonoDelContactoDeEmergencia1;
      $fijo_contacto_emergencia = $censo->TelefonoDelContactoDeEmergencia1;

      $codigounico = $id_censo + $censo->CedulaDeIdentidadDelRepresentante + $censo->CedulaDeIdentidadDelAlumnoOCedulaEscolar;
      $codigounico = $codigounico * 25;

      //Creamos el pdf
      $this->pdf = new Pdf('P','mm','Letter');
      // Agregamos una página

      $this->pdf->AddPage();

      $this->pdf->Ln(5);
      $this->pdf->SetFont('Arial', 'B', 12);

      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','CERTIFICADO ELECTRÓNICO DE CITA'),0,50,'C');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','CENSO Y REGISTRO ESCOLAR'),0,50,'C');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','AÑO ESCOLAR 2016 - 2017'),0,50,'C');

      $this->pdf->Ln(5);
      $this->pdf->SetFont('Arial', 'B', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Estimado Representante:'),0,50,'L');
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252',$nombre_apellido_representante),0,50,'L');
      $this->pdf->Ln(2);

      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Reciba un cordial saludo, para continuar con el proceso de solicitud de cupo para el año escolar 2016-2017, debe seguir los siguientes lineamientos.'),0,50,'L');

      $this->pdf->SetFont('Arial', 'B', 8);
      $this->pdf->Ln(5);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','REQUISITOS:'),0,50,'L');
      $this->pdf->Ln(2);
      $this->pdf->Cell(10);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','•  Ser residente del Municipio Chacao.'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','•  Si la solicitud de ingreso es para Educación Inicial se requiere haber cumplido para el 15 de Septiembre de 2016: '),0,50,'L');

      $this->pdf->Cell(12);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','o  1° Grupo: Tener cumplidos entre 3 años a 3 años  y 11meses de edad.'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','o  2° Grupo: Tener cumplidos entre 4 años a  4 años  y  11 meses de edad. '),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','o  3° Grupo: Tener cumplidos entre 5 años a  5 años y  11meses de edad.'),0,50,'L');

      $this->pdf->Cell(-12);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','•  Si la solicitud de ingreso es para Primer grado de Educación Primaria se requiere tener la boleta de promoción de Educación Inicial y/o haber'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','cumplido 6 años de edad al 31 de diciembre del 2016. La prioridad en la asignación del cupo corresponde a los residentes del Municipio Chacao,'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','si no es residente del Municipio Chacao,deberá consignar su Carta de Trabajo con membrete de la Compañía o Institución. '),0,50,'L');

      $this->pdf->Cell(-10);
      $this->pdf->SetFont('Arial', 'B', 8);
      $this->pdf->Ln(5);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','PROCESO DE ENTREVISTA'),0,50,'L');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Usted debe asistir conjuntamente con su representado (a)  el día 25/25/2016, a las 8:30 am a la  UEM Andrés Bello, ubicada en la Av. Mohedano, cruce'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','con calle Páez, frente a la Plaza Bolívar Chacao. En esta entrevista será atendido (a) por el trabajador Social Odalys Parababides. Agradecemos'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','puntual asistencia.'),0,50,'L');

      $this->pdf->SetFont('Arial', 'B', 8);
      $this->pdf->Ln(5);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','RECAUDOS A CONSIGNAR:'),0,50,'L');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','El representante legal del alumno (a) al momento de la entrevista deberá consignar los documentos (original y copia), que se mencionan a continuación: '),0,50,'L');

      $this->pdf->Cell(10);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','1. Resumen del Censo y Registro Escolar, emitida por el sistema, firmada por el representante legal.'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','2. Carta de residencia vigente,  emitida por el Registro del CNE (vía web). Del representante legal del alumno (a).'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Enlace: http://www.cne.gob.ve/web/registro_civil/constancia_residencia2.php? '),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','3. Partida de Nacimiento del niño (a).'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','4. Foto del alumno (a) y representante legal tamaño carnet.'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','5. Copia de la Cédula de identidad de ambos padres o del representante legal.'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','6. Constancia de vacunas y Constancia de niño sano.'),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','7. Original y fotocopia del boletín del último lapso y la Boleta de Promoción (Solo 1er grado).'),0,50,'L');

      $this->pdf->Ln(15);
      $this->pdf->SetFont('Arial', 'B', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Esta solicitud NO GARANTIZA la asignación del cupo, esto dependerá de la disponibilidad  que exista para el momento en la escuela.'),0,50,'C');

      $this->pdf->Code128(15,260,'CENSO_ESCOLAR'.$codigounico,125,8);

      $filename = 'Certificado_Electronico_'.$id_censo.'.pdf';
      $pdfoutputfile = 'tmp_dir/'.$filename;
      $pdfdoc = $this->pdf->Output($pdfoutputfile, 'F');

      $email_from = "contactoeducacion@chacao.gob.ve"; // Who the email is from
      $email_subject = "Resumen de Censo y Registro Escolar Alcaldía de Chacao"; // The Subject of the email
      $email_to = $email_representante;

      // set email message......................
      $email_message = "<html><body>Estimado Representante  <b>".$nombre_apellido_representante."</b> <br> <br>";
      $email_message .= "Reciba un cordial saludo en nombre del Equipo de Educaci&oacute;n Chacao, a trav&eacute;s de la presente hacemos constar que hemos recibido su solicitud de cupo para la <b>UEM Andr&eacute;s Bello</b> de forma digital.<br> <br>";
      $email_message .= "En las pr&oacute;ximas horas le estaremos informando la fecha de la entrevista, agradecemos asistir puntualmente con su representado (a). Igualmente le informamos que adjunto, encontrar&aacute; certificado electr&oacute;nico el cual deber&aacute; descargarlo e imprimirlo y consignar el d&iacute;a de la entrevista.<br> <br>";
      $email_message .= "Recuerde que estamos para servir!</body></html>";

      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->SMTPDebug = 0;
      $mail->Host = "mail.chacao.gob.ve";
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->Username = "contactoeducacion"; //si no funciona quitar el @chacao.gob.ve
      $mail->Password = "2014chacao";
      $mail->IsHTML(true);
      $mail->setFrom($email_from, 'Contacto Educacion');
      $mail->addAddress($email_representante, $nombre_apellido_representante);
      $mail->Subject = $email_subject;
      $mail->Body = $email_message;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

      $separator = md5(time());

      $mail->AddAttachment($pdfoutputfile, $filename);

      if (!$mail->send()) {
            $message_die = "Ha ocurrido un error inesperado, Mailer Error: " . $mail->ErrorInfo;
            die($message_die);
      } else {
            $message = "¡El certificado electronico se ha enviado con éxito!";
            echo $message;
      }

    }
  }