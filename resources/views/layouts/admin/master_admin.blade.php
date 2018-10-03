<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('layouts.head')
    @stack('header.style')
  </head>
  <body>
    <div class="container-scroller">
      @include('layouts.navbar')

      <div class="container-fluid page-body-wrapper">
        @include('layouts.admin.sidebar')
        <div class="main-panel">
          @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('/admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('/admin/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('/admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/admin/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('/admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->

    @stack('footer.javascript')
  </body>
</html>
