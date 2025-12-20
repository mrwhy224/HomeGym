@extends('layouts.layout1')
@section('title', __('home.page_title'))
@section('content')
	<x-strickyHeader/>

	<!-- Banner One Start -->
	<section class="banner-one">
		<div class="banner-one__bg-shape-1"></div>



		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="banner-one__left">
						<div class="banner-one__title-box">
							<div class="banner-one__title-box-shape">
								<img src="{{ asset('assets/images/shapes/banner-one-title-box-shape-1.png') }}" alt="">
							</div>
							<h2 class="banner-one__title">
								<span class="banner-one__title-clr-1">{!! __('home.banner_title_1') !!}</span>
								{!! __('home.banner_title_divider') !!}
								<span class="banner-one__title-clr-2">{!! __('home.banner_title_2') !!}</span>
							</h2>
						</div>
						<p class="banner-one__text">{!! __('home.banner_text') !!}</p>
						{{--                    <div class="banner-one__thm-and-other-btn-box">--}}
						{{--                        <div class="banner-one__btn-box">--}}
						{{--                            <a href="{{ url('course-details') }}" class="thm-btn"><span--}}
						{{--                                    class="icon-angles-right"></span>{{ __('home.btn_enroll_now') }}</a>--}}
						{{--                        </div>--}}
						{{--                        <div class="banner-one__other-btn-box">--}}
						{{--                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"--}}
						{{--                                class="banner-one__other-btn-1 video-popup"><span--}}
						{{--                                    class="icon-thumbs-up"></span>{{ __('home.btn_quality_video') }}</a>--}}
						{{--                            <a href="{{ url('pricing') }}" class="banner-one__other-btn-1 banner-one__other-btn-2"><span--}}
						{{--                                    class="icon-thumbs-up"></span>{{ __('home.btn_suitable_price') }}</a>--}}
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
{{--									<div class="banner-one__img-shape-1">--}}
{{--										<div class="banner-one__img-shape-2"></div>--}}
{{--									</div>--}}
{{--									<div class="banner-one__shape-1">--}}
{{--										<img src="{{ asset('assets/images/shapes/banner-one-shape-1.png') }}" alt="">--}}
{{--									</div>--}}
{{--									<div class="banner-one__shape-2 rotate-me">--}}
{{--										<img src="{{ asset('assets/images/shapes/banner-one-shape-2.png') }}" alt="">--}}
{{--									</div>--}}
{{--									<div class="banner-one__shape-3">--}}
{{--										<img src="{{ asset('assets/images/shapes/banner-one-shape-3.png') }}" alt="">--}}
{{--									</div>--}}
								</div>
{{--								<div class="banner-one__student-trained">--}}
{{--									<div class="banner-one__student-trained-shape-1 rotate-me">--}}
{{--										<img src="{{ asset('assets/images/shapes/banner-one-student-trained-shape-1.png') }}" alt="">--}}
{{--									</div>--}}
{{--									<ul class="list-unstyled banner-one__student-trained-list">--}}
{{--										<li>--}}
{{--											<div class="banner-one__student-trained-img">--}}
{{--												<img src="{{ asset('assets/images/resources/banner-one-student-trained-img-1-1.jpg') }}"--}}
{{--													 alt="">--}}
{{--											</div>--}}
{{--										</li>--}}
{{--										<li>--}}
{{--											<div class="banner-one__student-trained-img">--}}
{{--												<img src="{{ asset('assets/images/resources/banner-one-student-trained-img-1-2.jpg') }}"--}}
{{--													 alt="">--}}
{{--											</div>--}}
{{--										</li>--}}
{{--									</ul>--}}
{{--									<div class="banner-one__student-trained-count-box">--}}
{{--										<div class="banner-one__student-trained-count-box-inner count-box">--}}
{{--											<p class="count-text" data-stop="2000" data-speed="3000">00</p>--}}
{{--											<span>+</span>--}}
{{--										</div>--}}
{{--										<p class="banner-one__student-trained-text">{{ __('home.banner_student_trained') }}</p>--}}
{{--									</div>--}}
{{--								</div>--}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner One End -->


	<!-- Sliding Text One Start-->
{{--	<section class="sliding-text-one">--}}
{{--		<div class="sliding-text-one__wrap">--}}
{{--			<ul class="sliding-text__list list-unstyled marquee_mode">--}}
{{--				<li>--}}
{{--					<h2 data-hover="{{ __('home.sliding_instructor') }}" class="sliding-text__title">--}}
{{--						<span class="odometer" data-count="20">00</span>+ {{ __('home.sliding_instructor_suffix') }}--}}
{{--						<img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">--}}
{{--					</h2>--}}
{{--				</li>--}}
{{--				<li>--}}
{{--					<h2 data-hover="{{ __('home.sliding_courses') }}" class="sliding-text_-++_title">--}}
{{--						<span class="odometer" data-count="500">00</span>+ {{ __('home.sliding_courses_suffix') }}--}}
{{--						<img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">--}}
{{--					</h2>--}}
{{--				</li>--}}
{{--				<li>--}}
{{--					<h2 data-hover="{{ __('home.sliding_support') }}" class="sliding-text__title">--}}
{{--						{{ __('home.sliding_support') }}--}}
{{--						<img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">--}}
{{--					</h2>--}}
{{--				</li>--}}
{{--				<li>--}}
{{--					<h2 data-hover="{{ __('home.sliding_certificate') }}" class="sliding-text__title">--}}
{{--						{{ __('home.sliding_certificate') }}--}}
{{--						<img src="{{ asset('assets/images/shapes/sliding-text-shape-1.png') }}" alt="">--}}
{{--					</h2>--}}
{{--				</li>--}}
{{--			</ul>--}}
{{--		</div>--}}
{{--	</section>--}}
	<!-- Sliding Text One End -->


	<!-- Category One Start -->
	<section class="category-one">
		{{--    <div class="category-one__bg-shape"--}}
		{{--        style="background-image: url({{ asset('assets/images/shapes/category-one-bg-shape.png') }});"></div>--}}
		<div class="category-one__shape-1">
			<img src="{{ asset('assets/images/shapes/category-one-shape-1.png') }}" alt="">
		</div>
{{--		<div class="category-one__shape-2">--}}
{{--			<img src="{{ asset('assets/images/shapes/category-one-shape-2.png') }}" alt="">--}}
{{--		</div>--}}
		<div class="category-one__shape-3">
			<img src="{{ asset('assets/images/shapes/category-one-shape-3.png') }}" alt="">
		</div>
		<div class="category-one__social-media">
			<ul class="category-one__social-media-list list-unstyled">
				<li>
					<h3>{{ __('home.category_social_1') }}</h3>
				</li>
				<li>
					<img src="{{ asset('assets/images/shapes/category-one-social-media-shape-1.png') }}" alt="">
				</li>
				<li>
					<h3>{{ __('home.category_social_2') }}</h3>
				</li>
				<li>
					<img src="{{ asset('assets/images/shapes/category-one-social-media-shape-1.png') }}" alt="">
				</li>
				<li>
					<h3>{{ __('home.category_social_3') }}</h3>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7">
					<div class="category-one__left">
						<div class="section-title text-left sec-title-animation animation-style2">
{{--							<div class="section-title__tagline-box">--}}
{{--								<div class="section-title__tagline-shape"></div>--}}
{{--								<span class="section-title__tagline">{{ __('home.category_tagline') }}</span>--}}
{{--							</div>--}}
{{--							<h2 class="section-title__title title-animation">{!! __('home.category_title') !!}--}}
{{--								<span>{{ __('home.category_title_span') }} <img src="{{ asset('assets/images/shapes/section-title-shape-2.png') }}"--}}
{{--																				alt=""></span></h2>--}}
						</div>
						<ul class="category-one__category-list list-unstyled">
							<li>
								<div class="category-one__count-and-arrow">
									<div class="category-one__count-box">
										<div class="category-one__count"></div>
										<div class="category-one__count-content">
											<h3><a href={{ url('course-details') }}>{{ __('home.category_public_classes_title') }}</a></h3>
											<p>{{ __('home.category_public_classes_count') }}</p>
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
											<h3><a href={{ url('course-details') }}>{{ __('home.category_public_classes_title') }}</a></h3>
											<p>{{ __('home.category_public_classes_count') }}</p>
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
											<h3><a href={{ url('course-details') }}>{{ __('home.category_semi_private_classes_title') }}</a></h3>
											<p>{{ __('home.category_semi_private_classes_count') }}</p>
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
											<h3><a href={{ url('course-details') }}>{{ __('home.category_semi_private_classes_title') }}</a></h3>
											<p>{{ __('home.category_semi_private_classes_count') }}</p>
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
											<h3><a href={{ url('course-details') }}>{{ __('home.category_private_classes_title') }}</a></h3>
											<p>{{ __('home.category_private_classes_count') }}</p>
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
											<h3><a href={{ url('course-details') }}>{{ __('home.category_private_classes_title') }}</a></h3>
											<p>{{ __('home.category_private_classes_count') }}</p>
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
							{{--                                        <h3><a href={{ url('course-details') }}>{{ __('home.category_content_creation_title') }}</a></h3>--}}
							{{--                                        <p>{{ __('home.category_content_creation_count') }}</p>--}}
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
							{{--                                        <h3><a href={{ url('course-details') }}>{{ __('home.category_content_creation_title') }}</a></h3>--}}
							{{--                                        <p>{{ __('home.category_content_creation_count') }}</p>--}}
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
				@if ($localeDirection === 'rtl')
					<div class="col-xl-6 col-lg-5 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
				@else
					<div class="col-xl-6 col-lg-5 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
				@endif
					<div class="category-one__right">
						<div class="category-one__img">
							<img src="{{ asset('assets/images/home/') }}" alt="">
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
{{--						<div class="about-one__left-shape-1 rotate-me"></div>--}}
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="about-one__img-box">
									<div class="about-one__img">
										<img src="{{ asset('assets/images/home/') }}" alt="">
									</div>
								</div>
{{--								<div class="about-one__awards-box">--}}
{{--									<div class="about-one__awards-count-box">--}}
{{--										<h3 class="odometer" data-count="45">00</h3>--}}
{{--										<span>+</span>--}}
{{--									</div>--}}
{{--									<p>{{ __('home.about_awards_winning') }}</p>--}}
{{--								</div>--}}
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
								{{--                                            <p>{{ __('home.about_years') }}</p>--}}
								{{--                                        </div>--}}
								{{--                                        <p>{{ __('home.about_of_experience') }}</p>--}}
								{{--                                    </div>--}}
								{{--                                </div>--}}
								{{--                                <div class="about-one__experience-box-shape"></div>--}}
								{{--                            </div>--}}
								<div class="about-one__img-box-2">
									<div class="about-one__img-2">
										<img src="{{ asset('assets/images/home/') }}" alt="">
									</div>
									<div class="about-one__img-shape-1 float-bob-y">
										<img src="{{ asset('assets/images/shapes/') }}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-one__right">
						<div class="section-title text-left sec-title-animation animation-style2">
{{--							<div class="section-title__tagline-box">--}}
{{--								<div class="section-title__tagline-shape"></div>--}}
{{--								<span class="section-title__tagline">{{ __('home.about_tagline') }}</span>--}}
{{--							</div>--}}
							@if ($localeDirection === 'rtl')
								<h2 class="section-title__title">
							@else
								<h2 class="section-title__title title-animation">
							@endif
								{!! __('home.about_title') !!}
								<span>{{ __('home.about_title_span') }} <img src="{{ asset('assets/images/shapes/section-title-shape-1.png') }}"
																			 alt=""></span></h2>
						</div>
						<p class="about-one__text">{!! __('home.about_text') !!}</p>
{{--						<ul class="about-one__mission-and-vision list-unstyled">--}}
{{--							<li>--}}
{{--								<div class="about-one__icon-and-title">--}}
{{--									<div class="about-one__icon">--}}
{{--										<img src="{{ asset('assets/images/icon/mission-icon.png') }}" alt="">--}}
{{--									</div>--}}
{{--									<h3>{{ __('home.about_mission_title') }}</h3>--}}
{{--								</div>--}}
{{--								<p class="about-one__mission-and-vision-text">{{ __('home.about_mission_text') }}</p>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<div class="about-one__icon-and-title">--}}
{{--									<div class="about-one__icon">--}}
{{--										<img src="{{ asset('assets/images/icon/vision-icon.png') }}" alt="">--}}
{{--									</div>--}}
{{--									<h3>{{ __('home.about_vision_title') }}</h3>--}}
{{--								</div>--}}
{{--								<p class="about-one__mission-and-vision-text">{{ __('home.about_vision_text') }}</p>--}}
{{--							</li>--}}
{{--						</ul>--}}
						<div class="about-one__btn-and-live-class" style="margin-top: 20px">
							<div class="about-one__btn-box">
								<a href="{{ url('about') }}" class="about-one__btn thm-btn"><span
										class="icon-angles-right"></span>{{ __('home.btn_know_more') }}</a>
							</div>
		{{--							<h3 class="about-one__live-class">{{ __('home.about_live_class') }} <img--}}
		{{--									src="{{ asset('assets/images/shapes/live-class-shape-1.png') }}" alt=""></h3>--}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About One End -->


	<!-- Courses One Start -->
	{{--... Courses One commented out ...--}}
	<!-- Courses One End -->

	<!-- Why Choose One Start -->
	{{--... Why Choose One commented out ...--}}
	<!-- Why Choose One End -->


	<!-- Counter One Start -->
{{--	<section class="counter-one">--}}
{{--		<div class="counter-one__bg" style="background-image: url('{{ asset('assets/images/home/young-fitness-man-studio_7502-5008.jpg') }}');">--}}
{{--			<div class="counter-one__video-link">--}}
{{--				<div class="counter-one__video-shape-1">--}}
{{--					<img src="{{ asset('assets/images/shapes/counter-one-video-shape-11.png') }}" alt="">--}}
{{--				</div>--}}
{{--				<a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">--}}
{{--					<div class="counter-one__video-icon">--}}
{{--						<span class="icon-play"></span>--}}
{{--						<i class="ripple"></i>--}}
{{--					</div>--}}
{{--				</a>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--		<div class="counter-one__shape-1" style="background-image: url('{{ asset('assets/images/shapes/counter-one-shape-1.png') }}');"></div>--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}
{{--				<div class="col-xl-8">--}}
{{--					<div class="counter-one__left">--}}
{{--						<ul class="counter-one__list list-unstyled">--}}
{{--							<li>--}}
{{--								<div class="counter-one__count-hover-img"--}}
{{--									 style="background-image: url('{{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }}');">--}}
{{--								</div>--}}
{{--								<div class="counter-one__count count-box">--}}
{{--									<h3 class="count-text" data-stop="10" data-speed="1500">00</h3>--}}
{{--									<span>k</span>--}}
{{--								</div>--}}
{{--								<p>{{ __('home.counter_student_trained') }}</p>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<div class="counter-one__count-hover-img"--}}
{{--									 style="background-image: url('{{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }}');">--}}
{{--								</div>--}}
{{--								<div class="counter-one__count count-box">--}}
{{--									<h3 class="count-text" data-stop="50" data-speed="1500">00</h3>--}}
{{--									<span>+</span>--}}
{{--								</div>--}}
{{--								<p>{{ __('home.counter_recorded_courses') }}</p>--}}
{{--							</li>--}}
{{--							<li>--}}
{{--								<div class="counter-one__count-hover-img"--}}
{{--									 style="background-image: url('{{ asset('assets/images/resources/counter-one-single-hover-img.jpg') }}');">--}}
{{--								</div>--}}
{{--								<div class="counter-one__count count-box">--}}
{{--									<h3 class="count-text" data-stop="15" data-speed="1500">00</h3>--}}
{{--									<span>M</span>--}}
{{--								</div>--}}
{{--								<p>{{ __('home.counter_satisfaction_rate') }}</p>--}}
{{--							</li>--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</section>--}}
	<!-- Counter One End -->
	<!--Team Carousel Page Start-->
{{--	<section class="team-carousel-page">--}}
{{--		<div class="container">--}}
{{--			<div class="team-carousel-style owl-carousel owl-theme carousel-dot-style">--}}
{{--				<!--Team One Single Start-->--}}
{{--				--}}{{--                <div class="item">--}}
{{--				--}}{{--                    <div class="team-one__single">--}}
{{--				--}}{{--                        <div class="team-one__img-box">--}}
{{--				--}}{{--                            <div class="team-one__img">--}}
{{--				--}}{{--                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                            <div class="team-one__content">--}}
{{--				--}}{{--                                <div class="team-one__single-bg-shape"--}}
{{--				--}}{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--				--}}{{--                                    <div class="team-one__plus">--}}
{{--				--}}{{--                                        <span class="icon-plus"></span>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                    <div class="team-one__social">--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Thomas Alison</a></h3>--}}
{{--				--}}{{--                                <p class="team-one__sub-title">UI/UX Expert</p>--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                        </div>--}}
{{--				--}}{{--                    </div>--}}
{{--				--}}{{--                </div>--}}
{{--				<!--Team One Single End-->--}}
{{--				<!--Team One Single Start-->--}}
{{--				--}}{{--                <div class="item">--}}
{{--				--}}{{--                    <div class="team-one__single">--}}
{{--				--}}{{--                        <div class="team-one__img-box">--}}
{{--				--}}{{--                            <div class="team-one__img">--}}
{{--				--}}{{--                                <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                            <div class="team-one__content">--}}
{{--				--}}{{--                                <div class="team-one__single-bg-shape"--}}
{{--				--}}{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--				--}}{{--                                    <div class="team-one__plus">--}}
{{--				--}}{{--                                        <span class="icon-plus"></span>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                    <div class="team-one__social">--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Alisa Olivia</a></h3>--}}
{{--				--}}{{--                                <p class="team-one__sub-title">Graphics Designer</p>--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                        </div>--}}
{{--				--}}{{--                    </div>--}}
{{--				--}}{{--                </div>--}}
{{--				<!--Team One Single End-->--}}
{{--				<!--Team One Single Start-->--}}
{{--				--}}{{--                <div class="item">--}}
{{--				--}}{{--                    <div class="team-one__single">--}}
{{--				--}}{{--                        <div class="team-one__img-box">--}}
{{--				--}}{{--                            <div class="team-one__img">--}}
{{--				--}}{{--                                <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                            <div class="team-one__content">--}}
{{--				--}}{{--                                <div class="team-one__single-bg-shape"--}}
{{--				--}}{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--				--}}{{--                                    <div class="team-one__plus">--}}
{{--				--}}{{--                                        <span class="icon-plus"></span>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                    <div class="team-one__social">--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Sarah Wilson</a></h3>--}}
{{--				--}}{{--                                <p class="team-one__sub-title">Tech & Programming</p>--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                        </div>--}}
{{--				--}}{{--                    </div>--}}
{{--				--}}{{--                </div>--}}
{{--				<!--Team One Single End-->--}}
{{--				<!--Team One Single Start-->--}}
{{--				--}}{{--                <div class="item">--}}
{{--				--}}{{--                    <div class="team-one__single">--}}
{{--				--}}{{--                        <div class="team-one__img-box">--}}
{{--				--}}{{--                            <div class="team-one__img">--}}
{{--				--}}{{--                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                            <div class="team-one__content">--}}
{{--				--}}{{--                                <div class="team-one__single-bg-shape"--}}
{{--				--}}{{--                                    style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--				--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--				--}}{{--                                    <div class="team-one__plus">--}}
{{--				--}}{{--                                        <span class="icon-plus"></span>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                    <div class="team-one__social">--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--				--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--				--}}{{--                                    </div>--}}
{{--				--}}{{--                                </div>--}}
{{--				--}}{{--                                <h3 class="team-one__title"><a href="{{ url('instructor-details') }}">David Warner</a></h3>--}}
{{--				--}}{{--                                <p class="team-one__sub-title">Digital Marketer</p>--}}
{{--				--}}{{--                            </div>--}}
{{--				--}}{{--                        </div>--}}
{{--				--}}{{--                    </div>--}}
{{--				--}}{{--                </div>--}}
{{--				<!--Team One Single End-->--}}
{{--				<!--Team One Single Start-->--}}
{{--				<div class="item">--}}
{{--					<div class="team-one__single">--}}
{{--						<div class="team-one__img-box">--}}
{{--							<div class="team-one__img">--}}
{{--								<img src="{{ asset('assets/images/home/trainer_1.jpg') }}" alt="">--}}
{{--							</div>--}}
{{--							<div class="team-one__content">--}}
{{--								<div class="team-one__single-bg-shape"--}}
{{--									 style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--								</div>--}}
{{--								--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--								--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--								--}}{{--                                </div>--}}
{{--								--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--								--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--								--}}{{--                                </div>--}}
{{--								--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--								--}}{{--                                    <div class="team-one__plus">--}}
{{--								--}}{{--                                        <span class="icon-plus"></span>--}}
{{--								--}}{{--                                    </div>--}}
{{--								--}}{{--                                    <div class="team-one__social">--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--								--}}{{--                                    </div>--}}
{{--								--}}{{--                                </div>--}}
{{--								<h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Sepideh</a></h3>--}}
{{--								<p class="team-one__sub-title">Head Coach </p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<!--Team One Single End-->--}}
{{--				<!--Team One Single Start-->--}}
{{--				<div class="item">--}}
{{--					<div class="team-one__single">--}}
{{--						<div class="team-one__img-box">--}}
{{--							<div class="team-one__img">--}}
{{--								<img src="{{ asset('assets/images/home/trainer.jpg') }}" alt="">--}}
{{--							</div>--}}
{{--							<div class="team-one__content">--}}
{{--								<div class="team-one__single-bg-shape"--}}
{{--									 style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--								</div>--}}
{{--								--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--								--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--								--}}{{--                                </div>--}}
{{--								--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--								--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--								--}}{{--                                </div>--}}
{{--								--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--								--}}{{--                                    <div class="team-one__plus">--}}
{{--								--}}{{--                                        <span class="icon-plus"></span>--}}
{{--								--}}{{--                                    </div>--}}
{{--								--}}{{--                                    <div class="team-one__social">--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--								--}}{{--                                    </div>--}}
{{--								--}}{{--                                </div>--}}
{{--								<h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Mahdi</a></h3>--}}
{{--								<p class="team-one__sub-title">Fitness Expert</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<!--Team One Single End-->--}}
{{--				<!--Team One Single Start-->--}}
{{--				<div class="item">--}}
{{--					<div class="team-one__single">--}}
{{--						<div class="team-one__img-box">--}}
{{--							<div class="team-one__img">--}}
{{--								<img src="{{ asset('assets/images/home/trainer_3.jpg') }}" alt="">--}}
{{--							</div>--}}
{{--							<div class="team-one__content">--}}
{{--								<div class="team-one__single-bg-shape"--}}
{{--									 style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--								</div>--}}
{{--								--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--								--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--								--}}{{--                                </div>--}}
{{--								--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--								--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--								--}}{{--                                </div>--}}
{{--								--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--								--}}{{--                                    <div class="team-one__plus">--}}
{{--								--}}{{--                                        <span class="icon-plus"></span>--}}
{{--								--}}{{--                                    </div>--}}
{{--								--}}{{--                                    <div class="team-one__social">--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--								--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--								--}}{{--                                    </div>--}}
{{--								--}}{{--                                </div>--}}
{{--								<h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Mahan</a></h3>--}}
{{--								<p class="team-one__sub-title">TRX Expert</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<!--Team One Single End-->--}}
{{--				<!--Team One Single Start-->--}}
{{--				<div class="item">--}}
{{--					<div class="team-one__single">--}}
{{--						<div class="team-one__img-box">--}}
{{--							<div class="team-one__img">--}}
{{--								<img src="{{ asset('assets/images/team/trainer_2.jpg') }}" alt="">--}}
{{--							</div>--}}

{{--						</div>--}}
{{--					</div>--}}
{{--					<!--Team One Single End-->--}}
{{--					<!--Team One Single Start-->--}}
{{--					<div class="item">--}}
{{--						<div class="team-one__single">--}}
{{--							<div class="team-one__img-box">--}}
{{--								<div class="team-one__img">--}}
{{--									<img src="{{ asset('assets/images/home/trainer_2.jpg') }}" alt="">--}}
{{--								</div>--}}
{{--								<div class="team-one__content">--}}
{{--									<div class="team-one__single-bg-shape"--}}
{{--										 style="background-image: url('{{ asset('assets/images/shapes/team-one-single-bg-shape.png') }}');">--}}
{{--									</div>--}}
{{--									--}}{{--                                <div class="team-one__content-shape-1">--}}
{{--									--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-1.png') }}" alt="">--}}
{{--									--}}{{--                                </div>--}}
{{--									--}}{{--                                <div class="team-one__content-shape-2">--}}
{{--									--}}{{--                                    <img src="{{ asset('assets/images/shapes/team-one-content-shape-2.png') }}" alt="">--}}
{{--									--}}{{--                                </div>--}}
{{--									--}}{{--                                <div class="team-one__plus-and-social">--}}
{{--									--}}{{--                                    <div class="team-one__plus">--}}
{{--									--}}{{--                                        <span class="icon-plus"></span>--}}
{{--									--}}{{--                                    </div>--}}
{{--									--}}{{--                                    <div class="team-one__social">--}}
{{--									--}}{{--                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>--}}
{{--									--}}{{--                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>--}}
{{--									--}}{{--                                        <a href="#"><span class="fab fa-facebook-f"></span></a>--}}
{{--									--}}{{--                                        <a href="#"><span class="fab fa-instagram"></span></a>--}}
{{--									--}}{{--                                    </div>--}}
{{--									--}}{{--                                </div>--}}
{{--									<h3 class="team-one__title"><a href="{{ url('instructor-details') }}">Shima</a></h3>--}}
{{--									<p class="team-one__sub-title">Coach</p>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<!--Team One Single End-->--}}
{{--				</div>--}}
{{--			</div>--}}
{{--	</section>--}}
	<!--Team Carousel Page End-->

	<section class="blog-page">
		<div class="container">
			<div class="row">
				<!--Blog Two Single Start -->
{{--				<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">--}}
{{--					<div class="blog-two__single">--}}
{{--						<div class="blog-two__img">--}}
{{--							<img src="{{ asset('assets/images/home/medium-shot-41.jpg') }}" alt="">--}}
{{--							<div class="blog-two__date">--}}
{{--								<span class="icon-calendar"></span>--}}
{{--								<p>Nov 02, 2024</p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="blog-two__content">--}}
{{--							<div class="blog-two__meta-box">--}}
{{--								<ul class="blog-two__meta list-unstyled">--}}
{{--									<li>--}}
{{--										<a href="{{ url('blog-details') }}"><span class="icon-tags"></span>Business</a>--}}
{{--									</li>--}}
{{--									<li>--}}
{{--										<a href="{{ url('blog-details') }}"><span class="icon-clock"></span>10 Min Read</a>--}}
{{--									</li>--}}
{{--									<li>--}}
{{--										<a href="{{ url('blog-details') }}"><span class="icon-comments"></span>(Comments)</a>--}}
{{--									</li>--}}
{{--								</ul>--}}
{{--							</div>--}}
{{--							<h4 class="blog-two__title"><a href="{{ url('blog-details') }}">How to Succeed in Online Learning: Tips for Students</a></h4>--}}
{{--							<p class="blog-two__text">The discusses the advantages of using LMS for upskilling employees, managing compliance training,</p>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
				<!--Blog Two Single End -->
				<!--Blog Two Single Start -->

				<!--Blog Two Single End -->
				<!--Blog Two Single Start -->
				<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
					<div class="blog-two__single">
						<div class="blog-two__img">
							<img src="{{ asset('assets/images/home/females8.jpg') }}" alt="">
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
							<h4 class="blog-two__title"><a href="{{ url('blog-details') }}">The Future of LMS</a></h4>
							<p class="blog-two__text"></p>
						</div>
					</div>
				</div>
				<!--Blog Two Single End -->
				<!--Blog Two Single Start -->
				<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
					<div class="blog-two__single">
						<div class="blog-two__img">
							<img src="{{ asset('assets/images/home/couple-actively66.jpg') }}" alt="">
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
							<h4 class="blog-two__title"><a href="{{ url('blog-details') }}">How to Choose the Right LMS </a></h4>
							<p class="blog-two__text"></p>
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
							<h4 class="blog-two__title"><a href="{{ url('blog-details') }}">Boosting Employee Engagement </a></h4>
							<p class="blog-two__text"></p>
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

	</section>



	<!-- Team One Start -->
	{{--... Team One commented out ...--}}
	<!-- Team One End -->

	<!-- Newsletter One Start -->
	{{--... Newsletter One commented out ...--}}
	<!-- Newsletter One End -->

	<!-- Testimonial One Start -->
	{{--... Testimonial One commented out ...--}}
	<!-- Testimonial One End -->


	<!-- Live Class One Start -->
	{{--... Live Class One commented out ...--}}
	<!-- Live Class One End -->

	<!-- Video One Start -->
{{--	<section class="video-one">--}}
{{--		<div class="video-one__inner">--}}
{{--			<div class="video-one__img-box">--}}
{{--				<img src="{{ asset('assets/images/home/females8.jpg') }}" alt="">--}}
{{--				<div class="video-one__video-link">--}}
{{--					<a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">--}}
{{--						--}}{{--                        <div class="video-one__video-shape-1">--}}
{{--						--}}{{--                            <img src="{{ asset('assets/images/home/females8.jpg') }}" alt="">--}}
{{--						--}}{{--                        </div>--}}
{{--						<div class="video-one__video-icon">--}}
{{--							<span class="fa fa-play"></span>--}}
{{--							<i class="ripple"></i>--}}
{{--						</div>--}}
{{--					</a>--}}
{{--				</div>--}}
{{--				<ul class="list-unstyled video-one__video-control">--}}
{{--					<li><a href={{ url('#') }}><span class="icon-screen-share"></span></a></li>--}}
{{--					<li><a href={{ url('#') }}><span class="icon-microphone"></span></a></li>--}}
{{--					<li><a href={{ url('#') }}><span class="icon-phone"></span></a></li>--}}
{{--					<li><a href={{ url('#') }}><span class="icon-video-slash"></span></a></li>--}}
{{--					<li><a href={{ url('#') }}><span class="icon-share-from"></span></a></li>--}}
{{--				</ul>--}}
{{--				<div class="video-one__live">--}}
{{--					<div class="video-one__live-icon">--}}
{{--						<span class="icon-wifi"></span>--}}
{{--					</div>--}}
{{--					<p class="video-one__live-text">{{ __('home.video_live_time') }}</p>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</section>--}}
	<!-- Video One End -->


	<!-- Sliding Text Two Start -->


	<!-- Blog One Start -->
	{{--... Blog One commented out ...--}}
	<!-- Blog One End -->


	<x-footer/>
	<x-mobileMenu/>
	<x-searchPopup/>
	<x-scroll-to-top/>
@endsection
