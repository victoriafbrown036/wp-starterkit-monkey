<?php
/*******************************************************************************
* HIDE EDITOR ON SPECIFIC PAGES 
* https://gist.github.com/ramseyp/4060095
*******************************************************************************/
add_action( 'admin_head', 'hide_editor' );

function hide_editor() {
    global $pagenow;
    if( !( 'post.php' == $pagenow ) ) return;

    global $post;
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;




  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'Homepage'){ 
    remove_post_type_support('page', 'editor');
  }

  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'page-home.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }

  remove_post_type_support('marchi', 'editor');
  remove_post_type_support('partner', 'editor');
}
