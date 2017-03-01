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
<div class="tab-pane box" id="datosOtros">
    <div class="box-content">
        <form id="form-datos-otros" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <div class="col-sm-12 center">
                    <p>Esta pregunta se hace únicamente a fines de conocer su posible interés en participar en el programa Mi Primera Comunión del Municipio, no está obligado a responderla.</p>
                </div>
                <label for="field-1" class="col-sm-4 control-label">El alumno es católico</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control aluCatolico" name="ElAlumnoEsCatolico" value="1" <?php echo ($row['ElAlumnoEsCatolico']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control aluCatolico" name="ElAlumnoEsCatolico" value="0" <?php echo ($row['ElAlumnoEsCatolico']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depenAluCatolico" style="<?php echo ($row['ElAlumnoEsCatolico']=='0')?'display:none':'' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Ha cumplido con alguno de los siguientes Sacramentos</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="aluSacramentoNinguno" value="0" >
                      <label><input type="checkbox" name="aluSacramentoNinguno" value="1" <?php echo ($row['aluSacramentoNinguno']=='1')?'checked':'' ?> >Ninguno</label>
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="aluBautizo" value="0" >
                      <label><input type="checkbox" name="aluBautizo" value="1" <?php echo ($row['aluBautizo']=='1')?'checked':'' ?> >Bautizo</label>
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="aluComunion" value="0" >
                      <label><input type="checkbox" name="aluComunion" value="1" <?php echo ($row['aluComunion']=='1')?'checked':'' ?> >Primera Comunión</label>
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="aluConfirmacion" value="0" >
                      <label><input type="checkbox" name="aluConfirmacion" value="1" <?php echo ($row['aluConfirmacion']=='1')?'checked':'' ?> >Confirmación</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Realiza alguna actividad especial</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control actividadEspe" name="RealizaAlgunaActividadEspecial" value="1" <?php echo ($row['RealizaAlgunaActividadEspecial']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control actividadEspe" name="RealizaAlgunaActividadEspecial" value="0" <?php echo ($row['RealizaAlgunaActividadEspecial']=='0')?'checked':'' ?> >No</label>

                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="<?php echo ($row['RealizaAlgunaActividadEspecial']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluActiDeportiva" value="0" >
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiDeportiva" value="1" <?php echo ($row['aluActiDeportiva']=='1')?'checked':'' ?> >Deportiva</label>
                    </div>
                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="<?php echo ($row['RealizaAlgunaActividadEspecial']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluActiAcademica" value="0" >
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiAcademica" value="1" <?php echo ($row['aluActiAcademica']=='1')?'checked':'' ?> >Académica</label>
                    </div>
                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="<?php echo ($row['RealizaAlgunaActividadEspecial']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluActiCultural" value="0" >
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiCultural" value="1" <?php echo ($row['aluActiCultural']=='1')?'checked':'' ?> >Cultural</label>
                    </div>
                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="<?php echo ($row['RealizaAlgunaActividadEspecial']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluActiOtra" value="0" >
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiOtra" value="1" <?php echo ($row['aluActiOtra']=='1')?'checked':'' ?> >Otras</label>
                    </div>
                </div>
            </div>
            <div class="form-group depenActividadEspe" style="<?php echo ($row['aluActiOtra']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Especifique qué otras actividades especiales realiza el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno" value="<?php echo $row['EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno']?>" ><?php echo htmlspecialchars($row['EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nombre y apellido del contacto de emergencia 1<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="" name="NombreYApellidoDelContactoDeEmergencia1" placeholder="" value="<?php echo $row['NombreYApellidoDelContactoDeEmergencia1']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del contacto de emergencia 1<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="11" class="form-control" id="telDelContactoDeEmergenciaUno" name="TelefonoDelContactoDeEmergencia1" placeholder="" value="<?php echo $row['TelefonoDelContactoDeEmergencia1']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parentesco del contacto de emergencia 1 con el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreSegundoApelli" name="ParentescoDelContactoDeEmergencia1ConElAlumno" placeholder="" value="<?php echo $row['ParentescoDelContactoDeEmergencia1ConElAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nombre y apellido del contacto de emergencia 2<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="" name="NombreYApellidoDelContactoDeEmergencia2" placeholder="" value="<?php echo $row['NombreYApellidoDelContactoDeEmergencia2']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del contacto de emergencia 2<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="11" class="form-control" id="telDelContactoDeEmergenciaDos" name="TelefonoDelContactoDeEmergencia2" placeholder="" value="<?php echo $row['TelefonoDelContactoDeEmergencia2']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parentesco del contacto de emergencia 2 con el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="" name="ParentescoDelContactoDeEmergencia2ConElAlumno" placeholder="" value="<?php echo $row['ParentescoDelContactoDeEmergencia2ConElAlumno']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Observaciones</label>
                <div class="col-sm-6">
                  <textarea rows="4" cols="50" name="Observaciones" value="<?php echo $row['Observaciones']?>"><?php echo htmlspecialchars($row['Observaciones']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-interes" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-interes-add" class="btn btn-info">Inscribir</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>