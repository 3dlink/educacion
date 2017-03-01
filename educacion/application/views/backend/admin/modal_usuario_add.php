<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo "Agregar Usuario"?>
            	</div>
            </div>
			<div class="panel-body">
                <?php echo form_open(base_url().'admin/users/create/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">C&eacute;dula</label>
						<div class="col-sm-2">
							<select name="letra_cedula" class="form-control" >
                              <option value="V" ><?php echo "V"?></option>
                              <option value="E" ><?php echo "E"?></option>
                          	</select>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Nro. C&eacute;dula" name="cedula_identidad" data-validate="required" data-message-required="<?php echo "Campo Campo Requerido"?>" value="" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Nombre"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Primer Nombre" name="primer_nombre" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Nombre"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Segundo Nombre" name="segundo_nombre" value="" autofocus >
						</div>
					</div>	
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Apellido"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Primer Apellido" name="primer_apellido" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Apellido"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Segundo Apellido" name="segundo_apellido" value="" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo "Fecha de Nacimiento"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control datepicker" name="fecha_nacimiento" value="" data-start-view="2" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>">
						</div> 
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo "Genero"?></label>
                        
						<div class="col-sm-7">
							<select name="genero" class="form-control">
                              <option value="1"><?php echo "Masculino"?></option>
                              <option value="2"><?php echo "Femenino"?></option>
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Usuario"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="usuario" value="">
						</div>
					</div>                    
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Correo electr&oacute;nico"?></label>
						<div class="col-sm-7">
							<input type="email" class="form-control" name="correo_electronico" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo "Contrase&ntilde;a"?></label>
                        
						<div class="col-sm-7">
							<input type="password" class="form-control" name="clave" value="" >
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Perfil"?></label>
						<div class="col-sm-7">
							<select name="id_perfil" class="form-control">
								<option value="0" disabled selected><?php echo "Seleccione..."?></option>
                                <?php 
                                $perfiles = $this->db->get('perfil')->result_array();
                                foreach($perfiles as $row_perfiles):
                                ?>
                                    <option value="<?php echo $row_perfiles['id_perfil'];?>">
                                        <?php echo $row_perfiles['nombre'];?>
                                    </option>
                                <?php
                                endforeach;
                                ?>
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Escuela"?></label>
						<div class="col-sm-7">
							<select name="id_escuela" class="form-control">
								<option value="-1" disabled selected><?php echo "Seleccione..."?></option>
								<option value="0" >Dirección de Educación</option>
                                <?php 
                                $escuelas = $this->db->get('escuelas')->result_array();
                                foreach($escuelas as $row_escuelas):
                                ?>
                                    <option value="<?php echo $row_escuelas['id_escuela'];?>" >
                                        <?php echo $row_escuelas['nombre_escuela'];?>
                                    </option>
                                <?php
                                endforeach;
                                ?>
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Foto"?></label>
                        
						<div class="col-sm-7">
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
							<button type="submit" class="btn btn-info"><?php echo "Agregar Usuario"?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>