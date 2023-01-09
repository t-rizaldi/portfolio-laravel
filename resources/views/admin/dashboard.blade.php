@extends('layouts.admin.app')

@section('content')
    <!-- Page header start -->
    <div class="page-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Admin Dashboard</li>
        </ol>
    </div>
    <!-- Page header end -->
    
    <!-- Main container start -->
    <div class="main-container">

        <!-- Row start -->
					<div class="row gutters justify-content-center">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-folder"></i>
								</div>
								<div class="sale-num">
									<h3>{{ $portfolios }}</h3>
									<p>Portfolios</p>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-book-open"></i>
								</div>
								<div class="sale-num">
									<h3>{{ $posts }}</h3>
									<p>Posts</p>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-user"></i>
								</div>
								<div class="sale-num">
									<h3>{{ $users }}</h3>
									<p>Users</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

                    <!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Post</div>
								</div>
								<div class="card-body pt-0">
									<div id="postChart"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

    </div>
    <!-- Main container end -->
@endsection

@section('jquery')
    <script>
        let postOption = {
            chart: {
                type: 'line',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'posts',
                data: {!! json_encode($postTotalByCtg) !!}
            }],
            xaxis: {
                categories: {!! json_encode($postCategories) !!}
            },
            colors: ['#01902d']
        }

        let postChart = new ApexCharts(document.querySelector('#postChart'), postOption);
        postChart.render();
    </script>
@endsection