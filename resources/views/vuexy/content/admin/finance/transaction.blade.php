@extends('layouts/layoutMaster')

@section('title', 'Global Transaction History')

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
  <div class="col-md-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">Total Volume</span>
            <h4 class="mb-0">$128,430</h4>
          </div>
          <div class="avatar bg-label-primary rounded p-2">
            <i class="ti tabler-chart-bar-popular icon-22px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card h-100 border-bottom border-success border-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">Successful</span>
            <h4 class="mb-0">$115,200</h4>
          </div>
          <div class="avatar bg-label-success rounded p-2">
            <i class="ti tabler-circle-check icon-22px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card h-100 border-bottom border-danger border-3">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">Refunds</span>
            <h4 class="mb-0">$3,150</h4>
          </div>
          <div class="avatar bg-label-danger rounded p-2">
            <i class="ti tabler-refresh-dot icon-22px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">Platform Fees</span>
            <h4 class="mb-0">$12,480</h4>
          </div>
          <div class="avatar bg-label-info rounded p-2">
            <i class="ti tabler-building-bank icon-22px"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header border-bottom d-flex justify-content-between align-items-center">
    <h5 class="card-title mb-0">Transaction Logs</h5>
    <div class="d-flex gap-3">
        <select class="form-select form-select-sm w-auto">
            <option>All Types</option>
            <option>Course Purchase</option>
            <option>Salary Payout</option>
            <option>Wallet Top-up</option>
        </select>
        <button class="btn btn-label-secondary btn-sm"><i class="ti tabler-filter me-1"></i> Filters</button>
    </div>
  </div>
  
  <div class="card-datatable table-responsive">
    <table class="datatables-transactions table border-top">
      <thead>
        <tr>
          <th>Reference ID</th>
          <th>User / Entity</th>
          <th>Transaction Type</th>
          <th>Method</th>
          <th>Amount</th>
          <th>Date</th>
          <th>Status</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span class="fw-medium text-heading">#TRX-55102</span></td>
          <td>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xs me-2"><img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle"></div>
              <span class="small">Alice Freeman</span>
            </div>
          </td>
          <td><span class="badge bg-label-info">Course Purchase</span></td>
          <td>
            <div class="d-flex align-items-center gap-1">
              <i class="ti tabler-brand-paypal text-primary icon-18px"></i>
              <span class="small">PayPal</span>
            </div>
          </td>
          <td><span class="text-success fw-bold">+$120.00</span></td>
          <td><small>Dec 19, 2025 14:20</small></td>
          <td><span class="badge bg-label-success">Completed</span></td>
          <td class="text-center"><button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-dots-vertical"></i></button></td>
        </tr>

        <tr>
          <td><span class="fw-medium text-heading">#TRX-55105</span></td>
          <td>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xs me-2"><span class="avatar-initial rounded-circle bg-label-warning small">JD</span></div>
              <span class="small">Coach John Doe</span>
            </div>
          </td>
          <td><span class="badge bg-label-warning">Salary Payout</span></td>
          <td>
            <div class="d-flex align-items-center gap-1">
              <i class="ti tabler-building-bank text-secondary icon-18px"></i>
              <span class="small">Bank Transfer</span>
            </div>
          </td>
          <td><span class="text-danger fw-bold">-$3,450.00</span></td>
          <td><small>Dec 19, 2025 11:05</small></td>
          <td><span class="badge bg-label-primary">Processing</span></td>
          <td class="text-center"><button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-dots-vertical"></i></button></td>
        </tr>

        <tr>
          <td><span class="fw-medium text-heading">#TRX-55109</span></td>
          <td>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xs me-2"><img src="{{ asset('assets/img/avatars/4.png') }}" class="rounded-circle"></div>
              <span class="small">Sarah Jenkins</span>
            </div>
          </td>
          <td><span class="badge bg-label-success">Wallet Top-up</span></td>
          <td>
            <div class="d-flex align-items-center gap-1">
              <i class="ti tabler-credit-card text-info icon-18px"></i>
              <span class="small">Visa Card</span>
            </div>
          </td>
          <td><span class="text-success fw-bold">+$500.00</span></td>
          <td><small>Dec 18, 2025 09:12</small></td>
          <td><span class="badge bg-label-success">Completed</span></td>
          <td class="text-center"><button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-dots-vertical"></i></button></td>
        </tr>

        <tr>
          <td><span class="fw-medium text-heading">#TRX-55112</span></td>
          <td>
            <div class="d-flex align-items-center">
              <span class="small text-muted">System Wallet</span>
            </div>
          </td>
          <td><span class="badge bg-label-danger">Refund Issued</span></td>
          <td>
            <div class="d-flex align-items-center gap-1">
              <i class="ti tabler-wallet text-dark icon-18px"></i>
              <span class="small">System Wallet</span>
            </div>
          </td>
          <td><span class="text-danger fw-bold">-$45.00</span></td>
          <td><small>Dec 18, 2025 18:45</small></td>
          <td><span class="badge bg-label-success">Completed</span></td>
          <td class="text-center"><button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-dots-vertical"></i></button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection