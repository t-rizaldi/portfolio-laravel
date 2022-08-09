<nav id="sidebar" class="sidebar-wrapper">
				
    <!-- Sidebar brand start  -->
    <div class="sidebar-brand bg-white">
        <a href="{{ route('admin') }}" class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="Rizaldi WebDev" />
        </a>
    </div>
    <!-- Sidebar brand end  -->

    <!-- Sidebar content start -->
    <div class="sidebar-content">

        <!-- sidebar menu start -->
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">Main Menu</li>
                <li class="{{ Request::routeIs('admin') ? 'active' : '' }}">
                    <a href="{{ route('admin') }}">
                        <i class="icon-devices_other"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="header-menu">Master Menu</li>
                <li class="{{ Request::routeIs('admin.portfolio*') ? 'active' : '' }}">
                    <a href="{{ route('admin.portfolio.index') }}">
                        <i class="icon-folder"></i>
                        <span class="menu-text">Portfolio</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar menu end -->

    </div>
    <!-- Sidebar content end -->
    
</nav>