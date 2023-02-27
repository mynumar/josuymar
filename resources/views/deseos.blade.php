<x-app-layout>
    <x-slot name="header">
        <h1>Deseos</h1>
        <h2>Un espacio para los expresar su amor</a>
        </h2>
    </x-slot>

    <div id="fh5co-testimonial">
        <div class="container">
            <div class="row">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Deseos</span>
                        <h2>Nuestros padres</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-2 text-center animate-box">
                        <div class="wrap-testimony">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="thumbnail">
                                        <img src="{{ config('app.url') }}/images/D_PV.jpeg" alt="...">
                                        <div class="caption">
                                            <h3 class="text-center">Patricia Vitate</h3>
                                            <p>
                                                Queridos hijos : efectivamente la luz atrae a luz, eso es lo que ustedes
                                                son. Es mi eterna oración que juntos trabajen por que esa luz brille por
                                                siempre, que cada uno ponga su cuota de perdón, valor y sacrificio. Sé
                                                que el Padre Celestial les reserva un lugar a su lado. No estan solos
                                                para lograrlo, solo recuerden y vivan todo lo que hasta ahora ya saben y
                                                habran sus mentes y sus corazones con humildad y amor para lo que aún
                                                necesitan aprender. Qué ni la prisa de esta vida jamás les haga olvidar
                                                que Cristo nuestro Salvador esta en medio de toda desición. Una vez mas
                                                sera mi oración de cada día que el Señor ponga sus manos en día de
                                                vidas.
                                                Les ama
                                                Papá David
                                                Mamá Patty
                                            </p>
                                            {{-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a
                                                    href="#" class="btn btn-default" role="button">Button</a></p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="thumbnail">
                                        <img src="{{ config('app.url') }}/images/D_DY.jpeg" alt="...">
                                        <div class="caption">
                                            <h3 class="text-center">Dali Ynuma</h3>
                                            <p>Muchas bendiciones en su nueva vida. Les deseo con mucho amor que sean
                                                muy felices. Qué Dios los bendiga</p>
                                            {{-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a
                                                    href="#" class="btn btn-default" role="button">Button</a></p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-carousel-fullwidth">
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ config('app.url') }}/images/couple-1.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, behind the word mountains, far from the countries
                                                Vokalia and Consonantia, there live the blind texts. Separated they
                                                live in Bookmarksgrove right at the coast of the Semantics"</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ config('app.url') }}/images/couple-2.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, behind the word mountains, far from the countries
                                                Vokalia and Consonantia, at the coast of the Semantics, a large
                                                language ocean."</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="{{ config('app.url') }}/images/couple-3.jpg" alt="user">
                                        </figure>
                                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                        <blockquote>
                                            <p>"Far far away, far from the countries Vokalia and Consonantia, there
                                                live the blind texts. Separated they live in Bookmarksgrove right at
                                                the coast of the Semantics, a large language ocean."</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
