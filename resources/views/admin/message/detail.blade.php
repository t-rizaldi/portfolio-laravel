@extends('layouts.admin.app')

@section('content')
@include('partials.alert')
<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.message.index') }}">Message</a></li>
        <li class="breadcrumb-item active">Detail Message</li>
    </ol>
</div>
<!-- Page header end -->

{{-- Main Container Start --}}
<div class="main-container">
    <div class="row gutters justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">{{ $message->name }}</div>
                </div>
                <div class="card-body">
                    <div class="subject-message mb-3">
                        <h5>Subject</h5>
                        <p>{{ $message->subject }}</p>
                    </div>

                    <table class="table table-striped">
                        <tr>
                            <th>Email</th>
                            <th>:</th>
                            <td>{{ $message->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <th>:</th>
                            <td>{{ $message->phone }}</td>
                        </tr>
                        @if (!empty($message->service))
                        <tr>
                            <th>Service</th>
                            <th>:</th>
                            <td>{{ $message->service }}</td>
                        </tr>
                        @endif
                        
                        @if (!empty($message->found))
                        <tr>
                            <th>Found</th>
                            <th>:</th>
                            <td>{{ $message->found }}</td>
                        </tr>
                        @endif

                        <tr>
                            <th>Message</th>
                            <th>:</th>
                            <td>{{ $message->message }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection