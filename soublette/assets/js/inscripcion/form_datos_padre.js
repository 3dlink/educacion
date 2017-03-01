jQuery( document ).ready(function() {

var validator = jQuery("#form-datos-padre").validate(
{
	errorPlacement: function(error, element) {
		// censo/main.js
		errorTags(error,element);

    },

	rules: {
		FechaDeNacimientoDelPadre: {
	  		dateITA : true
		},
		NombreDelPadre:{
			letterswithbasicpunc: true
		},
		ApellidosDelPadre:{
			letterswithbasicpunc: true
		}

	},
	messages: {
		FechaDeNacimientoDelPadre: {
			dateITA : 'Debe introducir una fecha valida.',
		},
		NombreDelPadre:{
			letterswithbasicpunc: 'Contiene caracteres no validos'
		},
		ApellidosDelPadre:{
			letterswithbasicpunc: 'Contiene caracteres no validos'
		}
	}
});

jQuery('#CedulaDeIdentidadDelPadre').mask('00000000');
jQuery('#padreFechaNac').mask("00/00/0000", {placeholder: "__/__/____"});

var padreFechaNac = jQuery('#padreFechaNac').attr('name');

jQuery('#padreFechaNac').blur(function(e) {
	dateToMysql('form-datos-padre','FechaDeNacimientoDelPadre');
});

//Continuar boton dos
jQuery('#siguiente-datos-padre').click(function(e){

	jQuery('#padreFechaNac').removeAttr('name');

	dateToMysql('form-datos-padre','FechaDeNacimientoDelPadre');

	if (jQuery('#form-datos-padre').valid()) {
		jQuery("#tab-datos-alumno").removeClass('disabled');
		jQuery("#tab-datos-alumno a").attr( 'data-toggle', 'tab' );
		jQuery("#tab-datos-alumno a").trigger( "click" );
		window.scrollTo(0,0);
	} else {
		validator.focusInvalid();
	}

	jQuery('#padreFechaNac').attr('name',padreFechaNac);
});

//Continuar boton dos
jQuery('#anterior-datos-padre').click(function(e){
	jQuery("#tab-datos-generales").removeClass('disabled');
	jQuery("#tab-datos-generales a").attr( 'data-toggle', 'tab' );
	jQuery("#tab-datos-generales a").trigger( "click" );
	window.scrollTo(0,0);
});

//Continuar boton dos
jQuery('#siguiente-datos-padre-dos').click(function(e){

	jQuery('#padreFechaNac').removeAttr('name');

	dateToMysql('form-datos-padre','FechaDeNacimientoDelRepresentante');

	if (jQuery('#form-datos-padre').valid()) {
		jQuery("#tab-datos-alumno").removeClass('disabled');
		jQuery("#tab-datos-alumno a").attr( 'data-toggle', 'tab' );
		jQuery("#tab-datos-alumno a").trigger( "click" );
		window.scrollTo(0,0);
	} else {
		validator.focusInvalid();
	}

	jQuery('#padreFechaNac').attr('name',padreFechaNac);
});

//Continuar boton dos
jQuery('#anterior-datos-padre-dos').click(function(e){
	jQuery("#tab-datos-generales").removeClass('disabled');
	jQuery("#tab-datos-generales a").attr( 'data-toggle', 'tab' );
	jQuery("#tab-datos-generales a").trigger( "click" );
	window.scrollTo(0,0);
});

jQuery( '.padre-viva' ).click(function(e) {
	if (this.value == '1') {
		jQuery('.depen-padre-vive').show();
	} else {
		jQuery('.depen-padre-vive').hide();
		jQuery('.only-hide-padre').hide();
	}
});

jQuery( '.tipoNacPadre' ).click(function(e) {
	if (this.value == 'VENEZOLANA') {
		jQuery('.tipoNacDepenPadreVe').show();
		jQuery('.tipoNacDepenPadreEx').hide();
	} else {
		jQuery('.tipoNacDepenPadreEx').show();
		jQuery('.tipoNacDepenPadreVe').hide();
	}
});

jQuery( '#select-municipio-padreEstadoResi' ).change(function(e) {
  	if(this.value == 183){
		jQuery('#sectorMunicipioChacaoPadre').show();
		jQuery('#sectorMunicipioPadre').hide();
  	}else{
		jQuery('#sectorMunicipioChacaoPadre').hide();
		jQuery('#sectorMunicipioPadre').show();
  	}

});

jQuery( '.radio-padreMismaResiAlu' ).click(function(e) {
	if (this.value == '0') {
		jQuery('.padreMismaResiAlu').show();
	} else {
		jQuery('.padreMismaResiAlu').hide();
	}
});

jQuery( '.padreTrabaja' ).click(function(e) {
	if (this.value == '1') {
		jQuery('.depen-padre-trabaja').show();
	} else {
		jQuery('.depen-padre-trabaja').hide();
	}
});

});