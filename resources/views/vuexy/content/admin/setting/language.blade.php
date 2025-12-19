@extends('layouts/layoutMaster')
@section('title', 'Language Management')
@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Active Languages</h5>
    <button class="btn btn-primary"><i class="ti tabler-plus me-1"></i> Add Language</button>
  </div>
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Code</th>
          <th>Direction</th>
          <th>Default</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>English</td>
          <td><code>en</code></td>
          <td>LTR</td>
          <td><span class="badge bg-label-primary">Primary</span></td>
          <td><span class="badge bg-label-success">Active</span></td>
          <td>
            <button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-edit"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection