<?php
/******************************
* 2.3 ADD .FIRST AND .LAST CLASS TO ALL MENUS
******************************/
/**
* Add .first and .last class to all menus 
* @link http://www.wpbeginner.com/wp-themes/how-to-add-the-first-and-last-class-to-wordpress-navigation-menu-items/
* se attivo senza menù configurato, errore slow query
**/

function monkeystudio_first_last_menu_class($items) {
	$items[1]->classes[] = 'first';
	$items[count($items)]->classes[] = 'last';
	return $items;
}
add_filter('wp_nav_menu_objects', 'monkeystudio_first_last_menu_class' );