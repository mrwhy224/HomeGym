@extends('layouts/layoutMaster')

@section('title', 'Admin Management Dashboard')

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

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
<div class="row g-6">
  <div class="col-lg-8 col-12">
    <div class="card h-100">
      <div class="card-body d-flex align-items-center justify-content-between">
        <div class="content-left">
          <h4 class="card-title mb-1">Welcome back, Administrator! 🚀</h4>
          <p class="mb-4">System performance is optimal today. You have <span class="fw-bold text-primary">12 pending tickets</span> and <span class="fw-bold text-primary">5 coach applications</span> to review.</p>
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
          <h5 class="card-title mb-0">Monthly Revenue</h5>
          <span class="badge bg-label-success">+12.4%</span>
        </div>
        <h3 class="mb-1">$24,850.00</h3>
        <small class="text-muted">Total earnings from coach subscriptions</small>
        <div id="revenueGrowthChart" class="mt-2"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class="ti tabler-users icon-24px"></i></span>
          </div>
          <h4 class="mb-0">1,284</h4>
        </div>
        <p class="mb-1">Active Customers</p>
        <small class="text-success fw-medium"><i class="ti tabler-arrow-up"></i> 8.2%</small>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-info"><i class="ti tabler-school icon-24px"></i></span>
          </div>
          <h4 class="mb-0">142</h4>
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
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-warning"><i class="ti tabler-ticket icon-24px"></i></span>
          </div>
          <h4 class="mb-0">86</h4>
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
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-success"><i class="ti tabler-messages icon-24px"></i></span>
          </div>
          <h4 class="mb-0">432</h4>
        </div>
        <p class="mb-1">Monitored Chats</p>
        <small class="text-muted">Last 24 Hours</small>
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
            <label class="form-label">Source Timezone</label>
            <select id="source-tz" class="select2 form-select">
              <option value="UTC" selected>System Default (UTC)</option>
              <option value="America/New_York">New York (EST)</option>
              <option value="Europe/London">London (GMT)</option>
              <option value="Asia/Tehran">Tehran (IRST)</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">Destination Timezone</label>
            <select id="dest-tz" class="select2 form-select">
              <option value="America/New_York" selected>New York (EST)</option>
              <option value="Europe/London">London (GMT)</option>
              <option value="Asia/Tokyo">Tokyo (JST)</option>
              <option value="Australia/Sydney">Sydney (AEST)</option>
            </select>
          </div>
          <div class="col-12">
            <div class="bg-label-primary p-4 rounded text-center">
              <small class="d-block mb-1 text-uppercase">Converted Time</small>
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
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" id="currency-amount" class="form-control" placeholder="0.00">
            </div>
          </div>
          <div class="col-md-6">
            <label class="form-label">From</label>
            <select id="from-currency" class="select2 form-select">
              <option value="USD" selected>USD - US Dollar</option>
              <option value="EUR">EUR - Euro</option>
              <option value="GBP">GBP - British Pound</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">To</label>
            <select id="to-currency" class="select2 form-select">
              <option value="EUR" selected>EUR - Euro</option>
              <option value="USD">USD - US Dollar</option>
              <option value="GBP">GBP - British Pound</option>
            </select>
          </div>
          <div class="col-12">
            <div class="bg-label-success p-4 rounded text-center">
              <small class="d-block mb-1 text-uppercase">Exchange Result</small>
              <h3 class="mb-0" id="currency-result">0.00</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Recent High Priority Tickets</h5>
        <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary">View All</a>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>User</th>
              <th>Subject</th>
              <th>Status</th>
              <th>Local Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#TK-882</td>
              <td>Emily Blunt</td>
              <td>Payment issue at checkout</td>
              <td><span class="badge bg-label-danger">Urgent</span></td>
              <td>05:12 PM</td>
              <td><button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-eye"></i></button></td>
            </tr>
            <tr>
              <td>#TK-885</td>
              <td>Robert Downey</td>
              <td>Profile verification pending</td>
              <td><span class="badge bg-label-warning">In Progress</span></td>
              <td>09:30 AM</td>
              <td><button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-eye"></i></button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Select2 Initialization
    if ($(".select2").length) {
      $(".select2").each(function () {
        $(this).select2({ dropdownParent: $(this).parent() });
      });
    }

    // Flatpickr Initialization (Time Only)
    const timePicker = document.querySelector('#time-picker');
    if (timePicker) {
      timePicker.flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true,
        defaultDate: moment().format("HH:mm")
      });
    }

    // UI Logic Placeholders
    const updateTime = () => {
      const time = $('#time-picker').val();
      if(time) $('#converted-time').text(time + " (EST)");
    };

    const updateCurrency = () => {
      const amt = $('#currency-amount').val();
      if(amt) $('#currency-result').text((amt * 0.92).toFixed(2) + " EUR");
    };

    $('#time-picker, #source-tz, #dest-tz').on('change', updateTime);
    $('#currency-amount, #from-currency, #to-currency').on('input change', updateCurrency);
  });
</script>
@endsection
