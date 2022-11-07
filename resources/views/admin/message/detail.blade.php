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
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Card</div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection