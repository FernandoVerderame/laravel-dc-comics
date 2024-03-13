<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME', 'DC Comics') }} | @yield('title')</title>

    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="images/ico">

    {{-- Import Vite & co --}}
    @vite('resources/js/app.js')

    {{-- CDNS --}}
    @yield('cdns')

</head>
<body>

    {{-- Header --}}
    @include('includes.header')

    {{-- Jumbotron --}}
    <section id="jumbotron"></section>

    <main>
        {{-- Main Content --}}
        @yield('main-content')
    </main>

    {{-- Shopping Section --}}
    @include('includes.shopping_section')
    
    <footer>
    {{-- Footer Top --}}
    @include('includes.footer_top')

    {{-- Footer Bottom --}}
        @include('includes.footer_bottom')
    </footer>

    {{-- Scripts --}}
    @yield('scripts')

</body>
</html>