@extends('adminlte::page')

@section('title', 'Personale')

@section('content_header')
    <h1>Editar invitación</h1>
@stop

@section('content')
	@if (session('info'))
		<div class="alert alert-success">
			{{ session('info') }}
		</div>
	@endif
    <div class="card">
        <div class="card-header">
            <h4>Evento: <b>{{ $invitacione->evento->name }}</b></h4>
            <h4>Grupo/Familia: <b>{{ $invitacione->grupo->name }}</b></h4>
        </div>
		<div class="card-body">
			{!! Form::model($invitacione, ['route' => ['admin.invitaciones.update', $invitacione], 'method' => 'put']) !!}
				@include('admin.invitaciones.partials.form')
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