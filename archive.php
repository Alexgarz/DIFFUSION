<?php get_header(); ?>
    <section class="posts">
        <?php while(have_posts()): the_post(); ?>
        <?php get_template_part('loop'); ?> 
        <?php endwhile; ?>
    </section>
    <nav class="post-nav">
        <?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?>
    </nav>
<?php get_footer(); ?>