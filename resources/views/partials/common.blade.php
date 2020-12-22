<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- FONTS --}}
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Playfair+Display&family=Teko:wght@300;600&display=swap" rel="stylesheet">

        {{-- JS --}}
        <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    </head>
    <body>
        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </body>
</html>
