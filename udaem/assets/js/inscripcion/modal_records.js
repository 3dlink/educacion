jQuery(document).ready(function() {
	var data = jQuery('#formCensusEdit').serialize();
	$('#btnAsignarEscuela').click(function(e){
		if (jQuery('#lista_escuelas option:selected').val() > 0) {
			data = data +'&lista_escuelas='+ jQuery('#lista_escuelas option:selected').val();
			Ajax('../asignarseccion',data,'POST',true,function(response){
				mostrarModal("Éxito", "Sección asignada con éxito", 'type-primary',
			            [ {
			                label: 'Aceptar',
			                cssClass: 'btn-success',
			                action: function(dialogItself){
			                	window.location.reload(true);
		                    	dialogItself.close();
			                }
			            }]);
			});
		} else {
			alert("Debe Seleccionar Una Sección");
		}
	});


	jQuery(function() {
	    jQuery('#row_dim').hide(); 
	    jQuery('#type').change(function(){
	        if(jQuery('#type').val() == 'parcel') {
	            jQuery('#row_dim').show(); 
	        } else {
	            jQuery('#row_dim').hide(); 
	        } 
	    });
	});
	
});