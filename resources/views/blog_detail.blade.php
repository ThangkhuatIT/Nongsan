@include('layouts.header')
<section class="page-header">
    <div class="page-header__shape-left"></div>
    <div class="page-header__shape-right"></div>
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title bw-split-in-down">Bài Viết
            Mecrop</h2>
        <ul class="alefox-breadcrumb list-unstyled">
            <li><a href="{{route('home.blog')}}">Trang Chủ</a></li>
            <li><span>Chi tiết bài viết</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details__content">
                    <div class="blog-details__image">
                        <img src="{{ asset('uploads/' . $blogs[0]->image) }}" alt="mecrop">
                    </div><!-- /.blog-card__image -->
                    <ul class="list-unstyled blog-details__top-meta">
                        <li class="blog-details__top-meta__cats"><a href="#">Organic</a></li>
                        <li><i class="icofont-ui-user"></i>Admin: <a href="#">MECROP</a>
                        </li>

                        <li><i class="icofont-ui-calendar"></i>02
                            Sep 2024</li>
                    </ul><!-- /.list-unstyled blog-card__top-meta -->
                    @foreach ($blogs as $blog)
                        <h3 class="blog-details__title">{{$blog->title}}</h3>
                        {!! $blog->context !!}
                    @endforeach
                    <div class="blog-details__meta">
                        <div class="blog-details__tags">
                            <h4 class="blog-details__tags__title">Tags:</h4>
                            <!-- /.blog-details__tags__title -->
                            <div class="sidebar__tags">
                                <a href="">{{$blog->tag}}</a>
                            </div><!-- /.sidebar__projects -->
                        </div><!-- /.blog-details__tags -->
                        <div class="blog-details__social">

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
                        </div><!-- /.blog-details__social -->
                    </div><!-- /.blog-details__meta -->
                </div><!-- /.blog-details -->


            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-one--page -->
@include('layouts.footer')
