<x-app-layout>

	{{-- per page status --}}
	@if ( session('status') )
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
		</div>
	@endif

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
		<div class="d-block mb-md-0">
			<h2 class="h4">Profile</h2>
		</div>
	</div>

	<div class="row justify-content-center mb-4">
		<div class="col-12 col-xl-8">

			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">Profile information</h2>

				<form method="POST" action="{{ route('profile.update') }}">

					@csrf
					@method('patch')

					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" >
								@error('name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control @error('name') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email', $user->email) }}" >
								@error('email')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

					</div>

					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save</button>
					</div>

				</form>

			</div>

			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">Update Password</h2>
				
				<form method="POST" action="{{ route('password.update') }}">

					@csrf
					@method('put')

					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="current_password">Current Password</label>
								<input class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" type="password" placeholder="Current Password" >
								@error('current_password')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="password">New Password</label>
								<input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="New Password" >
								@error('password')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="password_confirmation">Confirm Password</label>
								<input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" >
							</div>
						</div>
					</div>

					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</x-app-layout>