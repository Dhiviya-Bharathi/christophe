<?php 

add_action('admin_menu', 'Home_Menu');
/*
 *  submenu Fn added under Theme(Apperance Home menu)
 */
function Home_Menu() {
	add_submenu_page('themes.php', 'Home Page Settings', 'Home Page Settings', 'manage_options', 'Home_Page_Settings', 'Home_Page_Settings');
}


add_action('admin_menu', 'exp_Menu');
/*
 *  submenu Fn added under Theme(Apperance main menu)
 */
function exp_Menu() {
	add_submenu_page('themes.php', 'Experience Page Settings', 'Experience Page Settings', 'manage_options', 'EXP_Page_Settings', 'EXP_Page_Settings');
}


function Home_Page_Settings(){
	global $_FILES,$wpdb;

	if($_POST['header_txt'])
	update_option('header_txt',$_POST['header_txt']);
	if($_POST['home_name'])
	update_option('home_name',$_POST['home_name']);
	if($_POST['home_title'])
	update_option('home_title',$_POST['home_title']);
	if($_POST['home_btn'])
	update_option('home_btn',$_POST['home_btn']);
	if($_POST['home_btn_url'])
	update_option('home_btn_url',$_POST['home_btn_url']);	
	if($_POST['foot_copy'])
	update_option('foot_copy',$_POST['foot_copy']);
	if($_POST['fb_url'])
	update_option('fb_url',$_POST['fb_url']);
	if($_POST['twt_url'])
	update_option('twt_url',$_POST['twt_url']);
	if($_POST['link_url'])
	update_option('link_url',$_POST['link_url']);	

	if($_FILES['home_bg']['name']){
		$destinationPath = str_replace('/', '\\', plugin_dir_path(__FILE__));
		$destinationPath = $destinationPath.'images\\';
		$old = $destinationPath.get_option('home_bg');
		if(file_exists($old)){
			unlink($old);
		}
		$ext = explode('.', $_FILES['home_bg']['name']);
		$modifiiedfilename = 'home_image.'.$ext['1'];
		$destinationPath= $destinationPath.$modifiiedfilename;

		if (move_uploaded_file($_FILES["home_bg"]["tmp_name"], $destinationPath)) {	
			update_option('home_bg',$modifiiedfilename);
		}
	}
	include_once 'admin/home_page_settingpage.php';
}

function EXP_Page_Settings(){	
	global $wpdb;	

	$fullquery = "SELECT * FROM `wp_experience`";
	$fulldata = $wpdb->get_results($fullquery, ARRAY_A);	
	

	if($_GET['edit']){
		$oldid = $_GET['edit'];
		$where = "1 AND id=".$oldid;
		$query = "SELECT * FROM `wp_experience` WHERE `id` =".$oldid;
		$olddata = $wpdb->get_results($query, ARRAY_A);	
		$olddata = $olddata['0'];			
	}elseif($_GET['del']){		
			$query = "DELETE FROM `wp_experience` WHERE `id` =".$_GET['del'];
			$wpdb->get_results($query);	
			echo "Deleted Successfully";
	}

	if($_POST){		
		$exp_from = date('Y-m-d H:i:s' , strtotime($_POST['exp_from']));
		$exp_to = date('Y-m-d H:i:s' , strtotime($_POST['exp_to']));
		$exp_title = $_POST['exp_title'];
		$exp_desc = $_POST['exp_desc'];
		$oldid = $_POST['old'];

		$query = "INSERT INTO `wp_experience` (
								`exp_from` ,
								`exp_to` ,
								`exp_title` ,
								`exp_desc`
								)
								VALUES (
								'$exp_from' ,
								'$exp_to' ,
								'$exp_title',
								'$exp_desc'
								)";
		if($oldid){
		$query = "UPDATE `wp_experience` SET 
					 `exp_from` = '$exp_from' ,
					 `exp_to` = '$exp_to' ,
					 `exp_title` = '$exp_title' ,
					 `exp_desc` = '$exp_desc' 
					 WHERE `id` =".$oldid;
		}
		
		$wpdb->get_results( $query );  
		echo "Table updated Successfully";
	}

	include_once 'admin/exp_page_settingpage.php';
}

add_theme_support( 'post-thumbnails' );