@include('layouts.header')
<section class="page-header">
    <div class="page-header__shape-left"></div>
    <div class="page-header__shape-right"></div>
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title bw-split-in-down">@lang('StrDictionary.headerbanner')</h2>
        <ul class="alefox-breadcrumb list-unstyled">
            <li><a href="#">@lang('StrDictionary.home')</a></li>
            <li><span>@lang('StrDictionary.news')</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-one">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="widget-area">
                        <div class="sidebar__single sidebar__single--search">
                            <form action="#" class="sidebar__search">
                                <input type="text" placeholder="Search Here..." />
                                <button type="submit" aria-label="search submit">
                                    <span><i class="icon-magnifying-glass"></i></span>
                                </button>
                            </form><!-- /.sidebar__search -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">@lang('StrDictionary.categories')</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__categories list-unstyled">
                                @foreach ($c_aticles as $c_aticle)
                                    <li><a href="blog-details-right.html">{{ $c_aticle->name }}</a>({{ $c_aticle->id }})
                                    </li>
                                @endforeach
                            </ul><!-- /.sidebar__categories list-unstyled -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Tags</h4><!-- /.sidebar__title -->
                            <div class="sidebar__tags">
                                <ul class="sidebar__categories list-unstyled">
                                    @foreach ($tags as $tag)
                                        <li><a
                                                href="blog-details-right.html">{{ $tag->name }}</a>({{ $tag->id }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div><!-- /.sidebar__tags -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Recent Post</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__posts list-unstyled">
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="alefox">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p>
                                        <!-- /.sidebar__posts__date -->
                                        <h4 class="sidebar__posts__title"><a href="blog-details-right.html">We play
                                                chimney pot Chip bonne.</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="alefox">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p>
                                        <!-- /.sidebar__posts__date -->
                                        <h4 class="sidebar__posts__title"><a href="blog-details-right.html">Get deep
                                                knowledge your beauty</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-3.jpg" alt="alefox">
                                    </div><!-- /.sidebar__posts__image -->
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>Aug 10, 2023</p>
                                        <!-- /.sidebar__posts__date -->
                                        <h4 class="sidebar__posts__title"><a href="blog-details-right.html">We round
                                                solution of york blog</a></h4><!-- /.sidebar__posts__title -->
                                    </div><!-- /.sidebar__posts__content -->
                                </li>
                            </ul><!-- /.sidebar__posts list-unstyled -->
                        </div>
                    </aside><!-- /.widget-area -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="row gutter-y-30">
                    @foreach ($blogs as $blog)
                        <div class="col-md-12">
                            <div class="blog-card-list wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                                <div class="blog-card-list__image">
                                    <img src="{{ asset('uploads/' . $blog->image) }}"
                                        alt="This Leader in Organic Agriculture Growth">
                                    <img src="{{ asset('uploads/' . $blog->image) }}"
                                        alt="This Leader in Organic Agriculture Growth">
                                    <a href="blog-details-right.html" class="blog-card-list__image__link"><span
                                            class="sr-only">{{$blog->title}} 666666</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card-list__image -->
                                <div class="blog-card-list__content">
                                    <ul class="list-unstyled blog-card-list__meta">
                                        <li class="blog-card-list__meta__cats"><a href="blog-grid.html">Organic</a></li>
                                        <li><i class="icofont-ui-user"></i>Admin: <a
                                                href="blog-list-right.html">Lorat</a>
                                        </li>
                                        <li><i class="icofont-comment"></i>Comments (5)</li>
                                    </ul><!-- /.list-unstyled blog-card-list__meta -->
                                    <h3 class="blog-card-list__title"><a href="blog-details-right.html">{{$blog->title}}</a></h3><!-- /.blog-card-list__title -->
                                    <p class="blog-card-list__text">
                                        {!! $blog->context !!}
                                    </p><!-- /.blog-card-list__text -->
                                    <a href="blog-details-right.html" class="blog-card-list__link">
                                        <i class="icofont-arrow-right"></i>
                                        Read more
                                    </a><!-- /.blog-card-list__link -->
                                </div><!-- /.blog-card-list__content -->
                            </div><!-- /.blog-card-list -->
                        </div><!-- /.col-md-12 -->
                    @endforeach
                    <div class="col-md-12">
                        <ul class="post-pagination blog-page__pagination text-left">
                            <li>
                                <a href="blog-list.html">1</a>
                            </li>
                            <li>
                                <a class="current" href="blog-list-right.html">2</a>
                            </li>
                            <li>
                                <a href="blog-list-right.html"><span class="icofont-double-right"></span></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one -->
@include('layouts.footer')
