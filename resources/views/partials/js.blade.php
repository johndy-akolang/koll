@if (env('APP_ENV') == 'local')
  {{-- javascript vendor --}}
  <script src="{{ asset('/js/vendor/jquery.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/vendor/bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/vendor/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/vendor/jquery.etalage.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/vendor/modernizr.custom.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/vendor/jquery.pageparser-0.1.2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/vendor/dropzone.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/vendor/jquery.maskMoney.js') }}" type="text/javascript"></script>

  {{-- javascript --}}
  <script src="{{ asset('/js/cbp-horizontal-menu.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/global.js') }}" type="text/javascript"></script>
@elseif (env('APP_ENV') == 'prod')
  <script src="{{ asset('/js/vendor/vendor.min.js')}}" charset="utf-8"></script>
  <script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>
@endif
