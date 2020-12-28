@extends('partials.common')

@section('title', 'Home - La Molisana')

@section('content')
    <section class=" hero-section container-fluid">
        <div class="row">
            <div class="col-lg-12 hero-image p-0">
                <img src="{{ asset('images/hero-section-la-molisana.webp') }}" alt="">
            </div>
        </div>
    </section>

    <section class="grid-products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 tiles-container recipes-container p-0 clearfix d-none d-sm-block">
                    <div class="tile-small recipes float-left">
                        <img src="{{ asset('images/spaghetti-alla-carbonara.jpg') }}" alt="">
                    </div>

                    <div class="tile-small recipes description float-left">
                        <h3 class="text-capitalize">pasta</h3>
                        <div class="pb-5">
                            <p>Spaghetti alla
                                carbonara</p>
                            <a href="#">Apri la ricetta</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 tiles-container recipes-container p-0 clearfix d-none d-sm-block">
                    <div class="tile-small recipes float-left">
                        <img src="{{ asset('images/pasta-fresca.jpg') }}" alt="">
                    </div>

                    <div class="tile-small recipes description float-left">
                        <h3 class="text-capitalize">semole</h3>
                        <div class="pb-5">
                            <p>Pasta di semola di grano duro fatta in casa</p>
                            <a href="#">Apri la ricetta</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 tiles-container p-0 clearfix">
                    <div class="tile-large">
                        <img src="{{ asset('images/box-home-nuove-forme-2020.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">La Molisana. Dove le buone idee prendono nuove forme</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 tiles-container p-0 clearfix">
                    <div class="tile-small float-left">
                        <img src="{{ asset('images/box-home-sfarinati-2020.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">I nostri 5 sfarinati decorticati a pietra</p>
                        </div>
                    </div>

                    <div class="tile-small float-left">
                        <img src="{{ asset('images/box-home-integrale-2020.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">Nuovo integrale: ricco di fibre e con pù vitamine. Da oggi con grano</p>
                        </div>
                    </div>

                    <div class="tile-small float-left">
                        <img src="{{ asset('images/box-home-timeline-2020.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">Cento anni di pasta La Molisna</p>
                        </div>
                    </div>

                    <div class="tile-small float-left">
                        <img src="{{ asset('images/box-home-tenacita-certificata.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">Da oggi la nostra tenacità è certificata</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 tiles-container p-0 clearfix">
                    <div class="tile-small float-left">
                        <img src="{{ asset('images/box-home-rossi-2020.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">Perfetto per una grande pasta</p>
                        </div>
                    </div>

                    <div class="tile-small float-left">
                        <img src="{{ asset('images/montagna.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">La nostra filiera integrata</p>
                        </div>
                    </div>

                    <div class="tile-small float-left">
                        <img src="{{ asset('images/box-home-comunicazione-2020.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">La nostra comunicazione pubblicitaria</p>
                        </div>
                    </div>

                    <div class="tile-small float-left">
                        <img src="{{ asset('images/box-home-leonardo-2020.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">Orgogliosi di affermare la "Qualità Italia" nel mondo</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 tiles-container p-0 clearfix">
                    <div class="tile-large">
                        <img src="{{ asset('images/box-home-grano-100-italiano.jpg') }}" alt="">
                        <div class="more">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                                </path>
                            </svg>
                            <p class="text-center">La nostra pasta è 100% grano ialiano Scopri di più</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="motto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center text-uppercase">
                    <h2>la molisana: pasta e farina di qualità</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
