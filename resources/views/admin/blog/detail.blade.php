@extends('layouts.admin.app')

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Blog</a></li>
            <li class="breadcrumb-item active">Detail Blog</li>
        </ol>
    </div>
    <!-- Page header end -->

    {{-- Main Container Start --}}
    <div class="main-container">
        <div class="row gutters justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-light">{{ $post->title }}</div>
                    </div>
                    <div class="card-body">
                        <div class="post-img text-center">
                            @if (!empty($post->image))
                                <img src="{{ asset('storage/'.$post->image) }}" alt="Post Image" class="img-fluid img-thumbnail">                            
                            @else
                                <img src="{{ asset('storage/img_post/default.jpg') }}" alt="Post Image Default" class="img-fluid img-thumbnail">                                
                            @endif
                        </div>

                        <div class="post-info my-3 d-flex justify-content-end align-items-center align-content-center">
                            <div class="post-action mr-auto">
                                <a href="{{ route('admin.post.edit', $post->slug) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('admin.post.destroy', $post->slug) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus artikel {{ str($post->title)->lower() }} ini ?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                </form>
                            </div>
                            <p class="post-date"><span class="text-primary"><i class="fas fa-clock"></i></span>&emsp;{{ date('M d, Y', strtotime($post->created_at)) }}</p>
                            <p class="post-writer ml-5"><span class="text-primary"><i class="fas fa-user"></i></span>&emsp;Rizaldi</p>
                        </div>

                        <div class="post-excerpt">
                            <h2>
                                <i class="fas fa-quote-left"></i>
                                {{ $post->excerpt }}
                                <i class="fas fa-quote-right"></i>
                            </h2>
                        </div>

                        <div class="post-body mt-4">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection