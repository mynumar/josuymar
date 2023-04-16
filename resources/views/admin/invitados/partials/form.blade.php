<div class="row">
    <div class="col-md-6">
        {!! Form::label('grupo_id', 'Grupo') !!}
        {!! Form::select('grupo_id', $grupos->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => '-- Escoge --']); !!}
        @error('grupo_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-6">
        {!! Form::label('por', 'Por') !!}
        {!! Form::select('por', [
            '0' => 'Marjorie',
            '1' => 'Josué',
        ], null, ['class' => 'form-control', 'placeholder' => '-- Escoge --']); !!}
        @error('por')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-6">
        {!! Form::label('tipo', 'Tipo') !!}
        {!! Form::select('tipo', [
            '1' => 'Familia',
            '2' => 'Amigos'
        ], null, ['class' => 'form-control', 'placeholder' => '-- Escoge --']); !!}
        @error('tipo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-6">
        {!! Form::label('dni', 'DNI') !!}
        {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingresa dni']); !!}
        @error('dni')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-6">
        {!! Form::label('telefono', 'Teléfono') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingresa telefono']); !!}
        @error('telefono')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-6">
        {!! Form::label('correo', 'Correo electrónico') !!}
        {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingresa correo']); !!}
        @error('correo')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-md-12">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresa nombre']); !!}
        @error('nombre')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>