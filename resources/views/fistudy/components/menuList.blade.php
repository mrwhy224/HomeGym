<nav class="main-menu">
    <div class="main-menu__wrapper">
        <div class="container">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href={{ url('/') }}><img src="{{ asset('assets/images/favicons/logo3.png') }}" alt=""></a>
                    </div>
                    <div class="main-menu__category-box">
                        {{-- فرض بر این است که لیست دسته‌بندی‌ها از دیتابیس می‌آیند و فقط برای نمایش ترجمه می‌شوند --}}
                        <ul class="list-unstyled main-menu__category-sub-menu">
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-1.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_tech_prog_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-2.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_creative_art_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-3.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_business_finance_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-4.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_health_wellness_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-5.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_writing_comm_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-6.png') }}" alt="">>
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_user_research_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-7.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_digital_marketing_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href={{ url('#') }}>
                                    <div class="main-menu__category-icon">
                                        <img src="{{ asset('assets/images/icon/categoyr-two-icon-8.png') }}" alt="">
                                    </div>
                                    <div class="main-menu__category-content">
                                        <h5>{!! __('header.category_lifestyle_prod_title') !!}</h5>
                                        <p>{{ __('header.category_courses_count') }}</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu__main-menu-box">
                    <a href={{ url('#') }} class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li>
                            <a href="{{ route('index', ['locale' => app()->getLocale()]) }}">{{ __('header.menu_home') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('about', ['locale' => app()->getLocale()]) }}">{{ __('header.menu_about') }}</a>
                        </li>
                        <li class="dropdown">
                            <a href={{ url('#') }}>{{ __('header.menu_pages') }}</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('instructor', ['locale' => app()->getLocale()]) }}">{{ __('header.page_instructors') }}</a></li>
                                <li><a href="{{ route('instructor-carousel', ['locale' => app()->getLocale()]) }}">{{ __('header.page_instructor_carousel') }}</a></li>
                                <li><a href="{{ route('instructor-details', ['locale' => app()->getLocale()]) }}">{{ __('header.page_instructor_details') }}</a></li>
                                <li><a href="{{ route('events', ['locale' => app()->getLocale()]) }}">{{ __('header.page_events') }}</a></li>
                                <li><a href="{{ route('events-carousel', ['locale' => app()->getLocale()]) }}">{{ __('header.page_event_carousel') }}</a></li>
                                <li><a href="{{ route('event-details', ['locale' => app()->getLocale()]) }}">{{ __('header.page_event_details') }}</a></li>
                                <li><a href="{{ route('become-a-teacher', ['locale' => app()->getLocale()]) }}">{{ __('header.page_become_a_teacher') }}</a></li>
                                <li><a href="{{ route('testimonials', ['locale' => app()->getLocale()]) }}">{{ __('header.page_testimonials') }}</a></li>
                                <li><a href="{{ route('testimonials-carousel', ['locale' => app()->getLocale()]) }}">{{ __('header.page_testimonial_carousel') }}</a></li>
                                <li><a href="{{ route('pricing', ['locale' => app()->getLocale()]) }}">{{ __('header.page_pricing') }}</a></li>
                                <li><a href="{{ route('gallery', ['locale' => app()->getLocale()]) }}">{{ __('header.page_gallery') }}</a></li>
                                <li><a href="{{ route('faq', ['locale' => app()->getLocale()]) }}">{{ __('header.page_faqs') }}</a></li>
                                <li><a href="{{ url(app()->getLocale() . '/404') }}">{{ __('header.page_404') }}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href={{ url('#') }}>{{ __('header.menu_course') }}</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('course', ['locale' => app()->getLocale()]) }}">{{ __('header.course_course') }}</a></li>
                                <li><a href="{{ route('course-carousel', ['locale' => app()->getLocale()]) }}">{{ __('header.course_carousel') }}</a></li>
                                <li><a href="{{ route('course-list', ['locale' => app()->getLocale()]) }}">{{ __('header.course_list') }}</a></li>
                                <li><a href="{{ route('course-details', ['locale' => app()->getLocale()]) }}">{{ __('header.course_details') }}</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href={{ url('#') }}>{{ __('header.menu_blog') }}</a>
                            <ul class="shadow-box">
                                <li><a href="{{ route('blog', ['locale' => app()->getLocale()]) }}">{{ __('header.blog_blog') }}</a></li>
                                <li><a href="{{ route('blog-carousel', ['locale' => app()->getLocale()]) }}">{{ __('header.blog_carousel') }}</a></li>
                                <li><a href="{{ route('blog-list', ['locale' => app()->getLocale()]) }}">{{ __('header.blog_list') }}</a></li>
                                <li><a href="{{ route('blog-details', ['locale' => app()->getLocale()]) }}">{{ __('header.blog_details') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="main-menu__right">
                    <ul class="main-menu__list">

                        <li class="dropdown">
                        <a href="#">
                            <span class="fas fa-globe"></span> {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <ul class="dropdown-menu shadow-box">
                            @foreach ($activeLocales as $name => $code)
                                <li>
                                    <a href="{{ route('index', $code) }}">
                                        {{ $name }}
                                        @if ($code === app()->getLocale())
                                            <span class="icon-tick-mark"></span>
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    </ul>

                    <div class="main-menu__btn-boxes">
                        <div class="main-menu__btn-box-1">
                            <a href="{{ route('login', ['locale' => app()->getLocale()]) }}" class="thm-btn">{{ __('header.btn_login') }}</a>
                        </div>
                        <div class="main-menu__btn-box-2">
                            <a href="{{ route('sign-up', ['locale' => app()->getLocale()]) }}" class="thm-btn">{{ __('header.btn_register') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
