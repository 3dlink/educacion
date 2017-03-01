<div class="row">
	<div class="col-md-12">
<?php if ($class_id == '3' || $class_id == '4' || $class_id == '5' || $class_id == '6' || $class_id == '7' || $class_id == '8' || $class_id == '9'   ){?>
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
					<?php echo "Proyectos"?>
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
                            <th><div><?php echo "Asignatura"?></div></th>
                            <th><div><?php echo "Abreviación"?></div></th>
                            <th><div><?php echo "Abreviación Boletin"?></div></th>
                            <th><div><?php echo "Comentario"?></div></th>
                            <th><div><?php echo "Color"?></div></th>
                            <th><div><?php echo "Opciones"?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($subjects as $row):?>
                        <tr>
                            <td><?php echo $this->crud_model->get_type_name_by_id('asignatura',$row['id_asignatura']);?></td>
                            <td><?php echo $row['abreviacion']; ?></td>
                            <td><?php echo $row['abreviacion_boletin']; ?></td>
                            <td><?php echo $row['comentario']; ?></td>
                            <td><?php echo $row['color']; ?></td>

                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Acción <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_subject/<?php echo $row['asignatura_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo "Editar"?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>

                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url().$this->session->userdata('login_type');?>/subject/delete/<?php echo $row['asignatura_id'];?>/<?php echo $class_id;?>');">
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
                            <th><div><?php echo "Asignatura"?></div></th>
                            <th><div><?php echo "Abreviación"?></div></th>
                            <th><div><?php echo "Abreviación Boletin"?></div></th>
                            <th><div><?php echo "Educacion Trabajo"?></div></th>
                            <th><div><?php echo "Comentario"?></div></th>
                            <th><div><?php echo "Color"?></div></th>
                            <th><div><?php echo "Opciones"?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($subjects as $row):?>
                        <tr>
                            <td><?php echo $this->crud_model->get_type_name_by_id('asignatura',$row['asignatura_id']);?></td>
                            <td><?php echo $row['abreviacion']; ?></td>
                            <td><?php echo $row['abreviacion_boletin']; ?></td>
                            <?php  if ($row['educacion_trabajo'] != 0){ $activo = '<i class="fa fa-check" style = "color: green; "></i>';} else { $activo = '<i class="fa fa-times" style = "color: red; "></i>';}    ?>
                            <td align="center"><?php echo $activo;?> </td>
                            <td><?php echo $row['comentario']; ?></td>
                            <td><?php echo $row['color']; ?></td>

                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Acción <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_subject/<?php echo $row['asignatura_id'];?>/<?php echo $nivel_grado ;?> ');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo "Editar"?>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/subject/delete/<?php echo $row['asignatura_id'];?>/<?php echo $class_id ;?>');">
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
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/subject/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Asignatura" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado"?></label>
                                <div class="col-sm-5">
                                    <select name="id_grado" class="form-control" style="width:100%;" required>
                                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                        <?php
                                        $sections = $this->db->get_where('vniveleducativogrado' , array('id_nivel_educativo' => $nivel_grado, 'id_escuela' => $id_escuela))->result_array();
                                        foreach($sections as $row):
                                        ?>
                                            <option value="<?php echo $row['id_grado'];?>"><?php echo $row['nombre_grado'];?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Abreviación" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="abreviacion" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Abreviación Boletin" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="abreviacion_boletin" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Comentario" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="comentario" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
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

                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo "Agregar Asignatura"?></button>
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
                    <?php echo form_open(base_url().$this->session->userdata('login_type').'/subject/create/'.$class_id , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Asignatura" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Grado"?></label>
                                <div class="col-sm-5">
                                    <select name="id_grado" class="form-control" style="width:100%;" required>
                                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                        <?php
                                        $sections = $this->db->get_where('vniveleducativogrado' , array('id_nivel_educativo' => $nivel_grado, 'id_escuela' => $id_escuela))->result_array();
                                        foreach($sections as $row):
                                        ?>
                                            <option value="<?php echo $row['id_grado'];?>"><?php echo $row['nombre_grado'];?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Abreviación" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="abreviacion" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Abreviación Boletin" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="abreviacion_boletin" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Comentario" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" required minlength="" class="form-control" name="comentario" data-validate="required" data-message-required="<?php echo "Requerido"?>" value="" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Educación para el Trabajo"?></label>
                                <div class="col-sm-5">
                                    <label><input type="hidden" name="educacion_trabajo" value="0"></label>
                                    <label><input type="checkbox" name="educacion_trabajo" value="1"></label>
                                </div>
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