<div wire:init="">
    <div class="card">
        <div class="card-header">
            <div class="form-row">
                {{-- <div class="col">
                    <input wire:model="search" class="form-control"
                        placeholder="Ingrese el nombre o apellido de un personale">
                </div> --}}
                {{-- <div class="col">
                    <select name="por" wire:model="por" class="form-control" id="">
                        <option value="">- Todos los pors -</option>
                        @foreach ($pors as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select name="tipo" wire:model="tipo" class="form-control" id="">
                        <option value="">- Todos los tipos -</option>
                        @foreach ($tipos as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="col">
                    <select name="evento" wire:model="evento" class="form-control" id="">
                        <option value="">- Todos los eventos -</option>
                        @foreach ($eventos as $ev)
                            <option value="{{ $ev->id }}">{{ $ev->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        @if ($invitaciones->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>Id</th> --}}
                            <th>Código</th>
                            <th>Invitado</th>
                            <th>Evento</th>
                            <th>Grupo/Familia</th>
                            <th>Por</th>
                            <th>Tipo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($invitaciones as $invitacione)
                            @php
                                $total = $total + $invitacione->rechazados()->count();
                            @endphp
                            @foreach ($invitacione->rechazados() as $rechazado)
                                <tr>
                                    <td>{{ $invitacione->codigo }}</td>
                                    <td>{{ $rechazado->nombre }}</td>
                                    <td>{{ $invitacione->evento->name }}</td>
                                    <td>{{ $invitacione->grupo->name }}</td>
                                    <td>
                                        @switch($rechazado->por)
                                            @case(1)
                                                Josué
                                            @break

                                            @case(0)
                                                Marjorie
                                            @break

                                            @default
                                        @endswitch
                                    </td>
                                    <td>
                                        @switch($rechazado->tipo)
                                            @case(1)
                                                Familia
                                            @break

                                            @case(2)
                                                Amigos
                                            @break

                                            @default
                                        @endswitch
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="form-row">
                    <div class="col">
                        {{-- {{ $confirmaciones->links() }} --}}
                    </div>
                    <div class="col">
                        Viendo <b> {{ $total }}</b> de un total de <b>
                            {{ $total }}</b>
                    </div>
                    {{-- @if ($confirmaciones != [])
                    @endif --}}
                </div>
            </div>
        @else
            <div class="card-body">
                <b>No hay confirmaciones</b>
            </div>
        @endif
    </div>
</div>
