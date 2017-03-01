jQuery( document ).ready(function() {

	var requireActiEspecialAlu = validateCheckboxes('requireActiEspecialAlu');

	var validator = jQuery("#form-datos-otros").validate(
	{
		errorPlacement: function(error, element) {
			// censo/main.js
			errorTags(error,element);
		},

		groups: {
			checks: requireActiEspecialAlu
		}
	});

	jQuery('#telDelContactoDeEmergenciaUno').mask("0000-0000000", {placeholder: "Ej. 0212-1234567"});
	jQuery('#telDelContactoDeEmergenciaDos').mask("0000-0000000", {placeholder: "Ej. 04xx-1234567"});

	jQuery('#siguiente-datos-interes').click(function(e){
		var data = jQuery('#form-general').serialize()+ '&' +
		jQuery('#form-datos-alumno').serialize()+ '&' +
		jQuery('#form-datos-representante').serialize()+ '&' +
		jQuery('#form-datos-madre').serialize()+ '&' +
		jQuery('#form-datos-padre').serialize()+ '&' +
		jQuery('#form-datos-socieconomicos').serialize()+ '&' +
		jQuery('#form-datos-saludalu').serialize()+ '&' +
		jQuery('#form-datos-otros').serialize();

		if (jQuery('#form-general').valid() && jQuery('#form-datos-alumno').valid() && jQuery('#form-datos-representante').valid()
		   && jQuery('#form-datos-madre').valid() && jQuery('#form-datos-padre').valid() && jQuery('#form-datos-socieconomicos').valid()
		   && jQuery('#form-datos-saludalu').valid()){
			if (jQuery('#form-datos-otros').valid()) {
				jQuery('#siguiente-datos-interes').prop("disabled",true);
				window.scrollTo(0,0);
				Ajax('../inscribir',data,'POST',true,function(response){
				    mostrarModal("Éxito", "Alumno registrado con éxito, ha sido enviado el resumen via correo electrónio.", 'type-primary',
			                [{
			                    label: 'Aceptar',
			                    cssClass: 'btn-success',
			                    action: function(dialogItself){
			                    	window.location.reload(true);
			                        dialogItself.close();
			                        mostrarReporte(response);
			                        mostrarCarnet(response);
			                    }
			                }]);
				    jQuery('#siguiente-datos-interes').prop("disabled",false);
				});
			} else {
				jQuery('#siguiente-datos-interes').prop("disabled",false);
				validator.focusInvalid();
			}
		}else{
			alert("Debe registrar todos los datos requeridos, por favor revisar los datos faltantes");
		}
	});

	jQuery('#siguiente-datos-interes-add').click(function(e){
		var data = jQuery('#form-general').serialize()+ '&' +
		jQuery('#form-datos-alumno').serialize()+ '&' +
		jQuery('#form-datos-representante').serialize()+ '&' +
		jQuery('#form-datos-madre').serialize()+ '&' +
		jQuery('#form-datos-padre').serialize()+ '&' +
		jQuery('#form-datos-socieconomicos').serialize()+ '&' +
		jQuery('#form-datos-saludalu').serialize()+ '&' +
		jQuery('#form-datos-otros').serialize();

		if (jQuery('#form-general').valid() && jQuery('#form-datos-alumno').valid() && jQuery('#form-datos-representante').valid()
		   && jQuery('#form-datos-madre').valid() && jQuery('#form-datos-padre').valid() && jQuery('#form-datos-socieconomicos').valid()
		   && jQuery('#form-datos-saludalu').valid()){
			if (jQuery('#form-datos-otros').valid()) {
				jQuery('#siguiente-datos-interes').prop("disabled",true);
				window.scrollTo(0,0);
				Ajax('../../inscribir',data,'POST',true,function(response){
				    mostrarModal("Éxito", "Alumno registrado con éxito, ha sido enviado el resumen via correo electrónio.", 'type-primary',
			                [{
			                    label: 'Aceptar',
			                    cssClass: 'btn-success',
			                    action: function(dialogItself){
			                    	//window.location.reload(true);
			                        dialogItself.close();
			                        mostrarReporteAdd(response);
			                        mostrarCarnetAdd(response);
			                        window.location.href = '../student_list';
			                    }
			                }]);
				    jQuery('#siguiente-datos-interes').prop("disabled",false);
				});
			} else {
				jQuery('#siguiente-datos-interes').prop("disabled",false);
				validator.focusInvalid();
			}
		}else{
			alert("Debe registrar todos los datos requeridos, por favor revisar los datos faltantes");
		}
	});

	function mostrarReporteAdd(respuesta){
		var respuestaCenso = JSON.parse(respuesta).id_inscripcion;
		AjaxReportEdit('../../../ResumenInscripcion',respuestaCenso,'POST',true,function(response){
			alert(response);
		});
	}

	function mostrarCarnetAdd(respuesta){
		var respuestaCenso = JSON.parse(respuesta).id_inscripcion;
		AjaxReportEmpty('../../../Carnet',respuestaCenso,'POST',true,function(response){
			alert(response);
		});
	}

	function mostrarReporte(respuesta){
		var respuestaCenso = JSON.parse(respuesta).id_inscripcion;
		AjaxReport('../../ResumenInscripcion',respuestaCenso,'POST',true,function(response){
			alert(response);
		});
	}

	function mostrarCarnet(respuesta){
		var respuestaCenso = JSON.parse(respuesta).id_inscripcion;
		AjaxReportEmpty('../../Carnet',respuestaCenso,'POST',true,function(response){
			alert(response);
		});
	}

	function cargarimagen(respuesta, imagen){
		var respuestaCenso = JSON.parse(respuesta).id_inscripcion;
		AjaxImagen('../mover_imagen',respuestaCenso,'POST',true,function(response){
			alert(response);
		});
	}

	jQuery( '.aluCatolico' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenAluCatolico').show();
		} else {
			jQuery('.depenAluCatolico').hide();
		}
	});

	jQuery( '.actividadEspe' ).click(function(e) {
		if (this.value == '1') {
			jQuery('.depenActividadEspe').show();
		} else {
			jQuery('.depenActividadEspe').hide();
		}
	});

	jQuery('#idAluActiDeportivaNinguna').click(function(){
	    if(jQuery(this).is(':checked')){
	        jQuery('.depenActividadEspeNinguna').hide();
	        jQuery('.checkDeportivaNinguna').attr("checked", false);
	    }else{
	    	jQuery('.depenActividadEspeNinguna').show();
	    }
	});

});

