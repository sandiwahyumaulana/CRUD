@extends('layouts.landing')

@section('content')
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
              <div class="icon"><i class="fas fa-heart"></i></div>
              <h4><a href="{{ route('weddingFoto')}}">Foto Wedding</a></h4>
              <p>Foto wedding adalah foto pada sesi pernikahan antara lain foto engagement, foto akad, foto temu manten,foto unduh mantu,foto resepsi.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="{{ route('potraitFoto')}}">Foto Potrait</a></h4>
              <p>Foto potrait adalah tehnik fotografi yang menangkap gambar orang sebagai subjek foto secara dekat atau dengan latar belakang blur atau berbeda. Namun potrait juga sering digunakan saat ini untuk berbagai macam gaya.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-house-door"></i></div>
              <h4><a href="{{ route('studioFoto')}}">Foto Studio</a></h4>
              <p>Foto Studio adalah foto di indoor dengan tema tertentu dan dengan konsep yang berbeda</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book-fill"></i></div>
              <h4><a href="{{ route('komersialFoto')}}">Foto Komersial</a></h4>
              <p>Adalah jasa foto dokumentasi untuk keperluan iklan ,acara besar, dan sebagainya</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-stars"></i></div>
              <h4><a href="{{ route('cosplayFoto')}}">Foto Cosplay</a></h4>
              <p>Foto Cosplay (Costum Play) adalah foto potrait bertamakan kostum karakter animasi atau superhero yang diperagakan dan dikonsep sesuai cerita karakter.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-dice-6-fill"></i></div>
              <h4><a href="{{ route('groupFoto')}}">Foto Group</a></h4>
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
                <h4>Lokasi</h4>
                <p>Tamiajeng-Trawas-Mojokerto</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email</h4>
                <p>sanophotography99@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Nomor</h4>
                <p>+62 813-5778-9853</p>
              </div>

              <div class="phone">
                <i class="bi bi-whatsapp"></i>
                <h4>WhatsApp</h4>
                <p>
                <a target="_blank" href="https://wa.me/6281233424503?text=Hallo maaf menganggu waktunya saya mau bertanya tentang PhotoSano kak ?">Klik Disini</a>
                </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.228960453114!2d112.59881361450756!3d-7.658514077904261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877a352659e73%3A0x7086bf23b6a8729b!2sSano%20Studio!5e0!3m2!1sid!2sid!4v1638761653370!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0" allowfullscreen></iframe>
      </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection
