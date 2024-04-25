<div class="">
    <div class="pt-lg-3 container">
        <!-- content start -->
        <div zclass="section-content">
            <div id="home" class="home-slider vhero-slider owl-carousel owl-theme">
                <?php
                $featuredPost = new WP_Query([
                    'post_type' => 'slider',
                    'post_status' => 'publish',
                    'posts_per_page'  => '-1',
                    // 'offset' => '1'
                ]);

                while ($featuredPost->have_posts()) : $featuredPost->the_post(); ?>
                    <div class="<?php echo !empty(get_the_title()) ? 'bg-single-hs-item' : NULL ?> single-hs-item xitem-bg2"
                         style="background-image: url(<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url()); ?>)">
                        <div class="slider-d-table">
                            <div class="d-tablecell" style="vertical-align: bottom;">
                                <div class="hero-text">
                                    <h1><?php echo get_the_title(); ?></h1>
                                    <p><?php echo get_the_content(); ?></p>
                                    <?php if (get_field('slider_button_label')): ?>
                                        <div class="slider-btn">
                                            <a href="<?php echo get_field('slider_buttom_link') ?>"
                                               class="btn btn-warning radius-xl btnhover16">
                                                <?php echo get_field('slider_button_label') ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>

            </div>
            <!-- End Hero Slider -->
        </div>
    </div>
</div>



