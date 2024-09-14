<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MECROP</title>
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" /> --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="stylesheet" href="{{ asset('assetdashboard/css/styles.min.css') }}" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        .btn-success {
        background-color: #44a05b; /* Đổi màu cho nút btn-primary */
        /* border-radius: 10px; */
        /* padding: 12px 24px; */
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
                                    <img src="{{asset('assetdashboard/images/profile/user-1.jpg')}}" alt="" width="35"
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
