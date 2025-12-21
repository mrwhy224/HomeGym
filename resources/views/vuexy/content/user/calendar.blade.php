@extends('layouts/layoutMaster')

@section('title', 'My Bookings - Fullcalendar')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/fullcalendar/fullcalendar.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss', 
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/quill/editor.scss', 
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/app-calendar.scss'])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/fullcalendar/fullcalendar.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js', 
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js', 
  'resources/assets/vendor/libs/moment/moment.js'
])
@endsection

@section('page-script')
@vite([
    'resources/assets/js/app-calendar-events.js', 
    'resources/assets/js/app-calendar.js'
])
@endsection

@section('content')
<div class="card app-calendar-wrapper">
  <div class="row g-0">
    <div class="col app-calendar-sidebar border-end" id="app-calendar-sidebar">
      <div class="border-bottom p-6 my-sm-0 mb-4">
        <button class="btn btn-primary btn-toggle-sidebar w-100" data-bs-toggle="offcanvas"
          data-bs-target="#addEventSidebar" aria-controls="addEventSidebar">
          <i class="icon-base ti tabler-plus icon-16px me-2"></i>
          <span class="align-middle">Public/Semi-Private Class</span>
        </button>
        <button class="btn btn-primary btn-toggle-sidebar w-100 mt-2" data-bs-toggle="offcanvas"
          data-bs-target="#addEventSidebar" aria-controls="addEventSidebar">
          <i class="icon-base ti tabler-plus icon-16px me-2"></i>
          <span class="align-middle">Private Class</span>
        </button>
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
      
      <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar" aria-labelledby="addEventSidebarLabel">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="addEventSidebarLabel">Class Details</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form class="event-form pt-0" id="eventForm" onsubmit="return false">
            <div class="mb-5">
              <label class="form-label" for="eventTitle">Class Title</label>
              <input type="text" class="form-control" id="eventTitle" name="eventTitle" placeholder="e.g. Morning Yoga" />
            </div>
            <div class="mb-5">
              <label class="form-label" for="eventLabel">Type</label>
              <select class="select2 select-event-label form-select" id="eventLabel" name="eventLabel">
                <option data-label="danger" value="Personal">Private</option>
                <option data-label="warning" value="Family">Semi-Private</option>
                <option data-label="primary" value="Business">Group</option>
              </select>
            </div>
            <div class="mb-5">
              <label class="form-label" for="eventStartDate">Start Date & Time</label>
              <input type="text" class="form-control" id="eventStartDate" name="eventStartDate" />
            </div>
            <div class="mb-5">
              <label class="form-label" for="eventEndDate">End Date & Time</label>
              <input type="text" class="form-control" id="eventEndDate" name="eventEndDate" />
            </div>
            <div class="mb-5">
              <label class="form-label" for="eventURL">Join Link (Zoom/Meet)</label>
              <input type="url" class="form-control" id="eventURL" name="eventURL" placeholder="https://zoom.us/j/..." />
            </div>
            <div class="d-flex justify-content-sm-between justify-content-start mt-6 gap-2">
              <div class="d-flex">
                <button type="submit" id="addEventBtn" class="btn btn-primary btn-add-event me-4">Save</button>
                <button type="reset" class="btn btn-label-secondary btn-cancel me-sm-0 me-1" data-bs-dismiss="offcanvas">Cancel</button>
              </div>
              <button class="btn btn-label-danger btn-delete-event d-none">Delete Booking</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection