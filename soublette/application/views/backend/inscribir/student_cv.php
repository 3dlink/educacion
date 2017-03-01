<?php
  $toggle = false;
  $edit_data = $this->db->get_where('inscripcion', array('id_inscripcion' => $id_inscripcion))->result_array();

  foreach ($edit_data as $row){
    $DependenciaAlcaldia = $row['DependenciaAlcaldia'];
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
    $foto_alumno = $row['aluNombreFoto'];
    $foto_representante = $row['repreNombreFoto'];
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
<form id="form-datos-resumen-general" class="form-horizontal form-groups-bordered" accept-charset="utf-8"
        method="post" action="<?php echo base_url().$this->session->userdata('login_type');?>/census_resume_general/edit">
    <div class="col-md-12" style="margin-top: 40px;">
        <!-- DATOS RESUMEN GENERALES -->
        <div class="panel-group joined" id="accordion-resume" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-parent="#accordion-resume" href="#collapse-resume">
                            <i class="entypo-install"> Resumen</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-resume" class="" >
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="row" >
                              <div class="col-md-2">
                                  <div class="col-sm-12">
                                    <img src="<?php echo $this->crud_model->get_image_url_db('student',$foto_alumno);?>" class="img-circle" width="80" height="80"/>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <div class="col-md-3">
                                      <label for="aluGradoActual" class="col-sm-12 control-label">
                                      <?php echo $row['PrimerNombreDelAlumno'].' '.$row['SegundoNombreDelAlumno'].' '.$row['PrimerApellidoDelAlumno'].' '.$row['SegundoApellidoDelAlumno']; ?>
                                      </label>
                                  </div>
                                  <div class="col-md-3">
                                      <label for="aluGradoActual" class="col-sm-12 control-label">
                                      <?php echo strtoupper($grado); ?>
                                      </label>
                                  </div>
                                  <div class="col-md-3">
                                      <label for="aluGradoActual" class="col-sm-12 control-label">
                                      <?php echo $seccion?>
                                      </label>
                                  </div>
                                  <div class="col-md-3">
                                      <label for="aluGradoActual" class="col-sm-12 control-label">
                                      <?php echo $turno?>
                                      </label>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS ESCOLARES -->
        <div class="panel-group joined" id="accordion-datos-escolares">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-escolares" href="#collapse-datos-escolares">
                            <i class="entypo-doc-text"> Datos Escolares</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-escolares" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >
                                  <div class="form-group">
                                      <label for="aluGradoActual" class="col-sm-4 control-label">Grado actual<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                        <select class="form-control" id="aluGradoActual" name="GradoActual" required>
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
                                        <select class="form-control" id="aluGradoACursar" name="GradoACursar" required>
                                          <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                          <?php foreach ($grados as $grado){ ?>
                                              <option value="<?php echo $grado['id_grado']?>" <?php echo ($grado_cursar==$grado['id_grado'])?'selected="selected"':'' ?> > <?php echo $grado['nombre_grado']?></option>
                                          <?php } ?>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="GradoACursar" class="col-sm-4 control-label">Sección<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                        <select class="form-control" id="aluSeccionACursar" name="SeccionACursar" required>
                                          <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                          <option value="1" <?php echo ($seccion_cursar== 1)?'selected="selected"':'' ?> >Sección A</option>
                                          <option value="2" <?php echo ($seccion_cursar== 2)?'selected="selected"':'' ?> >Sección B</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="TurnoACursar" class="col-sm-4 control-label">Turno<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                        <select class="form-control" id="aluTurnoACursar" name="TurnoACursar" required>
                                          <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                          <option value="1" <?php echo ($turno_cursar== 1)?'selected="selected"':'' ?> >Mañana</option>
                                          <option value="2" <?php echo ($turno_cursar== 2)?'selected="selected"':'' ?> >Tarde</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group depende-PrimerGrupo">
                                    <label for="surname" class="col-sm-4 control-label">El alumno repite grado<span style="color:red"> *</span></label>
                                    <div class="col-sm-6" style="padding-top: 7px;">
                                            <label><input id="alumnoRepite" type="radio" required class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="1" <?php echo ($alumno_repite=='1')?'checked':'' ?> >Sí</label>
                                            <label><input type="radio" class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="0" <?php echo ($alumno_repite=='0')?'checked':'' ?> >No</label>
                                    </div>
                                  </div>
                                  <div id="div-GradoRepetido" class="form-group" style="display:none">
                                    <label for="secondsurname" class="col-sm-4 control-label">Grado Repetido<span style="color:red"> *</span></label>
                                    <div class="col-sm-6">
                                      <select class="form-control" id="GradoRepetido" name="GradoRepetido" required>
                                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                        <?php foreach ($grados_censo as $grado_repetido_lista){ ?>
                                            <option value="<?php echo $grado_repetido_lista['id_censo_grado']?>" <?php echo ($grado_repetido==$grado_repetido_lista['id_censo_grado'])?'selected="selected"':'' ?> > <?php echo $grado_repetido_lista['grado']?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group depende-PrimerGrupo" style="display:none">
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
                                      <label for="DocenteAsignado" class="col-sm-4 control-label">Docente asignado<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                        <select class="form-control" id="aluDocenteAsignado" name="DocenteAsignado" required>
                                          <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                          <?php foreach ($teachers as $docente){ ?>
                                              <option value="<?php echo $docente['teacher_id']?>" <?php echo ($row['DocenteAsignado']==$docente['teacher_id'])?'selected="selected"':'' ?> > <?php echo $docente['name']?></option>
                                          <?php } ?>
                                        </select>
                                      </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS DEL ALUMNO -->
        <div class="panel-group joined" id="accordion-datos-alumno">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-alumno" href="#collapse-datos-alumno">
                            <i class="entypo-doc-text"> Datos del Alumno</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-alumno" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >
                                  <div class="form-group">
                                      <label for="aluPrimerNombre" class="col-sm-4 control-label">Primer nombre<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                              <input type="text" required minlength="2" class="form-control" id="aluPrimerNombre" name="PrimerNombreDelAlumno" placeholder="Primer nombre del alumno" value="<?php echo $row['PrimerNombreDelAlumno']?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Segundo nombre</label>
                                      <div class="col-sm-6">
                                          <input type="text" minlength="2" class="form-control" id="aluSegundoNombre" name="SegundoNombreDelAlumno" placeholder="Segundo nombre del alumno" value="<?php echo $row['SegundoNombreDelAlumno']?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Primer apellido<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                          <input type="text" required minlength="2" class="form-control" id="aluPrimerApellido" name="PrimerApellidoDelAlumno" placeholder="Primer apellido del alumno" value="<?php echo $row['PrimerApellidoDelAlumno']?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Segundo apellido</label>
                                      <div class="col-sm-6">
                                          <input type="text" minlength="2" class="form-control" id="aluSegundoApellido" name="SegundoApellidoDelAlumno" placeholder="Segundo apellido del alumno" value="<?php echo $row['SegundoApellidoDelAlumno']?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Cédula de identidad</label>
                                      <div class="col-sm-6">
                                          <input type="text" minlength="8" class="form-control" id="aluCedula" name="CedulaDeIdentidadDelAlumnoOCedulaEscolar" placeholder="Cédula de identidad del alumno" value="<?php echo $row['CedulaDeIdentidadDelAlumnoOCedulaEscolar']?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                                      <div class="col-sm-4">
                                          <input type="text" required class="form-control dateToMysql" id="aluFechaNac" name="FechaDeNacimientoDelAlumno" placeholder="" value="<?php echo $nacimiento_alumno ?>" >
                                          <input type="hidden" required class="form-control" id="idFechaDeNacimientoDelAlumno" name="FechaDeNacimientoDelAlumno" value="<?php echo $row['FechaDeNacimientoDelAlumno']?>">
                                      </div>
                                      <div class="col-sm-3">
                                          <?php
                                              $fecha_actual = new DateTime("now");
                                              $fecha_nacimiento = new DateTime($row['FechaDeNacimientoDelAlumno']);

                                              $dteDiff  = $fecha_actual->diff($fecha_nacimiento);
                                          ?>

                                          <label for="field-1" class="control-label">Edad: <?php echo $dteDiff->format("%Y años %M meses %D días"); ?></label>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Genero<span style="color:red"> *</span></label>
                                      <div class="col-sm-6" style="padding-top: 7px;">
                                          <label><input type="radio" required class="form-control" name="SexoDelAlumno" value="MASCULINO" <?php echo ($row['SexoDelAlumno']=='MASCULINO')?'checked':'' ?> >Masculino</label>
                                          <label><input type="radio" class="form-control" name="SexoDelAlumno" value="FEMENINO" <?php echo ($row['SexoDelAlumno']=='FEMENINO')?'checked':'' ?> >Femenino</label>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                                      <div class="col-sm-6" style="padding-top: 7px;">
                                              <label><input type="radio" id="aluNacVe" required class="form-control" name="NacionalidadDelAlumno" value="VENEZOLANA" <?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                                              <label><input type="radio" id="aluNacEx" class="form-control" name="NacionalidadDelAlumno" value="EXTRANJERA" <?php echo ($row['NacionalidadDelAlumno']=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>

                                      </div>
                                  </div>
                                  <div class="form-group alu-nacio-ve" style="<?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'':'display:none' ?>">
                                      <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                                      <div class="col-sm-6">
                                        <select class="form-control select-estado" id="aluEstadoNac" name="EstadoDondeNacioElAlumno" onChange="changeEstado()">
                                          <?php foreach ($estados as $estado){ ?>
                                              <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeNacioElAlumno']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                                          <?php } ?>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group alu-nacio-ve" style="<?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'':'display:none' ?>">
                                      <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                                      <div class="col-sm-6">
                                        <select class="form-control" id="select-municipio-aluEstadoNac" name="MunicipioDondeNacioElAlumno" onChange="changeMunicipio()">
                                          <?php foreach ($municipios as $municipio){ ?>
                                              <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeNacioElAlumno']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                                          <?php } ?>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group alu-nacio-ve" style="<?php echo ($row['NacionalidadDelAlumno']=='VENEZOLANA')?'':'display:none' ?>">
                                      <label for="field-1" class="col-sm-4 control-label">Parroquia o sector donde nació</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control" id="aluParroNac" name="ParroquiaOSectorDondeNacioElAlumno" placeholder="Parroquia o sector donde nació el alumno" value="<?php echo $row['ParroquiaOSectorDondeNacioElAlumno']?>">
                                      </div>
                                  </div>
                                  <div class="form-group alu-nacio-ex" style="<?php echo ($row['NacionalidadDelAlumno']=='EXTRANJERA')?'':'display:none' ?>">
                                      <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control" id="" name="PaisDeNacimientoDelAlumno" placeholder="País de nacimiento del alumno" value="<?php echo $row['PaisDeNacimientoDelAlumno']?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                        <select class="form-control select-estado" required id="EstadoResidencia" name="EstadoDondeResideElAlumno">
                                          <?php foreach ($estados as $estado){ ?>
                                              <option value="<?php echo $estado['id_estado']?>"
                                              <?php
                                                if($row['Residente'] == 1){
                                                  echo ($estado['id_estado']==13)?'selected="selected"':'';
                                                }else{
                                                  echo ($row['EstadoDondeResideElAlumno']==$estado['id_estado'])?'selected="selected"':'';
                                                }
                                            ?>
                                            > <?php echo $estado['nombre']?></option>
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
                                              <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"
                                              <?php
                                                if($row['Residente'] == 1){
                                                  echo ($municipio['id_municipio']==183)?'selected="selected"':'';
                                                }else{
                                                  echo ($row['MunicipioDondeResideElAlumno']==$municipio['id_municipio'])?'selected="selected"':'';
                                                }
                                            ?> > <?php echo $municipio['nombre']?></option>
                                          <?php } ?>
                                        </select>
                                      </div>
                                  </div>
                                  <div id="sectorMunicipioChacaoAlumno" class="form-group" style="<?php echo ($row['Residente']==1)?'':'display:none' ?>">
                                      <label for="address" class="col-sm-4 control-label">Sector</span></label>
                                      <div class="col-sm-6">
                                            <select class="form-control" id="select-sector-municipio-alumno" name="SectorDondeResideElAlumno" >
                                              <?php foreach ($sectores as $sector){ ?>
                                                  <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($row['SectorDondeResideElAlumno']==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                                              <?php } ?>
                                            </select>
                                      </div>
                                  </div>
                                  <div id="sectorMunicipioAlumno" class="form-group" style="<?php echo ($row['Residente']==1)?'display:none':'' ?>">
                                      <label for="field-1" class="col-sm-4 control-label" >Urbanización o sector donde reside</span></label>
                                      <div class="col-sm-6">
                                          <input type="text" class="form-control" id="aluUrbSector" name="UrbanizacionOSectorDondeResideElAlumno" placeholder="Urbanizacion o sector donde reside el alumno" value="<?php echo $row['UrbanizacionOSectorDondeResideElAlumno']?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde reside<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                          <input type="text" required class="form-control" id="aluCalleAve" name="CalleOAvenidaDondeResideElAlumno" placeholder="Calle o avenida donde reside el alumno" value="<?php echo $row['CalleOAvenidaDondeResideElAlumno']?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                          <input type="text" required class="form-control" id="aluEdifCasa" name="CasaOEdificioDondeResideElAlumno" placeholder="Casa o edificio donde reside el alumno" value="<?php echo $row['CasaOEdificioDondeResideElAlumno']?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Piso o planta donde reside<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                          <input type="text" minlength="1" class="form-control" id="aluPisoPlanta" name="PisoOPlantaDondeResideElAlumno" placeholder="Piso o planta donde reside el alumno" value="<?php echo $row['PisoOPlantaDondeResideElAlumno']?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Número de casa o apartamento donde reside<span style="color:red"> *</span></label>
                                      <div class="col-sm-6">
                                          <input type="text" required minlength="1" class="form-control" id="aluNumCasaApart" name="NumeroDeCasaOApartamentoDondeResideElAlumno" placeholder="Numero de casa o apartamento donde reside el alumno" value="<?php echo $row['NumeroDeCasaOApartamentoDondeResideElAlumno']?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                                      <div class="col-sm-6">
                                          <input type="text"  class="form-control" id="aluPuntoRef" name="PuntoDeReferenciaCercanoAlDomicilioDelAlumno" placeholder="" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelAlumno']?>"  >
                                      </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTROL DE INSCRIPCION -->
        <div class="panel-group joined" id="accordion-datos-inscripcion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-inscripcion" href="#collapse-datos-inscripcion">
                            <i class="entypo-doc-text"> Control de Inscripción</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-inscripcion" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >
                                  <table class="table table-bordered datatable" >
                                      <thead>
                                          <tr>
                                              <th><div>Año Escolar</div></th>
                                              <th><div>Fecha de Inscripción</div></th>
                                              <th><div>Repite</div></th>
                                              <th><div>Grado/Año</div></th>
                                              <th><div>Representante</div></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                              <tr>
                                                  <td>
                                                    <?php echo $running_year ?>
                                                  </td>
                                                  <td>
                                                    <?php echo $solicitud ?>
                                                  </td>
                                                  <td>
                                                    <?php echo ($row['ElAlumnoRepiteGrado']==0) ? 'NO' : 'SI' ?>
                                                  </td>
                                                  <td>
                                                    <?php echo $grado_estudiante ?>
                                                  </td>
                                                  <td>
                                                    <?php echo $row['PrimerNombreDelRepresentante'].' '.$row['SegundoNombreDelRepresentante'].' '.$row['PrimerApellidoDelRepresentante'].' '.$row['SegundoApellidoDelRepresentante']  ?>
                                                  </td>
                                              </tr>
                                      </tbody>
                                  </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS DEL REPRESENTANTE -->
        <div class="panel-group joined" id="accordion-datos-representante">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-representante" href="#collapse-datos-representante">
                            <i class="entypo-doc-text"> Datos del Representante</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-representante" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >
                                  <div class="tab-pane box active" id="datosRepre">
                                      <div class="box-content">
                                          <form id="form-datos-representante" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
                                              <div class="form-group">
                                                  <label for="identification" class="col-sm-4 control-label">Residente<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" required class="form-control clasResidente" name="Residente" value="1" <?php echo ($residente=='1')?'checked':'' ?> >Sí</label>
                                                      <label><input type="radio" class="form-control clasResidente" name="Residente" value="0" <?php echo ($residente=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="identification" class="col-sm-4 control-label">El alumno vive con<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="PADRE" <?php echo ($alunno_vive_con=='PADRE')?'checked':'' ?> >Padre</label>
                                                      <label><input type="radio" class="form-control clasViveCon" name="ElAlumnoViveCon" value="MADRE" <?php echo ($alunno_vive_con=='MADRE')?'checked':'' ?> >Madre</label>
                                                      <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="AMBOS" <?php echo ($alunno_vive_con=='AMBOS')?'checked':'' ?> >Ambos</label>
                                            <label><input type="radio" required class="form-control clasViveCon" name="ElAlumnoViveCon" value="REPRESENTANTE" <?php echo ($alunno_vive_con=='REPRESENTANTE')?'checked':'' ?> >Representante</label>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Parentesco con el alumno<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" required class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="MADRE" <?php echo ($parentesco=='MADRE')?'checked':'' ?> >Madre</label>
                                                      <label><input type="radio" class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="PADRE" <?php echo ($parentesco=='PADRE')?'checked':'' ?>>Padre</label>
                                                      <label><input type="radio" class="form-control tipo-parentesco" name="ParentescoConElAlumno" value="OTRO" <?php echo ($parentesco=='OTRO')?'checked':'' ?>>Otro</label>
                                                  </div>
                                              </div>
                                              <div class="form-group" id="div-select-tipo-parentesco" style="<?php echo ($parentesco=='OTRO')?'':'display:none' ?>" >
                                                  <label for="field-1" class="col-sm-4 control-label">Indique el parentesco</label>
                                                  <div class="col-sm-6">
                                                    <select class="form-control" id="repreParentescoOtro" name="OtroParentescoConElAlumno">
                                                      <option value="0" disabled="disabled">Seleccione...</option>
                                                      <option value="ABUELO" <?php echo ($otro_parentesco=='ABUELO')?'selected="selected"':'' ?> >Abuelo</option>
                                                      <option value="ABUELA" <?php echo ($otro_parentesco=='ABUELA')?'selected="selected"':'' ?> >Abuela</option>
                                                      <option value="TIA" <?php echo ($otro_parentesco=='TIA')?'selected="selected"':'' ?> >Tía</option>
                                                      <option value="TIO" <?php echo ($otro_parentesco=='TIO')?'selected="selected"':'' ?> >Tío</option>
                                                      <option value="MADRINA" <?php echo ($otro_parentesco=='MADRINA')?'selected="selected"':'' ?> >Madrina</option>
                                                      <option value="PADRINO" <?php echo ($otro_parentesco=='PADRINO')?'selected="selected"':'' ?> >Padrino</option>
                                                      <option value="HERMANA" <?php echo ($otro_parentesco=='HERMANA')?'selected="selected"':'' ?> >Hermana</option>
                                                      <option value="HERMANO" <?php echo ($otro_parentesco=='HERMANO')?'selected="selected"':'' ?> >Hermano</option>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required minlength="6" class="form-control" id="repreCedula" name="CedulaDeIdentidadDelRepresentante" placeholder="Cédula de identidad del representante" value="<?php echo $row['CedulaDeIdentidadDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Primer nombre<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="PrimerNombreDelRepresentante" placeholder="Primer nombre del representante" value="<?php echo $row['PrimerNombreDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Segundo nombre</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="2" class="form-control" id="repreSegundoNombre" name="SegundoNombreDelRepresentante" placeholder="Segundo nombre del representante" value="<?php echo $row['SegundoNombreDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Primer apellido<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required minlength="2" class="form-control" id="reprePrimerApelli" name="PrimerApellidoDelRepresentante" placeholder="Primer apellido del representante" value="<?php echo $row['PrimerApellidoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Segundo apellido</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="2" class="form-control" id="repreSegundoApelli" name="SegundoApellidoDelRepresentante" placeholder="Segundo apellido del representante" value="<?php echo $row['SegundoApellidoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                          <input type="text" required minlength="2" class="form-control dateToMysql" id="repreFechaNac" name="FechaDeNacimientoDelRepresentante" placeholder="" value="<?php echo $nacimiento_rep?>" >
                                                          <input type="hidden" required class="form-control" id="idFechaDeNacimientoDelRepresentante" name="FechaDeNacimientoDelRepresentante" placeholder="" value="<?php echo $row['FechaDeNacimientoDelRepresentante'] ?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                    <label><input type="radio" required class="form-control repreTipoNacio" name="NacionalidadDelRepresentante" value="VENEZOLANA" <?php echo ($nacionalidad_representante=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                                                      <label><input type="radio" class="form-control repreTipoNacio" name="NacionalidadDelRepresentante" value="EXTRANJERA" <?php echo ($nacionalidad_representante=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>
                                                  </div>
                                              </div>
                                              <div class="form-group tipoNacDepenVe" style="<?php echo ($row['NacionalidadDelRepresentante']=='VENEZOLANA')?'':'display:none' ?>" >
                                                  <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                                                  <div class="col-sm-6">
                                                    <select class="form-control select-estado" id="repreEstadoNacimiento" name="EstadoDondeNacioElRepresentante">
                                                      <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                      <?php foreach ($estados as $estado){ ?>
                                                          <option value="<?php echo $estado['id_estado']?>" <?php echo ($estado_nacimiento_representante==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="form-group tipoNacDepenVe" style="<?php echo ($row['NacionalidadDelRepresentante']=='VENEZOLANA')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                                                  <div class="col-sm-6">
                                                      <select class="form-control" id="select-municipio-repreEstadoNacimiento" name="MunicipioDondeNacioElRepresentante" >
                                                        <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                          <?php foreach ($municipios as $municipio){ ?>
                                                              <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" <?php echo ($municipio_nacimiento_representante==$municipio['id_municipio'])?'selected="selected"':'' ?> class="oculto"> <?php echo $municipio['nombre']?></option>
                                                          <?php } ?>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="form-group tipoNacDepenVe" style="<?php echo ($row['NacionalidadDelRepresentante']=='VENEZOLANA')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Parroquia o sector donde nació</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" class="form-control" id="repreParroNacimiento" name="ParroquiaDondeNacioElRepresentante" placeholder="Parroquia ddonde nació el representante" value="<?php echo $row['ParroquiaDondeNacioElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group tipoNacDepenEx" style="<?php echo ($row['NacionalidadDelRepresentante']=='EXTRANJERA')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                                                  <div class="col-sm-6">
                                                    <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDeNacimientoDelRepresentante" placeholder="País donde nació el representante" value="<?php echo $row['PaisDeNacimientoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Estado civil<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" required class="form-control" name="EstadoCivilDelRepresentante" value="SOLTERO" <?php echo ($estado_civil_representante=='SOLTERO')?'checked':'' ?> >Soltero(a)</label>
                                                      <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="CASADO" <?php echo ($estado_civil_representante=='CASADO')?'checked':'' ?> >Casado(a)</label>
                                                      <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="DIVORCIADO" <?php echo ($estado_civil_representante=='DIVORCIADO')?'checked':'' ?> >Divorciado(a)</label>
                                                      <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="CONCUBINATO" <?php echo ($estado_civil_representante=='CONCUBINATO')?'checked':'' ?> >Concubinato</label>
                                                      <label><input type="radio" class="form-control" name="EstadoCivilDelRepresentante" value="VIUDO" <?php echo ($estado_civil_representante=='VIUDO')?'checked':'' ?>>Viudo(a)</label>
                                                  </div>
                                              </div>
                                              <div class="form-group depenRepreMismaResi">
                                                  <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <select required class="form-control select-estado"  id="repreEstadoResidencia" name="EstadoDondeResideElRepresentante">
                                                        <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                      <?php foreach ($estados as $estado_reside_rep){ ?>
                                                          <option value="<?php echo $estado_reside_rep['id_estado']?>" <?php echo ($estado_residencia_representante==$estado_reside_rep['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado_reside_rep['nombre']?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="form-group depenRepreMismaResi">
                                                  <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                    <select required class="form-control"  id="select-municipio-repreEstadoResidencia" name="MunicipioDondeResideElRepresentante" >
                                                      <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                      <?php foreach ($municipios as $municipio){ ?>
                                                          <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($municipio_residencia_representante==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div id="sectorMunicipioChacaoRepre" class="form-group" style="<?php echo ($row['MunicipioDondeResideElRepresentante']=='183')?'':'display:none' ?>">
                                                  <label for="address" class="col-sm-4 control-label">Sector</span></label>
                                                  <div class="col-sm-6">
                                                        <select class="form-control" id="select-sector-municipio" name="SectorDondeResideElRepresentante" >
                                                        <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                          <?php foreach ($sectores as $sector){ ?>
                                                              <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($sector_residencia_representante==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                                                          <?php } ?>
                                                        </select>
                                                  </div>
                                              </div>
                                              <div id="sectorMunicipioRepre" class="form-group" style="<?php echo ($row['MunicipioDondeResideElRepresentante']=='183')?'display:none':'' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="2" class="form-control" class="form-control" id="repreUrbanizacion" name="UrbanizacionOSectorDondeResideElRepresentante" placeholder="Urbanización o sector donde reside el representante" value="<?php echo $row['UrbanizacionOSectorDondeResideElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group depenRepreMismaResi">
                                                  <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde reside<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required minlength="2" class="form-control" id="repreCalle" name="CalleOAvenidaDondeResideElRepresentante" placeholder="Calle o avenida donde reside el representante" value="<?php echo $row['CalleOAvenidaDondeResideElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group depenRepreMismaResi">
                                                  <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required minlength="1" class="form-control" id="repreCasa" name="CasaOEdificioDondeResideElRepresentante" placeholder="Casa o edificio donde reside el representante" value="<?php echo $row['CasaOEdificioDondeResideElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group depenRepreMismaResi">
                                                  <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" class="form-control" minlength="1" id="reprePiso" name="PisoDondeResideElRepresentante" placeholder="Piso donde reside el representante" value="<?php echo $row['PisoDondeResideElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group depenRepreMismaResi">
                                                  <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required class="form-control" minlength="1" id="repreApartamento" name="NumeroOApartamentoDondeResideElRepresentante" placeholder="Número o apartamento donde residem el representante" value="<?php echo $row['NumeroOApartamentoDondeResideElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group depenRepreMismaResi">
                                                  <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                                                  <div class="col-sm-6">
                                                      <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomicilioDelRepresentante" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelRepresentante']?>"><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlDomicilioDelRepresentante']); ?></textarea>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Telefono de habitación<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required minlength="10" class="form-control" id="repreTelefHabi" name="TelefonoDeHabitacionDelRepresentante" placeholder="" value="<?php echo $row['TelefonoDeHabitacionDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Teléfono celular<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="text" required minlength="10" class="form-control" id="repreTelefCelu" name="TelefonoCelularDelRepresentante" placeholder="" value="<?php echo $row['TelefonoCelularDelRepresentante']?>">

                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6">
                                                      <input type="email" required minlength="7" class="form-control" id="repreEmail" name="CorreoElectronicoDelRepresentante" placeholder="Correo electrónico del representante" value="<?php echo $row['CorreoElectronicoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Uso de redes sociales</label>
                                                  <div class="col-sm-6">
                                                      <div class="checkbox">
                                                      <input type="hidden" name="RedSocialRepreFacebook" value="0" >
                                                        <label><input type="checkbox" name="RedSocialRepreFacebook" value="1" <?php echo ($representante_red_facebook =='1')?'checked':'' ?> >Facebook</label>
                                                      </div>

                                                      <div class="checkbox">
                                                      <input type="hidden" name="RedSocialRepreTwitter" value="0" >
                                                        <label><input type="checkbox" name="RedSocialRepreTwitter" value="1" <?php echo ($representante_red_twitter=='1')?'checked':'' ?> >Twitter</label>
                                                      </div>

                                                      <div class="checkbox">
                                                      <input type="hidden" name="RedSocialRepreWhatsapp" value="0" >
                                                        <label><input type="checkbox" name="RedSocialRepreWhatsapp" value="1" <?php echo ($representante_red_whatsapp=='1')?'checked':'' ?> >Whatsapp</label>
                                                      </div>

                                                      <div class="checkbox">
                                                      <input type="hidden" name="RedSocialRepreOtra" value="0" >
                                                        <label><input type="checkbox" name="RedSocialRepreOtra" value="1" <?php echo ($representante_red_otra=='1')?'checked':'' ?> >Otra</label>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Especifique qué otras redes sociales usa</label>
                                                  <div class="col-sm-6">
                                                      <textarea rows="4" cols="50" name="EspecifiqueQueOtrasRedesSocialesUsaElRepresentante" value="<?php echo $row['EspecifiqueQueOtrasRedesSocialesUsaElRepresentante']?>"><?php echo htmlspecialchars($row['EspecifiqueQueOtrasRedesSocialesUsaElRepresentante']); ?></textarea>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Trabaja actualmente<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" required class="form-control trabaja-repre" name="TrabajaActualmente" value="1"  <?php echo ($representante_trabaja=='1')?'checked':'' ?> >Sí</label>
                                                      <label><input type="radio" class="form-control trabaja-repre" name="TrabajaActualmente" value="0" <?php echo ($representante_trabaja=='0')?'checked':'' ?>>No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Trabaja dentro del Municipio Chacao</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" class="form-control trabaja-repre-municipio" name="TrabajaDentroChacao" value="1" <?php echo ($representante_trabaja_municipio=='1')?'checked':'' ?> >Sí</label>
                                                      <label><input type="radio" class="form-control trabaja-repre-municipio" name="TrabajaDentroChacao" value="0" <?php echo ($representante_trabaja_municipio=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabaja-municipio" style="<?php echo ($row['TrabajaDentroChacao']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Trabaja en la Alcaldía de Chacao</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" class="form-control trabaja-repre-alcaldia" name="TrabajaEnAlcaldia" value="1" <?php echo ($representante_trabaja_alcaldia=='1')?'checked':'' ?> >Sí</label>
                                                      <label><input type="radio" class="form-control trabaja-repre-alcaldia" name="TrabajaEnAlcaldia" value="0" <?php echo ($representante_trabaja_alcaldia=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="2" class="form-control" id="repreRelacionLaboral" name="ProfesionUOcupacionDelRepresentante" placeholder="Profesión u ocupación del representante" value="<?php echo $row['ProfesionUOcupacionDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group direccion-trabaja-alcaldia" style="display:none;">
                                                  <label for="field-1" class="col-sm-4 control-label">Dirección o Instituto</label>
                                                  <div class="col-sm-6">
                                                      <select class="form-control select-estado" id="DependenciaAlcaldia" name="DependenciaAlcaldia">
                                                      <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                                                      <option value="1" <?php echo ($DependenciaAlcaldia == 1)? 'selected="selected"': '' ?> >Oficina del Alcalde</option>
                                                      <option value="2" <?php echo ($DependenciaAlcaldia == 2)? 'selected="selected"': '' ?> >Dirección General</option>
                                                      <option value="3" <?php echo ($DependenciaAlcaldia == 3)? 'selected="selected"': '' ?> >Secretaria de Gobierno</option>
                                                      <option value="4" <?php echo ($DependenciaAlcaldia == 4)? 'selected="selected"': '' ?> >Dirección Ejecutiva de Gestión Urbana</option>
                                                      <option value="5" <?php echo ($DependenciaAlcaldia == 5)? 'selected="selected"': '' ?> >Dirección Ejecutiva de Gestión Social</option>
                                                      <option value="6" <?php echo ($DependenciaAlcaldia == 6)? 'selected="selected"': '' ?> >Director Ejecutivo de Gestión de Seguridad Integral</option>
                                                      <option value="7" <?php echo ($DependenciaAlcaldia == 7)? 'selected="selected"': '' ?> >Dirección Ejecutiva de Gestión Interna</option>
                                                      <option value="8" <?php echo ($DependenciaAlcaldia == 8)? 'selected="selected"': '' ?> >Dirección de Planificación Estratégica y Presupuesto </option>
                                                      <option value="9" <?php echo ($DependenciaAlcaldia == 9)? 'selected="selected"': '' ?> >Oficina de Apoyo Estratégico</option>
                                                      <option value="10" <?php echo ($DependenciaAlcaldia == 10)? 'selected="selected"': '' ?> >Dirección de Comunicaciones</option>
                                                      <option value="11" <?php echo ($DependenciaAlcaldia == 11)? 'selected="selected"': '' ?> >Dirección Directora Atención al Ciudadano</option>
                                                      <option value="12" <?php echo ($DependenciaAlcaldia == 12)? 'selected="selected"': '' ?> >Consultaría  Jurídica</option>
                                                      <option value="13" <?php echo ($DependenciaAlcaldia == 13)? 'selected="selected"': '' ?> >Dirección de Recursos Humanos</option>
                                                      <option value="14" <?php echo ($DependenciaAlcaldia == 14)? 'selected="selected"': '' ?> >Dirección de Administración y Servicios</option>
                                                      <option value="15" <?php echo ($DependenciaAlcaldia == 15)? 'selected="selected"': '' ?> >Dirección  de Tecnología de la Información</option>
                                                      <option value="16" <?php echo ($DependenciaAlcaldia == 16)? 'selected="selected"': '' ?> >Dirección de Educación</option>
                                                      <option value="17" <?php echo ($DependenciaAlcaldia == 17)? 'selected="selected"': '' ?> >Dirección  de Deporte</option>
                                                      <option value="18" <?php echo ($DependenciaAlcaldia == 18)? 'selected="selected"': '' ?> >Dirección de la Oficina de Apoyo al Capital Social</option>
                                                      <option value="19" <?php echo ($DependenciaAlcaldia == 19)? 'selected="selected"': '' ?> >Dirección de Eventos y Protocolo</option>
                                                      <option value="20" <?php echo ($DependenciaAlcaldia == 20)? 'selected="selected"': '' ?> >Dirección de Bienestar Social</option>
                                                      <option value="21" <?php echo ($DependenciaAlcaldia == 21)? 'selected="selected"': '' ?> >Director Justicia Municipal</option>
                                                      <option value="22" <?php echo ($DependenciaAlcaldia == 22)? 'selected="selected"': '' ?> >Director de Seguridad Interna</option>
                                                      <option value="23" <?php echo ($DependenciaAlcaldia == 23)? 'selected="selected"': '' ?> >Director Centro Integral de Seguridad y Emergencias (CISE) </option>
                                                      <option value="24" <?php echo ($DependenciaAlcaldia == 24)? 'selected="selected"': '' ?> >Directora Oficina Local de Planeamiento Urbano (OLPU) </option>
                                                      <option value="25" <?php echo ($DependenciaAlcaldia == 25)? 'selected="selected"': '' ?> >Director de Ingeniería Municipal</option>
                                                      <option value="26" <?php echo ($DependenciaAlcaldia == 26)? 'selected="selected"': '' ?> >Directora Catastro Municipal</option>
                                                      <option value="27" <?php echo ($DependenciaAlcaldia == 27)? 'selected="selected"': '' ?> >Director de Obras Públicas y Servicios</option>
                                                      <option value="28" <?php echo ($DependenciaAlcaldia == 28)? 'selected="selected"': '' ?> >Auditoria Interna</option>
                                                      <option value="29" <?php echo ($DependenciaAlcaldia == 29)? 'selected="selected"': '' ?> >Sindicatura Municipal</option>
                                                      <option value="30" <?php echo ($DependenciaAlcaldia == 30)? 'selected="selected"': '' ?> >Policía Municipal de Chacao</option>
                                                      <option value="31" <?php echo ($DependenciaAlcaldia == 31)? 'selected="selected"': '' ?> >IMCAS – SALUD CHACAO</option>
                                                      <option value="32" <?php echo ($DependenciaAlcaldia == 32)? 'selected="selected"': '' ?> >Instituto de Movilidad Urbana</option>
                                                      <option value="33" <?php echo ($DependenciaAlcaldia == 33)? 'selected="selected"': '' ?> >Cultura Chacao</option>
                                                      <option value="34" <?php echo ($DependenciaAlcaldia == 34)? 'selected="selected"': '' ?> >Centro Cultural Chacao</option>
                                                      <option value="35" <?php echo ($DependenciaAlcaldia == 35)? 'selected="selected"': '' ?> >Instituto Autónomo de Mercado de Chacao</option>
                                                      <option value="36" <?php echo ($DependenciaAlcaldia == 36)? 'selected="selected"': '' ?> >Instituto Municipal de Ambiente Chacao (IMAC) </option>
                                                      <option value="37" <?php echo ($DependenciaAlcaldia == 37)? 'selected="selected"': '' ?> >Consejo Municipal de Derechos de Niños, Niñas y Adolescentes</option>
                                                      <option value="38" <?php echo ($DependenciaAlcaldia == 38)? 'selected="selected"': '' ?> >Fundación Orquesta Sinfónica Juvenil de Chacao</option>
                                                      <option value="39" <?php echo ($DependenciaAlcaldia == 39)? 'selected="selected"': '' ?> >Fundación Centro Eugenio Mendoza</option>
                                                      <option value="40" <?php echo ($DependenciaAlcaldia == 40)? 'selected="selected"': '' ?> >Protección Civil Chacao</option>
                                                      <option value="41" <?php echo ($DependenciaAlcaldia == 41)? 'selected="selected"': '' ?> >Instituto de Ambiente Chacao</option>
                                                      <option value="42" <?php echo ($DependenciaAlcaldia == 42)? 'selected="selected"': '' ?> >Concejo Municipal de Chacao</option>
                                                      <option value="43" <?php echo ($DependenciaAlcaldia == 43)? 'selected="selected"': '' ?> >Otros</option>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                                                  <div class="col-sm-6">
                                                    <select class="form-control"  id="select-ingreso-mensualRepresentante" name="IngresoMensualDelRepresentante" >
                                                      <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                      <?php foreach ($nivel_ingreso as $nivel){ ?>
                                                          <option value="<?php echo $nivel['id_nivel_ingreso_censo']?>" class="oculto"
                                                          <?php echo ($row['IngresoMensualDelRepresentante']==$nivel['id_nivel_ingreso_censo'])?'selected="selected"':'' ?> > <?php echo $nivel['valor']?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Otros ingresos dentro de su grupo familiar</label>
                                                  <div class="col-sm-6">
                                                    <select class="form-control"  id="select-otros-ingresosFamilia" name="OtrosIngresosDentroDeSuGrupoFamiliar" >
                                                      <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                      <?php foreach ($nivel_ingreso as $nivel){ ?>
                                                          <option value="<?php echo $nivel['id_nivel_ingreso_censo']?>" class="oculto" <?php echo ($row['OtrosIngresosDentroDeSuGrupoFamiliar']==$nivel['id_nivel_ingreso_censo'])?'selected="selected"':'' ?>> <?php echo $nivel['valor']?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelRepresentante" value="TIEMPO-COMPLETO" <?php echo ($jornada_laboral_representante=='TIEMPO-COMPLETO')?'checked':'' ?> >Tiempo completo</label>
                                                      <label><input type="radio" required class="form-control" name="TipoDeJornadaLaboralDelRepresentante" value="MEDIO-TIEMPO" <?php echo ($jornada_laboral_representante=='MEDIO-TIEMPO')?'checked':'' ?> >Medio Tiempo</label>
                                                      <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelRepresentante" value="NOCTURNA" <?php echo ($jornada_laboral_representante=='NOCTURNA')?'checked':'' ?> >Nocturna</label>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante" placeholder="Nombre de la empresa u organismo donde trabaja el representante" value="<?php echo $row['NombreDeLaEmpresaUOrganismoDondeTrabajaElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Estado donde se ubica el trabajo del</label>
                                                  <div class="col-sm-6">
                                                    <select class="form-control select-estado" id="repreEstadoTrabajo" name="EstadoDondeSeUbicaElTrabajoDelRepresentante">
                                                      <?php foreach ($estados as $estado_trab_rep){ ?>
                                                          <option value="<?php echo $estado_trab_rep['id_estado']?>" <?php echo ($estado_trabaja_representante==$estado_trab_rep['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado_trab_rep['nombre']?></option>
                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                                                  <div class="col-sm-6">
                                                      <select class="form-control" id="select-municipio-repreEstadoTrabajo" name="MunicipioDondeTrabajaElRepresentante" >
                                                        <option value="0" disabled="disabled" selected="selected" >Seleccione...</option>
                                                          <?php foreach ($municipios as $municipio){ ?>
                                                              <option data-id-estado="<?php echo ($municipio_trabaja_representante==$municipio['id_municipio'])?$estado_nacimiento_representante:$municipio['id_estado'] ?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($municipio_trabaja_representante==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                                                          <?php } ?>
                                                      </select>

                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde se ubica el trabajo</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante" placeholder="Urbanización o sector donde se ubica el trabajo del representante"  value="<?php echo $row['UrbanizaOSectorDondeSeUbicaElTrabajoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Calle o avenida donde trabaja</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante" placeholder="Calle o avenida donde trabaja el representante" value="<?php echo $row['CalleOAvenidaDondeSeUbicaElTrabajoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaElRepresentante" placeholder="Edificio o casa donde trabaja el representante" value="<?php echo $row['EdificioOCasaDondeTrabajaElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Piso donde se ubica el trabajo</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="1" class="form-control" id="reprePrimerNombre" name="PisoDondeSeUbicaElTrabajoDelRepresentante" placeholder="Piso donde se ubica el trabajo el representante" value="<?php echo $row['PisoDondeSeUbicaElTrabajoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Oficina, número o apartamento donde trabaja</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="OficinaNumeroOApartamentoDondeTrabajaElRepresentante" placeholder="Oficina, número o apartamento donde trabaja el representante" value="<?php echo $row['OficinaNumeroOApartamentoDondeTrabajaElRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Teléfono del trabajo actual</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="11" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelTrabajoActualDelRepresentante" placeholder="Teléfono del trabajo actual del representante" value="<?php echo $row['TelefonoDelTrabajoActualDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador depende-trabaja-alcaldia" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Extensión telefónica para contactar</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaParaContactarAlRepresentante" placeholder="Extensión telefónica para contactar al representante" value="<?php echo $row['ExtensionTelefonicaParaContactarAlRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDelRepresentante" placeholder="Persona contacto en el trabajo del representante" value="<?php echo $row['PersonaContactoEnElTrabajoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto del trabajo</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  minlength="11" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoDelTrabajoDelRepresentante" placeholder="Teléfono de la persona contacto del trabajo del representante" value="<?php echo $row['TelefonoDeLaPersonaContactoDelTrabajoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group repre-trabajador" style="<?php echo ($row['TrabajaActualmente']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto del trabajo</label>
                                                  <div class="col-sm-6">
                                                      <input type="text"  class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoDelTrabajoDelRepresentante" placeholder="Extensión de la persona contacto del trabajo del representante" value="<?php echo $row['ExtensionDeLaPersonaContactoDelTrabajoDelRepresentante']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Tiene alguna diversidad funcional<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" required class="form-control repre-diversidad-funcio" name="ElRepresentanteTieneAlgunaDiversidadFuncional" value="1" <?php echo ($diversidad_funcional_representante=='1')?'checked':'' ?> >Si</label>
                                                      <label><input type="radio" class="form-control repre-diversidad-funcio" name="ElRepresentanteTieneAlgunaDiversidadFuncional" value="0" <?php echo ($diversidad_funcional_representante=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group depen-repre-diversidad" style="<?php echo ($row['ElRepresentanteTieneAlgunaDiversidadFuncional']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Indique el tipo de diversidad funcional</label>
                                                  <div class="col-sm-6">
                                                      <div class="checkbox">
                                                      <input type="hidden" name="RepreDiversidadMotora" value="0" >
                                                        <label><input type="checkbox" name="RepreDiversidadMotora" value="1" <?php echo ($representante_diversidad_motora=='1')?'checked':'' ?> >Motora</label>
                                                      </div>

                                                      <div class="checkbox">
                                                      <input type="hidden" name="RepreDiversidadVisual" value="0" >
                                                        <label><input type="checkbox" name="RepreDiversidadVisual" value="1" <?php echo ($representante_diversidad_visual=='1')?'checked':'' ?> >Visual</label>
                                                      </div>

                                                      <div class="checkbox">
                                                      <input type="hidden" name="RepreDiversidadAuditiva" value="0" >
                                                        <label><input type="checkbox" name="RepreDiversidadAuditiva" value="1" <?php echo ($representante_diversidad_auditiva=='1')?'checked':'' ?> >Auditiva</label>
                                                      </div>

                                                      <div class="checkbox">
                                                      <input type="hidden" name="RepreDiversidadNeurologica" value="0" >
                                                        <label><input type="checkbox" name="RepreDiversidadNeurologica" value="1" <?php echo ($representante_diversidad_neurologica=='1')?'checked':'' ?> >Neurológica</label>
                                                      </div>
                                                      <div class="checkbox">
                                                      <input type="hidden" name="RepreDiversidadLenguaje" value="0" >
                                                        <label><input type="checkbox" name="RepreDiversidadLenguaje" value="1" <?php echo ($representante_diversidad_lenguaje=='1')?'checked':'' ?> >De lenguaje</label>
                                                      </div>

                                                      <div class="checkbox">
                                                      <input type="hidden" name="RepreDiversidadOtra" value="0" >
                                                        <label><input type="checkbox" name="RepreDiversidadOtra" value="1" <?php echo ($representante_diversidad_otra=='1')?'checked':'' ?> >Otra</label>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group depen-repre-diversidad" style="<?php echo ($row['RepreDiversidadOtra']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Especifique cuál otra diversidad funcional posee</label>
                                                  <div class="col-sm-6">
                                                      <textarea rows="4" cols="50" name="EspecificaRepreDiversidadOtra" value="<?php echo $row['EspecificaRepreDiversidadOtra']?>"> <?php echo htmlspecialchars($row['EspecificaRepreDiversidadOtra']); ?> </textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label for="field-1" class="col-sm-4 control-label">Tiene otros hijos estudiando en las Escuelas Municipales de Chacao<span style="color:red"> *</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" required class="form-control repre-hijos-estudian-chacao" name="ElRepresentanteTieneOtrosHijosEstudiandoChacao" value="1" <?php echo ($hijos_estudian_chacao=='1')?'checked':'' ?> >Si</label>
                                                      <label><input type="radio" class="form-control repre-hijos-estudian-chacao" name="ElRepresentanteTieneOtrosHijosEstudiandoChacao" value="0" <?php echo ($hijos_estudian_chacao=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>

                                              <div class="form-group hijos-estudian-chacao" style="<?php echo ($row['HijosEstudianGuanche']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label" >UEM "Juan de Dios Guanche"</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" class="form-control repre-hijos-estudian-guanche" name="HijosEstudianGuanche" value="1" <?php echo ($hijos_estudian_guanche=='1')?'checked':'' ?> >Sí</label>
                                                      <label><input type="radio" class="form-control repre-hijos-estudian-guanche" name="HijosEstudianGuanche" value="0" <?php echo ($hijos_estudian_guanche=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group hijos-estudian-guanche" style="<?php echo ($row['HijosEstudianGuanche']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Cuántos</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="1" class="form-control" id="cantidadHijosEstudianGuanche" name="CantidadHijosEstudianGuanche" placeholder="¿Cuantos hijos estudian en la UEM Juan de Dios Guanche?" value="<?php echo $row['CantidadHijosEstudianGuanche']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group hijos-estudian-guanche" style="<?php echo ($row['HijosEstudianGuanche']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">En cuáles grados</label>
                                                  <div class="col-sm-6">
                                                      <textarea rows="4" cols="50" name="GradosHijosEstudianGuanche" value="<?php echo $row['GradosHijosEstudianGuanche']?>"> <?php echo htmlspecialchars($row['GradosHijosEstudianGuanche']); ?> </textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group hijos-estudian-chacao" style="<?php echo ($row['HijosEstudianAndresBello']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">UEM "Andrés Bello"</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" class="form-control repre-hijos-estudian-andres-bello" name="HijosEstudianAndresBello" value="1" <?php echo ($hijos_estudian_abello=='1')?'checked':'' ?> >Sí</label>
                                                      <label><input type="radio" class="form-control repre-hijos-estudian-andres-bello" name="HijosEstudianAndresBello" value="0" <?php echo ($hijos_estudian_abello=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group hijos-estudian-andres-bello" style="<?php echo ($row['HijosEstudianAndresBello']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Cuántos</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="1" class="form-control" id="cantidadHijosEstudianAndresBello" name="CantidadHijosEstudianAndresBello" placeholder="¿Cuantos hijos estudian en la UEM Andrés Bello?" value="<?php echo $row['CantidadHijosEstudianAndresBello']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group hijos-estudian-andres-bello" style="<?php echo ($row['HijosEstudianAndresBello']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">En cuáles grados</label>
                                                  <div class="col-sm-6">
                                                      <textarea rows="4" cols="50" name="GradosHijosEstudianAndresBello" value="<?php echo $row['GradosHijosEstudianAndresBello']?>"> <?php echo htmlspecialchars($row['GradosHijosEstudianAndresBello']); ?> </textarea>
                                                  </div>
                                              </div>
                                              <div class="form-group hijos-estudian-chacao" style="<?php echo ($row['HijosEstudianCarlosSoublette']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">UEM "Carlos Soublette"</span></label>
                                                  <div class="col-sm-6" style="padding-top: 7px;">
                                                      <label><input type="radio" class="form-control repre-hijos-estudian-carlos-soublette" name="HijosEstudianCarlosSoublette" value="1" <?php echo ($hijos_estudian_soublette=='1')?'checked':'' ?> >Sí</label>
                                                      <label><input type="radio" class="form-control repre-hijos-estudian-carlos-soublette" name="HijosEstudianCarlosSoublette" value="0" <?php echo ($hijos_estudian_soublette=='0')?'checked':'' ?> >No</label>
                                                  </div>
                                              </div>
                                              <div class="form-group hijos-estudian-carlos-soublette" style="<?php echo ($row['HijosEstudianCarlosSoublette']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">Cuántos</label>
                                                  <div class="col-sm-6">
                                                      <input type="text" minlength="1" class="form-control" id="cantidadHijosEstudianCarlosSoublette" name="CantidadHijosEstudianCarlosSoublette" placeholder="¿Cuantos hijos estudian en la UEM Carlos Soublette?" value="<?php echo $row['CantidadHijosEstudianCarlosSoublette']?>">
                                                  </div>
                                              </div>
                                              <div class="form-group hijos-estudian-carlos-soublette" style="<?php echo ($row['HijosEstudianCarlosSoublette']=='1')?'':'display:none' ?>">
                                                  <label for="field-1" class="col-sm-4 control-label">En cuáles grados</label>
                                                  <div class="col-sm-6">
                                                      <textarea rows="4" cols="50" name="GradosHijosEstudianCarlosSoublette" alue="<?php echo $row['GradosHijosEstudianCarlosSoublette']?>"> <?php echo htmlspecialchars($row['GradosHijosEstudianCarlosSoublette']); ?> </textarea>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS DE LA MADRE -->
        <div class="panel-group joined" id="accordion-datos-madre" style="<?php echo ($row['LaMadreVive']=='1')?'':'display: none' ?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-madre" href="#collapse-datos-madre">
                            <i class="entypo-doc-text"> Datos de la Madre</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-madre" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label"> Madre<span style="color:red"> *</span></span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control madre-viva" name="LaMadreVive" value="1" <?php echo ($row['LaMadreVive']=='1')?'checked':'' ?> >Viva</label>
                    <label><input type="radio" class="form-control madre-viva" name="LaMadreVive" value="0" <?php echo ($row['LaMadreVive']=='0')?'checked':'' ?> >Fallecida</label>
                    <label><input type="radio" class="form-control madre-viva" name="LaMadreVive" value="2" <?php echo ($row['LaMadreVive']=='2')?'checked':'' ?> >Ausente</label>
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombres<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaMadre" placeholder="Nombres de la Madre" value="<?php echo $row['NombreDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Apellidos<span style="color:red"> *</span></label>
                <div class="col-sm-6">
            <input type="text" required minlength="2" class="form-control" id="repreSegundoNombre" name="ApellidosDeLaMadre" placeholder="Apellidos de la Madre" value="<?php echo $row['ApellidosDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="CedulaDeIdentidadDeLaMadre" name="CedulaDeIdentidadDeLaMadre" placeholder="Cédula de identidad de la madre" value="<?php echo $row['CedulaDeIdentidadDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control dateToMysql" id="madreFechaNac" name="FechaDeNacimientoDeLaMadre" placeholder="" value="<?php echo $nacimiento_madre ?>">
                    <input type="hidden" class="form-control" id="FechaDeNacimientoDeLaMadre" name="FechaDeNacimientoDeLaMadre" placeholder="" value="<?php echo $row['FechaDeNacimientoDeLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipoNacMadre" name="NacionalidadMadre" value="VENEZOLANA" <?php echo ($row['NacionalidadMadre']=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                    <label><input type="radio" class="form-control tipoNacMadre" name="NacionalidadMadre" value="EXTRANJERA" <?php echo ($row['NacionalidadMadre']=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>
                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreVe" style="<?php echo ($row['NacionalidadMadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estadoNacMadre" name="EstadoDondeNacioLaMadre">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeNacioLaMadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreVe" style="<?php echo ($row['NacionalidadMadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-estadoNacMadre" name="MunicipioDondeNacioLaMadre" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeNacioLaMadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-madre tipoNacDepenMadreEx" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':($row['NacionalidadMadre']=='VENEZOLANA')?'display:none':'' ?>" >
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento </label>
                <div class="col-sm-6">
                  <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDeNacimientoDeLaMadre" placeholder="País de nacimiento de la madre" value="<?php echo $row['PaisDeNacimientoDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado civil <span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" class="form-control" name="EstadoCivilMadre" value="SOLTERO" <?php echo ($row['EstadoCivilMadre']=='SOLTERO')?'checked':'' ?> >Soltera</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="CASADO" <?php echo ($row['EstadoCivilMadre']=='CASADO')?'checked':'' ?> >Casada</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="DIVORCIADO" <?php echo ($row['EstadoCivilMadre']=='DIVORCIADO')?'checked':'' ?> >Divorciada</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="CONCUBINATO" <?php echo ($row['EstadoCivilMadre']=='CONCUBINATO')?'checked':'' ?> >En concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilMadre" value="VIUDO" <?php echo ($row['EstadoCivilMadre']=='VIUDO')?'checked':'' ?> >Viuda</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control select-estado" id="madreEstadoResi" name="EstadoDondeResideLaMadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeResideLaMadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="select-municipio-madreEstadoResi" name="MunicipioDondeResideLaMadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeResideLaMadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div id="sectorMunicipioChacaoMadre" class="form-group only-hide-madre" style="<?php echo ($row['MunicipioDondeResideLaMadre']=='183')?'':'display:none' ?>">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="UrbanizacionOSectorDondeResideLaMadre" >
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($row['UrbanizacionOSectorDondeResideLaMadre']==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div id="sectorMunicipioMadre" class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='0')?'display:none':($row['MunicipioDondeResideLaMadre']=='183')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="repreParroNacimiento" name="UrbanizacionOSectorDondeResideLaMadre" placeholder="Urbanización o sector donde reside la madre" value="<?php echo $row['UrbanizacionOSectorDondeResideLaMadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" minlength="1" class="form-control" id="casaMadre" name="CasaOEdificioDondeResideLaMadre" placeholder="Casa o edificio donde reside la madre" value="<?php echo $row['CasaOEdificioDondeResideLaMadre'] ?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                  <input type="text" minlength="1" class="form-control" id="" name="PisoDondeResideLaMadre" placeholder="Piso donde reside la madre" value="<?php echo $row['PisoDondeResideLaMadre']?>">
                </div>
            </div>

            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" minlength="1" class="form-control" id="apartamentoMadre" name="NumeroOApartamentoDondeResideLaMadre" placeholder="Número o apartamento donde reside la madre" value="<?php echo $row['NumeroOApartamentoDondeResideLaMadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomiclioDeLaMadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomiclioDeLaMadre']?>"><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlDomiclioDeLaMadre']); ?></textarea>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="10" class="form-control onlyNumbers" id="telefonoHabitacion" name="TelefonoDeHabitacionDeLaMadre" placeholder="Teléfono de habitación de la madre" value="<?php echo $row['TelefonoDeHabitacionDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular</label>
                <div class="col-sm-6">
                  <input type="text" minlength="10" class="form-control onlyNumbers" id="telefonoCelular" name="TelefonoCelularDeLaMadre" placeholder="Telefono celular de la madre" value="<?php echo $row['TelefonoCelularDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="email" required minlength="7" class="form-control" id="correoMadre" name="CorreoElectronicoDeLaMadre" placeholder="Correo electrónico de la madre" value="<?php echo $row['CorreoElectronicoDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Redes sociales que usa</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreFacebook" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreFacebook" value="1" <?php echo ($row['RedSocialMadreFacebook']=='1')?'checked':'' ?> >Facebook</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreTwitter" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreTwitter" value="1" <?php echo ($row['RedSocialMadreTwitter']=='1')?'checked':'' ?>>Twitter</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreWhatsapp" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreWhatsapp" value="1" <?php echo ($row['RedSocialMadreWhatsapp']=='1')?'checked':'' ?>>Whatsapp</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialMadreOtra" value="0" >
                      <label><input type="checkbox" name="RedSocialMadreOtra" value="1" <?php echo ($row['RedSocialMadreOtra']=='1')?'checked':'' ?>>Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group depen-madre-vive" style="<?php echo ($row['LaMadreVive']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">La madre labora actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" class="form-control madreTrabaja" name="MadreTrabaja" value="1" <?php echo ($row['MadreTrabaja']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control madreTrabaja" name="MadreTrabaja" value="0" <?php echo ($row['MadreTrabaja']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="" name="ProfesionUOcupacionDeLaMadre" placeholder="Profesión u ocupación de la madre" value="<?php echo $row['ProfesionUOcupacionDeLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                <div class="col-sm-6" >
                    <select class="form-control"  id="select-otros-ingresosFamilia" name="IngresoMensualMadre" >
                    <?php foreach ($nivel_ingreso as $nivel){ ?>
                        <option value="<?php $nivel['id_nivel_ingreso_censo']?>" class="oculto" <?php echo ($row['IngresoMensualMadre']==$nivel['id_nivel_ingreso_censo'])?'selected="selected"':'' ?>> <?php echo $nivel['valor']?></option>
                    <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja " style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="TIEMPOCOMPLETO" <?php echo ($row['TipoDeJornadaLaboralMadre']=='TIEMPOCOMPLETO')?'checked':'' ?> >Tiempo completo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="MEDIOTIEMPO" <?php echo ($row['TipoDeJornadaLaboralMadre']=='MEDIOTIEMPO')?'checked':'' ?> >Medio Tiempo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralMadre" value="NOCTURNA" <?php echo ($row['TipoDeJornadaLaboralMadre']=='NOCTURNA')?'checked':'' ?> >Nocturna</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de relacion laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORINFORMAL" <?php echo ($row['TipoDeRelacionLaboralDeLaMadre']=='TRABAJADORINFORMAL')?'checked':'' ?> >Trabajador Informal</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORINDEPENEDIENTE" <?php echo ($row['TipoDeRelacionLaboralDeLaMadre']=='TRABAJADORINDEPENEDIENTE')?'checked':'' ?> >Trabajador Independiente</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDeLaMadre" value="TRABAJADORDEPENDIENTE" <?php echo ($row['TipoDeRelacionLaboralDeLaMadre']=='TRABAJADORDEPENDIENTE')?'checked':'' ?> >Trabajador Dependiente</label>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre" placeholder="Nombre de la empresa u organismo donde trabaja la madre" value="<?php echo $row['NombreDeLaEmpresaUOrganismoDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde trabaja</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="madreEstadoTrabajo" name="EstadoDondeTrabajaLaMadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeTrabajaLaMadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-madreEstadoTrabajo" name="MunicipioDondeTrabajaLaMadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeTrabajaLaMadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizacionOSectorDondeTrabajaLaMadre" placeholder="Urbanización o sector donde trabaja la madre" value="<?php echo $row['UrbanizacionOSectorDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaLaMadre" placeholder="" value="<?php echo $row['EdificioOCasaDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="PisoDondeTrabajaLaMadre" placeholder="" value="<?php echo $row['PisoDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Número de oficina, apartamento o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control " id="reprePrimerNombre" name="NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre" placeholder="Número de oficina, apartamento o casa donde trabaja la madre" value="<?php echo $row['NumeroDeOficinaApartamentoOCasaDondeTrabajaLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al trabajo</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlTrabajoDeLaMadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlTrabajoDeLaMadre']?>" ></textarea>
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del lugar de trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="10" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelLugarDelTrabajodeLaMadre" placeholder="Teléfono del lugar de trabajo de la madre" value="<?php echo $row['TelefonoDelLugarDelTrabajodeLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extensión telefónica para contactar</label>
                <div class="col-sm-6">
                    <input type="text"  class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaParaContactarALaMadre" placeholder="Extensión telefónica para contactar a la madre" value="<?php echo $row['ExtensionTelefonicaParaContactarALaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDeLaMadre" placeholder="Persona contacto en el trabajo de la madre" value="<?php echo $row['PersonaContactoEnElTrabajoDeLaMadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre" placeholder="Teléfono de la persona contacto en el trabajo de la madre" value="<?php echo $row['TelefonoDeLaPersonaContactoEnElTrabajoDeLaMadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-madre depen-madre-trabaja" style="<?php echo ($row['MadreTrabaja']=='1')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre" placeholder="Extensión de la persona contacto en el trabajo de la madre" value="<?php echo $row['ExtensionDeLaPersonaContactoEnElTrabajoDeLaMadre']?>" >
                </div>
            </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS DEL PADRE -->
        <div class="panel-group joined" id="accordion-datos-padre" style="<?php echo ($row['LaMadreVive']=='1')?'':'display: none' ?>">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-padre" href="#collapse-datos-padre">
                            <i class="entypo-doc-text"> Datos del Padre</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-padre" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">El padre vive<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padre-viva" name="ElPadreVive" value="1" <?php echo ($row['ElPadreVive']=='1')?'checked':'' ?> >Vivo</label>
                    <label><input type="radio" class="form-control padre-viva" name="ElPadreVive" value="0" <?php echo ($row['ElPadreVive']=='0')?'checked':'' ?> >Fallecido</label>
                    <label><input type="radio" class="form-control padre-viva" name="ElPadreVive" value="2" <?php echo ($row['ElPadreVive']=='2')?'checked':'' ?> >Ausente</label>
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombre<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDelPadre" placeholder="Nombres del Padre" value="<?php echo $row['NombreDelPadre'] ?>" >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Apellidos<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreSegundoNombre" name="ApellidosDelPadre" placeholder="Apellidos del Padre" value="<?php echo $row['ApellidosDelPadre'] ?>" >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Cédula de identidad<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="CedulaDeIdentidadDelPadre" name="CedulaDeIdentidadDelPadre" placeholder="Cédula de identidad del padre" value="<?php echo $row['CedulaDeIdentidadDelPadre'] ?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Fecha de nacimiento<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control dateToMysql" id="padreFechaNac" name="FechaDeNacimientoDelPadre" placeholder="" value="<?php echo $nacimiento_padre ?>" >
                    <input type="hidden" class="form-control" id="FechaDeNacimientoDelPadre" name="FechaDeNacimientoDelPadre" placeholder="" value="<?php echo $row['FechaDeNacimientoDelPadre'] ?>" >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nacionalidad<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control tipoNacPadre" name="NacionalidadDelPadre" value="VENEZOLANA" <?php echo ($row['NacionalidadDelPadre']=='VENEZOLANA')?'checked':'' ?> >Venezolana</label>
                    <label><input type="radio" class="form-control tipoNacPadre" name="NacionalidadDelPadre" value="EXTRANJERA" <?php echo ($row['NacionalidadDelPadre']=='EXTRANJERA')?'checked':'' ?> >Extranjera</label>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreVe" style="<?php echo ($row['NacionalidadDelPadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde nació</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estadoNacPadre" name="EstadoDondeNacioElPadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeNacioElPadre']==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreVe" style="<?php echo ($row['NacionalidadDelPadre']=='VENEZOLANA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde nació</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-estadoNacPadre" name="MunicipioDondeNacioElPadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeNacioElPadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group only-hide-padre tipoNacDepenPadreEx" style="<?php echo ($row['NacionalidadDelPadre']=='EXTRANJERA')?'':'display:none' ?>">
                <label for="field-1" class="col-sm-4 control-label">País de nacimiento</label>
                <div class="col-sm-6">
                  <input type="text" minlength="2" class="form-control" id="reprePrimerNombre" name="PaisDondeNacioElPadre" placeholder="País donde nacio el padre" value="<?php echo $row['PaisDondeNacioElPadre']?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado civil<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="EstadoCivilDelPadre" value="SOLTERO" <?php echo ($row['EstadoCivilDelPadre']=='SOLTERO')?'checked':'' ?> >Soltero</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="CASADO" <?php echo ($row['EstadoCivilDelPadre']=='CASADO')?'checked':'' ?> >Casado</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="DIVORCIADO" <?php echo ($row['EstadoCivilDelPadre']=='DIVORCIADO')?'checked':'' ?> >Divorciado</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="CONCUBINATO" <?php echo ($row['EstadoCivilDelPadre']=='CONCUBINATO')?'checked':'' ?> >En concubinato</label>
                    <label><input type="radio" class="form-control" name="EstadoCivilDelPadre" value="VIUDO" <?php echo ($row['EstadoCivilDelPadre']=='VIUDO')?'checked':'' ?> >Viudo</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select required class="form-control select-estado" id="padreEstadoResi" name="EstadoDondeResideElPadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($row['EstadoDondeResideElPadre']==$estado['id_estado'])?'selected="selected"':'' ?> ><?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <select required class="form-control" id="select-municipio-padreEstadoResi" name="MunicipioDondeResideElPadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeResideElPadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div id="sectorMunicipioChacaoPadre" class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':($row['MunicipioDondeResideElPadre']=='183')?'display:none':'' ?>">
                <label for="address" class="col-sm-4 control-label">Sector</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-sector-municipio" name="UrbanizacionOSectorDondeResideElPadre" >
                        <?php foreach ($sectores as $sector){ ?>
                            <option value="<?php echo $sector['id_sector']?>" class="oculto" <?php echo ($row['UrbanizacionOSectorDondeResideElPadre']==$sector['id_sector'])?'selected="selected"':'' ?> > <?php echo $sector['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div  id="sectorMunicipioPadre" class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':($row['MunicipioDondeResideElPadre']=='183')?'display:none':'' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde reside</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="repreParroNacimiento" name="UrbanizacionOSectorDondeResideElPadre" placeholder="Urbanización o sector donde reside del padre" value="<?php echo $row['UrbanizacionOSectorDondeResideElPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Casa o edificio donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreFechaNac" name="CasaOEdificioDondeResideElPadre" placeholder="Casa o edificio donde reside el padre" value="<?php echo $row['CasaOEdificioDondeResideElPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde reside</label>
                <div class="col-sm-6">
                  <input type="text" required minlength="1" class="form-control" id="repreFechaNac" name="PisoDondeResideElPadre" placeholder="Piso donde reside el padre" value="<?php echo $row['PisoDondeResideElPadre']?>">
                </div>
            </div>

            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Número o apartamento donde reside<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="1" class="form-control" id="padreApartamento" name="NumeroDeCasaOApartamentoDondeResideElPadre" placeholder="Número o apartamento donde reside el padre" value="<?php echo $row['NumeroDeCasaOApartamentoDondeResideElPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al domicilio</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlDomicilioDelPadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlDomicilioDelPadre']?>"><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlDomicilioDelPadre']); ?></textarea>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de habitación<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <input type="text" required minlength="10" class="form-control onlyNumbers" id="padreTelefonoHabitacion" name="TelefonoDeHabitacionDelPadre" placeholder="Teléfono de habitación del padre" value="<?php echo $row['TelefonoDeHabitacionDelPadre']?>"  >
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono celular</label>
                <div class="col-sm-6">
                  <input type="text" minlength="" class="form-control onlyNumbers" id="padreTelefonoCelular" name="TelefonoCelularDelPadre" placeholder="Teléfono celular del padre" value="<?php echo $row['TelefonoCelularDelPadre']?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Correo electrónico<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="email" required minlength="7" class="form-control" id="padreCorreoElectronico" name="CorreoElectronicoDelPadre" placeholder="Correo electrónico del padre" value="<?php echo $row['CorreoElectronicoDelPadre']?>">
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Redes sociales que usa</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreFacebook" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreFacebook" value="1" <?php echo ($row['RedSocialPadreFacebook']=='1')?'checked':'' ?> >Facebook</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreTwitter" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreTwitter" value="1" <?php echo ($row['RedSocialPadreTwitter']=='1')?'checked':'' ?> >Twitter</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreWhatsapp" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreWhatsapp" value="1" <?php echo ($row['RedSocialPadreWhatsapp']=='1')?'checked':'' ?> >Whatsapp</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="RedSocialPadreOtra" value="0" >
                      <label><input type="checkbox" name="RedSocialPadreOtra" value="1" <?php echo ($row['RedSocialPadreOtra']=='1')?'checked':'' ?> >Otra</label>
                    </div>
                </div>
            </div>
            <div class="form-group depen-padre-vive" style="<?php echo ($row['ElPadreVive']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">El padre labora actualmente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control padreTrabaja" name="ElPadreTrabajaActualmente" value="1" <?php echo ($row['ElPadreTrabajaActualmente']=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control padreTrabaja" name="ElPadreTrabajaActualmente" value="0" <?php echo ($row['ElPadreTrabajaActualmente']=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Profesión u ocupación</label>
                <div class="col-sm-6">
                    <input type="text" minlength="2" class="form-control" id="repreEmail" name="ProfesionUOcupacionDelPadre" placeholder="Profesión u ocupación del padre" value="<?php echo $row['ProfesionUOcupacionDelPadre']?>">
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Ingreso mensual</label>
                <div class="col-sm-6" >
                    <select class="form-control"  id="select-otros-ingresosFamilia" name="IngresoMensualDelPadre" >
                    <?php foreach ($nivel_ingreso as $nivel){ ?>
                        <option value="<?php $nivel['id_nivel_ingreso_censo']?>" class="oculto" <?php echo ($row['IngresoMensualDelPadre']==$nivel['id_nivel_ingreso_censo'])?'selected="selected"':'' ?>> <?php echo $nivel['valor']?></option>
                    <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de jornada laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelPadre" value="TIEMPOCOMPLETO" <?php echo ($row['TipoDeJornadaLaboralDelPadre']=='TIEMPOCOMPLETO')?'checked':'' ?>>Tiempo completo</label>
                    <label><input type="radio" required class="form-control" name="TipoDeJornadaLaboralDelPadre" value="MEDIOTIEMPO" <?php echo ($row['TipoDeJornadaLaboralDelPadre']=='MEDIOTIEMPO')?'checked':'' ?>>Medio Tiempo</label>
                    <label><input type="radio" class="form-control" name="TipoDeJornadaLaboralDelPadre" value="NOCTURNA" <?php echo ($row['TipoDeJornadaLaboralDelPadre']=='NOCTURNA')?'checked':'' ?> >Nocturna</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Tipo de relacion laboral</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORINFORMAL" <?php echo ($row['TipoDeRelacionLaboralDelPadre']=='TRABAJADORINFORMAL')?'checked':'' ?> >Trabajador Informal</label>
                    <label><input type="radio" required class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORINDEPENEDIENTE" <?php echo ($row['TipoDeRelacionLaboralDelPadre']=='TRABAJADORINDEPENEDIENTE')?'checked':'' ?> >Trabajador Independiente</label>
                    <label><input type="radio" class="form-control" name="TipoDeRelacionLaboralDelPadre" value="TRABAJADORDEPENDIENTE" <?php echo ($row['TipoDeRelacionLaboralDelPadre']=='TRABAJADORDEPENDIENTE')?'checked':'' ?> >Trabajador Dependiente</label>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Nombre de la empresa u organismo donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre" placeholder="Nombre de la empresa u organismo donde trabaja el padre" value="<?php echo $row['NombreDeLaEmpresaUOrganismoDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Estado donde trabaja</label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="padreEstadoTrabajo" name="EstadoDondeTrabajaElPadre">
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>"  <?php echo ($row['EstadoDondeTrabajaElPadre']==$estado['id_estado'])?'selected="selected"':'' ?> ><?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Municipio donde trabaja</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-municipio-padreEstadoTrabajo" name="MunicipioDondeTrabajaElPadre" >
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($row['MunicipioDondeTrabajaElPadre']==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                    </select>

                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Urbanización o sector donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="UrbanizacionOSectorDondeTrabajaElPadre" placeholder="Urbanización o sector donde trabaja el padre" value="<?php echo $row['UrbanizacionOSectorDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Edificio o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="EdificioOCasaDondeTrabajaElPadre" placeholder="Edificio o casa donde trabaja el padre" value="<?php echo $row['EdificioOCasaDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Piso donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control" id="reprePrimerNombre" name="PisoDondeTrabajaElPadre" placeholder="" value="<?php echo $row['PisoDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label" >Número de oficina, apartamento o casa donde trabaja</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="1" class="form-control onlyNumbers" id="reprePrimerNombre" name="OficinaCasaOApartamentoDondeTrabajaElPadre" placeholder="Número de oficina, apartamento o casa donde trabaja el padre" value="<?php echo $row['OficinaCasaOApartamentoDondeTrabajaElPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Punto de referencia cercano al trabajo</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="PuntoDeReferenciaCercanoAlTrabajoDelPadre" value="<?php echo $row['PuntoDeReferenciaCercanoAlTrabajoDelPadre']?>" ><?php echo htmlspecialchars($row['PuntoDeReferenciaCercanoAlTrabajoDelPadre']); ?></textarea>
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del lugar de trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDelLugarDeTrabajotrabajoDelPadre" placeholder="Teléfono del lugar de trabajo del padre" value="<?php echo $row['TelefonoDelLugarDeTrabajotrabajoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extension telefónica para contactar</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionTelefonicaDeContactoDelPadre" placeholder="Extension telefónica para contactar al padre" value="<?php echo $row['ExtensionTelefonicaDeContactoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control" id="reprePrimerNombre" name="PersonaContactoEnElTrabajoDelPadre" placeholder="Persona contacto en el trabajo del padre" value="<?php echo $row['PersonaContactoEnElTrabajoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Teléfono de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="TelefonoDeLaPersonaContactoEnElTrabajoDelPadre" placeholder="Teléfono de la persona contacto en el trabajo del padre" value="<?php echo $row['TelefonoDeLaPersonaContactoEnElTrabajoDelPadre']?>" >
                </div>
            </div>
            <div class="form-group only-hide-padre depen-padre-trabaja" style="<?php echo ($row['ElPadreTrabajaActualmente']=='0')?'display:none':'' ?>">
                <label for="field-1" class="col-sm-4 control-label">Extensión de la persona contacto en el trabajo</label>
                <div class="col-sm-6">
                    <input type="text"  minlength="2" class="form-control onlyNumbers" id="reprePrimerNombre" name="ExtensionDeLaPersonaContactoEnElTrabajodelPadre" placeholder="Extensión de la persona contacto en el trabajo del padre" value="<?php echo $row['ExtensionDeLaPersonaContactoEnElTrabajodelPadre']?>" >
                </div>
            </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS SOCIOECONOMICOS -->
        <div class="panel-group joined" id="accordion-datos-socioeconomicos">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-socioeconomicos" href="#collapse-datos-socioeconomicos">
                            <i class="entypo-doc-text"> Datos Socioeconomicos</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-socioeconomicos" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >
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
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS SALUD -->
        <div class="panel-group joined" id="accordion-datos-salud">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-salud" href="#collapse-datos-salud">
                            <i class="entypo-doc-text"> Datos de Salud</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-salud" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >

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
                            <input type="number" required minlength="6" class="form-control" id="estatura_metros" name="estatura_metros" placeholder="" value="<?php echo $row['estatura_metros']; ?>">
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="color:gray; text-align: left !important;">metro(s)</label>
                    </div>
                    <div class="col-sm-6" style="padding: 0px ! important;">
                        <div class="col-sm-6" style="padding: 0px ! important;">
                            <input type="number" required minlength="6" class="form-control" id="estatura_centimetros" name="estatura_centimetros" placeholder="" value="<?php echo $row['estatura_centimetros']; ?>">
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
                            <input type="number" required minlength="6" class="form-control" id="peso_kilos" name="peso_kilos" placeholder="" value="<?php echo $row['peso_kilos']; ?>">
                        </div>
                        <label for="field-1" class="col-sm-4 control-label" style="color:gray; text-align: left !important;">kilo(s)</label>
                    </div>
                    <div class="col-sm-6" style="padding: 0px ! important;">
                        <div class="col-sm-6" style="padding: 0px ! important;">
                            <input type="number" required minlength="6" class="form-control" id="peso_gramos" name="peso_gramos" placeholder="" value="<?php echo $row['peso_gramos']; ?>">
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

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS DE INTERES -->
        <div class="panel-group joined" id="accordion-datos-interes">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-interes" href="#collapse-datos-interes">
                            <i class="entypo-doc-text"> Datos de Interés</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-interes" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >

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

                    <div class="checkbox depenActividadEspe" style="<?php echo ($row['RealizaAlgunaActividadEspecial']=='0')?'display:none':'' ?>" >
                    <input type="hidden" name="aluActiDeportivaNinguna" value="0" >
                      <label><input type="checkbox" class="requireActiEspecialAlu" id="idAluActiDeportivaNinguna" name="aluActiDeportivaNinguna" value="1" <?php echo ($row['aluActiDeportivaNinguna']=='1')?'checked':'' ?> >Ninguna</label>
                    </div>
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
                    <input type="hidden" required minlength="2" class="form-control" id="" name="id_escuela" placeholder="" value="<?php echo $row['id_escuela']?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Observaciones</label>
                <div class="col-sm-6">
                  <textarea rows="4" cols="50" name="Observaciones" value="<?php echo $row['Observaciones']?>"><?php echo htmlspecialchars($row['Observaciones']); ?></textarea>
                </div>
            </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS DE ASISTENCIA -->
        <div class="panel-group joined" id="accordion-datos-asistencia">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-asistencia" href="#collapse-datos-asistencia">
                            <i class="entypo-doc-text"> Datos de Asistencia</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-asistencia" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DATOS DE APROBACION -->
        <div class="panel-group joined" id="accordion-datos-aprobacion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-datos-aprobacion" href="#collapse-datos-aprobacion">
                            <i class="entypo-doc-text"> Datos de Aprobación</i>
                        </a>
                    </h4>
                </div>
                <div id="collapse-datos-aprobacion" class="panel-collapse collapse <?php if($toggle){echo 'in'; $toggle=false;}?>" >
                    <div class="panel-body">
                        <div class="col-md-12">
                                <div class="row" >

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
}
?>