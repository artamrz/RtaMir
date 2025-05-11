<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-0" style="--bs-bg-opacity: .7;" aria-label="Main navbar">
    <div class="container px-4">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/rtamir-logo-white.png') }}" alt="RtaMir Logo" width="120" height="70">
        </a>
        
        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left-aligned navigation menu -->
            <ul class="navbar-nav me-auto">
               
            </ul>

            <!-- Right-aligned authentication menu -->
            <ul class="navbar-nav ms-auto">
                <!--<li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>-->
                <li class="nav-item fw-bold">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="/services">Services</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link {{ Request::is('rlog') ? 'active' : '' }}" href="/rlog">Rlog</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About RtaMir</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Get In-touch</a>
                </li>
                <!--@auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-orange px-4" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end nav-btn-purple" aria-labelledby="userDropdown">
                            @if(Auth::user()->role === 'admin')
                                <li><a class="dropdown-item text-light rounded-3" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                <li><a class="dropdown-item text-light rounded-3" href="{{ url('/posts') }}">Manage Posts</a></li>
                            @else
                                <li><a class="dropdown-item text-light rounded-3" href="{{ route('dashboard') }}">Dashboard</a></li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-light rounded-3">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#LoginModal">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth-->
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog bg-dark text-light">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="POST" action="{{ route('login') }}">
               @csrf

                  <div class="row mb-3">
                      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                            @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                      <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                         <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                  <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                   </label>
                            </div>
                        </div>
                      </div>

                      <div class="row col-md-12">
                          <div class="col-md-6">
                              <button type="submit" class="btn btn-orange w-100">
                                      {{ __('Login') }}
                              </button>
                          </div>
                          @if (Route::has('password.request'))
                          <div class="col-md-6">
                              <a class="btn btn-outline-light w-100" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                              </a>
                          </div>      
                          @endif
                        
                      </div>
            </form>
      </div>
      <div class="modal-footer justify-content-center">
        <h3 class="modal-title fs-5 text-center">Or You Can Join Me Here</h3>
        <a class="btn btn-modal-purple w-100" href="{{ route('register') }}">Register</a>
      </div>
      </div>
    </div>
  </div>
</div>