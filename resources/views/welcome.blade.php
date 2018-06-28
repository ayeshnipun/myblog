<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('/img/background.png');
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            svg {
                font: 10.5em 'Raleway';
                margin: 0 auto;
            }

            .text-copy {
                fill: none;
                stroke: white;
                stroke-dasharray: 6% 29%;
                stroke-width: 15px;
                stroke-dashoffset: 0%;
                animation: stroke-offset 5.5s infinite linear;
            }

            .text-copy:nth-child(1){
            	stroke: #ff0000;
            	animation-delay: -1;
            }

            .text-copy:nth-child(2){
            	stroke: #ffffff;
            	animation-delay: -2s;
            }

            .text-copy:nth-child(3){
            	stroke: #00ff00;
            	animation-delay: -3s;
            }

            .text-copy:nth-child(4){
            	stroke: #00ffff;
            	animation-delay: -4s;
            }

            .text-copy:nth-child(5){
            	stroke: #FDB731;
            	animation-delay: -5s;
            }

            @keyframes stroke-offset{
            	100% {stroke-dashoffset: -35%;}
            }
        </style>
    </head>
    <body>
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div>
                        <svg viewBox="0 0 1060 300">
                            <symbol id="s-text">
                                <text text-anchor="middle" x="50%" y="80%">TEC HOUR</text>
                                
                            </symbol>
                    
                            <g class="g-ants">
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                                <use xlink:href="#s-text" class="text-copy"></use>
                            </g>
                        </svg>      
                    </div>

                    <div class="links">
                        <a href="/blog">Blog</a>
                        <a href="/aboutus">About Us</a>
                        <a href="https://www.facebook.com/TecHour-2092875584315088/">Join Us On Facebook</a>
                        <a href="/contact">Contact</a>
                    </div>
                </div>
            </div>
        
    </body>
</html>
