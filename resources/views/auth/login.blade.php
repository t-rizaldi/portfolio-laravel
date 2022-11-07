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
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}" />

		{{-- Fontawesome CSS --}}
		<link rel="stylesheet" href="{{ asset('libraries/fontawesome/css/all.min.css') }}">

		<!-- Master CSS -->
		<link rel="stylesheet" href="{{ asset('template/css/main.css') }}" />

		{{-- Custom CSS --}}
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form action="{{ route('login.process') }}" method="post">
				@csrf
				
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="{{ route('home') }}" class="login-logo">
									<img src="{{ asset('img/logo.png') }}" alt="Rizal WebDev" />
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>

								@if (session()->has('error'))
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
										{{ session('error') }}
										<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								@endif

								<div class="form-group">
									<input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" />
									@error('username')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="form-group password-form">
									<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
									<span class="show-hide">
										<i class="fas fa-eye"></i>
									</span>
									@error('password')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="actions mb-4">
									<button type="submit" class="btn btn-info">Login</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

		{{-- Jquery JS --}}
		<script src="{{ asset('libraries/jquery/jquery-3.6.0.min.js') }}"></script>
		{{-- Bootstrap JS --}}
		<script src="{{ asset('libraries/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Main JS -->
		<script src="{{ asset('template/js/main.js') }}"></script>

		<script>
			const password = document.querySelector("#password");
			const btn_show = document.querySelector(".show-hide i");
		  
			btn_show.addEventListener("click", function(){
			  if(password.type === "password"){
				password.type = "text";
				btn_show.classList.add("hide");
			  } else {
				password.type = "password";
				btn_show.classList.remove("hide");
			  }
			});
		  </script>
	</body>
</html>