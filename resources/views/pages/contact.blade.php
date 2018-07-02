@extends('layouts.cstmapp')

@section('content')
<div class="container text-center">
    <p class="fbTxt">Click <a class="fbLink" href="http://">here</a> to join us with facebook</p>
    <p class="txtOR">OR</p>
    <p class="emailTxt">Email us @ <span>nipun.yesh@gmail.com</span></p>
</div>
    
@endsection

<style>
    .fbTxt{
        font-size: 50px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-top: 12% !important;
    }

    .fbLink{
        color: brown;
    }

    .fbLink:hover{
        color: brown;
        text-decoration: none;
    }

    .txtOR{
        font-size: 70px;
    }

    .emailTxt{
        font-size: 50px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;    
    }

    span{
        color: aqua;
    }
</style>