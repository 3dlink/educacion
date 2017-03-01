<?php
$id_censo_selected = 1103;

$edit_data = $this->db->get_where('inscripcion', array('id_inscripcion' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){
$edit_data_anamnesis = $this->db->get_where('anamnesis_ts', array('id_censo' => $id_censo_selected))->result_array();
if (count($edit_data_anamnesis) > 0){
    $AsisteControlPediatrico = $edit_data_anamnesis[0]['AsisteControlPediatrico'];
    $NombreApellidoPediatra  = $edit_data_anamnesis[0]['NombreApellidoPediatra'];
    $UsaLentesCorrectivos  = $edit_data_anamnesis[0]['UsaLentesCorrectivos'];
    $ExpliqueLentesCorrectivos  = $edit_data_anamnesis[0]['ExpliqueLentesCorrectivos'];
    $ProblemasOrtopedicos  = $edit_data_anamnesis[0]['ProblemasOrtopedicos'];
    $EspecifiqueProblemaOrtopedico  = $edit_data_anamnesis[0]['EspecifiqueProblemaOrtopedico'];
    $AsisteControlOdontologico  = $edit_data_anamnesis[0]['AsisteControlOdontologico'];
}else{
    $AsisteControlPediatrico = "";
    $NombreApellidoPediatra = "";
    $UsaLentesCorrectivos = "";
    $ExpliqueLentesCorrectivos = "";
    $ProblemasOrtopedicos = "";
    $EspecifiqueProblemaOrtopedico = "";
    $AsisteControlOdontologico = "";
}

?>
<div class="tab-pane box" id="areaSalud">
    <div class="box-content">
        <form id="form-datos-salud" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Estatura<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idEstatura" name="Estatura" >
                        <?php foreach ($estaturas as $estatura){ ?>
                            <option value="<?php echo $estatura['id_estatura']?>" <?php echo ($row['Estatura']==$estatura['id_estatura'])?'selected="selected"':'' ?> > <?php echo $estatura['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Peso<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idPeso" name="Peso" >
                        <?php foreach ($pesos as $peso){ ?>
                            <option value="<?php echo $peso['id_peso']?>" <?php echo ($row['Peso']==$peso['id_peso'])?'selected="selected"':'' ?> > <?php echo $peso['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Talla de Camisa<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idTallaCamisa" name="TallaCamisa" >
                        <?php foreach ($camisas as $camisa){ ?>
                            <option value="<?php echo $camisa['id_talla_camisa']?>" <?php echo ($row['TallaCamisa']==$camisa['id_talla_camisa'])?'selected="selected"':'' ?> > <?php echo $camisa['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Talla de Pantalón<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idTallaPantalon" name="TallaPantalon" >
                        <?php foreach ($pantalones as $pantalon){ ?>
                            <option value="<?php echo $pantalon['id_talla_pantalon']?>" <?php echo ($row['TallaPantalon']==$pantalon['id_talla_pantalon'])?'selected="selected"':'' ?>> <?php echo $pantalon['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Talla de Calzado<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="idTallaCalzado" name="TallaCalzado" >
                        <?php foreach ($calzados as $calzado){ ?>
                            <option value="<?php echo $calzado['id_talla_calzado']?>" <?php echo ($row['TallaCalzado']==$calzado['id_talla_calzado'])?'selected="selected"':'' ?> > <?php echo $calzado['valor']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Padece alguna enfermedad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padeceEnfermedad" name="PadeceAlgunaEnfermedad" value="1" <?php echo ($row['PadeceAlgunaEnfermedad']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control padeceEnfermedad" name="PadeceAlgunaEnfermedad" value="0" <?php echo ($row['PadeceAlgunaEnfermedad']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depenPadeceEnfermedad"  style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique el tipo de enfermedad que padece el alumno</label>
                <div class="col-sm-6">
                	<textarea rows="4" cols="50" name="TipoDeEnfermedadQuePadeceElAlumno" value="<?php echo $row['TipoDeEnfermedadQuePadeceElAlumno']?>"><?php echo htmlspecialchars($row['TipoDeEnfermedadQuePadeceElAlumno']); ?></textarea>
    			</div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El alumno tiene alguna diversidad funcional<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control aluDiversidadFuncio" name="ElAlumnoTieneAlgunaDiversidadFuncional" value="1" <?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control aluDiversidadFuncio" name="ElAlumnoTieneAlgunaDiversidadFuncional" value="0" <?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='0')?'checked':'' ?> >No</label>

                    <div class="checkbox depenAluDiversidadFuncio" style="<?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="RedSocialPadreWhatsapp" value="0" >
                      <label><input type="checkbox" name="aluDiversidadMotora" value="1" <?php echo ($row['aluDiversidadMotora']=='1')?'checked':'' ?> >Motora</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="<?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='0')?'display:none':'' ?>">
                    <input type="hidden" name="aluDiversidadVisual" value="0" >
                      <label><input type="checkbox" name="aluDiversidadVisual" value="1" <?php echo ($row['aluDiversidadVisual']=='1')?'checked':'' ?> >Visual</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="<?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='0')?'display:none':'' ?>">
                    <input type="hidden" name="aluDiversidadAuditiva" value="0" >
                      <label><input type="checkbox" name="aluDiversidadAuditiva" value="1" <?php echo ($row['aluDiversidadAuditiva']=='1')?'checked':'' ?> >Auditiva</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="<?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='0')?'display:none':'' ?>">
                    <input type="hidden" name="aluDiversidadNeurologica" value="0" >
                      <label><input type="checkbox" name="aluDiversidadNeurologica" value="1" <?php echo ($row['aluDiversidadNeurologica']=='1')?'checked':'' ?> >Neurológica</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="<?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='0')?'display:none':'' ?>">
                    <input type="hidden" name="aluDiversidadLenguaje" value="0" >
                      <label><input type="checkbox" name="aluDiversidadLenguaje" value="1" <?php echo ($row['aluDiversidadLenguaje']=='1')?'checked':'' ?> >De lenguaje</label>
                    </div>

                    <div class="checkbox depenAluDiversidadFuncio" style="<?php echo ($row['ElAlumnoTieneAlgunaDiversidadFuncional']=='0')?'display:none':'' ?>">
                    <input type="hidden" name="aluDiversidadOtra" value="0" >
                      <label><input type="checkbox" name="aluDiversidadOtra" value="1" <?php echo ($row['aluDiversidadOtra']=='1')?'checked':'' ?> >Otra</label>
                    </div>

                </div>
            </div>
            <div class="form-group depenOtraDiverfuncional" style="<?php echo ($row['OtroTipoDiversidad']=='1')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Especifique qué otro tipo de diversidad funcional posee el alumno</label>
                <div class="col-sm-6">
                	<textarea rows="4" cols="50" name="OtroTipoDiversidad" value="<?php echo $row['OtroTipoDiversidad']?>"><?php echo htmlspecialchars($row['OtroTipoDiversidad']); ?></textarea>
    			</div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El alumno ha sido operado<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control aluOperado" name="ElAlumnoHaSidoOperado" value="1" <?php echo ($row['ElAlumnoHaSidoOperado']=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control aluOperado" name="ElAlumnoHaSidoOperado" value="0" <?php echo ($row['ElAlumnoHaSidoOperado']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depenAluOperado" style="display:none" style="<?php echo ($row['ElAlumnoHaSidoOperado']=='1')?'display:none':'' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Especifique que tipo de intervenciones quirurgicas ha tenido el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueTipoOperacion" value="<?php echo $row['EspecifiqueTipoOperacion']?>" ><?php echo htmlspecialchars($row['EspecifiqueTipoOperacion']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El alumno es alergico<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control aluAlergico" name="ElAlumnoEsAlergico" value="1" <?php echo ($row['ElAlumnoEsAlergico']=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control aluAlergico" name="ElAlumnoEsAlergico" value="0" <?php echo ($row['ElAlumnoEsAlergico']=='0')?'checked':'' ?> >No</label>
                    <input type="hidden" name="aluAlergiMedicina" value="0" >
                    <div class="checkbox depenAluAlergia" style="<?php echo ($row['ElAlumnoEsAlergico']=='0')?'display:none':'' ?>" >
                      <label><input type="checkbox" name="aluAlergiMedicina" value="0" <?php echo ($row['aluAlergiMedicina']=='1')?'checked':'' ?> >Medicinas</label>
                    </div>
                    <div class="checkbox depenAluAlergia" style="<?php echo ($row['ElAlumnoEsAlergico']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluAlergiAlimento" value="0" >
                      <label><input type="checkbox" name="aluAlergiAlimento" value="0" <?php echo ($row['aluAlergiAlimento']=='1')?'checked':'' ?> >Alimentos</label>
                    </div>
                    <div class="checkbox depenAluAlergia" style="<?php echo ($row['ElAlumnoEsAlergico']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluAlergiOtro" value="0" >
                      <label><input type="checkbox" name="aluAlergiOtro" value="0" <?php echo ($row['aluAlergiOtro']=='1')?'checked':'' ?> >Otros</label>
                    </div>
                </div>
            </div>
            <div class="form-group depenAluAlergia"  style="<?php echo ($row['aluAlergiOtro']=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Especifique que otro tipo de alergias tiene el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtroTipoDeAlergiasTieneElAlumno" value="<?php echo $row['OtroTipoDeAlergiasTieneElAlumno']?>" ><?php echo htmlspecialchars($row['OtroTipoDeAlergiasTieneElAlumno']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Sigue algun regimen especial de alimentacion o tratamiento<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control regimenAlimen" name="RegimenEspecialDeAlimentacionOTratamiento" value="1" <?php echo ($row['RegimenEspecialDeAlimentacionOTratamiento']=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control regimenAlimen" name="RegimenEspecialDeAlimentacionOTratamiento" value="0" <?php echo ($row['RegimenEspecialDeAlimentacionOTratamiento']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depenRegimenAlimen" style="<?php echo ($row['RegimenEspecialDeAlimentacionOTratamiento']=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Especifique que tipo de regimen de alimentacion o tratamiento tiene el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="RegimenAlimenticio" value="<?php echo $row['RegimenAlimenticio']?>" ><?php echo htmlspecialchars($row['RegimenAlimenticio']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Vacunas con la que cuenta el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <div class="checkbox" style="<?php echo ($row['aluVacunaNinguna']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluVacunaNinguna" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu" id="idAluVacunaNinguna" name="aluVacunaNinguna" value="1" <?php echo ($row['aluVacunaNinguna']=='1')?'checked':'' ?> >Ninguna</label>
                    </div>
                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>" >
                    <input type="hidden" name="aluVacunaBCG" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaBCG" value="1" <?php echo ($row['aluVacunaBCG']=='1')?'checked':'' ?> >BCG</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>" >
                    <input type="hidden" name="aluVacunaTriple" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaTriple" value="1" <?php echo ($row['aluVacunaTriple']=='1')?'checked':'' ?> >Triple</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>" >
                    <input type="hidden" name="aluVacunaSarampion" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaSarampion" value="1" <?php echo ($row['aluVacunaSarampion']=='1')?'checked':'' ?> >Sarampion</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>">
                    <input type="hidden" name="aluVacunaMeningitis" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaMeningitis" value="1" <?php echo ($row['aluVacunaMeningitis']=='1')?'checked':'' ?> >Meningitis</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>">
                    <input type="hidden" name="aluVacunaAntigripal" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaAntigripal" value="1" <?php echo ($row['aluVacunaAntigripal']=='1')?'checked':'' ?> >Antigripal</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>">
                    <input type="hidden" name="aluVacunaHepatitis" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaHepatitis" value="1" <?php echo ($row['aluVacunaHepatitis']=='1')?'checked':'' ?> >Hepatitis</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>">
                    <input type="hidden" name="aluVacunaHepatitisB" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaHepatitisB" value="1" <?php echo ($row['aluVacunaHepatitisB']=='1')?'checked':'' ?> >Hepatitis B</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>">
                    <input type="hidden" name="aluVacunaNeumococo" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaNeumococo" value="1" <?php echo ($row['aluVacunaNeumococo']=='1')?'checked':'' ?> >Neumococo</label>
                    </div>

                    <div class="checkbox vacunaNinguna" style="<?php echo ($row['aluVacunaNinguna']=='0')?'':'display:none' ?>">
                    <input type="hidden" name="aluVacunaOtras" value="0" >
                    <label><input type="checkbox" class="requiredVacunaAlu checkVacunaNinguna" name="aluVacunaOtras" value="1" <?php echo ($row['aluVacunaOtras']=='1')?'checked':'' ?> >Otras</label>
                    </div>
                </div>
            </div>
            <div class="form-group" style="<?php echo ($row['aluVacunaOtras']=='0')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Especifique con que otras vacunas cuenta el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtrasVacunasCuentaElAlumno" value="<?php echo $row['OtrasVacunasCuentaElAlumno']?>" ><?php echo htmlspecialchars($row['OtrasVacunasCuentaElAlumno']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Enfermedades que el alumno ha padecido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <div class="checkbox" style="<?php echo ($row['AluEnfermedadNinguna']=='0')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadNinguna" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu" id="idAluEnfermedadNinguna" name="AluEnfermedadNinguna" value="1" <?php echo ($row['AluEnfermedadNinguna']=='1')?'checked':'' ?> >Ninguna</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadSarampion" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadSarampion" value="1" <?php echo ($row['AluEnfermedadSarampion']=='1')?'checked':'' ?> >Sarampión</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadRubeola" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadRubeola" value="1" <?php echo ($row['AluEnfermedadRubeola']=='1')?'checked':'' ?> >Rubeola</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadLechina" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadLechina" value="1" <?php echo ($row['AluEnfermedadLechina']=='1')?'checked':'' ?> >Lechina</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadTosferina" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadTosferina" value="1" <?php echo ($row['AluEnfermedadTosferina']=='1')?'checked':'' ?> >Tosferina</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadHepatitis" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadHepatitis" value="1" <?php echo ($row['AluEnfermedadHepatitis']=='1')?'checked':'' ?> >Hepatitis</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadDengue" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadDengue" value="1" <?php echo ($row['AluEnfermedadDengue']=='1')?'checked':'' ?> >Dengue</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadAsma" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadAsma" value="1"  >Asma</label>
                    </div>
                    <div class="checkbox enfermedadNinguna" style="<?php echo ($row['AluEnfermedadNinguna']=='1')?'display:none':'' ?>">
                    <input type="hidden" name="AluEnfermedadConvulsiones" value="0" >
                    <label><input type="checkbox" class="requireEnfermedadAlu checkEnfermedadNinguna" name="AluEnfermedadConvulsiones" value="1" >Convulsiones</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Otras enfermedades</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtrasEnfermedades" value="<?php echo $row['OtrasEnfermedades']?>"><?php echo htmlspecialchars($row['OtrasEnfermedades']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Asiste a control pediatrico<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control controlPediatrico" name="AsisteControlPediatrico" value="1" <?php echo ($AsisteControlPediatrico=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control controlPediatrico" name="AsisteControlPediatrico" value="0" <?php echo ($AsisteControlPediatrico=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depenControlPediatrico" style="<?php echo ($AsisteControlPediatrico=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Pediatra actual</label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="NombreApellidoPediatra" name="NombreApellidoPediatra" placeholder="Nombres y Apellidos del pediatra" value="<?php echo $NombreApellidoPediatra ?>" >
                    <input type="hidden" minlength="2" class="form-control" id="idCenso" name="id_censo" placeholder="" value="<?php echo $id_censo_selected ?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Utiliza lentes correctivos<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control usaLentes" name="UsaLentesCorrectivos" value="1" <?php echo ($UsaLentesCorrectivos=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control usaLentes" name="UsaLentesCorrectivos" value="0" <?php echo ($UsaLentesCorrectivos=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depenLentesCorrectivos" style="<?php echo ($UsaLentesCorrectivos=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Explique</label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="ExpliqueLentesCorrectivos" name="ExpliqueLentesCorrectivos" placeholder="" value="<?php echo $ExpliqueLentesCorrectivos ?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Presenta problemas ortopedicos<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control problemasOrtopedicos" name="ProblemasOrtopedicos" value="1" <?php echo ($ProblemasOrtopedicos=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control problemasOrtopedicos" name="ProblemasOrtopedicos" value="0" <?php echo ($ProblemasOrtopedicos=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depenProblemaOrtopedico" style="<?php echo ($ProblemasOrtopedicos=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Especifique</label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="EspecifiqueProblemaOrtopedico" name="EspecifiqueProblemaOrtopedico" placeholder="" value="<?php echo $ExpliqueLentesCorrectivos ?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Asiste periódicamente a control Odontologico<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control " name="AsisteControlOdontologico" value="1" <?php echo ($AsisteControlOdontologico=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control " name="AsisteControlOdontologico" value="0" <?php echo ($AsisteControlOdontologico=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depen-repre-diversidad" >
                <label for="field-1" class="col-sm-4 control-label">Observaciones</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="ObservacionesSalud" value=""></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-area-salud" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-area-salud" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>