<!DOCTYPE html>
<html lang="en">

<x-head/>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . 'custom-cursor"' : 'class="custom-cursor"'); ?>>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <header class="main-header main-header-three">
            <div class="main-menu__top">
                <div class="container">
                    <div class="main-menu__top-inner">
                        <ul class="list-unstyled main-menu__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-email"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:support@example.com">support@example.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-contact"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:1212345678900">+12 (123) 456 78900</a></p>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled main-menu__contact-list main-menu__location">
                            <li>
                                <div class="icon">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="text">
                                    <p>684 West College St. Sun City, USA</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <x-menuList/>
        </header>


            <!--Page Header Start-->
            <section class="page-header">
                <div class="page-header__bg" style="background-image: url({{ asset('assets/images/shapes/page-header-bg-shape.png') }});">
                </div>
                <div class="page-header__shape-4">
                    <img src="{{ asset('assets/images/shapes/page-header-shape-4.png') }}" alt="">
                </div>
                <div class="page-header__shape-5">
                    <img src="{{ asset('assets/images/shapes/page-header-shape-5.png') }}" alt="">
                </div>
                <div class="page-header__social">
                    <a href="#">Facebook</a>
                    <span>//</span>
                    <a href="#">Instagram</a>
                    <span>//</span>
                    <a href="#">LinkedIn</a>
                    <span>//</span>
                    <a href="#">Twitter</a>
                </div>
                <div class="container">
                    <div class="page-header__inner">
                        <div class="page-header__img">
                            <img src="{{ asset('assets/images/resources/home/discount.png') }}" alt="">


                        </div>
                        <h2>{{ $title }}</h2>
                        <div class="thm-breadcrumb__box">
                            <ul class="thm-breadcrumb list-unstyled">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><span>//</span></li>
                                <li>{{ $subtitle }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            @yield('content')

    <x-loader/>

   <x-scripts/>

</body>

</html>
