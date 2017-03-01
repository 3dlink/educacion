$("form.validate").validate({
  rules: {
    identification:{
      required: true,
      email: true
    }
  }
  
});


function ajax(url,method,data,callback,errorcall) {

  //console.log(method+data);
  jQuery.ajax(
    { 
      type: method, 
      url: url,
      dataType: 'json', 
      data: data,
      success: function (data) {
        callback(data); 
      },
      error: function(xhr, status, error) {
        errorcall(xhr, status, error);
      }
  });
}

function showStudent(student) {

  var str;
  var temp;
  var response;

for (i in student) {
  if(student[i] == null || student[i] == ''){
    student.splice(i,1);
  }
  else
  {
    temp;
    temp = ''+student;
    }
  }
  str = temp;
  response = str.replace(/,/gi, " ");

  return response;
}

$(document).ready(function() {
  // jQuery.extend(jQuery.validator.messages, {
  //   required: "Ingrese número de cédula",
  //   number: "Solo se aceptan números",
  //   max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  //   min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
  // });
});



jQuery(function($){

  var validator = $("form.carnet").validate({
   rules:{
          'txtIdentification': { required: true, number: true },
          'record_types': { required: true}
          },
    messages:{ required: '', number: '' },
    success:function (element) {
    $('#txtIdentification').addClass('successInput');
    },
    highlight: function (element) {
      var r = $(element).closest('.form-group');
      $(element).closest('.form-group').focus();
      $(element).closest('.form-group').addClass('validate-has-error');
    },
    unhighlight: function (element) {
      $(element).closest('.form-group').removeClass('validate-has-error');
    },
    submitHandler: function(form) {
      // Send form
      //console.log($("form.carnet").attr('action'));
      $("#noFound").hide();
      $("#Found").hide();
      $('#linkConstancia').hide();

      $("#selectConstancias").hide();
      ajax(
        $("form.carnet").attr('action'),
        $("form.carnet").attr('method'),
        $("form.carnet").serialize(),
        function(data) {
          var status = data.status;
          if(status === 1) {
            $("#Found").show();
            $("#selectConstancias").show();
            $('select').val('0');
            var student = [data.primer_nombre, data.segundo_nombre, data.primer_apellido,data.segundo_apellido];
            var alumno = showStudent(student);

            $("#foundStudent").text(alumno);
          }
          else
          {
            $("#noFound").show();
          }
        },
        function(xhr, status, error){
        //console.log(xhr);
        //console.log(status);
        //console.log(error);
        }
      );
    }
  })
});

/*************************************************************************************************************************************************
End Validated search carnets (file carnets.php)
*************************************************************************************************************************************************/

// JS from constancia

//Mostrar y ocultar enlace ver constancia
$("#record_types").change(function(){
    var valor =jQuery(this).val();
    if(valor == 0){
       jQuery('#linkConstancia').css('display','none');
       
     }
     else if(valor == 1)
     {
         jQuery('#linkConstancia').css('display','block');
         jQuery('#linkConstanciaAsistencia').css('display','none');
         jQuery('#linkConstanciaAsistenciaButton').css('display','none');
         jQuery('#linkConstanciaTramites').css('display','none');
         jQuery('#linkConstanciaTramitesButton').css('display','none');
         jQuery('#linkConstanciaConvovatoria').css('display','none');
         jQuery('#linkConstanciaConvovatoriaButton').css('display','none');
     }
     else if(valor == 2)
     {
         jQuery('#linkConstancia').css('display','none');
         jQuery('#linkConstanciaAsistencia').css('display','block');
         jQuery('#linkConstanciaAsistenciaButton').css('display','block');
         jQuery('#linkConstanciaTramites').css('display','none');
         jQuery('#linkConstanciaTramitesButton').css('display','none');
         jQuery('#linkConstanciaConvovatoria').css('display','none');
         jQuery('#linkConstanciaConvovatoriaButton').css('display','none');
     }     
     else if(valor == 7)
     {
         jQuery('#linkConstancia').css('display','none');
         jQuery('#linkConstanciaAsistencia').css('display','none');
         jQuery('#linkConstanciaAsistenciaButton').css('display','none');
         jQuery('#linkConstanciaTramites').css('display','block');
         jQuery('#linkConstanciaTramitesButton').css('display','block');
         jQuery('#linkConstanciaConvovatoria').css('display','none');
         jQuery('#linkConstanciaConvovatoriaButton').css('display','none');
     } 
     else if(valor == 8)
     {
         jQuery('#linkConstancia').css('display','none');
         jQuery('#linkConstanciaAsistencia').css('display','none');
         jQuery('#linkConstanciaAsistenciaButton').css('display','none');
         jQuery('#linkConstanciaTramites').css('display','none');
         jQuery('#linkConstanciaTramitesButton').css('display','none');
         jQuery('#linkConstanciaConvovatoria').css('display','block');
         jQuery('#linkConstanciaConvovatoriaButton').css('display','block');
     }      
});

