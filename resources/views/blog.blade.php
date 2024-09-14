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
                            <form action="{{ route('find.new') }}" class="sidebar__search" method="POST">
                                @csrf
                                <input type="text" name="title" placeholder="Tìm kiếm ở đây..." />
                                <button type="submit" aria-label="search submit">
                                    <span><i class="icon-magnifying-glass"></i></span>
                                </button>
                            </form><!-- /.sidebar__search -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">@lang('StrDictionary.categories')</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__categories list-unstyled">
                                @foreach ($c_aticles as $c_aticle)
                                    <li><a href="#">{{ $c_aticle->name }}</a>({{ $c_aticle->id }})
                                    </li>
                                @endforeach
                            </ul><!-- /.sidebar__categories list-unstyled -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">Recent Post</h4><!-- /.sidebar__title -->
                            <ul class="sidebar__posts list-unstyled">

                                @foreach ($recentBlogs as $recentBlog)
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img src="{{ asset('uploads/' . $recentBlog->image) }}" alt="mecrop"
                                                style="height: 60px ;width:60px; object-fit:cover; border-radius:50%;">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><i
                                                    class="icofont-calendar"></i>{{ $recentBlog->created_at }}
                                            </p>
                                            <!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title"><a
                                                    href="{{ route('admin.management.blog.detail', ['id' => $recentBlog->id, 'slug' => $recentBlog->slug]) }}">{{ $recentBlog->title }}</a>
                                            </h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                @endforeach

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
                                    <a href="{{ route('admin.management.blog.detail', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                                        class="blog-card-list__image__link"><span class="sr-only">{{ $blog->title }}
                                            666666</span>
                                        <!-- /.sr-only --></a>
                                </div><!-- /.blog-card-list__image -->
                                <div class="blog-card-list__content">
                                    <ul class="list-unstyled blog-card-list__meta">
                                        <li class="blog-card-list__meta__cats"><a href="#">Organic</a></li>
                                        <li><i class="icofont-ui-user"></i>Admin: <a href="#">Mecrop</a>
                                        </li>

                                    </ul><!-- /.list-unstyled blog-card-list__meta -->
                                    <h3 class="blog-card-list__title"><a
                                            href="{{ route('admin.management.blog.detail', ['id' => $blog->id, 'slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <!-- /.blog-card-list__title -->
                                    @php
                                        $textOnly = strip_tags($blog->context);
                                        $limitedText = Str::limit($textOnly, 300, '...');
                                    @endphp
                                    <p class="blog-card-list__text"
                                        style="  display: -webkit-box;
                                                -webkit-line-clamp: 4;
                                                -webkit-box-orient: vertical;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">
                                        {!! $limitedText !!}
                                    </p>
                                    <a href="{{ route('admin.management.blog.detail', ['id' => $blog->id, 'slug' => $blog->slug]) }}"
                                        class="blog-card-list__link">
                                        <i class="icofont-arrow-right"></i>
                                        Đọc thêm
                                    </a><!-- /.blog-card-list__link -->
                                </div><!-- /.blog-card-list__content -->
                            </div><!-- /.blog-card-list -->
                        </div><!-- /.col-md-12 -->
                    @endforeach
                    <div class="col-md-12">
                        {!! $blogs->links() !!}
                    </div>
                </div><!-- /.row -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one -->
@include('layouts.footer')
