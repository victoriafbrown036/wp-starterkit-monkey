<?php
/**************************************************
* FUNZIONI EXTRA PER CMB2 
* aggiunge funzionalità mancanti o migliorative
**************************************************/

/*******************************************************************************
* CMB2 FUNZIONE SPECIALE - ATTIVA AUTOP, OEMBED e SHORTCODE in wysiwyg filed 
* https://github.com/WebDevStudios/CMB2/wiki/Field-Types#wysiwyg
* es: echo mnkcmb2_get_wysiwyg_output( 'estor_academy_protected_wysiwyg', get_the_ID() );
*******************************************************************************/
function mnkcmb2_get_wysiwyg_output( $meta_key, $post_id = 0 ) {
    global $wp_embed;

    $post_id = $post_id ? $post_id : get_the_id();

    $content = get_post_meta( $post_id, $meta_key, 1 );
    $content = $wp_embed->autoembed( $content );
    $content = $wp_embed->run_shortcode( $content );
    $content = do_shortcode( $content );
    $content = wpautop( $content );

    return $content;
}


/*******************************************************************************
* CMB2 FUNZIONE SPECIALE - ESCLUDI METABOX DA PAG TEMPLATE SPECIFICA 
* 'show_on' => array( 'key' => 'exclude_template', 'value' => array( 'page-home', )),
* https://github.com/WebDevStudios/Custom-Metaboxes-and-Fields-for-WordPress/wiki/adding-your-own-show_on-filters#example-page-template-show_on-filter
*******************************************************************************/
function be_metabox_exclude_on_template( $display, $meta_box ) {

  if( 'exclude_template' !== $meta_box['show_on']['key'] )
    return $display;

  // Get the current ID
  if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
  elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
  if( !isset( $post_id ) ) return false;

  $template_name = get_page_template_slug( $post_id );
  $template_name = substr($template_name, 0, -4);

  // If value isn't an array, turn it into one
  $meta_box['show_on']['value'] = !is_array( $meta_box['show_on']['value'] ) ? array( $meta_box['show_on']['value'] ) : $meta_box['show_on']['value'];

  // See if there's a match
  if( in_array( $template_name, $meta_box['show_on']['value'] ) ) {
    return false;
  } else {
    return true;
  }
}
add_filter( 'cmb2_show_on', 'be_metabox_exclude_on_template', 10, 2 );



/*******************************************************************************
* FUNZIONE SPECIALE 
* Quando usi il field file_list si può usare questa funzione per recupeare
* i singoli URL dell'immagine dando come valore anche il nome della thumbnail
*******************************************************************************/
/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_key The field meta key. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 * @link   https://github.com/CMB2/CMB2/wiki/Field-Types#file
 */
function cmb2_output_file_list( $file_list_meta_key, $img_size = 'full' ) {

  // Get the list of files
  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  echo '<div class="file-list-wrap">';
  // Loop through them and output an image
  foreach ( (array) $files as $attachment_id => $attachment_url ) {
    echo '<div class="file-list-image pippo">';
    echo wp_get_attachment_image( $attachment_id, $img_size );
    echo '</div>';
  }
  echo '</div>';
}