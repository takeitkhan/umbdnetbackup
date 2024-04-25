<?php global $options; 
$options = get_option( 'my_framework' ); ?> 
	 <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top pt-5"  style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/background/bg3.png); background-size: cover;">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer_widget'); ?>
                  
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6 text-left "> 
                      <span>Copyright © 2021 <a href="<?php echo home_url() ?>" target="_blank"> United Machinery Bangladesh.</a>All Rights Reserved.</span> <br>
                      <span>Developed By <a href="https://tritiyo.com">Tritiyo Limited</a></span>
                      
                  
                  </div>
                    <div class="col-md-6 col-sm-6 text-right ">
                      <?php /*
                        <ul class="list-inline m-a0">
                            <li><a href="<?php echo $options['fb_link'] ?>" class="site-button text-white facebook circle "><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo $options['youtube_link'] ?>" class="site-button youtube text-white circle "><i class="fa fa-youtube"></i></a></li>
                            <li><a href="<?php echo $options['linkedin_link'] ?>" class="site-button text-white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="<?php echo $options['instagram_link'] ?>" class="site-button text-white instagram circle "><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=<?php echo $options['whatsapp_link'] ?>" class="site-button whatsapp circle text-white"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                        */ ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop style1 white icon-up" type="button"><i class="fa fa-arrow-up"></i></button>



</div>


<div class="icon-bar d-none d-lg-block">
     <div class="my-2 email_address">
        <a role="button" class="">
          <span><?php echo $options['email'] ?></span>
          <i class="fa fa-envelope-o"></i> 
      </a> 
     </div>
    <div class="phone_number">
           <a role="button" class="">
              <span><?php echo $options['phone'] ?></span>
              <i class="fa fa-phone"></i>
          </a> 
    </div>
  </div>







<!-- JAVASCRIPT FILES ========================================= -->

<script src="<?php echo get_template_directory_uri();?>/assets/js/combining.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js?<?php echo rand(0,999);?>"></script>


<?php if(!empty($options['home_popup_ads'])) { ?>
  <script>

    setTimeout(function() {
          jQuery("#homePopupAdsModal").modal('show');
    }, 2000);
  </script>
<?php } ?>


<script>
/*
  $(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

	  sync1.owlCarousel({
		items : 1,
		nav: true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 8000,
		smartSpeed: 3000,
        autoplay: 3000,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
		navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
	  }).on('changed.owl.carousel', syncPosition);

	  sync2.on('initialized.owl.carousel', function () {
		  sync2.find(".owl-item").eq(0).addClass("current");
		}).owlCarousel({
		items : slidesPerPage,
		dots: false,
		nav: false,
		margin:20,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100,
		responsive:{
			0:{
				items:2
			},
			480:{
				items:2
			},			
			768:{
				items:3
			},
			1024:{
				items:4
			},
			1400:{
				items:4
			}
		}
	  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).index();
		//sync1.data('owl.carousel').to(number, 300, true);
		
		sync1.data('owl.carousel').to(number, 300, true);
		
	});
});
  */
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
// Hero slider JS
$('.hero-slider').owlCarousel({
	//animateOut: 'slideOutDown',
	//xanimateIn: 'heartBeat',
	items:1,
	//loop:false,
	nav:false,
	dots: true,
  	//loop: true,
  	//autoplay: 1500,
  	//autoplaySpeed: 1000,
})


</script>
<?php wp_footer();?>
</body>
</html>