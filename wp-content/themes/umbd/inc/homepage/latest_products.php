<!-- Latest Projects -->
<div class="section-full content-inner-2 bg-img-fix xoverlay-black-dark wow xfadeIn home_latest_product" data-wow-duration="2s" data-wow-delay="0.8s" 
style="background-color: hwb(231deg 19% 50% / 10%);">
    <div class="container">
        <div class="section-head text-white text-center">
            <h2 class="title text-dark"><?php echo $options['product-title']; ?></h2>
            <p>
                <?php echo $options['product-description'];?>
            </p>
        </div>
        <div class="row">
            <?php
			$featuredProduct = $options['home_featured_product'];
            // $args = [
            //     'post_type' => 'product',
            //     'posts_per_page' => '10',
            //     'order'  => 'DESC',
                
            //     'tax_query' => [
            //         [
            //             'taxonomy' => 'service-category',
            //             'field' => 'term_id',
            //             'terms' => $cat
            //         ]
            //     ]
                
            // ];
            // $queryObj = new WP_Query($args);
            ?>
            <?php //while($queryObj->have_posts()) : $queryObj->the_post(); ?>
				
          		<?php foreach($featuredProduct as $product) {?>
          
				<?php 
                        $post = get_post($product); 
                      //var_dump($post);   
                        if($post->post_status == 'publish'){
          			?>
                <div class="col-lg-3 col-md-6 xwow xfadeInUp product_col" xdata-wow-duration="2s" xdata-wow-delay="0.3s">
                    <div class="blog-post blog-grid blog-rounded xblog-effect1 xfly-box  bg-white">
                        <div xclass="dlab-post-media dlab-img-effect">
                            <a href="<?php the_permalink();?>">
                                <img xstyle="max-height: 300px; object-fit: cover" src="<?php echo apply_filters('jetpack_photon_url', get_the_post_thumbnail_url($post, 'full')); ?>" alt=""></a>
                        </div>
                        <div class="dlab-info p-a20 border-0 bg-white">
                            <div class="dlab-post-title">
                                <h4 style="font-size: 18px;" class="post-title text-center"><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
          <?php }
            }

			//endwhile;?>
          
        </div>
    </div>
</div>
<!-- Latest Projects End -->

