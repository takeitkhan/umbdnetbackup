<?php get_header();?>

<?php while(have_posts()): the_post();?>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url()); ?>);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white"><?php the_title();?></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li><?php the_title();?></li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container max-w900">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dlab-post-text">
                        <?php echo get_the_content();?>
                    </div>

                </div>

                <!-- blog END -->
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer();?>