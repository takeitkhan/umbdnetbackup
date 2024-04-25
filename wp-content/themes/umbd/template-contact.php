<?php
/**
 Template Name: Contact
 */
get_header();?>

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
            <div class="row dzseth">
                <div class="col-lg-4 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                        <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Address</h5>
                            <p><?php echo $options['address'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                        <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Email</h5>
                            <p><?php echo $options['email'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b30">
                    <div class="icon-bx-wraper bx-style-1 p-lr20 p-tb30 center seth radius-sm">
                        <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                        <div class="icon-content">
                            <h5 class="dlab-tilte text-uppercase">Phone</h5>
                            <p><?php echo $options['phone'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left part start
                <div class="col-lg-6 m-b30">
                    <div class="p-a30 bg-gray clearfix radius-sm">
                        <h3>Send Message Us</h3>
                        <div class="dzFormMsg"></div>
                        <?php //echo do_shortcode('[gravityform id="2" title="false" description="false"]');?>
                    </div>
                </div>
			 -->
                <!-- Left part END -->
                <!-- right part start -->
                <div class="col-lg-6 m-b30 d-flex">
                    <iframe src="<?php echo $options['google_maps_link']; ?>" width="600" height="450" class="align-self-stretch radius-sm" style="border:0; width:100%;  min-height:100%;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area  END -->
</div>
<?php endwhile; ?>
<?php get_footer();?>
