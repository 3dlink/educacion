<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }

	function account_opening_email($username = '' , $email = '', $password = '')
	{
		$system_name	=	"Sistema Integral Educación Chacao";

		$email_msg		=	"Bienvenido al ".$system_name."<br />";
		$email_msg		.=	"Su usuario es : ".$username."<br />";
		$email_msg		.=	"Su clave de ingreo es : ".$password."<br />";
		$email_msg		.=	"Inicie sesión aquí : ".base_url()."<br />";

		$email_sub		=	"Registr de nuevo usuario";
		$email_to		=	$email;

		$this->do_email($email_msg , $email_sub , $email_to);
	}

	function password_reset_email($new_password = '' , $account_type = '' , $email = '')
	{
		$query			=	$this->db->get_where('usuarios' , array('correo_electronico' => $email));
		if($query->num_rows() > 0)
		{

			$email_msg	=	"Su tipo de cuenta es : ".$account_type."<br />";
			$email_msg	.=	"Su nueva contraseña es : ".$new_password."<br />";

			$email_sub	=	"Solicitud de reseteo de contraseña";
			$email_to	=	$email;
			$this->do_email($email_msg , $email_sub , $email_to);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/***custom email sender****/
	function do_email($msg=NULL, $sub=NULL, $to=NULL, $from=NULL)
	{

	    $email_from = "contactoeducacion@chacao.gob.ve";
                $this->load->library('My_PHPMailer');
                $mail = new PHPMailer();

                $mail->isSMTP();
                $mail->SMTPDebug = 0;
                $mail->Host = "mail.chacao.gob.ve";
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = "contactoeducacion";
                $mail->Password = "contacto2016*";
                $mail->IsHTML(true);
                $mail->setFrom($email_from, 'DIRECCIÓN DE EDUCACIÓN ALCALDIA DE CHACAO');
                $mail->addAddress($to);
                $mail->Subject = $sub;
                $mail->Body = $msg;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true)
                );

                $separator = md5(time());

                if (!$mail->send()) {
                    $this->session->set_flashdata('flash_error' , "Ha ocurrido un error inesperado al enviar el mensaje, intente más tarde");
                } else {
                    $this->session->set_flashdata('flash_message' , "Sus datos han sido enviados satisfactoriamente");
                }


	}
}

