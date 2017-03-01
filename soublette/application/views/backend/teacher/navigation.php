 <?php
//Formateo de fecha escolar
$this->load->model('Escuela');
$this->load->model('Estudiante');
$this->load->model('Grado');
$this->load->model('Grado_escuela');
$this->load->model('VistaGradoEscuela');
$this->load->model('VistaNivelEducativoGrado');
$this->load->model('VistaNivelEducativoEscuela');
$this->load->model('VistaNivelEducativoSeccion');
$this->load->model('Docente');

$id_school = $this->config->item('id_school');
$user_mail = $this->session->userdata('user_mail');

$matchSections = ['id_escuela' => $id_school];

//$nivel_educativo = VistaNivelEducativoEscuela::where($matchSections)->get();
$vnivel_grado = VistaNivelEducativoGrado::where($matchSections)->get();

$section_teacher = Docente::select('id_seccion')
                                            ->where('email', $user_mail)
                                            ->get();

$nivel_educativo = VistaNivelEducativoSeccion::whereIn('id_seccion', $section_teacher)->get();

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
            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/dashboard.tkml" >
                <i class="entypo-gauge"></i>
                <span><?php echo "Inicio" ?></span>
            </a>
        </li>

        <!-- CONTROL DE ESTUDIO -->
        <li class="<?php
            if ($page_name == 'class_routine' || $page_name == 'manage_attendance' || $page_name == 'class'
                || $page_name == 'section' || $page_name == 'subject')
                echo 'opened active';
            ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo "Control de Estudios y Evaluaci&oacute;n" ?></span>
            </a>
            <ul>
            <?php foreach ($nivel_educativo as $row_nivel) { $counter = 0;?>

                <li class="<?php if ($page_name == 'class_routine' || $page_name == 'manage_attendance'
                                     || $page_name == 'class' || $page_name == 'section' || $page_name == 'subject'
                                     || $page_name == 'exam' || $page_name == 'grade' || $page_name == 'marks'
                                     || $page_name == 'exam_marks_sms' || $page_name == 'tabulation_sheet')

                                     echo 'active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo ucfirst($row_nivel->nivel_educativo) ?></span>
                    </a>
                    <ul>
                        <!-- HORARIO -->
                        <?php if($row_nivel->id_nivel_educativo < 3){ ?>
                        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/project/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Proyecto Pedagógico" ?></span>
                            </a>
                        </li>
                        <?php } ?>
                        <li style="<?php echo ($row_nivel->id_nivel_educativo == 1) ? "display: none;" : "" ?>" class="<?php if ($page_name == 'class_routine') echo 'active'; ?> " >
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/class_routine/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo ($row_nivel->id_nivel_educativo == 1) ? "Planificación Semanal" : "Horario" ?></span>
                            </a>
                        </li>
                        <!-- ASISTENCIA -->
                        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/manage_attendance/<?php echo date("d/m/Y"); ?>/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Asistencia" ?></span>
                            </a>
                        </li>
                        <!-- EVALUACIONES -->
                        <li class="<?php
                            if ($page_name == 'exam' ||
                                    $page_name == 'grade' ||
                                    $page_name == 'marks' ||
                                        $page_name == 'exam_marks_sms' ||
                                            $page_name == 'tabulation_sheet')
                                                echo 'opened active';
                            ?> ">
                            <a href="#">
                                <span><i class="entypo-dot"></i> <?php echo "Evaluaciones" ?></span>
                            </a>
                            <ul>
                                <?php if($row_nivel->id_nivel_educativo > 1){ ?>
                                <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/exam/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                        <span><i class="entypo-dot"></i> <?php echo "Plan de Evaluación" ?></span>
                                    </a>
                                </li>
                                <?php } ?>
                                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/marks/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                        <span><i class="entypo-dot"></i> <?php echo "Calificar" ?></span>
                                    </a>
                                </li>
                                <li class="<?php if ($page_name == 'tabulation_sheet') echo 'active'; ?> ">
                                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/tabulation_sheet/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                        <span><i class="entypo-dot"></i> <?php echo "Hoja de Calificaciones" ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            <?php $counter = $counter + 1; } ?>
            </ul>
        </li>
        <li class="<?php if ($page_name == 'utils' ) echo 'opened active has-sub'; ?> ">
            <a href="#">
                <i class="entypo-info"></i>
                <span><?php echo "Información de Interés"?></span>
            </a>
            <ul>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'utils') echo 'active'; ?> ">
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/utils.tkml" target="_blank" >
                        <span><i class="entypo-dot"></i> <?php echo "Hoja Membretada"?></span>
                    </a>
                </li>
            </ul>
            <ul>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'utils') echo 'active'; ?> ">
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/files/leyes.tkml" >
                        <span><i class="entypo-dot"></i> <?php echo "Leyes"?></span>
                    </a>
                </li>
            </ul>
            <ul>
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'utils') echo 'active'; ?> ">
                    <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/files/formatos.tkml">
                        <span><i class="entypo-dot"></i> <?php echo "Formatos"?></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>