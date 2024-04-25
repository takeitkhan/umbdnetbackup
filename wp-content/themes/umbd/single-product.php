<?php get_header(); ?>
<?php while(have_posts()): the_post();?>

<?php
global $post;
$taxonomy = 'product-category';
$terms = get_the_terms($post->ID, $taxonomy);
$product_gallery = get_field('product_gallery');
//var_dump($terms);
?>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/banner/bnr5.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white"><?php the_title();?></h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="<?php echo home_url();?>">Home</a></li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30">
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <div class="product-gallery on-show-slider lightgallery" id="lightgallery">

                            <div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
                                <?php if(!empty($product_gallery)) {?>
                                <?php foreach($product_gallery as $images) { ?>
                                <?php if(!empty($images['image'])){ ?>
                                <div class="item">
                                    <div class="mfp-gallery">
                                        <div class="dlab-box">
                                            <div class="dlab-thum-bx dlab-img-overlay1 ">
                                                <img class="product-gallery" src="<?php echo $images['image']; ?>" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
														<span data-exthumbimage="<?php echo $images['image']; ?>" data-src="<?php echo $images['image']; ?>" class="check-km" title="<?php the_title();?>">
															<i class="ti-fullscreen"></i>
														</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                                <?php } ?>
                            </div>

                            <div id="sync2" class="owl-carousel owl-theme owl-none">
                                <?php if(!empty($product_gallery)) {?>
                                <?php foreach($product_gallery as $images) { ?>
                                <div class="item">
                                    <div class="dlab-media ">
                                        <img class="product-gallery-thumb" src="<?php echo $images['image']; ?>" alt="">
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12">
                            <div class="dlab-post-title">
                                <h4 class="post-title"><a href="javascript:void(0);"><?php the_title();?></a></h4>
                                <p class="m-b10">
                                    <?php if(get_field('short_description')) {
                                        echo get_field('short_description');
                                    }else {
                                        the_excerpt();
                                    }?>
                                </p>
                                <div class="dlab-divider bg-gray tb15">
                                    <i class="icon-dot c-square"></i>
                                </div>
                            </div>




                    </div>
                </div>
                <?php if(get_the_content()) { ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dlab-tabs  product-description tabs-site-button">
                            <ul class="nav nav-tabs ">
                                <li><a data-toggle="tab" href="#product_description" class="active"><i class="fa fa-globe"></i> Product Details</a></li>
                                <li><a data-toggle="tab" href="#get_a_quote" class=""><i class="fa fa-file"></i> Get a Quote</a></li>

                            </ul>
                            <div class="tab-content">
                                <div id="product_description" class="tab-pane active">
                                   <?php the_content(); ?>
                                </div>
                                <div id="get_a_quote" class="tab-pane">
                                    <?php echo do_shortcode('[gravityform id="1" title="true" description="false" ajax="true"]') ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $currentPostId =  $post->ID;
                        $args = [
                            'post_type' => 'product',
                            'posts_per_page' => '10',
                            'order'  => 'DESC',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'product-category',
                                    'field' => 'term_id',
                                    'terms' => $terms[0]->term_id
                                ]
                            ],
                        ];
                        $queryObj = new WP_Query($args);
                        ?>
                        <h5 class="m-b20">Explore More Product</h5>
                        <div class="product-carousal ximg-carousel-content owl-carousel owl-btn-center-lr owl-btn-1 primary">
                            <?php while($queryObj->have_posts()) : $queryObj->the_post(); ?>
                            <?php if($currentPostId == get_the_ID()){

                            }else { ?>
                            <div class="item">
                                <div class="item-box">
                                    <div class="item-img">
                                        <img src="<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url()); ?>" alt="">
                                    </div>
                                    <div class="item-info text-center text-black p-a10">
                                        <h6 class="item-title text-uppercase font-weight-500"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    </div>
                                </div>
                            </div>
                            <?php } endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product details -->
        </div>
        <!-- contact area  END -->
        <!-- Shop Service info -->

        <!-- Shop Service info End -->
    </div>
    <!-- Content END-->
<?php
$productTitle = get_the_title();
?>
<?php endwhile; ?>




<style>
    .product_input_form {
        display: none;
    }
  
  

.overlay-bx .align-m, .overlay-icon {
    height: auto;
    right: 6px;
    list-style: outside none none;
    margin: 0;
    position: absolute;
    top: 8px;
  	left: unset;
}
  
 .overlay-bx {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    text-align: center;
    z-index: 10;
    opacity: 1;
    visibility: visible;
}
</style>



  <!-- Footer -->
<?php get_footer(); ?>


<script>
    $(document).ready(function() {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items : 1,
            slideSpeed : 2000,
            nav: true,
            autoplay: false,
            dots: false,
            loop: true,
            responsiveRefreshRate : 200,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2.on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        }).owlCarousel({
            items : slidesPerPage,
            dots: false,
            nav: false,
            margin:5,
            smartSpeed: 200,
            slideSpeed : 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate : 100
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count-1;
            var current = Math.round(el.item.index - (el.item.count/2) - .5);

            if(current < 0) {
                current = count;
            }
            if(current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if(syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e){
            e.preventDefault();
            var number = $(this).index();
            //sync1.data('owl.carousel').to(number, 300, true);

            sync1.data('owl.carousel').to(number, 300, true);

        });
    });

    $('.product_input_form input').val('<?php echo $productTitle;?>');
</script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/combining.js"></script>