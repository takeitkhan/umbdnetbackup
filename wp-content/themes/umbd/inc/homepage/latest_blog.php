<!-- Latest Blog -->
<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="section-head text-black text-center">
            <h2 class="title text-capitalize">latest blog</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
        </div>
        <div class="row">
            <?php for($i = 0; $i < 8; $i++) { ?>
            <div class="col-lg-4 col-md-6 wow xfadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="blog-post blog-grid blog-rounded blog-effect1 fly-box">
                    <div class="dlab-post-media dlab-img-effect">
                        <a href="blog-single.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/blog/grid/pic1.jpg" alt=""></a>
                    </div>
                    <div class="dlab-info p-a20 border-1 bg-white">
                        <div class="dlab-post-meta">
                            <ul>
                                <li class="post-date"> <strong>10 Aug</strong> <span> 2016</span> </li>
                                <li class="post-author"> By <a href="javascript:void(0);">Jack</a> </li>
                            </ul>
                        </div>
                        <div class="dlab-post-title">
                            <h4 class="post-title"><a href="blog-single.html">Seven Doubts You Should</a></h4>
                        </div>
                        <div class="dlab-post-text">
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                        </div>
                        <div class="dlab-post-readmore">
                            <a href="blog-single.html" title="READ MORE" rel="bookmark" class="site-button btnhover16">READ MORE
                                <i class="ti-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Latest Blog End -->