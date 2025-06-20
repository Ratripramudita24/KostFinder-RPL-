<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Kost</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Kost
    </div>

    <!-- Collapse Menu - Manajemen Kost -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManajemenKost"
            aria-expanded="true" aria-controls="collapseManajemenKost">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Manajemen Kost</span>
        </a>
        <div id="collapseManajemenKost" class="collapse" aria-labelledby="headingManajemenKost" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/lihatDaftarKost">Kelola Data Kost</a>
                {{-- <a class="collapse-item" href="{{ route('admin.pemilik.index') }}">Data Pemilik Kost</a>
                <a class="collapse-item" href="{{ route('admin.review.index') }}">Review Kost</a> --}}
            </div>
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/lihatReviewKost">Lihat Review Kost</a>
            </div>
        </div>
    </li>

    <!-- Data Pengguna -->
    <li class="nav-item">
        {{-- <a class="nav-link" href="{{ route('admin.user.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pengguna</span>
        </a> --}}
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                {{-- <a class="collapse-item" href="{{ route('login') }}">Login</a>
                <a class="collapse-item" href="{{ route('register') }}">Register</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="{{ url('/404') }}">404 Page</a>
                <a class="collapse-item" href="{{ url('/blank') }}">Blank Page</a> --}}
            </div>
        </div>
    </li>

    <!-- Charts -->
    <li class="nav-item">
        {{-- <a class="nav-link" href="{{ route('admin.charts') }}"> --}}
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
        </a>
    </li>

    <!-- Tables -->
    <li class="nav-item">
        {{-- <a class="nav-link" href="{{ route('admin.tables') }}"> --}}
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->

</ul>
