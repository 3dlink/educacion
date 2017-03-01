<!-- PROYECTO PEDAGOGICO INICIAL -->
<?php if($id_nivel_educativo == 1){ ?>
<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo "Proyectos"?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo"Agregar Proyecto"?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo "Sección"?></div></th>
                            <th><div><?php echo "Docente"?></div></th>
                            <th><div><?php echo "Momento o Lapso"?></div></th>
                            <th><div><?php echo "Nombre de Proyecto"?></div></th>
                            <th><div><?php echo "Opciones"?></div></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!----TABLE LISTING ENDS--->
            <!----CREATION FORM STARTS FOR PRIMARIA---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/exam/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">

                                <label class="col-sm-3 control-label"><?php echo "Proyecto"?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado" ?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;"
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
                                    <select name="section_id" class="form-control" style="width:100%;"
                                            id="section_selection_holder">
                                        <option value=""><?php echo "Seleccione primero el grado"?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Lapso"?></label>
                                <div class="col-sm-5">
                                    <select name="class_lapso" class="form-control" style="width:100%;">
                                        <option value="<?php echo "" ?>"><?php echo "1er Momento o Lapso";?></option>
                                        <option value="<?php echo "" ?>"><?php echo "2do Momento o Lapso";?></option>
                                        <option value="<?php echo "" ?>"><?php echo "3er Momento o Lapso";?></option>

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
                                    <input type="text" class="form-control" name="name_cotAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
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
                                    <input type="text" class="form-control" name="name_medAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
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
                                    <input type="text" class="form-control" name="name_larAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
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
                                    <textarea rows="4" cols="6" class="form-control" name="name_texareaPropo" data-validate="required" data-message-required="<?php echo "Requerido" ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                             <label class="col-sm-3 control-label"><b><?php echo "Estrategias de Evaluaci&oacute;n" ?></b></label>
                            </div>
                            <div id="tecnicas" class="panel-group col-sm-12 " >
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="tecnicas" href="#collapseOnetecnicas" style="display:block;">T&eacute;cnicas <span class="caret"></span>
                                    </a>
                                </div>
                                <div style="height: 0px;" id="collapseOnetecnicas" class="panel-collapse collapse col-sm-12">
                                    <div class="form-group col-sm-12">
                                        <label class="col-sm-3"><?php echo "Mapas de Concepto " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3" ><?php echo "Mapa Mental " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Producciones Orales " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Producciones Escritas " ?><input type="checkbox"  name="name_chk"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="instrumentos" class="panel-group col-sm-12 ">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#instrumentos" href="#collapseOne" style="display:block;">Instrumentos <span class="caret"></span>
                                    </a>
                                </div>
                                <div style="height: 0px;" id="collapseOne" class="panel-collapse collapse col-sm-12">
                                    <div class="form-group col-sm-12">
                                        <label class="col-sm-3"><?php echo "Escala de estimaci&oacute;n " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3" ><?php echo "Lista de Cotejo " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Registro Diario " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Regsitro Descriptivo " ?><input type="checkbox"  name="name_chk"></label>
                                    </div>
                                </div>
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
<?php } ?>
<!-- FIN PROYECTO PEDAGOGICO INICIAL -->
<!-- PROYECTO PEDAGOGICO PRIMARIA -->
<?php if($id_nivel_educativo == 2){ ?>
<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo "Proyectos"?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo"Agregar Proyecto"?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo "Sección"?></div></th>
                            <th><div><?php echo "Docente"?></div></th>
                            <th><div><?php echo "Momento o Lapso"?></div></th>
                            <th><div><?php echo "Nombre de Proyecto"?></div></th>
                            <th><div><?php echo "Opciones"?></div></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $count = 1; foreach($classes as $row):?>
                        <tr>
                            <td>Segundo Grado A</td>
                            <td>Norwill</td>
                            <td>1er Momento o Lapso</td>
                            <td>Nacimiento del Planeta Tierra</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Acción <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_exam/');">
                                                <i class="entypo-pencil"></i>
                                                    <?php echo "Editar"?>
                                            </a>
                                        </li>
                                        <li class="divider"></li>

                                        <!-- DELETION LINK -->
                                        <li>
                                            <a href="#" onclick="confirm_modal('<?php echo base_url().$this->session->userdata('login_type');?>/exam/delete/');">
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
            <!----TABLE LISTING ENDS--->
            <!----CREATION FORM STARTS FOR PRIMARIA---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/exam/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">

                                <label class="col-sm-3 control-label"><?php echo "Proyecto"?></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Sección"?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;">
                                        <?php
                                        $sections = $this->db->get_where('secciones' , array('id_grado' => $class_id))->result_array();
                                        file_put_contents('aa.txt', $class_id);
                                        foreach($sections as $row):
                                        ?>
                                            <option value="<?php echo $row['id_seccion'];?>"><?php echo $row['nombre_seccion'];?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Lapso"?></label>
                                <div class="col-sm-5">
                                    <select name="class_lapso" class="form-control" style="width:100%;">
                                        <option value="<?php echo "" ?>"><?php echo "1er Momento o Lapso";?></option>
                                        <option value="<?php echo "" ?>"><?php echo "2do Momento o Lapso";?></option>
                                        <option value="<?php echo "" ?>"><?php echo "3er Momento o Lapso";?></option>

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
                                    <input type="text" class="form-control" name="name_cotAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
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
                                    <input type="text" class="form-control" name="name_medAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
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
                                    <input type="text" class="form-control" name="name_larAlc" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
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
                                    <textarea rows="4" cols="6" class="form-control" name="name_texareaPropo" data-validate="required" data-message-required="<?php echo "Requerido" ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                             <label class="col-sm-3 control-label"><b><?php echo "Estrategias de Evaluaci&oacute;n" ?></b></label>
                            </div>
                            <div id="tecnicas" class="panel-group col-sm-12 " >
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="tecnicas" href="#collapseOnetecnicas" style="display:block;">T&eacute;cnicas <span class="caret"></span>
                                    </a>
                                </div>
                                <div style="height: 0px;" id="collapseOnetecnicas" class="panel-collapse collapse col-sm-12">
                                    <div class="form-group col-sm-12">
                                        <label class="col-sm-3"><?php echo "Mapas de Concepto " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3" ><?php echo "Mapa Mental " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Producciones Orales " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Producciones Escritas " ?><input type="checkbox"  name="name_chk"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="instrumentos" class="panel-group col-sm-12 ">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#instrumentos" href="#collapseOne" style="display:block;">Instrumentos <span class="caret"></span>
                                    </a>
                                </div>
                                <div style="height: 0px;" id="collapseOne" class="panel-collapse collapse col-sm-12">
                                    <div class="form-group col-sm-12">
                                        <label class="col-sm-3"><?php echo "Escala de estimaci&oacute;n " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3" ><?php echo "Lista de Cotejo " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Registro Diario " ?><input type="checkbox"  name="name_chk"></label>
                                        <label class="col-sm-3"><?php echo "Regsitro Descriptivo " ?><input type="checkbox"  name="name_chk"></label>
                                    </div>
                                </div>
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
<?php } ?>
<!--- FIN PROYECTO PEDAGOGICO PRIMARIA -->
<!---  DATA TABLE EXPORT CONFIGURATIONS -->
<script type="text/javascript">

    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable();

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });

        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_sections_level/3' ,
            success: function(response)
            {
                var result = JSON.parse(response)

                for(var x in result){

                    console.log(result[x]['id_seccion']);

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


</script>