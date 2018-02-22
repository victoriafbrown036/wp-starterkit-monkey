<?php
/*******************************************************************************
* FUNZIONE "GET TERM CUSTOM" 
* ###
*******************************************************************************/
// Get terms for post

function mnk_get_taxonomy_term( $cptName ) {  

  $terms = get_the_terms( $post->ID, $cptName );
  // Loop over each item since it's an array
  if ( $terms != null ){
    foreach( $terms as $term ) {
      // Print the name method from $term which is an OBJECT
      print $term->name ;
      // Get rid of the other data stored in the object, since it's not needed
      unset($term);
    } 
  }
  
}