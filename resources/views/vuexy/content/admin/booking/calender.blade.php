@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Booking Calendar')

@section('vendor-style')
@vite([
    'resources/assets/vendor/libs/fullcalendar/fullcalendar.scss',
    'resources/assets/vendor/libs/select2/select2.scss',
    'resources/assets/vendor/libs/quill/editor.scss',
    'resources/assets/vendor/libs/@form-validation/form-validation.scss',
    'resources/assets/vendor/libs/flatpickr/flatpickr.scss'
])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/app-calendar.scss'])
@endsection

@section('vendor-script')
@vite([
    'resources/assets/vendor/libs/fullcalendar/fullcalendar.js',
    'resources/assets/vendor/libs/select2/select2.js',
    'resources/assets/vendor/libs/@form-validation/popular.js',
    'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/auto-focus.js',
    'resources/assets/vendor/libs/flatpickr/flatpickr.js',
    'resources/assets/vendor/libs/moment/moment.js'
])
@endsection

@section('page-script')
{{-- این فایل باید منطق دریافت رویدادها از سرور بر اساس کاربر انتخابی را داشته باشد --}}
@vite(['resources/assets/js/admin/app-booking-calendar.js'])
@endsection

@section('content')
<div class="card app-calendar-wrapper">
    <div class="row g-0">
        <div class="col app-calendar-sidebar border-end" id="app-calendar-sidebar">
            <div class="p-6">
                <div class="mb-6">
                    <label class="form-label text-muted text-uppercase fw-medium small" for="selectUser">Filter by User</label>
                    <select id="selectUser" class="select2 form-select" data-placeholder="Select a customer">
                        <option value=""></option>
                        <option value="all">All Customers</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <label class="form-label text-muted text-uppercase fw-medium small" for="selectTimezone">Display Timezone</label>
                    <select id="selectTimezone" class="select2 form-select">
                        <option value="UTC">UTC (Global)</option>
                        <option value="Asia/Tehran" selected>Asia/Tehran (+3:30)</option>
                        <option value="Europe/London">Europe/London (GMT)</option>
                        <option value="America/New_York">America/New_York (EST)</option>
                    </select>
                </div>

                <hr class="container-m-nx my-6">

                <div class="mb-6">
                    <label class="form-label text-muted text-uppercase fw-medium small">Status Legend</label>
                    <div class="form-check form-check-success mb-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-confirmed" checked data-value="confirmed">
                        <label class="form-check-label" for="select-confirmed">Confirmed</label>
                    </div>
                    <div class="form-check form-check-warning mb-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-pending" checked data-value="pending">
                        <label class="form-check-label" for="select-pending">Pending</label>
                    </div>
                    <div class="form-check form-check-danger">
                        <input class="form-check-input input-filter" type="checkbox" id="select-cancelled" checked data-value="cancelled">
                        <label class="form-check-label" for="select-cancelled">Cancelled</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col app-calendar-content">
            <div class="card shadow-none border-0">
                <div class="card-body pb-0">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Select2
        $('.select2').each(function() {
            var $this = $(this);
            $this.wrap('<div class="position-relative"></div>').select2({
                placeholder: $this.data('placeholder'),
                dropdownParent: $this.parent()
            });
        });

        // Event listener for User/Timezone changes
        $('#selectUser, #selectTimezone').on('change', function() {
            // در اینجا باید تقویم دوباره Refetch شود
            // window.refreshCalendar(); 
            console.log('Filters changed:', $(this).val());
        });
    });
</script>
@endpush