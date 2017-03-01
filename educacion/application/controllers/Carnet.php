<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Carnet extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->database();

      $this->load->model('Estudiante');
      $this->load->model('Persona');
      $this->load->model('Vivecon');
      $this->load->model('Telefono');
      $this->load->model('Grado');
      $this->load->model('Seccion');
      $this->load->model('Escuela');
      $this->load->model('Representante');

      /*cache control*/
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
    }

    public function index()
    {


        $student = $_GET["std"];

        // Se carga la libreria fpdf
        $this->load->library('no_header/pdf');

        $estudiante = Estudiante::where('id_estudiante', '=', $student)->get();

        //Ids de la tabla estudiante
        $id_persona = $estudiante[0]->id_persona;
        $cedula_identidad = $estudiante[0]->cedula_identidad;
        $cedula_escolar = $estudiante[0]->cedula_escolar;
        $id_vive_con = $estudiante[0]->id_vive_con;
        $id_telefono = $estudiante[0]->id_telefono;
        $id_grado = $estudiante[0]->id_grado;
        $id_seccion = $estudiante[0]->id_seccion;
        $id_escuela = $estudiante[0]->id_escuela;
        $id_representante = $estudiante[0]->id_representante;
        $cedula_estudiante = $cedula_escolar;

        //Validar si el estudiante posee cedula de identidad
        if($cedula_suministrada === $cedula_escolar) {
            if(empty($cedula_identidad)) {
                $cedula_estudiante = $cedula_escolar;
            }
        }

        $persona = Persona::find($id_persona);

        $primer_nombre = $persona['primer_nombre'];
        $segundo_nombre = $persona['segundo_nombre'];
        $primer_apellido = $persona['primer_apellido'];
        $segundo_apellido = $persona['segundo_apellido'];

        $phpdate = strtotime( $persona['fecha_nacimiento'] );
        $fecha_nacimiento = date( 'm-d-Y', $phpdate );

        $telefono = Telefono::find($id_telefono);
        $numero_telefono = $telefono['telefono'];

        $grado = Grado::find($id_grado);
        $grado_estudiante = $grado['abreviacion_grado'];
        $grado_descripcion = $grado['descripcion'];

        $seccion = Seccion::find($id_seccion);
        $seccion_estudiante = $seccion['abreviacion_seccion'];

        $escuela = Escuela::find($id_escuela);
        $id_director = $escuela['id_persona_director'];
        $director_encargado = $escuela['director_encargado'];

        $director = Persona::where( 'id_persona' , '=' , $id_director)->get()->first();
        $primer_nombre_director = $director['primer_nombre'];
        $segundo_nombre_director = $director['segundo_nombre'];
        $primer_apellido_director = $director['primer_apellido'];
        $segundo_apellido_director = $director['segundo_apellido'];


        $representante = Representante::find($id_representante);
        $id_persona_representante = $representante['id_persona'];

        $persona_representante = Persona::find($id_persona_representante);
        $nombre_persona_representante = $persona_representante['primer_nombre'];
        $apellido_persona_representante = $persona_representante['primer_apellido'];


        //Formateo de fecha
        $ano_actual = date('Y');
        $ano_proximo = strtotime ( '+1 year' , strtotime ($ano_actual)) ;
        $ano_proximo = date ( 'Y' , $ano_proximo );
        $ano_escolar = $escuela->periodo_escolar_actual;

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
        $this->pdf->SetTitle("Carnet");

        $this->pdf->RoundedRect(10, 10, 60, 100, 2, '1234', '');

        $logo_chacao = "uploads/logo.png";
        $logo_escuela = "uploads/scude_andres_bello.png";
        $foto_estudiante = "uploads/student_image/".$id_persona.".jpg";

      
        $codigo_dea = "CODIGO: DEA S3648D1507";

        $this->pdf->SetY(12);
        $this->pdf->SetX(-340);

        $grado_seccion = $grado_descripcion.' y Sección';
        $grado_seccion_estudiante = $grado_estudiante.' '.$grado_descripcion.' '.$seccion_estudiante;
        $firma_director = ($director_encargado == '1') ?  'Director (a) (E)' : 'Director (a)';

        $this->pdf->SetFont('Arial', 'B', 6);
        //$this->pdf->Cell(-130);


        $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','REPÚBLICA BOLIVARIANA DE VENEZUELA'),0,50,'C');
        $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','ALCALDÍA DEL MUNICIPIO CHACAO'),0,50,'C');
        $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252','UNIDAD EDUCATIVA MUNICIPAL ANDRES BELLO'),0,50,'C');
        $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252', $codigo_dea),0,50,'C');

        $this->pdf->Ln(3);
        $this->pdf->Cell(80, 80, $this->pdf->Image($logo_escuela, 15, $this->pdf->GetY(), 25), 0, 0, 'L', false );
        $this->pdf->Cell(80, 80, $this->pdf->Image($foto_estudiante, 40, $this->pdf->GetY(), 22), 0, 0, 'L', false );

        $this->pdf->SetFont('Arial', 'B', 7);
        $this->pdf->Ln(3);
        $this->pdf->SetY(57);
        $this->pdf->SetX(42);
        $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252',$grado_seccion),0,50,'L');
        $this->pdf->Cell(0,3,iconv('UTF-8','windows-1252',$grado_seccion_estudiante),0,50,'L');

        $this->pdf->SetFont('Arial', 'B', 8);
        $this->pdf->Ln(3);
        $this->pdf->SetX(-340);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Nombres'),0,50,'C');
        $this->pdf->SetFont('Arial', '', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$primer_nombre.' '.$segundo_nombre),0,50,'C');
        $this->pdf->SetFont('Arial', 'B', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Apellidos'),0,50,'C');
        $this->pdf->SetFont('Arial', '', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$primer_apellido.' '.$segundo_apellido),0,50,'C');
        $this->pdf->SetFont('Arial', 'B', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Fecha de Nacimiento'),0,50,'C');
        $this->pdf->SetFont('Arial', '', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$fecha_nacimiento),0,50,'C');
        $this->pdf->SetFont('Arial', 'B', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cédula de Identidad'),0,50,'C');
        $this->pdf->SetFont('Arial', '', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$cedula_estudiante),0,50,'C');
        $this->pdf->SetFont('Arial', 'B', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Representante'),0,50,'C');
        $this->pdf->SetFont('Arial', '', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$nombre_persona_representante.' '.$apellido_persona_representante),0,50,'C');
        $this->pdf->SetFont('Arial', 'B', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Válido para el año escolar '.$ano_escolar),0,50,'C');

        $this->pdf->RoundedRect(70, 10, 60, 100, 2, '1234', '');
        $this->pdf->SetY(12);
        $this->pdf->Ln(3);
        $this->pdf->Cell(80, 80, $this->pdf->Image($logo_chacao, 78, $this->pdf->GetY(), 45), 20, 0, 'C', false );
        $this->pdf->Ln(3);
        $this->pdf->SetY(35);
        $this->pdf->SetX(-220);
        $this->pdf->SetFont('Arial', 'B', 8);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Este carnet es personal e intrasferible'),0,50,'C');
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',' y acredita al portador como estudiante'),0,50,'C');
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',' y miembro de esta institución.'),0,50,'C');
        $this->pdf->SetY(53);
        $this->pdf->SetX(-220);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','En caso de emergencia puede contactar'),0,50,'C');
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',' a través del N° de Telf: 0212-266.48.22'),0,50,'C');
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',' uemabello@gmail.com'),0,50,'C');
        $this->pdf->SetY(90);
        $this->pdf->SetX(0);
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252', $primer_nombre_director.' '.$segundo_nombre_director.' '.$primer_apellido_director.' '.$segundo_apellido_director),0,50,'C');
        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252', $firma_director),0,50,'C');

        $this->pdf->Code128(73,100,$cedula_estudiante,55,8);

        $fileatt_name = "Carnet.pdf";
        if($enviarConstanciaCorreo){
          $data = $this->pdf->Output($fileatt_name, 'S');
        }else{
          $this->pdf->Output($fileatt_name, 'I');
        }
      }


  }