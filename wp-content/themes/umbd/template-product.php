<?php
/**
Template Name: Products
 */
get_header();?>
<?php while(have_posts()): the_post();?>

    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url()); ?>);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white"><?php the_title();?></h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="<?php echo home_url() ?>">Home</a></li>
                        <li><?php the_title();?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->

    <!-- contact area -->
    <div class="section-full content-inner bg-white contact-style-1">
        <div class="container">
            <div class="row">
                <?php
                $args = [
                    'post_type' => 'product',
                    'posts_per_page' => '12',
                    'order'  => 'DESC',
                    'paged'	=>	get_query_var( 'page' ) ? get_query_var( 'page' ) : 1,
                ];
                $queryObj = new WP_Query($args);
                ?>
                <?php while($queryObj->have_posts()) : $queryObj->the_post(); ?>
                    <div class="col-lg-4 col-md-6 wow xfadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="blog-post blog-grid blog-rounded blog-effect1 fly-box">
                            <div class="dlab-post-media dlab-img-effect">
                                <a href="<?php the_permalink();?>"><img src="<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url()); ?>" alt=""></a>
                            </div>
                            <div class="dlab-info p-a20 border-1 bg-white">
                                <div class="dlab-post-title">
                                    <h4 class="post-title"><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
            <div class="pagination-bx clearfix text-center">
                <?php
                cq_pagination($queryObj->max_num_pages); ?>
            </div>
        </div>
    </div>
    <!-- contact area  END -->
<?php endwhile; ?>
<?php get_footer();?>
