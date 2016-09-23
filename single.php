<?php get_header(); ?>
    
    <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<div class="breadcrumb-container container"><div class="breadcrumbs">','</div></div>');
    } ?>

    <div class="container">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('article article-detail'); ?>>

            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
            <?php endif; ?>

            <h1>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            </h1>

            <p class="byline">
                Published <?php the_date('m/d/Y'); ?> in <?php the_category(', '); ?>
            </p>

            <?php the_content(); // Dynamic Content ?>

            <p class="tags"><?php the_tags( 'Tags: ', '. ', '' ); ?></p>

        </article>

    <?php endwhile; ?>

    <?php else: ?>

        <article>
            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
        </article>

    <?php endif; ?>


    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/inline_scripts/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

<?php get_footer(); ?>