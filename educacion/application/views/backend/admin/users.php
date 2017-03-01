
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_usuario_add/');"
	class="btn btn-primary pull-right">
    <i class="entypo-plus-circled"></i>
	<?php echo "Agregar Usuario";?>
</a>
<br><br>
<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th width="80"><div><?php echo "Foto"?></div></th>
            <th><div><?php echo "Nombre y Apellidos" ?></div></th>
            <th><div><?php echo "Usuario"?></div></th>
            <th><div><?php echo "Correo"?></div></th>
            <th><div><?php echo "Activo"?></div></th>
            <th><div><?php echo "Opciones"?></div></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $usuarios	=	$this->db->get('usuarios' )->result_array();
            foreach($usuarios as $row):?>
        <tr>
            <td>
            <img src="<?php echo $this->crud_model->get_image_url('usuarios',$row['id_usuario']);?>" class="img-circle" width="30" />
            </td>
            <?php $this->db->where('id_persona', $row['id_persona']);
				$persona =$this->db->get('personas' )->result_array();
				foreach ($persona as $rowP){
				$persona['nombre'] = $rowP['primer_nombre'].' '.$rowP['segundo_nombre'].' '.$rowP['primer_apellido'].' '.$rowP['segundo_apellido'];
				}
				?>

            <td><?php echo $persona['nombre'] ;?></td>
            <td><?php echo $row['usuario'];?></td>
            <td><?php echo $row['correo_electronico'];?></td>
            <?php  if ($row['registro_activo'] != 0){ $activo = '<i class="fa fa-check" style = "color: green; "></i>';} else { $activo = '<i class="fa fa-times" style = "color: red; "></i>';}    ?>
            <td align="center"><?php echo $activo;?> </td>
            <td>

                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Acción <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                        <!-- teacher EDITING LINK -->
                        <li>
                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_usuario_edit/<?php echo $row['id_usuario'];?>');">
                            	<i class="entypo-pencil"></i>
									<?php echo "Editar"?>
                           	</a>
        				</li>
                        <li class="divider"></li>

                        <!-- teacher DELETION LINK -->
                        <li>
                            <?php  if ($row['registro_activo'] != 0){ ?>
                                <a href="#" onclick="deactivate_modal('<?php echo base_url().$this->session->userdata('login_type');?>/users/delete/<?php echo $row['id_usuario'];?>');">
                                    <i class="entypo-trash"></i>
                                        <?php echo "Desactivar"?>
                                </a>
                            <?php }else{ ?>
                                <a href="#" onclick="activate_modal('<?php echo base_url().$this->session->userdata('login_type');?>/users/activate/<?php echo $row['id_usuario'];?>');">
                                    <i class="entypo-check"></i>
                                        <?php echo "Activar"?>
                                </a>
                            <?php } ?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" onclick="password_default_modal('<?php echo base_url().$this->session->userdata('login_type');?>/users/password_default/<?php echo $row['id_usuario'];?>');">
                                <i class="entypo-pencil"></i>
                                    <?php echo "Clave Default"?>
                            </a>
                        </li>                        
                    </ul>
                </div>

            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<!--  DATA TABLE EXPORT CONFIGURATIONS -->
<script type="text/javascript">
	jQuery(document).ready(function($)
	{

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [

					{
						"sExtends": "pdf",
						"mColumns": [1,2]
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