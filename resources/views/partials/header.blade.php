<header>
    <div class="headerdiv1">
        <div class="container-fluid">
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
                @guest
                <div class="entSign">
                    <button type="button" class="enter">Մուտք</button>
                    <div class="enterField">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <h6>ՄՈՒՏՔ</h6>
                            <div class='orange'></div>
                            <label for="email"><i class="fas fa-user"></i></label>
                            <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Էլ․փոստ" required autofocus>
                            <label for="pass"><i class="fas fa-key"></i></label>
                            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Ծածկագիր" required>
                            <button type="button" name="fb"><a href=""><i class="fab fa-facebook"></i></a></button>
                            <button type="button" name="gm"><a href=""><i class="fab fa-google-plus-g"></i></a></button>
                            <p><a href="{{ route('password.request') }}">Մոռացե՞լ եք գաղտնաբառը</a></p>
                            <input type="submit" name="log" value="ՄՈՒՏՔ">
                        </form>
                    </div>
                </div>
                <button type="button" class="signUp"><a href="{{ route('register') }}">Գրանցվել <i class="fas fa-user" id="user"></i></a></button>
                @else
                        <div class="message"><a href=""><i class="fas fa-comment"></i></a><span></span></div>
                        <div class="snap"><a href=""><i class="fab fa-snapchat-ghost"></i></a><span></span></div>
                        <div class="plus"><a href=""><i class="fas fa-user-plus"></i></a></div>
                        <div class="profPic"><img src="{{ asset('storage/'.$user->avatar)}}" alt="profile picture"> <span class="toDown"><i class="fas fa-angle-down"></i></span>
                            <div class="dropDown">
                                <p><a href="/profile">իմ էջը</a></p>
                                <div class="liner"></div>
                                <p><a href="">խմբագրել</a></p>
                                <p><a href="">կարգավորումներ</a></p>
                                <p><a href="">օգնություն</a></p>
                                <div class="orange"></div>
                                <p><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></p>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </div>
                @endguest
                <div class="languages"><span class="arm">հայ</span><span class="en">eng</span></div>
            </div>
        </div>
    </div>
    <div class="logodiv">
        <div class="logo">
            <a href="homePage.html">
                <img src="images/iVarpet.png" alt="Varpet">
            </a>
        </div>
    </div>
</header>
<nav>
    {{ menu('main', 'partials.menus.main') }}
</nav>