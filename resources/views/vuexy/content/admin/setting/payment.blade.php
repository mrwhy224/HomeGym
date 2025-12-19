@extends('layouts/layoutMaster')
@section('title', 'Payment Gateways')
@section('content')
<div class="row g-6">
  @foreach(['Stripe', 'PayPal', 'Bank Transfer'] as $gateway)
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-lg mx-auto mb-4 bg-label-primary rounded">
            <i class="ti tabler-credit-card icon-32px"></i>
        </div>
        <h5>{{ $gateway }}</h5>
        <span class="badge bg-label-success mb-4">Active</span>
        <button class="btn btn-primary d-block w-100">Configure Credentials</button>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection