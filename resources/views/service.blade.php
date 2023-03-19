@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
    <section class="hero-service">
        <div class="container">
            <div class="breadcrumb-content text-uppercase" data-aos="fade-right" data-aos-duration="2000">
                <h1>Our Services</h1>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
{{-- End Hero Section --}}

{{-- Service content Section --}}
    <section class="service-content">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-down" data-aos-duration="2000">
                <h2>Website</h2>
            </div>
            <div class="service-content-detail text-center" data-aos="fade-right" data-aos-duration="2000">
                <p>Today, your website became one of the main way for you to communicate with your potential customers. Whether you need a corporate website, or whether you are selling your products directly online, we will build an adapted and scalable solution to fit your vision and ambitions.</p>

                <a href="{{ route('contact') }}" class="btn btn-primary btn-contact mx-auto mt-3" data-aos="fade-left" data-aos-duration="2000">Contact Us</a>
            </div>
        </div>
    </section>
{{-- End Service Content Section --}}

{{-- Service Section --}}
    <section class="service">
        <div class="container">
            {{-- Company Service --}}
            <div class="row company-service align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                    <div class="service-image">
                        <img src="{{ asset('img/service-company.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                    <div class="service-icon">
                        <img src="{{ asset('img/service-company-icon.png') }}" alt="">
                    </div>
                    <div class="service-title">
                        <h3>Company Profile</h3>
                    </div>
                    <div class="service-description">
                        <p>Show who you are and what you do in a relevant and efficient way. We help you to spread your message to the world. Do you need a website for a restaurant, a hotel, a portfolio or even a corporate website?</p>
                    </div>

                    <div class="service-link text-uppercase">
                        <ul>
                            <li>
                                <a href="{{ route('portfolio') }}">Case Studies</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Personal Service --}}
            <div class="row personal-service align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                    <div class="service-icon">
                        <img src="{{ asset('img/service-personal-icon.png') }}" alt="">
                    </div>
                    <div class="service-title">
                        <h3>Personal Profile</h3>
                    </div>
                    <div class="service-description">
                        <p>You want to create a personal portfolio or website so that you can be recognized by many people to represent who you are. Tell us what you need</p>
                    </div>

                    <div class="service-link text-uppercase">
                        <ul>
                            <li>
                                <a href="{{ route('portfolio') }}">Case Studies</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                    <div class="service-image">
                        <img src="{{ asset('img/service-personal.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            {{-- Aoolication Service --}}
            <div class="row app-service align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                    <div class="service-image">
                        <img src="{{ asset('img/service-web-app.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                    <div class="service-icon">
                        <img src="{{ asset('img/service-webapp-icon.png') }}" alt="">
                    </div>
                    <div class="service-title">
                        <h3>Web Application</h3>
                    </div>
                    <div class="service-description">
                        <p>For the most urgent and extensive projects, we can also build full web applications, including responsiveness across multiple media. Whether you need a complex web-based application, we can handle it!</p>
                    </div>

                    <div class="service-link text-uppercase">
                        <ul>
                            <li>
                                <a href="{{ route('portfolio') }}">Case Studies</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Get Started</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- End Service Section --}}

{{-- Contact Section --}}
<section class="service-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('img/service-contact.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5" data-aos="fade-left" data-aos-duration="1500">
                <div class="section-title">
                    <h2>Get In Touch With Us</h2>
                </div>
                <div class="support">
                    <p>Leave us your details and we will get back to you as soon as possible.</p>
                </div>

                <form action="{{ route('contact.message.project') }}" method="post">
                    @csrf
                    <div class="row" data-aos="fade-up" data-aos-duration="1500">
                        <div class="col-lg-6">
                            <input type="text" name="name" id="name" class="form-input @error('name') is-invalid @enderror" placeholder="Full Name *" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <select name="service" id="service" class="form-input @error('service') is-invalid @enderror" required>
                                <option value="">Services *</option>
                                <option value="Company Profile" @selected(old('service') == 'Company Profile')>Company Profile</option>
                                <option value="Personal Profile" @selected(old('service') == 'Personal Profile')>Personal Profile</option>
                                <option value="Web Application" @selected(old('service') == 'Web Application')>Web Aplication</option>
                            </select>
                            @error('service')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" id="email" class="form-input @error('email') is-invalid @enderror" placeholder="Email Address *" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="number" name="phone" id="phone" class="form-input @error('phone') is-invalid @enderror" placeholder="Phone No *" value="{{ old('phone') }}" required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="message" id="message" cols="30" rows="5" class="form-input  @error('message') is-invalid @enderror" placeholder="Message *" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-submit btn-primary mt-2">Submit Now</button>
                </form>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,69.3C384,75,480,85,576,85.3C672,85,768,75,864,74.7C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
@endsection