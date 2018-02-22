<?php
 
/**
 * Admin related initializations
 */
 
/*********************************************************************************
 * Titan Framework Required to be installed
 *
 * It adds Titan Framework as a plugin
 *
 * http://www.titanframework.net/get-started/
 ********************************************************************************/
 
if ( file_exists( get_template_directory() .'/inc/titan-framework/titan-framework-checker.php') ) {
     
    require_once get_template_directory() . '/inc/titan-framework/titan-framework-checker.php';
     
}
 
/*********************************************************************************
 * Create an options via Titan Framework
 *
 * http://www.titanframework.net/get-started/
 ********************************************************************************/
 
// Admin panel options.
if ( file_exists( get_template_directory() .'/inc/titan-framework/options/adminpanel-options-init.php') ) {
     
    require_once( get_template_directory() .'/inc/titan-framework/options/adminpanel-options-init.php' );
     
}
 
// Metabox options.
// if ( file_exists( get_template_directory() .'/inc/titan-framework/options/metabox-options-init.php') ) {
     
//     require_once( get_template_directory() .'/inc/titan-framework/options/metabox-options-init.php' );
     
// }
 
// Customizer options.
// if ( file_exists( get_template_directory() .'/inc/titan-framework/options/customizer-options-init.php') ) {
     
//     require_once( get_template_directory() .'/inc/titan-framework/options/customizer-options-init.php' );
     
// }

?>