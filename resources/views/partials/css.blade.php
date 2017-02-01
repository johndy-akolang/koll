@if (env('APP_ENV') == 'local')
    {{-- css vendor --}}
    <link href="{{ asset('/css/vendor/font-awesome.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('/css/vendor/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/nivo-slider.default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/etalage.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/dropzone.css') }}" rel="stylesheet"> -->

    {{-- css style --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
@elseif (env('APP_ENV') == 'prod')
    <link rel="stylesheet" href="{{ asset('/css/vendor/vendor.min.css') }}" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/css/app.min.css') }}" charset="utf-8">
@endif
