/*show and hide .Types fields*/
$(".filtrField").click(function (event) {
 if(!$(this).hasClass("shows")){
      $(".filtrField").removeClass("shows");
     $(this).toggleClass("shows");
 }
    else{
         $(".filtrField").removeClass("shows");
    }
});
$(".Types").click(function(event){
    event.stopPropagation();
});
/*placing li-s in visible part */
$("#servtype li").click(function(){
    var str=$(this).html();
    $("#servtype .chosen").html("<i>"+str+"</i>");
    $("#servtype span").css({"font-size":"10px"});
    $(".filtrField").removeClass("shows");
});
$("#provtype li").click(function(){
    var str=$(this).html();
    $("#provtype .chosen").html("<i>"+str+"</i>");
    $("#provtype span").css({"font-size":"10px"});
    $(".filtrField").removeClass("shows");
});
$("#ratetype li").click(function(){
    var str=$(this).html();
    $("#ratetype .chosen").html(str);
    $("#ratetype span").css({"font-size":"10px"});
    $(".filtrField").removeClass("shows");
});
$("#persontype li").click(function(){
    var str=$(this).html();
    $("#persontype .chosen").html("<i>"+str+"</i>");
    $("#persontype span").css({"font-size":"10px"});
    $(".filtrField").removeClass("shows");
});
/**/
$("input[name='place']").focus(function (){
    $(".filtrField").removeClass("shows");
})
/*add to bookmarks hover actions*/
$(".save").click(function(){
    if($(this).children("i").hasClass("far fa-bookmark")){
        $(this).html("<i class='fas fa-bookmark'></i>");
        $(".addToBookmarks").html("Հեռացնել էջանիշից");
    }
    else{
        $(this).html("<i class='far fa-bookmark'></i>");
        $(".addToBookmarks").html("Ավելացնել էջանիշներում");
    }

});

