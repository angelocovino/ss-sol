<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		// PATHS
		$images_path="images/";
		$icons_path=$images_path."icons/";
		$stylesheet_path="stylesheet/";
	?>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="author" content="Angelo Covino">
	<meta name="description" content="Angelo Covino Web Developer">
	<meta name="copyright" content="Copyright 2015 Angelo Covino" />
	<meta name="distribution" content="global" />
	<meta name="keywords" content="Angelo, Covino, Angelo Covino, angelotm">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="2 days" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- TITLE -->
	<title>Angelo Covino</title>
	<!-- LINKS -->
	<!--
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $images_path; ?>icono.ico" />
	-->
	<link href="//fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet" type="text/css">
	<link href="<?php echo $stylesheet_path; ?>reset.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $stylesheet_path; ?>stylesheet.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $stylesheet_path; ?>ac_sider.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
				<li><a href="#aboutme">about me</a></li>
				<li><a href="#works">works</a></li>
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
		<section id="menu"><img src="<?php echo $icons_path; ?>threelines.png" /></section>
		<!--
		<section id="menu">&#9776;</section>
		<section><img src="<?php echo $icons_path; ?>email.png" /></section>
		<section><img src="<?php echo $icons_path; ?>user.png" /></section>
		-->
		<section><a href="//www.behance.net/angelocovino" target="_blank"><img src="<?php echo $icons_path; ?>behance.png" /></a></section>
		<section><a href="//linkedin.com/in/angelocovino" target="_blank"><img src="<?php echo $icons_path; ?>linkedin.png" /></a></section>
		<section><a href="//github.com/angelocovino" target="_blank"><img src="<?php echo $icons_path; ?>github.png" /></a></section>
	</section>
	
	<section class="corpo">
		<h1>Angelo Covino</h1>
		<h2>web developer</h2>
		lorem ipsum<br />
		in pause<br />
		<br />
		<a class="button">work with me</a>
	</section>
	
	<section id="works" class="unicolor">
		works
	</section>
	
	<section id="aboutme" class="corpo">
		<div class="title">about me</div>
		Hello! I am a self-taught Web Developer &amp; User Interface Designer based in London.<br />
		<br />
		Born in Naples (Italy), I have begun to study Computer Science in Naples, and I would like to complete it in London. In December 2014 I am arrived in London to start an awesome experience.<br />
		<br />
		I have a genuine passion in what I do, in fact I have started when i was just a child with HTML4. I can still remember how proud I was when I saw my first 'Hello World!'. That has been the moment I realized it was my real passion.<br />
		<br />
		I often spend my free time learning new languages and developing something on my personal computer.<br />
		<br />
		I am currently studying english at Westminster Kingsway College in Victoria to improve my English proficiency and I am also working as Freelance Web Developer.<br />
		<br />
		If you have a project tell me about it,<br />contact me!
	</section>
	
	<section id="contacts" class="unicolor">
		Contact me<br />
		asd
	</section>
</body>
</html>