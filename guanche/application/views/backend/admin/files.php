
<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <th><div><?php echo "ID" ?></div></th>
            <th><div><?php echo "Archivo" ?></div></th>
        </tr>
    </thead>
    <tbody>
            <?php
                if(count($archivos) >= 2){
                    for ($i=0; $i < count($archivos); $i++) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo ($i + 1);?></td>
                            <td>
                                <a href="<?php echo base_url().$carpeta.'/'.$archivos[$i];?>" target="_blank" >
                                    <i class="entypo-download"></i>
                                    <?php echo $archivos[$i];?>
                                </a>
                            </td>
                        </tr>
            <?php } }?>
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

				]
			},

		});

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});

</script>

