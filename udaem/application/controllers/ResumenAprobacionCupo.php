<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class ResumenAprobacionCupo extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->database();

        $this->load->model('Configuracion');
        $this->load->model('Seccion');
        $this->load->model('Grado');
        $this->load->model('Censo/Censo');
        $this->load->model('Estado');
        $this->load->model('Municipio');
        $this->load->model('Censo/Nivel_Ingreso_Censo');
        $this->load->model('Censo/Estatura');
        $this->load->model('Censo/Peso');
        $this->load->model('Censo/Talla_calzados');
        $this->load->model('Censo/Talla_camisas');
        $this->load->model('Censo/Talla_pantalones');
        $this->load->model('Censo/Puntaje_Censo');
        $this->load->model('Persona');
        $this->load->model('Escuela');
        $this->load->model('Sectores_Chacao');
        $this->load->model('Becas');
        $this->load->model('VistaGradoEscuela');
        $this->load->model('VistaNivelEducativoEscuela');
        $this->load->model('Usuario');

      /*cache control*/
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
    }

    public function index()
    {

            // Se carga la libreria fpdf
            $this->load->library('header_censo/pdf');
            // Cargo libreria de envio de correos
            $this->load->library('My_PHPMailer');

            $id_censo = $_POST["id_censo"];

            $censo = Puntaje_Censo::find($id_censo);

            $escuela = Escuela::find($this->config->item('id_school'));
            $secciones = Seccion::find($censo->SeccionACursar);

            //$usuario = Usuario::where('id_usuario', '=', $censo->usuarioInscribe)->get();

            //direccion alumno
/*          $estado_alumno = Estado::find($censo->EstadoDondeResideElAlumno);
            $municipio_alumno = Municipio::find($censo->MunicipioDondeResideElAlumno);
            $sector_chacao_alumno = (is_numeric($censo->SectorDondeResideElAlumno) ? $censo->SectorDondeResideElAlumno : 0 );
            $sectores_alumno = Sectores_Chacao::find($sector_chacao_alumno);

            //direccion representante
            $estado_representante = Estado::find($censo->EstadoDondeResideElRepresentante);
            $municipio_representante = Municipio::find($censo->MunicipioDondeResideElRepresentante);
            $sector_chacao_general = (is_numeric($censo->SectorDondeResideElRepresentante) ? $censo->SectorDondeResideElRepresentante : 0 );
            $sectores_general = Sectores_Chacao::find($sector_chacao_general);
            $nivel_ingreso_representante = Nivel_Ingreso_Censo::find($censo->IngresoMensualDelRepresentante);

            $page_data['page_name']  = 'aprobacion_cupo';
            $page_data['page_title'] = "Aprobación de Cupo";

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
            // Agregamos una página
            $this->pdf->AddPage();

            $this->pdf->SetTitle(iconv('UTF-8','windows-1252','Resumen de Inscripción Escolar'));
            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(15);

            $this->pdf->Ln(5);
            $this->pdf->SetFont('Arial', 'B', 12);

            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','CERTIFICADO ELECTRÓNICO'),0,50,'C');
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','RESUMEN DE INSCRIPCIÓN'),0,50,'C');
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','AÑO ESCOLAR  '.$running_year),0,50,'C');

            $this->pdf->Ln(5);
            $this->pdf->SetFont('Arial', '', 8);

            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Fecha de inscripción: '.$fecha_solicitud),0,50,'L');
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Hora: '.$hora_solicitud),0,50,'L');
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Inscrito por: '.$usuario[0]->usuario),0,50,'L');

            $this->pdf->Ln(5);
            $this->pdf->SetFont('Arial', 'BU', 8);
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','INFORMACIÓN GENERAL'),0,50,'C');
            $this->pdf->Ln(2);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Residente del Municipio:     '.$residente.
                '          Grado a cursar:     '.$grado_cursar[0]->nombre_grado.'          Grado actual:     '.$grado_actual[0]->nombre_grado),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','El alumno repite grado:     '.$repite_grado.
                ($repite_grado == "SI" ? '          Grado repetido:     '.$grado_repite[0]->nombre_grado : '').
                '          Materia pendiente:     '.$materia_pendiente),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Sección:     '.$secciones->letra_seccion.
                '          Turno:     '.$turno.'          Docente:     '.$docente),0,50,'L');
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
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Parroquia:     '.$parroquia_representante.
                '          Sector:     '.$sector_general.'          Calle o  avenida:     '.$direccion_representante),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Casa o Edificio:     '.$casa_edificio_representante.
                '          Nº de Casa o Apto:     '.$casa_apto_representante.'          Piso:     '.$piso_representante),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nº Teléfono fijo:     '.$fijo_representante.
                '          Nº Teléfono móvil:     '.$movil_representante.'          Email:     '.$email_representante),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Trabaja dentro del municipio:     '.$trabaja_municipio.
                '          Traba actualmente:     '.$trabaja_actualmente.'          Profesión:     '.$profesion_representante),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Hijos en otra UEM:     '.$hijos_uem.'          Grado:     '.$grados_hijos),0,50,'L');

            $this->pdf->Ln(2);
            $this->pdf->SetFont('Arial', 'BU', 8);
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','DATOS SOCIO ECONÓMICOS'),0,50,'C');
            $this->pdf->Ln(2);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','El alumno esta becado:     '.$alumno_becado.
                '         Medio de traslado al plantel:     '.$traslado_plantel.'         El alumno se retira solo del plantel:     '.$retira_solo),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Miembros del grupo familiar (que viven en la misma casa):     '.$miembros_familia),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Número de hermanos:     '.$numero_hermanos.
                '         Datos de la vivienda:     '.str_replace('-', ' ', $datos_vivienda)),0,50,'L');


            $this->pdf->Ln(2);
            $this->pdf->SetFont('Arial', 'BU', 8);
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','DATOS EN CASO DE EMERGENCIA'),0,50,'C');
            $this->pdf->Ln(2);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nombre y apellido del contacto de emergencia uno '.$contacto_emergencia_uno.'         Parentesco:  '.$censo->ParentescoDelContactoDeEmergencia1ConElAlumno),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nº de teléfono '.$fijo_contacto_emergencia_uno),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nombre y apellido del contacto de emergencia dos '.$contacto_emergencia_dos.'         Parentesco:  '.$censo->ParentescoDelContactoDeEmergencia2ConElAlumno),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nº de teléfono '.$fijo_contacto_emergencia_dos),0,50,'L');

            $this->pdf->Ln(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','__________________________'),0,50,'R');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','FIRMA DEL REPRESENTANTE'),0,50,'R');
            $this->pdf->Ln(5);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Atendido por:  __________________________'),0,50,'L');

            $this->pdf->Code128(15,240,$codigounico,60,8);

            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $director_uem = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.' '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
            $cedula_director = $escuela->director->cedula_identidad;
            $Seccion = $secciones->letra_seccion;
            $dias_constancia = date('d');
            $mes_constancia = $meses[date('n')-1];
            $ano_constancia = date('Y');
            $base_directora = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

            // Agregamos una página para la constancia de inscripcion
            $this->pdf->AddPage();

            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(15);

            $this->pdf->Ln(25);
            $this->pdf->SetFont('Arial', 'B', 14);
            $constancia_inscripcion = mb_strtoupper('constancia de aprobación', 'UTF-8');
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252',$constancia_inscripcion),0,50,'C');
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;

            $this->pdf->Ln(20);
            $this->pdf->SetFont('Arial', '', 12);
            $this->pdf->MultiCell(0,10,iconv('UTF-8','windows-1252',"Quien suscribe,  Prof.  ".$director_uem.", Director (a) de la ".strtoupper($this->config->item('uem_name')).", hace constar que el alumno (a) ".$nombre_apellido_alumno.", Cédula de Identidad y/o Cédula Escolar N°: ".$cedula_alumno.", fue inscrito en esta Unidad Educativa, para cursar estudios en el ".$grado_cursar[0]->nombre_grado.", Sección ".$Seccion.", correspondiente al Año Escolar   ".$running_year.".\n"),0,'J',0);

            $this->pdf->Ln(10);
            $this->pdf->MultiCell(0,10,iconv('UTF-8','windows-1252',"Constancia que se expide a petición de la parte interesada en Chacao, a los ".$dias_constancia." días del mes de ".$mes_constancia." de ".$ano_constancia.".\n"),0,'J',0);
            $this->pdf->Ln(10);
            $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Atentamente,'),0,50,'C');

            $this->pdf->Code128(15,240,$codigounico,60,8);

            $this->pdf->Ln(25);
            $firma_director = "uploads/firma_director.jpg";
            $this->pdf->Cell(50, 40, $this->pdf->Image($firma_director, 90, 185,  30), 0, 0, 'C', false );
            $this->pdf->Ln(3);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Prof.  '.$director_uem),0,50,'C');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252', $base_directora),0,0,'C');

            $this->pdf->Ln(10);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,25,iconv('UTF-8','windows-1252','Elaborado por: '.$usuario[0]->usuario),0,50,'L');

            $filename = 'Certificado_Electronico_Inscripcion'.$id_inscripcion.'.pdf';

            $pdfoutputfile = 'tmp_dir/'.$filename;
            $pdfdoc = $this->pdf->Output($pdfoutputfile, 'F');
            */
            $director_uem = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.' '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
            $base_directora = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

            $email_representante = $censo->CorreoElectronicoDelRepresentante;
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;
            $id_school = $this->config->item('id_school');
            $nombre_apellido_representante = $censo->PrimerNombreDelRepresentante.' '.$censo->SegundoNombreDelRepresentante.' '.$censo->PrimerApellidoDelRepresentante.' '.$censo->SegundoApellidoDelRepresentante;
            $grado_cursar = VistaGradoEscuela::where('id_escuela', '=', $id_school)->where('id_grado','=', $censo->GradoACursar)->get();
            $email_from = "contactoeducacion@chacao.gob.ve"; // Who the email is from
            $email_subject = utf8_decode("APROBACIÓN DE CUPO, AÑO ESCOLAR ".$running_year); // The Subject of the email
            $email_to = $email_representante;

            // set email message......................
            $email_message = "<html><body>Estimado Representante  <b> <br>".$nombre_apellido_representante."</b> <br> <br>";
            $email_message .= "Reciba un cordial saludo en nombre del equipo de la  Comunidad Educativa de la <b>".strtoupper($this->config->item('uem_name'))."</b>, por medio de la  presente hacemos de su conocimiento, que una vez revisados los recaudos consignados por usted y contando con la disponibilidad de cupo para su representado, "
                                        .strtoupper($censo->PrimerNombreDelAlumno.' '.$censo->SegundoNombreDelAlumno.' '.$censo->PrimerApellidoDelAlumno.' '.$censo->SegundoApellidoDelAlumno).", le informamos que ha sido aprobado el  ingreso para cursar el ".$grado_cursar[0]->nombre_grado.
                                        ",  en esta Unidad Educativa. Por tal motivo, le invitamos a formalizar su inscripci&oacute;n durante los   d&iacute;as XX - XX del mes de XXXX  en el horario comprendido entre las XXXX hasta XXXX y XXXX hasta XXXX."."<br> <br>";
            $email_message .= "Igualmente le recordamos  que debe presentar los siguientes recaudos: : "."<br> <br>";
            $email_message .= "<b>A. Si el ingreso es para (Primer Grado hasta Sexto Grado) de Educaci&oacute;n Primaria se requiere tener la boleta de promoci&oacute;n y constancia de retiro del otro plantel.</b>"."<br>";
            $email_message .= "<b>B. Si el ingreso es para (Primer A&ntilde;o  hasta Tercer A&ntilde;o) de Educaci&oacute;n Media General se requiere contar con la certificaci&oacute;n de notas (original) y constancia de retiro del otro plantel.</b>"."<br>";
            $email_message .= "<b>C. Original y/o copia de la Partida de Nacimiento.</b>"."<br>";
            $email_message .= "<b>D. Original y/o copia de la C&eacute;dula del Representante legal del alumno (a). En caso de que el representante no sea ninguno de los padres, deber&aacute; mostrar documento emitido por los organismos competentes que demuestren  la guardia y custodia del menor. </b>"."<br>";
            $email_message .= "<b>E. Original de la tarjeta de vacuna del alumno (a) si fuera el caso de  (Educaci&oacute;n Inicial hasta 3er Grado de Educaci&oacute;n B&aacute;sica).</b>"."<br>";
            $email_message .= "<b>F. Dos (2) fotos del alumno (a) tama&ntilde;o carnet.</b>"."<br>";
            $email_message .= "<b>G. Una (1) foto del represente legal del alumno (a) tama&ntilde;o carnet. </b>"."<br>";
            $email_message .= "<b>H. Carpeta marr&oacute;n tama&ntilde;o oficio  con gancho. </b>"."<br> <br>";
            $email_message .= "<b style='text-align:center;'>Si usted ya consigno estos recaudos al momento de la entrevista en la instituci&oacute;n,  hacer caso omiso a estos requisitos.</b>"."<br>";
            $email_message .= "Debe  acudir el d&iacute;a y la hora antes indicada para formalizar la inscripci&oacute;n,  de lo contrario entenderemos que no est&aacute; interesado (a) en el cupo asignado y ser&aacute; reasignado a otro alumno (a)."."<br>";
            $email_message .= "Agradeci&eacute;ndole habernos elegido como la instituci&oacute;n de su preferencia para formar a su hijo (a), se despide de usted;"."<br>";
            $email_message .= "Cordialmente, "."<br> <br>";
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

            if (!$mail->send()) {
                  $message_die = "Ha ocurrido un error inesperado, Mailer Error: " . $mail->ErrorInfo;
                  die($message_die);
            } else {
                  $message = "¡El certificado electronico se ha enviado con éxito!";
                  echo $message;
            }

    }
  }