<?php
/*
https://codex.wordpress.org/Theme_Development
*/
?>

<?php get_header(); ?>

	<section id="page-content" class="container">


		<?php if ( have_posts() ) : ?>
            
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>


		
	</section>

<?php get_footer(); ?>
