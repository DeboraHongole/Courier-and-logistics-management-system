<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shipping System</title>
  <link rel="icon" href="{{ asset('assets/dist/img/photo1.png') }}"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
  @yield('css')
</head>
<body style=" " class="hold-transition sidebar-collapse layout-top-nav">
  <div class="wrapper">
      <div class="col-12 col-lg-12">
                   
          <nav class="navbar navbar-expand navbar-info navbar-dark" >
                      <!-- Left navbar links  background: url({{ asset('assets/dist/img/photo1.png') }})-->
              <ul class="navbar-nav">
                        <li class="nav-item d-none d-sm-inline-block">
                          <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                          <a href="#" class="nav-link">Contact</a>
                        </li>
              </ul>

                      <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                          <a class="nav-link" data-toggle="dropdown" href="#">
                            Login <i class="fa fa-light fa-user"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                              <div class="login-box">
                                  <div class="card">
                                    <div class="card-body login-card-body">
                                      <p class="login-box-msg">Sign in to start your session</p>
                                      <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                          <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                        
                                          <div class="input-group-append">
                                            <div class="input-group-text">
                                              <span class="fas fa-envelope"></span>
                                            </div>
                                          </div>
                                          
                                        </div>
                                        <div class="input-group mb-3">
                                          <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">          
                                          <div class="input-group-append">
                                            <div class="input-group-text">
                                              <span class="fas fa-lock"></span>
                                            </div>
                                          </div>
                                          
                                          
                                        </div>
                                        @error('email')<div style="color: red;">{{ $message }}</div>@enderror
                                          @if ($message = Session::get('error'))
                                            <div style="color: red;">{{ $message }}</div>
                                          @endif
                                        <div class="row">
                                          <div class="col-8">
                                            <div class="icheck-primary">
                                              <input type="checkbox" name="remember" id="remember">
                                              <label for="remember">
                                                Remember Me
                                              </label>
                                            </div>
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-4">
                                            <button type="submit" class="btn btn-info btn-block">Sign In</button>
                                          </div>
                                          <!-- /.col -->
                                        </div>
                                      </form>
                                
                                  
                                      <!-- /.social-auth-links -->
                                
                                      <p class="mb-1">
                                        <a href="{{ route('password.request') }}">I forgot my password</a>
                                      </p>
                                    
                                    </div>
                                    <!-- /.login-card-body -->
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                          </a>
                        </li>
                       
              </ul>
          </nav>


                     <!-- /.card -->
         
      @yield('content')


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


@yield('js')
</body>
</html>
