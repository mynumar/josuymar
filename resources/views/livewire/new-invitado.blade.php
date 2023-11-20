<div>
    <div>
        <h3 style="font-family: Sacramento, Arial; font-size:44px; color: #284563;" class="m-0">{{ $evento->name }}</h3>
        <div class="event-col">
                <i class="icon-clock"></i>
                <span>{{ date('h:i A', strtotime($evento->fecha_inicio)) }}</span>
        </div>
        <div class="event-col">
            <i class="icon-calendar"></i>
            <span>{{ date('l d', strtotime($evento->fecha_inicio)) }}</span>
            <span>{{ date('M, Y', strtotime($evento->fecha_inicio)) }}</span>
        </div>
        <h3 class="mt-4">
            <a href="{{ $evento->ubicacion }}" target="_blank" class="">
                <i class="icon-location-pin"></i>
                {{ $evento->direccion }}
            </a>
        </h3>
    </div>
    <div>
        <p class="mb-4">Podrás asistir?</p>
    </div>
    <div class="mb-4">
        <input type="text" class="text-3xl my-2 " wire:model="fullname" wire:keydown.enter="asistire"
            placeholder="Escribe tu nombre completo">
        <x-jet-input-error class="text-sm text-red-600" for="fullname" />
    </div>
    <div>
        <input type="checkbox" wire:model.defer="confirmo" name="confirmo" id="confirmo" wire:loading.attr='disabled'
            class="text-4xl input-confirmar-nombre">
        <label for="confirmo">Confirmo mi asistencia  </label>
        <x-jet-input-error class="text-sm text-red-600" for="confirmo" />
    </div>
    <div class="mt-8">
        <button wire:click="asistire" wire:keydown.enter="asistire" class="btn btn-sm btn-jym text-white text-3xl">
            Asistiré
        </button>
    </div>
    @if ($guardado)
        <div class="rounded-md text-white p-2 mt-4" style="background: #59b277">
            {{ 'Gracias por confirmar. Te esperamos ese día. 😄' }}
        </div>
    @endif
</div>
