<div class="tab-pane box " id="datosVoz">
    <div class="box-content">
        <form id="form-datos-voz" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Grita mucho</label>
                <div class="col-sm-6" >
                    <label><input type="radio" class="form-control cursoInicial" name="CursoInicial" value="1"  >Sí</label>
                    <label><input type="radio" class="form-control cursoInicial" name="CursoInicial" value="0"  >No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-4 control-label">Se pone ronco</label>
                <div class="col-sm-6" >
                    <label><input type="radio" class="form-control cursoInicial" name="CursoInicial" value="1"  >Sí</label>
                    <label><input type="radio" class="form-control cursoInicial" name="CursoInicial" value="0"  >No</label>
                </div>
            </div>
            <div class="form-group">
                <label for="motivoReferencia" class="col-sm-4 control-label">Intensidad de voz<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" required minlength="2" class="form-control" id="motivoReferencia" name="MotivoReferencia" placeholder="Motivo de Referencia" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="anterior-datos-voz" class="btn btn-info">Anterior</button>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-voz" class="btn btn-info">Siguiente</button>
                </div>
            </div>
        </form>
    </div>
</div>