<article <?php post_class('row'); ?>>
    <div class="col-md-6 col-md-offset-3">
        
        <header class="text-center">
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
        </header>
        
        <?php if(has_post_thumbnail): ?>
        <figure class="post-thumb">
            <?php the_post_thumbnail('large'); ?>
        </figure>
        <?php endif; ?>

        <div class="post-meta">
            <strong><?php the_date(); ?></strong>
            <strong><?php the_category(' '); ?></strong>
        </div>

        <div class="post-content">
            <?php the_content(); ?>
        </div>
    </div>
</article>