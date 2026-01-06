@extends('layouts/layoutMaster')

@section('title', 'Global Transaction History')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/select2/select2.scss'
])
@endsection

@section('content')
<div class="row g-6 mb-6">
  <div class="col-md-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">Total Volume</span>
            <h4 class="mb-0 text-info">${{ number_format($stats['totalVolume'], 2) }}</h4>
          </div>
          <div class="avatar bg-label-info rounded p-2"><i class="ti tabler-chart-bar-popular icon-22px"></i></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">Monthly Volume</span>
            <h4 class="mb-0 text-info">${{ number_format($stats['monthlyVolume'], 2) }}</h4>
          </div>
          <div class="avatar bg-label-info rounded p-2"><i class="ti tabler-circle-check icon-22px"></i></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">Weekly Volume</span>
            <h4 class="mb-0 text-info">${{ number_format($stats['weeklyVolume'], 2) }}</h4>
          </div>
          <div class="avatar bg-label-info rounded p-2"><i class="ti tabler-refresh-dot icon-22px"></i></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="content-left">
            <span class="text-muted small d-block mb-1 text-uppercase">daily Volume</span>
            <h4 class="mb-0 text-info">${{ number_format($stats['dailyVolume'], 2) }}</h4>
          </div>
          <div class="avatar bg-label-info rounded p-2"><i class="ti tabler-building-bank icon-22px"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header border-bottom d-flex justify-content-between align-items-center">
    <h5 class="card-title mb-0">Transaction Logs</h5>
    <form action="{{ request()->url() }}" method="GET" class="d-flex gap-3">
        <select name="type" class="form-select form-select-sm w-auto" onchange="this.form.submit()">
            <option value="All Types">All Types</option>
            <option value="transfer" {{ request('type') == 'transfer' ? 'selected' : '' }}>Transfer</option>
            <option value="deposit" {{ request('type') == 'deposit' ? 'selected' : '' }}>Deposit</option>
            <option value="unblock" {{ request('type') == 'unblock' ? 'selected' : '' }}>Unblock</option>
            <option value="commission" {{ request('type') == 'commission' ? 'selected' : '' }}>Commission</option>
            <option value="withdraw" {{ request('type') == 'withdraw' ? 'selected' : '' }}>Withdraw</option>
            <option value="salary_payout" {{ request('type') == 'salary_payout' ? 'selected' : '' }}>Salary Payout</option>
            <option value="block" {{ request('type') == 'block' ? 'selected' : '' }}>Block</option>
            <option value="refund" {{ request('type') == 'refund' ? 'selected' : '' }}>Refund</option>
        </select>
    </form>
  </div>
  
  <div class="card-datatable table-responsive">
    <table class="table border-top">
      <thead>
        <tr>
          <th>User / Entity</th>
          <th>Type</th>
          <th>Amount (SS)</th>
          <th>Amount</th>
          <th>Date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($transactions as $trx)
        @php
            $isPositive = $trx->amount > 0;
            $owner = $trx->wallet->user;
        @endphp
        <tr>
          <td>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xs me-2">
                <x-user-avatar :user="$trx->wallet->user" />
              </div>
              <span class="small">{{ $owner->name }}</span>
            </div>
          </td>
          <td>
              <span class="badge bg-label-{{ $trx->type == 'transfer' ? 'info' : ($trx->type == 'block' ? 'warning' : 'danger') }}">
                  {{ ucfirst($trx->type) }}
              </span>
          </td>
          <td>
              <span class="{{ $isPositive ? 'text-success' : 'text-danger' }} fw-bold">
                  {{ $isPositive ? '+' : '' }}{{ number_format($trx->amount, 2) }} {{ $baseCurrency->symbol }}
              </span>
          </td>
          <td>
              <span class="{{ $isPositive ? 'text-success' : 'text-danger' }} fw-bold">
                  {{ $isPositive ? '+' : '' }}{{ number_format($trx->original_amount, 2) }} {{ $trx->currency->code }}
              </span>
          </td>
          <td><small>{{ $trx->created_at->formatUser('M d, Y H:i') }}</small></td>
          <td>
              <span class="badge bg-label-{{ $trx->status == 'completed' ? 'success' : 'primary' }}">
                  {{ ucfirst($trx->status ?? 'Completed') }}
              </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="card-footer">
      {{ $transactions->links() }}
  </div>
</div>
@endsection