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
    
                    <p class="banner-description-support">
                        Build your website with us
                    </p>
    
                    <div class="cta">
                        <a href="#" class="btn btn-contact btn-primary">Contact Us</a>
                        <p>*Build your project with us today!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/homeImage.png') }}" alt="Banner Image" class="img-fluid">
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
        </div>
    </section>
</main>

@endsection