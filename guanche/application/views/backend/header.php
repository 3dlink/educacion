<div class="row">
    <div class="col-md-12 col-sm-12 clearfix" style="text-align:center;">
        <h2 style="font-weight:200; margin:0px;"><?php echo $system_name;?></h2>
    </div>
    <!-- Raw Links -->
    <div class="col-md-12 col-sm-12 clearfix ">
        <ul class="list-inline links-list pull-left">
            <div id="session_static">
               <li>
                    <h4>
                        <a href="#" style="color: #000;" <?php if($account_type == 'admin'):?> onclick="get_session_changer()"<?php endif;?> >
                            <?php echo "Año escolar activo"?> : <?php echo $running_year;?>
                        </a>
                    </h4>
               </li>
           </div>
        </ul>

        <ul class="list-inline links-list pull-right">

        <li class="dropdown language-selector">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                    <i class="entypo-user"></i> <?php echo $this->session->userdata('name');?>
            </a>

                <?php if ($account_type != 'parent'):?>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a style="color:#000 !important" href="<?php echo base_url();?><?php echo $account_type;?>/manage_profile">
                            <i class="entypo-info"></i>
                            <span><?php echo "Editar Perfil"?></span>
                        </a>
                    </li>
                    <li>
                        <a style="color:#000 !important" href="<?php echo base_url();?><?php echo $account_type;?>/manage_profile">
                            <i class="entypo-key"></i>
                            <span><?php echo "Cambiar Contraseña"?></span>
                        </a>
                    </li>
                </ul>
                <?php endif;?>
                <?php if ($account_type == 'parent'):?>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a style="color:#000 !important" href="<?php echo base_url();?>parents/manage_profile">
                            <i class="entypo-info"></i>
                            <span><?php echo "Editar Perfil"?></span>
                        </a>
                    </li>
                    <li>
                        <a style="color:#000 !important" href="<?php echo base_url();?>parents/manage_profile">
                            <i class="entypo-key"></i>
                            <span><?php echo "Cambiar Contraseña"?></span>
                        </a>
                    </li>
                </ul>
                <?php endif;?>
            </li>

            <li>
                <a style="color:#000 !important" href="<?php echo base_url();?>login/logout">
                    Cerrar Sesión <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>
    </div>

</div>

<hr style="margin-top:0px;" />

<script type="text/javascript">
    function get_session_changer()
    {
        $.ajax({
            url: '<?php echo base_url().$this->session->userdata('login_type');?>/get_session_changer/',
            success: function(response)
            {
                jQuery('#session_static').html(response);
            }
        });
    }
</script>