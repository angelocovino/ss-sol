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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!--
	<script src="development/jquery-1.11.0.min.js"></script>
	-->
	<script type="text/javascript">
	$(document).ready(function(){
		/* SCROLL TO ANCHORS */
		$('#ac_sider li a[href^="#"]').click(function(e){
			e.preventDefault();
			if(!this.hash){
				$('html, body').animate({
					"scrollTop" : 0
				}, 500, "swing", function(){
					ac_sider_close();
					window.location.href = "#";
				});
			}else{
				var target = this.hash;
				var $target = $(target);
				//if(window.location.hash!=target){
					$('html, body').animate({
						"scrollTop" : $target.offset().top
					}, 500, "swing", function(){
						ac_sider_close();
						window.location.hash = target;
					});
				//}else{$("#menu").click();}
			}
		});
		
		$(window).scroll(function(){
			if($(this).scrollTop()>0){
				$("#ac_sider_totop").slideDown(300);
			}else{
				$("#ac_sider_totop").slideUp(300);
			}
		});
		
		var menu_opened = false;
		var tempo = 150;
		$("#menu").click(function(){
			if(menu_opened){
				$("body")
					.animate({
						"left":"0",
						"padding-left":"50px"
					},tempo, function(){
						$(this).css({"overflow-x":"auto"});
					});
				//$("#menu").animate({"left":"0"},tempo);
				$("#ac_sider").fadeOut(tempo);
				$("#menu, #left_line").fadeIn(tempo);
				menu_opened = false;
			}else{
				$("body")
					.animate({
						"left":"260px",
						"padding-left":"0"
					},tempo)
					.css({"overflow-x":"hidden"});
				//$("#menu").animate({"left":"-260px"},tempo);
				$("#ac_sider").fadeIn(tempo);
				$("#menu, #left_line").fadeOut(tempo);
				menu_opened = true;
			}
			//$("#ac_sider").animate({"width":"toggle"},tempo);
		});
		$("body").click(function(e){
			//var target = $(e.target);
			//if(!target.is("#menu") && e.pageX>260 && menu_opened){
			if(e.pageX>260){
				ac_sider_close();
			}
		});
		function ac_sider_close(){
			if(menu_opened){$("#menu").click();}
		}
	});
	</script>
</head>
<body>
	<div id="left_line">&nbsp;</div>

	<div id="ac_sider">
		<div id="ac_sider_title">Angelo Covino</div>
		<div id="ac_sider_subtitle">personal website</div>
		<ul>
			<li><a href="#works">works</a></li>
			<li class="active"><a href="#portfolio">portfolio</a></li>
			<li><a href="#contacts">contacts</a></li>
			<li id="ac_sider_totop"><a href="#">return to top</a></li>
		</ul>
		<div id="ac_sider_copyright">
			&copy; 2014 - 2015 Angelo Covino
		</div>
	</div>
	
	<section id="menu">
		&#9776;
	</section>
	
	<section class="corpo">
		<h1>Angelo Covino</h1>
		<h2>web developer</h2>
			asd
			<br />
			<a class="button">lorem ipsum</a>
		<section class="carpet">
		asd
		</section><br />
	</section>
	
	<section id="works" class="unicolor">
	asd
		<h1>Angelo Covino</h1>
		<h2>web developer</h2>
		<a class="button">lorem ipsum</a><br />
	</section>
</body>
</html>