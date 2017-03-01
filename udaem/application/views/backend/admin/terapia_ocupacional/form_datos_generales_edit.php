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
    //$turno_atencion = $row['TurnoAtencion'];
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

    $seccion = ($row['SeccionACursar'] == 1) ? "SECCIÓN A": "SECCIÓN B";
    $turno = ($row['TurnoACursar'] == 1) ? "MAÑANA": "TARDE";

    $dia_solicitud = substr($row['FechaSolicitud'], 8, 2);
    $mes_solicitud = substr($row['FechaSolicitud'], 5, 2);
    $ano_solicitud = substr($row['FechaSolicitud'], 0, 4);

    $solicitud = $dia_solicitud.'/'.$mes_solicitud.'/'.$ano_solicitud;

?>
<div class="tab-pane box" id="infoGeneral">
    <div class="box-content">
        <form id="form-general" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="GradoActual" class="col-sm-4 control-label">Grado actual<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluGradoActual" name="GradoActual" required onchange="return get_class_section(parseInt(this.value) + 1)">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_grado']?>" <?php echo ($grado_actual==$grado['id_grado'])?'selected="selected"':'' ?> > <?php echo $grado['nombre_grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo">
                <label for="surname" class="col-sm-4 control-label">El alumno repite Grado o Año<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                        <label><input id="alumnoRepite" type="radio" required class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="1">Sí</label>
                        <label><input type="radio" class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="0">No</label>
                </div>
                <input type="hidden" id="id_inscripcion" name="id_inscripcion" value="<?php echo $id_inscripcion ?>">
            </div>
            <div id="div-GradoRepetido" class="form-group" style="display:none">
                <label for="secondsurname" class="col-sm-4 control-label">Grado o Año repetido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="GradoRepetido" name="GradoRepetido" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_grado']?>" <?php echo ($grado_cursar >= 10)?'selected="selected"':'' ?> > <?php echo $grado['nombre_grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior" style="display:none">
                <label for="address" class="col-sm-4 control-label">Materia pendiente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                     <label><input id="matPenRadio" type="radio" required class="form-control materia-pendiente" name="MateriaPendiente"
                     value="1" <?php echo ($materia_pendiente == 1)?'checked':'' ?> >Sí</label>
                     <label><input type="radio" class="form-control materia-pendiente" name="MateriaPendiente"
                     value="0" <?php echo ($materia_pendiente != 1)?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" style="display:none">
                <label for="address" class="col-sm-4 control-label">Especifique cuáles materias están pendientes</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueCualesMateriasEstanPendientes" value="<?php echo $row['EspecifiqueCualesMateriasEstanPendientes']?>"><?php echo htmlspecialchars($row['EspecifiqueCualesMateriasEstanPendientes']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Sección</label>
                <div class="col-sm-6">
                  <select class="form-control" name="SeccionACursar" id="section_selection_holder">
                    <option value=""><?php echo "Seleccione primero el grado"?></option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="TurnoACursar" class="col-sm-4 control-label">Turno Escolar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluTurnoACursar" name="TurnoACursar" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" <?php echo ($turno_cursar == 1)?'selected="selected"':'' ?> >Mañana</option>
                    <option value="2" <?php echo ($turno_cursar == 2)?'selected="selected"':'' ?> >Tarde</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="TurnoACursar" class="col-sm-4 control-label">Turno de Atención<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluTurnoATencion" name="aluTurnoATencion" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" <?php echo ($turno_atencion == 1)?'selected="selected"':'' ?> >Mañana</option>
                    <option value="2" <?php echo ($turno_atencion == 2)?'selected="selected"':'' ?> >Tarde</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="DocenteAsignado" class="col-sm-4 control-label">Especialista Asignado<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="EspecialistaAsignado" name="EspecialistaAsignado" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($teachers as $docente){ ?>
                        <option value="<?php echo $docente['teacher_id']?>" <?php echo ($docente_asignado==$docente['teacher_id'])?'selected="selected"':'' ?> ><?php echo $docente['name']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="TurnoACursar" class="col-sm-4 control-label">Escuela de Procedencia<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="EscuelaProcedencia" name="EscuelaProcedencia" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >Nacional</option>
                    <option value="2" >Municipal</option>
                    <option value="3" >Otros Municipios</option>
                    <option value="4" >Estadal</option>
                  </select>
                </div>
            </div>
            <div class="form-group" id="escuelas-municipales" style="display: none;">
                <label for="TurnoACursar" class="col-sm-4 control-label">Nombre de Escuela de Procedencia</label>
                <div class="col-sm-6">
                  <select class="form-control" id="EscuelaMunicipal" name="EscuelaMunicipal" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >U.E.N. EL LIBERTADOR</option>
                    <option value="2" >E.B.N. FERNANDO DE PEÑALVER</option>
                    <option value="3" >PREESCOLAR  FUNDACOMÚN</option>
                    <option value="4" >U.E. GUSTAVO HERRERA</option>
                    <option value="5" >PREESCOLAR LYA ÍMBER DE CORONIL</option>
                    <option value="6" >PREESCOLAR NINFA MOLINA DE ORTIZ</option>
                    <option value="7" >JARDÍN DE INFANCIA RAFAEL PAYTUVÍ</option>
                    <option value="8" >CENTRO PREESCOLAR  VIRGINIA VERA</option>
                    <option value="9" >CENTRO INFANTIL ALTAMIRA (INDASE)</option>
                    <option value="10" >U.E. COLEGIO BELÉN</option>
                    <option value="11" >COLEGIO BLANCA NIEVES</option>
                    <option value="12" >"ESCUELA HOGAR SAGRADO CORAZÓN DE JESÚS"</option>
                    <option value="13" >U.E. COLEGIO CRISTO REY</option>
                    <option value="14" >U.E. COLEGIO DON BOSCO</option>
                    <option value="15" >INSTITUTO EDUCACIONAL LANDER</option>
                    <option value="16" >PREESCOLAR EDUPLIN EDUCACIÓN PLANIFICADA INTERNACIONAL</option>
                    <option value="17" >INSTITUTO EINSTEIN</option>
                    <option value="18" >U.E. COLEGIO EL ALBA</option>
                    <option value="19" >GUARDERÍA Y JARDÍN DE INFANCIA GRAN MAMÁ</option>
                    <option value="20" >ICANE</option>
                    <option value="21" >PREESCOLAR LAS OVEJITAS</option>
                    <option value="22" >U.E. COLEGIO MARÍA AUXILIADORA</option>
                    <option value="23" >U.E. COLEGIO MÁS LUZ</option>
                    <option value="24" >U.E. ESCUELA MIS ENCANTOS</option></option>
                    <option value="25" >INSTITUTO MONTECARMELO</option>
                    <option value="26" >U.E. COLEGIO NUESTRA SEÑORA DE FÁTIMA</option>
                    <option value="27" >U.E. PARROQUIAL SAGRADO CORAZÓN DE JESÚS</option>
                    <option value="28" >U.E. COLEGIO SAN FRANCISCO DE ASÍS</option>
                    <option value="29" >COLEGIO SAN IGNACIO</option>
                    <option value="30" >U.E. COLEGIO SANTIAGO LEÓN DE CARACAS</option>
                    <option value="31" >COLEGIO SCHONTHAL</option>
                    <option value="32" >COLEGIOS ASOCIADOS SER Y LA FÉ</option>
                    <option value="33" >U.E. COLEGIO SINFONÍA</option>
                    <option value="34" >COLEGIO ST. GEORGE</option>
                    <option value="35" >U.E. COLEGIO SANTO DOMINGO DE GUZMÁN</option>
                    <option value="36" >U.E. COLEGIO SANTO TOMÁS DE AQUINO</option>
                    <option value="37" >U.E. COLEGIO TERESIANO LA CASTELLANA</option>
                    <option value="38" >U.E. COLEGIO VENEZOLANO BRITÁNICO</option>
                    <option value="39" >TALLER INFANTIL TILEMA</option>
                    <option value="40" >ESCUELA TÉCNICA POPULAR MARÍA AUXILIADORA</option>
                  </select>
                </div>
            </div>
            <div class="form-group" id="escuelas-otros-municipios" name="EscuelaOtrosMunicipios" style="display: none;">
                <label for="TurnoACursar" class="col-sm-4 control-label">Municipio de Escuela de Procedencia</label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluTurnoACursar" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >LIBERTADOR</option>
                    <option value="2" >SUCRE</option>
                    <option value="3" >HATILLO</option>
                    <option value="4" >BARUTA</option>
                  </select>
                </div>
            </div>
            <div class="form-group" id="nombre-escuela-otros-municipios" name="NombreEscuelaOtrosMunicipios" style="display: none;">
                <label for="field-1" class="col-sm-4 control-label">Nombre de Escuela de Procedencia</label>
                <div class="col-sm-6">
                    <input type="text" minlength="3" class="form-control" id="NombreEscuelaProcedenciaOtroMunicipio" placeholder="">
                </div>
            </div>
            <div class="form-group" id="nombre-escuela-estadal" name="NombreEscuelaEstadal" style="display: none;">
                <label for="field-1" class="col-sm-4 control-label">Nombre de Escuela de Procedencia</label>
                <div class="col-sm-6">
                    <input type="text" minlength="3" class="form-control" id="NombreEscuelaProcedenciaEstadalNacional" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-generales-to" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-generales-to" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
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
<?php
}
?>