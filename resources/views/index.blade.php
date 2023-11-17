<x-app-layout>
    <x-slot name="header">
        <h1>Alejandra & Skyler</h1>
        <h2>Nos casamos en</h2>
        <div class="simply-countdown simply-countdown-one"></div>
        <p><a href="{{route('confirmar-asistencia')}}" class="btn btn-default btn-sm">Confirmar mi asistencia</a></p>
    </x-slot>

    <div id="fh5co-couple">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Hi!</h2>
                    {{-- <h3>19 de Mayo, 2023 Lima, Perú</h3> --}}
                    <p>We are pleased to announce our wedding in the Saratoga Springs Utah Temple on January 12th 2024 
                    </p>
                </div>
            </div>
            <div class="couple-wrap animate-box">
                <div class="couple-half">
                    <div class="groom">
                        <img src="{{ config('app.url') }}/images/aleandsky/SP_novio.jpg" alt="SP_novio" class="img-responsive" style="object-fit: cover">
                    </div>
                    <div class="desc-groom">
                        <h3>Skyler Lemon</h3>
                        <p>Siempre me llenas de felicidad. En mis sueños estás, en mis pensamientos, y mis palabras. Me enseñaste que significa amar en pareja. Y te quiero enseñar una vida de bendiciones</p>
                    </div>
                </div>
                <p class="heart text-center"><i class="icon-heart2"></i></p>
                <div class="couple-half">
                    <div class="bride">
                        <img src="{{ config('app.url') }}/images/aleandsky/SP_novia.jpg" alt="SP_novia" class="img-responsive" style="object-fit: cover">
                    </div>
                    <div class="desc-bride">
                        <h3>Alejandra Villar</h3>
                        <p>Cuando te conocí jamás creí que tendría a un compañero eterno tan maravilloso, que me elevara y me acercara más a Dios. Eres todo lo que siempre pedí y más. Te amo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-event" class="fh5co-bg" style="background-image:url({{ config('app.url') }}/images/aleandsky/Templo-de-Saratoga-Spring.webp);">
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
                            @foreach ($eventos as $evento)
                                <div class="col-md-6 col-sm-6 text-center" >
                                    <div class="event-wrap animate-box" style="min-height: 390px">
                                        <h3>{{$evento->name}}</h3>
                                        <div class="event-col" >
                                            @if (date('h:i A', strtotime($evento->fecha_inicio)) != '12:00 AM')
                                            <i class="icon-clock"></i>
                                            <span>{{date('h:i A', strtotime($evento->fecha_inicio))}}</span>
                                            <span>{{date('h:i A', strtotime($evento->fecha_fin))}}</span>
                                                
                                            @endif
                                        </div>
                                        <div class="event-col" @if (date('h:i A', strtotime($evento->fecha_inicio)) == '12:00 AM') style="width:100%"  @endif>
                                            <i class="icon-calendar"></i>
                                            <span>{{date('l d', strtotime($evento->fecha_inicio))}}</span>
                                            <span>{{date('M, Y', strtotime($evento->fecha_inicio))}}</span>
                                            {{-- <span>Jueves 18</span> --}}
                                            {{-- <span>Mayo, 2023</span> --}}
                                        </div>
                                        <p>                                            
                                            <br>
                                                <b>{{$evento->name_lugar}}</b>
                                            <br>
                                        </p>
                                        <p>
                                            <a href="{{$evento->ubicacion}}" target="_blank" class="text-white jym-link-white">
                                            <i class="icon-location-pin"></i>
                                                {{$evento->direccion}}
                                            </a>
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="col-md-4 col-sm-4 text-center">
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
                                    <p>CEREMONIA CENTRAL<br><br>También transmitido en facebook</p>
                                    <p><i class="icon-location-pin"></i>Carabayllo, Lima, Perú<br></p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script>
    // var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);
    var d = new Date('2024-01-12 20:00:00 GMT-5:00');

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
