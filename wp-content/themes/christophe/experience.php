<?php
/**
 * Template Name: Experiance Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */
$fullquery = "SELECT * FROM `wp_experience`";
$fulldata = $wpdb->get_results($fullquery, ARRAY_A);

get_header();
?>
<section class="experience-section">
	<article class="container">		
		<h6>Experience</h6>	
		<div class="row col-lg-12">
			<div class="exp-head col-lg-4 col-lg-offset-4">
				CHRISTOPHE BUECHER
			</div>
		</div>
		<?php foreach ($fulldata as $key => $value) { ?>
		<div class="row col-lg-12">
			<div class="exp-date-wrap col-lg-6">
				<div class="exp-date col-lg-6 col-lg-offset-4">
					<?php echo date('F Y', strtotime($value['exp_from']));?> - <?php echo date('F Y', strtotime($value['exp_to']));?>
				</div>
			</div>
			<span class="milestone"></span>
			<div class="exp-role-wrap col-lg-6">
				<div class="exp-role col-lg-8 col-lg-offset-2">
					<h5><?php echo $value['exp_title']; ?></h5>
					<p><?php echo $value['exp_desc']; ?></p>
				</div>
			</div>
		</div>	
		<?php } ?>
		<div class="row col-lg-12">
			<div class="exp-tail col-lg-6">				
			</div>
			<span class="milestone-small"></span>
		</div>
	</article>
</section>
<script>
$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();
$('#menu .experience img').attr("src","../wp-content/themes/christophe/images/experience_dark.png");
$('#menu .experience').addClass('active');
</script>

<?php
get_footer();