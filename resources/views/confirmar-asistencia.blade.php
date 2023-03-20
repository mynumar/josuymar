<x-app-layout>
    <x-slot name="tailwind">
    </x-slot>
    <x-slot name="header">
        <h1>Estaremos felices de que nos acompañes en nuestra boda</h1>
        <h2>Sé parte de nuestra hermosa historia
            <a href="#" target="_blank">josuymar</a>
        </h2>
    </x-slot>
    <div id="">
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

</x-app-layout>
