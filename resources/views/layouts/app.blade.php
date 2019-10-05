<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ASSES') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">
    
    <link href="{{ asset('css/open-iconic-bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    
    <link href="{{ asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css')}}" rel="stylesheet">

    <link href="{{ asset('css/aos.css')}}" rel="stylesheet">

    <link href="{{ asset('css/ionicons.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{ asset('css/jquery.timepicker.css')}}" rel="stylesheet">

    
    <link href="{{ asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/timer_antrean.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                    </button>

                    <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="{{ url('/profil') }}" class="nav-link">Profil</a></li>
                        <li class="nav-item"><a href="{{ url('/jadwal') }}" class="nav-link">Jadwal Poli</a></li>
                        @guest
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masuk</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                </div>
                            </li> 
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->nama }} <span class="caret"></span></a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="portfolio.html">Akun Saya</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                                
                                </div>

                            </li>
                        @endguest   
                        <li class="nav-item"><a href="blog.html" class="nav-link">Artikel</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Kontak Kami</a></li>
                    </ul>
                    </div>

            </div>
        </nav>


        @yield('content')
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{ asset('js/jquery.min.js')}}"></script> 
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script> 
    <script src="{{ asset('js/popper.min.js')}}"></script> 
    <script src="{{ asset('js/bootstrap.min.js')}}"></script> 
    <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script> 
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script> 
    <script src="{{ asset('js/jquery.stellar.min.js')}}"></script> 
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script> 
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script> 
    <script src="{{ asset('js/aos.js')}}"></script> 
    <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script> 
    <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script> 
    <script src="{{ asset('js/jquery.timepicker.min.js')}}"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js')}}"></script> 
    <script src="{{ asset('js/main.js')}}"></script> 
    <script src="{{ asset('vendor/flipclock/timer.js')}}"></script>
</body>
</html>
