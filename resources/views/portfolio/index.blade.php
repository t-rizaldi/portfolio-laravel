@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
    <section class="hero-portfolio">
        <div class="container">
            <div class="breadcrumb-content text-uppercase">
                <h1>PORTFOLIO</h1>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Portfolio</li>
                </ul>
            </div>
        </div>
    </section>
{{-- End Hero Section --}}

{{-- Portfolio Section --}}
<section class="portfolio">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Successful Projects</h2>
        </div>

        <div class="row justify-content-center portfolio-list">
            <div class="col-lg-3 col-md-4">
                <a href="#" class="text-decoration-none">
                    <div class="card">
                        <img src="{{ asset('img/logo-prime.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center">PT. PIM Prima Medika</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" class="text-decoration-none">
                    <div class="card">
                        <img src="{{ asset('img/unimal.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center">Universitas Malikussaleh</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section class="service-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('img/service-contact.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <div class="section-title">
                    <h2>Get In Touch With Us</h2>
                </div>
                <div class="support">
                    <p>Leave us your details and we will get back to you as soon as possible.</p>
                </div>

                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-input" placeholder="Full Name *">

                            <select name="" id="" class="form-input">
                                <option value="">Services *</option>
                                <option value="company profile">Company Profile</option>
                                <option value="personal profile">Personal Profile</option>
                                <option value="web application">Web Aplication</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-input" placeholder="Email Address *">
                            <input type="text" class="form-input" placeholder="Phone No *">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="" id="" cols="30" rows="5" class="form-input" placeholder="Message *"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-submit btn-primary mt-2">Submit Now</button>
                </form>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,69.3C384,75,480,85,576,85.3C672,85,768,75,864,74.7C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
@endsection