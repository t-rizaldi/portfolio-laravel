@extends('layouts.app-v2')

@section('content')
    <!-- Project Hero Section -->
    <section class="page-hero">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('v2.index') }}"
                            class="text-secondary text-decoration-none">HOME</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('v2.portfolio') }}"
                            class="text-secondary text-decoration-none">PORTFOLIO</a>
                    </li>
                    <li class="breadcrumb-item active">{{ $portfolio->text }}</li>
                </ol>
            </nav>

            <h1 class="display-4 fw-bold mb-4">{{ $portfolio->text }}</h1>
            <div class="d-flex gap-2 mb-4">
                <span class="tech-item">Laravel</span>
                <span class="tech-item">MySQL</span>
                <span class="tech-item">Bootstrap</span>
            </div>
        </div>
        <div class="yellow-shape"></div>
    </section>

    <!-- Project Details Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="project-card p-4 mb-4">
                        <div class="project-image">
                            <img src="{{ $portfolio->gambar ? asset('storage/img_portfolio/' . $portfolio->gambar) : asset('storage/img_portfolio/default.jpg') }}"
                                alt="{{ $portfolio->title }}">
                        </div>
                        <h2 class="h4 mb-4">Project Description</h2>
                        <p class="text-secondary mb-4">{{ $portfolio->description }}</p>

                        <h3 class="h5 mb-3">Key Features</h3>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <div class="feature-icon">
                                    <i class="fas fa-box text-white"></i>
                                </div>
                                <h4 class="h6 mb-2">Asset Tracking</h4>
                                <p class="text-secondary small">Real-time tracking of all company assets</p>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line text-white"></i>
                                </div>
                                <h4 class="h6 mb-2">Reports & Analytics</h4>
                                <p class="text-secondary small">Comprehensive reporting system</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="project-card p-4">
                        <h3 class="h4 mb-4">Project Information</h3>
                        <ul class="project-info-list mb-0">
                            <li>
                                <i class="fas fa-building"></i>
                                <div>
                                    <span class="info-label">Client Name</span>
                                    <span>{{ $portfolio->client ?? '-' }}</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-globe"></i>
                                <div>
                                    <span class="info-label">Website</span>
                                    <span>{{ $portfolio->website ?? '-' }}</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-calendar"></i>
                                <div>
                                    <span class="info-label">Project Date</span>
                                    <span>{{ date('M Y', strtotime({{ $portfolio->project_date }})) }}2022</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <div>
                                    <span class="info-label">Status</span>
                                    <span class="status-badge">{{ $portfolio->status }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Next Project Section -->
    <section class="py-5" style="background: rgba(30, 41, 59, 0.3);">
        <div class="container">
            <div class="text-center">
                <h3 class="h5 text-secondary mb-3">Next Project</h3>
                <h2 class="h3 mb-4">Sistem Manajemen Absensi</h2>
                <a href="#" class="cta-button">
                    View Project <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
