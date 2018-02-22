<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage themes
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/
/****************************************************
* ENQUEUE SCRIPTS
*****************************************************/
function mnk_enqueue_scripts() {
    


    //JQUERY
    wp_enqueue_script( 'jquery' );

    /**************************
    * FOOTER SCRIPTS
    **************************/

    // BOOTSTRAP
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/ui/js/bootstrap.min.js' , '', '', true ); 
    wp_enqueue_script( 'bootstrap' );

    // MATCH HEIGHT (WC)
    wp_register_script( 'matchHeight', get_template_directory_uri() . '/ui/js/jquery.matchHeight.js' , '', '', true ); 
    wp_enqueue_script( 'matchHeight' );

    // BOOTSTRAP SLELECT PLUGIN
    wp_register_script( 'bootstrap-select', get_template_directory_uri() . '/ui/plugin/select/bootstrap-select.min.js' , '', '', true );
    wp_enqueue_script( 'bootstrap-select' );

    // SIDR PLUGIN (OFF-CANVAS MENU) - condizione per caricarlo solo in pagine necessarie
    wp_register_script( 'sidr', get_template_directory_uri() . '/ui/plugin/sidr/jquery.sidr.min.js' , '', '', true ); 
    wp_enqueue_script( 'sidr' );

    // OWL CAROUSEL
    wp_register_script('owl-carousel', get_template_directory_uri() . '/ui/plugin/owl-carousel/owl.carousel.min.js', '', '', true);
    wp_enqueue_script('owl-carousel');

    wp_register_script('site-script', get_template_directory_uri() . '/ui/js/site.js', '', '', true);
    wp_enqueue_script('site-script'); // inserire funzione per jQuery shortcut


};

add_action( 'wp_enqueue_scripts', 'mnk_enqueue_scripts' );
?>