<?php
get_header();
$homepageInc = function ($filename) {
    return get_template_directory() . '/inc/homepage/' . $filename . '.php';
};
?>

    <!-- Content -->
    <div class="page-content bg-white">
        <?php
        include $homepageInc('home_popup_ads');
		include $homepageInc('slider');
        ?>
        <!-- contact area -->
        <div class="content-block">
            <?php
			include $homepageInc('brands'); // done
            include $homepageInc('clients'); // done
			include $homepageInc('services'); // done
            //include $homepageInc('call_to_action');
            include $homepageInc('latest_products');
            include $homepageInc('about_us'); // done
            //include $homepageInc('team');
            include $homepageInc('testimonial'); // done

            //include $homepageInc('latest_blog');
            ?>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END -->

<?php get_footer(); ?>