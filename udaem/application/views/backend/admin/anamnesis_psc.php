<div style="margin-top: 10px; margin-bottom: 5px;" class="col-md-12 ">
    <button type="button" class="btn btn-primary " style="margin-right: 15px;" id="btnSaveAnamnesisPSC">
        <i class="entypo-inbox"></i><?php echo " Guardar Datos";?>
    </button>
</div>
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-referencia" >
                <a href="#datosReferencia" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Datos de Referencia
                </a>
            </li>
            <li id="tab-datos-habitos" >
                <a href="#datosHabitos" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Hábitos Escolares
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
            <?php include 'psc/form_datos_referencia.php'; ?>
            <?php include 'psc/form_datos_habitos.php'; ?>
            <?php include 'psc/form_datos_generales_edit.php'; ?>
            <?php include 'psc/form_datos_representante_edit.php'; ?>
            <?php include 'psc/form_datos_madre_edit.php'; ?>
            <?php include 'psc/form_datos_padre_edit.php'; ?>
            <?php include 'psc/form_datos_alumno_edit.php'; ?>
            <?php include 'psc/form_datos_socioeconomicos_edit.php'; ?>
            <?php include 'psc/form_datos_salud_edit.php'; ?>
            <?php include 'psc/form_datos_interes_edit.php'; ?>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/form/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/psc/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/psc/form_datos_generales.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/bootstrap-responsive-tabs.js"></script>

<script>
  $(document).ready(function () {
        $(".js-example").find("li").first().addClass("active");
        $(".js-example").bootstrapResponsiveTabs({
            minTabWidth: 180,
            maxTabWidth: 220
        });
        $("#tab-datos-referencia").click();

        $('#siguiente-datos-referencia').click(function(e){
            $("#tab-datos-habitos a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-habitos').click(function(e){
            jQuery("#tab-datos-referencia a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-habitos').click(function(e){
            jQuery("#tab-datos-generales a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-generales').click(function(e){
            jQuery("#tab-datos-habitos a").trigger( "click" );
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

        $('#anterior-datos-socioeconomico').click(function(e){
            jQuery("#tab-datos-alumno a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-socioeconomico').click(function(e){
            jQuery("#tab-datos-salud a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-salud').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });
        $('#siguiente-datos-salud').click(function(e){
            jQuery("#tab-datos-otros a").trigger( "click" );
            window.scrollTo(0,0);
        });

        $('#anterior-datos-interes').click(function(e){
            jQuery("#tab-datos-socioeconomicos a").trigger( "click" );
            window.scrollTo(0,0);
        });



  });
</script>