<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital Admin Dashboard</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- Bootstrap + Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Custom CSS -->
  <style>
    body.dark {
      background-color: #1e1e2f;
      color: #fff;
    }

    .sidebar {
      min-height: 100vh;
      background-color: #0e1a2b;
      color: white;
    }

    .sidebar a {
      color: #fff;
      padding: 12px;
      display: block;
      border-radius: 6px;
      text-decoration: none;
      margin-bottom: 4px;
    }

    .sidebar a:hover {
      background-color: #1f3bb3;
      transition: 0.2s;
    }

    .main-content {
      padding: 2rem;
    }

    .topbar {
      background-color: #fff;
      padding: 1rem 2rem;
      border-bottom: 1px solid #e5e7eb;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .dark .topbar {
      background-color: #2b2b3c;
    }
  </style>
</head>
<body class="font-sans leading-normal tracking-normal">

  <div class="flex">

    <!-- Sidebar -->
    <div class="sidebar w-64 p-4">
      <!-- <a href="{{ url('dashboard') }}"><h2 class="text-2xl font-bold mb-6 text-center">🏥 HOSPITAL</h2></a> -->
      <h2 class="text-2xl font-bold mb-6 text-center">🏥 HOSPITAL</h2>
      <a href="{{ url('dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
      <a href="{{ url('listdoctor') }}"><i class="bi bi-person"></i> Doctor Manage</a>
      <a href="{{ url('showappointment') }}"><i class="bi bi-calendar-event"></i> Appointments</a>
      <a href="{{ url('usermanage') }}"><i class="bi bi-people-fill"></i> User Manage</a>
      <a href="{{ url('/staff') }}"><i class="bi bi-person-badge"></i> Staff</a>
      <a href="/review_show"><i class="bi bi-list-stars"></i> Feedback</a>
      <a href="{{ url('logout') }}" class="text-red-400"><i class="bi bi-box-arrow-right"></i> Logout</a>

      <!-- Dark mode toggle -->
      <button onclick="toggleDarkMode()" class="mt-6 w-full bg-gray-700 hover:bg-gray-600 text-white py-2 rounded">
        🌙 Toggle Dark Mode
      </button>
    </div>

    <!-- Main Panel -->
    <div class="flex-1">
      
      <!-- Topbar -->
      <div class="topbar">
        
       
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('main-content')
      </div>

    </div>
  </div>

  <!-- Scripts -->
  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark');
    }
  </script>

</body>
</html>
