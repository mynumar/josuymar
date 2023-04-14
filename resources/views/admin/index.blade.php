@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('plugins.Chartjs', true)

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <div class="row">
        <div class=""></div>
        <div class="col-md-6">
            <div style="max-width: 500px">
                <canvas id="invitaciones"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <canvas id="invitados" height="280"></canvas>
        </div>
        @foreach ($eventos as $evento)
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h2>{{ $evento->name }}</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th colspan="3" class="text-center border-left">Enviado</th>
                                    <th colspan="3" class="text-center border-left">Confirmado</th>
                                </tr>
                                <tr>
                                    <th>Por</th>
                                    <th class="text-center border-left">F</th>
                                    <th class="text-center">A</th>
                                    <th class="text-center">Cantidad</th>
                                    <th class="text-center border-left">F</th>
                                    <th class="text-center">A</th>
                                    <th class="text-center">Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $confirmados_familia_total = 0;
                                    $confirmados_amigos_total = 0;
                                    $por_tipo_familia_total = 0;
                                    $por_tipo_amigos_total = 0;
                                @endphp
                                @foreach ([1, 0] as $item)
                                    <tr>
                                        <td>
                                            @switch($item)
                                                @case(1)
                                                    Josué
                                                @break

                                                @case(0)
                                                    Marjorie
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                        {{-- total enviados --}}
                                        <td class="text-center  border-left">
                                            @php
                                                $por_tipo_familia = \App\Models\Invitado::where('por', $item)
                                                    ->where('tipo', '1')
                                                    ->whereHas('grupo', function ($q) use ($evento) {
                                                        $q->whereHas('invitaciones', function ($qu) use ($evento) {
                                                            $qu->where('evento_id', $evento->id)->whereIn('estado', [1, 2]);
                                                        });
                                                    })
                                                    ->count();
                                                $por_tipo_familia_total = $por_tipo_familia_total + $por_tipo_familia;
                                            @endphp
                                            {{ $por_tipo_familia }}
                                        </td>
                                        <td class="text-center">
                                            @php
                                                $por_tipo_amigos = \App\Models\Invitado::where('por', $item)
                                                    ->where('tipo', '2')
                                                    ->whereHas('grupo', function ($q) use ($evento) {
                                                        $q->whereHas('invitaciones', function ($qu) use ($evento) {
                                                            $qu->where('evento_id', $evento->id)->whereIn('estado', [1, 2]);
                                                        });
                                                    })
                                                    ->count();
                                            @endphp
                                            {{ $por_tipo_amigos }}
                                        </td>
                                        <td class="text-center">
                                            {{ $por_tipo_familia + $por_tipo_amigos }}
                                        </td>
                                        {{-- confirmados --}}
                                        <td class="text-center border-left">
                                            @php
                                                $confirmados_familia = \App\Models\Confirmacione::whereHas('invitado', function ($q) use ($item) {
                                                    $q->where('por', $item)->where('tipo', '1');
                                                })
                                                    ->whereHas('invitacione', function ($q) use ($evento) {
                                                        $q->where('evento_id', $evento->id)->whereIn('estado', [1, 2]);
                                                    })
                                                    ->count();
                                                $confirmados_familia_total = $confirmados_familia_total + $confirmados_familia;
                                            @endphp
                                            {{ $confirmados_familia }}
                                        </td>
                                        <td class="text-center">
                                            @php
                                                $confirmados_amigos = \App\Models\Confirmacione::whereHas('invitado', function ($q) use ($item) {
                                                    $q->where('por', $item)->where('tipo', '2');
                                                })
                                                    ->whereHas('invitacione', function ($q) use ($evento) {
                                                        $q->where('evento_id', $evento->id)->whereIn('estado', [1, 2]);
                                                    })
                                                    ->count();
                                                $confirmados_amigos_total = $confirmados_amigos_total + $confirmados_amigos;
                                            @endphp
                                            {{ $confirmados_amigos }}
                                        </td>
                                        <td class="text-center">
                                            {{ $confirmados_familia + $confirmados_amigos }}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="table-info">
                                    <td>Total:</td>
                                    <td class="text-center border-left">{{ $por_tipo_familia_total }}</td>
                                    <td class="text-center">{{ $por_tipo_amigos_total }}</td>
                                    <td class="text-center">{{ $por_tipo_amigos_total + $por_tipo_familia_total }}</td>
                                    <td class="text-center border-left">{{ $confirmados_familia_total }}</td>
                                    <td class="text-center">{{ $confirmados_amigos_total }}</td>
                                    <td class="text-center">{{ $confirmados_familia_total + $confirmados_amigos_total }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@stop

@section('css')
    <style>
        .card-body {
            overflow: auto
        }
    </style>
@stop

@section('js')
    <script>
        /* invitaciones */
        var enviados = {!! $invitaciones_enviados !!};
        var confirmados = {!! $invitaciones_confirmados !!};

        $(function() {
            const data_invitaciones = {
                labels: [
                    'Enviado: ' + enviados,
                    'Confirmado: ' + confirmados,
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [enviados, confirmados],
                    backgroundColor: [
                        '#4bc0c0',
                        'rgb(255, 205, 86)',
                    ],
                    hoverOffset: 4
                }]
            };

            const config_invitaciones = {
                type: 'doughnut',
                data: data_invitaciones,
            };

            const ctx2 = document.getElementById('invitaciones');
            const chart_rtemplo = new Chart(ctx2, config_invitaciones)
        })
        /* fin invitaciones */

        /* invitados por evento */



        const labels = {!! json_encode($eventos->pluck('name')) !!};
        const confirmaciones = {!! json_encode($confirmaciones) !!};
        const rechazados = {!! json_encode($rechazados) !!};
        const sincontestar = {!! json_encode($sincontestar) !!};


        const data = {
            labels: labels,
            datasets: [{
                    label: 'Confirmados',
                    data: confirmaciones,
                    borderColor: '#4bc0c0',
                    backgroundColor: '#4bc0c0',
                    borderWidth: 2,
                    borderRadius: 15,
                    borderSkipped: false,
                },
                {
                    label: 'Rechazados',
                    data: rechazados,
                    borderColor: '#4bc0c0',
                    backgroundColor: '#41a4ff',
                    borderWidth: 2,
                    borderRadius: 15,
                    borderSkipped: false,
                },
                {
                    label: 'Sin responder',
                    data: sincontestar,
                    borderColor: '#4bc0c0',
                    backgroundColor: '#4bc0c0',
                    borderWidth: 2,
                    borderRadius: 15,
                    borderSkipped: false,
                },
            ]
        };

        const config_invitados = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Invitados'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const ctx3 = document.getElementById('invitados');
        const chart_rtemplo = new Chart(ctx3, config_invitados)




        /* fin invitados por evento */
    </script>
@stop
