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
            <!----CREATION FORM STARTS---->
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
            <!----CREATION FORM ENDS-->
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
                	<?php echo form_open(base_url().$this->session->userdata('login_type').'/exam/'.$id_nivel_educativo.'/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
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
                                <label class="col-sm-3 control-label"><?php echo "Instrumento"?></label>
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



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
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
</script>