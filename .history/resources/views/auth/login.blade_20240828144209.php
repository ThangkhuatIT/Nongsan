@include('layouts.header')
        <section class="page-header">
            <div class="page-header__shape-left"></div>
            <div class="page-header__shape-right"></div>
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-down">Login</h2>
                <ul class="alefox-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Login</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <!-- Login Start -->
        <section class="login-page">
            <div class="container">
                <div class="login-page__wrap">
                    <h3 class="login-page__wrap__title">@lang("StrDictionary.login")</h3>
                    <form class="login-page__form" action="{{route('auth.doLogin')}}" method="POST">
                        @csrf
                        <div class="login-page__form-input-box">
                            <input type="text" placeholder="@lang('StrDictionary.username')" name="username">
                        </div>
                        <div class="login-page__form-input-box">
                            <input type="password" placeholder="@lang('StrDictionary.password')" name="password">
                        </div>
                        <div class="login-page__check-forgot">
                            <div class="login-page__checked-box">
                                <input type="checkbox" name="save-data" id="save-data">
                                <label for="save-data"><span></span>@lang('StrDictionary.rememberme')?</label>
                            </div>
                            <div class="login-page__form-forgot-password">
                                <a href="login.html">@lang('StrDictionary.forgotpassword')</a>
                            </div>
                        </div>
                        <button type="submit" class="alefox-btn">
                            <span class="alefox-btn__item"></span>
                            <span class="alefox-btn__item"></span>
                            <span class="alefox-btn__item"></span>
                            <span class="alefox-btn__item"></span>
                            @lang('StrDictionary.login')
                        </button>
                    </form>
                </div><!-- login-form -->
            </div>
        </section>
        <!-- Login End -->

@include('layouts.footer')
