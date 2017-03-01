<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class EnviarConstancia extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        //Librerias y clases de apoyo
        $this->load->library('session');
        $this->load->library('Fecha_escolar');
        //Modelos
        $this->load->model('Configuracion');
        $this->load->model('Persona');
        $this->load->model('Estudiante');
        $this->load->model('Seccion');
        $this->load->model('Grado');
        $this->load->model('Recaudo');
        $this->load->model('Recaudo_grado');
        $this->load->model('Recaudo_estudiante');
        $this->load->model('Censo/Censo');
        $this->load->model('Censo/Puntaje_censo');

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

    public function index(){
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            // Se carga la libreria fpdf
            $this->load->library('header_censo/pdf');

            $id_inscripcion = $_POST["carnetID_Inscripcion"];
            $tipo_constancia = $_POST["record_types"];
            $txtFecha = new date();
            $txtDesde = $_POST["txtDesde"];
            $txtHasta = $_POST["txtHasta"];
            $txtTramite = $_POST["txtTramite"];
            $txtFechaConvocatoria = $_POST["txtFechaConvocatoria"];
            $txtHora = $_POST["txtHora"];
            $txtAtendido = $_POST["txtAtendido"];

            $censo = Inscripcion::find($id_inscripcion);

            $escuela = Escuela::find($this->config->item('id_school'));
            $secciones = Seccion::find($censo->SeccionACursar);
            $usuario = Usuario::where('id_usuario', '=', $censo->usuarioInscribe)
                                            ->get();

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


            $page_data['page_name']  = 'resumen_censo';
            $page_data['page_title'] = "Resumen de Inscripción";

            //Datos solicitud
            $fecha_solicitud = date_format(date_create($censo->FechaSolicitud), 'd/m/Y');
            $hora_solicitud = date_format(date_create($censo->FechaSolicitud), 'g:i A');

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
            $ano_escolar = $escuela->periodo_escolar_actual;
            $estado_general = Estado::find($censo->EstadoDondeResideElRepresentante);
            $municipio_general = Municipio::find($censo->MunicipioDondeResideElRepresentante);
            $sector_general = ($sector_chacao_general == 0 ? $censo->UrbanizacionOSectorDondeResideElRepresentante : $sectores_general->nombre);
            $grado_actual = VistaGradoEscuela::where('id_escuela', '=', $id_school)
                                ->where('id_grado','=', $censo->GradoActual)
                                ->orderBy('id_grado')
                                ->groupBy('id_grado')
                                ->get();
            $nombre_grado_actual = (is_array($grado_actual)) ? $grado_actual[0]->nombre_grado : "";
            $grado_repite = VistaGradoEscuela::where('id_escuela', '=', $id_school)
                                ->where('id_grado','=', $censo->GradoRepetido)
                                ->orderBy('id_grado')
                                ->groupBy('id_grado')
                                ->get();

            switch ($censo->TurnoACursar) {
                case 1:
                    $turno = "MAÑANA";
                    break;
                case 2:
                    $turno = "TARDE";
                    break;
                case 3:
                    $turno = "INTEGRAL";
                    break;
            }

            $teachers = $this->db->get_where('teacher', array('teacher_id' => $censo->DocenteAsignado))->result_array();

            $docente = "";
            foreach($teachers as $row):
                $docente = $row['name'];
            endforeach;

            $materia_pendiente = ($censo->MateriaPendiente == 1 ? 'SI' : 'NO');


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
            $fecha_nacimiento_representante = date_format(date_create($censo->FechaDeNacimientoDelRepresentante), 'd/m/Y');
            $nacionalidad_representante = $censo->NacionalidadDelRepresentante;
            $estado_representante = ($censo->Residente == 1 ? 'MIRANDA' : $estado_representante->nombre);
            $municipio_representante = ($censo->Residente == 1 ? 'CHACAO' : $municipio_representante->nombre);
            $parroquia_representante = ($censo->Residente == 1 ? 'CHACAO' : '');
            $sector_representante =  $sector_general;
            $direccion_representante = $censo->CalleOAvenidaDondeResideElRepresentante;
            $casa_edificio_representante = $censo->CasaOEdificioDondeResideElRepresentante;
            $casa_apto_representante = $censo->NumeroDeCasaOApartamentoDondeResideElPadre;
            $piso_representante = $censo->PisoDondeResideElRepresentante;
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

            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $director_uem = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.' '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
            $cedula_director = $escuela->director->cedula_identidad;
            $Seccion = $secciones->letra_seccion;
            $dias_constancia = date('d');
            $mes_constancia = $meses[date('n')-1];
            $ano_constancia = date('Y');
            $base_directora = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;


            switch ($tipo_constancia) {
                case 1:
                    $constancia = mb_strtoupper('constancia de estudio', 'UTF-8');
                    $parrafo_uno = "Quien suscribe,  Prof.  ".$director_uem.", Director (a) de la ".strtoupper($this->config->item('uem_name')).", hace constar por medio de la presente que el alumno (a): ".$nombre_apellido_alumno.", titular de la Cédula de Identidad y/o Cédula Escolar N°: ".$cedula_alumno.", cursa estudios en esta Unidad Educativa, en ".$grado_cursar[0]->nombre_grado.", Sección ".$Seccion.", correspondiente al Año Escolar   ".$running_year.".\n";
                    $parrafo_dos = "Constancia que se expide a petición de la parte interesada en Chacao, a los ".$dias_constancia." días del mes de ".$mes_constancia." de ".$ano_constancia.".\n";
                    $parrafo_tres = "";
                    $footer_uno = "";
                    $footer_dos = "";
                    $posicion_firma = 165;
                    $espacio_titulo = 20;
                    $espacio_parrafo_uno = 30;             
                    break;
                case 2:
                    $constancia = mb_strtoupper('constancia de inscripción', 'UTF-8');
                    $parrafo_uno = "Quien suscribe,  Prof.  ".$director_uem.", Director (a) de la ".strtoupper($this->config->item('uem_name')).", hace constar que el alumno (a) ".$nombre_apellido_alumno.", Cédula de Identidad y/o Cédula Escolar N°: ".$cedula_alumno.", fue inscrito en esta Unidad Educativa, para cursar estudios en el ".$grado_cursar[0]->nombre_grado.", Sección ".$Seccion.", correspondiente al Año Escolar   ".$running_year.".\n";
                    $parrafo_dos = "Constancia que se expide a petición de la parte interesada en Chacao, a los ".$dias_constancia." días del mes de ".$mes_constancia." de ".$ano_constancia.".\n";
                    $parrafo_tres = "";
                    $footer_uno = "";
                    $footer_dos = "";
                    $posicion_firma = 165;
                    $espacio_titulo = 20;
                    $espacio_parrafo_uno = 30;                    
                    break;   
                case 3:
                    $constancia = mb_strtoupper('constancia de asistencia', 'UTF-8');
                    $porciones = explode("_", $param1);
                    $parrafo_uno = "Quien suscribe,  Prof.  ".$director_uem.", Director (a) de la ".strtoupper($this->config->item('uem_name')).", hace constar por medio de la presente que el ciudadano (a): ".$nombre_apellido_representante.", titular de la Cédula de Identidad N°: ".$cedula_representante." representante legal del alumno (a):".$nombre_apellido_alumno.", titular de la Cédula de Identidad y/o Cédula Escolar N°: ".$cedula_alumno.", quien cursa estudios en ".$grado_cursar[0]->nombre_grado.", Sección ".$Seccion.", correspondiente al Año Escolar   ".$running_year.", asistió a esta institución con el proposito de tratar asuntos relacionados con su representado (a) en la fecha ".$txtFecha." en el horario comprendido entre las ".$txtDesde." hasta las ".$txtHasta.".\n";
                    $parrafo_dos = "Constancia que se expide a petición de la parte interesada en Chacao, a los ".$dias_constancia." días del mes de ".$mes_constancia." de ".$ano_constancia.".\n";
                    $parrafo_tres = "";
                    $footer_uno = "";
                    $footer_dos = ""; 
                    $posicion_firma = 205;
                    $espacio_titulo = 20;
                    $espacio_parrafo_uno = 30;                    
                    break;
                case 4:
                    $constancia = mb_strtoupper('constancia de tramitación de documentos', 'UTF-8');
                    $parrafo_uno = "Quien suscribe,  Prof.  ".$director_uem.", Director (a) de la ".strtoupper($this->config->item('uem_name')).", hace constar por medio de la presente que el ciudadano (a): ".$nombre_apellido_representante.", titular de la Cédula de Identidad N°: ".$cedula_representante." representante legal del alumno (a):".$nombre_apellido_alumno.", titular de la Cédula de Identidad y/o Cédula Escolar N°: ".$cedula_alumno.", quien cursa estudios en ".$grado_cursar[0]->nombre_grado.", Sección ".$Seccion.", correspondiente al Año Escolar   ".$running_year.", se encuentra tramitando ante esta institución los siguientes documentos: ".$txtTramite.".\n";
                    $parrafo_dos = "Constancia que se expide a petición de la parte interesada en Chacao, a los ".$dias_constancia." días del mes de ".$mes_constancia." de ".$ano_constancia.".\n";
                    $parrafo_tres = "";
                    $footer_uno = "";
                    $footer_dos = "";
                    $posicion_firma = 195; 
                    $espacio_titulo = 20;
                    $espacio_parrafo_uno = 30; 
                    break;  
                case 5:
                    $constancia = mb_strtoupper('convovatoria al representante', 'UTF-8');
                    $porciones = explode("_", $param1);
                    $parrafo_uno = "Ciudadano (a): ".$nombre_apellido_representante.", titular de la Cédula de Identidad N°: ".$cedula_representante." representante legal del alumno (a): ".$nombre_apellido_alumno.", titular de la Cédula de Identidad y/o Cédula Escolar N°: ".$cedula_alumno.", quien cursa estudios en ".$grado_cursar[0]->nombre_grado.", Sección ".$Seccion.", correspondiente al Año Escolar   ".$running_year.".\n";
                    $parrafo_dos = "Con el propósito de atender asuntos relacionados  con su representado, se requiere su presencia en la institución el  día ".$txtFechaConvocatoria.", a las ".$txtHora.". Usted será atendido (a) por: ".$txtAtendido.". Agradecemos puntual asistencia.\n";
                    $parrafo_tres = "Constancia que se expide a petición de la parte interesada en Chacao, a los ".$dias_constancia." días del mes de ".$mes_constancia." de ".$ano_constancia.".\n";
                    $footer_uno = "LEY ORGÁNICA PARA LA PROTECCIÓN DEL NIÑO NIÑA Y ADOLESCENTE";
                    $footer_dos = "Articulo 54.- Obligación del padre, madre, representante o responsable en materia de educación: El padre, madre, representante o responsable tiene la obligación inmediata de garantizar la educación a los niños, niñas y adolescente. En consecuencia deben inscribirlo oportunamente en la escuela, plantel o institución de educación de conformidad con la ley, así como exigimos su asistencia regular a clase y participar activamente en su proceso educativo.";
                    $posicion_firma = 180;
                    $espacio_titulo = 10;
                    $espacio_parrafo_uno = 20;                
                    break;
            }

            // Agregamos una página para la constancia de inscripcion
            $this->pdf->AddPage();

            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(15);

            $this->pdf->Ln($espacio_titulo);
            $this->pdf->SetFont('Helvetica', 'B', 13);

            $this->pdf->Cell(0,$espacio_parrafo_uno,iconv('UTF-8','windows-1252',$constancia),0,50,'C');
            

            $this->pdf->SetFont('Arial', '', 12);
            $this->pdf->MultiCell(0,10,iconv('UTF-8','windows-1252', $parrafo_uno),0,'J',0);

            $this->pdf->Ln(5);
            $this->pdf->MultiCell(0,10,iconv('UTF-8','windows-1252', $parrafo_dos),0,'J',0);
            //
            if($parrafo_tres != ""){
                $this->pdf->Ln(5);
                $this->pdf->MultiCell(0,10,iconv('UTF-8','windows-1252', $parrafo_tres),0,'J',0);
            }
            $this->pdf->Ln(10);
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Atentamente,'),0,50,'C');

            $this->pdf->Code128(15,250,$codigounico,60,8);

            $firma_director = "uploads/firma_director.jpg";
            $this->pdf->Cell(50, 40, $this->pdf->Image($firma_director, 90, $posicion_firma,  30), 0, 0, 'C', false );
            $this->pdf->Ln(20);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Prof.  '.$director_uem),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252', $base_directora),0,0,'C');
            $this->pdf->Ln(5);
            if($parrafo_tres != ""){
                $this->pdf->SetFont('Arial', 'B', 8);
                $this->pdf->MultiCell(0,10,iconv('UTF-8','windows-1252', $footer_uno),0,'C',0);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->MultiCell(0,5,iconv('UTF-8','windows-1252', $footer_dos),0,'J',0);
            }            
            
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,15,iconv('UTF-8','windows-1252','Elaborado por: '.$usuario[0]->usuario),0,50,'L');

            $filename = $constancia.$id_inscripcion.'.pdf';

            // Cargo libreria de envio de correos
            $this->load->library('My_PHPMailer');

            $pdfoutputfile = 'tmp_dir/'.$filename;
            $pdfdoc = $this->pdf->Output($pdfoutputfile, 'F');

            $email_from = "contactoeducacion@chacao.gob.ve"; // Who the email is from
            $email_subject = utf8_decode($constancia.", AÑO ESCOLAR ".$running_year); // The Subject of the email
            $email_to = $email_representante;

            // set email message......................
            $email_message = "<html><body>Estimado Representante  <b> <br>".$nombre_apellido_representante."</b> <br> <br>";
            $email_message .= "Reciba un cordial saludo en nombre del equipo de la  Comunidad Educativa de la <b>".strtoupper($this->config->item('uem_name'))."</b>. Como parte de los avances que adelanta la Alcald&iacute;a de Chacao a trav&eacute;s de la Direcci&oacute;n de Educaci&oacute;n, se ha desarrollado un Sistema Integral, permitiendo la automatizaci&oacute;n de todos los procesos Acad&eacute;micos - Administrativos que se llevan a cabo desde la instituci&oacute;n."."<br> <br>";
            $email_message .= "En el documento adjunto a este correo se encuentra la ".$constancia." solicitada, recuerde que debe llevarla a la institución para colocarle el sello humedo y que la misma tenga validez.";
            $email_message .= "Recuerde que estamos para servir!"."<br> <br>";
            $email_message .= "<b>".$director_uem."</b>"."<br>";
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