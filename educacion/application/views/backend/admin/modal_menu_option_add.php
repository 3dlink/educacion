<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title" >
					<i class="entypo-plus-circled"></i>
					<?php echo "Agregar Nueva Opcion de Menu"?>
				</div>
			</div>
			<div class="panel-body">
				<?php echo form_open(base_url() . 'admin/menu_options/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label"><?php echo "Nombre de la Opción"?></label>

					<div class="col-sm-7">
						<input type="text" class="form-control" name="descripcion" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-4 control-label"><?php echo "Valor en Sistema"?></label>

					<div class="col-sm-7">
						<input type="text" class="form-control" name="valor" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-4 control-label"><?php echo "Padre"?></label>

					<div class="col-sm-7">
						<select class="form-control select-estado" id="padre" name="padre">
							<option value="0"  > Seleccione...</option>
                            <?php 
                            $opciones_menu = $this->db->get('opciones_menu')->result_array();
                            foreach($opciones_menu as $menu):
                            ?>
                                <option value="<?php echo $menu['id_opciones_menu'];?>" >
                                    <?php echo $menu['descripcion'];?>
                                </option>
                            <?php
                            endforeach;
                            ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-5">
						<button type="submit" class="btn btn-info"><?php echo "Agregar Opcion a Menú"?></button>
					</div>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>