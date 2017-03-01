<?php
    date_default_timezone_set('America/Caracas');
    require('vendors/PHPMailer/PHPMailerAutoload.php');

    if(isset($_POST['correo'])) {
     
        if( (!isset($_POST['nombres_apellidos'])) ||  (!isset($_POST['mensaje'])) || (!isset($_POST['telefono'])) || (!isset($_POST['movil'])) || (!isset($_POST['correo']) ) ){

            $message ="Debe ingresar todos los datos";
            echo "<script type='text/javascript'>alert('$message');</script>";
            die();
        }

        $email_from = $_POST['correo'];
        $email_to = "contactoeducacion@chacao.gob.ve";
        $email_subject = "Contacto desde Censo y Registro Escolar";
        $email_message = "Detalles del formulario de contacto:\n\n";
        $email_message .= utf8_decode("Nombres y Apellido: " . $_POST['nombres_apellidos'] . "\n");
        $email_message .= utf8_decode("E-mail: " . $_POST['correo'] . "\n");
        $email_message .= utf8_decode("Mensaje: " . $_POST['mensaje'] . "\n");
        $email_message .= utf8_decode("Telefono: " . $_POST['telefono'] . "\n\n");
        $email_message .= utf8_decode("Celular: " . $_POST['movil'] . "\n\n");

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "mail.chacao.gob.ve";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "contactoeducacion";
        $mail->Password = "2014chacao";
        $mail->setFrom($email_from, $_POST['nombres_apellidos']);
        $mail->addAddress($email_to, 'Censo y Registro Escolar');
        $mail->Subject = $email_subject;
        $mail->Body = $email_message;            
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        if (!$mail->send()) {
            $message = "¡Ha ocurrido un error inesperado, comuniquese con el administrador del sistema!";
        } else {
            $message = "¡El formulario se ha enviado con éxito!";
        }
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

?>