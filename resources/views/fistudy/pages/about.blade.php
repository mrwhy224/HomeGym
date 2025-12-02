@extends('layouts.layout2')
@php
    $title = 'About Us';
    $subtitle = 'About Us';
@endphp
@section('title', ' About Us || Fistudy || Fistudy Laravel Template ')
@section('content')

<x-strickyHeader/>

    <!--About Three Start-->
    <section class="about-three">
        <div class="about-three__shape-2 rotate-me"></div>
        <div class="about-three__shape-3 text-rotate-box"></div>
        <div class="about-three__shape-4 float-bob-y"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-three__shape-1 img-bounce">
                            <img src="{{ asset('assets/images/shapes/about-three-shape-1.png') }}" alt="">
                        </div>
                        <div class="about-three__img-box">
                            <div class="about-three__img-one">
                                <img src="{{ asset('assets/images/home/tt.webp') }}" alt="">
                            </div>
                            <div class="about-three__img-two">
                                <img src="{{ asset('assets/images/home/Photo-11.png') }}" alt="">
                            </div>
                            <div class="about-three__experience-box">
                                <div class="about-three__experience-box-inner">
                                    <div class="about-three__experience-icon">
                                        <img src="{{ asset('assets/images/icon/about-three-experience-icon.png') }}" alt="">
                                    </div>
                                    <div class="about-three__experience-count-box">
                                        <div class="about-three__experience-count">
                                            <h3 class="odometer" data-count="25">00</h3>
                                            <span>+</span>
                                            <p>Years</p>
                                        </div>
                                        <p>of experience</p>
                                    </div>
                                </div>
                                <div class="about-three__experience-box-shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-three__right">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title-two__tagline">About Us</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">Behind the Scenes: Discover the Energy & Passion <span>Behind SepFit</span>
                            </h2>
                        </div>
                        <p class="about-three__text-1">SepFit is more than just a website; it’s a global fitness hub. We combine the expertise of experienced male and female trainers with the convenience of modern technology. Our goal is to bring the discipline and results of a professional gym directly to your home, speaking your language—literally and figuratively.</p>
                        <div class="about-three__mission-vission">
                            <div class="about-three__tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#mission" class="tab-btn active-btn"><span>Our Mission</span></li>
                                    <li data-tab="#vission" class="tab-btn"><span>Our Vision</span></li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="mission">
                                        <div class="tabs-content__inner">
                                            <ul class="list-unstyled about-three__mission-vission-list">
                                                <li>
                                                    <div class="about-three__mission-vission-content">
                                                        <h4 class="about-three__mission-vission-title">Redefining the Global Home Gym Experience</h4>
                                                        <p class="about-three__mission-vission-text">To become the world's leading "Home Gym" community, where cultural diversity meets physical excellence. We envision a world where anyone, anywhere, can connect with a top-tier coach and achieve their dream physique from the comfort of their home.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="about-three__mission-vission-content">
                                                        <h4 class="about-three__mission-vission-title">Breaking Barriers to a Healthy Life</h4>
                                                        <p class="about-three__mission-vission-text">To eliminate barriers to a healthy lifestyle. We strive to provide high-quality, multilingual fitness instruction (English, Persian, Arabic) that is affordable and accessible, empowering individuals to train confidently without geographical limitations.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <!--tab-->
                                    <div class="tab" id="vission">
                                        <div class="tabs-content__inner">
                                            <ul class="list-unstyled about-three__mission-vission-list">
                                                <li>
                                                    <div class="about-three__mission-vission-content">
                                                        <h4 class="about-three__mission-vission-title">It provides
                                                            tools for course creation</h4>
                                                        <p class="about-three__mission-vission-text">enrollment
                                                            management, and tracking learner progress, ensuring a
                                                            streamlined learning experience.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="about-three__mission-vission-content">
                                                        <h4 class="about-three__mission-vission-title">Many LMS
                                                            platforms include collaborative </h4>
                                                        <p class="about-three__mission-vission-text">collaborative
                                                            features such as discussion forums, messaging, and group
                                                            projects, which facilitate interaction and communication
                                                            among learners</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--tab-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End-->

    <!-- Why Choose Three Start -->
    <section class="why-choose-three">
        <div class="why-choose-three__shape-1 img-bounce"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-three__left">
                        <div class="section-title-two text-left sec-title-animation animation-style2">
                            <div class="section-title-two__tagline-box">
                                <div class="section-title-two__tagline-shape">
                                    <img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">
                                </div>
                                <span class="section-title-two__tagline">Why Choose Us</span>
                            </div>
                            <h2 class="section-title-two__title title-animation">Discover Why Athletes Worldwide  <span>Choose SepFit</span>
                            </h2>
                        </div>
                        <p class="why-choose-three__text-1">Meet the energetic experts dedicated to transforming your living room into a professional gym. Our team of young, certified trainers bridges the gap between distance and fitness, delivering interactive workouts tailored to your lifestyle, language, and goals.</p>
                        <div class="why-choose-three__ceo-speech-box">
                            <div class="why-choose-three__ceo-speech">
                                <div class="why-choose-three__ceo-img-two">
                                    <img src="{{ asset('assets/images/resources/why-choose-three-ceo-img-two.jpg') }}" alt="">
                                </div>
                                <div class="why-choose-three__ceo-details">
                                    <div class="why-choose-three__ceo-img">
                                        <img src="{{ asset('assets/images/resources/why-choose-three-ceo-img.jpg') }}" alt="">
                                    </div>
                                    <div class="why-choose-three__ceo-content">
                                        <p>CEO & FOUNDER</p>
                                        <h5>Sepideh & Mahdi</h5>
                                    </div>
                                </div>
                                <p class="why-choose-three__ceo-text">Fitness knows no borders. At SepFit, our mission is to make elite personal training accessible to everyone, everywhere. We don't just teach exercises; we build a global community where health meets convenience, regardless of your currency or time zone.</p>
                            </div>
                            <div class="why-choose-three__ceo-speech-border"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-three__right">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <ul class="list-unstyled why-choose-three__feature">
                                    <li>
                                        <div class="why-choose-three__feature-single">
                                            <div class="why-choose-three__feature-img">
                                                <img src="{{ asset('assets/images/icon/why-choose-three-feature-1.png') }}" alt="">
                                            </div>
                                            <div class="why-choose-three__feature-content">
                                                <h4 class="why-choose-three__feature-title">Global Accessibility</h4>
                                                <p class="why-choose-three__feature-text">Whether you pay in USD, Euro, or Toman, our platform adapts to you. Train from any country with seamless localized support.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-three__feature-single">
                                            <div class="why-choose-three__feature-img">
                                                <img src="{{ asset('assets/images/icon/why-choose-three-feature-2.png') }}" alt="">
                                            </div>
                                            <div class="why-choose-three__feature-content">
                                                <h4 class="why-choose-three__feature-title">Expert Live Guidance</h4>
                                                <p class="why-choose-three__feature-text">Forget pre-recorded videos. Our trainers monitor your form in real-time during Public, Semi-Private, or Private sessions to ensure safety.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <ul class="list-unstyled why-choose-three__feature why-choose-three__feature--two">
                                    <li>
                                        <div class="why-choose-three__feature-single">
                                            <div class="why-choose-three__feature-img">
                                                <img src="{{ asset('assets/images/icon/why-choose-three-feature-3.png') }}" alt="">
                                            </div>
                                            <div class="why-choose-three__feature-content">
                                                <h4 class="why-choose-three__feature-title">Flexible Scheduling</h4>
                                                <p class="why-choose-three__feature-text">From 30-minute express workouts to full-hour sessions, book class times that fit perfectly into your busy daily routine.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="why-choose-three__feature-single">
                                            <div class="why-choose-three__feature-img">
                                                <img src="{{ asset('assets/images/icon/why-choose-three-feature-4.png') }}" alt="">
                                            </div>
                                            <div class="why-choose-three__feature-content">
                                                <h4 class="why-choose-three__feature-title">Personalized & Interactive</h4>
                                                <p class="why-choose-three__feature-text">Our energetic coaches create custom plans based on your level, ensuring you get the attention of a private gym at home.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Three End -->

    <!-- Counter One Start -->
    <section class="counter-one">
        <div class="counter-one__bg" style="background-image: url({{ asset('assets/images/home/young-fitness-man-studio_7502-5008.jpg') }});">
            <div class="counter-one__video-link">
                <div class="counter-one__video-shape-1">
                    <img src="{{ asset('assets/images/shapes/counter-one-video-shape-1.png') }}" alt="">
                </div>
                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                    <div class="counter-one__video-icon">
                        <span class="icon-play"></span>
                        <i class="ripple"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="counter-one__shape-1" style="background-image: url({{ asset('assets/images/shapes/counter-one-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="counter-one__left">
                        <ul class="counter-one__list list-unstyled">
                            <li>
                                <div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">
                                </div>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                                    <span>k</span>
                                </div>
                                <p>Student Trained</p>
                            </li>
                            <li>
                                <div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">
                                </div>
                                <div class="counter-one__count count-box">
                                    <h3 class="count-text" data-stop="50" data-speed="1500">00</h3>
                                    <span>+</span>
                                </div>
                                <p>Recorded Courses</p>
                            </li>
                            <li>
                                <div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">
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

    <!-- Testimonial Two Start -->
{{--    <section class="testimonial-two">--}}
{{--        <div class="testimonial-two__shape-6">--}}
{{--            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-6.png') }}" alt="">--}}
{{--        </div>--}}
{{--        <div class="testimonial-two__shape-1">--}}
{{--            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">--}}
{{--            <div class="testimonial-two__shape-icon-1">--}}
{{--                <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-1.png') }}" alt="" class="zoom-fade">--}}
{{--            </div>--}}
{{--            <div class="testimonial-two__shape-img-2">--}}
{{--                <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-2.jpg') }}" alt="">--}}
{{--            </div>--}}
{{--            <div class="testimonial-two__shape-img-3 img-bounce">--}}
{{--                <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-3.jpg') }}" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="testimonial-two__shape-2">--}}
{{--            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-2.png') }}" alt="">--}}
{{--            <div class="testimonial-two__shape-icon-2 float-bob-y">--}}
{{--                <img src="{{ asset('assets/images/icon/testimonial-two-shape-icon-2.png') }}" alt="">--}}
{{--            </div>--}}
{{--            <div class="testimonial-two__shape-img-1 zoom-fade">--}}
{{--                <img src="{{ asset('assets/images/testimonial/testimonial-two-shape-img-1.jpg') }}" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="testimonial-two__shape-3 float-bob-x">--}}
{{--            <img src="{{ asset('assets/images/shapes/testimonial-two-shape-3.png') }}" alt="">--}}
{{--        </div>--}}
{{--        <div class="testimonial-two__shape-4"></div>--}}
{{--        <div class="testimonial-two__shape-5"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="testimonial-two__inner">--}}
{{--                <div class="testimonial-two__quote">--}}
{{--                    <span class="icon-quote"></span>--}}
{{--                </div>--}}
{{--                <div class="testimonial-two__slider">--}}

{{--                    <div class="testimonial-two__main-content">--}}
{{--                        <div class="testimonial-two__carousel owl-carousel owl-theme">--}}
{{--                            <div class="testimonial-two__item">--}}
{{--                                <div class="testimonial-two__inner-content">--}}
{{--                                    <div class="testimonial-two__rating">--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                    </div>--}}
{{--                                    <p class="testimonial-two__text">It has survived not only five centuries, but also the leap into electronic<br> typesetting, remaining essentially unchanged. It was popularised in the<br> 1960s with the release of Letraset sheets containing Lorem Ipsum<br> passages, and more recently with desktop publishing software like Aldus<br> PageMaker including versions of Lorem Ipsum.</p>--}}
{{--                                    <div class="testimonial-two__client-info">--}}
{{--                                        <div class="testimonial-two__client-logo">--}}
{{--                                            <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="testimonial-two__client-name-box">--}}
{{--                                            <h4 class="testimonial-two__client-name"><a href={{ url('testimonials') }}>Mitchel Clack</a></h4>--}}
{{--                                            <p class="testimonial-two__client-sub-title">Tech Specialist</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="testimonial-two__item">--}}
{{--                                <div class="testimonial-two__inner-content">--}}
{{--                                    <div class="testimonial-two__rating">--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                    </div>--}}
{{--                                    <p class="testimonial-two__text">It has survived not only five centuries, but also the leap into electronic<br> typesetting, remaining essentially unchanged. It was popularised in the<br> 1960s with the release of Letraset sheets containing Lorem Ipsum<br> passages, and more recently with desktop publishing software like Aldus<br> PageMaker including versions of Lorem Ipsum.</p>--}}
{{--                                    <div class="testimonial-two__client-info">--}}
{{--                                        <div class="testimonial-two__client-logo">--}}
{{--                                            <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="testimonial-two__client-name-box">--}}
{{--                                            <h4 class="testimonial-two__client-name"><a href={{ url('testimonials') }}>Mitchela Smith</a></h4>--}}
{{--                                            <p class="testimonial-two__client-sub-title">Tech Specialist</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="testimonial-two__item">--}}
{{--                                <div class="testimonial-two__inner-content">--}}
{{--                                    <div class="testimonial-two__rating">--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                        <i class="icon-star"></i>--}}
{{--                                    </div>--}}
{{--                                    <p class="testimonial-two__text">It has survived not only five centuries, but also the leap into electronic<br> typesetting, remaining essentially unchanged. It was popularised in the<br> 1960s with the release of Letraset sheets containing Lorem Ipsum<br> passages, and more recently with desktop publishing software like Aldus<br> PageMaker including versions of Lorem Ipsum.</p>--}}
{{--                                    <div class="testimonial-two__client-info">--}}
{{--                                        <div class="testimonial-two__client-logo">--}}
{{--                                            <img src="{{ asset('assets/images/testimonial/testimonial-two-client-logo.png') }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="testimonial-two__client-name-box">--}}
{{--                                            <h4 class="testimonial-two__client-name"><a href={{ url('testimonials') }}>Sarah Smith</a></h4>--}}
{{--                                            <p class="testimonial-two__client-sub-title">Tech Specialist</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="testimonial-two__thumb-outer-box">--}}
{{--                        <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">--}}
{{--                            <div class="testimonial-two__thumb-item">--}}
{{--                                <div class="testimonial-two__img-holder-box">--}}
{{--                                    <div class="testimonial-two__img-holder">--}}
{{--                                        <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="testimonial-two__thumb-item">--}}
{{--                                <div class="testimonial-two__img-holder-box">--}}
{{--                                    <div class="testimonial-two__img-holder">--}}
{{--                                        <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="testimonial-two__thumb-item">--}}
{{--                                <div class="testimonial-two__img-holder-box">--}}
{{--                                    <div class="testimonial-two__img-holder">--}}
{{--                                        <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Testimonial Two End -->

    <!-- Sliding Text Three Start-->
{{--    <section class="sliding-text-three sliding-text-four">--}}
{{--        <div class="sliding-text-three__wrap">--}}
{{--            <ul class="sliding-text-three__list list-unstyled marquee_mode">--}}
{{--                <li>--}}
{{--                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial--}}
{{--                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">--}}
{{--                    </h2>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial--}}
{{--                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">--}}
{{--                    </h2>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial--}}
{{--                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">--}}
{{--                    </h2>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial--}}
{{--                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">--}}
{{--                    </h2>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h2 data-hover="20+ Instructor " class="sliding-text-three__title count-box">Testimonial--}}
{{--                        <img src="{{ asset('assets/images/shapes/sliding-text-three-shape-1.png') }}" alt="">--}}
{{--                    </h2>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Sliding Text Three End -->

    <!--Newsletter Two Start -->
    <section class="newsletter-two newsletter-three">
        <div class="container">
            <div class="newsletter-two__inner">
                <div class="newsletter-two__img">
                    <img src="{{ asset('assets/images/resources/newsletter-two-img-1.png') }}" alt="">
                </div>
                <div class="newsletter-two__inner-content">
                    <div class="newsletter-two__shape-bg"
                        style="background-image: url('{{ asset('assets/images/shapes/newsletter-two-shape-bg.png') }}');">
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
