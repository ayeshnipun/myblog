
    <form action="{{ route('login') }}" method="post">
            @csrf

        <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div>Tec<span>Hour</span></div>
        </div>
        <br>
        <div class="login">
            <div>
                <input id="email" placeholder="E Mail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"><br>
                @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div>
                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required><br>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <br>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>
            </div>
            <br>
            <div>
                <input type="submit" value="Login">
                <br><br>
                <a class="btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>

                
        </div>
    </form>


<style>
    .btn-link{
        text-decoration: none;
    }
    @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

    body{
        overflow: hidden;
        background-image: url('/img/background.png');
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
    
    .grad{
    	position: absolute;
    	top: -20px;
    	left: -20px;
    	right: -40px;
    	bottom: -40px;
    	width: auto;
    	height: auto;
    	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
    	z-index: 1;
    	opacity: 0.7;
    }
    
    .header{
    	position: absolute;
    	top: calc(50% - 35px);
    	left: calc(50% - 255px);
    	z-index: 2;
    }
    
    .header div{
    	float: left;
    	color: #fff;
    	font-family: 'Exo', sans-serif;
    	font-size: 35px;
    	font-weight: 200;
    }
    
    .header div span{
    	color: #5379fa !important;
    }
    
    .login{
    	position: absolute;
    	top: calc(50% - 75px);
    	left: calc(50% - 50px);
    	height: 150px;
    	width: 350px;
    	padding: 10px;
    	z-index: 2;
    }
    
    .login input[type=email]{
    	width: 250px;
    	height: 30px;
    	background: transparent;
    	border: 1px solid rgba(255,255,255,0.6);
    	border-radius: 2px;
    	color: #fff;
    	font-family: 'Exo', sans-serif;
    	font-size: 16px;
    	font-weight: 400;
    	padding: 4px;
    }
    
    .login input[type=password]{
    	width: 250px;
    	height: 30px;
    	background: transparent;
    	border: 1px solid rgba(255,255,255,0.6);
    	border-radius: 2px;
    	color: #fff;
    	font-family: 'Exo', sans-serif;
    	font-size: 16px;
    	font-weight: 400;
    	padding: 4px;
    	margin-top: 10px;
    }
    
    .login input[type=submit]{
    	width: 250px;
    	height: 35px;
    	background: #fff;
    	border: 1px solid #fff;
    	cursor: pointer;
    	border-radius: 2px;
    	color: #a18d6c;
    	font-family: 'Exo', sans-serif;
    	font-size: 16px;
    	font-weight: 400;
    	padding: 6px;
    	margin-top: 10px;
    }
    
    .login input[type=submit]:hover{
    	opacity: 0.8;
    }
    
    .login input[type=submit]:active{
    	opacity: 0.6;
    }
    
    .login input[type=email]:focus{
    	outline: none;
    	border: 1px solid rgba(255,255,255,0.9);
    }
    
    .login input[type=password]:focus{
    	outline: none;
    	border: 1px solid rgba(255,255,255,0.9);
    }
    
    .login input[type=submit]:focus{
    	outline: none;
    }
    
    ::-webkit-input-placeholder{
       color: rgba(255,255,255,0.6);
    }
    
    ::-moz-input-placeholder{
       color: rgba(255,255,255,0.6);
    }
</style>















{{-- @extends('layouts.app')

@section('content') --}}
{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form> 
                    
                </div>
            </div>
            
        </div>
    </div>
</div> --}}
{{-- @endsection --}}
{{-- 
<section id="hire">
    <h1>LOGIN</h1>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="field name-box">
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" type="email" id="email" value="{{ old('email') }}"/>
            <label for="name">Email</label>
            <span class="ss-icon">check</span>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="field email-box">
            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
            <label for="email">{{ __('Password') }}</label>
            <span class="ss-icon">check</span>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
          
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
            </label>
        </div>
        <br>
        <div>
            <input class="button" type="submit" value="{{ __('Login') }}"/>
            <br><br><br>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>          
    </form>
</section>


<style>
    body {
        overflow: hidden;
        background-image: url('/img/background.png');
        font-size: 62.5%;
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        color: #B6B6B6;
    }

    body section {
        background: transparent;
        margin: 60px auto 120px;
        border-top: 15px solid #313A3D;
        text-align: center;
        padding: 50px 0 110px;
        width: 80%;
        max-width: 1100px;
    }

    body section h1 {
        margin-bottom: 40px;
        font-size: 4em;
        text-transform: uppercase;
        font-family: 'Lato', sans-serif;
        font-weight: 100;
        }

    form {
        width: 58.3333333333%;
        margin: 0 auto;
    }
    
    form .field {
        width: 100%;
        position: relative;
        margin-bottom: 15px;
    }

    form .field label {
        text-transform: uppercase;
        position: absolute;
        top: 0;
        left: 0;
        background: #313A3D;
        width: 100%;
        padding: 18px 0;
        font-size: 1.45em;
        letter-spacing: 0.075em;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }

    form .field label + span {
        font-family: 'SSStandard';
        opacity: 0;
        color: white;
        display: block;
        position: absolute;
        top: 12px;
        left: 7%;
        font-size: 2.5em;
        text-shadow: 1px 2px 0 #cd6302;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }

    form .field input[type="email"],
    form .field textarea {
        border: none;
        background: #E8E9EA;
        width: 100%;
        margin: 0;
        padding: 18px 0;
        padding-left: 19.5%;
        color: #313A3D;
        font-size: 1.4em;
        letter-spacing: 0.05em;
    }

    form .field input[type="email"]#msg,
    form .field textarea#msg {
        height: 18px;
        resize: none;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }

    form .field input[type="email"]:focus, form .field input[type="email"].focused,
    form .field textarea:focus,
    form .field textarea.focused {
        outline: none;
    }

    form .field input[type="email"]:focus#msg, form .field input[type="email"].focused#msg,
    form .field textarea:focus#msg,
    form .field textarea.focused#msg {
        padding-bottom: 150px;
    }

    form .field input[type="email"]:focus + label, form .field input[type="email"].focused + label,
    form .field textarea:focus + label,
    form .field textarea.focused + label {
        width: 18%;
        background: #FD9638;
        color: #313A3D;
    }

    form .field input[type="email"].focused + label,
    form .field textarea.focused + label {
        color: #FD9638;
    }

    form .field input[type="password"],
    form .field textarea {
        border: none;
        background: #E8E9EA;
        width: 100%;
        margin: 0;
        padding: 18px 0;
        padding-left: 19.5%;
        color: #313A3D;
        font-size: 1.4em;
        letter-spacing: 0.05em;
    }

    form .field input[type="password"]#msg,
    form .field textarea#msg {
        height: 18px;
        resize: none;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }

    form .field input[type="password"]:focus, form .field input[type="password"].focused,
    form .field textarea:focus,
    form .field textarea.focused {
        outline: none;
    }

    form .field input[type="password"]:focus#msg, form .field input[type="password"].focused#msg,
    form .field textarea:focus#msg,
    form .field textarea.focused#msg {
        padding-bottom: 150px;
    }

    form .field input[type="password"]:focus + label, form .field input[type="password"].focused + label,
    form .field textarea:focus + label,
    form .field textarea.focused + label {
        width: 18%;
        background: #FD9638;
        color: #313A3D;
    }

    form .field input[type="password"].focused + label,
    form .field textarea.focused + label {
        color: #FD9638;
    }
    
    form .field:hover label {
        width: 18%;
        background: #313A3D;
        color: white;
    }
    form input[type="submit"] {
        background: #FD9638;
        color: white;
        -webkit-appearance: none;
        border: none;
        text-transform: uppercase;
        position: relative;
        padding: 13px 50px;
        font-size: 1.4em;
        letter-spacing: 0.1em;
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        -webkit-transition: all 333ms ease-in-out;
        -moz-transition: all 333ms ease-in-out;
        -o-transition: all 333ms ease-in-out;
        -ms-transition: all 333ms ease-in-out;
        transition: all 333ms ease-in-out;
    }
    form input[type="submit"]:hover {
        background: #313A3D;
        color: #FD9638;
    }
    form input[type="submit"]:focus {
        outline: none;
        background: #cd6302;
    }
</style>


<script>
// Input Lock
$('textarea').blur(function () {
    $('#hire textarea').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('textarea + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('textarea + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:first-child input').blur(function () {
    $('#hire .field:first-child input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:first-child input + label + span').css({'opacity': 0});
        }
    });
});

$('#hire .field:nth-child(2) input').blur(function () {
    $('#hire .field:nth-child(2) input').each(function () {
        $this = $(this);
        if ( this.value != '' ) {
          $this.addClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 1});
        }
        else {
          $this.removeClass('focused');
          $('.field:nth-child(2) input + label + span').css({'opacity': 0});
        }
    });
});
</script> --}}