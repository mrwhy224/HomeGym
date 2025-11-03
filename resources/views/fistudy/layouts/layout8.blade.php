<!DOCTYPE html>
<html lang="en">

<x-head css='{!! isset($css) ? $css : "" !!}'/>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . 'custom-cursor"' : 'class="custom-cursor"'); ?>>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-menu__top">
                <div class="container">
                    <div class="main-menu__top-inner">
                        <ul class="list-unstyled main-menu__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="icon-email"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:support@example.com">support@example.com</a>
                                    </p>
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
            <x-menuList6/>
        </header>

    @yield('content')
    

    <x-loader/>
    <x-scripts/>

</body>

</html>