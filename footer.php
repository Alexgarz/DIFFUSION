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
                                <?php $meta_value = get_post_meta($post->ID, 'link', true); ?>
                                <?php if(!empty($meta_value)): ?>
                                <a href="<?php echo $meta_value; ?>" target="_blank">
                                    <?php the_title(); ?>
                                </a>
                                <?php else: ?>
                                <?php the_title(); ?>
                                <?php endif; ?>
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
        
            <footer class="row site-footer">
                <div class="col-md-6">
                    <?php echo date('Y'); ?> - All rights reserved.
                </div>
                <div class="text-right col-md-6">
                    Facebook
                    Bandcamp
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>    
</html>