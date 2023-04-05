<div wire:init="loadDeseos">
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre">
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_publicado" type="checkbox" id="estado_publicado">
                <label class="form-check-label" for="estado_publicado">
                    Ver publicados
                </label>
            </div>
            <div class="form-check mt-2 d-inline">
                <input class="form-check-input" wire:model="estado_enviado" type="checkbox" id="estado_enviado">
                <label class="form-check-label" for="estado_enviado">
                    Ver enviados
                </label>
            </div>            
        </div>
        @if (count($deseos))
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>Id</th> --}}
                            <th>Nombre</th>
                            <th>Deseos</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deseos as $deseo)
                            <tr>
                                <td>{{ $deseo->nombre }}</td>
                                <td>{{ $deseo->deseos }}</td>
                                <td>
                                    @switch($deseo->estado)
                                        @case(0)
                                            {{ 'Enviado' }}
                                        @break
                                        @case(1)
                                            {{ 'Publicado' }}
                                        @break
                                        @default
                                    @endswitch
                                </td>
                                <td>
                                    {{ date('d/m/Y', strtotime($deseo->created_at)) }}
                                </td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" @if ($deseo->estado) checked @endif
                                            data-deseo="{{ $deseo->id }}"
                                            class="custom-control-input prevent-inactive"
                                            id="customSwitch{{ $deseo->id }}">
                                        <label class="custom-control-label"
                                            for="customSwitch{{ $deseo->id }}"></label>
                                    </div>
                                </td>
                                <td width="10px">
                                    <a href="{{route('admin.deseos.edit', $deseo)}}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                @can('admin.deseos.destroy')
                                    <td width="10px">
                                        <form method="POST" class="eliminar-deseo"
                                            action="{{ route('admin.deseos.destroy', $deseo) }}">
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
                    @if ($deseos != [])
                        <div class="col">
                            {{ $deseos->links() }}
                        </div>
                        <div class="col">
                            Viendo <b> {{ count($deseos) }}</b> de un total de <b>
                                {{ $deseos->total() }}</b>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <div class="card-body">
                <b>No hay deseos</b>
            </div>
        @endif
    </div>
</div>
