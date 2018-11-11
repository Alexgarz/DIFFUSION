<article <?php post_class('row'); ?>>
    <div class="col-md-6 col-md-offset-3">

        <h2 class="text-center post-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        
        <?php if(has_post_thumbnail): ?>
        <figure class="post-thumb">
            <?php the_post_thumbnail('large'); ?>
        </figure>
        <?php endif; ?>

        <div class="post-content">
            <?php the_content(); ?>
        </div>
    </div>
</article>