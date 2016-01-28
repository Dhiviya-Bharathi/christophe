<div id="container">
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
			<?php the_title( '<h5>', '</h5>' ); ?>
			<p><?php echo stripcslashes(get_option('contact_text')); ?></p>
			<form class="contact_form" method="POST" role="form">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-left">				
				  <div class="form-group">
					<input type="text" class="form-control" name="name" id="name" placeholder="Prénom">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Nom">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone">
				  </div>
				  <div class="form-group">
					<input type="email" class="form-control" name="email" id="email" placeholder="Adresse e-mail">
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
				  </div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs form-middle">
					<img src="../wp-content/themes/christophe/images/form-leaf.png"/>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 form-right">
					<div class="form-group">
						<textarea class="form-control" rows="15" name="comment" id="comment" placeholder="Laissez-nous votre message ici"></textarea>
					</div>
					<input id="contact_form" type="submit" class="hidden btn" />
					<button id="submit" class="btn btn-default">Envoyer</button>
				</div>
			</form>
			<p class="visibility-hidden error">Tous les champs sont obligatoires</p>
			<p class="visibility-hidden succ">Courrier envoyé avec succès</p>
		</div>
	</article>
</section>
<style>
.site-footer {
	bottom: 0;
}
</style>
<script>
/*$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();*/
$('#menu .contact img').attr("src","../wp-content/themes/christophe/images/contact_dark.png");
$('#menu .contact .menu-item').addClass('active');

$(document).on('click','#submit', function(event){
		event.preventDefault();
		jQuery('.error').css('color','red');
		jQuery('.succ').css('color','green');
		jQuery('.error').addClass('visibility-hidden');
		jQuery('.succ').addClass('visibility-hidden');
		var name = jQuery.trim(jQuery( "#name" ).val());
		var lastname = jQuery.trim(jQuery( "#lastName" ).val());
		var subject = jQuery.trim(jQuery( "#subject" ).val());
		var comment = jQuery.trim(jQuery( "#comment" ).val());
		var email = jQuery.trim(jQuery( "#email" ).val());
		var phone = jQuery.trim(jQuery( "#phone" ).val());

		function IsEmail(email) {
	  		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  		return regex.test(email);
		}		
		intRegex = /[0-9 -()+]+$/;

		if(!name || !lastname || !subject || !comment || !email || !phone){
			jQuery('.error').removeClass('visibility-hidden');
		}else if(!IsEmail(email)) {			
			jQuery('.error').html('Please provide valid E-mail address').removeClass('visibility-hidden');
		}else if((phone.length < 6) || (!intRegex.test(phone)))	{
			jQuery('.error').html('Please enter a valid phone number').removeClass('visibility-hidden');
		}else{
				var ajaxurl = '<?php echo admin_url('admin-ajax.php');?>';
				jQuery.post(
				    ajaxurl,
				    {
				        'action': 'chriscontact',
				        "name":name,
				        "lastname":lastname,
				        "subject":subject,
				        "comment":comment,
				        "email":email,
				        "phone":phone	
				    },
				    function(response){
				    	jQuery('#submit').removeAttr('disabled');				    	
				        var response = jQuery.parseJSON(response);
				        if (response.success == "true"){	
				        	jQuery('.succ').removeClass('visibility-hidden');
				    	}else{
				    		jQuery('.error').html('Mail not sent try again').removeClass('visibility-hidden');
				    	}
				    }
				);
		    }
});
</script>

<?php get_footer(); ?>

