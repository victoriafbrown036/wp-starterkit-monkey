<?php
/*******************************************************************************
* AGGIUNGI .current-menu-item 
* Segnala nel menu la pagina corrente anche nelle "sotto-pagine" categorie ecc.
*******************************************************************************/
  /* 
 * Customize Menu Item Classes
 * @author Bill Erickson
 * @link http://www.billerickson.net/customize-which-menu-item-is-marked-active/
 *
 * @param array $classes, current menu classes
 * @param object $item, current menu item
 * @param object $args, menu arguments
 * @return array $classes
 */
function be_menu_item_classes( $classes, $item, $args ) {

  if( 'main' !== $args->theme_location )
    return $classes;

  if( ( is_singular( 'post' ) || is_category() || is_tag() ) && 'Blog' == $item->title )
    $classes[] = 'current-menu-item';
    
  if( ( is_singular( 'servizi' ) || is_post_type_archive( 'servizi') ) && 'Servizi' == $item->title )
    $classes[] = 'current-menu-item';

  if( ( is_singular( 'promozioni' ) || is_post_type_archive( 'promozioni') ) && 'Promozioni' == $item->title )
    $classes[] = 'current-menu-item';

  if( ( is_singular( 'punti-vendita' ) || is_post_type_archive( 'punti-vendita') ) && 'Punti Vendita' == $item->title )
    $classes[] = 'current-menu-item';
   
  return array_unique( $classes );
}
add_filter( 'nav_menu_css_class', 'be_menu_item_classes', 10, 3 );