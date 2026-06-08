/* ===== ADMIN DASHBOARD ===== */

document.addEventListener('DOMContentLoaded', function() {
  // Initialize chart if canvas exists
  const chartCanvas = document.getElementById('adminChart');
  if (chartCanvas && typeof Chart !== 'undefined') {
    const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
    const colors = {
      grid: isDark ? 'rgba(255,255,255,0.06)' : 'rgba(15,81,50,0.06)',
      text: isDark ? 'rgba(255,255,255,0.6)' : '#6C757D'
    };

    new Chart(chartCanvas, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
          label: 'Penjualan',
          data: [12, 19, 15, 22, 28, 24, 30, 26, 32, 38, 35, 42],
          borderColor: '#0F5132',
          backgroundColor: (ctx) => {
            const g = ctx.chart.ctx.createLinearGradient(0, 0, 0, 300);
            g.addColorStop(0, 'rgba(15,81,50,0.2)');
            g.addColorStop(1, 'rgba(15,81,50,0)');
            return g;
          },
          fill: true,
          tension: 0.4,
          pointBackgroundColor: '#0F5132',
          pointBorderColor: '#fff',
          pointBorderWidth: 2,
          pointRadius: 4,
          pointHoverRadius: 6,
          borderWidth: 3
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false }
        },
        scales: {
          x: {
            grid: { color: colors.grid },
            ticks: { color: colors.text, font: { family: 'Poppins', size: 11 } }
          },
          y: {
            grid: { color: colors.grid },
            ticks: { color: colors.text, font: { family: 'Poppins', size: 11 } },
            beginAtZero: true
          }
        },
        interaction: {
          intersect: false,
          mode: 'index'
        }
      }
    });
  }

  // SweetAlert2 delete confirmation
  document.querySelectorAll('.admin-btn-delete').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      if (typeof Swal !== 'undefined') {
        Swal.fire({
          title: 'Yakin ingin menghapus?',
          text: 'Data yang dihapus tidak dapat dikembalikan!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#dc3545',
          cancelButtonColor: '#6C757D',
          confirmButtonText: 'Ya, Hapus!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire('Terhapus!', 'Data berhasil dihapus.', 'success');
          }
        });
      } else {
        if (confirm('Yakin ingin menghapus data ini?')) {
          alert('Data berhasil dihapus.');
        }
      }
    });
  });
});
