@extends('layouts.admin.app')

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
            <li class="breadcrumb-item active">Detail Portfolio</li>
        </ol>
    </div>
    <!-- Page header end -->

    {{-- Main Container Start --}}
    <div class="main-container">
        <div class="row gutters justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-light d-inline mr-4">Detail Portfolio</div>
                        <a href="{{ route('admin.portfolio.edit', $portfolio->slug) }}" class="btn btn-warning"><i class="icon-edit1"></i> Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                @if ($portfolio->gambar)
                                    <img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="" class="portfolio-img img-fluid">                                    
                                @else                                    
                                    <img src="{{ asset('storage/img_portfolio/default.jpg') }}" alt="" class="portfolio-img img-fluid">                                    
                                @endif
                            </div>
                            <div class="col-lg-8">
                                <div class="table-container">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th class="text-uppercase">Title</th>
                                                <th>:</th>
                                                <td>{{ $portfolio->title }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-uppercase">Client Name</th>
                                                <th>:</th>
                                                <td>{{ $portfolio->client }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-uppercase">Website</th>
                                                <th>:</th>
                                                <td>{{ $portfolio->website }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-uppercase">Project Date</th>
                                                <th>:</th>
                                                <td>{{ date('F Y', strtotime($portfolio->project_date)) }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-uppercase">Status</th>
                                                <th>:</th>
                                                <td>{{ $portfolio->status }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-uppercase">Description</th>
                                                <th>:</th>
                                                <td>{{ $portfolio->description }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection