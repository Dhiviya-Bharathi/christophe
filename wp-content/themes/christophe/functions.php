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

	if($_POST['home_name'])
	update_option('home_name',$_POST['home_name']);
	if($_POST['home_title'])
	update_option('home_title',$_POST['home_title']);
	if($_POST['home_btn'])
	update_option('home_btn',$_POST['home_btn']);	

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
	echo $_GET['id'];
	echo $_GET['edit'];
	echo $_GET['del'];
	print_r($_POST);
	include_once 'admin/exp_page_settingpage.php';
}

add_theme_support( 'post-thumbnails' );