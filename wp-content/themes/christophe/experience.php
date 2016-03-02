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
$en_month_name = array("","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novemeber", "December");
$fr_month_name=array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août",
"Septembre","Octobre","Novembre","Décembre");
$de_month_name=array("","Januari","Februari","maart","April","Mei","Juni","Juli","Augustus",
"Septembre","Oktobre","Novembre","December");


$month = get_option('qtranslate_default_language').'_month_name';

if(strpos($_SERVER['REQUEST_URI'], 'de/')){
	$finalmonth = $de_month_name;
	$lang = 'de';
}elseif(strpos($_SERVER['REQUEST_URI'], 'en/')){
	$finalmonth = $en_month_name;
	$lang = 'en';
}elseif(strpos($_SERVER['REQUEST_URI'], 'fr/')){
	$finalmonth = $fr_month_name;
	$lang = 'fr';
}else{
	$finalmonth = $$month;
	$lang = 'fr';
}
if(!count($finalmonth)){
	$finalmonth = $fr_month_name;
}
?>

<section class="experience-section">
	<article class="container">		
		<div class="row no-padd col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php the_title( '<h6 class="no-padd col-lg-9 col-md-9 col-sm-9 col-xs-9">', '</h6>' ); ?>
			<span class="hide no-padd col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<div class="pull-right">
					<a href="<?php echo site_url(); ?>/fr/exp">
					 <img alt="fr" src="<?php echo site_url();?>/wp-content/plugins/qtranslate-x/flags/fr.png">
					</a><a href="<?php echo site_url(); ?>/en/exp">
					 <img alt="en" src="<?php echo site_url();?>/wp-content/plugins/qtranslate-x/flags/gb.png">
					</a><a href="<?php echo site_url(); ?>/de/exp">
					 <img alt="de" src="<?php echo site_url();?>/wp-content/plugins/qtranslate-x/flags/de.png">				
					</a> 
				</div>
			</span>
		</div>
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
					 echo $finalmonth[$frmmonth].' '.date('Y', strtotime($value['exp_from']));?> - <?php if(strtotime($value['exp_to'])){ echo $finalmonth[$tomonth].' '.date('Y', strtotime($value['exp_to']));} else { echo 'Maintenant'; } ?>
				</div>
			</div>
			<span class="milestone"></span>
			<div class="exp-role-wrap col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="exp-role col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12">
					<h5><?php echo "<br/>"; $exp_title = json_decode($value['exp_title']); echo ($exp_title->$lang)?$exp_title->$lang:$exp_title->fr; ?></h5>
					<p><?php $exp_desc = json_decode($value['exp_desc']); echo ($exp_desc->$lang)?$exp_desc->$lang:$exp_desc->fr; ?></p>
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