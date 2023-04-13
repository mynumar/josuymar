@extends('adminlte::page')

@section('title', 'Grupos')

@section('content_header')
    <h1>Confirmaciones</h1>
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

    @livewire('admin.grupos-index')

    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
        <b id="alert-text-success">Se copió correctamente!</b>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div id="danger-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
        <b>Ocurrió un error al guardar!</b>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="">
    <style>
        #success-alert {
            position: fixed;
            top: 150px;
            right: 5px;
        }

        #danger-alert {
            position: fixed;
            top: 250px;
            right: 5px;
        }
    </style>
@stop

@section('js')
    <script>
        $(function() {
            $("#success-alert").hide();
            $("#danger-alert").hide();

        })

        function copiarInvitacione(apellido, codigo) {
            // Get the text field
            //var copyText = document.getElementById("myInput");
            var copyText = `Hola.! 🤗 Somos Marjorie & Josué\n` +
                `¡Nos casamos y queremos celebrarlo contigo! Hemos preparado un espacio para confirmar tu asistencia a nuestra boda, donde también podrás explorar sus secciones. Anímate a dejarnos tus deseos, será especial leerlos.\n` +
                `https://josuymar.lat/ \n` +
                `Al hacer click en confirmar asistencia ingresa lo siguiente:\n` +
                `*Apellido de familia:* ` + apellido + `\n` +
                `*Codigo:* ` + codigo + `\n\n` +
                `Te esperamos.!`;
            // Select the text field
            // copyText.select();
            // copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            // Alert the copied text
            // alert("Copied the text: " + copyText);
            $("#alert-text-success").html('Se copió correcamente.');
            $("#success-alert").hide();
            $("#success-alert").show();
            $("#success-alert").fadeTo(1000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(500);
            });

            //Cambiar invitacione de estado a: Enviado
            Livewire.emit('invitacioneEnviada', codigo);
        }

        Livewire.on('alert', function(result) {
            
            if (result) {
                $("#alert-text-success").html(result);
                $("#success-alert").show();
                $("#success-alert").fadeTo(1000, 500).slideUp(500, function() {
                    $("#success-alert").slideUp(500);
                });
            } else {
                $("#danger-alert").show();
                $("#danger-alert").fadeTo(1000, 500).slideUp(500, function() {
                    $("#danger-alert").slideUp(500);
                });
            }
        });
    </script>

@stop
