@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
    <section class="hero-service">
        <div class="container">
            <div class="breadcrumb-content text-uppercase">
                <h1>Contact Us</h1>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
{{-- End Hero Section --}}
    
{{-- Contact Item Section --}}
    <section class="contact-media">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <a href="https://wa.me/6285271161621" class="text-decoration-none">
                        <div class="contact-item">
                            <div class="icon-item fs-1 text-primary">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="description-item">
                                <h6>Call or Whatsapp us today</h6>
                                <p>+62 852 7116 1621</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="mailto:t.rizaldifadli2001@gmail.com" class="text-decoration-none">
                        <div class="contact-item">
                            <div class="icon-item fs-1 text-primary">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="description-item">
                                <h6>Send an Email</h6>
                                <p>t.rizaldifadli2001@gmail.com</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
{{-- End Contact Item Section --}}

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
                            <input type="text" class="form-input" placeholder="Subject *">

                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-input" placeholder="Email Address *">
                            <input type="text" class="form-input" placeholder="Phone No *">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="" class="mb-2">Found Rizal WebDev from *</label>
                                <select name="" id="" class="form-input">
                                    <option value="company profile">Company Profile</option>
                                    <option value="personal profile">Personal Profile</option>
                                    <option value="web application">Web Aplication</option>
                                </select>
                            </div>
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