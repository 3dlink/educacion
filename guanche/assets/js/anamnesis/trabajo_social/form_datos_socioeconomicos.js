jQuery( document ).ready(function() {

	jQuery('#siguiente-datos-socioeconomico').click(function(e){

		if (jQuery('#form-datos-socieconomicos').valid()) {
			jQuery("#tab-datos-escolar").removeClass('disabled');
			jQuery("#tab-datos-escolar a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-escolar a").trigger( "click" );
			window.scrollTo(0,0);

		} else {
			validator.focusInvalid();
		}

	});

	jQuery('#anterior-datos-socioeconomico').click(function(e){
		jQuery("#tab-datos-ambiente a").trigger( "click" );
	});



	jQuery( '.otraVivienda' ).click(function(e) {
		if (this.value == 'otra') {
			jQuery('.depenOtraVivienda').show();
		} else {
			jQuery('.depenOtraVivienda').hide();
		}
	});
});