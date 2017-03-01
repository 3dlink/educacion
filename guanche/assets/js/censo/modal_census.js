jQuery(document).ready(function() {
	var data = jQuery('#formCensusEdit').serialize();
	jQuery('#btnAsignarEscuela').click(function(e){
		Ajax('../validarcupo',data,'POST',true,function(response){
			mostrarModal("Éxito", "Censo validado satisfactoriamente", 'type-primary',
		            [ {
		                label: 'Aceptar',
		                cssClass: 'btn-success',
		                action: function(dialogItself){
		                	window.location.reload(true);
	                    	dialogItself.close();
		                }
		            }]);
		});
	});
});