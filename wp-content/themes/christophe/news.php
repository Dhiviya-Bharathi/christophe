<div id="container">
<?php
/**
 * Template Name: News Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */
$args = array(	
	'orderby'          => 'date',
	'category_name'    => 'news',
	'order'            => 'DESC',		
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args ); 
// echo "<pre>";
// print_r($posts_array);
// echo "</pre>";
get_header(); ?>
<section class="news-section">	
	<div class="container">
		<h6>News</h6>		
		<article class="row">
			<?php foreach ($posts_array as $key => $value) { ?>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 new-article">
				<?php $post_img = wp_get_attachment_url( get_post_thumbnail_id($value->ID) ); ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img style="max-width:100%;" class="news-article-img" src="<?php echo $post_img; ?>"></img>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3 class="news-article-title"><?php echo $value->post_title; ?></h3>
					<p class="news-article-text"><?php $small = substr($value->post_content, 0, 100); echo $small.'...'; ?></p>
					<button class="news-read-more" data-toggle="modal" data-target="#myModal_<?php echo $value->ID; ?>">Read more</button>
				</div>
			</div>
			<div class="modal fade" id="myModal_<?php echo $value->ID; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><?php echo $value->post_title; ?></h4>
					<span class="mini-text">March 07, 2015</span>
					<span class="mini-text">Responsible de Group</span>
				  </div>
				  <div class="modal-body">
				  	<img class="news-article-img" src="<?php echo $post_img; ?>"></img>
				  	<p><?php echo $value->post_content; ?></p>
				  </div>
				</div>
			  </div>
			</div>
			<?php } ?>			
		</article>
	</div>
</section>
<script>
$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();
$('#menu .news img').attr("src","../wp-content/themes/christophe/images/news-dark.png");
$('#menu .news .menu-item').addClass('active');
</script>
<?php get_footer(); ?>
</div>