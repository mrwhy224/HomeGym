@extends('layouts.layout2')

@php
	// ۱. خواندن فایل JSON
	$jsonPath = base_path('resources/courses.json');
	$allCourses = json_decode(file_get_contents($jsonPath), true);

	// ۲. پیدا کردن دوره (فرض بر این است که اسلاگ در سگمنت دوم URL است مثل: site.com/course/python-mastery)
	$slug = request()->segment(2);
	$course = collect($allCourses)->firstWhere('slug', $slug);

	// اگر پیدا نشد، اولین مورد را به عنوان دمو نشان بده یا abort کن
	if (!$course) { $course = $allCourses[0]; }

	$title = $course['title'];
	$subtitle = $course['subtitle'];
@endphp

@section('title', $course['title'] . ' || Fistudy || Fistudy Laravel Template ')
@section('content')

	<x-strickyHeader/>

	<section class="course-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="course-details__left">
						<div class="course-details__img">
							<img src="{{ asset($course['main_image']) }}" alt="">
						</div>
						<div class="course-details__content">
							<div class="course-details__tag-box">
								<div class="course-details__tag-shape"></div>
								<span class="course-details__tag">{{ $course['tag'] }}</span>
							</div>
							<h3 class="course-details__title">{!! nl2br(e($course['title'])) !!}</h3>
							<div class="course-details__client-and-ratting-box">

								<div class="course-details__ratting-box-1">
									<ul class="course-details__ratting-list-1 list-unstyled">
										<li>
											<p>Last Update</p>
											<h4>{{ $course['last_update'] }}</h4>
										</li>
										<li>
											<p>Available</p>
											<h4>{{ $course['students_count'] }}</h4>
										</li>
										<li>
											<p>({{ $course['rating_avg'] }} Rating)</p>
											<ul class="course-details__ratting list-unstyled">
												@for($i=0; $i < $course['rating_stars']; $i++)
													<li><span class="icon-star"></span></li>
												@endfor
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<div class="course-details__main-tab-box tabs-box">
								<ul class="tab-buttons list-unstyled">
									<li data-tab="#overview" class="tab-btn tab-btn-one active-btn">
										<p><span class="icon-pen-ruler"></span>Overview</p>
									</li>
									<li data-tab="#curriculum" class="tab-btn tab-btn-two">
										<p><span class="icon-book"></span>Curriculum</p>
									</li>
								</ul>
								<div class="tabs-content">
									<div class="tab active-tab" id="overview">
										<div class="course-details__tab-inner">
											<div class="course-details__overview">
												<h3 class="course-details__overview-title">Course Overview</h3>
												<p class="course-details__overview-text-1">{{ $course['overview']['text_1'] }}</p>
												<p class="course-details__overview-text-2">{{ $course['overview']['text_2'] }}</p>

												<h3 class="course-details__overview-title-2">What You Will Learn?</h3>
												<ul class="course-details__overview-points list-unstyled">
													@foreach($course['overview']['learn_points'] as $point)
														<li>
															<div class="course-details__overview-points-icon"><span class="fas fa-check"></span></div>
															<div class="course-details__overview-points-content">
																<h5>{{ $point['title'] }}</h5>
																<p>{{ $point['text'] }}</p>
															</div>
														</li>
													@endforeach
												</ul>

												<h3 class="course-details__overview-title-3">Requirement?</h3>
												<p class="course-details__overview-text-3">{{ $course['overview']['requirement_text'] }}</p>

												<div class="course-details__points-box">
													<div class="row">
														@foreach(collect($course['overview']['requirement_points'])->chunk(2) as $chunk)
															<div class="col-xl-6">
																<ul class="course-details__points-list-2 list-unstyled">
																	@foreach($chunk as $item)
																		<li>
																			<div class="course-details__points-list-icon">
																				<img src="{{ asset($item['icon']) }}" alt="">
																			</div>
																			<h3 class="course-details__points-list-title">{!! nl2br(e($item['title'])) !!}</h3>
																			<p class="course-details__points-list-text">{!! nl2br(e($item['text'])) !!}</p>
																		</li>
																	@endforeach
																</ul>
															</div>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab" id="curriculum">
										<div class="course-details__tab-inner">
											<div class="course-details__curriculam">
												<h3 class="course-details__curriculam-title">Course Curriculum</h3>
												<p class="course-details__curriculam-text">{{ $course['curriculum']['intro'] }}</p>

												<div class="course-details__curriculam-faq">
													<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
														@foreach($course['curriculum']['sections'] as $index => $section)
															<div class="accrodion {{ $section['active'] ? 'active' : '' }}">
																<div class="accrodion-title">
																	<div class="accrodion-title-box">
																		<div class="accrodion-title__count"></div>
																		<div class="accrodion-title-text"><h4>{{ $section['title'] }}</h4></div>
																	</div>
																	<ul class="accrodion-meta list-unstyled">
																		<li><p><span class="icon-book"></span>{{ $section['lessons'] }}</p></li>
																		<li><p><span class="icon-clock"></span>{{ $section['duration'] }}</p></li>
																	</ul>
																</div>
																<div class="accrodion-content">
																	<div class="inner">
																		<h3 class="accrodion-content__title">{{ $section['content_title'] }}</h3>
																		<p class="accrodion-content__text">{{ $section['content_text'] }}</p>
																		<ul class="accrodion-content__points list-unstyled">
																			@foreach($section['items'] as $item)
																				<li>
																					<p class="accrodion-content__points-text">
																						<span class="{{ $item['type'] }}"></span>{{ $item['title'] }}
																					</p>
																					@if($item['preview'])
																						<div class="accrodion-content__points-btn"><a href="#">Preview</a></div>
																					@endif
																					@if($item['locked'])
																						<div class="accrodion-content__icon"><span class="far fa-lock-alt"></span></div>
																					@endif
																				</li>
																			@endforeach
																		</ul>
																	</div>
																</div>
															</div>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-5">
					<div class="course-details__right">
						<div class="course-details__info-box">

							<div class="course-details__social-box">
								<h5 class="course-details__social-title">Share Course</h5>
								<div class="course-details__social-list">
									<a href="#"><span class="fab fa-linkedin-in"></span></a>
									<a href="#"><span class="fab fa-pinterest-p"></span></a>
									<a href="#"><span class="fab fa-facebook-f"></span></a>
									<a href="#"><span class="fab fa-instagram"></span></a>
								</div>
							</div>
							<div class="course-details__info-list">
								<h3 class="course-details__info-list-title">This Course Included</h3>
								<ul class="course-details__info-list-1 list-unstyled">
									<li><p><i class="icon-book"></i>Lesson</p><span>{{ $course['sidebar_info']['lessons'] }}</span></li>
									<li><p><i class="icon-clock"></i>Duration</p><span>{{ $course['sidebar_info']['duration'] }}</span></li>
									<li><p><i class="icon-chart-simple"></i>Skill Level</p><span>{{ $course['sidebar_info']['skill_level'] }}</span></li>
									<li><p><i class="icon-globe"></i>Language</p><span>{{ $course['sidebar_info']['language'] }}</span></li>
									<li><p><i class="icon-stamp"></i>Certificate</p><span>{{ $course['sidebar_info']['certificate'] }}</span></li>
								</ul>
							</div>
							<div class="course-details__doller-and-btn-box">
								<div class="course-details__doller-btn-box">
									<a href={{ route('register.form', ['locale' => app()->getLocale()]) }} class="thm-btn-two">
										<span>Join Us Now!</span>
										<i class="icon-angles-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<x-footer/>
	<x-mobileMenu/>
	<x-searchPopup/>
	<x-scroll-to-top/>
@endsection
