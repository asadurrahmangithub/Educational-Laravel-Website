<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard {{$pageHeader->meta_keyword}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset($pageHeader->icon)}}" />
</head>
<body>
<div class="container-scroller">
    @include('admin.include.left-sitebar')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.include.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('admin.include.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('adminAssets')}}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('adminAssets')}}/assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('adminAssets')}}/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{asset('adminAssets')}}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{asset('adminAssets')}}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('adminAssets')}}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('adminAssets')}}/assets/js/off-canvas.js"></script>
<script src="{{asset('adminAssets')}}/assets/js/hoverable-collapse.js"></script>
<script src="{{asset('adminAssets')}}/assets/js/misc.js"></script>
<script src="{{asset('adminAssets')}}/assets/js/settings.js"></script>
<script src="{{asset('adminAssets')}}/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('adminAssets')}}/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
