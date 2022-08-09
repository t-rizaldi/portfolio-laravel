<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="{{ asset('template/img/fav.png') }}" />

		<!-- Title -->
		<title>{{ $title }}</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset('template/fonts/style.css') }}">
		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('template/css/main.css') }}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="{{ asset('template/vendor/daterange/daterange.css') }}" />

		<!-- Data Tables -->
		<link rel="stylesheet" href="{{ asset('template/vendor/datatables/dataTables.bs4.css') }}" />
		<link rel="stylesheet" href="{{ asset('template/vendor/datatables/dataTables.bs4-custom.css') }}" />
		<link href="{{ asset('template/vendor/datatables/buttons.bs.css') }}" rel="stylesheet" />

		<!-- Notify -->
		<link rel="stylesheet" href="{{ asset('template/vendor/notify/notify-flat.css') }}" />


	</head>

	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Loading ends -->


		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			@include('partials.admin.sidebar')
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				@include('partials.admin.navbar')
				<!-- Header end -->

				@yield('content')

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('template/js/jquery.min.js') }}"></script>
		<script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('template/js/moment.js') }}"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="{{ asset('template/vendor/slimscroll/slimscroll.min.js') }}"></script>
		<script src="{{ asset('template/vendor/slimscroll/custom-scrollbar.js') }}"></script>

		<!-- Daterange -->
		<script src="{{ asset('template/vendor/daterange/daterange.js') }}"></script>
		<script src="{{ asset('template/vendor/daterange/custom-daterange.js') }}"></script>

		<!-- Polyfill JS -->
		<script src="{{ asset('template/vendor/polyfill/polyfill.min.js') }}"></script>

		<!-- Apex Charts -->
		<script src="{{ asset('template/vendor/apex/apexcharts.min.js') }}"></script>
		<script src="{{ asset('template/vendor/apex/admin/visitors.js') }}"></script>
		<script src="{{ asset('template/vendor/apex/admin/deals.js') }}"></script>
		<script src="{{ asset('template/vendor/apex/admin/income.js') }}"></script>
		<script src="{{ asset('template/vendor/apex/admin/customers.js') }}"></script>

		<!-- Data Tables -->
		<script src="{{ asset('template/vendor/datatables/dataTables.min.js') }}"></script>
		<script src="{{ asset('template/vendor/datatables/dataTables.bootstrap.min.js') }}"></script>
		
		<!-- Custom Data tables -->
		<script src="{{ asset('template/vendor/datatables/custom/custom-datatables.js') }}"></script>
		<script src="{{ asset('template/vendor/datatables/custom/fixedHeader.js') }}"></script>

		<!-- Notify js -->
		<script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('template/vendor/notify/notify.js') }}"></script>
		<script src="{{ asset('template/vendor/notify/notify-custom.js') }}"></script>

		<!-- Main JS -->
		<script src="{{ asset('template/js/main.js') }}"></script>

		@yield('jquery')

	</body>
</html>