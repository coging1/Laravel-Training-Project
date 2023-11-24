<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	{{-- Volt CSS --}}
	<link type="text/css" href="{{ asset('theme/volt.css') }}" rel="stylesheet">

	{{-- Bootstrap icons --}}
	<link type="text/css" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

</head>

<body>

	@include('layouts.partials.sidebar')

	<main class="content">

		@include('layouts.partials.navbar')

		{{-- page content --}}
		{{ $slot }}

		{{-- footer --}}
		@include('layouts.partials.footer')

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