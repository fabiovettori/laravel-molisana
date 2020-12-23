@extends('partials.common')

@section('title', 'Products - La Molisana')

@section('content')
    <section class="products-list">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                @foreach ($products as $product)
                    <div class="col-xs-12 col-md-6 col-xl-4">
                        <div class="card-container p-1">
                            <div class="tile">
                                <a href="#"> {{ $product['titolo'] }} </a>
                                <img src="{{ $product['src'] }}" class="img-fluid" alt="{{ $product['titolo'] }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
