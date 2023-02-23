<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'MedicApp-v1') }}</title>
    <meta name="keywords" content="MedicApp">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('../assets/img/favicon.ico') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/jquery.typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/Chart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/leaflet.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
</head>


<body class="vertical-layout boxed">
    <div class="app-loader main-loader">
        <div class="loader-box">
            <div class="bounceball"></div>
            <div class="text">Medic<span>app</span></div>
        </div>
    </div>
    <!-- .main-loader -->
    <div class="page-box">
        <div class="app-container">

            <!-- Horizontal navbar -->
            <div id="navbar1" class="app-navbar horizontal">
                <div class="navbar-wrap">

                    <button class="no-style navbar-toggle navbar-open d-lg-none">
                        <span></span><span></span><span></span>
                    </button>

                    <div>
                        <h5><i>
                                <div class="icofont-thin-double-right">{{ Auth::user()->name }}</div>
                            </i></h5>
                    </div>

                    <div class="app-actions">
                        <div class="dropdown item">
                        </div>

                        <div class="dropdown item">
                            <button class="no-style dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0, 10">

                                <span class="d-flex align-items-center">
                                    <img src="../assets/content/user-400-1.svg" alt="" width="40" height="40"
                                        class="rounded-500 me-1">
                                    <i class="icofont-simple-down"></i>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-w-180">
                                <ul class="list">

                                    <li>
                                        <a href="{{ route('logout') }}" class="align-items-center">
                                            <span a class="icon icofont-logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-skeleton horizontal">
                        <div class="left-part d-flex align-items-center">
                            <span class="navbar-button bg animated-bg d-lg-none"></span>
                            <span class="sk-logo bg animated-bg d-none d-lg-block"></span>
                            <span class="search d-none d-md-block bg animated-bg"></span>
                        </div>

                        <div class="right-part d-flex align-items-center">
                            <div class="icon-box">
                                <span class="icon bg animated-bg"></span>
                                <span class="badge"></span>
                            </div>
                            <span class="avatar bg animated-bg"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end Horizontal navbar -->

            <!-- Vertical navbar -->
            <div id="navbar2" class="app-navbar vertical">
                <div class="navbar-wrap">

                    <button class="no-style navbar-toggle navbar-close icofont-close-line d-lg-none"></button>
                    <div class="app-logo">
                        <div class="logo-wrap">

                            <!-- Image logo -->
                            <img src="{{ asset('../assets/img/logo.png') }}" alt="" width="147" height="33"
                                class="logo-img">
                        </div>
                    </div>


                    <div class="main-menu">
                        <nav class="main-menu-wrap">
                            <ul class="menu-ul">
                                <li class="menu-item">
                                    <span class="group-title">MOH-Admin Dashboard</span>
                                </li>


                                <li class="menu-item">
                                    <a class="item-link" href="{{ route('admin.dashboard') }}">
                                        <span class="link-icon icofont-ui-browser"></span>
                                        <span class="link-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="item-link" href="{{ route('admin.patients') }}">
                                        <span class="link-icon icofont-users-alt-4"></span>
                                        <span class="link-text">Patients Records</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="item-link" href="{{ route('admin.view_vaccines') }}">
                                        <span class="link-icon icofont-ui-copy"></span>
                                        <span class="link-text">View Vaccines Request</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="item-link" href="{{ route('admin.pcr') }}">
                                        <span class="link-icon icofont-search-document"></span>
                                        <span class="link-text">PCR-test Results</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="item-link" href="{{ route('admin.users') }}">
                                        <span class="link-icon icofont-company"></span>
                                        <span class="link-text">Manage Users Accounts</span>
                                    </a>
                                </li>


                            </ul>
                        </nav>
                    </div>


                    <div class="navbar-skeleton vertical">
                        <div class="top-part">
                            <div class="sk-logo bg animated-bg"></div>
                            <div class="sk-menu">
                                <span class="sk-menu-item menu-header bg-1 animated-bg"></span>
                                <span class="sk-menu-item bg animated-bg w-75"></span>
                                <span class="sk-menu-item bg animated-bg w-80"></span>
                                <span class="sk-menu-item bg animated-bg w-50"></span>
                                <span class="sk-menu-item bg animated-bg w-75"></span>
                                <span class="sk-menu-item bg animated-bg w-50"></span>
                                <span class="sk-menu-item bg animated-bg w-60"></span>
                            </div>
                            <div class="sk-menu">
                                <span class="sk-menu-item menu-header bg-1 animated-bg"></span>
                                <span class="sk-menu-item bg animated-bg w-60"></span>
                                <span class="sk-menu-item bg animated-bg w-40"></span>
                                <span class="sk-menu-item bg animated-bg w-60"></span>
                                <span class="sk-menu-item bg animated-bg w-40"></span>
                                <span class="sk-menu-item bg animated-bg w-40"></span>
                                <span class="sk-menu-item bg animated-bg w-40"></span>
                                <span class="sk-menu-item bg animated-bg w-40"></span>
                            </div>
                            <div class="sk-menu">
                                <span class="sk-menu-item menu-header bg-1 animated-bg"></span>
                                <span class="sk-menu-item bg animated-bg w-60"></span>
                                <span class="sk-menu-item bg animated-bg w-50"></span>
                            </div>
                            <div class="sk-button animated-bg w-90"></div>
                        </div>

                        <div class="bottom-part">
                            <div class="sk-menu">
                                <span class="sk-menu-item bg-1 animated-bg w-60"></span>
                                <span class="sk-menu-item bg-1 animated-bg w-80"></span>
                            </div>
                        </div>

                        <div class="horizontal-menu">
                            <span class="sk-menu-item bg animated-bg"></span>
                            <span class="sk-menu-item bg animated-bg"></span>
                            <span class="sk-menu-item bg animated-bg"></span>
                            <span class="sk-menu-item bg animated-bg"></span>
                            <span class="sk-menu-item bg animated-bg"></span>
                            <span class="sk-menu-item bg animated-bg"></span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end Vertical navbar -->


            {{-- CONTENT OF THE PAGES --}}
            @yield('content')
            {{-- CONTENT OF THE PAGES --}}




            {{-- Scripts --}}
            <script src="{{ asset('../assets/js/jquery-3.6.0.min.js') }}"></script>
            <script src="{{ asset('../assets/js/jquery-migrate-1.4.1.min.js') }}"></script>
            <script src="{{ asset('../assets/js/popper.min.js') }}"></script>
            <script src="{{ asset('../assets/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('../assets/js/jquery.typeahead.min.js') }}"></script>
            <script src="{{ asset('../assets/js/datatables.min.js') }}"></script>
            <script src="{{ asset('../assets/js/bootstrap-select.min.js') }}"></script>
            <script src="{{ asset('../assets/js/jquery.barrating.min.js') }}"></script>
            <script src="{{ asset('../assets/js/Chart.min.js') }}"></script>
            <script src="{{ asset('../assets/js/raphael-min.js') }}"></script>
            <script src="{{ asset('../assets/js/morris.min.js') }}"></script>
            <script src="{{ asset('../assets/js/echarts.min.js') }}"></script>
            <script src="{{ asset('../assets/js/echarts-gl.min.js') }}"></script>
            <script src="{{ asset('../assets/js/main.js') }}"></script>

</body>

</html>
