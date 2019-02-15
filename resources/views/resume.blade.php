<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=" {{ asset('css/resume.css')}}" type="text/css" rel="stylesheet">
    <link href=" {{ asset('css/same.css')}}" type="text/css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="main">
    <header>
        <div class="headerdiv1">
            <div class="container-fluid">
                <div>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i><span class="city">Երևան</span><span class="date">22.05.2018</span><span class="time">20:45</span><span class="day">Երեքշաբթի</span>
                    </div>
                    <div class="entered">
                        <div class="search">
                            <form action="" >
                                <button type="button" class="searchBtn"><i class="fas fa-search"></i></button>
                                <input type="text" name="search" placeholder="Որոնում" id="search">
                            </form>
                        </div>
                        <div class="message"><button class="msg"><i class="fas fa-comment"></i></button><span></span>
                            <div class="last_msg">
                                <h5>Վերջին հաղորդագրություններ</h5>

                                <div>
                                    <a href=""> <div class="pic_of_user"></div>
                                        <div class="note_info"> <span>liam payne</span><span class="note_time">15:39</span><div class="clear"></div><p>Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբեր...</p><p class="be_line"></p></div>
                                        <div class="clear"></div></a>
                                </div>
                                <div>
                                    <a href=""> <div class="pic_of_user"></div>
                                        <div class="note_info"> <span>liam payne</span><span class="note_time">15:39</span><div class="clear"></div><p>Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբեր...</p><p class="be_line"></p></div>
                                        <div class="clear"></div></a>
                                </div>
                                <div>
                                    <a href=""> <div class="pic_of_user"></div>
                                        <div class="note_info"> <span>liam payne</span><span class="note_time">15:39</span><div class="clear"></div><p>Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբեր...</p><p class="be_line"></p></div>
                                        <div class="clear"></div></a>
                                </div>
                                <a href=""><button type="button">Տեսնել բոլորը</button></a>
                            </div>
                        </div>
                        <div class="snap"><button class="notificate"><i class="fab fa-snapchat-ghost"></i></button><span></span>
                            <div class="last_notes">
                                <h5>Ծանուցումներ</h5>
                                <div>
                                    <a href=""> <div class="pic_of_user"></div>
                                        <div class="note_info"> <span>liam payne</span><span class="note_time">15:39</span><div class="clear"></div><p>Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբեր...</p><p class="be_line"></p></div>
                                        <div class="clear"></div></a>
                                </div>
                                <div>
                                    <a href=""> <div class="pic_of_user"></div>
                                        <div class="note_info"> <span>liam payne</span><span class="note_time">15:39</span><div class="clear"></div><p>Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբեր...</p><p class="be_line"></p></div>
                                        <div class="clear"></div></a>
                                </div>
                                <div>
                                    <a href=""> <div class="pic_of_user"></div>
                                        <div class="note_info"> <span>liam payne</span><span class="note_time">15:39</span><div class="clear"></div><p>Lorem Ipsum-ը հանդիսացել է տպագրական արդյունաբեր...</p><p class="be_line"></p></div>
                                        <div class="clear"></div></a>
                                </div>
                                <a href=""> <button type="button">Տեսնել բոլորը</button></a>
                            </div>
                        </div>
                        <div class="plus"><a href=""><i class="fas fa-user-plus"></i></a></div>
                        <div class="profPic"><img src="images/profPic.png" alt="profile picture"> <span class="toDown"><i class="fas fa-angle-down"></i></span>
                            <div class="dropDown">
                                <p><a href="">իմ էջը</a></p>
                                <div class="liner"></div>
                                <p><a href="">խմբագրել</a></p>
                                <p><a href="">կարգավորումներ</a></p>
                                <p><a href="">օգնություն</a></p>
                                <div class="orange"></div>
                                <p><a href="">ելք</a></p>

                            </div>
                        </div>
                        <div class="languages"><span class="arm">հայ</span><span class="en">eng</span></div>
                        <a href="bookmarks.html" class="bm"><i class="fas fa-bookmark"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logodiv">
            <div class="logo">
                <a href="">
                    <img src="images/varp-logo.png" alt="Varpet">
                </a>
            </div>
        </div>
    </header>
    <nav>
        <div class="container-fluid">
            <ul class="mainUl">
                <li><a href="">ԳԼԽԱՎՈՐ</a></li>
                <li id="prem"><a href="">ՊՐԵՄԻՈՒՄ</a></li>
                <li id="serv"><a href="">ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</a>
                    <ul>
                        <li class="subli" data-img="images/construction-worker.png"><a href="">շինարարական ապրանքներ</a></li>
                        <li class="subli" data-img="images/action.png"><a href="">տան վերանորոգում</a></li>
                        <li class="subli" data-img="images/construction-worker.png"><a href="">տրանսպորտային միջոցներ</a></li>
                        <li class="subli" data-img="images/construction-worker.png"><a href="">այլ ծառայություններ</a></li>
                        <li class="liImg"><img src="images/action.png" alt="action"> <!--<img src="" alt="action">--></li>
                    </ul>
                </li>
                <li id="prv"><a href="">ՄԱՏԱԿԱՐԱՐՆԵՐ</a>
                    <ul>
                        <li class="subli" data-img="images/ashtray-book-condo-298842.png"><a href="">շինարարական խանութներ</a></li>
                        <li class="subli" data-img="images/construction-worker.png"><a href="">կահույքի խանութներ</a></li>
                        <li class="subli" data-img="images/action.png"><a href="">կենցաղային տեխնիկայի խանութներ</a></li>
                        <li class="subli" data-img="images/construction-worker.png"><a href="">ավտոպահեստամասերի խանութներ</a></li>
                        <li class="liImg"> <img src="images/ashtray-book-condo-298842.png" alt="action"></li>
                    </ul>
                </li>
                <li id="news"><a href="">ՆՈՐՈՒԹՅՈՒՆՆԵՐ</a></li>
                <li id="conUs"><a href="">ԿԱՊ ՄԵԶ ՀԵՏ</a></li>
                <li><button class="more"><i class="fas fa-caret-square-down"></i></button></li>
            </ul>
        </div>
    </nav>
    <div id="app">
    <div class="equal_to">
        <aside class="left_side">
            <div>
                <ul>
                    <li><a href="">Հիմնական</a></li>
                    <li><a href="">Աշխատանքային փորձ</a></li>
                    <li><a href="">Կրթություն</a></li>
                    <li><a href="">Հմտություններ</a></li>
                    <li><a href="">Լեզուներ</a></li>
                    <li><a href="">Երաշխավորագրեր</a></li>
                    <li><a href="">Հետաքրքրություններ</a></li>
                </ul>
            </div>
        </aside>
        <section>

            <form action="{{ url('resume') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="name">Անուն</label>
                <label for="surname">Ազգանուն</label>
                <div class="clear"></div>
                <input name="name" type="text" id="name" v-model="name">
                <input name="surname" type="text" id="surname" v-model="surname">
                <div class="clear"></div>
                <label for="profession">Մասնագիտություն</label><div class="clear"></div>
                <input name="profession" type="text" id="profession" v-model="profession">
                <div class="resume_pic">
                    <img :src="avatar" style="width: 105px;height: 106px; ">
                    <input type="file" name="resume_pic" @change="GetImage">
                    <p>Բեռնել նկար</p>
                </div>
                <div class="clear"></div>
                <label for="bday">Ծննդյան ամսաթիվ</label>
                <label for="address">Հասցէ</label>
                <div class="clear"></div>
                <input name="b_day" type="number" min="1" max="31" placeholder="00" id="bday" v-model="b_day">
                <select name="b_month"  id="bmonth" v-model="b_month">
                    <option value="01">հունվար</option>
                    <option value="02">փետրվար</option>
                    <option value="03">մարտ</option>
                    <option value="04">ապրիլ</option>
                    <option value="05">մայիս</option>
                    <option value="06">հունիս</option>
                    <option value="07">հուլիս</option>
                    <option value="08">օգոստոս</option>
                    <option value="09">սեպտեմբեր</option>
                    <option value="10">հոկտեմբեր</option>
                    <option value="11">նոյեմբեր</option>
                    <option value="12">դեկտեմբեր</option>
                </select>
                <input name="b_year" type="number" min="1940" max="2019" placeholder="0000" v-model="b_year">
                <input name="address" type="text"  id="address" v-model="address">
                <div class="clear"></div>
                <label for="gender">Սեռ</label>
                <div class="clear"></div>
                <label class="gender_type" for="one">Արական</label> <input name="gender" type="radio"  id="one" v-model="gender" value="Արական">
                <label class="gender_type" for="two">Իգական</label><input name="gender" id="two" type="radio" v-model="gender" value="Իգական">
                <div class="clear"></div>
                <div class="" >
                    <label for="work">Աշխատանքային փորձ</label>
                    <div class="clear"></div>
                    <example-component> </example-component>
                    {{--<textarea id="work" name="work_experience[]" data-vue="work_experience"  v-model="work_experience"></textarea>--}}
                    <textarea id="work" name="work_experience[]" data-vue="work_experience"  v-on:focusout="addFind" ></textarea>
                    <button type="button" class="add_area" v-on:click="render">+</button>
                    <div class="clear"></div>
                </div>
                <div class=""><label for="edu">Կրթություն</label> <div class="clear"></div>
                    <textarea id="edu" name="education[]" data-vue="education" v-model="education"></textarea><button type="button"  class="add_area">+</button> <div class="clear"></div></div>
                <div class=""><label for="ability">Հմտություններ</label> <div class="clear"></div>
                    <textarea id="ability" name="ability[]" v-model="ability"></textarea><button type="button" class="add_area">+</button> <div class="clear"></div></div>
                <div class=""><label for="lang">Լեզուներ</label> <div class="clear"></div>
                    <textarea id="lang" name="lang[]" v-model="lang"></textarea><button type="button"  class="add_area">+</button> <div class="clear"></div></div>
                <div class=""><label for="certificate">Երաշխավորագրեր</label> <div class="clear"></div>
                    <textarea id="certificate" name="certificate[]" v-model="certificate"></textarea><button type="button"  class="add_area">+</button> <div class="clear"></div></div>
                <div class=""><label for="interests">Հետաքրքրություններ</label> <div class="clear"></div>
                    <textarea id="interests" name="hobby[]" v-model="hobby"></textarea><button type="button"  class="add_area">+</button><div class="clear"></div></div>
                <input type="button" name="view" value="Դիտել" >
                <input type="submit" name="send" value="ՈՒղարկել">
            </form>
            <div class="big_img">
                <div class="resume_style">
                    <div class="cv_name">
                        <span>@{{ name }} @{{ surname }}</span>
                        <p>@{{ address }}</p>
                        <p>@{{ b_day }}.@{{ b_month }}.@{{ b_year }}</p>
                        <p> @{{ gender }}</p>
                        <p class="cv_profession">@{{ profession }}</p>
                    </div>
                    <div class="cv_pic">
                        <img :src="avatar" id="blah">
                    </div>
                    <div class="clear"></div>
                    <div class="l">
                        <h2>կրթություն</h2>
                        <div class="lines"></div>
                        <p>
                            @{{ education }}
                        </p>
                    </div>
                    <div class="r">
                        <h2>հմտություններ</h2>
                        <div class="lines"></div>
                        <p>
                            @{{ ability }}
                        </p>
                    </div>
                    <div class="clear"></div>
                    <div class="l">
                        <h2>աշխատանքային փորձ</h2>
                        <div class="lines"></div>
                        <p>@{{ work_experience }}</p>


                    </div>
                    <div class="r">
                        <h2>լեզուներ</h2>
                        <div class="lines"></div>
                        <p>@{{ lang }}</p>
                    </div>
                    <div class="clear"></div>
                    <div class="l">
                        <h2>երաշխավորագրեր</h2>
                        <div class="lines"></div>
                        <p>@{{ certificate }}</p>
                    </div>
                    <div class="r">
                        <h2>հետաքրքրություններ</h2>
                        <div class="lines"></div>
                        <p>@{{ hobby }} </p>
                    </div>
                    <div class="clear ender"></div>
                    <a href="" class="ivarpet">ivarpet.am</a>
                    <div class="clear"></div>
                </div>
                </div>
        </section>
        <aside class="listPart">
            <div class="ulback">
                <ul class="our">
                    <li><a href=""><i class="fas fa-home"></i> իմ էջը</a></li>
                    <li><a href=""><i class="fas fa-comments"></i> նամակներ</a></li>
                    <li><a href="followers.html"><i class="fas fa-user-friends"></i>Հետևորդներ <span class="friendsCount">15</span> </a></li>
                    <li><a href="following.html" class="following_part"><i class="fas fa-user"></i>Հետևում է </a></li>
                </ul>
                <div class="through"></div>
                <ul>
                    <li><a href=""><i class="fas fa-th-list"></i> լրահոս</a></li>
                    <li><a href=""><i class="fas fa-newspaper"></i>  Իմ նորությունները</a></li>
                    <li><a href=""><i class="fas fa-dollar-sign"></i> վճարումներ</a></li>
                    <li><a href="settings.html" class="settings_part"><i class="fas fa-cog"></i> կարգավորումներ</a></li>
                    <li><a href=""><i class="fas fa-user-circle"></i> Թափուր աշխատատեղեր</a></li>
                    <li><a href=""><i class="fas fa-question"></i> օգնություն</a></li>
                </ul>
            </div>
            <div class="advertisementR"></div>
        </aside>
    </div>
    </div>
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
<script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{ asset('js/same.js')}}"></script>
<script src=" {{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/resume.js')}}"></script>
</body>
</html>