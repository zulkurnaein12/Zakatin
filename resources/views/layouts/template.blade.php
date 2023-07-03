<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
@include('sweetalert::alert')

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">ZAKATIN</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request()->routeIs('admin.index') ? '' : 'active' }}"
                            href="{{ route('admin.index') }}">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request()->routeIs('admin.user.*') ? '' : 'collapsed' }}"
                            href="{{ route('admin.user.index') }}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Pengurus</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request()->routeIs('admin.muzakki.index') ? '' : 'collapsed' }}"
                            href="{{ route('admin.muzakki.index') }}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Muzakki</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request()->routeIs('admin.mustahiq.*') ? '' : 'collapsed' }}"
                            href="{{ route('admin.mustahiq.index') }}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Mustahiq</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                            href="#">
                            <i class="align-middle" data-feather="folder"></i><span>Zakat</span><i
                                class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="components-nav" class="sidebar-dropdown list-unstyled collapse"
                            data-bs-parent="#sidebar-nav">
                            <li>
                                <a class="sidebar-link {{ Request()->routeIs('admin.zakatfitrah.*') ? '' : 'collapsed' }}"
                                    href="{{ route('admin.zakafitrah.index') }}">
                                    <i class="align-middle" data-feather="arrow-right"></i><span>Zakat Fitrah</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link {{ Request()->routeIs('admin.zakatmaal.*') ? '' : 'collapsed' }}"
                                    href="{{ route('admin.zakatmaal.index') }}">
                                    <i class="align-middle" data-feather="arrow-right"></i><span>Zakat Maal</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#component-nav" data-bs-toggle="collapse"
                            href="#">
                            <i class="align-middle" data-feather="folder"></i><span>Laporan</span>
                        </a>
                        <ul id="component-nav" class="sidebar-dropdown list-unstyled collapse"
                            data-bs-parent="#sidebar-nav">
                            <li>
                                <a class="sidebar-link" href="component-alerts.html">
                                    <i class="align-middle" data-feather="arrow-right"></i><span>Data Pembayaran</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link" href="component-accordion.html">
                                    <i class="align-middle" data-feather="arrow-right"></i><span>Data Penerimaan</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidebar-link" href="component-accordion.html">
                                    <i class="align-middle" data-feather="arrow-right"></i><span>Data Keuangan
                                        Zakat</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->
                    <li class="sidebar-item">
                        <a class="sidebar-link {{ Request()->routeIs('admin.history.*') ? '' : 'collapsed' }}"
                            href="#">
                            <i class="align-middle" data-feather="clock"></i>
                            <span>History</span>
                        </a>
                    </li>
                    <!--End Dashboard Nav -->
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete
                                                    the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet
                                                    vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                @if (Auth::user()->avatar)
                                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile"
                                        class="avatar img-fluid rounded me-1" />
                                @else
                                    <img src="{{ asset('nice') }}/assets/img/profile-img.jpg" alt="Profile"
                                        class="avatar img-fluid rounded me-1">
                                @endif
                                <span class="text-dark">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('admin.profile.index') }}"><i
                                        class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Log
                                    out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                @yield('content')
            </main>
            <!-- End #main -->
            @include('layouts.footer')


            <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#myDataTable').DataTable();
                });
            </script>

</body>

</html>
