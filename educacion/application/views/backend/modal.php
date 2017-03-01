<script type="text/javascript">
    function showAjaxModal(url,funcion) {
        funcion = funcion || "FALSE";

        jQuery.noConflict();
        // SHOWING AJAX PRELOADER IMAGE
        jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="/educacion/assets/images/preloader.gif" /></div>');

        // LOADING THE AJAX MODAL
        jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        jQuery.ajax({
            url: url,
            success: function(response)
            {
                jQuery('#modal_ajax .modal-body').html(response);
        if( funcion != "FALSE") {
          funcion();
        }

            }
        });
    }
</script>

<!-- (Ajax Modal)-->
<div class="modal fade" id="modal_ajax">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo $system_name;?></h4>
            </div>

            <div class="modal-body" style="height:500px; overflow:auto;">



            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function delete_modal(delete_url)
    {
    	jQuery('#modal-4').modal('show', {backdrop: 'static'});
    	document.getElementById('delete_link').setAttribute('href' , delete_url);
    }

    function validate_modal(validate_url)
    {
        jQuery('#modal-5').modal('show', {backdrop: 'static'});
        document.getElementById('validate_link').setAttribute('href' , validate_url);
    }

    function activate_modal(activate_url)
    {
        jQuery('#modal-6').modal('show', {backdrop: 'static'});
        document.getElementById('activate_link').setAttribute('href' , activate_url);
    }

    function deactivate_modal(deactivate_url)
    {
        jQuery('#modal-7').modal('show', {backdrop: 'static'});
        document.getElementById('deactivate_link').setAttribute('href' , deactivate_url);
    }

    function password_default_modal(password_default_url)
    {
        jQuery('#modal-8').modal('show', {backdrop: 'static'});
        document.getElementById('password_default_link').setAttribute('href' , password_default_url);
    }
</script>

<!-- (Delete Modal)-->
<div class="modal fade" id="modal-4">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">¿Esta seguro que desea anular este registro?</h4>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="delete_link"><?php echo "Anular"?></a>
                <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo "Cancelar"?></button>
            </div>
        </div>
    </div>
</div>

<!-- (Validate Modal)-->
<div class="modal fade" id="modal-5">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">¿Esta seguro que desea validar este registro?</h4>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-success" id="validate_link"><?php echo "Validar"?></a>
                <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo "Cancelar"?></button>
            </div>
        </div>
    </div>
</div>

<!-- (Validate Modal)-->
<div class="modal fade" id="modal-6">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">¿Esta seguro que desea activar este registro?</h4>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-success" id="activate_link"><?php echo "Activar"?></a>
                <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo "Cancelar"?></button>
            </div>
        </div>
    </div>
</div>

<!-- (Validate Modal)-->
<div class="modal fade" id="modal-7">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">¿Esta seguro que desea desactivar este registro?</h4>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="deactivate_link"><?php echo "Desactivar"?></a>
                <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo "Cancelar"?></button>
            </div>
        </div>
    </div>
</div>

<!-- (Validate Modal)-->
<div class="modal fade" id="modal-8">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">¿Esta seguro que desea restablecer la clave de este usuario?</h4>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="password_default_link"><?php echo "Reestablecer"?></a>
                <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo "Cancelar"?></button>
            </div>
        </div>
    </div>
</div>