<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slide.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=" {{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('css/owl.theme.green.min.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/same.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/newsPage.css')}}">
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
    <section class="news">
        <h3>ՆՈՐՈՒԹՅՈՒՆՆԵՐ</h3>
        <div class="container-fluid">
            <div class=" newsDivs responsiveSlide" >
                @foreach($news as $news_item)
                    <div class="newsImage col-md-3">
                        <div class=" newsImg"><img src="{{ asset('storage/'.$news_item->image)}}"> <div class="commentField">
                            <div class="view"><a href=""><i class="far fa-eye"></i></a><span id="visit_count">{{ $news_item->visit_count }}</span></div>
                            <div class="comm"><a href=""><i class="fas fa-comment"></i></a>
                                <span>3</span></div>
                        </div></div>
                        {!! substr($news_item->desc,0,300) !!}...
                        <p style="margin: 0;padding: 0;"><a href="{{ route('news.show', $news_item->slug) }}">Իմանալ ավելին</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="container">
        <div class="pageInation">
            <span>{{ $news->appends(['sort' => 'votes'])->links() }}</span>
        </div>
    </section>
    <footer>
        <div class="footerInfo">
            <div class="container footerContent">
                <div class="logodiv footerLogo">
                    <div class="logo">
                        <a href="homePage.html">
                            <img src="images/Varpet.png" alt="Varpet">
                        </a>
                    </div>
                </div>
                <div class="foot">
                    <div class="inf row">
                        <div class="aboutUs col-md-3">
                            <h5>ՄԵՐ ՄԱՍԻՆ</h5>
                            <div class="footerOrangeLine"></div>
                            <p>Կան Lorem Ipsum-ի շատ տարբերակներ,սակայն շատերը աղավաղվել են տարաբնույթ, երբեմն նույնիկ լատիներենից շատ հեռու և անհավանական
                                բառերի և հումորի ավելացման արդյունքում։
                            </p>
                        </div>
                        <div class="serv col-md-3">
                            <h5>ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h5>
                            <div class="footerOrangeLine"></div>
                            <ul>
                                <li><a href="">Շինարարական աշխատանքներ</a></li>
                                <li><a href="">Տան վերանորոգում</a></li>
                                <li><a href="">Տրանսպորտային միջոցներ</a></li>
                                <li><a href="">Այլ ծառայություններ</a></li>
                            </ul>
                        </div>
                        <div class="prov col-md-3">
                            <h5>ՄԱՏԱԿԱՐԱՐՆԵՐ</h5>
                            <div class="footerOrangeLine"></div>
                            <ul>
                                <li><a href="">Շինարարական խանութներ</a></li>
                                <li><a href="">Կահույքի խանութներ</a></li>
                                <li><a href="">Կենցաղային տեխնիկա</a></li>
                                <li><a href="">Ավտոպահեստամասեր</a></li>
                            </ul>
                        </div>
                        <div class="conn col-md-3 last">
                            <h5>ԿԱՊ ՄԵԶ ՀԵՏ</h5>
                            <div class="footerOrangeLine"></div>
                            <p><i class="fas fa-phone"></i> <span>+374</span> <span>123</span><span> 456</span> <span>88</span></p>
                            <addres><i class="fas fa-map-marker-alt"></i><span>ՀՀ,</span><span>0006,</span><span>Երևան</span></addres>
                            <p class="gmail"><i class="far fa-envelope"></i> <span>varpet@gmail.com</span></p>
                        </div>

                    </div>
                </div>
                <div class="icons">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-google-plus-g"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div  class="copyRight">
            <div class="container">
                <div class="rights">
                    <i class="far fa-copyright"></i><span>2018 ԲՈԼՈՐ ԻՐԱՎՈՒՆՔՆԵՐԸ ՊԱՇՏՊԱՆՎԱԾ ԵՆ</span><a href=""><img src="images/Layer%20184.png" alt="ArmBit" class="Armbit"></a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="js/jquery-3.3.1.js"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/newsPage.js"></script>
<script src="js/same.js"></script>
</body>
</html>
