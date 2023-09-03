@extends('web.app.app')
@section('main-body')

<!-- Slider Section Start -->
<div class="slider-section slider-section-02">
    <div class="slider-wrapper scene">
        <div class="container">
            <div class="row align-items-center gy-10">
                <div class="col-md-6">

                    <!-- Slider Caption Start -->
                    <div class="slider-caption-02" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="slider-caption-02__sub-title">Keep Learning</h3>
                        <h2 class="slider-caption-02__main-title">Connect With Our <mark>Expert</mark></h2>
                        <p>Acquire global knowledge and build your professional skills</p>
                        <a href="course-grid-left-sidebar.html"
                          class="slider-caption-02__btn btn btn-primary btn-hover-secondary">Find
                            courses</a>
                    </div>
                    <!-- Slider Caption End -->

                </div>
                <div class="col-md-6">

                    <!-- Slider Image Start -->
                    <div class="slider-image pb-0">
                        <div class="slider-image__image text-center" data-aos="fade-up" data-aos-duration="1000">
                            <img src="{{ asset('') }}assets/web/images/home-02-hero-image.png" alt="Hero Image"
                              width="449" height="541">
                        </div>

                        <div class="slider-image-widget-02" data-aos="zoom-in-left" data-aos-duration="1000"
                          data-aos-delay="1000">
                            <div class="slider-image-widget-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  width="48px" height="54px" viewBox="0 0 48 54">
                                    <g fill-rule="nonzero">
                                        <path
                                          d="M43.2692677,28.3954708 L30.9233723,26.6208 L25.3677785,15.4323692 C24.9963323,14.6652554 24.0732554,14.3446154 23.3061415,14.7162092 C22.9936246,14.8675938 22.7412185,15.1198523 22.5899815,15.4323692 L17.0343877,26.6208 L4.68849231,28.3954708 C4.10377846,28.48896 3.62407385,28.9085538 3.45393231,29.4756923 C3.30387692,30.0221538 3.45009231,30.6073108 3.83970462,31.0189292 L12.7904492,39.73824 L10.7071015,52.0068923 C10.6133169,52.5957415 10.8503631,53.1884308 11.3244554,53.5501292 C11.7913108,53.9053292 12.4192985,53.9651446 12.9447877,53.7044677 L23.97888,47.8401969 L35.0129723,53.7044677 L35.7074215,53.8588062 C36.0453415,53.8874585 36.38016,53.7758031 36.6333046,53.5501292 C37.1072492,53.1884308 37.3444431,52.5957415 37.2506585,52.0068923 L35.1673108,39.73824 L44.1180554,31.0189292 C44.5076677,30.6073108 44.6540308,30.0221538 44.5038277,29.4756923 C44.3336862,28.9087015 43.8539815,28.48896 43.2692677,28.3954708 Z M32.3895138,38.1179077 C32.0737477,38.4768 31.9325538,38.9569477 32.0037415,39.4297108 L33.7013169,49.4606769 L24.6733292,44.7538708 C24.2337969,44.5453292 23.7239631,44.5453292 23.2844308,44.7538708 L14.2564431,49.4606769 L15.9540185,39.4297108 C16.0252062,38.9569477 15.8840123,38.4769477 15.5682462,38.1179077 L8.23783385,31.0190769 L18.3460431,29.5529354 C18.84288,29.4656492 19.2708923,29.1518031 19.5035077,28.7041477 L23.97888,19.5990646 L28.4542523,28.7041477 C28.6868677,29.1518031 29.1147323,29.4656492 29.6117169,29.5529354 L39.7199262,31.0190769 L32.3895138,38.1179077 Z">
                                        </path>
                                        <path
                                          d="M23.97888,10.8026585 C24.8312123,10.8026585 25.5221169,10.1117538 25.5221169,9.25942154 L25.5221169,1.54323692 C25.5221169,0.690904615 24.8310646,0 23.97888,0 C23.1266954,0 22.4356431,0.690904615 22.4356431,1.54323692 L22.4356431,9.25942154 C22.4356431,10.1117538 23.1265477,10.8026585 23.97888,10.8026585 Z">
                                        </path>
                                        <path
                                          d="M47.2816246,8.1792 C46.5997292,7.66774154 45.6324923,7.80598154 45.1210338,8.48787692 L40.4913231,14.6608246 C39.9800123,15.34272 40.1181046,16.3099569 40.8,16.8214154 C41.0643692,17.0270031 41.3910646,17.136 41.7258831,17.1300923 C42.2088369,17.11872 42.6615138,16.8923077 42.9604431,16.5127385 L47.5901538,10.3397908 C48.10176,9.65789538 47.96352,8.69051077 47.2816246,8.1792 Z">
                                        </path>
                                        <path
                                          d="M6.23158154,17.1299446 C6.5664,17.1358523 6.89324308,17.0268554 7.15746462,16.8212677 C7.83936,16.3098092 7.97745231,15.3425723 7.46614154,14.6606769 L2.83657846,8.48772923 C2.32512,7.80583385 1.35788308,7.66774154 0.675987692,8.17905231 C-0.00590769231,8.69036308 -0.144,9.65774769 0.367310769,10.3396431 L4.99702154,16.5125908 C5.29595077,16.89216 5.74862769,17.1184246 6.23158154,17.1299446 Z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="slider-image-widget-02__caption">
                                <div class="slider-image-widget-02__rating">
                                    <div class="rating-star">
                                        <div class="rating-label" style="width: 100%;"></div>
                                    </div>
                                    <span>(1,492)</span>
                                </div>
                                <h4 class="slider-image-widget-02__title">Oliver / <span>Writer and
                                        Proofreader</span></h4>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Image End -->

                </div>
            </div>
        </div>

        <img class="slider-section__shape-01" data-depth="0.8"
          src="{{ asset('') }}assets/web/images/shape/edumall-shape-grid-dots.png" alt="Shape" width="417" height="371">
        <div class="slider-section__shape-02" data-depth="-1"></div>
        <div class="slider-section__shape-03" data-depth="-1.6"></div>
        <img class="slider-section__shape-04" data-depth="-0.6"
          src="{{ asset('') }}assets/web/images/shape/edumall-shape-01.png" alt="Shape" width="179" height="178">

    </div>
