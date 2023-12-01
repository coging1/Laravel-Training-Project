<x-app-layout>

	{{-- modal
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form action="{{ route('contacts.destroy', $contact) }}" method="POST">

					@csrf
					@method('DELETE')

					<div class="modal-header">
						<h2 class="h6 modal-title">Confirmation</h2>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete this contact?</p>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger">Delete</button>
						<button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  --}}

	{{-- main contact layout --}}
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
		<div class="d-block mb-md-0">
			<h2 class="h4">Update Contact</h2>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-12 col-xl-8">

			{{-- Update Contact --}}
			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">Contact Information</h2>

				<form method="POST" action="{{ route('contacts.update', $contact) }}">

					@csrf
					@method('PUT')

					<div class="row">

						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="first_name">First Name</label>
								<input class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" type="text" value="{{ old('first_name', $contact->first_name) }}" required>
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
								<input class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" type="text" value="{{ old('middle_name', $contact->middle_name) }}" required>
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
								<input class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" type="text" value="{{ old('last_name', $contact->last_name) }}" required>
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
								<input class="form-control @error('barangay') is-invalid @enderror" id="barangay" name="barangay" type="text" value="{{ old('barangay', $contact->barangay) }}" required>
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
								<input class="form-control @error('street') is-invalid @enderror" id="street" name="street" type="text" value="{{ old('street', $contact->street) }}" required>
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
								<input class="form-control @error('email') is-invalid @enderror" id="email_address" name="email_address" type="email" value="{{ old('email_address', $contact->email_address) }}" required>
								@error('email_address')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

            <div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="created_at">Date Added</label>
								<input class="form-control @error('created_at') is-invalid @enderror" id="created_at" name="created_at" type="text" value="{{ old('created_at', $contact->created_at) }}" disabled>
								@error('created_at')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

            <div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="updated_at">Last Updated</label>
								<input class="form-control @error('updated_at') is-invalid @enderror" id="updated_at" name="updated_at" type="text" value="{{ old('updated_at', $contact->updated_at) }}" disabled>
								@error('updated_at')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

					</div>

					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Update</button>
					</div>

				</form>

			</div>

			{{-- Delete User
			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">Delete User</h2>
				
				<div class="row">
					<div class="col-md-3">
						<button class="btn btn-danger mt-2 animate-up-2" type="button" data-bs-toggle="modal" data-bs-target="#modal-delete">Delete</button>
					</div>
				</div>

			</div>
      --}}

		</div>
	</div>
</x-app-layout>