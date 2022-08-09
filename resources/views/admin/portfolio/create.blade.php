@extends('layouts.admin.app')

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
            <li class="breadcrumb-item active">Create Portfolio</li>
        </ol>
    </div>
    <!-- Page header end -->

    {{-- Main Container Start --}}
    <div class="main-container">
        <div class="row gutters justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-light">Create Portfolio</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Project Title *</label>
                                <input type="text" class="form-control mb-3 @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter project title" value="{{ old('title') }}" required>
                                <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}" readonly>
                                 @error('title')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="client">Client Name *</label>
                                <input type="text" class="form-control @error('client') is-invalid @enderror" name="client" id="client" placeholder="Enter client name" value="{{ old('client') }}" required>
                                @error('client')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="website">Website URL</label>
                                <input type="url" class="form-control @error('website') is-invalid @enderror" name="website" id="website" placeholder="Enter website url" value="{{ old('website') }}">
                                @error('website')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="project_date">Project Date *</label>
                                <input type="month" class="form-control @error('project_date') is-invalid @enderror" name="project_date" id="project_date" placeholder="Enter project date" value="{{ old('project_date') }}" required>
                                @error('project_date')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="status">Status *</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status" id="status" required>
                                    <option value="" disabled selected>--Select Status--</option>
                                    <option value="Complete" @selected(old('status'))>Complete</option>
                                    <option value="On Progress" @selected(old('status'))>On Progress</option>
                                </select>
                                @error('status')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description *</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" placeholder="enter project description" required>{{ old('description') }}</textarea>
                                @error('description')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="gambar">Project Photo</label>
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                                @error('gambar')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Create</button>
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
            fetch('/admin/portfolio/check-slug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script>
@endsection