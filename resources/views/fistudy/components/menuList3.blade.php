<nav class="main-menu main-menu-two">
    <div class="main-menu-two__wrapper">
        <div class="container">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href={{ url('/') }}><img src="{{ asset('assets/images/resources/logo-2.png') }}" alt="">                        </a>
                    </div>
                </div>
                <div class="main-menu-two__main-menu-box">
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
                                                                    <a href={{ url('index-dark') }}
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
                <div class="main-menu-two__right">
                    <div class="main-menu-two__search-box">
                        <a href={{ url('#') }} class="main-menu-two__search searcher-toggler-box icon-search"></a>
                    </div>
                    <div class="main-menu-two__signin-reg">
                        <div class="main-menu-two__signin-reg-icon">
                            <span class="icon-user-plus"></span>
                        </div>
                        <div class="main-menu-two__signin-reg-content">
                            <a href={{ route('sign-up') }} class="main-menu-two__signin">Sign in</a>
                            <a href={{ route('login') }} class="main-menu-two__reg">Register</a>
                        </div>
                    </div>
                    <div class="main-menu-two__support-box">
                        <p class="main-menu-two__support-text"> <span class="icon-contact"></span> Support
                        </p>
                        <h5 class="main-menu-two__support-number"><a href="tel:1212345678900">+12 (123) 456
                                78900</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
 
