<?php
  $toggle = false;
  $edit_data = $this->db->get_where('censo', array('id_censo' => $id_inscripcion))->result_array();

  foreach ($edit_data as $row){
    $parentesco = $row['ParentescoConElAlumno'];
    $nacionalidad_representante = $row['NacionalidadDelRepresentante'];
    $otro_parentesco = $row['OtroParentescoConElAlumno'];
    $estado_civil_representante = $row['EstadoCivilDelRepresentante'];
    $representante_red_facebook = $row['RedSocialRepreFacebook'];
    $representante_red_twitter = $row['RedSocialRepreTwitter'];
    $representante_red_whatsapp = $row['RedSocialRepreWhatsapp'];
    $representante_red_otra = $row['RedSocialRepreOtra'];
    $representante_trabaja = $row['TrabajaActualmente'];
    $representante_trabaja_municipio = $row['TrabajaDentroChacao'];
    $representante_trabaja_alcaldia = $row['TrabajaEnAlcaldia'];
    $representante_relacion_laboral = $row['TipoRelacionLaboralRepresentante'];
    $jornada_laboral_representante = $row['TipoDeJornadaLaboralDelRepresentante'];
    $diversidad_funcional_representante = $row['ElRepresentanteTieneAlgunaDiversidadFuncional'];
    $representante_diversidad_motora = $row['RepreDiversidadMotora'];
    $representante_diversidad_visual = $row['RepreDiversidadVisual'];
    $representante_diversidad_auditiva = $row['RepreDiversidadAuditiva'];
    $representante_diversidad_neurologica = $row['RepreDiversidadNeurologica'];
    $representante_diversidad_lenguaje = $row['RepreDiversidadLenguaje'];
    $representante_diversidad_otra = $row['RepreDiversidadOtra'];
    $hijos_estudian_chacao = $row['ElRepresentanteTieneOtrosHijosEstudiandoChacao'];
    $hijos_estudian_abello = $row['HijosEstudianAndresBello'];
    $hijos_estudian_guanche = $row['HijosEstudianGuanche'];
    $hijos_estudian_soublette = $row['HijosEstudianCarlosSoublette'];
    $estado_nacimiento_representante = $row['EstadoDondeNacioElRepresentante'];
    $municipio_nacimiento_representante = $row['MunicipioDondeNacioElRepresentante'];
    $estado_residencia_representante = $row['EstadoDondeResideElRepresentante'];
    $municipio_residencia_representante = $row['MunicipioDondeResideElRepresentante'];
    $sector_residencia_representante = $row['SectorDondeResideElRepresentante'];
    $ingreso_mensual_representante = $row['IngresoMensualDelRepresentante'];
    $otros_ingresos_familia = $row['OtrosIngresosDentroDeSuGrupoFamiliar'];

    $estado_trabaja_representante = $row['EstadoDondeSeUbicaElTrabajoDelRepresentante'];
    $municipio_trabaja_representante = $row['MunicipioDondeTrabajaElRepresentante'];

    $dia_nacimiento_rep = substr($row['FechaDeNacimientoDelRepresentante'], 8, 2);
    $mes_nacimiento_rep = substr($row['FechaDeNacimientoDelRepresentante'], 5, 2);
    $ano_nacimiento_rep = substr($row['FechaDeNacimientoDelRepresentante'], 0, 4);

    $nacimiento_rep = $dia_nacimiento_rep.'/'.$mes_nacimiento_rep.'/'.$ano_nacimiento_rep;

    $residente = $row['Residente'];
    $alunno_vive_con = $row['ElAlumnoViveCon'];
    $grado_cursar = $row['GradoACursar'];
    $seccion_cursar = $row['SeccionACursar'];
    $alumno_estudia_actualmente = $row['ElAlumnoEstudiaActualmente'];
    $alumno_curso_anterior = $row['ElAlumnoCursoElAnterior'];
    $alumno_repite = $row['ElAlumnoRepiteGrado'];
    $grado_repetido = $row['GradoRepetido'];
    $materia_pendiente = $row['MateriaPendiente'];

    $dia_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 8, 2);

    $mes_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 5, 2);
    $ano_nacimiento = substr($row['FechaDeNacimientoDelAlumno'], 0, 4);

    $nacimiento_alumno = $dia_nacimiento.'/'.$mes_nacimiento.'/'.$ano_nacimiento;

    $dia_nacimiento_madre = substr($row['FechaDeNacimientoDeLaMadre'], 8, 2);
    $mes_nacimiento_madre = substr($row['FechaDeNacimientoDeLaMadre'], 5, 2);
    $ano_nacimiento_madre = substr($row['FechaDeNacimientoDeLaMadre'], 0, 4);

    $nacimiento_madre = $dia_nacimiento_madre.'/'.$mes_nacimiento_madre.'/'.$ano_nacimiento_madre;

    $dia_nacimiento_padre = substr($row['FechaDeNacimientoDelPadre'], 8, 2);
    $mes_nacimiento_padre = substr($row['FechaDeNacimientoDelPadre'], 5, 2);
    $ano_nacimiento_padre = substr($row['FechaDeNacimientoDelPadre'], 0, 4);

    $nacimiento_padre = $dia_nacimiento_padre.'/'.$mes_nacimiento_padre.'/'.$ano_nacimiento_padre;

    $this->db->select('nombre_grado');
    $this->db->from('grados');
    $this->db->where('id_grado',$row['GradoACursar']);
    $grado = $this->db->get()->row()->nombre_grado;
    $seccion = ($row['SeccionACursar'] == 1) ? "SECCIÓN A": "SECCIÓN B";

    $dia_solicitud = substr($row['FechaSolicitud'], 8, 2);
    $mes_solicitud = substr($row['FechaSolicitud'], 5, 2);
    $ano_solicitud = substr($row['FechaSolicitud'], 0, 4);

    $solicitud = $dia_solicitud.'/'.$mes_solicitud.'/'.$ano_solicitud;


    $this->db->select('nombre_grado');
    $this->db->from('grados');
    $this->db->where('id_grado',$row['GradoACursar']);
    $grado_estudiante = $this->db->get()->row()->nombre_grado;
