@extends('layouts/layoutMaster')

@section('title', 'Coach Management')

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
{{-- Note: This script handles the AJAX for the datatable --}}
@vite('resources/assets/js/admin/app-user-list.js')
@endsection

@section('content')

<div class="row g-6 mb-6">
  @php
      // Mock stats for visual representation
      $totalCoaches = \App\Models\User::role('coach')->count() ?: 156; 
      $certifiedCoaches = 94; 
      $activeCoaches = 58;
      $newRequests = 12;
  @endphp

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Total Coaches</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($totalCoaches) }}</h4>
            </div>
            <small class="mb-0">All registered coaches</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-primary">
              <i class="icon-base ti tabler-school icon-26px"></i>
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
            <span class="text-heading">Certified Coaches</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($certifiedCoaches) }}</h4>
            </div>
            <small class="mb-0">Verified credentials</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-success">
              <i class="icon-base ti tabler-award icon-26px"></i>
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
            <span class="text-heading">Active Coaches</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($activeCoaches) }}</h4>
            </div>
            <small class="mb-0">Currently hosting sessions</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-info">
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
            <span class="text-heading">New Requests</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($newRequests) }}</h4>
              <p class="text-success mb-0">Monthly</p>
            </div>
            <small class="mb-0">Pending approval</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-warning">
              <i class="icon-base ti tabler-user-plus icon-26px"></i>
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
      <div class="col-md-4 coach_specialty"></div>
      <div class="col-md-4 coach_status"></div>
      <div class="col-md-4"></div> 
    </div>
  </div>
  
  <div class="card-datatable table-responsive">
    <table class="datatables-users table">
      <thead class="border-top">
        <tr>
          <th>Coach</th>
          <th>Specialty</th>
          <th>Joined Date</th>
          <th>Rating</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        {{-- Dummy Row for Preview --}}
        <tr>
          <td>
            <div class="d-flex justify-content-start align-items-center user-name">
              <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-4">
                  <span class="avatar-initial rounded-circle bg-label-primary">JD</span>
                </div>
              </div>
              <div class="d-flex flex-column">
                <a href="#" class="text-heading text-truncate fw-medium">John Doe</a>
                <small class="text-muted">john.doe@example.com</small>
              </div>
            </div>
          </td>
          <td>Bodybuilding / Fitness</td>
          <td>2024/05/10</td>
          <td><span class="badge bg-label-warning">★ 4.9</span></td>
          <td>
            <div class="d-flex align-items-center">
              <a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill"><i class="ti tabler-edit"></i></a>
              <a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill"><i class="ti tabler-trash"></i></a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection