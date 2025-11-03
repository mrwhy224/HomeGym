@extends('layouts.layout2')
@php
    $title = 'Wishlist';
    $subtitle = 'Wishlist';
@endphp
@section('title', ' Wishlist || Fistudy || Fistudy Laravel Template ')
@section('content')

<x-strickyHeader/>

    <!--Start Cart Page-->
    <section class="wishlist-page">
        <div class="container">
            <div class="table-responsive-box">
                <table class="wishlist-table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-name-select-box">
                                    <div class="product-name">
                                        <h4>Classy chair</h4>
                                        <p>$50.00</p>
                                    </div>
                                    <div class="product-select">
                                        <a class="thm-btn wishlist-page__btn" href={{ url('wishlist') }}> <span
                                                class="icon-angles-right"></span> Select Product</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cross-icon">
                                    <i class="fas fa-times remove-icon"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-name-select-box">
                                    <div class="product-name">
                                        <h4>Comfy chair</h4>
                                        <p>$90.00</p>
                                    </div>
                                    <div class="product-select">
                                        <div class="product-select">
                                            <a class="thm-btn wishlist-page__btn" href={{ url('wishlist') }}> <span
                                                    class="icon-angles-right"></span> Select Product</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cross-icon">
                                    <i class="fas fa-times remove-icon"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-name-select-box">
                                    <div class="product-name">
                                        <h4>Boss chair</h4>
                                        <p>$60.00</p>
                                    </div>
                                    <div class="product-select">
                                        <div class="product-select">
                                            <a class="thm-btn wishlist-page__btn" href={{ url('wishlist') }}> <span
                                                    class="icon-angles-right"></span> Select Product</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cross-icon">
                                    <i class="fas fa-times remove-icon"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-box">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/shop/wishlist-page-img-4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="product-name-select-box">
                                    <div class="product-name">
                                        <h4>Sofa chair</h4>
                                        <p>$170.00</p>
                                    </div>
                                    <div class="product-select">
                                        <div class="product-select">
                                            <a class="thm-btn wishlist-page__btn" href={{ url('wishlist') }}> <span
                                                    class="icon-angles-right"></span> Select Product</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="cross-icon">
                                    <i class="fas fa-times remove-icon"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--End Cart Page-->

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