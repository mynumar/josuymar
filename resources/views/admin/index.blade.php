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

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Por</th>
                                <th>Cantidad</th>
                                <th>F</th>
                                <th>A</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Josué</td>
                                <td>{{ \App\Models\Invitado::where('por', '1')->count() }}</td>
                                <td>{{ \App\Models\Invitado::where('por', '1')->where('tipo', '1')->count() }}</td>
                                <td>{{ \App\Models\Invitado::where('por', '1')->where('tipo', '2')->count() }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Marjorie</td>
                                <td>{{ \App\Models\Invitado::where('por', '0')->count() }}</td>
                                <td>{{ \App\Models\Invitado::where('por', '0')->where('tipo', '1')->count() }}</td>
                                <td>{{ \App\Models\Invitado::where('por', '0')->where('tipo', '2')->count() }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="table-info">
                                <td>Total:</td>
                                <td>{{ \App\Models\Invitado::count() }}</td>
                                <td>{{ \App\Models\Invitado::where('tipo', '1')->count() }}</td>
                                <td>{{ \App\Models\Invitado::where('tipo', '2')->count() }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

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



        const labels = {!! json_encode($eventos) !!};
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