?>
<div class="tab-pane box" id="datosSaludAlu">
    <div class="box-content">
        <form id="form-datos-saludalu" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Grupo sanguíneo<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="GrupoSanguineo" value="A" <?php echo ($row['GrupoSanguineo']=='A')?'checked':'' ?> >A</label>
                    <label><input type="radio" class="form-control" name="GrupoSanguineo" value="B" <?php echo ($row['GrupoSanguineo']=='B')?'checked':'' ?> >B</label>
                    <label><input type="radio" class="form-control" name="GrupoSanguineo" value="AB" <?php echo ($row['GrupoSanguineo']=='AB')?'checked':'' ?> >AB</label>
                    <label><input type="radio" class="form-control" name="GrupoSanguineo" value="O" <?php echo ($row['GrupoSanguineo']=='O')?'checked':'' ?> >O</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Factor RH<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="FactorRh" value="Positivo" <?php echo ($row['FactorRh']=='P')?'checked':'' ?> >+</label>
                    <label><input type="radio" class="form-control" name="FactorRh" value="Negativo" <?php echo ($row['FactorRh']=='N')?'checked':'' ?> >-</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parto Múltiple<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control clasPartoMultiple" name="PartoMultiple" value="1" <?php echo ($row['PartoMultiple']=='1')?'checked':'' ?> >SÍ</label>
                    <label><input type="radio" class="form-control clasPartoMultiple" name="PartoMultiple" value="0" <?php echo ($row['PartoMultiple']=='0')?'checked':'' ?> >NO</label>
                </div>
            </div>
            <div id="div-PartoMultiple" class="form-group"  style="display:none">
                <label for="identification" class="col-sm-4 control-label">Posición en el parto<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control" id="idPosicionParto" name="PosicionParto" >
                    <?php for ($cupos = 1; $cupos <= 20; $cupos++){ ?>
                        <option value="<?php echo $cupos ?>" <?php echo ($row['PosicionParto']==$cupos)?'selected="selected"':'' ?> > <?php echo $cupos ?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Estatura<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <div class="col-sm-6" style="padding: 0px ! important;">
                        <div class="col-sm-6" style="padding: 0px ! important;">
                            <input type="number" required minlength="1" maxlength="1" min="0" max="2" class="form-control" id="estatura_metros" name="estatura_metros" placeholder="" value="">
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="color:gray; text-align: left !important;">metro(s)</label>
                    </div>
                    <div class="col-sm-6" style="padding: 0px ! important;">
                        <div class="col-sm-6" style="padding: 0px ! important;">
                            <input type="number" required minlength="1" maxlength="2" min="0" max="99" class="form-control" id="estatura_centimetros" name="estatura_centimetros" placeholder="" value="">
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="color:gray; text-align: left !important;">centimetro(s)</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Peso<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <div class="col-sm-6" style="padding: 0px ! important;">
                        <div class="col-sm-6" style="padding: 0px ! important;">
                            <input type="number" required minlength="1" maxlength="3" min="10" max="100" class="form-control" id="peso_kilos" name="peso_kilos" placeholder="" value="">
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="color:gray; text-align: left !important;">kilo(s)</label>
                    </div>
                    <div class="col-sm-6" style="padding: 0px ! important;">
                        <div class="col-sm-6" style="padding: 0px ! important;">
                            <input type="number" required minlength="1" maxlength="3" min="0" max="999" class="form-control" id="peso_gramos" name="peso_gramos" placeholder="" value="">
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="color:gray; text-align: left !important;">gramo(s)</label>
                    </div>
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
                <label for="field-1" class="col-sm-4 control-label">Tipo de parto<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="TipoDeParto" value="NATURAL" <?php echo ($row['TipoDeParto']=='NATURAL')?'checked':'' ?>>Natural</label>
                    <label><input type="radio" class="form-control" name="TipoDeParto" value="CESAREA" <?php echo ($row['TipoDeParto']=='CESAREA')?'checked':'' ?>>Cesárea</label>
                    <label><input type="radio" class="form-control" name="TipoDeParto" value="FORCEPS" <?php echo ($row['TipoDeParto']=='FORCEPS')?'checked':'' ?>>Fórceps</label>
                    <label><input type="radio" class="form-control" name="TipoDeParto" value="PREMATURO" <?php echo ($row['TipoDeParto']=='PREMATURO')?'checked':'' ?>>Prematuro</label>
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
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Otras enfermedades</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtrasEnfermedades" value="<?php echo $row['OtrasEnfermedades']?>"><?php echo htmlspecialchars($row['OtrasEnfermedades']); ?></textarea>
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
<?php
}
?>