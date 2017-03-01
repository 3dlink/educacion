<!-- PROYECTO PEDAGOGICO INICIAL -->
<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <?php $firts_section_set = false; ?>
            <?php $count = 1; foreach($classes as $row):?>
                <?php
                    if($firts_section_set == false){
                        $firts_section = $row['id_seccion'];
                        $firts_section_set = true;
                    }
                ?>
           <li>
                    <a href="#list_<?php echo $row['id_seccion'];?>" data-toggle="tab">
                        <?php echo $row['abreviacion_seccion'];?>
                    </a>
            </li>
            <?php endforeach;?>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo"Agregar Proyecto"?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----SECCIONES---->
            <?php foreach($classes as $row_two):?>
                <div class="tab-pane box" id="list_<?php echo $row_two['id_seccion'];?>">
                    <a href="javascript:;"
                        onclick="imprimir(<?php echo $row_two['id_seccion'];?>);"
                        class="btn btn-primary pull-right" >
                        <i class="entypo-plus-circled"></i>
                        <?php echo "Imprimir";?>
                    </a>
                    <br><br>
                    <table  class="table table-bordered datatable" id="table_export_<?php echo $row_two['id_seccion'];?>">
                        <thead>
                            <tr>
                                <th><div><?php echo "Proyecto"?></div></th>
                                <th><div><?php echo "Tema"?></div></th>
                                <th><div><?php echo "Momento"?></div></th>
                                <th><div><?php echo "Diagnóstico"?></div></th>
                                <th><div><?php echo "Propósito"?></div></th>
                                <th><div><?php echo "Actividades Didacticas"?></div></th>
                                <th><div><?php echo "Técnicas"?></div></th>
                                <th><div><?php echo "Actividades"?></div></th>
                                <th><div><?php echo "Recursos"?></div></th>
                                <th><div><?php echo "Opciones"?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $projects_section = $this->db->get_where('projectos', array('id_seccion' => $row_two['id_seccion']))->result_array();
                            foreach($projects_section as $row):?>
                            <tr>
                                <td><?php echo $row['objetivo'];?></td>
                                <td><?php echo $row['name_tema'];?></td>
                                <td><?php echo $row['class_lapso'];?></td>
                                <td><?php echo $row['name_texareaDiag'];?></td>
                                <td><?php echo $row['name_texareaPropo'];?></td>
                                <td><?php echo $row['name_texareaActi'];?></td>
                                <td>
                                    <?php
                                    $tecnicas_exam = $this->db->get_where('tecnicas_projecto', array('id_exam' => $row['id_projecto']))->result_array();
                                    foreach ($tecnicas_exam as $tecnica) {
                                    ?>
                                        <div><?php echo $this->crud_model->get_type_name_by_id('tecnicas_planificacion_media' , $tecnica['id_tecnica']) ; ?></div>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $actividades_exam = $this->db->get_where('actividades_projecto', array('id_exam' => $row['id_projecto']))->result_array();
                                    foreach ($actividades_exam as $actividad) {
                                    ?>
                                        <div><?php echo $this->crud_model->get_type_name_by_id('actividades_planificacion_media' , $actividad['id_actividad']) ; ?></div>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $recursos_exam = $this->db->get_where('recursos_projecto', array('id_exam' => $row['id_projecto']))->result_array();
                                    foreach ($recursos_exam as $recurso) {
                                    ?>
                                        <div><?php echo $this->crud_model->get_type_name_by_id('recursos_planificacion_media' , $recurso['id_recurso']) ; ?></div>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Acción <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                            <!-- EDITING LINK -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_project/<?php echo $id_nivel_educativo;?>/<?php echo $row['id_projecto'];?>/<?php echo $row['id_nivel_educativo'];?>');">
                                                    <i class="entypo-pencil"></i>
                                                        <?php echo "Editar"?>
                                                </a>
                                            </li>
                                            <li class="divider"></li>

                                            <!-- DELETION LINK -->
                                            <li>
                                                <a href="#" onclick="delete_record_modal('<?php echo base_url().$this->session->userdata('login_type');?>/project/<?php echo $id_nivel_educativo;?>/delete/<?php echo $row['id_projecto'];?>');">
                                                    <i class="entypo-trash"></i>
                                                        <?php echo "Eliminar"?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach;?>
            <!----SECCIONES ENDS-->
            <!----CREATION FORM STARTS FOR PRIMARIA---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/project/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Proyecto"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="objetivo" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                    <input type="hidden" class="form-control" name="id_nivel_educativo" value="<?php echo  $id_nivel_educativo ; ?>" />
                                    <input type="hidden" class="form-control" name="id_escuela" value="<?php echo  $id_escuela ; ?>" />
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
                                    <select multiple name="id_tecnica[]" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
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
                                    <select name="id_actividad[]" multiple class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
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
                                    <select name="id_recurso[]" multiple class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
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
                                <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo "Agregar Proyecto"?></button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!----CREATION FORM ENDS-->
        </div>
    </div>
</div>

<!-- FIN PROYECTO PEDAGOGICO INICIAL -->





<!---  DATA TABLE EXPORT CONFIGURATIONS -->
<script type="text/javascript">

    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable();

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });

        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_sections_level/<?php echo $id_nivel_educativo ?>' ,
            success: function(response)
            {
                var result = JSON.parse(response)
                for(var x in result){
                    $("#table_export_"+result[x]['id_seccion']).dataTable();

                    $(".dataTables_wrapper select").select2({
                        minimumResultsForSearch: -1
                    });

                }

            }
        });


    });

    jQuery('#valor_ponderacion').blur(function(e) {
        var ponderacion = jQuery('#valor_ponderacion').val();

        var puntaje = ponderacion / 5;

        jQuery('#porcentaje_ponderacion').val(puntaje + " ptos");

    });

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
        alert('aaaaa');
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
    function imprimir(id_seccion) {
        window.open('<?php echo base_url().$this->session->userdata('login_type');?>/proyecto_pedagogico/'+id_seccion, '_blank');
    }

</script>