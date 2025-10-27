/**
 * App eCommerce Category List
 */

'use strict';

// Comment editor

const commentEditor = document.querySelector('.comment-editor');

if (commentEditor) {
  new Quill(commentEditor, {
    modules: {
      toolbar: '.comment-toolbar'
    },
    placeholder: 'Write a Comment...',
    theme: 'snow'
  });
}

// Datatable (js)
document.addEventListener('DOMContentLoaded', function (e) {
  var dt_category_list_table = document.querySelector('.datatables-category-list');

  //select2 for dropdowns in offcanvas

  var select2 = $('.select2');
  if (select2.length) {
    select2.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>').select2({
        dropdownParent: $this.parent(),
        placeholder: $this.data('placeholder') //for dynamic placeholder
      });
    });
  }

  // Customers List Datatable

  if (dt_category_list_table) {
    var dt_category = new DataTable(dt_category_list_table, {
      ajax: {
        url: '/api/category/list', // <-- 1. ADD YOUR API URL HERE
        type: 'GET', // Or 'POST', etc., depending on your API
        // dataSrc is the key in the JSON response that holds the array of data.
        // - Use 'data' if your API returns: { "data": [...] }
        // - Use '' (empty string) if your API returns just the array: [...]
        dataSrc: 'data' // <-- 2. ADJUST THIS BASED ON YOUR API RESPONSE
      }, // JSON file to add data
      columns: [
        // columns according to JSON
        { data: 'id' },
        { data: 'id' },
        { data: 'name' },
        { data: 'slug' },
        { data: 'posts_count' },
        { data: 'id' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          searchable: false,
          orderable: false,
          responsivePriority: 1,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          targets: 1,
          responsivePriority: 2,
          render: function (data, type, full, meta) {
            const rowOutput = `
              <div class="d-flex align-items-center">
                <div class="d-flex flex-column justify-content-center">
                  <span class="text-heading text-wrap fw-medium">${data}</span>
                </div>
              </div>`;
            return rowOutput;
          }
        },
        {
          // Total post
          targets: 4,
          responsivePriority: 4,
          render: function (data, type, full, meta) {
            const posts_count = full['posts_count'];
            return '<div class="text-sm-end">' + posts_count + '</div>';
          }
        },
        // {
        //   // Total Earnings
        //   targets: 4,
        //   orderable: false,
        //   render: function (data, type, full, meta) {
        //     const total_earnings = full['total_earnings'];
        //     return "<div class='mb-0 text-sm-end'>" + total_earnings + '</div';
        //   }
        // },
        {
          // Actions
          targets: -1,
          title: 'Actions',
          searchable: false,
          orderable: false,
          render: function (data, type, full, meta) {
            return `
              <div class="d-flex align-items-sm-center justify-content-sm-center">
                <button class="btn btn-text-secondary rounded-pill waves-effect btn-icon"><i class="icon-base ti tabler-edit icon-22px"></i></button>
                <button class="btn btn-text-secondary rounded-pill waves-effect btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="icon-base ti tabler-dots-vertical icon-22px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end m-0">
                  <a href="javascript:void(0);" class="dropdown-item">View</a>
                  <a href="javascript:void(0);" class="dropdown-item">Suspend</a>
                </div>
              </div>
            `;
          }
        }
      ],
      select: {
        style: 'multi',
        selector: 'td:nth-child(2)'
      },
      order: [2, 'desc'],
      displayLength: 7,
      layout: {
        topStart: {
          rowClass: 'row m-3 my-0 justify-content-between',
          features: [
            {
              search: {
                placeholder: 'Search Category',
                text: '_INPUT_'
              }
            }
          ]
        },
        topEnd: {
          rowClass: 'row m-3 my-0 justify-content-between',
          features: {
            pageLength: {
              menu: [7, 10, 25, 50, 100],
              text: '_MENU_'
            },
            buttons: [
              {
                text: `<i class="icon-base ti tabler-plus icon-16px me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add Category</span>`,
                className: 'add-new btn btn-primary',
                attr: {
                  'data-bs-toggle': 'offcanvas',
                  'data-bs-target': '#offcanvasEcommerceCategoryList'
                }
              }
            ]
          }
        },
        bottomStart: {
          rowClass: 'row mx-3 justify-content-between',
          features: ['info']
        },
        bottomEnd: 'paging'
      },
      language: {
        paginate: {
          next: '<i class="icon-base ti tabler-chevron-right scaleX-n1-rtl icon-18px"></i>',
          previous: '<i class="icon-base ti tabler-chevron-left scaleX-n1-rtl icon-18px"></i>',
          first: '<i class="icon-base ti tabler-chevrons-left scaleX-n1-rtl icon-18px"></i>',
          last: '<i class="icon-base ti tabler-chevrons-right scaleX-n1-rtl icon-18px"></i>'
        }
      },
      // For responsive popup
      responsive: {
        details: {
          display: DataTable.Responsive.display.modal({
            header: function (row) {
              const data = row.data();
              return 'Details of ' + data['categories'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            const data = columns
              .map(function (col) {
                return col.title !== '' // Do not show row in modal popup if title is blank (for check box)
                  ? `<tr data-dt-row="${col.rowIndex}" data-dt-column="${col.columnIndex}">
                      <td>${col.title}:</td>
                      <td>${col.data}</td>
                    </tr>`
                  : '';
              })
              .join('');

            if (data) {
              const div = document.createElement('div');
              div.classList.add('table-responsive');
              const table = document.createElement('table');
              div.appendChild(table);
              table.classList.add('table');
              const tbody = document.createElement('tbody');
              tbody.innerHTML = data;
              table.appendChild(tbody);
              return div;
            }
            return false;
          }
        }
      }
    });
  }

  // Filter form control to default size
  // ? setTimeout used for category-list table initialization
  setTimeout(() => {
    const elementsToModify = [
      { selector: '.dt-buttons .btn', classToRemove: 'btn-secondary' },
      { selector: '.dt-buttons.btn-group', classToAdd: 'mb-md-0 mb-6' },
      { selector: '.dt-search .form-control', classToRemove: 'form-control-sm', classToAdd: 'ms-0' },
      { selector: '.dt-search', classToAdd: 'mb-0 mb-md-6' },
      { selector: '.dt-length .form-select', classToRemove: 'form-select-sm' },
      { selector: '.dt-layout-table', classToRemove: 'row mt-2', classToAdd: 'border-top' },
      { selector: '.dt-layout-end', classToAdd: 'gap-md-2 gap-0 mt-0' },
      { selector: '.dt-layout-start', classToAdd: 'mt-0' },
      { selector: '.dt-layout-full', classToRemove: 'col-md col-12', classToAdd: 'table-responsive' }
    ];

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
  }, 100);
});

//For form validation
(function () {
  const eCommerceCategoryListForm = document.getElementById('eCommerceCategoryListForm');

  //Add New customer Form Validation
  const fv = FormValidation.formValidation(eCommerceCategoryListForm, {
    fields: {
      categoryTitle: {
        validators: {
          notEmpty: {
            message: 'Please enter category title'
          }
        }
      },
      slug: {
        validators: {
          notEmpty: {
            message: 'Please enter slug'
          }
        }
      }
    },
    plugins: {
      trigger: new FormValidation.plugins.Trigger(),
      bootstrap5: new FormValidation.plugins.Bootstrap5({
        // Use this for enabling/changing valid/invalid class
        eleValidClass: 'is-valid',
        rowSelector: function (field, ele) {
          // field is the field name & ele is the field element
          return '.form-control-validation';
        }
      }),
      submitButton: new FormValidation.plugins.SubmitButton(),
      // Submit the form when all fields are valid
      // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
      autoFocus: new FormValidation.plugins.AutoFocus()
    }
  });
})();
