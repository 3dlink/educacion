    <?php
    $this->load->model('Censo/Resumen_censo');
    $estudiantes = Resumen_censo::orderBy('id_grado')->get();
    ?>
    <br><br>
    <table class="table table-bordered datatable" id="table_export">
        <thead>
            <tr>
                <th width="40" rowspan="2"><div>ID</div></th>
                <th width="60" rowspan="2"><div>Grado</div></th>
                <th width="80" colspan="3"><div style="text-align: center;">UEM Andrés Bello</div></th>
                <th width="80" colspan="3"><div style="text-align: center;">UEM Juan de Dios Guanche</div></th>
                <th width="80" colspan="3"><div style="text-align: center;">UEMI Carlos Soublette</div></th>
                <th width="40" rowspan="2"><div>Total por Grado</div></th>
            </tr>
            <tr>
                <th>Residentes</th>
                <th>No Residentes</th>
                <th>No Residentes Empleado</th>
                <th>Residentes</th>
                <th>No Residentes</th>
                <th>No Residentes Empleado</th>
                <th>Residentes</th>
                <th>No Residentes</th>
                <th>No Residentes Empleado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $subtotal_ab_r = 0;
                $subtotal_ab_nr = 0;
                $subtotal_ab_nre = 0;
                $subtotal_cs_r = 0;
                $subtotal_cs_nr = 0;
                $subtotal_cs_nre = 0;
                $subtotal_jd_r = 0;
                $subtotal_jd_nr = 0;
                $subtotal_jd_nre = 0;
                foreach($estudiantes as $row):?>
                    <tr>
                        <td><?php echo $row['id_grado'];?></td>
                        <td><?php echo $row['nombre_grado'];?></td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_abello'] == 1){
                                    echo ($row['residente_andres_bello'] =='') ? '0' : $row['residente_andres_bello'];
                                    $subtotal_ab_r = $subtotal_ab_r + $row['residente_andres_bello'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_abello'] == 1){
                                    echo ($row['no_residente_andres_bello'] =='') ? '0' : $row['no_residente_andres_bello'];
                                    $subtotal_ab_nr = $subtotal_ab_nr + $row['no_residente_andres_bello'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_abello'] == 1){
                                    echo ($row['no_residente_empleado_andres_bello'] =='') ? '0' : $row['no_residente_empleado_andres_bello'];
                                    $subtotal_ab_nre = $subtotal_ab_nre + $row['no_residente_empleado_andres_bello'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_guanche'] == 1){
                                    echo ($row['residente_guanche'] =='') ? '0' : $row['residente_guanche'];
                                    $subtotal_jd_r = $subtotal_jd_r + $row['residente_guanche'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_guanche'] == 1){
                                    echo ($row['no_residente_guanche'] =='') ? '0' : $row['no_residente_guanche'];
                                    $subtotal_jd_nr = $subtotal_jd_nr + $row['no_residente_guanche'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_guanche'] == 1){
                                    echo ($row['no_residente_empleado_guanche'] =='') ? '0' : $row['no_residente_empleado_guanche'];
                                    $subtotal_jd_nre = $subtotal_jd_nre + $row['no_residente_empleado_guanche'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_soublette'] == 1){
                                    echo ($row['residente_soublette'] =='') ? '0' : $row['residente_soublette'];
                                    $subtotal_cs_r = $subtotal_cs_r + $row['residente_soublette'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_soublette'] == 1){
                                    echo ($row['no_residente_soublette'] =='') ? '0' : $row['no_residente_soublette'];
                                    $subtotal_cs_nr = $subtotal_cs_nr + $row['no_residente_soublette'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                if($row['activo_soublette'] == 1){
                                    echo ($row['no_residente_empleado_soublette'] =='') ? '0' : $row['no_residente_empleado_soublette'];
                                    $subtotal_cs_nre = $subtotal_cs_nre + $row['no_residente_empleado_soublette'];
                                }else{
                                    echo "0";
                                }
                            ?>
                        </td>
                        <td style="text-align: center;">
                            <?php
                                    if($row['activo_abello'] == 1){
                                        $total_grado_ab = $row['residente_andres_bello'] + $row['no_residente_andres_bello'];
                                    }else{
                                        $total_grado_ab = 0;
                                    }
                                    if($row['activo_guanche'] == 1){
                                        $total_grado_jd = $row['residente_guanche'] + $row['no_residente_guanche'];
                                    }else{
                                        $total_grado_jd = 0;
                                    }
                                    if($row['activo_soublette'] == 1){
                                        $total_grado_cs = $row['residente_soublette'] + $row['no_residente_soublette'];
                                    }else{
                                        $total_grado_cs = 0;
                                    }
                                    echo ($total_grado_ab + $total_grado_jd + $total_grado_cs);
                            ?>
                        </td>
                    </tr>
            <?php endforeach;?>
        </tbody>
        <tfoot>
            <tr>
                <th width="40" colspan="2" rowspan="2" style="text-align: center; vertical-align: middle;"><div>SubTotal</div></th>
                <th style="text-align: center;"><?php echo $subtotal_ab_r ?></th>
                <th style="text-align: center;"><?php echo $subtotal_ab_nr ?></th>
                <th style="text-align: center;"><?php echo $subtotal_ab_nre ?></th>
                <th style="text-align: center;"><?php echo $subtotal_jd_r ?></th>
                <th style="text-align: center;"><?php echo $subtotal_jd_nr ?></th>
                <th style="text-align: center;"><?php echo $subtotal_jd_nre ?></th>
                <th style="text-align: center;"><?php echo $subtotal_cs_r ?></th>
                <th style="text-align: center;"><?php echo $subtotal_cs_nr ?></th>
                <th style="text-align: center;"><?php echo $subtotal_cs_nre ?></th>
                <th width="40" rowspan="2" style="text-align: center; vertical-align: middle;">
                    <div>
                        <?php echo $subtotal_ab_r + $subtotal_ab_nr  + $subtotal_jd_r + $subtotal_jd_nr + $subtotal_cs_r + $subtotal_cs_nr ?>
                    </div>
                </th>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center;"><?php echo $subtotal_ab_r + $subtotal_ab_nr ?></th>
                <th style="text-align: center;"><?php echo $subtotal_ab_nre ?></th>
                <th colspan="2" style="text-align: center;"><?php echo $subtotal_jd_r + $subtotal_jd_nr ?></th>
                <th style="text-align: center;"><?php echo $subtotal_jd_nre ?></th>
                <th colspan="2" style="text-align: center;"><?php echo $subtotal_cs_r + $subtotal_cs_nr ?></th>
                <th style="text-align: center;"><?php echo $subtotal_cs_nre ?></th>
            </tr>
            <tr >
                <th width="40" colspan="2" style="text-align: center;"><div>Total</div></th>
                <th colspan="3" style="text-align: center;"><?php echo $subtotal_ab_r + $subtotal_ab_nr  ?></th>
                <th colspan="3" style="text-align: center;"><?php echo $subtotal_jd_r + $subtotal_jd_nr  ?></th>
                <th colspan="3" style="text-align: center;"><?php echo $subtotal_cs_r + $subtotal_cs_nr  ?></th>
                <th width="40" style="text-align: center; vertical-align: middle;">
                    <div>
                        <?php echo $subtotal_ab_r + $subtotal_ab_nr  + $subtotal_jd_r + $subtotal_jd_nr + $subtotal_cs_r + $subtotal_cs_nr ?>
                    </div>
                </th>
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
                        "mColumns": [0,1,2,3,4,5,6,7,8,9,10]
                    },
                    {
                        "sExtends": "pdf",
                        "mColumns": [0,1,2,3,4,5,6,7,8,9,10]
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