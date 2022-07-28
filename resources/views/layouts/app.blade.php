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

    <footer class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Web Logo">
                    </div>

                    <div class="footer-description">
                        <p>Independent Web Developer in Aceh, Indonesian. Receive services for creating company profile websites, personal websites, and other websites.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-title">
                        <h3>Links</h3>
                    </div>
                    <div class="footer-item">
                        <ul>
                            <li>
                                <a href="#" class="footer-item-link">Experience &amp; Education</a>
                            </li>
                            <li>
                                <a href="#" class="footer-item-link">Services</a>
                            </li>
                            <li>
                                <a href="#" class="footer-item-link">Portfolio</a>
                            </li>
                            <li>
                                <a href="#" class="footer-item-link">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-title">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="footer-item">
                        <ul>
                            <li>
                                <a href="https://wa.me/6285371161621" class="footer-item-link"><span><i class="fab fa-whatsapp"></i></span>&emsp;+62 853-7116-1621</a>
                            </li>
                            <li class="mt-3">
                                <a href="https://instagram.com/t_rizaldi" class="footer-item-link"><span><i class="fab fa-instagram"></i></span>&emsp;t_rizaldi</a>
                            </li>
                            <li class="mt-3">
                                <a href="mailto:t.rizaldifadli2001@gmail.com" class="footer-item-link"><span><i class="fas fa-envelope"></i></span>&emsp;t.rizaldifadli2001@gmail.com</a>
                            </li>
                            <li class="mt-3">
                                <a href="#" class="footer-item-link"><span><i class="fas fa-map-marker-alt"></i></span>&emsp;Jalan Kebun Baru, Dusun Pahlawan, Desa Paya Bujok Seulemak, Kecamatan Langsa Baro, Kota Langsa, Aceh 24415 Indonesia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="copyright text-center">
                    <p>Copyright &copy; 2022 <span>Rizal WebDev.</span> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
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