</div>
<!-- Slider Section End -->



<!-- Banner Start -->
<div class="banner-section section-padding-02">
    <div class="container">
        <div class="row gy-8">
            <div class="col-lg-6">

                <!-- Banner Box Start -->
                <div class="banner-box banner-bg-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row gy-4 gy-sm-0 align-items-end">
                        <div class="col-md-6">
                            <div class="banner-caption-02">
                                <h5 class="banner-caption-02__sub-title">New Certificates</h5>
                                <h3 class="banner-caption-02__title">Online Courses from EduMall University
                                </h3>
                                <a href="course-grid-left-sidebar.html"
                                  class="banner-caption-02__btn btn btn-primary btn-hover-secondary">Find
                                    out more</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-image banner-position">
                                <img src="{{ asset('') }}assets/web/images/banner-image-04.png" alt="Banner" width="330"
                                  height="175">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Box End -->

            </div>
            <div class="col-lg-6">

                <!-- Banner Box Start -->
                <div class="banner-box banner-bg-2" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row gy-4 gy-sm-0 align-items-center">
                        <div class="col-md-6">
                            <div class="banner-caption-02">
                                <h5 class="banner-caption-02__sub-title">New Collection</h5>
                                <h3 class="banner-caption-02__title">Master Your Coding Skills In Lockdown
                                </h3>
                                <a href="course-grid-left-sidebar.html"
                                  class="banner-caption-02__btn btn btn-primary btn-hover-secondary">View
                                    courses</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-video">
                                <a class="glightbox" href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk">
                                    <div class="banner-video__image">
                                        <img src="{{ asset('') }}assets/web/images/banner-image-05.jpg" alt="image"
                                          width="240" height="153">
                                    </div>
                                    <div class="banner-video__btn">
                                        <img src="{{ asset('') }}assets/web/images/youtube-play-button.png" alt="image">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Box End -->

            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
