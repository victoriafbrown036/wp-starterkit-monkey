<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
*/
/****************************************************
* INDEX/PAGE STANDARD
****************************************************/      

/**********************
* TEMPLATE PATH
**********************/
$uriTheme= get_template_directory_uri(); 

?>

<?php get_header(); ?>

    <h1>MONKEY START HERE: <br/><?php the_title(); ?></h1>

    <?php 
    /**********************
    * LOOP STANDARD
    **********************/
    ?><?php include(locate_template( 'wp-assets/template-parts/loops/loop-standard.php' )); ?>


<?php get_footer(); ?>