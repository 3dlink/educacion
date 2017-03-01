jQuery(document).ready(function() {
	var data = jQuery('#formCensusEdit').serialize();
	jQuery('#btnAsignarEscuela').click(function(e){
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
		                    		//enviarAsignacion(response);
			                }
			            }]);
			});
		} else {
			alert("Debe Seleccionar Una Sección");
		}
	});

	function enviarAsignacion(respuesta){
		AjaxReport('../../ResumenAprobacionCupo',respuesta,'POST',true,function(response){
			alert(response);
		});
	}
});