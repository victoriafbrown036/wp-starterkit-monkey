<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/

// @link: https://codex.wordpress.org/Function_Reference/remove_meta_box    
// REMOVE DASHBOARD WIDGET
function mnkt_remove_dashboard_widget() {
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
    remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
// use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.
}
add_action( 'wp_dashboard_setup', 'mnkt_remove_dashboard_widget' );


// @link: https://codex.wordpress.org/Function_Reference/remove_meta_box
// ADD CUSTOM DASHBOARD WIDGET
function mnkt_add_dashboard_widgets() {
    wp_add_dashboard_widget( 'mnkt_credist_widget', 'Credits', 'mnkt_add_credist_widget' );
    wp_add_dashboard_widget( 'mnkt_homepage_widget', 'CONFIGURA HOME', 'mnkt_add_homepage_widget' );
    wp_add_dashboard_widget( 'mnkt_info_widget', 'TEMA WORDPRESS: informazioni generali', 'mnkt_add_info_widget' );
}

// CALLBACK - CREDITS
function mnkt_add_credist_widget() {
    echo '<p>Tema WordPress realizzato da <a href="//www.monkey-theatre.com" target="_blank">Monkey Theatre Studio</a></p>';

    /*echo '<p><strong style="color:FireBrick">STAGE SERVER (per test)</strong> <br/><br/>
        <a class="button button-primary" href="#" target="_blank"> Collegati al server di test</a><br/><br/>
        Per accedere al server inserire come user&pass - clientedemo
    </p>';*/
}

// CALLBACK - HOMEPAGE
function mnkt_add_homepage_widget() {
    echo '<p><strong style="color:FireBrick">MODIFICA/CONFIGURA HOME</strong> <br/><br/>
            <a class="button button-primary" href="' . get_admin_url() . 'post.php?post=16&action=edit&lang=it"> Modifica/Configura Homepage</a><br/><br/>
            Accesso diretto alle <b>configurazioni della homepage</b> del sito.
        </p>';
}

// CALLBACK - IMMAGINI
function mnkt_add_info_widget() {

    echo '<p><strong style="color:FireBrick">MISURE IMMAGINI:</strong> <br/><br/>

            <strong style="color:SteelBlue">LOGO MENÙ</strong> <br/>
            Logo Azienda: 154 x 60 px; <br/><br/>

            <strong style="color:SteelBlue">HOMEPAGE</strong> <br/>
            Banner Principale: 1700 x 956 px; <br/>
            Imagine Azienda: 500 x 500 px; <br/>
            Prodotto Speciale: 477 x 340 px; <br/><br/>
            
            <strong style="color:SteelBlue">AZIENDA (Pagina)</strong> <br/>
            Banner Principale: 1920 x 735 px; <br/>
            Immagine in evidenza: 477 x 340 px; <br/><br/>

            <strong style="color:SteelBlue">REALIZZAZIONI / CANTIERI APERTI</strong> <br/>
            Immagine in evidenza: 477 x 340 px; <br/>
            Immagini cantiere: 477 x 340 px; <br/><br/>

            <strong style="color:SteelBlue">CERTIFICAZIONI (Pagina)</strong> <br/>
            Logo certificazione: 276 x 156 px; <br/><br/>
            
            <strong style="color:SteelBlue">NOVITÀ</strong> <br/>
            Immagine in evidenza: 437 x 287 px; <br/><br/>
            Immagine in articolo: 825 px (Base) - altezza in proporzione; <br/><br/>


            <strong style="color:FireBrick">TIPO DI FILE PER IMMAGINI:</strong> <br/>
            <strong>Formato File:</strong> *.jpg; <br/>
            <strong>Metodo colore:</strong> RGB;<br/>
            <strong>Compressione jpg:</strong> 60% (consigliata);<br/>
            <strong>Peso immagine max:</strong> 350 KB;<br/>
            </p>';

}
add_action ( 'wp_dashboard_setup', 'mnkt_add_dashboard_widgets' );
?>