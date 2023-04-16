<div class="row">
    <div class="col-md-6">
        {!! Form::label('name', 'Nombre de grupo / Apellido de familia') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa nombre de grupo']); !!}
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>