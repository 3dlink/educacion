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
			jQuery("#tab-datos-representante").removeClass('disabled');
			jQuery("#tab-datos-representante a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-representante a").trigger( "click" );
			window.scrollTo(0,0);
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
	  	if (gradoACursar.grado > 9){
	  		jQuery('.depende-EstudioAnterior').show();
	  	}else{
	  		jQuery('.depende-EstudioAnterior').hide();
	  	}

	  	if (gradoACursar.grado > 9){
	  		jQuery('#cedulaIdentidadAlumno').hide();
	  	}else{
	  		jQuery('#cedulaIdentidadAlumno').show();
	  	}

	});

	jQuery( '#aluGradoActual' ).change(function(e) {

		jQuery('#aluGradoACursar').val(parseInt(this.value) + 1);

	  	if (parseInt(jQuery('#aluGradoACursar').val()) > 9){
	  		jQuery('#cedulaIdentidadAlumno').hide();
	  	}else{
	  		jQuery('#cedulaIdentidadAlumno').show();
	  	}
	});

	jQuery( '.estudioAnterior' ).click(function(e) {
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
	jQuery( '.clasGraRepe' ).click(function(e) {
		if (this.value == '1') {
			jQuery('#div-GradoRepetido').show();
			jQuery('#aluGradoACursar').val(jQuery('#aluGradoActual').val());
			jQuery('#GradoRepetido').val(jQuery('#aluGradoActual').val());

			$.ajax({
			    url: 'http://localhost/andres-bello/admin/get_class_section/' + parseInt(jQuery('#aluGradoACursar').val()) ,
			    success: function(response)
			    {
			        jQuery('#section_selection_holder').html(response);
			    }
			});

		} else {
			jQuery('#div-GradoRepetido').hide();
			jQuery('#aluGradoACursar').val(parseInt(jQuery('#aluGradoActual').val()) + 1);
			jQuery('#GradoRepetido').val(0);

			$.ajax({
			    url: 'http://localhost/andres-bello/admin/get_class_section/' + parseInt(jQuery('#aluGradoACursar').val()) ,
			    success: function(response)
			    {
			        jQuery('#section_selection_holder').html(response);
			    }
			});
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