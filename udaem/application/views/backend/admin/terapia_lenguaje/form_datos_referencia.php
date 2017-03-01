<div class="tab-pane box active" id="datosReferencia">
    <div class="box-content">
        <form id="form-datos-referencia" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="motivoReferencia" class="col-sm-4 control-label">Nivel de intervención<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                    <label><input type="radio" class="form-control" name="NivelIntervencion" value="II" >II</label>
                    <label><input type="radio" class="form-control" name="NivelIntervencion" value="III" >III</label>
                </div>
            </div>
            <div class="form-group">
                <label for="motivoReferencia" class="col-sm-4 control-label">Motivo de Referencia<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" required minlength="2" class="form-control" id="motivoReferencia" name="MotivoReferencia" placeholder="Motivo de Referencia" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-referencia" class="btn btn-info">Siguiente</button>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </form>
    </div>
</div>