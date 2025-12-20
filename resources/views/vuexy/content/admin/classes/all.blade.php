@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Available Classes')

@section('vendor-style')
@vite([
    'resources/assets/vendor/libs/select2/select2.scss',
    'resources/assets/vendor/libs/tagify/tagify.scss'
])
@endsection

@section('vendor-script')
@vite([
    'resources/assets/vendor/libs/select2/select2.js',
    'resources/assets/vendor/libs/tagify/tagify.js'
])
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-6">
    <div>
        <h4 class="mb-1">Available Classes</h4>
        <p class="mb-0">Explore and manage all scheduled educational or fitness sessions.</p>
    </div>
    <button class="btn btn-primary">
        <i class="ti ti-plus me-1"></i> Create New Class
    </button>
</div>

<div class="card mb-6">
    <div class="card-body">
        <div class="row g-4">
            <div class="col-md-4">
                <label class="form-label">Search Class</label>
                <input type="text" class="form-control" placeholder="Search by name or keyword...">
            </div>
            <div class="col-md-3">
                <label class="form-label">Category</label>
                <select class="select2 form-select">
                    <option value="">All Categories</option>
                    <option value="yoga">Yoga & Wellness</option>
                    <option value="coding">Programming</option>
                    <option value="art">Digital Art</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Instructor</label>
                <select class="select2 form-select">
                    <option value="">All Instructors</option>
                    <option value="1">John Doe</option>
                    <option value="2">Jane Smith</option>
                </select>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-label-secondary w-100">Reset</button>
            </div>
        </div>
    </div>
</div>

<div class="row g-6">
    {{-- نمونه نمایشی برای یک کلاس (این بخش باید در حلقه @foreach قرار بگیرد) --}}
    @for ($i = 1; $i <= 6; $i++)
    <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <span class="badge bg-label-success">Ongoing</span>
                    <div class="d-flex justify-content-center align-items-center bg-label-primary rounded p-2">
                        <i class="ti ti-school ti-md"></i>
                    </div>
                </div>
                
                <h5 class="mb-1">Advanced Web Development #{{ $i }}</h5>
                <p class="text-muted mb-4">Master Laravel and Vue.js with real-world projects.</p>
                
                <div class="d-flex align-items-center mb-4">
                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0 me-3">
                        <li data-bs-toggle="tooltip" title="Instructor" class="avatar avatar-sm">
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                        </li>
                    </ul>
                    <small class="text-muted">Instructor: <span class="text-body fw-medium">Amir Hossein</span></small>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <small>Capacity: 18/25</small>
                        <small>72% Full</small>
                    </div>
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center border-top pt-4">
                    <div>
                        <h6 class="mb-0">450,000 Toman</h6>
                        <small class="text-muted">Per Course</small>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-icon btn-label-secondary"><i class="ti ti-edit"></i></button>
                        <button class="btn btn-primary">Join Class</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>

<div class="d-flex justify-content-center mt-6">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-rounded">
            <li class="page-item prev"><a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-sm"></i></a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item next"><a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-sm"></i></a></li>
        </ul>
    </nav>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.select2').each(function() {
            var $this = $(this);
            $this.wrap('<div class="position-relative"></div>').select2({
                placeholder: 'Select option',
                dropdownParent: $this.parent()
            });
        });
    });
</script>
@endpush