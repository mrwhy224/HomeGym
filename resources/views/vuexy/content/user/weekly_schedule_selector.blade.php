@extends('layouts/layoutMaster')

@section('title', 'Request Private Class')

@section('vendor-style')
    @vite([
        'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss',
        'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
        'resources/assets/vendor/libs/notyf/notyf.scss', // <--- استایل Notyf
        'resources/assets/vendor/libs/animate-css/animate.scss'
    ])
    <style>
        /* استایل‌های قبلی بدون تغییر */
        .time-slot-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 20px;
        }
        .day-column {
            border: 1px solid #dbdade;
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
        }
        .day-header {
            background: #f8f9fa;
            text-align: center;
            padding: 10px;
            font-weight: bold;
            border-bottom: 1px solid #dbdade;
            color: #5d596c;
        }
        .slots-container {
            padding: 10px;
            min-height: 200px;
            max-height: 300px;
            overflow-y: auto;
        }
        .time-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 8px;
            padding: 6px 10px;
            border: 1px dashed #7367f0;
            color: #7367f0;
            background: #fdfdff;
            border-radius: 6px;
            font-size: 0.85rem;
            transition: all 0.2s;
        }
        .time-btn:hover {
            background: #f0f0ff;
        }
        .time-btn i {
            color: #ea5455;
        }
        .add-time-btn {
            font-size: 0.8rem;
            width: 100%;
            margin-top: 5px;
        }
        .coach-card {
            cursor: pointer;
            transition: all 0.2s ease-in-out;
            border: 2px solid transparent;
        }
        .coach-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-color: #dbe4ff;
        }
        .coach-card.selected {
            border-color: #7367f0;
            background-color: #f8f8ff;
        }

.day-column {
    border: 1px solid #dbdade;
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
    display: flex;           /* <--- جدید */
    flex-direction: column;  /* <--- جدید */
    min-height: 300px;       /* ارتفاع ثابت برای یکدست شدن کارت‌ها */

    padding-bottom: 0 !important; 
    gap: 0 !important;
}

.day-header {
    background: #f8f9fa;
    text-align: center;
    padding: 10px;
    font-weight: bold;
    border-bottom: 1px solid #dbdade;
    color: #5d596c;
    flex-shrink: 0;          /* جلوگیری از جمع شدن هدر */
}

.slots-container {
    padding: 10px;
    flex-grow: 1;            /* پر کردن فضای خالی وسط */
    overflow-y: auto;        /* اسکرول فقط برای این بخش */
    max-height: 220px;       /* تنظیم ارتفاع اسکرول */
    margin-bottom: 0 !important;
}

/* --- استایل جدید هیت‌مپ (افقی) --- */
.heatmap-strip {
    height: 12px;            /* ارتفاع نوار */
    width: 100%;             /* تمام عرض */
    display: flex;           /* چیدمان افقی بلوک‌ها */
    flex-direction: row;     /* <--- افقی */
    background: #f1f1f1;
    border-top: 1px solid #eee;
    flex-shrink: 0;          /* جلوگیری از جمع شدن نوار */
    margin: 0 !important;
}

.heatmap-block {
    flex: 1;                 /* تقسیم عرض به تساوی */
    height: 100%;
    cursor: help;
    transition: all 0.2s;
    position: relative;
}

/* افکت هاور: کمی بلندتر شدن */
.heatmap-block:hover {
    transform: scaleY(1.5);  
    transform-origin: bottom;
    z-index: 10;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
}

