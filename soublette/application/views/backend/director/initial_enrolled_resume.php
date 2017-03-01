<?php
setlocale(LC_TIME, "es_VE");
date_default_timezone_set('America/Caracas');
?>
    <br><br>
    <div class="showTableResumen" >
        <table class="table table-bordered datatable showTableResumen" id="table_export" >
            <thead>
                <tr>
                    <th width="20">ID</th>
                    <th width="80"><div>Grado y Sección</div></th>
                    <th width="80"><div>Varones</div></th>
                    <th width="80"><div>Hembras</div></th>
                    <th width="80"><div>Total</div></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($estudiantes as $row): ?>
                      <tr>
                          <td style="text-align: center;"><?php echo $row['id_grado'];?></td>
                          <td style="text-align: center;"><?php echo $this->crud_model->get_type_section_by_id('secciones',$row['SeccionACursar']);?></td>
                          <td style="text-align: center;"><?php echo $row['Masculino'];?></td>
                          <td style="text-align: center;"><?php echo $row['Femenino'];?></td>
                          <td style="text-align: center;"><?php echo $row['Total'];?></td>
                      </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                      <tr>
                          <td style="text-align: center;"></td>
                          <td style="text-align: center;"><strong>Totales</strong></td>
                          <td style="text-align: center;"><strong><?php echo $TotalMasculino;?></strong></td>
                          <td style="text-align: center;"><strong><?php echo $TotalFemenino;?></strong></td>
                          <td style="text-align: center;"><strong><?php echo $TotalGeneral;?></strong></td>
                      </tr>
            </tfoot>
        </table>
    </div>


<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">
    jQuery(document).ready(function($)
    {
        var countFieldsToShow = 0;
        var parametersArray = [];

        var datatable = $("#table_export").dataTable({
            "sPaginationType": "bootstrap",
            "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
            "oTableTools": {
                "aButtons": [
                    {
                        "sExtends": "xls"
                    },
                    {
                        "sExtends": "pdf"
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