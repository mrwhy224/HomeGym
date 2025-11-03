<!DOCTYPE html>
<html lang="en">

<x-head/>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . 'custom-cursor"' : 'class="custom-cursor"'); ?>>
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <header class="main-header-two">
            <x-menuList3/>
        </header>

        @yield('content')

    <x-loader/>

   <x-scripts/>

</body>

</html>