
            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_teacher_add/');"
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo "Agregar Docente";?>
                </a>
                <br><br>
               <table class="table table-bordered datatable" id="table_export">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo "Foto"?></div></th>
                            <th><div><?php echo "Cédula de Identidad" ?></div></th>
                            <th><div><?php echo "Apellidos y Nombres" ?></div></th>
                            <th><div><?php echo "Correo"?></div></th>
                            <th><div><?php echo "Opciones"?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $this->db->order_by("cedula_identidad", "asc");
                                $teachers	 = $this->db->where('id_escuela', $this->config->item('id_school'))->get('vteachers')->result_array();
                                foreach($teachers as $row):?>
                        <tr>
                            <td><img src="<?php echo $this->crud_model->get_image_url('teacher',$row['teacher_id']);?>" class="img-circle" width="30" /></td>
                            <td><?php echo $row['cedula_identidad'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Acción <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                        <!-- teacher EDITING LINK -->
                                        <li>
                                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_teacher_edit/<?php echo $row['teacher_id'];?>/<?php echo $row['id_escuela'];?>');">
                                            	<i class="entypo-pencil"></i>
					<?php echo "Editar"?>
                                               	</a>
			     </li>
                                        <li class="divider"></li>

                                        <!-- teacher DELETION LINK -->
                                        <li>
                                        	<a href="#" onclick="delete_modal('<?php echo base_url().$this->session->userdata('login_type');?>/teacher/delete/<?php echo $row['teacher_id'];?>');">
                                            	<i class="entypo-trash"></i>
                                                    <?php echo "Anular"?>
                                               	</a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($)
	{


		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [

					{
						"sExtends": "csv",
						"mColumns": [1,2,3]
					},
					{
						"sExtends": "pdf",
						"mColumns": [1,2,3]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(3, false);

							this.fnPrint( true, oConfig );

							window.print();

							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(3, true);
								  }
							});
						},

					},
				]
			},

		});

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});

</script>

