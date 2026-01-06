@extends('layouts/layoutMaster')
@section('title', 'Currency Settings')
@section('content')
<div class="card">
  <div class="card-header border-bottom d-flex justify-content-between">
    <h5 class="card-title mb-0">Currency & Exchange Rates</h5>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Currency</th>
          <th>Symbol</th>
          <th>Rate (vs Base)</th>
          <th>Format</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($currencies as $currency)
          <tr>
            <td>{{ $currency->name }}</td>
            
            <td>{{ $currency->symbol }}</td>
            
            <td>{{ number_format($currency->exchange_rate, 4) }}</td>
            
            <td>
              @if($currency->precision > 0)
                <code>0,0.{{ str_repeat('0', $currency->precision) }} {{ $currency->symbol }}</code>
              @else
                <code>0,0 {{ $currency->symbol }}</code>
              @endif
            </td>
            
            <td>
              @if($currency->is_default)
                <span class="badge bg-label-info">Base</span>
              @else
                <div class="d-flex align-items-center">
                  <button class="btn btn-sm btn-icon btn-text-secondary waves-effect waves-light edit-currency-btn" 
                          data-bs-toggle="modal" 
                          data-bs-target="#editCurrencyModal"
                          data-id="{{ $currency->id }}"
                          data-name="{{ $currency->name }}"
                          data-rate="{{ $currency->exchange_rate }}">
                      <i class="ti tabler-edit"></i>
                  </button>
                </div>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


<div class="modal fade" id="editCurrencyModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3 p-md-5">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="text-center mb-4">
          <h3 class="mb-2">Edit Exchange Rate</h3>
          <p class="text-muted">Update the exchange rate for <span id="modalCurrencyName" class="fw-bold text-primary"></span></p>
        </div>
        <form id="editCurrencyForm" class="row g-3">
          <input type="hidden" id="editCurrencyId" name="id">
          <div class="col-12">
            <label class="form-label" for="modalExchangeRate">Exchange Rate (vs Base)</label>
            <div class="input-group">
              <input type="number" id="modalExchangeRate" name="exchange_rate" class="form-control" step="0.0001" placeholder="e.g. 1.2500" />
              <span class="input-group-text">Base</span>
            </div>
          </div>
          <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Save Changes</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const editModal = document.getElementById('editCurrencyModal');
    const editForm = document.getElementById('editCurrencyForm');

    editModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const rate = button.getAttribute('data-rate');

        document.getElementById('editCurrencyId').value = id;
        document.getElementById('modalCurrencyName').innerText = name;
        document.getElementById('modalExchangeRate').value = rate;
    });

    editForm.addEventListener('submit', function (e) {
        e.preventDefault();
        
        const id = document.getElementById('editCurrencyId').value;
        const rate = document.getElementById('modalExchangeRate').value;
        const submitBtn = editForm.querySelector('button[type="submit"]');

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Saving...';

        fetch(`/admin/settings/currencies/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            },
            body: JSON.stringify({ exchange_rate: rate })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Updated!',
                    text: 'Exchange rate updated successfully.',
                    customClass: { confirmButton: 'btn btn-success' }
                }).then(() => {
                    location.reload();
                });
            } else {
                throw new Error(data.message || 'Update failed');
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: error.message,
                customClass: { confirmButton: 'btn btn-primary' }
            });
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerText = 'Save Changes';
        });
    });
});
</script>
@endsection