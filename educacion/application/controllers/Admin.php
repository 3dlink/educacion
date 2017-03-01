<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('Fecha_escolar');
        $this->load->model('Configuracion');
        $this->load->model('Persona');
        $this->load->model('Estudiante');
        $this->load->model('Seccion');
        $this->load->model('Grado');
        $this->load->model('Recaudo');
        $this->load->model('Recaudo_grado');
        $this->load->model('Recaudo_estudiante');
        $this->load->model('Censo/Censo');
        $this->load->model('VistaGradoEscuela');
        $this->load->model('VistaNivelEducativoEscuela');
        $this->load->model('VistaNivelEducativoSeccion');
        $this->load->model('Usuario');
        $this->load->model('Inscripcion');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

    }

    public function index()
    {
        if ($this->session->userdata('admin_login') == 1 && $this->session->userdata('id_school') == 0 ){
            if($this->session->userdata('change_password') == 1){
                $this->session->set_flashdata('flash_message', "Debe cambiar su contraseña");
                redirect(base_url() . 'admin/manage_profile', 'refresh');
            }else{
                redirect(base_url() . 'admin/dashboard', 'refresh');
            }
        }else{
            redirect(base_url() . 'login', 'refresh');
        }
    }

    /***VALIDAR CUPO***/
    public function validarcupo()
    {
        $id_censo = $_POST['id_censo'];
                        $estudiante = Censo::where('id_censo', '=', $id_censo)
                                ->update(array('StatusCenso' => 1));

    }

    /***ASIGNAR ESCUELA***/
    public function asignarescuela()
    {
        $id_school = $this->config->item('id_school');
        $id_censo = $_POST['id_censo'];
                        $estudiante = Censo::where('id_censo', '=', $id_censo)
                                ->update(array('IDEscuelaAsignada' => $id_school));

    }

    public function asignarseccion()
    {
        $id_school = $this->config->item('id_school');
        $selectOption = $_POST['lista_escuelas'];
        $cedula_suministrada = $_POST['cedula_identidad'];

                $estudiante = Estudiante::where('cedula_escolar', '=', $cedula_suministrada)
                                ->where('status_inscripcion','=', 0)
                                ->where('id_escuela','=', $id_school)
                                ->update(array('status_inscripcion' => 1, 'id_seccion' => $selectOption));

    }

    /***ADMIN DASHBOARD***/
    function dashboard()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');
            $page_data['page_name']  = 'dashboard';
            $page_data['page_title'] = "Dashboard";

            //$id_school = $this->config->item('id_school');

            //Select tabla configuraciones
            $config = Configuracion::all();

            //Variable a la cual le pasamos resultado de select
            $page_data['config'] = $config;

            //Pasando la data a la vista
            $this->load->view('backend/index', $page_data);
    }

    /***RECORDS***/
    function records()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');
            $page_data['page_name']  = 'records';
            $page_data['page_title'] = "Constancias";

            $config = Configuracion::all();
            $page_data['config'] = $config;

            $this->load->view('backend/index', $page_data);
    }

    /***CARNETS***/
    function carnets()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');
            $page_data['page_name']  = 'carnets';
            $page_data['page_title'] = "Carnets";

            //Select tabla configuraciones
            $config = Configuracion::all();

            //Variable a la cual le pasamos resultado de select
            $page_data['config'] = $config;

            //Pasando la data a la vista
            $this->load->view('backend/index', $page_data);
    }

    function send_sms()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');
            $page_data['page_name']  = 'send_sms';
            $page_data['page_title'] = "Enviar SMS";

            //Select tabla configuraciones
            $config = Configuracion::all();

            //Variable a la cual le pasamos resultado de select
            $page_data['config'] = $config;

            //Pasando la data a la vista
            $this->load->view('backend/index', $page_data);
    }

    function search_carnet() {
            $cedula = $_POST['txtIdentification'];
            $id_school = $this->config->item('id_school');
            $estudiante = Estudiante::where('cedula_escolar', '=', $cedula)
                                    ->where('id_escuela', '=' , $id_school)
                                    ->where('status_inscripcion', '=', 1)
                                    ->get();

            if(count($estudiante) > 0) {
                $id_estudiante = $estudiante[0]->id_persona;

                $persona = Persona::where( 'id_persona' , '=' , $id_estudiante)->get()->first();

                if(count($persona) > 0) {
                    $result = 1;
                    $response = array(
                                    'status' => $result,
                                    'primer_nombre' => $persona['primer_nombre'],
                                    'segundo_nombre' => $persona['segundo_nombre'],
                                    'primer_apellido' => $persona['primer_apellido'],
                                    'segundo_apellido' => $persona['segundo_apellido']
                                    );
                    $data = json_encode($response);
                    echo $data;
                }
            }
            else
            {
                $result = 0;
                $response = array(
                                'status' => $result,
                                );
                $data = json_encode($response);

                echo $data;
            }
    }

    function census_resume()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $page_data['page_name']  = 'census_resume';
            $page_data['page_title'] = "Resumen de Censo por Grado";
            $this->load->view('backend/index', $page_data);
    }

    function census_resume_full()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $page_data['page_name']  = 'census_resume_full';
            $page_data['page_title'] = "Resumen de Censo por Escuela";
            $this->load->view('backend/index', $page_data);
    }

    function census_resume_general($param1='')
    {
            $this->load->model('Censo/Rptresumen');
            $this->load->model('Grado');

            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            if($param1 == ""){
                $page_data['mostrar_tabla'] = "no_mostrar";
                $page_data['fecha_desde'] = "";
                $page_data['fecha_hasta'] = "";
                $page_data['estatusResumenGeneral'] = "";
                $page_data['residenteResumenGeneral'] = "";
                $page_data['gradoResumenGeneral'] = "";
                $page_data['escuelaResumenGeneral'] = "";
                $page_data['generoResumenGeneral'] = "";
                $page_data['ponderacionResumenGeneral'] = "";

                $page_data['fecha_nacimiento'] = "";
                $page_data['edad'] = "";
                $page_data['genero'] = "";
                $page_data['grado_solicitado'] = "";
                $page_data['residente'] = "";
                $page_data['escuela_preferencia'] = "";
                $page_data['escuela_solicitada'] = "";
                $page_data['trabaja_alcaldia'] = "";

                $page_data['fecha_cita'] = "";
                $page_data['puntaje'] = "";
                $page_data['escuela_procedencia'] = "";
                $page_data['sector'] = "";
                $page_data['calle_avenida'] = "";
                $page_data['casa_apartamento'] = "";
                $page_data['piso'] = "";

                $page_data['punto_referencia'] = "";
                $page_data['telefono_habitacion'] = "";
                $page_data['telefono_celular'] = "";
                $page_data['urbanizacion'] = "";
                $page_data['estado'] = "";
                $page_data['municipio'] = "";
                $page_data['estatus'] = "";
            }else{
                $page_data['mostrar_tabla'] = "mostrar";

                $fecha_desde = $_POST['fecha_desde'];
                $fecha_hasta = $_POST['fecha_hasta'];

                $estatusResumenGeneral = $this->input->post('estatusResumenGeneral');
                $residenteResumenGeneral = $this->input->post('residenteResumenGeneral');
                $gradoResumenGeneral = $this->input->post('gradoResumenGeneral');
                $escuelaResumenGeneral = $this->input->post('escuelaResumenGeneral');
                $generoResumenGeneral = $this->input->post('generoResumenGeneral');
                $ponderacionResumenGeneral = $this->input->post('ponderacionResumenGeneral');

                $this->db->where("fecha_solicitud BETWEEN '$fecha_desde' AND '$fecha_hasta'");

                 if ($estatusResumenGeneral >= 0) $this->db->where('StatusCenso', $estatusResumenGeneral);
                 if ($residenteResumenGeneral >= 0) $this->db->where('Residente', $residenteResumenGeneral);
                 if ($gradoResumenGeneral > 0) $this->db->where('id_grado', $gradoResumenGeneral);
                 if ($escuelaResumenGeneral > 0) $this->db->where('id_escuela', $escuelaResumenGeneral);
                 if ($generoResumenGeneral > 0) $this->db->where('sexo', $generoResumenGeneral);
                 if ($ponderacionResumenGeneral > 0) $this->db->where('ponderacion', $ponderacionResumenGeneral);

                $page_data['estudiantes'] = $this->db->get('vrpresumencenso')->result_array();

                $page_data['fecha_nacimiento'] = $this->input->post('fecha_nacimiento');
                $page_data['edad'] = $this->input->post('edad');
                $page_data['genero'] = $this->input->post('genero');
                $page_data['grado_solicitado'] = $this->input->post('grado_solicitado');
                $page_data['residente'] = $this->input->post('residente');
                $page_data['escuela_preferencia'] = $this->input->post('escuela_preferencia');
                $page_data['trabaja_alcaldia'] = $this->input->post('trabaja_alcaldia');

                $page_data['fecha_cita'] = $this->input->post('fecha_cita');
                $page_data['puntaje'] = $this->input->post('puntaje');
                $page_data['escuela_procedencia'] = $this->input->post('escuela_procedencia');
                $page_data['sector'] = $this->input->post('sector');
                $page_data['calle_avenida'] = $this->input->post('calle_avenida');
                $page_data['casa_apartamento'] = $this->input->post('casa_apartamento');
                $page_data['piso'] = $this->input->post('piso');

                $page_data['punto_referencia'] = $this->input->post('punto_referencia');
                $page_data['telefono_habitacion'] = $this->input->post('telefono_habitacion');
                $page_data['telefono_celular'] = $this->input->post('telefono_celular');
                $page_data['urbanizacion'] = $this->input->post('urbanizacion');
                $page_data['estado'] = $this->input->post('estado');
                $page_data['municipio'] = $this->input->post('municipio');
                $page_data['estatus'] = $this->input->post('estatus');

                $page_data['fecha_desde'] = $fecha_desde;
                $page_data['fecha_hasta'] = $fecha_hasta;

                if ($estatusResumenGeneral >= 0) $page_data['estatusResumenGeneral'] = $estatusResumenGeneral;
                if ($residenteResumenGeneral >= 0) $page_data['residenteResumenGeneral'] = $residenteResumenGeneral;
                if ($gradoResumenGeneral > 0) $page_data['gradoResumenGeneral'] = $gradoResumenGeneral;
                if ($escuelaResumenGeneral > 0) $page_data['escuelaResumenGeneral'] = $escuelaResumenGeneral;
                if ($generoResumenGeneral != "0") $page_data['generoResumenGeneral'] = $generoResumenGeneral;
                if ($ponderacionResumenGeneral > 0) $page_data['ponderacionResumenGeneral'] = $ponderacionResumenGeneral;

            }

            $page_data['grados'] = Grado::orderBy('id_grado')->get();
            $page_data['page_name']  = 'census_resume_general';
            $page_data['page_title'] = "Resumen General de Censo";
            $this->load->view('backend/index', $page_data);
    }

    /****MANAGE CENSUS*****/
    function census_student_add()
    {
            $this->load->model('Censo/Censo');
            $this->load->model('Censo/Censo_grado');
            $this->load->model('Estado');
            $this->load->model('Municipio');

            $page_data['grados'] = Censo_grado::orderBy('id_censo_grado')->get();
            $page_data['estados'] = Estado::orderBy('nombre')->get();
            $page_data['municipios'] = Municipio::orderBy('nombre')->get();

            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $page_data['page_name']  = 'census_student_add';
            $page_data['page_title'] = "Agregar Estudiante al Censo";
            $this->load->view('backend/index', $page_data);
    }

    function student_enrolled_nulled()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect('login', 'refresh');

            $config = Configuracion::all();
            $page_data['config'] = $config;
            $page_data['page_name']  = 'student_enrolled_nulled';
            $page_data['page_title'] = "ESTUDIANTES ANULADOS";

            $this->load->view('backend/index', $page_data);
    }

    function student_enrolled_retired()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect('login', 'refresh');

            $config = Configuracion::all();
            $page_data['config'] = $config;
            $page_data['page_name']  = 'student_enrolled_retired';
            $page_data['page_title'] = "ESTUDIANTES RETIRADOS";

            $this->load->view('backend/index', $page_data);
    }

    public function initial_enrolled_resume($param1=''){

            $this->load->model('inscripcion');
            $this->load->model('VistaGradoEscuela');
            $id_school = $this->config->item('id_school');

            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $this->db->order_by('id_grado', 'asc');
            $page_data['estudiantes'] = $this->db->get('vmatriculasexo')->result_array();

            $page_data['grados'] = VistaGradoEscuela::orderBy('id_grado')
                                                ->groupBy('id_grado')
                                                ->get();

            $query = $this->db->select_sum('Femenino', 'TotalFemenino');
            $query = $this->db->get('vmatriculasexo');
            $result = $query->result();
            $page_data['TotalFemenino'] = $result[0]->TotalFemenino;

            $query = $this->db->select_sum('Masculino', 'TotalMasculino');
            $query = $this->db->get('vmatriculasexo');
            $result = $query->result();
            $page_data['TotalMasculino'] = $result[0]->TotalMasculino;

            $query = $this->db->select_sum('Total', 'TotalGeneral');
            $query = $this->db->get('vmatriculasexo');
            $result = $query->result();
            $page_data['TotalGeneral'] = $result[0]->TotalGeneral;

            $page_data['page_name']  = 'initial_enrolled_resume';
            $page_data['page_title'] = "MATRÍCULA GENERAL";

            $this->load->view('backend/index', $page_data);
    }

    public function editar_censo() {
        try {

	        $id_censo = $this->input->post('id_censo');

	        log_message('DEBUG', 'CENSO A ACTUALIZAR  '.$id_censo);

            $censo = Censo::find($id_censo);

            foreach ($this->input->post() as $key => $value) {
                $censo->$key = $value;
            }

            $censo->save();

            echo $censo;
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    function census_new($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $this->load->database();
        $this->load->library('session');
        $this->load->model('Censo/Censo');
        $this->load->model('Censo/Grado_censo');
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

        $page_data['grados_censo'] = Grado_censo::orderBy('id_censo_grado')->get();
        $page_data['estados'] = Estado::orderBy('nombre')->get();
        $page_data['municipios'] = Municipio::orderBy('nombre')->get();
        $page_data['nivel_ingreso'] = Nivel_Ingreso_Censo::orderBy('id_nivel_ingreso_censo')->get();
        $page_data['estaturas'] = Estatura::orderBy('id_estatura')->get();
        $page_data['pesos'] = Peso::orderBy('id_peso')->get();
        $page_data['calzados'] = Talla_calzados::orderBy('id_talla_calzado')->get();
        $page_data['camisas'] = Talla_camisas::orderBy('id_talla_camisa')->get();
        $page_data['pantalones'] = Talla_pantalones::orderBy('id_talla_pantalon')->get();
        $page_data['escuelas'] = Escuela::orderBy('id_escuela')->get();
        $page_data['becas'] = Becas::orderBy('id_beca')->get();
        $page_data['sectores'] = Sectores_Chacao::orderBy('id_sector')->get();

        if($param1 == 'insertar'){
            try {
                $censo = new Censo;

                foreach ($this->input->post() as $key => $value) {
                    $censo->$key = $value;
                }

                $censo->save();

                echo $censo;
            } catch (Exception $e) {
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
        }

        $page_data['page_name']  = 'census_new';
        $page_data['page_title'] = "Agregar Censo y Registro Escolar";

        $this->load->view('backend/index', $page_data);
    }

    public function initial_enrolled($param1=''){

            $this->load->model('inscripcion');
            $this->load->model('VistaGradoEscuela');

            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            if($param1 == ""){
                $page_data['mostrar_tabla'] = "no_mostrar";

            }else{
                $page_data['mostrar_tabla'] = "mostrar";
                $this->load->model('Inscripcion');

                $estudiantes = Inscripcion::where('registro_activo', '=' , 1)
                                                    ->where('GradoACursar', '=' , $this->input->post('GradoACursar'))
                                                    ->where('SeccionACursar', '=' , $this->input->post('SeccionACursar'))
                                                    ->orderby('CedulaDeIdentidadDelAlumnoOCedulaEscolar')
                                                    ->get();

                $page_data['estudiantes'] = $estudiantes;

            }

            $page_data['grados'] = VistaGradoEscuela::where('id_escuela', '=', $id_school)
                                                ->orderBy('id_grado')
                                                ->groupBy('id_grado')
                                                ->get();

            $page_data['page_name']  = 'initial_enrolled';
            $page_data['page_title'] = "MATRÍCULA INICIAL POR GRADO";

            $this->load->view('backend/index', $page_data);
    }

    function census_edit($param1 = '', $param2 = '' , $param3 = '')
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            if ($param1 == 'edit' && $param2 == 'do_update') {
                $data['name']    = $this->input->post('name');
                $data['date']    = $this->input->post('date');
                $data['comment'] = $this->input->post('comment');

                foreach ($this->input->post() as $key => $value) {

                    log_message('debug', 'KEY  '.$key);
                    log_message('debug', 'VALUE  '.$value);
                }

                $this->db->where('id_censo', $param3);
                $this->db->update('censo', $data);
                //$this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');
                redirect(base_url() . '/admin/census_list/', 'refresh');
            } else if ($param1 == 'edit') {
                $this->load->database();
                $this->load->library('session');
                $this->load->model('Censo/Censo');
                $this->load->model('Censo/Grado_censo');
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

                $page_data['grados_censo'] = Grado_censo::orderBy('id_censo_grado')->get();
                $page_data['estados'] = Estado::orderBy('nombre')->get();
                $page_data['municipios'] = Municipio::orderBy('nombre')->get();
                $page_data['nivel_ingreso'] = Nivel_Ingreso_Censo::orderBy('id_nivel_ingreso_censo')->get();
                $page_data['estaturas'] = Estatura::orderBy('id_estatura')->get();
                $page_data['pesos'] = Peso::orderBy('id_peso')->get();
                $page_data['calzados'] = Talla_calzados::orderBy('id_talla_calzado')->get();
                $page_data['camisas'] = Talla_camisas::orderBy('id_talla_camisa')->get();
                $page_data['pantalones'] = Talla_pantalones::orderBy('id_talla_pantalon')->get();
                $page_data['escuelas'] = Escuela::orderBy('id_escuela')->get();
                $page_data['becas'] = Becas::orderBy('id_beca')->get();
                $page_data['sectores'] = Sectores_Chacao::orderBy('id_sector')->get();
                $page_data['id_censo_selected'] = $param2;

                $page_data['edit_data'] = $this->db->get_where('censo', array('id_censo' => $param2))->result_array();

            }
            if ($param1 == 'delete') {
                $data['StatusCenso'] = 4;
                $this->db->where('id_censo', $param2);
                $this->db->update('censo', $data);
                $this->session->set_flashdata('flash_message' , 'Registro anulado satisfactoriamente');
                redirect(base_url() . 'admin/census_list/', 'refresh');
            }
            if ($param1 == 'validate') {

                $this->load->database();
                $this->load->model('Censo/Censo');
                $this->load->model('Censo/Entrevista');

                $censo = Censo::find($param2);

                if($censo->UniDePrefAndres == 1){
                    $id_escuela = 1;
                }
                if($censo->UniDePrefJuanDio == 1){
                    $id_escuela = 2;
                }
                if($censo->UniDePrefCarlos == 1){
                    $id_escuela = 3;
                }

                $entrevista = Entrevista::where('id_escuela', '=', $id_escuela)
                                        ->where('disponible', '=', 1)
                                        ->orderBy('id_entrevista')
                                        ->get();

                $id_entrevista = $entrevista[0]->id_entrevista;

                $fecha_entrevista = date_format(date_create($entrevista[0]->fecha_asistencia), 'd/m/Y');
                $hora_entrevista = date_format(date_create($entrevista[0]->hora_asistencia), 'g:i A');

                $dia_entrevista = date_format(date_create($entrevista[0]->fecha_asistencia), 'd');
                $mes_entrevista = date_format(date_create($entrevista[0]->fecha_asistencia), 'm');
                $year_entrevista = date_format(date_create($entrevista[0]->fecha_asistencia), 'Y');

                switch ($mes_entrevista) {
                    case 01:
                        $mes_entrevista = 'ENERO';
                        break;
                    case 02:
                        $mes_entrevista = 'FEBRERO';
                        break;
                    case 03:
                        $mes_entrevista = 'MARZO';
                        break;
                    case 04:
                        $mes_entrevista = 'ABRIL';
                        break;
                    case 05:
                        $mes_entrevista = 'MAYO';
                        break;
                    case 06:
                        $mes_entrevista = 'JUNIO';
                        break;
                    case 07:
                        $mes_entrevista = 'JULIO';
                        break;
                    case 08:
                        $mes_entrevista = 'AGOSTO';
                        break;
                    case 09:
                        $mes_entrevista = 'SEPTIEMBRE';
                        break;
                    case 10:
                        $mes_entrevista = 'OCTUBRE';
                        break;
                    case 11:
                        $mes_entrevista = 'NOVIEMBRE';
                        break;
                    case 12:
                        $mes_entrevista = 'DICIEMBRE';
                        break;
                }

                // Se carga la libreria fpdf
                if($censo->UniDePrefAndres == 1){
                    $this->load->library('andres_bello/pdf');
                    $escuela_entrevista = 'UEM Andrés Bello';
                    $direccion_entrevista = "Av. Mohedano, cruce con calle Páez, frente a la Plaza Bolívar Chacao.";
                    $direccion_entrevista_uno = "la Av. Mohedano, cruce";
                    $direccion_entrevista_dos = "con calle Páez, frente a la Plaza Bolívar Chacao.";

                }
                if($censo->UniDePrefJuanDio == 1){
                    $this->load->library('guanche/pdf');
                    $escuela_entrevista = 'UEM Juan de Dios Guanche';
                    $direccion_entrevista = "Av. Pedro Matias Reyes Salazar, cruce con Calle Los Mangos, Sector El Pedregal - La Castellana.";
                    $direccion_entrevista_uno = "Av. Pedro Matias Reyes Salazar, cruce con Calle Los Mangos, ";
                    $direccion_entrevista_dos = "Sector El Pedregal - La Castellana.";
                }
                if($censo->UniDePrefCarlos == 1){
                    $this->load->library('carlos_soublette/pdf');
                    $escuela_entrevista = 'UEM Carlos Soublette';
                    $direccion_entrevista = "Av. Ávila con Calle Santa Ana, Urbanización Bello Campo.";
                    $direccion_entrevista_uno = "Av. Ávila con Calle Santa Ana, ";
                    $direccion_entrevista_dos = "Urbanización Bello Campo.";
                }

                // Cargo libreria de envio de correos
                $this->load->library('My_PHPMailer');

                //Datos solicitud
                $fecha_solicitud = $censo->FechaSolicitud; //EXTRAER FECHA
                $hora_solicitud = $censo->FechaSolicitud; //EXTRAER HORA
                $numero_control = $id_censo;

                //Datos representante
                $nombre_apellido_representante = $censo->PrimerNombreDelRepresentante.' '.$censo->SegundoNombreDelRepresentante.' '.$censo->PrimerApellidoDelRepresentante.' '.$censo->SegundoApellidoDelRepresentante;
                $email_representante = $censo->CorreoElectronicoDelRepresentante;

                //Creamos el pdf
                $this->pdf = new Pdf('P','mm','Letter');
                // Agregamos una página

                $this->pdf->AddPage();

                $this->pdf->Ln(5);
                $this->pdf->SetFont('Arial', 'B', 12);

                $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','CERTIFICADO ELECTRONICO DE CITA'),0,50,'C');
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
                $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252','Usted debe asistir conjuntamente con su representado (a)  el día '.$fecha_entrevista.', a las '.$hora_entrevista.' en la '.$escuela_entrevista.', ubicada en '.$direccion_entrevista_uno),0,50,'L');
                $this->pdf->Cell(0,5,iconv('UTF-8','windows-1252',$direccion_entrevista_dos.' En esta entrevista será será atendido (a) por la trabajadora social de la institución. Agradecemos'),0,50,'L');
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

                $filename = 'Certificado_Cita_Electronica_'.$param2.'.pdf';
                $pdfoutputfile = 'tmp_dir/'.$filename;
                $pdfdoc = $this->pdf->Output($pdfoutputfile, 'F');

                $email_from = "contactoeducacion@chacao.gob.ve"; // Who the email is from
                $email_subject = "Cita Electronica de Censo y Registro Escolar Alcaldia de Chacao"; // The Subject of the email
                $email_to = $email_representante;

                // set email message......................
                $email_message = "<html><body>Estimado Representante  <b>".$nombre_apellido_representante."</b> <br> <br>";
                $email_message .= "Reciba un cordial saludo en nombre del Equipo de Educaci&oacute;n Chacao, a trav&eacute;s de la presente hacemos constar que hemos recibido la informaci&oacute;n en el sistema. Por tal motivo, le informamos que su  entrevista ser&aacute; el  pr&oacute;ximo ". $dia_entrevista." del mes de ".$mes_entrevista." del a&ntilde;o 2016, a las ".$hora_entrevista." en la ".$escuela_entrevista.", ubicada en ".$direccion_entrevista." y ser&aacute; atendido (a) por la trabajadora social de la instituci&oacute;n.<br> <br>";
                $email_message .= "Recuerde  que usted debe estar acompa&ntilde;ado con su representado, y consignar  en carpeta manila, tama&ntilde;o oficio, los siguientes  recaudos: <br> <br>";
                $email_message .= "<b>     1. Certificado Electr&oacute;nico (enviado a su e-mail).</b> <br>";
                $email_message .= "<b>     2. Constancia  de Residencia vigente, del representante legal emitida del CNE (v&iacute;a web).</b> <br>";
                $email_message .= "<b>     3. Copia de la Partida de Nacimiento del ni&ntilde;o (a).</b> <br>";
                $email_message .= "<b>     4. Copia de la C&eacute;dula de identidad de ambos padres o del representante legal. Si el representante legal no es alguno de los padres, debe consignar documento  probatorio  que demuestre la guardia y custodia del ni&ntilde;o (a) emitido por los &oacute;rganos competente del estado.</b> <br>";
                $email_message .= "<b>     5. Constancia de vacunas y constancia de ni&ntilde;o sano.</b> <br>";
                $email_message .= "<b>     6. Original y fotocopia del bolet&iacute;n del &uacute;ltimo lapso y la Boleta de Promoci&oacute;n (Solo para Primer Grado).</b> <br>";
                $email_message .= "<b>(Todos estos documentos  ser&aacute;n chequeados contra originales)</b> <br>";

                $email_message .= "<br>Recuerde que estamos para servir!</body></html>";

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->SMTPDebug = 0;
                $mail->Host = "mail.chacao.gob.ve";
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = "contactoeducacion";
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
                    $data['StatusCenso'] = 1;
                    $this->db->where('id_censo', $param2);
                    $this->db->update('censo', $data);
                    $message = "¡El certificado electronico se ha enviado con éxito!";

                    $entrevista = Entrevista::where('id_entrevista', '=', $id_entrevista)
                                            ->where('id_escuela', '=', $id_escuela)
                                            ->update(array('disponible' => 0, 'id_censo_asignado' => $censo->id_censo));

                    $this->session->set_flashdata('flash_message' , $message);
                }
                redirect(base_url() . 'admin/census_list/', 'refresh');
            }

            $page_data['page_name']  = 'census_edit';
            $page_data['page_title'] = "Censo y Registro Escolar";
            $this->load->view('backend/index', $page_data);

    }

    function census_list($param1 = '', $param2 = '' , $param3 = '')
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            if ($param1 == 'edit' && $param2 == 'do_update') {
                $data['name']    = $this->input->post('name');
                $data['date']    = $this->input->post('date');
                $data['comment'] = $this->input->post('comment');

                $this->db->where('id_censo', $param2);
                $this->db->update('censo', $data);
                $this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');
                redirect(base_url() . 'admin/census_list/', 'refresh');
            } else if ($param1 == 'edit') {
                $page_data['edit_data'] = $this->db->get_where('censo', array('id_censo' => $param2))->result_array();
            }
            if ($param1 == 'delete') {
                $data['StatusCenso'] = 4;
                $this->db->where('id_censo', $param2);
                $this->db->update('censo', $data);
                $this->session->set_flashdata('flash_message' , 'Registro anulado satisfactoriamente');
                redirect(base_url() . 'admin/census_list/', 'refresh');
            }
            if ($param1 == 'validate') {

                    $this->load->database();

                    $this->load->model('Censo/Censo');
                    $this->load->model('Censo/Entrevista');

                    $censo = Censo::find($param2);

                    $data['StatusCenso'] = 1;
                    $this->db->where('id_censo', $param2);
                    $this->db->update('censo', $data);
                    $message = "¡El certificado electronico se ha enviado con éxito!";
                    $this->session->set_flashdata('flash_message' , $message);

                    redirect(base_url() . 'admin/census_list/', 'refresh');

            }

            $page_data['page_name']  = 'census_list';
            $page_data['page_title'] = "Lista de Censados";
            $this->load->view('backend/index', $page_data);

    }

    function census_list_aproved()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $selectOption = $_POST['lista_escuelas'];
            $cedula_suministrada = $_POST['cedula_identidad'];

            if (isset($_POST['lista_escuelas'])){
                    if($selectOption > 0){
                        $estudiante = Censo::where('CedulaDeIdentidadDelAlumnoOCedulaEscolar', '=', $cedula_suministrada)
                                            ->orWhere('CedulaDeIdentidadDelRepresentante', '=', $cedula_suministrada)
                                            ->update(array('IDEscuelaAsignada' => $selectOption));
                    }else{
                        echo "<script>alert('Debe Seleccionar Escuela');</script>";
                    }
            }

            $page_data['page_name']  = 'census_list_aproved';
            $page_data['page_title'] = "Lista de Censados Aprobados";
            $this->load->view('backend/index', $page_data);

    }

    function census($param1 = '', $param2 = '', $param3 = '')
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect('login', 'refresh');
            if ($param1 == 'create') {
                $data['name']       = $this->input->post('name');
                $data['birthday']   = $this->input->post('birthday');
                $data['sex']        = $this->input->post('sex');
                $data['address']    = $this->input->post('address');
                $data['phone']      = $this->input->post('phone');
                $data['email']      = $this->input->post('email');
                $data['password']   = $this->input->post('password');
                $data['class_id']   = $this->input->post('class_id');
                if ($this->input->post('section_id') != '') {
                    $data['section_id'] = $this->input->post('section_id');
                }
                $data['parent_id']  = $this->input->post('parent_id');
                $data['roll']       = $this->input->post('roll');
                $this->db->insert('student', $data);
                $student_id = $this->db->insert_id();
                move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $student_id . '.jpg');
                $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
                $this->email_model->account_opening_email('student', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
                redirect(base_url() . '/admin/student_add/' . $data['class_id'], 'refresh');
            }
            if ($param2 == 'do_update') {
                $data['name']        = $this->input->post('name');
                $data['birthday']    = $this->input->post('birthday');
                $data['sex']         = $this->input->post('sex');
                $data['address']     = $this->input->post('address');
                $data['phone']       = $this->input->post('phone');
                $data['email']       = $this->input->post('email');
                $data['class_id']    = $this->input->post('class_id');
                $data['section_id']  = $this->input->post('section_id');
                $data['parent_id']   = $this->input->post('parent_id');
                $data['roll']        = $this->input->post('roll');

                $this->db->where('student_id', $param3);
                $this->db->update('student', $data);
                move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $param3 . '.jpg');
                $this->crud_model->clear_cache();
                $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
                redirect(base_url() . '/admin/student_information/' . $param1, 'refresh');
            }

            if ($param2 == 'delete') {
                $this->db->where('student_id', $param3);
                $this->db->delete('student');
                $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
                redirect(base_url() . '/admin/student_information/' . $param1, 'refresh');
            }
    }

    //Validar recaudos de los estudiantes
    function recaudos_validate()
    {
        $resultado = 0;

            if(!empty($_POST)) {

                $recaudos = $_POST;
                $status = 0;
                $recaudo_insertado = 0;
                $recaudos_completados = 0;

                foreach ($recaudos  as $recaudo) {
                    $porciones = explode("-", $recaudo);
                    $id_recaudo = $porciones[0]; // id del recaudo
                    $id_estudiante = $porciones[1]; // id del estudiante
                    $Recaudo_Estudiante = new Recaudo_Estudiante;
                    $Recaudo_Estudiante->id_recaudo = $id_recaudo;
                    $Recaudo_Estudiante->id_estudiante = $id_estudiante;
                    $Recaudo_Estudiante->save();
                }

                if(!empty($Recaudo_Estudiante)) {
                    $status = 1;
                    $recaudo_insertado = 1;
                }

                $estudiante = Estudiante::find($id_estudiante);
                $id_grado = $estudiante->id_grado;
                $recaudos_grado = Recaudo_Grado::where('id_grado', 'LIKE', $id_grado)->get();
                $total_recaudos_grado = count($recaudos_grado);
                $recaudos_estudiante = Recaudo_Estudiante::where('id_estudiante', 'LIKE', $id_estudiante)->get();
                $total_recaudos_estudiante = count($recaudos_estudiante);

                if($total_recaudos_grado === $total_recaudos_estudiante) {
                    $recaudos_completados = 1;
                }

                $response = array(
                                  'status' => $status,
                                  'recaudo_insertado' => $recaudo_insertado,
                                  'recaudos_completados' => $recaudos_completados,
                                 );

                $data = json_encode($response);
                $resultado = 1;
                echo $data;
            }
            else
            {
                $response = array(
                                  'status' => 'vacio',
                                 );
                $data = json_encode($response);
                $resultado = 0;
                echo $data;

            }

            if($resultado > 0){
                echo '<script language="javascript">
                            alert("Datos guardados satisfactoriamente");
                            window.parent.location.reload();
                        </script>';
            }else{
                echo '<script language="javascript">
                            alert("Debe seleccionar recaudos, intentelo nuevamente");
                        </script>';
            }

            redirect(base_url() . '/admin/student_list/', 'refresh');
    }

    /****MANAGE STUDENTS CLASSWISE*****/
    function student_resume_full()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $page_data['inscritos_bello'] = $this->db->get('inscritos_bello')->result_array();
            $page_data['inscritos_guanche'] = $this->db->get('inscritos_guanche')->result_array();
            $page_data['inscritos_soublette'] = $this->db->get('inscritos_soublette')->result_array();

            $page_data['page_name']  = 'student_resume_full';
            $page_data['page_title'] = "Resumen de Inscritos por Escuela";
            $this->load->view('backend/index', $page_data);
    }

    function quota()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $page_data['cupos_bello'] = $this->db->get_where('grado_escuela', array('id_escuela' => 1))->result_array();
            $page_data['cupos_guanche'] = $this->db->get_where('grado_escuela', array('id_escuela' => 2))->result_array();
            $page_data['cupos_soublette'] = $this->db->get_where('grado_escuela', array('id_escuela' => 3))->result_array();



            $page_data['page_name']  = 'quota';
            $page_data['page_title'] = "Resumen de Cupos por Escuela";
            $this->load->view('backend/index', $page_data);
    }

    function student_resume_general($param1='')
    {
            $this->load->model('Censo/Rptresumen');
            $this->load->model('Grado');

            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $id_school = $this->config->item('id_school');

            if($param1 == ""){
                $page_data['mostrar_tabla'] = "no_mostrar";

                $page_data['residenteResumenGeneral'] = "";
                $page_data['gradoResumenGeneral'] = "";

                $page_data['fecha_nacimiento'] = "";
                $page_data['edad'] = "";
                $page_data['correo'] = "";
                $page_data['sector'] = "";
                $page_data['calle_avenida'] = "";
                $page_data['casa_apartamento'] = "";
                $page_data['piso'] = "";
                $page_data['telefono_habitacion'] = "";
                $page_data['telefono_celular'] = "";
                $page_data['urbanizacion'] = "";
                $page_data['estado'] = "";
                $page_data['municipio'] = "";
                $page_data['punto_referencia'] = "";
                $page_data['becado'] = "";
                $page_data['medio_traslado'] = "";
                $page_data['retira_solo'] = "";
                $page_data['datos_vivienda'] = "";
                $page_data['estatura'] = "";
                $page_data['peso'] = "";
                $page_data['calzado'] = "";
                $page_data['pantalon'] = "";
                $page_data['camisa'] = "";
                $page_data['padece_enfermedad'] = "";
                $page_data['diversidad_funcional'] = "";
                $page_data['alergico'] = "";
                $page_data['vacunas'] = "";
                $page_data['actividad_especial'] = "";
                $page_data['bautizo'] = "";
                $page_data['catolico'] = "";
                $page_data['comunion'] = "";
                $page_data['confirmacion'] = "";
            }else{
                $page_data['mostrar_tabla'] = "mostrar";

                $seccionResumenGeneral = $this->input->post('seccionResumenGeneral');
                $gradoResumenGeneral = $this->input->post('gradoResumenGeneral');

                if ($seccionResumenGeneral > 0){
                    $this->db->where('SeccionACursar', $seccionResumenGeneral);
                    $page_data['seccionResumenGeneral'] = $seccionResumenGeneral;
                }else{
                    $page_data['seccionResumenGeneral'] = 0;
                }

                if ($gradoResumenGeneral > 0){
                    $this->db->where('GradoACursar', $gradoResumenGeneral);
                    $page_data['gradoResumenGeneral'] = $gradoResumenGeneral;
                }else{
                    $page_data['gradoResumenGeneral'] = 0;
                }

                $this->db->where('StatusCenso', 0);

                $page_data['estudiantes'] = $this->db->get('inscripcion')->result_array();

                $page_data['fecha_nacimiento'] = $this->input->post('fecha_nacimiento');
                $page_data['edad'] = $this->input->post('edad');
                $page_data['correo'] = $this->input->post('correo');
                $page_data['sector'] = $this->input->post('sector');
                $page_data['calle_avenida'] = $this->input->post('calle_avenida');
                $page_data['casa_apartamento'] = $this->input->post('casa_apartamento');
                $page_data['piso'] = $this->input->post('piso');
                $page_data['telefono_habitacion'] = $this->input->post('telefono_habitacion');
                $page_data['telefono_celular'] = $this->input->post('telefono_celular');
                $page_data['urbanizacion'] = $this->input->post('urbanizacion');
                $page_data['estado'] = $this->input->post('estado');
                $page_data['municipio'] = $this->input->post('municipio');
                $page_data['punto_referencia'] = $this->input->post('punto_referencia');

                $page_data['becado'] = $this->input->post('becado');
                $page_data['medio_traslado'] = $this->input->post('medio_traslado');
                $page_data['retira_solo'] = $this->input->post('retira_solo');
                $page_data['datos_vivienda'] = $this->input->post('datos_vivienda');
                $page_data['estatura'] = $this->input->post('estatura');
                $page_data['peso'] = $this->input->post('peso');
                $page_data['calzado'] = $this->input->post('calzado');
                $page_data['pantalon'] = $this->input->post('pantalon');
                $page_data['camisa'] = $this->input->post('camisa');
                $page_data['padece_enfermedad'] = $this->input->post('padece_enfermedad');
                $page_data['diversidad_funcional'] = $this->input->post('diversidad_funcional');
                $page_data['alergico'] = $this->input->post('alergico');
                $page_data['vacunas'] = $this->input->post('vacunas');
                $page_data['actividad_especial'] = $this->input->post('actividad_especial');
                $page_data['bautizo'] = $this->input->post('bautizo');
                $page_data['catolico'] = $this->input->post('catolico');
                $page_data['comunion'] = $this->input->post('comunion');
                $page_data['confirmacion'] = $this->input->post('confirmacion');
            }

            $page_data['grados'] = Grado::orderBy('id_grado')->get();
            $page_data['page_name']  = 'student_resume_general';
            $page_data['page_title'] = "RESUMEN GENERAL DE INSCRITOS";
            $this->load->view('backend/index', $page_data);
    }

    function student_add()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect('login', 'refresh');

            $config = Configuracion::all();
            $page_data['config'] = $config;
            //$page_data['page_name']  = 'student_add';
            $page_data['page_name']  = 'census_body';
            $page_data['page_title'] = "Agregar Estudiante";

            $this->load->view('backend/index', $page_data);
    }

    function student_to_admit()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect('login', 'refresh');

            $config = Configuracion::all();
            $page_data['config'] = $config;
            //$page_data['page_name']  = 'student_add';
            $page_data['page_name']  = 'census_body';
            $page_data['page_title'] = "Admitir Estudiante";

            $this->load->view('backend/index', $page_data);
    }

    function student_list()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect('login', 'refresh');

            $config = Configuracion::all();
            $page_data['config'] = $config;
            $page_data['page_name']  = 'student_list';
            $page_data['page_title'] = "Estudiantes Pre-Inscritos";

            $this->load->view('backend/index', $page_data);

    }

    function school_list($param1='', $param2='', $param3='')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

        $config = Configuracion::all();
        $page_data['config'] = $config;
        $page_data['page_name']  = 'school_list';
        $page_data['page_title'] = "Escuelas del Sistema";

        if ($param1 == 'create') {
            $data['nombre_escuela']        = $this->input->post('nombre_escuela');
            $data['simple_name']    = $this->input->post('simple_name');
            $data['full_name']         = $this->input->post('full_name');
            $data['dea']     = $this->input->post('dea');
            $data['direccion']       = $this->input->post('direccion');
            $data['telefono']       = $this->input->post('telefono');
            $data['correo_electronico']    = $this->input->post('correo_electronico');
            $data['smtp_host']  = $this->input->post('smtp_host');
            $data['smtp_port']   = $this->input->post('smtp_port');
            $data['smtp_auth']        = $this->input->post('smtp_auth');
            $data['smtp_user']  = $this->input->post('smtp_user');
            $data['smtp_password']   = $this->input->post('smtp_password');
            $data['id_persona_director']   = $this->input->post('director');
            $data['director_encargado']   = $this->input->post('director_encargado');

            $this->db->insert('escuelas', $data);

            $this->session->set_flashdata('flash_message' , "Registro creado satisfactoriamente");
            redirect(base_url() . '/admin/school_list/', 'refresh');
        }

        if ($param1 == 'do_update') {
            $data['nombre_escuela']        = $this->input->post('nombre_escuela');
            $data['simple_name']    = $this->input->post('simple_name');
            $data['full_name']         = $this->input->post('full_name');
            $data['dea']     = $this->input->post('dea');
            $data['direccion']       = $this->input->post('direccion');
            $data['telefono']       = $this->input->post('telefono');
            $data['correo_electronico']    = $this->input->post('correo_electronico');
            $data['smtp_host']  = $this->input->post('smtp_host');
            $data['smtp_port']   = $this->input->post('smtp_port');
            $data['smtp_auth']        = $this->input->post('smtp_auth');
            $data['smtp_user']  = $this->input->post('smtp_user');
            $data['smtp_password']   = $this->input->post('smtp_password');
            $data['id_persona_director']   = $this->input->post('director');
            $data['director_encargado']   = $this->input->post('director_encargado');

            $this->db->where('id_escuela', $param2);
            $this->db->update('escuelas', $data);

            $this->session->set_flashdata('flash_message' , "Registro actualizado satisfactoriamente");
            redirect(base_url() . '/admin/school_list/', 'refresh');
        }


        $this->load->view('backend/index', $page_data);

    }

    function student_enrolled()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

        $config = Configuracion::all();
        $page_data['config'] = $config;
        $page_data['page_name']  = 'student_enrolled';
        $page_data['page_title'] = "Estudiantes Inscritos";


        $this->load->view('backend/index', $page_data);

    }

    function student_bulk_add($param1 = '')
    {
    	if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

    	if ($param1 == 'import_excel')
    	{
    		move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_import.xlsx');
    		// Importing excel sheet for bulk student uploads

    		include 'simplexlsx.class.php';

    		$xlsx = new SimpleXLSX('uploads/student_import.xlsx');

    		list($num_cols, $num_rows) = $xlsx->dimension();
    		$f = 0;
    		foreach( $xlsx->rows() as $r )
    		{
    			// Ignore the inital name row of excel file
    			if ($f == 0)
    			{
    				$f++;
    				continue;
    			}
    			for( $i=0; $i < $num_cols; $i++ )
    			{
    				if ($i == 0)	    $data['name']			=	$r[$i];
    				else if ($i == 1)	$data['birthday']		=	$r[$i];
    				else if ($i == 2)	$data['sex']		    =	$r[$i];
    				else if ($i == 3)	$data['address']		=	$r[$i];
    				else if ($i == 4)	$data['phone']			=	$r[$i];
    				else if ($i == 5)	$data['email']			=	$r[$i];
    				else if ($i == 6)	$data['password']		=	$r[$i];
    				else if ($i == 7)	$data['roll']			=	$r[$i];
    			}
    			$data['class_id']	=	$this->input->post('class_id');

    			$this->db->insert('student' , $data);
    			//print_r($data);
    		}
    		redirect(base_url() . '/admin/student_information/' . $this->input->post('class_id'), 'refresh');
    	}
    	$page_data['page_name']  = 'student_bulk_add';
    	$page_data['page_title'] = "Agregar Estudiantes en Lote";
    	$this->load->view('backend/index', $page_data);
    }

    function student_information($class_id = '')
    {
        $this->load->model('Escuela');
        $this->load->model('Estudiante');
        $this->load->model('VistaGradoEscuela');
        $this->load->model('Grado');
        $this->load->model('Grado_escuela');

        $id_school = $this->config->item('id_school');
        $matchSections = ['id_grado' => $class_id];
        $vsecciones = VistaGradoEscuela::where($matchSections)->get();

    	if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $num_grado = $vsecciones[0]->nombre_grado;
        $page_data['page_name']  	= 'student_information';
        $page_data['page_title'] 	= "Información del ".$num_grado;
        $page_data['class_id'] 	= $class_id;
        $this->load->view('backend/index', $page_data);
    }

    function student_marksheet($class_id = '')
    {
    	if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

    	$page_data['page_name']  = 'student_marksheet';
    	$page_data['page_title'] 	= "Hoja de Marca del Estudiante". " - ".get_phrase('class')." : ".
    										$this->crud_model->get_class_name($class_id);
    	$page_data['class_id'] 	= $class_id;
    	$this->load->view('backend/index', $page_data);
    }

    function student($param1 = '', $param2 = '', $param3 = '')
    {
            //log_message('debug',$param1);
            log_message('debug',$this->session->userdata);

            if ($this->session->userdata('admin_login') != 1)
                redirect('login', 'refresh');

            if ($param1 == 'create') {
                //log_message('debug','inside');
                $data['name']       = $this->input->post('name');
                $data['birthday']   = $this->input->post('birthday');
                $data['sex']        = $this->input->post('sex');
                $data['address']    = $this->input->post('address');
                $data['phone']      = $this->input->post('phone');
                $data['email']      = $this->input->post('email');
                $data['password']   = $this->input->post('password');
                $data['class_id']   = $this->input->post('class_id');
                if ($this->input->post('section_id') != '') {
                    $data['section_id'] = $this->input->post('section_id');
                }
                $data['parent_id']  = $this->input->post('parent_id');
                $data['roll']       = $this->input->post('roll');
                $this->db->insert('student', $data);
                $student_id = $this->db->insert_id();
                move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $student_id . '.jpg');
                $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
                $this->email_model->account_opening_email('student', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
                redirect(base_url() . '/admin/student_add/' . $data['class_id'], 'refresh');
            }
            if ($param2 == 'do_update') {
                $data['name']        = $this->input->post('name');
                $data['birthday']    = $this->input->post('birthday');
                $data['sex']         = $this->input->post('sex');
                $data['address']     = $this->input->post('address');
                $data['phone']       = $this->input->post('phone');
                $data['email']       = $this->input->post('email');
                $data['class_id']    = $this->input->post('class_id');
                $data['section_id']  = $this->input->post('section_id');
                $data['parent_id']   = $this->input->post('parent_id');
                $data['roll']        = $this->input->post('roll');


                $this->db->where('student_id', $param3);
                $this->db->update('student', $data);
                move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $param3 . '.jpg');
                $this->crud_model->clear_cache();
                $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
                redirect(base_url() . '/admin/student_information/' . $param1, 'refresh');
            }

            if ($param2 == 'delete') {
                $this->db->where('student_id', $param3);
                $this->db->delete('student');
                $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
                redirect(base_url() . '/admin/student_information/' . $param1, 'refresh');
            }
    }
     /****MANAGE PARENTS CLASSWISE*****/
    function parent($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']        			= $this->input->post('name');
            $data['email']       			= $this->input->post('email');
            $data['password']    			= $this->input->post('password');
            $data['phone']       			= $this->input->post('phone');
            $data['address']     			= $this->input->post('address');
            $data['profession']  			= $this->input->post('profession');
            $this->db->insert('parent', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            $this->email_model->account_opening_email('parent', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . '/admin/parent/', 'refresh');
        }
        if ($param1 == 'edit') {
            $data['name']                   = $this->input->post('name');
            $data['email']                  = $this->input->post('email');
            $data['phone']                  = $this->input->post('phone');
            $data['address']                = $this->input->post('address');
            $data['profession']             = $this->input->post('profession');
            $this->db->where('parent_id' , $param2);
            $this->db->update('parent' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/parent/', 'refresh');
        }
        if ($param1 == 'delete') {
            $this->db->where('parent_id' , $param2);
            $this->db->delete('parent');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/parent/', 'refresh');
        }
        $page_data['page_title'] 	= get_phrase('all_parents');
        $page_data['page_name']  = 'parent';
        $this->load->view('backend/index', $page_data);
    }


    /****MANAGE TEACHERS*****/
    function teacher($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

            $id_school = $this->config->item('id_school');

        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = date('Y-m-d', strtotime($this->input->post('birthday')));
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['mobile_phone']       = $this->input->post('mobile_phone');
            $data['email']       = $this->input->post('correo_electronico');
            $data['id_cargo']    = $this->input->post('id_cargo');
            $data['id_escuela']    = $this->input->post('id_escuela');
            $data['cedula_identidad']    = $this->input->post('letra_cedula').$this->input->post('cedula_identidad');


            $this->db->insert('teacher', $data);
            $teacher_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $teacher_id . '.jpg');
            $this->session->set_flashdata('flash_message' , 'Registro agregado satisfactoriamente');
            redirect(base_url().$this->session->userdata('login_type').'/teacher/', 'refresh');
        }
        if ($param1 == 'edit') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = date('Y-m-d', strtotime($this->input->post('birthday')));
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['mobile_phone']       = $this->input->post('mobile_phone');
            $data['email']       = $this->input->post('email');
            $data['id_cargo']    = $this->input->post('id_cargo');
            $data['id_escuela']    = $this->input->post('id_escuela');
            $data['cedula_identidad']    = $this->input->post('letra_cedula').$this->input->post('cedula_identidad');

            $this->db->where('teacher_id', $param2);
            $this->db->update('teacher', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');
            redirect(base_url().$this->session->userdata('login_type').'/teacher/', 'refresh');

        } else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('teacher', array('teacher_id' => $param2))->result_array();
        }
        if ($param1 == 'delete') {
            $data['registro_activo']    = 0;
            $this->db->where('teacher_id', $param2);
            $this->db->update('teacher', $data);
            $this->session->set_flashdata('flash_message' , 'Registro anulado satisfactoriamente');
            redirect(base_url().$this->session->userdata('login_type').'/teacher/', 'refresh');
        }
        $page_data['teachers']   = $this->db->get_where('vteachers', array('id_escuela' => $id_school, 'registro_activo' => 1 ))->result_array();
        $page_data['cargos']   = $this->db->get('cargo')->result_array();
        $page_data['escuelas']   = $this->db->get('escuelas')->result_array();
        $page_data['page_name']  = 'teacher';
        $page_data['page_title'] = "DOCENTES ";
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE SUBJECTS*****/
    function subject($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');
            $this->db->insert('subject', $data);
            $this->session->set_flashdata('flash_message' , 'Registro agregado satisfactoriamente');
            redirect(base_url() . '/admin/subject/'.$data['class_id'], 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');

            $this->db->where('subject_id', $param2);
            $this->db->update('subject', $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado');
            redirect(base_url() . '/admin/subject/'.$data['class_id'], 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('subject', array(
                'subject_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('subject_id', $param2);
            $this->db->delete('subject');
            $this->session->set_flashdata('flash_message' , 'Registro eliminado');
            redirect(base_url() . '/admin/subject/'.$param3, 'refresh');
        }
        $page_data['class_id']   = $param1;
        $page_data['subjects']   = $this->db->get_where('subject' , array('class_id' => $param1))->result_array();
        $page_data['page_name']  = 'subject';
        $page_data['page_title'] = 'Materias';
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE CLASSES*****/
    function classes($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');
            $this->db->insert('class', $data);
            $this->session->set_flashdata('flash_message' , 'Registro agregado satisfactoriamente');
            redirect(base_url() . '/admin/classes/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');

            $this->db->where('class_id', $param2);
            $this->db->update('class', $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado');
            redirect(base_url() . '/admin/classes/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class', array(
                'class_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_id', $param2);
            $this->db->delete('class');
            $this->session->set_flashdata('flash_message' , 'Registro eliminado');
            redirect(base_url() . '/admin/classes/', 'refresh');
        }
        $page_data['classes'] = $this->db->get_where('vniveleducativogrado' , array('id_nivel_educativo' => $param1))->result_array();
        $page_data['page_name']  = 'class';
        $page_data['page_title'] = 'Grados';
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE SECTIONS*****/
    function section($param1, $class_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $page_data['page_name']  = 'section';
        $page_data['page_title'] = 'Secciones';
        $page_data['class_id']   = $class_id;
        $page_data['classes'] = $this->db->get_where('vniveleducativogrado' , array('id_nivel_educativo' => $param1))->result_array();
        $this->load->view('backend/index', $page_data);
    }

    function sections($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']       =   $this->input->post('name');
            $data['nick_name']  =   $this->input->post('nick_name');
            $data['class_id']   =   $this->input->post('class_id');
            $data['teacher_id'] =   $this->input->post('teacher_id');
            $this->db->insert('section' , $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');
            redirect(base_url() . '/admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'edit') {
            $data['name']       =   $this->input->post('name');
            $data['nick_name']  =   $this->input->post('nick_name');
            $data['class_id']   =   $this->input->post('class_id');
            $data['teacher_id'] =   $this->input->post('teacher_id');
            $this->db->where('section_id' , $param2);
            $this->db->update('section' , $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado');
            redirect(base_url() . '/admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('section_id' , $param2);
            $this->db->delete('section');
            $this->session->set_flashdata('flash_message' , 'Registro eliminado');
            redirect(base_url() . '/admin/section' , 'refresh');
        }
    }

    function get_class_section($class_id)
    {
        $sections = $this->db->get_where('vescuela_seccion' , array('id_grado' => $class_id))->result_array();
        foreach ($sections as $row) {
            echo '<option value="' . $row['id_seccion'] . '">' . $row['nombre_seccion'] . '</option>';
        }
    }

    function get_class_subject($class_id)
    {
        $subjects = $this->db->get_where('subject' , array(
            'class_id' => $class_id
        ))->result_array();
        foreach ($subjects as $row) {
            echo '<option value="' . $row['subject_id'] . '">' . $row['name'] . '</option>';
        }
    }

    /****MANAGE EXAMS*****/
    function exam($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');
            $this->db->insert('exam', $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');
            redirect(base_url() . '/admin/exam/', 'refresh');
        }
        if ($param1 == 'edit' && $param2 == 'do_update') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');

            $this->db->where('exam_id', $param3);
            $this->db->update('exam', $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado');
            redirect(base_url() . '/admin/exam/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('exam', array(
                'exam_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('exam_id', $param2);
            $this->db->delete('exam');
            $this->session->set_flashdata('flash_message' , 'Registro eliminado');
            redirect(base_url() . '/admin/exam/', 'refresh');
        }
        $page_data['exams']      = $this->db->get('exam')->result_array();
        $page_data['page_name']  = 'exam';
        $page_data['page_title'] = "Evaluaciones";
        $this->load->view('backend/index', $page_data);
    }

    /****** SEND EXAM MARKS VIA SMS ********/
    function exam_marks_sms($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'send_sms') {

            $exam_id    =   $this->input->post('exam_id');
            $class_id   =   $this->input->post('class_id');
            $receiver   =   $this->input->post('receiver');

            // get all the students of the selected class
            $students = $this->db->get_where('student' , array(
                'class_id' => $class_id
            ))->result_array();
            // get the marks of the student for selected exam
            foreach ($students as $row) {
                if ($receiver == 'student')
                    $receiver_phone = $row['phone'];
                if ($receiver == 'parent' && $row['parent_id'] != '')
                    $receiver_phone = $this->db->get_where('parent' , array('parent_id' => $row['parent_id']))->row()->phone;


                $this->db->where('exam_id' , $exam_id);
                $this->db->where('student_id' , $row['student_id']);
                $marks = $this->db->get('mark')->result_array();
                $message = '';
                foreach ($marks as $row2) {
                    $subject       = $this->db->get_where('subject' , array('subject_id' => $row2['subject_id']))->row()->name;
                    $mark_obtained = $row2['mark_obtained'];
                    $message      .= $row2['student_id'] . $subject . ' : ' . $mark_obtained . ' , ';

                }
                // send sms
                $this->sms_model->send_sms( $message , $receiver_phone );
            }
            $this->session->set_flashdata('flash_message' , get_phrase('message_sent'));
            redirect(base_url() . '/admin/exam_marks_sms' , 'refresh');
        }

        $page_data['page_name']  = 'exam_marks_sms';
        $page_data['page_title'] = get_phrase('send_marks_by_sms');
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE EXAM MARKS*****/
    function marks($exam_id = '', $class_id = '', $subject_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($this->input->post('operation') == 'selection') {
            $page_data['exam_id']    = $this->input->post('exam_id');
            $page_data['class_id']   = $this->input->post('class_id');
            $page_data['subject_id'] = $this->input->post('subject_id');

            if ($page_data['exam_id'] > 0 && $page_data['class_id'] > 0 && $page_data['subject_id'] > 0) {
                redirect(base_url() . '/admin/marks/' . $page_data['exam_id'] . '/' . $page_data['class_id'] . '/' . $page_data['subject_id'], 'refresh');
            } else {
                $this->session->set_flashdata('mark_message', 'Elige examen, grado y materia');
                redirect(base_url() . '/admin/marks/', 'refresh');
            }
        }
        if ($this->input->post('operation') == 'update') {
            $data['mark_obtained'] = $this->input->post('mark_obtained');
            $data['comment']       = $this->input->post('comment');

            $this->db->where('mark_id', $this->input->post('mark_id'));
            $this->db->update('mark', $data);
            $this->session->set_flashdata('flash_message' , "Registro actualizado");
            redirect(base_url() . '/admin/marks/' . $this->input->post('exam_id') . '/' . $this->input->post('class_id') . '/' . $this->input->post('subject_id'), 'refresh');
        }
        $page_data['exam_id']    = $exam_id;
        $page_data['class_id']   = $class_id;
        $page_data['subject_id'] = $subject_id;

        $page_data['page_info'] = 'Exam marks';

        $page_data['page_name']  = 'marks';
        $page_data['page_title'] = 'Calificaciones';
        $this->load->view('backend/index', $page_data);
    }


    /****MANAGE GRADES*****/
    function grade($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');
            $this->db->insert('grade', $data);
            $this->session->set_flashdata('flash_message' , 'Registro agregado satisfactoriamente');
            redirect(base_url() . '/admin/grade/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');

            $this->db->where('grade_id', $param2);
            $this->db->update('grade', $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado');
            redirect(base_url() . '/admin/grade/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('grade', array(
                'grade_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('grade_id', $param2);
            $this->db->delete('grade');
            $this->session->set_flashdata('flash_message' , 'Registro eliminado');
            redirect(base_url() . '/admin/grade/', 'refresh');
        }
        $page_data['grades']     = $this->db->get('grade')->result_array();
        $page_data['page_name']  = 'grade';
        $page_data['page_title'] = "Ponderaciones";
        $this->load->view('backend/index', $page_data);
    }

    /**********MANAGING CLASS ROUTINE******************/
    function class_routine($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['day']        = $this->input->post('day');
            $this->db->insert('class_routine', $data);
            $this->session->set_flashdata('flash_message' , 'Registro agregado satisfactoriamente');
            redirect(base_url() . '/admin/class_routine/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['day']        = $this->input->post('day');

            $this->db->where('class_routine_id', $param2);
            $this->db->update('class_routine', $data);
            $this->session->set_flashdata('flash_message' , 'Registro actualizado');
            redirect(base_url() . '/admin/class_routine/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class_routine', array(
                'class_routine_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_routine_id', $param2);
            $this->db->delete('class_routine');
            $this->session->set_flashdata('flash_message' , 'Registro eliminado');
            redirect(base_url() . '/admin/class_routine/', 'refresh');
        }
        $page_data['page_name']  = 'class_routine';
        $page_data['page_title'] = "Horarios";
        $this->load->view('backend/index', $page_data);
    }

	/****** DAILY ATTENDANCE *****************/
	function manage_attendance($date='',$month='',$year='',$nivel_educativo='',$class_id='')
	{
		if($this->session->userdata('admin_login')!=1)redirect('login' , 'refresh');

		if($_POST)
		{
			// Loop all the students of $class_id
            $students   =   $this->db->get_where('student', array('class_id' => $class_id))->result_array();
            foreach ($students as $row)
            {
                $attendance_status  =   $this->input->post('status_' . $row['student_id']);

                $this->db->where('student_id' , $row['student_id']);
                $this->db->where('date' , $this->input->post('date'));

                $this->db->update('attendance' , array('status' => $attendance_status));
            }

			$this->session->set_flashdata('flash_message' , 'Registro actualizado');
			redirect(base_url() . '/admin/manage_attendance/'.$date.'/'.$month.'/'.$year.'/'.$class_id , 'refresh');
		}
        $page_data['date']     =	$date;
        $page_data['month']    =	$month;
        $page_data['year']     =	$year;
        $page_data['class_id'] =	$class_id;
        $page_data['id_nivel_educativo'] =    $nivel_educativo;
        $page_data['classes'] = $this->db->get_where('vniveleducativogrado' , array('id_nivel_educativo' => $nivel_educativo))->result_array();
        $page_data['page_name']  =	'manage_attendance';
        $page_data['page_title'] =	'Asistencia';
		$this->load->view('backend/index', $page_data);
	}

	function attendance_selector()
	{
		redirect(base_url() . '/admin/manage_attendance/'.$this->input->post('date').'/'.
					$this->input->post('month').'/'.
						$this->input->post('year').'/3/'.
                                                                                            $this->input->post('class_id'), 'refresh');
	}

    /******MANAGE BILLING / INVOICES WITH STATUS*****/
    function invoice($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'create') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['amount_paid']        = $this->input->post('amount_paid');
            $data['due']                = $data['amount'] - $data['amount_paid'];
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));

            $this->db->insert('invoice', $data);
            $invoice_id = $this->db->insert_id();

            $data2['invoice_id']        =   $invoice_id;
            $data2['student_id']        =   $this->input->post('student_id');
            $data2['title']             =   $this->input->post('title');
            $data2['description']       =   $this->input->post('description');
            $data2['payment_type']      =  'income';
            $data2['method']            =   $this->input->post('method');
            $data2['amount']            =   $this->input->post('amount_paid');
            $data2['timestamp']         =   strtotime($this->input->post('date'));

            $this->db->insert('payment' , $data2);

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/invoice', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));

            $this->db->where('invoice_id', $param2);
            $this->db->update('invoice', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/invoice', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('invoice', array(
                'invoice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'take_payment') {
            $data['invoice_id']   =   $this->input->post('invoice_id');
            $data['student_id']   =   $this->input->post('student_id');
            $data['title']        =   $this->input->post('title');
            $data['description']  =   $this->input->post('description');
            $data['payment_type'] =   'income';
            $data['method']       =   $this->input->post('method');
            $data['amount']       =   $this->input->post('amount');
            $data['timestamp']    =   strtotime($this->input->post('timestamp'));
            $this->db->insert('payment' , $data);

            $data2['amount_paid']   =   $this->input->post('amount');
            $this->db->where('invoice_id' , $param2);
            $this->db->set('amount_paid', 'amount_paid + ' . $data2['amount_paid'], FALSE);
            $this->db->set('due', 'due - ' . $data2['amount_paid'], FALSE);
            $this->db->update('invoice');

            $this->session->set_flashdata('flash_message' , get_phrase('payment_successfull'));
            redirect(base_url() . '/admin/invoice', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('invoice_id', $param2);
            $this->db->delete('invoice');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/invoice', 'refresh');
        }
        $page_data['page_name']  = 'invoice';
        $page_data['page_title'] = get_phrase('manage_invoice/payment');
        $this->db->order_by('creation_timestamp', 'desc');
        $page_data['invoices'] = $this->db->get('invoice')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    /**********ACCOUNTING********************/
    function income($param1 = '' , $param2 = '')
    {
       if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']  = 'income';
        $page_data['page_title'] = get_phrase('incomes');
        $this->db->order_by('creation_timestamp', 'desc');
        $page_data['invoices'] = $this->db->get('invoice')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    function expense($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['title']               =   $this->input->post('title');
            $data['expense_category_id'] =   $this->input->post('expense_category_id');
            $data['description']         =   $this->input->post('description');
            $data['payment_type']        =   'expense';
            $data['method']              =   $this->input->post('method');
            $data['amount']              =   $this->input->post('amount');
            $data['timestamp']           =   strtotime($this->input->post('timestamp'));
            $this->db->insert('payment' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/expense', 'refresh');
        }

        if ($param1 == 'edit') {
            $data['title']               =   $this->input->post('title');
            $data['expense_category_id'] =   $this->input->post('expense_category_id');
            $data['description']         =   $this->input->post('description');
            $data['payment_type']        =   'expense';
            $data['method']              =   $this->input->post('method');
            $data['amount']              =   $this->input->post('amount');
            $data['timestamp']           =   strtotime($this->input->post('timestamp'));
            $this->db->where('payment_id' , $param2);
            $this->db->update('payment' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/expense', 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('payment_id' , $param2);
            $this->db->delete('payment');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/expense', 'refresh');
        }

        $page_data['page_name']  = 'expense';
        $page_data['page_title'] = get_phrase('expenses');
        $this->load->view('backend/index', $page_data);
    }

    function expense_category($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']   =   $this->input->post('name');
            $this->db->insert('expense_category' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/expense_category');
        }
        if ($param1 == 'edit') {
            $data['name']   =   $this->input->post('name');
            $this->db->where('expense_category_id' , $param2);
            $this->db->update('expense_category' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/expense_category');
        }
        if ($param1 == 'delete') {
            $this->db->where('expense_category_id' , $param2);
            $this->db->delete('expense_category');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/expense_category');
        }

        $page_data['page_name']  = 'expense_category';
        $page_data['page_title'] = get_phrase('expense_category');
        $this->load->view('backend/index', $page_data);
    }

    /**********MANAGE LIBRARY / BOOKS********************/
    function book($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');
            $this->db->insert('book', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/book', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');

            $this->db->where('book_id', $param2);
            $this->db->update('book', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/book', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('book', array(
                'book_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('book_id', $param2);
            $this->db->delete('book');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/book', 'refresh');
        }
        $page_data['books']      = $this->db->get('book')->result_array();
        $page_data['page_name']  = 'book';
        $page_data['page_title'] = get_phrase('manage_library_books');
        $this->load->view('backend/index', $page_data);

    }
    /**********MANAGE TRANSPORT / VEHICLES / ROUTES********************/
    function transport($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');
            $this->db->insert('transport', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/transport', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');

            $this->db->where('transport_id', $param2);
            $this->db->update('transport', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/transport', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('transport', array(
                'transport_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('transport_id', $param2);
            $this->db->delete('transport');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/transport', 'refresh');
        }
        $page_data['transports'] = $this->db->get('transport')->result_array();
        $page_data['page_name']  = 'transport';
        $page_data['page_title'] = get_phrase('manage_transport');
        $this->load->view('backend/index', $page_data);

    }
    /**********MANAGE DORMITORY / HOSTELS / ROOMS ********************/
    function dormitory($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');
            $this->db->insert('dormitory', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/dormitory', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');

            $this->db->where('dormitory_id', $param2);
            $this->db->update('dormitory', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/dormitory', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('dormitory', array(
                'dormitory_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('dormitory_id', $param2);
            $this->db->delete('dormitory');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/dormitory', 'refresh');
        }
        $page_data['dormitories'] = $this->db->get('dormitory')->result_array();
        $page_data['page_name']   = 'dormitory';
        $page_data['page_title']  = get_phrase('manage_dormitory');
        $this->load->view('backend/index', $page_data);

    }

    /***MANAGE EVENT / NOTICEBOARD, WILL BE SEEN BY ALL ACCOUNTS DASHBOARD**/
    function noticeboard($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'do_update') {

            $check_sms_send = $this->input->post('check_sms');

                // sms sending configurations
                $message = $this->input->post('notice');
                $reciever_phone = $this->input->post('notice_title');

                $this->sms_model->send_sms($message , $reciever_phone);

            redirect(base_url() . '/admin/send_sms/', 'refresh');
        }


    }

    /* private messaging */

    function message($param1 = 'message_home', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'send_new') {
            $message_thread_code = $this->crud_model->send_new_private_message();
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . '/admin/message/message_read/' . $message_thread_code, 'refresh');
        }

        if ($param1 == 'send_reply') {
            $this->crud_model->send_reply_message($param2);  //$param2 = message_thread_code
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . '/admin/message/message_read/' . $param2, 'refresh');
        }

        if ($param1 == 'message_read') {
            $page_data['current_message_thread_code'] = $param2;  // $param2 = message_thread_code
            $this->crud_model->mark_thread_messages_read($param2);
        }

        $page_data['message_inner_page_name']   = $param1;
        $page_data['page_name']                 = 'message';
        $page_data['page_title']                = get_phrase('private_messaging');
        $this->load->view('backend/index', $page_data);
    }

    /*****SITE/SYSTEM SETTINGS*********/
    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . '/login', 'refresh');

        if ($param1 == 'do_update') {

            $data['valor'] = $this->input->post('system_name');
            $this->db->where('nombre' , 'nombre_sistema');
            $this->db->update('configuraciones' , $data);

            $data['valor'] = $this->input->post('system_title');
            $this->db->where('nombre' , 'titulo_sistema');
            $this->db->update('configuraciones' , $data);

            $data['valor'] = $this->input->post('address');
            $this->db->where('nombre' , 'direccion');
            $this->db->update('configuraciones' , $data);

            $data['valor'] = $this->input->post('phone');
            $this->db->where('nombre' , 'telefono');
            $this->db->update('configuraciones' , $data);

            $data['valor'] = $this->input->post('correo_sistema');
            $this->db->where('nombre' , 'system_email');
            $this->db->update('configuraciones' , $data);

            $this->session->set_flashdata('flash_message' , "Registro actualizado satisfactoriamente");
            redirect(base_url() . '/admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', "Registro actualizado satisfactoriamente");
            redirect(base_url() . '/admin/system_settings/', 'refresh');
        }

        $page_data['page_name']  = 'system_settings';
        $page_data['page_title'] = "Ajustes Generales";
        $page_data['settings']   = $this->db->get('configuraciones')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    /*****SITE/SYSTEM CONFIGURATIONS*********/
    function system_config($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . '/login', 'refresh');

        if ($param1 == 'do_update') {
            //DIRECTOR
            $data['description'] = $this->input->post('director');
            $this->db->where('type' , 'system_name');
            $this->db->update('escuelas' , $data);

            //CUPOS
            $data['cupos'] = $this->input->post('cupos');
            $this->db->where('cupos' , 'cupos');
            $this->db->update('escuelas' , $data);

            //DIRECTOR ENCARGADO
            $data['director_encargado'] = $this->input->post('director_encargado');
            $this->db->where('director_encargado' , 'director_encargado');
            $this->db->update('escuelas' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/system_config/', 'refresh');
        }


        $page_data['page_name']  = 'system_config';
        $page_data['page_title'] = "Configuraciones Generales";
        $page_data['settings']   = $this->db->get('configuraciones')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    /***** UPDATE PRODUCT *****/
    function update( $task = '', $purchase_code = '' ) {

        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        // Create update directory.
        $dir    = 'update';
        if ( !is_dir($dir) )
            mkdir($dir, 0777, true);

        $zipped_file_name   = $_FILES["file_name"]["name"];
        $path               = 'update/' . $zipped_file_name;

        move_uploaded_file($_FILES["file_name"]["tmp_name"], $path);

        // Unzip uploaded update file and remove zip file.
        $zip = new ZipArchive;
        $res = $zip->open($path);
        if ($res === TRUE) {
            $zip->extractTo('update');
            $zip->close();
            unlink($path);
        }

        $unzipped_file_name = substr($zipped_file_name, 0, -4);
        $str                = file_get_contents('./update/' . $unzipped_file_name . '/update_config.json');
        $json               = json_decode($str, true);

        // Run updated sql file.
        $schema     = read_file('./update/' . $unzipped_file_name . '/' . $json['sql_file']);
        $query      = rtrim( trim($schema), "\n;");
        $query_list = explode(";", $query);

        foreach($query_list as $query)
            $this->db->query($query);

		// Run php modifications
		require './update/' . $unzipped_file_name . '/update_script.php';

        // Create new directories.
        if(!empty($json['directory'])) {
            foreach($json['directory'] as $directory) {
                if ( !is_dir( $directory['name']) )
                    mkdir( $directory['name'], 0777, true );
            }
        }

        // Create/Replace new files.
        if(!empty($json['files'])) {
            foreach($json['files'] as $file)
                copy($file['root_directory'], $file['update_directory']);
        }

        $this->session->set_flashdata('flash_message' , get_phrase('product_updated_successfully'));
        redirect(base_url() . '/admin/system_settings');
    }



    /*****SMS SETTINGS*********/
    function sms_settings($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . '/login', 'refresh');
        if ($param1 == 'clickatell') {

            $data['description'] = $this->input->post('clickatell_user');
            $this->db->where('type' , 'clickatell_user');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('clickatell_password');
            $this->db->where('type' , 'clickatell_password');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('clickatell_api_id');
            $this->db->where('type' , 'clickatell_api_id');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/sms_settings/', 'refresh');
        }

        if ($param1 == 'twilio') {

            $data['description'] = $this->input->post('twilio_account_sid');
            $this->db->where('type' , 'twilio_account_sid');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('twilio_auth_token');
            $this->db->where('type' , 'twilio_auth_token');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('twilio_sender_phone_number');
            $this->db->where('type' , 'twilio_sender_phone_number');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/sms_settings/', 'refresh');
        }

        if ($param1 == 'active_service') {

            $data['description'] = $this->input->post('active_sms_service');
            $this->db->where('type' , 'active_sms_service');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/sms_settings/', 'refresh');
        }

        $page_data['page_name']  = 'sms_settings';
        $page_data['page_title'] = get_phrase('sms_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }

    /*****LANGUAGE SETTINGS*********/
    function manage_language($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . '/login', 'refresh');

		if ($param1 == 'edit_phrase') {
			$page_data['edit_profile'] 	= $param2;
		}
		if ($param1 == 'update_phrase') {
			$language	=	$param2;
			$total_phrase	=	$this->input->post('total_phrase');
			for($i = 1 ; $i < $total_phrase ; $i++)
			{
				//$data[$language]	=	$this->input->post('phrase').$i;
				$this->db->where('phrase_id' , $i);
				$this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
			}
			redirect(base_url() . '/admin/manage_language/edit_phrase/'.$language, 'refresh');
		}
		if ($param1 == 'do_update') {
			$language        = $this->input->post('language');
			$data[$language] = $this->input->post('phrase');
			$this->db->where('phrase_id', $param2);
			$this->db->update('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . '/admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_phrase') {
			$data['phrase'] = $this->input->post('phrase');
			$this->db->insert('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . '/admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_language') {
			$language = $this->input->post('language');
			$this->load->dbforge();
			$fields = array(
				$language => array(
					'type' => 'LONGTEXT'
				)
			);
			$this->dbforge->add_column('language', $fields);

			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . '/admin/manage_language/', 'refresh');
		}
		if ($param1 == 'delete_language') {
			$language = $param2;
			$this->load->dbforge();
			$this->dbforge->drop_column('language', $language);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));

			redirect(base_url() . '/admin/manage_language/', 'refresh');
		}
		$page_data['page_name']        = 'manage_language';
		$page_data['page_title']       = get_phrase('manage_language');
		//$page_data['language_phrases'] = $this->db->get('language')->result_array();
		$this->load->view('backend/index', $page_data);
    }

    /*****BACKUP / RESTORE / DELETE DATA PAGE**********/
    function backup_restore($operation = '', $type = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($operation == 'create') {
            $this->crud_model->create_backup($type);
        }
        if ($operation == 'restore') {
            $this->crud_model->restore_backup();
            $this->session->set_flashdata('backup_message', 'Backup Restored');
            redirect(base_url() . '/admin/backup_restore/', 'refresh');
        }
        if ($operation == 'delete') {
            $this->crud_model->truncate($type);
            $this->session->set_flashdata('backup_message', 'Data removed');
            redirect(base_url() . '/admin/backup_restore/', 'refresh');
        }

        $page_data['page_info']  = 'Create backup / restore from backup';
        $page_data['page_name']  = 'backup_restore';
        $page_data['page_title'] = get_phrase('manage_backup_restore');
        $this->load->view('backend/index', $page_data);
    }

    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . '/login', 'refresh');

        if ($param1 == 'update_profile_info') {

            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' . $this->session->userdata('admin_id') . '.jpg');
            $this->session->set_flashdata('flash_message', "Perfil actualizado satisfactoriamente");
            redirect(base_url().$this->session->userdata('login_type').'/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $data['password']             = $this->input->post('password');
            $data['new_password']         = $this->input->post('new_password');
            $data['confirm_new_password'] = $this->input->post('confirm_new_password');

            $current_password = $this->db->get_where('usuarios', array('id_usuario' => $this->session->userdata('admin_id')))->row()->clave;

            if (password_verify($data['password'], $current_password) && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('id_usuario', $this->session->userdata('admin_id'));
                $this->db->update('usuarios', array('clave' => password_hash($data['new_password'], PASSWORD_DEFAULT)));
                $this->session->set_flashdata('flash_message', "Contraseña actualizada");
            } else {
                $this->session->set_flashdata('flash_message', "Las contraseñas no coinciden");
            }
            redirect(base_url().$this->session->userdata('login_type').'/manage_profile/', 'refresh');
        }

        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = "PERFIL";
        $page_data['edit_data']  = $this->db->get_where('usuarios', array('id_usuario' => $this->session->userdata('admin_id')))->result_array();

        $this->load->view('backend/index', $page_data);
    }

    // TABULATION SHEET
    function tabulation_sheet($class_id = '' , $exam_id = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($this->input->post('operation') == 'selection') {
            $page_data['exam_id']    = $this->input->post('exam_id');
            $page_data['class_id']   = $this->input->post('class_id');

            if ($page_data['exam_id'] > 0 && $page_data['class_id'] > 0) {
                redirect(base_url() . 'admin/tabulation_sheet/' . $page_data['class_id'] . '/' . $page_data['exam_id'] , 'refresh');
            } else {
                $this->session->set_flashdata('mark_message', 'Elija grado y examen');
                redirect(base_url() . 'admin/tabulation_sheet/', 'refresh');
            }
        }
        $page_data['exam_id']    = $exam_id;
        $page_data['class_id']   = $class_id;

        $page_data['page_info'] = 'Exam marks';

        $page_data['page_name']  = 'tabulation_sheet';
        $page_data['page_title'] = "Hoja de Calificaciones";
        $this->load->view('backend/index', $page_data);

    }

    function tabulation_sheet_print_view($class_id , $exam_id) {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['class_id'] = $class_id;
        $page_data['exam_id']  = $exam_id;
        $this->load->view('backend/admin/tabulation_sheet_print_view' , $page_data);
    }

    /****MANAGE PERFILES*****/
    function profiles($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'create') {
            $data['nombre']        = $this->input->post('perfil_name');
            $data['descripcion']        = $this->input->post('perfil_desc');

            $this->db->insert('perfil', $data);
            $this->session->set_flashdata('flash_message' , 'Registro agregado satisfactoriamente');
            redirect(base_url() . 'admin/profiles/', 'refresh');
        }

        if ($param1 == 'edit') {
        $data['nombre']        = $this->input->post('nombre');
        $data['descripcion']   = $this->input->post('descripcion');
        $this->db->where('id_perfil', $param2);
        $this->db->update('perfil', $data);
        $this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');
        redirect(base_url() . 'admin/profiles/', 'refresh');
        }
        if ($param1 == 'delete') {
            $data['registro_activo']  = 0;
            $this->db->where('id_perfil', $param2);
            $this->db->update('perfil', $data);
            $this->session->set_flashdata('flash_message' , 'Registro desactivado satisfactoriamente');
            redirect(base_url() . 'admin/profiles/', 'refresh');
        }
        if ($param1 == 'activate') {
            $data['registro_activo']  = 1;
            $this->db->where('id_perfil', $param2);
            $this->db->update('perfil', $data);
            $this->session->set_flashdata('flash_message' , 'Registro activado satisfactoriamente');
            redirect(base_url() . 'admin/profiles/', 'refresh');
        }
        $page_data['perfiles']   = $this->db->get('perfil')->result_array();
        $page_data['page_name']  = 'profiles';
        $page_data['page_title'] = "Perfiles";
        $this->load->view('backend/index', $page_data);
    }

    function profile_options($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        if ($param1 == 'create') {
            //censo
            $data_censo['acceder'] = $this->input->post('acceder-censo');
            $data_censo['registrar']       = $this->input->post('registrar-censo');
            $data_censo['validar']        = $this->input->post('validar-censo');
            $data_censo['editar'] = $this->input->post('editar-censo');
            $data_censo['ver']       = $this->input->post('ver-censo');
            $data_censo['aprobar']       = $this->input->post('aprobar-censo');
            $data_censo['descargar']       = $this->input->post('descargar-censo');
            $data_censo['anular']       = $this->input->post('anular-censo');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_censo', $data_censo);
            //inscripcion
            $data_inscripcion['acceder'] = $this->input->post('acceder-inscripcion');
            $data_inscripcion['registrar']       = $this->input->post('registrar-inscripcion');
            $data_inscripcion['validar']        = $this->input->post('validar-inscripcion');
            $data_inscripcion['editar'] = $this->input->post('editar-inscripcion');
            $data_inscripcion['ver']       = $this->input->post('ver-inscripcion');
            $data_inscripcion['descargar']       = $this->input->post('descargar-inscripcion');
            $data_inscripcion['aprobar']       = $this->input->post('aprobar-inscripcion');
            $data_inscripcion['anular']       = $this->input->post('anular-inscripcion');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_inscripcion', $data_inscripcion);
            //inicial
            $data_inicial['acceder'] = $this->input->post('acceder-inicial');
            $data_inicial['elaborar']       = $this->input->post('elaborar-inicial');
            $data_inicial['editar']        = $this->input->post('editar-inicial');
            $data_inicial['asistencia']       = $this->input->post('asistencia-inicial');
            $data_inicial['grado']       = $this->input->post('grado-inicial');
            $data_inicial['secciones']       = $this->input->post('seccion-inicial');
            $data_inicial['docentes']        = $this->input->post('docentes-inicial');
            $data_inicial['evaluaciones'] = $this->input->post('evaluacion-inicial');
            $data_inicial['calificar']       = $this->input->post('calificar-inicial');
            $data_inicial['calificaciones']       = $this->input->post('calificaciones-inicial');
            $data_inicial['anular']       = $this->input->post('anular-inicial');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_c_e_inicial', $data_inicial);
            //primaria
            $data_primaria['acceder'] = $this->input->post('acceder-primaria');
            $data_primaria['elaborar']       = $this->input->post('proyecto-primaria');
            $data_primaria['editar']        = $this->input->post('editar-proyecto-primaria');
            $data_primaria['anular']       = $this->input->post('anular-proyecto-primaria');
            $data_primaria['horario']       = $this->input->post('horario-primaria');
            $data_primaria['asistencia']       = $this->input->post('asistencia-primaria');
            $data_primaria['grado']        = $this->input->post('grado-primaria');
            $data_primaria['secciones'] = $this->input->post('secciones-primaria');
            $data_primaria['docentes']       = $this->input->post('docentes-primaria');
            $data_primaria['evaluaciones']       = $this->input->post('evaluaciones-primaria');
            $data_primaria['calificar']       = $this->input->post('calificar-primaria');
            $data_primaria['calificaciones']       = $this->input->post('calificaciones-primaria');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_c_e_primaria', $data_primaria);
            //media
            $data_media['acceder'] = $this->input->post('acceder-media');
            $data_media['elaborar']       = $this->input->post('proyecto-media');
            $data_media['editar']        = $this->input->post('editar-proyecto-media');
            $data_media['anular']       = $this->input->post('anular-proyecto-media');
            $data_media['horario']       = $this->input->post('horario-media');
            $data_media['asistencia']       = $this->input->post('asistencia-media');
            $data_media['grado']        = $this->input->post('grado-media');
            $data_media['secciones'] = $this->input->post('secciones-media');
            $data_media['docentes']       = $this->input->post('docentes-media');
            $data_media['evaluaciones']       = $this->input->post('evaluaciones-media');
            $data_media['calificar']       = $this->input->post('calificar-media');
            $data_media['calificaciones']       = $this->input->post('calificaciones-media');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_c_e_media', $data_media);
            //nutricion
            $data_nutricion['acceder'] = $this->input->post('acceder-nutricion');
            $data_nutricion['elaborar_menu']       = $this->input->post('elaborar-menu');
            $data_nutricion['editar_menu']        = $this->input->post('editar-menu');
            $data_nutricion['anular_menu'] = $this->input->post('anular-menu');
            $data_nutricion['consultar_menu']       = $this->input->post('consultar-menu');
            $data_nutricion['revisar_menu']       = $this->input->post('revisar-menu');
            $data_nutricion['aprobar_menu']       = $this->input->post('aprobar-menu');
            $data_nutricion['elaborar_diagnostico']        = $this->input->post('elaborar-diagnostico');
            $data_nutricion['editar_diagnostico'] = $this->input->post('editar-diagnostico');
            $data_nutricion['anular_diagnostico']       = $this->input->post('anular-diagnostico');
            $data_nutricion['consultar_diagnostico']       = $this->input->post('consultar-diagnostico');
            $data_nutricion['revisar_diagnostico']       = $this->input->post('revisar-diagnostico');
            $data_nutricion['aprobar_diagnostico']       = $this->input->post('aprobar-diagnostico');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_nutricion', $data_nutricion);
            //upe
            $data_upe['acceder'] = $this->input->post('acceder-upe');
            $data_upe['elaborar']       = $this->input->post('elaborar-upe');
            $data_upe['editar']        = $this->input->post('editar-upe');
            $data_upe['anular'] = $this->input->post('anular-upe');
            $data_upe['consultar']       = $this->input->post('consultar-upe');
            $data_upe['revisar']       = $this->input->post('revisar-upe');
            $data_upe['aprobar']       = $this->input->post('aprobar-upe');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_upe', $data_upe);
            //carnet
            $data_carnet['acceder'] = $this->input->post('acceder-carnet');
            $data_carnet['elaborar']        = $this->input->post('editar-carnet');
            $data_carnet['editar'] = $this->input->post('imprimir-carnet');
            $data_carnet['consultar']       = $this->input->post('consultar-carnet');
            $data_carnet['revisar']       = $this->input->post('enviar-carnet');
            $data_carnet['aprobar']       = $this->input->post('aprobar-carnet');
            $data_carnet['anular']       = $this->input->post('anular-carnet');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_carnet', $data_carnet);
            //constancias
            $data_constancias['acceder'] = $this->input->post('acceder-constancias');
            $data_constancias['editar']        = $this->input->post('editar-constancias');
            $data_constancias['elaborar']        = $this->input->post('editar-constancias');
            $data_constancias['consultar']       = $this->input->post('consultar-constancias');
            $data_constancias['elaborar']       = $this->input->post('elaborar-constancias');
            $data_constancias['enviar']       = $this->input->post('enviar-constancias');
            $data_constancias['anular']       = $this->input->post('anular-constancias');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_constancias', $data_constancias);
            //notificaciones
            $data_notificaciones['acceder'] = $this->input->post('acceder-notificaciones');
            $data_notificaciones['consultar']       = $this->input->post('consultar-notificaciones');
            $data_notificaciones['enviar']       = $this->input->post('enviar-notificaciones');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_notificaciones', $data_notificaciones);
            //reporte
            $data_reporte['acceder'] = $this->input->post('acceder-reporte');
            $data_reporte['consultar']       = $this->input->post('consultar-reporte');
            $data_reporte['descargar']       = $this->input->post('descargar-reporte');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_reportes', $data_reporte);
            //ajustes
            $data_ajustes['acceder'] = $this->input->post('acceder-ajustes');
            $data_ajustes['editar_usuarios']       = $this->input->post('ajustes-usuarios');
            $data_ajustes['editar_perfiles']       = $this->input->post('ajustes-editar-perfiles');
            $data_ajustes['editar_opciones_perfil'] = $this->input->post('ajustes-editar-opciones-perfil');
            $data_ajustes['editar_docentes']       = $this->input->post('ajustes-editar-docentes');
            $data_ajustes['configuraciones']       = $this->input->post('ajustes-configuraciones');
            $data_ajustes['ajustes']       = $this->input->post('ajustes-ajustes');
            $this->db->where('id_perfil', $this->input->post('id_perfil'));
            $this->db->update('permisos_ajustes', $data_ajustes);

            $this->session->set_flashdata('flash_message' , 'Registro guardado satisfactoriamente');
            redirect(base_url() . 'admin/profile_options/'.$this->input->post('id_perfil'), 'refresh');
        }
        $page_data['permisos_censo'] = $this->db->get('permisos_censo')->result_array();
        $page_data['permisos_reportes'] = $this->db->get('permisos_reportes')->result_array();
        $page_data['permisos_inscripcion'] = $this->db->get('permisos_inscripcion')->result_array();
        $page_data['permisos_upe'] = $this->db->get('permisos_upe')->result_array();
        $page_data['permisos_constancias'] = $this->db->get('permisos_constancias')->result_array();
        $page_data['permisos_carnet'] = $this->db->get('permisos_carnet')->result_array();
        $page_data['permisos_notificaciones'] = $this->db->get('permisos_notificaciones')->result_array();
        $page_data['permisos_nutricion'] = $this->db->get('permisos_nutricion')->result_array();
        $page_data['permisos_c_e_inicial'] = $this->db->get('permisos_c_e_inicial')->result_array();
        $page_data['permisos_c_e_primaria'] = $this->db->get('permisos_c_e_primaria')->result_array();
        $page_data['permisos_c_e_media'] = $this->db->get('permisos_c_e_media')->result_array();
        $page_data['permisos_ajustes'] = $this->db->get('permisos_ajustes')->result_array();

        if (is_numeric($param1)){
            if ($param1 > 0) {
                $page_data['perfil_seleccionado'] = $param1;
                $page_data['permisos_censo_seleccionado'] = $this->db->get_where('permisos_censo', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_reportes_seleccionado'] = $this->db->get_where('permisos_reportes', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_inscripcion_seleccionado'] = $this->db->get_where('permisos_inscripcion', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_upe_seleccionado'] = $this->db->get_where('permisos_upe', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_constancias_seleccionado'] = $this->db->get_where('permisos_constancias', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_carnet_seleccionado'] = $this->db->get_where('permisos_carnet', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_notificaciones_seleccionado'] = $this->db->get_where('permisos_notificaciones', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_nutricion_seleccionado'] = $this->db->get_where('permisos_nutricion', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_c_e_inicial_seleccionado'] = $this->db->get_where('permisos_c_e_inicial', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_c_e_primaria_seleccionado'] = $this->db->get_where('permisos_c_e_primaria', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_c_e_media_seleccionado'] = $this->db->get_where('permisos_c_e_media', array('id_perfil' => $param1))->result_array();
                $page_data['permisos_ajustes_seleccionado'] = $this->db->get_where('permisos_ajustes', array('id_perfil' => $param1))->result_array();
            }
        }else{
            $page_data['perfil_seleccionado'] = 0;
        }

        $page_data['page_name']  = 'profile_options';
        $page_data['page_title'] = "Asignar opciones a perfil";
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE USERS   *****/
    function users($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['primer_nombre']         = $this->input->post('primer_nombre');
            $data['segundo_nombre']        = $this->input->post('segundo_nombre');
            $data['primer_apellido']       = $this->input->post('primer_apellido');
            $data['segundo_apellido']      = $this->input->post('segundo_apellido');
            $data['cedula_identidad']      = $this->input->post('cedula_identidad');
            $data['fecha_nacimiento']      = date('Y-m-d', strtotime($this->input->post('fecha_nacimiento'))) ;
            $data['id_sexo']               = $this->input->post('genero');
            $data['nacionalidad']          = $this->input->post('letra_cedula') == 'V' ? 'VENEZOLANA' : 'EXTRANJERA';
            $data['correo_electronico']    = $this->input->post('email');
            $data['trabaja']               = '1';

            $this->db->insert('personas', $data);
            $id_persona = $this->db->insert_id();


            $data_usu['id_persona']         = $id_persona;
            $data_usu['usuario']            = $this->input->post('usuario');
            $data_usu['clave']              = password_hash($this->input->post('clave'), PASSWORD_DEFAULT);
            $data_usu['correo_electronico'] = $this->input->post('correo_electronico');
            $data_usu['id_perfil']          = $this->input->post('id_perfil');
            $data_usu['id_escuela']         = $this->input->post('id_escuela');

            $this->db->insert('usuarios', $data_usu);
            $usuario_id = $this->db->insert_id();

            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/usuarios_image/' . $usuario_id . '.jpg');
            $this->session->set_flashdata('flash_message' , 'Registro agregado satisfactoriamente');

            $this->email_model->account_opening_email($data_usu['usuario'], $data_usu['correo_electronico'], $this->input->post('clave'));

            redirect(base_url() . 'admin/users/', 'refresh');
        }
        if ($param1 == 'edit') {
            $data['primer_nombre']         = $this->input->post('primer_nombre');
            $data['segundo_nombre']        = $this->input->post('segundo_nombre');
            $data['primer_apellido']       = $this->input->post('primer_apellido');
            $data['segundo_apellido']      = $this->input->post('segundo_apellido');
            $data['cedula_identidad']      = $this->input->post('cedula_identidad');
            $data['fecha_nacimiento']      = date('Y-m-d', strtotime($this->input->post('fecha_nacimiento'))) ;
            $data['id_sexo']               = $this->input->post('genero');
            $data['nacionalidad']          = $this->input->post('letra_cedula') == 'V' ? 'VENEZOLANA' : 'EXTRANJERA';
            $data['correo_electronico']    = $this->input->post('email');
            $data['trabaja']               = '1';

            $id_persona = $this->db->get_where('usuarios', array('id_usuario' => $param2))->row()->id_persona;

            $this->db->where('id_persona', $id_persona);
            $this->db->update('personas', $data);

            $data_usu['correo_electronico'] = $this->input->post('correo_electronico');
            $data_usu['id_perfil']          = $this->input->post('id_perfil');
            $data_usu['id_escuela']         = $this->input->post('id_escuela');

            $this->db->where('id_usuario', $param2);
            $this->db->update('usuarios', $data_usu);

            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/usuarios_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');

            redirect(base_url() . '/admin/users/', 'refresh');

        }
        if ($param1 == 'delete') {
            $data['registro_activo'] = 0 ;

            $this->db->where('id_usuario', $param2);

            $this->db->update('usuarios', $data);
            $this->session->set_flashdata('flash_message' , 'Registro desactivado satisfactoriamente');
            redirect(base_url() . '/admin/users/', 'refresh');
        }
        if ($param1 == 'password_default') {
            $data_usu['clave'] = password_hash('123456', PASSWORD_DEFAULT);

            $this->db->where('id_usuario', $param2);
            $this->db->update('usuarios', $data_usu);

            $this->session->set_flashdata('flash_message' , 'Registro actualizado satisfactoriamente');
            redirect(base_url() . '/admin/users/', 'refresh');
        }
        if ($param1 == 'activate') {
            $data['registro_activo'] = 1 ;

            $this->db->where('id_usuario', $param2);

            $this->db->update('usuarios', $data);
            $this->session->set_flashdata('flash_message' , 'Registro activado satisfactoriamente');
            redirect(base_url() . '/admin/users/', 'refresh');
        }
        $page_data['usuarios']   = $this->db->get('usuarios')->result_array();
        $id_persona = '1';
        $this->db->where('id_persona', $id_persona);
        $page_data['persona'] =$this->db->get('personas' )->result_array();
        $page_data['page_name']  = 'users';
        $page_data['page_title'] = "Usuarios ";
        $this->load->view('backend/index', $page_data);
    }

    function select_report($param1 = '')
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $seccion = $this->input->post('Seccion');
            $reporte = $this->input->post('Reporte');

            if ($param1 == 'enviar'){
                switch ($reporte) {
                    //Matricula Inicial
                    case '1':
                        $this->mostrar_matricula_inicial($seccion);
                        break;
                    //Matricula Final
                    case '2':
                        $this->mostrar_matricula_final($seccion);
                        break;
                    //Resumen Final Rendimiento Estudiantil
                    case '3':
                        $this->mostrar_resumen_final_rendimiento_estudiantil($seccion);
                        break;
                    //Resumen Final de Evaluación
                    case '4':
                        $this->mostrar_resumen_final_evaluacion($seccion);
                        break;
                    //Certificado de Calificaciones
                    case '5':
                        $this->mostrar_certificado_calificaciones($seccion);
                        break;
                }
            }
            $id_school = $this->config->item('id_school');
            $page_data['grados'] = VistaGradoEscuela::orderBy('id_grado')
                                                ->groupBy('id_grado')
                                                ->get();

            $config = Configuracion::all();
            $page_data['config'] = $config;
            $page_data['page_name']  = 'select_report';
            $page_data['page_title'] = "Reportes: Ministerio de Educación";

            //Pasando la data a la vista
            $this->load->view('backend/index', $page_data);
    }

    function mostrar_matricula_inicial($param1='')
    {

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
            $this->load->model('VistaNivelEducativoSeccion');
            $this->load->model('Usuario');
            $this->load->model('Inscripcion');

            // Se carga la libreria fpdf
            $this->load->library('header_ministerio/pdf');

            //Datos de la escuela
            $id_school = 1;
            $cod_dea = $this->config->item('dea');
            $full_name = $this->config->item('full_name');
            $uem_name = $this->config->item('uem_name');
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;

            $escuela = Escuela::find($id_school);
            $director_uem = $escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido.' '.$escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre;
            $director_cedula = $escuela->director->cedula_identidad;

            //Seccion a mostrar
            $id_seccion = $param1;
            $censo = Inscripcion::where('id_escuela', '=', $id_school)
                                            ->where('SeccionACursar','=', $id_seccion)
                                            ->where('StatusCenso','=', 0)
                                            ->orderBy('CedulaDeIdentidadDelAlumnoOCedulaEscolar')
                                            ->get();

            $escuela = Escuela::find($this->config->item('id_school'));

            $array_nivel_educativo = VistaNivelEducativoSeccion::where('id_escuela', '=', $id_school)->where('id_seccion','=', $id_seccion)->get();;

            $nivel_educativo = strtoupper($array_nivel_educativo[0]->nivel_educativo);
            $grado = $array_nivel_educativo[0]->numero_grado;
            $seccion = $array_nivel_educativo[0]->letra_seccion;


            $total_alumnos_seccion = count($censo);

            if($total_alumnos_seccion <= 30){
                $total_alumnos_pagina = $total_alumnos_seccion;
            }else{
                $total_alumnos_pagina = 30;
            }


            //Creamos el pdf
            $this->pdf = new Pdf('P','mm','Legal');
            // Agregamos una página
            $this->pdf->AddPage();

            $this->pdf->SetTitle(iconv('UTF-8','windows-1252','Matrícula Inicial'));
            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(15);

            $this->pdf->SetFont('Arial','U',12);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','MÁTRICULA INICIAL (Régimen Regular)'),0,50,'R');
            $this->pdf->SetFont('Arial','',10);
            $this->pdf->SetX(125);
            $this->pdf->Cell(0,7,iconv('UTF-8','windows-1252','Código del Formato: RR-DEA-01-03'),0,50,'C');
            $this->pdf->Ln(10);

            $this->pdf->Ln(5);
            $this->pdf->SetFont('Arial', '', 8);

            $this->pdf->SetX(125);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','I. Año Escolar: '.$running_year),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','   Mes y Año de la Mátricula: Septiembre-2016'),0,50,'L');

            $this->pdf->SetX(10);

            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','II. Datos del Plantel: '),0,50,'J');

            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cód. Plantel: '.$cod_dea. '             Nombre: '.$full_name. '      Dtto.esc: 07'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Dirección: AV. MOHEDANO CRUCE CON CALLE LA PAZ                Telefono: 0212 - 2664822'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Municipio: CHACAO                Ent. Federal: MIRANDA                Zona Educativa: MIRANDA'),0,50,'J');

            $this->pdf->Ln(5);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','III. Identificación del Curso:               Plan de Estudio: '.$nivel_educativo),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Código: 21000               Mención: *'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Grado o Año: '.$grado.'          Sección: '.$seccion.'          No de Estudiantes de la Seccion: '.$total_alumnos_seccion.'          Número de Estudiantes en esta Página: '.$total_alumnos_pagina),0,50,'J');
            $this->pdf->Ln(5);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','IV. Datos de Identificación del Estudiante:'),0,50,'J');
            $this->pdf->Cell(0,12,iconv('UTF-8','windows-1252','Nº'),0,50,'J');
            $this->pdf->SetX(20);
            $this->pdf->Cell(0,-16,iconv('UTF-8','windows-1252','Cédula de'),0,50,'J');
            $this->pdf->Cell(0,24,iconv('UTF-8','windows-1252','Identidad'),0,50,'J');
            $this->pdf->SetX(65);
            $this->pdf->Cell(0,-28,iconv('UTF-8','windows-1252','Apellidos'),0,50,'J');
            $this->pdf->SetX(115);
            $this->pdf->Cell(0,28,iconv('UTF-8','windows-1252','Nombres'),0,50,'J');
            $this->pdf->SetX(155);
            $this->pdf->Cell(0,-32,iconv('UTF-8','windows-1252','Se'),0,50,'J');
            $this->pdf->Cell(0,38,iconv('UTF-8','windows-1252','xo'),0,50,'J');
            $this->pdf->SetX(162);
            $this->pdf->Cell(0,-44,iconv('UTF-8','windows-1252','Fecha de Nac.'),0,50,'J');
            $this->pdf->SetX(161);
            $this->pdf->Cell(0,53,iconv('UTF-8','windows-1252','Día   Mes   Año'),0,50,'J');
            $this->pdf->SetX(187);
            $this->pdf->Cell(0,-62,iconv('UTF-8','windows-1252','Escolaridad'),0,50,'J');
            $this->pdf->SetX(185);
            $this->pdf->Cell(0,72,iconv('UTF-8','windows-1252','RG  RP  MP  DI'),0,50,'J');

            $yLocation = 98;
            $observaciones = '';
            for ( $i = 1 ; $i <= 30 ; $i ++) {
                        $this->pdf->SetY($yLocation);
                        $this->pdf->SetX(10);
                        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$i),0,50,'J');

                        if($i <= count($censo)){
                            $sexo_alumno = ($censo[$i - 1]->SexoDelAlumno = 'MASCULINO' ? 'M' : 'F');
                            $timestamp = strtotime($censo[$i - 1]->FechaDeNacimientoDelAlumno);
                            if($censo[$i - 1]->NacionalidadDelAlumno == 'VENEZOLANA'){
                                $letra_nacionalidad = 'V';
                            }else{
                                $letra_nacionalidad = 'E';
                            }
                            $dia_nacimiento = date("d", $timestamp);
                            $mes_nacimiento = date("m", $timestamp);
                            $año_nacimiento = date("Y", $timestamp);
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(16);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$letra_nacionalidad.$censo[$i - 1]->CedulaDeIdentidadDelAlumnoOCedulaEscolar),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(40);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerApellidoDelAlumno.' '.$censo[$i - 1]->SegundoApellidoDelAlumno),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(102);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerNombreDelAlumno.' '.$censo[$i - 1]->SegundoNombreDelAlumno),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(155);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$sexo_alumno ),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(162);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$dia_nacimiento),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(169);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$mes_nacimiento),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(176);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$año_nacimiento),0,50,'J');
                            $rp = $censo[$i - 1]->GradoRepetido == 0 ? '*' : 'X';
                            $rg = $censo[$i - 1]->GradoRepetido == 0 ? 'X' : '*';
                            $mp = $censo[$i - 1]->MateriaPendiente == 1 ? 'X' : '*';

                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(186);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$rg),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(193);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$rp),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(198);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$mp),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(203);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','*'),0,50,'J');
                        }

                        $yLocation = $yLocation + 5;
                        if ($i < 30){
                            $this->pdf->Line(10, $yLocation, 207, $yLocation); //Linea Horizontal
                        }
            }
            $this->pdf->Ln(2);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','V. Observaciones:'),0,50,'J');

            $this->pdf->Ln(40);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','VI. Fecha de Remisión:'),0,50,'J');

            $this->pdf->SetX(113);
            $this->pdf->Cell(0,-4,iconv('UTF-8','windows-1252','VII. Fecha de Recepción:'),0,50,'J');

            $this->pdf->SetY(300);
            $this->pdf->SetX(23);
            $this->pdf->SetFont('Arial', 'B', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Director (a)'),0,50,'J');
            $this->pdf->SetY(305);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
            $this->pdf->SetY(313);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_uem),0,50,'J');
            $this->pdf->SetY(318);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
            $this->pdf->SetY(325);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_cedula),0,50,'J');
            $this->pdf->SetY(330);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
            $this->pdf->SetY(315);
            $this->pdf->SetX(70);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DEL'),0,50,'J');
            $this->pdf->SetY(320);
            $this->pdf->SetX(71);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','PLANTEL'),0,50,'J');


            $this->pdf->SetY(300);
            $this->pdf->SetX(120);
            $this->pdf->SetFont('Arial', 'B', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Funcionario Receptor'),0,50,'J');
            $this->pdf->SetY(305);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
            $this->pdf->SetY(318);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
            $this->pdf->SetY(330);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
            $this->pdf->SetY(315);
            $this->pdf->SetX(172);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DE LA ZONA'),0,50,'J');
            $this->pdf->SetY(320);
            $this->pdf->SetX(177);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','EDUCATIVA'),0,50,'J');

            //TABLA DE LOS DATOS
            $this->pdf->SetX(10);
            $this->pdf->RoundedRect(10, 87, 197, ($yLocation - 88), 2, '', '');
            $this->pdf->Line(15, 87, 15, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(40, 87, 40, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(100, 87, 100, ($yLocation - 1)); //Linea Vertical

            $this->pdf->Line(155, 87, 155, ($yLocation - 1)); //Linea Vertical

            $this->pdf->Line(161, 87, 161, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(168, 92, 168, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(175, 92, 175, ($yLocation - 1)); //Linea Vertical

            $this->pdf->Line(185, 87, 185, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(161, 92, 207, 92); //Linea Horizontal
            $this->pdf->Line(191, 92, 191, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(197, 92, 197, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(202, 92, 202, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(10, 97, 207, 97); //Linea Horizontal

            //TABLA DEL FOOTER 1
            $this->pdf->RoundedRect(10, 290, 94, 50, 2, '', '');
            $this->pdf->Line(10, 298, 104, 298); //Linea Horizontal
            $this->pdf->Line(10, 303, 55, 303); //Linea Horizontal
            $this->pdf->Line(10, 308, 55, 308); //Linea Horizontal
            $this->pdf->Line(10, 315, 55, 315); //Linea Horizontal
            $this->pdf->Line(10, 320, 55, 320); //Linea Horizontal
            $this->pdf->Line(10, 327, 55, 327); //Linea Horizontal
            $this->pdf->Line(10, 332, 55, 332); //Linea Horizontal
            $this->pdf->Line(55, 298, 55, 340); //Linea Vertical


            //TABLA DEL FOOTER 2
            $this->pdf->RoundedRect(113, 290, 94, 50, 2, '', '');
            $this->pdf->Line(113, 298, 207, 298); //Linea Horizontal
            $this->pdf->Line(113, 303, 160, 303); //Linea Horizontal
            $this->pdf->Line(113, 308, 160, 308); //Linea Horizontal
            $this->pdf->Line(113, 315, 160, 315); //Linea Horizontal
            $this->pdf->Line(113, 320, 160, 320); //Linea Horizontal
            $this->pdf->Line(113, 327, 160, 327); //Linea Horizontal
            $this->pdf->Line(113, 332, 160, 332); //Linea Horizontal
            $this->pdf->Line(160, 298, 160, 340); //Linea Vertical

            if($total_alumnos_seccion > 30){
                $total_alumnos_pagina_2 = $total_alumnos_seccion - $total_alumnos_pagina;

                $this->pdf->AddPage();

                $this->pdf->SetTitle(iconv('UTF-8','windows-1252','Mátricula Inicial Educación Primaria'));
                $this->pdf->SetLeftMargin(15);
                $this->pdf->SetRightMargin(15);

                $this->pdf->SetFont('Arial','U',12);
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','MÁTRICULA INICIAL (Régimen Regular)'),0,50,'R');
                $this->pdf->SetFont('Arial','',10);
                $this->pdf->SetX(125);
                $this->pdf->Cell(0,7,iconv('UTF-8','windows-1252','Código del Formato: RR-DEA-01-03'),0,50,'C');
                $this->pdf->Ln(10);

                $this->pdf->Ln(5);
                $this->pdf->SetFont('Arial', '', 8);

                $this->pdf->SetX(125);
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','I. Año Escolar: '.$running_year),0,50,'L');
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','   Mes y Año de la Mátricula: Septiembre-2016'),0,50,'L');

                $this->pdf->SetX(10);

                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','II. Datos del Plantel: '),0,50,'J');

                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cód. Plantel: '.$cod_dea. '             Nombre: '.$full_name. '      Dtto.esc: 07'),0,50,'J');
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Dirección: AV. MOHEDANO CRUCE CON CALLE LA PAZ                Telefono: 0212 - 2664822'),0,50,'J');
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Municipio: CHACAO                Ent. Federal: MIRANDA                Zona Educativa: MIRANDA'),0,50,'J');

                $this->pdf->Ln(5);
                $this->pdf->SetX(10);
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','III. Identificación del Curso:               Plan de Estudio: '.$nivel_educativo),0,50,'J');
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Código: 21000               Mención: *'),0,50,'J');
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Grado o Año: '.$grado.'          Sección: '.$seccion.'          No de Estudiantes de la Seccion: '.$total_alumnos_seccion.'          Número de Estudiantes en esta Página: '.$total_alumnos_pagina_2),0,50,'J');
                $this->pdf->Ln(5);
                $this->pdf->SetX(10);
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','IV. Datos de Identificación del Estudiante:'),0,50,'J');
                $this->pdf->Cell(0,12,iconv('UTF-8','windows-1252','Nº'),0,50,'J');
                $this->pdf->SetX(20);
                $this->pdf->Cell(0,-16,iconv('UTF-8','windows-1252','Cédula de'),0,50,'J');
                $this->pdf->Cell(0,24,iconv('UTF-8','windows-1252','Identidad'),0,50,'J');
                $this->pdf->SetX(65);
                $this->pdf->Cell(0,-28,iconv('UTF-8','windows-1252','Apellidos'),0,50,'J');
                $this->pdf->SetX(115);
                $this->pdf->Cell(0,28,iconv('UTF-8','windows-1252','Nombres'),0,50,'J');
                $this->pdf->SetX(155);
                $this->pdf->Cell(0,-32,iconv('UTF-8','windows-1252','Se'),0,50,'J');
                $this->pdf->Cell(0,38,iconv('UTF-8','windows-1252','xo'),0,50,'J');
                $this->pdf->SetX(162);
                $this->pdf->Cell(0,-44,iconv('UTF-8','windows-1252','Fecha de Nac.'),0,50,'J');
                $this->pdf->SetX(161);
                $this->pdf->Cell(0,53,iconv('UTF-8','windows-1252','Día   Mes   Año'),0,50,'J');
                $this->pdf->SetX(187);
                $this->pdf->Cell(0,-62,iconv('UTF-8','windows-1252','Escolaridad'),0,50,'J');
                $this->pdf->SetX(185);
                $this->pdf->Cell(0,72,iconv('UTF-8','windows-1252','RG  RP  MP  DI'),0,50,'J');

                $yLocation = 98;
                for ( $i = 31 ; $i <= 60 ; $i ++) {
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(10);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$i),0,50,'J');

                            if($i <= count($censo)){
                                $sexo_alumno = ($censo[$i - 1]->SexoDelAlumno = 'MASCULINO' ? 'M' : 'F');
                                $timestamp = strtotime($censo[$i - 1]->FechaDeNacimientoDelAlumno);
                                if($censo[$i - 1]->NacionalidadDelAlumno){
                                    $letra_nacionalidad = 'V';
                                }else{
                                    $letra_nacionalidad = 'E';
                                }
                                $dia_nacimiento = date("d", $timestamp);
                                $mes_nacimiento = date("m", $timestamp);
                                $año_nacimiento = date("Y", $timestamp);
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(16);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$letra_nacionalidad.$censo[$i - 1]->CedulaDeIdentidadDelAlumnoOCedulaEscolar),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(40);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerApellidoDelAlumno.' '.$censo[$i - 1]->SegundoApellidoDelAlumno),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(102);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerNombreDelAlumno.' '.$censo[$i - 1]->SegundoNombreDelAlumno),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(155);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$sexo_alumno ),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(162);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$dia_nacimiento),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(169);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$mes_nacimiento),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(176);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$año_nacimiento),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(186);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','X'),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(193);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','*'),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(198);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','*'),0,50,'J');
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(203);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','*'),0,50,'J');
                            }

                            $yLocation = $yLocation + 5;
                            if ($i < 60){
                                $this->pdf->Line(10, $yLocation, 207, $yLocation); //Linea Horizontal
                            }
                }
                $this->pdf->Ln(2);
                $this->pdf->SetX(10);
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','V. Observaciones:'),0,50,'J');

                $this->pdf->Ln(40);
                $this->pdf->SetX(10);
                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','VI. Fecha de Remisión:'),0,50,'J');

                $this->pdf->SetX(113);
                $this->pdf->Cell(0,-4,iconv('UTF-8','windows-1252','VII. Fecha de Recepción:'),0,50,'J');

                $this->pdf->SetY(300);
                $this->pdf->SetX(23);
                $this->pdf->SetFont('Arial', 'B', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Director (a)'),0,50,'J');
                $this->pdf->SetY(305);
                $this->pdf->SetX(11);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
                $this->pdf->SetY(313);
                $this->pdf->SetX(11);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_uem),0,50,'J');
                $this->pdf->SetY(318);
                $this->pdf->SetX(11);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
                $this->pdf->SetY(325);
                $this->pdf->SetX(11);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_cedula),0,50,'J');
                $this->pdf->SetY(330);
                $this->pdf->SetX(11);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
                $this->pdf->SetY(315);
                $this->pdf->SetX(70);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DEL'),0,50,'J');
                $this->pdf->SetY(320);
                $this->pdf->SetX(71);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','PLANTEL'),0,50,'J');


                $this->pdf->SetY(300);
                $this->pdf->SetX(120);
                $this->pdf->SetFont('Arial', 'B', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Funcionario Receptor'),0,50,'J');
                $this->pdf->SetY(305);
                $this->pdf->SetX(114);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
                $this->pdf->SetY(318);
                $this->pdf->SetX(114);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
                $this->pdf->SetY(330);
                $this->pdf->SetX(114);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
                $this->pdf->SetY(315);
                $this->pdf->SetX(172);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DE LA ZONA'),0,50,'J');
                $this->pdf->SetY(320);
                $this->pdf->SetX(177);
                $this->pdf->SetFont('Arial', '', 8);
                $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','EDUCATIVA'),0,50,'J');

                //TABLA DE LOS DATOS
                $this->pdf->SetX(10);
                $this->pdf->RoundedRect(10, 87, 197, ($yLocation - 88), 2, '', '');
                $this->pdf->Line(15, 87, 15, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(40, 87, 40, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(100, 87, 100, ($yLocation - 1)); //Linea Vertical

                $this->pdf->Line(155, 87, 155, ($yLocation - 1)); //Linea Vertical

                $this->pdf->Line(161, 87, 161, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(168, 92, 168, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(175, 92, 175, ($yLocation - 1)); //Linea Vertical

                $this->pdf->Line(185, 87, 185, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(161, 92, 207, 92); //Linea Horizontal
                $this->pdf->Line(191, 92, 191, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(197, 92, 197, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(202, 92, 202, ($yLocation - 1)); //Linea Vertical
                $this->pdf->Line(10, 97, 207, 97); //Linea Horizontal

                //TABLA DEL FOOTER 1
                $this->pdf->RoundedRect(10, 290, 94, 50, 2, '', '');
                $this->pdf->Line(10, 298, 104, 298); //Linea Horizontal
                $this->pdf->Line(10, 303, 55, 303); //Linea Horizontal
                $this->pdf->Line(10, 308, 55, 308); //Linea Horizontal
                $this->pdf->Line(10, 315, 55, 315); //Linea Horizontal
                $this->pdf->Line(10, 320, 55, 320); //Linea Horizontal
                $this->pdf->Line(10, 327, 55, 327); //Linea Horizontal
                $this->pdf->Line(10, 332, 55, 332); //Linea Horizontal
                $this->pdf->Line(55, 298, 55, 340); //Linea Vertical


                //TABLA DEL FOOTER 2
                $this->pdf->RoundedRect(113, 290, 94, 50, 2, '', '');
                $this->pdf->Line(113, 298, 207, 298); //Linea Horizontal
                $this->pdf->Line(113, 303, 160, 303); //Linea Horizontal
                $this->pdf->Line(113, 308, 160, 308); //Linea Horizontal
                $this->pdf->Line(113, 315, 160, 315); //Linea Horizontal
                $this->pdf->Line(113, 320, 160, 320); //Linea Horizontal
                $this->pdf->Line(113, 327, 160, 327); //Linea Horizontal
                $this->pdf->Line(113, 332, 160, 332); //Linea Horizontal
                $this->pdf->Line(160, 298, 160, 340); //Linea Vertical
            }

            $this->pdf->Output();

    }

     function mostrar_matricula_final($param1='')
    {
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
            $this->load->model('VistaNivelEducativoSeccion');
            $this->load->model('Usuario');
            $this->load->model('Inscripcion');

            // Se carga la libreria fpdf
            $this->load->library('header_ministerio/pdf');

            //Datos de la escuela
            $id_school = $this->config->item('id_school');
            $cod_dea = $this->config->item('dea');
            $full_name = $this->config->item('full_name');
            $uem_name = $this->config->item('uem_name');
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;

            $escuela = Escuela::find($id_school);
            $director_uem = $escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido.' '.$escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre;
            $director_cedula = $escuela->director->cedula_identidad;

            //Seccion a mostrar
            $id_seccion = $param1;
            $censo = Inscripcion::where('id_escuela', '=', $id_school)
                                            ->where('SeccionACursar','=', $id_seccion)
                                            ->where('StatusCenso','=', 0)
                                            ->orderBy('CedulaDeIdentidadDelAlumnoOCedulaEscolar')
                                            ->get();

            $escuela = Escuela::find($this->config->item('id_school'));

            $array_nivel_educativo = VistaNivelEducativoSeccion::where('id_escuela', '=', $id_school)->where('id_seccion','=', $id_seccion)->get();;

            $nivel_educativo = strtoupper($array_nivel_educativo[0]->nivel_educativo);
            $id_nivel_educativo = $array_nivel_educativo[0]->id_nivel_educativo;
            $grado = $array_nivel_educativo[0]->numero_grado;
            $seccion = $array_nivel_educativo[0]->letra_seccion;

            $total_alumnos_seccion = count($censo);

            if($total_alumnos_seccion <= 20){
                $total_alumnos_pagina = $total_alumnos_seccion;
            }else{
                $total_alumnos_pagina = 20;
            }

            //Creamos el pdf
            $this->pdf = new Pdf('P','mm','Legal');
            // Agregamos una página
            $this->pdf->AddPage();

            $this->pdf->SetTitle(iconv('UTF-8','windows-1252','Matrícula Final'));
            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(15);

            $this->pdf->SetFont('Arial','U',12);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','MÁTRICULA FINAL '.$nivel_educativo),0,50,'R');
            $this->pdf->SetFont('Arial','',10);
            $this->pdf->SetX(125);
            $this->pdf->Cell(0,7,iconv('UTF-8','windows-1252','Código del Formato: RR-DEA-07-04'),0,50,'C');
            $this->pdf->Ln(10);

            $this->pdf->Ln(5);
            $this->pdf->SetFont('Arial', '', 8);

            $this->pdf->SetX(105);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','I. TIPO DE MATRÍCULA: CONVENCIONAL( X )       NO CONVENCIONAL ( * )'),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Año Escolar: '.$running_year.'   Mes y Año de la Matrícula Final: Julio 2016'),0,50,'L');

            $this->pdf->SetX(10);

            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','II. Datos del Plantel: '),0,50,'J');

            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cód. Plantel: '.$cod_dea. '             Nombre: '.$full_name. '      Dtto.esc: 07'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Dirección: AV. MOHEDANO CRUCE CON CALLE LA PAZ                Telefono: 0212 - 2664822'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Municipio: CHACAO                Ent. Federal: MIRANDA                Zona Educativa: MIRANDA'),0,50,'J');

            $grado_grupo = '';

            switch ($id_nivel_educativo) {
                case 1:
                    $grado_grupo = 'GRUPO';
                    break;
                case 2:
                    $grado_grupo = 'GRADO';
                    break;
                case 3:
                    $grado_grupo = 'AÑO';
                    break;
            }

            $this->pdf->Ln(5);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','III. Identificación del Curso: '),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Grado / Sección: '.$grado.' '.$grado_grupo.' '.$seccion.'          No de Estudiantes de la Seccion: '.$total_alumnos_seccion.'          Número de Estudiantes en esta Página: '.$total_alumnos_pagina),0,50,'J');
            $this->pdf->Ln(5);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','IV. Matrícula Final:'),0,50,'J');
            $this->pdf->Cell(0,12,iconv('UTF-8','windows-1252','Nº'),0,50,'J');
            $this->pdf->SetX(20);
            $this->pdf->Cell(0,-16,iconv('UTF-8','windows-1252','Cédula de'),0,50,'J');
            $this->pdf->Cell(0,24,iconv('UTF-8','windows-1252','Identidad'),0,50,'J');
            $this->pdf->SetX(54);
            $this->pdf->Cell(0,-28,iconv('UTF-8','windows-1252','Lugar de Nacimiento'),0,50,'J');
            $this->pdf->SetX(114);
            $this->pdf->Cell(0,28,iconv('UTF-8','windows-1252','E.F.'),0,50,'J');
            $this->pdf->SetX(122);
            $this->pdf->Cell(0,-28,iconv('UTF-8','windows-1252','Sexo'),0,50,'J');
            $this->pdf->SetY(84);
            $this->pdf->SetX(131);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Fecha de Nac.'),0,50,'J');
            $this->pdf->SetY(90);
            $this->pdf->SetX(130);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Día   Mes   Año'),0,50,'J');
            $this->pdf->SetY(84);
            $this->pdf->SetX(152);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Edad Maternal'),0,50,'J');
            $this->pdf->SetFont('Arial', '', 6);
            $this->pdf->SetY(89);
            $this->pdf->SetX(152);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','0A'),0,50,'J');
            $this->pdf->SetY(91);
            $this->pdf->SetX(152);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
            $this->pdf->SetY(89);
            $this->pdf->SetX(160);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','1A'),0,50,'J');
            $this->pdf->SetY(91);
            $this->pdf->SetX(160);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
            $this->pdf->SetY(89);
            $this->pdf->SetX(168);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','2A'),0,50,'J');
            $this->pdf->SetY(91);
            $this->pdf->SetX(168);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->SetY(84);
            $this->pdf->SetX(177);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Edad Preescolar'),0,50,'J');
            $this->pdf->SetFont('Arial', '', 6);
            $this->pdf->SetY(89);
            $this->pdf->SetX(177);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','3A'),0,50,'J');
            $this->pdf->SetY(91);
            $this->pdf->SetX(177);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
            $this->pdf->SetY(89);
            $this->pdf->SetX(185);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','4A'),0,50,'J');
            $this->pdf->SetY(91);
            $this->pdf->SetX(185);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
            $this->pdf->SetY(89);
            $this->pdf->SetX(193);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','5A'),0,50,'J');
            $this->pdf->SetY(91);
            $this->pdf->SetX(193);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','o +'),0,50,'J');
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->SetY(88);
            $this->pdf->SetX(201);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','IB'),0,50,'J');

            $edad_escolar_1 = 'X';

            if($id_nivel_educativo == 1 ){
                switch ($grado) {
                    case '01':
                        $edad_escolar_1 = 'X';
                        $edad_escolar_2 = '*';
                        $edad_escolar_3 = '*';
                        $edad_escolar_4 = '*';
                        break;
                    case '02':
                        $edad_escolar_1 = '*';
                        $edad_escolar_2 = 'X';
                        $edad_escolar_3 = '*';
                        $edad_escolar_4 = '*';
                        break;
                    case '03':
                        $edad_escolar_1 = '*';
                        $edad_escolar_2 = '*';
                        $edad_escolar_3 = 'X';
                        $edad_escolar_4 = '*';
                        break;
                }
            }else{
                $edad_escolar_1 = '*';
                $edad_escolar_2 = '*';
                $edad_escolar_3 = '*';
                $edad_escolar_4 = 'X';
            }

            $yLocation = 92;
            for ( $i = 1 ; $i <= 20 ; $i ++) {
                        $this->pdf->SetY($yLocation);
                        $this->pdf->SetX(10);
                        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$i),0,50,'J');

                        if($i <= count($censo)){
                            $sexo_alumno = ($censo[$i - 1]->SexoDelAlumno = 'MASCULINO' ? 'M' : 'F');
                            $timestamp = strtotime($censo[$i - 1]->FechaDeNacimientoDelAlumno);
                            if($censo[$i - 1]->NacionalidadDelAlumno == 'VENEZOLANA'){
                                $letra_nacionalidad = 'V';
                            }else{
                                $letra_nacionalidad = 'E';
                            }
                            $municipio = $this->db->get_where('municipios' , array('id_municipio'=>$censo[$i - 1]->MunicipioDondeNacioElAlumno))->row()->nombre;
                            $id_estado = $this->db->get_where('municipios' , array('id_municipio'=>$censo[$i - 1]->MunicipioDondeNacioElAlumno))->row()->id_estado;
                            $entidad_federal = $this->db->get_where('estados' , array('id_estado'=>$id_estado))->row()->entidad_federal;

                            $dia_nacimiento = date("d", $timestamp);
                            $mes_nacimiento = date("m", $timestamp);
                            $año_nacimiento = date("Y", $timestamp);
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(16);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$letra_nacionalidad.$censo[$i - 1]->CedulaDeIdentidadDelAlumnoOCedulaEscolar),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(40);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$municipio),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(114);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$entidad_federal),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(124);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$sexo_alumno ),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(130);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$dia_nacimiento),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(137);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$mes_nacimiento),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(144);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$año_nacimiento),0,50,'J');

                            $this->pdf->SetY($yLocation + 3);
                            $this->pdf->SetX(153);
                            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','*'),0,50,'J');
                            $this->pdf->SetY($yLocation + 3);
                            $this->pdf->SetX(161);
                            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','*'),0,50,'J');
                            $this->pdf->SetY($yLocation + 3);
                            $this->pdf->SetX(169);
                            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','*'),0,50,'J');
                            $this->pdf->SetY($yLocation + 3);
                            $this->pdf->SetX(178);
                            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_1),0,50,'J');
                            $this->pdf->SetY($yLocation + 3);
                            $this->pdf->SetX(186);
                            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_2),0,50,'J');
                            $this->pdf->SetY($yLocation + 3);
                            $this->pdf->SetX(194);
                            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_3),0,50,'J');
                            $this->pdf->SetY($yLocation + 3);
                            $this->pdf->SetX(202);
                            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_4),0,50,'J');

                        }

                        $yLocation = $yLocation + 4;
                        $this->pdf->Line(10, $yLocation, 207, $yLocation); //Linea Horizontal

            }

            //TABLA DE LOS DATOS
            $this->pdf->SetX(10);
            $this->pdf->RoundedRect(10, 82, 197, ($yLocation - 78), 2, '', '');
            $this->pdf->Line(10, 92, 207, 92); //Linea Horizontal
            $this->pdf->Line(15, 82, 15, ($yLocation )); //Linea Vertical
            $this->pdf->Line(40, 82, 40, ($yLocation )); //Linea Vertical
            $this->pdf->Line(114, 82, 114, ($yLocation )); //Linea Vertical
            $this->pdf->Line(121, 82, 121, ($yLocation )); //Linea Vertical
            $this->pdf->Line(130, 82, 130, ($yLocation )); //Linea Vertical
            $this->pdf->Line(137, 87, 137, ($yLocation )); //Linea Vertical
            $this->pdf->Line(144, 87, 144, ($yLocation )); //Linea Vertical
            $this->pdf->Line(152, 82, 152, ($yLocation  + 4)); //Linea Vertical
            $this->pdf->Line(130, 87, 200, 87); //Linea Horizontal
            $this->pdf->Line(160, 87, 160, ($yLocation + 4)); //Linea Vertical
            $this->pdf->Line(168, 87, 168, ($yLocation + 4)); //Linea Vertical
            $this->pdf->Line(176, 82, 176, ($yLocation + 4)); //Linea Vertical
            $this->pdf->Line(184, 87, 184, ($yLocation + 4)); //Linea Vertical
            $this->pdf->Line(191, 87, 191, ($yLocation + 4)); //Linea Vertical
            $this->pdf->Line(200, 82, 200, ($yLocation + 4)); //Linea Vertical
            $this->pdf->SetX(120);
            $this->pdf->Cell(0, 6,iconv('UTF-8','windows-1252','T O T A L E S'),0,50,'J');

            $yLocation = $yLocation + 10;
            $start_rect = $yLocation;

            $this->pdf->SetX(10);
            $this->pdf->Cell(0,15,iconv('UTF-8','windows-1252','Nº'),0,50,'J');
            $this->pdf->SetX(51);
            $this->pdf->Cell(0,-15,iconv('UTF-8','windows-1252','Apellidos'),0,50,'J');
            $this->pdf->SetX(140);
            $this->pdf->Cell(0,15,iconv('UTF-8','windows-1252','Nombres'),0,50,'J');
            $yLocation = $yLocation + 4;
            for ( $i = 1 ; $i <= 20 ; $i ++) {
                        $this->pdf->SetY($yLocation);
                        $this->pdf->SetX(10);
                        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$i),0,50,'J');

                        if($i <= count($censo)){
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(16);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerApellidoDelAlumno.' '.$censo[$i - 1]->SegundoApellidoDelAlumno),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(105);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerNombreDelAlumno.' '.$censo[$i - 1]->SegundoNombreDelAlumno),0,50,'J');
                        }

                        $yLocation = $yLocation + 4;
                        $this->pdf->Line(10, $yLocation, 207, $yLocation); //Linea Horizontal
            }

            $this->pdf->RoundedRect(10, ($start_rect - 2), 197, ($yLocation - 170 ), 2, '', '');
            $this->pdf->Line(10, ($start_rect + 4), 207, ($start_rect + 4)); //Linea Horizontal
            $this->pdf->Line(15, ($start_rect - 2), 15, ($yLocation )); //Linea Vertical
            $this->pdf->Line(105, ($start_rect - 2), 105, ($yLocation + 10)); //Linea Vertical
            $this->pdf->Line(155, ($yLocation), 155, ($yLocation + 10)); //Linea Vertical

            $this->pdf->SetY(266);
            $this->pdf->SetX(33);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Apellidos y Nombres del Docente'),0,50,'J');

            $this->pdf->SetY(270);
            $this->pdf->SetX(35);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$this->crud_model->get_teacher_name($array_nivel_educativo[0]->teacher_id)),0,50,'J');

            $this->pdf->SetY(266);
            $this->pdf->SetX(119);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Número de C.I.'),0,50,'J');

            $this->pdf->SetY(270);
            $this->pdf->SetX(121);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$this->crud_model->get_teacher_cedula($array_nivel_educativo[0]->teacher_id)),0,50,'J');

            $this->pdf->SetY(266);
            $this->pdf->SetX(172);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Firma'),0,50,'J');

            $this->pdf->SetY(278);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','V. Observaciones:'),0,50,'J');

            $this->pdf->Ln(10);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','VI. Fecha de Remisión:'),0,50,'J');

            $this->pdf->SetX(113);
            $this->pdf->Cell(0,-4,iconv('UTF-8','windows-1252','VII. Fecha de Recepción:'),0,50,'J');

            $this->pdf->SetY(300);
            $this->pdf->SetX(23);
            $this->pdf->SetFont('Arial', 'B', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Director (a)'),0,50,'J');
            $this->pdf->SetY(305);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
            $this->pdf->SetY(313);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_uem),0,50,'J');
            $this->pdf->SetY(318);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
            $this->pdf->SetY(325);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_cedula),0,50,'J');
            $this->pdf->SetY(330);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
            $this->pdf->SetY(315);
            $this->pdf->SetX(70);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DEL'),0,50,'J');
            $this->pdf->SetY(320);
            $this->pdf->SetX(71);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','PLANTEL'),0,50,'J');

            $this->pdf->SetY(300);
            $this->pdf->SetX(120);
            $this->pdf->SetFont('Arial', 'B', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Funcionario Receptor'),0,50,'J');
            $this->pdf->SetY(305);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
            $this->pdf->SetY(318);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
            $this->pdf->SetY(330);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
            $this->pdf->SetY(315);
            $this->pdf->SetX(172);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DE LA ZONA'),0,50,'J');
            $this->pdf->SetY(320);
            $this->pdf->SetX(177);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','EDUCATIVA'),0,50,'J');

            //TABLA DEL FOOTER 1
            $this->pdf->RoundedRect(10, 290, 94, 50, 2, '', '');
            $this->pdf->Line(10, 298, 104, 298); //Linea Horizontal
            $this->pdf->Line(10, 303, 55, 303); //Linea Horizontal
            $this->pdf->Line(10, 308, 55, 308); //Linea Horizontal
            $this->pdf->Line(10, 315, 55, 315); //Linea Horizontal
            $this->pdf->Line(10, 320, 55, 320); //Linea Horizontal
            $this->pdf->Line(10, 327, 55, 327); //Linea Horizontal
            $this->pdf->Line(10, 332, 55, 332); //Linea Horizontal
            $this->pdf->Line(55, 298, 55, 340); //Linea Vertical

            //TABLA DEL FOOTER 2
            $this->pdf->RoundedRect(113, 290, 94, 50, 2, '', '');
            $this->pdf->Line(113, 298, 207, 298); //Linea Horizontal
            $this->pdf->Line(113, 303, 160, 303); //Linea Horizontal
            $this->pdf->Line(113, 308, 160, 308); //Linea Horizontal
            $this->pdf->Line(113, 315, 160, 315); //Linea Horizontal
            $this->pdf->Line(113, 320, 160, 320); //Linea Horizontal
            $this->pdf->Line(113, 327, 160, 327); //Linea Horizontal
            $this->pdf->Line(113, 332, 160, 332); //Linea Horizontal
            $this->pdf->Line(160, 298, 160, 340); //Linea Vertical

            if($total_alumnos_seccion > 20){
                    $total_alumnos_pagina_2 = $total_alumnos_seccion - $total_alumnos_pagina;

                    $this->pdf->AddPage();

                    $this->pdf->SetFont('Arial','U',12);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','MÁTRICULA FINAL '.$nivel_educativo),0,50,'R');
                    $this->pdf->SetFont('Arial','',10);
                    $this->pdf->SetX(125);
                    $this->pdf->Cell(0,7,iconv('UTF-8','windows-1252','Código del Formato: RR-DEA-07-04'),0,50,'C');
                    $this->pdf->Ln(10);

                    $this->pdf->Ln(5);
                    $this->pdf->SetFont('Arial', '', 8);

                    $this->pdf->SetX(105);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','I. TIPO DE MATRÍCULA: CONVENCIONAL( X )       NO CONVENCIONAL ( * )'),0,50,'L');
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Año Escolar: '.$running_year.'   Mes y Año de la Matrícula Final: Julio 2016'),0,50,'L');

                    $this->pdf->SetX(10);

                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','II. Datos del Plantel: '),0,50,'J');

                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cód. Plantel: '.$cod_dea. '             Nombre: '.$full_name. '      Dtto.esc: 07'),0,50,'J');
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Dirección: AV. MOHEDANO CRUCE CON CALLE LA PAZ                Telefono: 0212 - 2664822'),0,50,'J');
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Municipio: CHACAO                Ent. Federal: MIRANDA                Zona Educativa: MIRANDA'),0,50,'J');

                    $grado_grupo = '';

                    switch ($id_nivel_educativo) {
                        case 1:
                            $grado_grupo = 'GRUPO';
                            break;
                        case 2:
                            $grado_grupo = 'GRADO';
                            break;
                        case 3:
                            $grado_grupo = 'AÑO';
                            break;
                    }

                    $this->pdf->Ln(5);
                    $this->pdf->SetX(10);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','III. Identificación del Curso: '),0,50,'J');
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Grado / Sección: '.$grado.' '.$grado_grupo.' '.$seccion.'          No de Estudiantes de la Seccion: '.$total_alumnos_seccion.'          Número de Estudiantes en esta Página: '.$total_alumnos_pagina_2),0,50,'J');
                    $this->pdf->Ln(5);
                    $this->pdf->SetX(10);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','IV. Matrícula Final:'),0,50,'J');
                    $this->pdf->Cell(0,12,iconv('UTF-8','windows-1252','Nº'),0,50,'J');
                    $this->pdf->SetX(20);
                    $this->pdf->Cell(0,-16,iconv('UTF-8','windows-1252','Cédula de'),0,50,'J');
                    $this->pdf->Cell(0,24,iconv('UTF-8','windows-1252','Identidad'),0,50,'J');
                    $this->pdf->SetX(54);
                    $this->pdf->Cell(0,-28,iconv('UTF-8','windows-1252','Lugar de Nacimiento'),0,50,'J');
                    $this->pdf->SetX(114);
                    $this->pdf->Cell(0,28,iconv('UTF-8','windows-1252','E.F.'),0,50,'J');
                    $this->pdf->SetX(122);
                    $this->pdf->Cell(0,-28,iconv('UTF-8','windows-1252','Sexo'),0,50,'J');
                    $this->pdf->SetY(84);
                    $this->pdf->SetX(131);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Fecha de Nac.'),0,50,'J');
                    $this->pdf->SetY(90);
                    $this->pdf->SetX(130);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Día   Mes   Año'),0,50,'J');
                    $this->pdf->SetY(84);
                    $this->pdf->SetX(152);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Edad Maternal'),0,50,'J');
                    $this->pdf->SetFont('Arial', '', 6);
                    $this->pdf->SetY(89);
                    $this->pdf->SetX(152);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','0A'),0,50,'J');
                    $this->pdf->SetY(91);
                    $this->pdf->SetX(152);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
                    $this->pdf->SetY(89);
                    $this->pdf->SetX(160);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','1A'),0,50,'J');
                    $this->pdf->SetY(91);
                    $this->pdf->SetX(160);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
                    $this->pdf->SetY(89);
                    $this->pdf->SetX(168);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','2A'),0,50,'J');
                    $this->pdf->SetY(91);
                    $this->pdf->SetX(168);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->SetY(84);
                    $this->pdf->SetX(177);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Edad Preescolar'),0,50,'J');
                    $this->pdf->SetFont('Arial', '', 6);
                    $this->pdf->SetY(89);
                    $this->pdf->SetX(177);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','3A'),0,50,'J');
                    $this->pdf->SetY(91);
                    $this->pdf->SetX(177);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
                    $this->pdf->SetY(89);
                    $this->pdf->SetX(185);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','4A'),0,50,'J');
                    $this->pdf->SetY(91);
                    $this->pdf->SetX(185);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','11M'),0,50,'J');
                    $this->pdf->SetY(89);
                    $this->pdf->SetX(193);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','5A'),0,50,'J');
                    $this->pdf->SetY(91);
                    $this->pdf->SetX(193);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','o +'),0,50,'J');
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->SetY(88);
                    $this->pdf->SetX(201);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','IB'),0,50,'J');

                    $edad_escolar_1 = 'X';

                    if($id_nivel_educativo == 1 ){
                        switch ($grado) {
                            case '01':
                                $edad_escolar_1 = 'X';
                                $edad_escolar_2 = '*';
                                $edad_escolar_3 = '*';
                                $edad_escolar_4 = '*';
                                break;
                            case '02':
                                $edad_escolar_1 = '*';
                                $edad_escolar_2 = 'X';
                                $edad_escolar_3 = '*';
                                $edad_escolar_4 = '*';
                                break;
                            case '03':
                                $edad_escolar_1 = '*';
                                $edad_escolar_2 = '*';
                                $edad_escolar_3 = 'X';
                                $edad_escolar_4 = '*';
                                break;
                        }
                    }else{
                        $edad_escolar_1 = '*';
                        $edad_escolar_2 = '*';
                        $edad_escolar_3 = '*';
                        $edad_escolar_4 = 'X';
                    }

                    $yLocation = 92;
                    for ( $i = 21 ; $i <= 40 ; $i ++) {
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(10);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$i),0,50,'J');

                                if($i <= count($censo)){
                                    $sexo_alumno = ($censo[$i - 1]->SexoDelAlumno = 'MASCULINO' ? 'M' : 'F');
                                    $timestamp = strtotime($censo[$i - 1]->FechaDeNacimientoDelAlumno);
                                    if($censo[$i - 1]->NacionalidadDelAlumno == 'VENEZOLANA'){
                                        $letra_nacionalidad = 'V';
                                    }else{
                                        $letra_nacionalidad = 'E';
                                    }
                                    $municipio = $this->db->get_where('municipios' , array('id_municipio'=>$censo[$i - 1]->MunicipioDondeNacioElAlumno))->row()->nombre;
                                    $id_estado = $this->db->get_where('municipios' , array('id_municipio'=>$censo[$i - 1]->MunicipioDondeNacioElAlumno))->row()->id_estado;
                                    $entidad_federal = $this->db->get_where('estados' , array('id_estado'=>$id_estado))->row()->entidad_federal;

                                    $dia_nacimiento = date("d", $timestamp);
                                    $mes_nacimiento = date("m", $timestamp);
                                    $año_nacimiento = date("Y", $timestamp);
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(16);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$letra_nacionalidad.$censo[$i - 1]->CedulaDeIdentidadDelAlumnoOCedulaEscolar),0,50,'J');
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(40);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$municipio),0,50,'J');
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(114);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$entidad_federal),0,50,'J');
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(124);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$sexo_alumno ),0,50,'J');
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(130);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$dia_nacimiento),0,50,'J');
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(137);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$mes_nacimiento),0,50,'J');
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(144);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$año_nacimiento),0,50,'J');

                                    $this->pdf->SetY($yLocation + 3);
                                    $this->pdf->SetX(153);
                                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','*'),0,50,'J');
                                    $this->pdf->SetY($yLocation + 3);
                                    $this->pdf->SetX(161);
                                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','*'),0,50,'J');
                                    $this->pdf->SetY($yLocation + 3);
                                    $this->pdf->SetX(169);
                                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','*'),0,50,'J');
                                    $this->pdf->SetY($yLocation + 3);
                                    $this->pdf->SetX(178);
                                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_1),0,50,'J');
                                    $this->pdf->SetY($yLocation + 3);
                                    $this->pdf->SetX(186);
                                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_2),0,50,'J');
                                    $this->pdf->SetY($yLocation + 3);
                                    $this->pdf->SetX(194);
                                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_3),0,50,'J');
                                    $this->pdf->SetY($yLocation + 3);
                                    $this->pdf->SetX(202);
                                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$edad_escolar_4),0,50,'J');

                                }

                                $yLocation = $yLocation + 4;
                                $this->pdf->Line(10, $yLocation, 207, $yLocation); //Linea Horizontal

                    }

                    //TABLA DE LOS DATOS
                    $this->pdf->SetX(10);
                    $this->pdf->RoundedRect(10, 82, 197, ($yLocation - 78), 2, '', '');
                    $this->pdf->Line(10, 92, 207, 92); //Linea Horizontal
                    $this->pdf->Line(15, 82, 15, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(40, 82, 40, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(114, 82, 114, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(121, 82, 121, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(130, 82, 130, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(137, 87, 137, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(144, 87, 144, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(152, 82, 152, ($yLocation  + 4)); //Linea Vertical
                    $this->pdf->Line(130, 87, 200, 87); //Linea Horizontal
                    $this->pdf->Line(160, 87, 160, ($yLocation + 4)); //Linea Vertical
                    $this->pdf->Line(168, 87, 168, ($yLocation + 4)); //Linea Vertical
                    $this->pdf->Line(176, 82, 176, ($yLocation + 4)); //Linea Vertical
                    $this->pdf->Line(184, 87, 184, ($yLocation + 4)); //Linea Vertical
                    $this->pdf->Line(191, 87, 191, ($yLocation + 4)); //Linea Vertical
                    $this->pdf->Line(200, 82, 200, ($yLocation + 4)); //Linea Vertical
                    $this->pdf->SetX(120);
                    $this->pdf->Cell(0, 6,iconv('UTF-8','windows-1252','T O T A L E S'),0,50,'J');

                    $yLocation = $yLocation + 10;
                    $start_rect = $yLocation;

                    $this->pdf->SetX(10);
                    $this->pdf->Cell(0,15,iconv('UTF-8','windows-1252','Nº'),0,50,'J');
                    $this->pdf->SetX(51);
                    $this->pdf->Cell(0,-15,iconv('UTF-8','windows-1252','Apellidos'),0,50,'J');
                    $this->pdf->SetX(140);
                    $this->pdf->Cell(0,15,iconv('UTF-8','windows-1252','Nombres'),0,50,'J');
                    $yLocation = $yLocation + 4;
                    for ( $i = 21 ; $i <=40 ; $i ++) {
                                $this->pdf->SetY($yLocation);
                                $this->pdf->SetX(10);
                                $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$i),0,50,'J');

                                if($i <= count($censo)){
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(16);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerApellidoDelAlumno.' '.$censo[$i - 1]->SegundoApellidoDelAlumno),0,50,'J');
                                    $this->pdf->SetY($yLocation);
                                    $this->pdf->SetX(105);
                                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerNombreDelAlumno.' '.$censo[$i - 1]->SegundoNombreDelAlumno),0,50,'J');
                                }

                                $yLocation = $yLocation + 4;
                                $this->pdf->Line(10, $yLocation, 207, $yLocation); //Linea Horizontal
                    }

                    $this->pdf->RoundedRect(10, ($start_rect - 2), 197, ($yLocation - 170 ), 2, '', '');
                    $this->pdf->Line(10, ($start_rect + 4), 207, ($start_rect + 4)); //Linea Horizontal
                    $this->pdf->Line(15, ($start_rect - 2), 15, ($yLocation )); //Linea Vertical
                    $this->pdf->Line(105, ($start_rect - 2), 105, ($yLocation + 10)); //Linea Vertical
                    $this->pdf->Line(155, ($yLocation), 155, ($yLocation + 10)); //Linea Vertical

                    $this->pdf->SetY(266);
                    $this->pdf->SetX(33);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Apellidos y Nombres del Docente'),0,50,'J');

                    $this->pdf->SetY(270);
                    $this->pdf->SetX(35);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$this->crud_model->get_teacher_name($array_nivel_educativo[0]->teacher_id)),0,50,'J');

                    $this->pdf->SetY(266);
                    $this->pdf->SetX(119);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Número de C.I.'),0,50,'J');

                    $this->pdf->SetY(270);
                    $this->pdf->SetX(121);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$this->crud_model->get_teacher_cedula($array_nivel_educativo[0]->teacher_id)),0,50,'J');

                    $this->pdf->SetY(266);
                    $this->pdf->SetX(172);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Firma'),0,50,'J');

                    $this->pdf->SetY(278);
                    $this->pdf->SetX(10);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','V. Observaciones:'),0,50,'J');

                    $this->pdf->Ln(10);
                    $this->pdf->SetX(10);
                    $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','VI. Fecha de Remisión:'),0,50,'J');

                    $this->pdf->SetX(113);
                    $this->pdf->Cell(0,-4,iconv('UTF-8','windows-1252','VII. Fecha de Recepción:'),0,50,'J');

                    $this->pdf->SetY(300);
                    $this->pdf->SetX(23);
                    $this->pdf->SetFont('Arial', 'B', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Director (a)'),0,50,'J');
                    $this->pdf->SetY(305);
                    $this->pdf->SetX(11);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
                    $this->pdf->SetY(313);
                    $this->pdf->SetX(11);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_uem),0,50,'J');
                    $this->pdf->SetY(318);
                    $this->pdf->SetX(11);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
                    $this->pdf->SetY(325);
                    $this->pdf->SetX(11);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252',$director_cedula),0,50,'J');
                    $this->pdf->SetY(330);
                    $this->pdf->SetX(11);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
                    $this->pdf->SetY(315);
                    $this->pdf->SetX(70);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DEL'),0,50,'J');
                    $this->pdf->SetY(320);
                    $this->pdf->SetX(71);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','PLANTEL'),0,50,'J');

                    $this->pdf->SetY(300);
                    $this->pdf->SetX(120);
                    $this->pdf->SetFont('Arial', 'B', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Funcionario Receptor'),0,50,'J');
                    $this->pdf->SetY(305);
                    $this->pdf->SetX(114);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
                    $this->pdf->SetY(318);
                    $this->pdf->SetX(114);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
                    $this->pdf->SetY(330);
                    $this->pdf->SetX(114);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
                    $this->pdf->SetY(315);
                    $this->pdf->SetX(172);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DE LA ZONA'),0,50,'J');
                    $this->pdf->SetY(320);
                    $this->pdf->SetX(177);
                    $this->pdf->SetFont('Arial', '', 8);
                    $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','EDUCATIVA'),0,50,'J');

                    //TABLA DEL FOOTER 1
                    $this->pdf->RoundedRect(10, 290, 94, 50, 2, '', '');
                    $this->pdf->Line(10, 298, 104, 298); //Linea Horizontal
                    $this->pdf->Line(10, 303, 55, 303); //Linea Horizontal
                    $this->pdf->Line(10, 308, 55, 308); //Linea Horizontal
                    $this->pdf->Line(10, 315, 55, 315); //Linea Horizontal
                    $this->pdf->Line(10, 320, 55, 320); //Linea Horizontal
                    $this->pdf->Line(10, 327, 55, 327); //Linea Horizontal
                    $this->pdf->Line(10, 332, 55, 332); //Linea Horizontal
                    $this->pdf->Line(55, 298, 55, 340); //Linea Vertical

                    //TABLA DEL FOOTER 2
                    $this->pdf->RoundedRect(113, 290, 94, 50, 2, '', '');
                    $this->pdf->Line(113, 298, 207, 298); //Linea Horizontal
                    $this->pdf->Line(113, 303, 160, 303); //Linea Horizontal
                    $this->pdf->Line(113, 308, 160, 308); //Linea Horizontal
                    $this->pdf->Line(113, 315, 160, 315); //Linea Horizontal
                    $this->pdf->Line(113, 320, 160, 320); //Linea Horizontal
                    $this->pdf->Line(113, 327, 160, 327); //Linea Horizontal
                    $this->pdf->Line(113, 332, 160, 332); //Linea Horizontal
                    $this->pdf->Line(160, 298, 160, 340); //Linea Vertical
            }

            $this->pdf->Output();

    }



}
