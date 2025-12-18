@php
$configData = Helper::appClasses();
// Assume $plans is passed from the controller, loaded with customerProfiles and customer_profiles_count
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Loyalty Plans - Management')

@section('vendor-style')
@vite([
    'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
    'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
    'resources/assets/vendor/libs/@form-validation/form-validation.scss',
    'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('vendor-script')
@vite([
    'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/popular.js',
    'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/auto-focus.js',
    'resources/assets/vendor/libs/select2/select2.js'
])
@endsection

@section('page-script')
@vite(['resources/assets/js/admin/app-loyalty-plans.js'])
@endsection

@section('content')
<h4 class="mb-1">Loyalty Plans List</h4>

<p class="mb-6">
  Define loyalty tiers based on customer activity and reward them with <br />
  varying class pricing and discount structures.
</p>
<div class="row g-6">
  {{-- Iterate through Plans data passed from the Controller --}}
  @foreach($plans as $plan)
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          {{-- Total Customers in this Plan --}}
          <h6 class="fw-normal mb-0 text-body">Total {{ $plan->customerProfiles->count() }} customers</h6>

          <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
            {{-- Display avatars of the first few members --}}
            @foreach($plan->customerProfiles->take(4) as $profile)
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="{{ $profile->user->name }}" class="avatar pull-up">
				<x-user-avatar :user="$profile->user" />
            </li>
            @endforeach
            {{-- Display count of remaining members --}}
            @if ($plan->customer_profiles_count > 4)
            <li class="avatar">
              <span class="avatar-initial rounded-circle pull-up" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $plan->customer_profiles_count - 4 }} more">+{{ $plan->customer_profiles_count - 4 }}</span>
            </li>
            @endif
          </ul>
        </div>

        <div class="d-flex justify-content-between align-items-end">
          <div class="role-heading">
            <h5 class="mb-1">{{ $plan->name }}{!! $plan->is_default?' <span class="text-truncate small">(Default plan)</span>':''  !!}</h5>
            <p class="mb-1 fw-bold text-success">
              {{ $plan->discount_type === 'percentage' ? $plan->discount_value . '% Discount' : number_format($plan->discount_value).$baseCurrency->symbol.' Fixed' }}
            </p>
            {{-- Edit Plan Modal Trigger --}}
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#managePlanModal" data-plan-id="{{ $plan->id }}" class="role-edit-modal"><span>Edit Plan</span></a>
          </div>
          <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#assignUserModal" data-plan-id="{{ $plan->id }}" class="btn btn-icon btn-label-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign Users">
            <i class="icon-base ti tabler-user-plus icon-md"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  {{-- Card to Add New Plan --}}
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card h-100">
      <div class="row h-100">
        <div class="col-sm-5">
          <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-4">
            <img src="{{ asset('assets/img/illustrations/add-new-roles.png') }}" class="img-fluid" alt="Image" width="83" />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <button data-bs-target="#managePlanModal" data-bs-toggle="modal" class="btn btn-sm btn-primary mb-4 text-nowrap add-new-role">Add New Plan</button>
            <p class="mb-0">
              Define a new loyalty <br />
              tier with specific benefits.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr class="mt-6 mb-6" />

  <div class="col-12">
    <h4 class="mb-1">Customers List and Active Plans</h4>
    <p class="mb-4">View and manually change the loyalty plan for any standard customer.</p>
  </div>
  <div class="col-12">
    <!-- Role Table -->
    <div class="card">
      <div class="card-datatable">
        <table class="datatables-users table border-top">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Customer</th>
              <th>Active Plan</th>
              <th>Joined Date</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
@include('_partials._modals.modal-manage-plan')
@include('_partials._modals.modal-assign-user')

@endsection

@push('scripts')
<script>
  // Script to initialize Select2 when a modal opens (required when modals are injected/loaded)
  $(document).on('shown.bs.modal', function(e) {
    $('.select2').each(function() {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>').select2({
        dropdownParent: $this.parent()
      });
    });

    // Logic to update discount unit span based on selected type
    $('#discountType').on('change', function() {
      const unit = $(this).val() === 'percentage' ? 'Percent' : 'Toman';
      $('#discountUnit').text(unit);
    }).trigger('change'); // Trigger on load for initial state
  });
</script>
@endpush
