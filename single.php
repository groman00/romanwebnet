<?php get_header(); ?>
    
    <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    } ?>

    <main role="main">

        <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                    </a>
                <?php endif; ?>

                <h1>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h1>

                <span class="date">
                    <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                        <?php the_date(); ?> <?php the_time(); ?>
                    </time>
                </span>
                <span class="author">Published By: <?php the_author_posts_link(); ?></span>


                <?php the_content(); // Dynamic Content ?>

                <p class="tags"><?php the_tags( 'Tags: ', '. ', '' ); ?></p>

                <p class="categories">Categories: <?php the_category(', '); ?></p>


            </article>

        <?php endwhile; ?>

        <?php else: ?>

            <article>
                <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
            </article>

        <?php endif; ?>

        </section>

    </main>

<?php get_footer(); ?>