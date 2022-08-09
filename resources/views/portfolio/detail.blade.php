@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
    <section class="hero-portfolio">
        <div class="container">
            <div class="breadcrumb-content text-uppercase">
                <h1>{{ $portfolio->title }}</h1>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li>{{ $portfolio->title }}</li>
                </ul>
            </div>
        </div>
    </section>
{{-- End Hero Section --}}
    
{{-- Portfolio Detail Section --}}
    <section class="portfolio-detail">
        <div class="container">
            <div class="col-lg-10 mx-auto">
                <div class="detail-img d-flex justify-content-center">
                    @if (!empty($portfolio->gambar))
                        <img src="{{ asset('storage/'.$portfolio->gambar) }}" alt="" class="img-fluid">                     
                    @else
                        <img src="{{ asset('storage/img_portfolio/default.jpg') }}" alt="" class="img-fluid">                        
                    @endif
                </div>

                <div class="row detail-info">
                    <div class="col-lg-6 justify-content-center">
                        <div class="detail-item">
                            <h4>Project Description</h4>
                            <p>{{ $portfolio->description }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="detail-item">
                            <h4>Project Information</h4>
                            <table>
                                <tr>
                                    <th>Client Name</th>
                                    <th>&ensp;:&ensp;</th>
                                    <td>{{ $portfolio->client }}</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <th>&ensp;:&ensp;</th>
                                    <td><a href="{{ $portfolio->website }}" class="text-decoration-none">{{ $portfolio->website }}</a></td>
                                </tr>
                                <tr>
                                    <th>Project Date</th>
                                    <th>&ensp;:&ensp;</th>
                                    <td>{{ date('F Y', strtotime($portfolio->project_date)) }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>&ensp;:&ensp;</th>
                                    <td>{{ $portfolio->status }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,69.3C384,75,480,85,576,85.3C672,85,768,75,864,74.7C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
@endsection