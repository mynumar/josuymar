<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Josu&Mar &mdash; !Nos casamos!</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">


    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/style.css">

    <!-- Modernizr JS -->
    <script src="{{ config('app.url') }}/js/modernizr-2.6.2.min.js"></script>

</head>

<body class="antialiased">
    <div class="fh5co-loader"></div>
    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="index.html">Nuestro matrimonio<strong>.</strong></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="{{ route('index') }}">Inicio</a></li>
                            <li><a href="{{ route('historia.index') }}">Historia</a></li>
                            <li class="has-dropdown">
                                <a href="services.html">Invitados</a>
                                <ul class="dropdown">
                                    <li><a href="#">Padres</a></li>
                                    <li><a href="#">Testigos</a></li>
                                    <li><a href="#">Damitas</a></li>
                                    <li><a href="#">Pajes</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="gallery.html">Galería</a>
                                <ul class="dropdown">
                                    <li><a href="#">Pedida</a></li>
                                    <!-- <li><a href="#">CSS3</a></li>
                                        <li><a href="#">Sass</a></li>
                                        <li><a href="#">jQuery</a></li> -->
                                </ul>
                            </li>
                            <li><a href="contact.html">Deseos</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="fh5co-header" class="fh5co-cover" role="banner"
            style="background-image:url({{ config('app.url') }}/images/CC_Pedida6.jpg); background-position: center;"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Josué &amp; Marjorie</h1>
                                <h2>Nos casamos en</h2>
                                <div class="simply-countdown simply-countdown-one"></div>
                                <p><a href="#" class="btn btn-default btn-sm">Confirmar mi asistencia</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="fh5co-couple">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>¡Hola!</h2>
                        <h3>19 de Mayo, 2023 Lima, Perú</h3>
                        <p>Te invitamos a celebrar nuestra boda</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="{{ config('app.url') }}/images/SP_josu3.jpg" alt="SP_josu2"
                                class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h3>Josué Vitate</h3>
                            <p>La luz de su alma iluminaron mi vida desde la primera vez que la vi. Nacido en Lima un 22
                                de septiembre de 1993. Sirvió una misión en Bolivia La Paz en 2012 -2014.</p>
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="{{ config('app.url') }}/images/SP_marjo2.jpg" alt="SP_marjo"
                                class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h3>Marjorie Ynuma</h3>
                            <p>La ternura con la que sus ojos me miran han llegado a mi corazón y son los causantes de
                                amarlo. Quiero que esos mismos ojos me acompañen en las eternidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-event" class="fh5co-bg" style="background-image:url({{ config('app.url') }}/images/bg_02.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Nuestros eventos especiales</span>
                        <h2>Eventos de la boda</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Ceremonia Civil</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>3:00 PM</span>
                                            <span>4:00 PM</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>Jueves 18</span>
                                            <span>Mayo, 2023</span>
                                        </div>
                                        <p>CEREMONIA PRIVADA<br><br>Palacio de la Cultura<br></p>
                                        <p><i class="icon-location-pin"></i>Av. San Lorenzo 426b, Puente Piedra 15121
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Sellamiento</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>02:00 PM</span>
                                            <span>03:00 PM</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>Viernes 19</span>
                                            <span>Mayo, 2023</span>
                                        </div>
                                        <p>Templo de la Iglesia de Jesucristo de los Santos de los Últimos Días</p>
                                        <p><i class="icon-location-pin"></i>Av. Javier Prado Este 6420, La Molina 15024
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Fiesta de bodas</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>08:00 PM</span>
                                            <span>02:00 AM</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span>Viernes 19</span>
                                            <span>Mayo, 2023</span>
                                        </div>
                                        <p>CAREMONIA CENTRAL<br><br>Boda campestre<br><br></p>
                                        <p><i class="icon-location-pin"></i>Crabayllo, Lima, Perú<br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="fh5co-couple-story">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Nosotros Nos Amamos</span>
                        <h2>Nuestra Historia</h2>
                        <p>Nos encantará hacerte parte de nuestra historia</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline animate-box">
                            <li class="animate-box">
                                <div class="timeline-badge"
                                    style="background-image:url({{ config('app.url') }}/images/couple-1.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">La primera vez que nos vimos</h3>
                                        <span class="date">Abril 03, 2023</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Nuestro primer encuentro fue muy 2020. Hablamos por zoom muchas veces para
                                            coordinar un proyecto para el PFJ y cada día nos conocíamos más. En una
                                            reunión presencial, Josué participó desde el podio y al finalizar la reunión
                                            Marjorie se acercó a él para presentarse.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"
                                    style="background-image:url({{ config('app.url') }}/images/04-02.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Primera Cita</h3>
                                        <span class="date">Mayo 09, 2023</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Nuestra primera cita fue en el cine, vimos una película de Marvel. Era la
                                            primera vez que ella veía este tipo de película. Fue una buena excusa para
                                            tratarnos en persona y alimentar nuestra amistad.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box">
                                <div class="timeline-badge"
                                    style="background-image:url({{ config('app.url') }}/images/04-03.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">En una relación</h3>
                                        <span class="date">Julio 31, 2023</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Josué siempre es el detallista de la relación y para pedirme que sea su
                                            novia no fue la excepción. De regreso en una viaje, me trajo de recuerdo un
                                            llavero que llevaba escrito la pregunta que cambiaría nuestro futuro:
                                            ¿Quieres
                                            ser mi novia?
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"
                                    style="background-image:url({{ config('app.url') }}/images/04-04.jpg);"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Nuestro compromiso</h3>
                                        <span class="date">Diciembre 08, 2023</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>
                                            Desde el primer momento que empezamos a ser novios, sabíamos nuestra meta
                                            principal y cada día nos esforzámos por llegar a alcanzarla. Aunque ya
                                            habíamos hablado del tema, Josué quería que la pedida quedara con un
                                            recuerdo más que hermoso.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div id="fh5co-gallery" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Nuestros recuerdos</span>
                        <h2>Galería de bodas</h2>
                        <p>Esperamos que hayan muchos recuerdos con ustedes</p>
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12">
                        <ul id="fh5co-gallery-list">

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-1.jpg); ">
                                <a href="{{ config('app.url') }}/images/gallery-1.jpg">
                                    <div class="case-studies-summary">
                                        <span>14 Photos</span>
                                        <h2>Two Glas of Juice</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-2.jpg); ">
                                <a href="#" class="color-2">
                                    <div class="case-studies-summary">
                                        <span>30 Photos</span>
                                        <h2>Timer starts now!</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-3.jpg); ">
                                <a href="#" class="color-3">
                                    <div class="case-studies-summary">
                                        <span>90 Photos</span>
                                        <h2>Beautiful sunset</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-4.jpg); ">
                                <a href="#" class="color-4">
                                    <div class="case-studies-summary">
                                        <span>12 Photos</span>
                                        <h2>Company's Conference Room</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-5.jpg); ">
                                <a href="#" class="color-3">
                                    <div class="case-studies-summary">
                                        <span>50 Photos</span>
                                        <h2>Useful baskets</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-6.jpg); ">
                                <a href="#" class="color-4">
                                    <div class="case-studies-summary">
                                        <span>45 Photos</span>
                                        <h2>Skater man in the road</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-7.jpg); ">
                                <a href="#" class="color-4">
                                    <div class="case-studies-summary">
                                        <span>35 Photos</span>
                                        <h2>Two Glas of Juice</h2>
                                    </div>
                                </a>
                            </li>

                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-8.jpg); ">
                                <a href="#" class="color-5">
                                    <div class="case-studies-summary">
                                        <span>90 Photos</span>
                                        <h2>Timer starts now!</h2>
                                    </div>
                                </a>
                            </li>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url({{ config('app.url') }}/images/gallery-9.jpg); ">
                                <a href="#" class="color-6">
                                    <div class="case-studies-summary">
                                        <span>56 Photos</span>
                                        <h2>Beautiful sunset</h2>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-counter" class="fh5co-bg fh5co-counter"
            style="background-image:url({{ config('app.url') }}/images/img_bg_5.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-users"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Invitaciones enviadas</span>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-user"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Confirmados</span>
                                </div>
                            </div>
                            {{-- <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-calendar"></i>
                                    </span>
                                    <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Events Done</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000"
                                        data-refresh-interval="50">1</span>
                                    <span class="counter-label">Hours Spent</span>

                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-testimonial">
            <div class="container">
                <div class="row">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <span>Mejores deseos</span>
                            <h2>Deseos de nuestros amigos</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="wrap-testimony">
                                <div class="owl-carousel-fullwidth">
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="{{ config('app.url') }}/images/couple-1.jpg"
                                                    alt="user">
                                            </figure>
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, there live the blind texts. Separated they
                                                    live in Bookmarksgrove right at the coast of the Semantics"</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="{{ config('app.url') }}/images/couple-2.jpg"
                                                    alt="user">
                                            </figure>
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia, at the coast of the Semantics, a large
                                                    language ocean."</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="{{ config('app.url') }}/images/couple-3.jpg"
                                                    alt="user">
                                            </figure>
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, far from the countries Vokalia and Consonantia, there
                                                    live the blind texts. Separated they live in Bookmarksgrove right at
                                                    the coast of the Semantics, a large language ocean."</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    {{-- 
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-auto text-gray-700 sm:h-20">
                    <g clip-path="url(#clip0)" fill="#EF3B2D">
                        <path
                            d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" />
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                    class="underline text-gray-900 dark:text-white">Documentation</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round"
                                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                    class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                                    class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant
                                Ecosystem</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="underline">Forge</a>, <a
                                    href="https://vapor.laravel.com" class="underline">Vapor</a>, <a
                                    href="https://nova.laravel.com" class="underline">Nova</a>, and <a
                                    href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects
                                to the next level. Pair them with powerful open source libraries like <a
                                    href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a
                                    href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                                    href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                                    href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                                    href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                                    href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and
                                more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div> --}}

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

    <script>
        // var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);
        var d = new Date('2023-05-19 20:00:00 GMT-5:00');


        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>
</body>

</html>
