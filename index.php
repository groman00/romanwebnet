<?php
/*
https://codex.wordpress.org/Theme_Development
*/
?>

<?php get_header(); ?>

	<div class="container">
	<?php if ( function_exists('yoast_breadcrumb') ) {
  		yoast_breadcrumb('<div class="breadcrumb-container container"><div class="breadcrumbs">','</div></div>');
	} ?>		
		<section class="article-listing">	
			<h1>Blog</h1>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php the_posts_navigation(); ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</section>			
	</div>

<?php get_footer(); ?>
