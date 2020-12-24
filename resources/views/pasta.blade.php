@extends('partials.common')

@section('title', 'La Molisana - ' . $product['titolo'])

@section ('content')
    <section class="products">

        <div class="container-fluid title py-4">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-center">
                    <a class="text-uppercase mr-2" href="{{ route('products') }}">tutti i prodotti ></a>
                    <h3 class="text-center text-uppercase">{{ $product['titolo'] }}</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid images">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <img class="img-fluid" src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
                </div>
                <div class="col-lg-12 p-0">
                    <img class="img-fluid" src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
                </div>
            </div>

            <div class="prev">
                <a href=" {{ route('pasta', ['id' => $commands['prev']]) }} ">
                    <div class="top">
                        <div class="preview">
                            <img src="{{ $products[$commands['prev']]['src'] }}" alt="{{ $products[$commands['prev']]['titolo'] }}">
                        </div>
                        <div class="arrow">
                            <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                                <path d="M1792 800v192q0 14-9 23t-23 9h-1248v224q0 21-19 29t-35-5l-384-350q-10-10-10-23 0-14 10-24l384-354q16-14 35-6 19 9 19 29v224h1248q14 0 23 9t9 23z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="bottom">
                        <h3 class="text-uppercase"> {{ $products[$commands['prev']]['titolo'] }} </h3>
                    </div>
                </a>
            </div>

            <div class="next">
                <a href="{{ route('pasta', ['id' => ($commands['next']) ]) }}">
                    <div class="top">
                        <div class="preview">
                            <img src="{{ $products[($commands['next'])]['src'] }}" alt="{{ $products[($commands['next'])]['titolo'] }}">
                        </div>
                        <div class="arrow">
                            <svg class="mk-svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                                <path d="M1728 893q0 14-10 24l-384 354q-16 14-35 6-19-9-19-29v-224h-1248q-14 0-23-9t-9-23v-192q0-14 9-23t23-9h1248v-224q0-21 19-29t35 5l384 350q10 10 10 23z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="bottom">
                        <h3 class="text-uppercase"> {{ $products[(($commands['next']))]['titolo'] }} </h3>
                    </div>
                </a>
            </div>
        </div>

        <div class="details">
            <div class="container-md pt-5 pb-3">
                <div class="row grid">
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img src=" {{ asset('images/marchio-sito-test.png') }}" alt="logo - La Molisana">
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center grid-y">
                        <h3 class="text-uppercase text-center">grano decorticato a pietra trafilatura a bronzo</h3>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img src=" {{ asset('images/marchio-matese-tab.png') }}" alt="Marchio matese">
                    </div>
                </div>

                <div class="row grid">
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <h3 class="text-uppercase text-center">{{ $product['titolo'] }}</h3>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center grid-y">
                        <h3 class="text-uppercase text-center">tempi di cottura: <span class="text-lowercase">{{ $product['cottura'] }}</span> </h3>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <h3 class="text-lowercase">{{ $product['peso'] }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="description">
            <div class="container-md">
                <div class="row">
                    <div class="col-lg-12">
                        <p> {!! $product['descrizione'] !!} </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>
@endsection
