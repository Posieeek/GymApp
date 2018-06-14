<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GymApp') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
 html, body {    
    background: url("bac.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
            }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar  navbar-light navbar-laravel navbar-left">
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

            @if (Route::has('login'))
               
                    @auth
                    <a class="navbar-brand" href="{{ url('/home') }}"> 
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
