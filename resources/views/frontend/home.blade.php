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

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,288L48,240C96,192,192,96,288,64C384,32,480,64,576,64C672,64,768,32,864,16C960,0,1056,0,1152,26.7C1248,53,1344,107,1392,133.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

</main>

@endsection