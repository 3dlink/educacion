<?php
setlocale(LC_TIME, "es_VE");
date_default_timezone_set('America/Caracas');

$estatus_resumen_general = "";
switch ($estatusResumenGeneral) {
    case 0:
        $estatus_resumen_general = "PENDIENTE";
        break;
    case 1:
        $estatus_resumen_general = "CITA OTORGADA";
        break;
    case 2:
        $estatus_resumen_general = "CUPO VALIDADO";
        break;
    case 3:
        $estatus_resumen_general = "CUPO AUTORIZADO";
        break;
    case 4:
        $estatus_resumen_general = "ANULADO";
        break;
}

$residente_resumen_general = "";
switch ($residenteResumenGeneral) {
    case 0:
        $residente_resumen_general = "NO RESIDENTE";
        break;
    case 1:
        $residente_resumen_general = "RESIDENTE";
        break;
}

$escuela_resumen_general = "";
switch ($escuelaResumenGeneral) {
    case 1:
        $escuela_resumen_general = "UEM ANDRES BELLO";
        break;
    case 2:
        $escuela_resumen_general = "UEM JUAN DE DIOS GUANCHE";
        break;
    case 3:
        $escuela_resumen_general = "UEM CARLOS SOUBLETTE";
        break;
}

$this->db->select('nombre_grado');
$this->db->from('grados');
$this->db->where('id_grado',$gradoResumenGeneral);
$grado_resumen_general = $this->db->get()->row()->nombre_grado;

