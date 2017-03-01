jQuery( document ).ready(function() {

	var requireActiEspecialAlu = validateCheckboxes('requireActiEspecialAlu');

	var validator = jQuery("#form-datos-otros").validate(
	{
		errorPlacement: function(error, element) {
			// censo/main.js
			errorTags(error,element);
		},

		groups: {
			checks: requireActiEspecialAlu
		}
	});

	jQuery('#telDelContactoDeEmergenciaUno').mask("0000-0000000", {placeholder: "Ej. 0212-1234567"});
	jQuery('#telDelContactoDeEmergenciaDos').mask("0000-0000000", {placeholder: "Ej. 04xx-1234567"});

	jQuery('#siguiente-datos-interes').click(function(e){
		var data = jQuery('#form-general').serialize()+ '&' +
		jQuery('#form-datos-alumno').serialize()+ '&' +
		jQuery('#form-datos-representante').serialize()+ '&' +
		jQuery('#form-datos-madre').serialize()+ '&' +
		jQuery('#form-datos-padre').serialize()+ '&' +
		jQuery('#form-datos-socieconomicos').serialize()+ '&' +
		jQuery('#form-datos-saludalu').serialize()+ '&' +
		jQuery('#form-datos-otros').serialize();

		if (jQuery('#form-general').valid() && jQuery('#form-datos-alumno').valid() && jQuery('#form-datos-representante').valid()
		   && jQuery('#form-datos-madre').valid() && jQuery('#form-datos-padre').valid() && jQuery('#form-datos-socieconomicos').valid()
		   && jQuery('#form-datos-saludalu').valid()){
			if (jQuery('#form-datos-otros').valid()) {
				jQuery('#siguiente-datos-interes').prop("disabled",true);
				window.scrollTo(0,0);
				Ajax('insertar',data,'POST',true,function(response){
				    mostrarModal("Exito", "Censo registrado con exito.", 'type-primary',
			                [{
			                    label: 'Aceptar',
			                    cssClass: 'btn-success',
			                    action: function(dialogItself){
			                    	window.location.reload(true);
			                        dialogItself.close();
			                        mostrarReporte(response);
			                    }
			                }]);
				    jQuery('#siguiente-datos-interes').prop("disabled",false);
				});
			} else {
				jQuery('#siguiente-datos-interes').prop("disabled",false);
				validator.focusInvalid();
			}
		}else{
			alert("Debe registrar todos los datos requeridos, por favor revisar los datos faltantes");
		}
	});

	function mostrarReporte(respuestaCenso){
		Ajax('../Resumen',respuestaCenso,'POST',true,function(response){

		});
	}

	jQuery( '.aluCatolico' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenAluCatolico').show();
		} else {
			jQuery('.depenAluCatolico').hide();
		}
	});

	jQuery( '.actividadEspe' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenActividadEspe').show();
		} else {
			jQuery('.depenActividadEspe').hide();
		}
	});
});

