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
                        {{ strtoupper($activity->package->type) }}
                    </span>
                    <h5 class="text-primary mb-0">{{ $activity->package->getPrice() }}</h5>
                </div>
                
                <a href="{{ url('course/') }}" class="h5 mt-2 d-block">{{ $activity->package->name }}</a>

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
                        <button class="btn btn-primary w-100">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection