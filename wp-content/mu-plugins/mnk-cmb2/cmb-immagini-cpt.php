<?php
/**
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 *
 */

/**********************************************************************************
* CMB2 + CMB2 TAB GITHUB PLUGIN
*
* Installare il plugin per i tab per funzionare correttamente 
***********************************************************************************/

/*********************************************************
* INIZIO DICHIARAZIONE CMB2 - HOME BANNER 
*********************************************************/
add_filter( 'cmb2_init', 'immagini_cpt_tabs_metaboxes' );

function immagini_cpt_tabs_metaboxes() {
    $box_options = array(
        'id'           => 'immagini_cpt_tabs_metaboxes',
        'title'        => 'CARICAMENTO IMMAGINI',
        'object_types' => array( 'prodotti', 'realizzazioni' ),
        'show_names'   => true,
        'closed'     => false, // true to keep the metabox closed by default
    );

    // Setup meta box
    $cmb = new_cmb2_box( $box_options );

    // setting tabs
    $tabs_setting           = array(
        'config' => $box_options,
        'layout' => 'horizontal', // Default : vertical
        'tabs'   => array()
    );

/*******************************************
* TAB 1 - DICHIARAZIONE (HERO SLIDER - OWL)
*******************************************/
    $tabs_setting['tabs'][] = array(
        'id'     => 'tab1',
        'title'  => 'Immagini',


        /**********************************
        * TAB 1 - CAMPI
        **********************************/
        'fields' => array(


            /**********************************
            * TAB 1 - GRUPPO RIPETIBILI
            **********************************/
            array(
                'name'         => 'Seleziona immagini',
                'desc'         => 'Caricare immagini 477x340 px ',
                'id'           => 'immagini_imgs',
                'type'         => 'file_list',
                // Optional:
                'options' => array(
                    'url' => false, // Hide the text input for the url
                ),
                'text'    => array(
                    'add_upload_file_text' => 'Aggiungi o Carica slide' // Change upload button text. Default: "Add or Upload File"
                )
            )
        )
    );

    // set tabs
    $cmb->add_field( array(
        'id'   => '__tabs',
        'type' => 'tabs',
        'tabs' => $tabs_setting
    ) );
}