$('input[name="view"]').click(function(){
	$(".big_img").addClass("show_big_img");
});
// $(".add_area").click(function(){
//     var name= $(this).parent().children("textarea:last").attr('name');
//     $(this).parent().children("textarea:last").after("<textarea name='"+name+"'></textarea>");
// });

$(document).on('click',".big_img",function(event){
    $(this).removeClass("show_big_img");
});

$(document).on('click',".big_img div",function(event){
    event.stopPropagation();
});