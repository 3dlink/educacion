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

    $file =  str_replace("\\", '/', $row['aluNombreFoto']);
?>

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
                            <img src="<?php echo $this->crud_model->get_image_url_db('student', basename($file));?>" alt="...">
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
                        <input type="text" required minlength="2" class="form-control" id="aluPrimerNombre" name="PrimerNombreDelAlumno" placeholder="Primer nombre del alumno" value="<?php echo $row['PrimerNombreDelAlumno']?>" >
                        <input type="hidden" required minlength="2" class="form-control" id="aluNombreFoto" name="aluNombreFoto" value="<?php echo $row['aluNombreFoto']?>" >
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
            <div class="form-group" id="cedulaIdentidadAlumno" style="display: none;">
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
                            <input type="number" required minlength="1" maxlength="1" min="1" max="9" class="form-control" id="posicion_parto"  placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 0px ! important;">
                        <div class="col-sm-10" style="padding: 0px ! important;">
                            <input type="number" required minlength="1" maxlength="2" min="0" max="99"  class="form-control" id="nacimiento_alumno" placeholder="" value="">
                        </div>
                    </div>
                    <div class="col-sm-4" style="padding: 0px ! important;">
                        <div class="col-sm-12" style="padding: 0px ! important;">
                            <input type="number" required minlength="7" maxlength="8" min="0" max="99999999"  class="form-control" id="cedula_representante" placeholder="" value="">
                        </div>
                    </div>
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
                <div class="col-sm-6">
                      <input type="text" required class="form-control dateToMysql" id="aluFechaNac" name="FechaDeNacimientoDelAlumno" placeholder="" value="<?php echo $nacimiento_alumno ?>" >
                      <input type="hidden" required class="form-control" id="idFechaDeNacimientoDelAlumno" name="FechaDeNacimientoDelAlumno" value="<?php echo $row['FechaDeNacimientoDelAlumno']?>">
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

<?php
}
?>