<div class="tab-pane box active" id="infoOcupacional">
    <div class="box-content">
        <form id="form-ocupacional" class="form-horizontal form-groups-bordered form-censo" accept-charset="utf-8">
            <div class="form-group div-materia-pendiente" >
                <label for="address" class="col-sm-4 control-label">Motivo de Entrevista</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="MotivoEntrevista"></textarea>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" >
                <label for="address" class="col-sm-4 control-label">Problemática Actual</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="ProblematicaActual"></textarea>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" >
                <label for="address" class="col-sm-4 control-label">Historia Familiar</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="HistoriaFamiliar"></textarea>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" >
                <label for="address" class="col-sm-4 control-label">Desarrollo Pre, Peri y Posnatal</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="DesarrolloNatal"></textarea>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" >
                <label for="address" class="col-sm-4 control-label">Desarrollo Ontogenético</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="DesarrolloOntogenetico"></textarea>
                </div>
            </div>
            <div class="form-group div-materia-pendiente" >
                <label for="address" class="col-sm-4 control-label">Ingreso al Área Maternal - Preescolar - Escolar</label>
                <div class="col-sm-6">
                    <textarea rows="4" cols="50" name="IngresoMaternalPreesciolarEscolar"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="button" id="siguiente-datos-ocupacionales" class="btn btn-info">Siguiente</button>
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