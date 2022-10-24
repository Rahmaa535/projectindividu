    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard" >
        <link rel="stylesheet" href="font-awesome-animation.min.css">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-dove "></i>
            </div> 
            <div class="sidebar-brand-text mx-4">Khafidatul Rahma <sup class="xj">woirahma</sup></div>
    </a>

    {{-- <!-- Divider -->
    <hr class="sidebar-divider my-0"> --}}

    <!-- Nav Item - Dashboard -->
    
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="/master_s">
            <i class="fas fa-fw fa-user"></i>
         <span>Master Siswa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/master_p">
             <i class="fas fa-archive"></i>
         <span>Master Project</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="master_k">
            <i class="fas fa-id-card"></i>
         <span>Master Kontak</span></a>
    </li>

    {{-- <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item"> --}}
        {{-- <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>BOB</span>
        </a> --}}
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/">Home</a>
                <a class="collapse-item" href="/about">About</a>
                <a class="collapse-item" href="/projects">Projects</a>
                <a class="collapse-item" href="/contact">Contact</a>
            </div>
        </div>
    </li>
    <li>
        {{-- <div class="container">
            <h5>coming soon ...</h5>

        </div> --}}
    </li>

    {{-- <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/assets/charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/assets/tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> --}}

   <!-- Divider -->
    {{-- <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>

        
    </div>

    <div class="sidebar-card d-none d-lg-flex">
         <img class="sidebar-card-ilustration mb-4" src="{{asset('whxxzx.png')}}" >
        {{-- <p class="text-center mb-2">
            <strong>PREMIUM DONG NGAB</strong>
            "ada lebih banyak fitur, komponen dan lainnya hanya dengan berlangganan bersama whxxzx"</p>
            <a class="btn btn-success btn-sm" href="/dashboard"> Upgrade ke Premium!</a> --}}
     </div> 

</ul>
<style>
    .xj{
        font-weight: 400;
    }
</style>