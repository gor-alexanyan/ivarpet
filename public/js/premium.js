$('#owl-demo').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    smartSpeed: 450,
    items: 1
});
if($(".text").hasClass("owl-item active")){
    $(this).css({"id":"change"});
}
else{
    $(".text").css({"id":"c"});
}
$("#owl-demo").on('change.owl.carousel', function (event){
    $(".master").slideUp();
    $(".vary").fadeOut();
    $(".toKnow").slideUp();
    setTimeout(function(){
        $(".master").slideDown();
        $(".vary").fadeIn();
        $(".toKnow").slideDown();
    }, 1000);
});

var owl1 = $("#owl-demoS");

owl1.owlCarousel({
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
        650:{
            items:2,
            nav:true
        },
        992:{
            items:3,
            nav:true
        },
        1200:{
            items:4,
            nav:true,
            loop:false
        }
    }
});

var owl1 = $("#owl-demoSS");

owl1.owlCarousel({
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
        650:{
            items:2,
            nav:true
        },
        992:{
            items:3,
            nav:true
        },
        1200:{
            items:4,
            nav:true,
            loop:false
        }
    }
});
