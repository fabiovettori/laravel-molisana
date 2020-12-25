@extends('partials.common')

@section('title', 'Products - La Molisana')

@section('content')
    <section class="products-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-uppercase text-center">
                    <h2>la molisana: pasta, semole e farina di qualita'</h2>
                    <p>tipi di pasta la molisana: il catalogo dei formati</p>
                </div>
            </div>
        </div>
    </section>

    <section class="products-list">

        @foreach ($filter as $key => $products)
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center text-uppercase category">
                        <h3> {{ $key }} </h3>
                    </div>
                </div>

                <div class="row no-gutters">
                    @foreach ($products as $key2 => $product)
                        <div class="col-xs-12 col-md-6 col-xl-4">
                            <div class="card-container p-1">
                                <div class="tile">
                                    <a href="{{ route('pasta', ['id' => $key2 ]) }}"> {{ $product['titolo'] }} </a>
                                    <img src="{{ $product['src'] }}" class="img-fluid" alt="{{ $product['titolo'] }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        @endforeach

    </section>
@endsection
