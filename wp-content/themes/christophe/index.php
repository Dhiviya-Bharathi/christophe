<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<link rel="stylesheet" href="wp-content/themes/christophe/css/bootstrap.min.css"/>
<link rel="stylesheet" href="wp-content/themes/christophe/css/font-awesome.min.css"/>
<link rel="stylesheet" href="wp-content/themes/christophe/style.css"/>
<script src="wp-content/themes/christophe/js/jquery-1.11.3.min.js"></script>
<script src="wp-content/themes/christophe/js/jquery-ui.min.js"></script>
<script src="wp-content/themes/christophe/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	var effect = 'slide';
	var options = { direction: 'right' };
	var duration = 500;
	var sectionHeight = $(window).height() - 65;
	
	$('.menu').css("position","fixed");
	$('html, body').css("height","100%");
	$('.menu').css("height",sectionHeight);
	
	$(".menu-icon").click(function () {
		$('.menu-icon img').toggleClass('hide-icon');
		$('#menu').toggle(effect, options, duration);
	});
	/*$('.menu-item').hover(function(){
		$(this).siblings(".menu-hover-item").show(effect, options, duration);
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
		<img class="open-icon" src="wp-content/themes/christophe/images/open.png"></img>
		<img class="close-icon hide-icon" src="wp-content/themes/christophe/images/close.png"></img>
	</span>
</header>
<nav id="menu" class="menu">
	<ul class="menu-list">
		<a href="<?php echo site_url(); ?>" class="menu-anchor">
			<li>		
				<div class="menu-item">
					<img src="wp-content/themes/christophe/images/home.png">				
				</div>
				<div class="menu-hover-item">
					Home
				</div>
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/about"  class="menu-anchor">
			<li class="about">		
				<div class="menu-item">
					<img src="wp-content/themes/christophe/images/portfolio.png"></img>			
				</div>
				<div class="menu-hover-item">
					About
				</div>
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/exp"  class="menu-anchor">
			<li class="experience">		
				<div class="menu-item">
					<img src="wp-content/themes/christophe/images/newspaper.png"></img>	
				</div>
				<div class="menu-hover-item">
					Experience
				</div>					
			</li>
		</a>
		<a href="<?php echo site_url(); ?>/portfolio"  class="menu-anchor">
			<li class="portfolio">
				<div class="menu-item">
					<img src="wp-content/themes/christophe/images/briefcase.png"></img>	
				</div>
				<div class="menu-hover-item">
					Portfolio
				</div>
			</li>
		</a>
		<a href="news"  class="menu-anchor">
			<li class="news">
				<div class="menu-item">
					<img src="wp-content/themes/christophe/images/graph.png"></img>		
				</div>
				<div class="menu-hover-item">
					News
				</div>
			</li>
		</a>
		<a href="contact"  class="menu-anchor">
			<li class="<?php echo site_url(); ?>/contact">
				<div class="menu-item">
					<img src="wp-content/themes/christophe/images/envelope.png"></img>		
				</div>
				<div class="menu-hover-item">
					Contact
				</div>
			</li>
		</a>
	</ul>
</nav>
</script>

<section class="container vcenter" style="background-image: url('wp-content/themes/christophe/images/<?php echo get_option("home_bg"); ?>');">
	<div class="main-wrapper">
		<h1 class="main-name"><?php echo get_option('home_name'); ?></h1>
		<p class="main-designation"><?php echo get_option('home_title'); ?></p>
		<a href="<?php echo site_url(); ?>/about">
			<button class="main-button"><?php echo get_option('home_btn'); ?></button>
		</a>
	</div>
</section>

