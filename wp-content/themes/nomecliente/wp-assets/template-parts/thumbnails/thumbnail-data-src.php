<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
* @link http://www.clubhousecreative.com/adding-data-attributes-to-wordpress-featured-images/
*
*/
/***************************************************************
* THUMBNAIL + DATA-SRC
***************************************************************/  
?>

<?php if ( has_post_thumbnail() ) : ?>
	
	<?php  
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
	$url = $thumb['0']; 
	the_post_thumbnail('post_thumbnail', array('data-src'=>$url)); 
	?>

	<noscript>
	    <?php // passo class personalizzata a the_post_thumbnails
	    $thumbnail_attr = array( 'class' => ' ');
	    the_post_thumbnail( 'prodotti-loop-home-thumb', $thumbnail_attr ); ?>
	</noscript>

<?php else : ?>

    <img class=" " src="//placehold.it/273x191" height="273" width="191" alt="<?php the_title_attribute(); ?>">

<?php endif; ?>