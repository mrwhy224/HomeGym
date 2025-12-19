@extends('layouts/layoutMaster')

@section('title', 'Post List')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js'
])
@endsection

@section('content')
<div class="row g-6 mb-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Total Posts</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">1,245</h4>
              <p class="text-success mb-0 small">(+12%)</p>
            </div>
            <small class="mb-0">Total blog articles</small>
          </div>
          <div class="avatar bg-label-primary p-2 rounded">
            <i class="ti tabler-news icon-26px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Published</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">1,180</h4>
            </div>
            <small class="mb-0">Live on website</small>
          </div>
          <div class="avatar bg-label-success p-2 rounded">
            <i class="ti tabler-circle-check icon-26px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Pending</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">42</h4>
            </div>
            <small class="mb-0">Awaiting review</small>
          </div>
          <div class="avatar bg-label-warning p-2 rounded">
            <i class="ti tabler-clock-pause icon-26px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Total Views</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">84.2k</h4>
            </div>
            <small class="mb-0">Lifetime engagement</small>
          </div>
          <div class="avatar bg-label-info p-2 rounded">
            <i class="ti tabler-eye icon-26px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header border-bottom">
    <div class="d-flex justify-content-between align-items-center row g-6">
      <div class="col-md-4 post_category">
         <h5 class="card-title mb-4">Post Management</h5>
      </div>
      <div class="col-md-8 text-end">
        <div class="d-flex justify-content-end gap-3">
          <button class="btn btn-label-secondary border"><i class="ti tabler-upload me-1"></i> Export</button>
          <a href="{{route('admin.post.create')}}" class="btn btn-primary"><i class="ti tabler-plus me-1"></i> Create New Post</a>
        </div>
      </div>
    </div>
    
    <div class="row mt-2 g-4">
        <div class="col-md-3">
            <select class="select2 form-select" data-placeholder="Filter by Category">
                <option value="">All Categories</option>
                <option value="fitness">Fitness & Gym</option>
                <option value="nutrition">Nutrition</option>
                <option value="mindset">Mindset</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="select2 form-select" data-placeholder="Filter by Status">
                <option value="">All Statuses</option>
                <option value="published">Published</option>
                <option value="draft">Draft</option>
                <option value="scheduled">Scheduled</option>
            </select>
        </div>
    </div>
  </div>

  <div class="card-datatable table-responsive">
    <table class="datatables-posts table border-top">
      <thead>
        <tr>
          <th>Post Title</th>
          <th>Category</th>
          <th>Author</th>
          <th>Published Date</th>
          <th>Engagement</th>
          <th>Status</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="d-flex align-items-center">
              <div class="me-3">
                <img src="{{ asset('assets/img/elements/1.jpg') }}" alt="Post Thumbnail" class="rounded" width="50" height="34" style="object-fit: cover;">
              </div>
              <div class="d-flex flex-column">
                <span class="text-heading fw-medium text-truncate" style="max-width: 250px;">10 Best Morning Workouts for Energy</span>
                <small class="text-muted">Slug: morning-workouts-energy</small>
              </div>
            </div>
          </td>
          <td><span class="badge bg-label-info">Fitness</span></td>
          <td>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xs me-2"><span class="avatar-initial rounded-circle bg-label-primary">JD</span></div>
              <small>John Doe</small>
            </div>
          </td>
          <td>Dec 20, 2025</td>
          <td>
            <div class="d-flex align-items-center gap-2">
                <small><i class="ti tabler-eye text-muted icon-14px"></i> 1.2k</small>
                <small><i class="ti tabler-message text-muted icon-14px"></i> 14</small>
            </div>
          </td>
          <td><span class="badge bg-label-success">Published</span></td>
          <td class="text-center">
            <div class="d-flex align-items-center justify-content-center">
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-edit"></i></button>
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-external-link"></i></button>
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-danger"><i class="ti tabler-trash"></i></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex align-items-center">
              <div class="me-3">
                <img src="{{ asset('assets/img/elements/2.jpg') }}" alt="Post Thumbnail" class="rounded" width="50" height="34" style="object-fit: cover;">
              </div>
              <div class="d-flex flex-column">
                <span class="text-heading fw-medium text-truncate" style="max-width: 250px;">Nutrition Myths: What's Actually Healthy?</span>
                <small class="text-muted">Slug: nutrition-myths-healthy</small>
              </div>
            </div>
          </td>
          <td><span class="badge bg-label-warning">Nutrition</span></td>
          <td>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xs me-2"><img src="{{ asset('assets/img/avatars/4.png') }}" class="rounded-circle"></div>
              <small>Sarah J.</small>
            </div>
          </td>
          <td>Dec 18, 2025</td>
          <td>
            <div class="d-flex align-items-center gap-2">
                <small><i class="ti tabler-eye text-muted icon-14px"></i> 850</small>
                <small><i class="ti tabler-message text-muted icon-14px"></i> 5</small>
            </div>
          </td>
          <td><span class="badge bg-label-secondary">Draft</span></td>
          <td class="text-center">
            <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-dots-vertical"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection

@section('page-script')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Initialize Select2 for filters
    $(".select2").select2();
  });
</script>
@endsection