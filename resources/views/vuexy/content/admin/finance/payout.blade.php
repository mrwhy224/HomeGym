@extends('layouts/layoutMaster')

@section('title', 'Coach Settlements')

@section('content')
<div class="row g-6 mb-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Total Payouts</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">${{ number_format($stats['total_paid'], 2) }}</h4>
            </div>
            <small class="mb-0">Total distributed to coaches</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-primary"><i class="ti tabler-currency-dollar icon-26px"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Pending Approval</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">${{ number_format($stats['pending_amount'], 2) }}</h4>
            </div>
            <small class="mb-0">Awaiting payout date</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-warning"><i class="ti tabler-clock-pause icon-26px"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Platform Earnings</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">${{ number_format($stats['total_commission'], 2) }}</h4>
            </div>
            <small class="mb-0">Total system commissions</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-success"><i class="ti tabler-chart-pie icon-26px"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Overdue Payments</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">{{ $stats['overdue_count'] }}</h4>
            </div>
            <small class="mb-0">Coaches past payout date</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-danger"><i class="ti tabler-alert-triangle icon-26px"></i></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header border-bottom d-flex justify-content-between align-items-center">
    <h5 class="card-title mb-0">Settlement Invoices</h5>
  </div>
  
  <div class="card-datatable table-responsive">
    <table class="table">
      <thead class="border-top">
        <tr>
          <th>Coach</th>
          <th>Commission %</th>
          <th>Net Payout</th>
          <th>Payout Date</th>
          <th>Status</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($payrolls as $payroll)
        @php
          $isOverdue = $payroll->status === 'pending' && \Carbon\Carbon::parse($payroll->period_start)->isPast();
        @endphp
        <tr>
          <td>
            <div class="d-flex justify-content-start align-items-center">
              <div class="avatar avatar-sm me-3">
                <x-user-avatar :user="$payroll->coach" />
              </div>
              <div class="d-flex flex-column">
                <span class="fw-bold text-heading">{{ $payroll->coach->name }}</span>
                <small class="text-muted">Payroll ID: #PAY-{{ $payroll->id }}</small>
              </div>
            </div>
          </td>
          <td><span class="badge bg-label-secondary">{{ $payroll->coach->coach->commission_percentage }}%</span></td>
          <td><span class="fw-bold text-primary">{{ number_format($payroll->total_amount * $payroll->exchange_rate, 2) }} {{ $payroll->currency->code ?? '$' }}</span></td>
          <td>
              <span class="{{ $isOverdue ? 'text-danger fw-bold' : '' }}">
                  {{ \Carbon\Carbon::parse($payroll->period_start)->format('M d, Y') }}
              </span>
          </td>
          <td>
            @if($payroll->status === 'paid')
              <span class="badge bg-label-success">Paid</span>
            @elseif($isOverdue)
              <span class="badge bg-label-danger" data-bs-toggle="tooltip" title="Payment is overdue!">Overdue</span>
            @else
              <span class="badge bg-label-warning">Pending</span>
            @endif
          </td>
          <td class="text-center">
            <div class="d-flex align-items-center justify-content-center">
              @if($payroll->status !== 'paid')
                  <button class="btn btn-sm btn-icon btn-label-success rounded-pill me-1 btn-process-payroll" 
                          data-url="#" title="Mark as Paid">
                      <i class="ti tabler-check"></i>
                  </button>
              @endif
              <!-- <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill" title="View Details"><i class="ti tabler-eye"></i></button> -->
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
@section('page-script')
<script>
$(function () {
    // استفاده از Notyf که در صفحه لاگین داشتید
    const notyf = new Notyf({
        duration: 4000,
        position: { x: 'right', y: 'top' },
        types: [
            { type: 'success', background: '#28c76f', icon: { className: 'ti tabler-circle-check text-white', tagName: 'i' } },
            { type: 'error', background: '#ea5455', icon: { className: 'ti tabler-x text-white', tagName: 'i' } }
        ]
    });

    $(document).on('click', '.btn-process-payroll', function () {
        const btn = $(this);
        const url = btn.data('url');

        if (!confirm('آیا از تایید پرداخت این فیش حقوقی اطمینان دارید؟')) return;

        btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm"></span>');

        $.ajax({
            url: url,
            method: 'POST',
            data: { _token: '{{ csrf_token() }}' },
            success: function (response) {
                notyf.success(response.message);
                // رفرش کردن جدول یا سطر
                setTimeout(() => { location.reload(); }, 1000);
            },
            error: function (xhr) {
                let msg = xhr.responseJSON ? xhr.responseJSON.message : 'Error processing payout';
                notyf.error(msg);
                btn.prop('disabled', false).html('<i class="ti tabler-check"></i>');
            }
        });
    });
});
</script>
@endsection