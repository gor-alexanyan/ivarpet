$("section").click(function(event){
$("input").attr("readonly", true);
    $("input").css({"border":"none"});
	if($(".gender").css({"display":"none"})){
		$(".gender").css({"display":"inline-block"});
		$("select[class='gender_field']").css({"display":"none"});
		var gender=$("select[class='gender_field']").find(":selected").text();
		$('p[class="gender"]').html(gender);
	}
	if($(".knowing_langs").css({"display":"inline-block"})){
	   $(".langs").css({"display":"inline-block"});
	$(".knowing_langs").css({"display":"none"});
		var langs=document.querySelectorAll(".choosed");
		$('p[class="langs"]').empty();
		$('p[class="langs"]').html(langs);
	}
});
$("input").click(function(event){
	event.stopPropagation();
});
$(".change").click(function (event) {
	event.stopPropagation();
    $("input").attr("readonly", true);
    $("input").css({"border":"none"});
	$(".typing_pass").children("input").removeAttr("readonly");
    $(this).parent().children("input").removeAttr("readonly");
    $(this).parent().children("input").css({"border":"1px solid #a3a3a3"});
    $(this).parent().children("input").focus();
});
$(".change_pass").click(function(event){
	event.stopPropagation();
	$(".big_img").addClass("show_big_img");
	$(".typing_pass input").removeAttr("readonly");
});
$(".cancel").click(function(){
	$(".big_img").removeClass("show_big_img");
});
$(".close_img_field").click(function(){
	$(".big_img").removeClass("show_big_img");
});

var de_activate=0;
$(".deactivate").click(function(){
	if(!de_activate){
		$(this).children("i").animate({right:"15px"}, "slow");
		$(this).css("background-color","#cccccc");
		de_activate++;
	}
	else{
		$(this).children("i").animate({right:"-10px"}, "slow");
		$(this).css("background-color","#ed9920");
		de_activate--;
	}
	
});
$(".legacy").click(function(){
	if(de_activate){
        $(".no_legal_men").css("color","#000");
        $(".legal_men").css("color","#a3a3a3");
	}
	else{
        $(".no_legal_men").css("color","#a3a3a3");
        $(".legal_men").css("color","#000");
}
});
$(".chng_gender").click(function(){
	$(".gender").css({"display":"none"});
	$("select[class='gender_field']").css({"display":"inline-block"});
});
$("select[class='gender_field']").click(function(event){
	event.stopPropagation();
});
$(".chang_knowing").click(function(event){
	event.stopPropagation();
	$(".langs").css({"display":"none"});
	$(".knowing_langs").css({"display":"inline-block"});
	$(".knowing_langs input").removeAttr("readonly");
	$(".knowing_langs input").focus();
	var old=$('p[class="langs"]').html();
	$('p[class="langs"]').html('');
	$(".choosed_field").html(old);
	$(".choosed_field span").addClass("choosed");
	$(".choosed_field i").show();
});
$(".knowing_langs").click(function(event){
	event.stopPropagation();
});

document.body.onkeydown=witeSpace;
function witeSpace(k){
	if(k.keyCode==32){
		$(".choosed_field").append('<span class="choosed"><b></b><i class="fas fa-times"></i></span>');
			var n=$("input[name='new_langs']").val();
		$(".choosed:last").children("b").html(n);
			$("input[name='new_langs']").val("");
		$(".choosed i").on('click',function(){
			$(this).parent().remove();
		})
	}
}

