jQuery(document).ready(function() {
	var data = jQuery('#formRecaudosValidate').serialize();
	jQuery('#btnValidarRecaudos').click(function(e){
		Ajax('../recaudos_validate',data,'POST',true,function(response){
			mostrarModal("Éxito", "Recaudos validados", 'type-primary',
		            [ {
		                label: 'Aceptar',
		                cssClass: 'btn-success',
		                action: function(dialogItself){
		                	//window.location.reload(true);
	                    		//dialogItself.close();
		                }
		            }]);
		});
	});
});