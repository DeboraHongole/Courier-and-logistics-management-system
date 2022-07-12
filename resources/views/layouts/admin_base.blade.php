<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="icon" href="{{ asset('assets/dist/img/photo1.png') }}"/>
  @yield('css')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
 
</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Preloader 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
-->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
      </li>
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-2">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
     <!-- <img src="{{ asset('assets/dist/img/nunu.jpg') }}" alt="Nunuget Logo" class="brand-image img-circle elevation-3" style="opacity: .8">  Brand Logo --> 
      <span class="brand-text font-weight-light">Cargo System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          <i class="fa fa-circle text-success" style="font-size:10px;"></i>
          <span style="color:white; font-size:12px;">Online</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library  -->
          <li class="nav-item">
           

            <li class="nav-item ">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Manage Destination
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.view_country') }}" class="nav-link">
                    <i class="nav-icon fas fa-plus-circle"></i>
                    <p>Add/View Country</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.view_regions') }}" class="nav-link ">
                    <i class="nav-icon fas fa-duotone fa-plus-circle"></i>
                    <p>Add/View Region</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link ">
                    <i class="nav-icon fas fa-duotone fa-plus-circle"></i>
                    <p>Add/View City</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Manage Shiping
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="" class="nav-link ">
                    <i class="nav-icon fas fa-duotone fa-plus-circle"></i>
                    <p>Add/View Shipment</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas fa-eye"></i>
                    <p>Shipment Detail</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Manage Warehose
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="" class="nav-link ">
                    <i class="nav-icon fas fa-duotone fa-plus-circle"></i>
                    <p>Add/View Warehose</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                Manage Users
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="" class="nav-link ">
                    <i class="nav-icon fas fa-duotone fa-user"></i>
                    <p>Add/View Users</p>
                  </a>
                </li>
                
              </ul>
            </li>

              <li class="nav-header">Account</li>
              <li class="nav-item">
               <a href="" class="nav-link">
                <i class="nav-icon fas fa-user text-info"></i>
                 <p class="text">Profile</p>
               </a>
             </li>
             <li class="nav-item">               
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('log').submit();" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Log Out</p>
              </a>
            </li>
            <form id="log" method="POST" action="{{ route('logout') }}" style="display: none;">
              @csrf														
          </form>	
            
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  

  <section class="content">
      @yield('content')
  </section>

 

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2028 <a href="">Cargo Management System</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer> 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield('js')
</body>
</html>
