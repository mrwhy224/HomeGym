@extends('layouts/layoutMaster')

@section('title', 'Coach Management')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/cleave-zen/cleave-zen.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/admin/app-coach-list.js')

<script>
window.addEventListener('DOMContentLoaded', function() {
  if (typeof $ !== 'undefined') {
    $(function () {
      'use strict';
      const select2 = $('.select2'),
        offCanvasForm = $('#offcanvasAddCoach'),
        addNewCoachForm = document.getElementById('addNewCoachForm');

      // مقداردهی Select2
      if (select2.length) {
        select2.each(function () {
          var $this = $(this);
          $this.wrap('<div class="position-relative"></div>').select2({
            placeholder: 'Select Country', // حالا این کار می‌کند
            dropdownParent: $this.parent(),
            allowClear: true
          });
        });
      }

      // ولیدیشن فرم
      const fv = FormValidation.formValidation(addNewCoachForm, {
        fields: {
          'first-name': { validators: { notEmpty: { message: 'First name is required' } } },
          'last-name': { validators: { notEmpty: { message: 'Last name is required' } } },
          'email': {
            validators: {
              notEmpty: { message: 'Email is required' },
              emailAddress: { message: 'Invalid email format' }
            }
          },
          'country_id': { // مطمئن شوید نام فیلد در ولیدیشن با name در HTML یکی است
            validators: { notEmpty: { message: 'Please select a country' } }
          },
          'phone': { validators: { notEmpty: { message: 'Phone number is required' } } }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
            rowSelector: '.mb-4'
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          autoFocus: new FormValidation.plugins.AutoFocus()
        }
      }).on('core.form.valid', function () {
        // --- بخش اصلی ارسال AJAX ---
        const formData = new FormData(addNewCoachForm);

        $.ajax({
          url: '{{ route("admin.api.coach.create") }}', // از هلپر لاراول برای روت استفاده کنید
          type: 'POST',
          data: formData,
          processData: false, // برای ارسال FormData ضروری است
          contentType: false, // برای ارسال FormData ضروری است
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Accept': 'application/json'
          },
          success: function (response) {
            // بستن مودال/Offcanvas
            const offcanvas = bootstrap.Offcanvas.getInstance(offCanvasForm);
            offcanvas.hide();

            // ریست کردن فرم و Select2
            addNewCoachForm.reset();
            $('.select2').val(null).trigger('change');

            // رفرش جدول
            if (typeof dt_user !== 'undefined') {
              dt_user.ajax.reload();
            }

            Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: response.message || 'Coach created successfully',
              customClass: { confirmButton: 'btn btn-success' }
            });
          },
          error: function (xhr) {
            let errorMsg = 'An error occurred.';
            if (xhr.responseJSON && xhr.responseJSON.message) {
              errorMsg = xhr.responseJSON.message;
            }

            Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: errorMsg,
              customClass: { confirmButton: 'btn btn-danger' }
            });
          }
        });
      });

      // رفع مشکل ولیدیشن Select2 (وقتی کاربر انتخاب می‌کند، خطا پاک شود)
      if (select2.length) {
        select2.on('change', function () {
          fv.revalidateField('country_id');
        });
      }
    });
  }
});
</script>
@endsection

@section('content')

<div class="row g-6 mb-6">
  @php
      // Mock stats for visual representation
      $totalCoaches = \App\Models\User::role('coach')->count();
      $certifiedCoaches = 94;
      $activeCoaches = 58;
      $newRequests = 12;
  @endphp

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Total Coaches</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ number_format($totalCoaches) }}</h4>
            </div>
            <small class="mb-0">All registered coaches</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-primary">
              <i class="icon-base ti tabler-school icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title mb-0">Search & Filter</h5>
    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
      <div class="col-md-4 coach_specialty"></div>
      <div class="col-md-4 coach_status"></div>
      <div class="col-md-4"></div>
    </div>
  </div>

  <div class="card-datatable table-responsive">
    <table class="datatables-users table">
      <thead class="border-top">
        <tr>
          <th>Coach</th>
          <th>Wallet Balance</th>
          <th>Joined Date</th>
          <th>Country</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddCoach" aria-labelledby="offcanvasAddCoachLabel">
  <div class="offcanvas-header border-bottom">
    <h5 id="offcanvasAddCoachLabel" class="offcanvas-title">Add New Coach</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mx-0 flex-grow-0 p-6 h-100">
    <form class="add-new-coach pt-0" id="addNewCoachForm" autocomplete="off">
      <div class="mb-4">
        <label class="form-label" for="add-coach-first-name">First Name</label>
        <input type="text" class="form-control" id="add-coach-first-name" placeholder="John" name="first-name" aria-label="John" />
      </div>

      <div class="mb-4">
        <label class="form-label" for="add-coach-last-name">Last Name</label>
        <input type="text" class="form-control" id="add-coach-last-name" placeholder="Doe" name="last-name" aria-label="Doe" />
      </div>
      <div class="mb-4">
        <label class="form-label" for="add-coach-email">Email</label>
        <input type="email" id="add-coach-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" />
      </div>
      <div class="mb-4">
        <label class="form-label" for="add-coach-contact">Contact (Phone)</label>
        <div class="input-group">
          <select class="select2 form-select" id="add-coach-country" name="country_id" style="max-width: 130px;">
            <option value=""></option>
            @foreach($countries as $country)
                    <option value="{{ $country->id }}"
                            data-code="{{ strtolower($country->code_alpha_3) }}">
                      {{ $country->code_alpha_3 }} (+{{ $country->dialing_code }})
                    </option>
            @endforeach
          </select>
          <input type="text" id="add-coach-contact" class="form-control phone-mask" placeholder="912 345 6789" name="phone" />
        </div>
      </div>

      <hr class="my-6">
      <div class="mb-4">
        <label class="form-label" for="add-payout-day">Payout Day</label>
        <input type="number" id="add-payout-day" class="form-control" placeholder="1, 2, 3, ..., 30" name="payout_day" min="1" max="30" />
      </div>
      <div class="mb-4">
        <label class="form-label" for="add-coach-experience">Experience (Years)</label>
        <input type="number" id="add-coach-experience" class="form-control" placeholder="5" name="experience_years" min="0" />
      </div>
      <div class="mb-4">
        <label class="form-label" for="add-coach-commission">Commission Percentage (%)</label>
        <input type="number" id="add-coach-commission" class="form-control" placeholder="70" name="commission_percentage" value="70.00" step="0.01" />
      </div>


      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </form>
  </div>
</div>
@endsection
