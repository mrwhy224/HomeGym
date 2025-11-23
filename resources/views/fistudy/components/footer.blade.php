<!-- Site Footer Start -->
<footer class="site-footer">
    <div class="site-footer__shape-bg" style="background-image: url({{ asset('assets/images/shapes/site-footer-shape-bg.png') }});"></div>
    <div class="site-footer__logo-and-contact-box">
        <div class="container">
            <div class="site-footer__logo-and-contact-box-inner">
                <div class="site-footer__logo-box wow fadeInLeft" data-wow-delay="100ms">
                    <div class="site-footer__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/favicons/logo2footer.png') }}" alt="">
                        </a>
                    </div>
                    <p class="site-footer__text">{!! __('footer.logo_description') !!}</p>
                </div>
                <div class="site-footer__contact-box wow fadeInRight" data-wow-delay="100ms">
                    <a href="#">{{ __('footer.btn_contact_us') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="site-footer__top-left">
                            <div class="site-footer__contact-info">
                                <ul class="list-unstyled site-footer__contact-info-list site-footer__contact-info-list--two">
                                    <li>
                                        <div class="site-footer__contact-info-icon-box">
                                            <div class="site-footer__contact-info-icon">
                                                <span class="icon-phone"></span>
                                                <p class="site-footer__contact-info-icon-text">{{ __('footer.phone_label') }}:</p>
                                            </div>
                                            <p class="site-footer__contact-info-text">
                                                <a href="tel:+96894787471">{{ __('footer.phone_number') }}</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="site-footer__contact-info-icon-box">
                                            <div class="site-footer__contact-info-icon">
                                                <span class="icon-envelope"></span>
                                                <p class="site-footer__contact-info-icon-text">{{ __('footer.email_label') }}:</p>
                                            </div>
                                            <p class="site-footer__contact-info-text">
                                                <a href="mailto:info@example.com">{{ __('footer.email_address') }}
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="site-footer__contact-info-icon-box">
                                            <div class="site-footer__contact-info-icon">
                                                <span class="icon-clock"></span>
                                                <p class="site-footer__contact-info-icon-text">{{ __('footer.working_hour_label') }}:</p>
                                            </div>
                                            <p class="site-footer__contact-info-text">{!! __('footer.working_hour_time') !!} </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="site-footer__app-and-social-box">
                                <div class="site-footer__social-box">
                                    <h4 class="site-footer__app-and-social-title">{{ __('footer.follow_us_title') }}:</h4>
                                    <div class="site-footer__social-box-inner">
                                        <a href="https://www.instagram.com/sep.fit94"><span class="fab fa-instagram"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="site-footer__top-right">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="site-footer__links">
                                        <h4 class="site-footer__title">{{ __('footer.quick_link_title') }}</h4>
                                        <ul class="site-footer__links-list list-unstyled">
                                            <li><a href="{{ url('/') }}"> <span class="icon-plus"></span> {{ __('footer.link_home') }}</a></li>
                                            <li><a href="{{ url('/about') }}"> <span class="icon-plus"></span> {{ __('footer.link_about_us') }}</a></li>
                                            <li><a href="{{ url('/course') }}"> <span class="icon-plus"></span> {{ __('footer.link_courses') }}</a></li>
                                            <li><a href="{{ url('/faq') }}"> <span class="icon-plus"></span> {{ __('footer.link_faqs') }}</a></li>
                                            <li><a href="{{ url('/contact') }}"> <span class="icon-plus"></span> {{ __('footer.link_contact') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="site-footer__useful-links">
                                        <h4 class="site-footer__title">{{ __('footer.useful_links_title') }}</h4>
                                        <ul class="site-footer__links-list list-unstyled">
                                            <li><a href="{{ url('/become-a-teacher') }}"> <span class="icon-plus"></span> {{ __('footer.link_become_partners') }}</a></li>
                                            <li><a href="{{ url('/privacy-policy') }}"> <span class="icon-plus"></span> {{ __('footer.link_privacy_policy') }}</a></li>
                                            <li><a href="{{ url('/terms') }}"> <span class="icon-plus"></span> {{ __('footer.link_terms_condition') }}</a></li>
                                            <li><a href="{{ url('/refund-policy') }}"> <span class="icon-plus"></span> {{ __('footer.link_refund_policy') }}</a></li>
                                            <li><a href="{{ url('/workshop') }}"> <span class="icon-plus"></span> {{ __('footer.link_live_workshop') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="site-footer__newsletter-box">
                                <h4 class="site-footer__title">{{ __('footer.newsletter_title') }}</h4>
                                <form class="site-footer__newsletter-form" method="POST" action="{{ url('newsletter.subscribe') }}">
                                    @csrf
                                    <div class="site-footer__newsletter-input">
                                        <input type="email" name="email" placeholder="{{ __('footer.newsletter_placeholder') }}" required>
                                    </div>
                                    <button type="submit" class="thm-btn"> <span class="icon-angles-right"></span> {{ __('footer.newsletter_subscribe_btn') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            {{-- COPYRIGHT TEXT --}}
                            <p class="site-footer__copyright-text">{!! __('footer.copyright_text') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Site Footer End -->