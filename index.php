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
	<!--
	<link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400,100,200,300,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $images_path; ?>icono.ico" />
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:300,400'>
	-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		//$("#ac_sider").css({"padding-top":""+$("#menu").height()+"px"});
		var menu_opened = function(){
			return ($("#ac_sider").is(":visible"));
		};
		var tempo = 150;
		$("#menu_activator").click(function(){
			if(menu_opened()){
				$("body")
					.animate({"left":"0"},tempo, function(){
						$(this).css({"overflow-x":"auto"});
					});
				//$("#menu").animate({"left":"0"},tempo);
			}else{
				$("body")
					.animate({"left":"260px"},tempo)
					.css({"overflow-x":"hidden"});
				//$("#menu").animate({"left":"-260px"},tempo);
			}
			$("#ac_sider").animate({"width":"toggle"},tempo);
		});
	});
	</script>
</head>
<body>
	<div id="ac_sider">
		<ul>
			<li><a href="#">works</a></li>
			<li class="active"><a href="#">portfolio</a></li>
			<li><a href="#">contacts</a></li>
		</ul>
		<div id="copyright">
			&copy; 2014 - 2015 Angelo Covino
		</div>
	</div>
	
	<section id="menu">
		<a id="menu_activator">&#9776;</a>
	</section>
	
	<section class="corpo">
		<h1>Angelo Covino</h1><br />
		<a class="button">lorem ipsum</a><br />
	</section>
</body>
</html>