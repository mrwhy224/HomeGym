@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Manage Classes')

@section('vendor-style')
@vite([
    'resources/assets/vendor/libs/select2/select2.scss',
    'resources/assets/vendor/libs/notyf/notyf.scss', // اضافه شد
    'resources/assets/vendor/libs/animate-css/animate.scss'
])
@endsection

@section('vendor-script')
@vite([
    'resources/assets/vendor/libs/select2/select2.js',
    'resources/assets/vendor/libs/notyf/notyf.js' // اضافه شد
])
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-6">
    <div>
        <h4 class="mb-1">Available Classes</h4>
        <p class="mb-0">Overview of all active and upcoming educational sessions.</p>
    </div>
    <a href="{{ route('admin.classes.create') }}" class="btn btn-primary">
        <i class="ti tabler-plus me-1"></i> Create New Class
    </a>
</div>

<div class="card mb-6">
    <div class="card-body">
        <form action="{{ request()->url() }}" method="GET" class="row g-4">
            <div class="col-md-4">
                <label class="form-label">Search Class</label>
                <input type="text" name="search" class="form-control" placeholder="Name, keyword..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <label class="form-label">Instructor</label>
                <select name="instructor" class="select2 form-select">
                    <option value="">All Instructors</option>
                    @foreach($instructors as $instructor)
                        <option value="{{ $instructor->id }}" {{ request('instructor') == $instructor->id ? 'selected' : '' }}>{{ $instructor->user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 d-flex align-items-end gap-2">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
                <a href="{{ request()->url() }}" class="btn btn-label-secondary w-100">Reset</a>
            </div>
        </form>
    </div>
</div>

<div class="row g-6">
    @forelse ($activities as $activity)
    @php
        $totalSessions = $activity->sessions->count();
        $completedSessions = $activity->sessions->where('status', 'completed')->count();

        if ($totalSessions > 0 && $completedSessions === $totalSessions) {
            $currentStatus = 'Finished';
            $statusBadge = 'bg-label-success';
        } elseif ($completedSessions > 0) {
            $currentStatus = 'Ongoing';
            $statusBadge = 'bg-label-warning';
        } else {
            $currentStatus = 'Scheduled';
            $statusBadge = 'bg-label-info';
        }

        $fillPercentage = ($activity->package->capacity > 0) ? ($activity->remaining_capacity / $activity->package->capacity) * 100 : 0;
        $fillPercentage = 100 - $fillPercentage;
        $statusColor = $activity->status === 'active' ? 'success' : 'warning';
    @endphp
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card h-100"><span class="badge {{ $statusBadge }} text-capitalize" style="border-radius: 5px 5px 0 0">{{ $currentStatus }}</span>
            <div class="card-body position-relative">
                    
                <div class="dropdown position-absolute top-0 end-0 mt-4 me-2">
                    <div class="dropstart">
                        <button class="btn p-0" 
            type="button" 
            data-bs-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
        <i class="ti tabler-dots-vertical ti-md text-muted"></i>
    </button>
                        <div class="dropdown-menu dropdown-menu-start">
                            <a class="dropdown-item" href="{{ route('admin.classes.show', ['activity'=>$activity->id]) }}"><i class="ti tabler-eye me-1"></i> View Details</a>
                            <a class="dropdown-item" href="#"><i class="ti tabler-edit me-1"></i> Edit Class</a>
                            <a class="dropdown-item" href="{{ route('admin.classes.attendance', ['activity'=>$activity->id]) }}"><i class="ti tabler-users me-1"></i> Manage Attendance</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger delete-record" href="javascript:void(0);"><i class="ti tabler-trash me-1"></i> Delete</a>
                        </div>
                    </div>
                </div>
                
                <h5 class="mb-1">{{ $activity->package->name }} <span class="small">({{ count($activity->sessions) }} Sessions)</span></h5>
                
                <div class="d-flex align-items-center mb-4">
                    <div class="avatar avatar-sm me-3">
                        <x-user-avatar :user="$activity->coach" />
                    </div>
                    <span class="text-body fw-medium">{{ $activity->coach->name ?? 'Unassigned' }}</span>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <small>Capacity: {{ $activity->package->capacity - $activity->remaining_capacity }}/{{ $activity->package->capacity }}</small>
                        <small>{{ round($fillPercentage) }}% Full</small>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar {{ $fillPercentage > 90 ? 'bg-danger' : 'bg-primary' }}" 
                             role="progressbar" 
                             style="width: {{ $fillPercentage }}%" 
                             aria-valuenow="{{ $fillPercentage }}" 
                             aria-valuemin="0" 
                             aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center border-top pt-4">
                    <div>
                        <h6 class="mb-0 text-primary">{{ number_format($activity->package->price) }} {{ $baseCurrency->symbol }}</h6>
                        <small class="text-muted">Total Cost</small>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-label-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal{{ $activity->id }}">
                            <i class="ti tabler-user-plus me-1"></i> Add User
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('_partials/_modals/modal-add-user-to-class', ['activity' => $activity])
    @empty
    <div class="col-12 text-center py-12">
        <i class="ti tabler-school ti-xl mb-3 text-muted"></i>
        <h5>No classes found</h5>
        <p>Try adjusting your filters or create a new class.</p>
    </div>
    @endforelse
</div>

<div class="d-flex justify-content-center mt-6">
    {{ $activities->links() }}
</div>

@endsection

@section('page-script')
<script>
    // استفاده از رویداد Window Load برای اطمینان از لود شدن تمام کتابخانه‌ها
    window.addEventListener('load', function () {
        if (typeof jQuery === 'undefined') {
            return;
        }

        // استفاده از کلمه jQuery به جای $ برای اطمینان ۱۰۰٪
        const $ = jQuery;


        $(document).on('shown.bs.modal', '.modal', function () {
            var modal = $(this);
            var selectElement = modal.find('.select2-ajax');

            if (selectElement.length > 0 && !selectElement.hasClass("select2-hidden-accessible")) {
                selectElement.select2({
                    placeholder: 'Search for a user...',
                    dropdownParent: modal,
                    ajax: {
                        url: '{{ route("admin.api.users.search") }}',
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return { q: params.term };
                        },
                        processResults: function (data) {
                            return {
                                results: $.map(data.data, function (item) {
                                    return {
                                        text: item.text,
                                        id: item.id
                                    }
                                })
                            };
                        }
                    }
                });
            }
        });
        let notyf;

        // ۱. تنظیمات گرافیکی Notyf مشابه صفحه لاگین شما
        if (typeof Notyf !== 'undefined') {
            notyf = new Notyf({
                duration: 4000,
                ripple: true,
                position: { x: 'right', y: 'top' },
                dismissible: true,
                types: [
                    {
                        type: 'success',
                        background: '#28c76f', // Vuexy Success
                        icon: { className: 'ti tabler-circle-check text-white', tagName: 'i' }
                    },
                    {
                        type: 'error',
                        background: '#ea5455', // Vuexy Error
                        icon: { className: 'ti tabler-x text-white', tagName: 'i' }
                    }
                ]
            });
        }

        // ۲. مدیریت ارسال فرم مودال با AJAX
        $(document).on('submit', '.enroll-user-form', function (e) {
            e.preventDefault();

            const form = $(this);
            const submitBtn = form.find('.btn-submit');
            const originalBtnText = submitBtn.html();
            const activityId = form.data('activity-id');

            // غیرفعال کردن دکمه و نمایش لودینگ
            submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-1"></span>');

            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: form.serialize(),
                success: function (response) {
                    // نمایش پیام موفقیت با Notyf
                    if (notyf) notyf.success(response.message);

                    // بستن مودال
                    $(`#addUserModal${activityId}`).modal('hide');
                    
                    // ریست فرم
                    form[0].reset();
                    form.find('.select2-ajax').val(null).trigger('change');

                    // بروزرسانی UI (اختیاری)
                    // if(response.remaining !== undefined) { ... }
                },
                error: function (xhr) {
                    let message = 'An error occurred while enrolling the user.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    }
                    
                    // نمایش پیام خطا با Notyf
                    if (notyf) notyf.error(message);
                },
                complete: function () {
                    submitBtn.prop('disabled', false).html(originalBtnText);
                }
            });
        });
    });
</script>
@endsection