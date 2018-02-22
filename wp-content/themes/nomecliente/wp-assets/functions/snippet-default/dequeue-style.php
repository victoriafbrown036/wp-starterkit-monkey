<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage themes
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/
/*****************************************************
* DEQUEUE / REMOVE PLUGIN DEFAULT CSS STYLE
*****************************************************/
function mnk_dequeue_style() {

    // Search&Filter plugin
    wp_dequeue_style('search-filter-plugin-styles');

};

add_action( 'wp_enqueue_scripts', 'mnk_dequeue_style' );
?>