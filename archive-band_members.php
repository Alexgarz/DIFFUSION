<?php get_header(); ?>
    <?php while(have_posts()): the_post(); ?>
    <article class="band-member col-md-4">
        
        <h3 class="band-title"><?php the_title(); ?></h3>

        <div class="band-excerpt">
            <?php the_excerpt(); ?>
        </div>
    
    </article>
    <?php endwhile; ?>
<?php get_footer(); ?>