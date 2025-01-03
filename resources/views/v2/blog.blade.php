@extends('layouts.app-v2')

@section('content')
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">HOME</a>
                    </li>
                    <li class="breadcrumb-item active">BLOG</li>
                </ol>
            </nav>
            <h1 class="display-4 fw-bold mb-4">BLOG</h1>
            <p class="lead text-secondary">Explore our latest insights and technical articles</p>
        </div>
        <div class="yellow-shape"></div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Blog Posts -->
                <div class="col-lg-8">
                    <div class="card-container">
                        <!-- Header with Filters -->
                        <div class="header-section">
                            <div class="filter-tabs">
                                <div class="filter-button active">All Posts</div>
                                <div class="filter-button">Backend Development</div>
                                <div class="filter-button">API Design</div>
                                <div class="filter-button">Database</div>
                                <div class="filter-button">Security</div>
                            </div>
                        </div>

                        <!-- Blog Grid -->
                        <div class="blog-grid">
                            <!-- Blog Card -->
                            <article class="blog-card">
                                <div class="blog-image">
                                    <img src="/api/placeholder/400/200" alt="Blog Post">
                                    <span class="blog-category">Backend</span>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar"></i> Mar 18, 2023</span>
                                        <span><i class="far fa-user"></i> Rizaldi</span>
                                    </div>
                                    <a href="#" class="blog-title">Modern Backend Architecture</a>
                                    <p class="blog-excerpt">Exploring the latest trends in backend development and
                                        scalable architectures...</p>
                                </div>
                            </article>

                            <!-- More Blog Cards -->
                            <!-- Copy the blog-card structure for more posts -->
                        </div>

                        <!-- Pagination -->
                        <div class="pagination p-4">
                            <a href="#" class="page-link active">1</a>
                            <a href="#" class="page-link">2</a>
                            <a href="#" class="page-link">3</a>
                            <a href="#" class="page-link">4</a>
                            <a href="#" class="page-link">5</a>
                            <a href="#" class="page-link"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-container">
                        <!-- Search -->
                        <div class="search-box">
                            <input type="text" class="search-input" placeholder="Search articles...">
                            <button class="search-button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="tech-stack">
                                <div class="tech-item">Backend Development</div>
                                <div class="tech-item">API Design</div>
                                <div class="tech-item">Database</div>
                                <div class="tech-item">Security</div>
                                <div class="tech-item">Performance</div>
                            </div>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Popular Posts</h3>
                            <div class="popular-post">
                                <img src="/api/placeholder/70/70" alt="Popular Post">
                                <div class="popular-post-content">
                                    <h4>Modern Backend Architecture</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i> Mar 18, 2023
                                    </div>
                                </div>
                            </div>
                            <!-- More Popular Posts -->
                        </div>

                        <!-- Recent Posts -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="popular-post">
                                <img src="/api/placeholder/70/70" alt="Recent Post">
                                <div class="popular-post-content">
                                    <h4>API Security Best Practices</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i> Mar 15, 2023
                                    </div>
                                </div>
                            </div>
                            <!-- More Recent Posts -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
