@extends('adminlte::page')

@section('title', 'Invitados')

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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Evento: {{$invitacione->evento->name}}</h3>
                    <h3>Estado: 
                        @switch($invitacione->estado)
                        @case(0)
                            {{ 'No Enviado' }}
                        @break
                        @case(1)
                            {{ 'Enviado' }}
                        @break
                        @case(2)
                        <span class="text-success">
                            {{ 'Confirmado' }}
                        </span>
                        @break
                        @case(3)
                            {{ 'Anulado' }}
                        @break
                        @default
                    @endswitch    
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Confirmados</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitacione->confirmaciones as $confirmacione)
                            <tr>
                                <td>{{$confirmacione->invitado->nombre}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        @empty($invitacione->rechazados())
                        @else
                        @if ($invitacione->rechazados()->count())
                        <thead>
                            <tr>
                                <th>Rechazados</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitacione->rechazados() as $invitado)
                            <tr>
                                <td>{{$invitado->nombre}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                        @endempty
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="">
    <style>
        .card-body {
            overflow: auto
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>

@stop
