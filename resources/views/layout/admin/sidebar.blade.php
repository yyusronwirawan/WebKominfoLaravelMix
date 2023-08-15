<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/beranda_admin"><img src="{{ asset('template/dashboard') }}/images/logo-diskominfo.png"
                            alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item @yield('menuDashboard')">
                    <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Website</li>
                <li class="sidebar-item @yield('menuDocument')">
                    <a href="{{ route('admin.document.index') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-richtext-fill"></i>
                        <span>Dokumen</span>
                    </a>
                <li class="sidebar-item has-sub {{ request()->is('admin/profile*') ? 'active open' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person"></i>
                        <span>Profil</span>
                    </a>
                    <ul class="submenu ">
                        @foreach ($profiles as $data)
                            <li
                                class="submenu-item {{ request()->is('admin/profile/' . $data->slug . '') ? 'active' : '' }}">
                                <a href="{{ route('admin.profile.show', $data->slug) }}">{{ $data->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="sidebar-item @yield('menuLayanan')">
                    <a href="{{ route('admin.services.index') }}" class='sidebar-link'>
                        <i class="bi bi-window" width="20"></i>
                        <span>Layanan</span>
                    </a>
                </li>

                <li class="sidebar-title">Akun</li>
                <li class="sidebar-item{{ request()->is('admin/account') ? ' active' : '' }}">
                    <a class="sidebar-link" href="{{ route('admin.account') }}">
                        <i class="bi bi-person-circle"></i>
                        <span> {{ __('Akun') }}</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="bi bi-door-open-fill"></i>
                        <span> {{ __('Logout') }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
