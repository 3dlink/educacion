<?php
	$this->load->model('Censo/Censo');
	$this->load->model('Censo/Censo_grado');
	$this->load->model('Censo/Puntaje_censo');
	$this->load->model('Persona');
	$this->load->model('Usuario');

	$cedula_suministrada = $param2;
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

	$estudiante = Puntaje_censo::where('id_censo', '=', $param2)
					->where('StatusCenso', '=', 1)
					->where($uni_pref, '=', 1)
					->get();

	$especialista = Censo::where('id_censo', '=', $param2)
						->where('StatusCenso', '=', 1)
						->where($uni_pref, '=', 1)
						->get();

    $grado_cursar = Censo_grado::where('id_censo_grado', '=', $estudiante[0]->grado_cursar)
                    			->get();

    $nombre_apellido_evaluador = '';

    if ($especialista[0]->id_especialista > 0){
		$usuario = Usuario::where('id_usuario', '=', $especialista[0]->id_especialista)
					->get();

		$persona = Persona::where('id_persona', '=', $usuario[0]->id_persona)
					->get();

		$nombre_apellido_evaluador = $persona[0]->primer_nombre.'  '.$persona[0]->primer_apellido;
    }


	//Datos de la tabla censo
	$cedula_identidad = $estudiante[0]->cedula_identidad;
	$primer_nombre = $estudiante[0]->primer_nombre;
	$segundo_nombre = $estudiante[0]->segundo_nombre;
	$primer_apellido = $estudiante[0]->primer_apellido;
	$segundo_apellido = $estudiante[0]->segundo_apellido;
	$id_censo = $estudiante[0]->id_censo;
	$grado = $grado_cursar[0]->grado;

	//echo "<script type='text/javascript'>alert('$grado');</script>";
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
				                            <img src="<?php echo $this->crud_model->get_image_url('student' , $id_censo);?>" alt="...">
				                    </div>
				                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
				                </div>
				            </div>
				        </div>
				        <div class="form-group" style="display: none;">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Id Censo"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="id_censo"  value="<?php echo $id_censo; ?>"  readonly>
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
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Escolaridad"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="escolaridad"  value="<?php echo $estudiante[0]->escolaridad;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Edo Orfandad"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="residencia"  value="<?php echo $estudiante[0]->residencia;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Residencia"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="orfandad"  value="<?php echo $estudiante[0]->orfandad;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Representante Trabaja"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="representante_trabaja"  value="<?php echo $estudiante[0]->representante_trabaja;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Trabaja Alcaldia"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="no_residente"  value="<?php echo $estudiante[0]->trabaja_mun_alcaldia;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Jornada Laboral"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="jornada_laboral"  value="<?php echo $estudiante[0]->representante_jornada_laboral;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Nivel de Ingreso"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="nivel_ingreso"  value="<?php echo $estudiante[0]->representante_nivel_ingreso;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Miembros Familia"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="grade"  value="<?php echo $estudiante[0]->miembros_familia;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Vivienda"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="grade"  value="<?php echo $estudiante[0]->vivienda;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Ptos Hijos Escuela Municipio"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="grade"  value="<?php echo $estudiante[0]->hijos_escuela_chacao;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Total Puntos"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="grade"  value="<?php echo $estudiante[0]->puntaje_total;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Evaluado por"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="evaluado_por" value="<?php echo $nombre_apellido_evaluador ;?>"  readonly>
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-sm-offset-5 col-sm-5">
				                <button type="button" id="btnAsignarEscuela" class="btn btn-info" >Validar Cupo</button>
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
			Ajax('../validarcupo',data,'POST',true,function(response){
				mostrarModal("Éxito", "Escuela asignada con éxito", 'type-primary',
			            [ {
			                label: 'Aceptar',
			                cssClass: 'btn-success',
			                action: function(dialogItself){
			                	window.location.reload(true);
		                    	dialogItself.close();
			                }
			            }]);
			});
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