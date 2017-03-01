<?php
setlocale(LC_TIME, "es_VE");
date_default_timezone_set('America/Caracas');
$toggle = false;
$estatus_resumen_general = "";

$residente_resumen_general = "";
switch ($residenteResumenGeneral) {
    case 0:
        $residente_resumen_general = "NO RESIDENTE";
        break;
    case 1:
        $residente_resumen_general = "RESIDENTE";
        break;
}

$this->db->select('nombre_grado');
$this->db->from('grados');
$this->db->where('id_grado',$gradoResumenGeneral);
$grado_resumen_general = $this->db->get()->row()->nombre_grado;

?>
    <form id="form-datos-resumen-general" class="form-horizontal form-groups-bordered" accept-charset="utf-8"
            method="post" action="<?php echo base_url().$this->session->userdata('login_type');?>/student_resume_general/edit">
        <div class="col-md-12" style="margin-top: 40px;">
            <div class="panel-group joined" id="accordion-resumefields" style="<?php echo ($mostrar_tabla=="mostrar") ? "" : "display: none;" ?>" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion-resumefields" href="#collapse-resumefields">
                                <i class="entypo-install"> Resumen de Reporte</i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-orderfields" class="" >
                        <div class="panel-body">
                            <div class="col-md-12">
                                    <div class="row" >
                                      <div class="col-md-3" style="<?php echo ($residenteResumenGeneral > -1) ? "": "display: none;" ?>" >
                                        <?php echo "Residente: " ?><strong><?php echo $residente_resumen_general ?></strong>
                                      </div>
                                    </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 20px;">
                                    <div class="row" >
                                      <div class="col-md-3" style="<?php echo ($gradoResumenGeneral > 0) ? "": "display: none;" ?>" >
                                        <?php echo "Grado a Cursar: " ?><strong><?php echo $grado_resumen_general ?></strong>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group joined" id="accordion-parameter">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-parameter" href="#collapse-parameter">
                                <i class="entypo-doc-text"> Campos a mostrar en el reporte</i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-parameter" class="panel-collapse collapse <?php if($toggle){echo 'in';$toggle=false;}?>" >
                        <div class="panel-body">
                            <div class="col-md-12">
                                    <div class="row" >
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div style="padding-top: 7px;">
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="fecha_nacimiento" name="fecha_nacimiento" value="0" >
                                                      <label><input type="checkbox" id="fecha_nacimiento" name="fecha_nacimiento" <?php echo ($fecha_nacimiento=='1')?'checked':'' ?> value="1" class="form-control check_box_parameters">Fecha de Nacimiento</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="edad" name="edad" value="0" >
                                                      <label><input type="checkbox" id="edad" name="edad" value="1" <?php echo ($edad=='1')?'checked':'' ?>  class="form-control check_box_parameters">Edad</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="urbanizacion" name="urbanizacion" value="0" >
                                                      <label><input type="checkbox" id="urbanizacion" name="urbanizacion" value="1" <?php echo ($urbanizacion=='1')?'checked':'' ?>  class="form-control check_box_parameters">Urbanización o Sector</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="estado" name="estado" value="0" >
                                                      <label><input type="checkbox" id="estado" name="estado" value="1" <?php echo ($estado=='1')?'checked':'' ?>  class="form-control check_box_parameters">Estado</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div style="padding-top: 7px;">
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="correo" name="correo" value="0" >
                                                      <label><input type="checkbox" id="correo" name="correo" value="1" <?php echo ($correo=='1')?'checked':'' ?> class="form-control check_box_parameters">Correo Electrónico</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="telefono_celular" name="telefono_celular" value="0" >
                                                      <label><input type="checkbox" id="telefono_celular" name="telefono_celular" value="1" <?php echo ($telefono_celular=='1')?'checked':'' ?> class="form-control check_box_parameters">Telefono Celular</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="telefono_habitacion" name="telefono_habitacion" value="0" >
                                                      <label><input type="checkbox" id="telefono_habitacion" name="telefono_habitacion" value="1" <?php echo ($telefono_habitacion=='1')?'checked':'' ?> class="form-control check_box_parameters">Telefono Habitación</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="municipio" name="municipio" value="0" >
                                                      <label><input type="checkbox" id="municipio" name="municipio" value="1" <?php echo ($municipio=='1')?'checked':'' ?>  class="form-control check_box_parameters">Municipio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div style="padding-top: 7px;">
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="calle_avenida" name="calle_avenida" value="0" >
                                                      <label><input type="checkbox" id="calle_avenida" name="calle_avenida" value="1" <?php echo ($calle_avenida=='1')?'checked':'' ?> class="form-control check_box_parameters">Calle o Avenida</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="casa_apartamento" name="casa_apartamento" value="0" >
                                                      <label><input type="checkbox" id="casa_apartamento" name="casa_apartamento" value="1" <?php echo ($casa_apartamento=='1')?'checked':'' ?> class="form-control check_box_parameters">Casa o Apartamento</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="piso" name="piso" value="0" >
                                                      <label><input type="checkbox" id="piso" name="piso" value="1" <?php echo ($piso=='1')?'checked':'' ?> class="form-control check_box_parameters">Piso</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="punto_referencia" name="punto_referencia" value="0" >
                                                      <label><input type="checkbox" id="punto_referencia" name="punto_referencia" value="1" <?php echo ($punto_referencia=='1')?'checked':'' ?> class="form-control check_box_parameters">Punto de Referencia</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Residente<span style="color:red"> *</span></label>
                                                <div class="col-sm-6">
                                                  <select class="form-control filters_parameters" id="residenteResumenGeneral" name="residenteResumenGeneral">
                                                    <option value="-1" selected="selected" >Seleccione...</option>
                                                    <option value="0" <?php echo ($residenteResumenGeneral=="0")?'selected="selected"':'' ?> > NO RESIDENTE</option>
                                                    <option value="1" <?php echo ($residenteResumenGeneral=="1")?'selected="selected"':'' ?> > RESIDENTE</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Grado a Cursar<span style="color:red"> *</span></label>
                                                <div class="col-sm-6">
                                                  <select class="form-control filters_parameters" id="gradoResumenGeneral" name="gradoResumenGeneral" required>
                                                    <option value="0" selected="selected" >Seleccione...</option>
                                                    <?php foreach ($grados as $grado_lista){ ?>
                                                        <option value="<?php echo $grado_lista['id_grado'] ?>" <?php echo ($gradoResumenGeneral==$grado_lista['id_grado'])?'selected="selected"':'' ?> > <?php echo $grado_lista['nombre_grado']?></option>
                                                    <?php } ?>
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
                    <th width="80"><div>CI Representante</div></th>
                    <th width="80"><div>Representante</div></th>
                    <th width="80"><div>Alumno</div></th>
                    <?php echo ($gradoResumenGeneral <= 0) ? '<th width="80"><div>Grado Solicitado</div></th>' : "" ?>
                    <?php echo ($fecha_nacimiento == 1) ? '<th width="80"><div>Fecha de Nacimiento</div></th>' : "" ?>
                    <?php echo ($residenteResumenGeneral > -1) ? "" : '<th width="80"><div>Residente</div></th>' ?>
                    <?php echo ($correo == 1) ? '<th width="80"><div>Correo Electrónico</div></th>' : "" ?>
                    <?php echo ($calle_avenida == 1) ? '<th width="80"><div>Calle Reside Alumno</div></th>' : "" ?>
                    <?php echo ($casa_apartamento == 1) ? '<th width="80"><div>Casa Reside Alumno</div></th>' : "" ?>
                    <?php echo ($piso == 1) ? '<th width="80"><div>Piso Reside Alumno</div></th>' : "" ?>
                    <?php echo ($telefono_habitacion == 1) ? '<th width="80"><div>Telefono Habitacion</div></th>' : "" ?>
                    <?php echo ($telefono_celular == 1) ? '<th width="80"><div>Telefono Celular</div></th>' : "" ?>
                    <?php echo ($urbanizacion == 1) ? '<th width="80"><div>Urbanización o Sector</div></th>' : "" ?>
                    <?php echo ($punto_referencia == 1) ? '<th width="80"><div>Punto de Referencia</div></th>' : "" ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($estudiantes as $row):?>
                        <tr>
                            <td><?php echo $row['CedulaDeIdentidadDelRepresentante'];?></td>
                        <td><?php echo strtoupper($row['PrimerNombreDelRepresentante']." ". $row['SegundoNombreDelRepresentante']. ", ". $row['PrimerApellidoDelRepresentante']." ". $row['SegundoApellidoDelRepresentante']) ;?></td>
                        <td><?php echo strtoupper($row['PrimerNombreDelAlumno']." ". $row['SegundoNombreDelAlumno']. ", ". $row['PrimerApellidoDelAlumno']." ". $row['SegundoApellidoDelAlumno']);?></td>
                            <?php if($gradoResumenGeneral <= 0){ ?>
                                <td><?php echo $row['grado'];?></td>
                            <?php } ?>
                            <?php if($fecha_nacimiento == 1){ ?>
                                <td><?php echo $row['FechaDeNacimientoDelAlumno'];?></td>
                            <?php } ?>
                            <?php if($residenteResumenGeneral > -1){}else{ ?>
                                <td><?php echo ($row['Residente'] == 1) ? "SI" : "NO" ;?></td>
                            <?php } ?>
                            <?php if($correo == 1){ ?>
                                <td><?php echo $row['CorreoElectronicoDelRepresentante'] ;?></td>
                            <?php } ?>
                            <?php if($calle_avenida == 1){ ?>
                                <td><?php echo $row['CalleOAvenidaDondeResideElAlumno'];?></td>
                            <?php } ?>
                            <?php if($casa_apartamento == 1){ ?>
                                <td><?php echo $row['CasaOEdificioDondeResideElAlumno'];?></td>
                            <?php } ?>
                            <?php if($piso == 1){ ?>
                                <td><?php echo $row['PisoOPlantaDondeResideElAlumno'];?></td>
                            <?php } ?>
                            <?php if($telefono_habitacion == 1){ ?>
                                <td><?php echo $row['TelefonoDeHabitacionDelRepresentante'];?></td>
                            <?php } ?>
                            <?php if($telefono_celular == 1){ ?>
                                <td><?php echo $row['TelefonoCelularDelRepresentante'];?></td>
                            <?php } ?>
                            <?php if($urbanizacion == 1){ ?>
                                <td><?php
                                  if($row['Residente'] == 1){
                                    echo $row['Sector'];
                                  }else{
                                    echo $row['UrbanizacionOSectorDondeResideElAlumno'];
                                  }
                                  ?></td>
                            <?php } ?>
                            <?php if($punto_referencia == 1){ ?>
                                <td><?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelAlumno'];?></td>
                            <?php } ?>
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


        jQuery('.check_box_parameters').click(function(e){
            var selectMultiple = document.getElementById('ordenCampos');

            if(this.checked){
                countFieldsToShow = countFieldsToShow + 1;

                switch (this.name)
                {
                   case "fecha_nacimiento":
                       selectMultiple.options[6].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Fecha de Nacimiento</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "edad":
                       selectMultiple.options[7].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Edad</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "urbanizacion":
                       selectMultiple.options[8].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Urbanización</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "estado":
                       selectMultiple.options[9].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Estado</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "municipio":
                       selectMultiple.options[10].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Municipio</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "trabaja_alcaldia":
                       selectMultiple.options[11].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Trabaja en la Alcaldía</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "fecha_cita":
                       selectMultiple.options[12].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Fecha de Cita</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "escuela_procedencia":
                       selectMultiple.options[13].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Escuela de Procedencia</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "sector":
                       selectMultiple.options[14].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Sector</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "telefono_celular":
                       selectMultiple.options[15].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Telefono Celular</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "calle_avenida":
                       selectMultiple.options[16].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Calle o Avenida</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "casa_apartamento":
                       selectMultiple.options[17].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Casa o Apartamento</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "piso":
                       selectMultiple.options[18].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Piso</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "punto_referencia":
                       selectMultiple.options[19].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Punto de Referencia</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                   case "telefono_habitacion":
                       selectMultiple.options[20].selected = true;
                       $("#s2id_ordenCampos ul").append('<li class="select2-search-choice"><div>Telefono de Habitación</div><a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li>');
                       break;
                }

            }else{
                countFieldsToShow = countFieldsToShow - 1;

                switch (this.name)
                {
                   case "fecha_nacimiento":
                       selectMultiple.options[6].selected = false;
                       break;
                   case "edad":
                       selectMultiple.options[7].selected = false;
                       break;
                   case "urbanizacion":
                       selectMultiple.options[8].selected = false;
                       break;
                   case "estado":
                       selectMultiple.options[9].selected = false;
                       break;
                   case "municipio":
                       selectMultiple.options[10].selected = false;
                       break;
                   case "trabaja_alcaldia":
                       selectMultiple.options[11].selected = false;
                       break;
                   case "fecha_cita":
                       selectMultiple.options[12].selected = false;
                       break;
                   case "escuela_procedencia":
                       selectMultiple.options[13].selected = false;
                       break;
                   case "sector":
                       selectMultiple.options[14].selected = false;
                       break;
                   case "telefono_celular":
                       selectMultiple.options[15].selected = false;
                       break;
                   case "calle_avenida":
                       selectMultiple.options[16].selected = false;
                       break;
                   case "casa_apartamento":
                       selectMultiple.options[17].selected = false;
                       break;
                   case "piso":
                       selectMultiple.options[18].selected = false;
                       break;
                   case "punto_referencia":
                       selectMultiple.options[19].selected = false;
                       break;
                   case "telefono_habitacion":
                       selectMultiple.options[20].selected = false;
                       break;
                }

            }
        });

        jQuery('.filters_parameters').change(function(e){
            if(this.value >= 0 || this.value != ""){
                countFieldsToShow = countFieldsToShow + 1;
                parametersArray.push(this.id);
            }else{
                countFieldsToShow = countFieldsToShow - 1;
                var index = parametersArray.indexOf(this.id);
                if (index > -1) {
                    array.splice(index, 1);
                }
            }
        });

        jQuery(".js-example-basic-multiple").select2();

        jQuery('#desdeFecha').blur(function(e) {
            dateToMysqlDesde('form-datos-resumen-general','fecha_desde');
        });

        jQuery('#idFechaHasta').blur(function(e) {
            dateToMysqlHasta('form-datos-resumen-general','fecha_hasta');
        });

    });
</script>