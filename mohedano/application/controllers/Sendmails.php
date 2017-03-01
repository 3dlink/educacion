<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Sendmails extends CI_Controller {

        function __construct() {
          parent::__construct();
          /*cache control*/
          $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
          $this->output->set_header('Pragma: no-cache');
        }

        public function index()
        {
            //cargamos la libreria email de ci
            $this->load->library('email');

            //configuracion para gmail
            $configGmail = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'gutierreznorwill@gmail.com',
                'smtp_pass' => 'Lupercio1182.',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            );

            //cargamos la configuración para enviar con gmail
            $this->email->initialize($configGmail);

            $this->email->from('nombre o correo que envia');
            $this->email->to("para quien es");
            $this->email->subject('Bienvenido/a a uno-de-piera.com');
            $this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Bienvenido al blog');
            $this->email->send();
            //con esto podemos ver el resultado
            var_dump($this->email->print_debugger());
        }

    }

?>