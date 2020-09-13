<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Edify</title>
    <link rel="icon" href="/storage/system_files/img/edify-logo.jpg">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/musicplayer.scss') }}" rel="stylesheet">

    <style>
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

        a {
            color: #F5F5F5;
            padding: 0;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-top: 5%;
            padding-right: 50%;
            color: #F5F5F5;
            font-family: 'Baloo Tamma 2', cursive;
            font-size: 80px;
        }

        .btnReady {
            border-radius: 25px;
            color: #F5F5F5;
            font-family: 'Baloo Tamma 2', cursive;
            font-size: 20px;
        }

        .edify {

            color: #F5F5F5;
            font-family: 'Baloo Tamma 2', cursive;
            font-size: 40px;
            margin-left: 5px;
            padding-top: 5px;
        }

        .logo {
            height: 5%;
            width: 5%;
            padding-top: 5px;
        }
    </style>
</head>
<body style="background-image: url('/storage/system_files/img/2846435-bg.jpg');">


    <nav class="navbar navbar-expand-md">
        <div class="container">
        
            <a class="navbar-brand d-flex">
                <img src="/storage/system_files/img/edify-logo.jpg" class="rounded-circle logo">
                <p class="edify">Edify</p>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <img src="/storage/{{ Auth::user()->image }}" height="25px" class="rounded-circle"/> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <div>
        <div class="content">
            <div class="title m-b-md">
                Go sing. <br />Go live.
            </div>
            <div style="padding-right: 50%;">
                @if (Route::has('login'))

                @auth
                <a href="/home/{{ Auth::user()->id }}"><button class="btn btn-success p-3 btnReady">Get Started</button></a>
                @else
                <a href="{{ route('login') }}"><button class="btn btn-success p-3 btnReady">Get Started</button></a>

                @if (Route::has('register'))
                @endif
                @endauth
                @endif
            </div>
        </div>
    </div>
    </div>
</body>

</html>