<?php
    date_default_timezone_set('America/Caracas');
    $fecha_actual = date('d/m/Y');
    $fecha_actual_bd = date('m-d-Y');
    $id_inscripcion = $param2;
    $referido_por = $this->session->userdata('login_user_id');
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Referir a la UDAEM"?>
                </div>
            </div>
            <div class="panel-body">
            <?php echo form_open(base_url().'admin/student_referred/create/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                <div class="form-group">
                    <label for="field-1" class="col-sm-4 control-label"><?php echo "Fecha"?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo $fecha_actual ?>" readonly data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus >
                        <input type="hidden" class="form-control" name="fecha_referido" value="<?php echo $fecha_actual_bd ?>" readonly data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus >
                        <input type="hidden" class="form-control" name="id_inscripcion" value="<?php echo $id_inscripcion ?>" readonly data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus >
                        <input type="hidden" class="form-control" name="referido_por" value="<?php echo $referido_por ?>" readonly data-validate="required" data-message-required="<?php echo "Campo Requerido"?>" value="" autofocus >
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-1" class="col-sm-4 control-label"><?php echo "Referido a"?></label>
                    <div class="col-sm-6">
                      <select class="form-control" id="referido_a" name="referido_a" required size="3" multiple style="height: 120px;">
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="1" >Psicología</option>
                        <option value="2" >Terapia de Lenguaje</option>
                        <option value="3" >Terapia Ocupacional</option>
                        <option value="4" >Trabajo Social</option>
                        <option value="5" >Psicopedagogía</option>
                        <option value="6" >Ni&ntilde;os no Escolarizados</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-1" class="col-sm-4 control-label"><?php echo "Motivo"?></label>
                    <div class="col-sm-6">
                      <textarea rows="10" cols="50" name="motivo_referencia" value=""></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo "Agregar Referencia"?></button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>