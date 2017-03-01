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

	jQuery( '#aluGradoACursar' ).change(function(e) {
	  	gradoACursar.grado = this.value;
	  	if (gradoACursar.grado == 1){
	  		jQuery('.depende-PrimerGrupo').hide();
	  	}else{
	  		jQuery('.depende-PrimerGrupo').show();
	  	}
	});

	jQuery( '#UniDePrefJuanDio' ).change(function(e) {
	  	jQuery('#UniDePrefAndres').attr("checked", false);
	  	jQuery('#UniDePrefCarlos').attr("checked", false);
	});

	jQuery( '#UniDePrefAndres' ).change(function(e) {
	  	jQuery('#UniDePrefJuanDio').attr("checked", false);
	  	jQuery('#UniDePrefCarlos').attr("checked", false);
	});

	jQuery( '#UniDePrefCarlos' ).change(function(e) {
	  	jQuery('#UniDePrefAndres').attr("checked", false);
	  	jQuery('#UniDePrefJuanDio').attr("checked", false);
	});


	jQuery( '.estudioAnterior' ).change(function(e) {
		if (this.value == '1') {
			jQuery('.depende-EstudioAnterior').show();
		} else {
			jQuery('.depende-EstudioAnterior').hide();
		}
	});

	jQuery('#anterior-datos-generales').click(function(e){
		jQuery("#tab-datos-representante a").trigger( "click" );
	});

	//LOGICA DEL TAB
	jQuery( '.clasGraRepe' ).change(function(e) {
		if (this.value == '1') {
			jQuery('#div-GradoRepetido').show();
		} else {
			jQuery('#div-GradoRepetido').hide();
		}
	});

	jQuery('.UniProc').change(function(e) {
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

	jQuery( '.clasResidente' ).change(function(e) {
		if (this.value == '1') {
			personResidente.reside = 1;
			//cambiar residencia
			jQuery("#EstadoResidencia").val(13);
			jQuery("#EstadoResidencia").attr("disabled", true); 
			jQuery("#select-municipio-EstadoResidencia").val(183);
			jQuery("#select-municipio-EstadoResidencia").attr("disabled", true);
			jQuery('#sectorMunicipioChacaoAlumno').show();
			jQuery('#sectorMunicipioAlumno').hide(); 
		} else {
			personResidente.reside = 0;
			//cambiar residencia
			jQuery("#EstadoResidencia").val(0);
			jQuery("#EstadoResidencia").attr("disabled", false); 
			jQuery("#select-municipio-EstadoResidencia").val(0);
			jQuery("#select-municipio-EstadoResidencia").attr("disabled", false);
			jQuery('#sectorMunicipioChacaoAlumno').hide();
			jQuery('#sectorMunicipioAlumno').show();
		}
	});
});