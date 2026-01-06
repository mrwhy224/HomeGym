@extends('layouts/layoutMaster')

@section('title', 'Class Attendance - ' . $activity->package->name)

@section('content')
<div class="d-flex flex-column flex-sm-row align-items-center justify-content-between mb-6 gap-3">
    <div>
        <h4 class="mb-1">Students in {{ $activity->package->name }}</h4>
        <p class="mb-0">Manage attendance and enrollment details for this session.</p>
    </div>
    <div class="d-flex gap-3">
        <a href="{{ route('admin.classes.show', $activity->id) }}" class="btn btn-label-primary">
            <i class="ti tabler-eye me-1"></i> View Details
        </a>
        <a href="{{ route('admin.classes.list') }}" class="btn btn-label-secondary">
            <i class="ti tabler-arrow-left me-1"></i> Back
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Enrolled Students List</h5>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Enrollment Date</th>
                    <th>Attendance Status</th>
                    <th class="text-center">Progress</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse($activity->bookings as $booking)
                @php
                    $attendedCount = $booking->sessions->where('status', 'attended')->count();
                    $percentage = $totalSessions > 0 ? ($attendedCount / $totalSessions) * 100 : 0;
                @endphp
                <tr>
                    <td>
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="avatar avatar-sm me-3">
                                @if($booking->user->avatar_url)
                                    <img src="{{ asset($booking->user->avatar_url) }}" class="rounded-circle">
                                @else
                                    <span class="avatar-initial rounded-circle bg-label-primary">{{ substr($booking->user->name, 0, 2) }}</span>
                                @endif
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-medium text-heading">{{ $booking->user->name }}</span>
                                <small class="text-muted">{{ $booking->user->email }}</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="text-body">{{ $booking->created_at->format('M d, Y') }}</span>
                    </td>
                    <td>
                        <span class="badge bg-label-info">
                            {{ $attendedCount }} / {{ $totalSessions }} Sessions
                        </span>
                    </td>
                    <td class="text-center" style="min-width: 150px;">
                        <div class="d-flex align-items-center gap-2">
                            <div class="progress w-100" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>{{ round($percentage) }}%</small>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-5">
                        <div class="text-muted">No students enrolled in this class yet.</div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection