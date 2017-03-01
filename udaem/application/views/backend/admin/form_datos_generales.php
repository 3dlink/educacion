<div class="tab-pane box active" id="infoGeneral">
    <div class="box-content">
        <form id="form-general" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="aluGradoActual" class="col-sm-4 control-label">Especialidad<span style="color:red"> *</span></label>
                <input type="hidden" class="form-control" id="id_escuela" name="id_escuela" value="<?php echo $id_school ?>">
                <div class="col-sm-6">
                  <input type="hidden" minlength="2" class="form-control" id="usuarioInscribe" name="usuarioInscribe" value="<?php echo $this->session->userdata('admin_id') ?>">
                  <select class="form-control" id="aluEspecialidadUdaem" required size="3" multiple style="height: 120px;">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >Psicología</option>
                    <option value="2" >Terapia de Lenguaje</option>
                    <option value="3" >Terapia Ocupacional</option>
                    <option value="4" >Trabajo Social</option>
                    <option value="5" >Psicopedagogía</option>
                    <option value="6" >Ni&ntilde;os no Escolarizados</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoActual" class="col-sm-4 control-label">Grado actual<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluGradoActual" name="GradoActual" required onchange="return get_class_section(this.value)">
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_grado']?>" > <?php echo $grado['nombre_grado']?></option>
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
            </div>
            <div id="div-GradoRepetido" class="form-group" style="display:none">
                <label for="secondsurname" class="col-sm-4 control-label">Grado o Año repetido<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="GradoRepetido" name="GradoRepetido" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($grados as $grado){ ?>
                        <option value="<?php echo $grado['id_grado']?>" > <?php echo $grado['nombre_grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group depende-PrimerGrupo depende-EstudioAnterior" style="display:none">
                <label for="address" class="col-sm-4 control-label">Materia pendiente<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                     <label><input id="matPenRadio" type="radio" required class="form-control materia-pendiente" name="MateriaPendiente" value="1">Sí</label>
                     <label><input type="radio" class="form-control materia-pendiente" name="MateriaPendiente" value="0">No</label>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" style="display:none">
                <label for="address" class="col-sm-4 control-label">Especifique cuáles materias están pendientes</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueCualesMateriasEstanPendientes"></textarea>
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
                    <option value="1" >Mañana</option>
                    <option value="2" >Tarde</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="TurnoACursar" class="col-sm-4 control-label">Turno de Atención<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluTurnoACursar" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >Mañana</option>
                    <option value="2" >Tarde</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="DocenteAsignado" class="col-sm-4 control-label">Especialista Asignado<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluDocenteAsignado" name="DocenteAsignado" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <?php foreach ($teachers as $docente){ ?>
                        <option value="<?php echo $docente['teacher_id']?>" > <?php echo $docente['name']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="TurnoACursar" class="col-sm-4 control-label">Escuela de Procedencia<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="EscuelaProcedencia" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >Nacional</option>
                    <option value="2" >Municipal</option>
                    <option value="3" >Otros Municipios</option>
                    <option value="4" >Estadal</option>
                    <option value="5" >Privada</option>
                  </select>
                </div>
            </div>
            <div class="form-group" id="escuelas-municipales" style="display: none;">
                <label for="TurnoACursar" class="col-sm-4 control-label">Nombre de Escuela de Procedencia</label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluTurnoACursar" >
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
            <div class="form-group" id="escuelas-otros-municipios" style="display: none;">
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
            <div class="form-group" id="nombre-escuela-otros-municipios" style="display: none;">
                <label for="field-1" class="col-sm-4 control-label">Nombre de Escuela de Procedencia</label>
                <div class="col-sm-6">
                    <input type="text" minlength="3" class="form-control" id="NombreEscuelaProcedenciaOtroMunicipio" placeholder="">
                </div>
            </div>
            <div class="form-group" id="nombre-escuela-estadal" style="display: none;">
                <label for="field-1" class="col-sm-4 control-label">Nombre de Escuela de Procedencia</label>
                <div class="col-sm-6">
                    <input type="text" minlength="3" class="form-control" id="NombreEscuelaProcedenciaEstadalNacional" placeholder="">
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