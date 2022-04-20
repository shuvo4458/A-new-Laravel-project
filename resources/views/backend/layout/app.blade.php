
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Dashboard</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{asset('backend/css/plugins/fontawesome-free/css/all.min.css')}}">


<link rel="stylesheet" href="{{asset('backend/css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/css/plugins/jqvmap/jqvmap.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/css/dist/css/adminlte.min.css?v=3.2.0')}}">

<link rel="stylesheet" href="{{asset('backend/css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/css/plugins/daterangepicker/daterangepicker.css')}}">

<link rel="stylesheet" href="{{asset('backend/css/plugins/summernote/summernote-bs4.min.css')}}">

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class = "navbar-nav">
<li class = "nav-item">
<a  class = "nav-link" data-widget = "pushmenu" href = "#" role = "button"><i class = "fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">

<div class="media">
<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
<img src="dist/img/AdminLTELogo.png" alt="CozaStore Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">CozaStore</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
 <a href="#" class="d-block">Admin</a>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">
<a href="{{route('product.index')}}" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
    Product
</p>
</a>
</li>

<li class="nav-item">
<a href="pages/widgets.html" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Widgets
<span class="right badge badge-danger">New</span>
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Layout Options
<i class="fas fa-angle-left right"></i>
<span class="badge badge-info right">6</span>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="pages/layout/top-nav.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Top Navigation</p>
</a>
</li>
<li class="nav-item">
<a href="pages/layout/top-nav-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Top Navigation + Sidebar</p>
</a>
</li>
<li class="nav-item">
<a href="pages/layout/boxed.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Boxed</p>
</a>
</li>
<li class="nav-item">
<a href="pages/layout/fixed-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Sidebar</p>
</a>
</li>
<li class="nav-item">
<a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Sidebar <small>+ Custom Area</small></p>
</a>
</li>
<li class="nav-item">
<a href="pages/layout/fixed-topnav.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Navbar</p>
</a>
</li>
 <li class="nav-item">
<a href="pages/layout/fixed-footer.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Footer</p>
</a>
</li>
<li class="nav-item">
<a href="pages/layout/collapsed-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Collapsed Sidebar</p>
</a>
</li>
</ul>
</li>

</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

    @yield('content')


</div>

<footer class="main-footer">
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 3.2.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="{{asset('backend/css/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('backend/css/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('backend/css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('backend/css/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('backend/css/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{asset('backend/css/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/css/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('backend/css/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('backend/css/plugins/moment/moment.min.js')}}"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<script src="{{asset('backend/css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('backend/css/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('backend/css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('backend/css/dist/js/adminlte.js?v=3.2.0')}}"></script>

<script src="{{asset('backend/css/dist/js/demo.js')}}"></script>

<script src="{{asset('backend/css/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
