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
