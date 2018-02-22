<?php
/**
*
* @package Blank Monkey Standard 
* @version 0.0.1
* @author  Ronny Briolotti
*/

/**
 * Creating admin panel options via Titan Framework.
 *
 * Getting started: http://www.titanframework.net/get-started/
 * Admin Panel: http://www.titanframework.net/admin-panels/
 * Admin Tabs: http://www.titanframework.net/admin-tabs/
 * Options: http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 */
 
/*********************************************************************************
 * `tf_create_options` is the hook used to create options.
 * 
 *  OPTION 1 - HEADER
 *
 ********************************************************************************/
 
add_action( 'tf_create_options', 'mnk_header_options_function' );
 
function mnk_header_options_function() {
 
    // Initialize Titan with your theme name.
    $titan = TitanFramework::getInstance( 'blankmonkey' );
 
    /******************************
     * 1) CREATE ADMIN PANEL `$mnk_panel`
     *****************************/
    $mnk_panel_header = $titan->createAdminPanel( array(
        'name' => 'Header' // Name the options menu
    ) );

    /******************************************************
     * 2.0) ADD TAB
     *****************************************************/
    $mnk_tab1 = $mnk_panel_header->createTab( array(
        'name' => 'Nav Header Servizi' // Name the tab. Don't use anything else but alpha numeric name with no characters expect space.
    ) );
 
    /*******************************
     * 2.1) CREATE OPTIONS call $mnk_panel->createOption( array()
     ******************************/
    $mnk_tab1->createOption( array(
        'name' => 'Logo Azienda',
        'id'   => 'mnk_header_logo',
        'type' => 'file',
        'desc' => 'Carica file - 000x000px - formato *.png'
    ) );

    /*******************************
     * 3) ADD SAVE BUTTON FOR OPTIONS
     ******************************/
    $mnk_panel_header->createOption( array(
        'type' => 'save'
    ) );

}


/*********************************************************************************
 * OPTION 2 - FOOTER
 ********************************************************************************/
 
add_action( 'tf_create_options', 'mnk_footer_options_function' );
 
function mnk_footer_options_function() {
 
    // Initialize Titan with your theme name.
    $titan = TitanFramework::getInstance( 'blankmonkey' );
 
    /******************************
     * 1) CREATE ADMIN PANEL `$mnk_panel`
     *****************************/
    $mnk_panel_footer = $titan->createAdminPanel( array(
        'name' => 'Footer' // Name the options menu
    ) );


    /******************************************************
     * 2.0) ADD TAB
     *****************************************************/
    $mnk_tab1 = $mnk_panel_footer->createTab( array(
        'name' => 'Copyright e PIVA' // Name the tab. Don't use anything else but alpha numeric name with no characters expect space.
    ) );

    /*******************************
     * 2.1) CREATE OPTIONS FOR THE TAB
     ******************************/

    $mnk_tab1->createOption( array(
        'id'   => 'mnk_footer_copyright',
        'type' => 'editor',
        'media_buttons' => false,
        'name' => 'Copyright e PIVA',
        'desc' => 'Inserire qui i dati Azienda obbligatori di legge',
        'default' => 'Copyright © 2017 Nome azienda e P.IVA'
    ) );


    /*****************************************************
     * TAB - 2 // ISTANZA
     ****************************************************/
    $mnk_tab2 = $mnk_panel_footer->createTab( array(
        'name' => 'Logo' // Name the tab. Don't use anything else but alpha numeric name with no characters expect space.
    ) );

    /*******************************
     * TAB - 2 // OPZIONI
     ******************************/
    $mnk_tab2->createOption( array(
        'name' => 'Logo Azienda',
        'id'   => 'mnk_footer_logo',
        'type' => 'file',
        'desc' => 'Carica file - 000x000px - formato *.png'
    ) );

     
    /*******************************
     * 3) ADD SAVE BUTTON FOR OPTIONS
     ******************************/
    $mnk_panel_footer->createOption( array(
        'type' => 'save'
    ) );
 
}


/*********************************************************************************
 * OPTION 3 - ARCHIVE PAGE GESTIONE CONTENUTI (Titolo e Content)
 ********************************************************************************/
 
add_action( 'tf_create_options', 'mnk_archive_options_function' );
 
function mnk_archive_options_function() {
 
    // Initialize Titan with your theme name.
    $titan = TitanFramework::getInstance( 'blankmonkey' );
 
    /******************************
     * 1) CREATE ADMIN PANEL `$mnk_panel`
     *****************************/
    $mnk_panel_archive = $titan->createAdminPanel( array(
        'name' => 'Archive' // Name the options menu
    ) );


    /******************************************************
     * 2.0) ADD TAB
     *****************************************************/
    $mnk_tab1 = $mnk_panel_archive->createTab( array(
        'name' => 'Blog' // Name the tab. Don't use anything else but alpha numeric name with no characters expect space.
    ) );

    /*******************************
     * 2.1) CREATE OPTIONS FOR THE TAB
     ******************************/
    $mnk_tab1->createOption( array(
        'id'   => 'mnk_blog_intro',
        'type' => 'text', 
        'name' => 'Titolo',
        'desc' => ' ',
        'default' => 'Inserisci titolo con MAIN KS SEO'
    ) );

    $mnk_tab1->createOption( array(
        'id'   => 'mnk_blog_contenuto',
        'type' => 'editor', 
        'name' => 'Descrizione SEO',
        'desc' => ' ',
        'default' => 'Inserisci il testo introduttivo con MAIN KS SEO'
    ) );

    // POST PER PAGINA (SELECT)
    $mnk_tab1->createOption( array(
        'name' => 'Elementi visibili per pagina',
        'type' => 'heading',
    ) );

    $mnk_tab1->createOption( array(
        'name' => 'Numero elementi ',
        'id'   => 'mnk_blog__numpost',
        'type' => 'select',
        'desc' => 'Numero di elemnti/post mostrati nella pagina',
        'options' => array(
        '1'  => '(1) Uno',
        '5'  => '(5) Cinque',
        '7'  => '(7) Sette',
        '-1' => 'Infiniti',
        ),
        'default' => '9',
    ) );



    /*****************************************************
     * TAB - 2 // ISTANZA
     ****************************************************/
    $mnk_tab2 = $mnk_panel_archive->createTab( array(
        'name' => 'Catalogo' // Name the tab. Don't use anything else but alpha numeric name with no characters expect space.
    ) );

    /*******************************
     * TAB - 2 // OPZIONI
     ******************************/
    $mnk_tab2->createOption( array(
        'id'   => 'mnk_catalogo_intro',
        'type' => 'text', 
        'name' => 'Titolo',
        'desc' => ' ',
        'default' => 'Inserisci titolo con MAIN KS SEO'
    ) );

    $mnk_tab2->createOption( array(
        'id'   => 'mnk_catalogo_contenuto',
        'type' => 'editor', 
        'name' => 'Descrizione SEO',
        'desc' => ' ',
        'default' => 'Inserisci il testo introduttivo con MAIN KS SEO'
    ) );

    // POST PER PAGINA (SELECT)
    $mnk_tab2->createOption( array(
        'name' => 'Elementi visibili per pagina',
        'type' => 'heading',
    ) );

    $mnk_tab2->createOption( array(
        'name' => 'Numero elementi ',
        'id'   => 'mnk_catalogo__numpost',
        'type' => 'select',
        'desc' => 'Numero di elemnti/post mostrati nella pagina',
        'options' => array(
        '1'  => '(1) Uno',
        '5'  => '(5) Cinque',
        '7'  => '(7) Sette',
        '-1' => 'Infiniti',
        ),
        'default' => '9',
    ) );



    /*****************************************************
     * TAB - 3 // ISTANZA
     ****************************************************/
    $mnk_tab3 = $mnk_panel_archive->createTab( array(
        'name' => 'Domande Frequenti' // Name the tab. Don't use anything else but alpha numeric name with no characters expect space.
    ) );

    /*******************************
     * TAB - 3 // OPZIONI
     ******************************/
    $mnk_tab3->createOption( array(
        'id'   => 'mnk_faq_titolo',
        'type' => 'text', 
        'name' => 'Titolo',
        'desc' => ' ',
        'default' => 'Inserisci titolo con MAIN KS SEO'
    ) );

    $mnk_tab3->createOption( array(
        'id'   => 'mnk_faq_contenuto',
        'type' => 'editor', 
        'name' => 'Descrizione SEO',
        'desc' => ' ',
        'default' => 'Inserisci il testo introduttivo con MAIN KS SEO'
    ) );

    // POST PER PAGINA (SELECT)
    $mnk_tab3->createOption( array(
        'name' => 'Elementi visibili per pagina',
        'type' => 'heading',
    ) );

    $mnk_tab3->createOption( array(
        'name' => 'Numero elementi ',
        'id'   => 'mnk_faq__numpost',
        'type' => 'select',
        'desc' => 'Numero di elemnti/post mostrati nella pagina',
        'options' => array(
        '1'  => '(1) Uno',
        '5'  => '(5) Cinque',
        '7'  => '(7) Sette',
        '-1' => 'Infiniti',
        ),
        'default' => '9',
    ) );

    // BOTTONE OPZIONALE PER HEADER O FOOTER
    // POST PER PAGINA (SELECT)
    $mnk_tab3->createOption( array(
        'name' => 'Bottone "Call to action"',
        'type' => 'heading',
    ) );

    $mnk_tab3->createOption( array(
        'id'   => 'mnk_faq__btn_txt',
        'type' => 'text', 
        'name' => 'Testo Bottone', 
        'default' => 'Serve Aiuto?'  
    ) );

    $mnk_tab3->createOption( array(
        'id'   => 'mnk_faq__btn_url',
        'type' => 'text', 
        'name' => 'URL Bottone', 
        'default' => '/domande-frequenti/' 
    ) );


     
    /*******************************
     * 3) ADD SAVE BUTTON FOR OPTIONS
     ******************************/
    $mnk_panel_archive->createOption( array(
        'type' => 'save'
    ) );
 
}


