<div>
    <div>
        <input type="text" class="text-3xl my-2 " wire:model="apellido" wire:keydown.enter="buscar" placeholder="Apellido">
        <input type="text" class="text-3xl my-2 " wire:model="codigo" wire:keydown.enter="buscar" placeholder="Código">
    </div>
    <div class="mt-8">
        <button wire:click="buscar" wire:keydown.enter="buscar" class="btn btn-sm btn-jym text-white text-3xl">
            Buscar
        </button>
    </div>
    <div>
        @if (!empty($invitacione))
            <div class="mb-6">
                {{$invitacione->estado}}
                <h3 class="mt-2">Estas invitado a</h3>
                <h3 class="font-sacramento text-8xl leading-tight m-0">{{ $invitacione->evento->name }}</h3>
                <div class="event-col">
                    <a href="{{$invitacione->evento->ubicacion}}" target="_blank" class="text-white jym-link">
                        <i class="icon-location-pin"></i>
                            {{$invitacione->evento->name_lugar}} - 
                            {{$invitacione->evento->direccion}}
                        </a>
                </div>
                <div class="event-col">
                    <i class="icon-calendar"></i>
                    <span>{{date('l d', strtotime($invitacione->evento->fecha_inicio))}}</span>
                    <span>{{date('M, Y', strtotime($invitacione->evento->fecha_inicio))}}</span>
                </div>
                <div class="event-col">
                    <i class="icon-clock"></i>
                    <span>{{date('h:i A', strtotime($invitacione->evento->fecha_inicio))}}</span>
                </div>
            </div>
            <div>
                Tu invitación es para
                <b>{{ $invitacione->cantidad }}</b>
                <br>
                Confirma la asistencia de cada persona haciendo click en el cuadrado al costado de cada nombre
            </div>
            <br>

            @foreach ($invitacione->grupo->invitados as $invitado)
                <div class="my-3">
                    <input type="checkbox" wire:model.defer="invitados.{{ $loop->index + 1 }}.confirmed"
                        wire:loading.attr='disabled' wire:target='guardar' {{$mostrar? '':'disabled'}} class="text-4xl input-confirmar-nombre">
                    <input type="text" {{$mostrar? '':'disabled'}} class="text-4xl form-control-sm disabled:opacity-75"
                        placeholder="Nombre y Apellido" wire:model.defer="invitados.{{ $loop->index + 1 }}.nombre"
                        wire:loading.attr='disabled' wire:target='guardar'>
                    <x-jet-input-error class="text-sm" for="invitados.{{ $loop->index + 1 }}.nombre" />
                    <x-jet-input-error class="text-sm" for="invitados.{{ $loop->index + 1 }}.confirmed" />
                </div>
            @endforeach
            @if ($invitacione->estado == 1)
                @php
                    $falta = $invitacione->cantidad - $invitacione->grupo->invitados->count();
                @endphp

                @if ($falta > 0)
                    Falta: {{ $falta }}
                    @for ($i = 0; $i < $falta; $i++)
                        <div class="mt-2">
                            <input type="checkbox" wire:model.defer="newinvitados.{{ $i }}.confirmed"
                                wire:loading.attr='disabled' wire:target='guardar' class="text-4xl input-confirmar-nombre">
                            <input type="text" class="text-4xl form-control-sm disabled:opacity-75"
                                placeholder="Nombre y Apellido"
                                wire:model.defer="newinvitados.{{ $i }}.nombre" wire:loading.attr='disabled'
                                wire:target='guardar'>
                            <x-jet-input-error class="text-sm" for="newinvitados.{{ $i }}.nombre"
                                style="color:red" />
                            <x-jet-input-error class="text-sm" for="newinvitados.{{ $i }}.confirmed"
                                style="color:red" />
                        </div>
                    @endfor
                @endif
                <div class="mt-8">
                    <button wire:click="guardar" class="btn btn-sm btn-jym text-white">Confirmar</button>
                </div>
            @else
            <div>
                <br>
                Nos alegrará verte ese día
                <br>
                <h3 class="font-sacramento text-8xl leading-tight m-0">Te esperamos.!</h3>
                <br>
                <div class="mt-8">
                    <a href="{{route('deseos.index')}}#enviar-deseos" class="btn btn-sm btn-jym text-white">Enviar mis palabras a los novios</a>
                </div>
                <div class="mt-8">
                    <a href="{{route('regalos')}}" class="btn btn-sm btn-jym text-white">Enviar un regalo</a>
                </div>
                <br>
                <div>
                    <b>Nota:</b>
                    Esta invitación ya fue confirmada. Si deseas modificarla, comunícate con nosotros.
                </div>
                <br>
            </div>
            @endif
        @else
        {{-- <div class="mt-4">
            <b>Fecha límite para confirmar:</b>
            <br>
            <b>Abril 30, 2023</b>
        </div> --}}
        @endif
        <div class="mt-4">
            <b>{{ $msg }}</b>
        </div>
    </div>

</div>
