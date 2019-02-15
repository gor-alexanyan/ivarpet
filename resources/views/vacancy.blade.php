<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/vacancies.css')}}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/same.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<div class="main">
    @include('partials.header');
    <div class="equal_to">
        <section>
                <p class="vacancy">Թափուր աշխատատեղեր</p>
            @if(\Auth::check())
                <button  type="button" class="add_work">+ Ավելացնել աշխատանք</button>
            @endif
                <div class="clear"></div>
            @foreach($vacancy as $vacancies)
                    <div class="vacancy_field">
                        <img src="{{ asset('storage/'.$vacancies->user_avatar) }}" class="comp_img">
                        <div class="vacancy_info">
                            <p class="work_name">{{ $vacancies->work_name }}</p>
                            <span class="deadline">Deadline</span>
                            <div class="clear"></div>
                            <p class="company_name">{{ $vacancies->user_name }}</p>
                            <span class="deadline_time"><span class="day">{{ $vacancies->dead_day }}</span>.
                                <span class="month">{{ $vacancies->dead_month }}</span>.
						<span class="year">{{ $vacancies->dead_year }}</span></span>
                        </div>
                        <div class="clear"></div>
                        <div class="work_description">
                            <div class="describe">
                                <h6>Աշխատանքի նկարագրություն</h6>
                                <p>{{ $vacancies->job_desc }}</p>
                            </div>
                            <div class="abilities">
                                <h6>Պահանջվող հմտություններ</h6><div class="clear"></div>
                                <p>{{ $vacancies->skills }}</p>
                            </div>
                            <div class="clear"></div>
                            <button type="button" class="createResume"><a href="{{ url('/resume') }}">Լրացնել ռեզյումե</a></button>
                            <div class="clear"></div>
                        </div>
                    </div>
            @endforeach
                <div class="addWork">
                    <div>
                        <h5>Ավելացնել աշխատանք</h5>
                        <button type="button" class="close_adding"><i class="fas fa-times"></i></button>
                        <div class="clear"></div>
                        <div class="line_draw"></div>
                        <form method="post" action="{{ url('vacancy') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="main_content">
                            @if(\Auth::check())
                            <input name="user_name" type="hidden" value="{{ Auth::user()->name }}">
                            <input name="user_avatar" type="hidden" value="{{ Auth::user()->avatar }}">
                            @endif
                            <label for="nameOfComp">Հաստիք</label><div class="clear"></div>
                            <input name="vacancy" type="text" id="nameOfComp" ><div class="clear"></div>
                            <label for="description">Աշխատանքի նկարագրություն</label>
                            <label for="req_ability">Պահանջվող հմտություններ</label>
                            <div class="clear"></div>
                            <textarea name="jobDesc" id="description"></textarea>
                            <textarea name="skills" id="req_ability"></textarea>
                            <div class="clear"></div>
                            <label for="deadline">Աշխատանքի վերջնաժամկետ</label><div class="clear"></div>
                                <input name="dead_day" type="number" min="1" max="31" id="deadline" placeholder="00">
                                <select name="dead_month">
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
                                <input name="dead_year" type="number" min="2019" max="2050"  placeholder="0000">
                            <div class="clear"></div>
                        </div>
                        <div class="line_draw"></div>
                        <button type="button" class="cancel">Չեղարկել</button>
                        <button type="submit" class="save_work">Պահպանել</button>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
        </section>
        <aside class="listPart">
            <div class="ulback">
                <ul class="our">
                    <li><a href=""><i class="fas fa-home"></i> իմ էջը</a></li>
                    <li><a href=""><i class="fas fa-bullhorn"></i> հայտարարություններ</a></li>
                    <li><a href=""><i class="fas fa-comments"></i> նամակներ</a></li>
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
    @include('partials.footer');
</div>
<script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{ asset('js/same.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{ asset('js/vacancies.js')}}"></script>
</body>
</html>