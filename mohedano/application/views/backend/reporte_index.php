<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?php echo $page_title;?></title>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="Tekkoa Group" />
	
	

	<?php include 'includes_top.php';?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-dialog.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/censo/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/responsive-tabs/dist/main.css">
	
</head>
<body class="page-body <?php if ($skin_colour != '') echo 'skin-' . $skin_colour;?>" >

	<?php include 'footer.php';?>


    <?php include 'includes_bottom.php';?>
</body>
</html>