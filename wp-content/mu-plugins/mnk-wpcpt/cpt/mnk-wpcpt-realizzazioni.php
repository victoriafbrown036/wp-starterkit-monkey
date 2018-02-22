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
* NOME CUSTOM POST TYPE: catalogo
************************************************************/

function cpt_realizzazioni() {

	$labels = array(
		'name'                => __( 'Realizzazioni', 'plugin-cpt' ),
		'singular_name'       => __( 'Realizzazione', 'plugin-cpt' ),
		'add_new'             => _x( '+ Realizzazione', 'plugin-cpt', 'plugin-cpt' ),
		'add_new_item'        => __( '+ Realizzazione', 'plugin-cpt' ),
		'edit_item'           => __( 'Modifica Realizzazione', 'plugin-cpt' ),
		'new_item'            => __( '+ Realizzazione', 'plugin-cpt' ),
		'view_item'           => __( 'Vedi Realizzazione', 'plugin-cpt' ),
		'search_items'        => __( 'Cerca Realizzazione', 'plugin-cpt' ),
		'not_found'           => __( 'Realizzazione non trovato', 'plugin-cpt' ),
		'not_found_in_trash'  => __( 'Realizzazione non trovato nel cestino', 'plugin-cpt' ),
		'parent_item_colon'   => __( 'Realizzazione:', 'plugin-cpt' ),
		'menu_name'           => __( 'Realizzazioni', 'plugin-cpt' ),
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
		'rewrite'             => array( 'slug' => 'archivio-realizzazioni' ),
		'supports'            => array( 'title', 'editor', 'comments', 'excerpt', 'thumbnail' ),
		'menu_icon'           => 'dashicons-carrot',
		'description'         => 'Realizzazioni',
	);

	register_post_type( 'realizzazioni', $args );
}

add_action( 'init', 'cpt_realizzazioni' );



/***************************************************************************************
* TASSONOMIE
***************************************************************************************/

/**
*
* @package    WordPress
* @subpackage Blank Monkey Standard
* @since      0.0.1
* @version    0.0.1
* @author     Ronny Briolotti
*
*
* @link http://codex.wordpress.org/Function_Reference/register_taxonomy#Parameters
*/

/************************************************************
* NOME TASSONOMIA DICHIARATA: cat_stato_lavori
************************************************************/

function mnk_taxonomies_stato_lavori() {

	$labels = array(
		'name'					=> _x( 'Stato Lavori', 'Taxonomy plural name', 'plugin-cpt' ),
		'singular_name'			=> _x( 'Stato', 'Taxonomy singular name', 'plugin-cpt' ),
		'search_items'			=> __( 'Cerca Stato', 'plugin-cpt' ),
		'popular_items'			=> __( 'Stato più usata', 'plugin-cpt' ),
		'all_items'				=> __( 'Tutte le categorie', 'plugin-cpt' ),
		'parent_item'			=> __( 'Stato', 'plugin-cpt' ),
		'parent_item_colon'		=> __( 'Stato', 'plugin-cpt' ),
		'edit_item'				=> __( 'Modifica Stato', 'plugin-cpt' ),
		'update_item'			=> __( 'Aggiorna Stato', 'plugin-cpt' ),
		'add_new_item'			=> __( 'Aggiungi Nuova Stato', 'plugin-cpt' ),
		'new_item_name'			=> __( 'Nuova Stato', 'plugin-cpt' ),
		'add_or_remove_items'	=> __( 'Aggiungi o Rimuovi Stato', 'plugin-cpt' ),
		'choose_from_most_used'	=> __( 'Scegli tra le Categorie più usate', 'plugin-cpt' ),
		'menu_name'				=> __( 'Stato Lavori', 'plugin-cpt' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'realizzazioni' ),
	);

	register_taxonomy( 'cat_stato_lavori', array( 'realizzazioni' ), $args );
}

add_action( 'init', 'mnk_taxonomies_stato_lavori' );


/************************************************************
* NOME TASSONOMIA DICHIARATA: cat_prodotti
************************************************************/

function mnk_taxonomies_prodotti() {

	$labels = array(
		'name'					=> _x( 'Cat Prodotti', 'Taxonomy plural name', 'plugin-cpt' ),
		'singular_name'			=> _x( 'Prodotto', 'Taxonomy singular name', 'plugin-cpt' ),
		'search_items'			=> __( 'Cerca Prodotto', 'plugin-cpt' ),
		'popular_items'			=> __( 'Prodotto più usata', 'plugin-cpt' ),
		'all_items'				=> __( 'Tutte le categorie', 'plugin-cpt' ),
		'parent_item'			=> __( 'Prodotto', 'plugin-cpt' ),
		'parent_item_colon'		=> __( 'Prodotto', 'plugin-cpt' ),
		'edit_item'				=> __( 'Modifica Prodotto', 'plugin-cpt' ),
		'update_item'			=> __( 'Aggiorna Prodotto', 'plugin-cpt' ),
		'add_new_item'			=> __( 'Aggiungi Nuova Prodotto', 'plugin-cpt' ),
		'new_item_name'			=> __( 'Nuova Prodotto', 'plugin-cpt' ),
		'add_or_remove_items'	=> __( 'Aggiungi o Rimuovi Prodotto', 'plugin-cpt' ),
		'choose_from_most_used'	=> __( 'Scegli tra le Categorie più usate', 'plugin-cpt' ),
		'menu_name'				=> __( 'Cat Prodotti', 'plugin-cpt' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'query_var'         => true,
	);

	register_taxonomy( 'cat_prodotti', array( 'realizzazioni' ), $args );
}

add_action( 'init', 'mnk_taxonomies_prodotti' );


?>