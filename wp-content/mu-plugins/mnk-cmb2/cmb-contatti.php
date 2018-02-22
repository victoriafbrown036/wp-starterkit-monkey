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
* INIZIO DICHIARAZIONE CMB2 - 
*********************************************************/
add_filter( 'cmb2_init', 'contatti_tabs_metaboxes' );

function contatti_tabs_metaboxes() {
    $box_options = array(
        'id'           => 'contatti_tabs_metaboxes',
        'title'        => 'SHORCTCODE (CF7)',
        'object_types' => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => array( 'page-contatti.php' ) ),
        'show_names'   => true,
        'closed'       => true, // true to keep the metabox closed by default
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
        'title'  => 'Shortcode',


        /**********************************
        * TAB 1 - CAMPI
        **********************************/
        'fields' => array(


            /**********************************
            * TAB 1 - GRUPPO RIPETIBILI
            **********************************/
            array(
                'name' => 'Shortcode',
                'id'   => 'contatti_cf7_shortcode',
                'type' => 'text',
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