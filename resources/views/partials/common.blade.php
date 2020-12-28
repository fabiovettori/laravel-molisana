<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- FONTS --}}
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Playfair+Display&family=Poppins:wght@800&family=Roboto:wght@100&family=Teko:wght@300;600&display=swap" rel="stylesheet">

        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </head>
    <body>
        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

        <div class="scroll-top">
            <svg class="mk-svg-icon" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                <path d="M1683 1331l-166 165q-19 19-45 19t-45-19l-531-531-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z">
                </path>
            </svg>
        </div>
    </body>
</html>
