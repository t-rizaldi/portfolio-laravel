<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Jasa pembuatan website profesional terbaik dan mudah untuk wujudkan website impian Anda. Buat Website dengan harga terjangkau. Pesan website sekarang!">
    <meta name="keywords"
        content="Membuat Website, Membuat Website Gratis, Buat Website, Buat Website Gratis, Membuat Website Sendiri, pembuatan website, bikin website, buat web, bikin web, Manfaat Website, jasa pembuatan website, pembuatan web, jasa buat web, jasa desain web, desain web murah, web desain, Rizaldi, Fadli, Teuku, Teuku Rizaldi Fadli, Teuku Rizaldi, Rizaldi Fadli">

    <title>{{ $title ?? 'Rizaldi Web Developer' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style-v2.css') }}">

    @stack('css')
</head>

<body>
    {{-- Navbar --}}
    <x-navbar />

    {{-- Content --}}
    @yield('content')

    {{-- Footer Section --}}
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('js')
</body>

</html>
