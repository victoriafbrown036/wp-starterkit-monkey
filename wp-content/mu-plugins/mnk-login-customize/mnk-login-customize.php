<?php
/**
 * Customize || LOGIN || Customize login screen and functions 
 *
 * @package   monkeystudio
 * @author    Ronny Briolotti <ronny@monkey-theatre.com>
 * @license   GPL-2.0+
 * @link      https:
 * @copyright 2015 Ronny Briolotti, Monkey Theatre Studio
 *
 * @wordpress-plugin
 * Plugin Name:       MNK || LOGIN || Customize login screen
 * Plugin URI:        https:
 * Description:       Customize login screen, logo URL link, remove password reset by <strong>Monkey Theatre Studio</strong>.
 * Version:           1.0.0
 * Author:            Ronny Briolotti
 * Author URI:        https:/
 * Text Domain:       monkeystudio
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https:
 * GitHub Branch:     master
 */

/**
 * monkeystudio Customize login screen and functions
 *
 * @version 1.0 (13/08/2015)
 * @package monkeystudio
 */

/**
*************************************************************************************
*
* CUSTOMIZE: LOGIN SCREEN AND FUNCTIONS
*
* @link http://premium.wpmudev.org/blog/create-a-custom-wordpress-login-page/
*
***************************************************************************************/

function custom_login_css() { 
	echo '<link rel="stylesheet" type="text/css" href="'. plugin_dir_url( __FILE__ ) .'css/login-styles.css" />'; 
}
add_action('login_head', 'custom_login_css');

/* LOGO URL */
function my_login_logo_url() { 
	/*return get_bloginfo( 'url' );*/
	return '//www.monkey-theatre.com';
} 
add_filter( 'login_headerurl', 'my_login_logo_url' ); 

function my_login_logo_url_title() { 
	return 'Monkey Theatre Studio progettazione siti web e temi WordPress'; 
} 
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* REMOVE CHANGE PASSWORD */
function remove_lostpassword_text ( $text ) { if ($text == 'Hai dimenticato la tua password?'){
		$text = '';
	} return $text; 
} 
add_filter( 'gettext', 'remove_lostpassword_text' );


/* Change the Redirect URL*/ 
function admin_login_redirect( $redirect_to, $request, $user ) { 
	global $user; if( isset( $user->roles ) && is_array( $user->roles ) ) 
	{ if( in_array( "administrator", $user->roles ) ) 
		{ return $redirect_to; } 
	else { return home_url(); } } 
	else { return $redirect_to; } 
} 
add_filter("login_redirect", "admin_login_redirect", 10, 3);


?>