<?php 
/*

Template name: Gallery
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
                             <li><a href="index.html">Home</a></li>
                             <li><?php the_title();?></li>
                         </ul>
                     </div>
                     <!-- Breadcrumb row END -->
                 </div>
             </div>
         </div>
         <!-- inner page banner END -->
        <!-- contact area -->
        
       <?php 
       $gallery_opt = $options['gallery_section'];
       $gallery_ids = explode( ',', $gallery_opt );
       ?>
       
 <!-- inner page banner END -->
        <div class="bg-white lightgallery gallery-filters" id="lightgallery">
			<div class="section-full bg-white content-inner-2">
				<div class="container">
					<div class="clearfix">
                      	
						<ul id="masonry1" class="dlab-gallery-listing gallery-grid-8 gallery text-center sp10 row">
                          <?php 
                          
                          if ( ! empty( $gallery_ids ) ) {
                            foreach ( $gallery_ids as $gallery_item_id ) { 
                          	  // echo wp_get_attachment_image( $gallery_item_id, 'full' );
                              // echo wp_get_attachment_url( $gallery_item_id );
                              // echo wp_get_attachment_image_src( $gallery_item_id, 'full' );
                              // var_dump( wp_get_attachment_metadata( $gallery_item_id ) );
                          	  $ingUrl = 	wp_get_attachment_url( $gallery_item_id )
                          	?>
                              <li class="card-container m-b10 col-lg-2 nature">
                                <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                  <img src="<?php echo $ingUrl; ?>"  alt="" width="800" height="650"/>
                                  <div class="overlay-bx">
                                    <div class="overlay-icon"> 
                                      <span data-exthumbimage="<?php echo $ingUrl; ?>" data-src="<?php echo $ingUrl; ?>" class="check-km" title="">		
                                        <i class="ti-zoom-in icon-bx-xs"></i> 
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            
                           <?php  }
                          }

                          ?>
						</ul>
					</div>
				</div>
			</div>
			     
       
       
      </div>
    </div>

<?php endwhile; ?>






<style>
  .lg-outer .lg-img-wrap, .lg-outer .lg-item, .lg-outer .lg-thumb-outer, .lg-outer .lg-toogle-thumb {
    background-color: #fff;
  }

  .lg-backdrop {
    background-color: #fff;
  }
</style>




<?php get_footer();?>