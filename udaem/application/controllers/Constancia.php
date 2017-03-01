<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Constancia extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->database();

      $this->load->model('Estudiante');
      $this->load->model('Representante');
      $this->load->model('Persona');
      $this->load->model('Escuela');
      $this->load->model('Grado');
      $this->load->model('Seccion');
      $this->load->model('Direccion');
      $this->load->model('Estado');
      $this->load->model('Municipio');
      $this->load->model('Parroquia');

      /*cache control*/
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
    }

    public function index(){

    }

    public function constanciaEstudio()
    {
      $student = $_GET["std"];

      // Se carga la libreria fpdf
      $this->load->library('pdf');

      $estudiante = Estudiante::where('id_estudiante', '=', $student)->get();

      //Obtener los datos del director de la escuela
      $id_escuela = $estudiante[0]->id_escuela;
      $escuela = Escuela::find($id_escuela);

      //Obtener direccion escuela
      $id_direccion_escuela = $escuela['id_direccion_escuela'];
      $direccion = Direccion::find($id_direccion_escuela);

      //Formateo de fecha
      $ano_actual = date('Y');
      $ano_proximo = strtotime ('+1 year' , strtotime ($ano_actual)) ;
      $ano_proximo = date ('Y' , $ano_proximo);
      $ano_escolar = $escuela->periodo_escolar_actual;

      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

      $page_data['page_name']  = 'constancia_estudio';
      $page_data['page_title'] = "Constancia de Estudio";

      $paragraph_one = 'Quien suscribe, '.$escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '
                      .$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido.', '.'C.I: '
                      .$escuela->director->cedula_identidad.' Director (a), hace constar que el alumno (a) '
                      .$estudiante[0]->persona->primer_nombre.' '.$estudiante[0]->persona->segundo_nombre.', '
                      .$estudiante[0]->persona->primer_apellido.' '.$estudiante[0]->persona->segundo_apellido
                      .' titular de la Cédula de Identidad y/o Cédula Escolar N°: '.$cedula_estudiante
                      .' cursa estudios en esta Unidad Educativa, en el '.$estudiante[0]->grado->abreviacion_grado
                      .' grado/año, '.$estudiante[0]->seccion->nombre_seccion.',  correspondiente al Año Escolar '.$ano_escolar.'.';

      $paragraph_two = 'Constancia que se expide a petición de la parte interesada en CHACAO, MIRANDA, a los '.date('d')
                      .' días del mes de '.$meses[date('n')-1].' del año '.date('Y');

      $datos_director = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
      $firma_director = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

      // Creacion del PDF
      /*
       * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
       * heredó todos las variables y métodos de fpdf
       */
      $this->pdf = new Pdf('P','mm','Letter');
      // Agregamos una página
      $this->pdf->AddPage();

      /* Se define el titulo, márgenes izquierdo, derecho y
       * el color de relleno predeterminado
       */
      $this->pdf->SetTitle("Constandia de Estudio");
      $this->pdf->SetLeftMargin(15);
      $this->pdf->SetRightMargin(15);

      $this->pdf->Ln(25);

      // Se define el formato de fuente: Arial, negritas, tamaño 9
      $this->pdf->SetFont('Arial', 'B', 10);

      $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','CONSTANCIA DE ESTUDIO'),0,50,'C');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_one), 0, 50,'');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_two), 0, 50,'');

      //Eliminar al tener todo el contenido
      $this->pdf->Ln(70);

      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252','Atentamente,'),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$datos_director),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$firma_director),0,50,'C');

      $fileatt_name = "ConstanciaEstudio.pdf";
      if($enviarConstanciaCorreo){
        $data = $this->pdf->Output($fileatt_name, 'S');
      }else{
        $this->pdf->Output($fileatt_name, 'I');
      }
    }

    public function constanciaAsistencia()
    {
      // Se carga la libreria fpdf
      $this->load->library('pdf');
      $student = $_GET["std"];
      $fecha_asistencia = $_GET["tone"];
      $asistencia_desde = $_GET["ttwo"];
      $asistencia_hasta = $_GET["tfor"];

      $estudiante = Estudiante::where('id_estudiante', '=', $student)->get();

      $idrepresentante = $estudiante[0]->id_representante;
      $representante = Representante::where('id_representante', '=', $idrepresentante)->get();

      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

      //Obtener los datos del director de la escuela
      $id_escuela = $estudiante[0]->id_escuela;
      $escuela = Escuela::find($id_escuela);

      //Obtener direccion escuela
      $id_direccion_escuela = $escuela['id_direccion_escuela'];
      $direccion = Direccion::find($id_direccion_escuela);

      //Formateo de fecha
      $ano_actual = date('Y');
      $ano_proximo = strtotime ('+1 year' , strtotime ($ano_actual)) ;
      $ano_proximo = date ('Y' , $ano_proximo);
      $ano_escolar = $escuela->periodo_escolar_actual;

      $page_data['page_name']  = 'constancia_asistencia';
      $page_data['page_title'] = "Constancia de Asistencia";

      $paragraph_one = 'Quien suscribe, '.$escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '
                      .$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido.', '.'C.I: '
                      .$escuela->director->cedula_identidad.' Director (a), hace  constar que el ciudadano (a) '
                      .$representante[0]->persona->primer_nombre.' '.$representante[0]->persona->segundo_nombre.', '
                      .$representante[0]->persona->primer_apellido.' '.$representante[0]->persona->segundo_apellido
                      .' titular de la Cédula de Identidad N°: '.$representante[0]->persona->cedula_identidad
                      .' Representante del  alumno (a) '.$estudiante[0]->persona->primer_nombre.' '.$estudiante[0]->persona->segundo_nombre.', '
                      .$estudiante[0]->persona->primer_apellido.' '.$estudiante[0]->persona->segundo_apellido
                      .' asistió a la  institución, en fecha '.$fecha_asistencia
                      .' en el horario comprendido entre las '.$asistencia_desde.' hasta las '.$asistencia_hasta
                      .' con motivo de atender asuntos relacionados con su representado.';

      $paragraph_two = 'Constancia que se expide a petición de la parte interesada en CHACAO, MIRANDA, a los '.date('d')
                      .' días del mes de '.$meses[date('n')-1].' del año '.date('Y');

      $datos_director = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
      $firma_director = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

      // Creacion del PDF
      /*
       * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
       * heredó todos las variables y métodos de fpdf
       */
      $this->pdf = new Pdf('P','mm','Letter');
      // Agregamos una página
      $this->pdf->AddPage();

      /* Se define el titulo, márgenes izquierdo, derecho y
       * el color de relleno predeterminado
       */
      $this->pdf->SetTitle("Constandia de Asistencia");
      $this->pdf->SetLeftMargin(15);
      $this->pdf->SetRightMargin(15);

      $this->pdf->Ln(25);

      // Se define el formato de fuente: Arial, negritas, tamaño 9
      $this->pdf->SetFont('Arial', 'B', 10);

      $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','CONSTANCIA DE ASISTENCIA'),0,50,'C');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_one), 0, 50,'');


      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_two), 0, 50,'');

      //Eliminar al tener todo el contenido
      $this->pdf->Ln(70);

      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252','Atentamente,'),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$datos_director),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$firma_director),0,50,'C');

      $fileatt_name = "ConstanciaAsistencia.pdf";
      if($enviarConstanciaCorreo){
        $data = $this->pdf->Output($fileatt_name, 'S');
      }else{
        $this->pdf->Output($fileatt_name, 'I');
      }
    }

    public function constanciaTramitacionDocumento()
    {
      // Se carga la libreria fpdf
      $this->load->library('pdf');

      $student = $_GET["std"];
      $data_student = $_GET["tone"];

      $estudiante = Estudiante::where('id_estudiante', '=', $student)->get();

      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

      //Obtener los datos del director de la escuela
      $id_escuela = $estudiante[0]->id_escuela;
      $escuela = Escuela::find($id_escuela);

      //Obtener direccion escuela
      $id_direccion_escuela = $escuela['id_direccion_escuela'];
      $direccion = Direccion::find($id_direccion_escuela);

      //Formateo de fecha
      $ano_actual = date('Y');
      $ano_proximo = strtotime ('+1 year' , strtotime ($ano_actual)) ;
      $ano_proximo = date ('Y' , $ano_proximo);
      $ano_escolar = $escuela->periodo_escolar_actual;

      $page_data['page_name']  = 'constancia_tramitacion_documento';
      $page_data['page_title'] = "Constancia de Tramitacion de Documentos";

      $paragraph_one = 'Quien suscribe, '.$escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '
                      .$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido.', '.'C.I: '
                      .$escuela->director->cedula_identidad.' Director (a), hace constar que el alumno (a) '
                      .$estudiante[0]->persona->primer_nombre.' '.$estudiante[0]->persona->segundo_nombre.', '
                      .$estudiante[0]->persona->primer_apellido.' '.$estudiante[0]->persona->segundo_apellido
                      .' titular de la Cédula de Identidad y/o Cédula Escolar N°: '.$cedula_estudiante
                      .' , está tramitando ante esta Institución los documentos correspondiente a:  '.$data_student.'.';

      $paragraph_two = 'Constancia que se expide a petición de la parte interesada en CHACAO, MIRANDA, a los '.date('d')
                      .' días del mes de '.$meses[date('n')-1].' del año '.date('Y');

      $datos_director = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
      $firma_director = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

      // Creacion del PDF
      /*
       * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
       * heredó todos las variables y métodos de fpdf
       */
      $this->pdf = new Pdf('P','mm','Letter');
      // Agregamos una página
      $this->pdf->AddPage();

      /* Se define el titulo, márgenes izquierdo, derecho y
       * el color de relleno predeterminado
       */
      $this->pdf->SetTitle("Constandia de Tramitacion de Documentos");
      $this->pdf->SetLeftMargin(15);
      $this->pdf->SetRightMargin(15);

      $this->pdf->Ln(25);

      // Se define el formato de fuente: Arial, negritas, tamaño 9
      $this->pdf->SetFont('Arial', 'B', 10);

      $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','CONSTANCIA DE TRAMITACIÓN DE DOCUMENTOS'),0,50,'C');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_one), 0, 50,'');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_two), 0, 50,'');

      //Eliminar al tener todo el contenido
      $this->pdf->Ln(70);

      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252','Atentamente,'),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$datos_director),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$firma_director),0,50,'C');

      $fileatt_name = "ConstanciaTramitacionDocumentos.pdf";
      if($enviarConstanciaCorreo){
        $data = $this->pdf->Output($fileatt_name, 'S');
      }else{
        $this->pdf->Output($fileatt_name, 'I');
      }
    }

    public function constanciaConvovatoriaRepresentante($data_student)
    {
      // Se carga la libreria fpdf
      $this->load->library('pdf');

      $student = $_GET["std"];
      $fecha_asistencia = $_GET["tone"];
      $asistencia_desde = $_GET["ttwo"];
      $asistencia_hasta = $_GET["tfor"];

      $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
      $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

      $datastudent = explode("_", $data_student);

      $estudiante = Estudiante::where('id_estudiante', '=', $student)->get();

      $idrepresentante = $estudiante[0]->id_representante;
      $representante = Representante::where('id_representante', '=', $idrepresentante)->get();

      //Obtener los datos del director de la escuela
      $id_escuela = $estudiante[0]->id_escuela;
      $escuela = Escuela::find($id_escuela);

      //Obtener direccion escuela
      $id_direccion_escuela = $escuela['id_direccion_escuela'];
      $direccion = Direccion::find($id_direccion_escuela);

      //Formateo de fecha
      $ano_actual = date('Y');
      $ano_proximo = strtotime ('+1 year' , strtotime ($ano_actual)) ;
      $ano_proximo = date ('Y' , $ano_proximo);
      $ano_escolar = $escuela->periodo_escolar_actual;

      $page_data['page_name']  = 'convocatoria_representante';
      $page_data['page_title'] = "Convocatoria al Representante";

      $paragraph_one = 'Ciudadano (a) '.$representante[0]->persona->primer_nombre.' '.$representante[0]->persona->segundo_nombre
                                      .', '.$representante[0]->persona->primer_apellido.' '.$representante[0]->persona->segundo_apellido
                                      .' representante legal del  Alumno (a) Ciudadano (a) '.$estudiante[0]->persona->primer_nombre.' '
                                      .$estudiante[0]->persona->segundo_nombre.', '.$estudiante[0]->persona->primer_apellido.' '
                                      .$estudiante[0]->persona->segundo_apellido.' cursante del '.$estudiante[0]->grado->abreviacion_grado
                                      .' grado/año, '. $estudiante[0]->seccion->nombre_seccion.' , se requiere su presencia en  el plantel el día '
                                      .$fecha_asistencia.' a las '.$asistencia_desde.' , a fin de  tratar  asunto relacionado con su representado. Usted será atendido por: '
                                      .$asistencia_hasta.' Agradeciendo su puntual asistencia.';

      $paragraph_two = 'Constancia que se expide a petición de la parte interesada en CHACAO, MIRANDA, a los '.date('d')
                      .' días del mes de '.$meses[date('n')-1].' del año '.date('Y');

      $datos_director = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
      $firma_director = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

      // Creacion del PDF
      /*
       * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
       * heredó todos las variables y métodos de fpdf
       */
      $this->pdf = new Pdf('P','mm','Letter');
      // Agregamos una página
      $this->pdf->AddPage();

      /* Se define el titulo, márgenes izquierdo, derecho y
       * el color de relleno predeterminado
       */
      $this->pdf->SetTitle("Convocatoria al Representante");
      $this->pdf->SetLeftMargin(15);
      $this->pdf->SetRightMargin(15);

      $this->pdf->Ln(25);

      // Se define el formato de fuente: Arial, negritas, tamaño 9
      $this->pdf->SetFont('Arial', 'B', 10);

      $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','CONVOCATORIA AL REPRESENTANTE'),0,50,'C');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_one), 0, 50,'');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_two), 0, 50,'');

      //Eliminar al tener todo el contenido
      $this->pdf->Ln(70);

      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252','Atentamente,'),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$datos_director),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$firma_director),0,50,'C');

      $fileatt_name = "ConstanciaEstudio.pdf";
      if($enviarConstanciaCorreo){
        $data = $this->pdf->Output($fileatt_name, 'S');
      }else{
        $this->pdf->Output($fileatt_name, 'I');
      }
    }

    public function constanciaCarnet($data_student)
    {
      // Se carga la libreria fpdf
      $this->load->library('pdf');

      $datastudent = explode("_", $data_student);

      $estudiante = Estudiante::where('id_estudiante', '=', 11)->get();

      $idrepresentante = $estudiante[0]->id_representante;
      $representante = Representante::where('id_representante', '=', $idrepresentante)->get();

      //Obtener los datos del director de la escuela
      $id_escuela = $estudiante[0]->id_escuela;
      $escuela = Escuela::find($id_escuela);

      //Obtener direccion escuela
      $id_direccion_escuela = $escuela['id_direccion_escuela'];
      $direccion = Direccion::find($id_direccion_escuela);

      //Formateo de fecha
      $ano_actual = date('Y');
      $ano_proximo = strtotime ('+1 year' , strtotime ($ano_actual)) ;
      $ano_proximo = date ('Y' , $ano_proximo);
      $ano_escolar = $escuela->periodo_escolar_actual;

      $page_data['page_name']  = 'convocatoria_representante';
      $page_data['page_title'] = "Convocatoria al Representante";

      $paragraph_one = 'Ciudadano (a) '.$representante[0]->persona->primer_nombre.' '.$representante[0]->persona->segundo_nombre
                                      .', '.$representante[0]->persona->primer_apellido.' '.$representante[0]->persona->segundo_apellido
                                      .' representante legal del  Alumno (a) Ciudadano (a) '.$estudiante[0]->persona->primer_nombre.' '
                                      .$estudiante[0]->persona->segundo_nombre.', '.$estudiante[0]->persona->primer_apellido.' '
                                      .$estudiante[0]->persona->segundo_apellido.' cursante del '.$estudiante[0]->grado->abreviacion_grado
                                      .' grado/año, '. $estudiante[0]->seccion->nombre_seccion.' , se requiere su presencia en  el plantel el día '
                                      .$datastudent[1].' a las '.$datastudent[2].' , a fin de  tratar  asunto relacionado con su representado. Usted será atendido por: '
                                      .$datastudent[3].' Agradeciendo su puntual asistencia.';

      $paragraph_two = 'Constancia que se expide a petición de la parte interesada en CHACAO, MIRANDA, a los '.date('d')
                      .' días del mes de '.$meses[date('n')-1].' del año '.date('Y');

      $datos_director = $escuela->director->primer_nombre.' '.$escuela->director->segundo_nombre.', '.$escuela->director->primer_apellido.' '.$escuela->director->segundo_apellido;
      $firma_director = ($escuela->director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

      // Creacion del PDF
      /*
       * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
       * heredó todos las variables y métodos de fpdf
       */
      $this->pdf = new Pdf('P','mm','Letter');
      // Agregamos una página
      $this->pdf->AddPage();

      /* Se define el titulo, márgenes izquierdo, derecho y
       * el color de relleno predeterminado
       */
      $this->pdf->SetTitle("Convocatoria al Representante");
      $this->pdf->SetLeftMargin(15);
      $this->pdf->SetRightMargin(15);

      $this->pdf->Ln(25);

      // Se define el formato de fuente: Arial, negritas, tamaño 9
      $this->pdf->SetFont('Arial', 'B', 10);

      $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','CONVOCATORIA AL REPRESENTANTE'),0,50,'C');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_one), 0, 50,'');

      $this->pdf->Ln(15);

      $this->pdf->MultiCell(0, 5, iconv('UTF-8','windows-1252',$paragraph_two), 0, 50,'');

      //Eliminar al tener todo el contenido
      $this->pdf->Ln(70);

      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252','Atentamente,'),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$datos_director),0,50,'C');
      $this->pdf->Cell(0,6,iconv('UTF-8','windows-1252',$firma_director),0,50,'C');

      $fileatt_name = "ConstanciaEstudio.pdf";
      if($enviarConstanciaCorreo){
        $data = $this->pdf->Output($fileatt_name, 'S');
      }else{
        $this->pdf->Output($fileatt_name, 'I');
      }
    }

    function enviarConstanciaCorreo(){
      $email_from = "webmaster@tekkoa.com"; // Who the email is from
      $email_subject = "Resumen de Censo"; // The Subject of the email
      $email_to = "gutierreznorwill@gmail.com"; // Who the email is to

      $semi_rand = md5(time());
      $data = chunk_split(base64_encode($data));

      $fileatt_type = "application/pdf"; // File Type
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

      // set header ........................
      $headers = "From: ".$email_from;
      $headers .= "\nMIME-Version: 1.0\n" .
      "Content-Type: multipart/mixed;\n" .
      " boundary=\"{$mime_boundary}\"";

      // set email message......................
      $email_message = "Thanks for visiting ";
      $email_message .= "Thanks for visiting.<br>";// Message that the email has in it
      $email_message .= "This is a multi-part message in MIME format.\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
      $email_message .= "\n\n";
      $email_message .= "--{$mime_boundary}\n" .
      "Content-Type: {$fileatt_type};\n" .
      " name=\"{$fileatt_name}\"\n" .
      "Content-Disposition: attachment;\n" .
      " filename=\"{$fileatt_name}\"\n" .
      "Content-Transfer-Encoding: base64\n\n" .
      $data .= "\n\n" .
      "--{$mime_boundary}--\n";

      $sent = @mail($email_to, $email_subject, $email_message, $headers);
      if($sent) {
        $message_succes = "El resumen ha sido enviado via correo electronico";
        echo $message_succes;
      } else {
        $message_die = "Ha ocurrido un error inesperado";
        echo $message_die;
        die(message_die);
      }
    }
  }