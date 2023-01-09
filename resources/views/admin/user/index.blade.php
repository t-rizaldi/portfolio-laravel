@extends('layouts.admin.app')

@section('content')
@include('partials.alert')
<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">User</li>
    </ol>
</div>
<!-- Page header end -->

{{-- Main Container Start --}}
<div class="main-container">
    <div class="row gutters">
        <div class="col">
            <div class="table-container">
                <div class="t-header bg-primary text-light">
                    User List
                    <a href="{{ route('admin.user.create') }}" class="btn btn-info ml-4"><i class="icon-plus"></i> Create</a>
                </div>
                <div class="table-responsive">
                    <table id="basicExample" class="table custom-table">
                        <thead>
                            <tr class="text-uppercase" align="middle">
                                <th>No</th>
                                <th>Image</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td align="middle">{{ $loop->iteration }}</td>
                                <td align="middle">
                                    @if (!empty($user->avatar))
                                        <img src="{{ asset('storage/'.$user->avatar) }}" alt="User Avatar" width="80">
                                    @else
                                        <img src="{{ asset('storage/img_user/default.png') }}" alt="User Avatar Default" width="80">
                                    @endif
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td align="middle">
                                    <a href="{{ route('admin.user.edit', $user->username) }}" class="btn btn-warning btn-rounded"><i class="icon-edit1"></i></a>

                                    <form action="{{ route('admin.user.destroy', $user->username) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus {{ str($user->name)->lower() }} ?')">
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
@endsection