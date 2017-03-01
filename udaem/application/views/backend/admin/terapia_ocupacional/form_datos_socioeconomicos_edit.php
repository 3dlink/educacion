<?php
  $toggle = false;
  $edit_data = $this->db->get_where('inscripcion', array('id_inscripcion' => $id_inscripcion))->result_array();

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
    $grado_actual = $row['GradoActual'];
    $seccion_cursar = $row['SeccionACursar'];
    $turno_cursar = $row['TurnoACursar'];
    $docente_asignado = $row['DocenteAsignado'];
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

    //$this->db->select('nombre_grado');
    //$this->db->from('grados');
    //$this->db->where('id_grado',$row['GradoACursar']);
    //$grado = $this->db->get()->row()->nombre_grado;
    $seccion = ($row['SeccionACursar'] == 1) ? "SECCIÓN A": "SECCIÓN B";
    $turno = ($row['TurnoACursar'] == 1) ? "MAÑANA": "TARDE";

    $dia_solicitud = substr($row['FechaSolicitud'], 8, 2);
    $mes_solicitud = substr($row['FechaSolicitud'], 5, 2);
    $ano_solicitud = substr($row['FechaSolicitud'], 0, 4);

    $solicitud = $dia_solicitud.'/'.$mes_solicitud.'/'.$ano_solicitud;


    //$this->db->select('nombre_grado');
    //$this->db->from('grados');
    //$this->db->where('id_grado',$row['GradoACursar']);
    //$grado_estudiante = $this->db->get()->row()->nombre_grado;
?>
<div class="tab-pane box" id="datosSocieconomicos">
    <div class="box-content">
        <form id="form-datos-socieconomicos" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Esta becado<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control esBecado" name="ElAlumnoEstaBecado" value="1" <?php echo ($row['ElAlumnoEstaBecado']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control esBecado" name="ElAlumnoEstaBecado" value="0" <?php echo ($row['ElAlumnoEstaBecado']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depen-becado" style="<?php echo ($row['ElAlumnoEstaBecado']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Especifique el tipo de beca</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-beca" name="EspecifiqueElTipoDeBecaDelAlumno" >
                        <?php foreach ($becas as $beca){ ?>
                            <option data-id-estado="<?php echo $beca['id_beca']?>" value="<?php echo $beca['id_beca']?>" class="oculto" <?php echo ($row['EspecifiqueElTipoDeBecaDelAlumno']==$beca['id_beca'])?'selected="selected"':'' ?> > <?php echo $beca['nombre']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Medio de traslado al plantel<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="PRIVADO" <?php echo ($row['MedioDeTrasladoAlPlantel']=='PRIVADO')?'checked':'' ?> >Privado</label>
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="PUBLICO" <?php echo ($row['MedioDeTrasladoAlPlantel']=='PUBLICO')?'checked':'PUBLICO' ?> >Publico</label>
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="RUTACHACAO" <?php echo ($row['MedioDeTrasladoAlPlantel']=='RUTACHACAO')?'checked':'RUTACHACAO' ?> >Ruta Escolar Chacao</label>
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="OTRO" <?php echo ($row['MedioDeTrasladoAlPlantel']=='OTRO')?'checked':'' ?> >Otro</label>
                </div>
            </div>
            <div class="form-group otroTransporte" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique qué otro medio de transporte usa</label>
                <div class="col-sm-6">
                  <textarea rows="4" cols="50" name="EspecifiqueQueOtroMedioDeTransporteUsaElAlumno" value="<?php echo $row['EspecifiqueQueOtroMedioDeTransporteUsaElAlumno']?>" ></textarea>
          </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Se retira solo del plantel<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="ElAlumnoSeRetiraSoloDelPlantel" value="1" <?php echo ($row['ElAlumnoSeRetiraSoloDelPlantel']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control" name="ElAlumnoSeRetiraSoloDelPlantel" value="0" <?php echo ($row['ElAlumnoSeRetiraSoloDelPlantel']=='0')?'checked':'' ?> >No</label>

                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Miembros del grupo familiar (que viven en la misma casa)</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control onlyNumbers" id="idMiembrosFamilia" name="MiembrosFamilia" placeholder="Miembros del grupo familiar (que viven en la misma casa)" value="<?php echo $row['MiembrosFamilia']?>">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Número de hermanos</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control onlyNumbers" id="idNumeroDeHermanos" name="NumeroDeHermanos" placeholder="Número de hermanos en total" value="<?php echo $row['NumeroDeHermanos']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Datos de la vivienda<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="PROPIA" <?php echo ($row['DatosDeLaVivienda']=='PROPIA')?'checked':'' ?> >Propia</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="ALQUILADA" <?php echo ($row['DatosDeLaVivienda']=='ALQUILADA')?'checked':'' ?> >Alquilada</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="PROPIA-PAGANDO" <?php echo ($row['DatosDeLaVivienda']=='PROPIA-PAGANDO')?'checked':'' ?> >Propia Pagando</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="ALOJADOS" <?php echo ($row['DatosDeLaVivienda']=='ALOJADOS')?'checked':'' ?> >Alojados</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="OTRA" <?php echo ($row['DatosDeLaVivienda']=='OTRA')?'checked':'' ?> >Otra</label>
                </div>
            </div>
            <div class="form-group depenOtraVivienda" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique en que otra condición de vivienda</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtraCondicionDeViviendaResideElAlumno" value="<?php echo $row['OtraCondicionDeViviendaResideElAlumno']?>"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-socioeconomico-to" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-socioeconomico-to" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>