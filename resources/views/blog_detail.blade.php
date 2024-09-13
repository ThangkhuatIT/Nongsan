@include('layouts.header')
<section class="page-header">
    <div class="page-header__shape-left"></div>
    <div class="page-header__shape-right"></div>
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title bw-split-in-down">Blog Details
            No Sidebar</h2>
        <ul class="alefox-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Blog Details</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details__content">
                    <div class="blog-details__image">
                        <img src="{{ asset('uploads/' . $blogs[0]->image) }}" alt="alefox">
                    </div><!-- /.blog-card__image -->
                    <ul class="list-unstyled blog-details__top-meta">
                        <li class="blog-details__top-meta__cats"><a href="blog-grid.html">Organic</a></li>
                        <li><i class="icofont-ui-user"></i>Admin: <a href="blog-list-right.html">Lorat</a>
                        </li>
                        <li><i class="icofont-comment"></i>Comment
                            (5)</li>
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
                                <a href="blog-list-right.html">Agricultue</a>
                                <a href="blog-list-right.html">Organic</a>
                            </div><!-- /.sidebar__projects -->
                        </div><!-- /.blog-details__tags -->
                        <div class="blog-details__social">

                            <a href="https://facebook.com/">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://pinterest.com/">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                <span class="sr-only">Pinterest</span>
                            </a>
                            <a href="https://twitter.com/">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com/">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div><!-- /.blog-details__social -->
                    </div><!-- /.blog-details__meta -->
                </div><!-- /.blog-details -->

                <div class="comments-one">
                    <h3 class="comments-one__title">2
                        comments</h3><!-- /.comments-one__title -->
                    <ul class="list-unstyled comments-one__list">
                        <li class="comments-one__card">
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-1.jpg" alt="alefox">
                            </div><!-- /.comments-one__card__image -->
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">Kevin
                                    Martin <span class="comments-one__card__date">March
                                        20, 2023 at 1:37
                                        pm</span></h3><!-- /.comments-one__card__title -->
                                <p class="comments-one__card__text">Mauris
                                    non dignissim purus, ac commodo
                                    diam. Donec sit amet lacinia
                                    nulla. Aliquam quis purus in
                                    justo pulvinar tempor. Aliquam
                                    tellus nulla, sollicitudin at
                                    euismod.
                                </p><!-- /.comments-one__card__text -->
                                <div class="comments-one__card__btn">
                                    <a href="blog-details-right.html" class="alefox-btn comments-one__card__reply">
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        Reply
                                    </a>
                                </div><!-- /.comments-one__card__btn -->
                            </div><!-- /.comments-one__card__content -->
                        </li><!-- /.comments-one__card -->
                        <li class="comments-one__card">
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-2.jpg" alt="alefox">
                            </div><!-- /.comments-one__card__image -->
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">Sarah
                                    Albert <span class="comments-one__card__date">March
                                        20, 2023 at 2:37
                                        pm</span></h3><!-- /.comments-one__card__title -->
                                <p class="comments-one__card__text">
                                    Mauris non dignissim purus, ac
                                    commodo diam. Donec sit amet
                                    lacinia nulla. Aliquam quis
                                    purus in justo pulvinar tempor.
                                    Aliquam tellus nulla,
                                    sollicitudin at euismod.
                                </p><!-- /.comments-one__card__text -->
                                <div class="comments-one__card__btn">
                                    <a href="blog-details-right.html" class="alefox-btn comments-one__card__reply">
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        Reply
                                    </a>
                                </div><!-- /.comments-one__card__btn -->
                            </div><!-- /.comments-one__card__content -->
                        </li><!-- /.comments-one__card -->
                    </ul><!-- /.list-unstyled comments-one__list -->
                </div><!-- /.comments-one -->

                <div class="comments-form">
                    <h3 class="comments-form__title">Leave a
                        comment</h3><!-- /.comments-form__title -->
                    <form class="comments-form__form contact-form-validated form-one">
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Your name">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email address">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="alefox-btn">
                                    <span class="alefox-btn__item"></span>
                                    <span class="alefox-btn__item"></span>
                                    <span class="alefox-btn__item"></span>
                                    <span class="alefox-btn__item"></span>
                                    Submit comment
                                </button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                    <div class="result"></div>
                </div><!-- /.comments-form -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-one--page -->
@include('layouts.footer')
