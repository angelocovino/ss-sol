<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="author" content="Angelo Covino">
	<meta name="description" content="Angelo Covino Web Developer">
	<!--
	<meta name="copyright" content="Copyright 2015 Angelo Covino" />
	<meta name="distribution" content="global" />
	-->
	<meta name="keywords" content="Angelo, Covino, Angelo Covino, angelotm">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="2 days" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- TITLE -->
	<title>Angelo Covino</title>
	<!-- LINKS -->
	<?php
		$images_path="images/";
		$stylesheet_path="stylesheet/";
	?>
	<link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,100,200,300,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $images_path; ?>icono.ico" />
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:300,400'>
	<link rel='stylesheet' type='text/css' href='<?php echo $stylesheet_path; ?>stylesheet.css'>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
		/* SCROLL TO ANCHORS */
		$(document).ready(function(){
			$('a[href^="#"]').click(function(e){
				e.preventDefault();
				var target = this.hash;
				var $target = $(target);

				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 900, 'swing', function(){
					window.location.hash = target;
				});
			});
		});
	</script>
</head>
<body>
	<section id="menu">
		<nav>
		<a href="#">&#9776;</a><a href="#">works</a><a href="#">portfolio</a><a href="#">contacts</a>
		</nav>
	</section>
	
	<section class="corpo bg1">
		lorem ipsum
	</section>
	
	<section class="unicolor">
		lorem ipsum
	</section>
	
	<section class="corpo bg2">
		lorem ipsum
	</section>
	
	<footer id="copyright">
		&copy; 2014 - 2015 Angelo Covino
	</footer>
	
</body>
</html>