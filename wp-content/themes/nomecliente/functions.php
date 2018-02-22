<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage themes
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/
/*******************************************************************************
* DEFAULT SETTING FILES 
*******************************************************************************/
//WP UNDERSTRAP SETUP
require_once get_template_directory() . '/wp-assets/functions/snippet-default/setup.php';

//ENQUEUE
require_once get_template_directory() . '/wp-assets/functions/snippet-default/enqueue-style.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-default/enqueue-script.php';

//ENQUEUE IE 9 Condition
require_once get_template_directory() . '/wp-assets/functions/snippet-default/enqueue-script-conditional.php';

//DEQUEUE USELESS PLUGIN STYLES
require_once get_template_directory() . '/wp-assets/functions/snippet-default/dequeue-style.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-default/dequeue-script.php';


/*******************************************************************************
* SITE SPECIFIC FILES 
*******************************************************************************/
/* require_once get_template_directory() . '/wp-assets/functions/snippet-custom/menu.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-custom/shortcode.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-custom/sidebars.php';
require_once get_template_directory() . '/wp-assets/functions/snippet-custom/widgets.php'; */


/*******************************************************************************
* SNIPPET FUNCTIONS FILES (snippets found on internet, helpfull in specific situations)
*******************************************************************************/
require_once get_template_directory() . '/wp-assets/functions/snippet-custom/snippet-functions-loader.php';


/*******************************************************************************
* TGM Plugin Activation (manage require and recommend plugins for WordPress themes) 
*******************************************************************************/
//CLASS KICK!
require_once get_template_directory() . '/wp-assets/functions/tgm/class-tgm-plugin-activation.php';
//PLUGINS TO ACTIVATE AND CONFIG
require_once get_template_directory() . '/wp-assets/functions/tgm/tgm-reqplugins-config.php';


/*******************************************************************************
* TITAN FRAMEWORK (Titan Checker) - Global options/fields
*******************************************************************************/
if ( file_exists( get_template_directory() .'/wp-assets/framework/titan-framework/titan-init.php') ) {
	require_once get_template_directory() . '/wp-assets/framework/titan-framework/titan-init.php';
}
?>