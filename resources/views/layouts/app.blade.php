<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- Vendor Style --}}
    <link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('libraries/fontawesome/css/all.css') }}">

    {{-- Animation Style --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
            @include('partials.navbar')
    </header>
    
    @yield('content')

   @include('partials.footer')
    {{-- Vendor Script --}}
    <script src="{{ asset('libraries/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libraries/fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('libraries/jquery/jquery-3.6.0.min.js') }}"></script>

    {{-- AOS Animation Script --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    {{-- GSAP Animation Script --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>

    {{-- Custom Script --}}
    <script src="{{ asset('js/script.js') }}"></script>
    
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>
</html>