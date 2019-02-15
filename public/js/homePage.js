
$('#owl-demo1').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    smartSpeed: 450,
    items: 1
});


var owl = $("#owl-demo2");

owl.owlCarousel({

    dots: false,
    autoplay: true,
    loop:true,
    smartSpeed: 450,
    items : 4, //10 items above 1000px browser width
    itemsDesktop : [1000,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,2], // betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0
    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
});
var owl1 = $("#owl-demo3");

owl1.owlCarousel({
    nav:true,
    dots: false,
    autoplay: true,
    loop:true,
    smartSpeed: 450,
    items : 4, //10 items above 1000px browser width
    itemsDesktop : [1000,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,2], // betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0
    itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
    responsive:{
        0:{
            items:1,
            nav:true
        },
        750:{
            items:3,
            nav:true
        },
        652:{
            items:2,
            nav:true
        },
        1250:{
            items:4,
            nav:true,
            loop:false
        }
    }
});

