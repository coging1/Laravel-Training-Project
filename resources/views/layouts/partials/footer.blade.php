<div class="theme-settings card pt-2 collapse" id="theme-settings" style="background-color:#fcb814;">

	<div class="card-body  text-white pt-4">
		<button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse" href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
		<p class="fs-7 text-white text-center">
			© 2019-<span class="current-year"></span>
			<a class="fw-normal" href="#" target="_blank">{{ config('app.name') }}</a>
		</p>
		<div class="d-flex justify-content-center">
			<p class="mb-0 text-center">Version 1.0.0</p>
		</div>
	</div>
</div>

{{-- footer card setting --}}
<div class="card theme-settings theme-settings-expand" id="theme-settings-expand" style="background-color:#fcb814;">
	<div class="card-body text-white rounded-top p-3 py-2">
		<span class="fw-bold d-inline-flex align-items-center h6">
			<i class="icon icon-xs me-2 bi bi-gear-fill"></i>
			{{ config('app.name') }}
		</span>
	</div>
</div>