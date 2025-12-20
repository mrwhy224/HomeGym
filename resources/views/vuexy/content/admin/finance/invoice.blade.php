@extends('layouts/layoutMaster')

@section('title', 'Course Invoices & Enrollments')

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
            <span class="text-heading small mb-1 d-block">Total Revenue</span>
            <div class="d-flex align-items-center">
              <h4 class="mb-0 me-2">$84,120</h4>
            </div>
            <p class="mb-0 small text-success">From course sales</p>
          </div>
          <div class="avatar bg-label-primary rounded p-2">
            <i class="ti tabler-report-money icon-26px"></i>
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
            <span class="text-heading small mb-1 d-block">Enrollments</span>
            <div class="d-flex align-items-center">
              <h4 class="mb-0 me-2">2,410</h4>
            </div>
            <p class="mb-0 small text-muted">Active students</p>
          </div>
          <div class="avatar bg-label-info rounded p-2">
            <i class="ti tabler-users-group icon-26px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card border-bottom border-danger border-3">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading small mb-1 d-block">Failed Payments</span>
            <div class="d-flex align-items-center">
              <h4 class="mb-0 me-2">18</h4>
            </div>
            <p class="mb-0 small text-danger">Requires follow-up</p>
          </div>
          <div class="avatar bg-label-danger rounded p-2">
            <i class="ti tabler-credit-card-off icon-26px"></i>
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
            <span class="text-heading small mb-1 d-block">Avg. Course Price</span>
            <div class="d-flex align-items-center">
              <h4 class="mb-0 me-2">$45.50</h4>
            </div>
            <p class="mb-0 small text-muted">Per enrollment</p>
          </div>
          <div class="avatar bg-label-success rounded p-2">
            <i class="ti tabler-tags icon-26px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header border-bottom d-flex flex-column flex-md-row justify-content-between align-items-md-center">
    <h5 class="card-title mb-0">Enrollment Invoices</h5>
    <div class="d-flex align-items-center gap-3 mt-4 mt-md-0">
      <button class="btn btn-label-secondary btn-sm"><i class="ti tabler-file-export me-1"></i> Export</button>
      <div class="input-group input-group-merge w-px-250">
        <span class="input-group-text"><i class="ti tabler-search"></i></span>
        <input type="text" class="form-control" placeholder="Search Invoice / Course" />
      </div>
    </div>
  </div>
  
  <div class="card-datatable table-responsive">
    <table class="table border-top">
      <thead>
        <tr>
          <th>Invoice</th>
          <th>Customer</th>
          <th>Course Title</th>
          <th>Coach</th>
          <th>Total</th>
          <th>Status</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="javascript:void(0);" class="fw-bold">#INV-99042</a></td>
          <td>
            <div class="d-flex flex-column">
              <span class="fw-medium text-heading">Robert Pattinson</span>
              <small class="text-muted">rob.p@example.com</small>
            </div>
          </td>
          <td>
            <div class="d-flex align-items-center">
              <span class="text-truncate" style="max-width: 180px;">Advanced Bodyweight Mastery</span>
              <span class="badge badge-dot bg-primary ms-2"></span>
            </div>
          </td>
          <td><small class="fw-medium">John Doe</small></td>
          <td><span class="fw-bold text-heading">$49.00</span></td>
          <td><span class="badge bg-label-success">Paid</span></td>
          <td class="text-center">
            <div class="dropdown">
              <button class="btn btn-sm btn-icon btn-text-secondary dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti tabler-dots-vertical"></i></button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#"><i class="ti tabler-eye me-2"></i> View Details</a>
                <a class="dropdown-item" href="#"><i class="ti tabler-download me-2"></i> Download PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="#"><i class="ti tabler-arrow-back-up me-2"></i> Refund</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td><a href="javascript:void(0);" class="fw-bold">#INV-99045</a></td>
          <td>
            <div class="d-flex flex-column">
              <span class="fw-medium text-heading">Emma Watson</span>
              <small class="text-muted">emma@example.com</small>
            </div>
          </td>
          <td>
            <span class="text-truncate" style="max-width: 180px;">Yoga for Flexibility</span>
          </td>
          <td><small class="fw-medium">Sarah Jenkins</small></td>
          <td><span class="fw-bold text-heading">$35.00</span></td>
          <td><span class="badge bg-label-warning">Refunded</span></td>
          <td class="text-center">
             <button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-dots-vertical"></i></button>
          </td>
        </tr>

        <tr>
          <td><a href="javascript:void(0);" class="fw-bold">#INV-99050</a></td>
          <td>
            <div class="d-flex flex-column">
              <span class="fw-medium text-heading">Chris Evans</span>
              <small class="text-muted">cap@avengers.com</small>
            </div>
          </td>
          <td>
            <span class="text-truncate" style="max-width: 180px;">Strength Training 101</span>
          </td>
          <td><small class="fw-medium">Mike Adams</small></td>
          <td><span class="fw-bold text-heading">$120.00</span></td>
          <td><span class="badge bg-label-danger">Failed</span></td>
          <td class="text-center">
             <button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-dots-vertical"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection