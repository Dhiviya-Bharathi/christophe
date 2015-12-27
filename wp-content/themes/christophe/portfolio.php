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

$subargs = array('child_of' => $parentcategories['0']->cat_ID,'hide_empty' => 0,);
$subcategories = get_categories( $subargs );

$args = array(  
  'orderby'          => 'date',
  'category_name'    => 'portfolio',
  'order'            => 'DESC',   
  'post_status'      => 'publish',
  'suppress_filters' => true 
);

$posts_array = get_posts( $args ); 

get_header();?>
<script src="../wp-content/themes/christophe/js/isotope.pkgd.min.js"></script>

<section class="portfolio-section">
<article class="container">
	<h6>Portfolio</h6>
	<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>	
	<div class="button-group filter-button-group">
	  <button class="button" data-filter="*">show all</button>
	  <?php 
	  foreach ($subcategories as $key => $value) { ?>    
		<button class="button" data-filter=".<?php print_r($value->name); ?>"><?php print_r($value->name); ?></button>  
	  <?php  } ?>
	</div>
	<div class="row grid">
		  <?php foreach ($posts_array as $key => $value) {    
		  $eachcat = wp_get_post_categories($value->ID); $cat = get_category($eachcat['0']); ?> 
		  <div class="element-item col-md-4 col-lg-3 col-sm-6 col-xs-12 <?php print_r($cat->name); ?>">
			<?php $post_img = wp_get_attachment_url( get_post_thumbnail_id($value->ID) ); ?>
			<div data-toggle="modal" data-target="#myModal" class="portfolio-image col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  <center><img style="max-width:100%;" class="news-article-img" src="<?php echo $post_img; ?>"></img></center>
			  <span class="outer"><span class="inner"><?php echo $value->post_title; ?></span></span>
			</div>
		  </div>		
		  <?php } ?>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
</article>
</section>
<script type="text/javascript">
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();
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