@extends('layouts/layoutMaster')

@section('title', 'User Profile Settings')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/animate-css/animate.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'
])
@endsection



@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-6">

      <div class="user-profile-header d-flex flex-column flex-lg-row align-items-center justify-content-lg-start justify-content-center p-4">
        <div class="flex-shrink-0 profile-header-img">
          <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded-3 user-profile-img">
        </div>
        <div class="flex-grow-1 mt-4 mt-lg-n2 ms-0 ms-sm-6">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start gap-4 flex-wrap">
            <div class="user-profile-info">
              <h4 class="mb-2">John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                <li class="list-inline-item"><i class="ti tabler-crown ti-lg"></i> <span class="fw-medium">Administrator</span></li>
                <li class="list-inline-item"><i class="ti tabler-map-pin ti-lg"></i> <span class="fw-medium">New York, USA</span></li>
                <li class="list-inline-item"><i class="ti tabler-calendar ti-lg"></i> <span class="fw-medium">Joined Dec 2024</span></li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary btn-sm">
              <i class="ti tabler-user-check ti-xs me-1"></i>Active Account
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="nav-align-top mb-6">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-account" aria-controls="navs-account" aria-selected="true">
            <i class="ti tabler-user-circle me-1"></i> Account Details
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-security" aria-controls="navs-security" aria-selected="false">
            <i class="ti tabler-lock me-1"></i> Security
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-billing" aria-controls="navs-billing" aria-selected="false">
            <i class="ti tabler-credit-card me-1"></i> Billing & Plans
          </button>
        </li>
      </ul>

      <div class="tab-content border-0 bg-transparent p-0">
        <div class="tab-pane fade show active" id="navs-account" role="tabpanel">
          <div class="card mt-4">
            <div class="card-header border-bottom">
              <h5 class="card-title mb-0">Profile Information</h5>
            </div>
            <div class="card-body pt-6">
              <div class="d-flex align-items-start align-items-sm-center gap-6 mb-6">
                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                <div class="button-wrapper">
                  <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload New Photo</span>
                    <i class="ti tabler-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                  </label>
                  <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                    <i class="ti tabler-refresh-dot d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                  </button>
                  <div class="text-muted">Allowed JPG or PNG. Max size of 800K</div>
                </div>
              </div>

              <form id="formAccountSettings" onsubmit="return false">
                <div class="row g-6">
                  <div class="col-md-6">
                    <label class="form-label">Full Name</label>
                    <input class="form-control" type="text" name="fullName" value="John Doe" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">E-mail</label>
                    <input class="form-control" type="email" name="email" value="john.doe@example.com" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Default Language</label>
                    <select class="select2 form-select">
                      <option value="en" selected>English (US)</option>
                      <option value="fr">French</option>
                      <option value="ar">Arabic</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Timezone</label>
                    <select class="select2 form-select">
                      <option value="-5" selected>(UTC-05:00) Eastern Time (US & Canada)</option>
                      <option value="0">(UTC+00:00) London</option>
                      <option value="+3.5">(UTC+03:30) Tehran</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Country</label>
                    <select class="select2 form-select">
                      <option value="USA" selected>United States</option>
                      <option value="UK">United Kingdom</option>
                      <option value="IQ">Iraq</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" placeholder="+1 234 567 890" value="+1 987 654 321" />
                  </div>
                </div>
                <div class="mt-6">
                  <button type="submit" class="btn btn-primary me-3">Save Changes</button>
                  <button type="reset" class="btn btn-label-secondary">Discard</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="navs-security" role="tabpanel">
          <div class="card mt-4">
            <div class="card-header border-bottom">
              <h5 class="card-title mb-0">Change Password</h5>
            </div>
            <div class="card-body pt-6">
              <div class="row g-4">
                <div class="col-md-6">
                  <label class="form-label">New Password</label>
                  <input type="password" class="form-control" placeholder="············" />
                </div>
                <div class="col-md-6">
                  <label class="form-label">Confirm New Password</label>
                  <input type="password" class="form-control" placeholder="············" />
                </div>
              </div>
              <button class="btn btn-primary mt-4">Update Password</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'
])
@endsection

@section('page-script')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    $(".select2").select2();
  });
</script>
@endsection