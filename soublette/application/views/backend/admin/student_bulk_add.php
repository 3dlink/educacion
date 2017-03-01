<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Agregar Información en Lote"?>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open(base_url() . 'index.php?admin/student_bulk_add/import_excel/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"><?php echo "Seleccione Archivo Excel"?></label>
                    <div class="col-sm-5">
                        <input type="file" name="userfile" class="form-control" data-validate="required" data-message-required="<?php echo "Valor Requerido"?>">
                        <br>
                        <a href="<?php echo base_url();?>uploads/blank_excel_file.xlsx" target="_blank" class="btn btn-info btn-sm"><i class="entypo-download"></i> Descargar archivo excel en blanco</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo "Subir e Importar" ?></button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>