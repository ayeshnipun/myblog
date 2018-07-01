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
        <link href="{{ asset('css/welcomeAnim.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            @font-face {
	font-family: 'CoreCircus2DDot1';
	src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_1_0.eot');
	src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_1_0.eot?#iefix') format('embedded-opentype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_1_0.woff2') format('woff2'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_1_0.woff') format('woff'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_1_0.ttf') format('truetype');
}

@font-face {
	font-family: 'CoreCircus';
	src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_8_0.eot');
	src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_8_0.eot?#iefix') format('embedded-opentype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_8_0.woff2') format('woff2'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_8_0.woff') format('woff'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/209981/333BF4_8_0.ttf') format('truetype');
}
            /* {
                $h1:  rgba(45,45,45,1);
                $blue: #98b5cc;
                $yellow: #ffcc00;
                $outline: rgba(#fff, .4);
                $shadow: rgba($yellow, .5);
            } */
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
            	stroke: black;
            	animation-delay: -1;
            }

            .text-copy:nth-child(2){
            	stroke: #ff0000;
            	animation-delay: -2s;
            }

            .text-copy:nth-child(3){
            	stroke: #40ff00;
            	animation-delay: -3s;
            }

            .text-copy:nth-child(4){
            	stroke: #00ffff;
            	animation-delay: -4s;
            }

            .text-copy:nth-child(5){
            	stroke: #ffffff;
            	animation-delay: -5s;
            }

            @keyframes stroke-offset{
            	100% {stroke-dashoffset: -35%;}
            }    

            h1 {
	            font-family: 'CoreCircus', sans-serif;
	            font-size: 14vw;
	            text-align: center;
	            line-height: 1;
	            margin: 0;
	            top: 50%;
	            left: 50%;
	            transform: translate(-50%, -50%);
	            position: absolute;
	            color: rgba(45,45,45,1);
	            letter-spacing: -.5rem;
	
	            &:before {
		            content: attr(data-heading);
		            position: absolute;
		            overflow: hidden;
		            color: #ffcc00;
		            width: 100%;
		            z-index: 5;
		            text-shadow: none;
		            left: 27%;
		            text-align: left;
		            animation: flicker 3s linear infinite;
	            }
            }

            @keyframes flicker {
            	0%, 19.999%, 22%, 62.999%, 64%, 64.999%, 70%, 100% {
            		opacity: .99;
            		text-shadow: -1px -1px 0 rgba(#fff, .4), 1px -1px 0 rgba(#fff, .4), -1px 1px 0 rgba(#fff, .4), 1px 1px 0 rgba(#fff, .4), 0 -2px 8px, 0 0 2px, 0 0 5px #ff7e00, 0 0 15px #ff4444, 0 0 2px #ff7e00, 0 2px 3px #000;
            	}
            	20%, 21.999%, 63%, 63.999%, 65%, 69.999% {
            		opacity: 0.4;
            		text-shadow: none;
            	}
            } 
        </style>
    </head>
    <body>
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div>
                        <h1 data-heading="i">Flicker</h1>
                        {{-- <svg viewBox="0 0 1060 200">
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
                        </svg>       --}}
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
