jQuery( document ).ready(function() {
	var requiredVacunaAlu = validateCheckboxes('requiredVacunaAlu');
	var requireEnfermedadAlu = validateCheckboxes('requireEnfermedadAlu');

	var validator = jQuery("#form-datos-escolar").validate(
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

	jQuery('#siguiente-datos-escolar').click(function(e){
		if (jQuery('#form-datos-escolar').valid()) {
			jQuery("#tab-datos-salud").removeClass('disabled');
			jQuery("#tab-datos-salud a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-salud a").trigger( "click" );
			window.scrollTo(0,0);
		} else {
			validator.focusInvalid();
		}
	});

	jQuery('#anterior-datos-escolar').click(function(e){
		jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
	});

	//LOGICA DEL TAB
	jQuery( '.educacionInicial' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.dependeNivelesInicial').show();
			jQuery('.dependePorqueNivelesInicial').hide();
		} else {
			jQuery('.dependePorqueNivelesInicial').show();
			jQuery('.dependeNivelesInicial').hide();
		}
	});

	jQuery( '.cambiosColegio' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.dependeCambiosColegio').show();
		} else {
			jQuery('.dependeCambiosColegio').hide();
		}
	});

	jQuery( '.dificultadAprendizaje' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.dependeDificultadAprendizaje').show();
		} else {
			jQuery('.dependeDificultadAprendizaje').hide();
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