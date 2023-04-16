<x-app-layout>
    <x-slot name="tailwind">
    </x-slot>
    <x-slot name="header">
        <h1>Estaremos felices de que nos acompañes en nuestra boda</h1>
        <h2>Sé parte de nuestra hermosa historia
            <a href="#" target="_blank">josuymar</a>
        </h2>
        <div>
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" width="28px" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path fill="white" d="M413.1 222.5l22.2 22.2c9.4 9.4 9.4 24.6 0 33.9L241 473c-9.4 9.4-24.6 9.4-33.9 0L12.7 278.6c-9.4-9.4-9.4-24.6 0-33.9l22.2-22.2c9.5-9.5 25-9.3 34.3.4L184 343.4V56c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24v287.4l114.8-120.5c9.3-9.8 24.8-10 34.3-.4z"/></svg>
            </center>
        </div>
    </x-slot>
    <div id="confirmar">
        <div class="container m-auto">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>ERES ESPECIAL</span>
                    <h2>Te invitamos</h2>
                    <p class="mb-4">Nos encantará hacerte parte de nuestra historia</p>
                    @livewire('confirmar-asistencia')
                </div>
            </div>
        </div>
    </div>

    <style>
        input["type=checkbox"]{
            width: 15px;
            height: 15px;
        }
    </style>
</x-app-layout>
