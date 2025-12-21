@php
	$pageConfigs = ['myLayout' => 'blank'];
	$customizerHidden = 'customizer-hide';
	$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Register')

@section('vendor-style')
	@vite([
		'resources/assets/vendor/libs/@form-validation/form-validation.scss',
		'resources/assets/vendor/libs/notyf/notyf.scss',
		'resources/assets/vendor/libs/animate-css/animate.scss'
	])
@endsection

@section('page-style')
	@vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('vendor-script')
	@vite([
		'resources/assets/vendor/libs/@form-validation/popular.js',
		'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
		'resources/assets/vendor/libs/@form-validation/auto-focus.js',
		'resources/assets/vendor/libs/notyf/notyf.js'
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
					<img src="{{ asset('assets/img/illustrations/auth-register-illustration-' . $configData['theme'] . '.png') }}"
						 alt="auth-register-cover" class="my-5 auth-illustration" />
				</div>
			</div>

			<div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
				<div class="w-px-400 mx-auto mt-12 pt-5">
					<h4 class="mb-1">Adventure starts here 🚀</h4>
					<p class="mb-6">Join our fitness community today!</p>

					<form id="formAuthentication" class="mb-6" onsubmit="return false">
						@csrf
						<div class="mb-6">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" id="username" name="name" placeholder="Enter your username" autofocus />
						</div>
						<div class="mb-6">
							<label for="email" class="form-label">Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
						</div>
						<div class="mb-6 form-password-toggle">
							<label class="form-label" for="password">Password</label>
							<div class="input-group input-group-merge">
								<input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
								<span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
							</div>
						</div>
						<div class="mb-6 mt-8">
							<div class="form-check mb-8 ms-2">
								<input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
								<label class="form-check-label" for="terms-conditions">
									I agree to <a href="javascript:void(0);">privacy policy & terms</a>
								</label>
							</div>
						</div>
						<button class="btn btn-primary d-grid w-100" id="btnRegister">
							<span class="indicator-label">Sign up</span>
							<span class="indicator-progress d-none">
                Processing... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
						</button>
					</form>

					<p class="text-center">
						<span>Already have an account?</span>
						<a href="{{ route('login.form', ['locale' => app()->getLocale()]) }}"><span>Sign in instead</span></a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const registerForm = document.getElementById('formAuthentication');
			const registerBtn = document.getElementById('btnRegister');
			const indicatorLabel = registerBtn.querySelector('.indicator-label');
			const indicatorProgress = registerBtn.querySelector('.indicator-progress');
			let notyf = (typeof Notyf !== 'undefined') ? new Notyf({
				duration: 4000,
				position: { x: 'right', y: 'top' },
				types: [
					{ type: 'success', background: '#28c76f', icon: { className: 'ti tabler-circle-check text-white', tagName: 'i' } },
					{ type: 'error', background: '#ea5455', icon: { className: 'ti tabler-x text-white', tagName: 'i' } }
				]
			}) : null;

			registerBtn.addEventListener('click', function (e) {
				e.preventDefault();

				// UI: Loading Start
				registerBtn.setAttribute('disabled', 'disabled');
				indicatorLabel.classList.add('d-none');
				indicatorProgress.classList.remove('d-none');

				let formData = new FormData(registerForm);

				fetch("{{ route('register.attempt', ['locale'=>app()->getLocale()]) }}", {
					method: 'POST',
					headers: {
						'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
						'Accept': 'application/json'
					},
					body: formData
				})
					.then(response => response.json())
					.then(data => {
						registerBtn.removeAttribute('disabled');
						indicatorLabel.classList.remove('d-none');
						indicatorProgress.classList.add('d-none');

						if (data.ok) {
							if(notyf) notyf.success(data.message);
							setTimeout(() => { window.location.href = data.data.redirect_url; }, 1000);
						} else {
							if(notyf) notyf.error(data.message);
						}
					})
					.catch(error => {
						registerBtn.removeAttribute('disabled');
						indicatorLabel.classList.remove('d-none');
						indicatorProgress.classList.add('d-none');
						if(notyf) notyf.error('An error occurred during registration.');
					});
			});
		});
	</script>
@endsection
