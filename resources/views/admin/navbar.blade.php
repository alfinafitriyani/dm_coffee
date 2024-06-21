<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    NAVIGATION
</div>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{ url('/users') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Users</span></a>


    <!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Reservasi</span></a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Food</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Makanan :</h6>
            <a class="collapse-item" href="login.html">Makanan</a>
            <a class="collapse-item" href="register.html">Snack</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Menu Minuman :</h6>
            <a class="collapse-item" href="404.html">Aneka Kopi</a>
            <a class="collapse-item" href="blank.html">Wedangan</a>
            <a class="collapse-item" href="blank.html">Jus & Es</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
