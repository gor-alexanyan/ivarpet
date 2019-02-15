var x=0;
var y=0;
/*open and close search field*/
$(".searchBtn").click(function () {
    if(x==0){
        $("#search").animate({width:"80%", padding:"5px 10px 9px", transition:"all 1s ease"});
        x++;
    }
    else {
        if(document.querySelector("#search").value==""){
            $("#search").animate({width:"0",paddingLeft:"0", paddingRight:"0"});
            x=0;
        }
    }
    if($(".enterField").hasClass("showEnterField")){
        $(".enterField").toggleClass("showEnterField");
    }

});
/*open and close enter field*/
$(".enter").click(function(event){
    $(".enterField").toggleClass("showEnterField");
	event.stopPropagation();
});
$(".enterField").click(function(event){
    event.stopPropagation();
});

$(".msg").click(function (event) {
    $(".dropDown").removeClass("show_dropDown");
    $(".last_notes").removeClass("shw");
    $(".last_msg").toggleClass("shw");
    event.stopPropagation();
});
$(".last_msg").click(function () {
    event.stopPropagation();
});

$(".notificate").click(function (event) {
    $(".dropDown").removeClass("show_dropDown");
    $(".last_msg").removeClass("shw");
    $(".last_notes").toggleClass("shw");
    event.stopPropagation();
});
$(".last_notes").click(function () {
    event.stopPropagation();
})
/**/
$(".more").click(function (){
    if($("#conUs").css("display") == "none"){
        $("#conUs").addClass("activeMenu");
        $("#conUs").css({"top": "63px", "right": "108px"});
        $("nav").css({"padding-bottom": "34px"})
    }
    else{
        $("#conUs").removeClass("activeMenu");
        $("nav").css({"padding-bottom": "24px"});
    }
    if ($("#news").css("display") == "none") {
        $("#news").addClass("activeMenu");
        $("#news").css({"top": "84px", "right": "73px"});
        $("nav").css({"padding-bottom": "64px"})
    }
    else{
        $("#news").removeClass("activeMenu");
    }
    if ($("#prv").css("display") == "none") {
        $("#prv").addClass("activeMenu");
        $("#prv").css({"top": "102px", "right": "79px"});
        $("nav").css({"padding-bottom": "92px"});
        $(".prvBody").css({"display":"none"});
    }
    else{
        $("#prv").removeClass("activeMenu");
    }
    if ($("#serv").css("display") == "none") {
        $("#serv").addClass("activeMenu");
        $("#serv").css({"top": "120px", "right": "48px"});
        $("nav").css({"padding-bottom": "130px"});
        $(".servBody").css({"display":"none"});
    }
    else{
        $("#serv").removeClass("activeMenu");
    }
    if ($("#aboutUs").css("display") == "none") {
        $("#aboutUs").addClass("activeMenu");
        $("#aboutUs").css({"top": "140px", "right": "86px"});
        $("nav").css({"padding-bottom": "158px"});
    }
    else{
        $("#aboutUs").removeClass("activeMenu");
    }
});
var y=0;
$(".toDown").click(function(event){
    $(".last_msg").removeClass("shw");
    $(".last_notes").removeClass("shw");
    $(".dropDown").toggleClass("show_dropDown");
    event.stopPropagation();
});
$("body").click(function(event){
    $(".dropDown").removeClass("show_dropDown");
	$(".enterField").removeClass("showEnterField");
    $(".last_msg").removeClass("shw");
    $(".last_notes").removeClass("shw");
});
$(".dropDown").click(function(event){
     event.stopPropagation();
});
$(".toDown").click(function(event){
     event.stopPropagation();
});

$('.subli').hover(function () {
    var subliSrc=$(this).attr('data-img');
    $('.liImg img').attr('src',subliSrc);

});

$(".big_img").click(function(event){
	$(this).removeClass("show_big_img");
});
$(".big_img div").click(function(event){
	event.stopPropagation();
});

$(".chatAction").click(function(){
    if($(".chat_space").hasClass("noShow")){
         $(".chatAction i").attr("class", "far fa-envelope");
        $(".chatAction i").css({"color": "#000"});
        $(this).css({"background-color":"#f3efef"});
    }
    else{
         $(".chatAction i").attr("class", "far fa-envelope-open");
        $(".chatAction i").css({"color": "#fff"});
        $(this).css({"background-color":"#f2b762"});
    }
    $(".chat_space").toggleClass("noShow");
})
/*first slide of each page*/
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
if($(".text").hasClass("owl-item active")){
    $(this).css({"id":"change"});
}
else{
    $(".text").css({"id":"c"});
}
$("#owl-demo").on('change.owl.carousel', function (event){
    $(".master").hide();
    $(".master").addClass("go_to_right");
    $(".vary").hide();
    $(".vary").addClass("go_to_left");
    $(".toKnow").fadeOut();
    setTimeout(function(){
        $(".master").show();
        $(".master").removeClass("go_to_right");
        $(".vary").show();
        $(".vary").removeClass("go_to_left");
        $(".toKnow").fadeIn();
    }, 1000);
}).trigger('change');



