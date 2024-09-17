<footer class="main-footer background-black">
    <!-- /.main-footer__bg -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by Mecrop
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->

</div><!-- /.page-wrapper -->



<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="#" aria-label="logo image"><img src="{{ asset('assets/images/logomecrop/Mecrop_4.png') }}"
                    width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->

        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:mecrop@outlook.com.vn">mecrop@outlook.com.vn</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:@lang('StrDictionary.phone')">@lang('StrDictionary.phone')</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">

            <a href="@lang('StrDictionary.fanpage')">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://www.youtube.com/@Mecrop.Farming">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <span class="sr-only">Youtube</span>
            </a>
            <a href="https://x.com/Mecrop_Farming">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
        </div><!-- /.mobile-nav__social -->
        <hr>
        <a href="{{ route('auth.login') }}">
            <button class="btn btn-success col-12">Đăng Nhập</button>
        </a>
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="alefox-btn">
                <span><i class="icon-magnifying-glass"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->
<!-- Sidebar One Start -->
<aside class="sidebar-one">
    <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <div class="sidebar-one__close"><i class="icofont-close-line"></i></div><!-- /.siderbar-close -->
        <div class="sidebar-one__logo">
            <a href="#" aria-label="logo image"><img src="{{ asset('assets/images/logomecrop/logo_ngang.png') }}"
                    alt="Careox HTML" width="147"></a>
        </div><!-- /.sidebar-one__logo-box -->
        <p class="sidebar-one__text">
            Mauris ut enim sit amet lacus ornare ullamcor. Praesent placerat nequ
            puru rhoncu tincidunt odio ultrices. Sed feugiat feugiat felis.
        </p>
        <h4 class="sidebar-one__title">Contact Info:</h4>
        <ul class="sidebar-one__info">
            <li>
                <span class="fas fa-map-marker-alt"></span>
                85 Ketch Harbour RoadBensalem, PA 19020
            </li>
            <li>
                <span class="fas fa-envelope"></span>
                <a href="mailto:needhelp@company.com">needhelp@company.com</a>
            </li>
            <li>
                <span class="fas fa-phone-alt"></span>
                <a href="tel:@lang('StrDictionary.phone')">@lang('StrDictionary.phone')</a>
            </li>
        </ul>
        <div class="sidebar-one__social">

            <a href="@lang('StrDictionary.fanpage')">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://www.youtube.com/@Mecrop.Farming">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <span class="sr-only">Youtube</span>
            </a>
            <a href="https://x.com/Mecrop_Farming">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
        </div><!-- /sidebar-one__socila -->
        <h4 class="sidebar-one__title">Newsletter:</h4>
        <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
            <input type="text" name="EMAIL" placeholder="Email address">
            <button type="submit" class="fas fa-paper-plane">
                <span class="sr-only">submit</span><!-- /.sr-only -->
            </button>
        </form><!-- /.footer-widget__newsletter mc-form -->
    </div><!-- /.sidebar__content -->
</aside>
<!-- Sidebar One Start -->

<!-- back-to-top-start -->
<a href="#" class="scroll-top">
    <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</a>
<!-- back-to-top-end -->


<script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('assets/vendors/progress-bar/knob.js') }}"></script>
<!-- gsap js -->
<script src="{{ asset('assets/vendors/gsap/gsap.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/scrolltrigger.min.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/splittext.min.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/alefox-split.js') }}"></script>
<!-- template js -->
<script src="{{ asset('assets/js/alefox.js') }}"></script>
<script>
    function checkScreenWidth() {
        const button = document.getElementById('btn_login');
        if (window.innerWidth <= 767) {
            button.style.display = 'none';
        } else {
            button.style.display = 'block';
        }
    }

    // Kiểm tra khi tải trang
    checkScreenWidth();

    // Kiểm tra khi thay đổi kích thước cửa sổ
    window.addEventListener('resize', checkScreenWidth);
</script>
</body>


<!-- Mirrored from bracketweb.com/alefox-html/blog-list-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2024 14:32:38 GMT -->

</html>
