<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Master Tech Computer</title>
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
    <link href='<?php echo base_url(); ?>assets/themes/css/styles.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/themes/css/customize.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/themes/css/bootstrap.vertical-tabs.min.css' rel='stylesheet'>
	<!-- >> /CSS -->
	 <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>
</head>
<body class="">	
	<!-- Page Loader -->
	<!--div class="loader-container" id="page-loader">
		<div class="loading-wrapper loading-wrapper-hide">
			<div class="loader-animation" id="loader-animation">
				<div class="sk-folding-cube">
					<div class="sk-cube1 sk-cube"></div>
					<div class="sk-cube2 sk-cube"></div>
					<div class="sk-cube4 sk-cube"></div>
					<div class="sk-cube3 sk-cube"></div>
				</div>
			</div>    
	    	< !-- Edit With Your Name -- >
	    	<div class="loader-name" id="loader-name">
	      		<img src="< ?php echo base_url(); ?>assets/themes/img/MTC.jpg" alt=""> Master Tech Computer
	    	</div>
	    	< !-- /Edit With Your Name -- >
	  	</div>   
	</div-->
	<!-- /End of Page loader -->

	<!-- Page Container -->
	<div class="container">
		<!-- Header -->
		<?php $this->load->view('themes/header'); ?>	
		<!-- Main Content -->
		<?php $this->load->view('themes/main'); ?>
	</div>
	<!-- /.page container -->

	<!-- Contact Form - Ajax Messages -->
	<!-- Form Sucess -->
	<!-- <div class="form-result modal-wrap" id="contactSuccess">
		<div class="modal-bg"></div>
		<div class="modal-content">
			<h4 class="modal-title"><i class="fa fa-check-circle"></i>Success!</h4>
			<p>Your message has been sent to us.</p>
		</div>
	</div> -->
	<!-- form-error -->
	<!-- <div class="form-result modal-wrap" id="contactError">
		<div class="modal-bg"></div>
		<div class="modal-content">
			<h4 class="modal-title"><i class="fa fa-times"></i> Error</h4>
			<p>There was an error sending your message.</p>
		</div>
	</div> -->
	<!-- form-sending -->
	<!-- <div class="form-result modal-wrap" id="contactWait">
		<div class="modal-bg"></div>
		<div class="modal-content">
			<div class="modal-loader"></div>
			<p>Sending Message, please wait...</p>
		</div>
	</div> -->
	<!-- / Contact Form - Ajax Messages -->
	<!-- Footer -->
	<?php $this->load->view('themes/footer'); ?>
	<!-- Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  	ga('create', 'UA-74606252-1', 'auto');
	  	ga('send', 'pageview');
	</script>
	
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