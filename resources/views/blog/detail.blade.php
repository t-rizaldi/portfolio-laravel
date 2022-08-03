@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
    <section class="hero-post">
        <div class="container">
            <div class="breadcrumb-content text-uppercase">
                <h1>HAL YANG MEMPENGARUHI PAGESPEED SEBUAH WEBSITE</h1>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li>HAL YANG MEMPENGARUHI PAGESPEED SEBUAH WEBSITE</li>
                </ul>
            </div>
        </div>
    </section>
{{-- End Hero Section --}}

{{-- Post Detail Section --}}
    <section class="post-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-detail-content">
                        <div class="post-img">
                            <img src="{{ asset('img/blog-img.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="post-info">
                            <p class="post-date"><span class="text-primary"><i class="fas fa-clock"></i></span>&emsp;1 Aug, 2022</p>
                            <p class="post-writer ms-5"><span class="text-primary"><i class="fas fa-user"></i></span>&emsp;Rizaldi</p>
                        </div>
                        <div class="post-excerpt">
                            <h2>
                                <i class="fas fa-quote-left"></i>
                                Performa pagespeed website Anda akan berpengaruh kepada pengalaman pengguna, sehingga perlu memperhatikan beberapa hal ini untuk optimasi website bisnis Anda
                                <i class="fas fa-quote-right"></i>
                            </h2>
                        </div>
                        <div class="post-description">
                            <p>Page loading time sebuah website memiliki peran penting dalam mendatangkan pengunjung. Kenyamanan pengunjung akan terpengaruh oleh cepat atau lambatnya pagespeed sebuah website. Kemudian hal ini juga akan memberikan dampak berlanjut kepada pengalaman pengguna (user experience). Website yang memiliki traffic tinggi cenderung memiliki pagespeed yang cepat sebab pengalaman penggunanya tergolong baik, sehingga pengunjung betah berada di dalam website tersebut.</p>

                            <p>Maka dari itu, jika Anda memiliki website bisnis, Anda perlu memperhatikan apakah website Anda memiliki page loading time yang cepat atau lambat. Jika website bisnis Anda memiliki pagespeed yang lambat, Anda akan memiliki beberapa kerugian. Seperti yang dikemukakan oleh Google, apabila pagespeed website Anda lebih dari 3 detik, maka setengah dari pengunjung website Anda akan pergi atau meninggalkan website Anda.</p>

                            <p>Apabila pengunjung website Anda pergi hal ini tentu berdampak pada tingkat konversi bisnis Anda. Website dengan pagespeed yang cepat cenderung memiliki tingkat konversi yang tinggi, sebab jika kenyamanan pengunjung website tersebut buruk, maka kemungkinannya sangat kecil untuk pengguna membeli suatu produk dari website tersebut. Karena untuk melakukan sebuah pembayaran dalam sebuah website, butuh beberapa tindakan yang membutuhkan perpindahan dari sebuah halaman website ke halaman yang lain. Tentu pengunjung tidak akan betah jika membutuhkan waktu yang lama untuk berpindah dari satu halaman ke halaman yang lain.</p>

                            <p>Selain itu, website dengan pagespeed yang lambat akan mempengaruhi rangking website dalam search engine. Seperti Google, mereka ingin pengguna mendapatkan pengalaman yang terbaik, sehingga demi pengalaman pengguna yang baik, mereka memperhatikan pagespeed setiap website yang akan ditampilkan dalam search engine result page mereka. Tentu website dengan pagespeed yang lambat akan kalah dengan website yang memiliki page loading time yang cepat.</p>

                            <p>Maka dari itu, Anda perlu melakukan optimasi website bisnis Anda demi kebaikan bisnis Anda. Berikut hal yang Anda perlu perhatikan yang dapat mempengaruhi kecepatan website Anda.</p>
                        </div>
                    </div>

                    <div class="related-post">
                        <div class="title">
                            <h3>Related Post</h3>
                        </div>

                        <div class="row related-item justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img src="{{ asset('img/blog-img.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p>3 August, 2022</p>
                                        <a href="{{ route('blog.detail') }}">Peran Social Media Analytics dalam Competitive Intelligence</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img src="{{ asset('img/blog-img.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p>3 August, 2022</p>
                                        <a href="{{ route('blog.detail') }}">Peran Social Media Analytics dalam Competitive Intelligence</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <img src="{{ asset('img/blog-img.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p>3 August, 2022</p>
                                        <a href="{{ route('blog.detail') }}">Peran Social Media Analytics dalam Competitive Intelligence</a>
                                    </div>
                                </div>
                            </div>
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