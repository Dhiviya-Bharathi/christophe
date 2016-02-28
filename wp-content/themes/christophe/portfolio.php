<div id="container">
<?php
/**
 * Template Name: Port-Folio Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */


$parentargs = array('name' => 'portfolio');
$parentcategories = get_categories( $parentargs );

$subargs = array('child_of' => $parentcategories['0']->cat_ID,'hide_empty' => '0',);
$subcategories = get_categories( $subargs );

$args = array(  
  'orderby'          => 'date',
  'category_name'    => 'portfolio',
  'order'            => 'DESC',   
  'post_status'      => 'publish',
  'showposts'        => '-1'
);

$posts_array = get_posts( $args ); 
get_header();?>


<section class="portfolio-section">
<article class="container">
	<?php the_title( '<h6>', '</h6>' ); ?>	
	<p><?php echo stripcslashes(get_option('portfolio_text')); ?></p>	
	<div class="button-group filter-button-group">	    
		  <?php 
		  foreach ($subcategories as $key => $value) { ?>    
			<button class="button" data-filter=".<?php echo str_replace(' ', '_', $value->name); ?>"><?php print_r($value->name); ?></button>  
		  <?php  } ?>		  
		  <button class="button" data-filter="*"><?php echo __('[:fr]Montrer tout[:en]Show All[:de]Show dutch'); ?></button>
	</div>
	<div class="row grid">
	<div class="grid-sizer col-md-4 col-lg-3 col-sm-6 col-xs-12"></div>
		  <?php foreach ($posts_array as $key => $value) {    
			$eachcat = wp_get_post_categories($value->ID); $cat = get_category($eachcat['0']); $cat2 = get_category($eachcat['1']); ?> 
		  <a data-toggle="modal" data-target="#myModal_<?php echo $key; ?>" class="element-item portfolio-image grid-item col-md-4 col-lg-3 col-sm-6 col-xs-12 <?php echo str_replace(' ', '_', $cat->name).' '.str_replace(' ', '_', $cat2->name); ?>">
			<?php $post_img = wp_get_attachment_url( get_post_thumbnail_id($value->ID) ); ?>
			<!--<div  class="portfolio-image col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  <center>--><img style="max-width:100%;" class="news-article-img" src="<?php echo $post_img; ?>"></img><!--</center>-->
			  <span class="outer"><span class="inner"><?php echo $value->post_title; ?></span></span>
			<!--</div>-->
		  </a>	

		  <div class="modal fade" id="myModal_<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo $value->post_title; ?></h4>
				<span class="mini-text"><?php echo date('F, dS Y',strtotime($value->post_date)); ?></span>
				<span class="mini-text"><?php echo $cat->name; ?></span>
			  </div>
			  <div class="modal-body">
			  	<img class="news-article-img" src="<?php echo $post_img; ?>"></img>
			  	<p><?php echo $value->post_content; ?></p>
			  </div>
			</div>
		  </div>
		</div>		
		<?php } ?>
	</div>	
</article>
</section>
<style>
.site-footer {
	bottom: 0;
}
</style>
<script src="../wp-content/themes/christophe/js/imagesloaded.pkgd.min.js"></script>
<script src="../wp-content/themes/christophe/js/isotope.pkgd.min.js"></script>
<script type="text/javascript">

	var container = $('.grid');
	var $grid;

		$grid = container.isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			filter: '.Christophe_Buecher'
		});
		
$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});
$('.filter-button-group button:first-child').addClass('active');
$grid.isotope({ filter: '.Christophe_Buecher' });
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
  $('.filter-button-group button').removeClass('active');
  $(this).addClass('active');
});
/*$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();*/
$('#menu .portfolio img').attr("src","../wp-content/themes/christophe/images/portfolio_dark.png");
$('#menu .portfolio .menu-item').addClass('active');
$('.portfolio-image').hover(function(){
		$(this).children('.portfolio-image .outer').show();
	}, function(){
		$(this).children('.portfolio-image .outer').hide();
	});
</script>

<?php get_footer(); ?>
</div>
