@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product Category - Apps')

@section('vendor-style')
  @vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/quill/typography.scss', 'resources/assets/vendor/libs/quill/katex.scss',
  'resources/assets/vendor/libs/quill/editor.scss'])
@endsection

@section('page-style')
  @vite('resources/assets/vendor/scss/pages/app-ecommerce.scss')
@endsection

@section('vendor-script')
  @vite(['resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js', 'resources/assets/vendor/libs/quill/katex.js',
  'resources/assets/vendor/libs/quill/quill.js'])
@endsection

@section('page-script')
  @vite('resources/assets/js/post-category-list.js')
@endsection

@section('content')
  <div class="app-ecommerce-category">
    <!-- Category List Table -->
    <div class="card">
      <div class="card-datatable">
        <table class="datatables-category-list table">
          <thead>
          <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th class="text-nowrap text-sm-end">Total Post &nbsp;</th>
            <th class="text-lg-center">Actions</th>
          </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- Offcanvas to add new customer -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList"
         aria-labelledby="offcanvasEcommerceCategoryListLabel">
      <!-- Offcanvas Header -->
      <div class="offcanvas-header py-6">
        <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Category</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- Offcanvas Body -->
      <div class="offcanvas-body border-top">
        <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true">
          <!-- Title -->
          <div class="mb-6 form-control-validation">
            <label class="form-label" for="ecommerce-category-title">Title</label>
            <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter category title"
                   name="categoryTitle" aria-label="category title" />
          </div>
          <!-- Slug -->
          <div class="mb-6 form-control-validation">
            <label class="form-label" for="ecommerce-category-slug">Slug</label>
            <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug"
                   aria-label="slug" name="slug" />
          </div>

          <!-- Submit and reset -->
          <div class="mb-6">
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
            <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Discard</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
