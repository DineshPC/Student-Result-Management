<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{URL('/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{URL('/dist/css/adminlte.min.css')}}">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('layouts.header')

    
    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{URL('/dist/img/AdminLTELogo.png')}}" alt="School Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8">
    <span class="brand-text font-weight-light">SRMS</span>
  </a>
<!-- Sidebar -->
@include('layouts.sidebar')
<!-- /.sidebar -->
</aside>
  
<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->
  
@include('layouts.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{URL('/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ URL('/dist/js/adminlte.js') }}"></script>

</body>
</html>
