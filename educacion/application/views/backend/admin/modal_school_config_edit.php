<?php
	$this->load->model('Persona');
	$this->load->model('Escuela');
	$id_escuela = $param2;
	$escuela = Escuela::where('id_escuela', '=', $id_escuela)->get();
            $id_director = $escuela[0]->id_persona_director;
            $director = Persona::find($id_director);
            $teachers   = $this->db->where('id_escuela', $id_escuela)->get('vteachers')->result_array();
?>
<br><br>
<div id="carnetEscolar">
	<div class="row">
		<div class="tab-content">
			<div class="tab-pane box active">
			    <div class="box-content">
			    	<?php echo form_open(base_url() . 'admin/school_list/do_update/'.$id_escuela ,
			    	array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Nombre"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="nombre_escuela"  value="<?php echo $escuela[0]->nombre_escuela  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Nombre Simple"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="simple_name"  value="<?php echo $escuela[0]->simple_name  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Nombre Completo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="full_name"  value="<?php echo $escuela[0]->full_name  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Código DEA"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="dea"  value="<?php echo $escuela[0]->dea  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Dirección"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="direccion"  value="<?php echo $escuela[0]->direccion  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Telefono"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="telefono"  value="<?php echo $escuela[0]->telefono  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="correo_electronico"  value="<?php echo $escuela[0]->correo_electronico  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Servidor de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_host"  value="<?php echo $escuela[0]->smtp_host  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Puerto de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_port"  value="<?php echo $escuela[0]->smtp_port ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Autenticacion de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_auth"  value="<?php echo $escuela[0]->smtp_auth  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Usuario de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_user"  value="<?php echo $escuela[0]->smtp_user  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Clave de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_password"  value="<?php echo $escuela[0]->smtp_password  ;?>"  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Director"?></label>
				            <div class="col-sm-7">
						<select class="form-control" id="director" name="director" required>
							<option value="0" selected="selected" disabled="disabled">Seleccione...</option>
							<?php foreach ($teachers as $docente){ ?>
						    		<option value="<?php echo $docente['teacher_id']?>" <?php echo ($id_director==$docente['teacher_id'])?'selected="selected"':'' ?> ><?php echo $docente['name']?></option>
							<?php } ?>
						</select>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director_encargado" class="col-sm-4 control-label"><?php echo "Director Encargado"?></label>
				            <div class="col-sm-6">
			            		<input type="hidden" class="form-control" name="director_encargado" value="0"  >
				            	<input type="checkbox" class="form-control" name="director_encargado" value="1"  <?php if($escuela[0]->director_encargado == 1){
				                                    echo 'checked';
				                                }
				                            ?>
				                        >
				            </div>
				        </div>
				        <div class="form-group">
				            <div class="col-sm-offset-5 col-sm-5">
				                <button type="submit" class="btn btn-info" >Guardar</button>
				            </div>
				        </div>
			        	<?php echo form_close();?>
			    </div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/modal_census.js"></script>