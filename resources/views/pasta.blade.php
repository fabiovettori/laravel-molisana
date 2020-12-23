@extends('partials.common')

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
