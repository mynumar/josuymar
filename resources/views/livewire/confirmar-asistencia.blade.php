<div>
    <div>
        <input type="text" wire:model="apellido" wire:keydown.enter="buscar" placeholder="Apellido">
        <input type="text" wire:model="codigo" wire:keydown.enter="buscar" placeholder="Código">
    </div>
    <div class="mt-8">
        <button wire:click="buscar" wire:keydown.enter="buscar" class="btn btn-sm btn-jym text-white">Buscar</button>
    </div>
    <div>
        @if (!empty($invitacione))
            <div class="">
                <h3>Estas invitado a</h3>
                <h3 class="font-sacramento text-2xl" style="font-size: 55px">{{ $invitacione->evento->name }}</h3>
            </div>
            <div>
                Tu invitación es para
                <b>{{ $invitacione->cantidad }}</b>
                <br>
                Confirma cada persona haciendo click el cuadrado al costado de cada nombre
            </div>
            <br>
            @foreach ($invitacione->grupo->invitados as $invitado)
                <div>
                    {{-- <input type="hidden" wire:model="invitados.{{ $loop->index+1 }}.id" wire:loading.attr='disabled' wire:target='guardar'> --}}
                    <input type="checkbox" wire:model.defer="invitados.{{ $loop->index+1 }}.confirmed" wire:loading.attr='disabled' wire:target='guardar'>
                    <input type="text" class="form-control w-72 form-control-sm disabled:opacity-5" placeholder="Nombre y Apellido"
                        wire:model.defer="invitados.{{ $loop->index+1 }}.nombre" wire:loading.attr='disabled' wire:target='guardar'>
                    <x-jet-input-error class="text-sm" for="invitados.{{ $loop->index+1 }}.nombre" />
                    <x-jet-input-error class="text-sm" for="invitados.{{ $loop->index+1 }}.confirmed" />
                </div>
                {{-- <div>
                    <input type="checkbox" w>
                    <input type="text" class="form-control w-72 form-control-sm disabled:opacity-5" value="{{ $invitado->nombre }}" placeholder="Nombre y Apellido">
                </div> --}}
            @endforeach
            @php
                $falta = $invitacione->cantidad - $invitacione->grupo->invitados->count();
            @endphp
            @if ($falta > 0)
                falta: {{ $falta }}
                @for ($i = 0; $i < $falta; $i++)
                    <div class="mt-2">
                        <input type="checkbox" wire:model.defer="newinvitados.{{ $i }}.confirmed" wire:loading.attr='disabled' wire:target='guardar'>
                        <input type="text" class="form-control w-72 form-control-sm disabled:opacity-5" placeholder="Nombre y Apellido"
                            wire:model.defer="newinvitados.{{ $i }}.nombre" wire:loading.attr='disabled' wire:target='guardar'>
                        <x-jet-input-error class="text-sm" for="newinvitados.{{ $i }}.nombre"  style="color:red"/>
                        <x-jet-input-error class="text-sm" for="newinvitados.{{ $i }}.confirmed"  style="color:red"/>
                    </div>
                @endfor
            @endif

            <div class="mt-8">
                <button wire:click="guardar" class="btn btn-sm btn-jym text-white">Confirmar</button>
            </div>
        @else
            <div class="mt-4">{{ $msg }}</div>
        @endif
    </div>

</div>
