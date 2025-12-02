@extends('layouts.layout2')
@php
    $title = 'Our Blogs';
    $subtitle = 'Our Blogs';
@endphp
@section('title', ' Blog || Fistudy || Fistudy Laravel Template ')
@section('content')

<x-strickyHeader/>

    <!--Blog Page Start-->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!--Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/home/medium-shot-41.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">How to Succeed in Online Learning: Tips for Students</a></h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/home/females8.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">The Future of Education: Why Online Learning is Here to Stay</a></h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/home/couple-actively66.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Nov 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">Creating a Productive Study Space for Online Learning</a></h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/home/Post-3.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>March 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">The Future of LMS: Trends Shaping E-Learning in 2024</a></h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/home/Post-2.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>Oct 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">How to Choose the Right LMS for Your Organization</a></h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="blog-two__single">
                        <div class="blog-two__img">
                            <img src="{{ asset('assets/images/home/medium-shot-41.jpg') }}" alt="">
                            <div class="blog-two__date">
                                <span class="icon-calendar"></span>
                                <p>June 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-two__content">
                            <div class="blog-two__meta-box">
                                <ul class="blog-two__meta list-unstyled">
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">Boosting Employee Engagement with Gamified LMS Features</a></h4>
                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>
                        </div>
                    </div>
                </div>
                <!--Blog Two Single End -->
                <!--Blog Two Single Start -->
{{--                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">--}}
{{--                    <div class="blog-two__single">--}}
{{--                        <div class="blog-two__img">--}}
{{--                            <img src="{{ asset('assets/images/blog/blog-2-7.jpg') }}" alt="">--}}
{{--                            <div class="blog-two__date">--}}
{{--                                <span class="icon-calendar"></span>--}}
{{--                                <p>Dec 02, 2024</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="blog-two__content">--}}
{{--                            <div class="blog-two__meta-box">--}}
{{--                                <ul class="blog-two__meta list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">How an LMS Supports Employee Development</a></h4>--}}
{{--                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--Blog Two Single End -->--}}
{{--                <!--Blog Two Single Start -->--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">--}}
{{--                    <div class="blog-two__single">--}}
{{--                        <div class="blog-two__img">--}}
{{--                            <img src="{{ asset('assets/images/blog/blog-2-8.jpg') }}" alt="">--}}
{{--                            <div class="blog-two__date">--}}
{{--                                <span class="icon-calendar"></span>--}}
{{--                                <p>Nov 02, 2024</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="blog-two__content">--}}
{{--                            <div class="blog-two__meta-box">--}}
{{--                                <ul class="blog-two__meta list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">Top 5 LMS Integrations Every Business Should Consider</a></h4>--}}
{{--                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--Blog Two Single End -->--}}
{{--                <!--Blog Two Single Start -->--}}
{{--                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="900ms">--}}
{{--                    <div class="blog-two__single">--}}
{{--                        <div class="blog-two__img">--}}
{{--                            <img src="{{ asset('assets/images/blog/blog-2-9.jpg') }}" alt="">--}}
{{--                            <div class="blog-two__date">--}}
{{--                                <span class="icon-calendar"></span>--}}
{{--                                <p>Nov 02, 2024</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="blog-two__content">--}}
{{--                            <div class="blog-two__meta-box">--}}
{{--                                <ul class="blog-two__meta list-unstyled">--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <h4 class="blog-two__title"><a href="{{ url('blog-details') }}">Maximizing ROI: How to Measure the Success of Your LMS</a></h4>--}}
{{--                            <p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--Blog Two Single End -->--}}
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog-two__btn-box">
                        <a href="{{ url('blog-details') }}" class="thm-btn-two">
                            <span>More Blogs</span>
                            <i class="icon-angles-right"></i>
                        </a>
                    </div>
                    <div class="blog-list__pagination">
                        <ul class="pg-pagination list-unstyled">
                            <li class="prev">
                                <a href="#" aria-label="prev"><i class="fas fa-arrow-left"></i></a>
                            </li>
                            <li class="count active"><a href="#">01</a></li>
                            <li class="count"><a href="#">02</a></li>
                            <li class="count"><a href="#">03</a></li>
                            <li class="next">
                                <a href="#" aria-label="Next"><i class="fas fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Page End-->

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
