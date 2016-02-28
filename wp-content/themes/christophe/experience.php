<div id="container">
<?php
/**
 * Template Name: Experiance Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */

// $parentargs = array('id' => '6');
// $parentcategories = get_categories( $parentargs );

// print_r($parentcategories);

$fullquery = "SELECT * FROM `wp_experience` WHERE `exp_to` != '0000-00-00 00:00:00' ORDER BY `wp_experience`.`exp_to` DESC ";
$fulldata = $wpdb->get_results($fullquery, ARRAY_A);

$onequery = "SELECT * FROM `wp_experience` WHERE `exp_to` = '0000-00-00 00:00:00' ORDER BY `wp_experience`.`exp_from` DESC ";
$onedata = $wpdb->get_results($onequery, ARRAY_A);

// echo "<pre>";
// print_r($onedata);
// print_r($fulldata);
$fullclean = array_merge($onedata,$fulldata);
// print_r($fullclean);
// echo "</pre>";
get_header();

$month_name=array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août",
"Septembre","Octobre","Novembre","Décembre");
?>

<section class="experience-section">
	<article class="container">		
		<?php the_title( '<h6>', '</h6>' ); ?>
		<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="exp-head col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-offset-3 col-sm-6 col-xs-12">
				<?php echo get_option('header_txt'); ?>
			</div>
		</div>
		<?php foreach ($fullclean as $key => $value) { ?>
		<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="exp-date-wrap col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="exp-date col-lg-6 col-lg-offset-4 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
					<?php $frmmonth = explode('-', $value['exp_from']); $frmmonth = ltrim($frmmonth['1'],'0');
					      $tomonth = explode('-', $value['exp_to']); $tomonth = ltrim($tomonth['1'],'0');
					 echo $month_name[$frmmonth].' '.date('Y', strtotime($value['exp_from']));?> - <?php if(strtotime($value['exp_to'])){ echo $month_name[$tomonth].' '.date('Y', strtotime($value['exp_to']));} else { echo 'Maintenant'; } ?>
				</div>
			</div>
			<span class="milestone"></span>
			<div class="exp-role-wrap col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="exp-role col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12">
					<h5><?php echo $value['exp_title']; ?></h5>
					<p><?php echo $value['exp_desc']; ?></p>
				</div>
			</div>
		</div>	
		<?php } ?>
		<div class="row col-lg-12 col-md-12  col-sm-12 col-xs-12">
			<div class="exp-tail col-lg-6 col-md-6  col-sm-6 col-xs-6">				
			</div>
			<span class="milestone-small"></span>
		</div>
	</article>
</section>
<script>
/*$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();*/
$('#menu .experience img').attr("src","../wp-content/themes/christophe/images/experience_dark.png");
$('#menu .experience .menu-item').addClass('active');
</script>

<?php
get_footer();?>
</div>