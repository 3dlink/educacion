<div class="sidebar-menu">
    <header class="logo-env" >
        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>/uploads/logo_chacao_fondo_sombra.png"  style="max-height:60px;"/>
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
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo "Inicio" ?></span>
            </a>
        </li>
        <!-- DOCENTES -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_ajustes', $this->session->userdata('id_perfil'), 'editar_docentes') == 1) { ?>
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/teacher">
                <i class="entypo-users"></i>
                <span><?php echo "Docentes" ?></span>
            </a>
        </li>
        <?php } ?>
        <!-- CENSUS -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_censo', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
        <li class="<?php
        if ($page_name == 'census_resume' ||
                $page_name == 'census_resume_full' ||
                $page_name == 'census_list' || $page_name == 'census_new')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-chart-pie"></i>
                <span><?php echo "Censo y Registro Escolar"?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'census_new') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/census_new">
                        <span><i class="entypo-dot"></i> <?php echo "Agregar Nuevo Censo"?></span>
                    </a>
                </li>
                <!-- CENSUS LIST -->
                <li class="<?php if ($page_name == 'census_list') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/census_list">
                        <span><i class="entypo-dot"></i> <?php echo "Estudiantes Censados"?></span>
                    </a>
                </li>
                <!-- CENSUS LIST -->
                <li class="<?php if ($page_name == 'census_resume') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/census_resume_general">
                        <span><i class="entypo-dot"></i> <?php echo "Resumen general"?></span>
                    </a>
                </li>
                </li>
                <!-- CENSUS LIST -->
                <li class="<?php if ($page_name == 'census_resume') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/census_resume">
                        <span><i class="entypo-dot"></i> <?php echo "Resumen por grado"?></span>
                    </a>
                </li>
                </li>
                <!-- CENSUS LIST -->
                <li class="<?php if ($page_name == 'census_resume_full') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/census_resume_full">
                        <span><i class="entypo-dot"></i> <?php echo "Resumen por escuela"?></span>
                    </a>
                </li>
                <!-- CENSUS STUDENT ADD
                <li class="<?php if ($page_name == 'census_student_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/census_student_add">
                        <span><i class="entypo-dot"></i> <?php echo "Agregar estudiantes" ?></span>
                    </a>
                </li>
                -->
            </ul>
        </li>
        <?php } ?>
        <!-- INSCRIPCION -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_inscripcion', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
        <li class="<?php
        if ($page_name == 'student_list' ||
                $page_name == 'student_enrolled')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-users"></i>
                <span><?php echo "Inscripción"?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_enrolled') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_enrolled">
                        <span><i class="entypo-dot"></i> <?php echo "Alumnos Regulares"?></span>
                    </a>
                </li>
                <!-- STUDENT ADMISSION -->
                <li class="<?php if ($page_name == 'student_list') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_list">
                        <span><i class="entypo-dot"></i> <?php echo "Alumnos (Nuevo Ingreso)"?></span>
                    </a>
                </li>
                <!-- CENSUS LIST -->
                <li class="<?php if ($page_name == 'census_resume') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_resume_general">
                        <span><i class="entypo-dot"></i> <?php echo "Resumen general"?></span>
                    </a>
                </li>
                <!-- CENSUS LIST -->
                <li class="<?php if ($page_name == 'census_resume_full') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/student_resume_full">
                        <span><i class="entypo-dot"></i> <?php echo "Resumen por escuela"?></span>
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
        <!-- REPORTES -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_reportes', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
            <li class="<?php if ($page_name == 'select_report' ) echo 'opened active has-sub'; ?> ">
                <a href="#">
                    <i class="entypo-doc-text"></i>
                    <span><?php echo "Reportes"?></span>
                </a>
                <ul>
                    <!-- REPORTES EN PDF -->
