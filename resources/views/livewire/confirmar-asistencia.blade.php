<div>
    <div>
        <input type="text" class="text-3xl my-2 " wire:model="apellido" wire:keydown.enter="buscar" placeholder="Apellido">
        <input type="text" class="text-3xl my-2 " wire:model="codigo" wire:keydown.enter="buscar" placeholder="Código">
    </div>
    <div class="mt-8">
        <button wire:click="buscar" wire:keydown.enter="buscar" class="btn btn-sm btn-jym text-white text-3xl">Buscar</button>
    </div>
    <div>
        @if (!empty($invitacione))
            <div class="">
                <h3 class="mt-2">Estas invitado a</h3>
                <h3 class="font-sacramento text-8xl leading-tight">{{ $invitacione->evento->name }}</h3>
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
                        wire:loading.attr='disabled' wire:target='guardar' {{$mostrar? '':'disabled'}} class="text-4xl">
                    <input type="text" {{$mostrar? '':'disabled'}} class="text-4xl form-control-sm disabled:opacity-50"
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
                    falta: {{ $falta }}
                    @for ($i = 0; $i < $falta; $i++)
                        <div class="mt-2">
                            <input type="checkbox" wire:model.defer="newinvitados.{{ $i }}.confirmed"
                                wire:loading.attr='disabled' wire:target='guardar' class="text-4xl">
                            <input type="text" class="text-4xl form-control-sm disabled:opacity-50"
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
                No alegrará verte ese día
                <div class="mt-8">
                    <button wire:click="" class="btn btn-sm btn-jym text-white">Enviar mis palabras a los novios</button>
                </div>
            </div>
            @endif
        @else
            <div class="mt-4">{{ $msg }}</div>
        @endif
    </div>

</div>
