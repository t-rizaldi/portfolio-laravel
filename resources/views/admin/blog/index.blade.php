@extends('layouts.admin.app')

@section('content')
@include('partials.alert')
<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Blog</li>
    </ol>
</div>
<!-- Page header end -->

{{-- Main Container Start --}}
<div class="main-container">
    <div class="row gutters">
        <div class="col">
            <div class="table-container">
                <div class="t-header bg-primary text-light">
                    Blog List
                    <a href="{{ route('admin.post.create') }}" class="btn btn-info ml-4"><i class="icon-plus"></i> Create</a>
                </div>
                <div class="table-responsive">
                    <table id="basicExample" class="table custom-table">
                        <thead>
                            <tr class="text-uppercase" align="middle">
                                <th>No</th>
                                <th>Title</th>
                                <th>Views</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td align="middle">{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->view }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td align="middle">
                                    <a href="{{ route('admin.post.show', $post->slug) }}" class="btn btn-primary btn-rounded"><i class="icon-eye"></i></a>
                                    <a href="{{ route('admin.post.edit', $post->slug) }}" class="btn btn-warning btn-rounded"><i class="icon-edit1"></i></a>

                                    <form action="{{ route('admin.post.destroy', $post->slug) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus artikel {{ str($post->title)->lower() }} ini ?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-rounded"><i class="icon-edit1"></i></button>
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
@endsection