/**
 * Page User List
 */

'use strict';

// Datatable (js)
document.addEventListener('DOMContentLoaded', function (e) {
  let borderColor, bodyBg, headingColor;

  if (isDarkStyle) {
    borderColor = config.colors_dark.borderColor;
    bodyBg = config.colors_dark.bodyBg;
    headingColor = config.colors_dark.headingColor;
  } else {
    borderColor = config.colors.borderColor;
    bodyBg = config.colors.bodyBg;
    headingColor = config.colors.headingColor;
  }

  // Variable declaration for table
  const dt_user_table = document.querySelector('.datatables-users');
  const userView = '/admin/users/'; // مسیر مشاهده جزئیات کاربر
  const statusObj = {
    1: { title: 'Pending', class: 'bg-label-warning' },
    2: { title: 'Active', class: 'bg-label-success' },
    3: { title: 'Inactive', class: 'bg-label-secondary' }
  };

  // Users datatable
  if (dt_user_table) {
    const dt_user = new DataTable(dt_user_table, {
      ajax: {
        url: route('admin.api.coach.list'), 
        type: 'GET'
      },
      columns: [
        { data: 'user' }, // نام و آواتار
        { data: 'wallet' },      // موجودی کیف پول
        { data: 'join_at' },       // وضعیت
        { data: 'created_at' },   // تاریخ عضویت
        { data: 'action' }        // دکمه‌ها
      ],
      columnDefs: [
        {
          // ستون ۱: نام و آواتار
          targets: 0,
          responsivePriority: 1,
          render: function (data, type, full, meta) {
            var $name = data.first_name + " " + data.last_name;
            var $email = data.email;
            var $image = data.avatar;
            var $initials = data.initials;
            var $color = data.color || 'primary';
            var $id = data.id;

            var $output;

            if ($image) {
              // عکس پروفایل
              $output = '<img src="' + $image + '" alt="Avatar" class="rounded-circle">';
            } else {
              // حروف اول (اگر عکس نبود)
              // اگر کنترلر initials نفرستاد، اینجا محاسبه می‌کنیم (Fallback)
              if(!$initials){
                  $initials = ($name.match(/\b\w/g) || []).slice(0, 2).join('').toUpperCase();
              }
              $output = '<span class="avatar-initial rounded-circle bg-label-' + $color + '">' + $initials + '</span>';
            }

            // خروجی HTML
            var $row_output =
              '<div class="d-flex justify-content-start align-items-center user-name">' +
              '<div class="avatar-wrapper">' +
              '<div class="avatar avatar-sm me-3">' + $output + '</div>' +
              '</div>' +
              '<div class="d-flex flex-column">' +
              '<a href="' + userView + $id + '" class="text-heading text-truncate"><span class="fw-medium">' + $name + '</span></a>' +
              '<small class="text-muted">' + $email + '</small>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        {
          // ستون ۲: پلن (فقط متن ساده یا رنگی)
          targets: 1,
          render: function (data, type, full, meta) {
            return '<span class="text-success fw-bold">' + data.financial.balance_formatted + '</span>';
          }
        },
        {
          // ستون ۳: موجودی (با رنگ‌بندی)
          targets: 2,
          render: function (data, type, full, meta) {
             // فرض: data رشته‌ای مثل "$540.00" است
             return '<span class="fw-medium text-heading">' + data + '</span>';
          }
        },
        {
          // ستون ۵: وضعیت (Status)
          targets: 3,
          render: function (data, type, full, meta) {
            return '<span class="fw-medium text-heading">' + full.user.country + '</span>';
          }
        },
        {
          // ستون ۶: اکشن‌ها
          targets: -1,
          title: 'Actions',
          searchable: false,
          orderable: false,
          render: function (data, type, full, meta) {
            // data همان ID کاربر است که از کنترلر فرستادیم
            return (
              '<div class="d-flex align-items-center">' +
              '<a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record" data-id="'+data+'"><i class="ti tabler-trash ti-md"></i></a>' +
              '<a href="' + userView + data + '" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill"><i class="ti tabler-eye ti-md"></i></a>' +
              '<a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti tabler-dots-vertical ti-md"></i></a>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="javascript:;" class="dropdown-item">Edit</a>' +
              '<a href="javascript:;" class="dropdown-item">Suspend</a>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      order: [[3, 'desc']], // مرتب‌سازی پیش‌فرض بر اساس تاریخ عضویت
      dom:
        '<"row mx-2"' +
        '<"col-md-2"<"me-3"l>>' +
        '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>' +
        '>t' +
        '<"row mx-2"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      language: {
        sLengthMenu: '_MENU_',
        search: '',
        searchPlaceholder: 'Search User',
        paginate: {
          next: '<i class="ti tabler-chevron-right ti-sm"></i>',
          previous: '<i class="ti tabler-chevron-left ti-sm"></i>'
        }
      },
      // Buttons with Dropdown
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-secondary dropdown-toggle mx-3',
          text: '<i class="ti tabler-upload me-1 ti-xs"></i>Export',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ti tabler-printer me-2" ></i>Print',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'csv',
              text: '<i class="ti tabler-file-text me-2" ></i>Csv',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'excel',
              text: '<i class="ti tabler-file-spreadsheet me-2"></i>Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'pdf',
              text: '<i class="ti tabler-file-description me-2"></i>Pdf',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            },
            {
              extend: 'copy',
              text: '<i class="ti tabler-copy me-2" ></i>Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3, 4] }
            }
          ]
        },
        {
            text: '<i class="ti tabler-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New Coach</span>',
            className: 'add-new btn btn-primary',
            attr: {
              'data-bs-toggle': 'offcanvas',
              'data-bs-target': '#offcanvasAddCoach'
            }
          },
      ],
      // Responsive settings
      responsive: {
        details: {
          display: DataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['user_details']['name']; // دسترسی به آبجکت داخلی
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });
  }
  // Filter form control to default size
    // ? setTimeout used for coach-list table initialization
    setTimeout(() => {
      const elementsToModify = [
        { selector: '.dt-buttons', classToAdd: 'gap-4' },
        { selector: '.dt-buttons.btn-group', classToAdd: 'mb-6 mb-md-0' },
        { selector: '.dt-buttons .btn-group', classToAdd: 'me-md-0 me-6' },
        // تبدیل دکمه Export به استایل شفاف (Label)
        { selector: '.dt-buttons .btn-group .btn', classToRemove: 'btn-secondary', classToAdd: 'btn-label-secondary' },
        // حذف کلاس خاکستری از دکمه Add New Coach (این همان خط حیاتی است)
        { selector: '.dt-buttons .btn-group ~ .btn', classToRemove: 'btn-secondary' },
        { selector: '.dt-search .form-control', classToRemove: 'form-control-sm', classToAdd: 'ms-0' },
        { selector: '.dt-length .form-select', classToRemove: 'form-select-sm' },
        { selector: '.dt-layout-table', classToRemove: 'row mt-2' },
        { selector: '.dt-layout-start', classToAdd: 'mt-0' },
        { selector: '.dt-layout-end', classToAdd: 'gap-md-2 gap-0 mt-0' },
        { selector: '.dt-layout-full', classToRemove: 'col-md col-12', classToAdd: 'table-responsive' }
      ];

      // اعمال تغییرات روی المنت‌ها
      elementsToModify.forEach(({ selector, classToRemove, classToAdd }) => {
        document.querySelectorAll(selector).forEach(element => {
          if (classToRemove) {
            classToRemove.split(' ').forEach(className => element.classList.remove(className));
          }
          if (classToAdd) {
            classToAdd.split(' ').forEach(className => element.classList.add(className));
          }
        });
      });
    }, 150); // کمی زمان بیشتر برای اطمینان از رندر کامل
  // Delete Record Logic
  $(document).on('click', '.delete-record', function () {
    var user_id = $(this).data('id');
    var $row = $(this).parents('tr'); // سطر جدول برای حذف گرافیکی

    // SweetAlert Confirm
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      customClass: {
        confirmButton: 'btn btn-primary me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
      if (result.value) {
        // AJAX Request
        $.ajax({
            url: '/admin/users/' + user_id,
            type: 'DELETE',
            headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') },
            success: function(response) {
                // حذف گرافیکی سطر یا رفرش جدول
                // dt_user.row($row).remove().draw();
                // یا:
                window.location.reload(); 
                
                Swal.fire({
                  icon: 'success',
                  title: 'Deleted!',
                  text: 'User has been deleted.',
                  customClass: { confirmButton: 'btn btn-success' }
                });
            },
            error: function(xhr) {
                Swal.fire({
                  icon: 'error',
                  title: 'Error!',
                  text: 'Something went wrong.',
                  customClass: { confirmButton: 'btn btn-success' }
                });
            }
        });
      }
    });
  });

  // Filter form control to default size
  // ? setTimeout used for user-list table initialization
  setTimeout(() => {
    $('.dt-buttons').addClass('d-flex flex-wrap justify-content-center');
    $('div.dt-container .dt-search input').addClass('ms-0');
    $('div.dt-container .dt-length select').addClass('ms-0');
    $('div.dt-container .dt-length').addClass('text-start');
    $('div.dt-container .dt-search').addClass('text-start');
  }, 100);

});