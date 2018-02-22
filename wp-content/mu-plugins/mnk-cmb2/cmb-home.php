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
add_filter( 'cmb2_init', 'home_carousel_tabs_metaboxes' );

function home_carousel_tabs_metaboxes() {
    $box_options = array(
        'id'           => 'home_carousel_tabs_metaboxes',
        'title'        => 'CONFIGURAZIONE HOME',
        'object_types' => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => array( 'page-home.php' ) ),
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
        'title'  => 'Hero Carousel',


        /**********************************
        * TAB 1 - CAMPI
        **********************************/
        'fields' => array(


            /**********************************
            * TAB 1 - GRUPPO RIPETIBILI
            **********************************/
            array(
                'id'      => 'cmb_hero_slider_owl',
                'type'    => 'group',
                'options' => array(
                    'group_title'   => 'Slide {#}',
                    'add_button'    => 'Aggiungi slide',
                    'remove_button' => 'Rimuovi slide',
                    'sortable'      => false
                ),

                /**********************************
                * TAB 1 - CAMPI GRUPPO RIPETIBILI
                **********************************/
                'fields'  => array(
                    array(
                        'name'         => 'Immagine',
                        'desc'         => 'Caricare immagini max. 1700x956 px',
                        'id'           => 'home_banner_principale',
                        'type'         => 'file',
                        // Optional:
                        'options' => array(
                            'url' => false, // Hide the text input for the url
                        ),
                        'text'    => array(
                            'add_upload_file_text' => 'Aggiungi o Carica slide' // Change upload button text. Default: "Add or Upload File"
                        )
                    ),
                    /***************
                    * CAPTION
                    ****************/
                    array(
                        'name' => 'Testo Slide Caption',
                        'desc' => 'Area dove gestire i testi della slide',
                        'id'   => 'title_slide_principale',
                        'type' => 'title',
                    ),
                    array(
                        'name'    => 'Titolo (1^ riga)',
                        'desc'    => 'Titolo prima riga',
                        'id'      => 'home_caption_titolo_uno',
                        'type'    => 'textarea_small',
                        'default' => 'Progettiamo, realizziamo',
                    ),
                    array(
                        'name'    => 'Titolo (2^ riga)',
                        'desc'    => 'Titolo seconda riga',
                        'id'      => 'home_caption_titolo_due',
                        'type'    => 'textarea_small',
                        'default' => 'e installiamo coperture',
                    ),
                    array(
                        'name' => 'Testo',
                        'id'   => 'home_caption_testo',
                        'type' => 'wysiwyg',
                        'options' => array(
                        'textarea_rows' => 5,
                        'media_buttons' => false, // show insert/upload button(s)
                        ),
                        'default' => 'Teloni Poletti è sul mercato da oltre 30 anni come operatore qualificato nel settore delle coperture pressostatiche, tensostatiche e delle coperture con struttura portante ad archi in acciaio o legno lamellare.',
                    ),
                    array(
                        'name' => 'Bottone Testo',
                        'id'   => 'home_caption_btn_testo',
                        'type' => 'text',
                        'desc' => 'es. Leggi tutto',
                        'default' => 'Scopri i nostri prodotti',
                    ),
                    array(
                        'name' => 'Bottone URL',
                        'id'   => 'home_caption_btn_url',
                        'type' => 'text',
                        'desc' => 'es. //www.monkey-thetare.com/blog',
                        'default' => '/prodotti/',
                    ),
                )
            )

        )
    );

/*******************************************
* TAB 2 - DICHIARAZIONE (INTRO)
*******************************************/
    $tabs_setting['tabs'][] = array(
        'id'     => 'tab2',
        'title'  => 'Intro Azienda/Certificazioni',

        /**********************************
        * TAB 2 - CAMPI
        **********************************/
        'fields' => array(
            /********************
            * AZIENDA
            ********************/
            array(
                'name' => 'Box Azienda',
                'desc' => 'Testo intro azienda',
                'id'   => 'title_intro_azienda',
                'type' => 'title',
            ),
            array(
                'name' => 'Titolo',
                'id'   => 'home_intro_titolo_azienda',
                'type' => 'textarea_small',
            ),
            array(
                'name' => 'Testo',
                'id'   => 'home_intro_testo_azienda',
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 5,
                    'media_buttons' => false,
                ),
            ),
            array(
                'name' => 'Bottone URL',
                'id'   => 'home_intro_btn_url_azienda',
                'type' => 'text',
                'desc' => 'es. /azienda/',
            ),
            /********************
            * CERTIFICAZIONI
            ********************/
            array(
                'name' => 'Box certificazioni',
                'desc' => 'Testo intro certificazioni',
                'id'   => 'title_intro_certificazioni',
                'type' => 'title',
            ),
            array(
                'name' => 'Titolo',
                'id'   => 'home_intro_titolo_certificazioni',
                'type' => 'textarea_small',
            ),
            array(
                'name' => 'Testo',
                'id'   => 'home_intro_testo_certificazioni',
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 5,
                    'media_buttons' => false,
                ),
            ),
            array(
                'name' => 'Bottone URL',
                'id'   => 'home_intro_btn_url_certificazioni',
                'type' => 'text',
                'desc' => 'es. /certificazioni/',
            ),
            /********************
            * IMMAGINE AZIENDA
            ********************/
            array(
                'name' => 'Immagine Tonda',
                'id'   => 'title_intro_immagine',
                'type' => 'title',
            ),
            array(
                'name'                 => 'Immagine',
                'desc'                 => 'Caricare immagine 500x500 px ',
                'id'                   => 'home_intro_immagine',
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

/*******************************************
* TAB 3 - DICHIARAZIONE (PRODOTTI)
*******************************************/
    $tabs_setting['tabs'][] = array(
        'id'     => 'tab3',
        'title'  => 'Prodotto Speciale',

        /**********************************
        * TAB 3 - CAMPI
        **********************************/
        'fields' => array(
            /***************
            * TESTO
            ****************/
            array(
                'name'    => 'Titolo',
                'id'      => 'home_prodotti_special_titolo',
                'type'    => 'textarea_small',
                'default' => 'Strutture e coperture per paddle tennis',
            ),
            array(
                'name' => 'Testo',
                'id'   => 'home_prodotti_special_testo',
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 5,
                    'media_buttons' => false,
                ),
            ),
            /***************
            * URL BOTTONE
            ****************/
            array(
                'name' => 'URL bottone',
                'id'   => 'home_prodotti_special_btn_url',
                'type' => 'text',
                'desc' => 'es. /prodotti/paddle-tennis',
            ),
            /***************
            * IMMAGINI
            ****************/
            array(
                'name'                 => 'Immagine Piccola',
                'desc'                 => 'Caricare immagine 477x340 px ',
                'id'                   => 'home_prodotti_special_image_small',
                'type'                 => 'file',
                // Optional:
                'options'              => array(
                'url'                  => false, // Hide the text input for the url
                ),
                'text'                 => array(
                'add_upload_file_text' => 'Aggiungi o Carica immagine' // Change upload button text. Default: "Add or Upload File"
                )
            ),
            array(
                'name'                 => 'Immagine Grande',
                'desc'                 => 'Caricare immagine 477x340 px ',
                'id'                   => 'home_prodotti_special_image_big',
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