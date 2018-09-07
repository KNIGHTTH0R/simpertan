<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('layouts.head')
  </head>
  <body>
    @yield('content')
    <!-- Plugin Javascript -->
    <script src="{{ asset('/admin/vendors/js/vendor.bundle.base.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/vendors/js/vendor.bundle.addons.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/js/off-canvas.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/js/misc.js') }}" type="text/javascript"></script>
  </body>
</html>
