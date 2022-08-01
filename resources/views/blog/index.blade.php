@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
    <section class="hero-service">
        <div class="container">
            <div class="breadcrumb-content text-uppercase">
                <h1>Blog</h1>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
{{-- End Hero Section --}}

{{-- Blog Section --}}
    <section class="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-content">
                        <div class="post-item">
                            <div class="post-img">
                                <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="post-info">
                                <p class="post-date"><span class="text-primary"><i class="fas fa-clock"></i></span>&emsp;1 Aug, 2022</p>
                                <p class="post-writer ms-5"><span class="text-primary"><i class="fas fa-user"></i></span>&emsp;Rizaldi</p>
                            </div>
                            <div class="post-title">
                                <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                            </div>
                            <div class="post-excerpt">
                                <p>Performa pagespeed website Anda akan berpengaruh kepada pengalaman pengguna, sehingga perlu memperhatikan beberapa hal ini untuk optimasi website bisnis Anda website bisnis Anda</p>
                            </div>

                            <a href="#" class="post-read-more"><span class="text-primary"><i class="fas fa-play"></i></span>&emsp;Read More</a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-item">
                            <div class="post-img">
                                <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="post-info">
                                <p class="post-date"><span class="text-primary"><i class="fas fa-clock"></i></span>&emsp;1 Aug, 2022</p>
                                <p class="post-writer ms-5"><span class="text-primary"><i class="fas fa-user"></i></span>&emsp;Rizaldi</p>
                            </div>
                            <div class="post-title">
                                <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                            </div>
                            <div class="post-excerpt">
                                <p>Performa pagespeed website Anda akan berpengaruh kepada pengalaman pengguna, sehingga perlu memperhatikan beberapa hal ini untuk optimasi website bisnis Anda website bisnis Anda</p>
                            </div>

                            <a href="#" class="post-read-more"><span class="text-primary"><i class="fas fa-play"></i></span>&emsp;Read More</a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-item">
                            <div class="post-img">
                                <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="post-info">
                                <p class="post-date"><span class="text-primary"><i class="fas fa-clock"></i></span>&emsp;1 Aug, 2022</p>
                                <p class="post-writer ms-5"><span class="text-primary"><i class="fas fa-user"></i></span>&emsp;Rizaldi</p>
                            </div>
                            <div class="post-title">
                                <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                            </div>
                            <div class="post-excerpt">
                                <p>Performa pagespeed website Anda akan berpengaruh kepada pengalaman pengguna, sehingga perlu memperhatikan beberapa hal ini untuk optimasi website bisnis Anda website bisnis Anda</p>
                            </div>

                            <a href="#" class="post-read-more"><span class="text-primary"><i class="fas fa-play"></i></span>&emsp;Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Search" required>
                            <button type="submit" class="btn-search"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>

                    <div class="sidebar-post-content">
                        {{-- Popular Content--}}
                        <div class="popular-post">
                            <div class="title">
                                <h3>Popular Post</h3>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                        </div>
                        {{-- Recent Content--}}
                        <div class="recent-post">
                            <div class="title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="sidebar-img">
                                    <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="sidebar-info">
                                    <a href="#">Hal yang Mempengaruhi Pagespeed Sebuah Website</a>
                                    <p>1 August, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,69.3C384,75,480,85,576,85.3C672,85,768,75,864,74.7C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
@endsection