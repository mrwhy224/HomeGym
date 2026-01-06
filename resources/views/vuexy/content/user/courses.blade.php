@extends('layouts/layoutMaster')

@section('title', 'Available Courses')

@section('content')

<div class="row g-6">
    <div class="col-12">
        <div class="card bg-label-primary border-0">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="text-primary mb-1">Explore Online Classes 🏃‍♂️</h4>
                    <p class="mb-0">Choose the best plan that fits your lifestyle and goals.</p>
                </div>
                <div class="d-none d-md-block">
                    <img src="{{ asset('assets/img/illustrations/wizard-create-deal-confirm.png') }}" height="100">
                </div>
            </div>
        </div>
    </div>
     <!-- $course['type'] == 'semi-private' ? 'bg-label-warning' : 'bg-label-primary'  -->
    @foreach($activities as $activity)
    <div class="col-md-6 col-xl-4">
        <div class="card h-100 shadow-none border">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge ">
                        {{ str_replace('_', ' ',strtoupper($activity->package->type)) }}
                    </span>
                    <h5 class="text-primary mb-0">{{ $activity->package->getPrice() }}</h5>
                </div>

                <a href="{{ route('user.classes.details', ['activity'=>$activity->id]) }}" class="h5 mt-2 d-block">{{ $activity->package->name }}</a>

                <div class="mt-4 p-3 bg-lighter rounded">
                    <p class="small fw-bold mb-2 text-heading"><i class="ti tabler-calendar-stats me-1"></i> Weekly Schedule:</p>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        @foreach($activity->weekly_schedule['days'] as $day)
                            <span class="badge bg-white text-body border fw-normal">{{ $day }}</span>
                        @endforeach
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="ti tabler-clock-hour-4 me-1"></i>
                        <span>Time: <strong>{{ $activity->weekly_schedule['time'] }}</strong></span>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-4 mt-4 border-top pt-4">
                    <div class="d-flex align-items-center">
                        <i class="icon-base ti tabler-rotate text-muted me-1"></i>
                        <span class="small">{{ count($activity->sessions) }} Sessions</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icon-base ti tabler-calendar text-muted me-1"></i>
                        <span class="small">{{ $activity->package->validity_days }} Days</span>
                    </div>
                </div>

                <div class="row mt-5 g-3">
                    <div class="col-6">
                        <a href="{{ route('user.classes.details', ['activity'=>$activity->id]) }}" class="btn btn-outline-secondary w-100">Details</a>
                    </div>
                    <div class="col-6">
						@if($activity->bookings_exists)
							{{-- اگر کاربر قبلاً ثبت‌نام کرده باشد --}}
							<button class="btn btn-success w-100" disabled>
								Enrolled
							</button>
						@else
							<button class="btn btn-primary w-100 enroll-btn" data-id="{{ $activity->id }}">
								Enroll Now
							</button>
						@endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@section('vendor-style')
	@vite([
		'resources/assets/vendor/libs/animate-css/animate.scss',
		'resources/assets/vendor/libs/notyf/notyf.scss'
	])
@endsection

@section('vendor-script')
	@vite([
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
					dismissible: true,
					types: [
						{
							type: 'success',
							background: '#28c76f',
							icon: { className: 'ti tabler-check', tagName: 'i', color: 'white' }
						},
						{
							type: 'error',
							background: '#ea5455',
							icon: { className: 'ti tabler-x', tagName: 'i', color: 'white' }
						}
					]
				});
			}

			const enrollButtons = document.querySelectorAll('.enroll-btn');

			enrollButtons.forEach(button => {
				button.addEventListener('click', function (e) {
					e.preventDefault();

					const activityId = this.getAttribute('data-id');
					const spinner = this.querySelector('.spinner-border');


					this.disabled = true;
					if (spinner) spinner.classList.remove('d-none');


					fetch( route('user.api.classes.book', {'activity':activityId}) , {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json',
							'Accept': 'application/json',
							'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
						}
					})
						.then(async res => {
							const data = await res.json();
							if (!res.ok) throw data;
							return data;
						})
						.then(data => {
							if(notyf) notyf.success(data.message || 'Enrollment completed successfully!');


							this.classList.replace('btn-primary', 'btn-success');
							this.innerHTML = 'Enrolled';
							this.disabled = true;
						})
						.catch(err => {

							this.disabled = false;
							if (spinner) spinner.classList.add('d-none');


							const errorMsg = err.message || 'An unexpected error occurred.';
							if(notyf) notyf.error(errorMsg);

							console.error("Enrollment Error:", err);
						});
				});
			});
		});
	</script>
@endsection