<!-- Category Start -->
<div class="category-seaction section-padding-02">
    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section-title__title">Browse <mark>Subjects </mark></h2>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="col-sm-4">
                <!-- Category Start -->
                <div class="section-btn-02 text-sm-end" data-aos="fade-up" data-aos-duration="1000">
                    <a class="btn btn-light btn-hover-primary" href="#">View all courses</a>
                </div>
                <!-- Category End -->
            </div>
        </div>

        <!-- Category Title End -->
        <div class="category-active" data-aos="fade-up" data-aos-duration="1000">
            <div class="swiper">
                <div class="swiper-wrapper">

                    @foreach ($subjects as $subject)
                    <div class="swiper-slide">

                        <!-- Category Item Start -->
                        <div class="category-item">
                            <a class="category-item__link" href="course-category.html">
                                <div class="category-item__image">
                                    <img src="{{ asset('') }}uploads/subjects/{{ $subject->image }}" alt="Category"
                                      width="258" height="318">
                                </div>
                                <div class="category-item__caption">
                                    <h3 class="category-item__name">{{ $subject->title }}</h3>
                                </div>
                            </a>
                        </div>
                        <!-- Category Item End -->

                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Category End -->

    </div>
</div>
<!-- Category End -->


<!-- Course Section Start -->
<div class="courses-section section-padding-02">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">

                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section-title__title">Explore <mark>Featured</mark> Courses </h2>
                </div>
                <!-- Section Title End -->

            </div>
            <div class="col-lg-6">
                <div class="courses-tab-menu" data-aos="fade-up" data-aos-duration="1000">
                    <ul class="nav justify-content-lg-end">
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">All</button>
                        </li>
                        <li><button data-bs-toggle="tab" data-bs-target="#tab2">Trending</button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#tab3">Popularity</button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#tab4">Featured</button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#tab5">Art & Design</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content course-tab-active swiper-button-style" data-aos="fade-up" data-aos-duration="1000">
            <div class="tab-pane fade show active" id="tab1">

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            @include('web.component.course')
                            <!-- Course End -->

                        </div>

                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab2">

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-11.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                        <span class="onsale">-39%</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Mastering Data
                                            Modeling
                                            Fundamentals</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$46.<small class="separator">00</small></span>
                                        <span class="regular-price">$76.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-12.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="onsale">-51%</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Fundamentals
                                            of Accounting</a>
                                    </h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$15.<small class="separator">00</small></span>
                                        <span class="regular-price">$31.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-1.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Successful
                                            Negotiation: Master
                                            Your Negotiating Skills</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-2.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Time
                                            Management Mastery: Do
                                            More, Stress Less</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$29.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-13.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Adobe
                                            Illustrator CC –
                                            Essentials Training Course0</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-6.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Consulting
                                            Approach to Problem
                                            Solving</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-3.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Angular – The
                                            Complete Guide
                                            (2020 Edition)</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$84.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-5.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Business
                                            Intelligence
                                            Analyst Course 2020</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-6.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Become a
                                            Product Manager |
                                            Learn the Skills & Get the Job</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-7.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Mechanical
                                            Engineering and
                                            Electrical Engineering Explained</a></h3>
                                    <a href="#" class="course-info__instructor">Oliver Porter</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$84.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab3">

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-13.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Adobe
                                            Illustrator CC –
                                            Essentials Training Course</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-4.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Consulting
                                            Approach to Problem
                                            Solving</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-14.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Time
                                            Management for
                                            Professional Productivity</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-9.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Essential
                                            Digital Tools for
                                            Customer Engagement</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-8.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Business
                                            Intelligence
                                            Analyst Course 2020</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-15.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Become a
                                            Product Manager |
                                            Learn the Skills & Get the Job</a></h3>
                                    <a href="#" class="course-info__instructor">Donald Logan</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-16.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Introduction
                                            to Web
                                            Development</a></h3>
                                    <a href="#" class="course-info__instructor">Oliver Porter</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail">
                                        <a href="#"><img src="{{ asset('') }}assets/web/images/courses/courses-17.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="onsale">-100%</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Analytic
                                            Techniques for
                                            Business Specialization</a></h3>
                                    <a href="#" class="course-info__instructor">Oliver Porter</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$00.<small class="separator">00</small></span>
                                        <span class="regular-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-18.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">How To Sing
                                            #1: Complete Vocal
                                            Warm ups & Voice Physiology</a></h3>
                                    <a href="#" class="course-info__instructor">Emilee Logan</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$19.<small class="separator">99</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-6.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Become a
                                            Product Manager |
                                            Learn the Skills & Get the Job</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab4">

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-19.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete
                                            2020 Web
                                            Development Bootcamp</a></h3>
                                    <a href="#" class="course-info__instructor">Donald Logan</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$45.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-20.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Sales
                                            Training: Practical
                                            Sales Techniques</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$36.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-21.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Business
                                            Intelligence
                                            Analyst Course 2020</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$39.<small class="separator">99</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-22.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete
                                            Graphic Design
                                            Theory for Beginners Course</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$45.<small class="separator">99</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-23.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Graphic Design
                                            Bootcamp:
                                            Photoshop, Illustrator, InDesign</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$29.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-13.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Adobe
                                            Illustrator CC –
                                            Essentials Training Course</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-24.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                        <span class="onsale">-43%</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Public
                                            Relations: Media Crisis
                                            Communications</a></h3>
                                    <a href="#" class="course-info__instructor">Emilee Logan</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$45.<small class="separator">00</small></span>
                                        <span class="regular-price">$79.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-25.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Learn Big
                                            Data: The Hadoop
                                            Ecosystem Masterclass</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$21.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-26.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                        <span class="onsale">-39%</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Mastering Data
                                            Modeling
                                            Fundamentals</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$46.<small class="separator">00</small></span>
                                        <span class="regular-price">$76.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-27.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-all">All Levels</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Communication
                                            Skills Machine:
                                            Master Persuasion</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$35.<small class="separator">00</small></span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab5">

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-22.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete
                                            Graphic Design
                                            Theory for Beginners Course</a></h3>
                                    <a href="#" class="course-info__instructor">Donald Logan</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$45.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-9.jpg" alt="courses"
                                              width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">User
                                            Experience Design
                                            Fundamentals</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$42.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-23.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Graphic Design
                                            Bootcamp:
                                            Photoshop, Illustrator, InDesign</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$29.<small class="separator">99</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-28.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Ultimate
                                            Photoshop Training:
                                            From Beginner to Pro</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-29.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete
                                            Illustrator 2020
                                            MasterClass</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$22.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-13.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Adobe
                                            Illustrator CC –
                                            Essentials Training Course</a></h3>
                                    <a href="#" class="course-info__instructor">parra</a>
                                    <div class="course-info__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-30.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="onsale">-50%</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete
                                            UX & Web Design
                                            Master Course</a></h3>
                                    <a href="#" class="course-info__instructor">Emilee Logan</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$45.<small class="separator">00</small></span>
                                        <span class="regular-price">$79.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item">
                                <div class="course-header">
                                    <div class="course-header__thumbnail ">
                                        <a href="course-single-layout-01.html"><img
                                              src="{{ asset('') }}assets/web/images/courses/courses-31.jpg"
                                              alt="courses" width="258" height="173"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="hot">Featured</span>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span class="course-info__badge-text badge-beginner">Beginner</span>
                                    <h3 class="course-info__title"><a href="course-single-layout-01.html">Fundamentals
                                            of Graphic
                                            Design</a></h3>
                                    <a href="#" class="course-info__instructor">Owen Christ</a>
                                    <div class="course-info__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>
        </div>

    </div>
