<?php
$edit_data		=	$this->db->get_where('opciones_menu' , array('id_opciones_menu' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title" >
					<i class="entypo-plus-circled"></i>
					<?php echo "Agregar Nuevo Perfil"?>
				</div>
			</div>
			<div class="panel-body">
				<?php echo form_open(base_url() . 'admin/menu_options/edit/'.$row['id_opciones_menu']  , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label"><?php echo "Nombre de la Opción"?></label>

					<div class="col-sm-7">
						<input type="text" class="form-control" name="descripcion" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $row['descripcion']; ?>" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-4 control-label"><?php echo "Valor en Sistema"?></label>

					<div class="col-sm-7">
						<input type="text" class="form-control" name="valor" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $row['valor']; ?>" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-4 control-label"><?php echo "Padre"?></label>

					<div class="col-sm-7">
						<select class="form-control select-estado" id="padre" name="padre">
							<option value="0" <?php if($row['padre'] == 0) echo 'selected';?> >Menu Principal</option>
                            <?php 
                            $perfiles = $this->db->get('opciones_menu')->result_array();
                            foreach($perfiles as $row_perfiles):
                            ?>
                                <option value="<?php echo $row_perfiles['id_opciones_menu'];?>"
                                    <?php if($row['padre'] == $row_perfiles['id_opciones_menu'])echo 'selected';?> >
                                    <?php echo $row_perfiles['descripcion'];?>
                                </option>
                            <?php
                            endforeach;
                            ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-5">
						<button type="submit" class="btn btn-info"><?php echo "Editar Opción de Menú"?></button>
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