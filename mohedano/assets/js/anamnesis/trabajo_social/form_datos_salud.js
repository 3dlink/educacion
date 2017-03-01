jQuery( document ).ready(function() {
	var requiredVacunaAlu = validateCheckboxes('requiredVacunaAlu');
	var requireEnfermedadAlu = validateCheckboxes('requireEnfermedadAlu');

	var validator = jQuery("#form-datos-saludalu").validate(
	{
		errorPlacement: function(error, element) {
			// censo/main.js
			errorTags(error,element);
		},

		groups: {
			checks: requiredVacunaAlu,
			checksboxes: requireEnfermedadAlu
		}
	});

	jQuery('#siguiente-datos-salud').click(function(e){

		var data = jQuery('#form-datos-ambiente').serialize()+ '&' +
		jQuery('#form-datos-socieconomicos').serialize()+ '&' +
		jQuery('#form-datos-escolar').serialize()+ '&' +
		jQuery('#form-datos-salud').serialize()+ '&';

		if ( jQuery('#form-datos-alumno').valid() && jQuery('#form-datos-representante').valid() && jQuery('#form-datos-referencia').valid()
			&& jQuery('#form-datos-ambiente').valid() && jQuery('#form-datos-socieconomicos').valid()
			&& jQuery('#form-datos-escolar').valid() && jQuery('#form-datos-salud').valid()){
			if (jQuery('#form-datos-salud').valid()) {
				jQuery('#siguiente-datos-salud').prop("disabled",true);
				window.scrollTo(0,0);
				Ajax('insertar_ts',data,'POST',true,function(response){
				    mostrarModal("Éxito", "Anamnesis registrada con éxito.", 'type-primary',
			                [{
			                    label: 'Aceptar',
			                    cssClass: 'btn-success',
			                    action: function(dialogItself){
			                    	//window.location.reload(true);
			                        dialogItself.close();
			                    }
			                }]);
				    jQuery('#siguiente-datos-salud').prop("disabled",false);
				});
			} else {
				jQuery('#siguiente-datos-salud').prop("disabled",false);
				validator.focusInvalid();
			}
		}else{
			alert("Debe registrar todos los datos requeridos, por favor revisar los datos faltantes");
		}
	});

	jQuery('#anterior-datos-salud').click(function(e){
		jQuery("#tab-datos-escolar a").trigger( "click" );
	});

	//LOGICA DEL TAB
	jQuery( '.controlPediatrico' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenControlPediatrico').show();
		} else {
			jQuery('.depenControlPediatrico').hide();
		}
	});

	jQuery( '.usaLentes' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenLentesCorrectivos').show();
		} else {
			jQuery('.depenLentesCorrectivos').hide();
		}
	});

	jQuery( '.problemasOrtopedicos' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenProblemaOrtopedico').show();
		} else {
			jQuery('.depenProblemaOrtopedico').hide();
		}
	});

	jQuery( '.clasPartoMultiple' ).click(function(e) {
		if (this.value == '1') {
			jQuery('#div-PartoMultiple').show();
		} else {
			jQuery('#div-PartoMultiple').hide();
		}
	});

	jQuery( '.padeceEnfermedad' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenPadeceEnfermedad').show();
		} else {
			jQuery('.depenPadeceEnfermedad').hide();
		}
	});

	jQuery( '.aluDiversidadFuncio' ).click(function(e) {
		if (this.value == 'otro') {
			jQuery('.otroTransporte').show();
		} else {
			jQuery('.otroTransporte').hide();
		}
	});

	jQuery( '.aluDiversidadFuncio' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenAluDiversidadFuncio').show();
		} else {
			jQuery('.depenAluDiversidadFuncio').hide();
		}
	});

	jQuery( '.aluOperado' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenAluOperado').show();
		} else {
			jQuery('.depenAluOperado').hide();
		}
	});

	jQuery( '.aluAlergico' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenAluAlergia').show();
		} else {
			jQuery('.ddepenAluAlergia').hide();
		}
	});

	jQuery( '.regimenAlimen' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenRegimenAlimen').show();
		} else {
			jQuery('.depenRegimenAlimen').hide();
		}
	});

	jQuery('#idAluVacunaNinguna').click(function(){
	    if(jQuery(this).is(':checked')){
	        jQuery('.vacunaNinguna').hide();
	        jQuery('.checkVacunaNinguna').attr("checked", false);
	    }else{
	    	jQuery('.vacunaNinguna').show();
	    }
	});

	jQuery('#idAluEnfermedadNinguna').click(function(){
	    if(jQuery(this).is(':checked')){
	        jQuery('.enfermedadNinguna').hide();
	        jQuery('.checkEnfermedadNinguna').attr("checked", false);
	    }else{
	    	jQuery('.enfermedadNinguna').show();
	    }
	});
});