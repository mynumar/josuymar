@extends('adminlte::page')

@section('title', 'Invitados')
@section('plugins.Datatables', true)

@section('content_header')
    <h1>Invitados</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    @if (count($errors->getMessages()) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>Errores de validación:</strong>
            <ul>
                @foreach ($errors->getMessages() as $errorMessages)
                    @foreach ($errorMessages as $errorMessage)
                        <li>
                            {{ $errorMessage }}
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <table id="invitados" class="display" width="100%"></table>
        </div>
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
        console.log('Hi!');

        const dataSet = {!! json_encode($invitados) !!};

        $(document).ready(function() {
            new DataTable('#invitados', {
                columns: [{
                        title: 'Nombre'
                    },
                    {
                        title: 'Fecha de confirmación'
                    }
                ],
                data: dataSet,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@stop
