@php
// --- این متغیرها باید از کنترلر شما ارسال شوند ---
// $userName = Auth::user()->first_name ?? 'User';
// ... (سایر متغیرها مانند قبل) ...

// --- مقادیر پیش‌فرض برای تست ---
$userName = $userName ?? 'Felecia';
$upcomingClass = $upcomingClass ?? (object)[
    'title' => 'Private Laravel Session',
    'coach_name' => 'John Doe',
    'coach_avatar' => asset('assets/img/avatars/1.png'),
    'date' => 'Nov 10, 2025',
    'time' => '14:30 - 16:30'
];
$hasNewCoachMessage = $hasNewCoachMessage ?? true;
$hasNewTicketReply = $hasNewTicketReply ?? true;
$weightChartData = $weightChartData ?? [
    'categories' => ['Oct 1', 'Oct 8', 'Oct 15', 'Oct 22', 'Oct 29', 'Nov 5'],
    'series' => [88, 87, 87.5, 86, 85, 85.5]
];
$weightGoal = $weightGoal ?? (object)['current' => 85.5, 'goal' => 80, 'unit' => 'kg'];
$weightProgressPercent = $weightGoal->goal > 0 ? max(0, min(100, (($weightGoal->current - $weightGoal->goal) / $weightGoal->goal) * 100)) : 0;
$scheduleData = $scheduleData ?? [
    (object)['id' => 1, 'coach_name' => 'Jane Smith', 'class_title' => 'Public Yoga Class', 'datetime' => '2025-11-12 09:00:00', 'status' => 'Confirmed', 'status_color' => 'success'],
    (object)['id' => 2, 'coach_name' => 'John Doe', 'class_title' => 'Private Laravel Session', 'datetime' => '2025-11-15 14:00:00', 'status' => 'Confirmed', 'status_color' => 'success'],
    (object)['id' => 3, 'coach_name' => 'Michael Lee', 'class_title' => 'Private Fitness', 'datetime' => '2025-11-18 10:00:00', 'status' => 'Pending Coach', 'status_color' => 'warning'],
];
@endphp

@extends('layouts/layoutMaster')

@section('title', 'User Dashboard')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/apex-charts/apexcharts.js'
])
@endsection

@section('page-script')
@vite(['resources/assets/js/user/app-dashboard.js'])
@endsection

@section('content')

<div class="row g-6 mb-6">

  <div class="col-lg-8">
    
    <div class="card mb-6">
      <div class="card-body">
        <h5 class="mb-2">Welcome back, <span class="h4">{{ $userName }}! 👋🏻</span></h5>
        <p class="mb-5">Here's what's happening with your account today.</p>

        @if($hasNewCoachMessage)
        <div class="alert alert-info d-flex align-items-center" role="alert">
          <span class="alert-icon rounded-3 text-info me-4">
            <i class="icon-base ti tabler-message-2 ti-md"></i>
          </span>
          <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="mb-1 mb-sm-0 me-4">
              <h6 class="alert-heading mb-1">New message from your coach!</h6>
              <span>You have unread messages in your inbox.</span>
            </div>
            <a href="{{-- route('user.messages.inbox') --}}" class="btn btn-sm btn-info">View Messages</a>
          </div>
        </div>
        @endif

        @if($hasNewTicketReply)
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <span class="alert-icon rounded-3 text-success me-4">
            <i class="icon-base ti tabler-ticket ti-md"></i>
          </span>
          <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
            <div class="mb-1 mb-sm-0 me-4">
              <h6 class="alert-heading mb-1">Your support ticket has a reply!</h6>
              <span>Ticket #2025-101 has been updated.</span>
            </div>
            <a href="{{-- route('user.support.tickets') --}}" class="btn btn-sm btn-success">View Ticket</a>
          </div>
        </div>
        @endif
      </div>
    </div>

    <div class="card mb-6">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Weight Progress</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="weightProgressDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-22px text-body-secondary"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weightProgressDropdown">
            <a class="dropdown-item" href="javascript:void(0);">Last 30 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last 90 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">All Time</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="weightProgressChart" data-chart-data="{{ json_encode($weightChartData) }}" data-unit="{{ $weightGoal->unit }}"></div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h5 class="card-title m-0">My Upcoming Schedule</h5>
      </div>
      <div class="card-datatable table-responsive">
        <table class="datatables-user-schedule table">
          <thead class="border-top">
            <tr>
              <th>Coach</th>
              <th>Class</th>
              <th>Date & Time</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($scheduleData as $booking)
            <tr>
              <td class="d-flex align-items-center">
                {{-- <div class="avatar avatar-sm me-3">
                  <img src="{{ $booking->coach_avatar ?? asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle">
                </div> --}}
                <div class="d-flex flex-column">
                  <span class="fw-medium text-heading">{{ $booking->coach_name }}</span>
                  {{-- <small class="text-body-secondary">Yoga Expert</small> --}}
                </div>
              </td>
              <td>{{ $booking->class_title }}</td>
              <td>{{ \Carbon\Carbon::parse($booking->datetime)->format('M d, Y, H:i') }}</td>
              <td><span class="badge bg-label-{{ $booking->status_color }}">{{ $booking->status }}</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <a href="javascript:;" class="text-body"><i class="icon-base ti tabler-eye ti-sm me-2"></i></a>
                  <a href="javascript:;" class="text-body"><i class="icon-base ti tabler-message-circle ti-sm me-2"></i></a>
                  <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="icon-base ti tabler-dots-vertical ti-sm"></i></a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="javascript:;" class="dropdown-item">Cancel Booking</a>
                    <a href="javascript:;" classs="dropdown-item">Reschedule</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>



  </div>
  <div class="col-lg-4">
    
    <div class="card mb-6">
      <div class="card-body">
        <div class="bg-label-primary rounded-3 text-center mb-4 pt-6">
          <img class="img-fluid" src="{{ asset('assets/img/illustrations/page-misc-launching-soon.png') }}" alt="Card girl image" width="140" />
        </div>
        <h5 class="mb-2">Your Next Class</h5>
        <p class="small">
          Your upcoming private session with <span class="fw-bold">{{ $upcomingClass->coach_name }}</span> is about to start.
        </p>
        <div class="row mb-4 g-3">
          <div class="col-6">
            <div class="d-flex align-items-center">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"><i class="icon-base ti tabler-calendar-event icon-28px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">{{ $upcomingClass->date }}</h6>
                <small>Date</small>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"><i class="icon-base ti tabler-clock icon-28px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">{{ $upcomingClass->time }}</h6>
                <small>Time</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <a href="{{-- route('user.bookings.show', $upcomingClass->id ?? 1) --}}" class="btn btn-primary w-100 d-grid">Join Class</a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Weight Goal</h5>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logWeightModal">Log Weight</a>
      </div>
      <div class="card-body d-flex flex-column justify-content-center align-items-center">
        <div id="weightGoalChart" data-progress="{{ $weightProgressPercent }}"></div>
        <h5 class="mb-2 mt-4">{{ $weightGoal->current }} <span class="text-body-secondary">{{ $weightGoal->unit }}</span></h5>
        <p class="text-muted">Goal: {{ $weightGoal->goal }} {{ $weightGoal->unit }}</p>
        <p class="text-center">You're <span class="fw-bold">{{ abs($weightGoal->current - $weightGoal->goal) }} {{ $weightGoal->unit }}</span> away from your goal. Keep it up!</p>
      </div>
    </div>

  </div>
  </div>


<div class="modal fade" id="logWeightModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log New Weight</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="logWeightForm" onsubmit="return false">
          <label for="newWeight" class="form-label">Enter your current weight ({{ $weightGoal->unit }})</label>
          <input type="number" id="newWeight" name="newWeight" class="form-control" placeholder="e.g., 85.0">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Weight</button>
      </div>
    </div>
  </div>
</div>
@endsection