<!DOCTYPE html>
	<html>
		<head>
		<title>FairBeauty</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="<?php echo base_url('vendor/home/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url('vendor/home/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
		<!-- fonts -->
		<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!-- //fonts -->
		<!-- js -->
		<script src="<?php echo base_url('vendor/home/js/jquery-1.11.1.min.js');?>"></script>
		<!-- //js -->
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="<?php echo base_url('vendor/home/js/move-top.js');?>"></script>
			<script type="text/javascript" src="<?php echo base_url('vendor/home/js/easing.js');?>"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->

		</head>	
	<body>