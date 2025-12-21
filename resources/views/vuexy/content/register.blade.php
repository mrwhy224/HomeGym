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
		<div class="authentication-inner row m-0">
			<div class="d-none d-xl-flex col-xl-8 p-0">
				<div class="auth-cover-bg d-flex justify-content-center align-items-center">
					<img src="{{ asset('assets/img/illustrations/auth-register-illustration-light.png') }}" class="auth-illustration" />
				</div>
			</div>

			<div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
				<div class="w-px-450 mx-auto mt-12 pt-5">

					<div class="progress mb-6" style="height: 6px;">
						<div id="wizard-progress" class="progress-bar bg-primary" role="progressbar" style="width: 33.33%;"></div>
					</div>

					<div id="step-1" class="auth-step-content animate__animated animate__fadeIn">
						<h4 class="mb-1">Adventure starts here 🚀</h4>
						<p class="mb-6">Create your secure account</p>
						<form id="formStep1" onsubmit="return false">
							@csrf
							<div class="row g-3">
								<div class="col-md-6 mb-3">
									<label class="form-label">First Name</label>
									<input type="text" name="first_name" class="form-control" placeholder="John" autofocus />
								</div>
								<div class="col-md-6 mb-3">
									<label class="form-label">Last Name</label>
									<input type="text" name="last_name" class="form-control" placeholder="Doe" />
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Email</label>
								<input type="email" name="email" class="form-control" placeholder="john@example.com" />
							</div>
							<div class="mb-6 form-password-toggle">
								<label class="form-label">Password</label>
								<div class="input-group input-group-merge">
									<input type="password" name="password" class="form-control" placeholder="······" />
									<span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
								</div>
							</div>
							<button type="button" class="btn btn-primary d-grid w-100" onclick="nextStep(1, 2)">Next</button>
						</form>
					</div>

					<div id="step-2" class="auth-step-content d-none animate__animated animate__fadeIn">
						<h4 class="mb-1">Stay Connected 📱</h4>
						<p class="mb-6">Your contact information</p>
						<form id="formStep2" onsubmit="return false">
							<div class="mb-6">
								<label class="form-label">Phone Number</label>
								<div class="input-group">
									<select class="form-select w-px-100" name="country_code" style="max-width: 120px;">
										<option value="+98" selected>IR +98</option>
										<option value="+1">US +1</option>
										<option value="+44">UK +44</option>
										<option value="+964">IQ +964</option>
									</select>
									<input type="text" name="phone" class="form-control" placeholder="912 345 6789" />
								</div>
							</div>
							<div class="d-flex justify-content-between gap-3 mt-8">
								<button type="button" class="btn btn-label-secondary w-100" onclick="prevStep(2, 1)">Back</button>
								<button type="button" class="btn btn-primary w-100" onclick="nextStep(2, 3)">Next</button>
							</div>
						</form>
					</div>

					<div id="step-3" class="auth-step-content d-none animate__animated animate__fadeIn">
						<h4 class="mb-1">Customize Your Path 🎯</h4>
						<p class="mb-6">Tell us about your goals</p>
						<form id="formStep3" onsubmit="return false">
							<div class="mb-4">
								<label class="form-label">Gender</label>
								<div class="d-flex gap-4">
									<div class="form-check custom-option custom-option-icon border rounded p-3 w-50 text-center">
										<input class="form-check-input d-none" type="radio" name="gender" value="male" id="genderMale" checked />
										<label class="form-check-label" for="genderMale">
											<i class="ti tabler-man icon-md mb-2"></i>
											<span class="d-block fw-medium">Male</span>
										</label>
									</div>
									<div class="form-check custom-option custom-option-icon border rounded p-3 w-50 text-center">
										<input class="form-check-input d-none" type="radio" name="gender" value="female" id="genderFemale" />
										<label class="form-check-label" for="genderFemale">
											<i class="ti tabler-woman icon-md mb-2"></i>
											<span class="d-block fw-medium">Female</span>
										</label>
									</div>
								</div>
							</div>
							<div class="mb-4">
								<label class="form-label">Activity Level</label>
								<select name="activity_level" class="form-select">
									<option value="sedentary">Sedentary (Office job)</option>
									<option value="moderate" selected>Moderate (Active 3-4 days)</option>
									<option value="active">Very Active (Athlete)</option>
								</select>
							</div>
							<div class="mb-6">
								<label class="form-label">Primary Goal</label>
								<select name="fitness_goal" class="form-select">
									<option value="weight_loss">Weight Loss & Fat Burn</option>
									<option value="build_muscle">Hypertrophy & Muscle Gain</option>
									<option value="corrective">Corrective Exercises</option>
								</select>
							</div>
							<div class="d-flex justify-content-between gap-3">
								<button type="button" class="btn btn-label-secondary w-100" onclick="prevStep(3, 2)">Back</button>
								<button type="button" class="btn btn-success w-100" id="btnFinalize">Join Us</button>
							</div>
						</form>
					</div>

					<p class="text-center mt-6">
						<span>Already have an account?</span>
						<a href="{{ url('auth/login-cover') }}"><span>Sign in</span></a>
					</p>

				</div>
			</div>
		</div>
	</div>

	<script>
		function updateProgress(step) {
			const progress = (step / 3) * 100;
			document.getElementById('wizard-progress').style.width = progress + '%';
		}

		function nextStep(current, next) {
			// اینجا در مرحله ۱ متد AJAX شما برای ثبت اولیه صدا زده می‌شود
			document.getElementById('step-' + current).classList.add('d-none');
			document.getElementById('step-' + next).classList.remove('d-none');
			updateProgress(next);
		}

		function prevStep(current, prev) {
			document.getElementById('step-' + current).classList.add('d-none');
			document.getElementById('step-' + prev).classList.remove('d-none');
			updateProgress(prev);
		}
	</script>
@endsection
