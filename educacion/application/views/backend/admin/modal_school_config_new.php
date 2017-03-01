<?php
            $teachers   = $this->db->get('vteachers')->result_array();
?>
<div id="carnetEscolar">
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo "Agregar Escuela"?>
            	</div>
            </div>
	<div class="panel-body">
			    	<?php echo form_open(base_url() . 'admin/school_list/create/' ,
			    	array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Nombre"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="nombre_escuela"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Nombre Simple"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="simple_name"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Nombre Completo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="full_name"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Código DEA"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="dea"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Dirección"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="direccion"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Telefono"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="telefono"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="correo_electronico"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Servidor de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_host"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Puerto de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_port"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Autenticacion de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_auth"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Usuario de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_user"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Clave de Correo"?></label>
				            <div class="col-sm-7">
				                <input type="text" class="form-control" name="smtp_password"  value=""  >
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director" class="col-sm-4 control-label"><?php echo "Director"?></label>
				            <div class="col-sm-7">
						<select class="form-control" id="director" name="director" required>
							<option value="0" selected="selected" disabled="disabled">Seleccione...</option>
							<?php foreach ($teachers as $docente){ ?>
						    		<option value="<?php echo $docente['teacher_id']?>"  ><?php echo $docente['name']?></option>
							<?php } ?>
						</select>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="director_encargado" class="col-sm-4 control-label"><?php echo "Director Encargado"?></label>
				            <div class="col-sm-6">
			            		<input type="hidden" class="form-control" name="director_encargado" value="0"  >
				            	<input type="checkbox" class="form-control" name="director_encargado" value="1"  >
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