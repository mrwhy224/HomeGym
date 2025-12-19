@extends('layouts/layoutMaster')

@section('title', 'Coach Settlements & Invoices')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'
])
@endsection

@section('content')
<div class="row g-6 mb-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Total Payouts</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">$42,500</h4>
              <p class="text-success mb-0 small">(+15%)</p>
            </div>
            <small class="mb-0">Total distributed to coaches</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-primary">
              <i class="ti tabler-currency-dollar icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Pending Approval</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">$8,120</h4>
            </div>
            <small class="mb-0">Awaiting finance confirmation</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-warning">
              <i class="ti tabler-clock-pause icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Platform Earnings</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">$12,400</h4>
            </div>
            <small class="mb-0">Total system commissions</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-success">
              <i class="ti tabler-chart-pie icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Overdue Payments</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">3</h4>
            </div>
            <small class="mb-0">Coaches past payout date</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-danger">
              <i class="ti tabler-alert-triangle icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header border-bottom d-flex justify-content-between align-items-center">
    <h5 class="card-title mb-0">Settlement Invoices</h5>
    <div class="d-flex gap-2">
        <button class="btn btn-label-primary btn-sm"><i class="ti tabler-download me-1"></i> Export CSV</button>
        <button class="btn btn-primary btn-sm"><i class="ti tabler-plus me-1"></i> Create Manual Adjustment</button>
    </div>
  </div>
  
  <div class="card-datatable table-responsive">
    <table class="datatables-invoices table">
      <thead class="border-top">
        <tr>
          <th>Coach</th>
          <th>Gross Revenue</th>
          <th>Commission %</th>
          <th>Net Payout</th>
          <th>Payout Date</th>
          <th>Status</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3">
                  <span class="avatar-initial rounded-circle bg-label-info">WA</span>
                </div>
              </div>
              <div class="d-flex flex-column">
                <span class="fw-bold text-heading">William Adams</span>
                <small class="text-muted">ID: #C-9901</small>
              </div>
            </div>
          </td>
          <td><span class="fw-medium text-heading">$5,400.00</span></td>
          <td><span class="badge bg-label-secondary">70%</span></td>
          <td><span class="fw-bold text-primary">$3,780.00</span></td>
          <td>Dec 25, 2025</td>
          <td><span class="badge bg-label-warning" data-bs-toggle="tooltip" title="Scheduled for payment">Pending</span></td>
          <td>
            <div class="d-flex align-items-center justify-content-center">
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill" title="Mark as Paid"><i class="ti tabler-check"></i></button>
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill" title="View Details"><i class="ti tabler-eye"></i></button>
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill" title="Edit commission"><i class="ti tabler-edit"></i></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3">
                  <img src="{{ asset('assets/img/avatars/4.png') }}" class="rounded-circle">
                </div>
              </div>
              <div class="d-flex flex-column">
                <span class="fw-bold text-heading">Sarah Jenkins</span>
                <small class="text-muted">ID: #C-8821</small>
              </div>
            </div>
          </td>
          <td><span class="fw-medium text-heading">$2,100.00</span></td>
          <td><span class="badge bg-label-secondary">60%</span></td>
          <td><span class="fw-bold text-primary">$1,260.00</span></td>
          <td>Dec 19, 2025</td>
          <td><span class="badge bg-label-success">Paid</span></td>
          <td>
            <div class="d-flex align-items-center justify-content-center">
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-printer"></i></button>
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-eye"></i></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3">
                  <span class="avatar-initial rounded-circle bg-label-danger">TR</span>
                </div>
              </div>
              <div class="d-flex flex-column">
                <span class="fw-bold text-heading">Tom Riddle</span>
                <small class="text-muted">ID: #C-1105</small>
              </div>
            </div>
          </td>
          <td><span class="fw-medium text-heading">$12,000.00</span></td>
          <td><span class="badge bg-label-secondary">80%</span></td>
          <td><span class="fw-bold text-primary">$9,600.00</span></td>
          <td>Dec 15, 2025</td>
          <td><span class="badge bg-label-danger" data-bs-toggle="tooltip" title="Needs immediate review">Overdue</span></td>
          <td>
            <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-check"></i></button>
              <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill text-danger"><i class="ti tabler-trash"></i></button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="alert alert-primary d-flex align-items-center mt-6" role="alert">
  <span class="alert-icon text-primary me-2">
    <i class="ti tabler-info-circle ti-xs"></i>
  </span>
  <div class="d-flex flex-column ps-1">
    <h6 class="alert-heading mb-1 small fw-bold">Financial Policy Reminder</h6>
    <span class="small">Gross Revenue is calculated based on total course sales before platform deductions. The commission rate is per coach contract. Settlement occurs automatically on the selected Payout Date unless a dispute is active.</span>
  </div>
</div>
@endsection