<div wire:init="loadinvitaciones">
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o apellido de un personale">
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_habilitado" type="checkbox" id="estado_habilitado">
                <label class="form-check-label" for="estado_habilitado">
                    Ver confirmados
                </label>
            </div>
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_retirado" type="checkbox" id="estado_retirado">
                <label class="form-check-label" for="estado_retirado">
                    Ver rechazados
                </label>
            </div>
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_suspendido" type="checkbox" id="estado_suspendido">
                <label class="form-check-label" for="estado_suspendido">
                    Ver suspendidos
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
                                <td>{{ date('d/m/Y', strtotime($invitacione->fecha_enviada)) }}</td>
                                <td>{{ date('d/m/Y', strtotime($invitacione->fecha_respuesta)) }}</td>
                                <td>{{ $invitacione->cantidad }}</td>
                                <td>{{ $invitacione->cantidad_confirmada }}</td>
                                <td>{{ $invitacione->cantidad_rechazada }}</td>
                                <td width="10px">
                                    <a href="{{ route('admin.invitaciones.show', $invitacione) }}"
                                        class="btn btn-primary">Ver</a>
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
                {{ $invitaciones->links() }}
            </div>
        @else
            <div class="card-body">
                <b>No hay invitaciones</b>
            </div>
        @endif
    </div>
</div>
