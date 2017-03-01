<?php
$edit_data		=	$this->db->get_where('exam' , array('exam_id' => $param2) )->result_array();
$id_nivel_educativo = $param3;
$id_school = $this->config->item('id_school');
foreach ( $edit_data as $row):
?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo "Editar Evaluación"?>
                </div>
            </div>
            <div class="panel-body">
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/exam/'.$id_nivel_educativo.'/edit' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado" ?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;"
                                        onchange="return get_class_section(this.value)">
                                        <option value=""><?php echo "Seleccione grado"?></option>
                                        <?php
                                        $this->db->where('id_nivel_educativo' , $id_nivel_educativo);
                                        $this->db->where('id_escuela' , $id_school);
                                        $this->db->where('registro_activo' , 1);
                                        $classes = $this->db->get('vniveleducativogrado')->result_array();
                                        foreach($classes as $row):
                                        ?>
                                            <option value="<?php echo $row['id_grado'];?>"><?php echo $row['nombre_grado'];?></option>
                                        <?php
                                        endforeach;
                                        ?>
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
                                <label class="col-sm-3 control-label"><?php echo "Asignatura" ?></label>
                                <div class="col-sm-5">
                                    <select name="subject_id" class="form-control" style="width:100%;"
                                            id="subject_selection_holder">
                                        <option value=""><?php echo "Seleccione primero el grado"?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Objetivo"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="objetivo" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Contenido"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="contenido" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Técnicas"?></label>
                                <div class="col-sm-5">
                                    <select multiple="multiple" name="id_tecnica" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
                                        <option value="0">Seleccione ...</option>
                                        <?php foreach($tecnicas_p_m as $row):?>
                                                <option value="<?php echo $row['tecnicas_planificacion_media_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Actividades"?></label>
                                <div class="col-sm-5">
                                    <select name="id_actividad" multiple="multiple" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
                                        <option value="0">Seleccione ...</option>
                                        <?php foreach($actividades_p_m as $row):?>
                                                <option value="<?php echo $row['actividades_planificacion_media_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Recursos"?></label>
                                <div class="col-sm-5">
                                    <select name="id_recurso" multiple="multiple" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
                                        <option value="0">Seleccione ...</option>
                                        <?php foreach($recursos_p_m as $row):?>
                                                <option value="<?php echo $row['recursos_planificacion_media_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Actividad de Evaluación"?></label>
                                <div class="col-sm-5">
                                    <select name="id_evaluacion" multiple="multiple" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
                                        <option value="0">Seleccione ...</option>
                                        <?php foreach($evaluaciones_p_m as $row):?>
                                                <option value="<?php echo $row['evaluacion_planificacion_media_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Instrumentos"?></label>
                                <div class="col-sm-5">
                                    <select name="id_instrumento" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
                                        <option value="0">Seleccione ...</option>
                                        <?php foreach($instrumentos_p_m as $row):?>
                                                <option value="<?php echo $row['instrumento_planificacion_media_id'];?>" >
                                                    <?php echo $row['name'];?>
                                                </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Ponderación"?></label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" minlength="1" maxlength="2" min="0" max="99"  id="valor_ponderacion" name="valor_ponderacion" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="porcentaje_ponderacion" name="porcentaje_ponderacion" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Fecha"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="fecha_examen" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo "Editar Evaluación"?></button>
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
<script type="text/javascript">

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

    function get_class_subject(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_subject/' + class_id ,
            success: function(response)
            {
                jQuery('#subject_selection_holder').html(response);
            }
        });
    }

    function get_class_tec_ins($project) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_tec_ins/' + project ,
            success: function(response)
            {
                jQuery('#id_instrumento[]').html(response);
            }
        });
    }

    function get_class_tec_tec($project) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_tec_tec/' + project ,
            success: function(response)
            {
                jQuery('#id_tecnica[]').html(response);
            }
        });
    }


</script>