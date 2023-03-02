@extends('adminlte::page')

@section('title', 'Invitaciones')

@section('content_header')
    <h1>Invitaciones</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    @livewire('admin.invitaciones-index')
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