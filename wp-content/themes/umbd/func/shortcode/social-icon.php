<?php 

function social_icon_the_shortcode_func(  ) {
     
    ob_start();
 
    ?>
	<?php global $options;
$options = get_option( 'my_framework' ); ?>
   <ul class="list-inline m-a0 footer-social">
     <li><a href="<?php echo $options['fb_link'] ?>" class="site-button text-white facebook circle "><i class="fa fa-facebook"></i></a></li>
     <li><a href="<?php echo $options['youtube_link'] ?>" class="site-button youtube text-white circle "><i class="fa fa-youtube"></i></a></li>
     <li><a href="<?php echo $options['linkedin_link'] ?>" class="site-button text-white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
     <li><a href="<?php echo $options['instagram_link'] ?>" class="site-button text-white instagram circle "><i class="fa fa-instagram"></i></a></li>
     <li><a href="https://api.whatsapp.com/send?phone=<?php echo $options['whatsapp_link'] ?>" class="site-button whatsapp circle text-white"><i class="fa fa-whatsapp"></i></a></li>
	</ul>
 
    <?php return ob_get_clean();
 
}
add_shortcode( 'social-icon', 'social_icon_the_shortcode_func' );


?>