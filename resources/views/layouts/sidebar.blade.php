<aside class="main-sidebar sidebar-light-teal shadow-lg">

    <!-- Logo -->
    <a href="#" class="brand-link bg-warning">
        <img src="{{ asset('dist/img/MOPH-Logo.png') }}" alt="MOPH-Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span style="font-family: 'Audiowide', sans-serif; font-size: 18px;"
            class="brand-text font-weight-bold">KPI-MONITOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- User panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- User Image -->
            <div class="image align-content-center">
                <img src="{{ asset('dist/img/Phonsak.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <!-- User Info -->
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                <span class="badge badge-info">{{ Auth::user()->role }}</span>
            </div>
        </div>

        <!-- Menu panel -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            หน้าหลัก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            แดชบอร์ด
                        </p>
                    </a>
                </li>

                <!-- Navbar Header -->
                <li class="nav-header text-teal">ตั้งค่าระบบ</li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->is(['users*']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>
                            เจ้าหน้าที่
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('departments.index') }}"
                        class="nav-link {{ request()->is(['departments*']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hospital-user"></i>
                        <p>
                            กลุ่มงาน/ฝ่าย
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('hospitals.index') }}"
                        class="nav-link {{ request()->is(['hospitals*']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hospital-alt"></i>
                        <p>
                            หน่วยบริการ
                        </p>
                    </a>
                </li>



                <!-- Navbar Header -->
                <li class="nav-header text-teal">ออกจากระบบ</li>

                <!-- Navbar Item 8 -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                        <p class="text-danger">
                            ออกจากระบบ
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>

    </div>

</aside>
