<div class="row">
    <div class="col-md-6">
        {!! Form::label('estado', 'Estado') !!}
        {!! Form::select('estado', [
			'0' => 'No enviado',
			'1' => 'Enviado',
			'2' => 'Confirmado',
			'3' => 'Anulado',
		], null, ['class' => 'form-control', 'placeholder' => '-- Escoge --']); !!}
        @error('estado')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>