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

        <!-- MAESTROS -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/teacher">
                <i class="entypo-users"></i>
                <span><?php echo "Docentes" ?></span>
            </a>
        </li>

        <!-- CENSO -->
        <li class="<?php
        if ($page_name == 'census_list' )
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-chart-pie"></i>
                <span><?php echo "Censo"?></span>
            </a>
            <ul>
                <!-- LISTA DE ESTUDIANTES CENSADOS -->
                <li class="<?php if ($page_name == 'census_list') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/census_list">
                        <span><i class="entypo-dot"></i> <?php echo "Estudiantes Censados"?></span>
                    </a>
                </li>
            </ul>
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

                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'initial_enrolled') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/initial_enrolled">
                        <span><i class="entypo-dot"></i> <?php echo "Matrícula Inicial"?></span>
                    </a>
                </li>
            </ul>
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
                        <span><i class="entypo-dot"></i> <?php echo $row_nivel->valor ?></span>
                    </a>
                    <ul>
                        <!-- HORARIO -->
                        <?php if($row_nivel->id_nivel_educativo < 3){ ?>
                        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/project/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Proyecto Pedagógico" ?></span>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/class_routine/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                <span><i class="entypo-dot"></i> <?php echo ($row_nivel->id_nivel_educativo == 1) ? "Planificación Semanal" : "Horario" ?></span>
                            </a>
                        </li>
                        <!-- ASISTENCIA -->
                        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/manage_attendance/<?php echo date("d/m/Y"); ?>/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Asistencia" ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/classes/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Grados" ?></span>
                            </a>
                        </li>
                        <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                            <a href="<?php echo base_url(); ?>admin/section/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                <span><i class="entypo-dot"></i> <?php echo "Secciones" ?></span>
                            </a>
                        </li>
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
                                            <a href="<?php echo base_url(); ?>admin/subject/<?php echo $row_grado['id_grado'] ?>">
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
                                <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                                    <a href="<?php echo base_url(); ?>admin/exam/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                        <span><i class="entypo-dot"></i> <?php echo "Plan de Evaluación" ?></span>
                                    </a>
                                </li>
                                <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                                    <a href="<?php echo base_url(); ?>admin/grade/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                        <span><i class="entypo-dot"></i> <?php echo "Lista de Calificaciones" ?></span>
                                    </a>
                                </li>
                                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                                    <a href="<?php echo base_url(); ?>admin/marks/<?php echo $row_nivel->id_nivel_educativo; ?>">
                                        <span><i class="entypo-dot"></i> <?php echo "Calificar" ?></span>
                                    </a>
                                </li>
                                <li class="<?php if ($page_name == 'tabulation_sheet') echo 'active'; ?> ">
                                    <a href="<?php echo base_url(); ?>admin/tabulation_sheet/<?php echo $row_nivel->id_nivel_educativo; ?>">
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
        <!-- CARNETS -->
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

        <!-- CONSTANCIAS -->
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
    </ul>
</div>