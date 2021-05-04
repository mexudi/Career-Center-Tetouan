<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
	<link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <link href="/css/style.css" rel="stylesheet">
  
 
</head>
<body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Career Center</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/home/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/participation/create')}}">Participation</a></li>
          <li><a class="nav-link scrollto " href="{{url('/feedback/create')}}">Feedback</a></li>
          <li><a class="nav-link scrollto" href="{{url('/#about')}}">About Us</a></li>
          <li><a class="nav-link scrollto" href="{{url('/#services')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{url('/#team')}}">Team</a></li>
          <li><a class="nav-link scrollto" href="{{url('/#contact')}}">Contact</a></li>
          @guest
            @if (Route::has('login'))
              <li><a class="getstarted scrollto"  href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @endif
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
          @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
        <div class="container" style=" margin-top: 100px; margin-bottom: 100px;">
                @yield('content')
        </div>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top" style="background-image: linear-gradient(to right top, #25cbd3, #1fc6de, #32c1e6, #4cbaeb, #66b3ec, #8aaef7, #b4a6f7, #dd9ceb, #ff8fc9, #ff9291, #ffae50, #f9d507);">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-10 footer-contact">
            <h3>Career Center</h3>
            <p>
              tétouan shore, Tétouan 93000, Maroc <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-10 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right c"></i> <a href="#">Me Connaitre</a></li>
              <li><i class="bx bx-chevron-right e"></i> <a href="#">Expolrer</a></li>
              <li><i class="bx bx-chevron-right p"></i> <a href="#">Me Preparer</a></li>
              <li><i class="bx bx-chevron-right l"></i> <a href="#">Me Lancer</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-10 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bx bxl-facebook" style="color: while;"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    
  </footer><!-- End Footer -->
  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>



</body>
</html>
