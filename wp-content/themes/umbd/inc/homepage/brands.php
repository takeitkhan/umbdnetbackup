<!-- Client logo -->
<div class="section-full content-inner-2 bg-white wow xfadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
    <div class="container">
        <div class="section-head text-black text-center">
            <h2 class="title text-capitalize">
                <?php echo $options['home-brand-title']; ?>
            </h2>
        </div>
        <div class="client-logo-carousel owl-loaded owl-theme owl-carousel owl-dots-none owl-btn-center-lr owl-btn-3">
            <?php foreach ($options['home_brand'] as $key => $value) { ?>
                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo border">
                            <a href="javascript:void(0);">
                                <img src="<?php echo $value['home_brand_logo']['url']; ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Client logo End -->