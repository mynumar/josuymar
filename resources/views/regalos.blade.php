<x-app-layout>
    <x-slot name="tailwind">
    </x-slot>
    <x-slot name="header">
        <h1>Regalos</h1>
        <h2>
            Con esta boda no celebramos solo nuestro amor, sino la presencia de quienes hacen parte de nuestra vida. Gracias por estar acá.
            {{-- <a href="{{ config('app.fb') }}" target="_blank">josuymar</a> --}}
        </h2>
    </x-slot>
    <div id="">
        <div class="container m-auto">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <span>TU PRESENCIA ES INVALUABLE</span>
                    <h2>Un detalle con nosotros</h2>
                        <p class="mb-4">El regalo de su presencia es invaluable, pero si están pensando en apoyarnos, les agradecemos que por favor lo hagan con un aporte de dinero en efectivo. ¡Muchas gracias!</p>
                </div>
            </div>
            <div class="row">
				<div class="col-md-4 text-center">
				</div>
                <div class="col-md-4 text-center">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon rosado-jym text-4xl font-black icon-regalos">
							{{-- <i class="icon-user"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"/></svg>
                            {{-- <i class="fas fa-gift"></i> --}}
						</span>
						<div class="feature-copy">
							<h3>AMAZON WEDDING</h3>
							<p><b>Skyler Lemon & Alejandra Villar</b></p>
                            <a href="https://www.amazon.com/wedding/registry/3T1NHW5DA8JXM">@skyler-Lemon</a>
                            <br>
                            <a href="https://www.amazon.com/wedding/registry/3T1NHW5DA8JXM">https://www.amazon.com/wedding/registry/3T1NHW5DA8JXM</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
                </div>

				{{-- <div class="col-md-6 animate-box">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon rosado-jym text-4xl font-black icon-regalos">
						    S/
						</span>
						<div class="feature-copy">
							<h3>BBVA Soles</h3>
							<p>
                                Número de cuenta: <b>0011-0116-0200652208</b> <br>
                                CCI: <b>011-116-000200652208-16</b> <br>
                                Código Swift: <b>BCONPEPL</b>
                            </p>
						</div>
					</div>

					</div>
				</div> --}}
			</div>

            <div class="row mt-20">
				<div class="col-md-12 text-center">
                    <img class="max-w-lg m-auto" src="{{config('app.url')}}/images/aleandsky/qr.jpg" alt="">
				</div>
                
				{{-- <div class="col-md-6 animate-box text-center">
                    <img class="max-w-lg m-auto" src="{{config('app.url')}}/images/plin-josue.png" alt="">
				</div> --}}
			</div>
        </div>

        <div class="row mt-20">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>todo vale</span>
                <h4 class="font-sacramento text-6xl">Regalos en físico</h4>
                    <p class="mb-4">
                        1412 E Damie lane 
                    </p>
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
