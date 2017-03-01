<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";

    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf extends FPDF {

      protected $T128;                                         // Tableau des codes 128
      protected $ABCset = "";                                  // jeu des caractères éligibles au C128
      protected $Aset = "";                                    // Set A du jeu des caractères éligibles
      protected $Bset = "";                                    // Set B du jeu des caractères éligibles
      protected $Cset = "";                                    // Set C du jeu des caractères éligibles
      protected $SetFrom;                                      // Convertisseur source des jeux vers le tableau
      protected $SetTo;                                        // Convertisseur destination des jeux vers le tableau
      protected $JStart = array("A"=>103, "B"=>104, "C"=>105); // Caractères de sélection de jeu au début du C128
      protected $JSwap = array("A"=>101, "B"=>100, "C"=>99);   // Caractères de changement de jeu

      function __construct($orientation='P', $unit='mm', $format='Letter') {

          parent::__construct($orientation,$unit,$format);

          $this->T128[] = array(2, 1, 2, 2, 2, 2);           //0 : [ ]               // composition des caractères
          $this->T128[] = array(2, 2, 2, 1, 2, 2);           //1 : [!]
          $this->T128[] = array(2, 2, 2, 2, 2, 1);           //2 : ["]
          $this->T128[] = array(1, 2, 1, 2, 2, 3);           //3 : [#]
          $this->T128[] = array(1, 2, 1, 3, 2, 2);           //4 : [$]
          $this->T128[] = array(1, 3, 1, 2, 2, 2);           //5 : [%]
          $this->T128[] = array(1, 2, 2, 2, 1, 3);           //6 : [&]
          $this->T128[] = array(1, 2, 2, 3, 1, 2);           //7 : [']
          $this->T128[] = array(1, 3, 2, 2, 1, 2);           //8 : [(]
          $this->T128[] = array(2, 2, 1, 2, 1, 3);           //9 : [)]
          $this->T128[] = array(2, 2, 1, 3, 1, 2);           //10 : [*]
          $this->T128[] = array(2, 3, 1, 2, 1, 2);           //11 : [+]
          $this->T128[] = array(1, 1, 2, 2, 3, 2);           //12 : [,]
          $this->T128[] = array(1, 2, 2, 1, 3, 2);           //13 : [-]
          $this->T128[] = array(1, 2, 2, 2, 3, 1);           //14 : [.]
          $this->T128[] = array(1, 1, 3, 2, 2, 2);           //15 : [/]
          $this->T128[] = array(1, 2, 3, 1, 2, 2);           //16 : [0]
          $this->T128[] = array(1, 2, 3, 2, 2, 1);           //17 : [1]
          $this->T128[] = array(2, 2, 3, 2, 1, 1);           //18 : [2]
          $this->T128[] = array(2, 2, 1, 1, 3, 2);           //19 : [3]
          $this->T128[] = array(2, 2, 1, 2, 3, 1);           //20 : [4]
          $this->T128[] = array(2, 1, 3, 2, 1, 2);           //21 : [5]
          $this->T128[] = array(2, 2, 3, 1, 1, 2);           //22 : [6]
          $this->T128[] = array(3, 1, 2, 1, 3, 1);           //23 : [7]
          $this->T128[] = array(3, 1, 1, 2, 2, 2);           //24 : [8]
          $this->T128[] = array(3, 2, 1, 1, 2, 2);           //25 : [9]
          $this->T128[] = array(3, 2, 1, 2, 2, 1);           //26 : [:]
          $this->T128[] = array(3, 1, 2, 2, 1, 2);           //27 : [;]
          $this->T128[] = array(3, 2, 2, 1, 1, 2);           //28 : [<]
          $this->T128[] = array(3, 2, 2, 2, 1, 1);           //29 : [=]
          $this->T128[] = array(2, 1, 2, 1, 2, 3);           //30 : [>]
          $this->T128[] = array(2, 1, 2, 3, 2, 1);           //31 : [?]
          $this->T128[] = array(2, 3, 2, 1, 2, 1);           //32 : [@]
          $this->T128[] = array(1, 1, 1, 3, 2, 3);           //33 : [A]
          $this->T128[] = array(1, 3, 1, 1, 2, 3);           //34 : [B]
          $this->T128[] = array(1, 3, 1, 3, 2, 1);           //35 : [C]
          $this->T128[] = array(1, 1, 2, 3, 1, 3);           //36 : [D]
          $this->T128[] = array(1, 3, 2, 1, 1, 3);           //37 : [E]
          $this->T128[] = array(1, 3, 2, 3, 1, 1);           //38 : [F]
          $this->T128[] = array(2, 1, 1, 3, 1, 3);           //39 : [G]
          $this->T128[] = array(2, 3, 1, 1, 1, 3);           //40 : [H]
          $this->T128[] = array(2, 3, 1, 3, 1, 1);           //41 : [I]
          $this->T128[] = array(1, 1, 2, 1, 3, 3);           //42 : [J]
          $this->T128[] = array(1, 1, 2, 3, 3, 1);           //43 : [K]
          $this->T128[] = array(1, 3, 2, 1, 3, 1);           //44 : [L]
          $this->T128[] = array(1, 1, 3, 1, 2, 3);           //45 : [M]
          $this->T128[] = array(1, 1, 3, 3, 2, 1);           //46 : [N]
          $this->T128[] = array(1, 3, 3, 1, 2, 1);           //47 : [O]
          $this->T128[] = array(3, 1, 3, 1, 2, 1);           //48 : [P]
          $this->T128[] = array(2, 1, 1, 3, 3, 1);           //49 : [Q]
          $this->T128[] = array(2, 3, 1, 1, 3, 1);           //50 : [R]
          $this->T128[] = array(2, 1, 3, 1, 1, 3);           //51 : [S]
          $this->T128[] = array(2, 1, 3, 3, 1, 1);           //52 : [T]
          $this->T128[] = array(2, 1, 3, 1, 3, 1);           //53 : [U]
          $this->T128[] = array(3, 1, 1, 1, 2, 3);           //54 : [V]
          $this->T128[] = array(3, 1, 1, 3, 2, 1);           //55 : [W]
          $this->T128[] = array(3, 3, 1, 1, 2, 1);           //56 : [X]
          $this->T128[] = array(3, 1, 2, 1, 1, 3);           //57 : [Y]
          $this->T128[] = array(3, 1, 2, 3, 1, 1);           //58 : [Z]
          $this->T128[] = array(3, 3, 2, 1, 1, 1);           //59 : [[]
          $this->T128[] = array(3, 1, 4, 1, 1, 1);           //60 : [\]
          $this->T128[] = array(2, 2, 1, 4, 1, 1);           //61 : []]
          $this->T128[] = array(4, 3, 1, 1, 1, 1);           //62 : [^]
          $this->T128[] = array(1, 1, 1, 2, 2, 4);           //63 : [_]
          $this->T128[] = array(1, 1, 1, 4, 2, 2);           //64 : [`]
          $this->T128[] = array(1, 2, 1, 1, 2, 4);           //65 : [a]
          $this->T128[] = array(1, 2, 1, 4, 2, 1);           //66 : [b]
          $this->T128[] = array(1, 4, 1, 1, 2, 2);           //67 : [c]
          $this->T128[] = array(1, 4, 1, 2, 2, 1);           //68 : [d]
          $this->T128[] = array(1, 1, 2, 2, 1, 4);           //69 : [e]
          $this->T128[] = array(1, 1, 2, 4, 1, 2);           //70 : [f]
          $this->T128[] = array(1, 2, 2, 1, 1, 4);           //71 : [g]
          $this->T128[] = array(1, 2, 2, 4, 1, 1);           //72 : [h]
          $this->T128[] = array(1, 4, 2, 1, 1, 2);           //73 : [i]
          $this->T128[] = array(1, 4, 2, 2, 1, 1);           //74 : [j]
          $this->T128[] = array(2, 4, 1, 2, 1, 1);           //75 : [k]
          $this->T128[] = array(2, 2, 1, 1, 1, 4);           //76 : [l]
          $this->T128[] = array(4, 1, 3, 1, 1, 1);           //77 : [m]
          $this->T128[] = array(2, 4, 1, 1, 1, 2);           //78 : [n]
          $this->T128[] = array(1, 3, 4, 1, 1, 1);           //79 : [o]
          $this->T128[] = array(1, 1, 1, 2, 4, 2);           //80 : [p]
          $this->T128[] = array(1, 2, 1, 1, 4, 2);           //81 : [q]
          $this->T128[] = array(1, 2, 1, 2, 4, 1);           //82 : [r]
          $this->T128[] = array(1, 1, 4, 2, 1, 2);           //83 : [s]
          $this->T128[] = array(1, 2, 4, 1, 1, 2);           //84 : [t]
          $this->T128[] = array(1, 2, 4, 2, 1, 1);           //85 : [u]
          $this->T128[] = array(4, 1, 1, 2, 1, 2);           //86 : [v]
          $this->T128[] = array(4, 2, 1, 1, 1, 2);           //87 : [w]
          $this->T128[] = array(4, 2, 1, 2, 1, 1);           //88 : [x]
          $this->T128[] = array(2, 1, 2, 1, 4, 1);           //89 : [y]
          $this->T128[] = array(2, 1, 4, 1, 2, 1);           //90 : [z]
          $this->T128[] = array(4, 1, 2, 1, 2, 1);           //91 : [{]
          $this->T128[] = array(1, 1, 1, 1, 4, 3);           //92 : [|]
          $this->T128[] = array(1, 1, 1, 3, 4, 1);           //93 : [}]
          $this->T128[] = array(1, 3, 1, 1, 4, 1);           //94 : [~]
          $this->T128[] = array(1, 1, 4, 1, 1, 3);           //95 : [DEL]
          $this->T128[] = array(1, 1, 4, 3, 1, 1);           //96 : [FNC3]
          $this->T128[] = array(4, 1, 1, 1, 1, 3);           //97 : [FNC2]
          $this->T128[] = array(4, 1, 1, 3, 1, 1);           //98 : [SHIFT]
          $this->T128[] = array(1, 1, 3, 1, 4, 1);           //99 : [Cswap]
          $this->T128[] = array(1, 1, 4, 1, 3, 1);           //100 : [Bswap]
          $this->T128[] = array(3, 1, 1, 1, 4, 1);           //101 : [Aswap]
          $this->T128[] = array(4, 1, 1, 1, 3, 1);           //102 : [FNC1]
          $this->T128[] = array(2, 1, 1, 4, 1, 2);           //103 : [Astart]
          $this->T128[] = array(2, 1, 1, 2, 1, 4);           //104 : [Bstart]
          $this->T128[] = array(2, 1, 1, 2, 3, 2);           //105 : [Cstart]
          $this->T128[] = array(2, 3, 3, 1, 1, 1);           //106 : [STOP]
          $this->T128[] = array(2, 1);                       //107 : [END BAR]

          for ($i = 32; $i <= 95; $i++) {                                            // jeux de caractères
              $this->ABCset .= chr($i);
          }
          $this->Aset = $this->ABCset;
          $this->Bset = $this->ABCset;

          for ($i = 0; $i <= 31; $i++) {
              $this->ABCset .= chr($i);
              $this->Aset .= chr($i);
          }
          for ($i = 96; $i <= 127; $i++) {
              $this->ABCset .= chr($i);
              $this->Bset .= chr($i);
          }
          for ($i = 200; $i <= 210; $i++) {                                           // controle 128
              $this->ABCset .= chr($i);
              $this->Aset .= chr($i);
              $this->Bset .= chr($i);
          }
          $this->Cset="0123456789".chr(206);

          for ($i=0; $i<96; $i++) {                                                   // convertisseurs des jeux A & B
              @$this->SetFrom["A"] .= chr($i);
              @$this->SetFrom["B"] .= chr($i + 32);
              @$this->SetTo["A"] .= chr(($i < 32) ? $i+64 : $i-32);
              @$this->SetTo["B"] .= chr($i);
          }
          for ($i=96; $i<107; $i++) {                                                 // contrôle des jeux A & B
              @$this->SetFrom["A"] .= chr($i + 104);
              @$this->SetFrom["B"] .= chr($i + 104);
              @$this->SetTo["A"] .= chr($i);
              @$this->SetTo["B"] .= chr($i);
          }
      }


      function Code128($x, $y, $code, $w, $h) {
          $Aguid = "";                                                                      // Création des guides de choix ABC
          $Bguid = "";
          $Cguid = "";
          for ($i=0; $i < strlen($code); $i++) {
              $needle = substr($code,$i,1);
              $Aguid .= ((strpos($this->Aset,$needle)===false) ? "N" : "O");
              $Bguid .= ((strpos($this->Bset,$needle)===false) ? "N" : "O");
              $Cguid .= ((strpos($this->Cset,$needle)===false) ? "N" : "O");
          }

          $SminiC = "OOOO";
          $IminiC = 4;

          $crypt = "";
          while ($code > "") {
                                                                                          // BOUCLE PRINCIPALE DE CODAGE
              $i = strpos($Cguid,$SminiC);                                                // forçage du jeu C, si possible
              if ($i!==false) {
                  $Aguid [$i] = "N";
                  $Bguid [$i] = "N";
              }

              if (substr($Cguid,0,$IminiC) == $SminiC) {                                  // jeu C
                  $crypt .= chr(($crypt > "") ? $this->JSwap["C"] : $this->JStart["C"]);  // début Cstart, sinon Cswap
                  $made = strpos($Cguid,"N");                                             // étendu du set C
                  if ($made === false) {
                      $made = strlen($Cguid);
                  }
                  if (fmod($made,2)==1) {
                      $made--;                                                            // seulement un nombre pair
                  }
                  for ($i=0; $i < $made; $i += 2) {
                      $crypt .= chr(strval(substr($code,$i,2)));                          // conversion 2 par 2
                  }
                  $jeu = "C";
              } else {
                  $madeA = strpos($Aguid,"N");                                            // étendu du set A
                  if ($madeA === false) {
                      $madeA = strlen($Aguid);
                  }
                  $madeB = strpos($Bguid,"N");                                            // étendu du set B
                  if ($madeB === false) {
                      $madeB = strlen($Bguid);
                  }
                  $made = (($madeA < $madeB) ? $madeB : $madeA );                         // étendu traitée
                  $jeu = (($madeA < $madeB) ? "B" : "A" );                                // Jeu en cours

                  $crypt .= chr(($crypt > "") ? $this->JSwap[$jeu] : $this->JStart[$jeu]); // début start, sinon swap

                  $crypt .= strtr(substr($code, 0,$made), $this->SetFrom[$jeu], $this->SetTo[$jeu]); // conversion selon jeu

              }
              $code = substr($code,$made);                                           // raccourcir légende et guides de la zone traitée
              $Aguid = substr($Aguid,$made);
              $Bguid = substr($Bguid,$made);
              $Cguid = substr($Cguid,$made);
          }                                                                          // FIN BOUCLE PRINCIPALE

          $check = ord($crypt[0]);                                                   // calcul de la somme de contrôle
          for ($i=0; $i<strlen($crypt); $i++) {
              $check += (ord($crypt[$i]) * $i);
          }
          $check %= 103;

          $crypt .= chr($check) . chr(106) . chr(107);                               // Chaine cryptée complète

          $i = (strlen($crypt) * 11) - 8;                                            // calcul de la largeur du module
          $modul = $w/$i;

          for ($i=0; $i<strlen($crypt); $i++) {                                      // BOUCLE D'IMPRESSION
              $c = $this->T128[ord($crypt[$i])];
              for ($j=0; $j<count($c); $j++) {
                  $this->Rect($x,$y,$c[$j]*$modul,$h,"F");
                  $x += ($c[$j++]+$c[$j])*$modul;
              }
          }
      }


      function RoundedRect($x, $y, $w, $h, $r, $corners = '1234', $style = '')
      {
          $k = $this->k;
          $hp = $this->h;
          if($style=='F')
              $op='f';
          elseif($style=='FD' || $style=='DF')
              $op='B';
          else
              $op='S';
          $MyArc = 4/3 * (sqrt(2) - 1);
          $this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));

          $xc = $x+$w-$r;
          $yc = $y+$r;
          $this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));
          if (strpos($corners, '2')===false)
              $this->_out(sprintf('%.2F %.2F l', ($x+$w)*$k,($hp-$y)*$k ));
          else
              $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);

          $xc = $x+$w-$r;
          $yc = $y+$h-$r;
          $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
          if (strpos($corners, '3')===false)
              $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-($y+$h))*$k));
          else
              $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);

          $xc = $x+$r;
          $yc = $y+$h-$r;
          $this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
          if (strpos($corners, '4')===false)
              $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-($y+$h))*$k));
          else
              $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);

          $xc = $x+$r ;
          $yc = $y+$r;
          $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
          if (strpos($corners, '1')===false)
          {
              $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$y)*$k ));
              $this->_out(sprintf('%.2F %.2F l',($x+$r)*$k,($hp-$y)*$k ));
          }
          else
              $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
          $this->_out($op);
      }


      function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
      {
          $h = $this->h;
          $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
              $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
      }

      public function Header(){

          $logo_chacao = "uploads/logo_chacao_educacion.png";
          $logo_escuela = "uploads/scude.jpg";
          $codigo_dea = "Código DEA: S3648D1507";

          $this->SetFont('Arial','B',8);
          $this->Cell(30);
          $this->Cell(40, 40, $this->Image($logo_chacao, 10, 10, 33), 0, 0, 'L', false );
          $this->Cell(-85);
          $this->Cell(0,4,iconv('UTF-8','windows-1252','República Bolivariana de Venezuela'),0,50,'C');
          $this->Cell(0,3,iconv('UTF-8','windows-1252','Alcaldía del Municipio Chacao'),0,50,'C');
          $this->Cell(0,3,iconv('UTF-8','windows-1252','Unidad Educativa Municipal'),0,50,'C');
          $this->Cell(0,3,iconv('UTF-8','windows-1252','"UDAEM San José"'),0,50,'C');
          $this->Cell(0,3,iconv('UTF-8','windows-1252', $codigo_dea),0,50,'C');
          $this->Cell(0);
          $this->Cell(40, 40, $this->Image($logo_escuela, 170, 10, 25), 0, 0, 'C', false );
          $this->Ln(10);
          $this->SetFont('Arial','B',8);

      }

      function Footer()
      {
          $this->SetY(245);

          $this->Ln(15);
          $this->SetFont('Arial', '', 8);
          $this->Cell(0,4,iconv('UTF-8','windows-1252','AV. MOHEDANO CRUCE CON CALLE LA PAZ'),50,50,'L');
          $this->SetFont('Arial', 'B', 8);
          $this->Cell(0,4,iconv('UTF-8','windows-1252','+ 58 212 - 266.4822'),0,50,'L');
          $this->Cell(0,4,iconv('UTF-8','windows-1252','uemabello@gmail.com'),0,50,'L');
          $this->Cell(0,4,iconv('UTF-8','windows-1252','www.chacao.gob.ve'),0,50,'L');

          $trama_chacao = "uploads/trama_chacao.jpg";
          $this->Cell(40, 40, $this->Image($trama_chacao, 100, 250, 100), 0, 0, 'L', false );
      }


      function Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
      {
          $k=$this->k;
          if($this->y+$h>$this->PageBreakTrigger && !$this->InHeader && !$this->InFooter && $this->AcceptPageBreak())
          {
              $x=$this->x;
              $ws=$this->ws;
              if($ws>0)
              {
                  $this->ws=0;
                  $this->_out('0 Tw');
              }
              $this->AddPage($this->CurOrientation);
              $this->x=$x;
              if($ws>0)
              {
                  $this->ws=$ws;
                  $this->_out(sprintf('%.3F Tw',$ws*$k));
              }
          }
          if($w==0)
              $w=$this->w-$this->rMargin-$this->x;
          $s='';
          if($fill || $border==1)
          {
              if($fill)
                  $op=($border==1) ? 'B' : 'f';
              else
                  $op='S';
              $s=sprintf('%.2F %.2F %.2F %.2F re %s ',$this->x*$k,($this->h-$this->y)*$k,$w*$k,-$h*$k,$op);
          }
          if(is_string($border))
          {
              $x=$this->x;
              $y=$this->y;
              if(is_int(strpos($border,'L')))
                  $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',$x*$k,($this->h-$y)*$k,$x*$k,($this->h-($y+$h))*$k);
              if(is_int(strpos($border,'T')))
                  $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',$x*$k,($this->h-$y)*$k,($x+$w)*$k,($this->h-$y)*$k);
              if(is_int(strpos($border,'R')))
                  $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',($x+$w)*$k,($this->h-$y)*$k,($x+$w)*$k,($this->h-($y+$h))*$k);
              if(is_int(strpos($border,'B')))
                  $s.=sprintf('%.2F %.2F m %.2F %.2F l S ',$x*$k,($this->h-($y+$h))*$k,($x+$w)*$k,($this->h-($y+$h))*$k);
          }
          if($txt!='')
          {
              if($align=='R')
                  $dx=$w-$this->cMargin-$this->GetStringWidth($txt);
              elseif($align=='C')
                  $dx=($w-$this->GetStringWidth($txt))/2;
              elseif($align=='FJ')
              {
                  //Set word spacing
                  $wmax=($w-2*$this->cMargin);
                  $this->ws=($wmax-$this->GetStringWidth($txt))/substr_count($txt,' ');
                  $this->_out(sprintf('%.3F Tw',$this->ws*$this->k));
                  $dx=$this->cMargin;
              }
              else
                  $dx=$this->cMargin;
              $txt=str_replace(')','\\)',str_replace('(','\\(',str_replace('\\','\\\\',$txt)));
              if($this->ColorFlag)
                  $s.='q '.$this->TextColor.' ';
              $s.=sprintf('BT %.2F %.2F Td (%s) Tj ET',($this->x+$dx)*$k,($this->h-($this->y+.5*$h+.3*$this->FontSize))*$k,$txt);
              if($this->underline)
                  $s.=' '.$this->_dounderline($this->x+$dx,$this->y+.5*$h+.3*$this->FontSize,$txt);
              if($this->ColorFlag)
                  $s.=' Q';
              if($link)
              {
                  if($align=='FJ')
                      $wlink=$wmax;
                  else
                      $wlink=$this->GetStringWidth($txt);
                  $this->Link($this->x+$dx,$this->y+.5*$h-.5*$this->FontSize,$wlink,$this->FontSize,$link);
              }
          }
          if($s)
              $this->_out($s);
          if($align=='FJ')
          {
              //Remove word spacing
              $this->_out('0 Tw');
              $this->ws=0;
          }
          $this->lasth=$h;
          if($ln>0)
          {
              $this->y+=$h;
              if($ln==1)
                  $this->x=$this->lMargin;
          }
          else
              $this->x+=$w;
      }


    }
?>