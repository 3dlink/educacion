jQuery( document ).ready(function() {

	jQuery('#siguiente-datos-socioeconomico').click(function(e){

		if (jQuery('#form-datos-socieconomicos').valid()) {
			jQuery("#tab-datos-salud").removeClass('disabled');
			jQuery("#tab-datos-salud a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-salud a").trigger( "click" );
			window.scrollTo(0,0);

		} else {
			validator.focusInvalid();
		}

	});

	jQuery('#anterior-datos-socioeconomico').click(function(e){
		jQuery("#tab-datos-alumno a").trigger( "click" );
	});

	jQuery( '.esBecado' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depen-becado').show();
		} else {
			jQuery('.depen-becado').hide();
		}
	});

	jQuery( '.medioTransporte' ).click(function(e) {
		if (this.value == 'otro') {
			jQuery('.otroTransporte').show();
		} else {
			jQuery('.otroTransporte').hide();
		}
	});

	jQuery( '.hermanosEstuMuni' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenHermanosEstudianMuni').show();
		} else {
			jQuery('.depenHermanosEstudianMuni').hide();
		}
	});

	jQuery( '.otraVivienda' ).click(function(e) {
		if (this.value == 'otra') {
			jQuery('.depenOtraVivienda').show();
		} else {
			jQuery('.depenOtraVivienda').hide();
		}
	});
});