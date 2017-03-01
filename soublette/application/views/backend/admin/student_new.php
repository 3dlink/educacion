<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-tabs js-example" role="tablist">
            <li class="active" id="tab-datos-generales" >
                <a href="#infoGeneral" role="tab" data-toggle="tab"><i class="entypo-users"></i>
                    Datos Generales
                </a>
            </li>
            <li id="tab-datos-representante" class="disabled" >
                <a href="#datosRepre" ><i class="entypo-user"></i>
                    Datos Representante
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
            <?php include 'form_datos_generales.php';?>
            <?php include 'form_datos_representante.php';?>
            <?php include 'form_datos_madre.php';?>
            <?php include 'form_datos_padre.php';?>
            <?php include 'form_datos_alumno.php';?>
            <?php include 'form_datos_socioeconomicos.php';?>
            <?php include 'form_datos_salud.php';?>
            <?php include 'form_datos_interes.php';?>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/form/jquery.form.js"></script>

<script src="<?php echo base_url(); ?>assets/js/inscripcion/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_representante.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_generales.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_madre.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_padre.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_alumno.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_socioeconomicos.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_salud.js"></script>
<script src="<?php echo base_url(); ?>assets/js/inscripcion/form_datos_interes.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/bootstrap-responsive-tabs.js"></script>
<script>
  $(document).ready(function () {
        $(".js-example").find("li").first().addClass("active");
        $(".js-example").bootstrapResponsiveTabs({
            minTabWidth: 180,
            maxTabWidth: 220
        });
        $("#tab-datos-representante").click();

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


  });
</script>