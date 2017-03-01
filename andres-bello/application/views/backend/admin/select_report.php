<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php echo form_open(base_url(). 'admin/select_report/enviar' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_blank'));?>
            <div class="padded">
                <div class="form-group" id="div_grado" >
                    <label class="col-sm-3 control-label">Grado</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="grado" name="Grado" onchange="return get_class_section(this.value)" required>
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="-1" >TODOS</option>
                        <?php foreach ($grados as $grado){ ?>
                            <option value="<?php echo $grado['id_grado']?>" > <?php echo $grado['nombre_grado']?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>
                <div class="form-group" id="div_seccion">
                    <label class="col-sm-3 control-label">Sección</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="section_selection_holder" name="Seccion" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="-1" >TODAS</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Reporte</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="tipo_correo" name="Reporte" required>
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <option value="1" >Matrícula Inicial</option>
                        <option value="2" >Matrícula Final</option>
                        <option value="3" >Resumen Final Rendimiento Estudiantil</option>
                        <option value="4" >Resumen Final de Evaluación</option>
                        <option value="4" >Certificado de Calificaciones</option>
                        <option value="6" >Nómina</option>
                      </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-5">
                  <button type="submit" class="btn btn-info">Ver Reporte</button>
              </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    function mostrarDiv(value_div) {
/*        
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
*/
    }

    function get_class_section(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);

                get_class_subject(class_id);
            }
        });
    }
</script>