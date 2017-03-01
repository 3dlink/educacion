<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * 	@author : Joyonto Roy
 * 	30th July, 2014
 * 	Creative Item
 * 	www.creativeitem.com
 * 	http://codecanyon.net/user/joyontaroy
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('Usuario');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    public function index() {

        if ($this->session->userdata('admin_login') == 1 && $this->session->userdata('id_school') == 0 ){
            if($this->session->userdata('change_password') === 1){
                $this->session->set_flashdata('flash_message', "Debe cambiar su contraseña");
                redirect(base_url() . 'admin/manage_profile', 'refresh');
            }else{
                redirect(base_url() . 'admin/dashboard', 'refresh');
            }
        }else{
            $this->session->sess_destroy();
            $this->session->set_flashdata('logout_notification', 'logged_out');
        }

        $this->load->view('backend/login');
    }

    //Ajax login function
    function ajax_login() {

        $response = array();

        //Recieving post input of email, password from ajax request
        //log_message('debug', $_POST["email"]);
        $email = $_POST["user"];
        $password = $_POST["password"];
        $response['submitted_data'] = $_POST;

        //log_message('debug', $_POST["user"]);

        //Validating login
        //log_message('debug', 'beforeValidateLogin');
        $login_status = $this->validate_login($email, $password);

        $response['login_status'] = $login_status;


        if ($login_status == 'success') {
            $response['redirect_url'] = '';
        }

        //Replying ajax request with validation response
        echo json_encode($response);
    }

    //Validating login from ajax request
    function validate_login($email = '', $password = '') {


        //Variable bandera para controlar la validacion del hash
        $result = 0;

        //Buscar registro usando una combinacion de correo y clave
        $usuario = Usuario::find($email);

        log_message('debug', 'usuario'.$usuario);

        //Clave hash en la bd del usuario
        $password_hash = $usuario['clave'];
        //Verificacion de password
        if (password_verify($password, $password_hash) && ($usuario['registro_activo'] == 1) ) {

            $result = 1;
        }
        else {
            log_message('debug', 'Password '.$password_hash);
            log_message('debug', 'Password Fail');
        }

        //Si existe el usuario en la bd y la clave es correcta
        if(count($usuario) > 0 and $result === 1) {

            $this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('admin_id', $usuario['id_usuario']);
            $this->session->set_userdata('login_user_id', $usuario['id_usuario']);
            $this->session->set_userdata('name', $usuario['usuario']);
            $this->session->set_userdata('login_type', $usuario['tipo_usuario']);
            $this->session->set_userdata('especialist', $usuario['especialista']);
            $this->session->set_userdata('id_school', $usuario['id_escuela']);
            $this->session->set_userdata('id_perfil', $usuario['id_perfil']);
            $this->session->set_userdata('user_mail', $usuario['correo_electronico']);
            (password_verify('123456', $password_hash)) ? $this->session->set_userdata('change_password', 1) : $this->session->set_userdata('change_password', 0) ;
            return 'success';

        }

        return 'invalid';
    }

    /*     * *DEFAULT NOR FOUND PAGE**** */

    function four_zero_four() {
        $this->load->view('four_zero_four');
    }

    // PASSWORD RESET BY EMAIL
    function forgot_password()
    {
        $this->load->view('backend/forgot_password');
    }

    function ajax_forgot_password()
    {
        $resp                   = array();
        $resp['status']         = 'false';
        $email                  = $_POST["email"];
        $reset_account_type     = '';
        //resetting user password here
        $new_password           =   substr( md5( rand(100000000,20000000000) ) , 0,7);

        // Checking credential for admin
        $query = $this->db->get_where('usuarios' , array('correo_electronico' => $email));
        if ($query->num_rows() > 0)
        {
            $reset_account_type     =   'admin';
            $this->db->where('correo_electronico' , $email);
            $this->db->update('usuarios' , array('clave' => password_hash($new_password, 1)));
            $resp['status']         = 'true';
        }


        // send new password to user email
        $this->email_model->password_reset_email($new_password , $reset_account_type , $email);

        $resp['submitted_data'] = $_POST;

        echo json_encode($resp);
    }

    /*     * *****LOGOUT FUNCTION ****** */

    function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url(), 'refresh');
    }

}