<?php
$id_censo_selected = 1103;

$edit_data = $this->db->get_where('inscripcion', array('id_inscripcion' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){
$edit_data_anamnesis = $this->db->get_where('anamnesis_ts', array('id_censo' => $id_censo_selected))->result_array();

if (count($edit_data_anamnesis) > 0){
    $SueldoFijoMensualRep = $edit_data_anamnesis[0]['SueldoFijoMensualRep'];
    $AyudaEconomica  = $edit_data_anamnesis[0]['AyudaEconomica'];
    $Beca  = $edit_data_anamnesis[0]['Beca'];
    $Subsidios  = $edit_data_anamnesis[0]['Subsidios'];
    $OtrosIngresos  = $edit_data_anamnesis[0]['OtrosIngresos'];
    $Alimentos  = $edit_data_anamnesis[0]['Alimentos'];
    $Vivienda  = $edit_data_anamnesis[0]['Vivienda'];
    $Servicios  = $edit_data_anamnesis[0]['Servicios'];
    $Educacion  = $edit_data_anamnesis[0]['Educacion'];
    $OtrosEgresos  = $edit_data_anamnesis[0]['OtrosEgresos'];
    $ObservacionesSocioeconomicas  = $edit_data_anamnesis[0]['ObservacionesSocioeconomicas'];
}else{
    $SueldoFijoMensualRep = "";
    $AyudaEconomica = "";
    $Beca = "";
    $Subsidios = "";
    $OtrosIngresos = "";
    $Alimentos = "";
    $Vivienda = "";
    $Educacion = "";
    $OtrosEgresos = "";
    $ObservacionesSocioeconomicas = "";
    $Servicios = "";
}

?>
<div class="tab-pane box" id="areaSocieconomicos">
    <div class="box-content">
        <form id="form-datos-socieconomicos" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="col-sm-6">
                <div class="form-group " >
                    <label for="field-1" class="col-sm-4 control-label">INGRESOS:</label>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Sueldo fijo mensual<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text"  required minlength="1" class="form-control onlyNumbers" id="SueldoFijoMensual" name="SueldoFijoMensualRep" placeholder="" value="<?php echo $SueldoFijoMensualRep ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Ayuda económica<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="AyudaEconomica" name="AyudaEconomica" placeholder="" value="<?php echo $AyudaEconomica ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Becas<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="Beca" name="Beca" placeholder="" value="<?php echo $Beca ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Subsidios<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="Subsidios" name="Subsidios" placeholder="" value="<?php echo $Subsidios ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Otros<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="OtrosIngresos" name="OtrosIngresos" placeholder="" value="<?php echo $OtrosIngresos ?>" >
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group " >
                    <label for="field-1" class="col-sm-4 control-label">EGRESOS:</label>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Alimentos<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="Alimentos" name="Alimentos" placeholder="" value="<?php echo $Alimentos ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Vivienda<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="Vivienda" name="Vivienda" placeholder="" value="<?php echo $Vivienda ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Educación<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="Educacion" name="Educacion" placeholder="" value="<?php echo $Educacion ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Servicios<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="Servicios" name="Servicios" placeholder="" value="<?php echo $Servicios ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="aluPrimerNombre" class="col-sm-4 control-label">Otros<span style="color:red"> *</span></label>
                    <div class="col-sm-6">
                            <input required type="text" required minlength="1" class="form-control onlyNumbers" id="OtrosEgresos" name="OtrosEgresos" placeholder="" value="<?php echo $OtrosEgresos ?>" >
                    </div>
                </div>
            </div>
            <div class="form-group depen-repre-diversidad" >
                <label for="field-1" class="col-sm-4 control-label">Observaciones Generales</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="ObservacionesSocioeconomicas" value="<?php echo $ObservacionesSocioeconomicas ?>"><?php echo htmlspecialchars($ObservacionesSocioeconomicas); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-area-socioeconomicos" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-area-socioeconomicos" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>