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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
        
            html, body {
                      background: url("bac.jpg");
                background-color: #a1a8e6;
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                height: 100%;
                margin: 0;
                background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
            }
            .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
   
    color: white;
    text-align: center;
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
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
                text-align: center;
                font-family: 'Raleway', sans-serif;
                font-weight: 500;
                font-size: 18px;
                color: #ffffff;
            }

            .title {
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
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
         <nav class="navbar  navbar-light navbar-laravel navbar-left ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> 
              
                    {{ config('Home', 'Home') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/training') }}"> 
                    {{ config('Trening', 'Trening') }}
                    </a>

                     <a class="navbar-brand" href="{{ url('/diet') }}"> 
                    {{ config('Diety', 'Diety') }}
                    </a>

                 
                    <a class="navbar-brand" href="{{ url('/calc') }}"> 
                    {{ config('Kalkulatory', 'Kalkulatory') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/video') }}"> 
                    {{ config('Filmy', 'Filmy') }}
                    </a>

            @if (Route::has('login'))
               
                    @auth
                    <a class="navbar-brand" href="{{ url('/profiles') }}">
                    {{ config('Profil', 'Profil') }}
                        </a>
                    @endauth
                
            @endif
        
            @guest
                            <a class="navbar-brand" href="{{ route('login') }}">{{ __('Logowanie') }}</a>
                            <a class="navbar-brand" href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                        @else
                            <a class="navbar-brand">
                                <a id="navbar-brand" class="navbar-brand" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                    <a class="navbar-brand" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              
                            </a>
                        @endguest

               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">
                        <!-- Authentication Links -->
                       
                    </ul>
                </div>
            </div>
        </nav>
    </head>
    <body>
    
   
        <div class="title m-b-md">
                   Gym App
                </div>
            <div class="content">
               
                Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle 
                <br>
                poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza   <br>
                do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany   <br>
                przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował   <br>
                się w latach 60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty   <br>
                Lorem Ipsum, a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem   <br>
                przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus PageMaker
    
            </div>

        </div>
        <div class="footer">
  <p>Maciej Zawadzki, Zaawansowane aplikacje internetowe</p>
</div>
    </body>
</html>
