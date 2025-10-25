@isset($pageConfigs)
  {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

@php
  $configData = Helper::appClasses();

  /* Display elements */
  $customizerHidden = $customizerHidden ?? '';
@endphp

@extends('vuexy/layouts/commonMaster')

@section('layoutContent')
  <!-- Content -->
  @yield('content')
  <!--/ Content -->
@endsection
