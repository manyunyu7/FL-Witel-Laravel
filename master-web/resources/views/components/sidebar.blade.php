<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#"><img src="{{ asset('/frontend') }}/assets/images/logo/logo.png" alt="Logo" width="100%" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item
                {{ Request::is('admin') ? 'active' : '' }}
                {{ Request::is('staff') ? 'active' : '' }}
                {{ Request::is('user') ? 'active' : '' }}
                ">
                    <a href="{{ url('/home') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Manajemen User</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ url('/admin/user/manage') }}">Manage</a>
                        </li>
                    </ul>
                </li>

                <hr>

                <li class="sidebar-title">UNIT CME</li>

                <li class="sidebar-item  has-sub  {{ (Request::is('cme/*')) ? 'active' : ''}}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Potensi Perangkat CME
                        </span>
                    </a>
                    <ul class="submenu {{ (Request::is('cme/*')) ? 'active' : ''}} ">
                        <li class="submenu-item  {{ (Request::is('cme/potensi-perangkat/create')) ? 'active' : ''}} ">
                            <a href="{{ url('/cme/potensi-perangkat/create') }}">Input Data Baru</a>
                        </li>
                        <li class="submenu-item  {{ (Request::is('cme/potensi-perangkat/manage')) ? 'active' : ''}} ">
                            <a href="{{ url('/cme/potensi-perangkat/manage') }}">Manage Data</a>
                        </li>
                    </ul>
                </li>

                <hr>

                <li class="sidebar-title">UNIT Service Node</li>

                <li class="sidebar-item  has-sub  {{ (Request::is('service-node/*')) ? 'active' : ''}}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data Integration Plan
                        </span>
                    </a>
                    <ul class="submenu {{ (Request::is('service-node/data-integration-plan/*')) ? 'active' : ''}} ">
                        <li class="submenu-item  {{ (Request::is('service-node/data-integration-plan/create')) ? 'active' : ''}} ">
                            <a href="{{ url('/service-node/data-integration-plan/create') }}">Input Data Baru</a>
                        </li>
                        <li class="submenu-item  {{ (Request::is('service-node/data-integration-plan/manage')) ? 'active' : ''}} ">
                            <a href="{{ url('/service-node/data-integration-plan/manage') }}">Manage Data</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub  {{ (Request::is('service-node/isdn/*')) ? 'active' : ''}}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data ISDN
                        </span>
                    </a>
                    <ul class="submenu {{ (Request::is('service-node/isdn/*')) ? 'active' : ''}} ">
                        <li class="submenu-item  {{ (Request::is('service-node/data-integration-plan/create')) ? 'active' : ''}} ">
                            <a href="{{ url('/service-node/data-integration-plan/create') }}">Input Data Baru</a>
                        </li>
                        <li class="submenu-item  {{ (Request::is('service-node/data-integration-plan/manage')) ? 'active' : ''}} ">
                            <a href="{{ url('/service-node/data-integration-plan/manage') }}">Manage Data</a>
                        </li>
                    </ul>
                </li>
            

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
