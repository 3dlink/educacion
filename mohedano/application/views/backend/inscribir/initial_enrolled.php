<?php
setlocale(LC_TIME, "es_VE");
date_default_timezone_set('America/Caracas');
?>
    <form id="form-datos-resumen-general" class="form-horizontal form-groups-bordered" accept-charset="utf-8"
            method="post" action="<?php echo base_url().$this->session->userdata('login_type');?>/initial_enrolled/edit">
        <div class="col-md-12" style="margin-top: 40px;">
            <div class="panel-group joined" id="accordion-filter">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-parameter" href="#collapse-filter">
                                <i class="entypo-search"> Filtros del Reporte</i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-filter" class="panel-collapse collapse <?php if($toggle){echo 'in';$toggle=false;}?>" >
                        <div class="panel-body">
                            <div class="col-md-12">
                                    <div class="row" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Grado<span style="color:red"> *</span></label>
                                                <div class="col-sm-6">
                                                  <select class="form-control" id="aluGradoACursar" name="GradoACursar" required onchange="return get_class_section(this.value)">
                                                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                                    <?php foreach ($grados as $grado){ ?>
                                                        <option value="<?php echo $grado['id_grado']?>" > <?php echo $grado['nombre_grado']?></option>
                                                    <?php } ?>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Seccion<span style="color:red"> *</span></label>
                                                <div class="col-sm-6">
                                                  <select class="form-control" name="SeccionACursar" required id="section_selection_holder">
                                                    <option value=""><?php echo "Seleccione primero el grado"?></option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4" style="float: right;">
                                                    <button type="submit" id="btnSend" class="btn btn-info">Enviar</button>
                                                </div>
                                                <div class="col-sm-4"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br><br>
    <div class="showTableResumen" style="<?php echo ($mostrar_tabla=='no_mostrar')?'display:none':'' ?>">
        <table class="table table-bordered datatable showTableResumen" id="table_export" >
            <thead>
                <tr>
                    <th width="80" rowspan="2"><div>Cédula de Identidad</div></th>
                    <th width="80" rowspan="2"><div>Apellidos</div></th>
                    <th width="80" rowspan="2"><div>Nombres</div></th>
                    <th width="80" rowspan="2"><div>Sexo</div></th>
                    <th width="80" colspan="3"><div style="text-align: center;">Fecha de Nac</div></th>
                    <th width="80" colspan="4"><div style="text-align: center;">Escolaridad</div></th>
                </tr>
            <tr>
                <th>Día</th>
                <th>Mes</th>
                <th>Año</th>
                <th>RG</th>
                <th>RP</th>
                <th>MP</th>
                <th>DI</th>
            </thead>
            <tbody>
                <?php
                    foreach($estudiantes as $row):?>
                      <tr>
                          <td><?php echo $row['CedulaDeIdentidadDelAlumnoOCedulaEscolar'];?></td>
                          <td><?php echo $row['PrimerNombreDelAlumno'].'  '.$row['SegundoNombreDelAlumno'];?></td>
                          <td><?php echo $row['PrimerApellidoDelAlumno'].'  '.$row['SegundoApellidoDelAlumno'];?></td>
                          <td><?php echo $row['SexoDelAlumno'];?></td>

                          <?php
                            $dia_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 8, 2);
                            $mes_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 5, 2);
                            $ano_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 0, 4);
                          ?>
                          <td><?php echo $dia_nacimiento;?></td>
                          <td><?php echo $mes_nacimiento;?></td>
                          <td><?php echo $ano_nacimiento;?></td>
                          <td><?php echo "X";?></td>
                          <td><?php echo "*";?></td>
                          <td><?php echo "*";?></td>
                          <td><?php echo "*";?></td>
                      </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>


<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

    function dateToMysqlDesde(formId,inputOcultoId) {
        var tDia = jQuery('#'+formId+' .dateToMysqlDesde').val().substring(0, 2);
        var tMes = jQuery('#'+formId+' .dateToMysqlDesde').val().substring(3, 5);
        var tYear = jQuery('#'+formId+' .dateToMysqlDesde').val().substring(6, 10);
        jQuery('#'+inputOcultoId).val(tYear + '-' + tMes + '-' + tDia);
    }

    function dateToMysqlHasta(formId,inputOcultoId) {
        var tDia = jQuery('#'+formId+' .dateToMysql').val().substring(0, 2);
        var tMes = jQuery('#'+formId+' .dateToMysql').val().substring(3, 5);
        var tYear = jQuery('#'+formId+' .dateToMysql').val().substring(6, 10);
        jQuery('#'+inputOcultoId).val(tYear + '-' + tMes + '-' + tDia);
    }

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
<script type="text/javascript">

    function get_class_section(class_id) {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);
            }
        });
    }
</script>