@extends('layouts.app-v2')

@section('content')
    <!-- Contact Hero Section -->
    <section class="page-hero">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">HOME</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
                </ol>
            </nav>

            <h1 class="display-4 fw-bold mb-4">CONTACT US</h1>
            <p class="lead text-secondary mb-5">Get in touch with us and let's start creating amazing things together
            </p>
        </div>
        <div class="yellow-shape"></div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="card-container p-4">
                        <h2 class="h3 mb-4">Get In Touch With Us</h2>
                        <p class="text-secondary mb-4">Leave us your details and we will get back to you as soon as
                            possible.</p>

                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Subject *</label>
                                        <input type="text" class="form-control" placeholder="Enter subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone No *</label>
                                        <input type="tel" class="form-control" placeholder="Enter your phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Found Rizal WebDev from *</label>
                                        <select class="form-control">
                                            <option value="">Select an option</option>
                                            <option value="community">Community</option>
                                            <option value="search">Search Engine</option>
                                            <option value="social">Social Media</option>
                                            <option value="referral">Referral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Message *</label>
                                        <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="cta-button">
                                        Submit Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <div class="feature-icon">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h3 class="h5 mb-2">Call or WhatsApp us today</h3>
                            <p class="text-secondary mb-0">+62 852 7116 1621</p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="feature-icon">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h3 class="h5 mb-2">Send an Email</h3>
                            <p class="text-secondary mb-0">t.rizaldifadli2001@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <h3 class="h5 mb-2">Visit Our Office</h3>
                            <p class="text-secondary mb-0">Aceh, Indonesia</p>
                        </div>
                    </div>

                    <!-- Contact Illustration -->
                    <div class="contact-illustration">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                            <!-- Gradient Definitions -->
                            <defs>
                                <linearGradient id="blueGradient" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#60A5FA;stop-opacity:1" />
                                </linearGradient>

                                <linearGradient id="yellowGradient" x1="0%" y1="0%" x2="100%"
                                    y2="0%">
                                    <stop offset="0%" style="stop-color:#FFD700;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#FFC107;stop-opacity:1" />
                                </linearGradient>

                                <!-- Glow Effects -->
                                <filter id="glow">
                                    <feGaussianBlur stdDeviation="2" result="coloredBlur" />
                                    <feMerge>
                                        <feMergeNode in="coloredBlur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                            </defs>

                            <!-- Main Contact Device -->
                            <g transform="translate(200,100)">
                                <!-- Device Frame -->
                                <rect x="0" y="0" width="400" height="300" rx="20" fill="#1E293B"
                                    stroke="url(#blueGradient)" stroke-width="2" />

                                <!-- Screen -->
                                <rect x="20" y="20" width="360" height="260" rx="10" fill="#0F172A" />

                                <!-- Chat Interface Elements -->
                                <!-- Message Bubbles -->
                                <g transform="translate(40,40)">
                                    <!-- Incoming Messages -->
                                    <rect x="0" y="0" width="200" height="40" rx="20"
                                        fill="url(#blueGradient)" opacity="0.3" />
                                    <rect x="0" y="50" width="150" height="40" rx="20"
                                        fill="url(#blueGradient)" opacity="0.3" />

                                    <!-- Outgoing Messages -->
                                    <rect x="120" y="100" width="180" height="40" rx="20"
                                        fill="url(#yellowGradient)" opacity="0.3" />
                                    <rect x="160" y="150" width="140" height="40" rx="20"
                                        fill="url(#yellowGradient)" opacity="0.3" />
                                </g>

                                <!-- Input Area -->
                                <rect x="40" y="240" width="320" height="20" rx="10" fill="#2D3748" />
                            </g>

                            <!-- Floating Icons -->
                            <g filter="url(#glow)">
                                <!-- Email Icon -->
                                <g transform="translate(100,200)">
                                    <rect x="0" y="0" width="60" height="60" rx="30" fill="#1E293B" />
                                    <path d="M15,20 L45,20 L30,35 Z" fill="url(#blueGradient)" />
                                </g>

                                <!-- Phone Icon -->
                                <g transform="translate(650,150)">
                                    <rect x="0" y="0" width="60" height="60" rx="30" fill="#1E293B" />
                                    <path d="M20,20 C20,20 25,25 30,40 C35,35 45,25 40,20" stroke="url(#blueGradient)"
                                        fill="none" stroke-width="2" />
                                </g>

                                <!-- Message Icon -->
                                <g transform="translate(600,400)">
                                    <rect x="0" y="0" width="60" height="60" rx="30" fill="#1E293B" />
                                    <circle cx="20" cy="30" r="3" fill="url(#blueGradient)" />
                                    <circle cx="30" cy="30" r="3" fill="url(#blueGradient)" />
                                    <circle cx="40" cy="30" r="3" fill="url(#blueGradient)" />
                                </g>
                            </g>

                            <!-- Connection Lines -->
                            <g stroke="url(#blueGradient)" stroke-width="1" opacity="0.2">
                                <!-- Curved Lines -->
                                <path d="M160,230 C200,300 400,200 600,430" fill="none" stroke-dasharray="4,4" />
                                <path d="M130,230 C170,300 350,200 550,430" fill="none" stroke-dasharray="4,4" />
                                <path d="M600,180 C500,200 400,150 350,100" fill="none" stroke-dasharray="4,4" />
                            </g>

                            <!-- Decorative Elements -->
                            <g opacity="0.5">
                                <circle cx="150" cy="450" r="4" fill="url(#blueGradient)" />
                                <circle cx="650" cy="100" r="4" fill="url(#blueGradient)" />
                                <circle cx="400" cy="500" r="4" fill="url(#blueGradient)" />
                                <circle cx="100" cy="150" r="4" fill="url(#blueGradient)" />
                            </g>

                            <!-- Tech Circuit Pattern -->
                            <g stroke="url(#blueGradient)" stroke-width="1" opacity="0.1">
                                <path d="M50,300 L100,300 L100,350" fill="none" />
                                <path d="M700,200 L650,200 L650,150" fill="none" />
                                <path d="M400,50 L400,100 L450,100" fill="none" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
