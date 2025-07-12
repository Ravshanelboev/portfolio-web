<div class="sidebar">
    <h4 class="text-center mb-4">Admin Panel</h4>
    <a href=""><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
    <a href=""><i class="fas fa-users me-2"></i> Users</a>
    <a href="#"><i class="fas fa-chart-line me-2"></i> Statistikalar</a>
    <a href="#"><i class="fas fa-cogs me-2"></i> Sozlamalar</a>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt me-2"></i> Chiqish
    </a>

    <form id="logout-form" method="POST" action="{" class="d-none">
        @csrf
    </form>
</div>
