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
	/*$('.menu-item').hover(function(){
		$(this).siblings(".menu-hover-item").show();
	});*/
	
});
</script>
</head>
</html>
<body>
<header>
	<a href="<?php echo site_url(); ?>"	>
		<h3>CHRISTOPHE BUECHER</h3>
	</a>
	<span class="menu-icon">
		<img class="open-icon" src="../wp-content/themes/christophe/images/open.png"></img>
		<img class="close-icon hide-icon" src="../wp-content/themes/christophe/images/close.png"></img>
	</span>
</header>
<nav id="menu" class="menu">
	<ul class="menu-list">
		<a href="<?php echo site_url(); ?>" class="menu-anchor">
			<li>		
				<div class="menu-item">
					<img src="../wp-content/themes/christophe/images/home.png">				
				</div>
				<div class="menu-hover-item">
					Home
				</div>
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/about"  class="menu-anchor">
			<li class="about">		
				<div class="menu-item">
					<img src="../wp-content/themes/christophe/images/portfolio.png"></img>			
				</div>
				<div class="menu-hover-item">
					About
				</div>
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/exp"  class="menu-anchor">
			<li class="experience">		
				<div class="menu-item">
					<img src="../wp-content/themes/christophe/images/newspaper.png"></img>	
				</div>
				<div class="menu-hover-item">
					Experience
				</div>					
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/portfolio"  class="menu-anchor">
			<li class="portfolio">
				<div class="menu-item">
					<img src="../wp-content/themes/christophe/images/briefcase.png"></img>	
				</div>
				<div class="menu-hover-item">
					Portfolio
				</div>
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/news"  class="menu-anchor">
			<li class="news">
				<div class="menu-item">
					<img src="../wp-content/themes/christophe/images/graph.png"></img>		
				</div>
				<div class="menu-hover-item">
					News
				</div>
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/contact"  class="menu-anchor">
			<li class="contact">
				<div class="menu-item">
					<img src="../wp-content/themes/christophe/images/envelope.png"></img>		
				</div>
				<div class="menu-hover-item">
					Contact
				</div>
			</li>
		</a>
	</ul>
</nav>
</script>

		