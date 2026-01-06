<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views.
    | We will add your theme paths here.
    |
    */

    'paths' => [
        // 1. Path for your Vuexy admin panel
        // Laravel will look here first.
		resource_path('views/vuexy'),
		resource_path('views/emails'),

		// 2. Path for your user-facing website theme
        // It will look here second.
        resource_path('views/fistudy'),

        // 3. The default path (we can leave it or comment it out)
        // resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates
    | will be stored for your application. This is the default.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
