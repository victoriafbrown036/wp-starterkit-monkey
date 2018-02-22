<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage understrap
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/
/*******************************************************************************
* FIX 
*******************************************************************************/
if ( ! isset( $content_width ) ) {
	$content_width = 883; /* pixels */
	// lo utilizzo per settare la misura massima degli oEmbed (Youtube, Vimeo, ecc.)
	// info: http://www.wpbeginner.com/wp-themes/how-to-set-oembed-max-width-in-wordpress-3-5-with-content_width/
}

if ( ! function_exists( 'mnk_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mnk_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on understrap, use a find and replace
	 * to change 'understrap' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mnkLang', get_template_directory() . '/wp-assets/languages' );

	// Add default posts and comments RSS feed links to head.
	// add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
    
    /*
	 * Adding Thumbnail basic support
	 */
    add_theme_support( "post-thumbnails" );
}
endif; // understrap_setup

add_action( 'after_setup_theme', 'mnk_setup' );