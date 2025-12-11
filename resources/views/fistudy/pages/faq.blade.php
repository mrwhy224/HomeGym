@extends('layouts.layout2')
@php
    $title = 'Faq';
    $subtitle = 'Faq';
@endphp
@section('title', ' Faq || Fistudy || Fistudy Laravel Template ')
@section('content')

<x-strickyHeader/>

    <!--Faq Page Start-->
    <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__left">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How does SepFit work ?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Getting started is simple. First, register on our website. Next, browse through our list of expert trainers and choose the one that fits your goals. Once you’ve selected your trainer, you can check their availability and book your preferred class time. All sessions are conducted online, bringing the gym experience directly to your home.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>What types of classes do you offer?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>We offer three distinct class formats to suit your needs:
											Public Classes: Group sessions where the instructor guides a number of athletes online and monitors their movements.
											Semi-Private Classes: Small group sessions limited to 2 students for more focused attention.
											Private Classes: 1-on-1 sessions where you train exclusively with your coach for maximum personalization.

										</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I choose my own trainer?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Absolutely! We believe the connection between a student and a coach is vital. You can view the profiles of our energetic and experienced male and female trainers, review their specialties, and select the one who best aligns with your fitness journey.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How long does each workout session last?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Class durations are flexible to accommodate your schedule and fitness level. Sessions typically last 30, 45, or 60 minutes. However, the exact duration and frequency of sessions are determined by your coach’s professional assessment and your specific goals.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__right">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Which currencies and payment methods do you accept?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Since SepFit is a global platform, we support multiple currencies including USD, Euro, and Toman. The payment gateway displayed to you will automatically correspond to your location and banking access, ensuring a smooth transaction process for users worldwide.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Is the training content pre-recorded or live?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>All SepFit classes are live and interactive. Whether you are in a Public, Semi-Private, or Private class, your instructor is present in real-time to guide you, correct your form, and ensure you are exercising safely and effectively.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do I need professional gym equipment to participate?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>SepFit is designed as a "Home Gym" solution. While having some equipment can be beneficial, it is not always mandatory. Your coach will design your workout plan based on the equipment you have available at home, or advise you on minimal essentials if needed.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Is the platform available in languages other than English?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Yes, SepFit is a multilingual platform designed for a global audience. You can access the entire website and its services in English, Persian (Farsi), and Arabic, making it easy for you to navigate and communicate in your preferred language.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq Page End-->

    <!--Newsletter Two Start -->
{{--    <section class="newsletter-two">--}}
{{--        <div class="container">--}}
{{--            <div class="newsletter-two__inner">--}}
{{--                <div class="newsletter-two__img">--}}
{{--                    <img src="{{ asset('assets/images/resources/newsletter-two-img-1.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="newsletter-two__inner-content">--}}
{{--                    <div class="newsletter-two__shape-bg"--}}
{{--                        style="background-image: url('{{ asset('assets/images/shapes/newsletter-two-shape-bg.png') }}');">--}}
{{--                    </div>--}}
{{--                    <div class="newsletter-two__like">--}}
{{--                        <img src="{{ asset('assets/images/shapes/newsletter-two-like.png') }}" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="newsletter-two__title-box">--}}
{{--                        <h3 class="newsletter-two__title">Subscribe our <span>Newsletter</span></h3>--}}
{{--                        <p class="newsletter-two__text">Explore a diverse selection of courses all in one platform,--}}
{{--                            <br>--}}
{{--                            designed to cater to various learning</p>--}}
{{--                    </div>--}}
{{--                    <div class="newsletter-two__form-box">--}}
{{--                        <form class="newsletter-two__form">--}}
{{--                            <div class="newsletter-two__input">--}}
{{--                                <input type="email" placeholder="Enter Your Email">--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="newsletter-two__btn">--}}
{{--                                <span class="icon-arrow-circle"></span> Subscribe--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
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
