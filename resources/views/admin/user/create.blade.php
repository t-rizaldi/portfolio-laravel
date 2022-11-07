@extends('layouts.admin.app')

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">User</a></li>
            <li class="breadcrumb-item active">Create User</li>
        </ol>
    </div>
    <!-- Page header end -->

    {{-- Main Container Start --}}
    <div class="main-container">
        <div class="row gutters justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-light">Create User</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter Full Name" value="{{ old('name') }}" required>
                                 @error('name')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter User Email" value="{{ old('email') }}" required>
                                @error('email')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="username">Username *</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Enter Username" value="{{ old('username') }}" required>
                                @error('username')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter User Pasword" required>
                                @error('password')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="avatar">User Avatar</label>
                                <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" id="avatar">
                                @error('avatar')
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