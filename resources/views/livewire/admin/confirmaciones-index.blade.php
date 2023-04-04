<div wire:init="">
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o apellido de un personale">
            {{-- <div class="form-check mt-2 d-inline">
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
            </div> --}}
            
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
