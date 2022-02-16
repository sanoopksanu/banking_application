


   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <!-- Favicons -->
   <link href="{{asset('assets/user/img/favicon.png')}}" rel="icon">
   <link href="{{asset('assets/user/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- user/vendor CSS Files -->
   <link href="{{asset('assets/user/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />

   <link href="{{asset('assets/user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

   <link href="{{asset('assets/user/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/user/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/user/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/user/vendor/venobox/venobox.css')}}" rel="stylesheet">
   <link href="{{asset('assets/user/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{asset('assets/user/css/style.css')}}" rel="stylesheet">

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">ABC BANK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

      </nav><!-- .nav-menu -->

      @guest
      @if (Route::has('login'))
          <li class="nav-item">
              <a class="get-started-btn scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
      @endif

      @if (Route::has('register'))
          <li class="nav-item">
              <a class="get-started-btn scrollto" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
  @else


  <li> <a class="get-started-btn scrollto" href="{{ route('user') }}">Profile</a></li>
          <li><a  class="get-started-btn scrollto"  href="{{ route('logout') }}"
            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"> Logout</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          {{-- </div> --}}

  @endguest
    </div>
<br>

<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

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

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>

  </header>



  <script src="{{asset('assets/user/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/user/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/user/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/user/js/main.js')}}"></script>


