<!--                     <li class="<?php if ($page_name == 'select_report') echo 'active'; ?> ">
                        <a href="#" >
                            <span><i class="entypo-dot"></i> <?php echo "PDF"?></span>
                        </a>
                        <ul>
                            <li class="<?php if ($page_name == 'select_report') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/select_report" >
                                    <span><i class="entypo-dot"></i> <?php echo "Reportes"?></span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- LISTADOS -->
                    <li class="<?php if ($page_name == 'list_reports') echo 'active'; ?> ">
                        <a href="#" >
                            <span><i class="entypo-dot"></i> <?php echo "Listado"?></span>
                        </a>
                        <ul>
                            <li class="<?php if ($page_name == 'student_enrolled_retired') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_enrolled_retired">
                                    <span><i class="entypo-dot"></i> <?php echo "Alumnos Retirados"?></span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'student_enrolled_nulled') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_enrolled_nulled">
                                    <span><i class="entypo-dot"></i> <?php echo "Alumnos Anulados"?></span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'census_resume') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/student_resume_general">
                                    <span><i class="entypo-dot"></i> <?php echo "Resumen general"?></span>
                                </a>
                            </li>
<!--                             <li class="<?php if ($page_name == 'initial_enrolled') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/initial_enrolled">
                                    <span><i class="entypo-dot"></i> <?php echo "Matrícula Inicial"?></span>
                                </a>
                            </li> -->
                            <li class="<?php if ($page_name == 'initial_enrolled_resume') echo 'active'; ?> ">
                                <a href="<?php echo base_url().$this->session->userdata('login_type') ?>/initial_enrolled_resume">
                                    <span><i class="entypo-dot"></i> <?php echo "Matrícula General"?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        <?php } ?>
        <!-- SETTINGS -->
        <?php if($this->crud_model->get_permision_by_profile('permisos_ajustes', $this->session->userdata('id_perfil'), 'acceder') == 1) { ?>
        <li class="<?php
        if ($page_name == 'system_settings' ||
                $page_name == 'manage_language' ||
                    $page_name == 'sms_settings')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php echo "Ajustes"?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'school_list') echo 'active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo "Usuarios y Perfiles"?></span>
                    </a>
                        <ul>
                            <?php if($this->crud_model->get_permision_by_profile('permisos_ajustes', $this->session->userdata('id_perfil'), 'editar_usuarios') == 1) { ?>
                            <li class="<?php if ($page_name == 'users') echo 'active'; ?> ">
                                <a href="<?php echo base_url(); ?>admin/users">
                                    <span><i class="entypo-dot"></i> <?php echo "Usuarios" ?></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($this->crud_model->get_permision_by_profile('permisos_ajustes', $this->session->userdata('id_perfil'), 'editar_perfiles') == 1) { ?>
                            <li class="<?php if ($page_name == 'profiles') echo 'active'; ?> ">
                                <a href="<?php echo base_url(); ?>admin/profiles">
                                    <span><i class="entypo-dot"></i> <?php echo "Perfiles" ?></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($this->crud_model->get_permision_by_profile('permisos_ajustes', $this->session->userdata('id_perfil'), 'editar_opciones_perfil') == 1) { ?>
                            <li class="<?php if ($page_name == 'menu_options') echo 'active'; ?> ">
                                <a href="<?php echo base_url(); ?>admin/profile_options">
                                    <span><i class="entypo-dot"></i> <?php echo "Opciones de Perfil" ?></span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                </li>
            </ul>
            <ul>
                <?php if($this->crud_model->get_permision_by_profile('permisos_ajustes', $this->session->userdata('id_perfil'), 'configuraciones') == 1) { ?>
                <li class="<?php if ($page_name == 'school_list') echo 'active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo "Configuración del Sistema"?></span>
                    </a>
                        <ul>
                            <li class="<?php if ($page_name == 'school_list') echo 'active'; ?> ">
                                <a href="<?php echo base_url(); ?>admin/school_list">
                                    <span><i class="entypo-dot"></i> <?php echo "Escuelas" ?></span>
                                </a>
                            </li>
                            <li class="<?php if ($page_name == 'quota') echo 'active'; ?> ">
                                <a href="<?php echo base_url(); ?>admin/quota">
                                    <span><i class="entypo-dot"></i> <?php echo "Cupos" ?></span>
                                </a>
                            </li>
                        </ul>
                </li>
                <?php } ?>
            </ul>
            <ul>
                <?php if($this->crud_model->get_permision_by_profile('permisos_ajustes', $this->session->userdata('id_perfil'), 'ajustes') == 1) { ?>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>admin/system_settings">
                        <span><i class="entypo-dot"></i> <?php echo "Ajustes Generales"?></span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
    </ul>
</div>