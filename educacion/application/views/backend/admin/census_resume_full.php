    <?php
    $this->load->model('Censo/Censo');
    $this->load->model('Censo/Censo_grado');
    $this->load->model('Censo/Resumen_censo_full');

    $estudiantes = Resumen_censo_full::orderBy('escuela')->get();

    ?>
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th width="80"><div>Escuela</div></th>
                <th width="80"><div>Residente</div></th>
                <th width="80"><div>No Residente</div></th>
                <th width="80"><div>Totales</div></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $total_residentes = 0;
                $total_no_residentes = 0;
                foreach($estudiantes as $row):?>
                    <tr>
                        <td><?php echo $row['escuela'];?></td>
                        <td>
                            <?php
                                echo $row['total_residentes'];
                                $total_residentes = $total_residentes + $row['total_residentes'];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $row['total_no_residentes'];
                                $total_no_residentes = $total_no_residentes + $row['total_no_residentes'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row['total_residentes'] + $row['total_no_residentes'];?>
                        </td>
                    </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <th width="80"><div>Totales</div></th>
                <th width="80"><div><?php echo $total_residentes;?></div></th>
                <th width="80"><div><?php echo $total_no_residentes;?></div></th>
                <th width="80"><div><?php echo $total_residentes + $total_no_residentes;?></div></th>
            </tr>
        </tfoot>
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
