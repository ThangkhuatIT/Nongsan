<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assetdashboard/images/logos/seodashlogo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assetdashboard/css/styles.min.css') }}" />
    @yield('header')
    <style>
        .body-wrapper {
            position: relative;
            /* Đặt vị trí tương đối cho thẻ cha */
            min-height: 100vh;
            /* Đảm bảo chiều cao tối thiểu của thẻ cha là 100% chiều cao viewport */
        }

        .footer {
            position: absolute;
            /* Đặt vị trí tuyệt đối cho footer */
            bottom: 0;
            /* Đặt footer ở dưới cùng của thẻ cha */
            width: 100%;
            /* Đảm bảo footer chiếm toàn bộ chiều rộng của thẻ cha */
        }

        .h-30px {
            height: 100px;
            /* Đặt chiều cao là 30px */
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('dashboard.layout.menu')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="assetdashboard/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">{{ session('user')->username }}</p>
                                        </a>
                                        <a href="{{ route('auth.logout') }}"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Đăng xuất</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
