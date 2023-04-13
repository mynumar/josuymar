@extends('adminlte::page')

@section('title', 'Invitaciones')

@section('content_header')
    <button type="button" class="btn text-success" data-toggle="modal" data-target="#importInvitados">
        <i class="fas fa-cloud-upload-alt"></i>
    </button>
    <h1>Invitaciones</h1>
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

    @livewire('admin.invitaciones-index')

    <div class="modal fade" id="importInvitados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form action="{{ route('admin.invitaciones.importInvitaciones') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Importar invitados</h5>
                        <a href="{{ config('app.url') . '/src/plantillas/temp_invitados.xlsx' }}"
                            class="btn btn-sm btn-secondary ml-5" download><i class="far fa-file-excel"></i> Descargar
                            plantilla</a>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- <div class="form-group">
                            {!! Form::label('tipo', 'Tipo de acertijo') !!}
                            {!! Form::select('tipo', [
                                '0' => 'Prueba',
                                '1' => 'Clásico',
                                '2' => 'Race',
                                '3' => 'Interscolar',
                            ], null, [
                                'class' => 'form-control',
                                'placeholder' => '-- Escoge --',
                                'required'
                            ]) !!}
                            @error('tipo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="file">Seleccione archivo .xlsx</label>
                            <input type="file" class="form-control-file" name="file" id="file"
                                accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                            @error('file')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">
                            <i class="far fa-file-excel"></i> Importar
                        </button>

                    </div>
                </form>

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
