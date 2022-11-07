@extends('layouts.admin.app')

@section('content')
@include('partials.alert')
<!-- Page header start -->
<div class="page-header">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Message</li>
    </ol>
</div>
<!-- Page header end -->

{{-- Main Container Start --}}
<div class="main-container">
    <div class="row gutters">
        <div class="col">
            <div class="table-container">
                <div class="t-header bg-primary text-light">
                    Message List
                </div>
                <div class="table-responsive">
                    <div class="row my-3 justify-content-end message-top">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <form action="" method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @foreach ($messages as $message)
                        @if (!$message->read)
                            <a href="{{ route('admin.message.show', $message->id) }}">
                                <div class="row message-list message-active">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <p>{{ $message->name }}</p>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                        <p>{{ $message->subject }}</p>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                        <p>{{ date('M j, Y', strtotime($message->created_at)) }}</p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ route('admin.message.show', $message->id) }}">
                                <div class="row message-list">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <p>{{ $message->name }}</p>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                        <p>{{ $message->subject }}</p>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                                        <p>{{ date('M j, Y', strtotime($message->created_at)) }}</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection