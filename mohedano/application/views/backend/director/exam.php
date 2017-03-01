<!--- NIVEL EDUCATIVO MEDIA -->
<?php if($id_nivel_educativo == 3){ ?>
<div class="row">
	<div class="col-md-12">
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#resumen" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo "Resumen"?>
                </a>
            </li>
            <?php $firts_section_set = false; ?>
            <?php $count = 1; foreach($classes as $row):?>
                <?php
                    if($firts_section_set == false){
                        $firts_section = $row['id_seccion'];
                        $firts_section_set = true;
                    }
                ?>
    			<li >
                	<a href="#list_<?php echo $row['id_seccion'];?>" data-toggle="tab">
    					<?php echo $row['abreviacion_seccion'];?>
                    </a>
                </li>
            <?php endforeach;?>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                	<?php echo "Agregar Actividad"?>
                </a>
            </li>
		</ul>
    	<!------CONTROL TABS END------>
		<div class="tab-content">
            <!----RESUME STARTS---->
            <div class="tab-pane box active" id="resumen" style="padding: 5px">
                <div class="box-content">
                    <table  class="table table-bordered datatable" id="table_export">
                        <thead>
                            <tr>
                                <th><div><?php echo "Sección"?></div></th>
                                <th><div><?php echo "% Culminado"?></div></th>
                                <th><div><?php echo "% Por Culminar"?></div></th>
                                <th><div><?php echo "Promedio de Notas"?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($classes as $row_class):?>
                            <tr>
                                <td><?php echo $row_class['nombre_seccion'];?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!----RESUME ENDS-->
            <!----SECCIONES---->
            <?php foreach($classes as $row_two):?>
                <div class="tab-pane box" id="list_<?php echo $row_two['id_seccion'];?>">
                    <table  class="table table-bordered datatable" id="table_export_<?php echo $row_two['id_seccion'];?>">
                        <thead>
                            <tr>
                                <th><div><?php echo "Objetivo"?></div></th>
                                <th><div><?php echo "Contenido"?></div></th>
                                <th><div><?php echo "Técnicas"?></div></th>
                                <th><div><?php echo "Actividades"?></div></th>
                                <th><div><?php echo "Recursos"?></div></th>
                                <th><div><?php echo "Actividad de Evaluación"?></div></th>
                                <th><div><?php echo "Instrumento"?></div></th>
                                <th><div><?php echo "Ponderacion"?></div></th>
                                <th><div><?php echo "Fecha de Evaluación" ?></div></th>
                                <th><div><?php echo "Opciones"?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $exams_section = $this->db->get_where('exam', array('id_seccion' => $row_two['id_seccion']))->result_array();
                            foreach($exams_section as $row):?>
                            <tr>
                                <td><?php echo $row['objetivo'];?></td>
                                <td><?php echo $row['contenido'];?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('tecnicas_planificacion_media' , $row['id_tecnica']) ; ?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('actividades_planificacion_media' , $row['id_actividad']) ; ?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('recursos_planificacion_media' , $row['id_recurso']) ; ?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('evaluacion_planificacion_media' , $row['id_evaluacion']) ; ?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('instrumento_planificacion_media' , $row['id_instrumento']) ; ?></td>
                                <td><?php echo $row['valor_ponderacion'];?></td>
                                <td><?php echo $row['fecha_examen'];?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Acción <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                            <!-- EDITING LINK -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_exam/<?php echo $row['exam_id'];?>');">
                                                    <i class="entypo-pencil"></i>
                                                        <?php echo "Editar"?>
                                                </a>
                                            </li>
                                            <li class="divider"></li>

                                            <!-- DELETION LINK -->
                                            <li>
                                                <a href="#" onclick="confirm_modal('<?php echo base_url().$this->session->userdata('login_type');?>/exam/delete/<?php echo $row['exam_id'];?>');">
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
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'admin/exam/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado" ?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;"
                                        onchange="return get_class_section(this.value)">
                                        <option value=""><?php echo "Seleccione grado"?></option>
                                        <?php
                                        $this->db->where('id_nivel_educativo' , $id_nivel_educativo);
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
                                <label class="col-sm-3 control-label"><?php echo "Proyecto"?></label>
                                <div class="col-sm-5">
                                    <select name="id_tecnica[ ]" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" onchange="return get_class_tec_ins(this.value)" >
                                        <option value="0">Seleccione ...</option>
                                        <?php
                                        $projects = $this->db->get_where('proyecto_primaria', array('grado_id' => '4'))->result_array();
                                        // $projects = $this->db->get_where('proyecto_primaria', array('grado1' => $param2))->result_array();


                                        ?>

                                        <?php foreach($projects as $row):?>
                                                <option value="<?php echo $row['proyecto_id'];?>" >
                                                    <?php echo $row['proyecto_nombre'];?>
                                                </option>
                                        <?php endforeach;?>
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
                                    <select multiple="multiple" name="id_tecnica[ ]" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
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
                                    <select name="id_actividad[ ]" multiple="multiple" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
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
                                    <select name="id_recurso[ ]" multiple="multiple" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
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
                                    <select name="id_evaluacion[ ]" multiple="multiple" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
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
                                    <select name="id_instrumento[]" class="form-control" data-validate="required" data-message-required="<?php echo "Requerido"?>" >
                                        <option value="0">Seleccione ...</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Ponderación"?></label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="valor_ponderacion" data-validate="required" data-message-required="<?php echo "Requerido"?>"/>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="porcentaje_ponderacion" readonly />
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
                                  <button type="submit" class="btn btn-info"><?php echo "Agregar Examen"?></button>
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
<!--- FIN NIVEL EDUCATIVO MEDIA -->
<!--- NIVEL EDUCATIVO PRIMARIA -->
<?php if($id_nivel_educativo == 2){ ?>
<div class="row">
    <div class="col-md-12">
        <!--- CONTROL TABS START -->
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
        <!--- CONTROL TABS END -->
        <div class="tab-content">
            <!--- TABLE LISTING STARTS -->
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
            <!--- TABLE LISTING ENDS -->
            <!--- CREATION FORM STARTS FOR PRIMARIA -->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'admin/exam/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
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
                                <label class="col-sm-3 control-label"><?php echo "Maestro"?></label>
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
            <!--- CREATION FORM ENDS -->
        </div>
    </div>
</div>
<?php } ?>
<!--- FIN NIVEL EDUCATIVO PRIMARIA -->
<!--- DATA TABLE EXPORT CONFIGURATIONS -->
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


    function get_class_section(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);
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