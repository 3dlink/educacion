jQuery( document ).ready(function() {

    jQuery('#btnSaveAnamnesisTO').click(function(e){

		var data = jQuery('#form-ocupacional').serialize()+ '&' +
		jQuery('#form-general').serialize();

		jQuery('#btnSaveAnamnesisTO').prop("disabled",true);
		window.scrollTo(0,0);
		Ajax('../../guardar_anamnesis_to',data,'POST',true,function(response){
		    mostrarModal("Éxito", "Alumno registrado con éxito, ha sido enviado el resumen via correo electrónio.", 'type-primary',
	                [{
	                    label: 'Aceptar',
	                    cssClass: 'btn-success',
	                    action: function(dialogItself){
	                    	window.location.reload(true);
	                        dialogItself.close();
	                    }
	                }]);
		    jQuery('#btnSaveAnamnesisTO').prop("disabled",false);
		});
    });

	jQuery( '#EscuelaProcedencia' ).change(function(e) {

	  	if (parseInt(jQuery('#EscuelaProcedencia').val()) == 2){
	  		jQuery('#escuelas-municipales').show();
	  		jQuery('#escuelas-otros-municipios').hide();
	  		jQuery('#nombre-escuela-otros-municipios').hide();
	  		jQuery('#nombre-escuela-estadal').hide();
	  	}else if (parseInt(jQuery('#EscuelaProcedencia').val()) == 3){
	  		jQuery('#escuelas-municipales').hide();
	  		jQuery('#escuelas-otros-municipios').show();
	  		jQuery('#nombre-escuela-otros-municipios').show();
	  		jQuery('#nombre-escuela-estadal').hide();
	  	}else{
	  		jQuery('#escuelas-municipales').hide();
	  		jQuery('#escuelas-otros-municipios').hide();
	  		jQuery('#nombre-escuela-otros-municipios').hide();
	  		jQuery('#nombre-escuela-estadal').show();
	  	}
	});

});