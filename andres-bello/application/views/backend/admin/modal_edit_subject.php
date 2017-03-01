<?php
$edit_data =  $this->db->get_where('asignatura' , array('asignatura_id' => $param2) )->result_array();
$id_school = $this->config->item('id_school');

foreach ( $edit_data as $row):
    ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Editar Asignatura";?>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open(base_url().$this->session->userdata('login_type').'/subject/do_update/'.$row['asignatura_id'].'/'.$param3 , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo "Asignatura" ?></label>
                            <div class="col-sm-5">
                                <input type="text" required minlength="" class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $row['name']?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo "Grado"?></label>
                            <div class="col-sm-5">
                                <select name="id_grado" class="form-control" style="width:100%;" required>
                                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                    <?php
                                    $sections = $this->db->get_where('vniveleducativogrado' , array('id_nivel_educativo' => $param3, 'id_escuela' => $id_school))->result_array();
                                    foreach($sections as $row_section):
                                    ?>
                                        <option value="<?php echo $row_section['id_grado'];?>" <?php echo ($row_section['id_grado'] == $row['id_grado'])?'selected="selected"':'' ?>  ><?php echo $row_section['nombre_grado'];?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo "Abreviación" ?></label>
                            <div class="col-sm-5">
                                <input type="text" required minlength="" class="form-control" name="abreviacion" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $row['abreviacion'] ?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo "Abreviación Boletin" ?></label>
                            <div class="col-sm-5">
                                <input type="text" required minlength="" class="form-control" name="abreviacion_boletin" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $row['abreviacion_boletin']?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo "Comentario" ?></label>
                            <div class="col-sm-5">
                                <input type="text" required minlength="" class="form-control" name="comentario" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="<?php echo $row['comentario']?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo "Educación para el Trabajo"?></label>
                            <div class="col-sm-5">
                                <label><input type="hidden" name="educacion_trabajo" value="0"></label>
                                <label><input type="checkbox" name="educacion_trabajo" value="1" <?php echo ($row['educacion_trabajo']=='1')?'checked':'' ?> ></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo "Editar Asignatura"?></button>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
endforeach;
?>