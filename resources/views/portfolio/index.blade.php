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
            @foreach ($portfolios as $portfolio)
            <div class="col-lg-3 col-md-4">
                <a href="{{ route('portfolio.detail', $portfolio->slug) }}" class="text-decoration-none">
                    <div class="card">
                        @if (!empty($portfolio->gambar))
                            <img src="{{ asset('storage/'.$portfolio->gambar) }}" class="card-img-top" alt="..." style="max-height: 300px;">                            
                        @else                            
                            <img src="{{ asset('storage/img_portfolio/default.jpg') }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                          <h5 class="card-title text-center">{{ $portfolio->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
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

                <form action="{{ route('contact.message.project') }}" method="post">
                    @csrf
                    <div class="row">
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