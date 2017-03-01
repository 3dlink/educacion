<?php 

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

?>
<div class="tab-pane box" id="datosSocieconomicos">
    <div class="box-content">
        <form id="form-datos-socieconomicos" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
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
<?php
}
?>