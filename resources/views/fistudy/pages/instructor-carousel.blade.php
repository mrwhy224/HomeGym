@extends('layouts.layout2')
@php
    $title = 'Instructor Carousel';
    $subtitle = 'Instructor Carousel';
@endphp
@section('title', ' Instructor Carousel || Fistudy || Fistudy Laravel Template ')
@section('content')

<x-strickyHeader/>


    <!--Team Carousel Page Start-->
    <section class="team-carousel-page">
        <div class="container">
            <div class="team-carousel-style owl-carousel owl-theme carousel-dot-style">
                <!--Team One Single Start-->
{{--                <div class="item">--}}
{{--                    <div class="team-one__single">--}}
{{--                        <div class="team-one__img-box">--}}
{{--                            <div class="team-one__img">--}}
{{--                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content">--}}
{{--                                <div class="team-one__single-bg-shape"--}}
{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Thomas Alison</a></h3>--}}
{{--                                <p class="team-one__sub-title">UI/UX Expert</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--Team One Single End-->
                <!--Team One Single Start-->
{{--                <div class="item">--}}
{{--                    <div class="team-one__single">--}}
{{--                        <div class="team-one__img-box">--}}
{{--                            <div class="team-one__img">--}}
{{--                                <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content">--}}
{{--                                <div class="team-one__single-bg-shape"--}}
{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Alisa Olivia</a></h3>--}}
{{--                                <p class="team-one__sub-title">Graphics Designer</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--Team One Single End-->
                <!--Team One Single Start-->
{{--                <div class="item">--}}
{{--                    <div class="team-one__single">--}}
{{--                        <div class="team-one__img-box">--}}
{{--                            <div class="team-one__img">--}}
{{--                                <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content">--}}
{{--                                <div class="team-one__single-bg-shape"--}}
{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Sarah Wilson</a></h3>--}}
{{--                                <p class="team-one__sub-title">Tech & Programming</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--Team One Single End-->
                <!--Team One Single Start-->
{{--                <div class="item">--}}
{{--                    <div class="team-one__single">--}}
{{--                        <div class="team-one__img-box">--}}
{{--                            <div class="team-one__img">--}}
{{--                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="team-one__content">--}}
{{--                                <div class="team-one__single-bg-shape"--}}
{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">David Warner</a></h3>--}}
{{--                                <p class="team-one__sub-title">Digital Marketer</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/home/trainer_1.jpg') }}" alt="">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__single-bg-shape"
                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">
                                </div>
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Sepideh</a></h3>
                                <p class="team-one__sub-title">Head Coach </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/home/trainer.jpg') }}" alt="">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__single-bg-shape"
                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">
                                </div>
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Mahdi</a></h3>
                                <p class="team-one__sub-title">Fitness Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/home/trainer_3.jpg') }}" alt="">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__single-bg-shape"
                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">
                                </div>
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Mahan</a></h3>
                                <p class="team-one__sub-title">TRX Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/trainer_2.jpg') }}" alt="">
                            </div>

                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/home/trainer_2.jpg') }}" alt="">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__single-bg-shape"
                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">
                                </div>
{{--                                <div class="team-one__content-shape-1">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__content-shape-2">--}}
{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="team-one__plus-and-social">--}}
{{--                                    <div class="team-one__plus">--}}
{{--                                        <span class="icon-plus"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="team-one__social">--}}
{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Shima</a></h3>
                                <p class="team-one__sub-title">Coach</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <!--Team Carousel Page End-->

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
