<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#"><img src="{{ asset('/frontend') }}/assets/images/logo/logo.png" alt="Logo"
                            width="100%" srcset=""></a>
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

                <li class="sidebar-title">UNIT CME </li>

                <li class="sidebar-item  has-sub  {{ Request::is('service-node/isdn/*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Problem
                        </span>
                    </a>
                    <ul class="submenu {{ Request::is('problem/1/*') ? 'active' : '' }} ">
                        <li class="submenu-item  {{ Request::is('problem/1/create') ? 'active' : '' }} ">
                            <a href="{{ url('/problem/1/create') }}">Input Data Baru</a>
                        </li>
                        <li class="submenu-item  {{ Request::is('problem/1/manage') ? 'active' : '' }} ">
                            <a href="{{ url('/problem/1/manage') }}">Manage Data</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  has-sub ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Potensi Perangkat
                        </span>
                    </a>
                    <ul class="submenu {{ Request::is('cme/potensi-perangkat/*') ? 'active' : '' }} ">
                        <li class="sidebar-item  has-sub  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Semua Wilayah
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/all/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/all/manage') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/all/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Ahmad Yani
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/1/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/1/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/1/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/1/manage') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/1/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/2/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Tanjung Sari
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/2/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/2/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/2/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/2/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/2/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/3/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Sumedang
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/3/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/3/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/3/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('/cme/potensi-perangkat/3/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/3/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/4/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Ujung Berung
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/4/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/4/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/4/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/4/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/4/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/5/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Turangga
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/5/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/5/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/5/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/5/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/5/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/6/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Tegalega
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/6/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/6/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/6/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/6/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/6/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/7/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Dago
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/7/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/7/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/7/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/7/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/7/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/8/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Hegarmanah
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/8/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/8/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/8/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/8/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/8/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/9/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Gegerkalong
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/9/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/9/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/9/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/9/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/9/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/10/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Lembong
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/10/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/10/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/10/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/10/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/10/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/11/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Kopo
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/11/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/11/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/11/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/11/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/11/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/12/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Cijawura
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/12/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/12/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/12/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/12/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/12/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>

                <hr>

                <li class="sidebar-title">UNIT Service Node</li>

                <li class="sidebar-item  has-sub  {{ Request::is('service-node/isdn/*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Problem
                        </span>
                    </a>
                    <ul class="submenu {{ Request::is('problem/2/*') ? 'active' : '' }} ">
                        <li class="submenu-item  {{ Request::is('problem/2/create') ? 'active' : '' }} ">
                            <a href="{{ url('/problem/1/create') }}">Input Data Baru</a>
                        </li>
                        <li class="submenu-item  {{ Request::is('problem/2/manage') ? 'active' : '' }} ">
                            <a href="{{ url('/problem/1/manage') }}">Manage Data</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="sidebar-item  has-sub  {{ Request::is('service-node/data-integration-plan/*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data Integration Plan
                        </span>
                    </a>
                    <ul class="submenu {{ Request::is('service-node/data-integration-plan/*') ? 'active' : '' }} ">
                        <li
                            class="submenu-item  {{ Request::is('service-node/data-integration-plan/create') ? 'active' : '' }} ">
                            <a href="{{ url('/service-node/data-integration-plan/create') }}">Input Data Baru</a>
                        </li>
                        <li
                            class="submenu-item  {{ Request::is('service-node/data-integration-plan/manage') ? 'active' : '' }} ">
                            <a href="{{ url('/service-node/data-integration-plan/manage') }}">Manage Data</a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item  has-sub  {{ Request::is('service-node/isdn/*') ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data ISDN
                        </span>
                    </a>
                    <ul class="submenu {{ Request::is('service-node/isdn/*') ? 'active' : '' }} ">
                        <li class="submenu-item  {{ Request::is('service-node/isdn/create') ? 'active' : '' }} ">
                            <a href="{{ url('/service-node/isdn/create') }}">Input Data Baru</a>
                        </li>
                        <li class="submenu-item  {{ Request::is('service-node/isdn/manage') ? 'active' : '' }} ">
                            <a href="{{ url('/service-node/isdn/manage') }}">Manage Data</a>
                        </li>
                    </ul>
                </li>

                {{-- -------------------------------------------------------------------------------------------- --}}
                <hr>

                <li class="sidebar-title">UNIT Transport</li>

                <li class="sidebar-item  {{ Request::is('transport/*') ? 'active' : '' }}  has-sub ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Teknik Transport
                        </span>
                    </a>
                    <ul class="submenu {{ Request::is('transport/*') ? 'active' : '' }} ">
                        <li
                            class="submenu-item  {{ Request::is('transport/create') ? 'active' : '' }} ">
                            <a href="{{ url('transport/create') }}">Input Data Baru</a>
                        </li>

                        <li class="sidebar-item  has-sub {{ Request::is('transport/A1*') ? 'active' : '' }}  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>ZTE M820
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('transport/A1/*') ? 'active' : '' }} ">
                                <li class="submenu-item  {{ Request::is('transport/A1/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/transport/A1/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/1/manage') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/1/manage') }}">Manage Data DWDM ZTE M280
                                        BANDUNG</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/1/manage') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/1/manage') }}">Manage Data DWDM ZTE M280
                                        CICADAS</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/1/manage') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/1/manage') }}">Manage Data DWDM ZTE M280
                                        SUMEDANG</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/2/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Tanjung Sari
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/2/*') ? 'active' : '' }} ">

                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/2/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/2/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/3/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Sumedang
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/3/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/3/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/3/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('/cme/potensi-perangkat/3/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/3/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/4/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Ujung Berung
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/4/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/4/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/4/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/4/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/4/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/5/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Turangga
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/5/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/5/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/5/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/5/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/5/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/6/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Tegalega
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/6/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/6/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/6/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/6/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/6/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/7/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Dago
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/7/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/7/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/7/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/7/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/7/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/8/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Hegarmanah
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/8/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/8/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/8/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/8/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/8/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/9/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Gegerkalong
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/9/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/9/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/9/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/9/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/9/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item  has-sub  {{ Request::is('cme/potensi-perangkat/12/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Cijawura
                                </span>
                            </a>
                            <ul class="submenu {{ Request::is('cme/potensi-perangkat/12/*') ? 'active' : '' }} ">
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/12/create') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/12/create') }}">Input Data Baru</a>
                                </li>
                                <li
                                    class="submenu-item  {{ Request::is('cme/potensi-perangkat/12/manage/') ? 'active' : '' }} ">
                                    <a href="{{ url('/cme/potensi-perangkat/12/manage') }}">Manage Data</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>





            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
