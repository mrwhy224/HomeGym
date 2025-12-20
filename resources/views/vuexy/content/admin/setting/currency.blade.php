@extends('layouts/layoutMaster')
@section('title', 'Currency Settings')
@section('content')
<div class="card">
  <div class="card-header border-bottom d-flex justify-content-between">
    <h5 class="card-title mb-0">Currency & Exchange Rates</h5>
    <button class="btn btn-sm btn-outline-primary">Update Rates</button>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Currency</th>
          <th>Symbol</th>
          <th>Rate (vs USD)</th>
          <th>Format</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>US Dollar</td>
          <td>$</td>
          <td>1.0000</td>
          <td><code>$ 0,0.00</code></td>
          <td><span class="badge bg-label-info">Base</span></td>
        </tr>
        <tr>
          <td>Iraqi Dinar</td>
          <td>IQD</td>
          <td>1310.00</td>
          <td><code>0,0 IQD</code></td>
          <td><button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-edit"></i></button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection