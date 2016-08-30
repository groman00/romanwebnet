<?php
/*
https://codex.wordpress.org/Theme_Development
*/
?>

<?php get_header(); ?>

	<section id="page-content" class="container">

		<?php if ( have_posts() ) : ?>
            
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
	</section>

<?php get_footer(); ?>
