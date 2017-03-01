<div class="tab-pane box" id="datosGuanche">
    <div class="box-content">
        <table class="table table-bordered datatable" id="table_export_guanche">
            <thead>
                <tr>
                    <th width="80"><div>Grado</div></th>
                    <th width="80"><div>Total Inscritos</div></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $total_inscritos_guanche = 0;
                    foreach($inscritos_guanche as $row):?>
                        <tr>
                            <td><?php echo $row['nombre_grado'];?></td>
                            <td><?php echo $row['TotalGrado'];?></td>
                            <?php $total_inscritos_guanche = $total_inscritos_guanche + $row['TotalGrado']; ?>
                        </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                <tr>
                    <th width="80"><div>Total</div></th>
                    <th width="80"><div><?php echo $total_inscritos_guanche;?></div></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export_guanche").dataTable({
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
                        "fnSetText"    : "Press 'esc' to return",
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
