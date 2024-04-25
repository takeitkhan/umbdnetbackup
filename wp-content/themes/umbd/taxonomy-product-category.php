<?php get_header(); ?>

<?php
$taxonomy = 'product-category';
$term = get_queried_object();
$terms = get_the_terms($term->term_id, $taxonomy);

$subCategores = get_terms([
    'taxonomy' => $taxonomy,
    'child_of' => $term->term_id,
    'order' => 'ASC',
    'hide_empty' => true,
]);
//var_dump($term->term_id);

?>

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt"
         style="background-image:url(<?php echo get_field('product_catgeory_banner', $term); ?>);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">
                    <a class="text-white" href="<?php echo get_term_link($term->slug, $taxonomy) ?>">
                        <?php echo $term->name; ?>
                    </a>
                </h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><?php echo $term->name; ?></li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->


    <!-- contact area -->
    <div class="content-area">
        <div class="container">
            <div class="xtag-cloud">
                <div class="site-filters clearfix center m-0">
                    <ul class="xfilters" >
                        <?php foreach ($subCategores as $key => $subCategory) { ?>
                            <li>
                                <a href="<?php echo get_term_link( $subCategory->slug, $taxonomy ) ?>" class="btn-warning button-sm radius-xl"
                                   style="">
                                    <span><?php echo $subCategory->name; ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
              	<?php echo get_field('product_category_description', $term); ?>
            </div>

            <!-- Blog half image -->
            <?php while (have_posts()) : the_post(); ?>
                <div class="blog-post blog-md clearfix">
                    <div class="dlab-post-media dlab-img-effect zoom-slow">
                        <a href="<?php the_permalink(); ?>"><img
                                    src="<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url()); ?>"
                                    alt=""></a>
                    </div>
                    <div class="dlab-post-info">
                        <div class="dlab-post-title">
                            <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="dlab-post-text">
                            <p><?php the_excerpt() ?></p>
                        </div>
                        <div class="dlab-post-readmore">
                            <a href="<?php the_permalink(); ?>" title="READ MORE" rel="bookmark" class="site-button">MORE
                                <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- Blog half image END -->
            <!-- Pagination  -->
            <div class="pagination-bx clearfix text-center">
                <?php wp_boostrap_4_pagination(); ?>
            </div>
            <!-- Pagination END -->
        </div>
    </div>
</div>


<?php get_footer(); ?>
