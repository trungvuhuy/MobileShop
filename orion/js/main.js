(function($) {
    "use strict";

    /*---------------------
     tooltip
    --------------------- */
    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'top',
        container: 'body'
    });
    /*----------------------------
     scrollUp
    ------------------------------ */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*----------------------------
     mixItUp
    ------------------------------ */
    $('#mix-fil').mixItUp();
    /*----------------------------
     counterUp
    ------------------------------ */
    $('.counter2').counterUp({
        delay: 10,
        time: 1000
    });
    /*----------------------------
	price-slider active
   ---------------------------- */
      $( "#slider-range" ).slider({
       range: true,
       min: 40,
       max: 600,
       values: [ 100, 540 ],
       slide: function( event, ui ) {
        $( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
       }
      });
      $( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
       " - £" + $( "#slider-range" ).slider( "values", 1 ) ); 
    /*----------------------------
     wow js active
    ------------------------------ */
    new WOW().init();
    /*-------------------------------------------
    option chosen
    -------------------------------------------- */
    $(".orderby").chosen();

    $(".menu-carousel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 5,
        itemsCustom : [
        [0, 1],
        [450, 1],
        [480, 2],
        [600, 2],
        [700, 2],
        [768, 3],
        [992, 4],
		[1199, 5]
      ],
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    
    $(".feature-carousel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 4,
        itemsCustom : [
        [0, 1],
        [450, 1],
        [480, 2],
        [600, 2],
        [700, 2],
        [768, 2],
        [992, 3],
        [1199, 4]
        ],
        pagination: true,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    
    $(".feature-carousel-np").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 4,
        itemsCustom : [
        [0, 1],
        [450, 1],
        [480, 2],
        [600, 2],
        [700, 2],
        [768, 2],
        [992, 3],
        [1199, 4]
        ],
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $(".feature-carousel-np3").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 3,
        itemsCustom : [
        [0, 1],
        [450, 1],
        [480, 2],
        [600, 2],
        [700, 2],
        [768, 2],
        [992, 2],
        [1199, 3]
        ],
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    
    $(".feature-carousel-np6").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 6,
        itemsCustom : [
        [0, 1],
        [450, 1],
        [480, 2],
        [600, 2],
        [700, 2],
        [768, 4],
        [992, 4],
        [1199, 5]
        ],
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $(".new-arri-total").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 1,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1]
    });
    $("#client-carousel").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 1,
        pagination: false,
        navigation: true,
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [767, 1]
    });
    $(".total-usefull-product").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 1,
		itemsCustom : [
        [0, 1],
        [450, 1],
        [480, 2],
        [600, 2],
        [700, 2],
        [768, 1],
        [992, 1],
        [1199, 1]
        ],
        pagination: true,
        navigation: false,
    });
    $("#gallery_01").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        items: 4,
        pagination: true,
        navigation: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [480, 3]
    });
    
    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    jQuery('nav#dropdown').meanmenu();
    /*----------------------------

    /*----------------------------
     fancybox active
    ------------------------------ */
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
    /*----------------------------
         Elevate Zoom active
    ------------------------------ */
    $("#zoom_03").elevateZoom({
        constrainType: "height",
        zoomType: "lens",
        containLensZoom: true,
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: "active"
    });

    //pass the images to Fancybox
    $("#zoom_03").bind("click", function(e) {
        var ez = $('#zoom_03').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });

})(jQuery);