@extends('layouts/layoutMaster')

@section('title', 'My Calendar')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/fullcalendar/fullcalendar.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/app-calendar.scss'])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/fullcalendar/fullcalendar.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/moment/moment.js'
])
@endsection

@section('page-script')
	<script>
		window.events = @json($events ?? []);
	</script>
	@vite([
		'resources/assets/js/app-calendar-view-only.js'
	])
@endsection

@section('content')
<div class="card app-calendar-wrapper">
  <div class="row g-0">
    <div class="col app-calendar-sidebar border-end" id="app-calendar-sidebar">
      <div class="border-bottom p-6 my-sm-0 mb-4">
        {{-- دکمه‌ها اکنون لینک‌های واقعی هستند --}}
        <a href="{{ route('user.classes.new.non-private') }}" class="btn btn-primary w-100 mb-2">
          <i class="icon-base ti tabler-search icon-16px me-2"></i>
          <span class="align-middle">Public/Semi-Private</span>
        </a>
        <a href="{{ route('user.classes.new.private') }}" class="btn btn-secondary w-100">
          <i class="icon-base ti tabler-premium-rights icon-16px me-2"></i>
          <span class="align-middle">Private Class</span>
        </a>
      </div>
      <div class="px-3 pt-2">
        <div class="inline-calendar"></div>
      </div>
      <hr class="mb-6 mx-n4 mt-3" />

    </div>
    <div class="col app-calendar-content">
      <div class="card shadow-none border-0">
        <div class="card-body pb-0">
          <div id="calendar"></div>
        </div>
      </div>
      <div class="app-overlay"></div>
    </div>
  </div>
</div>
@endsection
