/**
 * App Calendar - View Only Version
 */

'use strict';

// اضافه کردن Importها برای شناسایی توسط Vite (الزامی برای رفع ReferenceError)
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import listPlugin from '@fullcalendar/list';
import timegridPlugin from '@fullcalendar/timegrid';

document.addEventListener('DOMContentLoaded', function () {
	const direction = isRtl ? 'rtl' : 'ltr';

	(function () {
		const calendarEl = document.getElementById('calendar');
		const appCalendarSidebar = document.querySelector('.app-calendar-sidebar');
		const appOverlay = document.querySelector('.app-overlay');
		const selectAll = document.querySelector('.select-all');
		const filterInputs = Array.from(document.querySelectorAll('.input-filter'));
		const inlineCalendar = document.querySelector('.inline-calendar');

		const statusColors = {
			scheduled: 'primary',           // آبی - برنامه‌ریزی شده
			completed: 'success',           // سبز - انجام شده
			cancelled_user: 'danger',        // قرمز - کنسل توسط کاربر
			cancelled_coach: 'danger',       // قرمز - کنسل توسط مربی
			cancelled_system: 'danger',
		};

		let inlineCalInstance = null;

		if (inlineCalendar) {
			inlineCalInstance = inlineCalendar.flatpickr({
				monthSelectorType: 'static',
				static: true,
				inline: true
			});
		}

		function selectedCalendars() {
			let selected = [],
				filterInputChecked = [].slice.call(document.querySelectorAll('.input-filter:checked'));

			filterInputChecked.forEach(item => {
				selected.push(item.getAttribute('data-value').toLowerCase());
			});
			return selected;
		}

		function fetchEvents(info, successCallback) {
			// let calendars = selectedCalendars();
			// // اصلاح شده: اضافه کردن چک کردن وجود calendar برای رفع TypeError
			// let selectedEvents = (window.events || []).filter(function (event) {
			// 	return event.extendedProps &&
			// 		event.extendedProps.calendar &&
			// 		calendars.includes(event.extendedProps.calendar.toLowerCase());
			// });
			successCallback(window.events);
		}

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

		let calendar = new Calendar(calendarEl, {
			initialView: 'dayGridMonth',
			events: fetchEvents,
			plugins: [dayGridPlugin, interactionPlugin, listPlugin, timegridPlugin],
			editable: false,
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
				const sessionStatus = calendarEvent._def.extendedProps.status || 'scheduled';
				const colorName = statusColors[sessionStatus] || 'info'; // اگر وضعیتی تعریف نشده بود رنگ info
				return ['bg-label-' + colorName];
			},
			eventClick: function (info) {
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

		if (inlineCalInstance) {
			inlineCalInstance.config.onChange.push(function (date) {
				calendar.gotoDate(moment(date[0]).format('YYYY-MM-DD'));
				modifyToggler();
			});
		}
	})();
});
