<div id="container">
<?php
/**
 * Template Name: Experiance Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */

$parentargs = array('name' => 'ExperienceCategory','hide_empty' => '0');
$parentcategories = get_categories( $parentargs );

$subargs = array('child_of' => $parentcategories['0']->cat_ID,'hide_empty' => '0',);
$subcategories = get_categories( $subargs );
$grp =array();
foreach ($subcategories as $key => $value) {
	$grp[$value->cat_ID] = $value->cat_name.'!@#'.$value->description;	
}
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
			<p></p>
			<br/>
		</div>		
		<?php foreach ($grp as $key => $grpvalue) { ?>
		<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="exp-head col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-offset-3 col-sm-6 col-xs-12">
				<?php $exparr = explode('!@#', $grpvalue);
					echo $exparr['0'];
					$fullquery = "SELECT * FROM `wp_experience` WHERE 1 AND `exp_cat` = ".$key." AND `exp_to` != '0000-00-00 00:00:00' ORDER BY `wp_experience`.`exp_to` DESC ";
					$fulldata = $wpdb->get_results($fullquery, ARRAY_A);
					$onequery = "SELECT * FROM `wp_experience` WHERE 1 AND `exp_cat` = ".$key." AND `exp_to` = '0000-00-00 00:00:00' ORDER BY `wp_experience`.`exp_from` DESC ";
					$onedata = $wpdb->get_results($onequery, ARRAY_A);
					$fullclean = array_merge($onedata,$fulldata);
				?>				
				<br/>
				<span><?php echo _e($exparr['1']);?></span>
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
					<h5><?php echo "<br/>"; $exp_title = json_decode($value['exp_title']); echo $desc_full_tit =($exp_title->$lang)?$exp_title->$lang:$exp_title->fr; ?></h5>
					<?php $exp_desc = json_decode($value['exp_desc']); $desc_full_content = ($exp_desc->$lang)?$exp_desc->$lang:$exp_desc->fr; ?>
					<a data-toggle="modal" data-target="#myModal_<?php echo $value['id']; ?>" ><?php echo substr($desc_full_content, 0, 200).'...';?></a>
				</div>
			</div>

			<div class="modal fade" id="myModal_<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><?php echo $desc_full_tit; ?></h4>
				  </div>
				  <div class="modal-body">				  	
				  	<p><?php echo $desc_full_content; ?></p>
				  </div>
				</div>
			  </div>
			</div>

		</div>	
		<?php } } ?>		


		<div class="row col-lg-12 col-md-12  col-sm-12 col-xs-12">
			<div class="exp-tail col-lg-6 col-md-6  col-sm-6 col-xs-6">				
			</div>
			<span class="milestone-small"></span>
		</div>
	</article>
</section>
<script>
$('#menu .experience img').attr("src","../wp-content/themes/christophe/images/experience_dark.png");
$('#menu .experience .menu-item').addClass('active');
</script>

<?php
get_footer();?>
</div>