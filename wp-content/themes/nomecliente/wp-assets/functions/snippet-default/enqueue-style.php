<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage themes
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/


/*****************************************************
    ENQUEUE STYLE
*****************************************************/
function mnk_enqueue_style() {

    // GOOGLE FONTS (SITE SPECIFIC FONT)
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans:700|Open+Sans:400,700', array(), ' ');

    // LOAD SELECTED FRAMEWORK CSS 
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/fe-assets/ui/css/bootstrap.min.css', array(), ' ');

    // WORDPRESS DEFAULT STYLE
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), ' ');
    

    /************************************
    *  REMOVE PLUGIN DEFAULT CSS STYLE
    ************************************/
    // Search&Filter plugin
    wp_dequeue_style('search-filter-plugin-styles');

};

add_action( 'wp_enqueue_scripts', 'mnk_enqueue_style' );
?>