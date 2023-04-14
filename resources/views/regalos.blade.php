<x-app-layout>
    <x-slot name="tailwind">
    </x-slot>
    <x-slot name="header">
        <h1>Regalos</h1>
        <h2>
            Con esta boda no celebramos solo nuestro amor, sino la presencia de quienes hacen parte de nuestra vida. Gracias por estar acá.
            <a href="{{ config('app.fb') }}" target="_blank">josuymar</a>
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
				<div class="col-md-6">
                    
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon rosado-jym text-4xl font-black icon-regalos">
							<i class="icon-user"></i>
						</span>
						<div class="feature-copy">
							<h3>TITULAR DE LAS CUENTAS</h3>
							<p><b>Josué David Vitate Rodriguez</b></p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon rosado-jym text-4xl font-black icon-regalos">
							{{-- <i class="icon-calendar"></i> --}}
                            S/
						</span>
						<div class="feature-copy">
							<h3>BCP Soles</h3>
							<p>
                                Mi número de cuenta es <b>19107075303070</b>
                                <br>
                                CCI es <b>00219110707530307051</b>
                            </p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon rosado-jym text-4xl font-black icon-regalos">
							{{-- <i class="icon-image"></i> --}}
                            $
						</span>
						<div class="feature-copy">
							<h3>BCP Dolares</h3>
							<p>Mi número de cuenta BCP Dólares es <b>19100337798108</b>
                                <br>
                                CCI es <b>00219110033779810852</b></p>
						</div>
					</div>

				

				</div>

				<div class="col-md-6 animate-box">
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
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon rosado-jym text-4xl font-black icon-regalos">
							S/
						</span>
						<div class="feature-copy">
							<h3>Interbank Soles</h3>
							<p>
                                Mi número de cuenta en Interbank soles es: <b>8983347474160</b>
                                CCI es: <b>00389801334747416049</b>
                            </p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon rosado-jym text-4xl font-black icon-regalos">
							$
						</span>
						<div class="feature-copy">
							<h3>Interbank Dolares</h3>
							<p>
                                Mi número de cuenta en Interbank dolares es: <b>8983257873847</b>
                                CCI es: <b>00389801325787384749</b>
                            </p>
						</div>
					</div>
				</div>
			</div>

            <div class="row mt-20">
				<div class="col-md-6 text-center">
                    <img class="max-w-lg m-auto" src="{{config('app.url')}}/images/yape-josue.png" alt="">
				</div>
                
				<div class="col-md-6 animate-box text-center">
                    <img class="max-w-lg m-auto" src="{{config('app.url')}}/images/plin-josue.png" alt="">
				</div>
			</div>
        </div>

        <div class="row mt-20">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>todo vale</span>
                <h4 class="font-sacramento text-6xl">Regalos en físico</h4>
                    <p class="mb-4">Av. República del Perú 1030 
                        <br> Huaquillay - Comas</p>
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
