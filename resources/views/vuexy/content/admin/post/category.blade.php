@extends('layouts/layoutMaster')

@section('title', 'Post Categories')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

@section('content')
<div class="row g-6">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Add New Category</h5>
      </div>
      <div class="card-body pt-6">
        <form id="addCategoryForm" onsubmit="return false">
          <div class="mb-4">
            <label class="form-label" for="category-name">Name</label>
            <input type="text" class="form-control" id="category-name" placeholder="e.g. Health & Fitness" name="categoryName" required />
          </div>
          <div class="mb-4">
            <label class="form-label" for="category-slug">Slug</label>
            <input type="text" class="form-control" id="category-slug" placeholder="health-fitness" name="categorySlug" />
          </div>
          <div class="mb-4">
            <label class="form-label" for="parent-category">Parent Category</label>
            <select id="parent-category" class="select2 form-select" data-placeholder="Select Parent">
              <option value="">None</option>
              <option value="1">Training</option>
              <option value="2">Nutrition</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="form-label" for="category-description">Description</label>
            <textarea class="form-control" id="category-description" rows="3" placeholder="Brief description..."></textarea>
          </div>
          <div class="d-flex flex-column gap-2">
            <button type="submit" class="btn btn-primary">Create Category</button>
            <button type="reset" class="btn btn-label-secondary">Discard</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="datatables-category-list table border-top">
          <thead>
            <tr>
              <th>Category</th>
              <th>Slug</th>
              <th class="text-nowrap">Post Count</th>
              <th>Status</th>
              <th class="text-lg-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar-wrapper me-3">
                    <div class="avatar avatar-sm"><span class="avatar-initial rounded bg-label-success"><i class="ti tabler-stretching"></i></span></div>
                  </div>
                  <span class="fw-medium text-heading">Yoga & Zen</span>
                </div>
              </td>
              <td><code>yoga-zen</code></td>
              <td>24</td>
              <td><span class="badge bg-label-primary">Active</span></td>
              <td class="text-lg-center">
                <div class="d-flex align-items-center justify-content-lg-center gap-1">
                  <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-edit"></i></button>
                  <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-danger"><i class="ti tabler-trash"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('page-script')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Initialize Select2
    const select2 = $('.select2');
    if (select2.length) {
      select2.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>').select2({
          dropdownParent: $this.parent()
        });
      });
    }
  });
</script>
@endsection