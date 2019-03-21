<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>

    <div class="row stripe-members">
        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
            <div class="col-md-4 col-lg-4 stripe-member-wrap">
                <figure class="stripe-member">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/final-crop1.jpg" alt="Diffusion band" />
                </figure>
            </div>
            <div class="col-md-4 col-lg-4 stripe-member-wrap">
                <figure class="stripe-member">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/crop6.jpg" alt="Diffusion band" />
                </figure>
            </div>
            <div class="col-md-4 col-lg-4 stripe-member-wrap">
                <figure class="stripe-member">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/crop5.jpg" alt="Diffusion band" />
                </figure>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3 home-teaser">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
