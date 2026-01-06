@extends('layouts/layoutMaster')

@section('title', 'Process Private Class Request')

@section('vendor-style')
    @vite([
        'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
        'resources/assets/vendor/libs/notyf/notyf.scss',
        'resources/assets/vendor/libs/animate-css/animate.scss'
    ])
    <style>
        /* استایل‌های قبلی شما حفظ شده است */
        .time-slot-grid { display: grid; grid-template-columns: repeat(7, 1fr); gap: 10px; margin-top: 20px; }
        .day-column { border: 1px solid #dbdade; border-radius: 8px; background: #fff; display: flex; flex-direction: column; min-height: 350px; }
        .day-header { background: #f8f9fa; text-align: center; padding: 10px; font-weight: bold; border-bottom: 1px solid #dbdade; }
        .slots-container { padding: 10px; flex-grow: 1; overflow-y: auto; max-height: 250px; }
        
        /* هیت‌مپ اصلاح شده برای ادمین */
        .heatmap-strip { height: 15px; width: 100%; display: flex; flex-direction: row; background: #eee; }
        .heatmap-block { flex: 1; height: 100%; cursor: help; position: relative; border-right: 0.5px solid rgba(255,255,255,0.2); }
        
        /* رنگ‌بندی جدید بر اساس منطق درخواستی شما */
        .hm-none { background-color: #ea5455; } /* قرمز: هیچ همپوشانی نیست */
        .hm-partial { background-color: #ff9f43; } /* نارنجی: فقط یکی حضور دارد */
        .hm-full { background-color: #28c76f; } /* سبز: هر دو (کاربر و مربی) اوکی هستند */

        .time-btn { display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px; padding: 6px 10px; border: 1px solid #7367f0; background: #f8f7ff; border-radius: 6px; font-size: 0.85rem; }
    </style>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Processing Request #{{ $booking->id }}</h4>
        <span class="badge bg-label-warning fs-6">Status: {{ ucfirst($booking->status) }}</span>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card bg-label-primary">
                <div class="card-body">
                    <h6 class="mb-1"><i class="ti tabler-user me-1"></i> Student: {{ $booking->user->name }}</h6>
                    <small>Requested: <strong>{{ $booking->requested_time['sessions_per_week'] }} sessions</strong> per week.</small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-label-info">
                <div class="card-body">
                    <h6 class="mb-1"><i class="ti tabler-school me-1"></i> Coach: {{ $booking->coach->name }}</h6>
                    <small>Check green zones for best match.</small>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5 class="mb-0">Set Final Schedule</h5>
            <div class="d-flex gap-2">
                <span class="badge bg-success">Full Overlap</span>
                <span class="badge bg-warning">Partial</span>
                <span class="badge bg-danger">No Match</span>
            </div>
        </div>
        <div class="card-body">
            <div class="time-slot-grid">
                @foreach(['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'] as $index => $day)
                    <div class="day-column" data-day="{{ $index }}">
                        <div class="day-header">{{ $day }}</div>
                        <div class="slots-container" id="slots-day-{{ $index }}">
                            <button type="button" class="btn btn-label-primary btn-sm w-100 mb-2" onclick="addSlot({{ $index }})">
                                <i class="ti tabler-plus"></i> Set Slot
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4 d-flex justify-content-end gap-3">
                <button class="btn btn-label-secondary">Cancel</button>
                <button class="btn btn-success" onclick="finalizeSchedule()">
                    <i class="ti tabler-check me-1"></i> Approve & Save Schedule
                </button>
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
    'use strict';

    // ۱. تعریف متغیرهای سراسری (Global)
    let finalizedSlots = [];
    let bookingId = "{{ $booking->id }}";
    let notyf;
    let timeModal;
    let fpStart, fpEnd;

    // ۲. تعریف توابع در سطح Window (برای دسترسی از onclick در HTML)
    window.addSlot = function(dayIndex) {
        document.getElementById('modal-day-index').value = dayIndex;
        if (timeModal) {
            timeModal.show();
        } else {
            console.error("Modal not initialized yet");
        }
    };

    window.saveSlot = function() {
        const day = document.getElementById('modal-day-index').value;
        // گرفتن مقدار مستقیم از اینستنس فلت‌پیکر برای اطمینان
        const start = fpStart.input.value;
        const end = fpEnd.input.value;

        if (!start || !end) {
            if(notyf) notyf.error('Please select both From and To times');
            return;
        }

        if (start >= end) {
            if(notyf) notyf.error('End time must be after start time');
            return;
        }

        const slot = { day: parseInt(day), start, end };
        finalizedSlots.push(slot);
        
        renderSlotUI(day, start, end, finalizedSlots.length - 1);
        if (timeModal) timeModal.hide();
    };

    function renderSlotUI(day, start, end, index) {
        const container = document.getElementById(`slots-day-${day}`);
        const div = document.createElement('div');
        div.className = 'time-btn animate__animated animate__fadeIn';
        div.innerHTML = `
            <span>${start} - ${end}</span>
            <i class="ti tabler-x fs-5" style="cursor:pointer" onclick="removeSlot(${index}, this)"></i>
        `;
        container.appendChild(div);
    }

    window.removeSlot = function(index, element) {
        element.parentElement.remove();
        delete finalizedSlots[index];
    };

    window.finalizeSchedule = function() {
        const cleanSlots = finalizedSlots.filter(n => n);
        if (cleanSlots.length === 0) {
            if(notyf) notyf.error("Please set at least one slot.");
            return;
        }

        // غیرفعال کردن دکمه برای جلوگیری از کلیک مکرر
        const btn = event.currentTarget; 
        btn.disabled = true;

        fetch(`/panel/booking/process/${bookingId}/approve`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ slots: cleanSlots })
        })
        .then(res => res.json())
        .then(data => {
            if(notyf) notyf.success("Schedule approved successfully!");
            // setTimeout(() => location.href = '/panel/admin/classes/requests', 1500);
        })
        .catch(err => {
            btn.disabled = false;
            if(notyf) notyf.error("Failed to approve schedule.");
        });
    };

    // ۳. بارگذاری دیتای هیت‌مپ
    function loadComparisonData() {
        fetch(`http://127.0.0.1:8000/panel/booking/getHeatmapData/${bookingId}`)
            .then(response => response.json())
            .then(data => {
                renderAdminHeatmap(data.comparison);
            })
            .catch(err => console.error("Error loading heatmap:", err));
    }

    function renderAdminHeatmap(data) {
        if (!data) return;
        for (let dayIndex = 0; dayIndex < 7; dayIndex++) {
            const container = document.querySelector(`.day-column[data-day="${dayIndex}"]`);
            if (!container || !data[dayIndex]) continue;

            const strip = document.createElement('div');
            strip.className = 'heatmap-strip';

            data[dayIndex].forEach(slot => {
                const block = document.createElement('div');
                let colorClass = 'hm-none';
                if (slot.match_level === 1) colorClass = 'hm-partial';
                if (slot.match_level === 2) colorClass = 'hm-full';

                block.className = `heatmap-block ${colorClass}`;
                block.setAttribute('data-bs-toggle', 'tooltip');
                block.title = `${slot.hour}:00 - ${slot.info_text}`; 
                strip.appendChild(block);
            });
            container.appendChild(strip);
        }
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(t => new bootstrap.Tooltip(t));
    }

    // ۴. اصلی‌ترین بخش: مقداردهی اولیه پس از لود کامل
    window.addEventListener('load', function () {
        // مقداردهی Notyf
        if (typeof Notyf !== 'undefined') {
            notyf = new Notyf({
                duration: 4000,
                position: { x: 'right', y: 'top' },
                dismissible: true
            });
        }

        // مقداردهی Modal
        const modalEl = document.getElementById('timePickerModal');
        if (modalEl) {
            timeModal = new bootstrap.Modal(modalEl);
        }

        // مقداردهی Flatpickr با تنظیمات مخصوص مودال
        const fpConfig = {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            static: true, // بسیار مهم برای نمایش صحیح در مودال
            appendTo: document.querySelector('#timePickerModal .modal-body') // جلوگیری از مشکلات Z-index
        };

        fpStart = flatpickr("#flatpickr-start", fpConfig);
        fpEnd = flatpickr("#flatpickr-end", fpConfig);

        loadComparisonData();
    });
</script>
@endsection
