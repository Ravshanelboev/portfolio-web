<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            overflow-x: hidden;
        }
        .sidebar {
            background-color: #343a40;
            min-height: 100vh;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar h4 {
            color: white;
            padding: 20px;
            border-bottom: 1px solid #495057;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                width: 200px;
                z-index: 999;
                height: 100%;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .content {
                padding-left: 0;
            }
        }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-md-block" id="sidebarMenu">
        <h4 class="text-center">Admin Panel</h4>
        <a href="#"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="#"><i class="fas fa-users me-2"></i>Users</a>
        <a href="#"><i class="fas fa-cogs me-2"></i>Settings</a>
        <a href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
    </div>

    <!-- Main content -->
    <div class="flex-grow-1 content">
        <!-- Top navbar -->
        <nav class="navbar navbar-light bg-light shadow-sm">
            <div class="container-fluid">
                <button class="btn btn-outline-secondary d-md-none" id="toggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <span class="navbar-brand mb-0 h1">Admin Panel</span>
            </div>
        </nav>

        <main class="p-4">
            @yield('content')
        </main>
    </div>
</div>

<!-- Bootstrap & JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('toggleSidebar')?.addEventListener('click', function () {
        document.getElementById('sidebarMenu')?.classList.toggle('active');
    });
</script>
</body>
</html>