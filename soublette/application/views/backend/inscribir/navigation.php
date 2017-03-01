<?php
//Formateo de fecha escolar
$this->load->model('Escuela');
$this->load->model('Estudiante');
$this->load->model('Grado');
$this->load->model('Grado_escuela');
$this->load->model('VistaGradoEscuela');
$this->load->model('VistaNivelEducativoGrado');
$this->load->model('VistaNivelEducativoEscuela');

$id_school = $this->config->item('id_school');
$matchSections = ['id_escuela' => $id_school];
$nivel_educativo = VistaNivelEducativoEscuela::where($matchSections)->get();
$vnivel_grado = VistaNivelEducativoGrado::where($matchSections)->get();

?>

<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>uploads/scude.png"  style="max-height:150px; margin-left:35%;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>
    <ul id="main-menu" class="">
        <!-- INICIO -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo "Inicio" ?></span>
            </a>
        </li>

        <!-- INSCRIPCION -->
        <li class="<?php
        if ($page_name == 'student_enrolled' ||
                $page_name == 'student_list' ||
                $page_name == 'student_new')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-user"></i>
                <span><?php echo "Inscripción"?></span>
            </a>
            <ul>
                <!-- AGREGAR NUEVO ESTUDIANTE -->
                <li class="<?php if ($page_name == 'student_new') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_new">
                        <span><i class="entypo-dot"></i> <?php echo "Agregar Alumno Regular"?></span>
                    </a>
                </li>

                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'student_enrolled') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_enrolled">
                        <span><i class="entypo-dot"></i> <?php echo "Alumnos Regulares"?></span>
                    </a>
                </li>

                <!-- LISTA DE ESTUDIANTES PRE INSCRITOS -->
                <li class="<?php if ($page_name == 'student_list') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_list">
                        <span><i class="entypo-dot"></i> <?php echo "Alumnos (Nuevo Ingreso)" ?></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>