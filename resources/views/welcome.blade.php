<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		{{-- Volt CSS --}}
		<link type="text/css" href="{{ asset('theme/volt.css') }}" rel="stylesheet">

		{{-- Bootstrap icons --}}
		<link type="text/css" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
		
	</head>

	<body>

		<header class="header-global">
			<nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary pt-4 navbar-dark">
				<div class="container position-relative">
					<div class="d-flex align-items-center ms-auto">
						<a href="{{ route('login') }}" class="btn btn-outline-white d-inline-flex align-items-center me-md-3">
							<i class="icon icon-xs me-2 bi bi-arrow-right-square"></i>
							Login
						</a>
					</div>
				</div>
			</nav>
		</header>

		<main>

			<section class="section-header overflow-hidden pt-12 pt-lg-12 pb-10 pb-lg-10 bg-primary text-white">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h1 class="fw-bolder">Contact Information System</h1>
							<h2 class="lead fw-normal text-muted mb-5">Biliran Province State University</h2>
							<div class="d-flex align-items-center justify-content-center mb-5">
								<a href="#"
									class="btn btn-secondary d-inline-flex align-items-center me-4">
									<svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
											clip-rule="evenodd"></path>
									</svg>
									BIPSU Official Website
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main>

		{{-- Core --}}
		<script src="{{ asset('vendor/@popperjs/popper.min.js') }}"></script>
		<script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

		{{-- Smooth scroll --}}
		<script src="{{ asset('vendor/smooth-scroll/smooth-scroll.min.js') }}"></script>

		{{-- Volt JS --}}
		<script src="{{ asset('theme/volt.js') }}"></script>

	</body>

</html>