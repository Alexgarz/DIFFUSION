<?php get_header(); ?>
    <section class="row post band-members">
        <?php while(have_posts()): the_post(); ?>
        <article class="text-center band-member col-md-4">
            
            <?php if(has_post_thumbnail()): ?>
            <figure class="band-avatar">
                <?php the_post_thumbnail('medium'); ?>
            </figure>
            <?php endif; ?>

            <h3 class="band-title">
                <?php the_title(); ?>
            </h3>

            <div class="band-excerpt">
                <?php the_excerpt(); ?>
            </div>
        
        </article>
        <?php endwhile; ?>
    </section>
<?php get_footer(); ?>