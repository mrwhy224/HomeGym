@extends('layouts/layoutMaster')
@section('title', 'Private Class Requests')

@section('content')
<div class="card">
    <div class="card-datatable table-responsive">
        <table class="table border-top">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Coach</th>
                    <th>Sessions/Week</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requests as $request)
                @php
                    $details = is_array($request->requested_time) ? $request->requested_time : json_decode($request->requested_time, true);
                @endphp
                <tr>
                    <td>
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="d-flex flex-column">
                                <span class="fw-medium text-heading">{{ $request->user->name }}</span>
                                <small class="text-muted">{{ $request->user->email }}</small>
                            </div>
                        </div>
                    </td>
                    <td>{{ $request->coach->name }}</td>
                    <td><span class="badge bg-label-primary">{{ $details['sessions_per_week'] ?? '-' }} Sessions</span></td>
                    <td>
                        <span class="badge @if($request->status == 'pending') bg-label-warning @elseif($request->status == 'approved') bg-label-success @else bg-label-danger @endif">
                            {{ ucfirst($request->status) }}
                        </span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill view-slots-btn"
                                    data-sessions="{{ $details['sessions_per_week'] ?? 0 }}"
                                    data-slots='@json($details['slots'] ?? [])'
                                    data-user-name="{{ $request->user->name }}">
                                <i class="ti tabler-calendar-time"></i>
                            </button>
							@if($request->status !== 'approved')
								<a href="{{ route('admin.booking.process', ['id'=>$request->id]) }}" class="btn btn-sm btn-icon btn-text-secondary rounded-pill"><i class="ti tabler-eye"></i></a>
							@endif

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="viewSlotsModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom">
        <h5 class="modal-title">Schedule Details: <span id="modalUserName" class="text-primary"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="d-flex justify-content-between align-items-center mb-4 bg-label-primary p-3 rounded">
              <span class="fw-medium">Intensity:</span>
              <span class="badge bg-primary" id="modalIntensity">-- Sessions / Week</span>
          </div>

          <h6 class="mb-3 border-bottom pb-2">Selected Time Slots:</h6>
          <div class="table-responsive">
              <table class="table table-sm table-borderless">
                  <thead class="table-light">
                      <tr>
                          <th>Day</th>
                          <th class="text-center">Time Range</th>
                      </tr>
                  </thead>
                  <tbody id="modalSlotsBody">
                      </tbody>
              </table>
          </div>
      </div>
      <div class="modal-footer border-top">
        <button type="button" class="btn btn-label-secondary w-100" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const dayNames = {
        0: 'Saturday', 1: 'Sunday', 2: 'Monday',
        3: 'Tuesday', 4: 'Wednesday', 5: 'Thursday', 6: 'Friday'
    };

    $('.view-slots-btn').on('click', function() {
        const userName = $(this).data('user-name');
        const sessions = $(this).data('sessions');
        let slots = $(this).data('slots');

        // ۱. تنظیم اطلاعات هدر
        $('#modalUserName').text(userName);
        $('#modalIntensity').text(sessions + ' Sessions / Week');

        // ۲. مرتب‌سازی اسلات‌ها (ابتدا روز، بعد ساعت شروع)
        slots.sort((a, b) => {
            if (a.day !== b.day) return a.day - b.day;
            return a.start.localeCompare(b.start);
        });

        // ۳. ساختن ردیف‌های جدول مدال
        let html = '';
        if (slots.length > 0) {
            slots.forEach(slot => {
                html += `
                <tr class="border-bottom">
                    <td class="py-2">
                        <span class="fw-bold text-heading">${dayNames[slot.day] || 'Unknown'}</span>
                    </td>
                    <td class="text-center py-2">
                        <span class="badge bg-label-info px-3">
                            <i class="ti tabler-clock-hour-4 me-1 icon-xs"></i>
                            ${slot.start} - ${slot.end}
                        </span>
                    </td>
                </tr>`;
            });
        } else {
            html = '<tr><td colspan="2" class="text-center text-muted py-4">No slots defined</td></tr>';
        }

        // ۴. تزریق به مدال و نمایش
        $('#modalSlotsBody').html(html);
        $('#viewSlotsModal').modal('show');
    });
});
</script>
@endsection
