<?php

$edit_data = $this->db->get_where('censo', array('id_censo' => $id_censo_selected))->result_array();

foreach ($edit_data as $row){

$edit_data_anamnesis = $this->db->get_where('anamnesis_ts', array('id_censo' => $id_censo_selected))->result_array();
if (count($edit_data_anamnesis) > 0){
    $CursoEducacionInicial = $edit_data_anamnesis[0]['CursoEducacionInicial'];
    $CuantosNivelesInicial  = $edit_data_anamnesis[0]['CuantosNivelesInicial'];
    $PorqueNivelesInicial  = $edit_data_anamnesis[0]['PorqueNivelesInicial'];
    $ProblemasAdaptacionEscolar  = $edit_data_anamnesis[0]['ProblemasAdaptacionEscolar'];
    $CambiosColegio  = $edit_data_anamnesis[0]['CambiosColegio'];
    $PorqueCambiosColegio  = $edit_data_anamnesis[0]['PorqueCambiosColegio'];
    $DificultadAprendizaje  = $edit_data_anamnesis[0]['DificultadAprendizaje'];
    $AreaDificultadAprendizaje  = $edit_data_anamnesis[0]['AreaDificultadAprendizaje'];
}else{
    $CursoEducacionInicial = "";
    $CuantosNivelesInicial = "";
    $PorqueNivelesInicial = "";
    $ProblemasAdaptacionEscolar = "";
    $CambiosColegio = "";
    $PorqueCambiosColegio = "";
    $DificultadAprendizaje = "";
    $AreaDificultadAprendizaje = "";
}

?>
<div class="tab-pane box " id="datosEcolar">
    <div class="box-content">
        <form id="form-datos-escolar" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Curso educación inicial<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" required class="form-control educacionInicial" name="CursoEducacionInicial" value="1" <?php echo ($CursoEducacionInicial=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control educacionInicial" name="CursoEducacionInicial" value="0" <?php echo ($CursoEducacionInicial=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group dependeNivelesInicial" style="<?php echo ($CursoEducacionInicial=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Cuantos niveles</label>
                <div class="col-sm-6">
                    <input type="text" required minlength="1" class="form-control" id="CuantosNivelesInicial" name="CuantosNivelesInicial" placeholder=""  value="<?php echo $CuantosNivelesInicial ?>" >
                </div>
            </div>
            <div class="form-group dependePorqueNivelesInicial" style="<?php echo ($CursoEducacionInicial=='0')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Porque</label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="PorqueNivelesInicial" name="PorqueNivelesInicial" placeholder=""  value="<?php echo $PorqueNivelesInicial ?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Ha manifestado alguna problemática en su adaptación escolar<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" required class="form-control problemasAdaptacionEscolar" name="ProblemasAdaptacionEscolar" value="1" <?php echo ($ProblemasAdaptacionEscolar=='1')?'checked':'' ?> >Si</label>
                    <label><input type="radio" class="form-control problemasAdaptacionEscolar" name="ProblemasAdaptacionEscolar" value="0" <?php echo ($ProblemasAdaptacionEscolar=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Cambios frecuentes de colegio<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" required class="form-control cambiosColegio" name="CambiosColegio" value="1" <?php echo ($CambiosColegio=='1')?'checked':'' ?>  >Si</label>
                    <label><input type="radio" class="form-control cambiosColegio" name="CambiosColegio" value="0" <?php echo ($CambiosColegio=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group dependeCambiosColegio" style="<?php echo ($CambiosColegio=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">Porque</label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="PorqueCambiosColegio" name="PorqueCambiosColegio" placeholder=""  value="<?php echo $PorqueCambiosColegio ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Alguna dificultad en el aprendizaje<span style="color:red"> *</span></label>
                <div class="col-sm-6" style="padding-top: 7px;">
                    <label><input required type="radio" required class="form-control dificultadAprendizaje" name="DificultadAprendizaje" value="1" <?php echo ($DificultadAprendizaje=='1')?'checked':'' ?>  >Si</label>
                    <label><input type="radio" class="form-control dificultadAprendizaje" name="DificultadAprendizaje" value="0" <?php echo ($DificultadAprendizaje=='0')?'checked':'' ?> >No</label>
                </div>
            </div>
            <div class="form-group dependeDificultadAprendizaje" style="<?php echo ($DificultadAprendizaje=='1')?'':'display:none' ?>" >
                <label for="field-1" class="col-sm-4 control-label">En que area</label>
                <div class="col-sm-6">
                    <input type="text" required minlength="2" class="form-control" id="AreaDificultadAprendizaje" name="AreaDificultadAprendizaje" placeholder=""  value="<?php echo $AreaDificultadAprendizaje ?>" >
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-escolar" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-escolar" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>