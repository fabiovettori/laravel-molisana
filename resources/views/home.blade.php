@extends('partials.common')

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
            <div class="d-flex justify-content-leftr align-items-center p-5">
                <h3>Spaghetti alla carbonara</h3>
            </div>
        </div>

        <div class="top-rigth">
            <img src="{{ asset('images/pasta-fresca.jpg') }}" alt="Pasta di semola di grano duro fatta in casa">
            <div class="d-flex justify-content-left align-items-center p-5">
                <h3>Pasta di semola di grano duro fatta in casa</h3>
            </div>
        </div>

        <div class="middle-left">
            <img src="{{ asset('images/box-home-nuove-forme-2020.jpg') }}" alt="La Molisana. Dove le buone idee prendono nuove forme">
        </div>

        <div class="middle-rigth">
            <img src="{{ asset('images/box-home-sfarinati-2020.jpg') }}" alt="I nostri 5 sfarinati decorticati a pietra">
            <img src="{{ asset('images/box-home-integrale-2020.jpg') }}" alt="Nuovo integrale: ricco di fibre e con più vitamine. Da oggi con grano 100% italiano">
            <img src="{{ asset('images/box-home-timeline-2020.jpg') }}" alt="Cento anni di pasta La Molisana">
            <img src="{{ asset('images/box-home-tenacita-certificata.jpg') }}" alt="Da oggi la nostra tenacità è certificata">
        </div>

        <div class="bottom-left">
            <img src="{{ asset('images/box-home-rossi-2020.jpg') }}" alt="Perfetto per una grande pasta">
            <img src="{{ asset('images/montagna.jpg') }}" alt="La nostra filiera integrata">
            <img src="{{ asset('images/box-home-comunicazione-2020.jpg') }}" alt="La nostra comunicazione pubblicitaria">
            <img src="{{ asset('images/box-home-leonardo-2020.jpg') }}" alt="Orgogliosi di affermare la Qualità Italia nel mondo">
        </div>

        <div class="bottom-rigth">
            <img src="{{ asset('images/box-home-grano-100-italiano.jpg') }}" alt="La nostra pasta è 100% grano italiano. Scopri di più">
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
