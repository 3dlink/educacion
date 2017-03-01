<div class="row">
	<div class="col-md-12 col-sm-12 clearfix" style="text-align:center;">
		<h2 style="font-weight:200; margin:0px;"><?php echo $system_name;?></h2>
    </div>
	<!-- Raw Links -->
	<div class="col-md-12 col-sm-12 clearfix ">

        <ul class="list-inline links-list pull-left">
        <!-- Language Selector -->
           <li class="dropdown language-selector">
                    <a href="#" style="color:#000 !important" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                        	<i class="entypo-user"></i> <?php echo $this->session->userdata('name');?>
                    </a>

				<?php if ($account_type != 'parent'):?>
				<ul class="dropdown-menu ">
					<li>
						<a style="color:#000 !important" href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/manage_profile">
                        	<i class="entypo-info"></i>
							<span><?php echo "Editar Perfil"?></span>
						</a>
					</li>
					<li>
						<a style="color:#000 !important" href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/manage_profile">
                        	<i class="entypo-key"></i>
							<span><?php echo "Cambiar Contraseña"?></span>
						</a>
					</li>
				</ul>
				<?php endif;?>
				<?php if ($account_type == 'parent'):?>
				<ul class="dropdown-menu <?php if ($text_align == 'right-to-left') echo 'pull-right'; else echo 'pull-left';?>">
					<li>
						<a style="color:#000 !important" href="<?php echo base_url();?>index.php?parents/manage_profile">
                        	<i class="entypo-info"></i>
							<span><?php echo "Editar Perfil"?></span>
						</a>
					</li>
					<li>
						<a style="color:#000 !important" href="<?php echo base_url();?>index.php?parents/manage_profile">
                        	<i class="entypo-key"></i>
							<span><?php echo "Cambiar Contraseña"?></span>
						</a>
					</li>
				</ul>
				<?php endif;?>
			</li>
        </ul>


		<ul class="list-inline links-list pull-right">

			<li>
				<a style="color:#000 !important" href="<?php echo base_url();?>login/logout">
					Cerrar Sesión <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>

</div>

<hr style="margin-top:0px;" />