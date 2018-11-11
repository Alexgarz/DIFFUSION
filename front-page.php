<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>

    <div class="row stripe-members">
        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
            <div class="col-md-4 col-lg-4 stripe-member-wrap">
                <figure class="stripe-member">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/crop4.jpg" alt="Diffusion band" />
                </figure>
            </div>
            <div class="col-md-4 col-lg-4 stripe-member-wrap">
                <figure class="stripe-member">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/crop3.jpg" alt="Diffusion band" />
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

    <div class="row">
        <aside class="text-center col-md-6">
            <h3 class="aside-title">Upcoming Dates</h3>
            <?php 
            // Get our latest live dates
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'live_dates'
            );
            $query = new WP_Query($args);
            //var_dump($query); 
            if($query->have_posts()):
                while($query->have_posts()): $query->the_post(); ?>
                <article class="live-date">
                    <h3 class="live-date">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="live-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php 
                endwhile;
                wp_reset_postdata();
            else: ?>
            Sorry! We do not have any planned dates. Stay tuned for more.
            <?php endif; ?>
        </aside>

        <aside class="text-center col-md-6">
            <h3 class="aside-title">Listen</h3>
            <iframe style="border: 0; width: 100%; height: 120px;" 
                src="https://bandcamp.com/EmbeddedPlayer/album=1871481678/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless>
                    <a href="http://diffusion-band.bandcamp.com/album/antidotes-to-delusion">Antidotes to delusion by Diffusion</a>
            </iframe>
        </aside>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>