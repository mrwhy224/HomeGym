@php

$pageConfigs = ['myLayout' => 'blank'];
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Login')

@section('vendor-style')
  @vite(['resources/assets/vendor/libs/@form-validation/form-validation.scss'])
  @vite(['resources/assets/vendor/libs/notyf/notyf.scss', 'resources/assets/vendor/libs/animate-css/animate.scss'])
@endsection

@section('page-style')
  @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('vendor-script')
  @vite([
    'resources/assets/vendor/libs/@form-validation/popular.js',
    'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/auto-focus.js',
    'resources/assets/vendor/libs/notyf/notyf.js' // Notyf Script
  ])
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <a href="{{ url('/') }}" class="app-brand auth-cover-brand">
    <span class="app-brand-logo demo">@include('_partials.macros')</span>
    <span class="app-brand-text demo text-heading fw-bold">{{ config('variables.templateName') }}</span>
  </a>
  <div class="authentication-inner row m-0">
    <div class="d-none d-xl-flex col-xl-8 p-0">
      <div class="auth-cover-bg d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/img/illustrations/auth-login-illustration-' . $configData['theme'] . '.png') }}"
          alt="auth-login-cover" class="my-5 auth-illustration"
          data-app-light-img="illustrations/auth-login-illustration-light.png"
          data-app-dark-img="illustrations/auth-login-illustration-dark.png" />
        <img src="{{ asset('assets/img/illustrations/bg-shape-image-' . $configData['theme'] . '.png') }}"
          alt="auth-login-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
          data-app-dark-img="illustrations/bg-shape-image-dark.png" />
      </div>
    </div>
    <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
      <div class="w-px-400 mx-auto mt-12 pt-5">
        <h4 class="mb-1">Welcome to {{ config('variables.templateName') }}! 👋</h4>
        <p class="mb-6">Please sign-in to your account</p>

        {{-- Form Start --}}
        <form id="formAuthentication" class="mb-6" onsubmit="return false">
          @csrf 
          <div class="mb-6">
            <label for="email" class="form-label">Email or Username</label>
            <input type="text" class="form-control" id="email" name="email-username"
              placeholder="Enter your email or username" autofocus />
          </div>
          <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
            </div>
          </div>
          <div class="my-8">
            <div class="d-flex justify-content-between">
              <div class="form-check mb-0 ms-2">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
              </div>
              <a href="{{ url('auth/forgot-password-cover') }}">
                <p class="mb-0">Forgot Password?</p>
              </a>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100" id="btnLogin">
            <span class="indicator-label">Sign in</span>
            <span class="indicator-progress d-none">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
          </button>
        </form>
        {{-- Form End --}}

        <p class="text-center">
          <span>New on our platform?</span>
          <a href="{{ url('auth/register-cover') }}">
            <span>Create an account</span>
          </a>
        </p>

        <div class="divider my-6">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-facebook me-1_5">
            <i class="icon-base ti tabler-brand-facebook-filled icon-20px"></i>
          </a>
          <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-google-plus">
            <i class="icon-base ti tabler-brand-google-filled icon-20px"></i>
          </a>
        </div>
      </div>
    </div>
    </div>
</div>

{{-- Custom Script for AJAX Login with Notyf --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('formAuthentication');
    const loginBtn = document.getElementById('btnLogin');
    const indicatorLabel = loginBtn.querySelector('.indicator-label');
    const indicatorProgress = loginBtn.querySelector('.indicator-progress');
    let notyf;

    // 1. Initialize Notyf (تنظیمات گرافیکی دقیق مشابه Vuexy)
    if (typeof Notyf !== 'undefined') {
        notyf = new Notyf({
            duration: 4000,
            ripple: true,
            position: { x: 'right', y: 'top' },
            dismissible: true,
            types: [
                {
                    type: 'success',
                    background: '#28c76f', // Vuexy Success Color
                    icon: {
                        className: 'ti tabler-circle-check text-white', // Tabler Icon
                        tagName: 'i'
                    }
                },
                {
                    type: 'error',
                    background: '#ea5455', // Vuexy Error Color
                    icon: {
                        className: 'ti tabler-x text-white', // Tabler Icon
                        tagName: 'i'
                    }
                }
            ]
        });
    }

    // 2. Handle Form Submit
    loginBtn.addEventListener('click', function (e) {
        e.preventDefault();

        // UI: نمایش لودینگ
        loginBtn.setAttribute('disabled', 'disabled');
        indicatorLabel.classList.add('d-none');
        indicatorProgress.classList.remove('d-none');

        let formData = new FormData(loginForm);

        // AJAX Request
        fetch("{{ route('login.attempt', ['locale'=>app()->getLocale()]) }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // UI: پایان لودینگ
            loginBtn.removeAttribute('disabled');
            indicatorLabel.classList.remove('d-none');
            indicatorProgress.classList.add('d-none');

            if (data.ok) {
                // نمایش پیام موفقیت Notyf
                if(notyf) notyf.success(data.message);
                // ریدایرکت
                setTimeout(() => {
                    window.location.href = data.data.redirect_url;
                }, 1000);
            } else {
                // نمایش پیام خطا Notyf
                if(notyf) notyf.error(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            loginBtn.removeAttribute('disabled');
            indicatorLabel.classList.remove('d-none');
            indicatorProgress.classList.add('d-none');
            
            if(notyf) notyf.error('Something went wrong. Check console.');
        });
    });
});
</script>
@endsection