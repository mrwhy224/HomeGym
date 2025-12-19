@extends('layouts/layoutMaster')
@section('title', 'General Settings')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Website Configuration</h5>
      </div>
      <div class="card-body pt-6">
        <form onsubmit="return false">
          <div class="row g-6">
            <div class="col-md-6">
              <label class="form-label">Website Title</label>
              <input type="text" class="form-control" value="Academy Pro Platform" />
            </div>
            <div class="col-md-6">
              <label class="form-label">Support Email</label>
              <input type="email" class="form-control" value="support@academy.com" />
            </div>
            <div class="col-md-6">
              <label class="form-label">Website Logo</label>
              <input type="file" class="form-control" />
              <small class="text-muted">Recommended: 250x50px PNG</small>
            </div>
            <div class="col-md-6">
              <label class="form-label">Favicon</label>
              <input type="file" class="form-control" />
            </div>
            <div class="col-12">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="maintenanceMode">
                <label class="form-check-label" for="maintenanceMode">Enable Maintenance Mode</label>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="submit" class="btn btn-primary me-3">Save Changes</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection