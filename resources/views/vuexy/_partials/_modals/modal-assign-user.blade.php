<div class="modal fade" id="assignUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Assign Users to Plan: <span id="assignPlanName" class="fw-bold text-primary"></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="assignUserForm" onsubmit="return false">
        <input type="hidden" name="plan_id" id="hiddenPlanId">
        <div class="modal-body">
          <p class="mb-4">Select customers you wish to assign to this loyalty tier.</p>
          <label class="form-label" for="selectUsers">Select Customers</label>
          {{-- Select2 for searching and selecting multiple users --}}
          <select id="selectUsers" name="user_ids[]" class="select2 form-select" multiple data-placeholder="Search customer name or email">
            {{-- Options should be loaded dynamically via AJAX --}}
            {{-- <option value="1">Example Customer</option> --}}
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Apply Plan</button>
        </div>
      </form>
    </div>
  </div>
</div>