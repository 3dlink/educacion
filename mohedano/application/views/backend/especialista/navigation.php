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
            <a href="<?php echo base_url(); ?>especialista/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo "Inicio" ?></span>
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
                <!-- LISTA DE ESTUDIANTES INSCRITOS -->
                <li class="<?php if ($page_name == 'census_list') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>especialista/census_list">
                        <span><i class="entypo-dot"></i> <?php echo "Estudiantes Censados"?></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>