<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ivarpet.am - Գտիր քո վարպետին</title>

    <meta charset="UTF-8">
    <title>Varpet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/same.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slide.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}"  rel="stylesheet">
    <link href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}"  rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
@include('partials.header')
<section class="slider">
    <div class="slide">
        @foreach($sliders as $slider)
        <div class="sliders">
            <img src="{{ asset('storage/'.$slider->image) }}" alt="">
            <div class="text">
                <h1 class="master">{{ $slider->title }}</h1>
                <p>{{ $slider->description }}</p>
                <a href="{{ $slider->link }}">  <button type="button">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</button></a>
            </div>
        </div>
        @endforeach

    </div>
</section>
<section class="services">
    <div class="container">
        <h3>ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h3>
        <div class="row Service responsiveSlide">
        @foreach($services as $service)
            <div class="col-md-3 col-sm-6 col-xs-6 subsection">
                <div class="innerDiv" style="background-image: url('{{Voyager::image($service->image)}}');">
                    <a href=""><div class="back">
                            <div class="tools" style="background-image: url('{{Voyager::image($service->icon)}}');"></div>
                        </div></a>
                </div>

                <h5>{{ $service->title_am }}</h5>
                <div class='subOrange'></div>
                <p>{{ substr($service->desc_am,0,200) }}...</p>
                <a href="">Իմանալ ավելին</a>
            </div>
        @endforeach
            <div class="col-md-3 col-sm-6 col-xs-6  subsection">
                <div class="subsection4 innerDiv">
                    <a href="#"><div class="back">
                            <div class="house-sketch"></div>
                        </div></a>
                </div>
                <h5>ԱՅԼ ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h5>
                <div class='subOrange'></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <h3>ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h3>
        <div class="row Service responsiveSlide">
            <div class="col-md-3 col-sm-6 col-xs-6 subsection">
                <div class="subsection1 innerDiv">
                    <a href=""><div class="back">
                            <div class="tools"></div>
                        </div></a>
                </div>
                <h5>ՇԻՆԱՐԱՐԱԿԱՆ ԱՇԽԱՏԱՆՔՆԵՐ</h5>
                <div class='subOrange'></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 subsection">
                <div class="subsection2 innerDiv">
                    <a href=""><div class="back">
                            <div class="house"></div>
                        </div></a>
                </div>
                <h5>ՏԱՆ ՎԵՐԱՆՈՐՈԳՈՒՄ</h5>
                <div class='subOrange'></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6  subsection c3">
                <div class="subsection3 innerDiv">
                    <a href=""><div class="back">
                            <div class="conveyor"></div>
                        </div></a>
                </div>
                <h5>ՏՐԱՆՍՊՈՐՏԱՅԻՆ ՄԻՋՈՑՆԵՐ</h5>
                <div class='subOrange'></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6  subsection">
                <div class="subsection4 innerDiv">
                    <a href="#"><div class="back">
                            <div class="house-sketch"></div>
                        </div></a>
                </div>
                <h5>ԱՅԼ ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h5>
                <div class='subOrange'></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
        </div>
    </div>
</section>
<section class="slider">
    <div class="slide s2">
        @foreach($secondsliders as $secondslider)
            <div class="sliders">
                <img src="{{ asset('storage/'.$secondslider->image) }}" alt="">
                <div class="text">
                    <h1 class="master">{{ $secondslider->title }}</h1>
                    <p>{{ $secondslider->description }}</p>
                    <a href="{{ $secondslider->link }}">  <button type="button">ԻՄԱՆԱԼ ԱՎԵԼԻՆ</button></a>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section class="provide">
    <div class="container">
        <h3>ՄԱՏԱԿԱՐԱՐՆԵՐ</h3>
        <div class="row providers responsiveSlide">
            <div class="col-md-3 col-sm-3">
                <a href=""><div class="paint-brush provider"></div></a>
                <h5><a href="">ՇԻՆԱՐԱՐԱԿԱՆ ԽԱՆՈՒԹՆԵՐ</a></h5>
                <div class="ProvidersOrange"></div>
            </div>
            <div class="col-md-3 col-sm-3">
                <a href=""><div class="bedside-table provider"></div></a>
                <h5><a href="">ԿԱՀՈՒՅՔԻ ԽԱՆՈՒԹՆԵՐ</a></h5>
                <div class="ProvidersOrange"></div>
            </div>
            <div class="col-md-3 col-sm-3">
                <a href=""><div class="washing-machine provider"></div></a>
                <h5><a href="">ԿԵՆՑԱՂԱՅԻՆ ՏԵԽՆԻԿԱ</a></h5>
                <div class="ProvidersOrange"></div>
            </div>
            <div class="col-md-3 col-sm-3">
                <a href=""><div class="car-repair provider"></div></a>
                <h5><a href="">ԱՎՏՈՊԱՀԵՍՏԱՄԱՍԵՐ</a></h5>
                <div class="ProvidersOrange"></div>
            </div>
        </div>
    </div>
</section>
<section class="news">
    <h3>ՆՈՐՈՒԹՅՈՒՆՆԵՐ</h3>
    <button type="button" class="prev"><i class="fas fa-angle-left"></i></button>
    <div class="container">
        <div class="newsDivs responsiveSlide">
            <div class="col-md-3">
                <div class="portfolio10 newsImg"><div class="commentField">
                        <div class="view"><a href=""><i class="far fa-eye"></i></a><span>350</span></div>
                        <div class="comm"><a href=""><i class="fas fa-comment"></i></a><span>20</span></div>
                    </div></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ,որը հանդիսանում է ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
            <div class="col-md-3">
                <div class="blog2 newsImg"><div class="commentField">
                        <div class="view"><a href=""><i class="far fa-eye"></i></a><span>350</span></div>
                        <div class="comm"><a href=""><i class="fas fa-comment"></i></a><span>20</span></div>
                    </div></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
            <div class="col-md-3">
                <div class="action-america newsImg"><div class="commentField">
                        <div class="view"><a href=""><i class="far fa-eye"></i></a><span>350</span></div>
                        <div class="comm"><a href=""><i class="fas fa-comment"></i></a><span>20</span></div>
                    </div></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
            <div class="col-md-3">
                <div class="asphalt-car newsImg"><div class="commentField">
                        <div class="view"><a href=""><i class="far fa-eye"></i></a><span>350</span></div>
                        <div class="comm"><a href=""><i class="fas fa-comment"></i></a><span>20</span></div>
                    </div></div>
                <p>Lorem ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի կողմից
                    տարբեր տառատեսակների օրինակների գիրք ստեղծելու ջանքերի արդյունքն է</p>
                <a href="">Իմանալ ավելին</a>
            </div>
        </div>

    </div>
    <button type="button" class="next"><i class="fas fa-angle-right"></i></button>
</section>

@include('partials.footer')

</div>
<script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
<script src="{{ asset('slick/slick.min.js')}}"></script>
<script src="{{ asset('js/homePage.js')}}"></script>
<script src="{{ asset('js/same.js')}}"></script>
<script src="{{ asset('js/account.js')}}"></script>
</body>
</html>
