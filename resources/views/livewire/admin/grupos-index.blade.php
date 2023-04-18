<div wire:init="">
    <div class="card">
        <div class="card-header">
            <div class="form-row">
                <div class="col">
                    <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o apellido de un personale">
                </div>
                <div class="col">
                    <select name="estado" wire:model="estado" class="form-control" id="">
                        <option value="-1">- Todos los estados -</option>
                        @foreach ($estados as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select name="evento" wire:model="evento" class="form-control" id="">
                        <option value="">- Todos los eventos -</option>
                        @foreach ($eventos_all as $ev)
                        <option value="{{$ev->id}}">{{$ev->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
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
                            @foreach ($eventos as $e)
                                <th class="text-center">{{ $e->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grupos as $grupo)
                            <tr>
                                <td>{{ $grupo->id }}</td>
                                <td>{{ $grupo->name }}</td>
                                <td>{{ $grupo->invitados->count() }}</td>
                                @foreach ($eventos as $evento_)
                                    <td class="text-center">
                                        @php
                                            $invitacione = \App\Models\Invitacione::where('evento_id', $evento_->id)
                                                ->where('grupo_id', $grupo->id)
                                                ->first();
                                        @endphp
                                        @if (empty($evento_->invitaciones->where('grupo_id', $grupo->id)->first()))
                                            <button wire:click="invitar({{ $evento_->id }}, {{ $grupo->id }})"
                                                class="btn btn-sm btn-success">
                                                <i class="fas fa-user-plus"></i>
                                            </button>
                                        @else
                                            {{-- <a href="{{$url_wap}}"><i class="fas fa-paper-plane"></i></a> --}}
                                            @switch($invitacione->estado)
                                                @case(0)
                                                    {{ 'No Enviado' }}
                                                @break
                                                @case(1)
                                                    <b class="text-danger">
                                                        {{ 'Enviado' }}
                                                    </b>
                                                @break
                                                @case(2)
                                                    <b class="text-success">
                                                        {{ 'Confirmado' }}
                                                    </b>
                                                @break
                                                @case(3)
                                                    {{ 'Anulado' }}
                                                @break
                                                @default
                                            @endswitch
                                            <br>
                                            <button class="btn btn-sm btn-outline-primary" onclick="copiarInvitacione('{{ $grupo->name }}', '{{ $invitacione->codigo }}', '{{ $invitacione->evento->name }}')"
                                                wire:key="{{ $invitacione->codigo }}"><i class="far fa-copy"></i>
                                            </button>
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
