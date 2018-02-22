<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
* @link https://codex.wordpress.org/Post_Thumbnails
* @link https://codex.wordpress.org/Function_Reference/get_post_thumbnail_id
*
*/
/***************************************************************
* STANDARD THUMBNAIL + ATTRIBUTO CLASS CON SELETTORE CSS CUSTOM
***************************************************************/   
?>

<?php if ( has_post_thumbnail() ) : ?>

    <?php // passo class personalizzata a the_post_thumbnails
    $thumbnail_attr = array( 'class' => ' ');
    the_post_thumbnail( 'full', $thumbnail_attr ); ?>

<?php else : ?>

    <img class=" " src="//placehold.it/263x236" height="236" width="263" alt="<?php the_title_attribute(); ?>">

<?php endif; ?>