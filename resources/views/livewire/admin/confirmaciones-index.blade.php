<div wire:init="">
    <div class="card">
        <div class="card-header">
            <div class="form-row">
                <div class="col">
                    <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o apellido de un personale">
                </div>
                <div class="col">
                    <select name="por" wire:model="por" class="form-control" id="">
                        <option value="">- Todos los pors -</option>
                        @foreach ($pors as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select name="tipo" wire:model="tipo" class="form-control" id="">
                        <option value="">- Todos los tipos -</option>
                        @foreach ($tipos as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col">
                    <select name="evento" wire:model="evento" class="form-control" id="">
                        <option value="">- Todos los eventos -</option>
                        @foreach ($eventos as $evento)
                            <option value="{{$evento->id}}">{{$evento->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>            
        </div>
        @if ($confirmaciones->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>Id</th> --}}
                            <th>Código</th>
                            <th>Evento</th>
                            <th>Invitado</th>
                            <th>Por</th>
                            <th>Tipo</th>
                            <th>Grupo/Familia</th>
                            <th>Fecha de confirmación</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($confirmaciones as $confirmacione)
                            <tr>
                                <td>{{ $confirmacione->invitacione->codigo }}</td>
                                <td>{{ $confirmacione->invitacione->evento->name }}</td>
                                <td>{{ $confirmacione->invitado->nombre }}</td>
                                <td>
                                    @switch($confirmacione->invitado->por)
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
                                    @switch($confirmacione->invitado->tipo)
                                        @case(1)
                                            Familia
                                            @break
                                        @case(2)
                                            Amigos
                                            @break
                                        @default
                                    @endswitch
                                </td>
                                <td>{{ $confirmacione->invitacione->grupo->name }}</td>
                                <td>{{ $confirmacione->created_at }}</td>
                                <td></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="form-row">
                    @if ($confirmaciones != [])
                        <div class="col">
                            {{ $confirmaciones->links() }}
                        </div>
                        <div class="col">
                            Viendo <b> {{ count($confirmaciones) }}</b> de un total de <b>
                                {{ $confirmaciones->total() }}</b>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <div class="card-body">
                <b>No hay confirmaciones</b>
            </div>
        @endif
    </div>
</div>
