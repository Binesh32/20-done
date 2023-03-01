<!doctype html>
<html class="no-js" lang="en">


<head>
    @include('includes.head')
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">
    
    <!-- Header Top Start -->
    @include('includes.header')
    
    <!-- Header Top End -->
    
   @yield('content')
    
    <!-- Footer Top Section Start -->
    @include('includes.footer')
    <!-- Footer Bottom Section End -->
    
</div>


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- ycp JS -->
<script src="assets/js/ycp.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>


</html>