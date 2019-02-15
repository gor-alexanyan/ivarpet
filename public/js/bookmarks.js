var x=0;
$(".bookmark").click(function(){
    if(!x){
        $(this).children(".save").html("<i class='far fa-bookmark'></i>");
        $(this).children(".addToBookmarks").html("Ավելացնել էջանիշին");
       
        x++;
    }
   else{
        $(this).children(".save").html("<i class='fas fa-bookmark'></i>");
        $(this).children(".addToBookmarks").html("Հեռացնել էջանիշից");
        x=0;
    }
});
$("input[name='all']").click(function () {
    if($(this).attr("checked")){
        $(".filtrField input").attr("checked", false);
    }
    else{
        $(".filtrField input").attr("checked", true);
    }
});


