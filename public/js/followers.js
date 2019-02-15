var t=0;
$(".remove").click(function(){
    if(!t){
        $(this).children("i").attr('class', 'far fa-bookmark');
        t++;
    }
   else{
        $(this).children("i").attr('class', 'fas fa-bookmark');
        t--;
    }
});
$(".follow").mouseover(function(){
	$(this).parent().children(".action_follower").addClass("fol");
});
$(".follow").mouseout(function(){
	$(this).parent().children(".action_follower").removeClass("fol");
});
$(".action_follower").mouseover(function(){
	$(this).addClass("fol");
});
$(".action_follower").mouseout(function(){
	$(this).removeClass("fol");
})


