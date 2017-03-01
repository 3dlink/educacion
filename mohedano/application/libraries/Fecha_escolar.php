<?php 
	
class Fecha_escolar {
	
   //Metodo que devuelve es año escolar actual.
   function ano_escolar() {
      $ano_actual = date('Y');
	  $ano_proximo = strtotime ('+1 year', strtotime ($ano_actual)) ;
	  $ano_proximo = date ( 'Y' , $ano_proximo );
	  $ano_escolar = $ano_actual.'-'.$ano_proximo;

	  return $ano_escolar;
   }
}

?>