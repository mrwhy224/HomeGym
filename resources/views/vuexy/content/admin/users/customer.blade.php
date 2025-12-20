@extends('layouts/layoutMaster')

@section('title', 'Customer Management')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'
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
  'resources/assets/vendor/libs/cleave-zen/cleave-zen.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/admin/app-user-list.js')
@endsection

@section('content')

<div class="row g-6 mb-6">
  @php
      // دریافت آمار ساده برای نمایش در کارت‌ها
      $totalUsers = \App\Models\User::role('customer')->count();
      // فرض: کاربرانی که پلن غیررایگان دارند
      $paidUsers = 0;
      // فرض: کاربران فعال (is_active در جدول user_packages یا هر منطق دیگر)
      $activeUsers = 0; // فعلاً همان کل
      // فرض: کاربران جدید در این ماه
      $newUsers = 0;
  @endphp

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Total Customers</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($totalUsers) }}</h4>
              {{-- <p class="text-success mb-0">(+29%)</p> --}}
            </div>
            <small class="mb-0">All registered customers</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-primary">
              <i class="icon-base ti tabler-users icon-26px"></i>
            </span>
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
            <span class="text-heading">Paid Users</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($paidUsers) }}</h4>
            </div>
            <small class="mb-0">Premium plan holders</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-danger">
              <i class="icon-base ti tabler-user-plus icon-26px"></i>
            </span>
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
            <span class="text-heading">Active Users</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($activeUsers) }}</h4>
            </div>
            <small class="mb-0">Active accounts</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-success">
              <i class="icon-base ti tabler-user-check icon-26px"></i>
            </span>
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
            <span class="text-heading">New Users</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($newUsers) }}</h4>
              <p class="text-success mb-0">This Month</p>
            </div>
            <small class="mb-0">Fresh registrations</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-warning">
              <i class="icon-base ti tabler-user-search icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title mb-0">Search & Filter</h5>
    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
      <div class="col-md-4 user_plan"></div> <div class="col-md-4 user_status"></div> <div class="col-md-4"></div> </div>
  </div>
  
  <div class="card-datatable table-responsive">
    <table class="datatables-users table">
      <thead class="border-top">
        <tr>
          <th>User</th>
          <th>Wallet Balance</th>
          <th>Joined Date</th>
          <th>Country</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection