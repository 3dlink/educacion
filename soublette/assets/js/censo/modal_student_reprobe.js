jQuery(document).ready(function() {
	var data = jQuery('#formCensusEdit').serialize();
	jQuery('#btnAsignarEscuela').click(function(e){
		Ajax('../rechazarcupo',data,'POST',true,function(response){
			mostrarModal("Éxito", "Cupo rechazado", 'type-danger',
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