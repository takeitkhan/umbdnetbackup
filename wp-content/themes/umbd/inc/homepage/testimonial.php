<!-- Testimonials -->
<div class="section-full content-inner-2 bg-gray wow xfadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="container">
        <div class="section-head text-black text-center">
            <h2 class="title">
                <?php echo $options['testimonial-title']; ?>
            </h2>
            <p>
                <?php echo $options['testimonial-description']; ?>
            </p>
        </div>
        <div class="testimonial-box-carousel owl-carousel m-b5 owl-btn-center-lr owl-btn-2 radius-no owl-btn-md owl-theme primary owl-dots-none">

            <?php
            $testimonialPost = new WP_Query([
                'post_type' => 'testimonial',
                'post_status' => 'publish',
                'posts_per_page' => '-1'
            ]);

            while ($testimonialPost->have_posts()) : $testimonialPost->the_post(); ?>
            <div class="item">
                <div class="testimonial-11 testimonial-box">
                    <div class="testimonial-pic">
                        <img src="<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url()); ?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <div class="testimonial-detail quote-left quote-right">
                        <div class="testimonial-text">
                            <p><?php echo get_the_content(); ?></p>
                        </div>
                        <h5 class="testimonial-name text-primary m-t0 m-b5">
                            <?php echo get_the_title(); ?>
                        </h5>
                        <span class="testimonial-position"><?php echo get_field('description') ?></span>
                    </div>
                </div>
            </div>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
</div>
<!-- Testimonials End -->