/*************************************************************************************************************************************************
End 
*************************************************************************************************************************************************/


/*$(".recaudo" ).click(function() {

  url = $(this).attr( "data-url" );

  console.log(url);

  showAjaxModal(url,function(){
    $( '#validarRecaudos' ).validate({
        rules: {
         recaudo1: {
            required: true
        },
        recaudo2: {
            required: true
        },
        recaudo3: {
            required: true
        }

        },
        messages:{ required: ''},
        errorPlacement: function(error, element) {
                                                                                                                                                                                            
            if ($(element).is( 'input[type=checkbox]' )) {
                error.insertAfter(element);
            }
        },
        submitHandler:function(form) {
        // Send form
        action = $("#validarRecaudos").attr('action');
        console.log('action'+action);

        ajax(
          $("#validarRecaudos").attr('action'),
          $("#validarRecaudos").attr('method'),
          $("#validarRecaudos").serialize(),
          function(data) {
            alert('response submit');
          },
          function(xhr, status, error){
          //console.log(xhr);
          //console.log(status);
          //console.log(error);
          }
        );
      }
    });
  });
});*/

$(".recaudo" ).click(function() {

  url = jQuery(this).attr("data-url");
  id = '#'+jQuery(this).attr("id");
  button = jQuery(this).parent().siblings('td');
  idButtonAdmitir = '#'+button[0].childNodes[1].id;

  showAjaxModal(url,function(){
    jQuery( '#validarRecaudos' ).validate({
        rules: {
        },
        messages:{ required: ''},
        errorPlacement: function(error, element) {                                                                                                                                                                          
            if (jQuery(element).is( 'input[type=checkbox]' )) {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
          jQuery("input:checkbox").each(function(){
            if( ! jQuery(this).is(':checked') ){
             jQuery(this).prev().css( "color", "red" );
            }
            if(jQuery(this).is(':checked')) {
              jQuery(this).prev().css( "color", "#337ab7" );
            }
          });                                                                                                                                                                               
          Ajax(
            jQuery("#validarRecaudos").attr('action'),
            jQuery("#validarRecaudos").attr('method'),
            jQuery("#validarRecaudos").serialize(),
            function(data) {
              // alert('response submit');
              jQuery('#recaudoVacio').hide();
              var recaudo_insertado = data.recaudo_insertado;
              var recaudos_completados = data.recaudos_completados; 
              var status = data.status;
                if(status === 'vacio') {
                  jQuery('#recaudoVacio').show();
                }
                if(status === 1) {
                  jQuery('.submit').prop('disabled', true);
                }
                if(recaudo_insertado === 1 && recaudos_completados === 0) {
                  jQuery("#success").show();
                }
                if(recaudos_completados === 1) {
                   jQuery("#successRecaudos").show();
                   jQuery(id).prop('disabled', true);
                   jQuery(idButtonAdmitir).removeAttr("disabled");
                }
            },
            function(xhr, status, error){
              console.log(xhr);
              console.log(status);
              console.log(error);
            }
          );
        },
    });

  });
});