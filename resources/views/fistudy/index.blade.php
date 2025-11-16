
@extends('layouts.layout1')
@section('title', 'Home One || eventflow || eventflow Laravel Template ')
@section('content')
<x-strickyHeader/>

<!-- Banner One Start -->
<section class="banner-one">
    <div class="banner-one__bg-shape-1"></div>


    <div class="banner-one__shape-4 float-bob-x">
        <img src="{{ asset('assets/images/shapes/banner-one-shape-4.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="banner-one__left">
                    <div class="banner-one__title-box">
                        <div class="banner-one__title-box-shape">
                            <img src="{{ asset('assets/images/shapes/banner-one-title-box-shape-1.png') }}" alt="">
                        </div>
						<h2 class="banner-one__title">
							<span class="banner-one__title-clr-1">Where smiles<br>grow</span>
							And <br>
							<span class="banner-one__title-clr-2">muscles show</span>
						</h2>
                    </div>
                    <p class="banner-one__text">Train anytime, anywhere — empowering you to stay fit and achieve your goals at your own pace.
                      <br>
                        skills at their own pace and from any location.</p>
{{--                    <div class="banner-one__thm-and-other-btn-box">--}}
{{--                        <div class="banner-one__btn-box">--}}
{{--                            <a href="{{ url('course-details') }}" class="thm-btn"><span--}}
{{--                                    class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                        </div>--}}
{{--                        <div class="banner-one__other-btn-box">--}}
{{--                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"--}}
{{--                                class="banner-one__other-btn-1 video-popup"><span--}}
{{--                                    class="icon-thumbs-up"></span>Quality--}}
{{--                                Video</a>--}}
{{--                            <a href="{{ url('pricing') }}" class="banner-one__other-btn-1 banner-one__other-btn-2"><span--}}
{{--                                    class="icon-thumbs-up"></span>Suitable--}}
{{--                                Price</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-xl-6">
                <div class="banner-one__right">
                    <div class="banner-one__img-box">
                        <div class="banner-one__img">
                            <img src="{{ asset('assets/images/home/mv-pc.png') }}" alt="">
                            <div class="banner-one__img-shape-box rotate-me">
                                <div class="banner-one__img-shape-1">
                                    <div class="banner-one__img-shape-2"></div>
                                </div>
                                <div class="banner-one__shape-1">
                                    <img src="{{ asset('assets/images/shapes/banner-one-shape-1.png') }}" alt="">
                                </div>
                                <div class="banner-one__shape-2 rotate-me">
                                    <img src="{{ asset('assets/images/shapes/banner-one-shape-2.png') }}" alt="">
                                </div>
                                <div class="banner-one__shape-3">
                                    <img src="{{ asset('assets/images/shapes/banner-one-shape-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="banner-one__student-trained">
                                <div class="banner-one__student-trained-shape-1 rotate-me">
                                    <img src="{{ asset('assets/images/shapes/banner-one-student-trained-shape-1.png') }}" alt="">
                                </div>
                                <ul class="list-unstyled banner-one__student-trained-list">
                                    <li>
                                        <div class="banner-one__student-trained-img">
                                            <img src="{{ asset('assets/images/resources/banner-one-student-trained-img-1-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="banner-one__student-trained-img">
                                            <img src="{{ asset('assets/images/resources/banner-one-student-trained-img-1-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </li>
                                </ul>
                                <div class="banner-one__student-trained-count-box">
                                    <div class="banner-one__student-trained-count-box-inner count-box">
                                        <p class="count-text" data-stop="2000" data-speed="3000">00</p>
                                        <span>+</span>
                                    </div>
                                    <p class="banner-one__student-trained-text">Success Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner One End -->


<!-- Sliding Text One Start-->
<section class="sliding-text-one">
    <div class="sliding-text-one__wrap">
        <ul class="sliding-text__list list-unstyled marquee_mode">
            <li>
                <h2 data-hover="20+ Instructor" class="sliding-text__title">
                    <span class="odometer" data-count="20">00</span>+ Instructor
                    <img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">
                </h2>
            </li>
            <li>
                <h2 data-hover="500+ Online Courses" class="sliding-text__title">
                    <span class="odometer" data-count="500">00</span>+ Online Courses
                    <img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">
                </h2>
            </li>
            <li>
                <h2 data-hover="24 Hours Support" class="sliding-text__title">
                    24 Hours Support
                    <img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">
                </h2>
            </li>
            <li>
                <h2 data-hover="Courses Certificate" class="sliding-text__title">
                    Courses Certificate
                    <img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">
                </h2>
            </li>
        </ul>
    </div>
</section>
<!-- Sliding Text One End -->


<!-- Category One Start -->
<section class="category-one">
{{--    <div class="category-one__bg-shape"--}}
{{--        style="background-image: url({{ asset('assets/images/shapes/category-one-bg-shape.png') }});"></div>--}}
    <div class="category-one__shape-1">
        <img src="{{ asset('assets/images/shapes/category-one-shape-1.png') }}" alt="">
    </div>
    <div class="category-one__shape-2">
        <img src="{{ asset('assets/images/shapes/category-one-shape-2.png') }}" alt="">
    </div>
    <div class="category-one__shape-3">
        <img src="{{ asset('assets/images/shapes/category-one-shape-3.png') }}" alt="">
    </div>
    <div class="category-one__social-media">
        <ul class="category-one__social-media-list list-unstyled">
            <li>
                <h3>Arial</h3>
            </li>
            <li>
                <img src="{{ asset('assets/images/shapes/category-one-social-media-shape-1.png') }}" alt="">
            </li>
            <li>
                <h3>Fitness</h3>
            </li>
            <li>
                <img src="{{ asset('assets/images/shapes/category-one-social-media-shape-1.png') }}" alt="">
            </li>
            <li>
                <h3>BodyBuilding</h3>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div class="category-one__left">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <div class="section-title__tagline-box">
                            <div class="section-title__tagline-shape"></div>
                            <span class="section-title__tagline">Category</span>
                        </div>
                        <h2 class="section-title__title title-animation">Browse Our Categories To<br> Find
                            Exactly <span>Courses <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}"
                                    alt=""></span></h2>
                    </div>
                    <ul class="category-one__category-list list-unstyled">
                        <li>
                            <div class="category-one__count-and-arrow">
                                <div class="category-one__count-box">
                                    <div class="category-one__count"></div>
                                    <div class="category-one__count-content">
                                        <h3><a href={{ url('course-details') }}>Public classes</a></h3>
                                        <p>10 Course</p>
                                    </div>
                                </div>
                                <div class="category-one__count-arrow">
                                    <a href={{ url('course-details') }}><span
                                            class="icon-arrow-up-right-2"></span></a>
                                </div>
                            </div>
                            <div class="category-one__hover-icon-and-arrow">
                                <div class="category-one__hover-icon-box">
{{--                                    <div class="category-one__hover-icon">--}}
{{--                                        <img src="{{ asset('assets/images/icon/category-one-hover-icon-1-1.png') }}" alt="">--}}
{{--                                    </div>--}}
                                    <div class="category-one__hover-content">
                                        <h3><a href={{ url('course-details') }}>Public classes</a></h3>
                                        <p>10 Course</p>
                                    </div>
                                </div>
                                <div class="category-one__hover-arrow">
                                    <a href={{ url('course-details') }}><span
                                            class="icon-arrow-up-right-2"></span></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-one__count-and-arrow">
                                <div class="category-one__count-box">
                                    <div class="category-one__count"></div>
                                    <div class="category-one__count-content">
                                        <h3><a href={{ url('course-details') }}>Semi-private classes</a></h3>
                                        <p>50 Course</p>
                                    </div>
                                </div>
                                <div class="category-one__count-arrow">
                                    <a href={{ url('course-details') }}><span
                                            class="icon-arrow-up-right-2"></span></a>
                                </div>
                            </div>
                            <div class="category-one__hover-icon-and-arrow">
                                <div class="category-one__hover-icon-box">
{{--                                    <div class="category-one__hover-icon">--}}
{{--                                        <img src="{{ asset('assets/images/icon/category-one-hover-icon-1-1.png') }}" alt="">--}}
{{--                                    </div>--}}
                                    <div class="category-one__hover-content">
                                        <h3><a href={{ url('course-details') }}>Semi-private classes</a></h3>
                                        <p>50 Course</p>
                                    </div>
                                </div>
                                <div class="category-one__hover-arrow">
                                    <a href={{ url('course-details') }}><span
                                            class="icon-arrow-up-right-2"></span></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-one__count-and-arrow">
                                <div class="category-one__count-box">
                                    <div class="category-one__count"></div>
                                    <div class="category-one__count-content">
                                        <h3><a href={{ url('course-details') }}>Private classes</a></h3>
                                        <p>12 Course</p>
                                    </div>
                                </div>
                                <div class="category-one__count-arrow">
                                    <a href={{ url('course-details') }}><span
                                            class="icon-arrow-up-right-2"></span></a>
                                </div>
                            </div>
                            <div class="category-one__hover-icon-and-arrow">
                                <div class="category-one__hover-icon-box">
{{--                                    <div class="category-one__hover-icon">--}}
{{--                                        <img src="{{ asset('assets/images/icon/category-one-hover-icon-1-1.png') }}" alt="">--}}
{{--                                    </div>--}}
                                    <div class="category-one__hover-content">
                                        <h3><a href={{ url('course-details') }}>Private classes</a></h3>
                                        <p>12 Course</p>
                                    </div>
                                </div>
                                <div class="category-one__hover-arrow">
                                    <a href={{ url('course-details') }}><span
                                            class="icon-arrow-up-right-2"></span></a>
                                </div>
                            </div>
                        </li>
{{--                        <li>--}}
{{--                            <div class="category-one__count-and-arrow">--}}
{{--                                <div class="category-one__count-box">--}}
{{--                                    <div class="category-one__count"></div>--}}
{{--                                    <div class="category-one__count-content">--}}
{{--                                        <h3><a href={{ url('course-details') }}>Content Creation</a></h3>--}}
{{--                                        <p>10 Course</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="category-one__count-arrow">--}}
{{--                                    <a href={{ url('course-details') }}><span--}}
{{--                                            class="icon-arrow-up-right-2"></span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="category-one__hover-icon-and-arrow">--}}
{{--                                <div class="category-one__hover-icon-box">--}}
{{--                                    <div class="category-one__hover-icon">--}}
{{--                                        <img src="{{ asset('assets/images/icon/category-one-hover-icon-1-1.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="category-one__hover-content">--}}
{{--                                        <h3><a href={{ url('course-details') }}>Content Creation</a></h3>--}}
{{--                                        <p>10 Course</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="category-one__hover-arrow">--}}
{{--                                    <a href={{ url('course-details') }}><span--}}
{{--                                            class="icon-arrow-up-right-2"></span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="category-one__right">
                    <div class="category-one__img">
                        <img src="{{ asset('assets/images/home/why-us.111.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category One End -->


<!-- About One Start -->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="about-one__left">
                    <div class="about-one__left-shape-1 rotate-me"></div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/home/tt.webp') }}" alt="">
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
{{--                            <div class="about-one__experience-box">--}}
{{--                                <div class="about-one__experience-box-inner">--}}
{{--                                    <div class="about-one__experience-icon">--}}
{{--                                        <img src="{{ asset('assets/images/icon/about-one-experience-icon.png') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="about-one__experience-count-box">--}}
{{--                                        <div class="about-one__experience-count">--}}
{{--                                            <h3 class="odometer" data-count="25">00</h3>--}}
{{--                                            <span>+</span>--}}
{{--                                            <p>Years</p>--}}
{{--                                        </div>--}}
{{--                                        <p>of experience</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="about-one__experience-box-shape"></div>--}}
{{--                            </div>--}}
                            <div class="about-one__img-box-2">
                                <div class="about-one__img-2">
                                    <img src="{{ asset('assets/images/home/Photo-11.png') }}" alt="">
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
                            <p class="about-one__mission-and-vision-text">Empowering people to transform their bodies, boost their energy, and unlock the best version of themselves through fitness.</p>
                        </li>
                        <li>
                            <div class="about-one__icon-and-title">
                                <div class="about-one__icon">
                                    <img src="{{ asset('assets/images/icon/vision-icon.png') }}" alt="">
                                </div>
                                <h3>Our Vision</h3>
                            </div>
                            <p class="about-one__mission-and-vision-text">To provide innovative fitness and wellness programs that empower people to improve their health, boost their energy, and build lasting confidence.</p>
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


<!-- Courses One Start -->
{{--<section class="courses-one">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-center sec-title-animation animation-style1">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <div class="section-title__tagline-shape"></div>--}}
{{--                <span class="section-title__tagline">Our Courses</span>--}}
{{--            </div>--}}
{{--            <h2 class="section-title__title title-animation">More Than Just A Brand: A <br>Journey Of--}}
{{--                <span>Excellence <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt=""></span></h2>--}}
{{--        </div>--}}
{{--        <div class="courses-one__carousel owl-theme owl-carousel">--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>Art & Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>12 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>120h 45min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>Graphic Design--}}
{{--                                Essentials From Concept to Creation</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">250 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$260.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>UI/UX Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>4 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>120h 45min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>UI/UX Design Enhancing User--}}
{{--                                Experience Effectively</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">45 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$150.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-3.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>Web Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>45 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>620h 55min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>Modern Web Design Aesthetic--}}
{{--                                and Functional Websites</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">32 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$240.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>Art & Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>12 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>120h 45min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>Graphic Design--}}
{{--                                Essentials From Concept to Creation</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">250 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$260.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>UI/UX Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>4 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>120h 45min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>UI/UX Design Enhancing User--}}
{{--                                Experience Effectively</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">45 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$150.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-3.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>Web Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>45 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>620h 55min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>Modern Web Design Aesthetic--}}
{{--                                and Functional Websites</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">32 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$240.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>Art & Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>12 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>120h 45min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>Graphic Design--}}
{{--                                Essentials From Concept to Creation</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">250 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$260.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>UI/UX Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>4 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>120h 45min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>UI/UX Design Enhancing User--}}
{{--                                Experience Effectively</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">45 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$150.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--            <!--Courses One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="courses-one__single">--}}
{{--                    <div class="courses-one__img-box">--}}
{{--                        <div class="courses-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/courses-1-3.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="courses-one__content">--}}
{{--                        <div class="courses-one__tag-and-meta">--}}
{{--                            <div class="courses-one__tag">--}}
{{--                                <span>Web Design</span>--}}
{{--                            </div>--}}
{{--                            <ul class="courses-one__meta list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-book"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>45 Lesson</p>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="icon">--}}
{{--                                        <span class="icon-clock"></span>--}}
{{--                                    </div>--}}
{{--                                    <p>620h 55min</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <h3 class="courses-one__title"><a href={{ url('course-details') }}>Modern Web Design Aesthetic--}}
{{--                                and Functional Websites</a></h3>--}}
{{--                        <div class="courses-one__ratting-and-heart-box">--}}
{{--                            <div class="courses-one__ratting-box">--}}
{{--                                <ul class="courses-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <p class="courses-one__ratting-text">32 Reviews</p>--}}
{{--                            </div>--}}
{{--                            <div class="courses-one__heart">--}}
{{--                                <a href={{ url('course-details') }}><span class="icon-heart"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="courses-one__btn-and-doller-box">--}}
{{--                            <div class="courses-one__btn-box">--}}
{{--                                <a href={{ url('course-details') }} class="courses-one__btn thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Enroll Now</a>--}}
{{--                            </div>--}}
{{--                            <span>$240.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Courses One Single End-->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Courses One End -->

<!-- Why Choose One Start -->
{{--<section class="why-choose-one">--}}
{{--    <div class="why-choose-one__shape-6 float-bob-x">--}}
{{--        <img src="{{ asset('assets/images/shapes/why-choose-one-shape-6.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="why-choose-one__shape-7 float-bob-y">--}}
{{--        <img src="{{ asset('assets/images/shapes/why-choose-one-shape-7.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-6">--}}
{{--                <div class="why-choose-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">--}}
{{--                    <div class="why-choose-one__img-box">--}}
{{--                        <div class="why-choose-one__img">--}}
{{--                            <img src="{{ asset('assets/images/resources/why-choose-one-img-1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-one__img-2">--}}
{{--                            <img src="{{ asset('assets/images/resources/why-choose-one-img-2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-one__shape-1 float-bob-y">--}}
{{--                            <img src="{{ asset('assets/images/shapes') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-one__shape-2 float-bob-x">--}}
{{--                            <img src="{{ asset('assets/images/shapes/') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-one__shape-3 float-bob-y">--}}
{{--                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-3.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-one__shape-4">--}}
{{--                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-4.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-one__shape-5 img-bounce">--}}
{{--                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-5.png') }}" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-6">--}}
{{--                <div class="why-choose-one__right">--}}
{{--                    <div class="section-title text-left sec-title-animation animation-style2">--}}
{{--                        <div class="section-title__tagline-box">--}}
{{--                            <div class="section-title__tagline-shape"></div>--}}
{{--                            <span class="section-title__tagline">Why Choose Us</span>--}}
{{--                        </div>--}}
{{--                        <h2 class="section-title__title title-animation">Built on Trust: Discover Why Our Customers--}}
{{--                            <span>Choose us <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt=""></span>--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                    <p class="why-choose-one__text">Explore a diverse selection of courses all in one platform, designed to cater to various learning needs and interests, making education more accessible and convenient.</p>--}}
{{--                    <div class="why-choose-one__points-box">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <ul class="why-choose-one__points-list list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <div class="why-choose-one__points-icon-inner">--}}
{{--                                            <div class="why-choose-one__points-icon">--}}
{{--                                                <img src="{{ asset('assets/images/icon/why-choose-one-icon-1.png') }}" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="why-choose-one__points-content">--}}
{{--                                            <h3>Flexible Schedule</h3>--}}
{{--                                            <p>That allows employees to choose their working hours within certain limits</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="why-choose-one__points-icon-inner">--}}
{{--                                            <div class="why-choose-one__points-icon">--}}
{{--                                                <img src="{{ asset('assets/images/icon/why-choose-one-icon-2.png') }}" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="why-choose-one__points-content">--}}
{{--                                            <h3>Job Grantee</h3>--}}
{{--                                            <p>This guarantee ensures that anyone who wants to work can find a job, usually provided</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <ul class="why-choose-one__points-list list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <div class="why-choose-one__points-icon-inner">--}}
{{--                                            <div class="why-choose-one__points-icon">--}}
{{--                                                <img src="{{ asset('assets/images/icon/why-choose-one-icon-3.png') }}" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="why-choose-one__points-content">--}}
{{--                                            <h3>24 Hours Support</h3>--}}
{{--                                            <p>Our assistance is available to give support to our students 24 hours a day, 7 days a week.</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="why-choose-one__points-icon-inner">--}}
{{--                                            <div class="why-choose-one__points-icon">--}}
{{--                                                <img src="{{ asset('assets/images/icon/why-choose-one-icon-4.png') }}" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="why-choose-one__points-content">--}}
{{--                                            <h3>Provide Certificate</h3>--}}
{{--                                            <p>This phrase refers to the action of giving or issuing an official document</p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="why-choose-one__btn-and-client-box">--}}
{{--                        <div class="why-choose-one__btn-box">--}}
{{--                            <a href="{{ url('about') }}" class="why-choose-one__btn thm-btn"><span class="icon-angles-right"></span>Know More</a>--}}
{{--                        </div>--}}
{{--                        <div class="why-choose-one__client-box">--}}
{{--                            <ul class="why-choose-one__client-img-list list-unstyled">--}}
{{--                                <li>--}}
{{--                                    <img src="{{ asset('assets/images/resources/why-choose-one-client-img-1.jpg') }}" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{ asset('assets/images/resources/why-choose-one-client-img-2.jpg') }}" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{ asset('assets/images/resources/why-choose-one-client-img-3.jpg') }}" alt="">--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <div class="why-choose-one__client-content">--}}
{{--                                <div class="why-choose-one__count-box">--}}
{{--                                    <h3 class="odometer" data-count="100">00</h3>--}}
{{--                                    <span>+</span>--}}
{{--                                </div>--}}
{{--                                <p>Professional Instructor</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Why Choose One End -->


<!-- Counter One Start -->
<section class="counter-one">
    <div class="counter-one__bg" style="background-image: url('{{ asset('assets/images/home/young-fitness-man-studio_7502-5008.jpg') }}');">
        <div class="counter-one__video-link">
            <div class="counter-one__video-shape-1">
                <img src="{{ asset('assets/images/shapes/counter-one-video-shape-11.png') }}" alt="">
            </div>
            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                <div class="counter-one__video-icon">
                    <span class="icon-play"></span>
                    <i class="ripple"></i>
                </div>
            </a>
        </div>
    </div>
    <div class="counter-one__shape-1" style="background-image: url('{{ asset('assets/images/shapes/counter-one-shape-1.png') }}');"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="counter-one__left">
                    <ul class="counter-one__list list-unstyled">
                        <li>
                            <div class="counter-one__count-hover-img"
                                style="background-image: url('{{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }}');">
                            </div>
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                                <span>k</span>
                            </div>
                            <p>Student Trained</p>
                        </li>
                        <li>
                            <div class="counter-one__count-hover-img"
                                style="background-image: url('{{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }}');">
                            </div>
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="50" data-speed="1500">00</h3>
                                <span>+</span>
                            </div>
                            <p>Recorded Courses</p>
                        </li>
                        <li>
                            <div class="counter-one__count-hover-img"
                                style="background-image: url('{{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }}');">
                            </div>
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="15" data-speed="1500">00</h3>
                                <span>M</span>
                            </div>
                            <p>Satisfaction Rate</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter One End -->


<!-- Team One Start -->
{{--<section class="team-one">--}}
{{--    <div class="team-one__shape-1 shapemover">--}}
{{--        <img src="{{ asset('assets/images/shapes/team-one-shape-1.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="team-one__shape-2 float-bob-y">--}}
{{--        <img src="{{ asset('assets/images/shapes/team-one-shape-2.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="team-one__shape-3">--}}
{{--        <img src="{{ asset('assets/images/shapes/team-one-shape-3.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="team-one__shape-4 float-bob-x">--}}
{{--        <img src="{{ asset('assets/images/shapes/team-one-shape-4.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-left sec-title-animation animation-style2">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <div class="section-title__tagline-shape"></div>--}}
{{--                <span class="section-title__tagline">Our Team</span>--}}
{{--            </div>--}}
{{--            <h2 class="section-title__title title-animation">Meet the Team Passionate <br>People, Exceptional--}}
{{--                <span>Talents <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt=""></span></h2>--}}
{{--        </div>--}}
{{--        <div class="team-one__carousel owl-theme owl-carousel">--}}
{{--            <!-- Team One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>Thomas Alison</a></h3>--}}
{{--                            <p class="team-one__sub-title">UI/UX Expert</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Team One Single End -->--}}
{{--            <!--Team One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>Alisa Olivia</a></h3>--}}
{{--                            <p class="team-one__sub-title">Graphics Designer</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Team One Single End-->--}}
{{--            <!--Team One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>Sarah Wilson</a></h3>--}}
{{--                            <p class="team-one__sub-title">Tech & Programming</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Team One Single End-->--}}
{{--            <!--Team One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>David Warner</a></h3>--}}
{{--                            <p class="team-one__sub-title">Digital Marketer</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Team One Single End-->--}}
{{--            <!-- Team One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>Thomas Alison</a></h3>--}}
{{--                            <p class="team-one__sub-title">UI/UX Expert</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Team One Single End -->--}}
{{--            <!--Team One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>Alisa Olivia</a></h3>--}}
{{--                            <p class="team-one__sub-title">Graphics Designer</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Team One Single End-->--}}
{{--            <!--Team One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>Sarah Wilson</a></h3>--}}
{{--                            <p class="team-one__sub-title">Tech & Programming</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Team One Single End-->--}}
{{--            <!--Team One Single Start-->--}}
{{--            <div class="item">--}}
{{--                <div class="team-one__single">--}}
{{--                    <div class="team-one__img-box">--}}
{{--                        <div class="team-one__img">--}}
{{--                            <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="team-one__content">--}}
{{--                            <div class="team-one__single-bg-shape"--}}
{{--                                style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-1">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content-shape-2">--}}
{{--                                <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__plus-and-social">--}}
{{--                                <div class="team-one__plus">--}}
{{--                                    <span class="icon-plus"></span>--}}
{{--                                </div>--}}
{{--                                <div class="team-one__social">--}}
{{--                                    <a href="{{ config('app.linkedin_url', '#') }}" class="fab fa-linkedin-in"></a>--}}
{{--                                    <a href="{{ config('app.pinterest_url', '#') }}" class="fab fa-pinterest-p"></a>--}}
{{--                                    <a href="{{ config('app.facebook_url', '#') }}" class="fab fa-facebook-f"></a>--}}
{{--                                    <a href="{{ config('app.instagram_url', '#') }}" class="fab fa-instagram"></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <h3 class="team-one__title"><a href={{ url('instructor-details') }}>David Warner</a></h3>--}}
{{--                            <p class="team-one__sub-title">Digital Marketer</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--Team One Single End-->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Team One End -->

<!-- Newsletter One Start -->
{{--<section class="newsletter-one" style="margin-top: 100px">--}}
{{--    <div class="container">--}}
{{--        <div class="newsletter-one__inner">--}}
{{--            <div class="newsletter-one__bg-shape"--}}
{{--                style="background-image: url('{{ asset('assets/images/home/newsletter-purple.png') }}');"></div>--}}
{{--            <div class="newsletter-one__shape-1 float-bob-y">--}}
{{--                <img src="{{ asset('assets/images/shapes/newsletter-one-shape-1.png') }}" alt="">--}}
{{--            </div>--}}
{{--            <div class="newsletter-one__shape-2 img-bounce">--}}
{{--                <img src="{{ asset('assets/images/home/newsletter-one-shape-22.png') }}" alt="">--}}
{{--            </div>--}}
{{--            <div class="newsletter-one__img">--}}
{{--                <img src="{{ asset('assets/images/home/dumble.webp') }}" alt="">--}}
{{--            </div>--}}
{{--            <h2 class="newsletter-one__title">Subscribe Our Newsletter</h2>--}}
{{--            <p class="newsletter-one__text">Explore a diverse selection of courses all in one platform,<br>--}}
{{--                designed to cater to various learning</p>--}}
{{--            <form class="newsletter-one__contact-form">--}}
{{--                <div class="newsletter-one__contact-input-box">--}}
{{--                    <input type="email" placeholder="Enter email address" name="email">--}}
{{--                    <button type="submit" class="thm-btn"><span--}}
{{--                            class="icon-angles-right"></span>Subscribe</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Newsletter One End -->

<!-- Testimonial One Start -->
{{--<section class="testimonial-one">--}}
{{--    <div class="testimonial-one__shape-1 float-bob-x">--}}
{{--        <img src="{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="testimonial-one__shape-2">--}}
{{--        <img src="{{ asset('assets/images/shapes/testimonial-one-shape-2.png') }}" alt="">--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-left sec-title-animation animation-style2">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <div class="section-title__tagline-shape"></div>--}}
{{--                <span class="section-title__tagline">Testimonial</span>--}}
{{--            </div>--}}
{{--            <h2 class="section-title__title title-animation">Explore Genuine Feedback <br>from--}}
{{--                <span>Happy Clients <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt=""></span>--}}
{{--            </h2>--}}
{{--        </div>--}}
{{--        <div class="testimonial-one__inner">--}}
{{--            <div class="testimonial-one__carousel owl-theme owl-carousel">--}}
{{--                <!-- Testimonial One Single Start -->--}}
{{--                <div class="item">--}}
{{--                    <div class="testimonial-one__single">--}}
{{--                        <div class="testimonial-one__img-inner">--}}
{{--                            <div class="testimonial-one__img">--}}
{{--                                <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">--}}
{{--                                <div class="testimonial-one__icon">--}}
{{--                                    <span class="icon-graduation-cap"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-one__content">--}}
{{--                            <div class="testimonial-one__client-info">--}}
{{--                                <h3 class="testimonial-one__client-name"><a href={{ url('testimonials') }}>Mitchel--}}
{{--                                        Watson</a></h3>--}}
{{--                                <p class="testimonial-one__client-sub-title">UI/UX Design</p>--}}
{{--                            </div>--}}
{{--                            <p class="testimonial-one__text">Explore a diverse selection of courses all in one--}}
{{--                                platform, designed to cater to various learning needs and interests, making--}}
{{--                                education more accessible and convenient. Explore a diverse selection of courses--}}
{{--                                all--}}
{{--                                in one platform, designed to cater to various learning needs and interests,--}}
{{--                                making--}}
{{--                                education</p>--}}
{{--                            <div class="testimonial-one__ratting-and-social">--}}
{{--                                <ul class="testimonial-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <div class="testimonial-one__social">--}}
{{--                                    <a href={{ url('#') }}><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                    <a href={{ url('#') }}><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Testimonial One Single End -->--}}
{{--                <!-- Testimonial One Single Start -->--}}
{{--                <div class="item">--}}
{{--                    <div class="testimonial-one__single">--}}
{{--                        <div class="testimonial-one__img-inner">--}}
{{--                            <div class="testimonial-one__img">--}}
{{--                                <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">--}}
{{--                                <div class="testimonial-one__icon">--}}
{{--                                    <span class="icon-graduation-cap"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-one__content">--}}
{{--                            <div class="testimonial-one__client-info">--}}
{{--                                <h3 class="testimonial-one__client-name"><a href={{ url('testimonials') }}>Mitchel--}}
{{--                                    Starc</a></h3>--}}
{{--                                <p class="testimonial-one__client-sub-title">UI/UX Design</p>--}}
{{--                            </div>--}}
{{--                            <p class="testimonial-one__text">Explore a diverse selection of courses all in one--}}
{{--                                platform, designed to cater to various learning needs and interests, making--}}
{{--                                education more accessible and convenient. Explore a diverse selection of courses--}}
{{--                                all--}}
{{--                                in one platform, designed to cater to various learning needs and interests,--}}
{{--                                making--}}
{{--                                education</p>--}}
{{--                            <div class="testimonial-one__ratting-and-social">--}}
{{--                                <ul class="testimonial-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <div class="testimonial-one__social">--}}
{{--                                    <a href={{ url('#') }}><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                    <a href={{ url('#') }}><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Testimonial One Single End -->--}}
{{--                <!-- Testimonial One Single Start -->--}}
{{--                <div class="item">--}}
{{--                    <div class="testimonial-one__single">--}}
{{--                        <div class="testimonial-one__img-inner">--}}
{{--                            <div class="testimonial-one__img">--}}
{{--                                <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">--}}
{{--                                <div class="testimonial-one__icon">--}}
{{--                                    <span class="icon-graduation-cap"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-one__content">--}}
{{--                            <div class="testimonial-one__client-info">--}}
{{--                                <h3 class="testimonial-one__client-name"><a href={{ url('testimonials') }}>Mitchel--}}
{{--                                    Smith</a></h3>--}}
{{--                                <p class="testimonial-one__client-sub-title">UI/UX Design</p>--}}
{{--                            </div>--}}
{{--                            <p class="testimonial-one__text">Explore a diverse selection of courses all in one--}}
{{--                                platform, designed to cater to various learning needs and interests, making--}}
{{--                                education more accessible and convenient. Explore a diverse selection of courses--}}
{{--                                all--}}
{{--                                in one platform, designed to cater to various learning needs and interests,--}}
{{--                                making--}}
{{--                                education</p>--}}
{{--                            <div class="testimonial-one__ratting-and-social">--}}
{{--                                <ul class="testimonial-one__ratting list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span class="icon-star"></span>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <div class="testimonial-one__social">--}}
{{--                                    <a href={{ url('#') }}><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                    <a href={{ url('#') }}><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Testimonial One Single End -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Testimonial One End -->





<!-- Live Class One Start -->
{{--<section class="live-class-one">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-6">--}}
{{--                <div class="live-class-one__left">--}}
{{--                    <div class="section-title text-left sec-title-animation animation-style2">--}}
{{--                        <div class="section-title__tagline-box">--}}
{{--                            <div class="section-title__tagline-shape"></div>--}}
{{--                            <span class="section-title__tagline">Live Class</span>--}}
{{--                        </div>--}}
{{--                        <h2 class="section-title__title title-animation">--}}
{{--                            Join now Our Live classes Verify our--}}
{{--                            <span>creativity--}}
{{--                                <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt="">--}}
{{--                            </span>--}}
{{--                        </h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-6">--}}
{{--                <div class="live-class-one__right">--}}
{{--                    <div class="live-class-one__carousel owl-theme owl-carousel">--}}
{{--                        <!-- Live Class One Single Start -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="live-class-one__single">--}}
{{--                                <div class="live-class-one__img">--}}
{{--                                    <img src="{{ asset('assets/images/resources/live-class-1-1.jpg') }}" alt="">--}}
{{--                                    <div class="live-class-one__btn-box">--}}
{{--                                        <a href="{{ url('course-details') }}" class="thm-btn">Join Class</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="live-class-one__content">--}}
{{--                                    <h4 class="live-class-one__title">--}}
{{--                                        <a href="{{ url('course-details') }}">Master Python Programming for Beginners and Beyond</a>--}}
{{--                                    </h4>--}}
{{--                                    <div class="live-class-one__class-time">--}}
{{--                                        <div class="live-class-one__circle"></div>--}}
{{--                                        <p class="live-class-one__class-time-text">Live - 01:30:56</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Live Class One Single End -->--}}
{{--                        <!-- Live Class One Single Start -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="live-class-one__single">--}}
{{--                                <div class="live-class-one__img">--}}
{{--                                    <img src="{{ asset('assets/images/resources/live-class-1-2.jpg') }}" alt="">--}}
{{--                                    <div class="live-class-one__btn-box">--}}
{{--                                        <a href={{ url('course-details') }} class="thm-btn">Join Class</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="live-class-one__content">--}}
{{--                                    <h4 class="live-class-one__title"><a href={{ url('course-details') }}>AI--}}
{{--                                            Foundations: Machine--}}
{{--                                            Learning Networks</a></h4>--}}
{{--                                    <div class="live-class-one__class-time">--}}
{{--                                        <div class="live-class-one__circle"></div>--}}
{{--                                        <p class="live-class-one__class-time-text">Live - 01:30:56</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Live Class One Single End -->--}}
{{--                        <!-- Live Class One Single Start -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="live-class-one__single">--}}
{{--                                <div class="live-class-one__img">--}}
{{--                                    <img src="{{ asset('assets/images/resources/live-class-1-3.jpg') }}" alt="">--}}
{{--                                    <div class="live-class-one__btn-box">--}}
{{--                                        <a href={{ url('course-details') }} class="thm-btn">Join Class</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="live-class-one__content">--}}
{{--                                    <h4 class="live-class-one__title"><a href={{ url('course-details') }}>Front end--}}
{{--                                            development with--}}
{{--                                            React js & Next js</a></h4>--}}
{{--                                    <div class="live-class-one__class-time">--}}
{{--                                        <div class="live-class-one__circle"></div>--}}
{{--                                        <p class="live-class-one__class-time-text">Live - 01:30:56</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Live Class One Single End -->--}}
{{--                        <!-- Live Class One Single Start -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="live-class-one__single">--}}
{{--                                <div class="live-class-one__img">--}}
{{--                                    <img src="{{ asset('assets/images/resources/live-class-1-1.jpg') }}" alt="">--}}
{{--                                    <div class="live-class-one__btn-box">--}}
{{--                                        <a href={{ url('course-details') }} class="thm-btn">Join Class</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="live-class-one__content">--}}
{{--                                    <h4 class="live-class-one__title"><a href={{ url('course-details') }}>Master--}}
{{--                                            Python Programming for--}}
{{--                                            Beginners and Beyond</a></h4>--}}
{{--                                    <div class="live-class-one__class-time">--}}
{{--                                        <div class="live-class-one__circle"></div>--}}
{{--                                        <p class="live-class-one__class-time-text">Live - 01:30:56</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Live Class One Single End -->--}}
{{--                        <!-- Live Class One Single Start -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="live-class-one__single">--}}
{{--                                <div class="live-class-one__img">--}}
{{--                                    <img src="{{ asset('assets/images/resources/live-class-1-2.jpg') }}" alt="">--}}
{{--                                    <div class="live-class-one__btn-box">--}}
{{--                                        <a href={{ url('course-details') }} class="thm-btn">Join Class</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="live-class-one__content">--}}
{{--                                    <h4 class="live-class-one__title"><a href={{ url('course-details') }}>AI--}}
{{--                                            Foundations: Machine--}}
{{--                                            Learning Networks</a></h4>--}}
{{--                                    <div class="live-class-one__class-time">--}}
{{--                                        <div class="live-class-one__circle"></div>--}}
{{--                                        <p class="live-class-one__class-time-text">Live - 01:30:56</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Live Class One Single End -->--}}
{{--                        <!-- Live Class One Single Start -->--}}
{{--                        <div class="item">--}}
{{--                            <div class="live-class-one__single">--}}
{{--                                <div class="live-class-one__img">--}}
{{--                                    <img src="{{ asset('assets/images/resources/live-class-1-3.jpg') }}" alt="">--}}
{{--                                    <div class="live-class-one__btn-box">--}}
{{--                                        <a href={{ url('course-details') }} class="thm-btn">Join Class</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="live-class-one__content">--}}
{{--                                    <h4 class="live-class-one__title"><a href={{ url('course-details') }}>Front end--}}
{{--                                            development with--}}
{{--                                            React js & Next js</a></h4>--}}
{{--                                    <div class="live-class-one__class-time">--}}
{{--                                        <div class="live-class-one__circle"></div>--}}
{{--                                        <p class="live-class-one__class-time-text">Live - 01:30:56</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Live Class One Single End -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Live Class One End -->

<!-- Video One Start -->
<section class="video-one">
        <div class="video-one__inner">
            <div class="video-one__img-box">
                <img src="{{ asset('assets/images/home/females8.jpg') }}" alt="">
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
{{--                        <div class="video-one__video-shape-1">--}}
{{--                            <img src="{{ asset('assets/images/home/females8.jpg') }}" alt="">--}}
{{--                        </div>--}}
                        <div class="video-one__video-icon">
                            <span class="fa fa-play"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
                <ul class="list-unstyled video-one__video-control">
                    <li><a href={{ url('#') }}><span class="icon-screen-share"></span></a></li>
                    <li><a href={{ url('#') }}><span class="icon-microphone"></span></a></li>
                    <li><a href={{ url('#') }}><span class="icon-phone"></span></a></li>
                    <li><a href={{ url('#') }}><span class="icon-video-slash"></span></a></li>
                    <li><a href={{ url('#') }}><span class="icon-share-from"></span></a></li>
                </ul>
                <div class="video-one__live">
                    <div class="video-one__live-icon">
                        <span class="icon-wifi"></span>
                    </div>
                    <p class="video-one__live-text">LIVE - 01:30:56</p>
                </div>
            </div>
        </div>
</section>
<!-- Video One End -->


<!-- Sliding Text Two Start -->


<!-- Blog One Start -->
{{--<section class="blog-one">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title text-center sec-title-animation animation-style1">--}}
{{--            <div class="section-title__tagline-box">--}}
{{--                <div class="section-title__tagline-shape"></div>--}}
{{--                <span class="section-title__tagline">Our Blogs</span>--}}
{{--            </div>--}}
{{--            <h2 class="section-title__title title-animation">Insights & Ideas Dive into Our <br>Latest--}}
{{--                <span>Blog Post <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}" alt=""></span></h2>--}}
{{--        </div>--}}
{{--        <div class="blog-one__carousel owl-theme owl-carousel">--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>August 25,--}}
{{--                                    2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title"><a href={{ url('blog-details') }}>Unlocking the Future of--}}
{{--                                Education: How LMS Transforms Learning </a></h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning--}}
{{--                            Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Read More</a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-1.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Emily Dawson</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">Tech Specialist</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>April 18, 2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title">--}}
{{--                            <a href={{ url('blog-details') }}>Leveraging LMS for Workforce Development</a>--}}
{{--                        </h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning--}}
{{--                            Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn">--}}
{{--                                    <span class="icon-angles-right"></span>Read More--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-2.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Michael Harris</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">UI Designer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>September 01, 2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title">--}}
{{--                            <a href={{ url('blog-details') }}>Key Features and Considerations for Educational Institutions</a>--}}
{{--                        </h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn">--}}
{{--                                    <span class="icon-angles-right"></span>Read More--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-3.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Sarah Thompson</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">Tech Specialist</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>August 25,--}}
{{--                                    2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title"><a href={{ url('blog-details') }}>Unlocking the Future of--}}
{{--                                Education: How LMS Transforms Learning </a></h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning--}}
{{--                            Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Read More</a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-1.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Emily Dawson</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">Tech Specialist</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>April 18, 2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title">--}}
{{--                            <a href={{ url('blog-details') }}>Leveraging LMS for Workforce Development</a>--}}
{{--                        </h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning--}}
{{--                            Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn">--}}
{{--                                    <span class="icon-angles-right"></span>Read More--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-2.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Michael Harris</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">UI Designer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>September 01, 2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title">--}}
{{--                            <a href={{ url('blog-details') }}>Key Features and Considerations for Educational Institutions</a>--}}
{{--                        </h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn">--}}
{{--                                    <span class="icon-angles-right"></span>Read More--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-3.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Sarah Thompson</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">Tech Specialist</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>August 25,--}}
{{--                                    2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title"><a href={{ url('blog-details') }}>Unlocking the Future of--}}
{{--                                Education: How LMS Transforms Learning </a></h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning--}}
{{--                            Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn"><span--}}
{{--                                        class="icon-angles-right"></span>Read More</a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-1.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Emily Dawson</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">Tech Specialist</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>April 18, 2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title">--}}
{{--                            <a href={{ url('blog-details') }}>Leveraging LMS for Workforce Development</a>--}}
{{--                        </h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning--}}
{{--                            Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn">--}}
{{--                                    <span class="icon-angles-right"></span>Read More--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-2.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Michael Harris</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">UI Designer</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--            <!-- Blog One Single Start -->--}}
{{--            <div class="item">--}}
{{--                <div class="blog-one__single">--}}
{{--                    <div class="blog-one__img">--}}
{{--                        <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="blog-one__content">--}}
{{--                        <ul class="blog-one__meta list-unstyled">--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-calendar"></span>September 01, 2024</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href={{ url('blog-details') }}><span class="icon-comment"></span>250 Comments</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <h3 class="blog-one__title">--}}
{{--                            <a href={{ url('blog-details') }}>Key Features and Considerations for Educational Institutions</a>--}}
{{--                        </h3>--}}
{{--                        <p class="blog-one__text">This blog explores the transformative impact of Learning Management Systems (LMS) on modern education.</p>--}}
{{--                        <div class="blog-one__btn-and-user-box">--}}
{{--                            <div class="blog-one__btn-box">--}}
{{--                                <a href={{ url('blog-details') }} class="thm-btn">--}}
{{--                                    <span class="icon-angles-right"></span>Read More--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="blog-one__user-box">--}}
{{--                                <div class="blog-one__user-img">--}}
{{--                                    <img src="{{ asset('assets/images/blog/blog-one-user-img-3.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="blog-one__user-content">--}}
{{--                                    <h5 class="blog-one__user-name">Sarah Thompson</h5>--}}
{{--                                    <p class="blog-one__user-sub-title">Tech Specialist</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Blog One Single End -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- Blog One End -->--}}


<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection
