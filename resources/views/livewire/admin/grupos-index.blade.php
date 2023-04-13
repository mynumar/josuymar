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
        @if ($grupos->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>Id</th> --}}
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Personas</th>
                            @foreach ($eventos as $evento)
                            <th>{{$evento->name}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grupos as $grupo)
                            <tr>
                                <td>{{ $grupo->id }}</td>
                                <td>{{ $grupo->name }}</td>
                                <td>{{$grupo->invitados->count()}}</td>
                                @foreach ($eventos as $evento)
                                <td class="text-center">
                                    @php
                                        $invitacione = \App\Models\Invitacione::where('evento_id', $evento->id)->where('grupo_id', $grupo->id)->first();
                                    @endphp
                                    @if (empty($evento->invitaciones->where('grupo_id', $grupo->id)->first()))
                                    <button wire:click="invitar({{$evento->id}}, {{$grupo->id}})" class="btn btn-sm btn-success">
                                        <i class="fas fa-user-plus"></i>
                                    </button>
                                    @else
                                        {{-- <a href="{{$url_wap}}"><i class="fas fa-paper-plane"></i></a> --}}
                                        <button class="btn btn-sm btn-outline-primary" onclick="copiarInvitacione('{{$grupo->name}}', '{{$invitacione->codigo}}')"><i class="far fa-copy"></i> Copiar y enviarx mensaje</button>
                                    @endif
                                </td>
                                @endforeach
                                <td>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="form-row">
                    @if ($grupos != [])
                        <div class="col">
                            {{ $grupos->links() }}
                        </div>
                        <div class="col">
                            Viendo <b> {{ count($grupos) }}</b> de un total de <b>
                                {{ $grupos->total() }}</b>
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
