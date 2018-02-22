<?php
/**
 * Rem + Add || DEFAULT THUMBNAILS || remove + add
 *
 * @package   monkeystudio
 * @author    Ronny Briolotti <ronny@monkey-theatre.com>
 * @license   GPL-2.0+
 * @link      https:
 * @copyright 2015 Ronny Briolotti, Monkey Theatre Studio
 *
 * @wordpress-plugin
 * Plugin Name:       MNK || DEFAULT THUMBNAILS || remove
 * Plugin URI:        https:
 * Description:       Remove default WP Thumbnails (Media) - 'thumbnails', 'medium', 'large' and let you add custom thumbnails size.
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
 * monkeystudio Remove default WP Thumbnails (Media)
 *
 * @version 1.0 (13/08/2015)
 * @package monkeystudio
 */

/**
*************************************************************************************
*
* REMOVE: DEFAULT THUMBNAILS ('thumbnails', 'medium', 'large')
*
* Note: WordPress uses the thumbnail image size for galleries, so if you set that to 0 or unset it, 
* then your future gallery display may not work properly.
*
* @link http://www.wpmayor.com/remove-image-sizes-in-wordpress/
* @link http://codex.wordpress.org/it:Riferimento_funzioni/add_image_size
* @link http://www.wpbeginner.com/wp-tutorials/how-to-prevent-wordpress-from-generating-image-sizes/
* 
*
***************************************************************************************/

/* UNSET DEFAULT IMAGES */
function mnk_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'mnk_remove_default_image_sizes');





/* SET HERE YOUR CUSTOM SIZE */
function mnk_add_custom_thumbnails_size() {
	if ( function_exists( 'add_image_size' ) ) { 
		//add_image_size( 'category-single-loop-thumb', 430, 9999 ); // larghezza 300 pixel (e altezza illimitata)
		add_image_size( 'servizi-loop-thumb'    , 263, 240, true ); // (togli "true" non ritagliata)
		add_image_size( 'associati-loop-thumb'  , 165, 129, true ); // (ritagliata)
		add_image_size( 'associati-single-thumb', 345, 393, true ); 
		add_image_size( 'servizi-single-thumb'  , 223, 208, true ); 
		add_image_size( 'organismi-loop-thumb'  , 263, 236, true );
	}
}
add_action('init', 'mnk_add_custom_thumbnails_size' );




/* CHOSE WHICH IMAGE SIZE SHOW ON "IMAGE INSERTION SCREEN"*/
// function mnk_custom_image_sizes($sizes) {
// $myimgsizes = array(
// 'custom-size-1' => __( 'Size Custom 1', 'monkeystudio'  ),
// 'custom-size-2' => __( 'Size Custom 2', 'monkeystudio' )
// );
// return $myimgsizes;
// }
// add_filter('image_size_names_choose', 'mnk_custom_image_sizes');

?>