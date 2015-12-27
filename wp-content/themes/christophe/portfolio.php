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

<div class="button-group filter-button-group">
  <button data-filter="*">show all</button>
  <?php 
  foreach ($subcategories as $key => $value) { ?>    
    <button data-filter=".<?php echo str_replace(' ', '_', $value->name); ?>"><?php print_r($value->name); ?></button>  
  <?php  } ?>
</div>

<div class="grid col-md-12 col-lg-12">
  <?php foreach ($posts_array as $key => $value) {    
  $eachcat = wp_get_post_categories($value->ID); $cat = get_category($eachcat['0']); ?> 
  <div class="element-item <?php echo str_replace(' ', '_', $cat->name); ?>">
    <?php $post_img = wp_get_attachment_url( get_post_thumbnail_id($value->ID) ); ?>
    <div class="col-md-12">
      <center><img style="max-width:100%;" class="news-article-img" src="<?php echo $post_img; ?>"></img></center>
      <span><?php echo $value->post_title; ?></span>
    </div>
  </div>
  <?php } ?>
</div>

<script type="text/javascript">
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
$grid.isotope({ filter: '*' });
// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
</script>


<?php get_footer(); ?>
