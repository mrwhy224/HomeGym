/**
 * User Dashboard JS
 */

'use strict';

(function () {
  let cardColor, headingColor, labelColor, borderColor, legendColor;

  // رنگ‌بندی بر اساس تم تیره یا روشن Vuexy
  if (isDarkStyle) {
    cardColor = config.colors_dark.cardColor;
    headingColor = config.colors_dark.headingColor;
    labelColor = config.colors_dark.textMuted;
    legendColor = config.colors_dark.bodyColor;
    borderColor = config.colors_dark.borderColor;
  } else {
    cardColor = config.colors.cardColor;
    headingColor = config.colors.headingColor;
    labelColor = config.colors.textMuted;
    legendColor = config.colors.bodyColor;
    borderColor = config.colors.borderColor;
  }

  // --- ۱. نمودار پیشرفت وزن (Weight Progress Chart) ---
  const weightProgressChartEl = document.querySelector('#weightProgressChart');
  if (weightProgressChartEl) {
    // خواندن داده‌ها از اتریبیوت HTML
    const chartData = JSON.parse(weightProgressChartEl.dataset.chartData);
    const unit = weightProgressChartEl.dataset.unit || 'kg';

    const weightProgressChartOptions = {
      chart: {
        height: 300,
        type: 'line',
        toolbar: {
          show: false
        }
      },
      series: [
        {
          name: 'Weight',
          data: chartData.series // داده‌های نمودار از PHP
        }
      ],
      xaxis: {
        categories: chartData.categories, // تاریخ‌ها از PHP
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: labelColor,
            fontSize: '13px'
          }
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: labelColor,
            fontSize: '13px'
          },
          formatter: function (value) {
            return value.toFixed(1) + ' ' + unit;
          }
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 3
      },
      grid: {
        borderColor: borderColor,
        strokeDashArray: 7,
        padding: {
          top: -10,
          bottom: -10,
          left: 10
        }
      },
      colors: [config.colors.primary],
      tooltip: {
        y: {
          formatter: function (value) {
            return value.toFixed(1) + ' ' + unit;
          }
        }
      }
    };

    const weightProgressChart = new ApexCharts(weightProgressChartEl, weightProgressChartOptions);
    weightProgressChart.render();
  }

  // --- ۲. نمودار هدف وزنی (Weight Goal Chart - Radial) ---
  const weightGoalChartEl = document.querySelector('#weightGoalChart');
  if (weightGoalChartEl) {
    // خواندن درصد پیشرفت از اتریبیوت HTML
    const progressPercent = parseInt(weightGoalChartEl.dataset.progress) || 0;

    const weightGoalChartOptions = {
      chart: {
        height: 200,
        type: 'radialBar'
      },
      series: [progressPercent],
      plotOptions: {
        radialBar: {
          hollow: {
            size: '70%'
          },
          dataLabels: {
            name: {
              show: false
            },
            value: {
              show: true,
              fontSize: '28px',
              fontWeight: '600',
              color: headingColor,
              offsetY: 8,
              formatter: function (val) {
                return val + '%';
              }
            }
          },
          track: {
            background: config.colors_label.secondary
          }
        }
      },
      stroke: {
        lineCap: 'round'
      },
      colors: [config.colors.success], // رنگ سبز برای پیشرفت
      labels: ['Progress']
    };

    const weightGoalChart = new ApexCharts(weightGoalChartEl, weightGoalChartOptions);
    weightGoalChart.render();
  }

  // --- ۳. جدول داده (Data Table) ---
  // (اگر بخواهید جدول 'My Upcoming Schedule' قابل جستجو و صفحه‌بندی باشد)
  const datatable = $('.datatables-user-schedule');
  if (datatable.length) {
    datatable.DataTable({
      // تنظیمات DataTable...
      // می‌توانید ستون‌ها را قابل مرتب‌سازی کنید
      order: [[2, 'asc']], // مرتب‌سازی بر اساس ستون سوم (Date & Time)
      dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      columnDefs: [
        {
          // ستون Actions (آخرین ستون) قابل مرتب‌سازی نباشد
          targets: -1,
          orderable: false
        }
      ]
    });
  }

})();