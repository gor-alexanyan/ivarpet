<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Գրանցում կայքում</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/same.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
@include('partials.header')
<section>
    <div class="container">
        <h3>ԳՐԱՆՑՈՒՄ</h3>
        <div class="orangeG"></div>

        <div class="row">
            <div class="inpFields col-md-7">
                <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="logIn" id="jjj">
                    @csrf
                    <div class="signAs">
                        <p>Գրանցվել որպես<sup>*</sup></p>
                        <input name="person" type="checkbox" id="fiz" value="fizPerson"><label for="fiz">Ֆիզիկական անձ</label>
                        <input name="person" type="checkbox" id="legal" value="legalPerson"><label for="legal" id="legalPerson">Իրավաբանական անձ</label>
                    </div>
                    <div class="name">
                        <label for="name" class="Nname">Անուն<sup>*</sup></label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="surname">
                        <label for="surname" class="Sname">Ազգանուն<sup>*</sup></label>
                        <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
                    </div>
                    <label for="login" id="logLab">Մուտքանուն<sup>*</sup></label>
                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                    <label for="mailOrPhone">Էլ․ փոստ կամ հեռախոսահամար</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    <label for="password">Գաղտնաբառ<sup>*</sup></label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="repeatPass">Կրկնել գաղտնաբառը<sup>*</sup></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <label for="information" class="Leg">Լրացուցիչ տեղեկություններ</label>
                    <textarea name="information" rows="6" cols="62" id="information" class="ifLegal"></textarea>
                    <div class="agree">
                        <input name="agreement" type="checkbox" id="agreement" required><label for="agreement">Ես համաձայ եմ</label>
                        <a href="">Ընդհանուր դրույթներին ու պայմաններին</a>
                    </div>
                    <div class="signIN">
                        <input name="signIN" type="submit" value="ԳՐԱՆՑՎԵԼ">
                    </div>
                    <div class="col-md-6">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-6">

                        @if ($errors->has('surname'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-6">

                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>


                        <div class="col-md-6">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    <div class="col-md-6">
                        @if ($errors->has('information'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('information') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if ($errors->has('avatar'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                        @endif
                    </div>


                </form>
            </div>
                <div class="col-md-5 profilePic">
                    <div class="img"><div><i class="far fa-image"></i></div></div>
                    <p>Վերբեռման առավելագույն չափը 10 MB</p>
                    <input name="avatar" type="button" value="Բեռնել նկար" formaction="" id="avatar" >
                    <input name="avatar" type="file" value="Բեռնել նկար"  formaction="" id="avatar" form="jjj">
                </div>
            </div>
        </div>

</section>

@include('partials.footer')

</div>
<script src="{{ asset('js/jquery-3.3.1.js')}}"></script>
<script src="{{ asset('js/login.js')}}"></script>
<script src="{{ asset('js/same.js')}}"></script>
</body>
</html>
