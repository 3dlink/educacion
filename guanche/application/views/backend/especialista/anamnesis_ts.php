<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-alumno" >
                <a href="#datosAlu" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Alumno
                </a>
            </li>
            <li id="tab-datos-representante">
                <a href="#datosRepre" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Representante
                </a>
            </li>
            <li id="tab-datos-referencia" >
                <a href="#datosReferencia" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Referencia
                </a>
            </li>
<!--             <li id="tab-datos-familia" >
                <a href="#datosFamilia" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Grupo Familiar
                </a>
            </li> -->
            <li id="tab-datos-ambiente" >
                <a href="#datosAmbiente" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Fisico Ambiental
                </a>
            </li>

            <li id="tab-datos-socioeconomicos">
                <a href="#datosSocieconomicos" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Socioecómica
                </a>
            </li>
            <li id="tab-datos-escolar">
                <a href="#datosEcolar" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Escolar
                </a>
            </li>
            <li id="tab-datos-salud">
                <a href="#datosSalud" role="tab" data-toggle="tab"><i class="entypo-user"></i>
                    Salud
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <?php include 'trabajo_social/form_datos_alumno.php';?>
            <?php include 'trabajo_social/form_datos_representante.php';?>
            <?php include 'trabajo_social/form_datos_referencia.php';?>
            <?php //include 'trabajo_social/form_datos_familia.php';?>
            <?php include 'trabajo_social/form_datos_ambiente.php';?>
            <?php include 'trabajo_social/form_datos_socioeconomicos.php';?>
            <?php include 'trabajo_social/form_datos_escolar.php';?>
            <?php include 'trabajo_social/form_datos_salud.php';?>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_alumno.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_representante.js"></script>
<script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_referencia.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/anamnesis/trabajo_social/form_datos_familia.js"></script> -->
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
    $("#tab-datos-alumno").click();
  });
</script>