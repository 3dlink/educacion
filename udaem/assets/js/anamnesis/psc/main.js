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


});