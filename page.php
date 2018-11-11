<?php get_header();
    while(have_posts()): the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="text-center post-title">
            <?php the_title(); ?>
        </h1>
        
        <?php if(has_post_thumbnail()): ?>
        <figure class="post-image">
            <?php the_post_thumbnail('large'); ?>
        </figure>
        <?php endif; ?>

        <div class="post-content">
            <?php the_content(); ?>
        </div>
    </article>

<?php endwhile; ?>
<?php get_footer(); ?>