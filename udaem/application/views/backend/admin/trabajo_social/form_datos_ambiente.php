<?php
$id_censo_selected = 1103;

$edit_data = $this->db->get_where('inscripcion', array('id_inscripcion' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

$edit_data_anamnesis = $this->db->get_where('anamnesis_ts', array('id_censo' => $id_censo_selected))->result_array();
if (count($edit_data_anamnesis) > 0){
    $AmbienteVivienda = $edit_data_anamnesis[0]['AmbienteVivienda'];
    $AmbienteParedes  = $edit_data_anamnesis[0]['AmbienteParedes'];
    $AmbientePiso  = $edit_data_anamnesis[0]['AmbientePiso'];
    $AmbienteTecho  = $edit_data_anamnesis[0]['AmbienteTecho'];
    $AmbienteHabitaciones  = $edit_data_anamnesis[0]['AmbienteHabitaciones'];
    $AmbienteBanos  = $edit_data_anamnesis[0]['AmbienteBanos'];
    $AmbienteCocinaSalaComedor  = $edit_data_anamnesis[0]['AmbienteCocinaSalaComedor'];
    $AmbienteSalaComedor  = $edit_data_anamnesis[0]['AmbienteCocinaSalaComedor'];
    $AmbienteEnseresNevera  = $edit_data_anamnesis[0]['AmbienteEnseresNevera'];
    $AmbienteEnseresTV  = $edit_data_anamnesis[0]['AmbienteEnseresTV'];
    $AmbienteEnseresBluray  = $edit_data_anamnesis[0]['AmbienteEnseresBluray'];
    $AmbienteEnseresNevera  = $edit_data_anamnesis[0]['AmbienteEnseresNevera'];
    $AmbienteEnseresHornoMicroondas  = $edit_data_anamnesis[0]['AmbienteEnseresHornoMicroondas'];
}else{
    $AmbienteVivienda = "";
    $AmbienteParedes = "";
    $AmbientePiso = "";
    $AmbienteTecho = "";
    $AmbienteHabitaciones = "";
    $AmbienteBanos = "";
    $AmbienteCocinaSalaComedor = "";
    $AmbienteSalaComedor = "";
    $AmbienteEnseresNevera = "";
    $AmbienteEnseresTV = "";
    $AmbienteEnseresBluray = "";
    $AmbienteEnseresNevera = "";
    $AmbienteEnseresHornoMicroondas = "";
}

?>
<div class="tab-pane box " id="datosAmbiente">
    <div class="box-content">
        <form id="form-datos-ambiente" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Vivienda<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="ambienteVivienda" name="AmbienteVivienda" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" <?php echo ($AmbienteVivienda == 1)?'selected="selected"':'' ?> >Casa</option>
                    <option value="2" <?php echo ($AmbienteVivienda == 2)?'selected="selected"':'' ?> >Apartamento</option>
                    <option value="3" <?php echo ($AmbienteVivienda == 3)?'selected="selected"':'' ?> >Quinta</option>
                    <option value="4" <?php echo ($AmbienteVivienda == 4)?'selected="selected"':'' ?> >Rancho</option>
                    <option value="5" <?php echo ($AmbienteVivienda == 5)?'selected="selected"':'' ?> >Habitacion</option>
                    <option value="6" <?php echo ($AmbienteVivienda == 6)?'selected="selected"':'' ?> >Otro</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Paredes<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="ambienteParedes" name="AmbienteParedes" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" <?php echo ($AmbienteParedes == 1)?'selected="selected"':'' ?> >Bloque frisado</option>
                    <option value="2" <?php echo ($AmbienteParedes == 2)?'selected="selected"':'' ?> >Bloque sin frisar</option>
                    <option value="3" <?php echo ($AmbienteParedes == 3)?'selected="selected"':'' ?> >Madera</option>
                    <option value="4" <?php echo ($AmbienteParedes == 4)?'selected="selected"':'' ?> >Ladrillo</option>
                    <option value="5" <?php echo ($AmbienteParedes == 5)?'selected="selected"':'' ?> >Adobe</option>
                    <option value="6" <?php echo ($AmbienteParedes == 6)?'selected="selected"':'' ?> >Otro</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Piso<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="ambientePiso" name="AmbientePiso" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" <?php echo ($AmbientePiso == 1)?'selected="selected"':'' ?> >Mosaico, granito</option>
                    <option value="2" <?php echo ($AmbientePiso == 2)?'selected="selected"':'' ?> >Ceramica, ladrillo</option>
                    <option value="3" <?php echo ($AmbientePiso == 3)?'selected="selected"':'' ?> >Terracota, parquet</option>
                    <option value="4" <?php echo ($AmbientePiso == 4)?'selected="selected"':'' ?> >Cemento</option>
                    <option value="5" <?php echo ($AmbientePiso == 5)?'selected="selected"':'' ?> >Tierra</option>
                    <option value="6" <?php echo ($AmbientePiso == 6)?'selected="selected"':'' ?> >Otro</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="GradoACursar" class="col-sm-4 control-label">Techo<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                  <select class="form-control" id="ambienteTecho" name="AmbienteTecho" required>
                    <option value="0" selected="selected" disabled="disabled">Seleccione...</option>
                    <option value="1" <?php echo ($AmbienteTecho == 1)?'selected="selected"':'' ?> >Platabanda</option>
                    <option value="2" <?php echo ($AmbienteTecho == 2)?'selected="selected"':'' ?> >Zinc</option>
                    <option value="3" <?php echo ($AmbienteTecho == 3)?'selected="selected"':'' ?> >Acerolit</option>
                    <option value="4" <?php echo ($AmbienteTecho == 4)?'selected="selected"':'' ?> >Asbesto</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Tenencia de la vivienda<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="PROPIA" <?php echo ($row['DatosDeLaVivienda']=='PROPIA')?'checked':'' ?> >Propia</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="ALQUILADA" <?php echo ($row['DatosDeLaVivienda']=='ALQUILADA')?'checked':'' ?> >Alquilada</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="PROPIA-PAGANDO" <?php echo ($row['DatosDeLaVivienda']=='PROPIA-PAGANDO')?'checked':'' ?> >Propia Pagando</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="ALOJADOS" <?php echo ($row['DatosDeLaVivienda']=='ALOJADOS')?'checked':'' ?> >Alojados</label>
                    <label><input type="radio" class="form-control otraVivienda" name="DatosDeLaVivienda" value="OTRA" <?php echo ($row['DatosDeLaVivienda']=='OTRA')?'checked':'' ?> >Otra</label>
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Habitaciones</label>
                <div class="col-sm-6">
                    <input type="text" minlength="1" class="form-control" id="ambienteHabitaciones" name="AmbienteHabitaciones" placeholder="" value="<?php echo $AmbienteHabitaciones?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Baños</label>
                <div class="col-sm-6">
                    <input type="text" minlength="1" class="form-control" id="ambienteBanos" name="AmbienteBanos" placeholder="" value="<?php echo $AmbienteBanos?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Cocina/Sala/Comedor</label>
                <div class="col-sm-6">
                    <input type="text" minlength="1" class="form-control" id="ambienteCocinaSalaComedor" name="AmbienteCocinaSalaComedor" placeholder="" value="<?php echo $AmbienteCocinaSalaComedor?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Sala/Comedor</label>
                <div class="col-sm-6">
                    <input type="text" minlength="1" class="form-control" id="ambienteSalaComedor" name="AmbienteSalaComedor" placeholder="" value="<?php echo $AmbienteSalaComedor?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Enseres</label>
                <div class="col-sm-6">
                    <div class="checkbox">
                    <input type="hidden" name="AmbienteEnseresNevera" value="0" >
                      <label><input type="checkbox" name="AmbienteEnseresNevera" value="1" <?php echo ($AmbienteEnseresNevera=='1')?'checked':'' ?> >Nevera</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="AmbienteEnseresTV" value="0" >
                      <label><input type="checkbox" name="AmbienteEnseresTV" value="1" <?php echo ($AmbienteEnseresTV=='1')?'checked':'' ?> >Cocina</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="AmbienteEnseresBluray" value="0" >
                      <label><input type="checkbox" name="AmbienteEnseresBluray" value="1" <?php echo ($AmbienteEnseresBluray=='1')?'checked':'' ?> >T.V</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="AmbienteEnseresNevera" value="0" >
                      <label><input type="checkbox" name="AmbienteEnseresNevera" value="1" <?php echo ($AmbienteEnseresNevera=='1')?'checked':'' ?> >Bluray</label>
                    </div>

                    <div class="checkbox">
                    <input type="hidden" name="AmbienteEnseresHornoMicroondas" value="0" >
                      <label><input type="checkbox" name="AmbienteEnseresHornoMicroondas" value="1" <?php echo ($AmbienteEnseresHornoMicroondas=='1')?'checked':'' ?> >Horno Microondas</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-ambiente" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-ambiente" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>