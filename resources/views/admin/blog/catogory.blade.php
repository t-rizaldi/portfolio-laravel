@extends('layouts.admin.app')

@section('content')
@include('partials.alert')
<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Blog</a></li>
        <li class="breadcrumb-item active">Blog Category</li>
    </ol>
</div>
<!-- Page header end -->

{{-- Main Container Start --}}
<div class="main-container">
    <div class="row gutters justify-content-center">
        <div class="col-lg-6">
            <div class="table-container">
                <div class="t-header bg-primary text-light">
                    Blog Category List
                    <button type="button" class="btn btn-info ml-4" data-toggle="modal" data-target="#createModal">
                        <i class="icon-plus"></i> Create
                    </button>
                </div>
                <div class="table-responsive">
                    <table id="basicExample" class="table custom-table">
                        <thead>
                            <tr class="text-uppercase" align="middle">
                                <th>No</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td align="middle">{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td align="middle">

                                    <button type="button" class="btn btn-warning btn-rounded btnEdit" data-toggle="modal" data-target="#editModal" data-name="{{ $category->name }}" data-slug="{{ $category->slug }}">
                                        <i class="icon-edit1"></i>
                                    </button>

                                    <form action="{{ route('admin.post.category.destroy', $category->slug) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus kategori {{ str($category->name)->lower() }} ?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-rounded"><i class="icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="customModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customModalLabel">Create Post Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.post.category.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Category Name *</label>
                        <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter category name" value="{{ old('name') }}" required>
                        @error('name')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                         @enderror

                        <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}" readonly>
                         @error('slug')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                         @enderror
                    </div>

            </div>
            <div class="modal-footer custom">
                
                <div class="left-side">
                    <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="submit" class="btn btn-link success">Create</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="customModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customModalLabel">Edit Post Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.post.category.update') }}" method="post">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="name">Category Name *</label>
                        <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" id="nameEdit" placeholder="Enter category name" value="{{ old('name') }}" required>
                        @error('name')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                         @enderror

                        <input type="text" class="form-control" name="slug" id="slugEdit" value="{{ old('slug') }}" readonly>
                        <input type="hidden" class="form-control" name="slugLama" id="slugLama" value="{{ old('slugLama') }}">
                         @error('slug')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                         @enderror
                    </div>

            </div>
            <div class="modal-footer custom">
                
                <div class="left-side">
                    <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="submit" class="btn btn-link warning">Edit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')
    <script>
        //Create
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('keyup', function() {
            fetch('/admin/post/category/check-slug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
        
        // Edit
        const name_edit = document.querySelector('#nameEdit');
        const slug_edit = document.querySelector('#slugEdit');

        name_edit.addEventListener('keyup', function() {
            fetch('/admin/post/category/check-slug?name=' + name_edit.value)
            .then(response => response.json())
            .then(data => slug_edit.value = data.slug)
        });
    </script>

    <script>
        $('.btnEdit').on('click', function() {
            const name_ctg = $(this).data('name');
            const slug_ctg = $(this).data('slug');
            const id = $(this).data('id');
            
            $('#editModal #nameEdit').val(name_ctg);
            $('#editModal #slugEdit').val(slug_ctg);
            $('#editModal #slugLama').val(slug_ctg);
        });
    </script>
@endsection