<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class MatriculaInicialMinisterio extends CI_Controller {

    public function __construct() {
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
        $this->load->model('Inscripcion');

      /*cache control*/
      $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
      $this->output->set_header('Pragma: no-cache');
    }

    public function index(){
    }

    public function mostrar_matricula_inicial($param1='')
    {

            // Se carga la libreria fpdf
            $this->load->library('header_ministerio/pdf');

            //Datos de la escuela
            $id_school = $this->config->item('id_school');
            $cod_dea = $this->config->item('dea');
            $full_name = $this->config->item('full_name');
            $uem_name = $this->config->item('uem_name');
            $running_year = $this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;

            //Seccion a mostrar
            $id_seccion = $param1;
            $censo = Inscripcion::where('id_escuela', '=', $id_school)->where('SeccionACursar','=', $id_seccion)->get();

            $escuela = Escuela::find($this->config->item('id_school'));
            $nivel_educativo = "EDUCACIÓN PRIMARIA";
            $grado = 02;
            $seccion = "A";
            $total_alumnos_seccion = count($censo);

            //Creamos el pdf
            $this->pdf = new Pdf('P','mm','Legal');
            // Agregamos una página
            $this->pdf->AddPage();

            $this->pdf->SetTitle(iconv('UTF-8','windows-1252','Mátricula Inicial Educación Primaria'));
            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(15);

            $this->pdf->Ln(5);
            $this->pdf->SetFont('Arial', '', 8);

            $this->pdf->SetX(125);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','I. Año Escolar: '.$running_year),0,50,'L');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','   Mes y Año de la Mátricula: Septiembre-2016'),0,50,'L');

            $this->pdf->SetX(10);

            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','II. Datos del Plantel: '),0,50,'J');

            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Cód. Plantel: '.$cod_dea. '             Nombre: '.$full_name. '      Dtto.esc: 07'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Dirección: AV. MOHEDANO CRUCE CON CALLE LA PAZ                Telefono: 0212 - 2664822'),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Municipio: CHACAO                Ent. Federal: MIRANDA                Zona Educativa: MIRANDA'),0,50,'J');

            $this->pdf->Ln(5);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','III. Identificación del Curso:               Plan de Estudio: '.$nivel_educativo),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Código: 21000               Mención: '.$nivel_educativo),0,50,'J');
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Grado o Año: '.$grado.'          Sección: '.$seccion.'          No de Estudiantes de la Seccion: '.$total_alumnos_seccion.'          Número de Estudiantes en esta Página: '.$total_alumnos_seccion),0,50,'J');
            $this->pdf->Ln(5);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','IV. Datos de Identificación del Estudiante:'),0,50,'J');
            $this->pdf->Cell(0,12,iconv('UTF-8','windows-1252','Nº'),0,50,'J');
            $this->pdf->SetX(20);
            $this->pdf->Cell(0,-16,iconv('UTF-8','windows-1252','Cédula de'),0,50,'J');
            $this->pdf->Cell(0,24,iconv('UTF-8','windows-1252','Identidad'),0,50,'J');
            $this->pdf->SetX(65);
            $this->pdf->Cell(0,-28,iconv('UTF-8','windows-1252','Apellidos'),0,50,'J');
            $this->pdf->SetX(115);
            $this->pdf->Cell(0,28,iconv('UTF-8','windows-1252','Nombres'),0,50,'J');
            $this->pdf->SetX(155);
            $this->pdf->Cell(0,-32,iconv('UTF-8','windows-1252','Se'),0,50,'J');
            $this->pdf->Cell(0,38,iconv('UTF-8','windows-1252','xo'),0,50,'J');
            $this->pdf->SetX(162);
            $this->pdf->Cell(0,-44,iconv('UTF-8','windows-1252','Fecha de Nac.'),0,50,'J');
            $this->pdf->SetX(161);
            $this->pdf->Cell(0,53,iconv('UTF-8','windows-1252','Día   Mes   Año'),0,50,'J');
            $this->pdf->SetX(187);
            $this->pdf->Cell(0,-62,iconv('UTF-8','windows-1252','Escolaridad'),0,50,'J');
            $this->pdf->SetX(185);
            $this->pdf->Cell(0,72,iconv('UTF-8','windows-1252','RG  RP  MP  DI'),0,50,'J');

            $yLocation = 98;
            for ( $i = 1 ; $i <= 30 ; $i ++) {
                        $this->pdf->SetY($yLocation);
                        $this->pdf->SetX(10);
                        $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$i),0,50,'J');

                        if($i <= count($censo)){
                            $sexo_alumno = ($censo[$i - 1]->SexoDelAlumno = 'MASCULINO' ? 'M' : 'F');
                            $timestamp = strtotime($censo[$i - 1]->FechaDeNacimientoDelAlumno);

                            $dia_nacimiento = date("d", $timestamp);
                            $mes_nacimiento = date("m", $timestamp);
                            $año_nacimiento = date("Y", $timestamp);
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(16);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->CedulaDeIdentidadDelAlumnoOCedulaEscolar),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(40);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerApellidoDelAlumno.' '.$censo[$i - 1]->SegundoApellidoDelAlumno),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(102);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$censo[$i - 1]->PrimerNombreDelAlumno.' '.$censo[$i - 1]->SegundoNombreDelAlumno),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(155);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$sexo_alumno ),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(162);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$dia_nacimiento),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(169);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$mes_nacimiento),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(176);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252',$año_nacimiento),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(186);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','X'),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(193);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','*'),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(198);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','*'),0,50,'J');
                            $this->pdf->SetY($yLocation);
                            $this->pdf->SetX(203);
                            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','*'),0,50,'J');
                        }



                        $yLocation = $yLocation + 5;
                        if ($i < 30){
                            $this->pdf->Line(10, $yLocation, 207, $yLocation); //Linea Horizontal
                        }
            }
            $this->pdf->Ln(2);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','V. Observaciones:'),0,50,'J');

            $this->pdf->Ln(40);
            $this->pdf->SetX(10);
            $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','VI. Fecha de Remisión:'),0,50,'J');

            $this->pdf->SetX(113);
            $this->pdf->Cell(0,-4,iconv('UTF-8','windows-1252','VII. Fecha de Recepción:'),0,50,'J');

            $this->pdf->SetY(300);
            $this->pdf->SetX(23);
            $this->pdf->SetFont('Arial', 'B', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Director (a)'),0,50,'J');
            $this->pdf->SetY(305);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
            $this->pdf->SetY(318);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
            $this->pdf->SetY(330);
            $this->pdf->SetX(11);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
            $this->pdf->SetY(315);
            $this->pdf->SetX(70);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DEL'),0,50,'J');
            $this->pdf->SetY(320);
            $this->pdf->SetX(71);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','PLANTEL'),0,50,'J');


            $this->pdf->SetY(300);
            $this->pdf->SetX(120);
            $this->pdf->SetFont('Arial', 'B', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Funcionario Receptor'),0,50,'J');
            $this->pdf->SetY(305);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Apellidos y Nombres'),0,50,'J');
            $this->pdf->SetY(318);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Número de C.I.:'),0,50,'J');
            $this->pdf->SetY(330);
            $this->pdf->SetX(114);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','Firma:'),0,50,'J');
            $this->pdf->SetY(315);
            $this->pdf->SetX(172);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','SELLO DE LA ZONA'),0,50,'J');
            $this->pdf->SetY(320);
            $this->pdf->SetX(177);
            $this->pdf->SetFont('Arial', '', 8);
            $this->pdf->Cell(0,0,iconv('UTF-8','windows-1252','EDUCATIVA'),0,50,'J');

            //TABLA DE LOS DATOS
            $this->pdf->SetX(10);
            $this->pdf->RoundedRect(10, 87, 197, ($yLocation - 88), 2, '', '');
            $this->pdf->Line(15, 87, 15, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(40, 87, 40, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(100, 87, 100, ($yLocation - 1)); //Linea Vertical

            $this->pdf->Line(155, 87, 155, ($yLocation - 1)); //Linea Vertical

            $this->pdf->Line(161, 87, 161, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(168, 92, 168, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(175, 92, 175, ($yLocation - 1)); //Linea Vertical

            $this->pdf->Line(185, 87, 185, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(161, 92, 207, 92); //Linea Horizontal
            $this->pdf->Line(191, 92, 191, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(197, 92, 197, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(202, 92, 202, ($yLocation - 1)); //Linea Vertical
            $this->pdf->Line(10, 97, 207, 97); //Linea Horizontal

            //TABLA DEL FOOTER 1
            $this->pdf->RoundedRect(10, 290, 94, 50, 2, '', '');
            $this->pdf->Line(10, 298, 104, 298); //Linea Horizontal
            $this->pdf->Line(10, 303, 55, 303); //Linea Horizontal
            $this->pdf->Line(10, 308, 55, 308); //Linea Horizontal
            $this->pdf->Line(10, 315, 55, 315); //Linea Horizontal
            $this->pdf->Line(10, 320, 55, 320); //Linea Horizontal
            $this->pdf->Line(10, 327, 55, 327); //Linea Horizontal
            $this->pdf->Line(10, 332, 55, 332); //Linea Horizontal
            $this->pdf->Line(55, 298, 55, 340); //Linea Vertical


            //TABLA DEL FOOTER 2
            $this->pdf->RoundedRect(113, 290, 94, 50, 2, '', '');
            $this->pdf->Line(113, 298, 207, 298); //Linea Horizontal
            $this->pdf->Line(113, 303, 160, 303); //Linea Horizontal
            $this->pdf->Line(113, 308, 160, 308); //Linea Horizontal
            $this->pdf->Line(113, 315, 160, 315); //Linea Horizontal
            $this->pdf->Line(113, 320, 160, 320); //Linea Horizontal
            $this->pdf->Line(113, 327, 160, 327); //Linea Horizontal
            $this->pdf->Line(113, 332, 160, 332); //Linea Horizontal
            $this->pdf->Line(160, 298, 160, 340); //Linea Vertical
            // $this->pdf->SetX(10);
            // $this->pdf->Cell(0,4,iconv('UTF-8','windows-1252','Municipio:'),0,50,'J');
            // $this->pdf->SetX(50);
            // $this->pdf->SetFont('Arial', 'BU', 8);
            // $this->pdf->Cell(0,-4,iconv('UTF-8','windows-1252','CHACAO'),0,50,'J');




            $this->pdf->Output();

    }
  }