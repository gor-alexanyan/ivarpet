$(".add_work").click(function(){
	$(".addWork").addClass("adding_work");
});
$(".cancel").click(function(){
	$(".addWork").removeClass("adding_work");
});
$(".close_adding").click(function(){
	$(".addWork").removeClass("adding_work");
});



$(".vacancy_field").click(function(){
	if($(this).hasClass("showed")){
        $(".vacancy_field").children(".work_description").slideUp();
        $(".showed .work_description").slideUp();
        $(this).removeClass("showed");
	}
	else{
        $(".vacancy_field").children(".work_description").slideUp();
        $(".vacancy_field").removeClass("showed");
        $(this).children(".work_description").slideDown();
        $(this).addClass("showed");
	}
});
		
	