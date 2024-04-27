<nav class="main-sidebar ps-menu">
    <!-- <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div> -->
    <!-- <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div> -->
    <div class="sidebar-header">
        <div class="text">AR</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="menu-category">
                <span class="text-uppercase">Konfigurasi</span>
            </li>
            @if (auth()->user() && auth()->user()->roles->pluck('name')->intersect(['admin', 'it'])->isNotEmpty())

            <li class="{{ Route::is('konfigurasi.*') ? 'active open' : '' }} || {{ request()->segment(1) == 'users' ? 'active' : '' }} ">
                <a href="#" class="main-menu has-dropdown ">
                    <i class="ti-desktop"></i>
                    <span>KONFIRGURASI</span>
                </a>
                <ul class="sub-menu {{ Route::is('konfigurasi.*') ? 'expand' : '' }} || {{ request()->segment(1) == 'users' ? 'active' : '' }}">
                    <li class="{{ Route::is('konfigurasi.roles.index') ? 'active' : '' }}"><a href="{{ route('konfigurasi.roles.index') }}" class="link"><span>Roles</span></a></li>
                    <li class="{{ Route::is('konfigurasi.permissions.index') ? 'active' : '' }}"><a href="{{ route('konfigurasi.permissions.index') }}" class="link"><span>Permission</span></a></li>
                    <li class="{{ Route::is('users.index') ? 'active' : '' }}"><a href="{{ route('users.index') }}" class="link"><span>Users</span></a></li>
                </ul>
            </li>

            @endif

        </ul>
    </div>
</nav>
