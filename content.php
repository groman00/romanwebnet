<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
    <div class="entry-content">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <p>Posted on: <?php the_time('F j, Y'); ?>&nbsp;in&nbsp;<?php the_category(', ') ?></p>
        </div>
        <?php endif; ?>
    </div>
</article>