?>
    <form id="form-datos-resumen-general" class="form-horizontal form-groups-bordered" accept-charset="utf-8"
            method="post" action="<?php echo base_url().$this->session->userdata('login_type');?>/census_resume_general/edit">
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
                                      <div class="col-md-3" >
                                        <?php echo "Fecha desde: " ?><strong><?php echo date_format(date_create($fecha_desde), 'd/m/Y'); ?></strong>
                                      </div>
                                      <div class="col-md-3">
                                        <?php echo "Fecha hasta: " ?><strong><?php echo date_format(date_create($fecha_hasta), 'd/m/Y'); ?></strong>
                                      </div>
                                      <div class="col-md-3" style="<?php echo ($estatusResumenGeneral != "") ? "": "display: none;" ?>" >
                                        <?php echo "Estatus: " ?><strong><?php echo $estatus_resumen_general  ?></strong>
                                      </div>
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
                                      <div class="col-md-5" style="<?php echo ($escuelaResumenGeneral > 0) ? "": "display: none;" ?>" >
                                        <?php echo "Escuela de Preferencia: " ?><strong><?php echo $escuela_resumen_general ?></strong>
                                      </div>
                                      <div class="col-md-2" style="<?php echo ($generoResumenGeneral != "") ? "": "display: none;" ?>" >
                                        <?php echo "Género: " ?><strong><?php echo $generoResumenGeneral ?></strong>
                                      </div>
                                      <div class="col-md-2" style="<?php echo ($ponderacionResumenGeneral != "") ? "": "display: none;" ?>" >
                                        <?php echo "Ponderación: " ?><strong><?php echo $ponderacionResumenGeneral ?></strong>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group joined" id="accordion-orderfields" style="display: none;">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion-orderfields" href="#collapse-orderfields">
                                <i class="entypo-install"> Orden de los campos a mostrar</i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-orderfields" class="" >
                        <div class="panel-body">
                            <div class="col-md-12">
                                    <div class="row" >
                                      <div class="s2-example" style="pointer-events: none;">
                                        <p>
                                          <select id="ordenCampos" name="ordenCampos[ ]"  aria-hidden="true" tabindex="-1" class="js-example-basic-multiple js-states form-control select2-hidden-accessible" multiple="">
                                            <optgroup label="Filtros">
                                              <option value="Estatus" selected="selected">Estatus</option>
                                              <option value="Residente" selected="selected">Residente</option>
                                              <option value="Grado a cursar" selected="selected">Grado a cursar</option>
                                              <option value="Escuela de preferencia" selected="selected">Escuela de preferencia</option>
                                              <option value="Género" selected="selected">Género</option>
                                              <option value="Ponderación" selected="selected">Ponderación</option>
                                            </optgroup>
                                            <optgroup label="Campos adicionales">
                                              <option value="Fecha de Nacimiento" >Fecha de Nacimiento</option>
                                              <option value="Edad" >Edad</option>
                                              <option value="Urbanización" >Urbanización</option>
                                              <option value="Estado" >Estado</option>
                                              <option value="Municipio" >Municipio</option>
                                              <option value="Trabaja en la Alcaldía" >Trabaja en la Alcaldía</option>
                                              <option value="Fecha de Cita" >Fecha de Cita</option>
                                              <option value="Escuela de Procedencia" >Escuela de Procedencia</option>
                                              <option value="Sector" >Sector</option>
                                              <option value="Telefono Celular" >Telefono Celular</option>
                                              <option value="Calle o Avenida" >Calle o Avenida</option>
                                              <option value="Casa o Apartamento" >Casa o Apartamento</option>
                                              <option value="Piso" >Piso</option>
                                              <option value="Punto de Referencia" >Punto de Referencia</option>
                                              <option value="Telefono Habitación" >Telefono Habitación</option>
                                            </optgroup>
                                          </select>
                                          <span style="width: 100%;" dir="ltr" class="select2 select2-container select2-container--default select2-container--below select2-container--focus">
                                            <span class="selection">
                                              <span tabindex="-1" class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false">
                                                <ul class="select2-selection__rendered">
                                                </ul>
                                              </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                          </span>
                                        </p>
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
                                                      <input type="hidden" id="trabaja_alcaldia" name="trabaja_alcaldia" value="0" >
                                                      <label><input type="checkbox" id="trabaja_alcaldia" name="trabaja_alcaldia" value="1" <?php echo ($trabaja_alcaldia=='1')?'checked':'' ?> class="form-control check_box_parameters">Trabaja en la Alcaldía</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="fecha_cita" name="fecha_cita" value="0" >
                                                      <label><input type="checkbox" id="fecha_cita" name="fecha_cita" value="1" <?php echo ($fecha_cita=='1')?'checked':'' ?> class="form-control check_box_parameters">Fecha de Cita</label>
                                                    </div>
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="escuela_procedencia" name="escuela_procedencia" value="0" >
                                                      <label><input type="checkbox" id="escuela_procedencia" name="escuela_procedencia" value="1" <?php echo ($escuela_procedencia=='1')?'checked':'' ?> class="form-control check_box_parameters">Escuela de Procedencia</label>
                                                    </div>

                                                    <div class="checkbox " >
                                                      <input type="hidden" id="sector" name="sector" value="0" >
                                                      <label><input type="checkbox" id="sector" name="sector" value="1" <?php echo ($sector=='1')?'checked':'' ?> class="form-control check_box_parameters">Nombre Escuela de Procedencia</label>
                                                    </div>

                                                    <div class="checkbox " >
                                                      <input type="hidden" id="telefono_celular" name="telefono_celular" value="0" >
                                                      <label><input type="checkbox" id="telefono_celular" name="telefono_celular" value="1" <?php echo ($telefono_celular=='1')?'checked':'' ?> class="form-control check_box_parameters">Telefono Celular</label>
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
                                                    <div class="checkbox " >
                                                      <input type="hidden" id="telefono_habitacion" name="telefono_habitacion" value="0" >
                                                      <label><input type="checkbox" id="telefono_habitacion" name="telefono_habitacion" value="1" <?php echo ($telefono_habitacion=='1')?'checked':'' ?> class="form-control check_box_parameters">Telefono Habitación</label>
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
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Fecha Desde<span style="color:red"> *</span></label>
                                                <div class="col-sm-6">
                                                        <input aria-required="true" required="" minlength="2" class="form-control dateToMysqlDesde" id="desdeFecha" name="desdeFecha" placeholder="__/__/____" type="text" value="" >
                                                        <input aria-required="true" required="" class="form-control" id="fecha_desde" name="fecha_desde" placeholder="" type="hidden" value="<?php echo $fecha_desde ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Fecha Hasta<span style="color:red"> *</span></label>
                                                <div class="col-sm-6">
                                                        <input aria-required="true" required="" minlength="2" class="form-control dateToMysql" id="idFechaHasta" name="hastaFecha" placeholder="__/__/____" type="text" value="" >
                                                        <input aria-required="true" required="" class="form-control" id="fecha_hasta" name="fecha_hasta" placeholder="" type="hidden" value="<?php echo $fecha_hasta ?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-6">
                                            <div class="form-group alu-nacio-ve" >
                                                <label for="field-1" class="col-sm-4 control-label">Estatus</label>
                                                <div class="col-sm-6">
                                                  <select class="form-control filters_parameters" id="estatusResumenGeneral" name="estatusResumenGeneral">
                                                    <option value="-1" selected="selected" >Seleccione...</option>
                                                    <option value="0" <?php echo ($estatusResumenGeneral=="0")?'selected="selected"':'' ?> > PENDIENTE</option>
                                                    <option value="1" <?php echo ($estatusResumenGeneral=="1")?'selected="selected"':'' ?> > CITA OTORGADA</option>
                                                    <option value="2" <?php echo ($estatusResumenGeneral=="2")?'selected="selected"':'' ?> > CUPO VALIDADO</option>
                                                    <option value="3" <?php echo ($estatusResumenGeneral=="3")?'selected="selected"':'' ?> > CUPO AUTORIZADO</option>
                                                    <option value="4" <?php echo ($estatusResumenGeneral=="4")?'selected="selected"':'' ?> > ANULADO</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Residente</label>
                                                <div class="col-sm-6">
                                                  <select class="form-control filters_parameters" id="residenteResumenGeneral" name="residenteResumenGeneral">
                                                    <option value="-1" selected="selected" >Seleccione...</option>
                                                    <option value="0" <?php echo ($residenteResumenGeneral=="0")?'selected="selected"':'' ?> > NO RESIDENTE</option>
                                                    <option value="1" <?php echo ($residenteResumenGeneral=="1")?'selected="selected"':'' ?> > RESIDENTE</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Grado a Cursar</label>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Escuela de Preferencia</label>
                                                <div class="col-sm-6">
                                                  <select class="form-control filters_parameters" id="escuelaResumenGeneral" name="escuelaResumenGeneral" >
                                                    <option value="0" selected="selected" >Seleccione...</option>
                                                    <option value="1" <?php echo ($escuelaResumenGeneral=="1")?'selected="selected"':'' ?> > UEM ANDRES BELLO</option>
                                                    <option value="2" <?php echo ($escuelaResumenGeneral=="2")?'selected="selected"':'' ?> > UEM JUAN DE DIOS GUANCHE</option>
                                                    <option value="3" <?php echo ($escuelaResumenGeneral=="3")?'selected="selected"':'' ?> > UEM CARLOS SOUBLETTE</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Género</label>
                                                <div class="col-sm-6">
                                                  <select class="form-control filters_parameters" id="generoResumenGeneral" name="generoResumenGeneral">
                                                    <option value="0" selected="selected" >Seleccione...</option>
                                                    <option value="MASCULINO" <?php echo ($generoResumenGeneral=="MASCULINO")?'selected="selected"':'' ?> > MASCULINO</option>
                                                    <option value="FEMENINO" <?php echo ($generoResumenGeneral=="FEMENINO")?'selected="selected"':'' ?> > FEMENINO</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="aluPrimerNombre" class="col-sm-4 control-label">Ponderación</label>
                                                <div class="col-sm-6">
                                                        <input type="number" minlength="2" class="form-control filters_parameters" id="ponderacionResumenGeneral" name="ponderacionResumenGeneral" placeholder="Ponderación" value="<?php echo $ponderacionResumenGeneral ?>">
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
                    <?php echo ($edad == 1) ? '<th width="80"><div>Edad</div></th>' : "" ?>
                    <?php echo ($generoResumenGeneral == "") ? '<th width="80"><div>Genero</div></th>' : "" ?>
                    <?php echo ($gradoResumenGeneral <= 0) ? '<th width="80"><div>Grado Solicitado</div></th>' : "" ?>
                    <?php echo ($escuela_procedencia == 1) ? '<th width="80"><div>Escuela de Procedencia</div></th>' : "" ?>
                    <?php echo ($sector == 1) ? '<th width="80"><div>Nombre Escuela de Procedencia</div></th>' : "" ?>
                    <?php echo ($escuela_solicitada == 1) ? '<th width="80"><div>Nombre de Escuela</div></th>' : "" ?>
                    <?php echo ($ponderacionResumenGeneral == "") ? '<th width="80"><div>Ponderacion</div></th>' : "" ?>
                    <?php echo ($escuelaResumenGeneral <= 0) ? '<th width="80"><div>Escuela de Preferencia</div></th>' : "" ?>
                    <?php echo ($fecha_nacimiento == 1) ? '<th width="80"><div>Fecha de Nacimiento</div></th>' : "" ?>
                    <?php echo ($residenteResumenGeneral > -1) ? "" : '<th width="80"><div>Residente</div></th>' ?>
                    <?php echo ($trabaja_alcaldia == 1) ? '<th width="80"><div>Trabaja en Alcaldia</div></th>' : "" ?>
                    <?php echo ($calle_avenida == 1) ? '<th width="80"><div>Calle Reside Alumno</div></th>' : "" ?>
                    <?php echo ($casa_apartamento == 1) ? '<th width="80"><div>Casa Reside Alumno</div></th>' : "" ?>
                    <?php echo ($piso == 1) ? '<th width="80"><div>Piso Reside Alumno</div></th>' : "" ?>
                    <?php echo ($telefono_habitacion == 1) ? '<th width="80"><div>Telefono Habitacion</div></th>' : "" ?>
                    <?php echo ($telefono_celular == 1) ? '<th width="80"><div>Telefono Celular</div></th>' : "" ?>
                    <?php echo ($municipio == 1) ? '<th width="80"><div>Municipio</div></th>' : "" ?>
                    <?php echo ($estado == 1) ? '<th width="80"><div>Estado</div></th>' : "" ?>
                    <?php echo ($urbanizacion == 1) ? '<th width="80"><div>Urbanización o Sector</div></th>' : "" ?>
                    <?php echo ($fecha_cita == 1) ? '<th width="80"><div>Fecha de Cita</div></th>' : "" ?>
                    <?php echo ($punto_referencia == 1) ? '<th width="80"><div>Punto de Referencia</div></th>' : "" ?>
                    <?php echo ($estatusResumenGeneral != "") ? '' : '<th width="80"><div>Estatus</div></th>' ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($estudiantes as $row):?>
                        <tr>
                            <td><?php echo $row['identificacion_representante'];?></td>
                        <td><?php echo strtoupper($row['primer_nombre_representante']." ". $row['segundo_nombre_representante']. ", ". $row['primer_apellido_representante']." ". $row['segundo_apellido_representante']) ;?></td>
                        <td><?php echo strtoupper($row['primer_nombre']." ". $row['segundo_nombre']. ", ". $row['primer_apellido']." ". $row['segundo_apellido']);?></td>
                            <?php if($edad == 1){ ?>
                                <td><?php echo $row['edad'];?></td>
                            <?php } ?>
                            <?php if($generoResumenGeneral == ""){ ?>
                                <td><?php echo $row['sexo'];?></td>
                            <?php } ?>
                            <?php if($gradoResumenGeneral <= 0){ ?>
                                <td><?php echo $row['grado'];?></td>
                            <?php } ?>
                            <?php if($escuela_procedencia == 1){ ?>
                                <td><?php echo $row['escuela_procedencia'];?></td>
                            <?php } ?>
                            <?php if($sector == 1){ ?>
                                <td><?php echo $row['NombreDeLaInstitucion'];?></td>
                            <?php } ?>
                            <?php if($escuela_solicitada == 1){ ?>
                                <td><?php echo $row['nombre_escuela'];?></td>
                            <?php } ?>
                            <?php if($ponderacionResumenGeneral == ""){ ?>
                                <td><?php echo $row['ponderacion'];?></td>
                            <?php } ?>
                            <?php if($escuelaResumenGeneral <= 0){ ?>
                                <td><?php switch ($row['id_escuela']){
                                    case 1:
                                        echo "UEM ANDRÉS BELLO";
                                        break;
                                    case 2:
                                        echo "UEM JUAN DE DIOS GUANCHE";
                                        break;
                                    case 3:
                                        echo "UEM CARLOS SOUBLETTE";
                                        break;
                                }?></td>
                            <?php } ?>
                            <?php if($fecha_nacimiento == 1){ ?>
                                <td><?php echo $row['fecha_nacimiento_alumno'];?></td>
                            <?php } ?>
                            <?php if($residenteResumenGeneral > -1){}else{ ?>
                                <td><?php echo ($row['Residente'] == 1) ? "SI" : "NO" ;?></td>
                            <?php } ?>
                            <?php if($trabaja_alcaldia == 1){ ?>
                                <td><?php echo ($row['TrabajaEnAlcaldia'] == 1) ? "SI" : "NO" ;?></td>
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
                            <?php if($municipio == 1){ ?>
                                <td><?php echo $row['municipio'];?></td>
                            <?php } ?>
                            <?php if($estado == 1){ ?>
                                <td><?php echo $row['estado'];?></td>
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
                            <?php if($fecha_cita == 1){ ?>
                                <td><?php echo date_format(date_create($row['fecha_asistencia']), 'd/m/Y').' '.date_format(date_create($row['hora_asistencia']), 'g:i A');?></td>
                            <?php } ?>
                            <?php if($punto_referencia == 1){ ?>
                                <td><?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelAlumno'];?></td>
                            <?php } ?>
                            <?php if($estatusResumenGeneral == ""){ ?>
                              <td><?php
                              switch ($row['StatusCenso']) {
                                    case 0:
                                        echo "PENDIENTE";
                                        break;
                                    case 1:
                                        echo "CITA OTORGADA";
                                        break;
                                    case 2:
                                        echo "CUPO VALIDADO";
                                        break;
                                    case 3:
                                        echo "CUPO AUTORIZADO";
                                        break;
                                    case 4:
                                        echo "ANULADO";
                                        break;
                                } ?>
                              </td>
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