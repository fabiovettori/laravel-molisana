@extends('partials.common')

@section('title', 'Home - La Molisana')

@section('content')
    <section class=" hero-section container-fluid">
        <div class="row">
            <div class="col-lg-12 hero-image">
            </div>
        </div>
    </section>

    <section class="grid-products">
        <div class="top-left">
            <img src="{{ asset('images/spaghetti-alla-carbonara.jpg') }}" alt="Spaghetti alla carbonara">
            <div class="d-flex flex-column justify-content-center align-items-start p-5">
                <h3>Spaghetti alla carbonara</h3>
                <a href="#">Apri la ricetta</a>
            </div>
        </div>

        <div class="top-rigth">
            <img src="{{ asset('images/pasta-fresca.jpg') }}" alt="Pasta di semola di grano duro fatta in casa">
            <div class="d-flex flex-column justify-content-center align-items-start p-5">
                <h3>Pasta di semola di grano duro fatta in casa</h3>
                <a href="#">Apri la ricetta</a>
            </div>
        </div>

        <div class="middle-left more-info">
            <img src="{{ asset('images/box-home-nuove-forme-2020.jpg') }}" alt="La Molisana. Dove le buone idee prendono nuove forme">
            <div class="description-info text-center">
                <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                    </path>
                </svg>
                <h3>La Molisana. Dove le buone idee prendono nuove forme</h3>
            </div>
        </div>

        <div class="middle-rigth">
            <div class="more-info">
                <img src="{{ asset('images/box-home-sfarinati-2020.jpg') }}" alt="I nostri 5 sfarinati decorticati a pietra">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>I nostri 5 sfarinati decorticati a pietra</h3>
                </div>
            </div>
            <div class="more-info">
                <img src="{{ asset('images/box-home-integrale-2020.jpg') }}" alt="Nuovo integrale: ricco di fibre e con più vitamine. Da oggi con grano 100% italiano">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>Nuovo integrale: ricco di fibre e con più vitamine. Da oggi con grano 100% italiano</h3>
                </div>
            </div>
            <div class="more-info">
                <img src="{{ asset('images/box-home-timeline-2020.jpg') }}" alt="Cento anni di pasta La Molisana">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>Cento anni di pasta La Molisana</h3>
                </div>
            </div>
            <div class="more-info">
                <img src="{{ asset('images/box-home-tenacita-certificata.jpg') }}" alt="Da oggi la nostra tenacità è certificata">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>Da oggi la nostra tenacità è certificata</h3>
                </div>
            </div>
        </div>

        <div class="bottom-left">
            <div class="more-info">
                <img src="{{ asset('images/box-home-rossi-2020.jpg') }}" alt="Perfetto per una grande pasta">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>Perfetto per una grande pasta</h3>
                </div>
            </div>
            <div class="more-info">
                <img src="{{ asset('images/montagna.jpg') }}" alt="La nostra filiera integrata">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>La nostra filiera integrata</h3>
                </div>
            </div>
            <div class="more-info">
                <img src="{{ asset('images/box-home-comunicazione-2020.jpg') }}" alt="La nostra comunicazione pubblicitaria">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>La nostra comunicazione pubblicitaria</h3>
                </div>
            </div>
            <div class="more-info">
                <img src="{{ asset('images/box-home-leonardo-2020.jpg') }}" alt="Orgogliosi di affermare la Qualità Italia nel mondo">
                <div class="description-info text-center">
                    <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                        </path>
                    </svg>
                    <h3>Orgogliosi di affermare la Qualità Italia nel mondo</h3>
                </div>
            </div>
        </div>

        <div class="bottom-rigth more-info">
            <img src="{{ asset('images/box-home-grano-100-italiano.jpg') }}" alt="La nostra pasta è 100% grano italiano. Scopri di più">
            <div class="description-info text-center">
                <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M240 24c115.2 0 209.6 94.4 209.6 209.6s-94.4 209.6-209.6 209.6-209.6-94.4-209.6-209.6 94.4-209.6 209.6-209.6zm0-30.4c-132.8 0-240 107.2-240 240s107.2 240 240 240 240-107.2 240-240-107.2-240-240-240zm80 256h-160c-9.6 0-16-6.4-16-16s6.4-16 16-16h160c9.6 0 16 6.4 16 16s-6.4 16-16 16zm-80 80c-9.6 0-16-6.4-16-16v-160c0-9.6 6.4-16 16-16s16 6.4 16 16v160c0 9.6-6.4 16-16 16z">
                    </path>
                </svg>
                <h3>La nostra pasta è 100% grano italiano. Scopri di più</h3>
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
