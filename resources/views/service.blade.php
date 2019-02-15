<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ivarpet.am - Մուտք կայք</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/same.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slide.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('textition-master/styles.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
<body>
<div>
    @include('partials.header');

   <section class="slider">
        <div class="slide">
            <div class="sliders">
                <img src="images/27.jpg" alt="">
                <div class="text">
                    <h1 class="master">VARPET</h1>
                    <p>There are many variations of passages</p>
                    <a href="">  <button type="button">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</button></a>
                </div>
            </div>

            <div class="sliders">
                <img src="images/construction-worker.png" alt="">
                <div class="text">
                    <h1 class="master">VARPET</h1>
                    <p>There are many variations of passages</p>
                    <a href="">  <button type="button">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</button></a>
                </div>
            </div>
        </div>

    </section>
    @foreach($services as $k =>$service)
        @if($k%2 == 0)
    <section class="container structural middl">
        <div class="container">
        <img class="structPic" src =" {{ asset('storage/'.$service->image)}} ">
        <div class="subscription r">
            <h4>{{ $service->title_am  }}</h4>
            <p>{{ $service->desc_am  }}</p>
            <a href="" class="rr">Իմանալ ավելին</a>
        </div>
        </div>
    </section>

    @else
    <section class="container restoration middl">
        <div class="container">
        <div class="subscription l">
            <h4>{{ $service->title_am  }}</h4>
            <p>{{ $service->desc_am  }}</p>
            <a href="" class="ll">Իմանալ ավելին</a>
        </div>
        <img class="resttPic" src=" {{ asset('storage/'.$service->image)}} ">
        </div>
    </section>
        @endif
        @endforeach


    @include('partials.footer');
</div>
<script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{ asset('slick/slick.min.js')}}"></script>
<script src="{{ asset('textition-master/textition.js')}}"></script>
<script src="{{ asset('js/homePage.js')}}"></script>
<script src="{{ asset('js/same.js')}}"></script>
<script src="{{ asset('js/login.js')}}"></script>
</body>
</html>