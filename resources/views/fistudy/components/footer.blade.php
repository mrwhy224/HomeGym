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
                    <p class="site-footer__text">Lorem Ipsum is simply dummy text of <br> the printing and typesetting</p>
                </div>
                <div class="site-footer__contact-box wow fadeInRight" data-wow-delay="100ms">
                    <a href="#">Contact Us</a>
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
                                                <p class="site-footer__contact-info-icon-text">Phone Number:</p>
                                            </div>
                                            <p class="site-footer__contact-info-text">
                                                <a href="tel:1212345678900">+94 787471</a>
                                            </p>
                                        </div>
                                    </li>
									<li>
										<div class="site-footer__contact-info-icon-box">
											<div class="site-footer__contact-info-icon">
												<span class="icon-envelope"></span>
												<p class="site-footer__contact-info-icon-text">Email Address:</p>
											</div>
											<p class="site-footer__contact-info-text">
												<a href="mailto:info@example.com">springofthenewdream@gmail.com
												</a>
											</p>
										</div>
									</li>
                                    <li>
                                        <div class="site-footer__contact-info-icon-box">
                                            <div class="site-footer__contact-info-icon">
                                                <span class="icon-clock"></span>
                                                <p class="site-footer__contact-info-icon-text">Working Hour:</p>
                                            </div>
                                            <p class="site-footer__contact-info-text">Saturday - Friday <br> 10:00 - 18:00 </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="site-footer__app-and-social-box">
                                <div class="site-footer__social-box">
                                    <h4 class="site-footer__app-and-social-title">Follow Us:</h4>
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
                                        <h4 class="site-footer__title">Quick Link</h4>
                                        <ul class="site-footer__links-list list-unstyled">
                                            <li><a href="{{ url('/') }}"> <span class="icon-plus"></span> Home</a></li>
                                            <li><a href="{{ url('/about') }}"> <span class="icon-plus"></span> About Us</a></li>
                                            <li><a href="{{ url('/course') }}"> <span class="icon-plus"></span> Courses</a></li>
                                            <li><a href="{{ url('/faq') }}"> <span class="icon-plus"></span> FAQs</a></li>
                                            <li><a href="{{ url('/contact') }}"> <span class="icon-plus"></span> Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="site-footer__useful-links">
                                        <h4 class="site-footer__title">Useful Links</h4>
                                        <ul class="site-footer__links-list list-unstyled">
                                            <li><a href="{{ url('/become-a-teacher') }}"> <span class="icon-plus"></span> Became Partners</a></li>
                                            <li><a href="{{ url('/privacy-policy') }}"> <span class="icon-plus"></span> Privacy & Policy</a></li>
                                            <li><a href="{{ url('/terms') }}"> <span class="icon-plus"></span> Terms & Condition</a></li>
                                            <li><a href="{{ url('/refund-policy') }}"> <span class="icon-plus"></span> Refund Policy</a></li>
                                            <li><a href="{{ url('/workshop') }}"> <span class="icon-plus"></span> Live Workshop</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="site-footer__newsletter-box">
                                <h4 class="site-footer__title">Newsletter</h4>
                                <form class="site-footer__newsletter-form" method="POST" action="{{ url('newsletter.subscribe') }}">
                                    @csrf
                                    <div class="site-footer__newsletter-input">
                                        <input type="email" name="email" placeholder="Enter Your Email" required>
                                    </div>
                                    <button type="submit" class="thm-btn"> <span class="icon-angles-right"></span> Subscribe</button>
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
                            <p class="site-footer__copyright-text">Copyright &copy; 2025 <a href="">SepFit</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Site Footer End -->

<!--Site Footer End-->
</div><!-- /.page-wrapper -->
