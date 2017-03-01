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
      $nivel_ingreso_representante = Nivel_Ingreso_Censo::find($censo->IngresoMensualDelRepresentante);

      // Se carga la libreria fpdf
      if($censo->UniDePrefAndres == 1){
        $this->load->library('andres_bello/pdf');
        $unidad_preferencia = 'UEM ANDRÉS BELLO';
        $direccion_footer = "AV. MOHEDANO CRUCE CON CALLE LA PAZ";
        $correo_footer = "uemabello@gmail.com";

      }
      if($censo->UniDePrefJuanDio == 1){
        $this->load->library('guanche/pdf');
        $unidad_preferencia = 'UEM JUAN DE DIOS GUANCHE';
        $direccion_footer = "Av. Pedro Matias Reyes Salazar, cruce con Calle Los Mangos, Sector El Pedregal - La Castellana.";
        $correo_footer = "uemguanche@gmail.com";
      }
      if($censo->UniDePrefCarlos == 1){
        $this->load->library('carlos_soublette/pdf');
        $unidad_preferencia = 'UEM CARLOS SOUBLETTE';
        $direccion_footer = "Av. Ávila con Calle Santa Ana, Urbanización Bello Campo.";
        $correo_footer = "uemsoublette@gmail.com";
      }

      // Cargo libreria de envio de correos
      $this->load->library('My_PHPMailer');

      $page_data['page_name']  = 'resumen_censo';
      $page_data['page_title'] = "Resumen de Censo";

      //Datos solicitud
      $fecha_solicitud = date_format(date_create($censo->FechaSolicitud), 'd/m/Y');
      $hora_solicitud = date_format(date_create($censo->FechaSolicitud), 'g:i A');
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
      $grado_cursar = Censo_grado::find($censo->GradoACursar);
      $estudia_actualmente = ($censo->ElAlumnoEstudiaActualmente == 1 ? 'SI' : 'NO');
      $estudio_anterior = ($censo->ElAlumnoCursoElAnterior == 1 ? 'SI' : 'NO');
      $repite_grado = ($censo->ElAlumnoRepiteGrado == 1 ? 'SI' : 'NO');
      $unidad_procedencia = $censo->UnidadEducativaDeProcedencia;
      $ano_escolar = $escuela->periodo_escolar_actual;
      $estado_general = Estado::find($censo->EstadoDondeResideElRepresentante);
      $municipio_general = Municipio::find($censo->MunicipioDondeResideElRepresentante);
      $sector_general = ($sector_chacao_general == 0 ? $censo->UrbanizacionOSectorDondeResideElRepresentante : $sectores_general->nombre);

      
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
      $fecha_nacimiento_alumno = date_format(date_create($censo->FechaDeNacimientoDelAlumno), 'd/m/Y');
      $sexo_alumno = $censo->SexoDelAlumno;
      $nacionalidad_alumno = $censo->NacionalidadDelAlumno;
      $estado_alumno = ($censo->Residente == 1 ? 'MIRANDA' : $estado_alumno->nombre);
      $municipio_alumno = ($censo->Residente == 1 ? 'CHACAO' : $municipio_alumno->nombre);
      $parroquia_alumno = ($censo->Residente == 1 ? 'CHACAO' : '');
      $sector_alumno = ($censo->Residente == 1 ? $sectores_alumno->nombre : $censo->UrbanizacionOSectorDondeResideElAlumno);

      //Datos representante
      $nombre_apellido_representante = $censo->PrimerNombreDelRepresentante.' '.$censo->SegundoNombreDelRepresentante.' '.$censo->PrimerApellidoDelRepresentante.' '.$censo->SegundoApellidoDelRepresentante;
      $cedula_representante = $censo->CedulaDeIdentidadDelRepresentante;
      $fecha_nacimiento_representante = date_format(date_create($censo->FechaDeNacimientoDelRepresentante), 'd/m/Y');
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
      $ingreso_mensual_representante = $nivel_ingreso_representante->valor;
      $jornada_laboral_representante = $censo->TipoDeJornadaLaboralDelRepresentante;
      $diversidad_representante = ($censo->ElRepresentanteTieneAlgunaDiversidadFuncional == 1 ? 'SI' : 'NO');
      $hijos_uem = ($censo->ElRepresentanteTieneOtrosHijosEstudiandoChacao == 1 ? 'SI' : 'NO');
      $grados_hijos = $censo->GradosHijosEstudianGuanche.' '.$censo->GradosHijosEstudianAndresBello.' '.$censo->GradosHijosEstudianCarlosSoublette;

      //Datos socioeconomicos
      $alumno_becado = ($censo->ElAlumnoEstaBecado == 1 ? 'SI' : 'NO');
      $traslado_plantel = $censo->MedioDeTrasladoAlPlantel;
      $retira_solo = ($censo->ElAlumnoSeRetiraSoloDelPlantel == 1 ? 'SI' : 'NO');
      $miembros_familia = $censo->MiembrosFamilia;
      $numero_hermanos = ($censo->NumeroDeHermanos == '' ? '0' : $censo->NumeroDeHermanos);
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

      $this->pdf->SetTitle("Resumen de Censo Escolar");
      $this->pdf->SetLeftMargin(15);
      $this->pdf->SetRightMargin(15);

      $this->pdf->Ln(5);
      $this->pdf->SetFont('Arial', 'B', 12);

      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','CERTIFICADO ELECTRÓNICO'),0,50,'C');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','CENSO Y REGISTRO ESCOLAR  '),0,50,'C');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','AÑO ESCOLAR 2016 - 2017'),0,50,'C');

      $this->pdf->Ln(5);
      $this->pdf->SetFont('Arial', '', 8);

      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Fecha de la solicitud: '.$fecha_solicitud),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Hora: '.$hora_solicitud),0,50,'L');
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Nº Control: '.$numero_control),0,50,'L');

      $this->pdf->Ln(5);
      $this->pdf->SetFont('Arial', 'BU', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','INFORMACION GENERAL'),0,50,'C');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(10);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Residente del Municipio:     '.$residente.
            '          Cupos a solicitar:     '.$cupos_solicitar.'          Grado a cursar:     '.$grado_cursar->grado.
            '          El alumno estudia actualmente:      '.$estudia_actualmente),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','El alumno curso el año anterior:     '.$estudio_anterior.
            '          El alumno repite grado:     '.$repite_grado.'          El alumno estudia actualmente:     '.$repite_grado),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Unidad educativa de procedencia:     '.$unidad_procedencia.
            '          Estado:     '.$estado_general->nombre.'          Municipio:     '.$municipio_general->nombre),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Parroquia:     '.$sector_general),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Unidad educativa de su preferencia:     '.$unidad_preferencia),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Razones de su solicitud: '.$razones_solicitud),0,50,'L');

      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', 'BU', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','DATOS DEL ALUMNO (A)'),0,50,'C');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(10);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nombres y Apellidos:     '.$nombre_apellido_alumno),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cedula de Identidad:     '.$cedula_alumno.
            '          Fecha de nacimiento:     '.$fecha_nacimiento_alumno.'          Genero:     '.$sexo_alumno
            ),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nacionalidad: '.$nacionalidad_alumno.
            '          Estado:     '.$estado_alumno.'          Municipio:     '.$municipio_alumno),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Parroquia:     '.$sector_alumno),0,50,'L');

      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', 'BU', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','DATOS DEL REPRESENTANTE'),0,50,'C');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(10);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nombres y Apellidos '.$nombre_apellido_representante),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cedula de Identidad:     '.$cedula_representante.
            '          Fecha de nacimiento:     '.$fecha_nacimiento_representante.'          Genero:     '.$sexo_representante
            ),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nacionalidad: '.$nacionalidad_representante.
            '          Estado:     '.$estado_representante.'          Municipio:     '.$municipio_representante),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Parroquia:     '.$parroquia_representante),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nº Teléfono fijo:     '.$fijo_representante.
            '          Nº Teléfono móvil:     '.$movil_representante.'          Email:     '.$email_representante),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Trabaja dentro del municipio:     '.$trabaja_municipio.
            '          Profesión:     '.$profesion_representante),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Ingreso mensual:     '.$ingreso_mensual_representante.
            '          Jornada laboral:     '.str_replace('-', ' ', $jornada_laboral_representante).'          Diversidad funcional:     '.$diversidad_representante),0,50,'L');

      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Hijos en otra escuela municipal:     '.$hijos_uem.'          Grado:     '.$grados_hijos),0,50,'L');

      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', 'BU', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','DATOS SOCIO ECONOMICOS'),0,50,'C');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(10);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','El alumno esta becado:     '.$alumno_becado.
            '         Medio de traslado al plantel:     '.$traslado_plantel.'         El alumno se retira solo del plantel:     '.$retira_solo),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Miembros del grupo familiar (que viven en la misma casa):     '.$miembros_familia),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Número de hermanos:     '.$numero_hermanos.
            '         Hermanos estudian en Unidades Educativas Municipales:     '.$hermanos_uem),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Datos de la vivienda:     '.str_replace('-', ' ', $datos_vivienda)),0,50,'L');

      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', 'BU', 8);
      $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','DATOS EN CASO DE EMERGENCIA'),0,50,'C');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);
      $this->pdf->Cell(10);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nombre y apellido del contacto de emergencia '.$contacto_emergencia),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nº de teléfono (fijo y movil) '.$fijo_contacto_emergencia.' - '.$movil_contacto_emergencia),0,50,'L');

      $this->pdf->Ln(10);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','__________________________'),0,50,'R');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','FIRMA DEL REPRESENTANTE'),0,50,'R');

      $this->pdf->Ln(1);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$direccion_footer),0,50,'L');
      $this->pdf->SetFont('Arial', 'B', 8);
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$correo_footer),0,50,'L');
      $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','www.chacao.gob.ve'),0,50,'L');

      $fileatt_name = "ResumenCensoEscolar.pdf";
      //$this->pdf->Output($fileatt_name, 'I');
      $this->pdf->Ln(2);
      $this->pdf->SetFont('Arial', '', 8);

      $this->pdf->Code128(15,260,'CENSO_ESCOLAR'.$codigounico,125,8);

      $filename = 'Certificado_Electronico_'.$id_censo.'.pdf';
      $pdfoutputfile = 'tmp_dir/'.$filename;
      $pdfdoc = $this->pdf->Output($pdfoutputfile, 'F');

      $email_from = "contactoeducacion@chacao.gob.ve"; // Who the email is from
      $email_subject = "Resumen de Censo y Registro Escolar Alcaldía de Chacao"; // The Subject of the email
      $email_to = $email_representante;

      // set email message......................
      $email_message = "<html><body>Estimado Representante  <b>".$nombre_apellido_representante."</b> <br> <br>";
      $email_message .= "Reciba un cordial saludo en nombre del Equipo de Educaci&oacute;n Chacao, a trav&eacute;s de la presente hacemos constar que hemos recibido su solicitud de cupo para la <b> ".$unidad_preferencia."</b> de forma digital.<br> <br>";
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
      $mail->AddCC('censoyregistroeducacionchacao@gmail.com', 'Direccion Educacion');
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