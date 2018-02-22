<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
* @link https://codex.wordpress.org/The_Loop
*
*/
/****************************************************
* LOOP STANDARD
****************************************************/    
?>


	<?php /* INIZIO LOOP SINGLE */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
	    
		<?php 
        /****************************************
        ENTRY (vedi idea content twentyseventeen)
        ****************************************/?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<a href="<?php the_permalink() ?>">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</a>

			<?php the_content(); ?>

			<?php wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>

		</article>

		<?php 
		/**********************
		THUMBNAIL PROMOZIONI
		**********************/
		?> <?php get_template_part( 'wp-assets/template-parts/thumbnails/thumbnail', 'custom-css' ); ?>		


		<?php 
        /****************************************
        COMMENTI (aperti o con almeno 1 commento)
        ****************************************/?>
        <?php if( comments_open() || get_comments_number() ) : ?>
	 		<?php comments_template(); ?>
	    <?php endif; ?>


	<?php /* FINE LOOP SINGLE */ ?>
	<?php endwhile; ?>