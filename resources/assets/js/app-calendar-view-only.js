/**
 * App Calendar - View Only Version
 */

'use strict';

document.addEventListener('DOMContentLoaded', function () {
  const direction = isRtl ? 'rtl' : 'ltr';

  (function () {
    const calendarEl = document.getElementById('calendar');
    const appCalendarSidebar = document.querySelector('.app-calendar-sidebar');
    const appOverlay = document.querySelector('.app-overlay');
    const selectAll = document.querySelector('.select-all');
    const filterInputs = Array.from(document.querySelectorAll('.input-filter'));
    const inlineCalendar = document.querySelector('.inline-calendar');

    // تنظیم رنگ‌ها مطابق با دسته‌بندی‌های شما
    const calendarColors = {
      Business: 'primary', // Group
      Personal: 'danger',  // Private
      Family: 'warning',   // Semi-Private
      Holiday: 'success',
      ETC: 'info'
    };

    let inlineCalInstance = null;

    // ۱. تقویم کوچک سایدبار
    if (inlineCalendar) {
      inlineCalInstance = inlineCalendar.flatpickr({
        monthSelectorType: 'static',
        static: true,
        inline: true
      });
    }

    // ۲. فیلتر کردن ایونت‌ها
    function selectedCalendars() {
      let selected = [],
        filterInputChecked = [].slice.call(document.querySelectorAll('.input-filter:checked'));

      filterInputChecked.forEach(item => {
        selected.push(item.getAttribute('data-value').toLowerCase());
      });
      return selected;
    }

    function fetchEvents(info, successCallback) {
      let calendars = selectedCalendars();
      // ایونت‌ها از فایل app-calendar-events.js خوانده می‌شوند
      let selectedEvents = window.events.filter(function (event) {
        return calendars.includes(event.extendedProps.calendar.toLowerCase());
      });
      successCallback(selectedEvents);
    }

    // ۳. مدیریت دکمه منوی موبایل (Toggler)
    function modifyToggler() {
      const fcSidebarToggleButton = document.querySelector('.fc-sidebarToggle-button');
      if (!fcSidebarToggleButton) return;
      
      fcSidebarToggleButton.classList.remove('fc-button-primary');
      fcSidebarToggleButton.classList.add('d-lg-none', 'd-inline-block', 'ps-0');
      while (fcSidebarToggleButton.firstChild) {
        fcSidebarToggleButton.firstChild.remove();
      }
      fcSidebarToggleButton.setAttribute('data-bs-toggle', 'sidebar');
      fcSidebarToggleButton.setAttribute('data-overlay', '');
      fcSidebarToggleButton.setAttribute('data-target', '#app-calendar-sidebar');
      fcSidebarToggleButton.insertAdjacentHTML(
        'beforeend',
        '<i class="icon-base ti tabler-menu-2 icon-lg text-heading"></i>'
      );
    }

    // ۴. اینیت کردن FullCalendar
    let calendar = new Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: fetchEvents,
      plugins: [dayGridPlugin, interactionPlugin, listPlugin, timegridPlugin],
      editable: false, // غیرفعال کردن درگ و دراپ
      dragScroll: true,
      dayMaxEvents: 3,
      headerToolbar: {
        start: 'sidebarToggle, prev, next, title',
        end: 'dayGridMonth,timeGridWeek,listMonth'
      },
      direction: direction,
      initialDate: new Date(),
      navLinks: true,
      eventClassNames: function ({ event: calendarEvent }) {
        const colorName = calendarColors[calendarEvent._def.extendedProps.calendar];
        return ['bg-label-' + colorName];
      },
      eventClick: function (info) {
        // اگر ایونت لینک دارد (مثلاً لینک کلاس آنلاین)، باز شود
        if (info.event.url) {
          info.jsEvent.preventDefault();
          window.open(info.event.url, '_blank');
        }
      },
      datesSet: function () { modifyToggler(); },
      viewDidMount: function () { modifyToggler(); }
    });

    calendar.render();
    modifyToggler();

    // ۵. عملکرد فیلترها (چک‌باکس‌ها)
    if (selectAll) {
      selectAll.addEventListener('click', e => {
        document.querySelectorAll('.input-filter').forEach(c => (c.checked = e.currentTarget.checked));
        calendar.refetchEvents();
      });
    }

    if (filterInputs) {
      filterInputs.forEach(item => {
        item.addEventListener('click', () => {
          selectAll.checked = document.querySelectorAll('.input-filter:checked').length === document.querySelectorAll('.input-filter').length;
          calendar.refetchEvents();
        });
      });
    }

    // ۶. تغییر تاریخ با تقویم کوچک
    if (inlineCalInstance) {
        inlineCalInstance.config.onChange.push(function (date) {
            calendar.gotoDate(moment(date[0]).format('YYYY-MM-DD'));
            modifyToggler();
        });
    }
  })();
});