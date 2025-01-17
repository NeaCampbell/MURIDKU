<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ url('admin/report') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Laporan
                </a>
                <a class="nav-link" href="{{ url('admin/report_target') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Laporan Target
                </a>
                <div class="sb-sidenav-menu-heading">Master</div>
                <a class="nav-link" href="{{ url('admin/city') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                    Kota
                </a>
                <a class="nav-link" href="{{ url('admin/institution') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-landmark-alt"></i></div>
                    Instansi
                </a>
                <a class="nav-link" href="{{ url('admin/faculty') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                    Falkutas
                </a>
                <a class="nav-link" href="{{ url('admin/material') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Bahan KTB
                </a>
                <a class="nav-link" href="{{ url('admin/discipleship_target') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-people-group"></i></div>
                    Target Pemuridan
                </a>
                <a class="nav-link" href="{{ url('admin/users') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                    Pengguna
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Masuk Sebagai:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
