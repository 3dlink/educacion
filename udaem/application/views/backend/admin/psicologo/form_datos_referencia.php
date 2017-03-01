<div class="tab-pane box active" id="datosReferencia">
    <div class="box-content">
        <form id="form-datos-referencia" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group">
                <label for="motivoReferencia" class="col-sm-4 control-label">Referido por<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <select class="form-control" name="ReferidoPor">
                                <option value="0" selected disabled>Seleccione...</option>
                                <option value="1" selected disabled>Médico</option>
                                <option value="2" selected disabled>Escuela</option>
                                <option value="3" selected disabled>Familia</option>
                                <option value="4" selected disabled>Otros</option>
                        </select>
                </div>
            </div>
            <div class="form-group">
                <label for="motivoReferencia" class="col-sm-4 control-label">Motivo de Referencia<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" required minlength="2" class="form-control" id="motivoReferencia" name="MotivoReferencia" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="motivoReferencia" class="col-sm-4 control-label">Que otra persona convive en el hogar<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <input type="text" required minlength="2" class="form-control" id="motivoReferencia" name="PersonasConvivenHogar" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="motivoReferencia" class="col-sm-4 control-label">Opinion del representante<span style="color:red"> *</span></label>
                <div class="col-sm-6">
                        <textarea rows="4" cols="50" name="OpinionRepresentante"></textarea>
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