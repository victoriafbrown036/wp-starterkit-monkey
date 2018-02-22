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
/****************************************************
* THUMBNAIL + CMB2 + SNIPPET ATTACHMENT_ID
****************************************************/    
?>

<?php
/*****************
* // INIZIO RECUPERO STRUTTURA HTML PER IMMAGINE CARICATA VIA CMB2
*******************/ 
$associati_logo_big_img_URL = get_post_meta( get_the_ID(), 'associati_logo_big_img', true );
$associati_logo_big_img_ID  = monkeystudio_get_attachment_id_from_url($associati_logo_big_img_URL); // serve snippet dedicato
$associati_logo_big_img_HTML  = wp_get_attachment_image( $associati_logo_big_img_ID, 'full', '');
?>

<?php if ( $associati_logo_big_img_URL ) : ?>

    <?php echo $associati_logo_big_img_HTML; ?>

<?php else : ?>

    <img class="" src="//placehold.it/345x393" height="393" width="345" alt="<?php the_title_attribute(); ?>">

<?php endif; ?>