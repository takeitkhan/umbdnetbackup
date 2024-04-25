<header class="site-header mo-left header navstyle2 ">
				<!-- main header -->
				<div class="xsticky-header navbar-fixed main-bar-wraper header-curve navbar-expand-lg">
					<div class="main-bar clearfix bg-primary">
						<div class="container clearfix d-lg-flex">
							<!-- website logo -->
							<div class="logo-header mostion logo-dark logo_wrap">
								<a class="text-center" href="<?php echo get_home_url(); ?>">
                                  <img style="width: <?php echo $options['logo_size'];?>%"  src="<?php echo $options['logo']['url'];?>" alt="">
                                  <p class="mb-0"><?php echo $options['website_name'] ;?> </p>
                              </a>
							</div>
							<!-- nav toggle button -->
							<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
							</button>

							<!-- main nav -->
							<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
								<div class="logo-header logo_wrap d-md-block d-lg-none">
									<a href="<?php echo home_url();?>">
                                      <img src="<?php echo $options['logo']['url'];?>" alt="">
                                      <p>
                                        <?php echo $options['website_name'] ;?>
                                      </p>
                                  </a>
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
                                        <li><a href="<?php echo $options['fb_link'] ?>" class="site-button text-white facebook circle "><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo $options['youtube_link'] ?>" class="site-button text-white youtube circle "><i class="fa fa-youtube"></i></a></li>
                                      	<li><a href="<?php echo $options['linkedin_link'] ?>" class="site-button text-white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
                                      	<li><a href="<?php echo $options['instagram_link'] ?>" class="site-button text-white instagram circle "><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://api.whatsapp.com/send?phone=<?php echo $options['whatsapp_link'] ?>" class="site-button whatsapp circle text-white"><i class="fa fa-whatsapp"></i></a></li>
									</ul>
									<p>© 2021 United Machinery Bangladesh</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- main header END -->
			</header>