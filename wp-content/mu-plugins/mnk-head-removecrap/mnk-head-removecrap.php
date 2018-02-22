<?php
/**
 * Remove || HEAD || Version from Enqueued script, Emoji and Crap. 
 *
 * @package   monkeystudio
 * @author    Ronny Briolotti <ronny@monkey-theatre.com>
 * @license   GPL-2.0+
 * @link      https:
 * @copyright 2015 Ronny Briolotti, Monkey Theatre Studio
 *
 * @wordpress-plugin
 * Plugin Name:       MNK || HEAD || Remove
 * Plugin URI:        https:
 * Description:       Remove versions from enqueued script and crap from head created by <strong>Monkey Theatre Studio</strong>.
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
 * monkeystudio Remove Version and Crap from Head
 *
 * @version 1.0 (13/08/2015)
 * @package monkeystudio
 */

/**
*************************************************************************************
*
* ADD: REMOVE HEAD CRAP
*
* @link http://wpengineer.com/1438/wordpress-header/
* @link http://orbitingweb.com/blog/remove-unnecessary-tags-wp-head/
*
***************************************************************************************/

function monkeystudio_removefromhead() {
    remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
	remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
	remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
	remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
	remove_action( 'wp_head', 'index_rel_link' ); // index link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
	//remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );  Display relational links for the posts adjacent to the current post.
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // "adjacent_posts_rel_link" from WP 3.0
	remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
	remove_action( 'wp_head', 'profile' ); // Display the XHTML generator that is generated on the wp_head hook, WP version

	// REMOVE WP 4.2 EMOJI
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
} 

add_action('init', 'monkeystudio_removefromhead');


/**
*************************************************************************************
*
* ADD: REMOVE VER= FROM ENQUEUED SCRIPT
* Remove wp version param from any enqueued scripts
*
* @link http://www.virendrachandak.com/techtalk/how-to-remove-wordpress-version-parameter-from-js-and-css-files/#ixzz3FqjqmFTB
*
***************************************************************************************/

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
?>