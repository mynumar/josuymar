<x-app-layout>
    <x-slot name="header">
        <h1>Historia</h1>
        <h2>Sé parte de nuestra hermosa historia
            <a href="#" target="_blank">josuymar</a>
        </h2>
    </x-slot>

    <div id="fh5co-couple-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>Te contamos</span>
                    <h2>Nuestra Historia</h2>
                    <p>Los momentos son las moléculas de la eternidad</p>
                    {{-- <p>Nos encantará hacerte parte de nuestra historia</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <ul class="timeline animate-box">
                        <li class="animate-box">
                            <div class="timeline-badge"
                                style="background-image:url({{ config('app.url') }}/images/1733850.jpg);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Nuestro primer encuentro</h3>
                                    <span class="date">Marzo 29, 2022</span>
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
                                    <span class="date">Mayo 09, 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        Nuestra primera cita como amigos fue en el cine, vimos una película de Marvel. Era la
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
                                    <span class="date">Julio 31, 2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        Josué siempre es el detallista de la relación y para pedirme que sea su
                                        novia no fue la excepción. De regreso de un paseo, me trajo de recuerdo un
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
                                    <span class="date">Diciembre 08, 2022</span>
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
</x-app-layout>
