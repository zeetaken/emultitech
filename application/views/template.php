<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
		<title>Digy - Free CSS template by ChocoTemplates.com</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>asset/css/images/favicon.ico" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Jura:400,500,600,300' rel='stylesheet' type='text/css' />

		<script src="<?php echo base_url();?>asset/js/jquery-1.8.0.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.touchwipe.1.1.1.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.carouFredSel-5.5.0-packed.js" type="text/javascript"></script>
		<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
		<![endif]-->
		<script src="<?php echo base_url();?>asset/js/functions.js" type="text/javascript"></script>
	</head>
	<body>
		<!-- wrapper -->
		<div class="wrapper">
			<?php
				$this->load->view('head/header',$head_data);
				$this->load->view('footer/foot'); 
			?>
		</div>
		<!-- wrapper selesai-->
	</body>
</html>