<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="cstmapp">
        @include('inc.welcomenav')    
        <main class="py-4">
            @include('inc.mes')
            @yield('content')
        </main>
    </div>
</body>

<style>
    html, body {
        background-image: url('img/background.png') !important;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .navbar{
        background-color: transparent !important;
    }
</style>
</html>
