<?php
/**
 * Template Name: About Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */
$abt_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
if(!$abt_img){
	$abt_img = '../wp-content/themes/christophe/images/christ-about.png';
}
get_header();?>
<section class="about-section">
	<article class="container">
		<h6>About</h6>
		<img src="<?php echo $abt_img; ?>" class="about-image"></img>
		<p class="about-content">
			<?php 
				echo get_post_field('post_content', $post_id);
			?> 
		</p>		
	</article>
</section>
<script>
$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();
$('#menu .about img').attr("src","../wp-content/themes/christophe/images/Portfolio_dark.png");
$('#menu .about .menu-item').addClass('active');
</script>
<?php get_footer();
?>