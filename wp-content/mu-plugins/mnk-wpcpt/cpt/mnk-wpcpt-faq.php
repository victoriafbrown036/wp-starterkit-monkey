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
* NOME CUSTOM POST TYPE: domande-frequenti
************************************************************/

function cpt_faq() {

	$labels = array(
		'name'                => __( 'Domande Frequenti', 'plugin-cpt' ),
		'singular_name'       => __( 'Risposta', 'plugin-cpt' ),
		'add_new'             => _x( '+ Risposta', 'plugin-cpt', 'plugin-cpt' ),
		'add_new_item'        => __( '+ Risposta', 'plugin-cpt' ),
		'edit_item'           => __( 'Modifica Risposta', 'plugin-cpt' ),
		'new_item'            => __( '+ Risposta', 'plugin-cpt' ),
		'view_item'           => __( 'Vedi Risposta', 'plugin-cpt' ),
		'search_items'        => __( 'Cerca Risposta', 'plugin-cpt' ),
		'not_found'           => __( 'Risposta non trovato', 'plugin-cpt' ),
		'not_found_in_trash'  => __( 'Risposta non trovato nel cestino', 'plugin-cpt' ),
		'parent_item_colon'   => __( 'Risposta:', 'plugin-cpt' ),
		'menu_name'           => __( 'FAQ', 'plugin-cpt' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => true, /* true = page // false = post */
		'has_archive'		  => true, /* true = mostra archive-cpt.php // false = no */
		'description'         => 'Risposte alle domande frequenti',
		'taxonomies'          => array(),
		'public'              => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-sos',
		'query_var'           => true,
		'can_export'          => true,
		'supports'            => array( 'title', 'editor'	)
	);



	register_post_type( 'domande-frequenti', $args );
}

add_action( 'init', 'cpt_faq' );

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
* NOME TASSONOMIA DICHIARATA: cat_faq
************************************************************/

function mnk_taxonomies_faq() {

	$labels = array(
		'name'					=> _x( 'Cat FAQ', 'Taxonomy plural name', 'plugin-cpt' ),
		'singular_name'			=> _x( 'Categoria', 'Taxonomy singular name', 'plugin-cpt' ),
		'search_items'			=> __( 'Cerca Categoria', 'plugin-cpt' ),
		'popular_items'			=> __( 'Categoria più usata', 'plugin-cpt' ),
		'all_items'				=> __( 'Tutte le categorie', 'plugin-cpt' ),
		'parent_item'			=> __( 'Categoria', 'plugin-cpt' ),
		'parent_item_colon'		=> __( 'Categoria', 'plugin-cpt' ),
		'edit_item'				=> __( 'Modifica Categoria', 'plugin-cpt' ),
		'update_item'			=> __( 'Aggiorna Categoria', 'plugin-cpt' ),
		'add_new_item'			=> __( 'Aggiungi Nuova Categoria', 'plugin-cpt' ),
		'new_item_name'			=> __( 'Nuova Categoria', 'plugin-cpt' ),
		'add_or_remove_items'	=> __( 'Aggiungi o Rimuovi Categoria', 'plugin-cpt' ),
		'choose_from_most_used'	=> __( 'Scegli tra le Categorie più usate', 'plugin-cpt' ),
		'menu_name'				=> __( 'Cat FAQ', 'plugin-cpt' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'query_var'         => true,
	);

	register_taxonomy( 'cat_faq', array( 'domande-frequenti' ), $args );
}

add_action( 'init', 'mnk_taxonomies_faq' );

// END PHP ?>