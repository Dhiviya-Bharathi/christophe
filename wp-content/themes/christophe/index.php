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
	$('.menu').css("position","fixed");
	$('html, body').css("height","100%");
	
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
	<a href="<?php echo site_url(); ?>"	>
		<h3><?php echo get_option('header_txt'); ?></h3>
	</a>
	<span class="menu-icon">
		<img class="open-icon" src="wp-content/themes/christophe/images/open.png"></img>
		<img class="close-icon hide-icon" src="wp-content/themes/christophe/images/close.png"></img>
	</span>
</header>
<nav id="menu" class="menu">
	<ul class="menu-list">
		<li class="menu-item">
			<a href="<?php echo site_url(); ?>"	>		
				<img src="wp-content/themes/christophe/images/home.png"></img>
			</a>		
		</li>
		<li class="menu-item about">
			<a href="<?php echo site_url(); ?>/about"	>		
				<img src="wp-content/themes/christophe/images/portfolio.png"></img>
			</a>
		</li>
		<li class="menu-item experience">
			<a href="<?php echo site_url(); ?>/news"	>		
				<img src="wp-content/themes/christophe/images/newspaper.png"></img>
			</a>
		</li>
		<li class="menu-item portfolio">
			<a href="<?php echo site_url(); ?>/exp"	>		
				<img src="wp-content/themes/christophe/images/briefcase.png"></img>
			</a>
		</li>
		<li class="menu-item news">
			<a href="<?php echo site_url(); ?>/portfolio"	>		
				<img src="wp-content/themes/christophe/images/graph.png"></img>
			</a>
		</li>
		<li class="menu-item contact">
			<a href="<?php echo site_url(); ?>/contact"	>		
			 	<img src="wp-content/themes/christophe/images/envelope.png"></img>
			</a>
		</li>
	</ul>
</nav>
</script>

<section class="container vcenter" style="background-image: url('wp-content/themes/christophe/images/<?php echo get_option("home_bg"); ?>');">
	<div class="main-wrapper">
		<h1 class="main-name"><?php echo get_option('home_name'); ?></h1>
		<p class="main-designation"><?php echo get_option('home_title'); ?></p>
		<a href="<?php echo site_url().'/'.get_option('home_btn_url'); ?>">
			<button class="main-button"><?php echo get_option('home_btn'); ?></button>
		</a>
	</div>
</section>

