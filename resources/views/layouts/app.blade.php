<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        

        <!-- Favicon -->
        <link href="{{ asset('bower_components/demo_template/argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="{{ asset('bower_components/demo_template/argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('bower_components/demo_template/argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('bower_components/demo_template/argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
        <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('bower_components/demo_template/argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('bower_components/demo_template/argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <!--<script src="{{ asset('bower_components/demo_template/argon') }}/js/argon.js?v=1.0.0"></script>-->  
        <!-- OneTech JS -->
        <script src="{{ asset('bower_components/demo_template/onetech') }}/js/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/styles/bootstrap4/popper.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/styles/bootstrap4/bootstrap.min.js"></script>
        <!--<script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/TweenMax.min.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/TimelineMax.min.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/animation.gsap.min.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/slick-1.8.0/slick.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/plugins/easing/easing.js"></script>
        <script src="{{ asset('bower_components/demo_template/onetech') }}/js/custom.js"></script>-->
    </body>
</html>
