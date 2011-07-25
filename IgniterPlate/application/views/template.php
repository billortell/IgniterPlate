<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="/css/style.css?v=2">

	<script src="/js/libs/modernizr-1.7.min.js"></script>
	<script src="/js/libs/respond.min.js"></script>
</head>
<body>
	<div id="container">
		
	<?php $this->load->view('header'); ?>
	
		<div id="main" role="main">
			
                    <?php $this->load->view($main_content); ?>
		    
		    
		</div>

		<footer>

		</footer>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="/js/libs/jquery-1.6.2.min.js"%3E%3C/script%3E'))</script>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="/js/plugins.js"></script>
	<script src="/js/script.js"></script>
	<!-- end scripts-->
  
	<!--[if lt IE 7 ]>
	<script src="/js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
	<script>
		var _gaq=[['_setAccount','UA-XXXXXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>