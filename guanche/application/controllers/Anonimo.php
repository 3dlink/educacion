<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Anonimo extends CI_Controller
{

    function __construct() {
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
        $this->load->model('Censo/Censo');
        $this->load->model('Censo/Grado');
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

       /*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
    }


    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        $this->session->set_userdata('anonimo_login', '1');
        $this->session->set_userdata('anonimo_id', 0);
        $this->session->set_userdata('login_user_id', 0);
        $this->session->set_userdata('name', 'anonimo');
        $this->session->set_userdata('login_type', 'anonimo');

        $page_data['page_name']  = 'census_add';
        $page_data['page_title'] = "Anonimo";

        $page_data['grados'] = Grado::orderBy('id_censo_grado')->where('activo_abello', '=' , 1)->get();
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

        $this->load->view('backend/anonimo_index', $page_data);
    }

    public function insertar() {
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

    public function solicitarAyuda() {

        try {

            $datos = $_POST['datos'];

            log_message('debug', 'Data serializada para ayuda '.$datos[1]);
            // Cargo libreria de envio de correos
            $this->load->library('My_PHPMailer');

            $email_from = 'contactoeducacion@chacao.gob.ve'; // Who the email is from
            $email_subject = "Contacto desde Censo y Registro Escolar";
            $email_to = "contactoeducacion@chacao.gob.ve";

            // set email message......................
            $email_message = "Detalles del formulario de contacto:\n\n";
            $email_message .= utf8_decode("Nombres y Apellido: " . $datos[0] . "\n");
            $email_message .= utf8_decode("E-mail: " . $datos[1] . "\n");
            $email_message .= utf8_decode("Mensaje: " . $datos[2] . "\n");
            $email_message .= utf8_decode("Telefono: " . $datos[3] . "\n\n");
            $email_message .= utf8_decode("Celular: " . $datos[4] . "\n\n");

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = "mail.chacao.gob.ve";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = "contactoeducacion"; //si no funciona quitar el @chacao.gob.ve
            $mail->Password = "2014chacao";
            $mail->IsHTML(false);
            $mail->setFrom($email_from, 'Contacto Educacion');
            $mail->addAddress($email_to, 'Contacto Educacion');
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

        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function buscarCuposSolicitados() {
        try {
            $datos = $_POST['datos'];

            $cedula = $datos[0];
            if(count($datos) > 1){
                $cedula_madre = $datos[1];
                $cedula_padre = $datos[2];
                $cedula_alumno = $datos[3];
            }else{
                $cedula_madre = "vacio";
                $cedula_padre = "vacio";
                $cedula_alumno = "vacio";
            }

            $censo = Censo::where('CedulaDeIdentidadDelRepresentante', '=', $cedula)
                            ->get();

            if(count($censo) > 0){
                if(count($censo) < $censo[0]->CuposASolicitar){
                    if($censo[0]->CuposASolicitar == 1){
                        echo "NO_OK";
                    }else{
                        if($censo[0]->CedulaDeIdentidadDelAlumnoOCedulaEscolar == $cedula_alumno){
                            echo "NO_OK";
                        }elseif($censo[0]->CedulaDeIdentidadDeLaMadre == $cedula_madre && $censo[0]->CedulaDeIdentidadDelPadre == $cedula_padre){
                            echo "NO_OK";
                        }elseif($censo[0]->CedulaDeIdentidadDeLaMadre == $cedula_madre && $cedula_padre == 0){
                            echo "NO_OK";
                        }elseif($censo[0]->CedulaDeIdentidadDelPadre == $cedula_padre && $cedula_madre == 0){
                            echo "NO_OK";
                        }else{
                            echo $censo[0];
                        }
                    }
                }else{
                    echo "NO_OK";
                }
            }
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}