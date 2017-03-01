<?php
$edit_data		=	$this->db->get_where('projectos' , array('id_projecto' => $param2) )->result_array();
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
                    <?php echo "Editar Proyecto"?>
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open(base_url().'admin/teacher/edit/'.$param2 , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Proyecto"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="objetivo" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado" ?></label>
                                <div class="col-sm-5">
                                    <select name="id_grado" class="form-control" style="width:100%;"
                                        onchange="return get_class_section(this.value)">
                                        <option value=""><?php echo "Seleccione grado"?></option>
                                        <?php
                                        $id_school = $this->config->item('id_school');
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
                                    <select name="id_seccion" class="form-control" style="width:100%;" id="section_selection_holder">
                                        <option value=""><?php echo "Seleccione primero el grado"?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Lapso"?></label>
                                <div class="col-sm-5">
                                    <select name="class_lapso" class="form-control" style="width:100%;">
                                        <option value="<?php echo "1" ?>"><?php echo "1er Momento o Lapso";?></option>
                                        <option value="<?php echo "2" ?>"><?php echo "2do Momento o Lapso";?></option>
                                        <option value="<?php echo "3" ?>"><?php echo "3er Momento o Lapso";?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Docente"?></label>
                                <div class="col-sm-5">
                                    <select name="teacher_id" class="form-control" style="width:100%;">
                                        <?php
                                        $teachers = $this->db->get('teacher')->result_array();
                                        foreach($teachers as $row):
                                        ?>
                                            <option value="<?php echo $row['teacher_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Tema del Proyecto" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name_tema" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Tiempo de Duraci&oacute;n" ?></label>
                                <div class="col-sm-1">
                                    <input type="radio" class="form-control" name="name_selAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                                <label class="col-sm-2 control-label"><?php echo "Corto Alcance: " ?></label>
                                <div class="col-sm-1">
                                    <input type="number" class="form-control" name="name_cotAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                                <label class="col-sm-1 control-label"><?php echo "Semanas" ?></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "" ?></label>
                                <div class="col-sm-1">
                                    <input type="radio" class="form-control" name="name_selAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                                <label class="col-sm-2 control-label"><?php echo "Mediano Alcance: " ?></label>
                                <div class="col-sm-1">
                                    <input type="number" class="form-control" name="name_medAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                                <label class="col-sm-1 control-label"><?php echo "Semanas" ?></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "" ?></label>
                                <div class="col-sm-1">
                                    <input type="radio" class="form-control" name="name_selAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                                <label class="col-sm-2 control-label"><?php echo "Largo Alcance: " ?></label>
                                <div class="col-sm-1">
                                    <input type="number" class="form-control" name="name_larAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                                <label class="col-sm-1 control-label"><?php echo "Semanas" ?></label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Diagn&oacute;stico" ?></label>
                                <div class="col-sm-5">
                                    <textarea rows="4" cols="6" class="form-control" name="name_texareaDiag" data-validate="required" data-message-required="<?php echo "Requerido" ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Prop&oacute;sito" ?></label>
                                <div class="col-sm-5">
                                    <textarea rows="4" cols="6" class="form-control" name="name_texareaPropo" data-validate="required" data-message-required="<?php echo "Requerido" ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Actividades Didacticas Generales" ?></label>
                                <div class="col-sm-5">
                                    <textarea rows="4" cols="6" class="form-control" name="name_texareaActi" data-validate="required" data-message-required="<?php echo "Requerido" ?>"></textarea>
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
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-info"><?php echo "Editar Proyecto"?></button>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
<!---  DATA TABLE EXPORT CONFIGURATIONS -->
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