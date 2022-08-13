@extends('layouts.admin.app')

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Blog</a></li>
            <li class="breadcrumb-item active">Edit Blog</li>
        </ol>
    </div>
    <!-- Page header end -->

    {{-- Main Container Start --}}
    <div class="main-container">
        <div class="row gutters justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-light">Edit Blog</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.post.update', $post->slug) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="title">Post Title *</label>
                                <input type="text" class="form-control mb-3 @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter post title" value="{{ old('title', $post->title) }}" required>
                                @error('title')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', $post->slug) }}" readonly>
                                @error('slug')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Post Category *</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id" required>
                                    <option value="" disabled selected>--Select Category--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="excerpt">Post Excerpt *</label>
                                <textarea name="excerpt" id="excerpt"rows="3" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
                                 @error('excerpt')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="body">Post Body *</label>
                                <textarea name="body" id="body"rows="3" class="form-control summernote" required>{{ old('body', $post->body) }}</textarea>
                                 @error('body')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Post Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                                <input type="hidden" name="oldImage" id="oldImage" value="{{ $post->image }}">
                                @error('image')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-warning float-right">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jquery')
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/post/check-slug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 170,
                tabsize: 2
            });
        });
    </script>
@endsection