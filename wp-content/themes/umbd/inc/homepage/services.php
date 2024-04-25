<!-- Services -->
<div class="section-full content-inner bg-gray wow xfadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
    <div class="container">
        <div class="section-head text-black text-center">
            <h2 class="title">
                <?php echo $options['service-title']; ?>
            </h2>
            <p>
                <?php echo $options['service-description']; ?>
            </p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="xproduct-carousal service-carousal img-carousel-dots owl-theme owl-dots-none owl-carousel owl-btn-center-lr owl-btn-3 ">
                    <?php
					$featuredService = $options['home_featured_service'];
                    $testimonialPost = new WP_Query([
                        'post_type' => 'service',
                        'post_status' => 'publish',
                        'posts_per_page' => '-1'
                    ]);

                    //while ($testimonialPost->have_posts()) : $testimonialPost->the_post(); ?>
                  	<?php foreach($featuredService as $service) {?>
          
                  	<?php 
                        $post = get_post($service); 
                        //var_dump($post);                                			   
          			?>
                        <div class="item">
                            <div class="service-box style1">
                                <div class="xicon-xl m-b20 text-primary radius">
                                    <a href="<?php the_permalink(); ?>" class="icon-cell">
                                        <img class="service_img" src="<?php echo get_field('service_icon') ?>"
                                             alt="<?php echo $post->post_title;?>"/>
                                    </a>
                                </div>
                                <h3 class="title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo $post->post_title;?>
                                    </a>
                                </h3>
                            </div>
                        </div>

                  <?php } 
					//endwhile;
                    //wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->