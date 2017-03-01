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

    $this->db->select('nombre_grado');
    $this->db->from('grados');
    $this->db->where('id_grado',$row['GradoACursar']);
    $grado = $this->db->get()->row()->nombre_grado;
    $seccion = ($row['SeccionACursar'] == 1) ? "SECCIÓN A": "SECCIÓN B";
    $turno = ($row['TurnoACursar'] == 1) ? "MAÑANA": "TARDE";

    $dia_solicitud = substr($row['FechaSolicitud'], 8, 2);
    $mes_solicitud = substr($row['FechaSolicitud'], 5, 2);
    $ano_solicitud = substr($row['FechaSolicitud'], 0, 4);

    $solicitud = $dia_solicitud.'/'.$mes_solicitud.'/'.$ano_solicitud;


    $this->db->select('nombre_grado');
    $this->db->from('grados');
    $this->db->where('id_grado',$row['GradoACursar']);
    $grado_estudiante = $this->db->get()->row()->nombre_grado;
?>
<div class="tab-pane box active" id="infoGeneral">
    <div class="box-content">
        <form id="form-general" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="aluGradoActual" class="col-sm-4 control-label">Grado actual<span style="color:red"> *</span></label>
                <input type="hidden" class="form-control" id="id_escuela" name="id_escuela" value="<?php echo $id_school ?>">
                <div class="col-sm-6">
                  <input type="hidden" minlength="2" class="form-control" id="usuarioInscribe" name="usuarioInscribe" value="<?php echo $this->session->userdata('admin_id') ?>">
                  <select class="form-control" id="aluGradoActual" name="GradoActual" required onchange="return get_class_section(parseInt(this.value) + 1)">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_grado']?>" <?php echo ($grado_actual==$grado['id_grado'])?'selected="selected"':'' ?> > <?php echo $grado['nombre_grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Grado a cursar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluGradoACursar" name="GradoACursar" required onload="return get_class_section(this.value)" onchange="return get_class_section(this.value)" >
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_grado']?>" <?php echo ($grado_cursar==$grado['id_grado'])?'selected="selected"':'' ?> > <?php echo $grado['nombre_grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo">
                <label for="surname" class="col-sm-4 control-label">El alumno repite Grado o Año<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input id="alumnoRepite" type="radio" required class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="1" <?php echo ($alumno_repite=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="0" <?php echo ($alumno_repite=='0')?'checked':'' ?> >No</label>
                </div>
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
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($grado_repetido==$grado['id_grado']) ? 'display: none;':'' ?>">
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
                <label for="GradoACursar" class="col-sm-4 control-label">Sección<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" name="SeccionACursar" required id="section_selection_holder">
                    <option value=""><?php echo "Seleccione primero el grado"?></option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="TurnoACursar" class="col-sm-4 control-label">Turno<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluTurnoACursar" name="TurnoACursar" required>
                    <option value="1" <?php echo ($turno_cursar == 1)?'selected="selected"':'' ?> >Mañana</option>
                    <option value="2" <?php echo ($turno_cursar == 2)?'selected="selected"':'' ?> >Tarde</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="DocenteAsignado" class="col-sm-4 control-label">Docente asignado<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluDocenteAsignado" name="DocenteAsignado" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($teachers as $docente){ ?>
                        <option value="<?php echo $docente['teacher_id']?>" <?php echo ($docente_asignado==$docente['teacher_id'])?'selected="selected"':'' ?> ><?php echo $docente['name']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-generales" class="btn btn-info">Siguiente</button>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>

<script type="text/javascript">
  $(document).ready(function () {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_class_section/' +  jQuery('#aluGradoACursar').val() ,
            success: function(response)
            {
                jQuery('#section_selection_holder').html(response);
            }
        });
  });
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