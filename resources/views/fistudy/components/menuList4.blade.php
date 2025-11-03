<nav class="main-menu main-menu-two">
    <div class="main-menu-two__wrapper">
        <div class="container">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href={{ url('/') }}><img src="{{ asset('assets/images/resources/logo-2.png') }}" alt="">                        </a>
                    </div>
                </div>
                <div class="main-menu-two__main-menu-box">
                    <a href={{ url('#') }} class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list one-page-scroll-menu">
                        <li class="scrollToLink">
                            <a href="#home">Home </a>
                        </li>
                        <li class="scrollToLink">
                            <a href="#about">About</a>
                        </li>
                        <li class="scrollToLink">
                            <a href="#course">Course</a>
                        </li>
                        <li class="scrollToLink">
                            <a href="#team">Team</a>
                        </li>
                        <li class="scrollToLink">
                            <a href="#testimonial">Testimonial</a>
                        </li>
                        <li class="scrollToLink">
                            <a href="#blog">Blog</a>
                        </li>
                        <li class="scrollToLink">
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu-two__right">
                    <div class="main-menu-two__search-box">
                        <a href={{ url('#') }} class="main-menu-two__search searcher-toggler-box icon-search"></a>
                    </div>
                    <div class="main-menu-two__signin-reg">
                        <div class="main-menu-two__signin-reg-icon">
                            <span class="icon-user-plus"></span>
                        </div>
                        <div class="main-menu-two__signin-reg-content">
                            <a href={{ route('sign-up') }} class="main-menu-two__signin">Sign in</a>
                            <a href={{ route('login') }} class="main-menu-two__reg">Register</a>
                        </div>
                    </div>
                    <div class="main-menu-two__support-box">
                        <p class="main-menu-two__support-text"> <span class="icon-contact"></span> Support
                        </p>
                        <h5 class="main-menu-two__support-number"><a href="tel:1212345678900">+12 (123) 456
                                78900</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
 
