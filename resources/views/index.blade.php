<x-app-layout>
    <x-slot name="header">
        <h1>Josué & Marjorie</h1>
        <h2>Nos casamos en</h2>
        <div class="simply-countdown simply-countdown-one"></div>
        <p><a href="{{route('confirmar-asistencia')}}" class="btn btn-default btn-sm">Confirmar mi asistencia</a></p>
    </x-slot>

    <div id="fh5co-couple">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>¡Hola!</h2>
                    {{-- <h3>19 de Mayo, 2023 Lima, Perú</h3>
                    <p>Te invitamos a celebrar nuestra boda</p> --}}
                </div>
            </div>
            <div class="couple-wrap animate-box">
                <div class="couple-half">
                    <div class="groom">
                        <img src="{{ config('app.url') }}/images/SP_josu3.jpg" alt="SP_josu2" class="img-responsive">
                    </div>
                    <div class="desc-groom">
                        <h3>Josué Vitate</h3>
                        <p>Desde que la vi la pureza de su alma me hizo querer conocerla. Al caminar juntos me doy 
                            cuenta de que es ella capaz de ayudarme a llegar a la Gloria Celestial.</p>
                    </div>
                </div>
                <p class="heart text-center"><i class="icon-heart2"></i></p>
                <div class="couple-half">
                    <div class="bride">
                        <img src="{{ config('app.url') }}/images/SP_marjo2.jpg" alt="SP_marjo" class="img-responsive">
                    </div>
                    <div class="desc-bride">
                        <h3>Marjorie Ynuma</h3>
                        <p>La ternura con la que me mira ha llegado a mi corazón y es la causante de
                            amarlo. Quiero que esa misma mirada me acompañe en las eternidades.</p>
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
                            @foreach ($eventos as $evento)
                                <div class="col-md-4 col-sm-4 text-center" >
                                    <div class="event-wrap animate-box" style="min-height: 390px">
                                        <h3>{{$evento->name}}</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span>{{date('h:i A', strtotime($evento->fecha_inicio))}}</span>
                                            <span>{{date('h:i A', strtotime($evento->fecha_fin))}}</span>
                                        </div>
                                        <div class="event-col">
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
                                            <a href="{{$evento->ubicacion}}" target="_blank" class="text-white" style="color:white">
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
