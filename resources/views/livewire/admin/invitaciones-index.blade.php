<div wire:init="loadinvitaciones">
    <div class="card">
        <div class="card-header">
            <div class="form-row">
                <div class="col">
                    <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o apellido de un personale">
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
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_noenviado" type="checkbox" id="estado_noenviado">
                <label class="form-check-label" for="estado_noenviado">
                    Ver noenviado
                </label>
            </div>
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_enviado" type="checkbox" id="estado_enviado">
                <label class="form-check-label" for="estado_enviado">
                    Ver enviados
                </label>
            </div>
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_confirmado" type="checkbox" id="estado_confirmado">
                <label class="form-check-label" for="estado_confirmado">
                    Ver confirmados
                </label>
            </div>
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_anulado" type="checkbox" id="estado_anulado">
                <label class="form-check-label" for="estado_anulado">
                    Ver anulados
                </label>
            </div>
            
        </div>
        @if ($invitaciones->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>Id</th> --}}
                            <th>Código</th>
                            <th>Evento</th>
                            <th>Grupo</th>
                            <th>Estado</th>
                            <th>Fecha envío</th>
                            <th>Fecha respuesta</th>
                            <th>Cantidad</th>
                            <th>Cantidad confirmada</th>
                            <th>Cantidad rechazada</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invitaciones as $invitacione)
                            <tr>
                                <td>{{ $invitacione->codigo }}</td>
                                <td>{{ $invitacione->evento->name }}</td>
                                <td>{{ $invitacione->grupo->name }}</td>
                                <td>
                                    @switch($invitacione->estado)
                                        @case(0)
                                            {{ 'No Enviado' }}
                                        @break
                                        @case(1)
                                            {{ 'Enviado' }}
                                        @break
                                        @case(2)
                                            {{ 'Confirmado' }}
                                        @break
                                        @case(3)
                                            {{ 'Anulado' }}
                                        @break
                                        @default
                                    @endswitch
                                </td>
                                <td>
                                    @empty(!$invitacione->fecha_enviada)        
                                    {{ date('d/m/Y', strtotime($invitacione->fecha_enviada)) }}
                                    @endempty
                                </td>
                                <td>
                                    @empty(!$invitacione->fecha_respuesta)        
                                    {{ date('d/m/Y', strtotime($invitacione->fecha_respuesta)) }}
                                    @endempty
                                </td>
                                <td>{{ $invitacione->cantidad }}</td>
                                <td>{{ $invitacione->confirmaciones->count() }}</td>
                                <td>
                                    @if ($invitacione->estado == 2)
                                        {{ $invitacione->cantidad - $invitacione->confirmaciones->count() }}
                                    @else
                                        0
                                    @endif
                                </td>
                                <td width="10px">
                                    <a href="{{ route('admin.invitaciones.show', $invitacione) }}"
                                        class="btn btn-sm btn-primary">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('admin.invitaciones.edit', $invitacione)}}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                @can('admin.invitaciones.destroy')
                                    <td width="10px">
                                        <form method="POST" class="eliminar-invitacione"
                                            action="{{ route('admin.invitaciones.destroy', $invitacione) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ">Eliminar</button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="form-row">
                    @if ($invitaciones != [])
                        <div class="col">
                            {{ $invitaciones->links() }}
                        </div>
                        <div class="col">
                            Viendo <b> {{ count($invitaciones) }}</b> de un total de <b>
                                {{ $invitaciones->total() }}</b>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <div class="card-body">
                <b>No hay invitaciones</b>
            </div>
        @endif
    </div>
</div>
