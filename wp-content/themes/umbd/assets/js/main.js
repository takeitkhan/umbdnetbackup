jQuery('.product-carousal').owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsiveClass: true,
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        768:{
          items: 3
        },
        1024:{
          items: 4
        }
    },
});


jQuery('.service-carousal').owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsiveClass: true,
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        768:{
          items: 3
        },
        1024:{
          items: 4
        }
    },
});


jQuery('.home-slider').owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    //autoplayTimeout:5000,
    responsiveClass: true,
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        768:{
          items: 1
        },
        1024:{
          items: 1
        }
    },
  	//autoplaySpeed: 1000,
});