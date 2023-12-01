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
			<h2 class="h4">Users</h2>
		</div>
		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="{{ route('users.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
				<i class="icon icon-xs me-2 bi bi-plus-lg"></i>
				Add User
			</a>
		</div>
	</div>
  
	<div class="table-settings mb-4">
		<div class="row align-items-center justify-content-between">
			<div class="col col-md-6 col-lg-3 col-xl-4">
				<form action="{{ route('users.index') }}" method="GET">
					<div class="input-group me-2 me-lg-3 fmxw-400">
						<input type="text" name="search" value="{{ $searchVal }}" class="form-control" placeholder="Search name">
						<span class="input-group-text">
							<button type="submit" class="btn btn-xs">
								<i class="icon fs-6 bi bi-search"></i>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="card card-body border-0 shadow table-wrapper table-responsive mb-5">
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="border-gray-200">Name</th>
					<th class="border-gray-200">Email</th>
					<th class="border-gray-200">Date Added</th>
					<th class="border-gray-200">Date Updated</th>
					<th class="border-gray-200">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($users as $user)
					<tr>
						<td valign="middle">
							<span class="fw-normal">{{ $user->name }}</span>
						</td>
						<td valign="middle"><span class="fw-normal">{{ $user->email }}</span></td>
						<td valign="middle"><span class="fw-normal">{{ $user->created_at }}</span></td>
						<td valign="middle"><span class="fw-normal">{{ $user->updated_at }}</span></td>
						<td valign="middle">
							<a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-pill btn-outline-tertiary">Show</a>
						</td>
					</tr>
				@empty
					<tr class="text-center">
						<td colspan="5">No data.</td>
					</tr>
				@endforelse

			</tbody>
		</table>

		<div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">

			{{-- pagination --}}
			{{ $users->links('vendor.pagination.bootstrap-5') }}

		</div>

	</div>
</x-app-layout>