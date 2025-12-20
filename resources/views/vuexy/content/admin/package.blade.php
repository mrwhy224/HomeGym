@extends('layouts/layoutMaster')

@section('title', 'Package Management')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss',
  'resources/assets/vendor/libs/notyf/notyf.scss',
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/notyf/notyf.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js',
])
@endsection

@section('page-script')
@vite([ 'resources/assets/js/admin/app-package-list.js'])
@endsection

@section('content')

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title mb-3">Packages</h5>
    <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
      <div class="col-md-4 package_type"></div>
      <div class="col-md-4 package_status"></div>
    </div>
  </div>
  <div class="card-datatable table-responsive">
    <table class="datatables-packages table">
      <thead class="border-top">
        <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Details</th> <th>Price</th>
          <th>Validity</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddPackage" aria-labelledby="offcanvasAddPackageLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasAddPackageLabel" class="offcanvas-title">Add Package</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mx-0 flex-grow-0">
    <form class="add-new-package pt-0" id="addNewPackageForm" onsubmit="return false">
      <input type="hidden" id="package_id" name="id">
		@foreach($activeLocales as $locale)
      <div class="mb-3">
        <label class="form-label" for="add-package-name-{{ $locale->code }}">Package Name ({{ $locale->code }})</label>
		  <input type="text" class="form-control" id="add-package-name-{{ $locale->code }}" name="name[{{ $locale->code }}]" placeholder="e.g. Gold Monthly" aria-label="Package Name ({{ $locale->code }})" >
      </div>
		@endforeach
      <div class="mb-3">
        <label class="form-label" for="add-package-type">Type</label>
        <select id="add-package-type" class="select2 form-select" name="type">
          <option value="">Select Type</option>
          <option value="public">Public</option>
          <option value="semi_private">Semi Private</option>
          <option value="private">Private</option>
        </select>
      </div>

      <div class="row mb-3">
          <div class="col-6">
            <label class="form-label" for="add-package-sessions">Total Sessions</label>
            <input type="number" id="add-package-sessions" class="form-control" placeholder="12" name="total_sessions" />
          </div>
          <div class="col-6">
            <label class="form-label" for="add-package-capacity">Capacity</label>
            <input type="number" id="add-package-capacity" class="form-control" placeholder="8" name="capacity" />
          </div>
      </div>

      <div class="mb-3">
        <label class="form-label" for="add-package-price">Price</label>
        <input type="number" id="add-package-price" class="form-control" placeholder="1000" name="price" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="add-package-validity">Validity (Days)</label>
        <input type="number" id="add-package-validity" class="form-control" placeholder="30" name="validity_days" />
      </div>

      <div class="mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="add-package-status" name="is_active" checked>
            <label class="form-check-label" for="add-package-status">Active Status</label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </form>
  </div>
</div>
@endsection
