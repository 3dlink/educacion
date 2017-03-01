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
		if ($('#form-datos-saludalu').valid()) {
			jQuery("#tab-datos-otros").removeClass('disabled');
			jQuery("#tab-datos-otros a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-otros a").trigger( "click" );
			window.scrollTo(0,0);
		} else {
			validator.focusInvalid();
		}
	});

	jQuery('#anterior-datos-salud').click(function(e){
		jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
	});

	//LOGICA DEL TAB
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
		if (this.value == '1') {
			jQuery('.depenAluDiversidadFuncio').show();
		} else {
			jQuery('.depenAluDiversidadFuncio').hide();
		}
	});

	jQuery( '#aluDiversidadOtra' ).click(function(e) {
		if(jQuery(this).is(':checked')){
			jQuery('.depenOtraDiverfuncional').show();
		} else {
			jQuery('.depenOtraDiverfuncional').hide();
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
			jQuery('.depenAluAlergia').hide();
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

	jQuery('#AluOtraEnfermedad').click(function(){
	    if(jQuery(this).is(':checked')){
	        jQuery('.depende-OtrasEnfermedades').show();
	    }else{
	    	jQuery('.depende-OtrasEnfermedades').hide();
	    }
	});

	jQuery('#aluVacunaOtras').click(function(){
	    if(jQuery(this).is(':checked')){
	        jQuery('.depende-OtrasVacunas').show();
	    }else{
	    	jQuery('.depende-OtrasVacunas').hide();
	    }
	});

});


