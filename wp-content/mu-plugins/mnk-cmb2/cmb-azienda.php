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
add_filter( 'cmb2_init', 'azienda_tabs_metaboxes' );

function azienda_tabs_metaboxes() {
    $box_options = array(
        'id'           => 'azienda_tabs_metaboxes',
        'title'        => 'CONFIGURAZIONE',
        'object_types' => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => array( 'page-azienda.php' ) ),
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
* TAB 1 - DICHIARAZIONE (HERO SLIDER - OWL) // STATICA
*******************************************/
    $tabs_setting['tabs'][] = array(
        'id'     => 'tab1',
        'title'  => 'Sottotitolo',


        /**********************************
        * TAB 1 - CAMPI
        **********************************/
        'fields' => array(


            /**********************************
            * TAB 1 - GRUPPO RIPETIBILI
            **********************************/
            array(
                'name' => 'Testo',
                'id'   => 'azienda_sottotitolo',
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 5,
                    'media_buttons' => false,
                ),
            ),

        )
    );

/*******************************************
* TAB 2 - DICHIARAZIONE (INTRO)
*******************************************/
    $tabs_setting['tabs'][] = array(
        'id'     => 'tab2',
        'title'  => 'Immagine',

        /**********************************
        * TAB 2 - CAMPI
        **********************************/
        'fields' => array(
            /********************
            * AZIENDA
            ********************/

            array(
                'name'                 => 'Immagine',
                'desc'                 => 'Caricare immagini max. 1700x956 px ',
                'id'                   => 'azienda_immagine',
                'type'                 => 'file',
                // Optional:
                'options'              => array(
                    'url'                  => false, // Hide the text input for the url
                ),
                'text'                 => array(
                    'add_upload_file_text' => 'Aggiungi o Carica immagine' // Change upload button text. Default: "Add or Upload File"
                )
            ),
        )
    );

    // set tabs
    $cmb->add_field( array(
        'id'   => '__tabs',
        'type' => 'tabs',
        'tabs' => $tabs_setting
    ) );
}