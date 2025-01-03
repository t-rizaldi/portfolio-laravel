@extends('layouts.app-v2')

@section('content')
    <!-- Portfolio Hero Section -->
    <section class="page-hero">
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">HOME</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">PORTFOLIO</li>
                </ol>
            </nav>

            <h1 class="display-4 fw-bold mb-4">PORTFOLIO</h1>
            <p class="lead text-secondary mb-5">Explore our successful projects and innovative solutions</p>
        </div>
        <div class="yellow-shape"></div>
    </section>

    <!-- Portfolio Filter Section -->
    <section class="py-5">
        <div class="container">
            <div class="filter-tabs justify-content-center mb-5">
                <button class="filter-button active">All Projects</button>
                <button class="filter-button">Web Apps</button>
                <button class="filter-button">Websites</button>
                <button class="filter-button">Systems</button>
            </div>

            <div class="row g-4">
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card h-100">
                            <div class="portfolio-image">
                                <img src="{{ $portfolio->gambar ? asset('storage/img_portfolio/' . $portfolio->gambar) : asset('storage/img_portfolio/default.jpg') }}"
                                    alt="{{ $portfolio->title }}">
                            </div>
                            <div class="p-4">
                                <div class="d-flex gap-2 mb-3">
                                    <span class="tech-item">Laravel</span>
                                    <span class="tech-item">MySQL</span>
                                </div>
                                <h3 class="h5 mb-3">{{ $portfolio->title }}</h3>
                                <p class="text-secondary mb-4 text-truncate">
                                    {{ $portfolio->description }}
                                </p>
                                <a href="{{ route('v2.portfolio.detail', [$portfolio->slug]) }}" class="view-project">View
                                    Project <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-4">Have a Project in Mind?</h2>
                <p class="text-secondary mb-4">Let's collaborate to bring your vision to life</p>
                <a href="{{ route('v2.contact') }}" class="btn btn-primary px-4 py-2"
                    style="background: var(--accent-gradient); border: none;">Contact Us Now</a>
            </div>
        </div>
    </section>
@endsection
