<nav x-data="{ open: false }" class="fh5co-nav" role="navigation">
    <div class="container m-auto">
        <div class="row">
            <div class="col-xs-2">
                <div id="fh5co-logo"><a href="{{ route('index') }}"><strong>{{config('app.name')}}</strong></a></div>
                <h1 style="display: none;">josuymar</h1>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li class="active"><a href="{{ route('index') }}">Inicio</a></li>
                    <li><a href="{{ route('historia.index') }}">Historia</a></li>
                    <li><a href="{{ route('regalos') }}">Regalos</a></li>
                    <li class=" ">
                        <a href="{{ route('deseos.index') }}">Deseos</a>
                        {{-- <ul class="dropdown">
                            <li><a href="#">Padres</a></li>
                            <li><a href="#">Testigos</a></li>
                            <li><a href="#">Damitas</a></li>
                            <li><a href="#">Pajes</a></li>
                        </ul> --}}
                    </li>
                    {{-- <li class="has-dropdown">
                        <a href="gallery.html">Galería</a>
                        <ul class="dropdown">
                            <li><a href="#">Pedida</a></li>
                        </ul>
                    </li> --}}
                    <li><a target="_blank" href="{{route('admin.index')}}">Ingresar</a></li>
                </ul>
            </div>
        </div>
    </div>    
</nav>
