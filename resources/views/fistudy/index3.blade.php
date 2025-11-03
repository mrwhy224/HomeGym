@extends('layouts.layout7')
@section('title', 'Home Three || Fistudy || Fistudy Laravel Template ')
@section('content')
<x-strickyHeader/>

    <!-- Main Slider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme">
            <div class="item">
                <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/backgrounds/slider-1-1.jpg') }});"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__sub-title-box">
                            <div class="main-slider__sub-title-shape"></div>
                            <h5 class="main-slider__sub-title">Best Online Platform</h5>
                        </div>
                        <h2 class="main-slider__title">Hey! Grow Your Career <br> With Follow Fistudy</h2>
                        <p class="main-slider__text">Enhance your educational journey with our cutting-edge
                            course platform. <br> Convenience of online education, allowing learners to acquire new
                            <br> skills at their own pace and from any location.</p>
                        <div class="main-slider__btn-box">
                            <a href="{{ url('contact') }}" class="thm-btn"><span class="icon-angles-right"></span>Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/backgrounds/slider-1-2.jpg') }});"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__sub-title-box">
                            <div class="main-slider__sub-title-shape"></div>
                            <h5 class="main-slider__sub-title">Best Online Platform</h5>
                        </div>
                        <h2 class="main-slider__title">Hey! Grow Your Career <br> With Follow Fistudy</h2>
                        <p class="main-slider__text">Enhance your educational journey with our cutting-edge
                            course platform. <br> Convenience of online education, allowing learners to acquire new
                            <br> skills at their own pace and from any location.</p>
                        <div class="main-slider__btn-box">
                            <a href="{{ url('contact') }}" class="thm-btn"><span class="icon-angles-right"></span>Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider__bg" style="background-image: url({{ asset('assets/images/backgrounds/slider-1-3.jpg') }});"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__sub-title-box">
                            <div class="main-slider__sub-title-shape"></div>
                            <h5 class="main-slider__sub-title">Best Online Platform</h5>
                        </div>
                        <h2 class="main-slider__title">Hey! Grow Your Career <br> With Follow Fistudy</h2>
                        <p class="main-slider__text">Enhance your educational journey with our cutting-edge
                            course platform. <br> Convenience of online education, allowing learners to acquire new
                            <br> skills at their own pace and from any location.</p>
                        <div class="main-slider__btn-box">
                            <a href="{{ url('contact') }}" class="thm-btn"><span class="icon-angles-right"></span>Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Main Slider End -->

    <!-- Courses Search Start -->
    <section class="courses-search">
        <div class="courses-search__shape-bg" style="background-image: url({{ asset('assets/images/shapes/courses-search-shape-bg.jpg') }});"></div>
        <div class="container">
            <div class="courses-search__inner">
                <div class="section-title-two text-center sec-title-animation animation-style1">
                    <div class="section-title-two__tagline-box">
                        <div class="section-title-two__tagline-shape">
                            <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                        </div>
                        <span class="section-title-two__tagline">Courses Search</span>
                    </div>
                    <h2 class="section-title-two__title title-animation">Find the best Course <br> Search in the
                        <span>Fistudy</span>
                    </h2>
                </div>
                <form action="#" class="courses-search__form">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-search__input-box">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Education">Education</option>
                                        <option value="1">Education</option>
                                        <option value="2">Accounting</option>
                                        <option value="3">Business</option>
                                        <option value="6">Development</option>
                                        <option value="7">Marketing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-search__input-box">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="All">All</option>
                                        <option value="1">All</option>
                                        <option value="2">Paid</option>
                                        <option value="3">Free</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-search__input-box">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Recent Courses">Recent Courses</option>
                                        <option value="1">Recent Courses</option>
                                        <option value="2">Highest Rated</option>
                                        <option value="3">Most Members</option>
                                        <option value="3">Alphabetical</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-search__input-box">
                                <input type="search" placeholder="Keywords">
                                <button type="submit" class="courses-search__search-btn"><span
                                        class="icon-search"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="courses-search__btn-box">
                                <button type="submit" class="thm-btn">Search Courses</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Courses Search End -->

    <!-- About One Start -->
    <section class="about-one">
        <div class="about-one__shape-1">
            <img src="{{ asset('assets/images/shapes/about-one-shape-1.png') }}" alt="">
        </div>
        <div class="about-one__shape-2">
            <img src="{{ asset('assets/images/shapes/about-one-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__left">
                        <div class="about-one__left-shape-1 rotate-me"></div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__img-box">
                                    <div class="about-one__img">
                                        <img src="{{ asset('assets/images/resources/abou-one-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="about-one__awards-box">
                                    <div class="about-one__awards-count-box">
                                        <h3 class="odometer" data-count="45">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p>Awards Winning</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__experience-box">
                                    <div class="about-one__experience-box-inner">
                                        <div class="about-one__experience-icon">
                                            <img src="{{ asset('assets/images/icon/about-one-experience-icon.png') }}" alt="">
                                        </div>
                                        <div class="about-one__experience-count-box">
                                            <div class="about-one__experience-count">
                                                <h3 class="odometer" data-count="25">00</h3>
                                                <span>+</span>
                                                <p>Years</p>
                                            </div>
                                            <p>of experience</p>
                                        </div>
                                    </div>
                                    <div class="about-one__experience-box-shape"></div>
                                </div>
                                <div class="about-one__img-box-2">
                                    <div class="about-one__img-2">
                                        <img src="{{ asset('assets/images/resources/abou-one-img-2.jpg') }}" alt="">
                                    </div>
                                    <div class="about-one__img-shape-1 float-bob-y">
                                        <img src="{{ asset('assets/images/shapes/about-one-img-shape-1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape"></div>
                                <span class="section-title__tagline">About Us</span>
                            </div>
                            <h2 class="section-title__title title-animation">Our Story: Built On Values, Driven By
                                <span>Innovation <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}"
                                        alt=""></span></h2>
                        </div>
                        <p class="about-one__text">We are dedicated to transforming education through digital
                            innovation, making learning more accessible, engaging, and effective for everyone. By
                            integrating cutting-edge technology, we aim to create an inclusive and dynamic learning
                            environment</p>
                        <ul class="about-one__mission-and-vision list-unstyled">
                            <li>
                                <div class="about-one__icon-and-title">
                                    <div class="about-one__icon">
                                        <img src="{{ asset('assets/images/icon/mission-icon.png') }}" alt="">
                                    </div>
                                    <h3>Our Mission:</h3>
                                </div>
                                <p class="about-one__mission-and-vision-text">To provide innovative digital
                                    education solutions that empower learners and educators, fostering a culture to
                                    growing your value</p>
                            </li>
                            <li>
                                <div class="about-one__icon-and-title">
                                    <div class="about-one__icon">
                                        <img src="{{ asset('assets/images/icon/vision-icon.png') }}" alt="">
                                    </div>
                                    <h3>Our Vision</h3>
                                </div>
                                <p class="about-one__mission-and-vision-text">To provide innovative digital
                                    education solutions that empower learners and educators, fostering a culture to
                                    growing your value</p>
                            </li>
                        </ul>
                        <div class="about-one__btn-and-live-class">
                            <div class="about-one__btn-box">
                                <a href="{{ url('about') }}" class="about-one__btn thm-btn"><span
                                        class="icon-angles-right"></span>Know More</a>
                            </div>
                            <h3 class="about-one__live-class">Live Class <img
                                    src="{{ asset('assets/images/shapes/live-class-shape-1.png') }}" alt=""></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About One End -->


    <!--Courses Two Start -->
    <section class="courses-two">
        <div class="container">
            <div class="section-title-two text-left sec-title-animation animation-style2">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Our Courses</span>
                </div>
                <h2 class="section-title-two__title title-animation">Explore Our Comprehensive<br> Course
                    <span>Offerings</span>
                </h2>
            </div>
            <div class="courses-two__inner">
                <ul class="courses-two__filter style1 post-filter list-unstyled clearfix">
                    <li data-filter=".filter-item" class="active">
                        <p><span class="icon-catagory"></span>All Categories</p>
                    </li>
                    <li data-filter=".design">
                        <p><span class="icon-pen-ruler"></span>Design</p>
                    </li>
                    <li data-filter=".programming">
                        <p><span class="icon-computer"></span>Programming</p>
                    </li>
                    <li data-filter=".marketing">
                        <p><span class="icon-bullhorn"></span>Marketing</p>
                    </li>
                </ul>
                <div class="row filter-layout">
                    <!--Courses Two Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item design marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-1.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$240.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Getting Started with Computers and Beginner's Guide to Basic Skills</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-1.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Sarah Alison</h4>
                                            <p><span class="odometer" data-count="12">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Beginner</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lessons</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>620h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Courses Two Single End-->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item design programming">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-2.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$120.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Cooking Made Easy: Essential Skills for Everyday Meals</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-2.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Mitchel March</h4>
                                            <p><span class="odometer" data-count="20">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Advance</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>120 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>12h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item programming marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-3.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$640.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Graphic Design Basics: Learn the Foundations of Visual</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-3.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Mr. Harry</h4>
                                            <p><span class="odometer" data-count="5">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Entry Level</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>620h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-4.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$350.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Photography for Everyone: How to Capture Stunning Photos with Ease</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-4.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Alisa Olivia</h4>
                                            <p><span class="odometer" data-count="8">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Advance</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>80 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>156h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-5.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$150.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">Writing Made Simple: From Ideas to Finished Pieces for All Levels</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-5.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Jordan Walk</h4>
                                            <p><span class="odometer" data-count="16">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Medium</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>326h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                    <!-- Courses Two Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 filter-item design marketing">
                        <div class="courses-two__single">
                            <div class="courses-two__img-box">
                                <div class="courses-two__img">
                                    <img src="{{ asset('assets/images/resources/courses-2-6.jpg') }}" alt="">
                                </div>
                                <div class="courses-two__heart">
                                    <a href="{{ url('course-details') }}"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                            <div class="courses-two__content">
                                <div class="courses-two__doller-and-review">
                                    <div class="courses-two__doller">
                                        <p>$290.00</p>
                                    </div>
                                    <div class="courses-two__review">
                                        <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                    </div>
                                </div>
                                <h3 class="courses-two__title">
                                    <a href="{{ url('course-details') }}">A Beginner’s Guide to Building Your Online Presence</a>
                                </h3>
                                <div class="courses-two__btn-and-client-box">
                                    <div class="courses-two__btn-box">
                                        <a href="{{ url('course-details') }}" class="thm-btn-two">
                                            <span>Enroll Now</span>
                                            <i class="icon-angles-right"></i>
                                        </a>
                                    </div>
                                    <div class="courses-two__client-box">
                                        <div class="courses-two__client-img">
                                            <img src="{{ asset('assets/images/resources/courses-two-client-img-6.jpg') }}" alt="">
                                        </div>
                                        <div class="courses-two__client-content">
                                            <h4>Aman Ellison</h4>
                                            <p><span class="odometer" data-count="12">00</span><i>+</i> Years Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="courses-two__meta list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chart-simple"></span>
                                        </div>
                                        <p>Beginner</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p>45 Lesson</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-clock"></span>
                                        </div>
                                        <p>620h, 55min</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Two Single End -->
                </div>
            </div>
        </div>
    </section>
    <!--Courses Two End -->

    <!--Why Choose Two Start -->
    <section class="why-choose-two">
        <div class="why-choose-two__shape-5 shapemover">
            <img src="{{ asset('assets/images/shapes/why-choose-two-shape-5.png') }}" alt="">
        </div>
        <div class="why-choose-two__shape-6"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two__left">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title-two__tagline">Why Choose Us</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">Discover Why Our Student <br> and
                                Clients
                                <span>Choose Us</span>
                            </h2>
                        </div>
                        <div class="why-choose-two__left-content-box">
                            <div class="why-choose-two__shape-1"></div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-two__left-content">
                                        <!--Why Choose Two Single Start -->
                                        <div class="why-choose-two__single wow fadeInUp" data-wow-delay="100ms">
                                            <div class="why-choose-two__icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-icon-1.png') }}" alt="">
                                            </div>
                                            <h3 class="why-choose-two__title"><a href="{{ url('about') }}">It provides tools
                                                    for <br>
                                                    course creation,</a></h3>
                                            <ul class="list-unstyled why-choose-two__points">
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Enrollment management,
                                                        and <br> tracking learner progress,</p>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text"> ensuring a streamlined
                                                        learning <br> experience.</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Why Choose Two Single End -->
                                        <!--Why Choose Two Single Start -->
                                        <div class="why-choose-two__single wow fadeInUp" data-wow-delay="200ms">
                                            <div class="why-choose-two__icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-icon-2.png') }}" alt="">
                                            </div>
                                            <h3 class="why-choose-two__title"><a href="{{ url('about') }}">Many LMS
                                                    platforms <br>
                                                    include collaborative</a></h3>
                                            <ul class="list-unstyled why-choose-two__points">
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Features such as
                                                        discussion <br> forums, messaging,</p>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Which facilitate
                                                        interaction and <br> communication among learners <br> and
                                                        instructors.</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Why Choose Two Single End -->
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="why-choose-two__video-box">
                                        <!--Why Choose Two Single Start -->
                                        <div class="why-choose-two__single wow fadeInUp" data-wow-delay="300ms">
                                            <div class="why-choose-two__icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-icon-3.png') }}" alt="">
                                            </div>
                                            <h3 class="why-choose-two__title"><a href="{{ url('about') }}">An effective LMS
                                                    offers
                                                    <br> robust analytics </a></h3>
                                            <ul class="list-unstyled why-choose-two__points">
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text">Reporting features that
                                                        enable <br> businesses to track learner</p>
                                                </li>
                                                <li>
                                                    <div class="why-choose-two__points-icon">
                                                        <img src="{{ asset('assets/images/icon/check-icon.png') }}" alt="">
                                                    </div>
                                                    <p class="why-choose-two__points-text"> This data helps
                                                        organizations <br> assess the effectiveness of their <br>
                                                        training programs </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--Why Choose Two Single End -->
                                        <div class="why-choose-two__video">
                                            <div class="why-choose-two__video-link">
                                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                    class="video-popup">
                                                    <div class="why-choose-two__video-icon">
                                                        <span class="fa fa-play"></span>
                                                        <i class="ripple"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="why-choose-two__video-content">
                                                <h4>Join Our Live Class</h4>
                                                <p>It has survived not only five centuries, but also the</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two__right">
                        <div class="why-choose-two__shape-box">
                            <div class="why-choose-two__shape-2">
                                <div class="why-choose-two__shape-3">
                                    <div class="why-choose-two__shape-4 float-bob-y">
                                        <img src="{{ asset('assets/images/shapes/why-choose-two-shape-4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why-choose-two__dot-1">
                            <img src="{{ asset('assets/images/shapes/why-choose-two-dot-1.png') }}" alt="">
                        </div>
                        <div class="why-choose-two__dot-2">
                            <img src="{{ asset('assets/images/shapes/why-choose-two-dot-2.png') }}" alt="">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="why-choose-two__right-content-one">
                                    <div class="why-choose-two__right-content-one-user-details">
                                        <div class="why-choose-two__right-content-one-user-details-top">
                                            <div class="why-choose-two__right-content-one-user-details-top-shape-bg"
                                                    style="background-image: url('{{ asset('assets/images/shapes/why-choose-two-right-content-one-user-details-top-shape-bg.png') }}');">
                                            </div>
                                            <div class="why-choose-two__right-content-one-user-details-top-img">
                                                <img src="{{ asset('assets/images/resources/why-choose-two-right-content-one-user-details-top-img.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="why-choose-two__right-content-one-user-details-bottom">
                                            <div class="why-choose-two__right-content-one-user-details-img">
                                                <img src="{{ asset('assets/images/resources/why-choose-two-right-content-one-user-details-img-1.jpg') }}" alt="">
                                            </div>
                                            <div class="why-choose-two__right-content-one-user-details-content">
                                                <h5>Sarah Amanda</h5>
                                                <p>Product Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-choose-two__student-trained">
                                        <div class="why-choose-two__student-trained-shape-1"></div>
                                        <ul class="list-unstyled why-choose-two__student-trained-list">
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-1.jpg') }}" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-2.jpg') }}" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-3.jpg') }}" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="why-choose-two__student-trained-img">
                                                    <img src="{{ asset('assets/images/resources/why-choose-two-student-trained-img-1-4.jpg') }}" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="why-choose-two__student-trained-count-box">
                                            <div class="why-choose-two__student-trained-count-box-inner count-box">
                                                <p class="count-text" data-stop="100" data-speed="3000">00</p>
                                                <span>+</span>
                                            </div>
                                            <p class="why-choose-two__student-trained-text">Student Trained</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="why-choose-two__right-content-two">
                                    <div class="why-choose-two__udemy-review">
                                        <div class="why-choose-two__udemy-review-img">
                                            <img src="{{ asset('assets/images/resources/why-choose-two-udemy-review-img.jpg') }}" alt="">
                                        </div>
                                        <div class="why-choose-two__udemy-review-logo">
                                            <img src="{{ asset('assets/images/resources/why-choose-two-udemy-review-logo.png') }}" alt="">
                                        </div>
                                        <div class="why-choose-two__udemy-review-client-info">
                                            <p class="why-choose-two__udemy-review-client-name">Alisa Olivia/</p>
                                            <div class="why-choose-two__udemy-review-star">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-choose-two__right-content-two-user-details">
                                        <div class="why-choose-two__right-content-two-user-details-top">
                                            <div class="why-choose-two__right-content-two-user-details-top-shape-bg"
                                                    style="background-image: url('{{ asset('assets/images/shapes/why-choose-two-right-content-one-user-details-top-shape-bg.png') }}');">
                                            </div>
                                            <div class="why-choose-two__right-content-two-user-details-top-img">
                                                <img src="{{ asset('assets/images/resources/why-choose-two-right-content-two-user-details-top-img.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="why-choose-two__right-content-two-user-details-bottom">
                                            <div class="why-choose-two__right-content-two-user-details-icon">
                                                <img src="{{ asset('assets/images/icon/why-choose-two-right-content-two-user-details-icon.png') }}" alt="">
                                            </div>
                                            <div class="why-choose-two__right-content-two-user-details-content">
                                                <h5>Jhon Oleson</h5>
                                                <p>Sr. Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose Two End -->

    <!-- Pricing One Start -->
    <section class="pricing-one">
        <div class="container">
            <div class="section-title-two text-center sec-title-animation animation-style1">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Our Pricing</span>
                </div>
                <h2 class="section-title-two__title title-animation">
                    Your Source for Ideas, <br> Insights, and <span>Inspiration</span>
                </h2>
            </div>
            <div class="row">
                <!-- Pricing One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="pricing-one__single">
                        <h4 class="pricing-one__package-name"><a href="#">Basic</a></h4>
                        <div class="pricing-one__price-box">
                            <h3>$15</h3>
                            <p>Month</p>
                        </div>
                        <ul class="list-unstyled pricing-one__feature">
                            <li>5 Courses</li>
                            <li>10 Videos</li>
                            <li>15 Audios</li>
                            <li>Enhanced Security</li>
                            <li>Limited Access</li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="{{ url('pricing') }}" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing One Single End -->

                <!-- Pricing One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                    <div class="pricing-one__single">
                        <h4 class="pricing-one__package-name"><a href="#">Standard</a></h4>
                        <div class="pricing-one__price-box">
                            <h3>$60</h3>
                            <p>Month</p>
                        </div>
                        <ul class="list-unstyled pricing-one__feature">
                            <li>5 Courses</li>
                            <li>10 Videos</li>
                            <li>15 Audios</li>
                            <li>Enhanced Security</li>
                            <li>Limited Access</li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="{{ url('pricing') }}" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing One Single End -->

                <!-- Pricing One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="pricing-one__single">
                        <h4 class="pricing-one__package-name"><a href="#">Premium</a></h4>
                        <div class="pricing-one__price-box">
                            <h3>$70</h3>
                            <p>Month</p>
                        </div>
                        <ul class="list-unstyled pricing-one__feature">
                            <li>5 Courses</li>
                            <li>10 Videos</li>
                            <li>15 Audios</li>
                            <li>Enhanced Security</li>
                            <li>Limited Access</li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="{{ url('pricing') }}" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing One Single End -->

                <!-- Pricing One Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="pricing-one__single">
                        <h4 class="pricing-one__package-name"><a href="#">Ultimate</a></h4>
                        <div class="pricing-one__price-box">
                            <h3>$80</h3>
                            <p>Month</p>
                        </div>
                        <ul class="list-unstyled pricing-one__feature">
                            <li>5 Courses</li>
                            <li>10 Videos</li>
                            <li>15 Audios</li>
                            <li>Enhanced Security</li>
                            <li>Limited Access</li>
                        </ul>
                        <div class="pricing-one__btn-box">
                            <a href="{{ url('pricing') }}" class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                        </div>
                    </div>
                </div>
                <!-- Pricing One Single End -->
            </div>
        </div>
    </section>
    <!-- Pricing One End -->

    <!--Process One Start -->
    <section class="process-one">
        <div class="container">
            <div class="section-title-two text-center sec-title-animation animation-style1">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">OUR PROCESS</span>
                </div>
                <h2 class="section-title-two__title title-animation">Our Process Designed for <br>Your Success
                    <span>History</span>
                </h2>
            </div>
            <div class="process-one__inner">
                <div class="process-one__inner-wrap">
                    <div class="process-one__list-box">
                        <ul class="row list-unstyled">
                            <li class="col-xl-6 col-lg-6 col-md-6">
                                <div class="process-one__single wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="process-one__count"></div>
                                    <h3 class="process-one__title">Search for your course</h3>
                                    <div class="process-one__text-box">
                                        <p class="process-one__text">We are dedicated to transforming education
                                            through digital innovation, making learning more accessible</p>
                                        <div class="process-one__icon">
                                            <span class="icon-search"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6">
                                <div class="process-one__single wow fadeInRight" data-wow-delay="200ms">
                                    <div class="process-one__count"></div>
                                    <h3 class="process-one__title">Preview the Syllabus</h3>
                                    <div class="process-one__text-box">
                                        <div class="process-one__icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <p class="process-one__text">We are dedicated to transforming education
                                            through digital innovation, making learning more accessible</p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6">
                                <div class="process-one__single wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="process-one__count"></div>
                                    <h3 class="process-one__title">Take a Sample Lesson</h3>
                                    <div class="process-one__text-box">
                                        <p class="process-one__text">We are dedicated to transforming education
                                            through digital innovation, making learning more accessible</p>
                                        <div class="process-one__icon">
                                            <span class="icon-computer"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6">
                                <div class="process-one__single wow fadeInLeft" data-wow-delay="400ms">
                                    <div class="process-one__count"></div>
                                    <h3 class="process-one__title">Purchase the Course</h3>
                                    <div class="process-one__text-box">
                                        <div class="process-one__icon">
                                            <span class="icon-catagory"></span>
                                        </div>
                                        <p class="process-one__text">We are dedicated to transforming education
                                            through digital innovation, making learning more accessible</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Process One End -->

    <!-- Testimonial Three Start -->
    <section class="testimonial-three">
        <div class="testimonial-three__wrap">
            <div class="section-title-two text-center sec-title-animation animation-style1">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Our Testimonial</span>
                </div>
                <h2 class="section-title-two__title title-animation">Our Students
                    <span>Feedback</span>
                </h2>
            </div>
            <ul class="list-unstyled testimonial-three__list marquee_mode-3">
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Mitchel Watson</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Jessica Brown</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Asle Rose</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-4.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Ruksana Rumi</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled testimonial-three__list testimonial-three__list--two marquee_mode-4">
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Mitchel Watson</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Jessica Brown</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Asle Rose</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-three__single">
                        <div class="testimonial-three__rating">
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                        </div>
                        <p class="testimonial-three__text">It has survived not only five centuries,
                            but also <br> the leap into electronic typesetting, remaining <br> essentially
                            unchanged. It was popularised in <br> the 1960s with the release.</p>
                        <div class="testimonial-three__client-info">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-4.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-content">
                                <h4 class="testimonial-three__client-name"><a href={{ url('testimonials') }}>Ruksana Rumi</a></h4>
                                <p class="testimonial-three__client-sub-title">UI/UX Design</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Testimonial Three End -->

    <!-- Event One Start -->
    <section class="event-one">
        <div class="container">
            <div class="section-title-two text-center sec-title-animation animation-style1">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Our Events</span>
                </div>
                <h2 class="section-title-two__title title-animation">Our Students
                    <span>Feedback</span>
                </h2>
            </div>
            <div class="row">
                <!-- Event One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-1.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title"><a href={{ url('event-details') }}>Graphic Design
                                    Essentials From Concept to Creation</a></h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href={{ url('event-details') }} class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->

                <!-- Event One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-2.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title"><a href={{ url('event-details') }}>Innovative Teaching Strategies
                                    for the 21st Century Classroom</a></h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href={{ url('event-details') }} class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->

                <!-- Event One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-3.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title"><a href={{ url('event-details') }}>Role of Social-Emotional Learning
                                    in Student Success</a></h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href={{ url('event-details') }} class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->

                <!-- Event One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-4.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title"><a href={{ url('event-details') }}>Key Features and Considerations
                                    for Educational Institutions</a></h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href={{ url('event-details') }} class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->

                <!-- Event One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-5.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title"><a href={{ url('event-details') }}>Key Features and Considerations
                                    for Educational Institutions</a></h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href={{ url('event-details') }} class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->

                <!-- Event One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                    <div class="event-one__single">
                        <div class="event-one__img">
                            <img src="{{ asset('assets/images/event/event-1-6.jpg') }}" alt="">
                            <div class="event-one__date">
                                <p>25</p>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <p class="event-one__time"> <span class="icon-clock"></span> 7:00 pm - 9:00 pm</p>
                            <h4 class="event-one__title"><a href={{ url('event-details') }}>Unlocking the Future of Education: How LMS Transforms Learning</a></h4>
                            <div class="event-one__location">
                                <div class="event-one__location-icon">
                                    <span class="icon-location"></span>
                                </div>
                                <p class="event-one__loation-text">1234 Elm Street, Springfield, IL 62704</p>
                            </div>
                            <div class="event-one__btn-box">
                                <a href={{ url('event-details') }} class="thm-btn"><span class="icon-angles-right"></span>Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event One Single End -->
            </div>
        </div>
    </section>
    <!-- Event One End -->

    <!-- Counter Two Start -->
    <section class="counter-two">
        <div class="counter-two__wrap">
            <ul class="list-unstyled counter-two__list marquee_mode">
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__img-box">
                            <div class="counter-two__img">
                                <img src="{{ asset('assets/images/resources/counter-2-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <p class="odometer" data-count="120">00</p>
                                <span>K+</span>
                            </div>
                            <p class="counter-two__text">Successfully <br> Student</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="counter-two__shpae-1">
                        <img src="{{ asset('assets/images/shapes/counter-two-shape-1.png') }}" alt="">
                    </div>
                </li>
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__img-box">
                            <div class="counter-two__img">
                                <img src="{{ asset('assets/images/resources/counter-2-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <p class="odometer" data-count="560">00</p>
                                <span>K+</span>
                            </div>
                            <p class="counter-two__text">Courses <br> Completed</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="counter-two__shpae-1">
                        <img src="{{ asset('assets/images/shapes/counter-two-shape-1.png') }}" alt="">
                    </div>
                </li>
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__img-box">
                            <div class="counter-two__img">
                                <img src="{{ asset('assets/images/resources/counter-2-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <p class="odometer" data-count="3">00</p>
                                <span>M+</span>
                            </div>
                            <p class="counter-two__text">Satisfied <br> Review</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="counter-two__shpae-1">
                        <img src="{{ asset('assets/images/shapes/counter-two-shape-1.png') }}" alt="">
                    </div>
                </li>
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__img-box">
                            <div class="counter-two__img">
                                <img src="{{ asset('assets/images/resources/counter-2-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <p class="odometer" data-count="120">00</p>
                                <span>K+</span>
                            </div>
                            <p class="counter-two__text">Successfully <br> Student</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Counter Two End -->

    <!-- Blog Two Start -->
    <section class="blog-two">
        <div class="container">
            <div class="section-title-two text-center sec-title-animation animation-style1">
                <div class="section-title-two__tagline-box">
                    <div class="section-title-two__tagline-shape">
                        <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                    </div>
                    <span class="section-title-two__tagline">Our Insight</span>
                </div>
                <h2 class="section-title-two__title title-animation">
                    Your Source for Ideas, <br>Insights, and <span>Inspiration</span>
                </h2>
            </div>
            <div class="row">
                <!-- Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title">
                                <a href={{ url('blog-details') }}>How to Succeed in Online Learning: Tips for Students</a>
                            </h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Two Single End -->
                <!-- Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title">
                                <a href={{ url('blog-details') }}>The Future of Education: Why Online Learning is Here to Stay</a>
                            </h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Two Single End -->
                <!-- Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href={{ url('blog-details') }}><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title">
                                <a href={{ url('blog-details') }}>Creating a Productive Study Space for Online Learning</a>
                            </h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Two Single End -->
            </div>
        </div>
    </section>
    <!-- Blog Two End -->

    <!--Newsletter Two Start -->
    <section class="newsletter-two">
        <div class="container">
            <div class="newsletter-two__inner">
                <div class="newsletter-two__img">
                    <img src="{{ asset('assets/images/resources/newsletter-two-img-1.png') }}" alt="">
                </div>
                <div class="newsletter-two__inner-content">
                    <div class="newsletter-two__shape-bg"
                        style="background-image: url('{{ asset('assets/images/shapes/newsletter-two-shape-bg.png') }}');">
                    </div>
                    <div class="newsletter-two__like">
                        <img src="{{ asset('assets/images/shapes/newsletter-two-like.png') }}" alt="">
                    </div>
                    <div class="newsletter-two__title-box">
                        <h3 class="newsletter-two__title">Subscribe our <span>Newsletter</span></h3>
                        <p class="newsletter-two__text">Explore a diverse selection of courses all in one platform,
                            <br>
                            designed to cater to various learning</p>
                    </div>
                    <div class="newsletter-two__form-box">
                        <form class="newsletter-two__form">
                            <div class="newsletter-two__input">
                                <input type="email" placeholder="Enter Your Email">
                            </div>
                            <button type="submit" class="newsletter-two__btn">
                                <span class="icon-arrow-circle"></span> Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Newsletter Two End -->

    <!--Contact Info One Start -->
    <section class="contact-info-one">
        <div class="container">
            <ul class="list-unstyled contact-info-one__list">
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-envelope"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Email Address:</p>
                            <h5 class="contact-info-one__email">
                                <a href="mailto:info@example.com">info@example.com</a>
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Phone Number</p>
                            <h5 class="contact-info-one__email">
                                <a href="tel:001239957689">+00 123 (99) 57689</a>
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contact-info-one__single">
                        <div class="contact-info-one__icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="contact-info-one__content">
                            <p class="contact-info-one__sub-title">Our Address</p>
                            <h5 class="contact-info-one__email">1234 Elm Street Springfield,</h5>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Contact Info One End -->

<x-footer2/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection