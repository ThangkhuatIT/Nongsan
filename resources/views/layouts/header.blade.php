<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bracketweb.com/alefox-html/blog-list-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2024 14:32:38 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@lang('StrDictionary.titlenews')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Alefox is a modern HTML Template for agriculture field, farm, farmers, eco solutions and organic food products. Alefox HTML Template perfectly fit for all the green initiatives of the farming communities websites and businesses." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/icofont/icofont.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/tiny-slider/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/alefox-icons/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/alefox.css')}}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{asset('assets/images/loader.png')}};"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="icofont-wall-clock topbar-one__info__icon"></i>
                            @lang('StrDictionary.worktime')
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icofont-location-pin topbar-one__info__icon"></i>
                            @lang("StrDictionary.address")
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">

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

                        </div><!-- /.topbar-one__social -->
                        <div class="topbar-one__language">
                            <a href="#"><img src="{{asset('assets/images/shapes/vietnamflag.png')}}" alt="alefox">VI</a>
                            <div class="topbar-one__language__dropdown" style="display: none;">
                                <a href="#"><img src="{{asset('assets/images/shapes/flag.png')}}" alt="mecrop">EN</a>
                            </div>
                        </div>
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->

        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{route('home.blog')}}">
                            <img src="{{asset('assets/images/logomecrop/Mecrop_2.png')}}" alt="Mecrop HTML" height="110">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li class="header">
                                <a href="">@lang('StrDictionary.news')</a>
                            </li>

                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="{{route('auth.login')}}">
                            <button class="btn btn-success">Đăng Nhập</button>
                        </a>
                        <a href="#" class="search-toggler main-header__search">
                            <i class="icon-magnifying-glass" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="#" class="main-header__cart">
                            <i class="icon-shopping-cart" aria-hidden="true"></i>
                            {{-- <span class="main-header__cart__count">02</span> --}}
                            {{-- <span class="sr-only">Search</span> --}}
                        </a><!-- /.search-toggler -->


                        <div class="main-header__right__border"></div>
                        <div class="main-header__call">
                            <div class="main-header__call__icon"><span class="icon-phone-call-two"></span></div>
                            <div class="main-header__call__title">Requesting a Call:</div>
                            <a class="main-header__call__text" href="tel:@lang('StrDictionary.phone')">@lang('StrDictionary.phone')</a>
                        </div><!-- /. main-header__info -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
