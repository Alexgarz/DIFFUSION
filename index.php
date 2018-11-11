<?php get_header(); ?>
    <section class="posts">
        <?php while(have_posts()): the_post(); ?>
        <?php get_template_part('loop'); ?> 
        <?php endwhile; ?>
    </section>
<?php get_footer(); ?>