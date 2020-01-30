<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lemon Case</title>
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/img/MTC.jpg" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url(); ?>assets/themes/img/MTC.jpg" type="image/x-icon">
	<!-- / Favicons -->
	<!-- >> CSS -->
	<link href='<?php echo base_url(); ?>assets/themes/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
	<!-- Google Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- Font Awesome -->
	<link href='<?php echo base_url(); ?>assets/themes/vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet'>
	<!-- animate.css -->
	<link href='<?php echo base_url(); ?>assets/themes/vendor/animate.css' rel='stylesheet'>
	<!-- Nivo Lightbox -->
	<link href='<?php echo base_url(); ?>assets/themes/vendor/nivo-lightbox/nivo-lightbox.css' rel='stylesheet'>
	<link href='<?php echo base_url(); ?>assets/themes/vendor/nivo-lightbox/themes/default/default.css' rel='stylesheet' type='text/css'/>
	<!-- Main Styles -->
    <!-- <link href='<?php echo base_url(); ?>assets/themes/css/styles.css' rel='stylesheet'> -->
    <link href='<?php echo base_url(); ?>assets/themes/css/customize.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/themes/css/bootstrap.vertical-tabs.min.css' rel='stylesheet'>
	<!-- >> /CSS -->
	 <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>
    <style type="text/css">
    	.footer {
    	  position: absolute;
    	  bottom: 0;
    	  width: 100%;
    	  height: 2.5rem;  
    	    /* Footer height */
    	}
    	.style{
    		background: #cdcdb1;        
    	}
    </style>
</head>
<body >	
	<br>
	<!-- Page Container -->
	
		<!-- Header -->
		<?php $this->load->view('themes/header'); ?>	
		<!-- Main Content -->
		<?php $this->load->view('themes/main'); ?>
	
	<footer >
	<!-- Footer -->
	<?php $this->load->view('themes/footer'); ?>
	<!-- Analytics -->
	</footer>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src='<?php echo base_url(); ?>assets/themes/vendor/jquery.min.js'></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/themes/vendor/validate.js"></script>
	<!-- Modal box-->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/nivo-lightbox/nivo-lightbox.min.js"></script>
	<!-- jQuery niceScroll -->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/themes/vendor/jquery.nicescroll.plus.js"></script>
	<!-- jQuery CountDown -->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/jquery.countdown.min.js"></script>
	<!-- Images Loaded-->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/imagesloaded.pkgd.min.js"></script>
	<!-- Mansonry-->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/masonry.pkgd.min.js"></script>
	<!-- Isotope-->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/jquery.ba-bbq.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/themes/vendor/jquery.isotope2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/themes/vendor/packery-mode.pkgd.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/cross-browser.js"></script>
	<!-- Double Tap to Go -->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/doubletaptogo.min.js"></script>
	<!-- Cross-browser -->
	<script src="<?php echo base_url(); ?>assets/themes/vendor/cross-browser.js"></script>
	<!-- Main Scripts -->
	<script src="<?php echo base_url(); ?>assets/themes/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/themes/js/bean.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="<?php echo base_url(); ?>assets/themes/vendor/html5shiv.js"></script>
	  <script src="<?php echo base_url(); ?>assets/themes/vendor/respond.min.js"></script>
	<![endif]-->
</body>
</html>