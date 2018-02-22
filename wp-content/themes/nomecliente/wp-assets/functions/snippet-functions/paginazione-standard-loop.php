<?php
/******************************
* 2.5 PAGINATION (standard loop)
******************************/
/**
* @link http://adambalee.com/how-to-add-pagination-to-your-wordpress-blog-without-a-plugin/
* @link http://codex.wordpress.org/Function_Reference/paginate_links
**/
if ( ! function_exists( 'custom_pagination' ) ) :
    function custom_pagination() {
        global $wp_query;

        $big = 999999999; // need an unlikely integer
        
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_next'    => False,
            'prev_text'    => __('« ', 'monkeystudio' ),
            'next_text'    => __(' »', 'monkeystudio' ),
        ) );
    }
endif;