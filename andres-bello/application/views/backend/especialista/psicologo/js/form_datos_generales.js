jQuery( document ).ready(function() {

	// censo/main.js
	var checkboxesRazonSoli = validateCheckboxes('requireRazonSoli');
	var checkboxesUniEdu = validateCheckboxes('requireUniEdu');

	var validator = jQuery("#form-general").validate(
	{
		errorPlacement: function(error, element) {
			errorTags(error,element);
	    },
	    groups: {
			checks: checkboxesRazonSoli,
			checksboxes: checkboxesUniEdu
		}
	});

	//Continuar boton uno
	jQuery('#siguiente-datos-generales').click(function(e){

		if (jQuery('#form-general').valid()) {
			if(person.repre == 2){
				jQuery("#tab-datos-padre").removeClass('disabled');
				jQuery("#tab-datos-padre a").attr( 'data-toggle', 'tab' );
				jQuery("#tab-datos-padre a").trigger( "click" );
				window.scrollTo(0,0);
			}else{
				jQuery("#tab-datos-madre").removeClass('disabled');
				jQuery("#tab-datos-madre a").attr( 'data-toggle', 'tab' );
				jQuery("#tab-datos-madre a").trigger( "click" );
				window.scrollTo(0,0);
			}
		} else {
			validator.focusInvalid();
		}
	});

	jQuery( '#GradoACursar' ).change(function(e) {
	  	gradoACursar.grado = this.value;
	});

	jQuery('#anterior-datos-generales').click(function(e){
		jQuery("#tab-datos-representante a").trigger( "click" );
	});

	//LOGICA DEL TAB
	jQuery( '.clasGraRepe' ).click(function(e) {
		if (this.value == '1') {
			jQuery('#div-GradoRepetido').show();
		} else {
			jQuery('#div-GradoRepetido').hide();
		}
	});

	jQuery('.UniProc').click(function(e) {
		if (this.value != 'NULL') {
			jQuery('.dependiente-UniProc').show();
		} else {
			jQuery('.dependiente-UniProc').hide();
		}
	});

	jQuery('.materia-pendiente').click(function(e) {
		if (this.value != 0) {
			jQuery('.div-materia-pendiente').show();
		} else {
			jQuery('.div-materia-pendiente').hide();
		}
	});
});