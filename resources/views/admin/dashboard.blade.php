@extends('layout.admin_layout')

@section('main-content')

<!-- Stat Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
  <!-- Users -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center hover:scale-105 transition">
    <div class="text-indigo-500 text-3xl mb-2"><i class="bi bi-people-fill"></i></div>
    <h3 class="text-lg font-semibold text-gray-700 dark:text-white">Total Users</h3>
    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalUsers }}</p>
  </div>

  <!-- Doctors -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center hover:scale-105 transition">
    <div class="text-blue-500 text-3xl mb-2"><i class="bi bi-person"></i></div>
    <h3 class="text-lg font-semibold text-gray-700 dark:text-white">Total Doctors</h3>
    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalDoctors }}</p>
  </div>

  <!-- Staff -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center hover:scale-105 transition">
    <div class="text-yellow-500 text-3xl mb-2"><i class="bi bi-person-badge"></i></div>
    <h3 class="text-lg font-semibold text-gray-700 dark:text-white">Total Staff</h3>
    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalStaff }}</p>
  </div>

  <!-- Appointments -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center hover:scale-105 transition">
    <div class="text-pink-500 text-3xl mb-2"><i class="bi bi-calendar-event"></i></div>
    <h3 class="text-lg font-semibold text-gray-700 dark:text-white">Appointments</h3>
    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalAppointments }}</p>
  </div>
</div>



<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
  
  <!-- Bar Chart -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4"> Bar Chart</h2>
    <canvas id="barChart" height="200"></canvas>
  </div>

  <!-- Pie Chart -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4"> Pie Chart</h2>
    <canvas id="pieChart" height="200"></canvas>
  </div>

  <!-- Line Chart -->
  <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4"> Line Chart</h2>
    <canvas id="lineChart" height="200"></canvas>
  </div>

</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const labels = ['Users', 'Doctors', 'Staff', 'Appointments', 'Feedback'];
  const dataValues = [{{ $totalUsers }}, {{ $totalDoctors }}, {{ $totalStaff }}, {{ $totalAppointments }}, {{ $totalfeedback }}];

  // Bar Chart
  new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Total Count',
        data: dataValues,
        backgroundColor: [
          'rgba(99, 102, 241, 0.7)',   
          'rgba(59, 130, 246, 0.7)',   
          'rgba(234, 179, 8, 0.7)',    
          'rgba(244, 114, 182, 0.7)',  
          'rgba(34, 197, 94, 0.7)'     
        ],
        borderRadius: 10,
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { labels: { color: '#9CA3AF' } }
      },
      scales: {
        y: { beginAtZero: true, ticks: { color: '#9CA3AF' }, grid: { color: '#374151' } },
        x: { ticks: { color: '#9CA3AF' }, grid: { color: '#374151' } }
      }
    }
  });

  // Pie Chart
  new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        label: 'Total Count',
        data: dataValues,
        backgroundColor: [
          'rgba(99, 102, 241, 0.7)',  
          'rgba(59, 130, 246, 0.7)',  
          'rgba(234, 179, 8, 0.7)',   
          'rgba(244, 114, 182, 0.7)', 
          'rgba(34, 197, 94, 0.7)'    
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { labels: { color: '#9CA3AF' } }
      }
    }
  });

  // Line Chart
  new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'Total Count',
        data: dataValues,
        fill: true,
        borderColor: 'rgba(59, 130, 246, 1)',
        backgroundColor: 'rgba(59, 130, 246, 0.2)',
        tension: 0.3
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { labels: { color: '#9CA3AF' } }
      },
      scales: {
        y: { beginAtZero: true, ticks: { color: '#9CA3AF' }, grid: { color: '#374151' } },
        x: { ticks: { color: '#9CA3AF' }, grid: { color: '#374151' } }
      }
    }
  });
</script>


<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center hover:scale-105 transition">
    <div class="text-green-500 text-3xl mb-2"><i class="bi bi-award-fill"></i></div>
    <h3 class="text-lg font-semibold text-gray-700 dark:text-white">feedback</h3>
    <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalfeedback }}</p>
  </div>
</div>

@endsection
