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
                        <option value="<?php echo $grado['id_grado']?>" > <?php echo $grado['nombre_grado']?></option>
                    <?php } ?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Grado a cursar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="aluGradoACursar" name="GradoACursar" required onchange="return get_class_section(this.value)">
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
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" >Mañana</option>
                    <option value="2" >Tarde</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="DocenteAsignado" class="col-sm-4 control-label">Docente asignado<span style="color:red"> *</span></label>
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