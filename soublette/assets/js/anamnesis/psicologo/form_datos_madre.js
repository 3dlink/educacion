jQuery( document ).ready(function() {

var validator = jQuery("#form-datos-madre").validate(
{
	errorPlacement: function(error, element) {
		// censo/main.js
		errorTags(error,element);
    },

	rules: {
        FechaDeNacimientoDeLaMadre: {
           dateITA : true
        }
	},
	messages: {
	    FechaDeNacimientoDeLaMadre: {
	      dateITA : 'Debe introducir una fecha valida.',
	    }
	}
});

jQuery('#CedulaDeIdentidadDeLaMadre').mask('00000000');
jQuery('#madreFechaNac').mask("00/00/0000", {placeholder: "__/__/____"});

var madreFechaNac = jQuery('#madreFechaNac').attr('name');

//Continuar boton dos
jQuery('#siguiente-datos-madre').click(function(e){

	jQuery('#madreFechaNac').removeAttr('name');

	dateToMysql('form-datos-madre','FechaDeNacimientoDeLaMadre');

	if (jQuery('#form-datos-madre').valid()) {
		if(person.repre == 3){
			jQuery("#tab-datos-alumno").removeClass('disabled');
			jQuery("#tab-datos-alumno a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-alumno a").trigger( "click" );
			window.scrollTo(0,0);
		}else{
			jQuery("#tab-datos-padre").removeClass('disabled');
			jQuery("#tab-datos-padre a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-padre a").trigger( "click" );
			window.scrollTo(0,0);
		}
	} else {
		validator.focusInvalid();
	}

	jQuery('#madreFechaNac').attr('name',madreFechaNac);
});

jQuery('#anterior-datos-madre').click(function(e){
	jQuery("#tab-datos-generales a").trigger( "click" );
});

jQuery( '.madre-viva' ).click(function(e) {
	if (this.value == '1') {
		jQuery('.depen-madre-vive').show();
	} else {
		jQuery('.depen-madre-vive').hide();
		jQuery('.only-hide-madre').hide();
	}
});

jQuery( '.tipoNacMadre' ).click(function(e) {
	if (this.value == 'VENEZOLANA') {
		jQuery('.tipoNacDepenMadreVe').show();
		jQuery('.tipoNacDepenMadreEx').hide();
	} else {
		jQuery('.tipoNacDepenMadreEx').show();
		jQuery('.tipoNacDepenMadreVe').hide();
	}
});

jQuery( '#select-municipio-madreEstadoResi' ).change(function(e) {
  	if(this.value == 183){
		jQuery('#sectorMunicipioChacaoMadre').show();
		jQuery('#sectorMunicipioMadre').hide();
  	}else{
		jQuery('#sectorMunicipioChacaoMadre').hide();
		jQuery('#sectorMunicipioMadre').show();
  	}

});

jQuery( '.radio-madreMismaResiAlu' ).click(function(e) {
	if (this.value == '0') {
		jQuery('.madreMismaResiAlu').show();
	} else {
		jQuery('.madreMismaResiAlu').hide();
	}
});

jQuery( '.madreTrabaja' ).click(function(e) {
	if (this.value == '1') {
		jQuery('.depen-madre-trabaja').show();
	} else {
		jQuery('.depen-madre-trabaja').hide();
	}
});

});