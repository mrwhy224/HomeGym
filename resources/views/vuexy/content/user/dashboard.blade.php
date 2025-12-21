@php
// کاربر جدید
$userName = auth()->user()->first_name ?? 'User';
$isNewUser = true; // این متغیر را برای کنترل نمایش بخش‌ها اضافه می‌کنیم

// کلاس آینده وجود ندارد
$upcomingClass = null; 

// نوتیفیکیشن‌های خوش‌آمدگویی به جای پیام‌های سیستمی
$hasNewCoachMessage = false;
$hasNewTicketReply = false;

// نمودار فقط با یک نقطه (وزن فعلی) یا خالی
$weightChartData = [
    'categories' => [now()->format('M d')],
    'series' => [60.0] 
];

$weightGoal = (object)['current' => 60.0, 'goal' => 0, 'unit' => 'kg'];
$scheduleData = []; // لیست کلاس‌ها خالی است
@endphp

@extends('layouts/layoutMaster')

@section('title', 'SepFit Academy')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss'
])
@endsection

@section('content')
<div class="row g-6 mb-6">
  <div class="col-lg-8">
    
    <div class="card mb-6 bg-label-primary border-0">
      <div class="card-body d-flex align-items-center justify-content-between">
        <div class="content-left">
          <h4 class="text-primary mb-1">Welcome to the Academy, {{ $userName }}! ✨</h4>
          <p class="mb-4">We're thrilled to have you here. Let's get your journey started with a few simple steps.</p>
          <div class="d-flex gap-3">
            <button class="btn btn-primary btn-sm">Complete Profile</button>
            <button class="btn btn-label-primary btn-sm">Browse Coaches</button>
          </div>
        </div>
        <div class="content-right d-none d-sm-block">
          <img src="{{ asset('assets/img/illustrations/wizard-create-deal-confirm.png') }}" height="140" alt="Welcome Illustration">
        </div>
      </div>
    </div>

    <div class="row g-4 mb-6">
        <div class="col-md-6">
            <div class="card border shadow-none">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar avatar-sm me-2">
                            <span class="avatar-initial rounded bg-label-info"><i class="ti tabler-user-edit"></i></span>
                        </div>
                        <h6 class="mb-0">Step 1: Set your Goal</h6>
                    </div>
                    <p class="small text-muted mb-3">Define your target weight and fitness level to get a personalized plan.</p>
                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-info w-100">Set Goal</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border shadow-none">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar avatar-sm me-2">
                            <span class="avatar-initial rounded bg-label-success"><i class="ti tabler-calendar-plus"></i></span>
                        </div>
                        <h6 class="mb-0">Step 2: Book First Session</h6>
                    </div>
                    <p class="small text-muted mb-3">Your first consultation is the key to success. Pick a coach today.</p>
                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-success w-100">Book Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-header border-bottom d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0">My Upcoming Schedule</h5>
      </div>
      <div class="card-body text-center py-12">
        <div class="avatar avatar-xl bg-label-secondary mx-auto mb-4">
            <i class="ti tabler-calendar-off icon-48px"></i>
        </div>
        <h5>No classes booked yet</h5>
        <p class="text-muted mb-6">Once you book a session with a coach, it will appear here.</p>
        <button class="btn btn-primary">
            <i class="ti tabler-search me-1"></i> Find a Coach
        </button>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    
    <div class="card mb-6">
      <div class="card-body text-center">
        <div class="bg-label-primary rounded-3 pt-6 mb-4">
          <img class="img-fluid" src="{{ asset('assets/img/illustrations/page-misc-under-maintenance.png') }}" alt="Empty class" width="140" />
        </div>
        <h5 class="mb-2">Your Agenda is Clear</h5>
        <p class="small text-muted mb-4">You don't have any classes scheduled for the next 24 hours.</p>
      <div class="alert alert-warning d-flex align-items-center text-start" role="alert">
         
          <small>Don't fall behind! Regular sessions help you reach your goals faster.</small>
      </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0">Weight Goal</h5>
      </div>
      <div class="card-body text-center">
        <div class="avatar avatar-xl bg-label-primary mx-auto mb-4" style="width: 80px; height: 80px;">
            <i class="ti tabler-target-arrow icon-48px mt-3"></i>
        </div>
        <h5 class="mb-2">Set your target</h5>
        <p class="text-muted small">Establish your starting point and where you want to go to track progress effectively.</p>
        <div class="bg-lighter p-3 rounded mb-4">
            <h4 class="mb-0 text-primary">{{ $weightGoal->current }} {{ $weightGoal->unit }}</h4>
            <small>Current Weight</small>
        </div>
        <button class="btn btn-label-primary w-100" data-bs-toggle="modal" data-bs-target="#logWeightModal">
            Configure Goal
        </button>
      </div>
    </div>

  </div>
</div>
@endsection