/**
 * App Package List
 */

'use strict';

// Datatable (jquery)
$(function () {
	var dt_package_table = $('.datatables-packages'),
		offCanvasForm = $('#offcanvasAddPackage'),
		offCanvasEl = document.getElementById('offcanvasAddPackage');

	var offCanvasObj = new bootstrap.Offcanvas(offCanvasEl);

	// Shared Variables
	var borderColor, bodyBg, headingColor;
	if (isDarkStyle) {
		borderColor = config.colors_dark.borderColor;
		bodyBg = config.colors_dark.bodyBg;
		headingColor = config.colors_dark.headingColor;
	} else {
		borderColor = config.colors.borderColor;
		bodyBg = config.colors.bodyBg;
		headingColor = config.colors.headingColor;
	}
	let notyf = new Notyf({
		duration: 4000,
		ripple: true,
		position: { x: 'right', y: 'top' },
		dismissible: true,
		types: [
			{
				type: 'success',
				background: '#28c76f', // Vuexy Success Color
				icon: {
					className: 'ti tabler-circle-check text-white', // Tabler Icon
					tagName: 'i'
				}
			},
			{
				type: 'error',
				background: '#ea5455', // Vuexy Error Color
				icon: {
					className: 'ti tabler-x text-white', // Tabler Icon
					tagName: 'i'
				}
			}
		]
	});
	// DataTable Initialization
	if (dt_package_table.length) {
		var dt_package = dt_package_table.DataTable({
			ajax: route('admin.api.package.index'), // آدرس روت ایندکس (باید در routes تعریف شده باشد)
			columns: [
				{ data: 'name' },
				{ data: 'type' },
				{ data: 'total_sessions' }, // Placeholder, rendered below
				{ data: 'price' },
				{ data: 'validity_days' },
				{ data: 'status' },
				{ data: 'action' }
			],
			columnDefs: [
				{
					// Name Column
					targets: 0,
					render: function (data, type, full, meta) {
						return '<span class="fw-medium text-heading">' + data + '</span>';
					}
				},
				{
					// Type Column
					targets: 1,
					render: function (data, type, full, meta) {
						var $type = full['type'];
						var $badge_class = 'bg-label-primary';
						if ($type === 'semi_private') $badge_class = 'bg-label-info';
						if ($type === 'private') $badge_class = 'bg-label-warning';

						return '<span class="badge ' + $badge_class + ' text-capitalize">' + $type.replace('_', ' ') + '</span>';
					}
				},
				{
					// Details (Sessions/Capacity)
					targets: 2,
					render: function (data, type, full, meta) {
						return `
								<div class="d-flex flex-column">
										<span class="text-body text-truncate"><i class="ti tabler-calendar-event me-1 fs-tiny"></i> ${full['total_sessions']} Sessions</span>
										<small class="text-muted"><i class="ti tabler-users me-1 fs-tiny"></i> Capacity: ${full['capacity']}</small>
								</div>
						`;
					}
				},
				{
					// Price
					targets: 3,
					render: function (data, type, full, meta) {
						return '<span class="fw-bold">' + data + '</span>';
					}
				},
				{
						// Validity
						targets: 4,
						render: function (data, type, full, meta) {
							return data + ' Days';
						}
				},
				{
					// Status
					targets: 5,
					render: function (data, type, full, meta) {
						if(data === 1) return '<span class="badge bg-label-success">Active</span>';
						return '<span class="badge bg-label-secondary">Inactive</span>';
					}
				},
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					searchable: false,
					render: function (data, type, full, meta) {
						// data contains raw attributes from controller
						// We verify it's an object, then stringify it for the HTML attribute
						let jsonData = JSON.stringify(data);
						return (
							'<div class="d-flex align-items-center">' +
							`<a href="javascript:;" class="text-body edit-record me-2" data-data='${jsonData}'><i class="ti tabler-edit ti-sm"></i></a>` +
							`<a href="javascript:;" class="text-body delete-record" data-id="${full.id}"><i class="ti tabler-trash ti-sm"></i></a>` +
							'</div>'
						);
					}
				}
			],
			order: [[0, 'asc']],
			layout: {
			  topStart: {
			    rowClass: 'row m-3 my-0 justify-content-between',
			    features: [
			      {
			        search: {
			          placeholder: 'Search Package',
			          text: '_INPUT_'
			        }
			      }
			    ]
			  },
			  topEnd: {
			    features: [
			      {
			        pageLength: {
			          menu: [10, 25, 50, 100],
			          text: '_MENU_'
			        }
			      },
			      {
			        buttons: [
			          {
			            extend: 'collection',
			            className: 'btn btn-label-primary dropdown-toggle',
			            text: '<span class="d-flex align-items-center gap-1"><i class="icon-base ti tabler-upload icon-xs"></i> <span class="d-none d-sm-inline-block">Export</span></span>',
			            buttons: [
			              {
			                extend: 'print',
			                text: `<span class="d-flex align-items-center"><i class="icon-base ti tabler-printer me-1"></i>Print</span>`,
			                className: 'dropdown-item',
			                exportOptions: {
			                  columns: [3, 4, 5, 6],
			                  format: {
			                    body: function (inner, coldex, rowdex) {
			                      if (inner.length <= 0) return inner;

			                      // Check if inner is HTML content
			                      if (inner.indexOf('<') > -1) {
			                        const parser = new DOMParser();
			                        const doc = parser.parseFromString(inner, 'text/html');

			                        // Get all text content
			                        let text = '';

			                        // Handle specific elements
			                        const userNameElements = doc.querySelectorAll('.customer-name');
			                        if (userNameElements.length > 0) {
			                          userNameElements.forEach(el => {
			                            // Get text from nested structure
			                            const nameText =
			                              el.querySelector('.fw-medium')?.textContent ||
			                              el.querySelector('.d-block')?.textContent ||
			                              el.textContent;
			                            text += nameText.trim() + ' ';
			                          });
			                        } else {
			                          // Get regular text content
			                          text = doc.body.textContent || doc.body.innerText;
			                        }

			                        return text.trim();
			                      }

			                      return inner;
			                    }
			                  }
			                },
			                customize: function (win) {
			                  win.document.body.style.color = config.colors.headingColor;
			                  win.document.body.style.borderColor = config.colors.borderColor;
			                  win.document.body.style.backgroundColor = config.colors.bodyBg;
			                  const table = win.document.body.querySelector('table');
			                  table.classList.add('compact');
			                  table.style.color = 'inherit';
			                  table.style.borderColor = 'inherit';
			                  table.style.backgroundColor = 'inherit';
			                }
			              },
			              {
			                extend: 'csv',
			                text: `<span class="d-flex align-items-center"><i class="icon-base ti tabler-file me-1"></i>Csv</span>`,
			                className: 'dropdown-item',
			                exportOptions: {
			                  columns: [3, 4, 5, 6],
			                  format: {
			                    body: function (inner, coldex, rowdex) {
			                      if (inner.length <= 0) return inner;

			                      // Parse HTML content
			                      const parser = new DOMParser();
			                      const doc = parser.parseFromString(inner, 'text/html');

			                      let text = '';

			                      // Handle customer-name elements specifically
			                      const userNameElements = doc.querySelectorAll('.customer-name');
			                      if (userNameElements.length > 0) {
			                        userNameElements.forEach(el => {
			                          // Get text from nested structure - try different selectors
			                          const nameText =
			                            el.querySelector('.fw-medium')?.textContent ||
			                            el.querySelector('.d-block')?.textContent ||
			                            el.textContent;
			                          text += nameText.trim() + ' ';
			                        });
			                      } else {
			                        // Handle other elements (status, role, etc)
			                        text = doc.body.textContent || doc.body.innerText;
			                      }

			                      return text.trim();
			                    }
			                  }
			                }
			              },
			              {
			                extend: 'excel',
			                text: `<span class="d-flex align-items-center"><i class="icon-base ti tabler-upload me-1"></i>Excel</span>`,
			                className: 'dropdown-item',
			                exportOptions: {
			                  columns: [3, 4, 5, 6],
			                  format: {
			                    body: function (inner, coldex, rowdex) {
			                      if (inner.length <= 0) return inner;

			                      // Parse HTML content
			                      const parser = new DOMParser();
			                      const doc = parser.parseFromString(inner, 'text/html');

			                      let text = '';

			                      // Handle customer-name elements specifically
			                      const userNameElements = doc.querySelectorAll('.customer-name');
			                      if (userNameElements.length > 0) {
			                        userNameElements.forEach(el => {
			                          // Get text from nested structure - try different selectors
			                          const nameText =
			                            el.querySelector('.fw-medium')?.textContent ||
			                            el.querySelector('.d-block')?.textContent ||
			                            el.textContent;
			                          text += nameText.trim() + ' ';
			                        });
			                      } else {
			                        // Handle other elements (status, role, etc)
			                        text = doc.body.textContent || doc.body.innerText;
			                      }

			                      return text.trim();
			                    }
			                  }
			                }
			              },
			              {
			                extend: 'pdf',
			                text: `<span class="d-flex align-items-center"><i class="icon-base ti tabler-file-text me-1"></i>Pdf</span>`,
			                className: 'dropdown-item',
			                exportOptions: {
			                  columns: [3, 4, 5, 6],
			                  format: {
			                    body: function (inner, coldex, rowdex) {
			                      if (inner.length <= 0) return inner;

			                      // Parse HTML content
			                      const parser = new DOMParser();
			                      const doc = parser.parseFromString(inner, 'text/html');

			                      let text = '';

			                      // Handle customer-name elements specifically
			                      const userNameElements = doc.querySelectorAll('.customer-name');
			                      if (userNameElements.length > 0) {
			                        userNameElements.forEach(el => {
			                          // Get text from nested structure - try different selectors
			                          const nameText =
			                            el.querySelector('.fw-medium')?.textContent ||
			                            el.querySelector('.d-block')?.textContent ||
			                            el.textContent;
			                          text += nameText.trim() + ' ';
			                        });
			                      } else {
			                        // Handle other elements (status, role, etc)
			                        text = doc.body.textContent || doc.body.innerText;
			                      }

			                      return text.trim();
			                    }
			                  }
			                }
			              },
			              {
			                extend: 'copy',
			                text: `<i class="icon-base ti tabler-copy me-1"></i>Copy`,
			                className: 'dropdown-item',
			                exportOptions: {
			                  columns: [3, 4, 5, 6],
			                  format: {
			                    body: function (inner, coldex, rowdex) {
			                      if (inner.length <= 0) return inner;

			                      // Parse HTML content
			                      const parser = new DOMParser();
			                      const doc = parser.parseFromString(inner, 'text/html');

			                      let text = '';

			                      // Handle customer-name elements specifically
			                      const userNameElements = doc.querySelectorAll('.customer-name');
			                      if (userNameElements.length > 0) {
			                        userNameElements.forEach(el => {
			                          // Get text from nested structure - try different selectors
			                          const nameText =
			                            el.querySelector('.fw-medium')?.textContent ||
			                            el.querySelector('.d-block')?.textContent ||
			                            el.textContent;
			                          text += nameText.trim() + ' ';
			                        });
			                      } else {
			                        // Handle other elements (status, role, etc)
			                        text = doc.body.textContent || doc.body.innerText;
			                      }

			                      return text.trim();
			                    }
			                  }
			                }
			              }
			            ]
			          },
			          {
			            text: '<i class="ti tabler-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add Package</span>',
			                      className: 'add-new btn btn-primary',
			                      attr: {
			                        'data-bs-toggle': 'offcanvas',
			                        'data-bs-target': '#offcanvasAddPackage'
			                      },
			          }
			        ]
			      }
			    ]
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
			        return 'Details of ' + data['customer'];
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
	 setTimeout(() => {
    const elementsToModify = [
      { selector: '.dt-buttons', classToAdd: 'gap-4' },
      { selector: '.dt-buttons.btn-group', classToAdd: 'mb-6 mb-md-0' },
      { selector: '.dt-buttons .btn-group', classToAdd: 'me-md-0 me-6' },
      { selector: '.dt-buttons .btn-group .btn', classToRemove: 'btn-secondary', classToAdd: 'btn-label-secondary' },
      { selector: '.dt-buttons .btn-group ~ .btn', classToRemove: 'btn-secondary' },
      { selector: '.dt-search .form-control', classToRemove: 'form-control-sm', classToAdd: 'ms-0' },
      { selector: '.dt-length .form-select', classToRemove: 'form-select-sm' },
      { selector: '.dt-length', classToAdd: 'mt-0 mt-md-6' },
      { selector: '.dt-layout-table', classToRemove: 'row mt-2' },
      { selector: '.dt-layout-start', classToAdd: 'mt-0' },
      { selector: '.dt-layout-end', classToAdd: 'gap-md-2 gap-0 mt-0' },
      { selector: '.dt-layout-full', classToRemove: 'col-md col-12', classToAdd: 'table-responsive' }
    ];

    // Delete record
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

	// --- Form Validation ---
	const addNewPackageForm = document.getElementById('addNewPackageForm');
	const fv = FormValidation.formValidation(addNewPackageForm, {
		fields: {
			'name[en]': {
				validators: {
					notEmpty: { message: 'Please enter package name (English)' }
				}
			},
			type: { validators: { notEmpty: { message: 'Please select type' } } },
			price: { validators: { notEmpty: { message: 'Please enter price' } } },
			total_sessions: { validators: { notEmpty: { message: 'Required' } } },
			capacity: { validators: { notEmpty: { message: 'Required' } } },
			validity_days: { validators: { notEmpty: { message: 'Required' } } }
		},
		plugins: {
			trigger: new FormValidation.plugins.Trigger(),
			bootstrap5: new FormValidation.plugins.Bootstrap5({
				eleValidClass: '',
				rowSelector: '.mb-3, .col-6'
			}),
			submitButton: new FormValidation.plugins.SubmitButton(),
			autoFocus: new FormValidation.plugins.AutoFocus()
		}
	}).on('core.form.valid', function () {

		// Handle Form Submit (Create / Update)
		var formData = $(addNewPackageForm).serialize();
		var id = $('#package_id').val();
		var url = id ? route('admin.api.package.update', {'id': id}) : route('admin.api.package.create');
		var method = 'POST';

		$.ajax({
			data: formData,
			url: url,
			type: method,
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success: function (response) {
				offCanvasObj.hide();
				dt_package.ajax.reload(null, false);
				notyf.success(response.message);
			},
			error: function (err) {
				notyf.error(response.message);
			}
		});
	});

	// --- Edit Record ---
	$(document).on('click', '.edit-record', function () {
		var data = $(this).data('data'); // Get full JSON data
		console.log(data);
		// Fill form
		$('#package_id').val(data.id);
		let names = JSON.parse(data.name);
		$('#add-package-name').val(data.name); // If name is object, handle it (data.name.en)
		$('#add-package-price').val(data.price);
		$('#add-package-sessions').val(data.total_sessions);
		$('#add-package-capacity').val(data.capacity);
		$('#add-package-validity').val(data.validity_days);
		$('#add-package-type').val(data.type).trigger('change');
		$('#add-package-status').prop('checked', data.status === 1);

		// Update Title
		$('#offcanvasAddPackageLabel').text('Edit Package');

		offCanvasObj.show();
	});

	// --- Delete Record ---
	$(document).on('click', '.delete-record', function () {
		var id = $(this).data('id');

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
				$.ajax({
					type: 'DELETE',
					url: route('admin.api.package.delete', {'package': id}),
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					success: function (response) {
						dt_package.ajax.reload(null, false);

						notyf.success(response.message);
					}
				});
			}
		});
	});

});
