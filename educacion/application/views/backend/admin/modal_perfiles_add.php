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
				<?php echo form_open(base_url() . 'admin/profiles/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label"><?php echo "Nombre del Perfil"?></label>

					<div class="col-sm-7">
						<input type="text" class="form-control" name="nombre" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-4 control-label"><?php echo "Descripcion del Perfil"?></label>

					<div class="col-sm-7">
						<input type="text" class="form-control" name="descripcion" data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-5">
						<button type="submit" class="btn btn-info"><?php echo "Agregar Perfil"?></button>
					</div>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>