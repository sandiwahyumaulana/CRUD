 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PhotoSano</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <!-- Remember to include jQuery :) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <!-- jQuery Modal -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

      <!-- Favicons -->
      <link href="{{ asset('foto/sano.png') }}" rel="icon">
      <link href="{{ asset('sano/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="{{ asset('sano/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('sano/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
      <link href="{{ asset('sano/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('sano/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('sano/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('sano/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
      <link href="{{ asset('sano/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
      <link href="{{ asset('sano/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('sano/assets/css/style.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">        

        <!-- ======= Header ======= -->
          <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
              <a href="{{ url('/') }}"><h1 class="logo me-auto">PhotoSano</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

              <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                  <li><a href="/">Beranda</a></li>
                  <li><a href="https://wa.me/6281233424503?text=Hallo maaf menganggu waktunya saya mau bertanya tentang PhotoSano kak ?">Hubungi Kami</a></li>
                  <a class="nav-link scrollto">
                    @if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                <!-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif -->
                            @endauth
                        
                    @endif
                </a>
              <!-- Authentication Links -->
              </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
            </div>
          </header><!-- End Header -->

          <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>PhotoSano</h1>
      <h2>Abadikan Seluruh Moment Anda Bersama Kami</h2>
     
    </div>
  </section><!-- End Hero -->

  <main id="main">
    
        @yield('content')


     <!-- ======= Footer ======= -->
    <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PhotoSano</h3>
            <p>
              Tamiajeng, KP 61375<br>
              Trawas, Mojokerto<br>
              Indonesia <br><br>
              <strong>Nomor:</strong> +62 813-5778-9853<br>
              <strong>Email:</strong> sanophotography99@gmail.com<br>
            </p>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Jasa / Pelayanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/wedding/foto">Foto Wedding</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/potrait/foto">Foto Potrait</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/studio/foto">Foto Studio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/komersial/foto">Foto Komersial</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/cosplay/foto">Foto Cosplay</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/group/foto">Foto Group</a></li>
            </ul>
          </div>
        </div>
      </div>
        </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>PS</span></strong>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    </main><!-- End #main -->
      <!-- Vendor JS Files -->
      <script src="{{ asset('sano/assets/vendor/purecounter/purecounter.js') }}"></script>
      <script src="{{ asset('sano/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('sano/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('sano/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('sano/assets/vendor/php-email-form/validate.js') }}"></script>

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
      <!-- Template Main JS File -->
      <script src="{{ asset('sano/assets/js/main.js') }}"></script>
    </body>
</html>
