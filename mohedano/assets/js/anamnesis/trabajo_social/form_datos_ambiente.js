jQuery( document ).ready(function() {
	var validator = jQuery("#form-datos-ambiente").validate(
	{
		errorPlacement: function(error, element) {
			// censo/main.js
			errorTags(error,element);
	    },

		rules: {
	        FechaDeNacimientoDelAlumno: {
	           dateITA : true
	        },
	        CedulaDeIdentidadDelAlumnoOCedulaEscolar: {
	        	minlength: 8
	        }
		},
		messages: {
		    FechaDeNacimientoDelAlumno: {
		      dateITA : 'Debe introducir una fecha valida.',
		    },
		    CedulaDeIdentidadDelAlumnoOCedulaEscolar: {
	        	minlength: 'minimo 8 digitos.'
	        }
		}
	});

	//Continuar boton dos
	jQuery('#siguiente-datos-ambiente').click(function(e){
		if (jQuery('#form-datos-ambiente').valid()) {
			jQuery("#tab-datos-socioeconomicos").removeClass('disabled');
			jQuery("#tab-datos-socioeconomicos a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
			window.scrollTo(0,0);
		}
	});

	jQuery('#anterior-datos-ambiente').click(function(e){
		jQuery("#tab-datos-referencia").removeClass('disabled');
		jQuery("#tab-datos-referencia a").attr( 'data-toggle', 'tab' );
		jQuery("#tab-datos-referencia a").trigger( "click" );
		window.scrollTo(0,0);
	});

});