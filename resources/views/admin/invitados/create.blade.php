@extends('adminlte::page')

@section('title', 'Personale')

@section('content_header')
    <h1>Crear invitado</h1>
@stop

@section('content')
	@if (session('info'))
		<div class="alert alert-success">
			{{ session('info') }}
		</div>
	@endif
    <div class="card">
        <div class="card-header">
            Crear invitado
        </div>
		<div class="card-body">
			{!! Form::open(['route' => 'admin.invitados.store', 'method' => 'post']) !!}
				@include('admin.invitados.partials.form')
				{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary mt-2']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop