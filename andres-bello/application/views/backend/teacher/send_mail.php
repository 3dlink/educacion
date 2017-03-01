<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php echo form_open(base_url(). 'admin/send_mail/enviar' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
            <div class="padded">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tipo de Correo</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="tipo_correo" name="SeleccionCorreo" onchange="mostrarDiv(this.value);">
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="1" >Grado</option>
                        <option value="2" >Sección</option>
                        <option value="3" >Nivel Educativo</option>
                        <option value="4" >UEM</option>
                      </select>
                    </div>
                </div>
                <div class="form-group" id="div_grado" style="display: none;">
                    <label class="col-sm-3 control-label">Grado</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="grado" name="Grado" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="-1" >TODOS</option>
                        <?php foreach ($grados as $grado){ ?>
                            <option value="<?php echo $grado['id_grado']?>" > <?php echo $grado['nombre_grado']?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>
                <div class="form-group" id="div_seccion" style="display: none;">
                    <label class="col-sm-3 control-label">Sección</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="seccion" name="Seccion" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="-1" >TODAS</option>
                        <?php foreach ($secciones as $seccion){ ?>
                            <option value="<?php echo $seccion['id_seccion']?>" > <?php echo $seccion['nombre_seccion']?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>
                <div class="form-group" id="div_nivel_educativo" style="display: none;">
                    <label class="col-sm-3 control-label">Nivel Educativo</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="nivel_educativo" name="NivelEducativo" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="-1" >TODOS</option>
                        <?php foreach ($niveles as $nivel){ ?>
                            <option value="<?php echo $nivel['id_nivel_educativo']?>" > <?php echo $nivel['valor']?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Asunto</label>
                    <div class="col-sm-5">
                        <div class="box closable-chat-box">
                            <div class="box-content padded">
                                <div class="chat-message-box">
                                <input type="text" required minlength="1" class="form-control" id="asunto" name="Asunto" placeholder="Asunto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Mensaje</label>
                    <div class="col-sm-5">
                        <div class="box closable-chat-box">
                            <div class="box-content padded">
                                <div class="chat-message-box">
                                <textarea required name="Mensaje" id="mensaje" rows="8" class="form-control" placeholder="Agregar mensaje"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-5">
                  <button type="submit" class="btn btn-info">Enviar Mensaje</button>
              </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    function mostrarDiv(value_div) {

        switch(value_div) {
            case '1':
                jQuery('#div_grado').show();
                jQuery('#div_seccion').hide();
                jQuery('#div_nivel_educativo').hide();
                break;
            case '2':
                jQuery('#div_grado').hide();
                jQuery('#div_seccion').show();
                jQuery('#div_nivel_educativo').hide();
                break;
            case '3':
                jQuery('#div_grado').hide();
                jQuery('#div_seccion').hide();
                jQuery('#div_nivel_educativo').show();
                break;
            case '4':
                jQuery('#div_grado').hide();
                jQuery('#div_seccion').hide();
                jQuery('#div_nivel_educativo').hide();
                break;
        }
    }
</script>