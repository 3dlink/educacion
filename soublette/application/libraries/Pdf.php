<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";

    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf extends FPDF {
      public function __construct() {
          parent::__construct();
      }

      //El encabezado del PDF
      public function Header(){
          $logo_chacao = "uploads/logo_chacao.png";
          $logo_escuela = "uploads/scude_andres_bello.png";
          $codigo_dea = "CODIGO: DEA S3648D1507";

          $this->SetFont('Arial','B',8);
          $this->Cell(30);
          $this->Cell(40, 40, $this->Image($logo_escuela, 10, $this->GetY(), 10.78), 0, 0, 'L', false );
          $this->Cell(40, 40, $this->Image($logo_chacao, 22, $this->GetY(), 10.78), 0, 0, 'L', false );
          $this->Cell(-85);
          $this->Cell(0,4,iconv('UTF-8','windows-1252','REPÚBLICA BOLIVARIANA DE VENEZUELA'),0,50,'L');
          $this->Cell(0,3,iconv('UTF-8','windows-1252','ALCALDÍA DEL MUNICIPIO CHACAO'),0,50,'L');
          $this->Cell(0,3,iconv('UTF-8','windows-1252','UNIDAD EDUCATIVA MUNICIPAL ANDRES BELLO'),0,50,'L');
          $this->Cell(0,3,iconv('UTF-8','windows-1252', $codigo_dea),0,50,'L');

          $this->Line(35, 23, 35, 9); //Linea Vertical

          $this->Ln(20);
          $this->SetFont('Arial','B',8);
      }

      //El pie del pdf
      public function Footer(){
        $this->SetY(-45);
        $this->SetFont('Arial','B',8);
        $this->Cell(0,4,iconv('UTF-8','windows-1252','AV. MOHEDANO CRUCE CON CALLE PÁEZ'),0,50,'L');
        $this->Cell(0,4,iconv('UTF-8','windows-1252','FRENTE A LA PLAZA BOLÍVAR - CHACAO '),0,50,'L');
        $this->SetFont('Arial','',8);
        $this->Cell(0,4,iconv('UTF-8','windows-1252','+58 212 2664822 / 2644696 / uemabello@gmail.com'),0,50,'L');
        $this->Line(90, 252, 90, 267); //Linea Vertical

        $this->SetY(-45);
        $this->Cell(80);
        $this->SetFont('Arial','B',8);
        $this->Cell(0,4,iconv('UTF-8','windows-1252','DIRECCIÓN DE EDUCACIÓN'),9,50,'L');
        $this->Cell(0,4,iconv('UTF-8','windows-1252','AV. SOROCAIMA CRUCE CON AV. VENEZUELA'),9,50,'L');
        $this->Cell(0,4,iconv('UTF-8','windows-1252','EDIFICIO ATRIUM, PISO 4 - EL ROSAL'),0,50,'L');
        $this->SetFont('Arial','',8);
        $this->Cell(0,4,iconv('UTF-8','windows-1252','+58 212 9057123 - contactoeducacionchacao@gmail.com'),0,50,'L');
      }

    }
?>