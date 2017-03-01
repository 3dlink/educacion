<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-dialog.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/censo/main.css">

<div style="margin-top: 30px; margin-bottom: 5px;" class="col-md-12 ">
    <button type="button" class="btn btn-primary" style="margin-right: 15px;" id="btnSaveMainNew">
        <i class="entypo-inbox"></i><?php echo " Guardar Datos";?>
    </button>
</div>

<?php date_default_timezone_set('America/Caracas'); ?>

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-representante" >
                <a href="#datosRepre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Datos Representante
                </a>
            </li>
            <li id="tab-datos-generales" class="disabled">
                <a href="#infoGeneral" ><i class="entypo-users"></i>
                    Datos Generales
                </a>
            </li>
            <li id="tab-datos-madre" class="disabled">
                <a href="#datosMadre" ><i class="entypo-user"></i>
                    Datos de la Madre
                </a>
            </li>
            <li id="tab-datos-padre" class="disabled">
                <a href="#datosPadre" ><i class="entypo-user"></i>
                    Datos del Padre
                </a>
            </li>
            <li id="tab-datos-alumno" class="disabled">
                <a href="#datosAlu" ><i class="entypo-user"></i>
                    Datos del Alumno
                </a>
            </li>
            <li id="tab-datos-socioeconomicos" class="disabled">
                <a href="#datosSocieconomicos" ><i class="entypo-user"></i>
                    Datos Socioeconómicos
                </a>
            </li>
            <li id="tab-datos-salud" class="disabled">
                <a href="#datosSaludAlu" ><i class="entypo-user"></i>
                    Datos de Salud
                </a>
            </li>
            <li id="tab-datos-otros" class="disabled">
                <a href="#datosOtros" ><i class="entypo-user"></i>
                    Otros Datos de Interés
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <?php include 'census_new/form_datos_representante.php';?>
            <?php include 'census_new/form_datos_generales.php';?>
            <?php include 'census_new/form_datos_madre.php';?>
            <?php include 'census_new/form_datos_padre.php';?>
            <?php include 'census_new/form_datos_alumno.php';?>
            <?php include 'census_new/form_datos_socioeconomicos.php';?>
            <?php include 'census_new/form_datos_salud.php';?>
            <?php include 'census_new/form_datos_interes.php';?>
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
  $(document).ready(function () {
      $(".js-example").find("li").first().addClass("active");
      $(".js-example").bootstrapResponsiveTabs({
        minTabWidth: 180,
        maxTabWidth: 220
      });
      $("#tab-datos-representante").click();
  });
</script>