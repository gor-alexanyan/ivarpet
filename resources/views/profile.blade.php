<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/same.css')}}">
    <link href="{{ asset('css/account.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
@include('partials.header')
<div class="container">
    <aside class="profileImg">
        <div class="myPicture">
            <img src="{{ asset('storage/'.$user->avatar)}}" alt="Profile picture">
        </div>
        <div class="short">
            <span>կարճ տեղեկություն</span>
            <button type="button"><i class="fas fa-pencil-alt"></i></button>
            <p class="shortNote">{{$user->information}}</p>
        </div>
        <div class="advertisement"></div>
    </aside>
    <section>
        <span class="name">{{$user->name}} {{$user->surname}}</span>
        <address class="currentPlace">
            <i class="fas fa-map-marker-alt"></i>
            <span class="country">հհ,</span>
            <span class="home">0006,</span>
            <span class="currentCity">երևան</span>
            <button><i class="fas fa-pencil-alt"></i></button>
        </address>
        <p class="profession">մենեջեր</p>
        <p class="rating">ռեյթինգ</p>
        <div class="rate">
            <i class="far fa-star rateStar" id="0"></i>
            <i class="far fa-star rateStar" id="1"></i>
            <i class="far fa-star rateStar" id="2"></i>
            <i class="far fa-star rateStar" id="3"></i>
            <i class="far fa-star rateStar" id="4"></i>
        </div>
        <div class="upgrade">
            <span class="notes"><i class="fas fa-eye"></i> գրառումներ</span>
            <span class="pics"><i class="fas fa-camera"></i> նկարներ</span>
            <span class="myInfo"><i class="fas fa-user"></i> իմ <span class="littleBit">մասին</span></span>
            <div class="upgLine">
                <div class="underline"></div>
            </div>
            <div class="records">

                <div class="whatNews">
                    <img src="images/adults.png" alt="Profile picture">
                    <textarea  placeholder="Ի՞նչ նորություն ունեք․․․" ></textarea>
                    <button class="smiles"><i class="fas fa-smile"></i></button>
                </div>
                <div class="addfile">
                    <button class="addPic"><i class="fas fa-camera"></i></button>
                    <input type="submit" name="subPost" value="ՈՒՂԱՐԿԵԼ">
                    <div class="clear"></div>
                </div>
                <div class="posts">
                    <div class="oldPosts">
                        <img src="images/adults.png" alt="Profile picture">
                        <a href="" class="postOwner">joseph lee</a>
                        <button class="editing"><i class="fas fa-ellipsis-h"></i></button>
                        <p class="postTime">2017 ապր  2 <span class="postf">-ին</span></p>
                        <p class="oldText">Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ, ինչը մի անհայտ տպագրիչի տարբեր տառատեսակների</p>
                    </div>
                    <div class="attention">
                        <button class="love"><i class="fas fa-heart"></i></button>
                        <span class="loveCount">6</span>
                        <button class="comments"><i class="fas fa-comment-alt"></i></button>
                        <button class="share"><i class="fas fa-share"></i></button>
                        <span class="viewCount">23</span>
                        <button class="views"><i class="fas fa-eye"></i></button>
                        <div class="clear"></div>
                    </div>
                    <div class="commField">
                        <button type="button" class="showComm">Ցույց տալ բոլոր <span class="comms">5</span> մեկնաբանությունները</button>
                        <div>
                            <img src="images/adults.png" alt="Profile picture" class="typerImg">
                            <a href="" class="typer">mikayel tan</a>
                            <p class="commented">Lorm Ipsum-ը հանդիսացել է տպագրական արդյունաբերության ստանդարտ մոդելային տեքստ։</p>
                        </div>
                    </div>
                    <div class="newComment">
                        <img src="images/adults.png" alt="Profile picture" class="newTyperImg">
                        <textarea placeholder="Գրել մեկնաբանություն․․․"></textarea>
                    </div>
                </div>

            </div>
            <div class="setImgs">
                <div class="imgs">
                    <img src="images/adults.png" alt="picture">
                    <button class="close"><i class="fas fa-times"></i></button>
                </div>
                <div class="imgs middle">
                    <img src="images/adults.png" alt="picture">
                    <button class="close"><i class="fas fa-times"></i></button>
                </div>
                <div class="imgs">
                    <img src="images/adults.png" alt="picture">
                    <button class="close"><i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="myInform">
                <span class="psInfo">անձնական տեղեկատվություն</span>
                <div class="psDates">
                    <span class="userContacts first">հեռախոսահամար՝</span> <span class="phoneNumber r first"><span>+374</span><span>555</span><span>555</span> <a href=""><i class="fas fa-pencil-alt"></i></a></span>
                    <span class="userContacts">հասցե՝</span> <span class="userAddress r">ՀՀ,006,Երևան</span>
                    <span class="userContacts usermail">էլ–փոստ՝</span> <span class="userMail r"><a href="">{{$user->email}}</a></span>
                </div>
                <p class="mainInfo">հիմնական տվյալներ</p>
                <div class="psDates">
                    <span class="userContacts first">ծննդյան օրը՝</span> <span class="bornDate r first">1992 հունիսի 5 <a href=""><i class="fas fa-pencil-alt"></i></a></span>
                    <span class="userContacts">սեռ՝</span> <span class="genderInfo r">արական</span>
                </div>
            </div>

        </div>
    </section>
    <aside class="listPart">
        <div class="ulback">
            <ul class="our">
                <li><a href=""><i class="fas fa-home"></i> իմ էջը</a></li>
                <li><a href=""><i class="fas fa-bullhorn"></i> հայտարարություններ</a></li>
                <li><a href=""><i class="fas fa-comments"></i> նամակնեռ</a></li>
                <li><a href=""><i class="fas fa-user-friends"></i> ընկերներ <span class="friendsCount">15</span> </a></li>
            </ul>
            <div class="through"></div>
            <ul>
                <li><a href=""><i class="fas fa-home"></i> մեր մասին</a></li>
                <li><a href=""><i class="fas fa-car"></i> ծառայություններ</a></li>
                <li><a href=""><i class="fas fa-shopping-bag"></i> մատակարարներ</a></li>
                <li><a href=""><i class="fas fa-newspaper"></i> նորություններ</a></li>
                <li><a href=""><i class="fas fa-dollar-sign"></i> վճարումներ</a></li>
                <li><a href=""><i class="fas fa-edit"></i> խմբագրել</a></li>
                <li><a href=""><i class="fas fa-cog"></i> կարգավորումներ</a></li>
                <li><a href=""><i class="fas fa-question"></i> օգնություն</a></li>
            </ul>
        </div>
        <div class="advertisementR"></div>
    </aside>
</div>
    @include('partials.footer')

    </div>
    <script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{ asset('js/same.js')}}"></script>
    <script src="{{ asset('js/account.js')}}"></script>
    </body>
    </html>
