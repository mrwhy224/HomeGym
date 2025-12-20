@extends('layouts/layoutMaster')
@section('title', 'System Backups')
@section('content')
<div class="card">
  <div class="card-header border-bottom d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Backup History</h5>
    <button class="btn btn-success"><i class="ti tabler-database-export me-1"></i> Generate New Backup</button>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>File Name</th>
          <th>Size</th>
          <th>Created Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><code>db_backup_2025_12_19.sql</code></td>
          <td>42.5 MB</td>
          <td>1 day ago</td>
          <td>
            <button class="btn btn-sm btn-icon btn-text-secondary"><i class="ti tabler-download"></i></button>
            <button class="btn btn-sm btn-icon btn-text-danger"><i class="ti tabler-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection