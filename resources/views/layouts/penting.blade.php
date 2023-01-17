<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin PhotoSano</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('foto/sano.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('adminsano/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminsano/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('adminsano/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminsano/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('adminsano/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('adminsano/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('adminsano/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('adminsano/assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    @yield('css')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


<!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Apasih Fotografer itu?</h3>
              <p>
                Sebutan bagi para pekerja yang memberikan jasa fotografi untuk berbagai tujuan. Ada yang menawarkan jasa foto komersial secara langsung, yakni fotografer memotret lalu dibayar.
              </p>
              <div class="text-center">
                <a target="_blank" href="https://campus.quipper.com/careers/fotografer" class="more-btn">Baca Yuk <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Jadwal Agenda</h4>
                    @foreach($agenda as $dt)
                    <p>{{ $dt->tanggal_agenda}}</p>
                    <hr>
                    @endforeach
                  </div>
                </div>               
              </div>
            </div><!-- End .content-->
          </div>
        </div>

        

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <img src="{{ asset('foto/sano.png') }}" class="play-btn"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>PhotoSano</h3>
            <p>Sejalan dengan kemajuan tegnologi informasi tersebut kebutuhan masyarakat akan kemudahan akses pada suatu informasi meningkat, baik dari faktor pelayanan yang mencakup kecepatan, kerapian, keakuratan dan ketelitian maupun segala kemudahan lainnya. Fotografi adalah suatu kombinasi yang mengagumkan antara seni dan ilmu pengetahuan.Tergantung pada tekhnologi kamera, lensa, cahaya dan film tapi juga membutuhkan potensi kreatif dari penggunaannya untuk menciptakan suatu gambar yang biasa menjadi menarik dan informatif, seiring perkembangan jaman dan kebutuhan manusia, maka perkembangan kamera di Indonesia bermula dari keperluan praktis berkembang menjadi keperluan teknis dan seni. Banyaknya permintaan masyarakat untuk mendokumentasikan momen penting dalam bentuk foto, membuat bisnis photo studio berkembang. Apalagi, sekarang, teknologi kamera digital semakin maju dan harga kamera semakin murah.PhotoSano adalah sebuah badan usaha yang bergerak dalam penyediaan jasa untuk melakukan dokumentasi seperti pernikahan,potrait,komersial,ataupun produk. PhotoSano beralamat di pertokoan gedengan desa Tamiajeng kecamatan Trawas Kabupaten Mojokerto. Adapun masalah yang terjadi pada PhotoSano yaitu kurangnya informasi bagi konsumen yang akan memesan jasa dan seringnya mengalami kesulitan dalam proses penentuan harga dikarenakan hubungan kekerabatan masih menjadi bahan pertimbangan yang mengakibatkan kurang konsistennya pembayaran penuh. Sementara PhotoSano harus membayar penuh biaya kepada tiap tim yang terlibat, pencatatan atau administrasi yang masih menggunakan buku tulis dan lambatnya proses pembuatan laporan</p>


          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Jasa</h2>
          <p>setiap tindakan atau kegiatan yang dapat ditawarkan oleh satu pihak kepada pihak lain, pada dasarnya bersifat intangible (tidak berwujud fisik) dan tidak mengakibatkan kepemilikan sesuatu. Produksi jasa bisa berkaitan dengan produk fisik atau sebaliknya.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">Foto Preweeding</a></h4>
              <p>Foto wedding adalah foto pada sesi pernikahan antara lain foto engagement, foto akad, foto temu manten,foto unduh mantu,foto resepsi.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Foto Potrait</a></h4>
              <p>Foto potrait adalah tehnik fotografi yang menangkap gambar orang sebagai ssssubjek foto secara dekat atau dengan latar belakang blur atau berbeda \. Namun potrait juga sering digunakan saat ini untuk berbagai macam gaya.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Foto Studio</a></h4>
              <p>Foto Studio adalah foto di indoor dengan tema tertentu dan dengan konsep yang berbeda</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">Foto Komersial</a></h4>
              <p>Adalah jasa foto dokumentasi untuk keperluan iklan ,acara besar, dan sebagainya</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Foto Cosplay</a></h4>
              <p>Foto Cosplay (Costum Play) adalah foto potrait bertamakan kostum karakter animasi atau superhero yang diperagakan dan dikonsep sesuai cerita karakter.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Foto Group</a></h4>
              <p>Foto Grup adalah foto dengan jumlah orang lebih dari 5 orang biasanya foto grub di pakai untuk foto buku tahunan seklah atau lainnya</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="galeri" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Galeri</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/weeding.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/weeding.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/pot.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/pot.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/kom1.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/kom1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>          

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/pot2.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/pot2.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/cos1.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/cos1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/grub1.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/grub1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/pot1.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/pot1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('foto/2.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset('foto/2.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Hubungi Kami</h2>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">
          
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi :</h4>
                <p>Tamiajeng-Trawas-Mojokerto</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>sano@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Nomor:</h4>
                <p>+62 896 8829 3611</p>
              </div>

              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>WhatsApp :</h4>
                <p>
                <a target="_blank" href="https://wa.me/6281233424503?text=Hallo maaf menganggu waktunya saya mau bertanya tentang PhotoSano kak ?">Klik Disini</a>
                </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Masukkan Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
