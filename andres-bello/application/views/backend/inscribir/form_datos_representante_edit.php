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

    $DependenciaAlcaldia = $row['DependenciaAlcaldia'];

    $file =  str_replace("\\", '/', $row['repreNombreFoto']);
?>
<div class="tab-pane box" id="datosRepre">
    <div class="box-content">
        <form id="form-image-representante" class="form-horizontal form-groups-bordered form-censo" method="post" enctype="multipart/form-data" action='<?php echo base_url(); ?>upload_parent_image.php'>
            <div class="form-group">
                <label for="field-1" class="col-sm-12 control-label" style="text-align: center;">La imagen no debe superar 1MB, el formato debe ser jpg o JPG y el nombre no puede contener espacios en blanco. </br> Se recomienda un tamaño de 180 pixeles de alto y 150 pixeles de ancho.</label>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Fotografía</label>
                <div class="col-sm-6">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                            <img src="<?php echo $this->crud_model->get_image_url_db('parent', basename($file));?>" alt="...">
                        </div>
                        <div id='preview-image-representante' class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                        <div>
                            <span class="btn btn-white btn-file">
                                <span class="fileinput-new">Seleccionar Imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                <input type="file" name="photo-image-representante" id="photo-image-representante" accept="image/jpeg">
                            </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="form-datos-representante" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8" enctype="multipart/form-data">
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
            <div class="form-group" id="div-select-tipo-parentesco" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Parentesco</label>
                <div class="col-sm-6">
                  <select class="form-control" id="repreParentescoOtro" name="OtroParentescoConElAlumno">
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
                    <input type="hidden" required minlength="2" class="form-control" id="repreNombreFoto" name="repreNombreFoto" value="<?php echo $row['repreNombreFoto']?>">
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
                        <option value="<?php echo $estado_reside_rep['id_estado']?>"
                            <?php echo ($residente=='1' && $estado_reside_rep['id_estado'] == 13) ? 'selected="selected"': ($estado_residencia_representante==$estado_reside_rep['id_estado'])?'selected="selected"': ''  ?> >
                            <?php echo $estado_reside_rep['nombre']?>
                        </option>
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
                        <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto"
                            <?php echo ($residente=='1' && $municipio['id_estado'] == 13) ? 'selected="selected"': ($municipio_residencia_representante==$municipio['id_municipio'])?'selected="selected"': ''  ?> >
                            <?php echo $municipio['nombre']?>
                        </option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div id="sectorMunicipioChacaoRepre" class="form-group" style="<?php echo ($residente=='1')?'':'display:none' ?>">
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
            <div id="sectorMunicipioRepre" class="form-group" style="<?php echo ($residente=='1')?'display:none':'' ?>">
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
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="button" id="siguiente-representante" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>