<?php
/* (1) ******************************************************************************
* EXCERPT STANDARD WP - (Da utilizzare per gestire il numero di batture negli excerpt di WP)
* Funzione che stampa l'excerpt di un post limitato automaticamente ad un certo numero di batture;
* http://smallenvelop.com/limit-post-excerpt-length-in-wordpress/
*******************************************************************************/
function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 200);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
// $excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
$excerpt = $excerpt.' [...]';
return $excerpt;
}