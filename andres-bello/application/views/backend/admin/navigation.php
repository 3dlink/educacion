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
            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/dashboard.tkml" >
                <i class="entypo-gauge"></i>
                <span><?php echo "Inicio" ?></span>
            </a>
        </li>

        <!-- CENSO -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_censo', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
            <li class="<?php if ($page_name == 'census_list' ) echo 'opened active has-sub'; ?> ">
                <a href="#">
                    <i class="entypo-chart-pie"></i>
                    <span><?php echo "Censo"?></span>
                </a>
                <ul>
                    <!-- LISTA DE ESTUDIANTES CENSADOS -->
                    <li class="<?php if ($page_name == 'census_list') echo 'active'; ?> ">
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/census_list.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Estudiantes Censados"?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php } ?>

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
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_new.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Agregar Alumno Regular"?></span>
                        </a>
                    </li>

                    <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                    <li class="<?php if ($page_name == 'student_enrolled') echo 'active'; ?> ">
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_enrolled.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Alumnos Regulares"?></span>
                        </a>
                    </li>

                    <!-- LISTA DE ESTUDIANTES PRE INSCRITOS -->
                    <li class="<?php if ($page_name == 'student_list') echo 'active'; ?> ">
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_list.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Alumnos (Nuevo Ingreso)" ?></span>
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
                        <span><i class="entypo-dot"></i> <?php echo ucfirst($row_nivel->valor) ?></span>
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
                        <!-- MAESTROS -->
                        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/teacher/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <i class="entypo-dot"></i>
                                <span><?php echo "Docentes" ?></span>
                            </a>
                        </li>
                        <!-- ASISTENCIA -->
                        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/manage_attendance/<?php echo date("d/m/Y"); ?>/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Asistencia" ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/classes/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Grados" ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/section/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Secciones" ?></span>
                            </a>
                        </li>
                        <!-- MATERIAS -->
                        <?php if($row_nivel->id_nivel_educativo < 3){ ?>
                        <li class="<?php if ($page_name == 'teacher_subject') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/teacher_grade/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Docente por Grado" ?></span>
                            </a>
                        </li>
                        <?php } else { ?>
                        <li class="<?php if ($page_name == 'teacher_subject') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/teacher_subject/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Docente por Asignatura" ?></span>
                            </a>
                        </li>
                        <?php } ?>

                        <!-- MATERIAS -->
                        <?php if($row_nivel->id_nivel_educativo > 1){ ?>
                        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
                            <a href="#">
                                <span><i class="entypo-dot"></i> <?php echo "Asignaturas" ?></span>
                            </a>
                            <ul>
                                <?php foreach ($vnivel_grado as $row_grado) {
                                    if($row_grado->id_nivel_educativo == $row_nivel->id_nivel_educativo){
                                ?>
                                        <li class="<?php if ($page_name == 'subject' && $class_id == $row_grado['id_grado']) echo 'active'; ?>">
                                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/subject/<?php echo $row_grado['id_grado'].'.tkml' ?>">
                                                <span><?php echo $row_grado->nombre_grado ; ?></span>
                                            </a>
                                        </li>
                                <?php } } ?>
                            </ul>
                        </li>
                        <?php } ?>
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
                        <!-- MAESTROS -->
                        <li class="<?php if ($page_name == 'bulletin') echo 'active'; ?> ">
                            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/bulletin/<?php echo $row_nivel->id_nivel_educativo.'.tkml'; ?>">
                                <i class="entypo-dot"></i>
                                <span><?php echo "Emision de Boleta" ?></span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php $counter = $counter + 1; } ?>
            </ul>
        </li>

        <!-- ATENCION INTEGRAL -->
        <li class="<?php
        if ($page_name == 'menu' ||
                $page_name == 'diagnostic' )
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-user-add"></i>
                <span><?php echo "Atención Integral"?></span>
            </a>
            <ul>
                <!-- UPE -->
                <?php if($this->crud_model->get_permision_by_profile('permisos_upe', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
                    <li class="<?php if ($page_name == 'menu') echo 'active'; ?> ">
                        <a href="#">
                            <span><i class="entypo-dot"></i> <?php echo "Nutrición"?></span>
                        </a>
                        <ul>
                            <li class="<?php if ($page_name == 'menu') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/menu.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Menú"?></span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="<?php if ($page_name == 'diagnostic') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/diagnostic.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Diagnostico"?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <!-- NUTRICION -->
                <?php if($this->crud_model->get_permision_by_profile('permisos_nutricion', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
                    <li class="<?php if ($page_name == 'menu') echo 'active'; ?> ">
                        <a href="#">
                            <span><i class="entypo-dot"></i> <?php echo "UPE"?></span>
                        </a>
                        <ul>
                            <li class="<?php if ($page_name == 'menu') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_enrolled_upe.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Alumnos Regulares"?></span>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="<?php if ($page_name == 'menu') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_referred.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Alumnos Referidos"?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
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
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/carnets.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Impresión de carnets individual"?></span>
                        </a>
                    </li>
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
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/records.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Impresión de Constancias"?></span>
                        </a>
                    </li>
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
                    <span><?php echo "Notificaciones"?></span>
                </a>
                <ul>
                    <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                    <li class="<?php if ($page_name == 'send_sms') echo 'active'; ?> ">
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/send_sms.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Enviar SMS"?></span>
                        </a>
                    </li>
                    <li class="<?php if ($page_name == 'send_sms') echo 'active'; ?> ">
                        <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/send_mail.tkml">
                            <span><i class="entypo-dot"></i> <?php echo "Enviar Correo Electrónico"?></span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php } ?>

        <!-- REPORTES -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_reportes', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
            <li class="<?php if ($page_name == 'select_report' ) echo 'opened active has-sub'; ?> ">
                <a href="#">
                    <i class="entypo-doc-text"></i>
                    <span><?php echo "Reportes"?></span>
                </a>
                <ul>
                    <!-- REPORTES EN PDF -->
                    <li class="<?php if ($page_name == 'select_report') echo 'active'; ?> ">
                        <a href="#" >
                            <span><i class="entypo-dot"></i> <?php echo "PDF"?></span>
                        </a>
                        <ul>
                            <li class="<?php if ($page_name == 'select_report') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/select_report.tkml" >
                                    <span><i class="entypo-dot"></i> <?php echo "Reportes"?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- LISTADOS -->
                    <li class="<?php if ($page_name == 'list_reports') echo 'active'; ?> ">
                        <a href="#" >
                            <span><i class="entypo-dot"></i> <?php echo "Listado"?></span>
                        </a>
                        <ul>
                            <li class="<?php if ($page_name == 'student_enrolled_retired') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_enrolled_retired.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Alumnos Retirados"?></span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'student_enrolled_nulled') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_enrolled_nulled.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Alumnos Anulados"?></span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'census_resume') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_resume_general.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Resumen general"?></span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'initial_enrolled') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/initial_enrolled.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Matrícula Inicial"?></span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'initial_enrolled_resume') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/initial_enrolled_resume.tkml">
                                    <span><i class="entypo-dot"></i> <?php echo "Matrícula General"?></span>
                                </a>
                            </li>
                        </ul>
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