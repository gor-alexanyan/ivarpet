<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>{{ $news->title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/slide.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" {{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('css/owl.theme.green.min.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/same.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/news.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div>
    @include('partials.header');
    <section class="slider">
        <div id="owl-demo" class="owl-carousel owl-theme">

            <div class="item1 sliders">
                <div>
                    <div class="text">
                        <h1 class="master">VARPET</h1>
                        <p class="vary">There are many variations of passages</p>
                        <a href="" class="toKnow">  <button type="button">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</button></a>
                    </div>
                </div>
            </div>

            <div class="item2 sliders">
                <div class="text">
                    <h1 class="master">VARPET</h1>
                    <p class="vary">There are many variations of passages</p>
                    <a href="">  <button type="button" class="toKnow">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="newsField">
            <h3>նորություններ</h3>
            <div class="newsorangeLine"></div>
            <h2>{{ $news->title }}</h2>
            <p class="newsDate">{{ $news->created_at }}</p>
            <p class="content">{!! $news->desc !!}  </p>

        </div>

    </section>
    <section class="commentsField">
        <p>մեկնաբանություններ</p>
        <div class="justLine">
            <div class="justOrange"></div>
        </div>

    <div id="app">

            <input type="hidden" value="{{ $news->id }}" name="news_id">
            <div class="postField">
                <img src="{{ asset('storage/'.$user->avatar) }}" alt="user">
                <textarea placeholder="Գրել մեկնաբանություն․․․" name="comment" v-model="commentData" ></textarea>
                <button><i class="fas fa-smile" ></i></button>
                <div class="stickers"></div>
                <div class="clear"></div>
                <div class="actions">
                <button><i class="fas fa-camera"></i></button>
                <input name="subPost" type="submit" value="ՈՒՂԱՐԿԵԼ" @click="addComment(news.id)">
                <div class="clear"></div>
            </div>
        </div>

    </div>

        @if(\Auth::check())
@foreach($news->comments as $comment)
            <div class="oldPost">

                <img src="{{ asset('storage/'.$user->avatar) }}" alt="user">
                <span class="userName">{{ auth()->user()->name }} </span>
                <p>{{ $comment->comment }}</p>
                <button class="likeIt" >հավանել</button>
                <span class="likesCount">{{ $comment->like_count }}</span>
                <button class="replay">պատասխանել</button>

            </div>
@endforeach
            <button class="showOlders">Ցույց տալ բոլոր <span>5</span>մեկնաբանությունները</button>
        @endif
    </section>
</div>
<script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
<script src=" {{ asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src=" {{ asset('js/news.js')}}"></script>
<script src=" {{ asset('js/same.js')}}"></script>
<script src=" {{ asset('js/app.js')}}"></script>

</body>
</html>