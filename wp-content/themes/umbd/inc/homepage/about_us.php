<!-- About Us -->
<?php $aboutUsPageID = get_post($options['about_us_page_id']); ?>

<div class="section-full content-inner">
    <div class="container">
        <div class="itemx">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 m-b30">
                    <img src="<?php echo get_the_post_thumbnail_url($aboutUsPageID, 'full'); ?>" alt=""
                         class="radius-sm"/>
                </div>
                <div class="col-lg-6 col-md-6 m-b30">
                    <div class="our-story">
                        <span>
                            <?php echo $options ['about_us_title']; ?>
                        </span>
                        <p class="">
                            <?php echo $options ['about_us_subtitle']; ?>
                        </p>
                        <h4 class="title">
                            <?php echo  $aboutUsPageID->post_excerpt; ?>
                        </h4>
                        <p>
                            <?php
                            //echo pageExcerptById(50 ,$aboutUsPageID);
                            ?>
                        </p>
                        <a href="<?php echo get_page_link($aboutUsPageID); ?>" class="site-button btnhover16">
                            Read More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php /*
<div class="section-full content-inner bg-white wow xfadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
    <div class="container">
        <div class="on-show-slider ">
            <div id="sync2" class="owl-carousel owl-theme owl-none owl-dots-none project-list">
                <div class="item">
                    <div class="project-owbx">
                        <i class="flaticon-robot-arm"></i>
                        <h4 class="title">Mechanical Works</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="project-owbx">
                        <i class="flaticon-factory-1"></i>
                        <h4 class="title">Power & Energy</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="project-owbx active">
                        <i class="flaticon-fuel-station"></i>
                        <h4 class="title">Petroleum Refinery</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="project-owbx">
                        <i class="flaticon-engineer-1"></i>
                        <h4 class="title">Oil & Gas Industry </h4>
                    </div>
                </div>
                <div class="item">
                    <div class="project-owbx">
                        <i class="flaticon-conveyor-1"></i>
                        <h4 class="title">Automative Manufacturing</h4>
                    </div>
                </div>
            </div>
            <div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-dots-none owl-btn-3 primary">
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="our-story">
                                <span>OUR STORY</span>
                                <h2 class="title">We are Industrial <br/>factory <span
                                            class="text-primary">solutions</span>
                                </h2>
                                <h4 class="title">We are committed to provide safe industrial solutions to many
                                    factories.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Factory. Lorem
                                    Ipsum has been the Factory's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and typesetting
                                    Factory.</p>
                                <a href="about-2.html" class="site-button btnhover16">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 m-b30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/pic6.jpg"
                                 class="radius-sm" alt="">
                        </div>
                    </div>
                </div>
                *
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 m-b30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/pic7.jpg"
                                 class="radius-sm" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="our-story content-bx1">
                                <span>OUR STORY</span>
                                <h2 class="title">Trusted Factory <br/>Solutions <span
                                            class="text-primary">since 1955</span>
                                </h2>
                                <h4 class="title">We are committed to provide safe industrial solutions to many
                                    factories.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Factory. Lorem
                                    Ipsum has been the Factory's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and typesetting
                                    Factory.</p>
                                <a href="about-2.html" class="site-button btnhover16">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="our-story">
                                <span>OUR STORY</span>
                                <h2 class="title">We Help You to Turn<br/> Vision Into <span class="text-primary">  Reality</span>
                                </h2>
                                <h4 class="title">We are committed to provide safe industrial solutions to many
                                    factories.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Factory. Lorem
                                    Ipsum has been the Factory's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and typesetting
                                    Factory.</p>
                                <a href="about-2.html" class="site-button btnhover16">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 m-b30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/pic8.jpg"
                                 class="radius-sm" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 m-b30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/pic9.jpg"
                                 class="radius-sm" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="our-story content-bx1">
                                <span>OUR STORY</span>
                                <h2 class="title">Your Trusted Building <br/>and <span
                                            class="text-primary">Restorations </span>
                                </h2>
                                <h4 class="title">We are committed to provide safe industrial solutions to many
                                    factories.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Factory. Lorem
                                    Ipsum has been the Factory's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and typesetting
                                    Factory.</p>
                                <a href="about-2.html" class="site-button btnhover16">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="our-story">
                                <span>OUR STORY</span>
                                <h2 class="title">We Help You to Turn<br/> Vision Into <span class="text-primary">  Reality</span>
                                </h2>
                                <h4 class="title">We are committed to provide safe industrial solutions to many
                                    factories.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting Factory. Lorem
                                    Ipsum has been the Factory's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.Lorem Ipsum is simply dummy text of the printing and typesetting
                                    Factory.</p>
                                <a href="about-2.html" class="site-button btnhover16">Read More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 m-b30">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/pic10.jpg"
                                 class="radius-sm" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 */ ?>