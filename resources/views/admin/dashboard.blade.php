<!DOCTYPE html>
<html lang="en">
          <!-- Main head -->
          @include('admin.layouts.head')
          <!-- End head -->
      <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            <!-- Main navbar -->
          @include('admin.layouts.navbar')
            <!-- End navbar -->

            <!-- Main sidebar -->
          @include('admin.layouts.sidebar')
            <!-- End sidebar -->

            <!-- Main content -->
          @include('admin.layouts.content')
            <!-- End content -->

            <!-- Main Footer -->
          @include('admin.layouts.footer')
            <!-- End Footer -->

        </div>
            <!-- Main scripts -->
          @include('admin.layouts.scripts')
            <!-- End scripts -->
      </body>
</html>
