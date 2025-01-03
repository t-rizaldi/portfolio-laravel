@extends('layouts.app-v2')

@section('content')
    <!-- Service Hero Section -->
    <section class="page-hero">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">HOME</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">SERVICES</li>
                </ol>
            </nav>

            <h1 class="display-4 fw-bold mb-4">OUR SERVICES</h1>
            <p class="lead text-secondary mb-5">We provide comprehensive web development solutions tailored to your
                needs</p>
        </div>
        <div class="yellow-shape"></div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Website Development -->
                <div class="col-lg-4">
                    <div class="service-card p-4 h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-globe text-white fa-2x"></i>
                        </div>
                        <h3 class="h4 mb-3">Website Development</h3>
                        <p class="text-secondary mb-4">Create a professional website to communicate with your customers.
                            Perfect for corporate sites and online businesses.</p>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('v2.contact') }}" class="cta-button">Get Started</a>
                            <a href="{{ route('v2.portfolio') }}" class="text-primary ms-3 text-decoration-none">Case
                                Studies →</a>
                        </div>
                    </div>
                </div>

                <!-- Company Profile -->
                <div class="col-lg-4">
                    <div class="service-card p-4 h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-building text-white fa-2x"></i>
                        </div>
                        <h3 class="h4 mb-3">Company Profile</h3>
                        <p class="text-secondary mb-4">Show who you are and what you do efficiently. Perfect for
                            restaurants, hotels, and corporate websites.</p>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('v2.contact') }}" class="cta-button">Get Started</a>
                            <a href="{{ route('v2.portfolio') }}" class="text-primary ms-3 text-decoration-none">Case
                                Studies →</a>
                        </div>
                    </div>
                </div>

                <!-- Web Application -->
                <div class="col-lg-4">
                    <div class="service-card p-4 h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-code text-white fa-2x"></i>
                        </div>
                        <h3 class="h4 mb-3">Web Application</h3>
                        <p class="text-secondary mb-4">Build complex web applications with full responsiveness across
                            multiple media. Perfect for extensive projects.</p>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('v2.contact') }}" class="cta-button">Get Started</a>
                            <a href="{{ route('v2.portfolio') }}" class="text-primary ms-3 text-decoration-none">Case
                                Studies →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-4">Ready to Start Your Project?</h2>
                <p class="text-secondary mb-4">Let's discuss how we can help bring your ideas to life</p>
                <a href="{{ route('v2.contact') }}" class="cta-button">Contact Us Now</a>
            </div>
        </div>
    </section>
@endsection
