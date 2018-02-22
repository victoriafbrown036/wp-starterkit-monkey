<?php
/**
*
* @package    WordPress
* @subpackage Blank Monkey Standard
* @since      0.0.1
* @version    0.0.1
* @author     Ronny Briolotti
*
*
* @link 
*/

/*******************************************************************************
* SIDEBAR (Dichiarare qui le sidebar create ad-hoc per il progetto) 
*******************************************************************************/ 

function mnk_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar Standard',
		'id'            => 'sidebar',
		'description'   => 'Master per una sidebar standard',
		'before_widget' => '<div class="contenitori-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="titolo-widget">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'mnk_widgets_init' );