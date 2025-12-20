@extends('layouts/layoutMaster')
@section('title', 'System Logs')
@section('content')
<div class="card text-nowrap">
  <div class="card-header border-bottom d-flex justify-content-between">
    <h5 class="card-title mb-0">Security & Activity Logs</h5>
    <button class="btn btn-sm btn-label-danger">Clear Logs</button>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Timestamp</th>
          <th>User</th>
          <th>Event</th>
          <th>IP Address</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-12-20 10:05</td>
          <td>Admin_Alpha</td>
          <td>Changed Currency Rate</td>
          <td>192.168.1.45</td>
          <td><span class="badge bg-label-success">Success</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection