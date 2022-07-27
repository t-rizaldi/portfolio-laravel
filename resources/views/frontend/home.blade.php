@extends('layouts.app')

@section('content')

<main id="main">
    {{-- Section Banner --}}
    <section class="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="banner-description text-uppercase">
                        Hi, I'm <span class="text-primary">Rizaldi</span><br>
                        I'm a <span class="text-warning">Junior Web Developer</span> with a strong focus on problem solving and innovation.
                    </h1>
    
                    <p class="banner-description-support text-lg-start text-center">
                        Build your website with us
                    </p>
    
                    <div class="cta text-lg-start text-center">
                        <a href="#" class="btn btn-contact btn-primary">Contact Us</a>
                        <p>*Build your project with us today!</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/homeImage.png') }}" alt="Banner Image" class="img-fluid mt-lg-0 mt-5">
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,69.3C384,75,480,85,576,85.3C672,85,768,75,864,74.7C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    {{-- End Section --}}

    {{-- Section Work Process --}}
    <section class="work bg-primary">
        <div class="container">
            <div class="section-title text-center">
                <h2>Work Process</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="work-process">
                        <div class="work-item">
                            <img src="{{ asset('img/work-plan.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="work-process-title">
                            <h3 class="title-work">1. Planning</h3>
                            <p class="text-uppercase">Perencanaan Website</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="work-process">
                        <div class="work-item">
                            <img src="{{ asset('img/work-development.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="work-process-title">
                            <h3 class="title-work">2. Development</h3>
                            <p class="text-uppercase">Pengembangan Website</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="work-process">
                        <div class="work-item">
                            <img src="{{ asset('img/work-launch.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="work-process-title">
                            <h3 class="title-work">3. Launching</h3>
                            <p class="text-uppercase">Siap Pakai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="work-line">
            <img src="{{ asset('img/work-line.png') }}" alt="Image" class="img-fluid">
        </div>

    </section>
    {{-- End Section Work --}}


    {{-- Section Mission --}}
    <section class="mission">
        <div class="container">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Our Mission</h2>
                        <p class="mission-description">
                            Our mission, create a website that strengthens your company’s/personal/industry brand while ensuring ease of use and simplicity for your audience, using latest development tools to create stuning website.
                        </p>
                    </div>

                    <a href="#" class="btn btn-contact btn-primary mt-5">Our Service&emsp;<i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/mission-img.png') }}" alt="" class="img-fluid mt-lg-0 mt-5">
                </div>
            </div>
        </div>
    </section>
    {{--  End Section Mission --}}

    {{-- Section Blog --}}
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2>Our Blogs</h2>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mt-3">
                        <div class="card">
                            <div class="card-blog-img">
                                <img src="{{ asset('img/img-blog.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="card-blog-header d-flex my-2">
                                    <p class="blog-writer"><span class="text-primary"><i class="far fa-user"></i></span>&emsp;By Rizaldi</p>
                                    <p class="ms-auto blog-date"><span class="text-primary"><i class="far fa-calendar"></i></span>&emsp;Jul 26, 2022</p>
                                </div>
                                <a href="#" class="card-title">Seberapa Penting SEO dalam Bisnis Digital?</a>
                                <p class="card-text">Search Engine Optimization atau yang lebih dikenal dengan SEO merupakan elemen yang cukup penting dalam bisnis digital. Keberadaan SEO mampu memberikan visibilitas dalam menarik pelanggan di era kemajuan digital seperti sekarang.</p>

                                <a href="#" class="text-decoration-none blog-read-more"><span class="text-primary"><i class="fas fa-play"></i></span>&emsp;Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mt-3">
                        <div class="card">
                            <div class="card-blog-img">
                                <img src="{{ asset('img/img-blog.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="card-blog-header d-flex my-2">
                                    <p><span class="text-primary"><i class="far fa-user"></i></span>&emsp;By Rizaldi</p>
                                    <p class="ms-auto"><span class="text-primary"><i class="far fa-calendar"></i></span>&emsp;Jul 26, 2022</p>
                                </div>
                                <a href="#" class="card-title">Seberapa Penting SEO dalam Bisnis Digital?</a>
                                <p class="card-text">Search Engine Optimization atau yang lebih dikenal dengan SEO merupakan elemen yang cukup penting dalam bisnis digital. Keberadaan SEO mampu memberikan visibilitas dalam menarik pelanggan di era kemajuan digital seperti sekarang.</p>

                                <a href="#" class="text-decoration-none text-dark"><span class="text-primary"><i class="fas fa-play"></i></span>&emsp;Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mt-3">
                        <div class="card">
                            <div class="card-blog-img">
                                <img src="{{ asset('img/img-blog.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="card-blog-header d-flex my-2">
                                    <p><span class="text-primary"><i class="far fa-user"></i></span>&emsp;By Rizaldi</p>
                                    <p class="ms-auto"><span class="text-primary"><i class="far fa-calendar"></i></span>&emsp;Jul 26, 2022</p>
                                </div>
                                <a href="#" class="card-title">Seberapa Penting SEO dalam Bisnis Digital?</a>
                                <p class="card-text">Search Engine Optimization atau yang lebih dikenal dengan SEO merupakan elemen yang cukup penting dalam bisnis digital. Keberadaan SEO mampu memberikan visibilitas dalam menarik pelanggan di era kemajuan digital seperti sekarang.</p>

                                <a href="#" class="text-decoration-none text-dark"><span class="text-primary"><i class="fas fa-play"></i></span>&emsp;Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,69.3C384,75,480,85,576,85.3C672,85,768,75,864,74.7C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

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

</main>

@endsection