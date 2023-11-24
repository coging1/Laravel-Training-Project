{{-- sidebar toggle --}}
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
	<a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
		<img class="navbar-brand-dark" src="{{ asset('img/brand/light.svg') }}" alt="Volt logo" />
		<img class="navbar-brand-light" src="{{ asset('img/brand/dark.svg') }}" alt="Volt logo" />
	</a>
	<div class="d-flex align-items-center">
		<button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
</nav>

{{-- sidebar --}}
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
	<div class="sidebar-inner px-4 pt-3">
		<div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
			<div class="d-flex align-items-center">
				<div class="avatar-lg me-4">
					<img src="{{ asset('img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white"
						alt="Bonnie Green">
				</div>
				<div class="d-block">
					<h2 class="h5 mb-3">Hi, Jane</h2>
					{{-- Authentication --}}
					<form method="POST" action="{{ route('logout') }}">
						@csrf
						<a class="btn btn-secondary btn-sm d-inline-flex align-items-center" href="route('logout')" onclick="event.preventDefault();
							this.closest('form').submit();">
							<i class="icon icon-xxs me-1 bi bi-box-arrow-right"></i>
							Logout
						</a>
					</form>
				</div>
			</div>
			<div class="collapse-close d-md-none">
				<a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
					aria-expanded="true" aria-label="Toggle navigation">
					<i class="icon fs-1 icon-md bi bi-x"></i>
				</a>
			</div>
		</div>
		<ul class="nav flex-column pt-3 pt-md-0">
			<li class="nav-item">
				<a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
					<span class="sidebar-icon">
						<img src="{{ asset('img/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
					</span>
					<span class="mt-1 ms-1 sidebar-text">CMS</span>
				</a>
			</li>
			<li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
				<a href="{{ route('dashboard') }}" class="nav-link">
					<span class="sidebar-icon">
						<i class="icon icon-xs me-2 bi bi-speedometer"></i>
					</span>
					<span class="sidebar-text">Dashboard</span>
				</a>
			</li>
			<li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
				<a href="{{ route('users.index') }}" class="nav-link">
					<span class="sidebar-icon">
						<i class="icon icon-xs me-2  bi bi-person-bounding-box"></i>
					</span>
					<span class="sidebar-text">Users Management</span>
				</a>
			</li>
			<li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
			<li class="nav-item">
				<a href="{{ url('/') }}" class="nav-link d-flex align-items-center">
					<span class="sidebar-icon">
						<i class="icon icon-xs me-2 bi bi-house"></i>
					</span>
					<span class="sidebar-text">Homepage</span>
				</a>
			</li>
			<li class="nav-item">
				<a target="_blank" href="#"
					class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
					<span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
						<i class="icon icon-xs me-2 bi bi-globe"></i>
					</span>
					<span>Laravel Training</span>
				</a>
			</li>
		</ul>
	</div>
</nav>