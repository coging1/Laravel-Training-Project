<x-app-layout>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
		<div class="d-block mb-md-0">
			<h2 class="h4">Add Category</h2>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-12 col-xl-8">

			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">Category information</h2>

				<form method="POST" action="{{ route('categories.store') }}">
					@csrf

					<div class="row">

						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="category_name">Category Name</label>
								<input class="form-control @error('category_name') is-invalid @enderror" id="category_name" name="category_name" type="text" placeholder="Category Name" value="{{ old('category_name') }}" required>
								@error('category_name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>

					  <div class="col-md-6 mb-3">
							<div class="form-group">
								<label for="description">Description</label>
								<input class="form-control @error('description') is-invalid @enderror" id="description" name="description" type="text" placeholder="Description" value="{{ old('description') }}" required>
								@error('description')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
						</div>
						
						
					</div>

					<div class="mt-3">
						<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save Category</button>
					</div>

				</form>

			</div>

		</div>
	</div>
</x-app-layout>