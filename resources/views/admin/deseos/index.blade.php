@extends('adminlte::page')

@section('title', 'Invitaciones')
@section('plugins.Sweetalert2', true)

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

    @livewire('admin.deseos-index')

@stop

@section('css')
    <link rel="stylesheet" href="">
    <style>
        /*\
        |*| ========================================================================
        |*| Bootstrap Toggle: bootstrap4-toggle.css v3.6.1
        |*| https://gitbrent.github.io/bootstrap4-toggle/
        |*| ========================================================================
        |*| Copyright 2018-2019 Brent Ely
        |*| Licensed under MIT
        |*| ========================================================================
        \*/
        .btn-group-xs>.btn,
        .btn-xs {
            padding: .35rem .4rem .25rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem
        }

        .checkbox label .toggle,
        .checkbox-inline .toggle {
            margin-left: -1.25rem;
            margin-right: .35rem
        }

        .toggle {
            position: relative;
            overflow: hidden
        }

        .toggle.btn.btn-light,
        .toggle.btn.btn-outline-light {
            border-color: rgba(0, 0, 0, .15)
        }

        .toggle input[type=checkbox] {
            display: none
        }

        .toggle-group {
            position: absolute;
            width: 200%;
            top: 0;
            bottom: 0;
            left: 0;
            transition: left .35s;
            -webkit-transition: left .35s;
            -moz-user-select: none;
            -webkit-user-select: none
        }

        .toggle-group label,
        .toggle-group span {
            cursor: pointer
        }

        .toggle.off .toggle-group {
            left: -100%
        }

        .toggle-on {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 50%;
            margin: 0;
            border: 0;
            border-radius: 0
        }

        .toggle-off {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            right: 0;
            margin: 0;
            border: 0;
            border-radius: 0;
            box-shadow: none
        }

        .toggle-handle {
            position: relative;
            margin: 0 auto;
            padding-top: 0;
            padding-bottom: 0;
            height: 100%;
            width: 0;
            border-width: 0 1px;
            background-color: #fff
        }

        .toggle.btn-outline-primary .toggle-handle {
            background-color: var(--primary);
            border-color: var(--primary)
        }

        .toggle.btn-outline-secondary .toggle-handle {
            background-color: var(--secondary);
            border-color: var(--secondary)
        }

        .toggle.btn-outline-success .toggle-handle {
            background-color: var(--success);
            border-color: var(--success)
        }

        .toggle.btn-outline-danger .toggle-handle {
            background-color: var(--danger);
            border-color: var(--danger)
        }

        .toggle.btn-outline-warning .toggle-handle {
            background-color: var(--warning);
            border-color: var(--warning)
        }

        .toggle.btn-outline-info .toggle-handle {
            background-color: var(--info);
            border-color: var(--info)
        }

        .toggle.btn-outline-light .toggle-handle {
            background-color: var(--light);
            border-color: var(--light)
        }

        .toggle.btn-outline-dark .toggle-handle {
            background-color: var(--dark);
            border-color: var(--dark)
        }

        .toggle[class*=btn-outline]:hover .toggle-handle {
            background-color: var(--light);
            opacity: .5
        }

        .toggle.btn {
            min-width: 3.7rem;
            min-height: 2.15rem
        }

        .toggle-on.btn {
            padding-right: 1.5rem
        }

        .toggle-off.btn {
            padding-left: 1.5rem
        }

        .toggle.btn-lg {
            min-width: 5rem;
            min-height: 2.815rem
        }

        .toggle-on.btn-lg {
            padding-right: 2rem
        }

        .toggle-off.btn-lg {
            padding-left: 2rem
        }

        .toggle-handle.btn-lg {
            width: 2.5rem
        }

        .toggle.btn-sm {
            min-width: 3.125rem;
            min-height: 1.938rem
        }

        .toggle-on.btn-sm {
            padding-right: 1rem
        }

        .toggle-off.btn-sm {
            padding-left: 1rem
        }

        .toggle.btn-xs {
            min-width: 2.19rem;
            min-height: 1.375rem
        }

        .toggle-on.btn-xs {
            padding-right: .8rem
        }

        .toggle-off.btn-xs {
            padding-left: .8rem
        }
    </style>
@stop

@section('js')
    <script>
        
        @if (session('inactivar') == 'Ok')
                Swal.fire(
                    "Ok",
                    'Personal inactivado.',
                    'success'
                )
            @endif
            Livewire.on('readytoload', event => {
                $('.prevent-inactive').change(function(e) {
                    e.preventDefault();
                    var msg = '';
                    var confirmButtonText = '';
                    if (this.checked) {
                        msg =
                            'Se publicará y todos podrán verlo.'
                        confirmButtonText = 'Sí, publicar'
                    } else {
                        msg = 'Dejará de mostrarse';
                        confirmButtonText = 'Sí, dejar de mostrar'
                    }
                    Swal.fire({
                        title: 'Se necesita confirmación',
                        text: msg,
                        showCancelButton: true,
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Cancelar',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: confirmButtonText,
                    }).then((result) => {
                        if (result.value) {
                            var ins = $(this).attr('data-deseo');
                            console.log(ins);
                            Livewire.emit('changeEstado', ins);
                        } else {
                            Livewire.emit('alert', false);
                            this.checked = !this.checked
                        }
                    })
                });
            });
    </script>
    <script type="text/javascript" src="{{ config('app.url') }}/js/toggle-bootstrap.js"></script>
@stop
