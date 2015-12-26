<?php
/**
 * Template Name: Port-Folio Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */

get_header();?>
<script src="../wp-content/themes/christophe/js/isotope.pkgd.min.js"></script>
<section class="portfolio-section">
<div class="button-group filter-button-group">
  <button data-filter="*">show all</button>
  <button data-filter=".metal">metal</button>
  <button data-filter=".transition">transition</button>
  <button data-filter=".alkali, .alkaline-earth">alkali & alkaline-earth</button>
  <button data-filter=":not(.transition)">not transition</button>
  <button data-filter=".metal:not(.transition)">metal but not transition</button>
</div>

<div class="grid">
  <div class="element-item transition metal">transition</div>
  <div class="element-item post-transition metal">...</div>
  <div class="element-item alkali metal">.alkali..</div>
  <div class="element-item transition metal">...</div>
  <div class="element-item lanthanoid metal inner-transition">..lanthanoid.</div>
  <div class="element-item halogen nonmetal">.halogen..</div>
  <div class="element-item alkaline-earth metal">..alkaline.</div>
</div>
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
</script>
<?php get_footer(); ?>
