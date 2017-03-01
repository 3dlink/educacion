<?php
	//Asignado valores de configuracion del sistema
	$system_name	=	$this->db->get_where('configuraciones' , array('nombre'=>'nombre_sistema'))->row()->valor;
	$system_title		=	$this->db->get_where('configuraciones' , array('nombre'=>'titulo_sistema'))->row()->valor;
	$running_year 	=   	$this->db->get_where('configuraciones' , array('nombre'=>'running_year'))->row()->valor;
	$account_type       	=	$this->session->userdata('login_type');

?>

<!DOCTYPE html>
<html lang="es" >
<head>

	<title><?php echo $page_title;?> | <?php echo $system_title;?></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />


	<?php include 'includes_top.php';?>
	<?php
		if($page_name == 'census_edit' || $page_name == 'census_new'
			|| $page_name == 'anamnesis_ps' || $page_name == 'anamnesis_psc' || $page_name == 'anamnesis_to'
			|| $page_name == 'anamnesis_ts' || $page_name == 'student_new' || $page_name == 'anamnesis_tl'
			|| $page_name == 'student_edit' || $page_name == 'student_add'){
	?>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-dialog.min.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/censo/main.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/main.css">
	<?php
		}
	?>
</head>
<body class="page-body " >
	<div class="page-container " >
		<?php include $account_type.'/navigation.php';?>
		<div class="main-content">

			<?php include 'header.php';?>

           <h3 style="">
           	<i class="entypo-right-circled"></i>
				<?php echo $page_title;?>
           </h3>

			<?php include $account_type.'/'.$page_name.'.php';?>

			<?php include 'footer.php';?>

		</div>
		<?php //include 'chat.php';?>

	</div>

	<?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>

</body>
</html>