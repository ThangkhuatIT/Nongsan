<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('home.blog') }}" class="text-nowrap logo-img">
                <img src="{{ asset('assetdashboard/images/logos/logo_ngang.png') }}" alt="" style="width:100%; height:50px; object-fit:cover"/>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="{{ session('page') == 'blogs' ? 'sidebar-link active' : 'sidebar-link' }}"
                        href="{{ route('admin.management.blogs') }}" aria-expanded="false">
                        <span>
                            <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Quản lí bài viết</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="{{ session('page') == 'tag' ? 'sidebar-link active' : 'sidebar-link' }}"
                        href="{{ route('admin.management.tags') }}" aria-expanded="false">
                        <span>
                            <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Quản lý tag</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="{{ session('page') == 'c_aticle' ? 'sidebar-link active' : 'sidebar-link' }}"
                        href="{{ route('admin.management.c_aticles') }}" aria-expanded="false">
                        <span>
                            <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Thể loại bài đăng</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
