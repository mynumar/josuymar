<x-app-layout>
    <x-slot name="header">
        <h1>Deseos</h1>
        <h2>Un espacio para expresar su amor
        </h2>
        <p>
            <a href="#enviar-deseos" class="btn-jym-w font-work-sans">Enviar mis deseos</a>
        </p>
    </x-slot>
    <x-slot name="tailwind">
    </x-slot>

    <div id="fh5co-couple">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Deseos</span>
                        <h2>Nuestros padres</h2>
                    </div>
                </div>
                <div class="couple-wrap text-center animate-box fadeInUp animated-fast">
                    <div class="couple-half col-md-4 col-sm-6">
                        <div class="thumbnail" style="border: none;">
                            <img class="foto-padres" src="{{ config('app.url') }}/images/D_1_PD.jpg" alt="..."
                                style="max-width: 50%;">
                            <div class="testimony-slide" style="padding: 9px; padding-top: 4rem;">
                                <h3 class="text-center">David y Patricia Vitate</h3>
                                <p>
                                    Queridos hijos : Efectivamente la luz atrae a luz, eso es lo que ustedes
                                    son. Es mi eterna oración que juntos trabajen por que esa luz brille por
                                    siempre, que cada uno ponga su cuota de perdón, valor y sacrificio. Sé
                                    que el Padre Celestial les reserva un lugar a su lado. No estan solos
                                    para lograrlo, solo recuerden y vivan todo lo que hasta ahora ya saben y
                                    habran sus mentes y sus corazones con humildad y amor para lo que aún
                                    necesitan aprender. Qué ni la prisa de esta vida jamás les haga olvidar
                                    que Cristo, nuestro Salvador, esta en medio de toda decisión. Una vez más
                                    será mi oración de cada día que el Señor ponga sus manos en día de
                                    vidas.<br><br>
                                    Les ama Papá David y Mamá Patty
                                </p>
                                {{-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a
                                                    href="#" class="btn btn-default" role="button">Button</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="couple-half col-md-4 col-sm-6 ">
                        <div class="thumbnail" style="border: none;">
                            <img class="foto-padres" src="{{ config('app.url') }}/images/D_2_SD.jpg" alt="..."
                                style="max-width: 50%;
                                        ">
                            <div class="testimony-slide" style="padding: 9px;padding-top: 4rem;">
                                <h3 class="text-center">Segundo y Dali Ynuma</h3>
                                <p>
                                    Nuestra amada hija: Sé que en esta etapa de tu vida encontraste a tu mitad al seguir
                                    los
                                    principios de Nuestro Evangelio y sé también que Dios los juntó para iniciar esta
                                    estapa en matrimonio. No será nada fácil pero sé y afirmo que toda adversidad será
                                    fortaleza para esto. Y afirmo que, cuando hay amor, toda es posible.<br>
                                    Deseo que sus metas y proyectos se realicen con la bendición de Dios, sé que así
                                    será porque los 2 se lo mercen. Y también, desde donde esté tu papá, se siente
                                    feliz. Reciban nuestra bendición, que seas muy feliz junto a tu esposo.<br><br>Son
                                    los deseos de tu papi y tu mami
                                </p>
                                {{-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a
                                                    href="#" class="btn btn-default" role="button">Button</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-event" class="fh5co-bg"
        style="height:auto; background-image:url({{ config('app.url') }}/images/img_bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>
                        Las mejores chicas
                    </span>
                    <h2>Nuestras damitas de honor</h2>
                </div>
            </div>
            <div class="row">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Lisbet Espinoza</h3>
                                        <span>
                                            Que esta nueva vida que inician juntos se mantenga lleno de amor, felicidad,
                                            respeto y compresión. Siempre caminando juntos al lado de Nuestro Padre
                                            Celestial, que los sueños de ambos sean una realidad cada día, disfrutende
                                            su bello matrimonio. Mis mejores deseos para ustedes.
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Tatiana Llanos</h3>
                                        <span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, sequi nulla
                                            molestiae vero natus veritatis tempora sit magnam commodi ut provident
                                            expedita pariatur soluta aliquam possimus maxime odio accusamus. Natus!
                                        </span>
                                    </div>
                                    <div class="media-right">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Maricielo Rosero</h3>
                                        <span>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nostrum
                                            esse
                                            itaque, fugit provident omnis natus at dolor ipsa voluptates ducimus quae
                                            facere,
                                            facilis placeat distinctio, veritatis asperiores officiis quibusdam.
                                        </span>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Milenka Calero</h3>
                                        <span>
                                            Soy muy feliz de haber conocido a Marjorie y haberla tenido por unos días
                                            como mi mamá en el PFJ, fue una gran ayuda para mí durante esa semana tan
                                            hermosa, es una persona muy dulce y amable, todo un ejemplo a seguir.
                                        </span>
                                    </div>
                                    <div class="media-right">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Patricia Vitate</h3>
                                        <span>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nostrum
                                            esse
                                            itaque, fugit provident omnis natus at dolor ipsa voluptates ducimus quae
                                            facere,
                                            facilis placeat distinctio, veritatis asperiores officiis quibusdam.
                                        </span>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Kiara Bravo</h3>
                                        <span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia maiores
                                            expedita quibusdam perferendis eveniet magnam, iste officiis non, mollitia
                                            numquam accusamus tempore, ad tenetur nam? Aperiam fugit dolorem veritatis
                                            quae!
                                        </span>
                                    </div>
                                    <div class="media-right">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Kateherine Ynuma</h3>
                                        <span>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae nostrum
                                            esse
                                            itaque, fugit provident omnis natus at dolor ipsa voluptates ducimus quae
                                            facere,
                                            facilis placeat distinctio, veritatis asperiores officiis quibusdam.
                                        </span>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-12">
                                <div class="media event-wrap animate-box"
                                    style="border: none;-webkit-border-radius: unset;border-radius: unset;">
                                    <div class="media-body">
                                        <h3 class="media-heading" style="border-bottom: unset;padding-bottom: unset;">
                                            Kiara Jara</h3>
                                        <span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam praesentium
                                            id obcaecati animi? Ut doloribus blanditiis laboriosam esse quam, maxime
                                            cupiditate facere impedit, quia mollitia voluptates! Quia vitae amet sequi!
                                        </span>
                                    </div>
                                    <div class="media-right">
                                        <a href="#">
                                            <img class="media-object media-responsive"
                                                src="{{ config('app.url') }}/images/couple-1.jpg" alt="..."
                                                style="width: 100px;">
                                        </a>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
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
                        {{-- <div class="wrap-testimony">
                            <div class="owl-carousel-fullwidth">
                                @foreach ($deseos as $deseo)
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="{{ config('app.url') }}/images/couple-1.jpg" alt="user">
                                            </figure>
                                            <span>{{ $deseo->nombre }}</span>
                                            <blockquote>
                                                <p>{{ $deseo->deseos }}</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ config('app.url') }}/images/couple-2.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Mándanos tus palabras para publicarlas"</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($deseos as $deseo)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                                        class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($deseos as $deseo)
                                    <div class="item {{ $loop->index == 0 ? 'active' : '' }}">
                                        <div class="text-center">
                                            <span>
                                                De:
                                                <b>
                                                    {{ $deseo->nombre }}
                                                </b>
                                                {{-- <a href="#" class="twitter">Twitter</a> --}}
                                            </span>
                                            <br>
                                        </div>
                                        <div class="text-center deseos-texto">
                                            <i>
                                                "{{ $deseo->deseos }}"
                                            </i>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('enviar-deseos')
    <style>
        .item {
            height: 200px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #fe9321;
            border-radius: 50%;
        }

        .carousel-control-prev-icon {
            background-position-x: -2px !important
        }

        .carousel-control-next-icon {
            background-position-x: 2px !important
        }

        .deseos-texto {
            height: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</x-app-layout>
