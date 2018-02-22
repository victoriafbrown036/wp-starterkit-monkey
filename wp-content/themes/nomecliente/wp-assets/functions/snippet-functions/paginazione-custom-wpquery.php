<?php


// USARE CUSTOM PAGINATION IN static page (inserire nel loop)
// https://wordpress.stackexchange.com/questions/120407/how-to-fix-pagination-for-custom-loops



/**************************************************************************
* CUSTOM PAGINATION
* da attivare in 3 step:
* 1) Richiamare questo file nel file function.php del tema
* 2) Inserire questa varaibile "$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // PAGINATION Step1"
*    proprio sopra da dichiarazione degli $arg della WP_Class
* 3) Richiamare questo valore "'paged'	=> $paged, // PAGINATION Step2" negli $args della WP_Class
* 4) Inserire questo blocco
*   
	<div class="paging">
		<?php // PAGINATION Step3 - LOOK AT FUNCTION FILE for the function
	      if (function_exists(custom_pagination)) {
	        custom_pagination($mypost->max_num_pages,"",$paged);
	      } 
	    ?>
	</div><!-- /.paging -->
* 
* Subito dopo la chiusura del "loop" (<?php endwhile; ?>) e prima del "<?php wp_reset_postdata(); ?>"
* Sostituire $mypost con il nome della variabile che passiamo al loop per WP_Class
*
***************************************************************************
* 404 se imposti "'posts_per_page' =>" in $arg la paginazione genera un errore di "pagina non trovata"
* per sistemare. lasciando impostato il valore "'posts_per_page' =>", il numero dei post impostato in lettura
* nelle impostazioni di default deve sempre essere pari oppure inferiore al numero impoastato nel valore ""'posts_per_page' =>""
* presente nella custom loop.
*************************************************************************/
/*
* PHP NOTICE: se appare, per correggere inserire la funzione "custom_pagination"
* tra apici singoli in -> if (function_exists('custom_pagination'))
*
************************************************************************/

/* http://callmenick.com/post/custom-wordpress-loop-with-pagination*/

// PER USARLO IN UNA PAGE CONTROLLARE QUI:
// https://wordpress.stackexchange.com/questions/120407/how-to-fix-pagination-for-custom-loops

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    // 'format'          => '&paged=%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => true,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'array',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  // if ($paginate_links) {
  //   echo "<nav class='custom-pagination'>";
  //     echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
  //     echo $paginate_links;
  //   echo "</nav>";
  // }

  /* mod by RB to use ul an li instead of a */
  /* http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/ */
  if( is_array( $paginate_links ) ) {
    echo '<div class="text-center">';
	    echo '<ul class="pagination">';
	    foreach ( $paginate_links as $paginate_link ) {
	            echo "<li>$paginate_link</li>";
	    }
      echo '</ul>';
    echo '</div>';
	}

}
?>