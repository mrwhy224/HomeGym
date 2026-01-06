@extends('layouts/layoutMaster')

@section('title', 'Admin Dashboard')

@section('vendor-style')
	@vite([
	  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
	  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
	  'resources/assets/vendor/libs/select2/select2.scss',
	  'resources/assets/vendor/libs/flatpickr/flatpickr.scss'
	])
@endsection

@section('vendor-script')
	@vite([
	  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
	  'resources/assets/vendor/libs/moment/moment.js',
	  'resources/assets/vendor/libs/select2/select2.js',
	  'resources/assets/vendor/libs/flatpickr/flatpickr.js'
	])
@endsection

@section('content')
	<div class="row g-6">
		<div class="col-lg-8 col-12">
			<div class="card h-100">
				<div class="card-body d-flex align-items-center justify-content-between">
					<div class="content-left">
						<h4 class="card-title mb-1">Welcome back, Administrator! 🚀</h4>
						<p class="mb-4">System performance is optimal today. You have <span class="fw-bold text-primary">{{ $stats['pending_tickets_count'] }} pending tickets</span> and <span class="fw-bold text-primary">{{ $stats['pending_coaches_count'] }} coach applications</span> to review.</p>
						<div class="d-flex gap-3">
							<button class="btn btn-primary btn-sm">View Reports</button>
							<button class="btn btn-label-secondary btn-sm">Manage Users</button>
						</div>
					</div>
					<div class="content-right d-none d-sm-block">
						<img src="{{ asset('assets/img/illustrations/girl-unlock-password-light.png') }}" height="140" alt="Dashboard Welcome">
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-12">
			<div class="card h-100">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-start mb-2">
						<h5 class="card-title mb-0">Monthly Earnings</h5>
						<span class="badge bg-label-success">Live</span>
					</div>
					<h3 class="mb-1">${{ number_format($stats['monthly_revenue'], 2) }}</h3>
					<small class="text-muted">Current month system commissions</small>
					<div id="revenueGrowthChart" class="mt-2"></div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-sm-6">
			<div class="card h-100">
				<div class="card-body">
					<div class="d-flex align-items-center mb-2">
						<div class="avatar me-4"><span class="avatar-initial rounded bg-label-primary"><i class="ti tabler-users icon-24px"></i></span></div>
						<h4 class="mb-0">{{ number_format($stats['active_customers']) }}</h4>
					</div>
					<p class="mb-1">Active Customers</p>
					<small class="text-success fw-medium">Total Users</small>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-sm-6">
			<div class="card h-100">
				<div class="card-body">
					<div class="d-flex align-items-center mb-2">
						<div class="avatar me-4"><span class="avatar-initial rounded bg-label-info"><i class="ti tabler-school icon-24px"></i></span></div>
						<h4 class="mb-0">{{ number_format($stats['total_coaches']) }}</h4>
					</div>
					<p class="mb-1">Total Coaches</p>
					<small class="text-info fw-medium">Verified Profiles</small>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-sm-6">
			<div class="card h-100">
				<div class="card-body">
					<div class="d-flex align-items-center mb-2">
						<div class="avatar me-4"><span class="avatar-initial rounded bg-label-warning"><i class="ti tabler-ticket icon-24px"></i></span></div>
						<h4 class="mb-0">{{ $stats['active_tickets'] }}</h4>
					</div>
					<p class="mb-1">Active Tickets</p>
					<small class="text-danger fw-medium">Requires Attention</small>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-sm-6">
			<div class="card h-100">
				<div class="card-body">
					<div class="d-flex align-items-center mb-2">
						<div class="avatar me-4"><span class="avatar-initial rounded bg-label-success"><i class="ti tabler-arrows-exchange icon-24px"></i></span></div>
						<h4 class="mb-0">{{ number_format($stats['monthly_transactions']) }}</h4>
					</div>
					<p class="mb-1">Monthly Transactions</p>
					<small class="text-muted">Total Volume Count</small>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-12">
			<div class="card h-100">
				<div class="card-header d-flex align-items-center justify-content-between border-bottom">
					<h5 class="card-title mb-0">Timezone Converter</h5>
					<i class="ti tabler-clock-play text-muted"></i>
				</div>
				<div class="card-body pt-6">
					<div class="row g-4">
						<div class="col-12">
							<label class="form-label">Select Time</label>
							<input type="text" id="time-picker" class="form-control" placeholder="HH:mm" />
						</div>
						<div class="col-md-6">
							<label class="form-label">Source TZ</label>
							<select id="source-tz" class="select2 form-select">
								<option value="UTC" selected>UTC</option>
								<option value="Asia/Tehran">Tehran</option>
								<option value="America/New_York">New York</option>
							</select>
						</div>
						<div class="col-md-6">
							<label class="form-label">Destination TZ</label>
							<select id="dest-tz" class="select2 form-select">
								<option value="Asia/Tehran" selected>Tehran</option>
								<option value="Asia/Tokyo">Tokyo</option>
								<option value="Europe/London">London</option>
							</select>
						</div>
						<div class="col-12">
							<div class="bg-label-primary p-4 rounded text-center">
								<small class="d-block mb-1 text-uppercase">Result</small>
								<h3 class="mb-0" id="converted-time">--:--</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-12">
			<div class="card h-100">
				<div class="card-header d-flex align-items-center justify-content-between border-bottom">
					<h5 class="card-title mb-0">Currency Converter</h5>
					<i class="ti tabler-currency-dollar text-muted"></i>
				</div>
				<div class="card-body pt-6">
					<div class="row g-4">
						<div class="col-12">
							<label class="form-label">Amount</label>
							<input type="number" id="currency-amount" class="form-control" value="1" placeholder="0.00">
						</div>
						<div class="col-md-6">
							<label class="form-label">From</label>
							<select id="from-currency" class="select2 form-select">
								@foreach($exchangeRates as $code => $rate)
									<option value="{{ $code }}">{{ $code }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<label class="form-label">To</label>
							<select id="to-currency" class="select2 form-select">
								@foreach($exchangeRates as $code => $rate)
									<option value="{{ $code }}" {{ $loop->index == 1 ? 'selected' : '' }}>{{ $code }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-12">
							<div class="bg-label-success p-4 rounded text-center">
								<small class="d-block mb-1 text-uppercase">Result</small>
								<h3 class="mb-0" id="currency-result">0.00</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12">
			<div class="card h-100">
				<div class="card-header d-flex justify-content-between align-items-center border-bottom">
					<h5 class="mb-0">Recent High Priority Tickets</h5>
					<a href="#" class="btn btn-sm btn-outline-primary">View All</a>
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
						<tr>
							<th>ID</th>
							<th>User</th>
							<th>Subject</th>
							<th>Status</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						@forelse($recentTickets as $ticket)
							<tr>
								<td>#{{ $ticket->tracking_code }}</td>
								<td>{{ $ticket->user->name }}</td>
								<td>{{ Str::limit($ticket->subject, 40) }}</td>
								<td><span class="badge bg-label-danger text-uppercase">High Priority</span></td>
								<td>{{ $ticket->created_at->diffForHumans() }}</td>
								<td><a href="#" class="btn btn-sm btn-icon"><i class="ti tabler-eye"></i></a></td>
							</tr>
						@empty
							<tr>
								<td colspan="6" class="py-6">
									<div class="d-flex align-items-center justify-content-center gap-2 text-muted">
										<i class="ti tabler-info-circle icon-28px"></i>
										<span class="fw-medium">There is no Open/Pending tickets</span>
									</div>
								</td>
							</tr>
						@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script>
		// لود کردن نرخ ارزها از PHP به JS
		const exchangeRates = @json($exchangeRates);

		document.addEventListener('DOMContentLoaded', function () {
			// Select2
			$(".select2").each(function () {
				$(this).select2({ dropdownParent: $(this).parent() });
			});

			// Time Picker
			const timePicker = flatpickr('#time-picker', {
				enableTime: true,
				noCalendar: true,
				dateFormat: "H:i",
				time_24hr: true,
				defaultDate: "12:00"
			});

			// Live Timezone Logic
			const calculateTime = () => {
				const time = $('#time-picker').val();
				const source = $('#source-tz').val();
				const dest = $('#dest-tz').val();

				if(time) {
					// استفاده از Moment برای جابجایی منطقه زمانی
					let sourceTime = moment.tz(time, "HH:mm", source);
					let destTime = sourceTime.clone().tz(dest);
					$('#converted-time').text(destTime.format("HH:mm"));
				}
			};

			// Live Currency Logic
			const calculateCurrency = () => {
				const amount = parseFloat($('#currency-amount').val()) || 0;
				const fromCode = $('#from-currency').val();
				const toCode = $('#to-currency').val();

				if (exchangeRates[fromCode] && exchangeRates[toCode]) {
					// تبدیل ابتدا به ارز پایه (Default) و سپس به ارز مقصد
					const amountInBase = amount / exchangeRates[fromCode];
					const result = amountInBase * exchangeRates[toCode];
					$('#currency-result').text(result.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + " " + toCode);
				}
			};

			// Events
			$('#time-picker, #source-tz, #dest-tz').on('change', calculateTime);
			$('#currency-amount, #from-currency, #to-currency').on('input change', calculateCurrency);

			// Initial Run
			calculateCurrency();
		});
	</script>
@endsection
