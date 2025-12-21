@extends('layouts/layoutMaster')

@section('title', 'Account Settings')

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
    <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-2 gap-6">
      <li class="nav-item">
        <a class="nav-link active" href="javascript:void(0);"><i class="ti tabler-user-check me-1_5 ti-sm"></i> Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);"><i class="ti tabler-lock me-1_5 ti-sm"></i> Security</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);"><i class="ti tabler-bell me-1_5 ti-sm"></i> Notifications</a>
      </li>
    </ul>

    <div class="card mb-6">
      <h5 class="card-header">Profile Details</h5>
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-6">
          <x-user-avatar class="d-block w-px-100 h-px-100 rounded" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="ti tabler-upload d-block d-sm-none"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
              <i class="ti tabler-refresh-dot d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>
            <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <form id="formAccountSettings" onsubmit="return false">
          <div class="row">
            <div class="mb-4 col-md-6">
              <label for="firstName" class="form-label">First Name</label>
              <input class="form-control" type="text" id="firstName" name="firstName" value="{{ auth()->user()->first_name }}" autofocus />
            </div>
            <div class="mb-4 col-md-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input class="form-control" type="text" name="lastName" id="lastName" value="{{ auth()->user()->last_name }}" />
            </div>
            <div class="mb-4 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com" />
            </div>
            <div class="mb-4 col-md-6">
              <label class="form-label" for="phoneNumber">Phone Number</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">US (+1)</span>
                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="{{ auth()->user()->phone }}" placeholder="202 555 0111" />
              </div>
            </div>
            
            <div class="mb-4 col-md-6">
              <label class="form-label" for="country">Country</label>
              <select id="country" class="select2 form-select">
                <option value="">Select</option>
                <option value="IR" {{ auth()->user()->country_id == 1 ? 'selected' : '' }}>Iran</option>
                <option value="US" {{ auth()->user()->country_id == 2 ? 'selected' : '' }}>United States</option>
                <option value="IQ">Iraq</option>
              </select>
            </div>

            <div class="mb-4 col-md-6">
              <label for="language" class="form-label">Language</label>
              <select id="language" class="select2 form-select">
                <option value="en" {{ auth()->user()->language_id == 2 ? 'selected' : '' }}>English</option>
                <option value="fa" {{ auth()->user()->language_id == 1 ? 'selected' : '' }}>Persian (Farsi)</option>
                <option value="ar">Arabic</option>
              </select>
            </div>

            <div class="mb-4 col-md-6">
              <label for="timeZones" class="form-label">Timezone</label>
              <select id="timeZones" class="select2 form-select">
                <option value="Asia/Tehran" {{ auth()->user()->timezone == 'Asia/Tehran' ? 'selected' : '' }}>(GMT+03:30) Tehran</option>
                <option value="UTC" {{ auth()->user()->timezone == 'UTC' ? 'selected' : '' }}>(GMT+00:00) UTC</option>
                <option value="America/New_York">(GMT-05:00) New York</option>
              </select>
            </div>

            <div class="mb-4 col-md-6">
              <label for="currency" class="form-label">Display Currency</label>
              <select id="currency" class="select2 form-select">
                <option value="IRT" {{ auth()->user()->currency_id == 2 ? 'selected' : '' }}>Toman (IRT)</option>
                <option value="USD" {{ auth()->user()->currency_id == 1 ? 'selected' : '' }}>US Dollar (USD)</option>
              </select>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-3">Save changes</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
          </div>
        </form>
      </div>
      </div>

    <div class="card">
      <h5 class="card-header">Delete Account</h5>
      <div class="card-body">
        <div class="mb-6 col-12 mb-0">
          <div class="alert alert-warning">
            <h5 class="alert-heading mb-1">Are you sure you want to delete your account?</h5>
            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
          </div>
        </div>
        <form id="formAccountDeactivation" onsubmit="return false">
          <div class="form-check my-8 ms-2">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
          </div>
          <button type="submit" class="btn btn-danger deactivate-account" disabled>Deactivate Account</button>
        </form>
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
    // فعال‌سازی Select2 برای دراپ‌داون‌های کشور و تایم‌زون
    $(".select2").select2();

    // مدیریت چک‌باکس حذف حساب
    const checkbox = document.querySelector('#accountActivation');
    const deactivateBtn = document.querySelector('.deactivate-account');
    checkbox.onchange = function() {
      deactivateBtn.disabled = !this.checked;
    };
  });
</script>
@endsection