<div class="row">
    <div class="col-md-12">
        <!-- CONTROL TABS START -->
        <ul class="nav nav-tabs bordered">
        <li class="active">
        <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
        <?php echo "Grados" ?>
        </a></li>
        <li>
        <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
        <?php echo "Agregar Grado" ?>
        </a></li>
        </ul>
        <!-- CONTROL TABS END -->
        <div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
                <table class="table table-bordered datatable" id="table_export">
                	<thead>
                        <tr>
                            <th><div>#</div></th>
                            <th><div><?php echo "Nombre" ?></div></th>
                            <th><div><?php echo "Abreviación" ?></div></th>
                            <th><div><?php echo "Docente" ?></div></th>
                            <th><div><?php echo "Opciones" ?></div></th>
                        </tr>
		</thead>
                        <tbody>
                    	<?php $count = 1; foreach($classes as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['nombre_grado'];?></td>
                            <td><?php echo $row['abreviacion_grado'];?></td>
                            <td><?php echo $this->crud_model->get_type_name_by_id('teacher',1);?></td>
                            <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Acción <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                    <!-- EDITING LINK -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_edit_class/<?php echo $row['id_grado'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo "Editar" ?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>

                                    <!-- DELETION LINK -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/classes/delete/<?php echo $row['id_grado'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo "Eliminar" ?>
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


			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'admin/classes/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Nombre" ?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo "Requerido" ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo "Abreviación"?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name_numeric"/>
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
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo "Agregar Grado"?></button>
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
	});

</script>