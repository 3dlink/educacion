jQuery( document ).ready(function() {
	var validator = jQuery("#form-datos-alumno").validate(
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
			},
			PrimerNombreDelAlumno:{
				letterswithbasicpunc: true
			},
			SegundoNombreDelAlumno:{
				letterswithbasicpunc: true
			},
			PrimerApellidoDelAlumno:{
				letterswithbasicpunc: true
			},
			SegundoApellidoDelAlumno:{
				letterswithbasicpunc: true
			}
		},
		messages: {
	    	FechaDeNacimientoDelAlumno: {
		      	dateITA : 'Debe introducir una fecha valida.',
	    	},
	    	CedulaDeIdentidadDelAlumnoOCedulaEscolar: {
        		minlength: 'minimo 8 digitos.'
	        },
			PrimerNombreDelAlumno:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			},
			SegundoNombreDelAlumno:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			},
			PrimerApellidoDelAlumno:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			},
			SegundoApellidoDelAlumno:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			}
		}
	});

	jQuery('#aluCedula').mask('000000000');
	jQuery('#aluNumCasaApart').mask('000000');
	jQuery('#aluFechaNac').mask("00/00/0000", {placeholder: "__/__/____"});

	var aluFechaNac = jQuery('#aluFechaNac').attr('name');

	jQuery('#aluFechaNac').blur(function(e) {
		dateToMysql('form-datos-alumno','idFechaDeNacimientoDelAlumno');
	});
	
	//Continuar boton dos
	jQuery('#siguiente-datos-alumno').click(function(e){
		jQuery('#aluFechaNac').removeAttr('name');

		dateToMysql('form-datos-alumno','idFechaDeNacimientoDelAlumno');
		
		var tDia = document.getElementById('idFechaDeNacimientoDelAlumno').value;
		var tMes = document.getElementById('idFechaDeNacimientoDelAlumno').value;
		var tYear = document.getElementById('idFechaDeNacimientoDelAlumno').value;

		var d1 = new Date(tYear.substring(0, 4), (tMes.substring(5, 7)-1), tDia.substring(8, 10));
		var d2 = new Date();
		var d3 = new Date(d2.getFullYear(), 11, 31);

		var d1Y = d1.getFullYear();
		var d2Y = d3.getFullYear();
		var d1M = d1.getMonth();
		var d2M = d3.getMonth();

		var DiffDate = (d2M+12*d2Y)-(d1M+12*d1Y);

		if (d1 > d2){
			alert("La fecha de nacimiento no puede ser superior a la fecha actual");
		}else{
			if(gradoACursar.grado == 1 && (DiffDate > 47) ){
				alert("No esta en edad de cursar el grado seleccionado");
			}else if(gradoACursar.grado == 2 && (DiffDate < 48 || DiffDate > 59) ){
				alert("No esta en edad de cursar el grado seleccionado");
			}else if(gradoACursar.grado== 3 && (DiffDate < 60 || DiffDate > 71) ){
				alert("No esta en edad de cursar el grado seleccionado");
			}else{
				if (jQuery('#form-datos-alumno').valid()) {
					jQuery("#tab-datos-socioeconomicos").removeClass('disabled');
					jQuery("#tab-datos-socioeconomicos a").attr( 'data-toggle', 'tab' );
					jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
					window.scrollTo(0,0);
				} else {
					validator.focusInvalid();
				}
			}
		}



		jQuery('#aluFechaNac').attr('name',aluFechaNac);
	});

	jQuery('#anterior-datos-alumno').click(function(e){
		if(person.repre == 3){
			jQuery("#tab-datos-padre").removeClass('disabled');
			jQuery("#tab-datos-padre a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-padre a").trigger( "click" );
			window.scrollTo(0,0);
		}else if(person.repre == 2){
			jQuery("#tab-datos-madre").removeClass('disabled');
			jQuery("#tab-datos-madre a").attr( 'data-toggle', 'tab' );
			jQuery("#tab-datos-madre a").trigger( "click" );
			window.scrollTo(0,0);
		}
	});

	jQuery( '#EstadoResidencia' ).change(function(e) {
		jQuery('#MunicipioResidencia').val(0);
		jQuery('#div-muni-resi-alu').show();
	  	jQuery('#MunicipioResidencia option').hide();
	  	jQuery('#div-muni-resi-alu select option[data-id-estado='+this.value+']').show();
	  	estadoResideRepre.estado = this.value;
	});

	jQuery( '#select-municipio-EstadoResidencia' ).change(function(e) {
	  	//municipioResideRepre.municipio = this.value;
	  	if(this.value == 183){
			jQuery('#sectorMunicipioChacaoAlumno').show();
			jQuery('#sectorMunicipioAlumno').hide();
	  	}else{
			jQuery('#sectorMunicipioChacaoAlumno').hide();
			jQuery('#sectorMunicipioAlumno').show();
	  	}
	});

	jQuery( '#aluNacVe' ).click(function(e) {
		jQuery('.alu-nacio-ve').show();
		jQuery('.alu-nacio-ex').hide();
	});

	jQuery( '#aluNacEx' ).click(function(e) {
		jQuery('.alu-nacio-ve').hide();
		jQuery('.alu-nacio-ex').show();
	});
});