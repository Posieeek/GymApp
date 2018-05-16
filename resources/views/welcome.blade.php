<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>XD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
                      background: url("bac.jpg");
                background-color: #a1a8e6;
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                margin: 0;
                background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
            }

            .full-height {
                height: 10vh;
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
                align-items: center;
                text-align: center;
                margin-top: 5px;
                font-weight: 600;
                font-size: 44px;
            }

            .links > a {
            
                color: #ffffff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {

                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Domek</a>
                    @else
                        <a href="{{ route('login') }}">Logowanie</a>
                        <a href="{{ route('register') }}">Rejestracja</a>
                    @endauth
                </div>
            @endif
            
            <div class="content">
                

                <div class="links">

                    <a href="{{ url('/home') }}">Home</a>
                    <a href="https://kfd.pl">Trening</a>
                    <a href="https://magdagessler.pl">Diety</a>
                    <a href="https://filmweb.pl">Filmy</a>
                    <a href="https://github.com/laravel/laravel">Zdjęcia</a>

                   
                </div>

            </div>

        </div>
         <div class="title m-b-md">
                   Lorem ipsum
                </div>
    </body>
</html>
