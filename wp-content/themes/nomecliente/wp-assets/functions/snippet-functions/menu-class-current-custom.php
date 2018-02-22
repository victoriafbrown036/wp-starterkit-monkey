<?php
/******************************
* MODIFICA CLASSE CURRENT
******************************/
/**
* per adattarsi a classe creata da DAVIDE 
* @link https://stackoverflow.com/questions/26789438/how-to-add-active-class-to-wp-nav-menu-current-menu-item-simple-way
* 
**/

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}