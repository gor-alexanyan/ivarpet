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
    $(".underline").css({"margin-left":"0px"});
});
$(".pics").click(function(){
    $(".records").css({"display":"none"});
    $(".setImgs").css({"display":"block"});
    $(".myInform").css({"display":"none"});
    $(".underline").css({"margin":"auto"});
});
$(".myInfo").click(function(){
    $(".records").css({"display":"none"});
    $(".setImgs").css({"display":"none"});
    $(".myInform").css({"display":"block"});
    $(".underline").css({"margin-right":"0px"});
});
var t=0;
$(".comments").click(function(){
		$(".commField").slideToggle();
		$(".newComment").slideToggle();	
});

