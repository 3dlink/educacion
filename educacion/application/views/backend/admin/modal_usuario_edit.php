<?php 
$edit_data = $this->db->get_where('usuarios' , array('id_usuario' => $param2) )->result_array();
foreach ($edit_data as $row):

$persona = $this->db->get_where('personas' , array('id_persona' => $row['id_persona']) )->result_array();
$letra_cedula = ($persona[0]['nacionalidad'] == 'VENEZOLANA') ? 'V' : 'E';
$fecha_nacimiento    = date('d/m/Y', strtotime($persona[0]['fecha_nacimiento']));
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo "Editar Usuario"?>
            	</div>
            </div>
			<div class="panel-body">
                <?php echo form_open(base_url().'admin/users/edit/'.$param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">C&eacute;dula</label>
						<div class="col-sm-2">
							<select name="letra_cedula" class="form-control">
                              <option value="V" <?php echo ($letra_cedula == 'V') ?  "selected" : ""; ?> ><?php echo "V"?></option>
                              <option value="E" <?php echo ($letra_cedula == 'E') ?  "selected" : ""; ?> ><?php echo "E"?></option>
                          	</select>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Nro. C&eacute;dula" name="cedula_identidad" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="<?php echo $persona[0]['cedula_identidad'];?>" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Nombre"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Primer Nombre" name="primer_nombre" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="<?php echo $persona[0]['primer_nombre'];?>" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Nombre"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Segundo Nombre" name="segundo_nombre" value="<?php echo $persona[0]['segundo_nombre'];?>" autofocus >
						</div>
					</div>	
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Primer Apellido"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Primer Apellido" name="primer_apellido" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="<?php echo $persona[0]['primer_apellido'];?>" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Segundo Apellido"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="Segundo Apellido" name="segundo_apellido" value="<?php echo $persona[0]['segundo_apellido'];?>" autofocus >
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo "Fecha de Nacimiento"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control datepicker" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento;?>" data-start-view="2">
						</div> 
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-4 control-label"><?php echo "Genero"?></label>
						<div class="col-sm-7">
							<select name="genero" class="form-control">
                              <option value="1" <?php echo ($persona[0]['id_sexo'] == 1) ? 'selected': '';?> ><?php echo "Masculino"?></option>
                              <option value="2" <?php echo ($persona[0]['id_sexo'] == 2) ? 'selected': '';?>><?php echo "Femenino"?></option>
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Usuario"?></label>
						<div class="col-sm-7">
							<input type="text" readonly class="form-control" name="usuario" value="<?php echo $row['usuario'];?>">
						</div>
					</div>                    
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Correo electr&oacute;nico"?></label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="correo_electronico" value="<?php echo $row['correo_electronico'];?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-4 control-label"><?php echo "Perfil"?></label>
						<div class="col-sm-7">
							<select name="id_perfil" class="form-control">
                                <?php 
                                $perfiles = $this->db->get('perfil')->result_array();
                                foreach($perfiles as $row_perfiles):
                                ?>
                                    <option value="<?php echo $row_perfiles['id_perfil'];?>"
                                        <?php if($row['id_perfil'] == $row_perfiles['id_perfil'])echo 'selected';?> >
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
								<option value="0" <?php if($row['id_escuela'] == 0) echo 'selected';?> >Dirección de Educación</option>
                                <?php 
                                $escuelas = $this->db->get('escuelas')->result_array();
                                foreach($escuelas as $row_escuelas):
                                ?>
                                    <option value="<?php echo $row_escuelas['id_escuela'];?>"
                                        <?php if($row['id_escuela'] == $row_escuelas['id_escuela'])echo 'selected';?> >
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
							<button type="submit" class="btn btn-info"><?php echo "Editar Usuario"?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php
endforeach;
?>