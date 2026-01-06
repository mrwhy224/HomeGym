@extends('layouts/layoutMaster')

@section('title', 'Class Details - ' . $activity->package->name)

@section('content')
<div class="d-flex flex-column flex-sm-row align-items-center justify-content-between mb-6 gap-3">
    <div>
        <h4 class="mb-1">Class: {{ $activity->package->name }}</h4>
        <p class="mb-0">Full overview of sessions, timing, and attendance.</p>
    </div>
    <div class="d-flex gap-3">
        <a href="{{ route('admin.classes.attendance', $activity->id) }}" class="btn btn-label-primary">
            <i class="ti tabler-users me-1"></i> Manage Attendance
        </a>
        <a href="{{ route('admin.classes.list') }}" class="btn btn-label-secondary">
            <i class="ti tabler-arrow-left me-1"></i> Back
        </a>
    </div>
</div>

<div class="row g-6 mb-6">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Total Sessions</span>
                        <h4 class="mb-0">{{ $stats['total_sessions'] }}</h4>
                    </div>
                    <div class="avatar"><span class="avatar-initial rounded bg-label-primary"><i class="ti tabler-calendar-event"></i></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Completed</span>
                        <h4 class="mb-0 text-success">{{ $stats['completed_sessions'] }}</h4>
                    </div>
                    <div class="avatar"><span class="avatar-initial rounded bg-label-success"><i class="ti tabler-circle-check"></i></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Students</span>
                        <h4 class="mb-0">{{ $stats['total_enrolled'] }}</h4>
                    </div>
                    <div class="avatar"><span class="avatar-initial rounded bg-label-info"><i class="ti tabler-users"></i></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Canceled</span>
                        <h4 class="mb-0 text-danger">{{ $stats['canceled_sessions'] }}</h4>
                    </div>
                    <div class="avatar"><span class="avatar-initial rounded bg-label-danger"><i class="ti tabler-x"></i></span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Session Schedules</h5>
        <div class="d-flex align-items-center">
            <div class="me-3">
                <small class="text-muted d-block">Instructor</small>
                <span class="fw-medium">{{ $activity->coach->name }}</span>
            </div>
            <div class="avatar avatar-sm">
                <x-user-avatar :user="$activity->coach" />
            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date & Time</th>
                    <th>Status</th>
                    <th>Attendance</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($activity->sessions as $index => $session)
                <tr>
                    <td><strong>{{ $index + 1 }}</strong></td>
                    <td>
                        <div class="d-flex flex-column">
                            <span class="text-heading fw-medium">{{ \Carbon\Carbon::parse($session->scheduled_at)->formatUser('M d, Y') }}</span>
                            <small class="text-muted">{{ \Carbon\Carbon::parse($session->start_at)->formatUser('H:i') }} - {{ \Carbon\Carbon::parse($session->end_at)->formatUser('H:i') }}</small>
                        </div>
                    </td>
                    <td>
                        @if($session->status === 'completed')
                            <span class="badge bg-label-success">Held</span>
                        @elseif($session->status === 'canceled')
                            <span class="badge bg-label-danger">Canceled</span>
                        @else
                            <span class="badge bg-label-info">Scheduled</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <span class="me-2">{{ $session->attended_count }} / {{ $stats['total_enrolled'] }}</span>
                            <div class="progress w-px-75" style="height: 6px;">
                                @php 
                                    $attPercent = $stats['total_enrolled'] > 0 ? ($session->attended_count / $stats['total_enrolled']) * 100 : 0;
                                @endphp
                                <div class="progress-bar bg-success" style="width: {{ $attPercent }}%"></div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill" data-bs-toggle="dropdown"><i class="ti tabler-dots-vertical"></i></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="ti tabler-check me-1"></i> Mark as Held</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="ti tabler-edit me-1"></i> Reschedule</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="javascript:void(0);"><i class="ti tabler-ban me-1"></i> Cancel Session</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection