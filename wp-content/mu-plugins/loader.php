<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage mu-plugins
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/

/***********************************************************************************************************************************************
* MU-PLUGINS
* loader.php = this file is used to load external files/plugins
* every external file is a module with its own function: i.e. '/mnk-admin-custom-dashboard/mnk-admin-custom-dashboard.php' customize login page.
* A mu-plugin has to be a module/plugin that can be used with every theme. 
************************************************************************************************************************************************/

/**********************
* THESE FILES DOESN'T NEED A SITE SPECIFIC CONFIGURATIONS
**********************/
require WPMU_PLUGIN_DIR.'/mnk-head-removecrap/mnk-head-removecrap.php';
require WPMU_PLUGIN_DIR.'/mnk-login-customize/mnk-login-customize.php';
require WPMU_PLUGIN_DIR.'/mnk-admin-custom-dashboard/mnk-admin-custom-dashboard.php';

/**********************
* THESE FILES NEEDS A SITE SPECIFIC CONFIGURATIONS
**********************/
//require WPMU_PLUGIN_DIR.'/mnk-wpcpt/mnk-wpcpt.php';
//require WPMU_PLUGIN_DIR.'/mnk-cmb2/cmb2-loader.php';
?>