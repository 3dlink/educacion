<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class NoDisponibilidadCupos extends CI_Controller {

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


                  $uni_pref = "";
                  switch ($this->config->item('id_school')) {
                    case 1:
                        $uni_pref = "UniDePrefAndres";
                        break;
                    case 2:
                        $uni_pref = "UniDePrefJuanDio";
                        break;
                    case 3:
                        $uni_pref = "UniDePrefCarlos";
                        break;
                  }

                  $escuela = Escuela::find($this->config->item('id_school'));
                  $censo = Puntaje_Censo::where($uni_pref, '=', 1)
                                                            ->where('Residente', '=', 0)
                                                            ->where('TrabajaEnAlcaldia', '=', 0)
                                                            ->get();

                  $contador = 0;
                  foreach ($censo as $row) {
                        $secciones = Seccion::find($row['SeccionACursar']);
                        $director_uem = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.' '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
                        $base_directora = ($escuela->director_encargado == '1') ?  $escuela->firma.' (E)' : $escuela->firma;

                        $email_representante = $row['CorreoElectronicoDelRepresentante'];
                        $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;
                        $id_school = $this->config->item('id_school');
                        $nombre_apellido_representante = $row['PrimerNombreDelRepresentante'].' '.$row['SegundoNombreDelRepresentante'].' '.$row['PrimerApellidoDelRepresentante'].' '.$row['SegundoApellidoDelRepresentante'];
                        $grado_cursar = VistaGradoEscuela::where('id_escuela', '=', $id_school)->where('id_grado','=', $row['grado_cursar'])->get();
                        $email_from = "contactoeducacion@chacao.gob.ve"; // Who the email is from
                        $email_subject = utf8_decode("AVISO DE NO DISPONIBILIDAD DE CUPO PARA EL AÑO ESCOLAR ".$running_year); // The Subject of the email
                        $email_to = $email_representante;

                        // set email message......................
                        $email_message = "<html><body>Estimado Representante  <b> <br>".$nombre_apellido_representante."</b> <br> <br>";
                        $email_message .= "Reciba un cordial saludo en nombre del equipo de la  Comunidad Educativa de la <b>".strtoupper($escuela->nombre_escuela)."</b>, por medio de la  presente hacemos de su conocimiento, que una vez realizado el proceso de inscripci&oacute;n  de los alumnos regulares y verificada la disponibilidad de cupo para el "
                                                        .$grado_cursar[0]->nombre_grado.", cumplimos con informarle  que en esta oportunidad nos vemos  imposibilitados de aprobarle el  ingreso a esta Instituci&oacute;n, a su representado: ".strtoupper($row['PrimerNombreDelAlumno'].' '.$row['SegundoNombreDelAlumno'].' '.$row['PrimerApellidoDelAlumno'].' '.$row['SegundoApellidoDelAlumno']).".<br> <br>";
                        $email_message .= "Igualmente,  le recordamos  que a partir del pr&oacute;ximo 22 de septiembre 2016, en el horario comprendid&oacute ente las 9:00 am hasta las 11:30 am y de 1:30 hasta las 3:00 pm, puede pasar por la instituci&oacute;n con el fin de retirar los recaudos consignados en el departamento de trabajo social."."<br> <br>";
                        $email_message .= "Agradeci&eacute;ndole su preferencia, me despido de usted; "."<br>";
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

                        $contador = $contador + 1;

                        if (!$mail->send()) {
                              $message_die = "Ha ocurrido un error inesperado, Mailer Error: " . $mail->ErrorInfo;
                              die($message_die);
                        } else {
                              $message = "¡El certificado electronico se ha enviado con éxito!";
                              echo $message;
                        }
                  }

                  log_message('debug', 'CORREOS ENVIADOS:  '.$contador);
          }
  }