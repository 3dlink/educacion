<div class="tab-pane box" id="datosOtros">
    <div class="box-content">
        <form id="form-datos-otros" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <div class="col-sm-12 center">
                    <p>Esta pregunta se hace únicamente a fines de conocer su posible interés en participar en el programa Mi Primera Comunión del Municipio, no está obligado a responderla.</p>
                </div>
                <label for="field-1" class="col-sm-4 control-label">El alumno es católico</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control aluCatolico" name="ElAlumnoEsCatolico" value="1">Sí</label>
                    <label><input type="radio" class="form-control aluCatolico" name="ElAlumnoEsCatolico" value="0">No</label>
                </div>
            </div>
            <div class="form-group depenAluCatolico" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Ha cumplido con alguno de los siguientes Sacramentos</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="aluSacramentoNinguno" value="0">
                      <label><input type="checkbox" name="aluSacramentoNinguno" value="1">Ninguno</label>
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="aluBautizo" value="0">
                      <label><input type="checkbox" name="aluBautizo" value="1">Bautizo</label>
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="aluComunion" value="0">
                      <label><input type="checkbox" name="aluComunion" value="1">Primera Comunión</label>
                    </div>
                    <div class="checkbox">
                    <input type="hidden" name="aluConfirmacion" value="0">
                      <label><input type="checkbox" name="aluConfirmacion" value="1">Confirmación</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Realiza alguna actividad especial</label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control actividadEspe" name="RealizaAlgunaActividadEspecial" value="1">Sí</label>
                    <label><input type="radio" class="form-control actividadEspe" name="RealizaAlgunaActividadEspecial" value="0">No</label>
                    <div class="checkbox depenActividadEspe" style="display:none">
                    <input type="hidden" name="aluActiDeportivaNinguna" value="0">
                      <label><input type="checkbox" class="requireActiEspecialAlu" id="idAluActiDeportivaNinguna" name="aluActiDeportivaNinguna" value="1">Ninguna</label>
                    </div>
                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="display:none">
                    <input type="hidden" name="aluActiDeportiva" value="0">
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiDeportiva" value="1">Deportiva</label>
                    </div>
                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="display:none">
                    <input type="hidden" name="aluActiAcademica" value="0">
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiAcademica" value="1">Académica</label>
                    </div>
                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="display:none">
                    <input type="hidden" name="aluActiCultural" value="0">
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiCultural" value="1">Cultural</label>
                    </div>
                    <div class="checkbox depenActividadEspe depenActividadEspeNinguna" style="display:none">
                    <input type="hidden" name="aluActiOtra" value="0">
                      <label><input type="checkbox" class="requireActiEspecialAlu checkDeportivaNinguna" name="aluActiOtra" value="1">Otras</label>
                    </div>
                </div>
            </div>
            <div class="form-group depenActividadEspe" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique qué otras actividades especiales realiza el alumno</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="EspecifiqueQueOtrasActividadesEspecialesRealizaElAlumno"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nombre y apellido del contacto de emergencia 1<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="" name="NombreYApellidoDelContactoDeEmergencia1" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del contacto de emergencia 1<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="11" class="form-control" id="telDelContactoDeEmergenciaUno" name="TelefonoDelContactoDeEmergencia1" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parentesco del contacto de emergencia 1 con el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="repreSegundoApelli" name="ParentescoDelContactoDeEmergencia1ConElAlumno" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nombre y apellido del contacto de emergencia 2<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="" name="NombreYApellidoDelContactoDeEmergencia2" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Teléfono del contacto de emergencia 2<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="11" class="form-control" id="telDelContactoDeEmergenciaDos" name="TelefonoDelContactoDeEmergencia2" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Parentesco del contacto de emergencia 2 con el alumno<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="" name="ParentescoDelContactoDeEmergencia2ConElAlumno" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Observaciones</label>
                <div class="col-sm-6">
                	<textarea rows="4" cols="50" name="Observaciones"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-interes" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-interes-new" class="btn btn-info">Enviar censo</button>
                </div>
            </div>
        </form>
    </div>
</div>