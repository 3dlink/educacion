jQuery( document ).ready(function() {
	//Continuar boton dos
	jQuery('#siguiente-datos-referencia').click(function(e){
		jQuery("#tab-datos-ambiente").removeClass('disabled');
		jQuery("#tab-datos-ambiente a").attr( 'data-toggle', 'tab' );
		jQuery("#tab-datos-ambiente a").trigger( "click" );
		window.scrollTo(0,0);
	});

	jQuery('#anterior-datos-referencia').click(function(e){
		jQuery("#tab-datos-representante").removeClass('disabled');
		jQuery("#tab-datos-representante a").attr( 'data-toggle', 'tab' );
		jQuery("#tab-datos-representante a").trigger( "click" );
		window.scrollTo(0,0);
	});

});