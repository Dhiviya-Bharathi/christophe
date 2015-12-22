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
	include_once 'admin/home_page_settingpage.php';
}

function EXP_Page_Settings(){
	include_once 'admin/exp_page_settingpage.php';
}