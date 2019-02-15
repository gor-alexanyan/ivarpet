

var rate=document.querySelectorAll(".rateStar");
var l=rate.length;
$(".rateStar").click(function(){
    var i=parseInt( $(this).attr("id"));
    for(var j=0; j<=i; j++){
        $(rate[j]).attr("class", "fas fa-star rateStar");
    }
    for(k=i+1; k<l; k++){
        $(rate[k]).attr("class", "far fa-star rateStar");
    }
});
$(".notes").click(function(){
    $(".records").css({"display":"block"});
    $(".setImgs").css({"display":"none"});
    $(".myInform").css({"display":"none"});
    $(this).css({"border-bottom":"4px solid #eb971a"})
    $(".pics").css({"border-bottom":"none"})
    $(".myInfo").css({"border-bottom":"none"})
});
$(".pics").click(function(){
    $(".records").css({"display":"none"});
    $(".setImgs").css({"display":"block"});
    $(".myInform").css({"display":"none"});
    $(this).css({"border-bottom":"4px solid #eb971a"});
    $(".notes").css({"border-bottom":"none"});
    $(".myInfo").css({"border-bottom":"none"});
});
$(".myInfo").click(function(){
    $(".records").css({"display":"none"});
    $(".setImgs").css({"display":"none"});
    $(".myInform").css({"display":"block"});
    $(this).css({"border-bottom":"4px solid #eb971a"});
    $(".pics").css({"border-bottom":"none"});
    $(".notes").css({"border-bottom":"none"});
});
var t=0;
$(".comments").click(function(){
    $(".commField").slideToggle();
    $(".newComment").slideToggle();
});
$(".smiles").click(function(){
    $(this).next(".stickers").toggleClass("open_stick");
});

$(".editing").click(function () {
    $(".edit_items").toggleClass("show_edits");
});

$(".followers_show").click(function () {
    $(".following_short").css({"display":"none"});
    $(".followers_short").css({"display":"block"});
	$(this).css({"color":"black"});
	$(".following_show").css({"color":"#969696"});
});
$(".following_show").click(function () {
    $(".followers_short").css({"display":"none"});
    $(".following_short").css({"display":"block"});
    $(this).css({"color":"black"});
	$(".followers_show").css({"color":"#969696"});
	
});
var x=0;
$(".bookmark").click(function(){
    if(!x){
        $(this).children(".save").html("<i class='fas fa-bookmark'></i>");
        $(this).children(".addToBookmarks").html("Հեռացնել էջանիշից");
       
        x++;
    }
   else{
        $(this).children(".save").html("<i class='far fa-bookmark'></i>");
        $(this).children(".addToBookmarks").html("Ավելացնել էջանիշից");
        x=0;
    }
});
var love=0;
$(".love").click(function(){
	if(!love){
		$(this).html('<i class="fas fa-heart"></i>');
		love++;
	}
	else{
		$(this).html('<i class="far fa-heart"></i>');
		love--;
	}
});

var x=0;
$(".replay").click(function(){
	if(!$(this).hasClass("opend")){
		$(this).parent().after('<div class="newComment"><img src="images/adults.png" alt="Profile picture" class="newTyperImg"> <textarea placeholder="Գրել մեկնաբանություն․․․"></textarea><button type="button" class="send_comm"><i class="fas fa-chevron-right"></i></button><div class="smile_part"><button type="button" class="smiles" onclick="show_div()"><i class="fas fa-smile"></i></button><div class="stickers"></div></div><div class="comm_addfile"><button class="addPic"><i class="fas fa-camera"></i></button> <input type="file" name="add_pic" class="add_pic"><div class="clear"></div></div></div>');
		$(this).addClass("opend")
	}              
});
function show_div(){
	  $(".newComment .stickers").toggleClass("open_stick");
};
$(".editing_img").click(function () {
    $(".edit_items_img").toggleClass("show_edit_items_img");
});
$(".imgs").click(function(e){
	$(".big_img").addClass("show_big_img");
});
$(".close_img_field").click(function(event){
	$(".big_img").removeClass("show_big_img");
});
$(".close").click(function(event){
	event.stopPropagation();
	$(".close_img").addClass("show_close_img");
});

$(".whatNews .stickers span").click(function(){
	var txt=$(".whatNews textarea").val();
	console.log(txt)
	var str=$(this).text();
	txt+=str;
	$(".whatNews textarea").val(txt);
})
