<?php
/*  $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    $url = "http://www.chacao.gob.ve";
    if ($referer === ''){
        header( "Location: $url" );
    }else{
        if($referer !== $url){
            header( "Location: $url" );
        }
    }*/
?>
<!DOCTYPE html>
<html lang="es-ve" >
  <head>
    <title>Censo y Registro Escolar</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Sistema de Educación Chacao"/>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <!-- Loading core css-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300"/>
    <link rel="stylesheet" type="text/css" href="vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate.css/animate.css"/>
    <!-- Loading template style-->
    <link rel="stylesheet" href="css/themes/theme.css"/>
    <link rel="stylesheet" href="css/style-responsive.css"/>
    <!-- JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>

  </head>

  <body class="animated" style="margin: 0px !important;">
    <div class="default-page" style="height: 100%;">
        <div style="height: 100%; overflow: hidden;">
            <div id="lock-screen-page">
                <div class="row" >
                    <div class="col-md-2" style="padding-left: 4%;">
                        <img style="height: 70px ! important; margin-top: 15px;" src="images/logo.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-8" style="text-align: center; margin-bottom: 10px; color: #FFF; ">
                        <h1 style="font-family: 'Oswald' !Important;">Censo y Registro Escolar Período 2016 - 2017</h1>
                        <div class="email" style="font-size: 20px;">Elija la escuela en la que desea solicitar un cupo haciendo clic en ella</div>
                    </div>
                </div>
                <div class="row" >
                    <div id="lock-screen-info" class="col-md-3" style="text-align: center; width: 10% !important;"></div>
                    <div id="lock-screen-info" class="page-form col-md-3" style="text-align: left; width: 35%; !important">
                        <a href="#myModalContact" data-toggle="modal" >
                            <div class="row" style="padding-left: 5%; padding-top: 5%;">
                                <div class="col-md-12" style="padding-left: 25%;">
                                    <img style="height: 130px ! important; margin-bottom: 15px;" src="images/avatar/educacion.png" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                        <div class="email" style="font-size: 14px; text-align: center;">Para ayuda y/o sugerencias haga clic <a href="#myModalContact" data-toggle="modal" >aquí</a></div>
                    </div>
                    <div id="lock-screen-info" class="col-md-3" style="text-align: center; width: 10% !important;"></div>
                    <div id="lock-screen-info" class="page-form col-md-3" style="text-align: left; width: 35%; !important">
                        <a href="../andres-bello/censo" target="_blank">
                            <div class="row" style="padding-left: 5%; padding-top: 5%;">
                                <div class="col-md-12" style="padding-left: 35%;">
                                    <img src="images/avatar/andres-bello.png" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="lock-screen-info" class="col-md-3" style="text-align: center; width: 10% !important;"></div>
                 </div>
                 <div class="row" >
                    <div id="lock-screen-info" class="col-md-3" style="text-align: center; width: 10% !important;"></div>
                    <div id="lock-screen-info" class="page-form col-md-3" style="text-align: left; width: 35%; !important">
                        <a href="../soublette/censo" target="_blank">
                            <div class="row" style="padding-left: 5%; padding-top: 5%;">
                                <div class="col-md-12" style="padding-left: 35%;">
                                    <img src="images/avatar/carlos-soublette.png" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="lock-screen-info" class="col-md-3" style="text-align: center; width: 10% !important;"></div>
                    <div id="lock-screen-info" class="page-form col-md-3" style="text-align: left; width: 35%; !important">
                        <a href="../guanche/censo" target="_blank">
                            <div class="row" style="padding-left: 5%; padding-top: 5%;">
                                <div class="col-md-12" style="padding-left: 35%;">
                                    <img src="images/avatar/guanche.png" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="lock-screen-info" class="col-md-3" style="text-align: center; width: 10% !important;"></div>
                </div>
            </div>
        </div>
    <!-- Modal -->
    <div id="myModalFinish" class="modal fade" role="dialog" >
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Información de interés</h4>
          </div>
          <div class="modal-body" style="font-size: 11px; line-height: 13px;">
            <p>Estimado representante, el proceso de censo y registro escolar para el año escolar 2016-2017 ha culminado.</p>
            <p style="margin-left: 10px;">Ante cualquier duda y/o sugerencia nos pueden contactar a través de la siguiente dirección electrónica <a style="color: blue;" href="mailto:contactoeducacion@chacao.gob.ve?Subject=Censo%20Educacion%20Chacao" target="_top">contactoeducacion@chacao.gob.ve</a></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog" >
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Información de interés</h4>
          </div>
          <div class="modal-body" style="font-size: 11px; line-height: 13px;">
            <p>Formaliza el requerimiento en dos sencillos pasos:</p>
            <p style="margin-left: 10px;"><strong>ENTREVISTA Y RECEPCIÓN DE RECAUDOS: </strong>De acuerdo a la fecha que te corresponda, debes acudir con tu representado y los recaudos. Esta cita es de carácter obligatorio.</p>
            <br>
            <p><strong>REQUISITOS PARA OPTAR A UN CUPO</strong></p>
            <p style="margin-left: 10px;">Ser residente del Municipio Chacao.</p>
            <p style="margin-left: 10px;">En solicitudes para Educación Inicial el niño debe haber cumplido para el 15 de septiembre de 2016</p>
            <p style="margin-left: 20px;">Grupo I: <strong>Entre 3 años a 3 años  y 11meses de edad.</strong></p>
            <p style="margin-left: 20px;">Grupo II: <strong>Entre 4 años a  4 años  y  11 meses de edad.</strong></p>
            <p style="margin-left: 20px;">Grupo III: <strong>Entre 5 años a  5 años y  11meses de edad.</strong></p>
            <p style="margin-left: 20px;">Si la solicitud de ingreso es para Primer grado de Educación Primaria se requiere la boleta de promoción de Educación Inicial y haber cumplido 6 años de edad al 31 de diciembre del 2016.</p>
             <p style="margin-left: 20px;">Nota: La prioridad en la asignación del cupo es para los residentes de Chacao. Si no resides en el municipio, debes consignar una carta de trabajo con membrete de la empresa, compañía o institución donde laboras.</p>
            <br>
            <p><strong>DISPONIBILIDAD DE CUPOS</strong></p>
            <div class="col-md-12" style="text-align: center">
                <img style="margin-top: 15px; height: auto ! important; margin-bottom: 30px;" src="images/cupos_educacion.png" alt="" class="img-responsive">
            </div>
            <br>
            <p><strong>RECAUDOS A CONSIGNAR</strong></p>
            <p style="margin-left: 10px;">En la entrevista debes presentar impreso el certificado electrónico que te enviamos y traer original y copia de los siguientes documentos:</p>
            <p style="margin-left: 20px;">1. Constancia de Residencia vigente del representante legal, emitida en la página del CNE.</p>
            <p style="margin-left: 20px;">2. Copia de la Partida de Nacimiento del niño (a).</p>
            <p style="margin-left: 20px;">3. Copia de la Cédula de Identidad de ambos padres o del representante legal. Si el representante legal no es alguno de los padres, debe consignar documento probatorio que demuestre la guardia y custodia del niño (a) emitido por los órganos competente del estado.</p>
            <p style="margin-left: 20px;">4. Constancia de vacunas y Constancia de Niño Sano, emitida por cualquier centro de salud.</strong></p>
            <p style="margin-left: 20px;">5. Original y copia del boletín del último lapso y la Boleta de Promoción (Solo para Primer Grado).</strong></p>
            <br>
            <p><strong>OBSERVACIONES:</strong></p>
            <p style="margin-left: 10px;">Si el representante no acude a formalizar su inscripción durante la fecha pautada pierde el derecho a la solicitud, el cual será asignado al aspirante con la ponderación inmediata.</p>
            <p style="margin-left: 10px;">En caso de que se demuestre que los datos suministrados por el solicitante sean falsos, la solicitud quedará sin efecto de manera inmediata.</p>
            <p style="margin-left: 10px;">Esta solicitud NO GARANTIZA el otorgamiento del cupo.</p>
            <p style="margin-left: 10px;">En caso de cualquier duda y/o sugerencia nos pueden contactar a través de la siguiente dirección electrónica <a style="color: blue;" href="mailto:contactoeducacion@chacao.gob.ve?Subject=Censo%20Educacion%20Chacao" target="_top">contactoeducacion@chacao.gob.ve</a></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
    <div id="myModalContact" class="modal fade" role="dialog" >
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Formulario de Ayuda y/o Sugerencias</h4>
          </div>
          <div class="modal-body" style="font-size: 11px; line-height: 13px;">
            <form class="contact" name="contact">
              <div class="form-group">
                <label>Nombres y Apellidos</label>
                <input class="form-control required" placeholder="Nombres y Apellidos" data-placement="top" data-trigger="manual" data-content="Debe contener al menos 3 caracteres y solo letras." type="text" name="nombres_apellidos">
              </div>
              <div class="form-group">
                <label>Mensaje</label>
                <textarea class="form-control" placeholder="Escriba su mensaje aquí" data-placement="top" data-trigger="manual" name="mensaje"></textarea>
              </div>
              <div class="form-group">
                  <label>Correo</label>
                  <input class="form-control email" placeholder="sucorreo@dominico.com" data-placement="top" data-trigger="manual" data-content="Debe ingresar un correo valido" type="text" name="correo">
              </div>
              <div class="form-group"><label>Telefono</label><input class="form-control phone" placeholder="Número de Telefono" data-placement="top" data-trigger="manual" data-content="Debe ingresar un telefono valido." type="text" name="telefono">
              </div>
              <div class="form-group"><label>Celular</label><input class="form-control phone" placeholder="Número de Celular" data-placement="top" data-trigger="manual" data-content="Debe ingresar un telefono valido." type="text" name="movil">
              </div>
              <div class="form-group">
                <input class="btn btn-success pull-right" value="Enviar" id="submit">
                <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; Datos incompletos. </p></div>
            </form>
          </div>
          <div style="margin-top: 30px;" class="modal-footer">
            <button id="cerrar_modal" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- Bootstrap - Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(window).load(function(){
            $('#myModalFinish').modal('show');
            $('input#submit').prop('disabled', false);
        });
    </script>
    <script>
        $(document).ready(function () {
            $("input#submit").click(function(){
                $.ajax({
                    type: "POST",
                    url: "enviar_correo.php", //
                    data: $('form.contact').serialize(),
                    success: function(msg){
                        alert("Su mensaje ha sido enviado con exito, pronto estaremos en contacto con usted");
                        $('input#submit').prop('disabled', true);
                    },
                    error: function(){
                        alert("Ha ocurrido un error inesperado intentelo nuevamente mas tarde");
                    }
                });
            });
        });
    </script>
</html>