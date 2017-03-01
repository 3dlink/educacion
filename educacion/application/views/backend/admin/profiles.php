
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_perfiles_add/');"
   class="btn btn-primary pull-right">
   <i class="entypo-plus-circled"></i>
   <?php echo "Agregar un Perfil";?>
</a>
<br><br>
<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th ><div><?php echo "Perfil"?></div></th>
            <th><div><?php echo "Descripci&oacute;n" ?></div></th>
            <th><div><?php echo "Propiedades"?></div></th>
            <th><div><?php echo "Usuarios Asignados"?></div></th>
            <th><div><?php echo "Activo"?></div></th>
            <th><div><?php echo "Acci&oacute;n"?></div></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $perfiles	=	$this->db->get('perfil' )->result_array();
        foreach($perfiles as $row):?>

        <td><?php echo $row['nombre']?></td>
        <td><?php echo $row['descripcion'];?></td>
        <td></td>
        <td></td>
        <?php  if ($row['registro_activo'] != 0){ $activo = '<i class="fa fa-check" style = "color: green; "></i>';} else { $activo = '<i class="fa fa-times" style = "color: red; "></i>';}    ?>
        <td style="text-align: center;"><?php echo $activo;?></td>
        <td>

            <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                    Acci&oacute;n <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                    <!-- teacher EDITING LINK -->
                    <li>
                       <a href="#" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/modal_perfiles_edit/<?php echo $row['id_perfil'];?>');">
                           <i class="entypo-pencil"></i>
                           <?php echo "Editar"?>
                       </a>
                   </li>
                   <li class="divider"></li>

                   <!-- teacher DELETION LINK -->
                        <li>
                            <?php  if ($row['registro_activo'] != 0){ ?>
                                <a href="#" onclick="deactivate_modal('<?php echo base_url().$this->session->userdata('login_type');?>/profiles/delete/<?php echo $row['id_perfil'];?>');">
                                    <i class="entypo-trash"></i>
                                        <?php echo "Desactivar"?>
                                </a>
                            <?php }else{ ?>
                                <a href="#" onclick="activate_modal('<?php echo base_url().$this->session->userdata('login_type');?>/profiles/activate/<?php echo $row['id_perfil'];?>');">
                                    <i class="entypo-check"></i>
                                        <?php echo "Activar"?>
                                </a>
                            <?php } ?>
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
                  "sExtends": "xls",
                  "mColumns": [1,2]
              },
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

