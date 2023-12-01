<x-app-layout>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
		<div class="d-block mb-md-0">
			<h2 class="h4">Add Contact</h2>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-12 col-xl-8">

			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">Contact information</h2>

				<form method="POST" action="{{ route('contacts.store') }}">
					@csrf

					<div class="row">

						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="first_name">First Name</label>
								<input class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" type="text" placeholder="First Name" value="{{ old('first_name') }}" required>
								@error('first_name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

					  <div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="middle_name">Middle Name</label>
								<input class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" type="text" placeholder="Middle Name" value="{{ old('middle_name') }}" required>
								@error('middle_name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>
						
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" type="text" placeholder="Last Name" value="{{ old('last_name') }}" required>
								@error('last_name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

            <div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="barangay">Barangay</label>
								<input class="form-control @error('barangay') is-invalid @enderror" id="barangay" name="barangay" type="text" placeholder="Barangay" value="{{ old('barangay') }}" required>
								@error('barangay')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

            <div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="street">Street</label>
								<input class="form-control @error('street') is-invalid @enderror" id="street" name="street" type="text" placeholder="Street" value="{{ old('street') }}" required>
								@error('street')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="email_address">Email Address</label>
								<input class="form-control @error('email_address') is-invalid @enderror" id="email_address" name="email_address" type="email" placeholder="Email Address" value="{{ old('email_address') }}" required>
								@error('email_address')
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

		</div>
	</div>
</x-app-layout>