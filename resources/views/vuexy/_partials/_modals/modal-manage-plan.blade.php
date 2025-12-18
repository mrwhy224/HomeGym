<div class="modal fade" id="managePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-add-role">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-8 pb-8">
        <div class="text-center mb-6">
          <h3 class="mb-1" id="managePlanModalTitle">Create New Loyalty Plan</h3>
          <p>Set the discount structure and rules for this tier.</p>
        </div>
        <form id="managePlanForm" class="row g-6" onsubmit="return false">
          <input type="hidden" name="plan_id" id="hiddenPlanId">
          
          <div class="col-12">
            <label class="form-label" for="planName">Plan Name</label>
            <input type="text" id="planName" name="plan_name" class="form-control" placeholder="e.g., Gold Tier" tabindex="-1" required />
          </div>
          <div class="col-12">
            <label class="form-label" for="planDescription">Description</label>
            <textarea id="planDescription" name="description" class="form-control" rows="3" placeholder="Brief details about the plan benefits"></textarea>
          </div>

          <div class="col-md-6 col-12">
            <label class="form-label" for="discountType">Discount Type</label>
            <select id="discountType" name="discount_type" class="form-select" required>
              <option value="percentage">Percentage (%)</option>
              <option value="fixed">Fixed Amount ({{ $baseCurrency->code }})</option>
            </select>
          </div>

          <div class="col-md-6 col-12">
            <label class="form-label" for="discountValue">Discount Value</label>
            <div class="input-group">
              <input type="number" id="discountValue" name="discount_value" class="form-control" placeholder="0" min="0" required />
              <span class="input-group-text" id="discountUnit">Percent</span>
            </div>
          </div>
          
          <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="isDefaultPlan" name="is_default" value="1">
                <label class="form-check-label" for="isDefaultPlan">Default Plan for New Customers</label>
                <small class="text-body-secondary d-block">Only one plan can be set as default (usually 0% discount).</small>
            </div>
          </div>

          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-4 me-1">Save Plan</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
        </div>
    </div>
  </div>
</div>