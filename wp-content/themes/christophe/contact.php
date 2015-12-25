<?php
/**
 * Template Name: Contact Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */

get_header();?>
<section class="contact-section">
	<article class="container">		
		<h6>Contact</h6>	
		<div class="contact-article row">
			<h5>CONTACT FORM</h5>
			<p>Interested in working together? Fill out the below with some of your details and I will get back to you as soon as I can</p>
			<form role="form">
				<div class="col-lg-4 form-left">				
				  <div class="form-group">
					<input type="text" class="form-control" id="name" placeholder="Name">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" id="lastName" placeholder="Last Name">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" id="phone" placeholder="Phone">
				  </div>
				  <div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="Email Address">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" id="subject" placeholder="Subject">
				  </div>
				</div>
				<div class="col-lg-1 form-middle">
					<img src="../wp-content/themes/christophe/images/form-leaf.png"/>
				</div>
				<div class="col-lg-7 form-right">
					<div class="form-group">
						<textarea class="form-control" rows="15" id="comment" placeholder="Leave your message here"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Send</button>
				</div>
				
			</form>
		</div>
	</article>
</section>
<script>
$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();
$('#menu .contact img').attr("src","../wp-content/themes/christophe/images/contact_dark.png");
$('#menu .contact .menu-item').addClass('active');
</script>
<?php get_footer(); ?>