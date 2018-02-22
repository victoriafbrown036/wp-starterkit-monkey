<?php
/******************************
* 2.4 CUSTOM EXCERPT E CONTENT (cont. parole)
******************************/

// Crea una funzione che permette di limitare automaticamente ed estrarre il testo per content e excerpt
// tratto da: http://wordpress.stackexchange.com/questions/70913/how-can-i-limit-the-character-length-in-excerpt
// passando come source il valore 'content' il riassunto è ottenuto da get_the_content, viceversa non passando nulla, il riassunto è ottenuto da get_the_excerpt
function monkeystudio_get_excerpt($limit, $source = null){
    $excerpt = ($source == "excerpt" ? get_the_excerpt() : get_the_content() );
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    
    if (!empty($excertp)) {
        $excerpt = $excerpt.'... ';
    }

    return $excerpt;
}
