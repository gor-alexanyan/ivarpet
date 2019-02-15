
$(".replay").click(function(){
        $(this).after('<div class="replyPost"><img src="images/adults.png" alt="user"><textarea placeholder="Գրել մեկնաբանություն․․․" class="newReply"></textarea><button><i class="fas fa-camera"></i></button><button><i class="fas fa-smile"></i></button></div>');
})
var comm=document.querySelector(".newReply").value;

