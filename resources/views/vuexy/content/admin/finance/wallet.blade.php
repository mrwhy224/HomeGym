@extends('layouts/layoutMaster')

@section('title', 'System Treasury & Wallets')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/animate-css/animate.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss',
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/moment/moment.js'
])
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-between mb-6">
  <div>
    <h4 class="mb-1">System Treasury Overview</h4>
    <p class="mb-0 text-muted">Real-time monitoring of global liquidity and escrow funds.</p>
  </div>
  <div class="text-end">
    <small class="text-muted d-block text-uppercase fw-medium">Total Estimated Assets</small>
    <div class="d-flex align-items-center justify-content-end gap-2">
        <h2 class="mb-0 fw-bold text-primary">≈ 284,500.00 $</h2>
        <button class="btn btn-sm btn-label-primary btn-icon rounded-pill" data-bs-toggle="modal" data-bs-target="#breakdownModal" title="View Full Currency Breakdown">
            <i class="ti tabler-list-details"></i>
        </button>
    </div>
  </div>
</div>

<div class="row g-6 mb-6">
  <div class="col-md-6">
    <div class="card h-100 border-top border-primary border-3">
      <div class="card-body">
        <div class="d-flex align-items-center mb-4">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class="ti tabler-wallet icon-26px"></i></span>
          </div>
          <div>
            <h5 class="mb-0">User Wallets</h5>
            <small class="text-muted">Total Internal Liquidity</small>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-6">
          <div>
            <h3 class="mb-1 fw-bold">≈ 142,000.00 $</h3>
            <span class="badge bg-label-secondary small">Combined User/Coach Funds</span>
          </div>
          <button class="btn btn-sm btn-icon btn-text-secondary" data-bs-toggle="modal" data-bs-target="#breakdownModal"><i class="ti tabler-zoom-in"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card h-100 border-top border-warning border-3">
      <div class="card-body">
        <div class="d-flex align-items-center mb-4">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-warning"><i class="ti tabler-cash-banknote icon-26px"></i></span>
          </div>
          <div>
            <h5 class="mb-0">Pending Payouts</h5>
            <small class="text-muted">Due for Settlement</small>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-6">
          <div>
            <h3 class="mb-1 fw-bold">≈ 34,250.00 $</h3>
            <span class="badge bg-label-warning small">Awaiting Bank Transfer</span>
          </div>
          <button class="btn btn-sm btn-icon btn-text-secondary" data-bs-toggle="modal" data-bs-target="#breakdownModal"><i class="ti tabler-zoom-in"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card h-100 border-top border-success border-3">
      <div class="card-body">
        <div class="d-flex align-items-center mb-4">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-success"><i class="ti tabler-chart-pie icon-26px"></i></span>
          </div>
          <div>
            <h5 class="mb-0">System Revenue</h5>
            <small class="text-muted">Earned Commissions</small>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-6">
          <div>
            <h3 class="mb-1 fw-bold">≈ 82,750.00 $</h3>
            <span class="badge bg-label-success small">Net Platform Income</span>
          </div>
          <button class="btn btn-sm btn-icon btn-text-secondary" data-bs-toggle="modal" data-bs-target="#breakdownModal"><i class="ti tabler-zoom-in"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card h-100 border-top border-danger border-3">
      <div class="card-body">
        <div class="d-flex align-items-center mb-4">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-danger"><i class="ti tabler-lock-square icon-26px"></i></span>
          </div>
          <div>
            <h5 class="mb-0">Escrow/Blocked</h5>
            <small class="text-muted">Incomplete Transactions</small>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end mt-6">
          <div>
            <h3 class="mb-1 fw-bold">≈ 25,500.00 $</h3>
            <span class="badge bg-label-danger small">Processing / Disputed</span>
          </div>
          <button class="btn btn-sm btn-icon btn-text-secondary" data-bs-toggle="modal" data-bs-target="#breakdownModal"><i class="ti tabler-zoom-in"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row g-6 mb-6">
  <div class="col-lg-6">
    <div class="card h-100">
      <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Fund Distribution (By Category)</h5>
        <p class="text-muted small mb-0">Total estimated allocation across system wallets.</p>
      </div>
      <div class="card-body">
        <div id="walletDistributionChart"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card h-100">
      <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Asset Units (By Currency)</h5>
        <p class="text-muted small mb-0">Percentage of total value held in specific currencies.</p>
      </div>
      <div class="card-body">
        <div id="currencyDistributionChart"></div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="breakdownModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header border-bottom">
        <h5 class="modal-title">Precise Currency Breakdown</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-muted small mb-6">Values are displayed in their original currency units. The estimated USD value is based on the current system exchange rate.</p>
        <div class="table-responsive">
          <table class="table table-sm table-borderless align-middle">
            <thead class="border-bottom">
              <tr>
                <th>Wallet Type</th>
                <th>Currency</th>
                <th class="text-end">Actual Amount</th>
                <th class="text-end">Rate (to USD)</th>
                <th class="text-end">Est. USD Value</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-lighter"><td colspan="5" class="fw-bold py-2">User & Coach Wallets</td></tr>
              <tr>
                <td class="ps-4 text-nowrap">Internal Credit (USD)</td>
                <td>USD</td>
                <td class="text-end fw-medium">$ 85,000.00</td>
                <td class="text-end">1.00</td>
                <td class="text-end">$ 85,000</td>
              </tr>
              <tr>
                <td class="ps-4 text-nowrap">Internal Credit (IQD)</td>
                <td>IQD</td>
                <td class="text-end fw-medium">83,220,000.00</td>
                <td class="text-end">0.00068</td>
                <td class="text-end">$ 57,000</td>
              </tr>
              <tr class="bg-lighter"><td colspan="5" class="fw-bold py-2">System Revenue (Commissions)</td></tr>
              <tr>
                <td class="ps-4">Commissions (USD)</td>
                <td>USD</td>
                <td class="text-end fw-medium">$ 60,000.00</td>
                <td class="text-end">1.00</td>
                <td class="text-end">$ 60,000</td>
              </tr>
              <tr>
                <td class="ps-4">Commissions (EUR)</td>
                <td>EUR</td>
                <td class="text-end fw-medium">21,000.00</td>
                <td class="text-end">1.08</td>
                <td class="text-end">$ 22,750</td>
              </tr>
            </tbody>
            <tfoot class="border-top">
                <tr class="fw-bold text-heading">
                    <td colspan="4" class="py-4 text-end">Total Consolidated Assets (Est.)</td>
                    <td class="py-4 text-end text-primary h5 mb-0">$ 224,750.00</td>
                </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><i class="ti tabler-printer me-1"></i> Print Statement</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Chart Colors from Vuexy Palette
  const chartColors = {
    primary: '#7367f0',
    warning: '#ff9f43',
    success: '#28c76f',
    danger: '#ea5455',
    info: '#00cfe8'
  };

  // 1. Wallet Distribution Chart
  const walletOptions = {
    chart: { type: 'donut', height: 350 },
    labels: ['User Wallets', 'Pending Payouts', 'System Revenue', 'Escrow/Blocked'],
    series: [142000, 34250, 82750, 25500],
    colors: [chartColors.primary, chartColors.warning, chartColors.success, chartColors.danger],
    stroke: { width: 0 },
    dataLabels: { enabled: false },
    legend: { position: 'bottom', markers: { offsetX: -3 }, itemMargin: { vertical: 3 } },
    plotOptions: {
      pie: {
        donut: {
          labels: {
            show: true,
            total: {
              show: true,
              label: 'Total Assets',
              formatter: function (w) { return '$284.5k'; }
            }
          }
        }
      }
    }
  };
  new ApexCharts(document.querySelector("#walletDistributionChart"), walletOptions).render();

  // 2. Currency Distribution Chart (Calculated based on your data)
  const currencyOptions = {
    chart: { type: 'donut', height: 350 },
    labels: ['USD (US Dollar)', 'IQD (Iraqi Dinar)', 'EUR (Euro)'],
    series: [145000, 57000, 22750], // Consolidated amounts
    colors: [chartColors.info, chartColors.primary, chartColors.warning],
    stroke: { width: 0 },
    dataLabels: { enabled: false },
    legend: { position: 'bottom' },
    plotOptions: {
      pie: {
        donut: {
          labels: {
            show: true,
            total: {
              show: true,
              label: 'Currency Mix',
              formatter: function (w) { return '3 Units'; }
            }
          }
        }
      }
    }
  };
  new ApexCharts(document.querySelector("#currencyDistributionChart"), currencyOptions).render();
});
</script>
@endsection