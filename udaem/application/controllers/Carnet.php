<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Carnet extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->database();

        $this->load->model('Configuracion');
        $this->load->model('Persona');
        $this->load->model('Estudiante');
        $this->load->model('Seccion');
        $this->load->model('Grado');
        $this->load->model('Recaudo');
        $this->load->model('Recaudo_grado');
        $this->load->model('Recaudo_estudiante');
        $this->load->model('Censo/Censo');

        $this->load->model('Estado');
        $this->load->model('Municipio');
        $this->load->model('Censo/Nivel_Ingreso_Censo');
        $this->load->model('Censo/Estatura');
        $this->load->model('Censo/Peso');
        $this->load->model('Censo/Talla_calzados');
        $this->load->model('Censo/Talla_camisas');
        $this->load->model('Censo/Talla_pantalones');
        $this->load->model('Escuela');
        $this->load->model('Sectores_Chacao');
        $this->load->model('Becas');
        $this->load->model('VistaGradoEscuela');
        $this->load->model('VistaNivelEducativoEscuela');
        $this->load->model('Usuario');

        $this->load->model('Inscripcion');

        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function index()
    {
            // Se carga la libreria fpdf
            $this->load->library('no_header/pdf');
            // Cargo libreria de envio de correos
            $this->load->library('My_PHPMailer');


            $id_inscripcion = $_POST["id_inscripcion"];

            $censo = Inscripcion::find($id_inscripcion);

            $escuela = Escuela::find($this->config->item('id_school'));
            $secciones = Seccion::find($censo->SeccionACursar);

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

            $page_data['page_name']  = 'carnet_estudiante';
            $page_data['page_title'] = "Carnet de Estudiante";

            //Datos solicitud
            $fecha_solicitud = date_format(date_create($censo->FechaSolicitud), 'd/m/Y');
            $hora_solicitud = date_format(date_create($censo->FechaSolicitud), 'g:i A');
            $numero_control = $id_inscripcion;

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
            $id_school = $this->config->item('id_school');
            $grado_cursar = VistaGradoEscuela::where('id_escuela', '=', $id_school)
                                ->where('id_grado','=', $censo->GradoACursar)
                                ->orderBy('id_grado')
                                ->groupBy('id_grado')
                                ->get();
            $estudia_actualmente = ($censo->ElAlumnoEstudiaActualmente == 1 ? 'SI' : 'NO');
            $estudio_anterior = ($censo->ElAlumnoCursoElAnterior == 1 ? 'SI' : 'NO');
            $repite_grado = ($censo->ElAlumnoRepiteGrado == 1 ? 'SI' : 'NO');
            $unidad_procedencia = $censo->UnidadEducativaDeProcedencia;
            $estado_general = Estado::find($censo->EstadoDondeResideElRepresentante);
            $municipio_general = Municipio::find($censo->MunicipioDondeResideElRepresentante);
            $sector_general = ($sector_chacao_general == 0 ? $censo->UrbanizacionOSectorDondeResideElRepresentante : $sectores_general->nombre);

            $unidad_preferencia = strtoupper($this->config->item('uem_name'));
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
            $trabaja_actualmente = ($censo->TrabajaActualmente == 1 ? 'SI' : 'NO');
            $profesion_representante = $censo->ProfesionUOcupacionDelRepresentante;

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
            //Emergencia Uno
            $contacto_emergencia_uno = $censo->NombreYApellidoDelContactoDeEmergencia1;
            $fijo_contacto_emergencia_uno = $censo->TelefonoDelContactoDeEmergencia1;
            //Emergencia Dos
            $contacto_emergencia_dos = $censo->NombreYApellidoDelContactoDeEmergencia2;
            $fijo_contacto_emergencia_dos = $censo->TelefonoDelContactoDeEmergencia2;

            $codigounico = $id_inscripcion + $censo->CedulaDeIdentidadDelRepresentante + $censo->CedulaDeIdentidadDelAlumnoOCedulaEscolar;
            $codigounico = $codigounico * 25;

            //Creamos el pdf
            $this->pdf = new Pdf('P','mm','Letter');
            // Agregamos una página
            $this->pdf->AddPage();

            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $director_uem = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.' '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
            $cedula_director = $escuela->director->cedula_identidad;
            $Seccion = $secciones->letra_seccion;
            $dias_constancia = date('d');
            $mes_constancia = $meses[date('n')-1];
            $ano_constancia = date('Y');
            $base_directora = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

            $this->pdf->RoundedRect(10, 10, 50, 80, 2, '1234', '');

            $logo_chacao = "uploads/logo.png";
            $logo_escuela = "uploads/scude.jpg";
            $foto = str_replace("\\", '/', $censo->aluNombreFoto);
            $foto_estudiante = $this->crud_model->get_image_url_db('student', basename($foto) );

            $codigo_dea = "CÓDIGO: DEA ".$this->config->item('dea');

            $this->pdf->SetY(17);
            $this->pdf->SetX(-350);

            $grado_seccion = 'Grado y Sección';
            $grado_seccion_estudiante = $secciones->nombre_seccion;
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;
            $firma_director = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

            $this->pdf->SetFont('Arial', 'B', 6);

            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','REPÚBLICA BOLIVARIANA DE VENEZUELA'),0,50,'C');
            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','ALCALDÍA DEL MUNICIPIO CHACAO'),0,50,'C');
            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252', strtoupper($this->config->item('uem_name'))),0,50,'C');
            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252', $codigo_dea),0,50,'C');

            $this->pdf->Ln(2);
            $this->pdf->Cell(80, 80, $this->pdf->Image($logo_escuela, 13, $this->pdf->GetY(), 15), 0, 0, 'L', false );
            $this->pdf->Cell(80, 80, $this->pdf->Image($foto_estudiante, 38, $this->pdf->GetY(), 16), 0, 0, 'L', false );

            $this->pdf->SetFont('Arial', 'B', 6);
            $this->pdf->Ln(3);
            $this->pdf->SetY(48);
            $this->pdf->SetX(37);
            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252',$grado_seccion),0,50,'L');
            $this->pdf->SetX(38);
            $this->pdf->SetFont('Arial', '', 6);
            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252',$grado_seccion_estudiante),0,50,'L');

            $this->pdf->SetFont('Arial', 'B', 7);
            $this->pdf->Ln(2);
            $this->pdf->SetX(-350);
            $this->pdf->Cell(0,2,iconv('UTF-8','windows-1252','Nombres'),0,50,'C');
            $this->pdf->SetFont('Arial', '', 7);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo->PrimerNombreDelAlumno.' '.$censo->SegundoNombreDelAlumno),0,50,'C');
            $this->pdf->SetFont('Arial', 'B', 7);
            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','Apellidos'),0,50,'C');
            $this->pdf->SetFont('Arial', '', 7);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo->PrimerApellidoDelAlumno.' '.$censo->SegundoApellidoDelAlumno),0,50,'C');
            $this->pdf->SetFont('Arial', 'B', 7);
            $this->pdf->Cell(0,2,iconv('UTF-8','windows-1252','Fecha de Nacimiento'),0,50,'C');
            $this->pdf->SetFont('Arial', '', 7);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',date_format(date_create($censo->FechaDeNacimientoDelAlumno), 'd/m/Y')),0,50,'C');
            $this->pdf->SetFont('Arial', 'B', 7);
            $this->pdf->Cell(0,2,iconv('UTF-8','windows-1252','Cédula Escolar y/o Identidad'),0,50,'C');
            $this->pdf->SetFont('Arial', '', 7);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo->CedulaDeIdentidadDelAlumnoOCedulaEscolar),0,50,'C');
            $this->pdf->SetFont('Arial', 'B', 7);
            $this->pdf->Cell(0,2,iconv('UTF-8','windows-1252','Representante'),0,50,'C');
            $this->pdf->SetFont('Arial', '', 7);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo->PrimerNombreDelRepresentante.' '.$censo->PrimerApellidoDelRepresentante),0,50,'C');
            $this->pdf->SetFont('Arial', 'B', 7);
            $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','Válido para el Año Escolar '.$running_year),0,50,'C');

            $this->pdf->RoundedRect(60, 10, 50, 80, 2, '1234', '');
            $this->pdf->SetY(12);
            $this->pdf->Ln(2);
            $this->pdf->Cell(70, 70, $this->pdf->Image($logo_chacao, 66, $this->pdf->GetY(), 38), 20, 0, 'C', false );
            $this->pdf->Ln(2);
            $this->pdf->SetY(28);
            $this->pdf->SetX(-252);
            $this->pdf->SetFont('Arial', 'B', 7);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Este carnet es personal e intransferible'),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',' y acredita al portador como estudiante'),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',' y miembro de esta institución.'),0,50,'C');
            $this->pdf->SetY(42);
            $this->pdf->SetX(-252);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','En caso de emergencia y/o extravió'),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','puede reportarlo por el N° de Telf:'),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','0212-266.48.22'),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','uemabello@gmail.com'),0,50,'C');


            $this->pdf->SetY(75);
            $this->pdf->SetX(0);

            $firma_director = "uploads/firma_director.jpg";
            $this->pdf->Cell(50, 40, $this->pdf->Image($firma_director, 72, 60,  25), 0, 0, 'C', false );
            $this->pdf->SetX(-252);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252', $director_uem),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252', $base_directora),0,50,'C');

            $this->pdf->Code128(62,83,$cedula_alumno,47,6);

            $this->pdf->SetY(100);
            $this->pdf->SetX(10);

            $this->pdf->MultiCell(0,6,iconv('UTF-8','windows-1252',"Estimado representante: \n".$censo->PrimerNombreDelRepresentante.' '.$censo->PrimerApellidoDelRepresentante."\nUsted debe imprimir y llevar este carnet a la ".strtoupper($this->config->item('uem_name')).", con el propósito de colocarle el sello húmedo  para su validación y posterior  plastificación."),0,'J',0);
            $this->pdf->Cell(0,10,iconv('UTF-8','windows-1252', 'Recuerde que este documento sin sello no tendrá  validez.'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252', 'La Dirección'),0,50,'J');

            $filename = 'Carnet'.$id_inscripcion.'.pdf';

            $pdfoutputfile = 'tmp_dir/'.$filename;
            $pdfdoc = $this->pdf->Output($pdfoutputfile, 'F');

            $email_from = "contactoeducacion@chacao.gob.ve"; // Who the email is from
            $email_subject = utf8_decode("CARNET ESTUDIANTIL, AÑO ESCOLAR ".$running_year)  ; // The Subject of the email
            $email_to = $email_representante;

            // set email message......................
            $email_message = "<html><body>Estimado Representante  <b> <br>".$nombre_apellido_representante."</b> <br> <br>";
            $email_message .= "Reciba un cordial saludo en nombre del equipo de la  Comunidad Educativa de la <b>".strtoupper($this->config->item('uem_name'))."</b>. Como parte de los avances que adelanta la Alcald&iacute;a de Chacao a trav&eacute;s de la Direcci&oacute;n de Educaci&oacute;n, se ha desarrollado un Sistema Integral, permitiendo la automatizaci&oacute;n de todos los procesos Acad&eacute;micos - Administrativos que se llevan a cabo desde la instituci&oacute;n."."<br> <br>";
            $email_message .= "Aprovechamos la oportunidad para informarle  que usted ha realizado de forma exitosa la inscripci&oacute;n de su representado <b>".strtoupper($censo->PrimerNombreDelAlumno.' '.$censo->SegundoNombreDelAlumno.' '.$censo->PrimerApellidoDelAlumno.' '.$censo->SegundoApellidoDelAlumno)."</b>, seg&uacute;n consta en los siguientes documentos: "."<br> <br>";
            $email_message .= "<b>1. CERTIFICADO ELECTR&Oacute;NICO  DE INSCRIPCI&Oacute;N.</b>"."<br>";
            $email_message .= "<b>2. CONSTANCIA DE INSCRIPCI&Oacute;N:</b>  Si usted requiere este documento, deber&aacute; imprimirlo y entregarlo en la  instituci&oacute;n, para que le coloquen el sello h&uacute;medo y de esta forma tendr&aacute; validez."."<br>";
            $email_message .= "<b>3. CARNET  ESTUDIANTIL: </b>  En este caso, deber&aacute; imprimirlo, preferiblemente a color y entregarlo en la  instituci&oacute;n, para que le coloquen el sello h&uacute;medo y de esta forma tendr&aacute; validez."."<br> <br>";
            $email_message .= "De tener alguna  duda, sugerencia y/o reclamo le invitamos a comunicarse con nuestro equipo a trav&eacute;s del siguiente correo electr&oacute;nico: <b>contactoeducacion@chacao.gob.ve</b>"."<br> <br>";
            $email_message .= "Recuerde que estamos para servir!"."<br> <br>";
            $email_message .= "<b>".$director_uem."<b>"."<br>";
            $email_message .= $base_directora."</body></html>";

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