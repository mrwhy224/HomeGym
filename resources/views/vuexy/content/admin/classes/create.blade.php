@extends('layouts/layoutMaster')

@section('title', 'Create New Class Session')

@section('vendor-style')
    @vite([
        'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
        'resources/assets/vendor/libs/select2/select2.scss',
        'resources/assets/vendor/libs/@form-validation/form-validation.scss'
    ])
    <style>
        /* Custom styles for Weekday Selector */
        .weekday-selector {
            display: flex;
            gap: 10px;
            justify-content: space-between;
        }
        .weekday-selector input {
            display: none;
        }
        .weekday-selector label {
            flex: 1;
            text-align: center;
            padding: 8px;
            border: 1px solid #dbdade;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .weekday-selector input:checked + label {
            background-color: #7367f0;
            color: white;
            border-color: #7367f0;
            box-shadow: 0 2px 4px rgba(115, 103, 240, 0.4);
        }
    </style>
@endsection

@section('vendor-script')
    @vite([
        'resources/assets/vendor/libs/flatpickr/flatpickr.js',
        'resources/assets/vendor/libs/select2/select2.js',
        'resources/assets/vendor/libs/moment/moment.js',
        'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js',
        'resources/assets/vendor/libs/@form-validation/popular.js',
        'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
        'resources/assets/vendor/libs/@form-validation/auto-focus.js'
    ])
@endsection

