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

            $director_uem = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.' '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
            $base_directora = ($escuela->director_encargado == '1') ?  $escuela->firma.' (E)' : $escuela->firma;

            $email_representante = $censo->CorreoElectronicoDelRepresentante;
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;
            $id_school = $this->config->item('id_school');
            $nombre_apellido_representante = $censo->PrimerNombreDelRepresentante.' '.$censo->SegundoNombreDelRepresentante.' '.$censo->PrimerApellidoDelRepresentante.' '.$censo->SegundoApellidoDelRepresentante;
            $grado_cursar = VistaGradoEscuela::where('id_escuela', '=', $id_school)->where('id_grado','=', $censo->GradoACursar)->get();
            $email_from = $escuela->correo_electronico; // Who the email is from
            $email_subject = utf8_decode("APROBACIÓN DE CUPO, AÑO ESCOLAR ".$running_year); // The Subject of the email
            $email_to = $email_representante;

            // set email message......................
            $email_message = "<html><body>Estimado Representante  <b> <br>".$nombre_apellido_representante."</b> <br> <br>";
            $email_message .= "Reciba un cordial saludo en nombre del equipo de la  Comunidad Educativa de la <b>".strtoupper($escuela->nombre_escuela)."</b>, por medio de la  presente hacemos de su conocimiento, que una vez revisados los recaudos consignados por usted y contando con la disponibilidad de cupo para su representado, "
                                        .strtoupper($censo->PrimerNombreDelAlumno.' '.$censo->SegundoNombreDelAlumno.' '.$censo->PrimerApellidoDelAlumno.' '.$censo->SegundoApellidoDelAlumno).", le informamos que ha sido aprobado el  ingreso para cursar el ".$grado_cursar[0]->nombre_grado.
                                        ",  en esta Unidad Educativa. Por tal motivo, le invitamos a formalizar su inscripci&oacute;n en el lapso del 19 al 21 de septiembre de 2016 en el horario comprendido entre las 8:30 am hasta y 11.30 am y de 1:00 pm hasta las 3:30 pm."."<br> <br>";
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
            $mail->Host = $escuela->smtp_host;
            $mail->Port = $escuela->smtp_port;
            $mail->SMTPAuth = $escuela->smtp_auth;
            $mail->Username = $escuela->smtp_user; //si no funciona quitar el @chacao.gob.ve
            $mail->Password = $escuela->smtp_password;
            $mail->IsHTML(true);
            $mail->setFrom($email_from, $escuela->nombre_escuela);
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