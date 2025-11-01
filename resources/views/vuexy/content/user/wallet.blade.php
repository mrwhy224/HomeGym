@php
// Dummy data to be passed from your controller
// $currentBalance = 540.00;
// $currencySymbol = '$';
// $transactions = [
//     (object)['id' => 1, 'date' => 'Oct 30, 2025', 'type' => 'Wallet Deposit', 'amount' => 50.00, 'status' => 'Success', 'status_color' => 'success', 'icon' => 'tabler-arrow-up-right'],
//     (object)['id' => 2, 'date' => 'Oct 29, 2025', 'type' => 'Class Booking #1234', 'amount' => -25.00, 'status' => 'Paid', 'status_color' => 'info', 'icon' => 'tabler-arrow-down-left'],
//     (object)['id' => 3, 'date' => 'Oct 28, 2025', 'type' => 'Refund #1090', 'amount' => 10.00, 'status' => 'Refunded', 'status_color' => 'warning', 'icon' => 'tabler-receipt-refund'],
//     (object)['id' => 4, 'date' => 'Oct 27, 2025', 'type' => 'Wallet Deposit', 'amount' => 100.00, 'status' => 'Failed', 'status_color' => 'danger', 'icon' => 'tabler-arrow-up-right'],
// ];

// --- Default values for testing ---
$currentBalance = $currentBalance ?? 540.00;
$currencySymbol = $currencySymbol ?? '$';
$transactions = $transactions ?? [
    (object)['id' => 1, 'date' => 'Oct 30, 2025', 'type' => 'Wallet Deposit', 'amount' => 50.00, 'status' => 'Success', 'status_color' => 'success', 'icon' => 'tabler-arrow-up-right'],
    (object)['id' => 2, 'date' => 'Oct 29, 2025', 'type' => 'Class Booking #1234', 'amount' => -25.00, 'status' => 'Paid', 'status_color' => 'info', 'icon' => 'tabler-arrow-down-left'],
    (object)['id' => 3, 'date' => 'Oct 28, 2025', 'type' => 'Refund #1090', 'amount' => 10.00, 'status' => 'Refunded', 'status_color' => 'warning', 'icon' => 'tabler-receipt-refund'],
    (object)['id' => 4, 'date' => 'Oct 27, 2025', 'type' => 'Wallet Deposit', 'amount' => 100.00, 'status' => 'Failed', 'status_color' => 'danger', 'icon' => 'tabler-arrow-up-right'],
];
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Account settings - Billing & Plans')

@section('vendor-style')
{{-- @vite(['resources/assets/vendor/libs/select2/select2.scss']) --}}
@endsection

@section('vendor-script')
{{-- @vite(['resources/assets/vendor/libs/select2/select2.js']) --}}
@endsection

@section('page-script')
{{-- @vite(['resources/assets/js/pages-account-settings-billing.js']) --}}
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">

        <div class="card card-action mb-6">
          <div class="card-body">
            <div class="d-flex align-items-center mb-1">
              <div class="avatar me-4">
                <span class="avatar-initial rounded-circle bg-label-primary">
                  <i class="icon-base ti tabler-wallet ti-xl"></i>
                </span>
              </div>
              <div>
                <h5 class="mb-0">Current Balance</h5>
                <small class="text-muted">Last updated: {{ now()->format('H:i A') }}</small>
              </div>
            </div>
            <h2 class="fw-bolder mb-1">{{ $currencySymbol }}{{ number_format($currentBalance, 2) }}</h2>
            <p class="text-body-secondary">
              Your wallet balance is used for quick payments across the platform.
            </p>
            <a href="#add-funds-form" class="btn btn-primary">
              <i class="icon-base ti tabler-plus ti-sm me-1"></i>
              Add Funds
            </a>
          </div>
        </div>
        <div class="card mb-6" id="add-funds-form">
          <h5 class="card-header">Add Funds</h5>
          <div class="card-body">
            <form id="formAddFunds" method="POST" onsubmit="return false">
              @csrf
              <div class="row">
                <div class="mb-5 col-12">
                  <label for="amount" class="form-label">Amount</label>
                  <div class="input-group">
                    <span class="input-group-text">{{ $currencySymbol }}</span>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" aria-label="Amount">
                  </div>
                </div>

                <div class="mb-5 col-12">
                  <label class="form-label d-block">Quick Select</label>
                  <div class="btn-group" role="group" aria-label="Quick select amounts">
                    <button type="button" class="btn btn-label-secondary">$50.00</button>
                    <button type="button" class="btn btn-label-secondary">$100.00</button>
                    <button type="button" class="btn btn-label-secondary">$250.00</button>
                    <button type="button" class="btn btn-label-secondary">$500.00</button>
                  </div>
                </div>

                <div class="mb-5 col-12">
                  <label class="form-label d-block">Select Payment Method</label>
                  <div class="row gy-3 g-2">
                    <div class="col-md-6">
                      <label class="form-check-label d-flex align-items-center" for="payment-method-card">
                        <input name="payment_method" class="form-check-input" type="radio" value="card" id="payment-method-card" checked />
                        <img src="{{ asset('assets/img/icons/payments/visa-light.png') }}" class="img-fluid ms-2" alt="Credit Card" width="40" data-app-light-img="icons/payments/visa-light.png" data-app-dark-img="icons/payments/visa-dark.png">
                        <img src="{{ asset('assets/img/icons/payments/mastercard-light.png') }}" class="img-fluid ms-2" alt="Credit Card" width="40" data-app-light-img="icons/payments/mastercard-light.png" data-app-dark-img="icons/payments/mastercard-dark.png">
                        <span class="mb-0">Credit Card</span>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label class="form-check-label d-flex align-items-center" for="payment-method-paypal">
                        <input name="payment_method" class="form-check-input" type="radio" value="paypal" id="payment-method-paypal" />
                        <img src="{{ asset('assets/img/icons/payments/paypal-light.png') }}" class="img-fluid ms-2" alt="PayPal" width="40" data-app-light-img="icons/payments/paypal-light.png" data-app-dark-img="icons/payments/paypal-dark.png">
                        <span class="mb-0">PayPal</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-12 mt-2">
                  <button type="submit" class="btn btn-primary me-3">
                    <i class="icon-base ti tabler-circle-check ti-sm me-1"></i>
                    Confirm and Pay
                  </button>
                  <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>

</div>
@endsection