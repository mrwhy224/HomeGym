@php
  $configData = Helper::appClasses();
  $isFront = true;
@endphp

@section('layoutContent')
  @extends('vuexy/layouts/commonMaster')

  @include('vuexy/layouts/sections/navbar/navbar-front')

  <!-- Sections:Start -->
  @yield('content')
  <!-- / Sections:End -->

  @include('vuexy/layouts/sections/footer/footer-front')
@endsection
