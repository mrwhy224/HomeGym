@isset($pageConfigs)
  {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
  $configData = Helper::appClasses();
@endphp

@isset($configData['layout'])
  @include(
      $configData['layout'] === 'horizontal'
          ? 'vuexy.layouts.horizontalLayout'
          : ($configData['layout'] === 'blank'
              ? 'vuexy.layouts.blankLayout'
              : ($configData['layout'] === 'front'
                  ? 'vuexy.layouts.layoutFront'
                  : 'vuexy.layouts.contentNavbarLayout')))
@endisset
