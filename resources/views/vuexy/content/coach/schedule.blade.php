@extends('layouts/layoutMaster')

@section('title', 'My Weekly Schedule')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Weekly Availability Setup</h5>
      </div>
      <div class="card-body">
        <div class="row">
          @for($i = 0; $i <= 6; $i++)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="p-4 border rounded bg-light">
                <h6 class="fw-bold mb-3 d-flex align-items-center">
                  <i class="ti tabler-calendar-week me-2 text-primary"></i>
                  {{ \App\Models\CoachSchedule::getDayName($i) }}
                </h6>
                <div class="d-flex flex-wrap gap-2">
                  @if(isset($schedules[$i]))
                    @foreach($schedules[$i] as $slot)
                      <div class="badge bg-label-primary d-flex align-items-center p-2">
                        {{ \Carbon\Carbon::parse($slot->start_time)->formatUser('H:i') }} -
                        {{ \Carbon\Carbon::parse($slot->end_time)->formatUser('H:i') }}
                        <i class="ti tabler-x ms-2 cursor-pointer btn-delete-slot" data-id="{{ $slot->id }}"></i>
                      </div>
                    @endforeach
                  @else
                    <small class="text-muted">No slots defined</small>
                  @endif
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0"><i class="ti tabler-plus me-2"></i>Add New Availability Slot</h5>
      </div>
      <div class="card-body">
        <form id="formAddSchedule">
          @csrf
          <div class="row align-items-end">
            <div class="col-md-4 mb-3">
              <label class="form-label">Day of Week</label>
              <select name="day_of_week" class="form-select">
                @for($i = 0; $i <= 6; $i++)
                  <option value="{{ $i }}">{{ \App\Models\CoachSchedule::getDayName($i) }}</option>
                @endfor
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">Start Time</label>
              <input type="text" name="start_time" id="start_time" class="form-control flatpickr-time" placeholder="HH:MM" required>
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label">End Time</label>
              <input type="text" name="end_time" id="end_time" class="form-control flatpickr-time" placeholder="HH:MM" required>
            </div>
            <div class="col-md-2 mb-3">
              <button type="submit" class="btn btn-primary w-100 btn-save">
                <i class="ti tabler-check me-1"></i> Save Slot
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('vendor-style')
    @vite([
        'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
        'resources/assets/vendor/libs/notyf/notyf.scss',
        'resources/assets/vendor/libs/animate-css/animate.scss'
    ])
@endsection

@section('vendor-script')
    @vite([
        'resources/assets/vendor/libs/flatpickr/flatpickr.js',
        'resources/assets/vendor/libs/notyf/notyf.js'
    ])
@endsection

@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // تنظیمات فلت‌پیکر (ساده‌تر شد چون دیگر داخل مودال نیست)
    const fpConfig = {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true,
        allowInput: true // اجازه تایپ دستی هم می‌دهد
    };

    // مقداردهی اینپوت‌ها
    flatpickr(".flatpickr-time", fpConfig);

    // مقداردهی Notyf
    const notyf = new Notyf({
        position: { x: 'right', y: 'top' },
        types: [{ type: 'success', background: '#28c76f', icon: { className: 'ti tabler-circle-check text-white', tagName: 'i' } }]
    });

    // ثبت بازه جدید
    $('#formAddSchedule').on('submit', function(e) {
        e.preventDefault();
        const btn = $('.btn-save');
        const originalText = btn.html();

        btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-1"></span> Saving...');

        $.ajax({
            url: "{{ route('coach.schedule.store') }}", // حتما روت درست را جایگزین کنید
            method: 'POST',
            data: $(this).serialize(),
            success: function(res) {
                notyf.success(res.message || 'Slot added successfully');
                setTimeout(() => location.reload(), 800);
            },
            error: function(xhr) {
                const errorMsg = xhr.responseJSON?.message || 'Error occurred';
                notyf.error(errorMsg);
                btn.prop('disabled', false).html(originalText);
            }
        });
    });

    // حذف بازه
    $('.btn-delete-slot').on('click', function() {
        if(!confirm('Are you sure you want to delete this slot?')) return;
        const id = $(this).data('id');
        const badge = $(this).closest('.badge');

        $.ajax({
            url: route('coach.api.schedule.delete', {'id':id}),
            method: 'POST',
            data: { _token: "{{ csrf_token() }}" },
            success: function(res) {
                notyf.success(res.message);
                badge.addClass('animate__animated animate__fadeOut');
                setTimeout(() => badge.remove(), 500);
            },
            error: function() {
                notyf.error("Failed to delete the slot.");
            }
        });
    });
});
</script>
@endsection
