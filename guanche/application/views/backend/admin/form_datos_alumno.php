<div class="tab-pane box" id="datosAlu">
    <div class="box-content">
        <form id="form-image-alumno" class="form-horizontal form-groups-bordered form-censo" method="post" enctype="multipart/form-data" action='<?php echo base_url(); ?>upload_student_image.php'>
            <div class="form-group">
                <label for="field-1" class="col-sm-12 control-label" style="text-align: center;">La imagen no debe superar 1MB, el formato debe ser jpg o JPG y el nombre no puede contener espacios en blanco. </br> Se recomienda un tamaño de 180 pixeles de alto y 150 pixeles de ancho.</label>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Fotografía</label>
                <div class="col-sm-6">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 150px; height: 180px;" data-trigger="fileinput">
                            <img src="" alt="...">
                        </div>
                        <div id='preview-image-alumno' class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 180px;"></div>
                        <div>
                            <span class="btn btn-white btn-file">
                                <span class="fileinput-new">Seleccionar Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                <input required type="file" name="photo-image-alumno" id="photo-image-alumno" accept="image/jpeg">
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="form-datos-alumno" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-group">
                <label for="aluPrimerNombre" class="col-sm-4 control-label">Primer nombre<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" required minlength="2" class="form-control" id="aluPrimerNombre" name="PrimerNombreDelAlumno" placeholder="Primer nombre del alumno">
                        <input type="hidden" required minlength="2" class="form-control" id="aluNombreFoto" name="aluNombreFoto" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo nombre</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="aluSegundoNombre" name="SegundoNombreDelAlumno" placeholder="Segundo nombre del alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Primer apellido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="aluPrimerApellido" name="PrimerApellidoDelAlumno" placeholder="Primer apellido del alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Segundo apellido</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="aluSegundoApellido" name="SegundoApellidoDelAlumno" placeholder="Segundo apellido del alumno">
                </div>
            </div>
            <div class="form-group" id="cedulaIdentidadAlumno" style="<?php echo ($row['GradoACursar'] > 9) ? 'display: none;' : '' ?>">
                <div class="col-sm-12">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-6">
                        <p>Para construir la Cédula Escolar del Alumno (a) se debe tomar los siguientes pasos: </p>
                        <div class="col-sm-4" style="padding: 0px ! important;">
                            <div class="col-sm-10" style="padding: 0px ! important;">
                                <p style="text-align: justify;">a) Coloque  el N° 1 si el alumno (a) nació en parto sencillo.</p>
                                <p style="text-align: justify;">b) Si es parto múltiple debe colocar el N° de acuerdo a la hora de nacimiento de cada alumno (a).</br>Ejemplo: 1, 2, 3, 4</p>
                            </div>
                        </div>
                        <div class="col-sm-4" style="padding: 0px ! important;">
                            <div class="col-sm-10" style="padding: 0px ! important;">
                                <p style="text-align: justify;">Coloque los dos (2) últimos dígitos del año de Nacimiento del Alumno (a).</br>Ejemplo: 08</p>
                            </div>
                        </div>
                        <div class="col-sm-4" style="padding: 0px ! important;">
                            <div class="col-sm-10" style="padding: 0px ! important;">
                                <p style="text-align: justify;">Se debe colocar el N° de Cédula de la Madre del alumno  (a).</br>Ejemplo: 5569963</p>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="field-1" class="col-sm-4 control-label">Datos para crear cédula escolar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <div class="col-sm-4" style="padding: 0px ! important;">
                        <div class="col-sm-10" style="padding: 0px ! important;">
                            <input type="tel" required minlength="1" maxlength="1" min="1" max="9" class="form-control" id="posicion_parto"  placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 0px ! important;">
                        <div class="col-sm-10" style="padding: 0px ! important;">
                            <input type="tel" required minlength="1" maxlength="2" min="0" max="99"  class="form-control" id="nacimiento_alumno" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 0px ! important;">
                        <div class="col-sm-12" style="padding: 0px ! important;">
                            <input type="tel" required minlength="7" maxlength="8" min="0" max="99999999"  class="form-control" id="cedula_representante" placeholder="" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" >
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad y/o escolar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" minlength="8" maxlength="11" required class="form-control" id="aluCedula" name="CedulaDeIdentidadDelAlumnoOCedulaEscolar" placeholder="Cédula de identidad del alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control dateToMysql" id="aluFechaNac" name="FechaDeNacimientoDelAlumno" placeholder="">
                    <input type="hidden" required class="form-control" id="idFechaDeNacimientoDelAlumno" name="FechaDeNacimientoDelAlumno" placeholder="" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Género<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="SexoDelAlumno" value="MASCULINO">Masculino</label>
                    <label><input type="radio" class="form-control" name="SexoDelAlumno" value="FEMENINO">Femenino</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                        <label><input type="radio" id="aluNacVe" required class="form-control" name="NacionalidadDelAlumno" value="VENEZOLANA">Venezolana</label>
                        <label><input type="radio" id="aluNacEx" class="form-control" name="NacionalidadDelAlumno" value="EXTRANJERA">Extranjera</label>

                </div>
            </div>
            <div class="form-group alu-nacio-ve" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="aluEstadoNac" name="EstadoDondeNacioElAlumno" onChange="changeEstado()">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group alu-nacio-ve" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control" id="select-municipio-aluEstadoNac" name="MunicipioDondeNacioElAlumno" onChange="changeMunicipio()">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($municipios as $municipio){ ?>
                        <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group alu-nacio-ve" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Parroquia o sector donde nació</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="aluParroNac" name="ParroquiaOSectorDondeNacioElAlumno" placeholder="Parroquia o sector donde nació el alumno">
                </div>
            </div>
            <div class="form-group alu-nacio-ex" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" name="PaisDeNacimientoDelAlumno" placeholder="País de nacimiento del alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" required id="EstadoResidencia" name="EstadoDondeResideElAlumno">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" required id="select-municipio-EstadoResidencia" name="MunicipioDondeResideElAlumno" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($municipios as $municipio){ ?>
                        <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div id="sectorMunicipioChacaoAlumno" class="form-group" style="display: none">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio-alumno" name="SectorDondeResideElAlumno" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto"> <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div id="sectorMunicipioAlumno" class="form-group" style="display: none">
                <label for="field-1" class="col-sm-4 control-label" >Urbanización o sector donde reside</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="aluUrbSector" name="UrbanizacionOSectorDondeResideElAlumno" placeholder="Urbanizacion o sector donde reside el alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" id="aluCalleAve" name="CalleOAvenidaDondeResideElAlumno" placeholder="Calle o avenida donde reside el alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" id="aluEdifCasa" name="CasaOEdificioDondeResideElAlumno" placeholder="Casa o edificio donde reside el alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Piso o planta donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" minlength="1" class="form-control" id="aluPisoPlanta" name="PisoOPlantaDondeResideElAlumno" placeholder="Piso o planta donde reside el alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Número de casa o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="1" class="form-control" id="aluNumCasaApart" name="NumeroDeCasaOApartamentoDondeResideElAlumno" placeholder="Numero de casa o apartamento donde reside el alumno">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control" id="aluPuntoRef" name="PuntoDeReferenciaCercanoAlDomicilioDelAlumno" placeholder="" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-alumno" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-alumno" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
