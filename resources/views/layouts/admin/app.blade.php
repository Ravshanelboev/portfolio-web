<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS (yoki o'zingiz istagan style) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('admin/assets/css/admin.css') }}" rel="stylesheet">
</head>
<body class="@yield('body-class')">

    @include('components.admin.header')

    <main class="p-4">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.admin.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
