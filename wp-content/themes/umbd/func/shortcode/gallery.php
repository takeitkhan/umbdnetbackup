<?php 

function gallery_the_shortcode_func(  ) {
     
    ob_start();
 
    ?>
	<?php global $options;
$options = get_option( 'my_framework' ); ?>
 <?php 
       $gallery_opt = $options['gallery_section'];
       $gallery_ids = explode( ',', $gallery_opt );
       ?>
<div class="lightgallery gallery-filters" id="lightgallery">
 	<ul class="row footer-social">
      <?php
   		if ( ! empty( $gallery_ids ) ) {
         foreach ( $gallery_ids as $key => $gallery_item_id ) { 
           // echo wp_get_attachment_image( $gallery_item_id, 'full' );
           // echo wp_get_attachment_url( $gallery_item_id );
           // echo wp_get_attachment_image_src( $gallery_item_id, 'full' );
           // var_dump( wp_get_attachment_metadata( $gallery_item_id ) );
           $ingUrl = 	wp_get_attachment_url( $gallery_item_id );
        ?>
      <li class="img-effect2 col-4 <?php echo $key ?>"> 
         <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
        	<img style="width: 70px; height: 70px;" src="<?php echo $ingUrl; ?>" alt="">
            <div class="overlay-bx">
              <div class="overlay-icon"> 
                <span data-exthumbimage="<?php echo $ingUrl; ?>" data-src="<?php echo $ingUrl; ?>" class="check-km" title="">		
                  <i class="ti-zoom-in icon-bx-xs"></i> 
                </span>
              </div>
            </div>
        </div>
      </li>
       <?php  
           if($key == 4) {
             break; // because we don't want to continue the loop
           	}
            
           }
        }
     ?>
      <li style="max-width: auto; height: 70px; margin-top: 10px; line-height: 50px;" class="bg-white img-effect2 col-4  text-center">
        <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
        <a class="font-weight-bold text-primary" href="<?php echo home_url();?>/gallery">View All</a>
        </div>
      </li>
	</ul>
</div>
    <?php return ob_get_clean();
 
}
add_shortcode( 'gallery', 'gallery_the_shortcode_func' );


?>