<?php
	$this->load->model('Grado');
	$this->load->model('Seccion');
	$this->load->model('Persona');
	$this->load->model('Escuela');
	$this->load->model('Estudiante');

	$estudiante = Estudiante::where('status_inscripcion', '=', 0)
                            ->where('id_escuela', '=' , 1)
                            ->where('cedula_escolar', '=' , $param2)
                ->get();

    $id_grado = $estudiante[0]->grado->id_grado;

    $secciones = Seccion::where('id_grado', '=', $id_grado)
    					->get();

	//Datos de la tabla censo
	$cedula_identidad = $param2;
	$primer_nombre = $estudiante[0]->persona->primer_nombre;
	$segundo_nombre = $estudiante[0]->persona->segundo_nombre;
	$primer_apellido = $estudiante[0]->persona->primer_apellido;
	$segundo_apellido = $estudiante[0]->persona->segundo_apellido;
	$grado = $estudiante[0]->grado->abreviacion_grado;
	$uem_seleccionada = $estudiante[0]->escuela->nombre_escuela;

?>
<br><br>
<div id="carnetEscolar">
	<div class="row">
		<div class="tab-content">
			<div class="tab-pane box active">
			    <div class="box-content">
				<form id="formCensusEdit" class="form-horizontal form-groups-bordered" accept-charset="utf-8">
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Foto"?></label>
				            <div class="col-sm-6">
				                <div class="fileinput fileinput-new" data-provides="fileinput">
				                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
				                            <img src="<?php echo $this->crud_model->get_image_url('student' , $estudiante[0]->id_estudiante);?>" alt="...">
				                    </div>
				                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
				                </div>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Cédula de Identidad"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="cedula_identidad"  value="<?php echo $cedula_identidad; ?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Nombres"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="firtsname" value="<?php echo $primer_nombre.' '.$segundo_nombre; ?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Apellidos"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="secondname"  value="<?php echo $primer_apellido.' '.$segundo_apellido;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Grado"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="grade"  value="<?php echo $grado;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-2" class="col-sm-4 control-label"><?php echo "UEM Seleccionada"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="address"  value="<?php echo $uem_seleccionada;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-2" class="col-sm-4 control-label"><?php echo "Seccion Asignada"?></label>
				            <div class="col-sm-6">
				                <select class="form-control" name="lista_escuelas" id="lista_escuelas" required >
				        	        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
				        	        <?php foreach ($secciones as $seccion){ ?>
				        	            <option value="<?php echo $seccion['id_seccion']?>"><?php echo $seccion['nombre_seccion']?></option>
				        	        <?php } ?>
				                </select>
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-sm-offset-5 col-sm-5">
				                <button type="button" id="btnAsignarEscuela" class="btn btn-info" >Guardar</button>
				            </div>
				        </div>
				    </form>
			    </div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function ajaxRequest()
	{
		var data = $('#formCensusEdit').serialize();
		if ($('#lista_escuelas option:selected').val() > 0) {
			Ajax('asignarseccion',data,'POST',true,function(response){
				mostrarModal("Éxito", "Escuela asignada con éxito", 'type-primary',
			            [ {
			                label: 'Aceptar',
			                cssClass: 'btn-success',
			                action: function(dialogItself){
			                    dialogItself.close();
			                }
			            }]);
			});
		} else {
			alert("Debe Seleccionar Una Escuela");
		}
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
<script src="<?php echo base_url(); ?>assets/js/censo/modal_student_validate.js"></script>