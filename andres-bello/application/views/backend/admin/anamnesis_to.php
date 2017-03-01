<div style="margin-top: 10px; margin-bottom: 5px;" class="col-md-12 ">
    <button type="button" class="btn btn-primary " style="margin-right: 15px;" id="btnSaveAnamnesisTO">
        <i class="entypo-inbox"></i><?php echo " Guardar Datos";?>
    </button>
</div>
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-ocupacionales" >
                <a href="#infoOcupacional" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Area Ocupacional
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
            <?php include 'terapia_ocupacional/form_datos_ocupacional_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_generales_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_representante_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_madre_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_padre_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_alumno_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_socioeconomicos_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_salud_edit.php';?>
            <?php include 'terapia_ocupacional/form_datos_interes_edit.php';?>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/form/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/terapia_ocupacional/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/terapia_ocupacional/form_datos_generales.js"></script>

<script src="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/bootstrap-responsive-tabs.js"></script>

<script>
  $(document).ready(function () {
        $(".js-example").find("li").first().addClass("active");
        $(".js-example").bootstrapResponsiveTabs({
            minTabWidth: 180,
            maxTabWidth: 220
        });
        $("#tab-datos-ocupacionales").click();

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

        $('#siguiente-datos-ocupacionales').click(function(e){
            jQuery("#tab-datos-generales a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-generales-to').click(function(e){
            jQuery("#tab-datos-ocupacionales a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-generales-to').click(function(e){
            jQuery("#tab-datos-representante a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-representante-to').click(function(e){
            jQuery("#tab-datos-generales a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-representante-to').click(function(e){
            jQuery("#tab-datos-madre a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-madre-to').click(function(e){
            jQuery("#tab-datos-representante a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-madre-to').click(function(e){
            jQuery("#tab-datos-padre a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-madre-dos-to').click(function(e){
            jQuery("#tab-datos-representante a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-madre-dos-to').click(function(e){
            jQuery("#tab-datos-padre a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-padre-dos-to').click(function(e){
            jQuery("#tab-datos-madre a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-padre-dos-to').click(function(e){
            jQuery("#tab-datos-alumno a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-padre-to').click(function(e){
            jQuery("#tab-datos-madre a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-padre-to').click(function(e){
            jQuery("#tab-datos-alumno a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-alumno-to').click(function(e){
            jQuery("#tab-datos-padre a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-alumno-to').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-socioeconomico-to').click(function(e){
            jQuery("#tab-datos-alumno a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-socioeconomico-to').click(function(e){
            jQuery("#tab-datos-salud a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-salud-to').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-salud-to').click(function(e){
            jQuery("#tab-datos-otros a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-interes-to').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });
  });
</script>