<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #eef2f7; }
        .sidebar {
            height: 100vh; width: 260px; background: linear-gradient(180deg, #1e1f29, #2d2f41);
            padding: 20px; position: fixed; color: #fff; border-right: 2px solid #00000030;
        }
        .sidebar a{
            color: #fff; text-decoration: none; display: flex; align-items: center; gap: 10px;
            padding: 12px; margin-bottom: 8px; border-radius: 10px; transition: 0.3s ease; font-size: 15px;
        }
        .sidebar a:hover { background: #4b4f66; transform: translateX(5px); }
        .content { margin-left: 280px; padding: 25px; }
        .card-modern { border-radius: 20px; padding: 25px; background: #ffffff; border: none; box-shadow: 0 5px 20px #00000015; text-align: center; transition: 0.3s ease-in-out; }
        .card-modern:hover { transform: translateY(-8px); box-shadow: 0 10px 30px #00000025; }
    </style>
</head>
<body>

<div class="sidebar">
    <h4 class="text-center mb-4">⚙ Admin Panel</h4>
    <hr class="text-white">
    <a href="{{ url('admin/dashboard') }}">📊 Dashboard</a>
    <a href="{{ url('admin/products') }}">🛒 Products</a>
    <a href="{{ url('admin/orders') }}">📦 Orders</a>
    <a href="{{ url('admin/users') }}">👤 Users</a>
    <a href="{{ url('admin/coupons') }}">🏷 Coupons</a>
</div>

<div class="content">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
