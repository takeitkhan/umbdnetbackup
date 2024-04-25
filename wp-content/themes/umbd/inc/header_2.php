<style>
body {
    margin-top: 0px;
    color: #333;
}
  
.header_top_menu ul li {
  margin-left: 3px !important;
  font-size: 20px;
  padding: 0 0 0 45px;
}
  
.middle-bar {
    border-bottom: 1px solid rgba(0,0,0,.1);
    padding: 8px 0;
}
  
.navbar-toggler span {
    background: #fff;
}
  
@media only screen and (max-width: 991px){
    .header-nav .nav {
      float: none;
      margin: 0;
      background: #002060;
      width: 100%;
      display: block;
    }
    .header-nav .nav>li .sub-menu li a {
        color: #fff;
    }
    .header-nav .nav>li:active>a, .header-nav .nav>li:focus>a, .header-nav .nav>li:hover>a {
        color: #ffffff!important;
    }
    .main-bar .navbar-toggler span {
        background: #002060;
    }
}
@media only screen and (min-width: 991px){
    .main-bar{
        background-color: #002060;
    }
}
  
.header-nav .nav {
    float: right;
    width: 100%;
    justify-content: space-between;
}
</style>

<!-- header -->
    <header class="site-header mo-left header ext-header navstyle1">
		<div class="middle-bar bg-white">
			<div class="container">
				<!-- website logo  -->
				<div class="middle-area">
					<div class="logo-header logo-dark">
						<a href="<?php echo home_url();?>"><img src="<?php echo $options['logo']['url'];?>" alt=""></a>
					</div>
                        
					<div class="service-list header_top_menu">
                         <div class="list-inline m-a0 footer-social text-right mb-3">
                             <div class="d-inline-block"><a href="<?php echo $options['fb_link'] ?>" class="site-button text-white facebook circle "><i class="fa fa-facebook"></i></a></div>
                             <div class="d-inline-block"><a href="<?php echo $options['youtube_link'] ?>" class="site-button youtube text-white circle "><i class="fa fa-youtube"></i></a></div>
                             <div class="d-inline-block"><a href="<?php echo $options['linkedin_link'] ?>" class="site-button text-white linkedin circle "><i class="fa fa-linkedin"></i></a></div>
                             <div class="d-inline-block"><a href="<?php echo $options['instagram_link'] ?>" class="site-button text-white instagram circle "><i class="fa fa-instagram"></i></a></div>
                             <div  class="d-inline-block"><a href="https://api.whatsapp.com/send?phone=<?php echo $options['whatsapp_link'] ?>" class="site-button whatsapp circle text-white"><i class="fa fa-whatsapp"></i></a></div>
                        </div>
                      	<?php
                          wp_nav_menu( array(
                            'theme_location'  => 'header_top',
                            'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'ul',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         =>  '',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                           'walker'          => new WP_Bootstrap_Navwalker(),
                          ) );
                          ?>
						
					</div>
				</div>
				
			</div>
		</div>	
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix" style="">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion logo-dark">
						<a href="<?php echo home_url();?>"><img style="max-width: 120px;" src="<?php echo $options['logo']['url'];?>" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                   
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header d-md-block d-lg-none">
							<a href="index.html"><img src="<?php echo $options['logo']['url'];?>" alt=""></a>
						</div>
                        <?php
                          wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'ul',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'nav navbar-nav',
                            'menu_id'         =>  '',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                          ) );
                          ?>
						<div class="dlab-social-icon ind-social">
                          <ul>
                            <li class="mt-3"><a href="<?php echo $options['fb_link'] ?>" class="site-button text-white facebook circle "><i class="fa fa-facebook"></i></a></li>
                            <li  class="mt-3"><a href="<?php echo $options['youtube_link'] ?>" class="site-button text-white youtube circle "><i class="fa fa-youtube"></i></a></li>
                            <li class="mt-3"><a href="<?php echo $options['linkedin_link'] ?>" class="site-button text-white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
                            <li class="mt-3"><a href="<?php echo $options['instagram_link'] ?>" class="site-button text-white instagram circle "><i class="fa fa-instagram"></i></a></li>
                            <li class="mt-3"><a href="https://api.whatsapp.com/send?phone=<?php echo $options['whatsapp_link'] ?>" class="site-button whatsapp circle text-white"><i class="fa fa-whatsapp"></i></a></li>
                          </ul>
                          <p>© 2021 United Machinery Bangladesh</p>
                      </div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->