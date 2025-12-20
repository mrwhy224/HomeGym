@extends('layouts/layoutMaster')

@section('title', 'Roles & Permissions')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/animate-css/animate.scss'
])
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-6">
    <div class="card text-center p-6">
      <div class="card-body">
        <div class="mb-6">
          <div class="avatar avatar-xl mx-auto bg-label-secondary rounded-circle" style="width: 120px; height: 120px;">
            <i class="icon-base ti tabler-lock-access icon-64px mt-4" style="font-size: 5.5rem;block-size: 5.5rem;inline-size: 5.5rem;"></i>
          </div>
        </div>

        <h3 class="mb-2">Roles & Permissions System</h3>
        <p class="text-muted mb-6">
          We are currently building a robust access control system to help you manage user roles and granular permissions securely.
        </p>

        <div class="d-flex justify-content-center align-items-center mb-6">
          <span class="badge bg-label-warning flex-row align-items-center">
            <i class="ti tabler-settings-automation me-1"></i>
            Under Development
          </span>
        </div>

        <hr class="my-6">

        <div class="text-start bg-lighter p-4 rounded mb-6">
          <h6 class="mb-2"><i class="ti tabler-info-circle me-2"></i>What's coming?</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-1"><i class="ti tabler-check text-success me-2"></i>Custom Role Creation (Admin, Coach, Customer)</li>
            <li class="mb-1"><i class="ti tabler-check text-success me-2"></i>Granular Permission Mapping</li>
            <li><i class="ti tabler-check text-success me-2"></i>API Key Scoping for Integrations</li>
          </ul>
        </div>

        <a href="{{ url('/') }}" class="btn btn-primary">
          <i class="ti tabler-arrow-left me-1"></i>
          Back to Dashboard
        </a>
      </div>
    </div>
  </div>
</div>
@endsection