<x-app-layout>
    <x-slot name="header">
        <h1>Deseos</h1>
        <h2>Un espacio para expresar su cariño hacia nosotros
        </h2>
        <p>
            <a href="#enviar-deseos" class="btn-jym-w font-work-sans">Enviar mis deseos</a>
        </p>
    </x-slot>
    <x-slot name="tailwind">
    </x-slot>

    <div id="fh5co-testimonial">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Mejores deseos</span>
                        <h2>Deseos de nuestros amigos y familiares</h2>
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
