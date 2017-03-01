<div class="row">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#infoGeneral" data-toggle="tab"><i class="entypo-users"></i>
                    1.Informacion General
                </a>
            </li>
            <li id="tab-datos-alumno">
                <a href="#datosAlu" data-toggle="tab"><i class="entypo-user"></i>
                    2.Datos del alumno
                </a>
            </li>
            <li id="tab-datos-repre">
                <a href="#datosRepre" data-toggle="tab"><i class="entypo-user"></i>
                    3.Datos del Representante
                </a>
            </li>
            <li id="tab-datos-madre">
                <a href="#datosMadre" data-toggle="tab"><i class="entypo-user"></i>
                    4.Datos de la madre
                </a>
            </li>
            <li id="tab-datos-padre">
                <a href="#datosPadre" data-toggle="tab"><i class="entypo-user"></i>
                    5. Datos del padre
                </a>
            </li>
            <li id="tab-datos-socioeconomicos">
                <a href="#datosSocieconomicos" data-toggle="tab"><i class="entypo-user"></i>
                    6. Datos socioeconomicos
                </a>
            </li>
            <li id="tab-datos-salud">
                <a href="#datosSaludAlu" data-toggle="tab"><i class="entypo-user"></i>
                    7. Datos de salud del alumno
                </a>
            </li>
            <li id="tab-datos-otros">
                <a href="#datosOtros" data-toggle="tab"><i class="entypo-user"></i>
                    8. Otros datos de interes
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>


        <div class="tab-content">
            <?php include 'censo/form_uno.php';?>
            <?php include 'censo/form_dos.php';?>
            <?php include 'censo/form_tres.php';?>
            <?php include 'censo/form_cuatro.php';?>
            <?php include 'censo/form_cinco.php';?>
            <?php include 'censo/form_seis.php';?>
            <?php include 'censo/form_siete.php';?>
            <?php include 'censo/form_ocho.php';?>
        </div>

    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/main.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_uno.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_dos.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_tres.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_cuatro.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_cinco.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_seis.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_siete.js"></script>
<script src="<?php echo base_url(); ?>assets/js/censo/form_ocho.js"></script>