@extends('layouts/layoutMaster')

@section('title', 'Account Settings - Account')

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
        <a class="nav-link {{ request()->routeIs('user.setting.account') ? 'active' : '' }}" href="{{ route('user.setting.account') }}">
          <i class="ti tabler-user-check me-1_5 ti-sm"></i> Account
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('user.setting.security') ? 'active' : '' }}" href="{{ route('user.setting.security') }}">
          <i class="ti tabler-lock me-1_5 ti-sm"></i> Security
        </a>
      </li>
    </ul>

    <div class="card mb-6">
      <h5 class="card-header">Profile Details</h5>
      <div class="card-body">
        
        <div class="d-flex align-items-start align-items-sm-center gap-6">
          <div id="avatar-container">
             <x-user-avatar :user="auth()->user()" />
          </div>
          
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
              <span class="d-none d-sm-block">Reset</span>
            </button>
          </div>
        </div>
      </div>
      <div class="card-body pt-0">
        <form id="formAccountSettings" method="POST" action="javascript:void(0);" autocomplete="off">
          @csrf
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
              <div class="input-group">
                <select class="select2 form-select" name="country_code" id="phoneCountry" style="max-width: 130px;">
                  @foreach($countries as $country)
                    <option value="+{{ $country->dialing_code }}" 
                            data-code="{{ strtolower($country->code_alpha_2) }}"
                            {{ auth()->user()->country_id == $country->id ? 'selected' : '' }}>
                      {{ $country->code_alpha_2 }} (+{{ $country->dialing_code }})
                    </option>
                  @endforeach
                </select>
                
                <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" 
                       value="{{ auth()->user()->phone }}" placeholder="202 555 0111" />
              </div>
            </div>

            <div class="mb-4 col-md-6">
                <label for="language" class="form-label">Language</label>
                <select id="language" name="language_id" class="select2 form-select">
                    <option value="">Select Language</option>
                    @foreach($languages as $language)
                        <option value="{{ $language->id }}" 
                            {{ auth()->user()->language_id == $language->id ? 'selected' : '' }}>
                            {{ $language->name }} ({{ strtoupper($language->code) }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4 col-md-6">
              <label for="timeZones" class="form-label">Timezone</label>
              <select id="timeZones" name="timezone" class="select2 form-select">
                <option value="">Select Timezone</option>
                @foreach($timezones as $tz)
                  <option value="{{ $tz }}" {{ auth()->user()->timezone == $tz ? 'selected' : '' }}>
                    {{ $tz }}
                  </option>
                @endforeach
              </select>
            </div>

            <div class="mb-4 col-md-6">
              <label for="currency" class="form-label">Display Currency</label>
              <select id="currency" name="currency_id" class="select2 form-select">
                <option value="">Select Currency</option>
                @foreach($allCurrencies as $currency)
                  <option value="{{ $currency->id }}" 
                    {{ auth()->user()->currency_id == $currency->id ? 'selected' : '' }}>
                    {{ $currency->name }} ({{ $currency->code }})
                  </option>
                @endforeach
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
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // فعال‌سازی Select2
    const select2 = $('.select2');
    if (select2.length) {
      select2.each(function () {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this.select2({
          dropdownParent: $this.parent()
        });
      });
    }

    // مدیریت دکمه حذف حساب
    const accountActivation = document.querySelector('#accountActivation');
    const deactivateBtn = document.querySelector('.deactivate-account');

    if (accountActivation) {
      accountActivation.onclick = function() {
        if (accountActivation.checked) {
          deactivateBtn.removeAttribute('disabled');
        } else {
          deactivateBtn.setAttribute('disabled', 'disabled');
        }
      };
    }

    // تاییدیه SweetAlert برای حذف
    if (deactivateBtn) {
      deactivateBtn.onclick = function() {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
          customClass: {
            confirmButton: 'btn btn-primary me-2',
            cancelButton: 'btn btn-label-secondary'
          },
          buttonsStyling: false
        }).then(function(result) {
          if (result.value) {
            // در اینجا کد AJAX برای حذف واقعی را بنویسید
            Swal.fire({
              icon: 'success',
              title: 'Deleted!',
              text: 'Your account has been deleted.',
              customClass: { confirmButton: 'btn btn-success' }
            });
          }
        });
      };
    }
  });
</script>
@endsection