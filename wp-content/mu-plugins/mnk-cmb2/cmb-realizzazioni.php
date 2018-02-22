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
add_filter( 'cmb2_init', 'realizzazioni_cpt_tabs_metaboxes' );

function realizzazioni_cpt_tabs_metaboxes() {
    $box_options = array(
        'id'           => 'realizzazioni_cpt_tabs_metaboxes',
        'title'        => 'DATI SCHEDA REALIZZAZIONE',
        'object_types' => array( 'realizzazioni' ),
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
* TAB 1 - CLIENTE
*******************************************/
    $tabs_setting['tabs'][] = array(
        'id'     => 'tab1',
        'title'  => 'Cliente',


        /**********************************
        * TAB 1 - CAMPI
        **********************************/
        'fields' => array(


            /**********************************
            * TAB 1 - GRUPPO RIPETIBILI
            **********************************/
            array(
                'name'    => 'Nome cliente',
                'default' => 'Nome Cliente',
                'id'      => 'realizzazione_cliente',
                'type'    => 'text',
            ),
        )
    );

/*******************************************
* TAB 2 - DATA
*******************************************/
    $tabs_setting['tabs'][] = array(
        'id'     => 'tab2',
        'title'  => 'Data',


        /**********************************
        * TAB 1 - CAMPI
        **********************************/
        'fields' => array(


            /**********************************
            * TAB 1 - GRUPPO RIPETIBILI
            **********************************/
            array(
                'name'    => 'Anno Realizzazione',
                'default' => '0000',
                'id'      => 'realizzazione_data',
                'type'    => 'text',
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