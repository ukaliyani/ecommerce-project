<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .sidebar-link:hover{background:rgba(255,255,255,0.1);}    
    .card{transition:0.3s;}    
    .card:hover{transform:translateY(-4px);}  
  </style>
</head>
<body class="bg-gray-100 font-sans">

<!-- MAIN WRAPPER -->
<div class="flex min-h-screen">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-gradient-to-b from-gray-900 to-gray-800 text-white shadow-xl p-6 space-y-6">
    <h2 class="text-3xl font-bold tracking-wide mb-6">Admin Panel</h2>

    <nav class="space-y-2 text-lg">
      <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" /></svg>
        Dashboard
      </a>

      <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2h-3M4 6v6m0 0v6a2 2 0 002 2h3m10-8v8a2 2 0 01-2 2h-3m-6 0h6" /></svg>
        Products
      </a>
         <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="{{route('categories.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2h-3M4 6v6m0 0v6a2 2 0 002 2h3m10-8v8a2 2 0 01-2 2h-3m-6 0h6" /></svg>
        Catagory
      </a>

      <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 8h18M3 13h18M3 18h18" /></svg>
        Orders
      </a>

      <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
        Users
      </a>

      <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m0 0l-6-6m6 6H3" /></svg>
        Coupons
      </a>

      <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6m6 6V7m6 14H3" /></svg>
        Reports
      </a>

      <a class="flex items-center gap-3 px-4 py-2 rounded-lg sidebar-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" /></svg>
        Logout
      </a>
    </nav>
  </aside>

  <!-- DASHBOARD MAIN CONTENT -->
  <main class="flex-1 p-10 space-y-10">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Dashboard Overview</h1>

    <!-- CARDS ROW -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

      <div class="card bg-white p-6 rounded-2xl shadow-md">
        <h3 class="text-gray-500 text-sm">Total Sales</h3>
        <p class="text-3xl font-bold mt-2">$12,480</p>
      </div>

      <div class="card bg-white p-6 rounded-2xl shadow-md">
        <h3 class="text-gray-500 text-sm">Total Orders</h3>
        <p class="text-3xl font-bold mt-2">320</p>
      </div>

      <div class="card bg-white p-6 rounded-2xl shadow-md">
        <h3 class="text-gray-500 text-sm">Total Users</h3>
        <p class="text-3xl font-bold mt-2">1,200</p>
      </div>

      <div class="card bg-white p-6 rounded-2xl shadow-md">
        <h3 class="text-gray-500 text-sm">Pending Orders</h3>
        <p class="text-3xl font-bold mt-2">45</p>
      </div>

    </div>

    <!-- CHART SECTION -->
    <div class="bg-white p-8 rounded-2xl shadow-md">
      <h2 class="text-2xl font-bold text-gray-700 mb-4">Sales Overview</h2>
      <canvas id="salesChart"></canvas>
    </div>

  </main>

</div>

<script>
  const ctx = document.getElementById('salesChart');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: 'Sales ($)',
        data: [1200, 1500, 1800, 2200, 2600, 3000],
        borderWidth: 3
      }]
    }
  });
</script>

</body>
</html>
