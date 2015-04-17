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
		
		// SCROLLING STUFF
		$(window).scroll(function(e){
			// SCROLL TO TOP
			if($(this).scrollTop()>0){
				$("#ac_sider_totop").slideDown(300);
			}else{
				$("#ac_sider_totop").slideUp(300);
			}
			// STOP SCROLLING IF MENU IS OPEN
			if(menu_opened){
				e.stopPropagation();
				e.preventDefault();
			}
		});
		// BLOCK TOUCH FOR MOBILE
		$('html, body').on('touchmove', function(e){ 
			if(menu_opened){
				e.preventDefault();
			}
		});
		// KEYDOWN EVENTS
		$(document).keydown(function(e){
			switch(e.which) {
				case 37: // left
				case 39: // right
					e.preventDefault();
				break;
				case 38: // up
				case 40: // down
					if(menu_opened){
						e.preventDefault();
					}
				break;
				default: return;
			}
		});
		
		var menu_opened = false;
		var tempo = 150;
		$("#menu_tiles > section").click(function(){
			if($(this).children("a").length < 1){
				$("#ac_sider > section").fadeOut(0);
				if(menu_opened){
					$("body")
						.animate({
							"left":"0",
							"padding-left":"45px"
						},tempo, function(){
							$(this).css({"overflow-y":"auto"});
						});
					$("#ac_sider").fadeOut(tempo);
					$("#menu_tiles").fadeIn(tempo);
					menu_opened = false;
				}else{
					$("body")
						.animate({
							"left":"260px",
							"padding-left":"0"
						},tempo)
						.css({"overflow-y":"hidden"});
					$("#ac_sider").fadeIn(tempo);
					$("#ac_sider > section:nth-child("+($(this).index()+1)+")").fadeIn(0);
					$("#menu_tiles").fadeOut(tempo);
					menu_opened = true;
				}
			}
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
	<div id="ac_sider">
		<section>
			<div id="ac_sider_title">Angelo Covino</div>
			<div id="ac_sider_subtitle">personal website</div>
			<ul id="menu_main">
				<li><a href="#works">works</a></li>
				<li class="active"><a href="#portfolio">portfolio</a></li>
				<li><a href="#contacts">contacts</a></li>
				<li id="ac_sider_totop"><a href="#">return to top</a></li>
			</ul>
			<div id="ac_sider_copyright">
				&copy; 2014 - 2015 Angelo Covino
			</div>
		</section>
		<section>
			<div id="ac_sider_title">Contact me</div>
			<div id="ac_sider_subtitle">just fill the form</div>
			<ul id="menu_contact">
				<li>
					<label for="fname">first name</label>
					<input name="fname" type="text" />
				</li>
				<li>
					<label for="lname">last name</label>
					<input name="lname" type="text" />
				</li>
				<li>
					<label for="email">email</label>
					<input name="email" type="text" />
				</li>
				<li>
					<label for="cont">message</label>
					<textarea name="cont"></textarea>
				</li>
			</ul>
		</section>
	</div>
	
	<section id="menu_tiles">
		<section id="menu">&#9776;</section>
		<!--
		<section><img src="images/email-24.png" /></section>
		<section><img src="images/user1461.png" /></section>
		-->
		<section><a href="//www.behance.net/angelocovino"><img src="images/behance-48.png" /></a></section>
		<section><a href="//github.com/angelocovino"><img src="images/github-48.png" /></a></section>
	</section>
	
	<section class="corpo">
		<h1>Angelo Covino</h1>
		<h2>web developer</h2>
		asd
		<br />
		<a class="button">work with me</a>
	</section>
	
	<section id="works" class="unicolor">
		works
	</section>
	
	<section id="portfolio" class="corpo">
		portfolio
	</section>
	
	<section id="contacts" class="unicolor">
		Contact me<br />
		asd
	</section>
</body>
</html>