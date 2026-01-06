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
									<select class="form-select" name="country_id" style="max-width: 125px;">
						               @foreach($countries as $country)
						                  <option value="{{ $country->id }}" 
						                     {{ $country->dialing_code == '98' ? 'selected' : '' }}>
						                     {{ $country->code_alpha_2 }} (+{{ $country->dialing_code }})
						                  </option>
						               @endforeach
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
@endsection

@section('page-script')
	<script>
		'use strict';
		window.registrationConfig = {
		        csrfToken: '{{ csrf_token() }}',
		        endpoints: {
		            step1: '{{ route("register.step1", ["locale" => app()->getLocale()]) }}',
		            step2: '{{ route("register.step2", ["locale" => app()->getLocale()]) }}',
		            finalize: '{{ route("register.final", ["locale" => app()->getLocale()]) }}'
		        }
		    };
		document.addEventListener('DOMContentLoaded', function () {

			const notyf = new Notyf({ position: { x: 'right', y: 'top' } });
			let registrationData = {};

			// تابع کمکی برای ایجاد پلاگین‌های تازه برای هر فرم (جهت جلوگیری از تداخل)
			const getPlugins = (formId) => ({
				trigger: new FormValidation.plugins.Trigger(),
				bootstrap5: new FormValidation.plugins.Bootstrap5({
					eleValidClass: '',
					rowSelector: function(field, ele) {
						// انتخاب ردیف بر اساس ساختار Vuexy
						return '.mb-3, .mb-4, .mb-6, .col-md-6';
					}
				}),
				autoFocus: new FormValidation.plugins.AutoFocus(),
				submitButton: new FormValidation.plugins.SubmitButton()
			});

			// --- مرحله ۱: فیلدها را با نام دقیق HTML چک کنید ---
			const fv1 = FormValidation.formValidation(document.getElementById('formStep1'), {
				fields: {
					'first_name': { validators: { notEmpty: { message: 'First name is required' } } },
					'last_name': { validators: { notEmpty: { message: 'Last name is required' } } },
					'email': {
						validators: {
							notEmpty: { message: 'Email is required' },
							emailAddress: { message: 'Invalid email' }
						}
					},
					'password': {
						validators: {
							notEmpty: { message: 'Password is required' },
							stringLength: { min: 8, message: 'Min 8 characters' }
						}
					}
				},
				plugins: getPlugins('formStep1')
			});

			// --- مرحله ۲: فیلد phone ---
			const fv2 = FormValidation.formValidation(document.getElementById('formStep2'), {
				fields: {
					'phone': { validators: { notEmpty: { message: 'Phone is required' } } }
				},
				plugins: getPlugins('formStep2')
			});

			// تابع NextStep اصلاح شده
			window.nextStep = async function (current, next) {
			    const validator = current === 1 ? fv1 : fv2;
			    const form = document.getElementById(`formStep${current}`);
			    
			    // ذخیره رفرنس دکمه (بسیار مهم در توابع async)
			    const btn = event.currentTarget || event.target; 
			    const status = await validator.validate();

			    if (status === 'Valid') {
			        const formData = Object.fromEntries(new FormData(form));
			        const originalText = btn.innerHTML;
			        btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span>';
			        btn.disabled = true;

			        const url = current === 1 
			            ? window.registrationConfig.endpoints.step1 
			            : window.registrationConfig.endpoints.step2;

			        try {
			            const response = await fetch(url, {
			                method: 'POST',
			                headers: {
			                    'Content-Type': 'application/json',
			                    'X-CSRF-TOKEN': window.registrationConfig.csrfToken, // توکن فعلی
			                    'Accept': 'application/json'
			                },
			                body: JSON.stringify(formData)
			            });

			            const serverResult = await response.json();

			            if (serverResult.ok) {
			                // --- بخش حیاتی: به‌روزرسانی توکن برای مرحله بعد ---
			                if (current === 1 && serverResult.data.token) {
			                    window.registrationConfig.csrfToken = serverResult.data.token;
			                }

			                Object.assign(registrationData, formData);
			                
			                document.getElementById('step-' + current).classList.add('d-none');
			                document.getElementById('step-' + next).classList.remove('d-none');
			                document.getElementById('wizard-progress').style.width = (next / 3 * 100) + '%';
			            } else {
			                notyf.error(serverResult.message || 'Error');
			            }
			        } catch (e) {
			        	console.log(e);
			            notyf.error('Connection error');
			        } finally {
			            btn.innerHTML = originalText;
			            btn.disabled = false;
			        }
			    }
			};

			const btnFinalize = document.getElementById('btnFinalize');

			if (btnFinalize) {
			    btnFinalize.addEventListener('click', async function () {
			        const form3 = document.getElementById('formStep3');
			        const formData = Object.fromEntries(new FormData(form3));
			        

			        this.disabled = true;
			        const originalText = this.innerHTML;
			        this.innerHTML = '<span class="spinner-border spinner-border-sm"></span>';

			        try {
			            const response = await fetch(window.registrationConfig.endpoints.finalize, {
			                method: 'POST',
			                headers: {
			                    'Content-Type': 'application/json',
			                    'X-CSRF-TOKEN': window.registrationConfig.csrfToken,
			                    'Accept': 'application/json'
			                },
			                body: JSON.stringify(formData)
			            });

			            const serverResult = await response.json();

			            if (serverResult.ok) {
			                notyf.success(serverResult.message || 'Registration completed!');
			                window.location.href = serverResult.data.redirect;
			            } else {
			                notyf.error(serverResult.message || 'Error in final step');
			                this.disabled = false;
			                this.innerHTML = originalText;
			            }
			        } catch (e) {
			            notyf.error('Finalization failed');
			            this.disabled = false;
			            this.innerHTML = originalText;
			        }
			    });
			}
		});
	</script>
@endsection
