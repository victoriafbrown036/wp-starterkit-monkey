<?php
/**
*
* @package Blank Monkey Standard 
* @version 0.0.1
* @author  Ronny Briolotti
*/

/****************************************************
* CUSTOM POST TYPE + CUSTOM TAXONOMY
*
* @package mu-plugins/load.php
* @idea https://premium.wpmudev.org/blog/create-wordpress-plugin/
*
****************************************************/      

/************************************************************
* DECLARE PO/MO FOLDER for MU-PLUGIN
************************************************************/
function myplugin_muload_textdomain() {
	load_muplugin_textdomain( 'plugin-cpt', basename( dirname(__FILE__) ) . '/cpt/languages' );
}

add_action( 'plugins_loaded', 'myplugin_muload_textdomain' );


/************************************************************
* CUSTOM POST TYPE
************************************************************/

include_once( plugin_dir_path( __FILE__ ) . 'cpt/mnk-wpcpt-prodotti.php');
include_once( plugin_dir_path( __FILE__ ) . 'cpt/mnk-wpcpt-realizzazioni.php');
// include_once( plugin_dir_path( __FILE__ ) . 'cpt/mnk-wpcpt-faq.php');

?>