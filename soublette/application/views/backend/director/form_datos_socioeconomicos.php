<div class="tab-pane box" id="datosSocieconomicos">
    <div class="box-content">
        <form id="form-datos-socieconomicos" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Está becado<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control esBecado" name="ElAlumnoEstaBecado" value="1">Sí</label>
                    <label><input type="radio" class="form-control esBecado" name="ElAlumnoEstaBecado" value="0">No</label>
                </div>
            </div>
            <div class="form-group depen-becado" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique el tipo de beca</label>
                <div class="col-sm-6">
                    <select class="form-control" id="select-beca" name="EspecifiqueElTipoDeBecaDelAlumno" >
                        <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                        <?php foreach ($becas as $beca){ ?>
                            <option data-id-estado="<?php echo $beca['id_beca']?>" value="<?php echo $beca['id_beca']?>" class="oculto"> <?php echo $beca['nombre']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Medio de traslado al plantel<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="PRIVADO">Privado</label>
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="PUBLICO">Público</label>
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="RUTACHACAO">Ruta Escolar Chacao</label>
                    <label><input type="radio" class="form-control medioTransporte" name="MedioDeTrasladoAlPlantel" value="OTRO">Otro</label>
                </div>
            </div>
            <div class="form-group otroTransporte" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique qué otro medio de transporte usa</label>
                <div class="col-sm-6">
                	<textarea rows="4" cols="50" name="EspecifiqueQueOtroMedioDeTransporteUsaElAlumno"></textarea>
    			</div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Se retira solo del plantel<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control" name="ElAlumnoSeRetiraSoloDelPlantel" value="1">Sí</label>
                    <label><input type="radio" class="form-control" name="ElAlumnoSeRetiraSoloDelPlantel" value="0">No</label>

                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Nº de miembros del grupo familiar (que viven en la misma casa)</label>
                <div class="col-sm-6">
                        <input type="text" class="form-control onlyNumbers" id="idMiembrosFamilia" name="MiembrosFamilia" placeholder="Miembros del grupo familiar (que viven en la misma casa)">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Número de hermanos</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control onlyNumbers" id="idNumeroDeHermanos" name="NumeroDeHermanos" placeholder="Número de hermanos en total">
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Datos de la vivienda<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="PROPIA">Propia</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="ALQUILADA">Alquilada</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="PROPIA-PAGANDO">Propia Pagando</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="ALOJADOS">Alojados</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="OTRA">Otra</label>
                </div>
            </div>
            <div class="form-group depenOtraVivienda" style="display:none">
                <label for="field-1" class="col-sm-4 control-label">Especifique en que otra condición de vivienda</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="OtraCondicionDeViviendaResideElAlumno"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-socioeconomico" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-socioeconomico" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>