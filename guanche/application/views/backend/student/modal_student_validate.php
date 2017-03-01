<?php
	$this->load->model('Grado');
	$this->load->model('Seccion');
	$this->load->model('Persona');
	$this->load->model('Escuela');
	$this->load->model('Estudiante');
	$this->load->model('Censo/Puntaje_censo');
	$this->load->model('VistaGradoEscuela');

	$uni_pref = "";
	$id_school = $this->config->item('id_school');
	switch ($id_school) {
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

	$matchThese = ['StatusCenso' =>  2, $uni_pref =>  1, 'id_censo' => $param2];

	$estudiante = Puntaje_censo::where($matchThese)->get();

	$id_grado = $estudiante[0]->grado_cursar;

        	$secciones = $this->db->get_where('vescuela_seccion' , array('id_grado' => $estudiante[0]->grado_cursar, 'id_escuela' => $id_school))->result_array();

            $grado_cursar = VistaGradoEscuela::where('id_escuela', '=', $this->config->item('id_school'))
                                            ->where('id_grado','=', $id_grado)
                                            ->get();

	//Datos de la tabla censo
	$cedula_identidad = $estudiante[0]->cedula_identidad_representante;
	$primer_nombre = $estudiante[0]->primer_nombre;
	$segundo_nombre = $estudiante[0]->segundo_nombre;
	$primer_apellido = $estudiante[0]->primer_apellido;
	$segundo_apellido = $estudiante[0]->segundo_apellido;
	$grado = $estudiante[0]->grado_cursar;
	$id_censo = $estudiante[0]->id_censo;
	$uem_seleccionada = $this->config->item('uem_name');

?>
<br><br>
<div id="carnetEscolar">
	<div class="row">
		<div class="tab-content">
			<div class="tab-pane box active">
			    <div class="box-content">
				<form id="formCensusEdit" class="form-horizontal form-groups-bordered" accept-charset="utf-8">
				<!--
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
			        	-->
				        <div class="form-group">
				            <label for="field-1" class="col-sm-4 control-label"><?php echo "Cédula de Identidad"?></label>
				            <div class="col-sm-6">
				                <input type="text" class="form-control" name="cedula_identidad"  value="<?php echo $cedula_identidad; ?>"  readonly>
				                <input type="hidden" class="form-control" name="id_censo"  value="<?php echo $id_censo; ?>"  readonly>
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
				                <input type="text" class="form-control" name="grade"  value="<?php echo $grado_cursar[0]->nombre_grado;?>"  readonly>
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

<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/modal_student_validate.js"></script>