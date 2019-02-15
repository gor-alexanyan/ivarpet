$('.likeIt').on('click',function () {

    var comment_id = $(this).attr('data-comment');
    var news_id = $(this).attr('data-news');



    $.ajax({
        method: 'POST',
        url: url,
        data: {news_id: news_id,comment_id: comment_id, _token: token},

        success: function (data) {
          console.log(data);
        }
        })


});