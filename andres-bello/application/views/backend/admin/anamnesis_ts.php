<div style="margin-top: 10px; margin-bottom: 5px;" class="col-md-12 ">
    <button type="button" class="btn btn-primary " style="margin-right: 15px;" id="btnSaveAnamnesisTS">
        <i class="entypo-inbox"></i><?php echo " Guardar Datos";?>
    </button>
</div>
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-referencia" >
                <a href="#datosReferencia" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos de Referencia
                </a>
            </li>
<!--             <li id="tab-datos-familia">
                <a href="#datosFamilia" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Grupo Familiar
                </a>
            </li> -->
            <li id="tab-datos-ambiente" >
                <a href="#datosAmbiente" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Área Fisico Ambiental
                </a>
            </li>
            <li id="tab-area-socioeconomicos">
                <a href="#areaSocieconomicos" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Área Socioecómica
                </a>
            </li>
            <li id="tab-datos-escolar" >
                <a href="#datosEcolar" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Área Escolar
                </a>
            </li>
            <li id="tab-area-salud">
                <a href="#areaSalud" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Área de Salud
                </a>
            </li>
            <li id="tab-datos-generales" >
                <a href="#infoGeneral" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Datos Generales
                </a>
            </li>
            <li id="tab-datos-representante" >
                <a href="#datosRepre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos Representante
                </a>
            </li>
            <li id="tab-datos-madre" >
                <a href="#datosMadre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos de la Madre
                </a>
            </li>
            <li id="tab-datos-padre" >
                <a href="#datosPadre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos del Padre
                </a>
            </li>
            <li id="tab-datos-alumno" >
                <a href="#datosAlu" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos del Alumno
                </a>
            </li>
            <li id="tab-datos-socioeconomicos" >
                <a href="#datosSocieconomicos" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos Socioeconómicos
                </a>
            </li>
            <li id="tab-datos-salud" >
                <a href="#datosSaludAlu" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos de Salud
                </a>
            </li>
            <li id="tab-datos-otros">
                <a href="#datosOtros" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Otros Datos de Interés
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <?php include 'trabajo_social/form_datos_referencia.php';?>
            <!-- <?php include 'trabajo_social/form_datos_familia.php';?> -->
            <?php include 'trabajo_social/form_datos_ambiente.php';?>
            <?php include 'trabajo_social/form_datos_socioeconomicos.php';?>
            <?php include 'trabajo_social/form_datos_escolar.php';?>
            <?php include 'trabajo_social/form_datos_salud.php';?>
            <?php include 'trabajo_social/form_datos_generales_edit.php';?>
            <?php include 'trabajo_social/form_datos_representante_edit.php';?>
            <?php include 'trabajo_social/form_datos_madre_edit.php';?>
            <?php include 'trabajo_social/form_datos_padre_edit.php';?>
            <?php include 'trabajo_social/form_datos_alumno_edit.php';?>
            <?php include 'trabajo_social/form_datos_socioeconomicos_edit.php';?>
            <?php include 'trabajo_social/form_datos_salud_edit.php';?>
            <?php include 'trabajo_social/form_datos_interes_edit.php';?>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/form/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/form_datos_generales.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_referencia.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_familia.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_ambiente.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_socioeconomicos.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_escolar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_salud.js"></script>

<script src="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/bootstrap-responsive-tabs.js"></script>

<script>
  $(document).ready(function () {
        $(".js-example").find("li").first().addClass("active");
        $(".js-example").bootstrapResponsiveTabs({
            minTabWidth: 180,
            maxTabWidth: 220
        });
        $("#tab-datos-referencia").click();

        $('#photo-image-alumno').on('change', function(){

            document.getElementById("aluNombreFoto").value = this.value;
            $("#preview-image-alumno").html('');
            $("#preview-image-alumno").html('<img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="Cargando...."/>');
            $("#form-image-alumno").ajaxForm({target: '#preview-image-alumno'}).submit();
        });

        $('#photo-image-representante').on('change', function(){

            document.getElementById("repreNombreFoto").value = this.value;
            $("#preview-image-representante").html('');
            $("#preview-image-representante").html('<img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="Cargando...."/>');
            $("#form-image-representante").ajaxForm({target: '#preview-image-representante'}).submit();
        });

        $( "#btnSaveAnamnesisTS" ).click(function() {
          alert( "Handler for .click() called." );
        });

        $('#siguiente-datos-referencia').click(function(e){
            jQuery("#tab-datos-familia a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-familia').click(function(e){
            jQuery("#tab-datos-referencia a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-familia').click(function(e){
            jQuery("#tab-datos-ambiente a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-ambiente').click(function(e){
            jQuery("#tab-datos-familia a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-ambiente').click(function(e){
            jQuery("#tab-area-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-area-socioeconomicos').click(function(e){
            jQuery("#tab-datos-ambiente a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-area-socioeconomicos').click(function(e){
            jQuery("#tab-datos-escolar a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-escolar').click(function(e){
            jQuery("#tab-area-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-escolar').click(function(e){
            jQuery("#tab-area-salud a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-area-salud').click(function(e){
            jQuery("#tab-datos-escolar a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-area-salud').click(function(e){
            jQuery("#tab-datos-generales a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-generales').click(function(e){
            jQuery("#tab-area-salud a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-generales').click(function(e){
            jQuery("#tab-datos-representante a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-representante').click(function(e){
            jQuery("#tab-datos-generales a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-representante').click(function(e){
            jQuery("#tab-datos-madre a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-madre').click(function(e){
            jQuery("#tab-datos-representante a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-madre').click(function(e){
            jQuery("#tab-datos-padre a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-madre-dos').click(function(e){
            jQuery("#tab-datos-representante a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-madre-dos').click(function(e){
            jQuery("#tab-datos-padre a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-padre-dos').click(function(e){
            jQuery("#tab-datos-madre a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-padre-dos').click(function(e){
            jQuery("#tab-datos-alumno a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-padre').click(function(e){
            jQuery("#tab-datos-madre a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-padre').click(function(e){
            jQuery("#tab-datos-alumno a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-alumno').click(function(e){
            jQuery("#tab-datos-padre a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-alumno').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-socioeconomicos').click(function(e){
            jQuery("#tab-datos-alumno a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-socioeconomicos').click(function(e){
            jQuery("#tab-datos-salud a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-salud-ts').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-salud-ts').click(function(e){
            jQuery("#tab-datos-otros a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-interes').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });
  });
</script>