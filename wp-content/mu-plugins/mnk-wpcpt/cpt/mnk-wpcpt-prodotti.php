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
* @link http://codex.wordpress.org/Function_Reference/register_post_type#Parameters
*/

/***************************************************************************************
* CUSTOM POST TYPE (CPT)
***************************************************************************************/
/************************************************************
* NOME CUSTOM POST TYPE: prodotti
************************************************************/

function cpt_prodotti() {

	$labels = array(
		'name'                => __( 'Prodotti', 'plugin-cpt' ),
		'singular_name'       => __( 'Prodotto', 'plugin-cpt' ),
		'add_new'             => _x( '+ Prodotto', 'plugin-cpt', 'plugin-cpt' ),
		'add_new_item'        => __( '+ Prodotto', 'plugin-cpt' ),
		'edit_item'           => __( 'Modifica Prodotto', 'plugin-cpt' ),
		'new_item'            => __( '+ Prodotto', 'plugin-cpt' ),
		'view_item'           => __( 'Vedi Prodotto', 'plugin-cpt' ),
		'search_items'        => __( 'Cerca Prodotto', 'plugin-cpt' ),
		'not_found'           => __( 'Prodotto non trovato', 'plugin-cpt' ),
		'not_found_in_trash'  => __( 'Prodotto non trovato nel cestino', 'plugin-cpt' ),
		'parent_item_colon'   => __( 'Prodotto:', 'plugin-cpt' ),
		'menu_name'           => __( 'Prodotti', 'plugin-cpt' ),
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'prodotti' ),
		'supports'            => array( 'title', 'editor', 'comments', 'excerpt', 'thumbnail' ),
		'menu_icon'           => 'dashicons-carrot',
		'description'         => 'Prodotti Prodotti Azienda',
	);

	register_post_type( 'prodotti', $args );
}

add_action( 'init', 'cpt_prodotti' );

?>