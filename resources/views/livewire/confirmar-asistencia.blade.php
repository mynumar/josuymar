<div>
    <div>
        <input type="text" wire:model="apellido" placeholder="Apellido">
        <input type="text" wire:model="codigo" placeholder="Código">
    </div>
    <div class="mt-8">
        <button wire:click="buscar" class="btn btn-sm btn-jym text-white" >Buscar</button>
    </div>
    <div>

    </div>
    <div>
        @if (!empty($invitacione))
        @foreach ($invitacione->grupo->invitados as $invitado)
        <div>
            <input type="text" wire:model="apellido" placeholder="Apellido">
            <input type="text" wire:model="codigo" placeholder="Código">
        </div>
        @endforeach
        @endif
    </div>
  
</div>
