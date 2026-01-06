@php
	// Use blank layout to remove Navbar, Sidebar, and Footer automatically
	$pageConfigs = ['myLayout' => 'blank'];
	$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Print Invoice')

@section('page-style')
	@vite('resources/assets/vendor/scss/pages/app-invoice-print.scss')
	<style>
		/* Optimization for physical paper and PDF generation */
		body {
			background-color: #fff !important;
		}
		.invoice-print {
			width: 100%;
			background-color: #fff !important;
			padding: 0 !important; /* Removes inner padding for edge-to-edge look */
		}
		@media print {
			.invoice-print {
				padding: 0 !important;
				margin: 0 !important;
			}
			/* Ensures background colors in the table header are printed */
			.table thead th {
				background-color: #f8f7fa !important;
				-webkit-print-color-adjust: exact;
			}
		}
	</style>
@endsection

@section('page-script')
	<script>
		// Automatically open the print dialog when the page finishes loading
		window.onload = function() {
			window.print();
		};
	</script>
@endsection

@section('content')
	<div class="invoice-print p-6">
		<div class="d-flex justify-content-between flex-row mb-6">
			<div>
				<div class="d-flex svg-illustration mb-4 gap-2 align-items-center">
					<span class="app-brand-logo demo">@include('_partials.macros')</span>

					<span class="app-brand-text fw-bold fs-4 ms-50">{{ config('variables.templateName') }}</span>
				</div>
				<p class="mb-1">SepFit Specialized Fitness Academy</p>
				<p class="mb-0">Support: +98 (21) 1234-5678</p>
			</div>
			<div class="text-end">
				<h5 class="mb-2">Invoice #{{ $invoice->number ?? 'INV-86423' }}</h5>
				<div class="mb-1 text-heading">
					<span>Date Issued:</span>
					<span class="fw-medium">{{ \Illuminate\Support\Carbon::now()->format('M d, Y') }}</span>
				</div>
			</div>
		</div>

		<hr class="mb-6" />

		<div class="row d-flex justify-content-between mb-6">
			<div class="col-6">
				<h6>Invoice To:</h6>
				<p class="mb-1 fw-medium">{{ auth()->user()->name }}</p>
				<p class="mb-1">Phone: {{ auth()->user()->phone ?? 'N/A' }}</p>
				<p class="mb-0">Email: {{ auth()->user()->email }}</p>
			</div>
			<div class="col-6">
				<h6>Payment Summary:</h6>
				<table>
					<tbody>
					<tr>
						<td class="pe-4">Total Amount:</td>
						<td class="fw-medium">{{ number_format($invoice->amount ?? 1500) }} USD</td>
					</tr>
					<tr>
						<td class="pe-4">Payment Method:</td>
						<td>System Wallet / Online</td>
					</tr>
					<tr>
						<td class="pe-4">Status:</td>
						<td class="text-success">Paid / Confirmed</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="table-responsive border rounded mb-6">
			<table class="table m-0">
				<thead>
				<tr>
					<th>Course Title</th>
					<th>Training Type</th>
					<th>Duration</th>
					<th>Unit Cost</th>
					<th>Total</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td class="text-nowrap text-heading">Professional Bodybuilding (Phase 1)</td>
					<td>Online / Digital Session</td>
					<td>40 Hours</td>
					<td>1,500</td>
					<td>1,500</td>
				</tr>
				</tbody>
			</table>
		</div>

		<div class="row">
			<div class="col-12">
				<table class="table m-0 table-borderless">
					<tbody>
					<tr>
						<td class="align-top px-0 py-6">
							<p class="mb-1">
								<span class="me-2 fw-medium">Instructor:</span>
								<span>SepFit Team</span>
							</p>
							<span>Thank you for choosing SepFit for your professional training.</span>
						</td>
						<td class="px-0 py-6 w-px-150">
							<p class="mb-2">Subtotal:</p>
							<p class="mb-2">Discount:</p>
							<p class="mb-0 pt-2 fw-bold">Total:</p>
						</td>
						<td class="text-end px-0 py-6 w-px-100">
							<p class="fw-medium mb-2">1,500</p>
							<p class="fw-medium mb-2">0</p>
							<p class="fw-bold mb-0 pt-2">1,500 USD</p>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

		<hr class="mt-4 mb-6" />

		<div class="row">
			<div class="col-12">
				<span class="fw-medium">Note:</span>
				<span>This is a system-generated document and serves as an official proof of course enrollment under the SepFit Academy regulations.</span>
			</div>
		</div>
	</div>
@endsection
