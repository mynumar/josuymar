@extends('adminlte::page')

@section('title', 'Invitaciones')

@section('content_header')
<button type="button" class="btn text-success" data-toggle="modal" data-target="#importInvitados">
    <i class="fas fa-cloud-upload-alt"></i>
</button>
    <h1>Invitaciones</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    @livewire('admin.invitaciones-index')

    <div class="modal fade" id="importInvitados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form action="{{ route('admin.invitaciones.importInvitaciones') }}" method="post" enctype="multipart/form-data">
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    $().ready(function() {
        @if (session('eliminar') == 'Ok')
            Swal.fire(
                      "Ok",
                      'Matrícula eliminada.',
                      'success'
                    )
        @endif
        Livewire.on('readytoload', event => {
            {{-- $('.eliminar-inscripcione').submit( function (e) {
                e.preventDefault();
                Swal.fire({
                  title: 'Se necesita confirmación',
                  text: "No se podrá recuperar los datos de la inscrición.",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Sí, borrar difinitivamente!'
                }).then((result) => {
                  if (result.value) {
                    /**/
                    this.submit();
                  }
                })	    		
            }); --}}
        });

    });
@stop