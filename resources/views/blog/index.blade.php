@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
    <section class="hero-service">
        <div class="container">
            <div class="breadcrumb-content text-uppercase">
                @if (!$search)
                    <h1>Blog</h1>
                @else
                    <h1>Search: {{ $search }}</h1>
                @endif
                
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    @if (!$search)
                        <li>Blog</li>
                    @else
                    <li>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li>Search</li>
                    <li>{{ $search }}</li>
                    @endif
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
                    @foreach ($posts as $post)
                        <div class="post-content">
                            <div class="post-item">
                                <div class="post-img">
                                    @if (!empty($post->image))
                                        <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">                                        
                                    @else
                                        <img src="{{ asset('storage/img_post/default.jpg') }}" alt="" class="img-fluid">                                        
                                    @endif
                                </div>
                                <div class="post-info">
                                    <p class="post-date"><span class="text-primary"><i class="fas fa-clock"></i></span>&emsp;{{ date('M d, Y', strtotime($post->created_at)) }}</p>
                                    <p class="post-writer ms-5"><span class="text-primary"><i class="fas fa-user"></i></span>&emsp;Rizaldi</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ route('blog.detail', $post->slug) }}">{{  $post->title }}</a>
                                </div>
                                <div class="post-excerpt">
                                    <p>{{ $post->excerpt }}</p>
                                </div>

                                <a href="{{ route('blog.detail', $post->slug) }}" class="post-read-more"><span class="text-primary"><i class="fas fa-play"></i></span>&emsp;Read More</a>
                            </div>
                        </div>
                    @endforeach

                    {{ $posts->links() }}
                    
                </div>

                @include('blog.sidebar')

            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,69.3C384,75,480,85,576,85.3C672,85,768,75,864,74.7C960,75,1056,85,1152,85.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
@endsection