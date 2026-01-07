@extends('layouts/layoutMaster')

@section('title', 'Account Settings - Security')

@section('vendor-style')
	@vite([
	  'resources/assets/vendor/libs/select2/select2.scss',
	  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
	  'resources/assets/vendor/libs/animate-css/animate.scss',
	  'resources/assets/vendor/libs/notyf/notyf.scss'
	])
@endsection

@section('content')
	<div class="row">
		<div class="col-12">
			{{-- Tabs Navigation --}}
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

			{{-- Change Password Card --}}
			<div class="card mb-6">
				<h5 class="card-header">Change Password</h5>
				<div class="card-body">
					<form id="formChangePassword" method="POST" action="javascript:void(0);">
						@csrf
						<div class="row">
							<div class="mb-4 col-md-6 form-password-toggle">
								<label class="form-label" for="currentPassword">Current Password</label>
								<div class="input-group input-group-merge">
									<input class="form-control" type="password" name="currentPassword" id="currentPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
									<span class="input-group-text cursor-pointer"><i class="ti tabler-eye-off"></i></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="mb-4 col-md-6 form-password-toggle">
								<label class="form-label" for="newPassword">New Password</label>
								<div class="input-group input-group-merge">
									<input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
									<span class="input-group-text cursor-pointer"><i class="ti tabler-eye-off"></i></span>
								</div>
							</div>

							<div class="mb-4 col-md-6 form-password-toggle">
								<label class="form-label" for="confirmPassword">Confirm New Password</label>
								<div class="input-group input-group-merge">
									<input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
									<span class="input-group-text cursor-pointer"><i class="ti tabler-eye-off"></i></span>
								</div>
							</div>
						</div>
						<div class="mt-2">
							<button type="submit" class="btn btn-primary me-3">Update Password</button>
							<button type="reset" class="btn btn-label-secondary">Reset</button>
						</div>
					</form>
				</div>
			</div>

			{{-- Password Requirements --}}
			<div class="card">
				<div class="card-body">
					<h6 class="text-primary mb-3">Password Requirements:</h6>
					<ul class="ps-4 mb-0">
						<li class="mb-1">Minimum 8 characters long - the more, the better</li>
						<li class="mb-1">At least one lowercase character</li>
						<li>At least one number, symbol, or whitespace character</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('vendor-script')
	@vite([
	  'resources/assets/vendor/libs/select2/select2.js',
	  'resources/assets/vendor/libs/notyf/notyf.js'
	])
@endsection

@section('page-script')
	<script>
		'use strict';

		document.addEventListener('DOMContentLoaded', function () {
			let notyf;
			if (typeof Notyf !== 'undefined') {
				notyf = new Notyf({
					duration: 4000,
					position: { x: 'right', y: 'top' },
					dismissible: true
				});
			}

			const formChangePassword = document.querySelector('#formChangePassword');

			if (formChangePassword) {
				formChangePassword.onsubmit = function (e) {
					e.preventDefault();

					const currentPassword = document.querySelector('#currentPassword').value;
					const newPassword = document.querySelector('#newPassword').value;
					const confirmPassword = document.querySelector('#confirmPassword').value;

					// Validation ساده کلاینت
					if (newPassword !== confirmPassword) {
						notyf.error('New passwords do not match!');
						return;
					}

					if (newPassword.length < 8) {
						notyf.error('Password must be at least 8 characters.');
						return;
					}

					// دکمه لودینگ
					const btn = formChangePassword.querySelector('button[type="submit"]');
					btn.disabled = true;
					btn.innerHTML = 'Updating...';

					fetch("", {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json',
							'Accept': 'application/json',
							'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
						},
						body: JSON.stringify({
							current_password: currentPassword,
							new_password: newPassword,
							new_password_confirmation: confirmPassword
						})
					})
						.then(async res => {
							const data = await res.json();
							if (!res.ok) throw data;
							return data;
						})
						.then(data => {
							notyf.success(data.message || 'Password updated successfully!');
							formChangePassword.reset();
						})
						.catch(err => {
							const errorMsg = err.message || (err.errors ? Object.values(err.errors)[0][0] : 'Error updating password');
							notyf.error(errorMsg);
						})
						.finally(() => {
							btn.disabled = false;
							btn.innerHTML = 'Update Password';
						});
				};
			}
		});
	</script>
@endsection
