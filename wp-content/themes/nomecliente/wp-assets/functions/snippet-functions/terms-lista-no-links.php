<?php
/*******************************************************************************
* FUNZIONE SPECIALE - RECUEPRA LISTA POST TERM SENZA LINK (vedi GII single-game)
* Usa il codice qui sotto per non avere errori in risposta
*******************************************************************************/
/*******************************************************************************
<?php $piattaforma_check = mnk_get_term_list_nolink( $post->ID, 'piattaforma_games'); ?>
<?php if( !is_null( $piattaforma_check ) ) : ?>
  <li>
    <span><?php _e('Platform', 'gamesinitaly' )?>:</span> <?php echo $piattaforma_check; ?>
  </li>
<?php endif; ?>
*******************************************************************************/
function mnk_get_term_list_nolink($post_id, $taxonomy) {

    $nome_termini = array();

    $termini = wp_get_object_terms($post_id, $taxonomy);
    sort( $termini ); // se come term uso numeri, questo li ordina (es. intenze)

    foreach ($termini as $termine) {
      $nome_termini[] = $termine->name;
    } 

    $nolinkterms = implode( ', ', $nome_termini );

    if ( !empty( $nolinkterms ) ) {
      //return '<span>' . $nolinkterms . '</span>';
      return $nolinkterms ;
    } 
}