<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<link rel="stylesheet" href="../wp-content/themes/christophe/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../wp-content/themes/christophe/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../wp-content/themes/christophe/style.css"/>
<script src="../wp-content/themes/christophe/js/jquery-1.11.3.min.js"></script>
<script src="../wp-content/themes/christophe/js/jquery-ui.min.js"></script>
<script src="../wp-content/themes/christophe/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	var sectionHeight = $(window).height() - 115;
	console.log(sectionHeight);
	$('.menu').css({
		"position":"relative",
		"min-height": sectionHeight
	});
	$('.about-section, .experience-section, .news-section').css({
		"min-height": sectionHeight
	});
	$('html, body').css("height","auto");
	$(".menu-icon").click(function () {
		// Set the effect type
		var effect = 'slide';

		// Set the options for the effect type chosen
		var options = { direction: 'right' };

		// Set the duration (default: 400 milliseconds)
		var duration = 500;
		$('.menu-icon img').toggleClass('hide-icon');
		$('#menu').toggle(effect, options, duration);
	});
});
</script>
</head>
</html>
<body>
<header>
	<h3>CHRISTOPHE BUECHER</h3>
	<span class="menu-icon">
		<img class="open-icon" src="../wp-content/themes/christophe/images/open.png"></img>
		<img class="close-icon hide-icon" src="../wp-content/themes/christophe/images/close.png"></img>
	</span>
</header>
<nav id="menu" class="menu">
	<ul class="menu-list">
		<a href="/christophe">
			<li class="menu-item">
				<!--<span class="menu-item-title">HOME</span>-->			
				<img src="../wp-content/themes/christophe/images/home.png"></img>					
			</li>
		</a>	
		<a href="about">
			<li class="menu-item about">			
				<img src="../wp-content/themes/christophe/images/portfolio.png"></img>			
			</li>
		</a>
		<a href="experience">
			<li class="menu-item experience">			
				<img src="../wp-content/themes/christophe/images/newspaper.png"></img>			
			</li>
		</a>
		<a href="portfolio">
			<li class="menu-item portfolio">			
				<img src="../wp-content/themes/christophe/images/briefcase.png"></img>			
			</li>
		</a>
		<a href="news">
			<li class="menu-item news">			
				<img src="../wp-content/themes/christophe/images/graph.png"></img>			
			</li>
		</a>
		<a href="contact">
			<li class="menu-item contact">			
				<img src="../wp-content/themes/christophe/images/envelope.png"></img>
			</li>
		</a>
	</ul>
</nav>
</script>

		