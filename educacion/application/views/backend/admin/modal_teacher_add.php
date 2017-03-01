<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo "Agregar Docente"?>
            	</div>
            </div>
	<div class="panel-body">
		<?php echo form_open(base_url().$this->session->userdata('login_type').'/teacher/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="form-group">
				<label for="field-1" class="col-sm-4 control-label"><?php echo "Apelldios y Nombres"?></label>

				<div class="col-sm-6">
					<input type="text" required class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
					<input type="hidden" class="form-control" name="id_escuela"  value="<?php echo $this->config->item('id_school'); ?>" >
				</div>
			</div>
			<div class="form-group">
				<label for="field-1" class="col-sm-4 control-label"><?php echo "Cédula de Identidad"?></label>
				<div class="col-sm-2">
					<select name="letra_cedula" class="form-control" required>
						<option value="" disabled selected><?php echo "Seleccionar"?></option>
						<option value="V"><?php echo "V"?></option>
						<option value="E"><?php echo "E"?></option>
					</select>
				</div>
				<div class="col-sm-4">
					<input type="text" required minlength="" maxlength="8" class="form-control" name="cedula_identidad" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
				</div>
			</div>
			<div class="form-group">
				<label for="field-2" class="col-sm-4 control-label"><?php echo "Fecha de Nacimiento"?></label>
				<div class="col-sm-6">
					<input type="text" id="fecha_nacimiento" required class="form-control" name="birthday" value="" data-start-view="2">
				</div>
			</div>
			<div class="form-group">
				<label for="field-2" class="col-sm-4 control-label"><?php echo "Genero"?></label>
				<div class="col-sm-6">
					<select name="sex" class="form-control" required>
						<option value="" disabled selected><?php echo "Seleccionar"?></option>
						<option value="male"><?php echo "Masculino"?></option>
						<option value="female"><?php echo "Femenino"?></option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="field-2" class="col-sm-4 control-label"><?php echo "Dirección"?></label>

				<div class="col-sm-6">
					<input type="text" required class="form-control" name="address" value="" >
				</div>
			</div>

			<div class="form-group">
				<label for="field-2" class="col-sm-4 control-label"><?php echo "Telefono Habitación"?></label>
				<div class="col-sm-6">
					<input type="text" required class="form-control onlyNumbers" name="phone" value="" >
				</div>
			</div>
			<div class="form-group">
				<label for="field-2" class="col-sm-4 control-label"><?php echo "Telefono Celular"?></label>
				<div class="col-sm-6">
					<input type="text" required class="form-control onlyNumbers" name="mobile_phone" value="" >
				</div>
			</div>
			<div class="form-group">
				<label for="field-2" class="col-sm-4 control-label"><?php echo "Cargo"?></label>
				<div class="col-sm-6">
					<select name="id_cargo" required class="form-control" >
						<option value="" disabled selected>Selecciona un cargo</option>
						<?php $cargos = $this->db->get('cargo')->result_array();
						foreach($cargos as $row):?>
							<option value="<?php echo $row['cargo_id'];?>" >
							<?php echo $row['name'];?>
							</option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
	                    <div class="form-group">
	                        <label for="field-2" class="col-sm-4 control-label"><?php echo "Escuela"?></label>
	                        <div class="col-sm-6">
	                            <select name="id_escuela" class="form-control" >
	                                <option value="">Selecciona una escuela</option>
	                                <?php $escuelas = $this->db->get('escuelas')->result_array();
	                               foreach($escuelas as $row_cargo):?>
	                                <option value="<?php echo $row_cargo['id_escuela'];?>" >
	                                        <?php echo $row_cargo['nombre_escuela'];?>
	                                            </option>
	                                <?php endforeach;?>
	                            </select>
	                        </div>
	                    </div>
			<div class="form-group">
				<label for="field-1" class="col-sm-4 control-label"><?php echo "Correo electrónico"?></label>
				<div class="col-sm-6">
					<input type="text" required class="form-control" name="correo_electronico" value="" autocomplete="off">
				</div>
			</div>
			<div class="form-group">
				<label for="field-1" class="col-sm-4 control-label"><?php echo "Foto"?></label>

				<div class="col-sm-6">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
							<img src="http://placehold.it/200x200" alt="...">
						</div>
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
						<div>
							<span class="btn btn-white btn-file">
								<span class="fileinput-new">Seleccionar imagen</span>
								<span class="fileinput-exists">Cambiar</span>
								<input type="file" name="userfile" accept="image/*">
							</span>
							<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Eliminar</a>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-5">
					<button type="submit" class="btn btn-info"><?php echo "Agregar Docente"?></button>
				</div>
			</div>
                	<?php echo form_close();?>
            </div>
        </div>
    </div>
</div>