
var person = {
    repre : 0,
    get representante () {
        return this.repre;
    },
    set representante(val) {
        this.repre = val;
    }
};

var gradoACursar = {
    grado : 0,
    get gradoCursa () {
        return this.grado;
    },
    set gradoCursa(val) {
        this.grado = val;
    }
};

var estadoResideRepre = {
    estado : 0,
    get estadoReside () {
        return this.estado;
    },
    set estadoReside(val) {
        this.estado = val;
    }
};

var municipioResideRepre = {
    municipio : 0,
    get municipioReside () {
        return this.municipio;
    },
    set municipioReside(val) {
        this.municipio = val;
    }
};

function dateToMysql(formId,inputOcultoId) {
	var fecha = jQuery('#'+formId+' .dateToMysql').val();
	jQuery('#'+inputOcultoId).val(moment(fecha).format('YYYY-MM-DD'));
}

function validateCheckboxes(className) {
	jQuery.validator.addMethod(className, function(value) {
	    return jQuery('.'+className+':checked').size() > 0;
	}, 'Debe seleccionar al menos uno.');

	var checkboxes = jQuery('.'+className);
	var checkbox_names = jQuery.map(checkboxes, function(e, i) {
		return jQuery(e).attr("name")
	}).join(" ");

	return checkbox_names;
}

function errorTags(error,element) {
	if (jQuery(element).is( "input[type=radio]" )) {
		error.insertAfter(jQuery(element).parent().parent());
	}

	if (jQuery(element).is( "select" )) {
		error.insertAfter(jQuery(element).parent());
	}

	if (jQuery(element).is( "input[type=checkbox]" )) {
		error.insertBefore(jQuery(element).parent());
	}

	if (jQuery(element).is( "input[type=text]" )) {
		error.insertBefore(jQuery(element).parent());
	}

    if (jQuery(element).is( "input[type=email]" )) {
        error.insertBefore(jQuery(element).parent());
    }
}

function mostrarModal(titulo, mensaje, type, botones){
    BootstrapDialog.show({
        title: titulo,
        message: mensaje,
        closable: false,
        buttons: botones,
        type: type
    });
}

function Ajax(link,datosForm,tipo,sincronizacion,funcion_respuesta) {
    tipo = tipo || "POST";

    jQuery.ajax({
        url: window.location.href+'/'+link,
        type: tipo,
        data: datosForm,
        success: function(response) {
            funcion_respuesta(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            mostrarModal("Error", "Error al registrar los datos vuelva a intentarlo mas tarde", 'type-danger',
                [ {
                    label: 'Aceptar',
                    cssClass: 'btn-success',
                    action: function(dialogItself){
                        dialogItself.close();
                    }
                }]
                );
        },
        dataType: "html",
        async: sincronizacion
    });
}

jQuery( document ).ready(function() {

    jQuery('.onlyNumbers').mask('00000000000');

    jQuery( '.select-estado' ).change(function(e) {
    	jQuery('#select-municipio-'+this.id).val(0);
      	jQuery('#select-municipio-'+this.id+' option').hide();
      	jQuery('#select-municipio-'+this.id+' option[data-id-estado='+this.value+']').show();
    });

    jQuery( '.sueldo' ).click(function(e) {
    	if (this.value == 'mayorMinimo') {
    		jQuery(this).parent().parent().children('.sueldo-mayor-minimo').show();
    	} else {
    		jQuery(this).parent().parent().children('.sueldo-mayor-minimo').hide();
    	}
    });

    jQuery('textarea').keyup(function() {
        this.value = this.value.toUpperCase();
    });

    jQuery('input').keyup(function() {
        this.value = this.value.toUpperCase();
    });
});