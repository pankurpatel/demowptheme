$(document).ready(function() {
    $(".hmbanner-inner").buoyant({
        numberOfItems: 10,
        minRadius: 5,
        maxRadius: 25,
        elementClass: 'circles',
        colliding: true
    });
    $(".hmservicestripe-inner").buoyant({
        numberOfItems: 15,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    $(".hmfindambulanceinner").buoyant({
        numberOfItems: 20,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    $(".hmdiscplan-inner").buoyant({
        numberOfItems: 5,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    $(".hmpromoplan-inner").buoyant({
        numberOfItems: 5,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    $(".hmreview-inner").buoyant({
        numberOfItems: 5,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    $(".footform-inner").buoyant({
        numberOfItems: 10,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    $(".footerinner-block").buoyant({
        numberOfItems: 5,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    $(".findloclist-inner").buoyant({
        numberOfItems: 5,
        minRadius: 5,
        maxRadius: 20,
        elementClass: 'circles',
        colliding: true
    });
    
// Before After Page Option 2 Slider
if( $(".before-after-slider .item").length) {
  $('.before-after-slider').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:4000,
    smartSpeed:1200,
    margin:0,
    nav:false,
    dots:true,
    responsiveClass:true,
    navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
    responsive:{
      0:{
          items:1
      },
      576:{
          items:1
      },
      1000:{
          items:1
      }
    }
  });
}
    $(window).on('resize', function() {
        ww = document.body.clientWidth;
        wh = document.body.clientHeight;
        if (ww < 992) {
            $('body').removeClass("fixed");
        }
    }).trigger('resize');
    // Header Sticky
    $(window).scroll(function() {
        if (ww > 991) {
            if ($(this).scrollTop() > 1) {
                $('body').addClass("fixed");
            } else {
                $('body').removeClass("fixed");
            }
        }
    });

     /*Navigation */
    if ($("#nav").length) {
        $("#nav li a").each(function () {
          if ($(this).next().length) {
            $(this).parent().addClass("parent");
          }
        });
        $("#nav li.parent").each(function () {
          if ($(this).has(".arrowclick").length <= 0) {
            $(this).append('<i class="arrowclick"> </i>');
          }
        });
        $(".arrowclick").on('click', function () {
            $(this).parents(".parent").siblings().find(".sub-menu").slideUp();
            $(this).siblings(".sub-menu").slideToggle();
            $(this).parents(".parent").siblings().find(".arrowclick").removeClass("active");
            $(this).toggleClass("active");
        });
    };
    // ---------Toggle js----------//

    $('#nav-icon').click(function(){
        $(this).toggleClass('open');
    });
    $("#nav-icon").click(function(){
        $("#nav").slideToggle();
    });

    // Footer Menu Toggle
    $(".footmenu-toggle").click(function(){
        $(this).parents(".footmenu-col").siblings().find(".footmenu").slideUp();
        $(this).parent().find(".footmenu").slideToggle();
        $(this).parents(".footmenu-col").siblings().find(".footmenu-toggle").removeClass("active");
        $(this).toggleClass("active");
    });

    // ---------Datepicker And hapbox js----------//
    $( ".datepicker" ).datepicker();
    // Custom Selectbox HeapBox
    if ($("select").length) {
        $("select").heapbox();
    }

	// Aos Initialize
	AOS.init({
		duration: 1200,
	});
// ---------Owl Carousel js----------//
if( $(".hmbanner-slider").length) {
    var owl = $(".hmbanner-slider");
    owl.owlCarousel({
        loop:true,
        autoplay:true,
        mouseDrag:true,
        autoplayTimeout:7000,
        animateOut: 'fadeOut',
        autoplaySpeed:800,
        smartSpeed:1200,			
        nav:true,
        dots:false,
        lazyLoad:true,
        items : 1,
        margin: 24,
        navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
        autoplayHoverPause: false
    });
}
// Home Service Slider
$('.hmserviceslider').owlCarousel({
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:800,
    smartSpeed:1200,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
})
// Home Certificate Slider
$('.hmcertificatslider').owlCarousel({
    loop:true,
    margin:24,
    nav:false,
    dots:false,
    autoplay:true,
    autoplaySpeed:800,
    smartSpeed:1200,
    autoplayTimeout:2000,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1

        },
        480:{
            items:2
        },
        768:{
            items:3
        },
        992:{
            items:4
        }
    }
})

// Home Doctor Slider
$('.hmdoctorslider').owlCarousel({
    animateOut: 'fadeOut',
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:7000,
    autoplaySpeed:800,
    smartSpeed:1200,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        575:{
            items:1
        },
        992:{
            items:1,
            mouseDrag: false,
            touchDrag: false,
        }
    }
})

// Home Discount Plan Slider
$('.hmdiscount-slider').owlCarousel({
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:800,
    smartSpeed:1200,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
})

// Home Promotion Plan Slider
$('.hmpromoplanslider').owlCarousel({
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:800,
    smartSpeed:1200,
    autoplayHoverPause:false,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2

        },
        992:{
            items:3
        }
    }
})

// Home Blog Slider
$('.blogslider').owlCarousel({
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:800,
    smartSpeed:1200,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
});

// Other Doctors Slider
$('.othrdoctor-slider').owlCarousel({
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:800,
    smartSpeed:1200,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
});

// Other Service Slider
$('.othrerviceslider').owlCarousel({
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:800,
    smartSpeed:1200,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        992:{
            items:3
        }
    }
})

// Other Service Slider
$('.reviewslider').owlCarousel({
    loop:true,
    margin:24,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplaySpeed:800,
    smartSpeed:1200,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        992:{
            items:1
        }
    }
})

  // Location details Page Gallery Slider
  $(".locgalleryslider").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 30,
    responsiveClass: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    dots: false,
    nav: true,
    navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 2
      },
      992: {
        items: 1

      }
    }
  });

// Home Gallery Slider
$('.hmgallery-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.hmgalleryslider-nav'
  });
  $('.hmgalleryslider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.hmgallery-slider',
    dots: false,
    centerMode: true,
    centerPadding: '0px',
    focusOnSelect: true,

    responsive: [
        {
        breakpoint: 768,
          settings: {
            centerMode: false,
            slidesToShow: 2
          }
        },
        {
        breakpoint: 480,
          settings: {
            centerMode: false,
            slidesToShow: 2
          }
        }
    ]

  });
});


if( $(".mfpyoutube").length){
//$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
$('.mfpyoutube').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    callbacks: {
    open:function () {
        $('html, body').addClass('mfphidden');
    },
    close:function () {
        $('html, body').removeClass('mfphidden');
    },
    //elementParse:function (item) {
        //item.el.css('width', 100)
        // feel free to modify here item object
    //}
    }
});
}

// Accordion
if ($(".accordion").length) {
  $('.accordion .acclink').click(function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next().slideUp();
    } else {
      //if ($('body').hasClass('desktop')) {
      $('.accordion .acclink').removeClass('active');
      $('.accordion .accord-detail').slideUp();
      //}
      $(this).addClass('active');
      $(this).next().slideDown();
    }
    return false;
  });
}

// Gallery Popup

if( $(".mfpgallery").length){
$('.mfpgallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
    enabled:true
    },
    callbacks: {
    open:function () {
        $('html, body').addClass('mfphidden');
    },
    close:function () {
        $('html, body').removeClass('mfphidden');
    },
    //elementParse:function (item) {
        //item.el.css('width', 100)
        // feel free to modify here item object
    //}
    }
});
}
// ---------End js----------//