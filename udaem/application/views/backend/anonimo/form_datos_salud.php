<div class="tab-pane box" id="datosSaludAlu">
    <div class="box-content">
        <form id="form-datos-saludalu" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Grupo sanguíneo<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="GrupoSanguineo" value="A">A</label>
                    <label><input type="radio" class="form-control" name="GrupoSanguineo" value="B">B</label>
                    <label><input type="radio" class="form-control" name="GrupoSanguineo" value="AB">AB</label>
                    <label><input type="radio" class="form-control" name="GrupoSanguineo" value="O">O</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Factor RH<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="FactorRh" value="Positivo">+</label>
                    <label><input type="radio" class="form-control" name="FactorRh" value="Negativo">-</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parto Múltiple<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control clasPartoMultiple" name="PartoMultiple" value="1">SÍ</label>
                    <label><input type="radio" class="form-control clasPartoMultiple" name="PartoMultiple" value="0">NO</label>
                </div>
            </div>
            <div id="div-PartoMultiple" class="form-group" style="display:none">
                <label for="identification" class="col-sm-4 control-label">Posición en el parto<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control" id="idPosicionParto" name="PosicionParto" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php for ($cupos = 1; $cupos <= 20; $cupos++){ ?>
                        <option value="<?php echo $cupos ?>" > <?php echo $cupos ?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Estatura<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idEstatura" name="Estatura" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($estaturas as $estatura){ ?>
                            <option value="<?php echo $estatura['id_estatura']?>" > <?php echo $estatura['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Peso<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idPeso" name="Peso" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($pesos as $peso){ ?>
                            <option value="<?php echo $peso['id_peso']?>" > <?php echo $peso['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Talla de Camisa<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idTallaCamisa" name="TallaCamisa" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($camisas as $camisa){ ?>
                            <option value="<?php echo $camisa['id_talla_camisa']?>" > <?php echo $camisa['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Talla de Pantalón<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idTallaPantalon" name="TallaPantalon" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($pantalones as $pantalon){ ?>
                            <option value="<?php echo $pantalon['id_talla_pantalon']?>" > <?php echo $pantalon['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Talla de Calzado<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idTallaCalzado" name="TallaCalzado" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($calzados as $calzado){ ?>
                            <option value="<?php echo $calzado['id_talla_calzado']?>" > <?php echo $calzado['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Tipo de parto<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="TipoDeParto" value="NATURAL" >Natural</label>
                    <label><input type="radio" class="form-control" name="TipoDeParto" value="CESAREA" >Cesárea</label>
                    <label><input type="radio" class="form-control" name="TipoDeParto" value="FORCEPS" >Fórceps</label>
                    <label><input type="radio" class="form-control" name="TipoDeParto" value="PREMATURO" >Prematuro</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Padece alguna enfermedad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padeceEnfermedad" name="PadeceAlgunaEnfermedad" value="1">Sí</label>
                    <label><input type="radio" class="form-control padeceEnfermedad" name="PadeceAlgunaEnfermedad" value="0">No</label>
                </div>
            </div>
            <div class="form-group depenPadeceEnfermedad" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique el tipo de enfermedad que padece el alumno</label>
                <div class="col-sm-6">
                	<textarea rows="4" cols="50" name="TipoDeEnfermedadQuePadeceElAlumno"></textarea>
    			</div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El alumno tiene alguna diversidad funcional<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control aluDiversidadFuncio" name="ElAlumnoTieneAlgunaDiversidadFuncional" value="1">Sí</label>
                    <label><input type="radio" class="form-control aluDiversidadFuncio" name="ElAlumnoTieneAlgunaDiversidadFuncional" value="0">No</label>

                    <div class="checkbox depenAluDiversidadFuncio" style="display:none">
                      <label><input type="checkbox" name="aluDiversidadMotora" value="1">Motora</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="display:none">
                      <label><input type="checkbox" name="aluDiversidadVisual" value="1">Visual</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="display:none">
                      <label><input type="checkbox" name="aluDiversidadAuditiva" value="1">Auditiva</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="display:none">
                      <label><input type="checkbox" name="aluDiversidadNeurologica" value="1">Neurológica</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="display:none">
                      <label><input type="checkbox" name="aluDiversidadLenguaje" value="1">De lenguaje</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="display:none">
                      <label><input type="checkbox" name="aluDiversidadOtra" value="1">Otra</label>
                    </div>

                </div>
            </div>
            <div class="form-group depenOtraDiverfuncional">
                <label for="field-1" class="col-sm-4 control-label">Especifique qué otro tipo de diversidad funcional posee el alumno</label>
                <div class="col-sm-6">
                	<textarea rows="4" cols="50" name="OtroTipoDiversidad"></textarea>
    			</div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El alumno ha sido operado<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control aluOperado" name="ElAlumnoHaSidoOperado" value="1">Si</label>
                    <label><input type="radio" class="form-control aluOperado" name="ElAlumnoHaSidoOperado" value="0">No</label>
                </div>
            </div>
            <div class="form-group depenAluOperado" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique que tipo de intervenciones quirurgicas ha tenido el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueTipoOperacion"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El alumno es alergico<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control aluAlergico" name="ElAlumnoEsAlergico" value="1">Si</label>
                    <label><input type="radio" class="form-control aluAlergico" name="ElAlumnoEsAlergico" value="0">No</label>

                    <div class="checkbox depenAluAlergia" style="display:none">
                      <label><input type="checkbox" name="aluAlergiMedicina" value="0">Medicinas</label>
                    </div>

                    <div class="checkbox depenAluAlergia" style="display:none">
                      <label><input type="checkbox" name="aluAlergiAlimento" value="0">Alimentos</label>
                    </div>

                    <div class="checkbox depenAluAlergia" style="display:none">
                      <label><input type="checkbox" name="aluAlergiOtro" value="0">Otros</label>
                    </div>
                </div>
            </div>
            <div class="form-group depenAluAlergia" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique que otro tipo de alergias tiene el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtroTipoDeAlergiasTieneElAlumno"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Sigue algun regimen especial de alimentacion o tratamiento<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control regimenAlimen" name="RegimenEspecialDeAlimentacionOTratamiento" value="1">Si</label>
                    <label><input type="radio" class="form-control regimenAlimen" name="RegimenEspecialDeAlimentacionOTratamiento" value="0">No</label>
                </div>
            </div>
            <div class="form-group depenRegimenAlimen" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique que tipo de regimen de alimentacion o tratamiento tiene el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="RegimenAlimenticio"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Vacunas con la que cuenta el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <label><input type="checkbox" class="requiredVacunaAlu" id="idAluVacunaNinguna" name="aluVacunaNinguna" value="1">Ninguna</label>
                    </div>
                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaBCG" value="1">BCG</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaTriple" value="1">Triple</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaSarampion" value="1">Sarampion</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaMeningitis" value="1">Meningitis</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaAntigripal" value="1">Antigripal</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaHepatitis" value="1">Hepatitis</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaHepatitisB" value="1">Hepatitis B</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaNeumococo" value="1">Neumococo</label>
                    </div>

                    <div class="checkbox vacunaNinguna">
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaOtras" value="1">Otras</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Especifique con que otras vacunas cuenta el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtrasVacunasCuentaElAlumno"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Enfermedades que el alumno ha padecido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <label><input type="checkbox" class="requireEnfermedadAlu" id="idAluEnfermedadNinguna" name="AluEnfermedadNinguna" value="1">Ninguna</label>
                    </div>

                    <div class="checkbox enfermedadNinguna">
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadSarampion" value="1">Sarampión</label>
                    </div>

                    <div class="checkbox enfermedadNinguna">
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadRubeola" value="1">Rubeola</label>
                    </div>

                    <div class="checkbox enfermedadNinguna">
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadLechina" value="1">Lechina</label>
                    </div>

                    <div class="checkbox enfermedadNinguna">
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadTosferina" value="1">Tosferina</label>
                    </div>

                    <div class="checkbox enfermedadNinguna">
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadHepatitis" value="1">Hepatitis</label>
                    </div>
                    <div class="checkbox enfermedadNinguna">
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadDengue" value="1">Dengue</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Otras enfermedades</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtrasEnfermedades"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-salud" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-salud" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>