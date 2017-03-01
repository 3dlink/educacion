<?php

$this->load->model('Censo/Censo');

$this->load->view('backend/admin/asignar_escuela');

if (isset($_POST['identification'])){
	$selectOption = $_POST['lista_escuelas'];
	$cedula_suministrada = $_POST['identification'];

	if($selectOption > 0){
	$estudiante = Censo::where('CedulaDeIdentidadDelAlumnoOCedulaEscolar', '=', $cedula_suministrada)
	                        ->orWhere('CedulaDeIdentidadDelRepresentante', '=', $cedula_suministrada)
	                        ->update(array('IDEscuelaSeleccionada' => $selectOption));
		$estudiante->save();

		echo "<script>alert('received!'); location.href='".$url."';</script>";

	} else {
		$url = base_url()."admin/census_list";
		echo "<script>alert('Debe Seleccionar Una Escuela');</script>";
	}
}
?>