/* رنگ‌بندی وضعیت‌ها (همان قبلی) */
.hm-high { background-color: #28c76f; } 
.hm-med  { background-color: #ff9f43; } 
.hm-low  { background-color: #ea5455; } 
.hm-none { background-color: #e0e0e0; }
    </style>
@endsection

@section('content')
    <h4 class="mb-4">Request Private Class</h4>

    <div class="bs-stepper wizard-numbered mt-2">
        <div class="bs-stepper-header">
            <div class="step" data-target="#time-selection">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">1</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Your Availability</span>
                        <span class="bs-stepper-subtitle">Select Days & Times</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <i class="ti tabler-chevron-right"></i>
            </div>
            <div class="step" data-target="#coach-selection">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">2</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Select Coach</span>
                        <span class="bs-stepper-subtitle">View Matching Coaches</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <i class="ti tabler-chevron-right"></i>
            </div>
            <div class="step" data-target="#confirmation">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">3</span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Confirmation</span>
                        <span class="bs-stepper-subtitle">Review & Submit</span>
                    </span>
                </button>
            </div>
        </div>

        <div class="bs-stepper-content">
            <div id="time-selection" class="content">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <i class="ti tabler-info-circle me-2 fs-4"></i>
                    <div>Please specify the time slots you are available during the week.</div>
                </div>

                <div class="time-slot-grid">
                    @foreach(['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'] as $index => $day)
                        <div class="day-column" data-day="{{ $index }}">
                            <div class="day-header">{{ $day }}</div>
                            <div class="slots-container" id="slots-day-{{ $index }}">
                                <button type="button" class="btn btn-label-primary btn-sm add-time-btn"
                                        onclick="addSlot({{ $index }})">
                                    <i class="ti tabler-plus"></i> Add Slot
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev" disabled>
                        <i class="ti tabler-arrow-left me-sm-1"></i> Previous
                    </button>
                    <button class="btn btn-primary btn-next" onclick="findCoaches()">
                        Next <i class="ti tabler-arrow-right ms-sm-1"></i>
                    </button>
                </div>
            </div>

            <div id="coach-selection" class="content">
                <h5 class="mb-3">Suggested Coaches for Your Schedule</h5>
                <div class="card mb-4 border-primary shadow-none">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h6 class="mb-1">How many sessions per week do you want?</h6>
                                <small class="text-muted">Select the frequency of your private classes.</small>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-primary" id="sessions-count" onchange="updateSessionCount()">
                                    @for ($i = 1; $i <= 3; $i++)
                                        <option value="{{ $i }}"{{ $i==1?" Selected":"" }}>{{ $i }} Session{{ $i > 1 ? 's' : '' }} per week</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4" id="coaches-list-container"></div>
                <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev" onclick="stepper.previous()">
                        <i class="ti tabler-arrow-left me-sm-1"></i> Back
                    </button>
                    <button class="btn btn-primary btn-next" id="btn-select-coach" disabled onclick="stepper.next()">
                        Next <i class="ti tabler-arrow-right ms-sm-1"></i>
                    </button>
                </div>
            </div>

            <div id="confirmation" class="content">
                <div class="text-center py-5">
                    <div class="mb-3">
                        <i class="ti tabler-circle-check text-success display-3"></i>
                    </div>
                    <h3 class="mb-2">Your request is ready to send!</h3>
                    <p class="mb-4">Your private class request will be sent to Coach <strong id="summary-coach-name" class="text-primary">---</strong>.</p>
                    <button class="btn btn-success btn-lg" onclick="submitRequest()">
                        <i class="ti tabler-send me-2"></i> Send Request
                    </button>
                </div>
                <div class="col-12 d-flex justify-content-start mt-4">
                    <button class="btn btn-label-secondary btn-prev" onclick="stepper.previous()">
                        <i class="ti tabler-arrow-left me-sm-1"></i> Back
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="timePickerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Set Time</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label" for="flatpickr-start">From</label>
                        <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-start" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="flatpickr-end">To</label>
                        <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-end" />
                    </div>
                    <input type="hidden" id="modal-day-index">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100" onclick="saveSlot()">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('vendor-script')
    @vite([
        'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
        'resources/assets/vendor/libs/flatpickr/flatpickr.js',
        'resources/assets/vendor/libs/notyf/notyf.js' // <--- اسکریپت Notyf
    ])
@endsection

@section('page-script')
    <script>
        'use strict'; // استفاده از strict mode مطابق نمونه

        // متغیرهای سراسری
        let userSlots = [];
        let allCoachesFromServer = [];
        let selectedSessionsCount = 1;
        let selectedCoachId = null;
        let stepper;
        let timeModal;
        let fpStart, fpEnd; // اینستنس‌های Flatpickr
        let notyf; // متغیر سراسری برای نوتیفیکیشن

        // تابع اجرایی خودکار (IIFE) یا window.load برای اطمینان از لود شدن فایل‌ها
        window.addEventListener('load', function () {
            if (typeof Notyf !== 'undefined') {
                // ساخت کلاس اختصاصی برای پشتیبانی از HTML
                class CustomNotyf extends Notyf {
                    _renderNotification(options) {
                        const notification = super._renderNotification(options);
                        if (options.message) {
                            notification.message.innerHTML = options.message;
                        }
                        return notification;
                    }
                }

                // تعریف رنگ‌ها (اگر config.colors لود نشده باشد، از رنگ‌های پیش‌فرض استفاده می‌کنیم)
                const colors = window.config?.colors || {
                    success: '#28c76f',
                    danger: '#ea5455',
                    warning: '#ff9f43',
                    info: '#00cfe8'
                };

                // ایجاد اینستنس اصلی
                notyf = new CustomNotyf({
                    duration: 4000,
                    ripple: true,
                    position: { x: 'right', y: 'top' },
                    dismissible: true,
                    types: [
                        {
                            type: 'success',
                            background: colors.success,
                            icon: {
                                className: 'ti tabler-circle-check text-white',
                                tagName: 'i'
                            }
                        },
                        {
                            type: 'error',
                            background: colors.danger,
                            icon: {
                                className: 'ti tabler-x text-white',
                                tagName: 'i'
                            }
                        },
                        {
                            type: 'warning',
                            background: colors.warning,
                            icon: {
                                className: 'ti tabler-alert-triangle text-white',
                                tagName: 'i'
                            }
                        },
                        {
                            type: 'info',
                            background: colors.info,
                            icon: {
                                className: 'ti tabler-info-circle text-white',
                                tagName: 'i'
                            }
                        }
                    ]
                });
            }

            // 1. راه اندازی Stepper
            const stepperElement = document.querySelector('.bs-stepper');
            if (stepperElement && typeof Stepper !== 'undefined') {
                stepper = new Stepper(stepperElement, {
                    linear: false,
                    animation: true
                });
            }

            // 2. راه اندازی Modal
            const modalEl = document.getElementById('timePickerModal');
            if (modalEl && typeof bootstrap !== 'undefined') {
                timeModal = new bootstrap.Modal(modalEl);
            }

            // 3. راه اندازی Flatpickr (دقیقاً مشابه نمونه Vuexy)
            const flatpickrStartEl = document.querySelector('#flatpickr-start');
            const flatpickrEndEl = document.querySelector('#flatpickr-end');

            if (typeof flatpickr !== 'undefined') {
                // تنظیمات مشترک
                const timeConfig = {
                    enableTime: true,
                    noCalendar: true,
                    dateFormat: "H:i", // فرمت 24 ساعته
                    time_24hr: true,
                    defaultDate: "17:00",
                    static: true // این ویژگی در نمونه Vuexy زیاد استفاده شده
                };

                if (flatpickrStartEl) {
                    fpStart = flatpickrStartEl.flatpickr(timeConfig);
                }

                if (flatpickrEndEl) {
                    fpEnd = flatpickrEndEl.flatpickr({
                        ...timeConfig,
                        defaultDate: "18:00"
                    });
                }
            } else {
                console.error('Flatpickr library not loaded!');
            }

            loadHeatmapData();
        });

        // -----------------------------------------------------------------------
        // توابع منطقی (بدون تغییر در منطق، فقط استفاده از اینستنس‌های جدید)
        // -----------------------------------------------------------------------

        function showNotification(title, text, type = 'error') {
            if (notyf) {
                notyf.open({
                    type: type,
                    message: `<b>${title}</b><br>${text}`
                });
            } else {
                alert(`${title}: ${text}`); // Fallback
            }
        }

        // -----------------------------------------------------------------------
        // 4. Logic Functions
        // -----------------------------------------------------------------------

        function addSlot(dayIndex) {
            document.getElementById('modal-day-index').value = dayIndex;
            if (fpStart) fpStart.setDate("17:00");
            if (fpEnd) fpEnd.setDate("18:00");
            if (timeModal) timeModal.show();
        }

        function saveSlot() {
            const day = document.getElementById('modal-day-index').value;
            const start = document.getElementById('flatpickr-start').value;
            const end = document.getElementById('flatpickr-end').value;

            if (!start || !end) {
                showNotification('Missing Information', 'Please select both start and end times.');
                return;
            }

            if (start >= end) {
                showNotification('Invalid Time Range', 'End time must be after start time.');
                return;
            }

            userSlots.push({day, start, end});
            renderSlot(day, start, end, userSlots.length - 1);

            if (timeModal) timeModal.hide();
        }

        function renderSlot(day, start, end, index) {
            const container = document.getElementById(`slots-day-${day}`);
            const btn = document.createElement('div');
            btn.className = 'time-btn animate__animated animate__fadeIn';
            btn.innerHTML = `
                <span>${start} - ${end}</span>
                <i class="ti tabler-x fs-5" style="cursor:pointer" onclick="removeSlot(${index}, this)"></i>
            `;
            const addBtn = container.querySelector('.add-time-btn');
            if (addBtn) {
                container.insertBefore(btn, addBtn);
            } else {
                container.appendChild(btn);
            }
        }

        function removeSlot(index, element) {
            element.parentElement.remove();
            delete userSlots[index];
        }

        function findCoaches() {
            const cleanSlots = userSlots.filter(n => n);

            if (cleanSlots.length === 0) {
                showNotification('No Slots Selected', 'Please select at least one time slot to proceed.', 'warning');
                return;
            }

            document.getElementById('coaches-list-container').innerHTML =
                '<div class="col-12 text-center py-5"><div class="spinner-border text-primary"></div><p class="mt-2 text-muted">Analyzing precise schedule overlaps...</p></div>';

            if (stepper) stepper.next();
            fetch('http://127.0.0.1:8000/panel/classes/test2', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ 
                    slots: cleanSlots 
                })
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                allCoachesFromServer = data.coaches;
                filterAndRenderCoaches();
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Error', 'Failed to find matching coaches. Please try again.', 'error');
                if (stepper) stepper.previous();
            });
        }
        function filterAndRenderCoaches() {
            const sessionsNeeded = parseInt(selectedSessionsCount);

            const filteredList = allCoachesFromServer.map(coach => {
                return {
                    ...coach,
                    is_usable: coach.is_usable && coach.max_sessions >= sessionsNeeded
                };
            });

            renderCoachResults(filteredList);
        }
        function updateSessionCount() {
            selectedSessionsCount = document.getElementById('sessions-count').value;
            // document.getElementById('summary-sessions-count').innerText = selectedSessionsCount;
            
            // بلافاصله لیست مربیان را بر اساس فیلتر جدید آپدیت کن
            if (allCoachesFromServer.length > 0) {
                filterAndRenderCoaches();
            }
        }
        function renderCoachResults(coaches) {
            // ۱. مرتب‌سازی لیست: 
            // اولویت اول: مربیان قابل استفاده (is_usable) بالا قرار بگیرند
            // اولویت دوم: بر اساس درصد مطابقت (match_percentage) نزولی
            coaches.sort((a, b) => {
                if (a.is_usable !== b.is_usable) {
                    return b.is_usable ? -1 : 1; // مربیان True قبل از False
                }
                return b.match_percentage - a.match_percentage; // درصد بالاتر قبل از درصد پایین‌تر
            });

            let html = '';
            coaches.forEach(coach => {
                // تنظیمات ظاهری برای مربیان غیرمجاز
                const isNotUsable = !coach.is_usable;
                const disabledClass = isNotUsable ? 'bg-light-secondary opacity-75' : '';
                const grayscaleStyle = isNotUsable ? 'filter: grayscale(1);' : '';
                const cursorStyle = isNotUsable ? 'cursor: not-allowed;' : 'cursor: pointer;';
                const pointerEvents = isNotUsable ? 'none' : 'auto';

                html += `
                <div class="col-md-6 animate__animated animate__fadeInUp">
                    <div class="card coach-card h-100 ${disabledClass}" 
                         onclick="${coach.is_usable ? `selectCoach(this, ${coach.id}, '${coach.name}')` : ''}"
                         style="${grayscaleStyle} ${cursorStyle}">
                        
                        <div class="card-body d-flex align-items-center" style="pointer-events: ${pointerEvents};">
                            <div class="avatar avatar-lg me-3">
                                <span class="avatar-initial rounded-circle bg-label-primary">${coach.name.slice(0, 2)}</span>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">
                                    ${coach.name} 
                                    ${isNotUsable ? '<span class="badge bg-label-danger ms-2" style="font-size: 0.6rem;">NOT ELIGIBLE</span>' : ''}
                                </h5>
                                
                                ${coach.is_usable 
                                    ? `<span class="badge bg-label-success">Up to ${coach.max_sessions} sessions / week</span>`
                                    : `<span class="badge bg-label-secondary">Schedule Mismatch</span>`
                                }
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="coachRadio" 
                                       value="${coach.id}" ${isNotUsable ? 'disabled' : ''}>
                            </div>
                        </div>
                    </div>
                </div>`;
            });

            const container = document.getElementById('coaches-list-container');
            container.innerHTML = html;

            // ریست کردن انتخاب قبلی اگر مربی انتخابی دیگر در دسترس نیست
            selectedCoachId = null;
            document.getElementById('btn-select-coach').disabled = true;
            document.getElementById('summary-coach-name').innerText = '---';
        }


        function selectCoach(element, id, name) {
            document.querySelectorAll('.coach-card').forEach(el => el.classList.remove('selected'));
            element.classList.add('selected');
            const radio = element.querySelector('input[type="radio"]');
            if (radio) radio.checked = true;
            selectedCoachId = id;
            document.getElementById('summary-coach-name').innerText = name;
            document.getElementById('btn-select-coach').disabled = false;
        }

        function selectCoach(element, id, name) {
            document.querySelectorAll('.coach-card').forEach(el => el.classList.remove('selected'));
            element.classList.add('selected');
            const radio = element.querySelector('input[type="radio"]');
            if (radio) radio.checked = true;
            selectedCoachId = id;
            document.getElementById('summary-coach-name').innerText = name;
            document.getElementById('btn-select-coach').disabled = false;
        }

        function submitRequest() {
            const cleanSlots = userSlots.filter(n => n);
            const submitBtn = document.querySelector('#confirmation .btn-success');

            // ۱. اعتبارسنجی نهایی
            if (!selectedCoachId) {
                showNotification('Selection Required', 'Please go back and select a coach.', 'warning');
                return;
            }

            // ۲. نمایش حالت در حال بارگذاری روی دکمه
            const originalContent = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Sending...';
            submitBtn.disabled = true;

            // ۳. ارسال اطلاعات به سرور
            fetch('http://127.0.0.1:8000/panel/classes/test3', { // این روت را در فایل web.php بسازید
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    coach_id: selectedCoachId,
                    sessions_per_week: selectedSessionsCount,
                    slots: cleanSlots
                })
            })
            .then(async response => {
                const data = await response.json();
                if (!response.ok) throw new Error(data.message || 'Something went wrong');
                return data;
            })
            .then(data => {
                // ۴. نمایش پیام موفقیت و انتقال کاربر
                showNotification('Success!', 'Your private class request has been sent.', 'success');
                
                setTimeout(() => {
                    location.reload();
                }, 1500);
            })
            .catch(error => {
                console.error('Submission Error:', error);
                showNotification('Submission Failed', error.message, 'error');
                
                // بازگرداندن دکمه به حالت عادی در صورت خطا
                submitBtn.innerHTML = originalContent;
                submitBtn.disabled = false;
            });
        }

        function loadHeatmapData() {

            const columns = document.querySelectorAll('.day-column');
    
            fetch('http://127.0.0.1:8000/panel/classes/test') // آدرس روت کنترلر بالا
                .then(response => response.json())
                .then(data => {
                    console.log(data.data);
                    renderHeatmap(data.data);
                })
                .catch(error => {
                    console.error('Error fetching heatmap:', error);
                    showNotification('Error', 'Could not load coach availability data.', 'error');
                });
        }

        function renderHeatmap(data) {
            for (let dayIndex = 0; dayIndex < 7; dayIndex++) {
                const container = document.querySelector(`.day-column[data-day="${dayIndex}"]`);
                if (!container) continue;

                // ساخت کانتینر نوار
                const strip = document.createElement('div');
                strip.className = 'heatmap-strip';

                // ساعت‌ها
                data[dayIndex].forEach(slot => {
                    const block = document.createElement('div');
                    block.className = `heatmap-block ${getColorClass(slot.count)}`;
                    
                    // تولتیپ برای نمایش ساعت و تعداد
                    block.setAttribute('data-bs-toggle', 'tooltip');
                    block.setAttribute('data-bs-placement', 'left');
                    block.title = `${slot.hour}:00 - ${slot.count} Coaches`; // متن ساده تولتیپ

                    // رویداد هاور دستی (چون تولتیپ بوت‌استرپ روی المنت داینامیک گاهی اذیت میکند)
                    // اینجا از title ساده استفاده کردیم که خود مرورگر نشون میده، 
                    // برای زیبایی بیشتر میشه از Tooltip بوت‌استرپ استفاده کرد:
                    
                    strip.appendChild(block);
                });

                container.appendChild(strip);
            }
            
            // فعال‌سازی تولتیپ‌های بوت‌استرپ (اگر نیاز به استایل زیبا دارید)
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        }

        function getColorClass(count) {
            if (count === 0) return 'hm-low';   // قرمز
            if (count <= 2)  return 'hm-med';   // نارنجی
            return 'hm-high';                   // سبز
        }
    </script>
@endsection