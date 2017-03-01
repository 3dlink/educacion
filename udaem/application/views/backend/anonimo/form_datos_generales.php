<div class="tab-pane box" id="infoGeneral">
    <div class="box-content">
        <form id="form-general" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="identification" class="col-sm-4 control-label">Residente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control clasResidente" name="Residente" value="1">Sí</label>
                    <label><input type="radio" class="form-control clasResidente" name="Residente" value="0">No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="identification" class="col-sm-4 control-label">El alumno vive con<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="PADRE">Padre</label>
                    <label><input type="radio" class="form-control clasViveCon" name="ElAlumnoViveCon" value="MADRE">Madre</label>
                    <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="AMBOS">Ambos</label>
					<label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="REPRESENTANTE">Representante</label>
                </div>
            </div>
            <div class="form-group">
                <label for="identification" class="col-sm-4 control-label">Cupos a solicitar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="CuposASolicitar" name="CuposASolicitar" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php for ($cupos = 1; $cupos <= 10; $cupos++){ ?>
                        <option value="<?php echo $cupos ?>" > <?php echo $cupos ?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Grado a cursar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluGradoACursar" name="GradoACursar" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_censo_grado']?>" > <?php echo $grado['grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo">
                <label for="secondname" class="col-sm-4 control-label">El alumno ha estudiado anteriormente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control estudioAnterior" name="ElAlumnoEstudiaActualmente" value="1">Sí</label>
                    <label><input type="radio" class="form-control estudioAnterior" name="ElAlumnoEstudiaActualmente" value="0">No</label>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior">
                <label for="secondname" class="col-sm-4 control-label">El alumno curso el año anterior<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="ElAlumnoCursoElAnterior" value="1">Sí</label>
                    <label><input type="radio" class="form-control" name="ElAlumnoCursoElAnterior" value="0">No</label>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior">
                <label for="surname" class="col-sm-4 control-label">El alumno repite grado<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                        <label><input id="alumnoRepite" type="radio" required class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="1">Sí</label>
                        <label><input type="radio" class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="0">No</label>
                </div>
            </div>
            <div id="div-GradoRepetido" class="form-group" style="display:none">
                <label for="secondsurname" class="col-sm-4 control-label">Grado Repetido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="GradoRepetido" name="GradoRepetido" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_censo_grado']?>" > <?php echo $grado['grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior">
                <label for="grade" class="col-sm-4 control-label">Unidad educativa de procedencia<span style="color:red"> *</span></label>
                <div class="col-sm-8" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control UniProc" name="UnidadEducativaDeProcedencia" value="NULL">Ninguna</label>
                    <label><input type="radio" class="form-control UniProc UniProc-requi" name="UnidadEducativaDeProcedencia" value="NACIONAL">Nacional</label>
                    <label><input type="radio" class="form-control UniProc UniProc-requi" name="UnidadEducativaDeProcedencia" value="MUNICIPAL">Municipal</label>
                    <label><input type="radio" class="form-control UniProc UniProc-requi" name="UnidadEducativaDeProcedencia" value="PRIVADA">Privada</label>
                </div>
            </div>
            <div class="form-group dependiente-UniProc depende-PrimerGrupo depende-EstudioAnterior">
                <label for="section" class="col-sm-4 control-label">Nombre de la institución<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="NombreDeLaInstitucion" name="NombreDeLaInstitucion" placeholder="Nombre de la institucion de procedencia del representante" >
                </div>
            </div>
            <div class="form-group dependiente-UniProc depende-PrimerGrupo depende-EstudioAnterior">
                <label for="section" class="col-sm-4 control-label">Estado<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estado-institu" name="EstadoInstitucion">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group dependiente-UniProc depende-PrimerGrupo depende-EstudioAnterior">
                <label for="address" class="col-sm-4 control-label">Municipio<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-municipio-estado-institu" name="MunicipioInstitucion" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"> <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior">
                <label for="address" class="col-sm-4 control-label">Materia pendiente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                     <label><input id="matPenRadio" type="radio" required class="form-control materia-pendiente" name="MateriaPendiente" value="1">Sí</label>
                     <label><input type="radio" class="form-control materia-pendiente" name="MateriaPendiente" value="0">No</label>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" style="display:none">
                <label for="address" class="col-sm-4 control-label">Especifique cuáles materias están pendientes</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueCualesMateriasEstanPendientes"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Unidad educativa de su preferencia<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                     <div class="checkbox">
                      <label><input type="checkbox" id="UniDePrefJuanDio" name="UniDePrefJuanDio" class="requireUniEdu" value="0" disabled>UEM Juan de Dios Guanche</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" id="UniDePrefAndres" name="UniDePrefAndres" class="requireUniEdu" value="1" >UEM Andrés Bello</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" id="UniDePrefCarlos" name="UniDePrefCarlos" class="requireUniEdu" value="0" disabled>UEMI Carlos Soublette</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Razones de su solicitud<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                     <div class="checkbox">
                      <input type="checkbox" name="RazonSocioeco" class="requireRazonSoli" value="1">Socioeconómicas
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" name="RazonCambioResi" class="requireRazonSoli" value="1">Cambio de residencia
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" name="RazonNoAdapta" class="requireRazonSoli" value="1">No adaptación escolar
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" name="RazonOtra" class="requireRazonSoli" value="1">Otras
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-generales" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-generales" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>