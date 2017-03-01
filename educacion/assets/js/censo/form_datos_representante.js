jQuery( document ).ready(function() {

	var validator = jQuery("#form-datos-representante").validate(
	{
		errorPlacement: function(error, element) {
			errorTags(error,element);
	    	},

		rules: {
			FechaDeNacimientoDelRepresentante: {
		   		dateITA : true
			},
			PrimerNombreDelRepresentante:{
				letterswithbasicpunc: true
			},
			SegundoNombreDelRepresentante:{
				letterswithbasicpunc: true
			},
			PrimerApellidoDelRepresentante:{
				letterswithbasicpunc: true
			},
			SegundoApellidoDelRepresentante:{
				letterswithbasicpunc: true
			}
		},
		messages: {
			FechaDeNacimientoDelRepresentante: {
			  dateITA : 'Debe introducir una fecha valida.',
			},
			PrimerNombreDelRepresentante:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			},
			SegundoNombreDelRepresentante:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			},
			PrimerApellidoDelRepresentante:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			},
			SegundoApellidoDelRepresentante:{
				letterswithbasicpunc: 'Contiene caracteres no validos'
			}
		}
	});

	jQuery('#repreCedula').mask('00000000');

	jQuery('#repreTelefHabi').mask("0000-0000000", {placeholder: "Ej. 0212-1234567"});
	jQuery('#repreTelefCelu').mask("0000-0000000", {placeholder: "Ej. 04xx-1234567"});
	jQuery('#repreFechaNac').mask("00/00/0000", {placeholder: "__/__/____"});

	var repreFechaNac = jQuery('#repreFechaNac').attr('name');
	var representante=0;

	jQuery('#repreFechaNac').blur(function(e) {
		dateToMysql('form-datos-representante','idFechaDeNacimientoDelRepresentante');
	});
	
	//Continuar boton dos
	jQuery('#siguiente-representante').click(function(e){

		var fechaNacimiento = new Date(document.getElementById('repreFechaNac').value);
		var d1 = new Date((fechaNacimiento.getMonth() + 1) + '/' + fechaNacimiento.getDate() + '/' +  fechaNacimiento.getFullYear());
		var d2 = new Date();

		var d1Y = d1.getFullYear();
		var d2Y = d2.getFullYear();
		var d1M = d1.getMonth();
		var d2M = d2.getMonth();

		var DiffDate = (d2M+12*d2Y)-(d1M+12*d1Y);

		jQuery('#repreFechaNac').removeAttr('name');

		dateToMysql('form-datos-representante','idFechaDeNacimientoDelRepresentante');

		if(DiffDate <= 216){
			alert("El representante debe ser mayor de edad");
		}else{
			if (jQuery('#form-datos-representante').valid()) {
				jQuery("#tab-datos-generales").removeClass('disabled');
				jQuery("#tab-datos-generales a").attr( 'data-toggle', 'tab' );
				jQuery("#tab-datos-generales a").trigger( "click" );
				window.scrollTo(0,0);
			}
		}

		jQuery('#repreFechaNac').attr('name',repreFechaNac);
	});

	jQuery( '#repreEstadoResidencia' ).change(function(e) {
		if(personResidente.reside == 0){
			jQuery("#EstadoResidencia").val(this.value);
		}
	});

	jQuery( '#select-municipio-repreEstadoResidencia' ).change(function(e) {
	  	if(this.value == 183){
			jQuery('#sectorMunicipioChacaoRepre').show();
			jQuery('#sectorMunicipioRepre').hide();
	  	}else{
			jQuery('#sectorMunicipioChacaoRepre').hide();
			jQuery('#sectorMunicipioRepre').show();
	  	}
		if(personResidente.reside == 0){
			jQuery("#select-municipio-EstadoResidencia").val(this.value);
		}
	});

	jQuery( '#select-sector-municipio' ).change(function(e) {
		jQuery("#select-sector-municipio-alumno").val(this.value);
	});

	jQuery( '.tipo-parentesco' ).change(function(e) {
		if (this.value == 'OTRO') {
			jQuery('#div-select-tipo-parentesco').show();
			jQuery('#madre-elegida').hide();
			jQuery('#datosMadre').children('.main').show();
			jQuery('#datosPadre').children('.padre-elegida-repre').hide();
			jQuery('#datosPadre').children('.main').show();
			representante = 1;
			person.repre = 1;
		}else if (this.value == 'MADRE'){
			jQuery('#datosPadre').children('.padre-elegida-repre').hide();
			jQuery('#datosPadre').children('.main').show();
			jQuery('#madre-elegida').show();
			jQuery('#datosMadre').children('.main').hide();
			jQuery('#div-select-tipo-parentesco').hide();
			representante = 2;
			person.repre = 2;
		} else if (this.value == 'PADRE') {
			jQuery('#datosPadre').children('.padre-elegida-repre').show();
			jQuery('#datosPadre').children('.main').hide();
			jQuery('#madre-elegida').hide();
			jQuery('#datosMadre').children('.main').show();
			jQuery('#div-select-tipo-parentesco').hide();
			representante = 3;
			person.repre = 3;
		}
	});

	jQuery( '.repreTipoNacio' ).change(function(e) {
		if (this.value == 'VENEZOLANA') {
			jQuery('.tipoNacDepenVe').show();
			jQuery('.tipoNacDepenEx').hide();
		} else {
			jQuery('.tipoNacDepenVe').hide();
			jQuery('.tipoNacDepenEx').show();
		}
	});

	jQuery( '.repreMismaDireAlu' ).change(function(e) {
		if (this.value == '0') {
			jQuery('.depenRepreMismaResi').show();
		} else {
			jQuery('.depenRepreMismaResi').hide();
			jQuery("#repreEstadoResidencia").val(estadoResideRepre.estado);
			jQuery("#select-municipio-repreEstadoResidencia").val(municipioResideRepre.municipio);
		}
	});

	jQuery( '.trabaja-repre' ).change(function(e) {
		if (this.value == '0') {
			jQuery('.repre-trabajador').hide();
		} else {
			jQuery('.repre-trabajador').show();
		}
	});

	jQuery( '.trabaja-repre-municipio' ).change(function(e) {
		if (this.value == '0') {
			jQuery('.repre-trabaja-municipio').hide();
		} else {
			jQuery('.repre-trabaja-municipio').show();
		}
	});

	jQuery( '.repre-hijos-estudian-chacao' ).change(function(e) {
		if (this.value == '0') {
			jQuery('.hijos-estudian-chacao').hide();
		} else {
			jQuery('.hijos-estudian-chacao').show();
		}
	});

	jQuery( '.repre-hijos-estudian-guanche' ).change(function(e) {
		if (this.value == '0') {
			jQuery('.hijos-estudian-guanche').hide();
		} else {
			jQuery('.hijos-estudian-guanche').show();
		}
	});

	jQuery( '.repre-hijos-estudian-andres-bello' ).change(function(e) {
		if (this.value == '0') {
			jQuery('.hijos-estudian-andres-bello').hide();
		} else {
			jQuery('.hijos-estudian-andres-bello').show();
		}
	});

	jQuery( '.repre-hijos-estudian-carlos-soublette' ).change(function(e) {
		if (this.value == '0') {
			jQuery('.hijos-estudian-carlos-soublette').hide();
		} else {
			jQuery('.hijos-estudian-carlos-soublette').show();
		}
	});

	jQuery( '.repre-diversidad-funcio' ).change(function(e) {
		if (this.value == '1') {
			jQuery('.depen-repre-diversidad').show();
		} else {
			jQuery('.depen-repre-diversidad').hide();
		}
	});

	jQuery('.trabaja-repre-alcaldia').change(function(e) {
		if (this.value != 0) {
			jQuery('.depende-trabaja-alcaldia').hide();
		} else {
			jQuery('.depende-trabaja-alcaldia').show();
		}
	});

	jQuery('#repreCedula').blur(function(e) {
		var cedula = jQuery('#repreCedula').val();

		var data = new Array(cedula);
		AjaxCupos('buscarCuposSolicitados',data,'POST',true,function(response){
			if(response == "NO_OK"){
				mostrarModal("Atención", "No puede solicitar más cupos, en caso de requerir cupo adicional comuniquese con contactoeducacion@chacao.gob.ve", 'type-warning',
				[{
				    label: 'Aceptar',
				    cssClass: 'btn-warning',
				    action: function(dialogItself){
			    		window.location.reload(true);
				        	dialogItself.close();
                			}
            			}, {
				    label: 'Ayuda',
				    cssClass: 'btn-normal',
				    action: function(dialogItself){
				    	jQuery('#repreCedula').val('');
				    	dialogItself.close();
					$('#myModalContact').modal('show');
                			}}]);
			}else if(response !== ""){
				ordenarCenso(response);
			}
		});
	});

	jQuery('#repreUrbanizacion').blur(function(e) {
		jQuery('#aluUrbSector').val(this.value);
	});

	jQuery('#repreCalle').blur(function(e) {
		jQuery('#aluCalleAve').val(this.value);
	});

	jQuery('#repreCasa').blur(function(e) {
		jQuery('#aluEdifCasa').val(this.value);
	});

	jQuery('#reprePiso').blur(function(e) {
		jQuery('#aluPisoPlanta').val(this.value);
	});

	jQuery('#repreApartamento').blur(function(e) {
		jQuery('#aluNumCasaApart').val(this.value);
	});
});