</div>
<!-- Course Section End -->
<div class="shop-section section-padding-01">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">

                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section-title__title">Explore <mark>Featured</mark> Products </h2>
                </div>
                <!-- Section Title End -->

            </div>
        </div>
        <div class="row row-cols-xl-5 gy-6">
            @foreach ($products as $data)
            <div class="col-xl col-lg-3 col-md-4 col-sm-6">

                <!-- Product Item Start -->
                @include('web.component.product')
                <!-- Product Item End -->

            </div>
            @endforeach


        </div>


    </div>
</div>



<!-- Guides Start -->
<div class="section-padding-02">
    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section-title__title">EduMall <mark>Guides</mark></h2>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="col-sm-4">
                <!-- Category Start -->
                <div class="section-btn-02 text-sm-end" data-aos="fade-up" data-aos-duration="1000">
                    <a class="btn btn-light btn-hover-primary" href="#">View all</a>
                </div>
                <!-- Category End -->
            </div>
        </div>

        <div class="row g-6">
            <div class="col-lg-3 col-sm-6">
                <!-- Edumall Box Item Strat -->
                <div class="edumall-box-item text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="edumall-box-item__icon">
                        <img src="{{ asset('') }}assets/web/images/icon/image-box-01.png" alt="Icon" width="99"
                          height="100">
                    </div>
                    <div class="edumall-box-item__content">
                        <h4 class="edumall-box-item__title">Learn The Essential Skills</h4>
                        <p>Like graphic design, business anaytics, coding and much more</p>
                    </div>
                </div>
                <!-- Edumall Box Item End -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <!-- Edumall Box Item Strat -->
                <div class="edumall-box-item text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="edumall-box-item__icon">
                        <img src="{{ asset('') }}assets/web/images/icon/image-box-02.png" alt="Icon" width="100"
                          height="100">
                    </div>
                    <div class="edumall-box-item__content">
                        <h4 class="edumall-box-item__title">Earn Certificates And Degrees</h4>
                        <p>From top institutions and universities with high reputation over the world</p>
                    </div>
                </div>
                <!-- Edumall Box Item End -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <!-- Edumall Box Item Strat -->
                <div class="edumall-box-item text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="edumall-box-item__icon">
                        <img src="{{ asset('') }}assets/web/images/icon/image-box-03.png" alt="Icon" width="100"
                          height="100">
                    </div>
                    <div class="edumall-box-item__content">
                        <h4 class="edumall-box-item__title">Get Ready for The Next Career</h4>
                        <p>With high demands in mastering new skills in IT, analytics and more</p>
                    </div>
                </div>
                <!-- Edumall Box Item End -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <!-- Edumall Box Item Strat -->
                <div class="edumall-box-item text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="edumall-box-item__icon">
                        <img src="{{ asset('') }}assets/web/images/icon/image-box-04.png" alt="Icon" width="90"
                          height="100">
                    </div>
                    <div class="edumall-box-item__content">
                        <h4 class="edumall-box-item__title">Master at Different Areas</h4>
                        <p>With EduMall's thousands of courses instructed by top experts</p>
                    </div>
                </div>
                <!-- Edumall Box Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Guides End -->
{{-- blogs start --}}
<div class="blog-section section-padding-01">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                <!-- Section Title Start -->
                <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section-title__title">Explore <mark>News</mark> & <mark>BLogs</mark> </h2>
                </div>
                <!-- Section Title End -->

            </div>
        </div>
        <div class="row gy-10 grid" style="position: relative; height: 1318.94px;">
            @foreach ($blogs as $blog)
            <div class="col-xl-3 col-lg-4 col-md-6 grid-item" style="position: absolute; left: 0px; top: 0px;">

                <!-- Blog Item Start -->
                @include('web.component.blog')
                <!-- Blog Item End -->

            </div>
            @endforeach


        </div>


    </div>
</div>
{{-- blogs start --}}
@endsection