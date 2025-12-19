@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Booking Management')

@section('vendor-style')
@vite([
    'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
    'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
    'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
    'resources/assets/vendor/libs/@form-validation/form-validation.scss',
    'resources/assets/vendor/libs/select2/select2.scss',
    'resources/assets/vendor/libs/flatpickr/flatpickr.scss'
])
@endsection

@section('vendor-script')
@vite([
    'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/popular.js',
    'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/auto-focus.js',
    'resources/assets/vendor/libs/select2/select2.js',
    'resources/assets/vendor/libs/flatpickr/flatpickr.js'
])
@endsection

@section('page-script')
{{-- فایل JS مربوط به هندل کردن دیتاتیبل رزروها --}}
@vite(['resources/assets/js/admin/app-booking-management.js'])
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-6">
    <h4 class="mb-1">Booking Management</h4>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewBookingModal">
        <i class="ti ti-plus me-1"></i> Add New Booking
    </button>
</div>

<div class="row g-6 mb-6">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Total Bookings</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">{{ $totalBookings ?? 0 }}</h4>
                        </div>
                        <small class="mb-0">Overall total</small>
                    </div>
                    <div class="avatar">
                        <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-calendar-event ti-26px"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Pending</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2 text-warning">{{ $pendingBookings ?? 0 }}</h4>
                        </div>
                        <small class="mb-0">Awaiting confirmation</small>
                    </div>
                    <div class="avatar">
                        <span class="avatar-initial rounded bg-label-warning">
                            <i class="ti ti-clock ti-26px"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Confirmed</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2 text-success">{{ $confirmedBookings ?? 0 }}</h4>
                        </div>
                        <small class="mb-0">Ready for service</small>
                    </div>
                    <div class="avatar">
                        <span class="avatar-initial rounded bg-label-success">
                            <i class="ti ti-circle-check ti-26px"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span class="text-heading">Cancelled</span>
                        <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2 text-danger">{{ $cancelledBookings ?? 0 }}</h4>
                        </div>
                        <small class="mb-0">Rejected or cancelled</small>
                    </div>
                    <div class="avatar">
                        <span class="avatar-initial rounded bg-label-danger">
                            <i class="ti ti-x ti-26px"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Search & Filters</h5>
        <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
            <div class="col-md-4 booking_status"></div>
            <div class="col-md-4 booking_date"></div>
        </div>
    </div>
    <div class="card-datatable table-responsive">
        <table class="datatables-bookings table border-top">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Service/Plan</th>
                    <th>Date & Time</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

{{-- مودال‌های مربوطه را اینجا Include کنید --}}
{{-- @include('_partials._modals.modal-add-booking') --}}

@endsection

@push('scripts')
<script>
    // تنظیمات اولیه برای Flatpickr (انتخاب تاریخ) و Select2 در مودال‌ها
    $(document).on('shown.bs.modal', function() {
        $(".flatpickr-date").flatpickr({
            monthSelectorType: 'static'
        });

        $('.select2').each(function() {
            var $this = $(this);
            $this.wrap('<div class="position-relative"></div>').select2({
                dropdownParent: $this.parent()
            });
        });
    });
</script>
@endpush