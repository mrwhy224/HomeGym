@extends('layouts.layout2')
@php
	$title = __('about.page_title');
	$subtitle = __('about.page_title'); // یا اگر متفاوت است متغیر جدا بسازید
@endphp
@section('title', __('about.page_title'))
@section('content')

	<x-strickyHeader/>

	<section class="about-three">
		<div class="about-three__shape-2 rotate-me"></div>
{{--		<div class="about-three__shape-3 text-rotate-box"></div>--}}
		<div class="about-three__shape-4 float-bob-y"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-7">
					<div class="about-three__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">

{{--						<div class="about-three__img-box">--}}
{{--							<div class="about-three__img-one">--}}
{{--								<img src="{{ asset('assets/images/home/') }}" alt="">--}}
{{--							</div>--}}
{{--							<div class="about-three__img-two">--}}
{{--								<img src="{{ asset('assets/images/home/') }}" alt="">--}}
{{--							</div>--}}
{{--							<div class="about-three__experience-box">--}}
{{--								<div class="about-three__experience-box-inner">--}}
{{--									<div class="about-three__experience-icon">--}}
{{--										<img src="{{ asset('assets/images/icon/about-three-experience-icon.png') }}" alt="">--}}
{{--									</div>--}}
{{--									<div class="about-three__experience-count-box">--}}
{{--										<div class="about-three__experience-count">--}}
{{--											<h3 class="odometer" data-count="25">00</h3>--}}
{{--											<span>+</span>--}}
{{--											<p>{{ __('about.years') }}</p>--}}
{{--										</div>--}}
{{--										<p>{{ __('about.of_experience') }}</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="about-three__experience-box-shape"></div>--}}
{{--							</div>--}}
						</div>
					</div>
				</div>
				<div class="col-xl-5">
					<div class="about-three__right">
						<div class="section-title-two text-left sec-title-animation animation-style2">
{{--							<div class="section-title-two__tagline-box">--}}
{{--								<div class="section-title-two__tagline-shape">--}}
{{--									<img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">--}}
{{--								</div>--}}
{{--								<span class="section-title-two__tagline">{{ __('about.tagline') }}</span>--}}
{{--							</div>--}}
							{{-- استفاده از پارامتر برای بخش رنگی --}}
							<h2 class="section-title-two__title title-animation">
								{!! __('about.title', ['highlight' => '<span>' . __('about.title_highlight') . '</span>']) !!}
							</h2>
						</div>
						<p class="about-three__text-1">{{ __('about.description') }}</p>
						<div class="about-three__mission-vission">
							<div class="about-three__tab-box tabs-box">
								<ul class="tab-buttons clearfix list-unstyled">
									<li data-tab="#mission" class="tab-btn active-btn"><span>{{ __('about.mission_tab') }}</span></li>
									<li data-tab="#vission" class="tab-btn"><span>{{ __('about.vision_tab') }}</span></li>
								</ul>
								<div class="tabs-content">
									<div class="tab active-tab" id="mission">
										<div class="tabs-content__inner">
											<ul class="list-unstyled about-three__mission-vission-list">
												<li>
													<div class="about-three__mission-vission-content">
														<h4 class="about-three__mission-vission-title">{{ __('about.mission_title_1') }}</h4>
														<p class="about-three__mission-vission-text">{{ __('about.mission_text_1') }}</p>
													</div>
												</li>
												<li>
													<div class="about-three__mission-vission-content">
														<h4 class="about-three__mission-vission-title">{{ __('about.mission_title_2') }}</h4>
														<p class="about-three__mission-vission-text">{{ __('about.mission_text_2') }}</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="tab" id="vission">
										<div class="tabs-content__inner">
											<ul class="list-unstyled about-three__mission-vission-list">
												<li>
													<div class="about-three__mission-vission-content">
														<h4 class="about-three__mission-vission-title">{{ __('about.vision_title_1') }}</h4>
														<p class="about-three__mission-vission-text">{{ __('about.vision_text_1') }}</p>
													</div>
												</li>
												<li>
													<div class="about-three__mission-vission-content">
														<h4 class="about-three__mission-vission-title">{{ __('about.vision_title_2') }}</h4>
														<p class="about-three__mission-vission-text">{{ __('about.vision_text_2') }}</p>
													</div>
												</li>
											</ul>
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
	<section class="why-choose-three">
{{--		<div class="why-choose-three__shape-1 img-bounce"></div>--}}
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="why-choose-three__left">
						<div class="section-title-two text-left sec-title-animation animation-style2">
{{--							<div class="section-title-two__tagline-box">--}}
{{--								<div class="section-title-two__tagline-shape">--}}
{{--									<img src="{{ asset('assets/images/shapes/section-title-two-shape-1.png') }}" alt="">--}}
{{--								</div>--}}
{{--								<span class="section-title-two__tagline">{{ __('about.why_tagline') }}</span>--}}
{{--							</div>--}}
							<h2 class="section-title-two__title title-animation">
								{!! __('about.why_title', ['highlight' => '<span>' . __('about.why_title_highlight') . '</span>']) !!}
							</h2>
						</div>
						<p class="why-choose-three__text-1">{{ __('about.why_text') }}</p>
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
										<p>{{ __('about.ceo_role') }}</p>
										<h5>{{ __('about.ceo_name') }}</h5>
									</div>
								</div>
								<p class="why-choose-three__ceo-text">{{ __('about.ceo_message') }}</p>
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
{{--											<div class="why-choose-three__feature-img">--}}
{{--												<img src="{{ asset('assets/images/icon/') }}" alt="">--}}
{{--											</div>--}}
											<div class="why-choose-three__feature-content">
												<h4 class="why-choose-three__feature-title">{{ __('about.feature_1_title') }}</h4>
												<p class="why-choose-three__feature-text">{{ __('about.feature_1_text') }}</p>
											</div>
										</div>
									</li>
									<li>
										<div class="why-choose-three__feature-single">
{{--											<div class="why-choose-three__feature-img">--}}
{{--												<img src="{{ asset('assets/images/icon/') }}" alt="">--}}
{{--											</div>--}}
											<div class="why-choose-three__feature-content">
												<h4 class="why-choose-three__feature-title">{{ __('about.feature_2_title') }}</h4>
												<p class="why-choose-three__feature-text">{{ __('about.feature_2_text') }}</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<ul class="list-unstyled why-choose-three__feature why-choose-three__feature--two">
									<li>
										<div class="why-choose-three__feature-single">
{{--											<div class="why-choose-three__feature-img">--}}
{{--												<img src="{{ asset('assets/images/icon/') }}" alt="">--}}
{{--											</div>--}}
											<div class="why-choose-three__feature-content">
												<h4 class="why-choose-three__feature-title">{{ __('about.feature_3_title') }}</h4>
												<p class="why-choose-three__feature-text">{{ __('about.feature_3_text') }}</p>
											</div>
										</div>
									</li>
									<li>
										<div class="why-choose-three__feature-single">
{{--											<div class="why-choose-three__feature-img">--}}
{{--												<img src="{{ asset('assets/images/icon/') }}" alt="">--}}
{{--											</div>--}}
											<div class="why-choose-three__feature-content">
												<h4 class="why-choose-three__feature-title">{{ __('about.feature_4_title') }}</h4>
												<p class="why-choose-three__feature-text">{{ __('about.feature_4_text') }}</p>
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
{{--	<section class="counter-one">--}}
{{--		<div class="counter-one__bg" style="background-image: url({{ asset('assets/images/home/young-fitness-man-studio_7502-5008.jpg') }});">--}}
{{--			<div class="counter-one__video-link">--}}
{{--				<div class="counter-one__video-shape-1">--}}
{{--					<img src="{{ asset('assets/images/shapes/counter-one-video-shape-1.png') }}" alt="">--}}
{{--				</div>--}}
{{--				<a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">--}}
{{--					<div class="counter-one__video-icon">--}}
{{--						<span class="icon-play"></span>--}}
{{--						<i class="ripple"></i>--}}
{{--					</div>--}}
{{--				</a>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--		<div class="counter-one__shape-1" style="background-image: url({{ asset('assets/images/shapes/counter-one-shape-1.png') }});"></div>--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}
{{--				<div class="col-xl-8">--}}
{{--					<div class="counter-one__left">--}}
{{--						<ul class="counter-one__list list-unstyled">--}}
{{--							<li>--}}
{{--								<div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">--}}
{{--								</div>--}}
{{--								<div class="counter-one__count count-box">--}}
{{--									<h3 class="count-text" data-stop="10" data-speed="1500">00</h3>--}}
{{--									<span>k</span>--}}
{{--								</div>--}}
{{--								<p>{{ __('about.students_trained') }}</p>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">--}}
{{--								</div>--}}
{{--								<div class="counter-one__count count-box">--}}
{{--									<h3 class="count-text" data-stop="50" data-speed="1500">00</h3>--}}
{{--									<span>+</span>--}}
{{--								</div>--}}
{{--								<p>{{ __('about.recorded_courses') }}</p>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<div class="counter-one__count-hover-img" style="background-image: url({{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }});">--}}
{{--								</div>--}}
{{--								<div class="counter-one__count count-box">--}}
{{--									<h3 class="count-text" data-stop="15" data-speed="1500">00</h3>--}}
{{--									<span>M</span>--}}
{{--								</div>--}}
{{--								<p>{{ __('about.satisfaction_rate') }}</p>--}}
{{--							</li>--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</section>--}}
{{--	<section class="newsletter-two newsletter-three">--}}
{{--		<div class="container">--}}
{{--			<div class="newsletter-two__inner">--}}
{{--				<div class="newsletter-two__img">--}}
{{--					<img src="{{ asset('assets/images/resources/newsletter-two-img-1.png') }}" alt="">--}}
{{--				</div>--}}
{{--				<div class="newsletter-two__inner-content">--}}
{{--					<div class="newsletter-two__shape-bg"--}}
{{--						 style="background-image: url('{{ asset('assets/images/shapes/newsletter-two-shape-bg.png') }}');">--}}
{{--					</div>--}}

{{--					<div class="newsletter-two__title-box">--}}
{{--						<h3 class="newsletter-two__title">--}}
{{--							{!! __('about.newsletter_title', ['highlight' => '<span>' . __('about.newsletter_highlight') . '</span>']) !!}--}}
{{--						</h3>--}}
{{--						<p class="newsletter-two__text">{!! __('about.newsletter_text') !!}</p>--}}
{{--					</div>--}}
{{--					<div class="newsletter-two__form-box">--}}
{{--						<form class="newsletter-two__form">--}}
{{--							<div class="newsletter-two__input">--}}
{{--								<input type="email" placeholder="{{ __('about.email_placeholder') }}">--}}
{{--							</div>--}}
{{--							<button type="submit" class="newsletter-two__btn">--}}
{{--								<span class="icon-arrow-circle"></span> {{ __('about.subscribe_btn') }}--}}
{{--							</button>--}}
{{--						</form>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</section>--}}
	<section class="contact-info-one">
		<div class="container">
			<ul class="list-unstyled contact-info-one__list">
				<li>
					<div class="contact-info-one__single">
						<div class="contact-info-one__icon">
							<span class="icon-envelope"></span>
						</div>
						<div class="contact-info-one__content">
							<p class="contact-info-one__sub-title">{{ __('about.email_label') }}</p>
							<h5 class="contact-info-one__email">
								<a href="mailto:info@example.com">springofthenewdream@gmail.com</a>
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
							<p class="contact-info-one__sub-title">{{ __('about.phone_label') }}</p>
							<h5 class="contact-info-one__email">
								<a href="tel:001239957689">+968-94787471</a>
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
							<p class="contact-info-one__sub-title">{{ __('about.address_label') }}</p>
							<h5 class="contact-info-one__email">{{ __('about.address_value') }}</h5>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<x-footer2/>
	<x-mobileMenu/>
	<x-searchPopup/>
	<x-scroll-to-top/>
@endsection
