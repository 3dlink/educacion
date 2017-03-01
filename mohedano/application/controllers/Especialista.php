<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Especialista extends CI_Controller
{
	function __construct()
	{
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
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

        date_default_timezone_set('America/Caracas');

    }

    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . '/login', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . '/admin/dashboard', 'refresh');
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

    /***ANAMNESIS TRABAJO SOCIAL***/
    function anamnesis_ts($param1 = '', $param2 = '' , $param3 = '')
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            if ($param1 == 'create') {
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
                $this->load->model('Anamnesis_ts');

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

                if($param3 == 'insertar_ts'){
                    try {
                        $new_anamnesis_ts = new Anamnesis_ts;

                        foreach ($this->input->post() as $key => $value) {
                            $new_anamnesis_ts->$key = $value;
                        }

                        $new_anamnesis_ts->save();

                        $data['id_especialista']  = $this->session->userdata('login_user_id');
                        $this->db->where('id_censo', $param2);
                        $this->db->update('censo', $data);

                        redirect(base_url() . 'especialista/census_list/', 'refresh');
                    } catch (Exception $e) {
                        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                    }
                }
            }else if ($param1 == 'edit') {
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
                $this->load->model('Anamnesis_ts');

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

                $page_data['edit_data_anamnesis'] = $this->db->get_where('anamnesis_ts', array('id_censo' => $param2))->result_array();

                if($param3 == 'insertar_ts'){
                    try {
                        
                        $id_censo = $this->input->post('id_censo');
                                    
                        $anamnesis_ts = Anamnesis_ts::find($id_censo);

                        foreach ($this->input->post() as $key => $value) {
                            $anamnesis_ts->$key = $value;
                        }

                        $anamnesis_ts->save();
                        echo $anamnesis_ts;
                        
                    } catch (Exception $e) {
                        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                    }
                }
            }

            $page_data['page_name']  = 'anamnesis_ts';
            $page_data['page_title'] = "Anamnesis Trabajo Social";

            $config = Configuracion::all();

            $id_school = $this->config->item('id_school');

            $page_data['config'] = $config;

            //Pasando la data a la vista
            $this->load->view('backend/index', $page_data);
    }

    /***ANAMNESIS PSICOLOGO ***/
    function anamnesis_ps($param1 = '', $param2 = '' , $param3 = '')
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');
            $page_data['page_name']  = 'anamnesis_ps';
            $page_data['page_title'] = "Anamnesis Psicologo";

            $config = Configuracion::all();

            $id_school = $this->config->item('id_school');

            //Variable a la cual le pasamos resultado de select
            $page_data['config'] = $config;

            //Pasando la data a la vista
            $this->load->view('backend/index', $page_data);
    }

    /***ANAMNESIS PSICOPEDAGOGO ***/
    function anamnesis_psc($param1 = '', $param2 = '' , $param3 = '')
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

            $page_data['page_name']  = 'anamnesis_psc';
            $page_data['page_title'] = "Anamnesis Psicopedagogo";

            $config = Configuracion::all();

            $id_school = $this->config->item('id_school');

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
                redirect(base_url() . 'especialista/census_list/', 'refresh');
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
                redirect(base_url() . 'especialista/census_list/', 'refresh');
            }
            if ($param1 == 'validate') {
                $data['id_especialista']  = $this->session->userdata('login_user_id');

                $this->db->where('id_censo', $param2);
                $this->db->update('censo', $data);
                $this->session->set_flashdata('flash_message' , 'Datos validados satisfactoriamente');
                redirect(base_url() . 'especialista/census_list/', 'refresh');
            }

            $page_data['page_name']  = 'census_edit';
            $page_data['page_title'] = "Censo y Registro Escolar";
            $this->load->view('backend/index', $page_data);

    }

    function census_list()
    {
            if ($this->session->userdata('admin_login') != 1)
                redirect(base_url(), 'refresh');

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


    function school_list()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

        $config = Configuracion::all();
        $page_data['config'] = $config;
        $page_data['page_name']  = 'school_list';
        $page_data['page_title'] = "Escuelas del Sistema";


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
    	if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

    	$page_data['page_name']  	= 'student_information';
    	$page_data['page_title'] 	= "Información del Estudiante". " - ".get_phrase('class')." : ".
    										$this->crud_model->get_class_name($class_id);
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
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');
            $this->db->insert('teacher', $data);
            $teacher_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $teacher_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            $this->email_model->account_opening_email('teacher', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . '/admin/teacher/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');

            $this->db->where('teacher_id', $param2);
            $this->db->update('teacher', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/teacher/', 'refresh');
        } else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('teacher', array(
                'teacher_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('teacher_id', $param2);
            $this->db->delete('teacher');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/teacher/', 'refresh');
        }
        $page_data['teachers']   = $this->db->get('teacher')->result_array();
        $page_data['page_name']  = 'teacher';
        $page_data['page_title'] = get_phrase('manage_teacher');
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/subject/'.$data['class_id'], 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');

            $this->db->where('subject_id', $param2);
            $this->db->update('subject', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/subject/'.$data['class_id'], 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('subject', array(
                'subject_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('subject_id', $param2);
            $this->db->delete('subject');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/subject/'.$param3, 'refresh');
        }
		 $page_data['class_id']   = $param1;
        $page_data['subjects']   = $this->db->get_where('subject' , array('class_id' => $param1))->result_array();
        $page_data['page_name']  = 'subject';
        $page_data['page_title'] = get_phrase('manage_subject');
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/classes/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');

            $this->db->where('class_id', $param2);
            $this->db->update('class', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/classes/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class', array(
                'class_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_id', $param2);
            $this->db->delete('class');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/classes/', 'refresh');
        }
        $page_data['classes']    = $this->db->get('class')->result_array();
        $page_data['page_name']  = 'class';
        $page_data['page_title'] = get_phrase('manage_class');
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE SECTIONS*****/
    function section($class_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        // detect the first class
        if ($class_id == '')
            $class_id           =   $this->db->get('class')->first_row()->class_id;

        $page_data['page_name']  = 'section';
        $page_data['page_title'] = get_phrase('manage_sections');
        $page_data['class_id']   = $class_id;
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'edit') {
            $data['name']       =   $this->input->post('name');
            $data['nick_name']  =   $this->input->post('nick_name');
            $data['class_id']   =   $this->input->post('class_id');
            $data['teacher_id'] =   $this->input->post('teacher_id');
            $this->db->where('section_id' , $param2);
            $this->db->update('section' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('section_id' , $param2);
            $this->db->delete('section');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/section' , 'refresh');
        }
    }

    function get_class_section($class_id)
    {
        $sections = $this->db->get_where('section' , array(
            'class_id' => $class_id
        ))->result_array();
        foreach ($sections as $row) {
            echo '<option value="' . $row['section_id'] . '">' . $row['name'] . '</option>';
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . '/admin/exam/', 'refresh');
        }
        if ($param1 == 'edit' && $param2 == 'do_update') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');

            $this->db->where('exam_id', $param3);
            $this->db->update('exam', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/exam/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('exam', array(
                'exam_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('exam_id', $param2);
            $this->db->delete('exam');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/exam/', 'refresh');
        }
        $page_data['exams']      = $this->db->get('exam')->result_array();
        $page_data['page_name']  = 'exam';
        $page_data['page_title'] = get_phrase('manage_exam');
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
                $this->session->set_flashdata('mark_message', 'Choose exam, class and subject');
                redirect(base_url() . '/admin/marks/', 'refresh');
            }
        }
        if ($this->input->post('operation') == 'update') {
            $data['mark_obtained'] = $this->input->post('mark_obtained');
            $data['comment']       = $this->input->post('comment');

            $this->db->where('mark_id', $this->input->post('mark_id'));
            $this->db->update('mark', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/marks/' . $this->input->post('exam_id') . '/' . $this->input->post('class_id') . '/' . $this->input->post('subject_id'), 'refresh');
        }
        $page_data['exam_id']    = $exam_id;
        $page_data['class_id']   = $class_id;
        $page_data['subject_id'] = $subject_id;

        $page_data['page_info'] = 'Exam marks';

        $page_data['page_name']  = 'marks';
        $page_data['page_title'] = get_phrase('manage_exam_marks');
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/grade/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('grade', array(
                'grade_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('grade_id', $param2);
            $this->db->delete('grade');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/grade/', 'refresh');
        }
        $page_data['grades']     = $this->db->get('grade')->result_array();
        $page_data['page_name']  = 'grade';
        $page_data['page_title'] = get_phrase('manage_grade');
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
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
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/class_routine/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class_routine', array(
                'class_routine_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_routine_id', $param2);
            $this->db->delete('class_routine');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . '/admin/class_routine/', 'refresh');
        }
        $page_data['page_name']  = 'class_routine';
        $page_data['page_title'] = get_phrase('manage_class_routine');
        $this->load->view('backend/index', $page_data);
    }

	/****** DAILY ATTENDANCE *****************/
	function manage_attendance($date='',$month='',$year='',$class_id='')
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

			$this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			redirect(base_url() . '/admin/manage_attendance/'.$date.'/'.$month.'/'.$year.'/'.$class_id , 'refresh');
		}
        $page_data['date']     =	$date;
        $page_data['month']    =	$month;
        $page_data['year']     =	$year;
        $page_data['class_id'] =	$class_id;

        $page_data['page_name']  =	'manage_attendance';
        $page_data['page_title'] =	get_phrase('manage_daily_attendance');
		$this->load->view('backend/index', $page_data);
	}
	function attendance_selector()
	{
		redirect(base_url() . '/admin/manage_attendance/'.$this->input->post('date').'/'.
					$this->input->post('month').'/'.
						$this->input->post('year').'/'.
							$this->input->post('class_id') , 'refresh');
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

            $data['description'] = $this->input->post('system_name');
            $this->db->where('type' , 'system_name');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_title');
            $this->db->where('type' , 'system_title');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('address');
            $this->db->where('type' , 'address');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('phone');
            $this->db->where('type' , 'phone');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('paypal_email');
            $this->db->where('type' , 'paypal_email');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('currency');
            $this->db->where('type' , 'currency');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_email');
            $this->db->where('type' , 'system_email');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_name');
            $this->db->where('type' , 'system_name');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('language');
            $this->db->where('type' , 'language');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('text_align');
            $this->db->where('type' , 'text_align');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . '/admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . '/admin/system_settings/', 'refresh');
        }
        if ($param1 == 'change_skin') {
            $data['description'] = $param2;
            $this->db->where('type' , 'skin_colour');
            $this->db->update('settings' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('theme_selected'));
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
            $data['name']  = $this->input->post('name');
            $data['email'] = $this->input->post('email');

            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' . $this->session->userdata('admin_id') . '.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . '/admin/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $data['password']             = $this->input->post('password');
            $data['new_password']         = $this->input->post('new_password');
            $data['confirm_new_password'] = $this->input->post('confirm_new_password');

            $current_password = $this->db->get_where('admin', array(
                'admin_id' => $this->session->userdata('admin_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('admin_id', $this->session->userdata('admin_id'));
                $this->db->update('admin', array(
                    'password' => $data['new_password']
                ));
                $this->session->set_flashdata('flash_message', get_phrase('password_updated'));
            } else {
                $this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
            }
            redirect(base_url() . '/admin/manage_profile/', 'refresh');
        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = "Perfil";
        $page_data['edit_data']  = $this->db->get_where('admin', array(
            'admin_id' => $this->session->userdata('admin_id')
        ))->result_array();
        $this->load->view('backend/index', $page_data);
    }

}
