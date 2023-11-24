<x-guest-layout>

	<div class="text-center text-md-center mb-4 mt-md-0">
		<h1 class="mb-0 h3">Sign in to our platform</h1>
	</div>

	<form method="POST" action="{{ route('login') }}" class="mt-4">

		@csrf

		<div class="form-group mb-4">
			<label for="email">Your Email</label>
			<div class="input-group">
				<span class="input-group-text" id="basic-addon1">
					<i class="icon-xs text-gray-600 bi bi-envelope-at-fill"></i>
				</span>
				<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@company.com" id="email" autofocus >
				@error('email')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
		</div>

		<div class="form-group">
			<div class="form-group mb-4">
				<label for="password">Your Password</label>
				<div class="input-group">
					<span class="input-group-text" id="basic-addon2">
						<i class="icon icon-xs text-gray-600 bi bi-shield-lock-fill"></i>
					</span>
					<input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" id="password" >
					@error('password')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
			</div>

		</div>

		<div class="d-grid">
			<button type="submit" class="btn btn-gray-800">Sign in</button>
		</div>

	</form>

	<div class="mt-3 mb-4 text-center">
		<span class="fw-normal">
			<a href="{{ url('/') }}" class="fw-bold">Back</a>
		</span>
	</div>
	
</x-guest-layout>