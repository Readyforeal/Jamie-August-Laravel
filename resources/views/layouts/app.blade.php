<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jamie August') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="/js/particles/particles.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light font-weight-bold">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--<img src="/svg/logo.svg" height="40" class="pl-2">-->
                    <span class="font-weight-bold">Jamie August</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ url('/services') }}">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">My Work</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-primary font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-primary font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('home') }}">My Account</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <!-- Fixed navbar -->

        <nav class="navbar fixed-top navbar-expand-md navbar-dark p-0" id="scrolledNavbar">
            <div class="container p-3" style="background-color: #101010">
                <a class="navbar-brand pl-3" href="{{ url('/') }}">
                    <!--<img src="/svg/logo.svg" height="40" class="pl-2">-->
                    <span class="font-weight-bold">JA</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">My Work</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        <main>
            @yield('content')
        </main>
    </div>

    <div id="footer" class="mt-5" style="background-color: #101010">
        <div class="container p-5 text-light">
            <h1 class="display-4">Need a website?</h1>
            <h3>Let's make it happen.</h3>
            <a class="btn btn-lg btn-primary rounded-0 mt-3" href="#">Get started</a>

            <div class="row pt-5 mt-5">
                <div class="col">
                    <p class="lead">Services</p>
                    <a href="#" class="nav-link text-light">Web Design</a>
                    <a href="#" class="nav-link text-light">Hosting</a>
                    <a href="#" class="nav-link text-light">SEO</a>
                </div>

                <div class="col">
                    <p class="lead">Resources</p>
                    <a href="#" class="nav-link text-light">Blog</a>
                    <a href="#" class="nav-link text-light">About</a>
                    <a href="#" class="nav-link text-light">Contact</a>
                    <a href="#" class="nav-link text-light">Hire</a>
                </div>

                <div class="col">
                    <p class="lead">Connect</p>
                    <a href="#" class="nav-link text-light"><h4 class="ion ion-logo-youtube"></h4></a>
                    <a href="#" class="nav-link text-light"><h4 class="ion ion-logo-twitter"></h4></a>
                    <a href="#" class="nav-link text-light"><h4 class="ion ion-logo-instagram"></h4></a>
                    <a href="#" class="nav-link text-light"><h4 class="ion ion-logo-linkedin"></h4></a>
                </div>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">

    (function ($) {
        $(document).ready(function(){
            $("#scrolledNavbar").hide();

            $(function(){
                $(window).scroll(function(){
                    if($(this).scrollTop() > 100){
                        $("#scrolledNavbar").slideDown(80);
                    }
                    else
                    {
                        $("#scrolledNavbar").slideUp(80);
                    }
                });
            });

            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            particlesJS.load('particles-js', 'js/particles/particles.json', function() {
                console.log('callback - particles.js config loaded');
            });
        });
    }(jQuery));

</script>

</html>
