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
                    <h3>Grupo: {{$grupo->name}}</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grupo->invitados as $invitado)
                            <tr>
                                <td>{{$invitado->nombre}}</td>
                            </tr>
                            @endforeach
                        </tbody>
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