/*********************************************************************************
 * OPTION 4 - SOCIAL
 ********************************************************************************/
 
add_action( 'tf_create_options', 'mnk_albo_oro_options_function' );
 
function mnk_albo_oro_options_function() {
 
    // Initialize Titan with your theme name.
    $titan = TitanFramework::getInstance( 'blankmonkey' );
 
    /******************************
     * 1) CREATE ADMIN PANEL `$mnk_panel`
     *****************************/
    $mnk_panel_albo_oro = $titan->createAdminPanel( array(
        'name' => 'Social' // Name the options menu
    ) );


    /******************************************************
     * 2.0) ADD TAB
     *****************************************************/
    $mnk_tab1 = $mnk_panel_albo_oro->createTab( array(
        'name' => 'URL PAGINA' // Name the tab. Don't use anything else but alpha numeric name with no characters expect space.
    ) );

    /*******************************
     * 2.1) CREATE OPTIONS FOR THE TAB
     ******************************/

    // FACEBOOK
    $mnk_tab1->createOption( array(
        'name' => 'Facebook',
        'type' => 'heading',
    ) );

    $mnk_tab1->createOption( array(
        'id'   => 'mnk_social__facebook_URL',
        'type' => 'text', 
        'name' => 'Facebook URL',
        'desc' => ' ',
        'default' => 'https://www.facebook.com/monkey.theatre.studio/'
    ) );

    // LINKEDIN
    $mnk_tab1->createOption( array(
        'name' => 'Linkedin',
        'type' => 'heading',
    ) );

    $mnk_tab1->createOption( array(
        'id'   => 'mnk_social__linkedin_URL',
        'type' => 'text', 
        'name' => 'Linkedin URL',
        'desc' => ' ',
        'default' => 'https://www.linkedin.com/company/2809749/'
    ) );

    // TWITTER
    $mnk_tab1->createOption( array(
        'name' => 'YouTube',
        'type' => 'heading',
    ) );

    $mnk_tab1->createOption( array(
        'id'   => 'mnk_social__youtube_URL',
        'type' => 'text', 
        'name' => 'YouTube URL',
        'desc' => ' ',
        'default' => 'https://www.youtube.com/channel/UCuQ7FbswZf19rcxKMeAd0Ng'
    ) );

     
    /*******************************
     * 3) ADD SAVE BUTTON FOR OPTIONS
     ******************************/
    $mnk_panel_albo_oro->createOption( array(
        'type' => 'save'
    ) );
 
}