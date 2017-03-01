<?php
$edit_data		=	$this->db->get_where('class_routine' , array('class_routine_id' => $param2) )->result_array();
$id_nivel_educativo = $param3;
?>
<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open(base_url() . 'admin/class_routine/do_update/'.$row['class_routine_id'] , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado" ?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;" onchange="return get_class_subject(this.value)">
                                        <option value=""><?php echo "Seleccione grado"?></option>
                                        <?php
                                                    $this->db->where('id_nivel_educativo' , $id_nivel_educativo);
                                                    $this->db->where('registro_activo' , 1);
                            $classes = $this->db->get('vniveleducativogrado')->result_array();
                            foreach($classes as $row):
                ?>
                                              <option value="<?php echo $row['id_grado'];?>"><?php echo $row['nombre_grado'];?></option>
                                                <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Seccion" ?></label>
                                <div class="col-sm-5">
                                    <select name="section_id" class="form-control" style="width:100%;"
                                            id="section_selection_holder">
                                        <option value=""><?php echo "Seleccione primero el grado"?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Asignatura"?></label>
                                <div class="col-sm-5">
                                    <select name="subject_id" class="form-control" style="width:100%;" id="subject_selection_holder">
                                        <option value=""><?php echo "Seleccione primero el grado"?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Día"?></label>
                                <div class="col-sm-5">
                                    <select name="day" class="form-control" style="width:100%;">
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miércoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Rango de Hora"?></label>
                                <div class="col-sm-9">
                                    <div class="col-sm-3" style="padding-left: 0px ! important;">
                                        <select name="hour_id" class="form-control" style="width:100%;">
                                            <option value="1">7:00 a.m - 7:45 a.m</option>
                                            <option value="2">7.45 a.m - 8:30 a.m</option>
                                            <option value="3">8:30 a.m - 9:15 a.m</option>
                                            <option value="4">9:15 a.m - 10:00 a.m</option>
                                            <option value="5">10:00 a.m - 10:45 a.m</option>
                                            <option value="6">10:45 a.m - 11:30 a.m</option>
                                            <option value="7">11:30 a.m - 12:30 p.m</option>
                                            <option value="8">12:30 p.m - 1:15 p.m</option>
                                            <option value="9">1:15 p.m - 2:00 p.m</option>
                                            <option value="10">2:00 p.m - 2:45 p.m</option>
                                            <option value="11">2:45 p.m - 3:30 p.m</option>
                                            <option value="12">3:30 p.m - 4:15 p.m</option>
                                            <option value="13">4:15 p.m - 5:00 p.m</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-5">
                      <button type="submit" class="btn btn-info">Editar Horario</button>
                  </div>
                </div>
        </form>
        <?php endforeach;?>
    </div>
</div>
<script type="text/javascript">
    function get_class_subject(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_subject/' + class_id ,
            success: function(response)
            {
                jQuery('#subject_selection_holder').html(response);

                get_class_section(class_id);
            }
        });
    }
    function get_class_section(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);
            }
        });
    }
</script>