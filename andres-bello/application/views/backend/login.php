<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$system_name	=	$this->db->get_where('configuraciones' , array('nombre'=>'nombre_sistema'))->row()->valor;
	$system_title	=	$this->db->get_where('configuraciones' , array('nombre'=>'titulo_sistema'))->row()->valor;
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Sistema Integral Educación Chacao" />
	<meta name="author" content="" />
	<title><?php echo "Inicio de Sesion"?> </title>
	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="assets/images/favicon.png">
</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">
	<!-- This is needed when you send requests via Ajax -->
	<script type="text/javascript">
	var baseurl = '<?php echo base_url();?>';
	</script>
	<div class="login-container">
		<div class="login-header login-caret" style="padding-bottom: 0px;" >
			<div class="login-content" style="width:100%;">
				<a href="<?php echo base_url();?>" class="logo">
					<img src="uploads/scude.png" height="180" alt="" />
				</a>
				<p class="description">
	            	<h2 style="color:#cacaca; font-weight:100;">
						<?php echo $system_name;?>
	              </h2>
	           </p>
				<!-- progress bar indicator -->
				<div class="login-progressbar-indicator">
					<h3>43%</h3>
					<span>iniciando sesión...</span>
				</div>
			</div>
		</div>
		<div class="login-progressbar">
			<div></div>
		</div>
		<div class="login-form">
			<div class="login-content">
				<div class="form-login-error">
					<h3>Datos Invalidos</h3>
					<p>Revise sus datos o comuniquese con el <br>administrador del sistema</p>
				</div>
				<form method="post" role="form" action="login/ajax_login" id="form_login">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>
							<input type="text" class="form-control" name="user" id="user" placeholder="Usuario" autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>
							<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" autocomplete="off" />
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Ingresar
						</button>
					</div>
				</form>
				<div class="login-bottom-links">
					<a href="<?php echo base_url();?>login/forgot_password" class="link">
						<?php echo 'Olvido su contraseña ?'?>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.1.14.0.min.js"></script>
	<script src="assets/js/messages_es.js"></script>
	<script src="assets/js/neon-login.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>
</body>
</html>