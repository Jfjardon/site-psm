<?php
/*
Plugin Name: Réglages PSM
Plugin Url : No url at the moment
Description: Plugin de réglages supplémentaires spécifiques au thème PSM Montbéliard
Version: 1.0
Author: Jeff Jardon
License: Free to use, in developpement
*/

include plugin_dir_path(__FILE__) . 'class/PSM_Settings_class.php';
include plugin_dir_path(__FILE__). 'class/PSM_Settings_AdminPanel.php';
include plugin_dir_path(__FILE__). 'class/PSM_Settings_Default_Settings.php';


//Plugin activation
function PSM_Settings_activate() {
    add_option( 'Activated_Plugin', 'PSM_Settings' );
}
register_activation_hook( __FILE__, 'PSM_Settings_activate' );
//Will set the default values on plugin load
add_action( 'admin_init', array('PSM_Settings_Default_Settings','load_plugin'));