@section('content')
<div class="row">
    <div class="col-xl-8 col-lg-7 col-md-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Create New Class</h5>
            </div>
            <div class="card-body">
                <form id="createClassForm" onsubmit="return false" autocomplete="off">
                    
                    <div class="mb-4">
                        <label class="form-label mb-2">Class Type</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="typePublic">
                                        <span class="custom-option-body">
                                            <i class="ti tabler-users ti-xl mb-2 text-primary"></i>
                                            <span class="custom-option-title">Public Class</span>
                                            <small>Standard group (Max 8-12)</small>
                                        </span>
                                        <input name="class_type" class="form-check-input" type="radio" value="public" id="typePublic" checked />
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="typeSemi">
                                        <span class="custom-option-body">
                                            <i class="ti tabler-users-group ti-xl mb-2 text-info"></i>
                                            <span class="custom-option-title">Semi-Private</span>
                                            <small>Small group (Max 2-4)</small>
                                        </span>
                                        <input name="class_type" class="form-check-input" type="radio" value="semi_private" id="typeSemi" />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4 mx-n4">

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label" for="package_id">Package (Course Type)</label>
                            <select id="package_id" name="package_id" class="select2 form-select" data-placeholder="Select Package">
                                <option value=""></option>
                                @foreach($packages as $pkg)
                                    @if($pkg->type !== 'private')
                                        <option value="{{ $pkg->id }}" data-type="{{ $pkg->type }}">{{ $pkg->name }}</option>
                                   @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="coach_id">Coach</label>
                            <select id="coach_id" name="coach_id" class="select2 form-select" data-placeholder="Select Coach">
                                <option value=""></option>
                                @foreach($coaches as $coc)
                                    <option value="{{ $coc->user->id }}" data-avatar="null" data-name="{{ $coc->user->first_name }} {{ $coc->user->last_name }}">{{ $coc->user->first_name }} {{ $coc->user->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label" for="timezone">Timezone Reference</label>
                            <select id="timezone" name="timezone" class="select2 form-select">
                                    <option value="Asia/Tehran">Asia/Tehran (GMT+3:30)</option>
                                    <option value="UTC" selected>UTC</option>
                                    <option value="America/New_York">America/New_York</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="capacity">Capacity (Per Session)</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" onclick="adjustCapacity(-1)">-</button>
                                <input type="number" class="form-control text-center" id="capacity" name="capacity" value="8" min="1" max="50">
                                <button class="btn btn-outline-secondary" type="button" onclick="adjustCapacity(1)">+</button>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4 mx-n4">

                    <div class="mb-4">
                        <label class="form-label mb-3 d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold">Scheduling Mode</span>
                        </label>

                        <div class="btn-group w-100 mb-4" role="group">
                            <input type="radio" class="btn-check" name="schedule_mode" id="modeManual" value="manual" checked autocomplete="off">
                            <label class="btn btn-outline-primary" for="modeManual">
                                <i class="ti tabler-pencil me-1"></i> Manual Input
                            </label>

                            <input type="radio" class="btn-check" name="schedule_mode" id="modeRecurring" value="recurring" autocomplete="off">
                            <label class="btn btn-outline-primary" for="modeRecurring">
                                <i class="ti tabler-refresh me-1"></i> Recurring Pattern
                            </label>
                        </div>

                        <div id="recurring-section" class="d-none p-4 border rounded mb-4 bg-label-secondary">
                            <h6 class="mb-3">Pattern Settings</h6>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Start From</label>
                                    <input type="text" class="form-control" id="gen_start_date" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Repeat For</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="gen_weeks" value="4" min="1">
                                        <span class="input-group-text">Weeks</span>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <label class="form-label d-block mb-2">Days of Week</label>
                                    <div class="weekday-selector">
                                        <input type="checkbox" id="day_sat" value="6" name="gen_days"><label for="day_sat">Sat</label>
                                        <input type="checkbox" id="day_sun" value="0" name="gen_days"><label for="day_sun">Sun</label>
                                        <input type="checkbox" id="day_mon" value="1" name="gen_days"><label for="day_mon">Mon</label>
                                        <input type="checkbox" id="day_tue" value="2" name="gen_days"><label for="day_tue">Tue</label>
                                        <input type="checkbox" id="day_wed" value="3" name="gen_days"><label for="day_wed">Wed</label>
                                        <input type="checkbox" id="day_thu" value="4" name="gen_days"><label for="day_thu">Thu</label>
                                        <input type="checkbox" id="day_fri" value="5" name="gen_days"><label for="day_fri">Fri</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Time</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="text" class="form-control" id="gen_start_time" placeholder="Start" value="10:00">
                                        <span>to</span>
                                        <input type="text" class="form-control" id="gen_end_time" placeholder="End" value="11:00">
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-end">
                                    <button type="button" class="btn btn-primary w-100" onclick="generateSchedule()">
                                        <i class="ti tabler-wand me-1"></i> Generate Sessions
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="class-repeater">
                            <div data-repeater-list="sessions">
                                <div data-repeater-item>
                                    <div class="row g-3 mb-3 align-items-end">
                                        <div class="col-md-4 col-12">
                                            <label class="form-label fs-tiny">Date</label>
                                            <input type="text" class="form-control date-picker" placeholder="YYYY-MM-DD" name="date" />
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <label class="form-label fs-tiny">Start</label>
                                            <input type="text" class="form-control time-picker-start" placeholder="HH:MM" name="start_time" />
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <label class="form-label fs-tiny">End</label>
                                            <input type="text" class="form-control time-picker-end" placeholder="HH:MM" name="end_time" />
                                        </div>
                                        <div class="col-md-2 col-12">
                                            <button type="button" class="btn btn-label-danger w-100" data-repeater-delete>
                                                <i class="ti tabler-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-0">
                                <button type="button" class="btn btn-outline-primary btn-sm" id="btn-manual-add" data-repeater-create>
                                    <i class="ti tabler-plus me-1"></i> Add Session Manually
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-label-secondary">Reset</button>
                        <button type="submit" class="btn btn-outline-primary">Publish Class</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-5 col-md-12">
        <div class="card shadow-none bg-transparent mb-3 sticky-top" style="top: 20px; z-index: 1;">
            <div class="card-body p-0">
                <div class="card h-100 border-primary border-2 shadow-sm position-relative overflow-hidden" id="preview_card">
                    <div class="card-header d-flex justify-content-between align-items-center bg-label-primary py-3">
                        <div class="d-flex align-items-center text-primary">
                            <i class="ti tabler-calendar-event me-2"></i>
                            <span class="fw-bold" id="preview_date">Select Date</span>
                        </div>
                        <span class="badge bg-white text-primary shadow-sm" id="preview_type">Public</span>
                    </div>
                    <div class="card-body pt-4">
                        <h5 class="mb-2 text-truncate" id="preview_package">Package Name</h5>
                        <div class="mb-4">
                            <div class="d-flex align-items-center text-heading mb-1">
                                <i class="ti tabler-clock me-2 text-primary"></i>
                                <span class="fw-medium fs-5" id="preview_time">--:-- to --:--</span>
                            </div>
                            <small class="text-muted ms-1">
                                <i class="ti tabler-world me-1 fs-tiny"></i>
                                <span id="preview_timezone">{{ auth()->user()->timezone }}</span>
                            </small>
                        </div>
                        <hr class="my-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md me-2">
                                    <span class="avatar-initial rounded-circle bg-label-success">
                                        SC
                                    </span>
                                </div>

                                <div class="d-flex flex-column">
                                    <span class="fw-bold text-heading fs-6" id="preview_coach_name">Select Coach</span>
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="d-flex align-items-center justify-content-end text-heading">
                                    <i class="ti tabler-users me-1"></i>
                                    <span class="fw-bold fs-5" id="preview_capacity">8</span>
                                </div>
                                <small class="badge bg-label-success rounded-pill fs-tiny">Open Spots</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-info mt-3 d-flex align-items-start" role="alert">
                    <i class="ti tabler-info-circle me-2 mt-1"></i>
                    <div >
                        Sessions added in the repeater will be created as individual events in the database.
                        <br><strong>Tip:</strong> Use "Recurring Pattern" to auto-fill the list, then edit specific dates manually if needed.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        // --- 1. Plugins Init ---
        $('.select2').each(function () {
            $(this).wrap('<div class="position-relative"></div>').select2({ placeholder: 'Select value', dropdownParent: $(this).parent() });
        });

        // Configs
        const flatpickrDateConfig = { minDate: 'today', dateFormat: 'Y-m-d' };
        const flatpickrTimeConfig = { enableTime: true, noCalendar: true, dateFormat: "H:i", time_24hr: true };

        // Generator Flatpickrs
        const genStartPicker = flatpickr("#gen_start_date", flatpickrDateConfig);
        const genStartTimePicker = flatpickr("#gen_start_time", flatpickrTimeConfig);
        const genEndTimePicker = flatpickr("#gen_end_time", flatpickrTimeConfig);

        // --- 2. Repeater Logic ---
        
        const repeater = $('.class-repeater').repeater({
            show: function () {
                $(this).slideDown();
                const dateInput = this.querySelector('.date-picker');
                const startInput = this.querySelector('.time-picker-start');
                const endInput = this.querySelector('.time-picker-end');

                if(dateInput) {
                    flatpickr(dateInput, {
                        ...flatpickrDateConfig,
                        onChange: (d, s) => updatePreview('date', s)
                    });
                }
                if(startInput) {
                    flatpickr(startInput, {
                        ...flatpickrTimeConfig,
                        onChange: (d, t) => updatePreview('start', t)
                    });
                }
                if(endInput) {
                    flatpickr(endInput, {
                        ...flatpickrTimeConfig,
                        onChange: (d, t) => updatePreview('end', t)
                    });
                }
            },
            hide: function (deleteElement) {
                // اگر از طریق جنراتور دارد پاک می‌شود، کانفرم نگیر
                if($(this).hasClass('silent-remove')) {
                    $(this).slideUp(deleteElement);
                } else if(confirm('Delete this session?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            isFirstItemUndeletable: false 
        });

        // Init first row manually
        const firstRow = document.querySelector('[data-repeater-item]');
        if(firstRow) {
            flatpickr(firstRow.querySelector('.date-picker'), flatpickrDateConfig);
            flatpickr(firstRow.querySelector('.time-picker-start'), flatpickrTimeConfig);
            flatpickr(firstRow.querySelector('.time-picker-end'), flatpickrTimeConfig);
        }

        // --- 3. Mode Switcher Logic ---
        $('input[name="schedule_mode"]').on('change', function() {
            if (this.value === 'recurring') {
                $('#recurring-section').removeClass('d-none').hide().slideDown();
                $('#btn-manual-add').hide(); // مخفی کردن دکمه ادد دستی در حالت جنراتور (اختیاری)
            } else {
                $('#recurring-section').slideUp();
                $('#btn-manual-add').show();
            }
        });

        // --- 4. Generator Logic (THE MAGIC) ---
        window.generateSchedule = function() {
            const startDateStr = document.getElementById('gen_start_date').value;
            const weeks = parseInt(document.getElementById('gen_weeks').value) || 1;
            const startTime = document.getElementById('gen_start_time').value;
            const endTime = document.getElementById('gen_end_time').value;
            
            // دریافت روزهای هفته انتخاب شده (Array of integers: 0=Sun, 1=Mon...)
            const selectedDays = $('input[name="gen_days"]:checked').map(function(){
                return parseInt($(this).val());
            }).get();

            if (!startDateStr || !startTime || !endTime || selectedDays.length === 0) {
                alert('Please fill all pattern fields (Start Date, Time, and Days).');
                return;
            }

            // پاک کردن لیست فعلی ریپیتر
            // ترفند: تمام آیتم‌ها را پاک می‌کنیم تا لیست تمیز شود
            $('[data-repeater-item]').addClass('silent-remove'); // برای جلوگیری از کانفرم
            $('[data-repeater-delete]').click(); 

            // محاسبه تاریخ‌ها با Moment.js
            let currentData = [];
            let cursorDate = moment(startDateStr);
            const endDateLimit = moment(startDateStr).add(weeks, 'weeks');

            // حلقه روی روزها تا پایان دوره
            while (cursorDate.isBefore(endDateLimit)) {
                // چک کن آیا روز هفته جاری (0-6) جزو انتخاب‌ها هست؟
                if (selectedDays.includes(cursorDate.day())) {
                    currentData.push({
                        'date': cursorDate.format('YYYY-MM-DD'),
                        'start_time': startTime,
                        'end_time': endTime
                    });
                }
                cursorDate.add(1, 'days');
            }

            if (currentData.length === 0) {
                alert('No dates matched your pattern!');
                return;
            }

            // پر کردن ریپیتر با داده‌های جدید
            repeater.setList(currentData);
            
            // آپدیت پریویو با اولین داده
            updatePreview('date', currentData[0].date);
            updatePreview('start', startTime);
            updatePreview('end', endTime);
        };


        // --- 5. Live Preview Logic (Same as before) ---
        function setText(id, text) {
            const el = document.getElementById(id);
            if(el) el.innerText = text;
        }

// Class Type Change
        $('input[name="class_type"]').on('change', function() {
            const selectedClassType = $(this).val(); // 'public' or 'semi_private'
            
            // --- 1. Logic: Filter Packages ---
            const packageSelect = $('#package_id');
            
            // اول مقدار فعلی را پاک میکنیم تا کاربر اشتباها پکیج نامعتبر انتخاب نکرده باشد
            packageSelect.val(null).trigger('change');

            // حلقه روی تمام آپشن‌ها
            packageSelect.find('option').each(function() {
                const optionType = $(this).data('type'); // گرفتن مقدار data-type
                
                // اگر آپشن خالی (Placeholder) است، همیشه فعال باشد
                if (!optionType) return;

                // اگر نوع پکیج با نوع کلاس یکی بود، فعال شود، وگرنه غیرفعال
                if (optionType === selectedClassType) {
                    $(this).prop('disabled', false);
                } else {
                    $(this).prop('disabled', true);
                }
            });

            // دستور به Select2 برای رندر مجدد وضعیت‌ها (حیاتی)
            packageSelect.select2({
                placeholder: 'Select Package',
                dropdownParent: packageSelect.parent()
            });


            // --- 2. Logic: Visual Updates (همان کدهای قبلی شما) ---
            const badge = document.getElementById('preview_type');
            const card = document.getElementById('preview_card');
            const cardHeader = card.querySelector('.card-header');
            const capacityInput = document.getElementById('capacity');
            
            // کلاس‌های رنگی
            const publicClass = 'border-primary';
            const semiClass = 'border-info';
            const headerPublic = 'bg-label-primary';
            const headerSemi = 'bg-label-info';

            if (selectedClassType === 'public') {
                badge.innerText = 'Public';
                badge.className = 'badge bg-white text-primary shadow-sm';
                
                card.classList.remove(semiClass);
                card.classList.add(publicClass);
                
                cardHeader.classList.remove(headerSemi);
                cardHeader.classList.add(headerPublic);
                
                // تغییر رنگ آیکون‌ها در هدر
                cardHeader.querySelector('.text-info')?.classList.replace('text-info', 'text-primary');

                capacityInput.value = 8;
            } else {
                badge.innerText = 'Semi-Private';
                badge.className = 'badge bg-white text-info shadow-sm';
                
                card.classList.remove(publicClass);
                card.classList.add(semiClass);

                cardHeader.classList.remove(headerPublic);
                cardHeader.classList.add(headerSemi);

                // تغییر رنگ آیکون‌ها در هدر
                const headerText = cardHeader.querySelector('.text-primary');
                if(headerText) headerText.classList.replace('text-primary', 'text-info');

                capacityInput.value = 4;
            }
            updatePreview('capacity', capacityInput.value);
        });

        $('#package_id').on('select2:select', function(e) {
            setText('preview_package', e.params.data.text);
        });

        $('#coach_id').on('select2:select', function(e) {
            const data = e.params.data;
            const element = $(data.element);
            setText('preview_coach_name', element.data('name'));
        });

        $('#timezone').on('select2:select', function(e) {
            setText('preview_timezone', e.params.data.text);
        });

        $('#capacity').on('input', function() {
            updatePreview('capacity', this.value);
        });

        let state = { date: '---', start: '10:00', end: '11:00' };
        function updatePreview(key, value) {
            if (key === 'capacity') {
                setText('preview_capacity', value);
                return;
            }
            state[key] = value;
            if (key === 'date' && value) {
                const d = new Date(value);
                const options = { weekday: 'short', month: 'short', day: 'numeric' };
                setText('preview_date', d.toLocaleDateString('en-US', options));
            }
            if (key === 'start' || key === 'end') {
                setText('preview_time', `${state.start} - ${state.end}`);
            }
        }

        window.adjustCapacity = function(delta) {
            const input = document.getElementById('capacity');
            let val = parseInt(input.value) || 0;
            val = Math.max(1, Math.min(50, val + delta));
            input.value = val;
            updatePreview('capacity', val);
        };
    });
</script>
@endsection