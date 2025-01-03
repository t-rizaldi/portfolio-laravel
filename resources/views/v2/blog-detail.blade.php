@extends('layouts.app-v2')


@section('content')
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">HOME</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#" class="text-secondary text-decoration-none">BLOG</a>
                    </li>
                    <li class="breadcrumb-item active">MODERN BACKEND ARCHITECTURE</li>
                </ol>
            </nav>
        </div>
        <div class="yellow-shape"></div>
    </section>

    <!-- Blog Content -->
    <section class="py-5" id="blog-detail">
        <div class="container">
            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <article class="card-container">
                        <div class="blog-header">
                            <span class="blog-category">Backend Development</span>
                            <h1 class="display-5 fw-bold">Modern Backend Architecture: A Complete Guide</h1>
                            <div class="blog-meta">
                                <div class="blog-meta-item">
                                    <i class="far fa-calendar"></i>
                                    <span>March 18, 2023</span>
                                </div>
                                <div class="blog-meta-item">
                                    <i class="far fa-user"></i>
                                    <span>Rizaldi</span>
                                </div>
                                <div class="blog-meta-item">
                                    <i class="far fa-clock"></i>
                                    <span>8 min read</span>
                                </div>
                            </div>
                        </div>

                        <div class="blog-content">
                            <img src="/api/placeholder/800/400" alt="Featured Image" class="blog-image">

                            <p>Modern backend architecture has evolved significantly over the past few years. With the
                                rise of cloud computing and microservices, the way we design and implement backend
                                systems has transformed dramatically.</p>

                            <h2>Understanding Modern Backend Architecture</h2>
                            <p>The modern backend architecture landscape is vastly different from what it was a few
                                years ago. Today's systems need to be scalable, maintainable, and efficient to handle
                                the growing demands of web applications.</p>

                            <div class="code-block">
                                <code>
                                    // Example of a modern API endpoint
                                    app.get('/api/v1/data', async (req, res) => {
                                    try {
                                    const data = await fetchData();
                                    res.json({ success: true, data });
                                    } catch (error) {
                                    res.status(500).json({
                                    success: false,
                                    error: error.message
                                    });
                                    }
                                    });
                                </code>
                            </div>

                            <h2>Key Components</h2>
                            <p>A modern backend architecture typically consists of several key components working
                                together seamlessly.</p>

                            <div class="tech-stack">
                                <span class="tech-item">Backend</span>
                                <span class="tech-item">Architecture</span>
                                <span class="tech-item">Development</span>
                                <span class="tech-item">API</span>
                            </div>

                            <!-- Share Section -->
                            <div class="social-links">
                                <span class="text-secondary">Share this article:</span>
                                <a href="#" class="social-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>

                            <!-- Author Section -->
                            <div class="author-section">
                                <div class="author-image">
                                    <img src="/api/placeholder/100/100" alt="Author">
                                </div>
                                <div class="author-bio">
                                    <h3>Rizaldi</h3>
                                    <p class="text-secondary">Backend Developer specializing in modern web technologies
                                        and scalable architectures. Passionate about creating efficient and maintainable
                                        solutions.</p>
                                    <div class="social-links">
                                        <a href="#" class="social-link">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="social-link">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-link">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Post Navigation -->
                            <div class="navigation-posts">
                                <a href="#" class="nav-post">
                                    <span><i class="fas fa-arrow-left me-2"></i>Previous Post</span>
                                    <h6>API Security Best Practices</h6>
                                </a>
                                <a href="#" class="nav-post next">
                                    <span>Next Post<i class="fas fa-arrow-right ms-2"></i></span>
                                    <h6>Database Optimization Tips</h6>
                                </a>

                            </div>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 2rem;">
                        <!-- Categories Card -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="tech-stack">
                                <a href="#" class="tech-item">Backend Development (12)</a>
                                <a href="#" class="tech-item">API Design (8)</a>
                                <a href="#" class="tech-item">Database (6)</a>
                                <a href="#" class="tech-item">Security (5)</a>
                                <a href="#" class="tech-item">Performance (4)</a>
                                <a href="#" class="tech-item">Architecture (7)</a>
                            </div>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Popular Posts</h3>
                            <a href="#" class="popular-post">
                                <img src="/api/placeholder/80/80" alt="Popular Post">
                                <div class="popular-post-content">
                                    <h4>Microservices vs Monolithic Architecture</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i>
                                        March 15, 2023
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="popular-post">
                                <img src="/api/placeholder/80/80" alt="Popular Post">
                                <div class="popular-post-content">
                                    <h4>API Security Best Practices Guide</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i>
                                        March 12, 2023
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="popular-post">
                                <img src="/api/placeholder/80/80" alt="Popular Post">
                                <div class="popular-post-content">
                                    <h4>Optimizing Database Performance</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i>
                                        March 10, 2023
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Recent Posts -->
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <a href="#" class="popular-post">
                                <img src="/api/placeholder/80/80" alt="Recent Post">
                                <div class="popular-post-content">
                                    <h4>Modern Backend Architecture Guide</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i>
                                        March 18, 2023
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="popular-post">
                                <img src="/api/placeholder/80/80" alt="Recent Post">
                                <div class="popular-post-content">
                                    <h4>Building Scalable Web Applications</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i>
                                        March 16, 2023
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="popular-post">
                                <img src="/api/placeholder/80/80" alt="Recent Post">
                                <div class="popular-post-content">
                                    <h4>Clean Code Principles in Backend</h4>
                                    <div class="popular-post-meta">
                                        <i class="far fa-calendar"></i>
                                        March 14, 2023
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
