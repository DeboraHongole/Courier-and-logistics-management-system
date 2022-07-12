

<!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
                        <!-- Navbar Search -->
                       

                        <li class="nav-item dropdown">
                          <a class="nav-link"  href="{{ route('login') }}">
                             Login <i class="fa fa-light fa-user"></i>
                          </a>
                          
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                          </a>
                        </li>
                       
              </ul>






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
                                          @if ($message = Session::get('error'))
                                          <div style="color: red;">{{ $message }}</div>
                                        @endif
                                        </div>
                                          
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