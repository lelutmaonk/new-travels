<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Master Packages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.packages.index') }}">Packages</a>
                        <a class="nav-link" href="">Detail Itinerary</a>
                        <a class="nav-link" href="{{ route('admin.packages-included.index') }}">Included Packages</a>
                        <a class="nav-link" href="{{ route('admin.packages-additional-note.index') }}">Additional Note</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{ route('admin.pickup.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Pickup
                </a>
                <a class="nav-link" href="{{ route('admin.activities.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Activities 
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>