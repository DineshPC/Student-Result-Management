<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{URL('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{URL('/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL('/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL('/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{URL('/plugins/summernote/summernote-bs4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('layouts.header')

    
    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{URL('/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8">
    <span class="brand-text font-weight-light">SRMS</span>
  </a>
<!-- Sidebar -->
@include('layouts.sidebar')
<!-- /.sidebar -->
</aside>
  
  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->
  
  @yield('content')
  
  @include('layouts.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL('/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
ChartJS
<!-- <script src="{{URL('/plugins/chart.js/Chart.min.js')}}"></script> -->
<!-- Sparkline -->
<!-- <script src="{{URL('/plugins/sparklines/sparkline.js')}}"></script> -->
<!-- JQVMap -->
<!-- <script src="{{URL('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="{{URL('/plugins/jquery-knob/jquery.knob.min.js')}}"></script> -->
<!-- daterangepicker -->
<!-- <script src="{{URL('/plugins/moment/moment.min.js')}}"></script> -->
<!-- <script src="{{URL('/plugins/daterangepicker/daterangepicker.js')}}"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="{{URL('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script> -->
<!-- Summernote -->
<!-- <script src="{{URL('/plugins/summernote/summernote-bs4.min.js')}}"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="{{URL('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script> -->
<!-- AdminLTE App -->
<script src="{{ URL('/dist/js/adminlte.js') }}"></script>

</body>
</html>
