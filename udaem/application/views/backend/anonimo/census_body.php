<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-representante" >
                <a href="#datosRepre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos Representante
                </a>
            </li>
            <li id="tab-datos-generales" class="disabled">
                <a href="#infoGeneral"><i class="entypo-users"></i>
                    Datos Generales
                </a>
            </li>
            <li id="tab-datos-madre" class="disabled">
                <a href="#datosMadre"><i class="entypo-user"></i>
                    Datos de la Madre
                </a>
            </li>
            <li id="tab-datos-padre" class="disabled">
                <a href="#datosPadre"><i class="entypo-user"></i>
                    Datos del Padre
                </a>
            </li>
            <li id="tab-datos-alumno" class="disabled">
                <a href="#datosAlu"><i class="entypo-user"></i>
                    Datos del Alumno
                </a>
            </li>
            <li id="tab-datos-socioeconomicos" class="disabled">
                <a href="#datosSocieconomicos" ><i class="entypo-user"></i>
                    Datos Socioeconómicos
                </a>
            </li>
            <li id="tab-datos-salud" class="disabled">
                <a href="#datosSaludAlu"><i class="entypo-user"></i>
                    Datos de Salud
                </a>
            </li>
            <li id="tab-datos-otros" class="disabled">
                <a href="#datosOtros"><i class="entypo-user"></i>
                    Otros Datos de Interés
                </a>
            </li>
        </ul>
<!--         <div class="tab-content">
            <?php include 'form_datos_representante.php';?>
            <?php include 'form_datos_generales.php';?>
            <?php include 'form_datos_madre.php';?>
            <?php include 'form_datos_padre.php';?>
            <?php include 'form_datos_alumno.php';?>
            <?php include 'form_datos_socioeconomicos.php';?>
            <?php include 'form_datos_salud.php';?>
            <?php include 'form_datos_interes.php';?>
        </div> -->
    </div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
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
<div id="myModalContact" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Formulario de Ayuda y/o Sugerencias</h4>
      </div>
      <div class="modal-body" style="font-size: 11px; line-height: 13px;">
        <form id="formContact" class="contact" name="contact">
          <div class="form-group">
            <label>Nombres y Apellidos</label>
            <input class="form-control required" placeholder="Nombres y Apellidos" data-placement="top" data-trigger="manual" data-content="Debe contener al menos 3 caracteres y solo letras." type="text" name="nombres_apellidos" id="nombres_apellidos">
          </div>
          <div class="form-group">
            <label>Mensaje</label>
            <textarea class="form-control" placeholder="Escriba su mensaje aquí" data-placement="top" data-trigger="manual" name="mensaje" id="mensaje"></textarea>
          </div>
          <div class="form-group">
              <label>Correo</label>
              <input class="form-control email" placeholder="sucorreo@dominico.com" data-placement="top" data-trigger="manual" data-content="Debe ingresar un correo valido" type="text" name="correo" id="correo">
          </div>
          <div class="form-group"><label>Telefono</label><input class="form-control phone" placeholder="Número de Telefono" data-placement="top" data-trigger="manual" data-content="Debe ingresar un telefono valido." type="text" name="telefono" id="telefono">
          </div>
          <div class="form-group"><label>Celular</label><input class="form-control phone" placeholder="Número de Telefono" data-placement="top" data-trigger="manual" data-content="Debe ingresar un telefono valido." type="text" name="movil" id="movil">
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
<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_representante.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_generales.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_madre.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_padre.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_alumno.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_socioeconomicos.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_salud.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_datos_interes.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/bootstrap-responsive-tabs.js"></script>
<script>
        $(window).load(function(){
            $('#myModal').modal('show');
        });
        $(document).ready(function () {
            $(".js-example").find("li").first().addClass("active");
            $(".js-example").bootstrapResponsiveTabs({
              minTabWidth: 180,
              maxTabWidth: 220
            });
            $("#tab-datos-representante").click();

            $("input#submit").click(function(){

                var nombres_apellidos = $('#nombres_apellidos').val();
                var correo = $('#correo').val();
                var mensaje = $('#mensaje').val();
                var telefono = $('#telefono').val();
                var movil = $('#movil').val();

                var data = new Array(nombres_apellidos, correo, mensaje, telefono, movil);
                AjaxCupos('solicitarAyuda',data,'POST',true,function(response){
                    mostrarModal("Éxito", "El correo ha sido enviado satisfactoriamente", 'type-primary',
                              [{
                                  label: 'Aceptar',
                                  cssClass: 'btn-success',
                                  action: function(dialogItself){
                                      window.location.reload(true);
                                      dialogItself.close();
                                  }
                              }]);
                });

            });

        });
</script>