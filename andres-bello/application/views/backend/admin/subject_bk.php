<div class="row">
	<div class="col-md-12">
<?php if ($class_id == '3' || $class_id == '4' || $class_id == '5' || $class_id == '6' || $class_id == '7' || $class_id == '8' || $class_id == '9'   ){?>
    	<!------CONTROL TABS START------>
                        <ul class="nav nav-tabs bordered">
                            <li class="active">
                                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
                                    <?php echo "Asignaturas"?>
                                        </a></li>
                            <li>
                                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                                    <?php echo"Agregar"?>
                                        </a></li>
                        </ul>
    	<!------CONTROL TABS END------>
    	<?php }else{?>

    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
					<?php echo "Asignaturas"?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo"Agregar"?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
    	<?php }?>
<?php if ($class_id == '3' || $class_id == '4' || $class_id == '5' || $class_id == '6' || $class_id == '7' || $class_id == '8' || $class_id == '9'   ){?>

<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">

                <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo "Sección"?></div></th>
                            <th><div><?php echo "Asignatura"?></div></th>
                            <th><div><?php echo "Docente"?></div></th>
                            <th><div><?php echo "Opciones"?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($subjects as $row):?>
                        <tr>
                            <td><?php echo $this->crud_model->get_type_section_by_id('secciones',$row['class_id']);?></td>
                            <td><?php echo $this->crud_model->get_type_name_by_id('asignatura',$row['id_asignatura']);?></td>
                            <td><?php echo $this->crud_model->get_type_name_by_id('teacher',$row['teacher_id']);?></td>

                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Acción <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_subject/<?php echo $row['subject_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo "Editar"?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>

                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url().$this->session->userdata('login_type');?>/subject/delete/<?php echo $row['subject_id'];?>/<?php echo $class_id;?>');">
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
<?php }else{?>
<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">

                <table class="table table-bordered datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div><?php echo "Sección"?></div></th>
                    		<th><div><?php echo "Asignatura"?></div></th>
                    		<th><div><?php echo "Docente"?></div></th>
                    		<th><div><?php echo "Opciones"?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($subjects as $row):?>
                        <tr>
							<td><?php echo $this->crud_model->get_type_section_by_id('secciones',$row['class_id']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('asignatura',$row['id_asignatura']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('teacher',$row['teacher_id']);?></td>

							<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Acción <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_subject/<?php echo $row['subject_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo "Editar"?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>

                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url().$this->session->userdata('login_type');?>/subject/delete/<?php echo $row['subject_id'];?>/<?php echo $class_id;?>');">
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

<?php }?>

<?php if ($class_id == '3' || $class_id == '4' || $class_id == '5' || $class_id == '6' || $class_id == '7' || $class_id == '8' || $class_id == '9'   ){
                                $nombre = 'Proyecto';
                                 ?>
                                 <!----CREATION FORM STARTS FOR PRIMARIA---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url().$this->session->userdata('login_type').'/proyecto/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">

                                <label class="col-sm-3 control-label"><?php echo $nombre?></label>

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
                                        //file_put_contents('aa.txt', $class_id);
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
                                    <textarea rows="4" cols="6" class="form-control" name="name_texareaActGen" data-validate="required" data-message-required="<?php echo "Requerido" ?>"></textarea>
                                </div>
                            </div>

                            <div class="form-group ">
                             <label class="col-sm-3 control-label"><b><?php echo "Estrategias de Evaluaci&oacute;n" ?></b></label>
                            </div>



                        <div class="panel-group joined" id="accordion-test-2">
                                                        <div class="panel panel-default">
                                <div class="panel-heading">
                		<h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-test-2" href="#collapse10">
                                            <i class="entypo-calendar"></i>  T&eacute;cnicas                                 </a>
                                    </h4>
                                </div>
                                <div style="height: 0px;" id="collapse10" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table table-bordered" border="0" cellpadding="0" cellspacing="0">
                                           <?php
										$est_eva_tecnicas =$this->db->get_where('est_eva_tecnicas', array('est_eva_tecnica_activo' => '1'))->result_array();
										foreach($est_eva_tecnicas as $row):
										?>
                                        <label class="col-sm-3" ><?php echo $row['est_eva_tecnica_nomb']; ?>&nbsp; <input type="checkbox" name="<?php echo 'chkTec_'.$row['est_eva_tecnica_id'];?>"></label>


                                        <?php
										endforeach;
										?>
                                            </table>

                                    </div>
                                </div>
                            </div>

						                <div class="panel-group joined" id="accordion-test-3">
                                                        <div class="panel panel-default">
                                <div class="panel-heading">
                		<h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion-test-3" href="#collapse3">
                                            <i class="entypo-calendar"></i> Instrumentos                                 </a>
                                    </h4>
                                </div>
                                <div style="height: 0px;" id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table table-bordered" border="0" cellpadding="0" cellspacing="0">
                                            <?php
										$est_eva_instrumentos =$this->db->get_where('est_eva_inst', array('est_eva_inst_activo' => '1'))->result_array();
										foreach($est_eva_instrumentos as $row):
										?>
                                        <label class="col-sm-3" ><?php echo $row['est_eva_inst_nomb']; ?>&nbsp; <input type="checkbox" name="<?echo 'chkTec_'.$row['est_eva_inst_id'];?>"></label>


                                        <?php
										endforeach;
										?>
                                            </table>

                                    </div>
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








                                 <?php }else{
                                 $nombre = 'Nombre';?>
                                 <!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url().$this->session->userdata('login_type').'/subject/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Asignatura" ?></label>
                                <div class="col-sm-5">
                                    <select name="id_asignatura" class="form-control" style="width:100%;" required>
                                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                        <?php
                                        $asignaturas = $this->db->get_where('asignatura' , array('id_grado' => $class_id))->result_array();
                                        foreach($asignaturas as $row):
                                        ?>
                                            <option value="<?php echo $row['asignatura_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Sección"?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;" required>
                                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                        <?php
                                        $sections = $this->db->get_where('secciones' , array('id_grado' => $class_id))->result_array();
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
                                <label class="col-sm-3 control-label"><?php echo "Docente"?></label>
                                <div class="col-sm-5">
                                    <select name="teacher_id" class="form-control" style="width:100%;" required>
                                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
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
                                <label class="col-sm-3 control-label"><?php echo "Color"?></label>
                                <div class="col-sm-5">
                                    <select style="display: none;" id="colorselector" name="color">
                                        <option value="#A0522D" data-color="#A0522D">sienna</option>
                                        <option value="#CD5C5C" data-color="#CD5C5C">indianred</option>
                                        <option value="#FF4500" data-color="#FF4500">orangered</option>
                                        <option value="#008B8B" data-color="#008B8B">darkcyan</option>
                                        <option value="#B8860B" data-color="#B8860B">darkgoldenrod</option>
                                        <option value="#32CD32" data-color="#32CD32">limegreen</option>
                                        <option value="#FFD700" data-color="#FFD700">gold</option>
                                        <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
                                        <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
                                        <option value="#FF69B4" data-color="#FF69B4">hotpink</option>
                                        <option value="#CD5C5C" data-color="#CD5C5C">indianred</option>
                                        <option value="#87CEFA" data-color="#87CEFA">lightskyblue</option>
                                        <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
                                        <option value="#DC143C" data-color="#DC143C">crimson</option>
                                        <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
                                        <option value="#C71585" data-color="#C71585">mediumvioletred</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <?php if ($class_id == '5' ){?>
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
                        <?php }?>
                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo "Agregar Asignatura"?></button>
                              </div>
						   </div>
                    </form>
                </div>
			</div>
			<!----CREATION FORM ENDS-->



                                 <?php }?>



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

                        $('#colorselector').colorselector();
	});

</script>