<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage themes
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
* @link 	  https://github.com/aFarkas/html5shiv
*/
/****************************************************
* CONDITIONALLY ENQUEUE SCRIPTS
*****************************************************/
function mnk_enqueueCond_scripts() {
    
    /**************************
    * The HTML5 Shiv enables use of HTML5 sectioning elements 
    * in legacy Internet Explorer and provides basic HTML5 styling 
    * for Internet Explorer 6-9, Safari 4.x (and iPhone 3.x), and Firefox 3.x.
    **************************/
    wp_register_script( 'html5shiv', get_template_directory_uri() . '/ui/js/html5shiv.min.js' , '', '', false );
    wp_script_add_data( 'html5shiv', 'conditional', 'lte IE 8' );
    wp_enqueue_script( 'html5shiv' );

};

add_action( 'wp_enqueue_scripts', 'mnk_enqueueCond_scripts' );
?>