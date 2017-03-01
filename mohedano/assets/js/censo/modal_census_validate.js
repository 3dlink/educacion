jQuery(document).ready(function() {
	var data = jQuery('#formCensusEdit').serialize();
	jQuery('#btnAsignarEscuela').click(function(e){
		Ajax('../asignarescuela',data,'POST',true,function(response){
			mostrarModal("Éxito", "Cupo asignado satisfactoriamente", 'type-primary',
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