<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        <title>@yield('titolo')</title>
    </head>
    <body>
        @include('partials.header') {{--includo header --}}
        <main>
            @yield('main')
        </main>
        @include('partials.footer')

    </body>
</html>
