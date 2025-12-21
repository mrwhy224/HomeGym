@extends('layouts/layoutMaster')

@section('title', 'Transaction History')

@section('content')
<div class="row g-6">
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class="ti tabler-wallet ti-lg"></i></span>
          </div>
          <h4 class="mb-0">Current Balance</h4>
        </div>
        <h2 class="mb-2">{{ auth()->user()->wallet->getDisplayBalanceAttribute() }}</h2>
        <p class="mb-0 text-muted">Available funds in your wallet</p>
      </div>
    </div>
  </div>

  <div class="col-12">
    <div class="card">
      <div class="card-header border-bottom d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Transactions History</h5>
        <div class="d-flex gap-2">
            <a class="btn btn-primary btn-sm" href="{{ route('user.financial.wallet') }}"><i class="ti tabler-plus me-1"></i> Top-up Wallet</a>
        </div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="table-light">
            <tr>
              <th>ID / Ref</th>
              <th>Transaction Details</th>
              <th>Amount</th>
              <th>Date & Time</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($transactions as $transaction)
            <tr>
              <td><span class="fw-medium">#{{ $transaction->ref_id ?? $transaction->id }}</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    @if($transaction->type == 'deposit')
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="ti tabler-arrow-up-right"></i></span>
                    @else
                      <span class="avatar-initial rounded-circle bg-label-danger"><i class="ti tabler-shopping-cart"></i></span>
                    @endif
                  </div>
                  <div>
                    <h6 class="mb-0">{{ $transaction->description }}</h6>
                    <small class="text-muted">{{ ucfirst($transaction->type) }}</small>
                  </div>
                </div>
              </td>
              <td>
                <span class="fw-bold {{ $transaction->type == 'deposit' ? 'text-success' : 'text-danger' }}">
                  {{ $transaction->type == 'deposit' ? '+' : '-' }} {{ number_format($transaction->amount) }}
                </span>
              </td>
              <td>
                <div class="d-flex flex-column">
                    <span class="text-heading">{{ $transaction->created_at->formatUser('M j, Y') }}</span>
                    <small class="text-muted">{{ $transaction->created_at->formatUser('H:i') }}</small>
                </div>
              </td>
              <td>
                @php
                  $statusClasses = [
                      'completed' => 'bg-label-success',
                      'pending' => 'bg-label-warning',
                      'failed' => 'bg-label-danger'
                  ];
                @endphp
                <span class="badge {{ $statusClasses[$transaction->status] ?? 'bg-label-secondary' }} text-capitalize">
                  {{ $transaction->status }}
                </span>
              </td>
              <td>
                <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill" data-bs-toggle="tooltip" title="Download Invoice">
                  <i class="ti tabler-download"></i>
                </button>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center py-5">
                <div class="text-muted">No transactions found.</div>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      
      @if($transactions->hasPages())
      <div class="card-footer border-top">
        {{ $transactions->links() }}
      </div>
      @endif
    </div>
  </div>
</div>
@endsection