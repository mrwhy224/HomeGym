<nav class="main-menu">
    <div class="main-menu__wrapper">
        <div class="container">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href={{ url('/') }}><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt="">                        </a>
                    </div>
                    <div class="main-menu__category-box">
                        <div class="main-menu__category-btn">
                            <i class="fas fa-th"></i>
                            <p>Category</p>
                            <span class="icon-down-arrow"></span>
                        </div>
                        <ul class="list-unstyled main-menu__category-sub-menu">
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-1.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>Tech & <br> Programming</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-2.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>Creative <br> Art</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-3.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>Business & <br> Finance</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-4.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>Health & <br> Wellness</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-5.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>Writing & <br> Communication</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-6.png') }}" alt="">>
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>User Research & <br> Analytics</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-7.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>Digital <br> Marketing</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-8.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>Lifestyle & <br> Productivity</h5>
                                        <p>3+ Courses</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu__main-menu-box">
                    <a href={{ url('#') }} class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="dropdown megamenu">
                            <a href={{ url('/') }}>Home </a>
                            <ul>
                                <li>
                                    <section class="home-showcase">
                                        <div class="container">
                                            <div class="home-showcase__inner">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="home-showcase__item">
                                                            <div class="home-showcase__image">
                                                                <img src="{{ asset('assets/images/home-showcase/home-showcase-1-1.jpg') }}" alt="">
                                                                <div class="home-showcase__buttons">
                                                                    <a href={{ url('/') }}
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        <span
                                                                            class="icon-angles-right"></span>
                                                                        Multi Page
                                                                    </a>
                                                                    <a href={{ route('index-one-page') }}
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        <span
                                                                            class="icon-angles-right"></span>
                                                                        One Page
                                                                    </a>
                                                                </div>
                                                                <!-- /.home-showcase__buttons -->
                                                            </div><!-- /.home-showcase__image -->
                                                            <h3 class="home-showcase__title">Home
                                                                Page
                                                                01</h3>
                                                            <!-- /.home-showcase__title -->
                                                        </div><!-- /.home-showcase__item -->
                                                    </div><!-- /.col-lg-3 -->
                                                    <div class="col-lg-3">
                                                        <div class="home-showcase__item">
                                                            <div class="home-showcase__image">
                                                                <img src="{{ asset('assets/images/home-showcase/home-showcase-1-2.jpg') }}" alt="">
                                                                <div class="home-showcase__buttons">
                                                                    <a href={{ route('index2') }}
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        <span
                                                                            class="icon-angles-right"></span>
                                                                        Multi Page
                                                                    </a>
                                                                    <a href={{ route('index2-one-page') }}
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        <span
                                                                            class="icon-angles-right"></span>
                                                                        One Page
                                                                    </a>
                                                                </div>
                                                                <!-- /.home-showcase__buttons -->
                                                            </div><!-- /.home-showcase__image -->
                                                            <h3 class="home-showcase__title">Home
                                                                Page
                                                                02
                                                            </h3><!-- /.home-showcase__title -->
                                                        </div><!-- /.home-showcase__item -->
                                                    </div><!-- /.col-lg-3 -->
                                                    <div class="col-lg-3">
                                                        <div class="home-showcase__item">
                                                            <div class="home-showcase__image">
                                                                <img src="{{ asset('assets/images/home-showcase/home-showcase-1-3.jpg') }}" alt="">
                                                                <div class="home-showcase__buttons">
                                                                    <a href={{ route('index3') }}
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        <span
                                                                            class="icon-angles-right"></span>
                                                                        Multi Page
                                                                    </a>
                                                                    <a href={{ route('index3-one-page') }}
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        <span
                                                                            class="icon-angles-right"></span>
                                                                        View Page
                                                                    </a>
                                                                </div>
                                                                <!-- /.home-showcase__buttons -->
                                                            </div><!-- /.home-showcase__image -->
                                                            <h3 class="home-showcase__title">Home
                                                                Page
                                                                03
                                                            </h3><!-- /.home-showcase__title -->
                                                        </div><!-- /.home-showcase__item -->
                                                    </div><!-- /.col-lg-3 -->
                                                    <div class="col-lg-3">
                                                        <div class="home-showcase__item">
                                                            <div class="home-showcase__image">
                                                                <img src="{{ asset('assets/images/home-showcase/home-showcase-1-4.jpg') }}" alt="">
                                                                <div class="home-showcase__buttons">
                                                                    <a href={{ route('index-dark') }}
                                                                        class="thm-btn home-showcase__buttons__item">
                                                                        <span
                                                                            class="icon-angles-right"></span>
                                                                        One Page
                                                                    </a>
                                                                </div>
                                                                <!-- /.home-showcase__buttons -->
                                                            </div><!-- /.home-showcase__image -->
                                                            <h3 class="home-showcase__title">Home
                                                                Page
                                                                04
                                                            </h3><!-- /.home-showcase__title -->
                                                        </div><!-- /.home-showcase__item -->
                                                    </div><!-- /.col-lg-3 -->
                                                </div><!-- /.row -->
                                            </div><!-- /.home-showcase__inner -->

                                        </div><!-- /.container -->
                                    </section>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href={{ route('about') }}>About</a>
                        </li>
                        <li class="dropdown">
                            <a href={{ url('#') }}>Pages</a>
                            <ul class="shadow-box">
                                <li><a href={{ route('instructor') }}>Instructors</a></li>
                                <li><a href={{ route('instructor-carousel') }}>Instructor Carousel</a></li>
                                <li><a href={{ route('instructor-details') }}>Instructor Details</a></li>
                                <li><a href={{ route('events') }}>Events</a></li>
                                <li><a href={{ route('events-carousel') }}>Event Carousel</a></li>
                                <li><a href={{ route('event-details') }}>Event Details</a></li>
                                <li><a href={{ route('become-a-teacher') }}>Become A Teacher</a></li>
                                <li><a href={{ route('testimonials') }}>Testimonials</a></li>
                                <li><a href={{ route('testimonials-carousel') }}>Testimonial Carousel</a></li>
                                <li><a href={{ route('pricing') }}>Pricing</a></li>
                                <li><a href={{ route('gallery') }}>Gallery</a></li>
                                <li><a href={{ route('faq') }}>FAQs</a></li>
                                <li><a href={{ url('404') }}>404 Error</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href={{ url('#') }}>Course</a>
                            <ul class="shadow-box">
                                <li><a href={{ route('course') }}>Course</a></li>
                                <li><a href={{ route('course-carousel') }}>Course Carousel</a></li>
                                <li><a href={{ route('course-list') }}>Course List</a></li>
                                <li><a href={{ route('course-details') }}>Course Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href={{ url('#') }}>Shop</a>
                            <ul class="shadow-box">
                                <li><a href={{ route('products') }}>Products</a></li>
                                <li><a href={{ route('product-details') }}>Product Details</a></li>
                                <li><a href={{ route('cart') }}>Cart</a></li>
                                <li><a href={{ route('checkout') }}>Checkout</a></li>
                                <li><a href={{ route('wishlist') }}>Wishlist</a></li>
                                <li><a href={{ route('sign-up') }}>Sign Up</a></li>
                                <li><a href={{ route('login') }}>Login</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href={{ url('#') }}>Blog</a>
                            <ul class="shadow-box">
                                <li><a href={{ route('blog') }}>Blog</a></li>
                                <li><a href={{ route('blog-carousel') }}>Blog Carousel</a></li>
                                <li><a href={{ route('blog-list') }}>Blog List</a></li>
                                <li><a href={{ route('blog-details') }}>Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href={{ route('contact') }}>Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__search-cart-box">
                        <div class="main-menu__search-box">
                            <a href={{ url('#') }} class="main-menu__search searcher-toggler-box icon-search"></a>
                        </div>
                        <div class="main-menu__cart">
                            <a href={{ url('#') }}><span class="fas fa-shopping-cart"></span></a>
                        </div>
                    </div>
                    <div class="main-menu__btn-boxes">
                        <div class="main-menu__btn-box-1">
                            <a href={{ url('#') }} class="thm-btn">Login</a>
                        </div>
                        <div class="main-menu__btn-box-2">
                            <a href={{ url('#') }} class="thm-btn">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
 
