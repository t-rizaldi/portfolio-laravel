@extends('layouts.app-v2')


@section('content')
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center" id="home">
        <div class="hero-bg z-n1"></div>
        <div class="blob-shape"
            style="background: rgba(59, 130, 246, 0.2); width: 500px; height: 500px; top: -200px; right: -200px;"></div>
        <div class="blob-shape"
            style="background: rgba(96, 165, 250, 0.2); width: 400px; height: 400px; bottom: -150px; left: -150px;">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h1 class="display-4 mb-4">
                        Hi, I'm <span class="gradient-text">Rizaldi</span><br>
                        Backend Developer
                    </h1>
                    <p class="lead mb-4 text-secondary">Specializing in creating robust and scalable backend solutions
                        with a strong focus on problem solving and innovation.</p>

                    <div class="tech-stack">
                        <span class="tech-item">PHP</span>
                        <span class="tech-item">Javascript</span>
                        <span class="tech-item">Laravel</span>
                        <span class="tech-item">Codeigniter</span>
                        <span class="tech-item">Mysql</span>
                        <span class="tech-item">SQL Server</span>
                    </div>

                    <div class="mt-5">
                        <a href="{{ route('v2.contact') }}" class="cta-button me-3">Let's Connect</a>
                        <a href="{{ route('v2.portfolio') }}" class="cta-button outline">View Work</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="floating-element">
                        <!-- Your hero SVG illustration here -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                            <!-- Gradient Definitions -->
                            <defs>
                                <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#0F172A;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#1E293B;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="accentGradient" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#60A5FA;stop-opacity:1" />
                                </linearGradient>
                                <!-- Glowing Effect -->
                                <filter id="glow">
                                    <feGaussianBlur stdDeviation="3" result="coloredBlur" />
                                    <feMerge>
                                        <feMergeNode in="coloredBlur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                            </defs>

                            <!-- Background Shapes -->
                            <path d="M0,300 Q200,250 400,300 T800,300" fill="none" stroke="url(#accentGradient)"
                                stroke-width="2" opacity="0.1" />
                            <path d="M0,320 Q200,270 400,320 T800,320" fill="none" stroke="url(#accentGradient)"
                                stroke-width="2" opacity="0.1" />

                            <!-- Main Development Environment -->
                            <g transform="translate(200,150)">
                                <!-- Code Editor Window -->
                                <rect x="0" y="0" width="400" height="300" rx="15" fill="url(#bgGradient)"
                                    filter="url(#glow)" />
                                <rect x="0" y="0" width="400" height="40" rx="15" fill="#1E293B" />
                                <circle cx="25" cy="20" r="6" fill="#FF5F57" />
                                <circle cx="45" cy="20" r="6" fill="#FFBD2E" />
                                <circle cx="65" cy="20" r="6" fill="#28C840" />

                                <!-- Code Lines -->
                                <g transform="translate(20,60)" fill="#E2E8F0" opacity="0.7" font-family="monospace"
                                    font-size="14">
                                    <text y="20">const express = require('express');</text>
                                    <text y="45" fill="#3B82F6">class</text>
                                    <text y="45" x="50">RizaldevService {</text>
                                    <text y="70" x="20">constructor() {</text>
                                    <text y="95" x="40" fill="#60A5FA">this.app = express();</text>
                                    <text y="120" x="20">}</text>
                                    <text y="145" x="20" fill="#3B82F6">async</text>
                                    <text y="145" x="65">init() {</text>
                                    <text y="170" x="40">// Initialize server</text>
                                    <text y="195" x="20">}</text>
                                    <text y="220">}</text>
                                </g>
                            </g>

                            <!-- Floating Elements -->
                            <g transform="translate(650,150)">
                                <!-- Database Icon -->
                                <g filter="url(#glow)">
                                    <path d="M0,20 Q50,0 100,20 Q50,40 0,20" fill="url(#accentGradient)" />
                                    <path d="M0,20 L0,60 Q50,80 100,60 L100,20" fill="url(#accentGradient)"
                                        opacity="0.7" />
                                    <path d="M0,40 Q50,60 100,40" fill="none" stroke="#E2E8F0" stroke-width="1" />
                                </g>
                            </g>

                            <!-- API Endpoints -->
                            <g transform="translate(100,100)">
                                <rect x="0" y="0" width="120" height="80" rx="10" fill="#1E293B"
                                    opacity="0.8" />
                                <text x="20" y="30" fill="#3B82F6" font-family="monospace"
                                    font-size="12">/api/v1/data</text>
                                <text x="20" y="50" fill="#E2E8F0" font-family="monospace" font-size="12">GET
                                    Request</text>
                            </g>

                            <!-- Decorative Tech Symbols -->
                            <g transform="translate(600,400)" filter="url(#glow)">
                                <text font-family="monospace" font-size="24" fill="url(#accentGradient)">{}</text>
                            </g>
                            <g transform="translate(150,450)" filter="url(#glow)">
                                <text font-family="monospace" font-size="24" fill="url(#accentGradient)">( )</text>
                            </g>
                            <g transform="translate(700,200)" filter="url(#glow)">
                                <text font-family="monospace" font-size="24" fill="url(#accentGradient)">[]</text>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section py-6">
        <div class="container mt-2">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <div class="floating-element">
                        <!-- Your mission SVG illustration here -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                            <!-- Gradient Definitions -->
                            <defs>
                                <linearGradient id="missionGradient" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#60A5FA;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="darkGradient" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0%" style="stop-color:#0F172A;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#1E293B;stop-opacity:1" />
                                </linearGradient>
                                <!-- Glowing Effect -->
                                <filter id="missionGlow">
                                    <feGaussianBlur stdDeviation="3" result="coloredBlur" />
                                    <feMerge>
                                        <feMergeNode in="coloredBlur" />
                                        <feMergeNode in="SourceGraphic" />
                                    </feMerge>
                                </filter>
                            </defs>

                            <!-- Connection Lines Background -->
                            <g opacity="0.1">
                                <path d="M100,300 C250,250 350,350 500,300" stroke="url(#missionGradient)" fill="none"
                                    stroke-width="2" />
                                <path d="M150,350 C300,300 400,400 550,350" stroke="url(#missionGradient)" fill="none"
                                    stroke-width="2" />
                            </g>

                            <!-- Central Mission Target -->
                            <g transform="translate(350,250)" filter="url(#missionGlow)">
                                <!-- Outer Rings -->
                                <circle cx="50" cy="50" r="45" fill="none"
                                    stroke="url(#missionGradient)" stroke-width="2" />
                                <circle cx="50" cy="50" r="35" fill="none"
                                    stroke="url(#missionGradient)" stroke-width="2" />
                                <!-- Inner Target -->
                                <circle cx="50" cy="50" r="25" fill="#3B82F6" opacity="0.3" />
                                <circle cx="50" cy="50" r="15" fill="#3B82F6" />
                                <!-- Success Indicators -->
                                <path d="M45,50 L55,60 L75,40" stroke="#E2E8F0" stroke-width="3" fill="none" />
                            </g>

                            <!-- Connected Features -->
                            <g transform="translate(150,200)">
                                <!-- User Experience Card -->
                                <rect x="0" y="0" width="150" height="100" rx="15" fill="url(#darkGradient)"
                                    filter="url(#missionGlow)" />
                                <text x="20" y="40" fill="#E2E8F0" font-family="sans-serif" font-size="14">User
                                    Experience</text>
                                <path d="M20,60 L130,60" stroke="#3B82F6" stroke-width="2" />
                                <circle cx="75" cy="80" r="10" fill="url(#missionGradient)" />
                            </g>

                            <!-- Innovation Hub -->
                            <g transform="translate(500,150)">
                                <rect x="0" y="0" width="150" height="100" rx="15" fill="url(#darkGradient)"
                                    filter="url(#missionGlow)" />
                                <text x="20" y="40" fill="#E2E8F0" font-family="sans-serif"
                                    font-size="14">Innovation</text>
                                <path d="M20,60 L130,60" stroke="#3B82F6" stroke-width="2" />
                                <path d="M75,70 L85,80 L75,90 L65,80 Z" fill="url(#missionGradient)" />
                            </g>

                            <!-- Quality Assurance -->
                            <g transform="translate(350,400)">
                                <rect x="0" y="0" width="150" height="100" rx="15" fill="url(#darkGradient)"
                                    filter="url(#missionGlow)" />
                                <text x="20" y="40" fill="#E2E8F0" font-family="sans-serif" font-size="14">Quality
                                    Assurance</text>
                                <path d="M20,60 L130,60" stroke="#3B82F6" stroke-width="2" />
                                <rect x="65" y="70" width="20" height="20" fill="url(#missionGradient)"
                                    transform="rotate(45,75,80)" />
                            </g>

                            <!-- Decorative Elements -->
                            <g opacity="0.6">
                                <!-- Tech Dots -->
                                <circle cx="100" cy="100" r="5" fill="url(#missionGradient)"
                                    filter="url(#missionGlow)" />
                                <circle cx="700" cy="500" r="5" fill="url(#missionGradient)"
                                    filter="url(#missionGlow)" />
                                <circle cx="200" cy="500" r="3" fill="url(#missionGradient)"
                                    filter="url(#missionGlow)" />
                                <circle cx="600" cy="100" r="3" fill="url(#missionGradient)"
                                    filter="url(#missionGlow)" />
                            </g>

                            <!-- Connection Lines -->
                            <g stroke="url(#missionGradient)" stroke-width="2" opacity="0.4">
                                <path d="M225,250 L350,300" fill="none" />
                                <path d="M575,200 L450,300" fill="none" />
                                <path d="M425,400 L425,345" fill="none" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-content">
                        <h2 class="gradient-text mt-5 mb-4">Our Mission</h2>
                        <div class="floating-card p-4">
                            <p class="lead mb-4">Creating powerful websites that strengthen your brand while ensuring:
                            </p>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span>User-friendly interface design</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span>Robust backend solutions</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span>Latest development tools integration</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="fas fa-check-circle text-primary me-3"></i>
                                    <span>Scalable and maintainable code</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-6 position-relative" id="services">
        <div class="blob-shape"
            style="background: rgba(59, 130, 246, 0.1); width: 600px; height: 600px; top: 50%; right: -300px; transform: translateY(-50%);">
        </div>

        <div class="container mt-5">
            <div class="text-center mb-5">
                <h2 class="gradient-text mb-4">My Services</h2>
                <p class="lead text-secondary">Delivering high-quality web solutions</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="floating-card p-4 h-100">
                        <div class="service-icon">
                            <i class="fas fa-server text-white fa-lg"></i>
                        </div>
                        <h3 class="h4 mb-3">Backend Development</h3>
                        <p class="text-secondary mb-0">Building robust and scalable server-side applications with
                            modern
                            technologies.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="floating-card p-4 h-100">
                        <div class="service-icon">
                            <i class="fas fa-database text-white fa-lg"></i>
                        </div>
                        <h3 class="h4 mb-3">Database Design</h3>
                        <p class="text-secondary mb-0">Creating efficient and optimized database structures for your
                            applications.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="floating-card p-4 h-100">
                        <div class="service-icon">
                            <i class="fas fa-code text-white fa-lg"></i>
                        </div>
                        <h3 class="h4 mb-3">API Development</h3>
                        <p class="text-secondary mb-0">Designing and implementing RESTful APIs for seamless
                            integration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section -->
    <section class="work-process py-6 position-relative">
        <div class="blob-shape"
            style="background: rgba(59, 130, 246, 0.1); width: 500px; height: 500px; top: -200px; right: -200px;">
        </div>

        <div class="container mt-5">
            <div class="text-center mb-5">
                <h2 class="gradient-text mb-4">How I Work</h2>
                <p class="lead text-secondary">My development process is structured to deliver high-quality results</p>
            </div>

            <div class="row g-4">
                <!-- Planning Phase -->
                <div class="col-lg-4">
                    <div class="floating-card p-4 h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-clipboard-list text-white fa-lg"></i>
                        </div>
                        <h3 class="h4 mb-3">1. Planning</h3>
                        <p class="text-secondary mb-0">Comprehensive website planning and requirement analysis to
                            ensure perfect alignment with your goals.</p>
                        <ul class="list-unstyled mt-3 text-secondary">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Requirement Gathering
                            </li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Architecture Design</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Technology Selection</li>
                        </ul>
                    </div>
                </div>

                <!-- Development Phase -->
                <div class="col-lg-4">
                    <div class="floating-card p-4 h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-code text-white fa-lg"></i>
                        </div>
                        <h3 class="h4 mb-3">2. Development</h3>
                        <p class="text-secondary mb-0">Writing clean, efficient, and maintainable code while following
                            best practices.</p>
                        <ul class="list-unstyled mt-3 text-secondary">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Clean Code Practices</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Regular Testing</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Progress Updates</li>
                        </ul>
                    </div>
                </div>

                <!-- Launch Phase -->
                <div class="col-lg-4">
                    <div class="floating-card p-4 h-100">
                        <div class="service-icon mb-4">
                            <i class="fas fa-rocket text-white fa-lg"></i>
                        </div>
                        <h3 class="h4 mb-3">3. Launch</h3>
                        <p class="text-secondary mb-0">Careful deployment and thorough testing to ensure everything
                            works perfectly.</p>
                        <ul class="list-unstyled mt-3 text-secondary">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Final Testing</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Deployment</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Maintenance Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Projects Section -->
    @if (count($projects) > 0)
        <section class="portfolio py-6 position-relative">
            <div class="blob-shape"
                style="background: rgba(59, 130, 246, 0.1); width: 600px; height: 600px; bottom: -300px; left: -300px;">
            </div>

            <div class="container mt-5">
                <div class="text-center mb-5">
                    <h2 class="gradient-text mb-4">Featured Projects</h2>
                    <p class="lead text-secondary">Some of my recent works that showcase my development expertise</p>
                </div>

                <div class="row g-4">

                    @foreach ($projects as $project)
                        <div class="col-lg-6">
                            <div class="floating-card p-4 h-100">
                                <div class="project-image mb-4">
                                    <img src="{{ $project->gambar ? asset('storage/img_portfolio/' . $project->gambar) : asset('storage/img_portfolio/default.jpg') }}"
                                        alt="{{ $project->title }}" class="img-fluid rounded">
                                </div>
                                <div class="project-content">
                                    <h3 class="h4 mb-3">{{ $project->title }}</h3>
                                    <p class="text-secondary mb-3 text-truncate">{{ $project->description }}</p>
                                    <div class="tech-stack mb-4">
                                        <span class="tech-item">PHP</span>
                                        <span class="tech-item">Javascript</span>
                                        <span class="tech-item">Laravel</span>
                                        <span class="tech-item">MySql</span>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <a href="{{ route('v2.portfolio.detail', [$project->slug]) }}"
                                            class="cta-button md">View Project</a>
                                        {{-- <a href="#" class="cta-button outline md">Source Code</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Blog Section -->
    @if (count($posts) > 0)
        <section class="py-6 position-relative" id="blog">
            <div class="blob-shape"
                style="background: rgba(59, 130, 246, 0.1); width: 500px; height: 500px; bottom: -200px; left: -200px;">
            </div>

            <div class="container mt-5">
                <div class="text-center mb-5">
                    <h2 class="gradient-text mb-4">Latest Insights</h2>
                    <p class="lead text-secondary">Discover our latest thoughts and technical insights</p>
                </div>

                <div class="row g-4">
                    @foreach ($posts as $post)
                        <div class="col-lg-4">
                            <article class="blog-card h-100">
                                <div class="blog-image">
                                    <img src="{{ $post->image ? asset('storage/img_post/' . $post->image) : asset('storage/img_post/default.jpg') }}"
                                        alt="{{ $post->title }}" class="img-fluid w-100">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="text-primary"><i
                                                class="fas fa-calendar-alt me-2"></i>{{ date('d M Y', strtotime($post->created_at)) }}</span>
                                        <span class="text-secondary"><i
                                                class="fas fa-user me-2"></i>{{ $post->user->name }}</span>
                                    </div>
                                    <h3 class="h5 mb-3">{{ $post->title }}</h3>
                                    <p class="text-secondary text-truncate">{{ $post->excerpt }}</p>
                                    <a href="{{ route('v2.blog.detail', [$post->slug]) }}"
                                        class="btn btn-link text-primary p-0">Read More <i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                    <!-- Add more blog cards here -->
                </div>
            </div>
        </section>
    @endif
@endsection
