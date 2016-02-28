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
		<?php the_title( '<h6>', '</h6>' ); ?>
		<div class="contact-article row">			
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
				<div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 visibility-hidden msg error">Tous les champs sont obligatoires</div>
				<!--<div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-lg-4 col-md-4 col-sm-4 col-xs-12 visibility-hidden msg succ">Courrier envoyé avec succès<div>-->
			</form>
			
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
		/*jQuery('.error').css('color','red');
		jQuery('.succ').css('color','green');*/
		jQuery('.msg').addClass('visibility-hidden');
		jQuery('.msg').removeClass('error, succ');
		<!--jQuery('.succ').addClass('visibility-hidden');-->
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
			jQuery('.msg').removeClass('visibility-hidden');
			jQuery('.msg').html('Tous les champs sont obligatoires').addClass('error').removeClass('succ');
		}else if(!IsEmail(email)) {			
			jQuery('.msg').html('Please provide valid E-mail address').removeClass('visibility-hidden').addClass('error').removeClass('succ');
		}else if((phone.length < 6) || (!intRegex.test(phone)))	{
			jQuery('.msg').html('Please enter a valid phone number').removeClass('visibility-hidden').addClass('error').removeClass('succ');
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
				        	jQuery('.msg').html('Courrier envoyé avec succès').removeClass('visibility-hidden').addClass('succ').removeClass('error');
				        	jQuery('.contact_form').trigger("reset");
				    	}else{
				    		jQuery('.msg').addClass('error').removeClass('succ').html('Mail not sent try again').removeClass('visibility-hidden');
				    	}
				    }
				);
		    }
});
</script>

<?php get_footer(); ?>

