(function($){
  "user strict";

  $(document).on('ready',function() {
    background();
  });

  $(window).on("load", function() {
    checkSize();
    $(window).resize(checkSize);
    //preloader
    $("#preloader").delay(300).animate({
      "opacity" : "0"
      }, 500, function() {
      $("#preloader").css("display","none");
    });
  });


  function background() {
    var img=$('.bg_img');
    img.css('background-image', function () {
    var bg = ('url(' + $(this).data('background') + ')');
    return bg;
    });
  }

  
  //Function to the css rule
  function checkSize(){
    if (window.matchMedia('(max-width: 1199px)').matches) {
        // js code for responsive drop-down-menu-item with swing effect
        $(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function() {
          var element = $(this).parent("li");
          if (element.hasClass("open")) {
            element.removeClass("open");
            element.find("li").removeClass("open");
            element.find("ul").slideUp(500,"linear");
          }
          else {
            element.addClass("open");
            element.children("ul").slideDown();
            element.siblings("li").children("ul").slideUp();
            element.siblings("li").removeClass("open");
            element.siblings("li").find("li").removeClass("open");
            element.siblings("li").find("ul").slideUp();
          }
        });
      }
    }

    // menu options custom affix
  var fixed_top = $(".header-section");
  $(window).on("scroll", function(){
      if( $(window).scrollTop() > 50){  
          fixed_top.addClass("animated fadeInDown menu-fixed");
      }
      else{
          fixed_top.removeClass("animated fadeInDown menu-fixed");
      }
  });

  //js code for mobile menu 
  $(".menu-toggle").on("click", function() {
      $(this).toggleClass("is-active");
  });

  $('select').niceSelect();

  // Access instance of plugin
  $('.datepicker-here').data('datepicker')


  var options = {
    now: "12:35",
    twentyFour: false,
    title: 'Choose Your Time', 
  };
  $('.timepicker').wickedpicker(options);

  $('.choose-car-slider').owlCarousel({
    loop:true,
    margin:30,
    smartSpeed: 800,
    nav: true,
    dots: false,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items: 1,
            nav: true
        },
        768:{
            items: 2,
            nav: true
        },
        1000:{
            items:3,
            nav: true
        }
    }
  })

  $('.testimonial-slider').owlCarousel({
    loop:true,
    margin:0,
    smartSpeed: 800,
    nav: false,
    dots: true,
    //autoplay: true,
    responsiveClass:true,
    responsive:{
        0:{
            items: 1
        },
        1000:{
            items:1
        }
    }
  })

  $('.brand-slider').owlCarousel({
    loop:true,
    margin:30,
    smartSpeed: 800,
    nav: false,
    dots: false,
    //autoplay: true,
    responsiveClass:true,
    responsive:{
        0:{
            items: 1
        },
        575:{
          items: 2
        },
        1000:{
            items:3
        }
    }
  })

  $('.choose-car-slider-two').owlCarousel({
    loop:true,
    margin:30,
    smartSpeed: 800,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items: 1
        },
        768:{
            items: 3
        },
        1000:{
            items:4,
            nav: true
        }
    }
  });

  $('.blog-thumb-slider').owlCarousel({
    loop:true,
    margin:0,
    smartSpeed: 800,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items: 1
        },
        1000:{
            items:1,
            nav: true
        }
    }
  });

  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 80, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );

  // service grid and list view
  $(".view-style-toggle-area .grid-btn").on( "click", function() {
    $(".car-search-result-area").addClass("grid--view").removeClass("list--view");
    $(".car-item").removeClass("car-item--style2");
  });
  $(".view-style-toggle-area .list-btn").on( "click", function() {
    $(".car-search-result-area").addClass("list--view").removeClass("grid--view");
    $(".car-item").addClass("car-item--style2");
  });
  $(".view-style-toggle-area .view-btn").on( "click", function() {
    $(this).addClass("active").siblings().removeClass("active");
  });

   // Show or hide the sticky footer button
   $(window).on("scroll", function() {
    if ($(this).scrollTop() > 200) {
        $(".scroll-to-top").fadeIn(200);
    } else {
        $(".scroll-to-top").fadeOut(200);
    }
  });

  // Animate the scroll to top
  $(".scroll-to-top").on("click", function(event) {
    event.preventDefault();
    $("html, body").animate({scrollTop: 0}, 300);
  });

  // lightcase plugin init
  $('a[data-rel^=lightcase]').lightcase();


})(jQuery);