<?php

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

$residente = $row['Residente'];
$alunno_vive_con = $row['ElAlumnoViveCon'];
$cupos_solicitar = $row['CuposASolicitar'];
$grado_cursar = $row['GradoACursar'];
$alumno_estudia_actualmente = $row['ElAlumnoEstudiaActualmente'];
$alumno_curso_anterior = $row['ElAlumnoCursoElAnterior'];
$alumno_repite = $row['ElAlumnoRepiteGrado'];
$grado_repetido = $row['GradoRepetido'];
$escuela_procedencia = $row['UnidadEducativaDeProcedencia'];
$estado_institucion = $row['EstadoInstitucion'];
$municipio_institucion = $row['MunicipioInstitucion'];
$materia_pendiente = $row['MateriaPendiente'];

$pref_guanche = $row['UniDePrefJuanDio'];
$pref_andres = $row['UniDePrefAndres'];
$pref_soublette = $row['UniDePrefCarlos'];

$razon_socio = $row['RazonSocioeco'];
$razon_cambio = $row['RazonCambioResi'];
$razon_adapt = $row['RazonNoAdapta'];
$razon_otra = $row['RazonOtra'];

?>
<div class="tab-pane box" id="infoGeneral">
    <div class="box-content">
        <form id="form-general" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
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
                <label for="identification" class="col-sm-4 control-label">Cupos a solicitar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="CuposASolicitar" name="CuposASolicitar" required>
                    <?php for ($cupos = 1; $cupos <= 4; $cupos++){ ?>
                        <option value="<?php echo $cupos ?>" <?php echo ($cupos_solicitar==$cupos)?'selected="selected"':'' ?> > <?php echo $cupos ?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo">
                <label for="secondname" class="col-sm-4 control-label">El alumno ha estudiado anteriormente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control estudioAnterior" name="ElAlumnoEstudiaActualmente" value="1" <?php echo ($alumno_estudia_actualmente=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control estudioAnterior" name="ElAlumnoEstudiaActualmente" value="0" <?php echo ($alumno_estudia_actualmente=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($row['GradoACursar']=='1')?'display:none':'' ?>">
                <label for="secondname" class="col-sm-4 control-label">El alumno curso el año anterior<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control" name="ElAlumnoCursoElAnterior" value="1" <?php echo ($alumno_curso_anterior=='1')?'checked':'' ?> >Sí</label>
                    <label><input type="radio" class="form-control" name="ElAlumnoCursoElAnterior" value="0" <?php echo ($alumno_curso_anterior=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($row['GradoACursar']=='1')?'display:none':'' ?>" >
                <label for="surname" class="col-sm-4 control-label">El alumno repite grado<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                        <label><input id="alumnoRepite" type="radio" required class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="1" <?php echo ($alumno_repite=='1')?'checked':'' ?> >Sí</label>
                        <label><input type="radio" class="form-control clasGraRepe" name="ElAlumnoRepiteGrado" value="0" <?php echo ($alumno_repite=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div id="div-GradoRepetido" class="form-group" style="<?php echo ($row['ElAlumnoRepiteGrado']=='1')?'':'display:none' ?>">
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
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($row['GradoACursar']=='1')?'display:none':'' ?>">
                <label for="grade" class="col-sm-4 control-label">Unidad educativa de procedencia<span style="color:red"> *</span></label>
                <div class="col-sm-8" style="padding-top: 7px;">
                    <label><input type="radio" required class="form-control UniProc" name="UnidadEducativaDeProcedencia" value="NULL" <?php echo ($escuela_procedencia=='NULL')?'checked':'' ?> >Ninguna</label>
                    <label><input type="radio" class="form-control UniProc UniProc-requi" name="UnidadEducativaDeProcedencia" value="NACIONAL" <?php echo ($escuela_procedencia=='NACIONAL')?'checked':'' ?> >Nacional</label>
                    <label><input type="radio" class="form-control UniProc UniProc-requi" name="UnidadEducativaDeProcedencia" value="MUNICIPAL" <?php echo ($escuela_procedencia=='MUNICIPAL')?'checked':'' ?> >Municipal</label>
                    <label><input type="radio" class="form-control UniProc UniProc-requi" name="UnidadEducativaDeProcedencia" value="PRIVADA" <?php echo ($escuela_procedencia=='PRIVADA')?'checked':'' ?> >Privada</label>
                </div>
            </div>
            <div class="form-group dependiente-UniProc depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($row['GradoACursar']=='1')?'display:none':'' ?>">
                <label for="section" class="col-sm-4 control-label">Nombre de la institución<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="NombreDeLaInstitucion" name="NombreDeLaInstitucion" placeholder="Nombre de la institucion de procedencia del representante" value="<?php echo $row['NombreDeLaInstitucion'] ?>">
                </div>
            </div>
            <div class="form-group dependiente-UniProc depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($row['GradoACursar']=='1')?'display:none':'' ?>">
                <label for="section" class="col-sm-4 control-label">Estado<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control select-estado" id="estado-institu" name="EstadoInstitucion">
	                  <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($estados as $estado){ ?>
                        <option value="<?php echo $estado['id_estado']?>" <?php echo ($estado_institucion==$estado['id_estado'])?'selected="selected"':'' ?> > <?php echo $estado['nombre']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group dependiente-UniProc depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($row['GradoACursar']=='1')?'display:none':'' ?>">
                <label for="address" class="col-sm-4 control-label">Municipio<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                      <select class="form-control" id="select-municipio-estado-institu" name="MunicipioInstitucion" >
	                      <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($municipios as $municipio){ ?>
                            <option data-id-estado="<?php echo $municipio['id_estado']?>" value="<?php echo $municipio['id_municipio']?>" class="oculto" <?php echo ($municipio_institucion==$municipio['id_municipio'])?'selected="selected"':'' ?> > <?php echo $municipio['nombre']?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior" style="<?php echo ($row['GradoACursar']=='1')?'display:none':'' ?>">
                <label for="address" class="col-sm-4 control-label">Materia pendiente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                     <label><input id="matPenRadio" type="radio" required class="form-control materia-pendiente" name="MateriaPendiente"
                     value="1" <?php echo ($materia_pendiente == 1)?'checked':'' ?> >Sí</label>
                     <label><input type="radio" class="form-control materia-pendiente" name="MateriaPendiente"
                     value="0" <?php echo ($materia_pendiente != 1)?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" style="<?php echo ($row['MateriaPendiente']=='0')?'display:none':'' ?>">
                <label for="address" class="col-sm-4 control-label">Especifique cuáles materias están pendientes</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueCualesMateriasEstanPendientes" value="<?php echo $row['EspecifiqueCualesMateriasEstanPendientes']?>"><?php echo htmlspecialchars($row['EspecifiqueCualesMateriasEstanPendientes']); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Unidad educativa de su preferencia<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                     <div class="checkbox">
                     <input type="hidden" name="UniDePrefJuanDio" value="0" >
                      <label><input type="checkbox" id="UniDePrefJuanDio" name="UniDePrefJuanDio" class="requireUniEdu" value="1" <?php echo ($pref_guanche=='1')?'checked':'' ?> >UEM Juan de Dios Guanche</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="UniDePrefAndres" value="0" >
                      <label><input type="checkbox" id="UniDePrefAndres" name="UniDePrefAndres" class="requireUniEdu" value="1" <?php echo ($pref_andres=='1')?'checked':'' ?> >UEM Andrés Bello</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="UniDePrefCarlos" value="0" >
                      <label><input type="checkbox" id="UniDePrefCarlos" name="UniDePrefCarlos" class="requireUniEdu" value="1" <?php echo ($pref_soublette=='1')?'checked':'' ?> >UEMI Carlos Soublette</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-4 control-label">Razones de su solicitud<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                     <div class="checkbox">
                     <input type="hidden" name="RazonSocioeco" value="0" >
                      <input type="checkbox" name="RazonSocioeco" class="requireRazonSoli" value="1" <?php echo ($razon_socio=='1')?'checked':'' ?> >Socioeconómicas
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="RazonCambioResi" value="0" >
                      <input type="checkbox" name="RazonCambioResi" class="requireRazonSoli" value="1" <?php echo ($razon_cambio=='1')?'checked':'' ?> >Cambio de residencia
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="RazonNoAdapta" value="0" >
                      <input type="checkbox" name="RazonNoAdapta" class="requireRazonSoli" value="1" <?php echo ($razon_adapt=='1')?'checked':'' ?> >No adaptación escolar
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="RazonOtra" value="0" >
                      <input type="checkbox" name="RazonOtra" class="requireRazonSoli" value="1" <?php echo ($razon_otra=='1')?'checked':'' ?> >Otras
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-generales" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-generales" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>