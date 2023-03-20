<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{config('app.url')}}/images/corazon2.png">

    <title>{{ config('app.name', 'Josu&Mar') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    {{-- <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles -->
    @livewireStyles
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/animate.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/css/bootstrap.css">
    @if (!isset($tailwind))
    
    <!-- Icomoon Icon Fonts-->
    <!-- Bootstrap  -->

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/css/owl.theme.default.min.css">
    @else
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ config('app.url') }}/css/output.css">
    @endif
    
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/style.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/css/mystyles.css">

    <!-- Modernizr JS -->
    <script src="{{ config('app.url') }}/js/modernizr-2.6.2.min.js"></script>
     <!-- Scripts -->
</head>

<body class="font-sans antialiased">
    <div class="fh5co-loader"></div>
    {{-- <x-jet-banner /> --}}
    <div id="page" class="">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>            
        @endif --}}
        @if (isset($header))
            <header id="fh5co-header" class="fh5co-cover" role="banner"
                style="background-image:url({{ config('app.url') }}/images/CC_Pedida6.jpg); background-position: center;"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container m-auto">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="display-t">
                                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                    {{ $header }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
            <footer id="fh5co-footer" role="contentinfo">
                <div class="container m-auto">
                    <div class="row copyright">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">&copy; 2023 Marjorie y Josué</small>
                                <small class="block">Agradecidos de antemano
                                    {{-- <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a>
                                    Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> --}}
                                </small>
                            </p>
                            {{-- <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                            </p> --}}
                        </div>
                    </div>

                </div>
            </footer>
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    <!-- jQuery -->
    <script src="{{ config('app.url') }}/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="{{ config('app.url') }}/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="{{ config('app.url') }}/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="{{ config('app.url') }}/js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="{{ config('app.url') }}/js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="{{ config('app.url') }}/js/jquery.countTo.js"></script>

    <!-- Stellar -->
    <script src="{{ config('app.url') }}/js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ config('app.url') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ config('app.url') }}/js/magnific-popup-options.js"></script>

    <script src="{{ config('app.url') }}/js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="{{ config('app.url') }}/js/main.js"></script>


</body>

</html>
