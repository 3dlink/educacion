<?php
	$this->load->model('Persona');
	$this->load->model('Escuela');

	$id_escuela = $param2;

	$escuela = Escuela::where('id_escuela', '=', $id_escuela)
	                        ->get();

            $id_director = $escuela['id_persona_director'];
            $director = Persona::find($id_director);

	//Datos de la tabla censo
	$cedula_identidad_alumno = $estudiante[0]->CedulaDeIdentidadDelAlumnoOCedulaEscolar;
	$cedula_identidad_padre  = $estudiante[0]->CedulaDeIdentidadDelRepresentante;
	$primer_nombre = $estudiante[0]->PrimerNombreDelAlumno;
	$segundo_nombre = $estudiante[0]->SegundoNombreDelAlumno;
	$primer_apellido = $estudiante[0]->PrimerApellidoDelAlumno;
	$segundo_apellido = $estudiante[0]->SegundoApellidoDelAlumno;
	$grado = $estudiante[0]->Grado;
	$cedula_identidad = "";


?>
<br><br>
<div id="carnetEscolar">
	<div class="row">
		<div class="tab-content">
			<div class="tab-pane box active">
			    <div class="box-content">
			    	<?php echo form_open(base_url() . 'index.php?admin/system_config/do_update' ,
			    	array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Director"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="director"  value="<?php echo $escuela[0]->director->primer_nombre.' '.$escuela[0]->director->segundo_nombre.', '.$escuela[0]->director->primer_apellido.' '.$escuela[0]->director->segundo_apellido; ?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="cupos" class="col-sm-4 control-label"><?php echo "Cupos"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="cupos" value="<?php echo $escuela[0]->cupos; ?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director_encargado" class="col-sm-4 control-label"><?php echo "Director Encargado"?></label>
				            <div class="col-sm-6">
				            	<input type="checkbox" class="form-control" name="director_encargado" value=""  <?php if($escuela[0]->director_encargado == 1){
				                                    echo 'checked';
				                                }
				                            ?>
				                        >
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-sm-offset-5 col-sm-5">
				                <!--
				                <button type="button" id="btnAsignarEscuela" class="btn btn-info" >Guardar</button>
				                -->
				                <button type="submit" class="btn btn-info" >Guardar</button>
				            </div>
				        </div>
			        	<?php echo form_close();?>
			    </div>
			</div>
		</div>
	</div>
</div>
<!--
<?php

	$selectOption = $_POST['lista_escuelas'];
	$cedula_suministrada = $_POST['identification'];

	if($selectOption > 0){
		echo "<script>alert('Hay Escuela');</script>";
		echo "<script>alert('Cedula'".$cedula_suministrada."');</script>";

		$estudiante = Censo::where('CedulaDeIdentidadDelAlumnoOCedulaEscolar', '=', $cedula_suministrada)
	                        ->orWhere('CedulaDeIdentidadDelRepresentante', '=', $cedula_suministrada)
	                        ->update(array('IDEscuelaSeleccionada' => $selectOption));
		$estudiante->save();

		echo "<script>alert('received!'); location.href='".$url."';</script>";

	} else {
		/*$url = base_url()."admin/census_list";*/
		echo "<script>alert('Debe Seleccionar Una Escuela');</script>";
	}
?>
-->
<script type="text/javascript">

function ajaxRequest()
{
	/*
	var data = $('#formCensusEdit').serialize();

	if ($('#lista_escuelas option:selected').val() > 0) {
		ajax('asignarescuela',data,'POST',true,function(response){
			console.log(response);
			/*
			mostrarModal("Éxito", "Escuela asignada con éxito", 'type-primary',
	            [ {
	                label: 'Aceptar',
	                cssClass: 'btn-success',
	                action: function(dialogItself){
	                    dialogItself.close();
	                    //continuar();
	                }
	            }]
	            );
		});
	} else {
		alert("Debe Seleccionar Una Escuela");
	}


	$.ajax({
		type: "post",
		url: "asignar_escuela",
		cache: true,
		data: $('#formCensusEdit').serialize(),
		success: function(json){
			try{
				var obj = jQuery.parseJSON(json);

				mostrarModal("éxito", "Escuela asignada con éxito", 'type-primary',
		            [ {
		                label: 'Aceptar',
		                cssClass: 'btn-success',
		                action: function(dialogItself){
		                    dialogItself.close();
		                    //continuar();
		                }
		            }]
		            );


			}catch(e) {
				alert(e);
			}
		},
		error: function(){
			alert('Error while request..');
		}
 });
 	*/
}




</script>
<script type="text/javascript">

    // print invoice function
    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data)
    {
        var mywindow = window.open('', 'carnet', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Carnet Escolar</title>');
        mywindow.document.write('<link rel="stylesheet" href="http://demoeducacion.tekkoa.com/assets/css/bootstrap.css" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="http://demoeducacion.tekkoa.com/assets/css/carnet/print.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>

<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/modal_census.js"></script>