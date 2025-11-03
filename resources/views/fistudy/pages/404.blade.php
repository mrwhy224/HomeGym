@extends('layouts.layout2')
@php
    $title = '404 Error';
    $subtitle = '404 Error';
@endphp
@section('title', ' 404 Error || Fistudy || Fistudy Laravel Template ')
@section('content')

<x-strickyHeader/>

        <!--Start Error Page-->
        <section class="error-page">
            <div class="container">
                <div class="error-page__inner text-center">
                    <div class="error-page__img float-bob-y">
                        <img src="assets/images/resources/error-page-img1.png" alt="">
                    </div>

                    <div class="error-page__content">
                        <h2>Oops! Page Not Found!</h2>
                        <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <div class="btn-box">
                            <a class="thm-btn" href="{{ url('/') }}"> <span class="icon-angles-right"></span> Back To
                                Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Error Page-->

        <!--Newsletter Two Start -->
        <section class="newsletter-two">
            <div class="container">
                <div class="newsletter-two__inner">
                    <div class="newsletter-two__img">
                        <img src="assets/images/resources/newsletter-two-img-1.png" alt="">
                    </div>
                    <div class="newsletter-two__inner-content">
                        <div class="newsletter-two__shape-bg"
                            style="background-image: url(assets/images/shapes/newsletter-two-shape-bg.png);"></div>
                        <div class="newsletter-two__like">
                            <img src="assets/images/shapes/newsletter-two-like.png" alt="">
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
                                <button type="submit" class="newsletter-two__btn"> <span
                                        class="icon-arrow-circle"></span>
                                    Subscribe</button>
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
                                <h5 class="contact-info-one__email"><a
                                        href="mailto:info@example.com">info@example.com</a></h5>
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
                                <h5 class="contact-info-one__email"><a href="tel:001239957689">+00 123 (99) 57689</a>
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