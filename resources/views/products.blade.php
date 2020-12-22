@extends('partials.common')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row no-gutters">
                @foreach ($products as $product)
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <img src="{{ $product['src'] }}" class="img-fluid p-1" alt="{{ $product['titolo'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
