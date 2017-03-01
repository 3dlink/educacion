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

setlocale(LC_TIME, "es_VE");
date_default_timezone_set('America/Caracas');

?>

<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>uploads/scude.png"  style="max-height:130px; margin-left:5%;"/>
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

        <!-- MAESTROS -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/teacher">
                <i class="entypo-users"></i>
                <span><?php echo "Docentes" ?></span>
            </a>
        </li>

        <!-- INSCRIPCION -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_inscripcion', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
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
                        <span><i class="entypo-dot"></i> <?php echo "Agregar Alumno"?></span>
                    </a>
                </li>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'student_enrolled') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_enrolled">
                        <span><i class="entypo-dot"></i> <?php echo "Listado de Alumnos"?></span>
                    </a>
                </li>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'student_enrolled') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_referred">
                        <span><i class="entypo-dot"></i> <?php echo "Alumnos Referidos"?></span>
                    </a>
                </li>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'initial_enrolled') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/initial_enrolled">
                        <span><i class="entypo-dot"></i> <?php echo "Matrícula Inicial"?></span>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>

        <!-- CONTROL DE ESTUDIO -->
        <li class="<?php
            if ($page_name == 'class_routine' || $page_name == 'manage_attendance' || $page_name == 'class'
                || $page_name == 'section' || $page_name == 'subject')
                echo 'opened active';
            ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo "Evaluaci&oacute;n" ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/class_routine/3">
                        <span><i class="entypo-dot"></i> <?php echo  "Horario" ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/manage_attendance/<?php echo date("d/m/Y"); ?>/3">
                        <span><i class="entypo-dot"></i> <?php echo "Asistencia" ?></span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- CARNETS -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_carnet', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
        <li class="<?php
        if ($page_name == 'carnets' ||
                $page_name == 'carnets_lote' ||
                $page_name == 'carnets_reporte')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-vcard"></i>
                <span><?php echo "Carnetización"?></span>
            </a>
            <ul>
                <!-- CARNETS INDIVIDUAL -->
                <li class="<?php if ($page_name == 'carnets') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/carnets">
                        <span><i class="entypo-dot"></i> <?php echo "Impresión de carnets individual"?></span>
                    </a>
                </li>
                <!-- CARNETS EN LOTE -->
<!--            <li class="<?php if ($page_name == 'student_list_acepted') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/carnets_lote">
                        <span><i class="entypo-dot"></i> <?php echo "Impresión de carnets en lote"?></span>
                    </a>
                </li> -->
                <!-- REPORTES DE CARNETS
                <li class="<?php if ($page_name == 'student_list_acepted') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/carnets_reporte">
                        <span><i class="entypo-dot"></i> <?php echo "Reportes"?></span>
                    </a>
                </li>
                -->
            </ul>
        </li>
        <?php } ?>

        <!-- CONSTANCIAS -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_constancias', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
        <li class="<?php
        if ($page_name == 'records' ||
                $page_name == 'records_reports')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-docs"></i>
                <span><?php echo "Constancias" ?></span>
            </a>
            <ul>
                <!-- IMPRESION DE CONSTANCIAS -->
                <li class="<?php if ($page_name == 'records') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/records">
                        <span><i class="entypo-dot"></i> <?php echo "Impresión de Constancias"?></span>
                    </a>
                </li>
                <!-- IMPRESION DE CONSTANCIAS
                <li class="<?php if ($page_name == 'records') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/records_reports">
                        <span><i class="entypo-dot"></i> <?php echo "Reportes"?></span>
                    </a>
                </li>
                -->
            </ul>
        </li>
        <?php } ?>

        <!-- NOTIFICACIONES -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_notificaciones', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
        <li class="<?php
        if ($page_name == 'send_sms' )
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-mobile"></i>
                <span><?php echo "Notificaciones SMS"?></span>
            </a>
            <ul>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'send_sms') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/send_sms">
                        <span><i class="entypo-dot"></i> <?php echo "Enviar SMS"?></span>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>

        <!-- REPORTES -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_reportes', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
        <li class="<?php if ($page_name == 'send_sms' ) echo 'opened active has-sub'; ?> ">
            <a href="#">
                <i class="entypo-mobile"></i>
                <span><?php echo "Reportes"?></span>
            </a>
            <ul>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'send_sms') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_resume_general">
                        <span><i class="entypo-dot"></i> <?php echo "Reporte Dinamico"?></span>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>

        <!-- INFORMACION DE INTERES -->
        <li class="<?php if ($page_name == 'utils' ) echo 'opened active has-sub'; ?> ">
            <a href="#">
                <i class="entypo-info"></i>
                <span><?php echo "Información de Interés"?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'utils') echo 'active'; ?> ">
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/utils.tkml" target="_blank" >
                        <span><i class="entypo-dot"></i> <?php echo "Hoja Membretada"?></span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="<?php if ($page_name == 'utils') echo 'active'; ?> ">
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/files/leyes.tkml" >
                        <span><i class="entypo-dot"></i> <?php echo "Leyes"?></span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="<?php if ($page_name == 'utils') echo 'active'; ?> ">
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/files/formatos.tkml">
                        <span><i class="entypo-dot"></i> <?php echo "Formatos"?></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>