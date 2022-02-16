<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">ABC Bank  </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>




        </ul>
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


          <li><a  class="get-started-btn scrollto"  href="{{ route('logout') }}"
            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"> Logout</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          {{-- </div> --}}

  @endguest
    </div>
  </header>