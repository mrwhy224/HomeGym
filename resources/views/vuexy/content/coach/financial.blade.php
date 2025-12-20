@php
    $user = auth()->user();
    $wallet = $user->wallet; // فرض بر اینکه رابطه در مدل User وجود دارد
    
    // دریافت ارز کاربر (برای نمایش سیمبل)
    $currency = $user->currency ?? \App\Models\Currency::where('is_default', true)->first();
    $currencySymbol = $user->wallet->currency ? $user->wallet->currency->symbol : '$';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Coach Financial Dashboard')

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss'])
@endsection

@section('content')
<div class="row">
  
  <div class="col-12 mb-6">
    <div class="card card-action h-100">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Earnings Overview</h5>
        <div class="card-action-element">
        </div>
      </div>
      <div class="card-body">
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-primary"><i class='ti tabler-wallet'></i></span>
                    </div>
                    <h6 class="mb-0">Total Balance</h6>
                </div>
                <h4 class="mb-1 text-primary">{{ $wallet ? $wallet->display_balance : 0 }}</h4>
                <small class="text-muted">Total funds in your account</small>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-success"><i class='ti tabler-circle-check'></i></span>
                    </div>
                    <h6 class="mb-0">Available for Payout</h6>
                </div>
                <h4 class="mb-1 text-success">{{ $user->wallet->getDisplayBalanceAttribute() }}</h4>
                <small class="text-muted">Ready to be transferred</small>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-2">
                        <span class="avatar-initial rounded bg-label-warning"><i class='ti tabler-lock'></i></span>
                    </div>
                    <h6 class="mb-0">Pending Clearance</h6>
                </div>
                <h4 class="mb-1 text-warning">
                    {{ $wallet ? number_format($wallet->balance_blocked) : 0 }} {{ $currencySymbol }}
                </h4>
                <small class="text-muted">Blocked until class completion</small>
            </div>
        </div>
      </div>
    </div>
  </div>
    <div class="col-12">
    <div class="card mb-6">
        <h5 class="card-header">Payout History</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($transactions as $trx)
                        <tr>
                            <td>
                                <span class="fw-medium">{{ $trx->created_at->format('Y-m-d') }}</span>
                                <small class="text-muted d-block">{{ $trx->created_at->format('H:i') }}</small>
                            </td>

                            <td>
                                @php
                                    $typeConfig = match($trx->type) {
                                        'deposit', 'commission' => ['icon' => 'arrow-down-left', 'color' => 'success', 'label' => 'Income'],
                                        'withdraw', 'salary_payout' => ['icon' => 'arrow-up-right', 'color' => 'danger', 'label' => 'Payout'],
                                        'block' => ['icon' => 'lock', 'color' => 'warning', 'label' => 'Blocked'],
                                        'unblock' => ['icon' => 'lock-open', 'color' => 'info', 'label' => 'Unblocked'],
                                        default => ['icon' => 'circle', 'color' => 'secondary', 'label' => $trx->type],
                                    };
                                @endphp
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm me-2">
                                        <span class="avatar-initial rounded-circle bg-label-{{ $typeConfig['color'] }}">
                                            <i class="ti tabler-{{ $typeConfig['icon'] }}"></i>
                                        </span>
                                    </div>
                                    <span>{{ $typeConfig['label'] }}</span>
                                </div>
                            </td>

                            <td>
                                <span class="text-body text-truncate d-inline-block" style="max-width: 250px;">
                                    {{ $trx->description }}
                                </span>
                                {{-- نمایش اطلاعات ارزی اگر تراکنش چند ارزی بوده --}}
                                @if($trx->currency_id && $trx->currency_id != $wallet->currency_id)
                                    <br><small class="text-muted">Original: {{ number_format($trx->original_amount) }} (Rate: {{ $trx->exchange_rate }})</small>
                                @endif
                            </td>

                            <td>
                                <span class="fw-bold {{ $trx->amount > 0 ? 'text-success' : 'text-danger' }}">
                                    {{ $trx->amount > 0 ? '+' : '' }}{{ $trx->formatted_amount }}
                                </span>
                            </td>

                            <td>
                                @if($trx->confirmed)
                                    <span class="badge bg-label-success">Confirmed</span>
                                @else
                                    <span class="badge bg-label-secondary">Pending</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="text-muted">No transactions found.</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Transaction History</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($transactions as $trx)
                        <tr>
                            <td>
                                <span class="fw-medium">{{ $trx->created_at->format('Y-m-d') }}</span>
                                <small class="text-muted d-block">{{ $trx->created_at->format('H:i') }}</small>
                            </td>

                            <td>
                                @php
                                    $typeConfig = match($trx->type) {
                                        'deposit', 'commission' => ['icon' => 'arrow-down-left', 'color' => 'success', 'label' => 'Income'],
                                        'withdraw', 'salary_payout' => ['icon' => 'arrow-up-right', 'color' => 'danger', 'label' => 'Payout'],
                                        'block' => ['icon' => 'lock', 'color' => 'warning', 'label' => 'Blocked'],
                                        'unblock' => ['icon' => 'lock-open', 'color' => 'info', 'label' => 'Unblocked'],
                                        default => ['icon' => 'circle', 'color' => 'secondary', 'label' => $trx->type],
                                    };
                                @endphp
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm me-2">
                                        <span class="avatar-initial rounded-circle bg-label-{{ $typeConfig['color'] }}">
                                            <i class="ti tabler-{{ $typeConfig['icon'] }}"></i>
                                        </span>
                                    </div>
                                    <span>{{ $typeConfig['label'] }}</span>
                                </div>
                            </td>

                            <td>
                                <span class="text-body text-truncate d-inline-block" style="max-width: 250px;">
                                    {{ $trx->description }}
                                </span>
                                {{-- نمایش اطلاعات ارزی اگر تراکنش چند ارزی بوده --}}
                                @if($trx->currency_id && $trx->currency_id != $wallet->currency_id)
                                    <br><small class="text-muted">Original: {{ number_format($trx->original_amount) }} (Rate: {{ $trx->exchange_rate }})</small>
                                @endif
                            </td>

                            <td>
                                <span class="fw-bold {{ $trx->amount > 0 ? 'text-success' : 'text-danger' }}">
                                    {{ $trx->amount > 0 ? '+' : '' }}{{ $trx->formatted_amount }}
                                </span>
                            </td>

                            <td>
                                @if($trx->confirmed)
                                    <span class="badge bg-label-success">Confirmed</span>
                                @else
                                    <span class="badge bg-label-secondary">Pending</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <div class="text-muted">No transactions found.</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
  </div>
  </div>
@endsection