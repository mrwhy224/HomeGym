@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
	@vite([
		'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
		'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
		'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
		'resources/assets/vendor/libs/apex-charts/apex-charts.scss'
	])
@endsection

@section('vendor-script')
	@vite([
		'resources/assets/vendor/libs/moment/moment.js',
		'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
		'resources/assets/vendor/libs/apex-charts/apexcharts.js'
	])
@endsection

@section('page-script')
	@vite('resources/assets/js/app-academy-dashboard.js')
@endsection

@section('content')
	<div class="card bg-transparent shadow-none my-6 border-0">
		<div class="card-body row p-0 pb-6 g-6">
			<div class="col-12 col-lg-8 card-separator">
				<h5 class="mb-2">Welcome back, <span class="h4">{{ auth()->user()->name ?? 'Coach' }} 👋🏻</span></h5>
				<div class="col-12 col-lg-7">
					<p>Your fitness community is growing. Review your trainees' progress and upcoming live sessions for this week.</p>
				</div>
				<div class="d-flex justify-content-between flex-wrap gap-4 me-12">
					<div class="d-flex align-items-center gap-4 me-6 me-sm-0">
						<div class="avatar avatar-lg">
							<div class="avatar-initial bg-label-primary rounded">
								<div class="text-primary">
									<i class="ti tabler-video icon-32px"></i>
								</div>
							</div>
						</div>
						<div class="content-right">
							<p class="mb-0 fw-medium">Live Sessions Today</p>
							<h4 class="text-primary mb-0">0 Sessions</h4>
						</div>
					</div>
					<div class="d-flex align-items-center gap-4">
						<div class="avatar avatar-lg">
							<div class="avatar-initial bg-label-info rounded">
								<div class="text-info">
									<i class="ti tabler-star icon-32px"></i>
								</div>
							</div>
						</div>
						<div class="content-right">
							<p class="mb-0 fw-medium">Coach Rating</p>
							<h4 class="text-info mb-0">5.0</h4>
						</div>
					</div>
					<div class="d-flex align-items-center gap-4">
						<div class="avatar avatar-lg">
							<div class="avatar-initial bg-label-warning rounded">
								<div class="text-warning">
									<i class="ti tabler-users icon-32px"></i>
								</div>
							</div>
						</div>
						<div class="content-right">
							<p class="mb-0 fw-medium">Active Trainees</p>
							<h4 class="text-warning mb-0">0</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 ps-md-4 ps-lg-6">
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<div>
							<h5 class="mb-1">Time Spent Training</h5>
							<p class="mb-9">Weekly engagement report</p>
						</div>
						<div class="time-spending-chart">
							<h4 class="mb-2">0<span class="text-body">h</span> 0<span class="text-body">m</span></h4>
							<span class="badge bg-label-secondary">Starting Phase</span>
						</div>
					</div>
					<div id="leadsReportChart"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-6 g-6">


		<div class="col-12 col-xl-4 col-md-6">
			<div class="card h-100">
				<div class="card-header d-flex align-items-center justify-content-between">
					<h5 class="m-0 me-2">Trainee Requests</h5>
				</div>
				<div class="card-body d-flex flex-column justify-content-center align-items-center">
					<div class="mb-4">
						<i class="ti tabler-users-minus icon-50px text-muted opacity-50"></i>
					</div>
					<p class="text-center text-muted">You currently have no new trainee requests. Your profile is live and waiting for clients.</p>
					<button class="btn btn-sm btn-label-primary">Promote Profile</button>
				</div>
			</div>
		</div>

		<div class="col-12 col-xl-4 col-md-6">
			<div class="card h-100">
				<div class="card-header d-flex align-items-center justify-content-between">
					<h5 class="card-title m-0 me-2">Best Selling Packages</h5>
				</div>
				<div class="card-body">
					<ul class="list-unstyled mb-0">
						<li class="d-flex mb-6 align-items-center">
							<div class="avatar flex-shrink-0 me-4">
								<span class="avatar-initial rounded bg-label-primary"><i class="ti tabler-stretching icon-lg"></i></span>
							</div>
							<div class="row w-100 align-items-center">
								<div class="col-sm-8 col-md-12 col-xxl-8">
									<h6 class="mb-0">30-Day Fat Burn Challenge</h6>
								</div>
								<div class="col-sm-4 col-md-12 col-xxl-4 d-flex justify-content-xxl-end">
									<div class="badge bg-label-secondary">0 Sales</div>
								</div>
							</div>
						</li>
						<li class="d-flex mb-6 align-items-center">
							<div class="avatar flex-shrink-0 me-4">
								<span class="avatar-initial rounded bg-label-info"><i class="ti tabler-barbell icon-lg"></i></span>
							</div>
							<div class="row w-100 align-items-center">
								<div class="col-sm-8 col-md-12 col-xxl-8">
									<h6 class="mb-0">Muscle Gain Masterclass</h6>
								</div>
								<div class="col-sm-4 col-md-12 col-xxl-4 d-flex justify-content-xxl-end">
									<div class="badge bg-label-secondary">0 Sales</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-12 col-xl-4 col-md-6">
			<div class="card h-100">
				<div class="card-body">
					<div class="bg-label-primary rounded-3 text-center mb-4 pt-6">
						<img class="img-fluid" src="{{ asset('assets/img/illustrations/girl-with-laptop.png') }}"
							 alt="Coach laptop illustration" width="140" />
					</div>
					<h5 class="mb-2">Upcoming Live Workout</h5>
					<p class="small">Schedule your first group training session to engage with your followers.</p>
					<div class="row mb-4 g-3">
						<div class="col-6">
							<div class="d-flex align-items-center">
								<i class="ti tabler-calendar-event icon-28px text-primary me-2"></i>
								<div>
									<h6 class="mb-0 text-nowrap">Not Set</h6>
									<small>Date</small>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="d-flex align-items-center">
								<i class="ti tabler-clock icon-28px text-primary me-2"></i>
								<div>
									<h6 class="mb-0 text-nowrap">0 min</h6>
									<small>Duration</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 text-center">
						<a href="javascript:void(0);" class="btn btn-primary w-100 d-grid">Create Event</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-xl-4 col-md-6">
			<div class="card h-100">
				<div class="card-header d-flex align-items-center justify-content-between">
					<h5 class="card-title m-0 me-2">Trainee Goal Statistics</h5>
				</div>
				<div class="card-body">
					<ul class="p-0 m-0">
						<li class="d-flex mb-4 pb-1">
							<div class="chart-progress me-4" data-color="primary" data-series="0" data-progress_variant="true"></div>
							<div class="row w-100 align-items-center">
								<div class="col-9">
									<div class="me-2">
										<h6 class="mb-1">Weight Loss Program</h6>
										<p class="mb-0 small">0 Trainees enrolled</p>
									</div>
								</div>
								<div class="col-3 text-end">
									<button type="button" class="btn btn-sm btn-icon btn-label-secondary">
										<i class="ti tabler-chevron-right icon-20px"></i>
									</button>
								</div>
							</div>
						</li>
						<li class="d-flex mb-4 pb-1">
							<div class="chart-progress me-4" data-color="success" data-series="0" data-progress_variant="true"></div>
							<div class="row w-100 align-items-center">
								<div class="col-9">
									<div class="me-2">
										<h6 class="mb-1">Cardio Endurance</h6>
										<p class="mb-0 small">0 Trainees enrolled</p>
									</div>
								</div>
								<div class="col-3 text-end">
									<button type="button" class="btn btn-sm btn-icon btn-label-secondary">
										<i class="ti tabler-chevron-right icon-20px"></i>
									</button>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="card mb-6">
		<div class="card-header border-bottom">
			<h5 class="card-title mb-0">My Class Schedule</h5>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="table-light">
				<tr>
					<th>Class Name</th>
					<th>Days</th>
					<th>Time Slot</th>
					<th>Participants</th>
					<th>Status</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td colspan="5" class="text-center py-5 text-muted">
						No classes scheduled. Go to "Package Management" to create your first training session.
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection
